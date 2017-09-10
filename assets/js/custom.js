jQuery(function($){
	var insta	=	$("ul.instagram");
	var n_item	=	6;
	
	$.ajax({
		type: "POST",
		url: "/get.php",
		dataType: "json",
		success: function(d){
			var li;
			var a;
			var img;
			var data	= d.data;
			var num 	= data.length;

			if(num >= n_item){num = n_item;}

			for(var i = 0; i < num ; i++){
				a	= $("<a>", {href : data[i]["link"], target : "_blank"});
				img	= $("<img>", {src : data[i]["images"]["low_resolution"]["url"]});
				a.append(img);
				li = $("<li>").append(a);
				insta.append(li);
			}
		}
	});
	
	$(".navigation-top .menu-top-container, .navigation-top .menu-sub-container").append('<img src="http://kanakeno.com/wp-content/themes/twentyseventeen/assets/images/nav-mb-close.png" alt="" class="btn-nav-mb-close">');
	
	toggleSlide().then($(window).fadeThis());

	function toggleSlide(){
		var d = new $.Deferred;
		var toggleWidth = 48 * 16;
				
		/* Off fadeThis() on Mobile */
		if( $(window).width() <= toggleWidth ){
			$(".slide-left").addClass("slide-left-off").removeClass("slide-left");
			$(".slide-right").addClass("slide-right-off").removeClass("slide-right");
			$(".slide-bottom").addClass("slide-bottom-off").removeClass("slide-bottom");
		}else{
			$(".slide-left-off").addClass("slide-left").removeClass("slide-left-off");
			$(".slide-right-off").addClass("slide-right").removeClass("slide-right-off");
			$(".slide-bottom-off").addClass("slide-bottom").removeClass("slide-bottom-off");			
		}
		
		d.resolve();
		return d.promise();
	}
	
	$(".btn-nav-mb").click(function(){
		$(".navigation-top .menu-top-container").fadeIn(400);
		$(".navigation-top .menu-sub-container").fadeIn(400);
		$(".btn-nav-mb-close").fadeIn(400);
		$(".btn-nav-mb").fadeOut(100);
	});
	$(".btn-nav-mb-close").click(function(){
		$(".navigation-top .menu-top-container").fadeOut(400);
		$(".navigation-top .menu-sub-container").fadeOut(400);
		$(".btn-nav-mb-close").fadeOut(400);
		$(".btn-nav-mb").fadeIn(400);
	})
	
});


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-104537001-1', 'auto');
ga('send', 'pageview');