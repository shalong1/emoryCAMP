<?PHP
require_once("./include/membersite_config.php");
$currentdir = str_replace('admin','',getcwd()) .'files/';
$itemid="";


function file_newname($path, $filename){
    if ($pos = strrpos($filename, '.')) {
           $name = substr($filename, 0, $pos);
           $ext = substr($filename, $pos);
    } else {
           $name = $filename;
    }

    $newpath = $path.'/'.$filename;
    $newname = $filename;
    $counter = 0;
    while (file_exists($newpath)) {
           $newname = $name .'_'. $counter . $ext;
           $newpath = $path.'/'.$newname;
           $counter++;
     }

    return $newname;
}

function save_file($strPostFileName)
{
	global $message, $currentdir;
	
	$valid_file = true;
	$new_file_name = "";
	if(!$_FILES[$strPostFileName]['error'])
	{
		if($valid_file)
		{			
			$new_file_name = file_newname($currentdir, basename($_FILES[$strPostFileName]['name']));	
			$target = $currentdir . $new_file_name;
			move_uploaded_file($_FILES[$strPostFileName]['tmp_name'], $target);	
			$message += 'Your file was accepted.'.$target;
		}
	}
	else
	{
		$message += 'Ooops!  Your upload triggered the following error:  '.$_FILES[$strPostFileName]['error'];
	}
	return $new_file_name;
}

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

if(isset($_POST[saveAction]))
	$itemid=$_POST['txtitemid'];

else
	$itemid=$_GET['i'];

if ($itemid == "")
	$fgmembersite->RedirectToURL("index.php");
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Files for Item</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>'method='post' accept-charset='UTF-8' enctype='multipart/form-data'>
<fieldset >

<?PHP
	$results = mysql_query("SELECT * from items where id=".$itemid)or die(mysql_error());
	
	$row_itemdetails = mysql_fetch_assoc($results)
?>

<div id='fg_membersite_content'>
<h2>Files for Item <?PHP echo $row_itemdetails['title']; ?></h2>
Use this page edit, delete or upload new files for an item.
<p>
<?PHP

	if(isset($_POST[saveAction]))
	{
		
		if($_FILES['photo']['name'])
		{
			$newMainFileName = save_file('photo');
			
			if (!$_POST['txtFileName']=="")
				unlink($currentdir . $_POST['txtFileName']);
			$currFilename = $newMainFileName;
		}
		else
			$currFilename = $_POST['txtFileName'];
				
				
		
		$sql = "INSERT INTO `itemfiles`(`itemid`,`filename`)
		VALUES (" . $itemid.",'".$currFilename."')";

		mysql_query($sql) or die(mysql_error());
			
		echo "New File Saved.<br>";
		
	}
	
	 echo "<div id='fg_membersite'>";
	
	 	
	if ($_GET['action'] == "delete") {
		
		
		//-----------------------------------------------
		$results = mysql_query("SELECT * from itemfiles where id=".$_GET['id'])or die(mysql_error());
	
	    $row_itemfiledetails = mysql_fetch_assoc($results);
	
		if (!unlink($currentdir . $row_itemfiledetails['filename'])) 
			echo ("Error deleting ". $row_itemfiledetails['filename']."<br/>");
	
		//-----------------------------------------------
		
		
		
		$deleteName = ($row_projects['name']);
	
		 $sql = "DELETE FROM itemfiles where id=" . $_GET['id'];
		 
		 $results = mysql_query($sql)or die(mysql_error());
		 
		 echo "<font color='red'>Sucessfully deleted File</font><BR>";
	 }
	 $editID = "";
	 $surveyLabel = "Add New File";
	 $buttonLabel = "Add New";
	
	    


		echo "<strong>".$surveyLabel."</strong><br>";
		echo "<table>
				<tr>
			  			<td><strong>Current File:</strong></td>
						<td colspan=5>";
						  if ($_GET['action'] == "edit") {				  
							  echo "<a href='../files/".$editFilename."'>".$editFilename.
							  		"<input type='hidden' value='".$editFilename."' id='txtFileName' name='txtFileName' />
									</a>&nbsp;&nbsp;&nbsp;";
									if (strlen($editFilename)>0)
									echo "<input type='checkbox' value='yes' id='isRemoveFile' name='isRemoveFile' />Check to remove current file <b>or</b> Replace &nbsp;"; 
						  }
			  			echo "<input type='file' name='photo' size='25' /></td></tr>
						
						
			  <tr>			
					<input type='hidden' value='".$itemid."' id='txtitemid' name='txtitemid' /></td>	
					<input type='hidden' value='edit' id='saveAction' name='saveAction' /></td>
			  </tr>
				";
		
		echo " 
			  <tr><td colspan='7'><hr></td></tr>
			  
				<td colspan='7' align='right'><input type='submit' name='btnSubmitEdit' id='btnSubmitEdit' value='".$buttonLabel."'  /></td>
			  </tr>
			</table>
		<br>";
			
		echo "</div><br>";	
		
	
	$results = mysql_query("SELECT * from itemfiles where itemid=".$itemid)or die(mysql_error());
	$row_count=mysql_num_rows($results);
	//$row_users = mysql_fetch_array($results);
	
	echo "<table cellpadding='0' cellspacing='0'>
		<tr bgcolor='#33CC66'  align='center'>
			<td width='250px' ><strong>File Name</strong></td>
			<td width='250px' ><strong>Action</strong></td>
		</tr>";
	while ($row_itemfiles = mysql_fetch_assoc($results)) {
		echo "<tr>";
		echo "<td><a href='../files/".($row_itemfiles['filename'])."' target='_blank'>".($row_itemfiles['filename'])."</a></td>";
		echo "<td align='center'><a href='item-files.php?action=delete&i=".$itemid."&id=".($row_itemfiles['id'])."'>Delete</a></td>";
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
