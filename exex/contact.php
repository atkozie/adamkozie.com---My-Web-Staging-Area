<?php include("includes/doc.php"); ?>

<title>Contact</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" >


<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" media="screen" href="./css/mobilemenu.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>
    <meta name="robots" content="noindex, follow">
</head>

<body>

<div id="header">
</div><!--end header-->

<?php include("includes/nav.php"); ?>

<div id="wrapper">

<main class="contact">

<h1>Contact Us</h1>
<hr>

<div id="contacttext">

<p>We are located in the Equinox building in the Fremont neighborhood of Seattle. Visit us by appointment.</p>
<ul class="contact">
<li class="center">ExEx Audio</li>
<li class="center">3414 Fremont Ave N</li>
<li class="center">Seattle, WA 98102</li>
<li class="maplink"><a href="https://www.google.com/maps/place/3414+Fremont+Ave+N,+Seattle,+WA+98103/@47.650066,-122.3516636,17z/data=!3m1!4b1!4m2!3m1!1s0x549015072c2664eb:0x3334a776e8f45467" target="_blank">Map</a></li>
</ul>

<ul class="contact">
<li class="center"><a href="mailto:robert@bysunlight.com">Email us</a></li>
<li class="center"><a href="tel:+19172338857">Call Us</a></li>
</ul>

<hr>

<div id="contactform">

<h2>Make an Inquiry</h2>

<form action="formhandler.php" method="post" id="form">
<fieldset>

<label>Name</label>
<input type="text" name="name" id="name">

<label>Email</label>
<input type="email" name="email" id="email">

<label>Comments</label>
<textarea name="comments" rows="10" id="comments" ></textarea>

<input class="submit" type="submit" name="submit" value="Submit" id="submit">

</fieldset>
</form>

</div><!--end contactform-->

</div><!--end contacttext-->

<div id="map">
<a href="https://www.google.com/maps/place/3414+Fremont+Ave+N,+Seattle,+WA+98103/@47.650066,-122.3516636,17z/data=!3m1!4b1!4m2!3m1!1s0x549015072c2664eb:0x3334a776e8f45467" target="_blank"><img class="map" src="images/exex-audio-fremont-seattle-map.jpg" alt="Fremont Map"></a>


</div><!--end map-->

</main>

</div><!--end wrapper-->

<?php include("includes/footer.php"); ?>

</body>
</html>
