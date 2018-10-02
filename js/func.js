function datenow() {
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1;
			var yyyy = today.getFullYear();

			if(dd<10) {
				dd = '0'+dd
			} 

			if(mm<10) {
				mm = '0'+mm
			} 

			today = mm + '/' + dd + '/' + yyyy;
			document.write(today);
		}
		
		///*nav change color*////
		$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
		});
		
		///////*disable f12 & right-click*///////
		document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
		document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
		document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
	
	var message="Sorry, right-click has been disabled"; 

	function clickIE() {if (document.all) {(message);return false;}} 
	function clickNS(e) {if 
	(document.layers||(document.getElementById&&!document.all)) { 
	if (e.which==2||e.which==3) {(message);return false;}}} 
	if (document.layers) 
	{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
	else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
	document.oncontextmenu=new Function("return false") 