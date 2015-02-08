<?php
	require_once( 'simple-color-adjuster.php' );

	$simple_color_adjuster = new Simple_Color_Adjuster;

	$color 		= '#F44336';
	$percentage = 10;
	$darken 	= $simple_color_adjuster->darken( $color, $percentage );
	$lighten 	= $simple_color_adjuster->lighten( $color, $percentage );
?>
<html>
	<head>
		<title>Simple Color Adjuster Demo</title>
		<style>
			.wrapper{
				display: inline-block;
				width: 48%;
				vertical-align: top;
			}
			.box{
				content: '';
				display: block;
				width: 150px;
				height: 150px;
			}
		</style>
	</head>
	<body>
		
		<div class="wrapper">
			<h1>Simple Color Adjuster</h1>
			<h4>by <a href="http://fikrirasy.id" target="_blank">Fikri Rasyid</a></h4>

			<h2>Original Color (<?php echo $color; ?>)</h2>
			<div class="box" style="background-color: <?php echo $color; ?>"></div>

			<h2>Darken by <?php echo $percentage; ?>% (<?php echo $darken; ?>)</h2>
			<div class="box" style="background-color: <?php echo $darken; ?>"></div>

			<h2>Lighten by <?php echo $percentage; ?>% (<?php echo $lighten; ?>)</h2>
			<div class="box" style="background-color: <?php echo $lighten; ?>"></div>			
		</div>
		<div class="wrapper">
			<p style="padding-top: 100px;">For comparison, here's how the 10% color adjusments are compiled using SASS' <code>lighten()</code> and <code>darken()</code>:</p>

			<p class="sassmeister" data-gist-id="780896bdab9772f03278" data-height="480" data-theme="tomorrow">
				<a href="http://sassmeister.com/gist/780896bdab9772f03278">Play with this gist on SassMeister.</a>
			</p>
			<script src="http://cdn.sassmeister.com/js/embed.js" async></script>

			<p>Compiled using <a href="http://sassmeister.com" target="_blank">SassMeister</a></p>
		</div>
	</body>
</html>