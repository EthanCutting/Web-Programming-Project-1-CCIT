window.onload = function() {
	"use strict";
	var nav = document.getElementById("menu");
	
	nav.onchange = function(){
    	if(nav.value !== "")
		{
       		location.href= nav.value; 
    	}
	};
};