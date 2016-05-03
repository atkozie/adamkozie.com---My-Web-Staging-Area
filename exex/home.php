<?php include("includes/doc.php"); ?>

<title>Welcome To ExEx Audio</title>

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

<main>

<h1>Welcome to ExEx (1)</h1>

<p>(2) A brief mission statement of some sort will go here, nothing too long. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
<hr>

<h2>(3) Brief about</h2>

<p>(4) This is a place for a fairly brief overview. The most basic info about the studio should fill this paragraph, as there is an internal "about" page as well. "ExEx Audio is a Seattle recording studio and creative space in the downtown Fremont neighborhood, run by musician-producers Paurl Walsh and Robert Cheek. We are a fully equipped professional recording studio, with two treated isolation rooms and a very large, well tuned control room." Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
<hr>

<div class="half">
<div class="halftext">
<h3>(5) Featured Equipment</h3>
<ul>
<li> Neotek ELAN console</li>
 <li> Dynaudio BM15A reference monitors</li>
 <li>Neumann U67 vintage tube microphone</li>
   <li> 2x BAE Neve 1066 Pre/EQ channel strips</li>
     <li> 2x Chameleon Labs TS2 tube</li>
   <li> Retro Instruments PowerStrip Pre/EQ/Comp</li>
   <li> UA 1176D Compressor clone</li>
    <li> Bryce BG2 Tube Compressor</li>
    <li> Chameleon Labs 7720 Stereo Compressor</li>
   
</ul>
<hr>
<h3>Complete Equipment <a href="equipment.php">List</a></h3>

</div><!--end halftext-->
<div class="halfimage">
<img src="images/exex-audio-rack-left.jpg" alt="Rack Gear" title="Rack Gear"> 
</div><!--end halfimage-->
</div><!--end half-->

</main>

<aside>
<img src="images/exex-audio-booth-door.jpg" alt="Recording Booth" title="Recording Booth"> 
<p>(6) "The boys at ExEx took my terrible music and molded it into a releasable work that even my mother loves. Top-notch turd polishers, those two!"</p><p class="quoted">Jeremy McGee<br>lead bass, Molten Pegasus </p>

<img src="images/exex-audio-u67.jpg" alt="Neumann Microphone">
<p>(7) "What"</p><p class="quoted">Lil John</p>

</aside>



</div><!--end wrapper-->

<?php include("includes/footer.php"); ?>

</body>
</html>
