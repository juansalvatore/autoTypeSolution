
<!DOCTYPE html>
<html>
<head>
	<title>Animated typing effect using typed js</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
	<style type="text/css">
    h2 {
        color: white;
        font-family: 'Monaco';
        font-size: 25px;
        font-style: normal;
        font-weight: 300;
        line-height: 1.7;
        text-decoration: none;
        text-transform: none;
    }
    .typed-cursor {
      opacity: 1;
      -webkit-animation: blink 0.5s infinite;
      -moz-animation: blink 0.5s infinite;
      animation: blink 0.5s infinite;
    }
    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
    @-webkit-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
    @-moz-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
    .auto-type-element span.block {
        background: black !important;
        padding: 10px;
        z-index: 1;
    }
		.write{
			font-size: 22px;
		}
		.container{
			text-align: center;
		}
	</style>
</head>
<body>

<div class="container auto-type-element">
	<h2><span class=" block"><span class="write"></span></span></h2>
</div>

<script type="text/javascript">
	$(function(){
        $(".write").typed({
          contentType:"html",
          shuffle: false,
          loop:true,
          loopCount:0,
          typeSpeed:100,
          backSpeed:50,
          startDelay:1000,
          backDelay:800,
          showCursor:true,
          cursorChar:"_",
          strings:["Sitios Web 100% Responsive","APPs Mobiles","Construimos Marcas", "Hacemos Marketing", "Y te ayudamos a lanzarte y recorrer juntos el mundo digital",""]
        });
    });


        // jQuery(document).ready(function($)
        // {
        //   jQuery("#el_56ccca4c0e71f").typed({
        //     cursorChar:"_",
        //     contentType:"html",
        //     loop:true,
        //     loopCount:0,
        //     typeSpeed:100,
        //     backSpeed:50,
        //     startDelay:1000,
        //     backDelay:800,
        //     showCursor:true,
        //     strings:["ideas","proyectos","sue\u00f1os"]
        //   });
        // });

</script>

</body>
</html>
