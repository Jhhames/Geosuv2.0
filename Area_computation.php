<?php
   //initialize session
   session_start();

   // Check if the user is logged in, if not then redirect him to a login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location:login.php");
     exit;
   }
?>
<?php include("includes/header.php"); ?>
<?php include("includes/headerf.php"); ?>
<link rel="stylesheet" type="text/css" href="css/content.css">
<body>
<section>
	<div class="mt-5 row">
	<div class="animate text-white top-hero bg-pirmary col-md-12">

	</div>
	</div>
    </section>
    <section>
    <div class="container mt-5">
    <div class="row"> 
    <div class="pt-5 col-md-8 bg-white">
    <h2 class="text-center">Area comaputation in cadastral Surveying</h2>
    <h4 class="text-center">By</h4>
    <hr/>
    <h3 class="author">Dr. J. T. Fadahunsi (Mnis:PhD)</h3>
    <hr/>
    <p><b>INTRODUCTION</b></p>
    <p>There are numbers of important reasons for determining area in cadastral surveying. Some of the reasons include to determine the value of the land and for proper planning on the land.</p>
    <p>In plane surveying, area is considerd to be the orthogonal projection of the surfce on to an horizontal plane. In Nigeria the most commonly used unit 
    for specifying small areas are m<sup>2</sup>, acres and hectares.</p>
    <p>Field measurements and map measurements are used for determining area. Field measurements are more accurate and includes:
    <ol>
    <li>Division of land into simple figures (Triangles, Reactangles etc.)</li>
    <li>Offset from a straight line</li>
    <li>Co-ordintates</li>
    <li>Double meridian Distance</li>
    </ol>
    </p>
    <p><b>Method of determining Area from map includes: </b></p>
    <ol>
    <li>Running planimeter over the enclosed lines</li>
    <li>Digitizing co-ordinates</li>
    <li>Dividing the area into regular geometeric shapes</li>
    <li>Counting co-ordinte method</li>
    </ol>
    <p> it should be noted that since the maps themselves are derived from field observations, the method of area determination invariably
     depend on this basic source of data, hence field measurement is more accurate than map measurement.</p>
 
    <p>
    <p><b>Area Calculation by coordinate method </b></p>
    <img class="img-thumbnail" src ="images/sur/sv1.png" width="500" height="300">
    <img class="img-thumbnail" src="images/sur/sv2.png" width="500" height="300">

    </p>
  

     </div>
   <?php include("includes/sidebar.php"); ?>
	</section>
</body>
<?php include("includes/footer.php"); ?>