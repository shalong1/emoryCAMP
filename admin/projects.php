<?PHP
require_once("./include/membersite_config.php");
$currentdir = str_replace('admin','',getcwd()) .'files/';

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Projects</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' enctype='multipart/form-data'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Projects</h2>
Use this page to add, edit and Projects.
<p>
<?PHP

	if(isset($_POST[saveAction]))
	{
		if(strlen($_POST[txtID]) > 0)
		{
			if(isset($_POST['chkIsActive']) &&  $_POST['chkIsActive'] == 'yes')
				$isActive = "1";
			else
				$isActive = "0";
				
			//-----------------------------------------------		
			if(isset($_POST['isRemoveCIFile']) &&  $_POST['isRemoveCIFile'] == 'yes')
			{
				$currCIFilename = "";
				if (!unlink($currentdir . $_POST['txtCIFileName'])) 
					echo ("Error deleting ". $_POST['txtCIFileName']."<br/>");
			}
			else
				if($_FILES['coverimage']['name'])
				{
					if (!$_POST['txtCIFileName']=="")
						unlink($currentdir . $_POST['txtCIFileName']);
					$currCIFilename = $_FILES['coverimage']['name'];
				}
				else
					$currCIFilename = $_POST['txtCIFileName'];
			//-----------------------------------------------	
				
			$sql = "UPDATE projects SET name='".$_POST['txtName']."' ,title='".$_POST['txtTitle']."'
				,cifilename='".$currCIFilename."',description='".$_POST['txtDescription']."'
				,position=".$_POST['txtPosition']." WHERE id=".$_POST[txtID];
			
			
			mysql_query($sql) or die(mysql_error());

			echo "Project Saved.<br>";
		}
		else
		{
			if(isset($_POST['chkIsActive']) &&  $_POST['chkIsActive'] == 'yes')
				$isActive = "1";
			else
				$isActive = "0";
			
			$sql = "INSERT INTO projects (`name`, `title`, `description`, `position`,`cifilename`)
			VALUES ('".$_POST['txtName']."',
			'".$_POST['txtTitle']."',
			'".$_POST['txtDescription']."',
			".$_POST['txtPosition'].",
			'".$_FILES['coverimage']['name']."')";

			//echo $sql."<br>";
			mysql_query($sql) or die(mysql_error());
				
			echo "New Project Saved.<br>";
		}
		
		
		if($_FILES['coverimage']['name'])
		{
			$valid_file = true;
			//if no errors...
			if(!$_FILES['coverimage']['error'])
			{
				//now is the time to modify the future file name and validate the file
				$new_file_name = strtolower($_FILES['coverimage']['name']); //rename file
				
				if($_FILES['coverimage']['size'] > (1024000)) //can't be larger than 1 MB
				{
					$valid_file = false;
					$message = 'Oops!  Your file\'s size is to large.';
				}
				$message = 'Is Vaid File?'.$valid_file;
				//if the file has passed the test
				if($valid_file)
				{
					//move it to where we want it to be						
					$target = $currentdir . basename($_FILES['coverimage']['name']);
					move_uploaded_file($_FILES['coverimage']['tmp_name'], $target);
					
					$message = 'Your file was accepted.'.$target;
				}
			}
			//if there is an error...
			else
			{
				//set that to be the returned message
				$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['coverimage']['error'];
			}
		} //End Cover Image File Upload
		
	}
	
	 echo "<div id='fg_membersite'>";
	 if ($_GET['action'] == "edit") {
		
		$sql = "SELECT * FROM projects where id=" . $_GET['id'];
		
		$results = mysql_query($sql)or die(mysql_error());
		$row_projects = mysql_fetch_array($results);
		
		
		$editName = ($row_projects['name']);
		$editTitle = ($row_projects['title']);
		$editDescription = ($row_projects['description']);
		$editPosition = ($row_projects['position']);
		$editCIFilename = ($row_projects['cifilename']);
		$editID = ($row_projects['id']);
		$surveyLabel = "Edit Existing Project";
		$buttonLabel = "Submit Changes";
	 }
	 else
	 {	
	 	
	 	if ($_GET['action'] == "delete") {
			
			$sql = "SELECT * FROM projects where id=" . $_GET['id'];
		
			$results = mysql_query($sql)or die(mysql_error());
			$row_projects = mysql_fetch_array($results);
			
			
			$deleteName = ($row_projects['name']);
		
			 $sql = "DELETE FROM projects where id=" . $_GET['id'];
			 $results = mysql_query($sql)or die(mysql_error());
			 
			 echo "<font color='red'>Sucessfully deleted project: ".$deleteName."</font><BR>";
		 }
		 $editID = "";
		 $surveyLabel = "Add New Project";
		 $buttonLabel = "Add New";
	 }
	    


		echo "<strong>".$surveyLabel."</strong><br>";
		echo "<table>
				<tr>
					<td><strong>Name:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editName."' id='txtName' name='txtName' /></td>
					<td><strong>Position:</strong></td>
					<td colspan='2'><input style='width:75px' maxlength='3' type='text' value='".$editPosition."' id='txtPosition' name='txtPosition' /></td>
				</tr>
				<tr>
					<td><strong>Title:</strong></td>
					<td colspan='4'><input style='width:500px' maxlength='200' type='text' value='".$editTitle."' id='txtTitle' name='txtTitle' /></td>
				</tr>
				<tr>
					<td><strong>Description:</strong></td>
					<td colspan='4'><input style='width:500px' maxlength='10000' type='text' value='".$editDescription."' id='txtDescription' name='txtDescription' /></td>
				</tr>
				";
		echo "<tr>
			  			<td><strong>Cover Image:</strong></td>
						<td colspan=5>";
						  if ($_GET['action'] == "edit") {				  
							  echo "<a href='../files/".$editCIFilename."'>".$editCIFilename.
							  		"<input type='hidden' value='".$editCIFilename."' id='txtCIFileName' name='txtCIFileName' />
									</a>&nbsp;&nbsp;&nbsp;";
									if (strlen($editCIFilename)>0)
									echo "<input type='checkbox' value='yes' id='isRemoveCIFile' name='isRemoveCIFile' />Check to remove Cover Image file <b>or</b> Replace &nbsp;"; 
						  }
			  			echo "<input type='file' name='coverimage' size='25' /></td>";
						
		echo "
			  <td><input type='hidden' value='".$editID."' id='txtID' name='txtID' />
				<input type='hidden' value='edit' id='saveAction' name='saveAction' /></td>
			  </tr>
			  <tr><td colspan='7'><hr></td></tr>
			  
				<td colspan='7' align='right'><input type='submit' name='btnSubmitEdit' id='btnSubmitEdit' value='".$buttonLabel."'  /></td>
			  </tr>
			</table>
		<br>";
			
		echo "</div><br>";	
		
	
	$results = mysql_query("SELECT * FROM projects order by position")or die(mysql_error());
	$row_count=mysql_num_rows($results);
	//$row_users = mysql_fetch_array($results);
	
	echo "<table cellpadding='0' cellspacing='0'>
		<tr bgcolor='#33CC66'  align='center'>
			<td width='180px' ><strong>Project Name</strong></td>
			<td width='50px'><strong>Position</strong></td>
			<td width='100px'><strong>Items in Project</strong></td>
			<td width='100px'><strong>Action</strong></td>
		</tr>";
	while ($row_projects = mysql_fetch_assoc($results)) {
		//output a row here
		$sql = "SELECT count(*) as itemQty FROM items where projectId=". $row_projects['id'];
		
		$resultsQty = mysql_query($sql)or die(mysql_error());
		$row_qty = mysql_fetch_array($resultsQty);
		
		echo "<tr>";
		echo "<td>".($row_projects['name'])."</td>";
		echo "<td align='center'>".($row_projects['position'])."</td>";
		echo "<td align='center'>".($row_qty['itemQty'])."</td>";
		echo "<td align='center'><a href='projects.php?action=edit&id=".($row_projects['id'])."'>Edit</a> <a href='projects.php?action=delete&id=".($row_projects['id'])."'>Delete</a></td>";
		echo "</tr>";
	}
	
	echo "</table>";

?>
</p>
</div>

</fieldset>
</form>
</div>
</body>
</html>
