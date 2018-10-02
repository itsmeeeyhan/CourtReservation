function button(arg) {
	var button = $(arg);

	if(button.val() == "Open")
		button.attr('value', 'Close');
	else
		button.attr('value', 'Open');

}