$(document).ready(function(){
	// Set "active" class di Sidebar sesuai dengan page yang sedang dibuka
	var title = $('title').text().toLowerCase();
	var clickedMenu = '.' + title.substr(8);
	
	$(clickedMenu).addClass("active");
});