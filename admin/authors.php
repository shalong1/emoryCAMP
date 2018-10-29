<?PHP
require_once("./include/membersite_config.php");

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
      <title>Authors</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Authors</h2>
Use this page to add, edit and Authors.
<p>
<?PHP

	if(isset($_POST[saveAction]))
	{
		if(strlen($_POST[txtID]) > 0)
		{
							
			$sql = "UPDATE authors SET ".
			"title='".$_POST['txtTitle']."',".
			"fname='".$_POST['txtFName']."',".
			"mname='".$_POST['txtMiddle']."',".
			"lname='".$_POST['txtLName']."',".
			"suffix='".$_POST['txtSuffix']."'".
			" WHERE id=".$_POST[txtID];
			
			//echo $sql;
			mysql_query($sql) or die(mysql_error());

			echo "Author Saved.<br>";
		}
		else
		{
			
			$sql = "INSERT INTO `authors`(`title`,`fname`,`mname`,`lname`,`suffix`)
			VALUES ('".$_POST['txtTitle']."',
			'".$_POST['txtFName']."',
			'".$_POST['txtMiddle']."',
			'".$_POST['txtLName']."',
			'".$_POST['txtSuffix']."')";

			mysql_query($sql) or die(mysql_error());
				
			echo "New Author Saved.<br>";
		}
	}
	
	 echo "<div id='fg_membersite'>";
	 if ($_GET['action'] == "edit") {
		
		$sql = "SELECT * FROM authors where id=" . $_GET['id'];
		
		$results = mysql_query($sql)or die(mysql_error());
		$row_projects = mysql_fetch_array($results);
		
		
		$editID = ($row_projects['id']);
		$editTitle = ($row_projects['title']);
		$editFName = ($row_projects['fname']);
		$editMiddle = ($row_projects['mname']);
		$editLName = ($row_projects['lname']);
		$editSuffix = ($row_projects['suffix']);
		$surveyLabel = "Edit Existing Author";
		$buttonLabel = "Submit Changes";
	 }
	 else
	 {	
	 	
	 	if ($_GET['action'] == "delete") {
			
			$sql = "SELECT * FROM authors where id=" . $_GET['id'];
		
			$results = mysql_query($sql)or die(mysql_error());
			$row_projects = mysql_fetch_array($results);
			
			
			$deleteName = ($row_projects['name']);
		
			 $sql = "DELETE FROM authors where id=" . $_GET['id'];
			 $results = mysql_query($sql)or die(mysql_error());
			 
			 echo "<font color='red'>Sucessfully deleted author: ".$deleteName."</font><BR>";
		 }
		 $editID = "";
		 $surveyLabel = "Add New author";
		 $buttonLabel = "Add New";
	 }
	    


		echo "<strong>".$surveyLabel."</strong><br>";
		echo "<table>
				<tr>
					<td><strong>Title:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editTitle."' id='txtTitle' name='txtTitle' /></td>
					<td><strong>First Name:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editFName."' id='txtFName' name='txtFName' /></td>
				</tr>
				";
		echo "<table>
				<tr>
					<td><strong>Middle:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editMiddle."' id='txtMiddle' name='txtMiddle' /></td>
					<td><strong>Last Name:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editLName."' id='txtLName' name='txtLName' /></td>
				</tr>
				";
		echo "<table>
				<tr>
					<td><strong>Suffix:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editSuffix."' id='txtSuffix' name='txtSuffix' /></td>
				</tr>
				";
		
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
		
	
	$results = mysql_query("SELECT * FROM authors order by lname")or die(mysql_error());
	$row_count=mysql_num_rows($results);
	//$row_users = mysql_fetch_array($results);
	
	echo "<table cellpadding='0' cellspacing='0'>
		<tr bgcolor='#33CC66'  align='center'>
			<td width='20px' ><strong>Title</strong></td>
			<td width='150px' ><strong>First</strong></td>
			<td width='100px' ><strong>Middle</strong></td>
			<td width='150px' ><strong>Last</strong></td>
			<td width='50px' ><strong>Suffix</strong></td>
			<td width='100px' ><strong>Action</strong></td>
		</tr>";
	while ($row_projects = mysql_fetch_assoc($results)) {
		//output a row here

		
		echo "<tr>";
		echo "<td>".($row_projects['title'])."</td>";
		echo "<td>".($row_projects['fname'])."</td>";
		echo "<td>".($row_projects['mname'])."</td>";
		echo "<td>".($row_projects['lname'])."</td>";
		echo "<td>".($row_projects['suffix'])."</td>";
		echo "<td align='center'><a href='authors.php?action=edit&id=".($row_projects['id'])."'>Edit</a> <a href='authors.php?action=delete&id=".($row_projects['id'])."'>Delete</a></td>";
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
