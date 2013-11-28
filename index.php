<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="Instagram Allan da Silva ">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript,Instagram,insta,allan,allan da silva, allan093">
	<meta name="author" content="Allan da Silva">
	<meta charset="UTF-8">
	<title>Insta » Allan</title>
	<link rel="stylesheet" href="http://lokeshdhakar.com/projects/lightbox2/css/lightbox.css">
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<script type='text/javascript' src='http://scripts.marknet.com.br/jquery/jquery-1.7.2.min.js' ></script>
	<script type='text/javascript' src='http://lokeshdhakar.com/projects/lightbox2/js/lightbox-2.6.min.js' ></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.1/TweenMax.min.js"></script>
	<script type='text/javascript' src='js/insta.js' ></script>
	<link rel="stylesheet" href="css/default.css">
	
</head>
	<body>
	<div class="centro">
		<div class="foto-topo"></div>
        <h1 class="txt-logo">Allan da Silva</h1>
		<div id="content">
		<div id="fotos">
			<ul id="instagram">
				
			</ul>
		</div>
		</div>
		<div class="bt" id="bt-next"></div>
		<div class="bt" id="bt-prev"></div>

		<div id="face">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAllanWeb&amp;width=400&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:254px;" allowTransparency="true"></iframe>
		</div>
		<div id="twitter">
			<a class="twitter-timeline" href="https://twitter.com/AllanWeb019" data-widget-id="402399297276104704">Tweets de @AllanWeb019</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



		</div>
	</div>
	<div class="rodape">
	<div class="centro">
		<span>Desenvolvido por:  <a href="https://www.facebook.com/allanilusttre" target="_blanck"> Allan da Silva</a></span>
	</div>
	</div>
		<script>
		$(window).load(function(){
			$('body').css({display:"block", background:"#999 url(img/bg-top.png) top center no-repeat "});
		var logo = $(".foto-topo");
		var txtlogo = $(".txt-logo");

	 	TweenLite.to(logo, 1, {rotationY:360});
	 	TweenLite.to(txtlogo, 1, {css:{top:"60px"},delay:1});

		// $(".foto-topo").mouseover(function(){
		// 	TweenLite.to(logo, 1, {rotationY:360});
		// })
		// $(".foto-topo").mouseleave(function(){
		// 	TweenLite.to(logo, 1, {rotationY:-360});
		// })
	


		$('#instagram').on("mousewheel",function(e){
			e.stopPropagation();
			e.preventDefault();
			e = e.originalEvent;
			
			var d = (e.wheelDelta > 0) ? -1 : 1;
			if(fotoAtual < limit - 3 && d == 1){
			console.log(d);
				fotoAtual++;
				slide();
			}

			if(d < 0 && fotoAtual > 0){
				console.log(d);
				fotoAtual--;
				slide();
			}
		})

		

		
			var imgs = $('.imgs');
			var numFotosLook = imgs.length;
			var fotoAtual = 0;
		
		$('#bt-next').click(function() {
			if(fotoAtual < limit - 3){
				fotoAtual++;
				slide();
			}
		});

		$('#bt-prev').click(function() {
			if(fotoAtual > 0){
				fotoAtual--;
				slide();
			}
		});



		$(document).keyup(function(x) {
				var pos = (x.which);
				console.log(pos);
				if(pos == 39 && fotoAtual < limit - 3 ){
					fotoAtual++;
				slide();
				}
				if(pos==37 && fotoAtual > 0){
					fotoAtual--;
					slide();
				}

			});

		function slide(){
			 var xx = ($('.imgs').eq(fotoAtual).position().left);
			$('#fotos').stop().animate({scrollLeft:xx});
			
		}
		});

		</script>
	</body>
</html>