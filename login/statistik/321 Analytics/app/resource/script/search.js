$(".search_input").on("keyup", function()
{
	$(".search_element").each(function()
	{
		if ($(this).attr("search_value").indexOf($(".search_input").val().toLowerCase()) >= 0 || $(".search_input").val().toLowerCase().length < 3 || $(".search_input").val().toLowerCase() == $(".search_input").attr("default").toLowerCase())
		{
			$(this).show();
		}
		else
		{
			$(this).hide();
		}
	});
});