<?PHP
require_once("./include/membersite_config.php");

$saveresults ="";

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->Survey())
   {
        //$fgmembersite->RedirectToURL("thank-you.html");
		$saveresults = "New Survey ID Saved.";
   }
}
$currentSID = $fgmembersite->GetCurrentSurvey();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
</head>
<body>
<?php include("menu.html"); ?> 
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='survey' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Set Current Survey ID</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<?php echo $saveresults; ?>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Current Survey*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $currentSID ?>' maxlength="50" /><br/>
    <span id='survey_name_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Update' />
</div>

</fieldset>
</form>

<script type='text/javascript'>
// <![CDATA[
   
    var frmvalidator  = new Validator("survey");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide a survey ID from Qualtrics");


// ]]>
</script>


</body>
</html>