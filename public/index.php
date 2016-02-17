<!DOCTYPE html>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
		<title>Nursing Snake</title>
		<link rel="stylesheet" href="tyyli.css" type="text/css">
	</head>
	<body>
		<div id="container">
			<?php include 'navbar.php';?>
			<div id="main">
				<canvas id="myCanvas">
				</canvas>
				<script>
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					ctx.fillStyle = "#FF0000";
					ctx.fillRect(30,30,30,75);
				</script>
			</div>
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