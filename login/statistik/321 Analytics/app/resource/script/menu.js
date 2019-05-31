

// Show menu

$("#show_menu").on("click", function()
{
	if ($("#menu").is(":visible"))
	{
		$("#menu").hide("fade",300);
	}
	else
	{
		$("#menu").show("fade",300);
	}
});
