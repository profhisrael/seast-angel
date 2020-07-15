<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<title>East Angel ´$ociety - COMING SOON</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Khand:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href="css/icons/css/animation.css" rel='stylesheet' type='text/css'>
	<link href="css/icons/css/fontello.css" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css" type='text/css'>
	<link rel="stylesheet" href="css/style.css" type='text/css'>
	<link rel="stylesheet" href="css/responsive.css" type='text/css'>
</head>
<body class="clouds-bg">


	<script id="vs" type="x-shader/x-vertex">
		varying vec2 vUv;
		void main() {
			vUv = uv;
			gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
		}

	</script>
	<script id="fs" type="x-shader/x-fragment">
		uniform sampler2D map;
		uniform vec3 fogColor;
		uniform float fogNear;
		uniform float fogFar;
		varying vec2 vUv;
		void main() {
			float depth = gl_FragCoord.z / gl_FragCoord.w;
			float fogFactor = smoothstep( fogNear, fogFar, depth );
	
			gl_FragColor = texture2D( map, vUv );
			gl_FragColor.w *= pow( gl_FragCoord.z, 20.0 );
			gl_FragColor = mix( gl_FragColor, vec4( fogColor, gl_FragColor.w ), fogFactor );
		}
	</script>
	<script type="text/javascript" src="js/three.min.js"></script>
	<script type="text/javascript" src="js/detector.js"></script>
	<script type="text/javascript" src="js/clouds-anim.js"></script>
	
	<!-- First Screen -->
	<section class="screen-section section-1">
		<div class="section-inner">
			<header id="site-header">
				<h1 id="site-logo"><img src="images/logo.png" alt="" width="50%"></h1>
				<br><br>
				<!-- To change site subtitle just write any text between <h3>...</h3> -->
				<h3>Coming Soon!!!</h3>
			</header>
		<h1 align="center" style="color:white;">Thank you!</h1>
<h4 align="center" style="color:white;">Thank you for submitting the form. We will contact you soon! </h4>

		
		</div>
	</section>
	
	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.plugin.min.js"></script>
	<script src="js/_config.js"></script>
	<script src="js/curtain-scroll.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/_front.js"></script>

</body>


</html>