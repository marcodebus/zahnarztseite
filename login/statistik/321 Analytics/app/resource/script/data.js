var analytics_content = "";

$(".analytics_metric").on("click", function()
{
	$("#loader").show("fade",300);
	$("#analytics_data").hide("fade",300);
	var data = $(this).attr("data");

	window.location.hash = $(this).attr("data");

	load_content();
});


$(".analytics_button").on("click", function()
{
	$("#loader").show("fade",300);
	$("#analytics_data").hide("fade",300);
	var data = $(this).attr("data");

	window.location.hash = $(this).attr("data");

	load_content();
});
  


var dynamic_maps = [];

setInterval(function()
{
	$(".dynamic_line_chart").each(function()
	{ 
		var id = $(this).attr("id");
		var data = {labels: chart_labels[id],series:chart_data[id]};
		new Chartist.Line("#" + id,data,{fullWidth: true,showArea: true});
	}); 

	$(".dynamic_stack_chart").each(function()
	{ 
		var id = $(this).attr("id");
		var data = {labels: chart_labels[id],series:chart_data[id]};
		new Chartist.Bar("#" + id,data,{fullWidth: true,stackBars: true}); 
	}); 

	$(".analytics_dynamic_pie_chart").each(function()
	{ 
		var id = $(this).attr("id");
		var data = {labels: chart_labels[id],series:chart_data[id]};
		new Chartist.Line("#" + id,data);
	}); 

	$(".analytics_page").each(function()
	{ 
			var page_width = $(this).attr("page_width");
			var page_height = $(this).contents().height();
			var holder_width = $(this).closest(".analytics_page_holder").innerWidth();
			var scale = Math.round((holder_width/page_width)*100)/100; 
			var holder_height = Math.round(page_height*scale);
			var page_left = Math.round((holder_width - page_width)/2);
			var page_top = Math.round((holder_height - page_height)/2);

			$(this).css({'position':'absolute','left':page_left + 'px','top':page_top + 'px','width':page_width + 'px','height':page_height + 'px','transform': 'scale(' + scale + ')','-webkit-transform': 'scale(' + scale + ')'});
			$(this).closest(".analytics_page_holder").css({'height':holder_height + 'px'});
	 
	});

	$(".analytics_dynamic_heatmap").each(function()
	{ 
		if ($(this).closest(".analytics_heatmap_holder").is(":visible"))
		{
			var id = $(this).attr("id");
			var radius = 20;
			var blur = 10;

			if (id.indexOf("region") !== -1 || id.indexOf("attention") !== -1)
			{
				radius = 40;
				blur = 40;
			}

			simpleheat(id).data(heatmap_data[id]).max(heatmap_max[id]).gradient({0:'#4c84ff',1:'#fe5461'}).radius(radius,blur).draw();
		}
	}); 

	$(".dynamic_map").each(function()
	{ 
		var id = $(this).attr("id");

		if (!dynamic_maps.includes(id))
		{
			dynamic_maps.push(id);

			var country_data = map_countries[id];
			var marker_data = map_markers[id];

			new jvm.MultiMap(
			{
			    container: $("#" + id),
			    maxLevel: 1,
			    main: 
			    {
				    map: 'world_mill',
					backgroundColor:  "#fff",
					zoomOnScroll: false,
					zoomMax: 16,
					regionsSelectable: false,
					markersSelectable: false,
					regionStyle: { initial: { fill: '#f1f1f1', "fill-opacity": 1, stroke: '#fff', "stroke-width": 0.01, "stroke-opacity": 1}, hover: { "fill-opacity": 1, cursor: 'pointer'}, selected: { fill: 'yellow' }, selectedHover: { }},
					markerStyle: {initial: {fill:'rgba(109,192,64,1)',stroke:'rgba(109,192,64,0.25)',"stroke-width":4,r:2}, hover: {fill:'rgba(109,192,64,1)',stroke:'rgba(109,192,64,0.25)',"stroke-width":4,r:2}},
					markers: marker_data.map(function(h) {return {name: h.name, latLng: h.latLng}}),
					series: {regions: [{values: country_data,scale: ['#f1f1f1', '#fafafb'],normalizeFunction: 'polynomial'}]}
			    }
		  	});
		}
	});

	for (i = 0; i < dynamic_maps.length; i++)
	{
		if ($("#" + dynamic_maps[i]).length == 0)
		{
			dynamic_maps.splice(i,1);
		}
	}

}, 500);


$("body").on("click",".analytics_heatmap_switch .button",function()
{
	console.log("click");
	var heatmap = $(this).attr("target-heatmap");
	var width = $(this).attr("target-width");
	var percentage = Math.floor((width/1440)*100);
	console.log(heatmap);

	$("#heatmap_container").css({'width':percentage + '%'});
	$("#heatmap_container").find(".analytics_page").css({'width':width + 'px'});
	$("#heatmap_container").find(".analytics_page").attr("width",width);
	$("#heatmap_container").find(".analytics_page").attr("page_width",width);
	$(".analytics_heatmap_holder").hide();
	$("#" + heatmap).show();
})






function live_update()
{
	if ($(".analytics_live").length != 0 && analytics_content == "live")
	{	
		$.post((application_url+"/en/post/data/live"),$("#analytics_filters").serialize(),function(data)
		{
			$("#analytics_data").html(data);

			$(".dynamic_live_map").each(function()
			{ 
				var id = $(this).attr("id");

				dynamic_maps.push(id);

				var country_data = map_countries[id];
				var marker_data = map_markers[id];

				new jvm.MultiMap(
				{
				    container: $("#" + id),
				    maxLevel: 1,
				    main: 
				    {
					    map: 'world_mill',
						backgroundColor:  "#fff",
						zoomOnScroll: false,
						zoomMax: 1,
						regionsSelectable: false,
						markersSelectable: false,
						regionStyle: { initial: { fill: '#f1f1f1', "fill-opacity": 1, stroke: '#fff', "stroke-width": 0.01, "stroke-opacity": 1}, hover: { "fill-opacity": 1, cursor: 'pointer'}, selected: { fill: 'yellow' }, selectedHover: { }},
						markerStyle: {initial: {fill:'rgba(109,192,64,1)',stroke:'rgba(109,192,64,0.25)',"stroke-width":4,r:2}, hover: {fill:'rgba(109,192,64,1)',stroke:'rgba(109,192,64,0.25)',"stroke-width":4,r:2}},
						markers: marker_data.map(function(h) {return {name: h.name, latLng: h.latLng}}),
						series: {regions: [{values: country_data,scale: ['#f1f1f1', '#fafafb'],normalizeFunction: 'polynomial'}]}
				    }
			  	});
			});
	    }); 
	}
	setTimeout(function(){ live_update(); }, 3000);
}

live_update();





function load_content()
{
	analytics_content = window.location.hash.replace('#','');;
	console.log(analytics_content);

	if (analytics_content == "")
	{
		analytics_content = "traffic";
		window.location.hash = analytics_content;
	}

	$.post((application_url+"/en/post/data/"+analytics_content),$("#analytics_filters").serialize(),function(data)
	{
		$("#analytics_data").html(data);
		$("#analytics_data").show("fade",300);

		setTimeout(function() { $("#loader").hide("fade",300); }, 500);
    });
}


load_content();





$("body").on("click",".analytics_list_button",function()
{
	$(this).closest(".analytics_box").find(".analytics_list_more").toggle();
});




$(".analytics_filter").on("change", function()
{
	$("#loader").show("fade",300);
	$("#analytics_data").hide("fade",300);

	load_content();
});





$("body").on("click","#copy_code",function()
{
	console.log("click");
	$("#analytics_code").select();
    document.execCommand("copy");
	$("#analytics_code").blur();
});

