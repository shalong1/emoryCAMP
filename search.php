<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("header.php"); ?>
    <script>
		function getSearch(searchType)
		{
			str=document.getElementById("txtkeyword").value;
			
			//if (str=="")
			//  {
			//  document.getElementById("txtItemSearch").innerHTML="";
			//  return;
			//  }
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("txtItemSearch").innerHTML=xmlhttp.responseText;
				}
			  }
			  
			  var searchURL = "";
			  if (searchType == 1)
			  {
				  searchURL = "getitems.php?st=1&q="+str;
				
			  }
			  else
			  {
				//collect info from form
				t = document.getElementById("txtTitle").value;
				d = document.getElementById("txtDescription").value;
				a = document.getElementById("txtAuthor").value;
				p = document.getElementById("ddlProject").value;
				var h=$("#chkIsHIV").is(":checked");
				var s=$("#chkIsSTD").is(":checked");
				var ah=$("#chkIsAH").is(":checked");
				var vh=$("#chkIsVH").is(":checked");
				var tb=$("#chkIsTB").is(":checked");
				var y1=$("#chkIs1").is(":checked");
				var y2=$("#chkIs2").is(":checked");
				var y3=$("#chkIs3").is(":checked");
				var y4=$("#chkIs4").is(":checked");
				var y5=$("#chkIs5").is(":checked");
				
				searchURL = "getitems.php?st=2&t="+t+"&d="+d+"&a="+a+"&p="+p+"&h="+h+"&s="+s+"&ah="+ah+"&vh="+vh+"&tb="+tb+"&y1="+y1+"&y2="+y2+"&y3="+y3+"&y4="+y4+"&y5="+y5;
			  }
			  xmlhttp.open("GET",searchURL,true);
			  xmlhttp.send();
		}
	</script>
</head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">
		<br>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Search
                    <small>Search and explore content</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Search</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<!-- Search Conetent-->
       
	<div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" id="txtkeyword" name="txtkeyword" class="form-control" placeholder="Search for keyword" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" ><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="contain">Title:</label>
                                    <input class="form-control" type="text" id="txtTitle" name="txtTitle" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Description:</label>
                                    <input class="form-control" type="text" id="txtDescription" name="txtDescription" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Author:</label>
                                    <input class="form-control" type="text" id="txtAuthor" name="txtAuthor" />
                                  </div>
                                  
                                  <div class="form-group">
                                    <label  for="filter">Project:</label>
                                
                                        <select class="form-control" name='ddlProject' id='ddlProject'>
                                            <option value="All" selected>All </option>
											<?php
                                            $results = mysql_query("SELECT * FROM projects order by position")or die(mysql_error());
                                            $row_count=mysql_num_rows($results);
                                            while ($row_categorieslist = mysql_fetch_assoc($results)) {
                                                echo "<option value='".$row_categorieslist['id']."'";
                                                if($currentCohort == $row_categorieslist['id']) 
                                                    echo "selected";
                                                echo ">".$row_categorieslist['name']."</option>";
                                            }
                                            ?>				
                                        </select>
                                    
                                   
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="contain">Focus Areas:</label><br/>
                                    <input type='checkbox'  ".$isHIV." value='1' id='chkIsHIV' name='chkIsHIV' />&nbsp;HIV&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$isSTD." value='1' id='chkIsSTD' name='chkIsSTD' />&nbsp;STD&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$isAH." value='1' id='chkIsAH' name='chkIsAH' />&nbsp;Adolescent Health&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$isVH." value='1' id='chkIsVH' name='chkIsVH' />&nbsp;Viral Hepatitus&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$isTB." value='1' id='chkIsTB' name='chkIsTB' />&nbsp;TB
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Fiscal Year:</label><br/>
                                    <input type='checkbox'  ".$is1." value='1' id='chkIs1' name='chkIs1' />&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$is2." value='1' id='chkIs2' name='chkIs2' />&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$is3." value='1' id='chkIs3' name='chkIs3' />&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$is4." value='1' id='chkIs4' name='chkIs4' />&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type='checkbox' ".$is5." value='1' id='chkIs5' name='chkIs5' />&nbsp;5
                                  </div>
                                  
                                </form>
                                <button type="submit" class="btn btn-primary" onclick="getSearch(2)"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span></button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="getSearch(1)"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <br/>
    <div id="txtItemSearch"><b>Enter a keyword to search title or description then click the magnifying glass, or click the dropdown for more options.</b></div>

        <!-- End Search Conetent-->
        
        
        <!-- Footer -->
        <?php include("footer.php"); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
