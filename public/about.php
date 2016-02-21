<!DOCTYPE html>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
		<title>About Game</title>
		<link rel="stylesheet" href="tyyli.css" type="text/css">
		<script src="script.js" type="text/javascript"></script>
	</head>
	<body onload="setActive();">
		<div id="container">
		<?php include 'navbar.php';?>
		</div>
		<div id="footer">
			<p>&copy; Dword</p>
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