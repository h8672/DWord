<!DOCTYPE html>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
		<title>Nursing Snake</title>
		<link rel="stylesheet" href="tyyli.css" type="text/css">
		<script src="script.js" type="text/javascript"></script>
		<script>
			function myCanvas() {
				var c = document.getElementById("myCanvas");
				var ctx = c.getContext("2d");
				var img = document.getElementById("source");
				ctx.drawImage(img,0,0,116,162,0,0,116,162);
			}
		</script>
	</head>
	<body onload="myCanvas(),setActive();">
		<div style="display:none;">
			<img id="source" src="images/snake45.png" alt="snake"/>
		</div>
		<div id="container">
			<?php include 'navbar.php';?>
			<div id="main">
				<canvas id="myCanvas">
				</canvas>
			</div>
		</div>
		<div id="footer">
			<p>&copy; DWord</p>
		</div>
		<!--Doorbell-->
		<script type="text/javascript">
			window.doorbellOptions = {
				/*appKey: 'oyzNtrcopyKtjSO29rLYMrVHSalkOPdhkfjvqvXmbKHKEf4HwhiqGrGa7538FU2a'*/
				appKey: 'ws55EnEKJYAVfG0252UFQrQ03Agzr4vBNfJAP23hctIcfuKTW4P1qPhlSAYX2xmF'
			};
			(
				function(d, t) {
					var g = d.createElement(t);
					g.id = 'doorbellScript';
					g.type = 'text/javascript';
					g.async = true;
					g.src = 'https://embed.doorbell.io/button/3136?t='+(new Date().getTime());
					(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g);
				}(document, 'script')
			);
		</script>
	</body>
</html>