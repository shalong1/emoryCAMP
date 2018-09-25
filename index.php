<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

$sql = "SELECT * FROM settings ";

$results = mysql_query($sql)or die(mysql_error());
$row_settings = mysql_fetch_array($results);

$publishedcontentoverride = ($row_settings['publishedcontentoverride']);
$section1 = ($row_settings['section1']);
$section2= ($row_settings['section2']);
$section3= ($row_settings['section3']);

if ($publishedcontentoverride==1)
	$sql = "SELECT * FROM items where id in (".$section1.",".$section2.",".$section3. ")";
else
	$sql = "SELECT * FROM items where isFutureWork=0 and isActive=1 order by id desc limit 3";
$item_results = mysql_query($sql)or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">

<head><?php include("header.php"); ?></script>

</head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/map for website distorted shaded.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <!--<div class="item">
                <div class="fill" style="background-image:url('images/testtubes.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Digital Media</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>You caption Here</h2>
                </div>
            </div>-->
        </div>

        <!-- Controls -->
        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>-->
    </header>

    <!-- Page Content -->
    <div class="container">
    
    <div class="row">
    	<div class="col-lg-4">
    		<div class="list-group landingpage" style="margin-top:20px; font-size: 17px;">
			  <a href="#" class="list-group-item active">
			    Trending Now!
			  </a>
			  <?php 
			  if ($row_settings['url1'] != "") 
			  	echo "<a target='_blank' href='". $row_settings['url1'] ."'class='list-group-item list-group-item-info'>". $row_settings['title1'] ."</a>";
			  if ($row_settings['url2'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url2'] ."'class='list-group-item list-group-item-info'>". $row_settings['title2'] ."</a>";
			  if ($row_settings['url3'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url3'] ."'class='list-group-item list-group-item-info'>". $row_settings['title3'] ."</a>";
			  if ($row_settings['url4'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url4'] ."'class='list-group-item list-group-item-info'>". $row_settings['title4'] ."</a>";
			  if ($row_settings['url5'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url5'] ."'class='list-group-item list-group-item-info'>". $row_settings['title5'] ."</a>";
			  if ($row_settings['url6'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url6'] ."'class='list-group-item list-group-item-info'>". $row_settings['title6'] ."</a>";
			  if ($row_settings['url7'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url7'] ."'class='list-group-item list-group-item-info'>". $row_settings['title7'] ."</a>";
			  if ($row_settings['url8'] != "")
			  	echo "<a target='_blank' href='". $row_settings['url8'] ."'class='list-group-item list-group-item-info'>". $row_settings['title8'] ."</a>";
			?>
			  
			</div>
			
        </div>
       <div class="col-lg-8">
            <h1 class="page-header">
                Welcome to Emory CAMP!
            </h1>
        </div>
        <div class="col-lg-8">
        	<span style="font-size:20px">
        	<p>The Emory Coalition for Applied Modeling for Prevention (CAMP) is dedicated to creating models that improve public health decision-making at the national, state, and local levels. We use statistical, epidemic simulation, and economic models to uncover new disease patterns and inform prevention policies in five areas: HIV, viral hepatitis, sexually transmitted infections, tuberculosis and school/adolescent health.</p> 
 			<p>We are made up of experts from a variety of fields - epidemiologists, economic and infectious disease modelers, physicians, economists, and health department representatives - working in partnership with leaders at the US Centers for Disease Control and Prevention.</p>
 			<p>Now in its fourth year, CAMP has published a variety of high-impact scientific papers that tackle tough public health questions and has released interactive web tools that guide decision-making. </p>
 			<p>Explore our website to learn more about our work and the CAMP team. Thank you for visiting!</p>
 			</span>
 			<span style="font-size:15px">
			This work is supported by The Centers for Disease Control and Prevention [Grant #5 NU38 PS004646]
        	</span>
        </div>
   </div> 
    
   
	
    <!-- <div class="row">
    <div class="col-md-12">&nbsp;
    </div>
    </div>
     -->
     
        <!-- Featured Content Section -->
        <div class="row">
        	<div class="col-lg-12">
            <h1 class="page-header">
                Featured Content
            </h1>
        </div>
        	<?php
			while ($row_items = mysql_fetch_assoc($item_results)) {
				
				echo '<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>'.$row_items['title'].'</h4>
						</div>
						<div class="panel-body">
						<p>';
						
						
						echo $fgmembersite->GetAuthors($row_items['id']);
	
							
							echo '</p>
								<p><img class="img-responsive img-hover" src="files/'.($row_items['cidfilename']).'" alt="'.$row_items['title'].'"></p>
            					<a href="item.php?i='.$row_items['id'].'" class="btn btn-default">Learn More</a>
						</div>
					</div>
				</div>';
			}
			?>
            
          </div>  
           
        <!-- /.row -->
         <div class="row">
        	<div class="col-lg-12">
            <h1 class="page-header">
                Current Efforts
            </h1>
        </div>
        <div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				</div>
                
                
				<div class="panel-body">
               
                <p><div class="text-center">The CAMP team is actively working on new and innovative models. View a brief synopsis of this upcoming work by following the below links to the respective focus areas. Check back periodically for the published work!</div></p>
                
                <div class="dropdown text-center">
                  <button class="btn btn-primary btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select Focus Area to View All Current Work
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="left: 50%;  right: auto;  text-align: center;  transform: translate(-50%, 0);">
                    <li><a href="current-work.php?HIV">HIV</a></li>
                    <li><a href="current-work.php?SexuallyTransmittedDisease">Sexually Transmitted Disease</a></li>
                    <li><a href="current-work.php?AdolescentHealth">Adolescent Health</a></li>
                    <li><a href="current-work.php?ViralHepatitis">Viral Hepatitis</a></li>
                    <li><a href="current-work.php?Tuberculosis">Tuberculosis</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="current-work.php?All">View All</a></li>
                  </ul>
                </div>
                
					
				</div>
			</div>
		</div>
		
        
        
       
        <!-- Footer -->
        <?php include("footer.php"); ?>
       
    	</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
