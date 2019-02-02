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
      <title>Excel Reports</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Excel Reports</h2>
Click the link to open the report in an Excel spreadsheet.
<p>

<a href="excel.php?query=SELECT id,firstname,lastname,email,interest,message'' FROM mailinglist" target="_blank">Mailing List Emails Excel Spreadsheet</a><br />
<a href="excel.php?query=SELECT id,filename,ip_address,download_time,'' FROM download_log" target="_blank">Download Log</a><br />
<!--<a href="excel.php?query=SELECT * FROM invitedUsers" target="_blank">Invited Users Excel Spreadsheet</a><br />-->

<?PHP

	
	
	

?>
</p>
</div>

</fieldset>
</form>
</div>
</body>
</html>
