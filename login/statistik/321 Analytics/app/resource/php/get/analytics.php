<?php 

	Header("content-type: application/x-javascript");

?>


var application_domain = "<?php echo $application_domain; ?>";


/* Functions */

function create_cookie(name,value,days) 
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else 
	{
		var expires = "";
	}

    var host = window.location.hostname;
    var domain = host.substring(host.lastIndexOf(".", host.lastIndexOf(".") - 1) + 1);

	document.cookie = name+"="+value+expires+"; path=/; domain=." + domain;
}


function read_cookie(name) 
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) 
	{
		var c = ca[i];

		while (c.charAt(0) == ' ') 
		{
			c = c.substring(1,c.length);
		}

		if (c.indexOf(nameEQ) == 0) 
		{
			return c.substring(nameEQ.length,c.length);
		}
	}
	return null;
}


function random_string(length, chars) 
{
	var result = '';
	for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
	return result;
} 


function create_id() 
{
	var result = random_string(16, "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
	var date_time = new Date(); 
    result += date_time.getFullYear();
    result += date_time.getMonth();
    result += date_time.getDate();
    result += date_time.getHours();
    result += date_time.getMinutes();
    result += date_time.getSeconds();
	return btoa(result);
}


function create_visitor_visitor_id() 
{
	if (visitor_visitor_id() == null) 
	{	
		create_cookie("visitor_visitor_id",create_id(),3650)
	}
}


function visitor_visitor_id() 
{
	return read_cookie("visitor_visitor_id");
}


function create_visitor_session_id() 
{
	if (visitor_session_id() == "") 
	{
		sessionStorage.setItem("visitor_session_id",create_id());
	}
}


function visitor_session_id() 
{
	return sessionStorage.getItem("visitor_session_id") == null ? "" : sessionStorage.getItem("visitor_session_id");
}


function get_ip()
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET","https://api.ipify.org",false);
    xmlHttp.send(null);
    return xmlHttp.responseText;
}









if (new URL(window.location.href).searchParams.get("321analytics") != "true")
{


	/* Create IDs */

	create_visitor_visitor_id();
	create_visitor_session_id();


	/* Core Variables */

	var analytics_script_location = "<?php echo $application_url . "/" . $_GET["lang"] . "/"; ?>";

	var screen_width = screen.width;
	var screen_height = screen.height;

	var viewport_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var viewport_height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

	var document_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var document_height = document.documentElement.scrollHeight;




	/* Dataset IP */

	var visitor_ip = get_ip();


	/* Dataset IDs */

	var visitor_visitor_id = visitor_visitor_id();
	var visitor_session_id = visitor_session_id();
	var visitor_pageview_id = create_id();


	/* Dataset Enter Time */

	var visitor_enter_time = new Date();


	/* Dataset Referrer */

	var visitor_referrer = document.referrer;


	/* Dataset Page */

	var visitor_url = window.location.href;


	/* Dataset Technology */

	var visitor_resolution = screen_width + "x" + screen_height;
	var visitor_viewport = viewport_width + "x" + viewport_height;
	var visitor_document = document_width + "x" + document_height;


	/* Dataset Scroll */

	var visitor_max_scroll = "";
	var visitor_avg_scroll = "";


	/* Dataset Count */

	var visitor_click_count = 0;
	var visitor_right_click_count = 0;
	var visitor_key_count = 0;


	/* Dataset Heatmap */

	var visitor_scroll_heatmap = {};
	var visitor_mouse_heatmap = {};
	var visitor_click_heatmap = {};


	/* Dataset Click */

	var visitor_clicks = [];
	var visitor_click_elements = [];


	/* Dataset Video */

	var visitor_videos = {};


	/* Dataset Form */

	var visitor_forms = {};


	/* Dataset Input */

	var visitor_inputs = {};


	/* Dataset Select */

	var visitor_selects = {};


	/* Dataset Record */

	var visitor_record_scroll = "";
	var visitor_record_mouse = "";
	var visitor_record_click = "";
	var visitor_record_right_click = "";
	var visitor_record_key = "";
	var visitor_record_viewport = "";
	var visitor_record_document = "";


	/* Dataset Last */

	var visitor_last_scroll = "";
	var visitor_last_mouse = "";
	var visitor_last_click = "";
	var visitor_last_viewport = "";
	var visitor_last_document = "";


	/* Dataset Leave */

	var visitor_leave_url = "";









	/* Helper Variables */

	var current_time = 0;

	var scroll_sum = 0;
	var scroll_count = 0;

	var visitor_enter_sent = false;
	var visitor_leave_sent = false;


	var current_viewport_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var current_viewport_height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	var current_document_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var current_document_height = document.documentElement.scrollHeight;

	var current_viewport = current_viewport_width + "x" + current_viewport_height;
	var previous_viewport = current_viewport_width + "x" + current_viewport_height;

	var current_document = current_document_width + "x" + current_document_height;
	var previous_document = current_document_width + "x" + current_document_height;

	var current_scroll = 0;
	var previous_scroll = 0;

	var current_mouse = "0x0";
	var previous_mouse = "0x0";

	var current_mouse_x = 0;
	var current_mouse_y = 0;
















	/* Visitor Mouse Tracking */

	document.onmousemove = function(event)
	{


		/* Helper Variables */

		current_mouse = event.pageX + "x" + event.pageY;

		current_mouse_x = Math.round(event.pageX/(current_document_width/200));
		current_mouse_y = Math.round(event.pageY/(current_document_height/300));
	}




	/* Visitor Click Tracking */

	document.onclick = function(event)
	{


		/* Dataset Count */

		visitor_click_count += 1;


		/* Dataset Heatmap */

		if ((Math.round(event.pageX/(current_document_width/200)) + "x" + Math.round(event.pageY/(current_document_height/300))) in visitor_click_heatmap)
		{
			visitor_click_heatmap[Math.round(event.pageX/(current_document_width/200)) + "x" + Math.round(event.pageY/(current_document_height/300))] = visitor_click_heatmap[Math.round(event.pageX/(current_document_width/200)) + "x" + Math.round(event.pageY/(current_document_height/300))] + 1;
		}
		else
		{
			visitor_click_heatmap[Math.round(event.pageX/(current_document_width/200)) + "x" + Math.round(event.pageY/(current_document_height/300))] = 1;
		}


		/* Dataset Click */
		
		visitor_clicks.push(Math.round(event.pageX/(current_document_width/200)) + "x" + Math.round(event.pageY/(current_document_height/300)));

		var clicked_element = event.target;
		var clicked_element_outer_html = clicked_element.outerHTML;
		var clicked_element_inner_html = clicked_element.innerHTML;
	  	var clicked_element_inner_html_custom = clicked_element_inner_html.substr(clicked_element_inner_html.search(/</),clicked_element_inner_html.search(/>/) + 1);
	  	clicked_element_inner_html_custom = clicked_element_inner_html.replace(clicked_element_inner_html_custom,"");
	  	clicked_element_inner_html_custom = clicked_element_inner_html_custom.substr(0,20);
		var clicked_element_html = clicked_element_outer_html.replace(clicked_element_inner_html,clicked_element_inner_html_custom).replace(/'/g,'');

		visitor_click_elements.push(clicked_element_html);


		/* Dataset Record */

		visitor_record_click += event.pageX + "x" + event.pageY + "," + current_time + "|";


		/* Dataset Last */

		visitor_last_click = Math.round(event.pageX/(current_document_width/200)) + "x" + Math.round(event.pageY/(current_document_height/300));
	}




	/* Visitor Right Click Tracking */

	document.oncontextmenu = function(event)
	{


		/* Dataset Count */

		visitor_right_click_count += 1;


		/* Dataset Record */

		visitor_record_right_click += event.pageX + "x" + event.pageY + "," + current_time + "|";
	}




	/* Visitor Key Tracking */

	document.onkeypress = function(event)
	{


		/* Dataset Count */

		visitor_key_count += 1; 


		/* Dataset Record */

		visitor_record_key += String.fromCharCode((typeof event.which == "number") ? event.which : event.keyCode) + "," + current_time + "|";
	}










	/* Video Tracking */

	function track_videos_play(event) 
	{
		if (visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["play"] == "")
		{
			visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["play"] = current_time;
		}
	}

	function track_videos_time(event) 
	{
		visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"] += (current_time - (visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["play"] + visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"]));
	}

	function track_videos_completed(event) 
	{
		visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"] += (current_time - (visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["play"] + visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"]));

		visitor_videos[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["completed"] = "true";
	}

	var content_videos = document.getElementsByTagName("video");

	for (i = 0; i < content_videos.length; i++)
	{
	  	content_videos[i].addEventListener("play",track_videos_play,false);
	  	content_videos[i].addEventListener("pause",track_videos_time,false);
	  	content_videos[i].addEventListener("stop",track_videos_time,false);
	  	content_videos[i].addEventListener("ended",track_videos_completed,false);

	  	var video_data = {};
	  	video_data["play"] = "";
	  	video_data["time"] = "";
	  	video_data["completed"] = "";

	  	visitor_videos[content_videos[i].outerHTML.replace(content_videos[i].innerHTML,"").replace(/'/g,'')] = video_data;

	  	video_data = null;
	}








	/* Form Tracking */

	function track_form_edit(event) 
	{
		if (visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] == "")
		{
			visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] = current_time;
		}
	}

	function track_form_time(event) 
	{
		visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"] += (current_time - (visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] + visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"]));
	}

	function track_form_submitted(event) 
	{
		visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"] += (current_time - (visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] + visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"]));

		visitor_forms[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["submitted"] = "true";
	}

	var content_forms = document.getElementsByTagName("form");

	for (i = 0; i < content_forms.length; i++)
	{
	  	content_forms[i].addEventListener("focusin",track_form_edit,false);
	  	content_forms[i].addEventListener("focusout",track_form_time,false);
	  	content_forms[i].addEventListener("submit",track_form_submitted,false);

	  	var form_data = {};
	  	form_data["edit"] = "";
	  	form_data["time"] = "";
	  	form_data["submitted"] = "";

	  	visitor_forms[content_forms[i].outerHTML.replace(content_forms[i].innerHTML,"").replace(/'/g,'')] = form_data;

	  	form_data = null;
	}








	/* Input Tracking */

	function track_input_edit(event) 
	{
		if (visitor_inputs[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] == "")
		{
			visitor_inputs[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] = current_time;
		}
	}

	function track_input_time(event) 
	{
		visitor_inputs[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"] += (current_time - (visitor_inputs[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] + visitor_inputs[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"]));
	}

	function track_input_value(event) 
	{
		visitor_inputs[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["value"] = event.target.value;
	}

	var content_inputs = document.getElementsByTagName("input");

	for (i = 0; i < content_inputs.length; i++)
	{
	  	content_inputs[i].addEventListener("focus",track_input_edit,false);
	  	content_inputs[i].addEventListener("blur",track_input_time,false);
	  	content_inputs[i].addEventListener("keyup",track_input_value,false);

	  	var input_data = {};
	  	input_data["edit"] = "";
	  	input_data["time"] = "";
	  	input_data["value"] = "";

	  	visitor_inputs[content_inputs[i].outerHTML.replace(content_inputs[i].innerHTML,"").replace(/'/g,'')] = input_data;

	  	input_data = null;
	}








	/* Select Tracking */

	function track_select_edit(event) 
	{
		if (visitor_selects[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] == "")
		{
			visitor_selects[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] = current_time;
		}
	}

	function track_select_time(event) 
	{
		visitor_selects[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"] += (current_time - (visitor_selects[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["edit"] + visitor_selects[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["time"]));
	}

	function track_select_value(event) 
	{
		visitor_selects[event.target.outerHTML.replace(event.target.innerHTML,"").replace(/'/g,'')]["value"] = event.target.value;
	}

	var content_selects = document.getElementsByTagName("select");

	for (i = 0; i < content_selects.length; i++)
	{
	  	content_selects[i].addEventListener("focus",track_select_edit,false);
	  	content_selects[i].addEventListener("blur",track_select_time,false);
	  	content_selects[i].addEventListener("change",track_select_value,false);

	  	var select_data = {};
	  	select_data["edit"] = "";
	  	select_data["time"] = "";
	  	select_data["value"] = "";

	  	visitor_selects[content_selects[i].outerHTML.replace(content_selects[i].innerHTML,"").replace(/'/g,'')] = select_data;

	  	select_data = null;
	}








	/* Leave Link Tracking */

	function track_a_href(event) 
	{
	 	visitor_leave_url = event.target.href;
	 	analytics_visitor_leave();
	}

	var content_a_hrefs = document.getElementsByTagName("a");

	for (i = 0; i < content_a_hrefs.length; i++)
	{
	  	content_a_hrefs[i].addEventListener("mousedown",track_a_href,false);
	}












	/* 100ms Tracking */

	window.setInterval(function() 
	{



		/* Helper Variables */

		scroll_sum += current_scroll;
		scroll_count += 1;


		current_viewport_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		current_viewport_height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		current_document_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		current_document_height = document.documentElement.scrollHeight;

		current_viewport = current_viewport_width + "x" + current_viewport_height;
		current_document = current_document_width + "x" + current_document_height;


		current_scroll = Math.round(((document.body.scrollTop || document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight))*100);


		/* Dataset Scroll */

		if (current_scroll > visitor_max_scroll) { visitor_max_scroll = current_scroll; }
		visitor_avg_scroll = Math.round(scroll_sum/scroll_count);


		/* Dataset Heatmap */

		if (current_scroll in visitor_scroll_heatmap)
		{
			visitor_scroll_heatmap[current_scroll] = visitor_scroll_heatmap[current_scroll] + 1;
		}
		else
		{
			visitor_scroll_heatmap[current_scroll] = 1;
		}

		if ((current_mouse_x + "x" + current_mouse_y) in visitor_mouse_heatmap)
		{
			visitor_mouse_heatmap[(current_mouse_x + "x" + current_mouse_y)] = visitor_mouse_heatmap[(current_mouse_x + "x" + current_mouse_y)] + 1;
		}
		else
		{
			visitor_mouse_heatmap[(current_mouse_x + "x" + current_mouse_y)] = 1;
		}


		/* Dataset Record */

		if (current_viewport != previous_viewport)
		{
			visitor_record_viewport += current_viewport + "," + current_time + "|";
		}

		if (current_document != previous_document)
		{
			visitor_record_document += current_document + "," + current_time + "|";
		}

		if (current_scroll != previous_scroll)
		{
			visitor_record_scroll += current_scroll + "," + current_time + "|";
		}

		if (current_mouse != previous_mouse)
		{
			visitor_record_mouse += current_mouse + "," + current_time + "|";
		}


		/* Dataset Last */

		visitor_last_viewport = current_viewport;
		visitor_last_document = current_document;
		visitor_last_scroll = current_scroll;
		visitor_last_mouse = current_mouse;




		/* Reset Helper Variables */

		current_time += 100;

		previous_viewport = current_viewport;
		previous_document = current_document;
		previous_scroll = current_scroll;
		previous_mouse = current_mouse;




	}, 100);














	/* Visitor Enter */

	function analytics_visitor_enter()
	{    
		if (visitor_enter_sent == false) 
		{
			var send_data = "?";


			send_data += "visitor_ip=" + visitor_ip + "&";

			send_data += "visitor_visitor_id=" + visitor_visitor_id + "&";
			send_data += "visitor_session_id=" + visitor_session_id + "&";
			send_data += "visitor_pageview_id=" + visitor_pageview_id + "&";

			send_data += "visitor_referrer=" + visitor_referrer + "&";

			send_data += "visitor_url=" + visitor_url + "&";

			send_data += "visitor_resolution=" + visitor_resolution + "&";
			send_data += "visitor_viewport=" + visitor_viewport + "&";
			send_data += "visitor_document=" + visitor_document;


			var send = new Image(); 
			send.src = analytics_script_location + "get/enter" + send_data;

			visitor_enter_sent = true;
		}
	}



	/* Visitor Update Function */

	function analytics_visitor_update()
	{    
		var send_data = "?";


		send_data += "visitor_visitor_id=" + visitor_visitor_id + "&";
		send_data += "visitor_session_id=" + visitor_session_id + "&";
		send_data += "visitor_pageview_id=" + visitor_pageview_id + "&";

		var visitor_pageview_time = Math.round(((new Date() - visitor_enter_time)/1000)%60);
		send_data += "visitor_pageview_time=" + visitor_pageview_time + "&";

		send_data += "visitor_max_scroll=" + visitor_max_scroll + "&";
		send_data += "visitor_avg_scroll=" + visitor_avg_scroll + "&";

		send_data += "visitor_click_count=" + visitor_click_count + "&";
		send_data += "visitor_right_click_count=" + visitor_right_click_count + "&";
		send_data += "visitor_key_count=" + visitor_key_count + "&";

		send_data += "visitor_scroll_heatmap=" + visitor_scroll_heatmap + "&";
		send_data += "visitor_mouse_heatmap=" + visitor_mouse_heatmap + "&";
		send_data += "visitor_click_heatmap=" + visitor_click_heatmap + "&";

		send_data += "visitor_clicks=" + JSON.stringify(visitor_clicks) + "&";
		send_data += "visitor_click_elements=" + JSON.stringify(visitor_click_elements) + "&";

		send_data += "visitor_videos=" + JSON.stringify(visitor_videos) + "&";

		send_data += "visitor_forms=" + JSON.stringify(visitor_forms) + "&";

		send_data += "visitor_inputs=" + JSON.stringify(visitor_inputs) + "&";

		send_data += "visitor_selects=" + JSON.stringify(visitor_selects) + "&";

		send_data += "visitor_record_viewport=" + visitor_record_viewport + "&";
		send_data += "visitor_record_document=" + visitor_record_document + "&";
		send_data += "visitor_record_scroll=" + visitor_record_scroll + "&";
		send_data += "visitor_record_mouse=" + visitor_record_mouse + "&";
		send_data += "visitor_record_click=" + visitor_record_click + "&";
		send_data += "visitor_record_right_click=" + visitor_record_right_click + "&";
		send_data += "visitor_record_key=" + visitor_record_key + "&";

		send_data += "visitor_last_viewport=" + visitor_last_viewport + "&";
		send_data += "visitor_last_document=" + visitor_last_document + "&";
		send_data += "visitor_last_scroll=" + visitor_last_scroll + "&";
		send_data += "visitor_last_mouse=" + visitor_last_mouse + "&";
		send_data += "visitor_last_click=" + visitor_last_click + "&";

		send_data += "visitor_leave_url=" + visitor_leave_url;


		var send = new Image(); 
		send.src = analytics_script_location + "get/update" + send_data;
	}








	/* Visitor Update 

	window.setInterval(function() 
	{
		analytics_visitor_update();
	 	
	}, 15000); */






	 
	/* Visitor Leave */

	function analytics_visitor_leave()
	{    
		if (visitor_leave_sent == false) 
		{   
			analytics_visitor_update();
			visitor_leave_delay(250);
			visitor_leave_sent = true;
		}
	}




	/* Delay for Unload */

	function visitor_leave_delay(time) 
	{
	    var start = +new Date;
	    while ((+new Date - start) < time);
	}




	/* Call Enter and Leave Functions */

	window.addEventListener('load', function () { analytics_visitor_enter(); });
	window.addEventListener('pagehide', function () { analytics_visitor_leave(); });
	window.addEventListener('beforeunload', function () { analytics_visitor_leave(); });
	window.addEventListener('unload', function () { analytics_visitor_leave(); });

}