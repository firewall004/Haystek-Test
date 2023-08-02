<!DOCTYPE html>
<html lang="en">

<head>
	<title>Haystek - Test</title>
	<link rel="icon" type="image/x-icon" href="https://www.haystek.com/wp-content/uploads/2022/09/haystek_icon-2.png" alt="Haystek Icon">
	<link rel="stylesheet" href="./css/style.css">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="heading">PEOPLE DATA</h1>
			</div>
			<div class="col">
				<button id="nextBtn" onclick="next()">NEXT PERSON</button>
			</div>
		</div>

		<div class="row">
			<div class="col" id="serialNum"></div>
			<div class="col" id="peopleData">
				<div class="row" id="peopleName">
					<span class="data-title">Name: </span>
					<span id="currentName"></span>
				</div>
				<div class="row" id="peopleLocation">
					<span class="data-title">Location: </span>
					<span id="currentLocation"></span>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="./script/index.js"></script>
</body>

</html>