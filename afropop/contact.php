<?php include("includes/doc.php"); ?>

<title>Contact</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" >
</head>

<body>

<?php include("includes/header.php"); ?>

<div id="wrapper">
  <div id="formbox">
   <form action="formhandler.php" method="post">
   Name:<br>
  <input type="text" name="name">
  <br><br>
  Email:<br>
  <input type="text" name="email">
  <br><br>
  <input type="radio" name="sex" value="male" checked> Male
  <br>
  <input type="radio" name="sex" value="female"> Female
  <br><br>
  <input type="checkbox" name="playback" value="CD"> I listen to music on a CD player<br>
  <input type="checkbox" name="playback" value="record"> I listen on a record player<br>
  <input type="checkbox" name="playback" value="radio"> I listen to the radio<br>
  <input type="checkbox" name="playback" value="internet"> I listen over the internet<br>
  <br>
  Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />
  <input type="submit" value="Submit">
</form> 
  </div>
  <!--end formbox-->

<div id="validation">
<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fedison.seattlecentral.edu%2F~akozie02%2Fweb120%2Fafropop-php%2Fcontact.php"><img src="images/html5-valid.png" alt="validated"></a>
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~akozie02%2Fweb120%2Fafropop-php%2Fcss%2Fstyles.css&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en"><img src="images/css3-valid.png" alt="validated"></a>
</div><!--end validation-->

</div>
<!--end wrapper-->
</body>
</html>
