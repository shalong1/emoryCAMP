<?PHP
require_once ("./include/membersite_config.php");
$currentdir = str_replace ( 'admin', '', getcwd () ) . 'files/';

if (! $fgmembersite->CheckLogin ()) {
	$fgmembersite->RedirectToURL ( "login.php" );
	exit ();
}

if (! $fgmembersite->DBLogin ()) {
	echo "Error Connecting to Database";
	exit ();
}

if (isset ( $_POST ['submitted'] )) {
	if ($fgmembersite->Login ()) {
		$fgmembersite->RedirectToURL ( "login-home.php" );
	}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><title>Projects</title><link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">	<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>	<script language="javascript" src="calendar.js"></script></head><body><?php include("menu.html"); ?> <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>'		method='post' accept-charset='UTF-8' enctype='multipart/form-data'>		<fieldset>			<div id='fg_membersite_content'>				<h2>Settings</h2>				Use this page to modify the Featured Content area of the homepage				and the links section.				<p><?PHP
if (isset ( $_POST [saveAction] )) {
	$sql = "UPDATE settings SET publishedcontentoverride=" . $_POST ['rdoUseOverride'] . " ,section1=" . $_POST ['ddlSection1'] . " ,section2=" . $_POST ['ddlSection2'] . " ,section3=" . $_POST ['ddlSection3'] . " ,title1='" . $_POST ['txtTitle1'] . "' ,title2='" . $_POST ['txtTitle2'] . "' ,title3='" . $_POST ['txtTitle3'] . "' ,title4='" . $_POST ['txtTitle4'] . "' ,title5='" . $_POST ['txtTitle5'] . "' ,title6='" . $_POST ['txtTitle6'] . "' ,title7='" . $_POST ['txtTitle7'] . "' ,title8='" . $_POST ['txtTitle8'] . "' ,url1='" . $_POST ['txtURL1'] . "' ,url2='" . $_POST ['txtURL2'] . "' ,url3='" . $_POST ['txtURL3'] . "' ,url4='" . $_POST ['txtURL4'] . "' ,url5='" . $_POST ['txtURL5'] . "' ,url6='" . $_POST ['txtURL6'] . "' ,url7='" . $_POST ['txtURL7'] . "' ,url8='" . $_POST ['txtURL8']. "'";
	mysql_query ( $sql ) or die ( mysql_error () );
	echo "Settings Saved.<br>";
}

$buttonLabel = "Submit Changes";
echo "<div id='fg_membersite'>";
if ($_GET ['action'] == "edit") {
	
	$surveyLabel = "Edit Site Properties";
}

$sql = "SELECT * FROM settings ";

$results = mysql_query ( $sql ) or die ( mysql_error () );
$row_settings = mysql_fetch_array ( $results );

$publishedcontentoverride = ($row_settings ['publishedcontentoverride']);
$section1 = ($row_settings ['section1']);
$section2 = ($row_settings ['section2']);
$section3 = ($row_settings ['section3']);
$editTitle1 = ($row_settings ['title1']);
$editTitle2 = ($row_settings ['title2']);
$editTitle3 = ($row_settings ['title3']);
$editTitle4 = ($row_settings ['title4']);
$editTitle5 = ($row_settings ['title5']);
$editTitle6 = ($row_settings ['title6']);
$editTitle7 = ($row_settings ['title7']);
$editTitle8 = ($row_settings ['title8']);
$editURL1 = ($row_settings ['url1']);
$editURL2 = ($row_settings ['url2']);
$editURL3 = ($row_settings ['url3']);
$editURL4 = ($row_settings ['url4']);
$editURL5 = ($row_settings ['url5']);
$editURL6 = ($row_settings ['url6']);
$editURL7 = ($row_settings ['url7']);
$editURL8 = ($row_settings ['url8']);

$results = mysql_query ( "SELECT id, concat(id,': ',substring(title,1,100)) as fulltitle FROM items where isActive=1 and isFutureWork=0 order by id" ) or die ( mysql_error () );
$row_count = mysql_num_rows ( $results );

echo "<strong>" . $surveyLabel . "</strong><br>";
echo "<table>				<tr>					<td><strong>Published Conetent Override:</strong></td>					<td>						<input type='radio' name='rdoUseOverride' id='rdoUseOverride' ";

if (isset ( $publishedcontentoverride ) && $publishedcontentoverride == 1)
	echo "checked";
echo " value='1'>Yes						<input type='radio' name='rdoUseOverride' id='rdoUseOverride'";
if (isset ( $publishedcontentoverride ) && $publishedcontentoverride == 0)
	echo "checked";
echo " value='0'>No					</td>				</tr>				<tr>					<td><strong>Section 1:</strong></td>					<td>						<select name='ddlSection1' id='ddlSection1'>";
while ( $row_items = mysql_fetch_assoc ( $results ) ) {
	echo "<option value='" . $row_items ["id"] . "'";
	if ($section1 == $row_items ["id"])
		echo "selected";
	echo ">" . $row_items ["fulltitle"] . "</option>";
}
echo "																	</select>					</td>				</tr>				<tr>					<td><strong>Section 2:</strong></td>					<td>												<select name='ddlSection2' id='ddlSection2'>";
mysql_data_seek ( $results, 0 );
while ( $row_items = mysql_fetch_assoc ( $results ) ) {
	echo "<option value='" . $row_items ["id"] . "'";
	if ($section2 == $row_items ["id"])
		echo "selected";
	echo ">" . $row_items ["fulltitle"] . "</option>";
}
echo "									</td>				<td>				<tr>					<td><strong>Section 3:</strong></td>					<td>						<select name='ddlSection3' id='ddlSection3'>";
mysql_data_seek ( $results, 0 );
while ( $row_items = mysql_fetch_assoc ( $results ) ) {
	echo "<option value='" . $row_items ["id"] . "'";
	if ($section3 == $row_items ["id"])
		echo "selected";
	echo ">" . $row_items ["fulltitle"] . "</option>";
}
echo "					</td>				<td>				<tr><td colspan='7'><hr></td></tr>				<tr>					<td colspan='7'>						<table>
							<tr>
								<td></td>
								<td align='center'><strong>Title</strong></td>
								<td align='center'><strong>URL</strong></td>
							</tr>							<tr>								<td><strong>Link 1:</strong></td>								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle1."' id='txtTitle1' name='txtTitle1' />								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL1."' id='txtURL1' name='txtURL1' />
								</td>							</tr>
							<tr>
								<td><strong>Link 2:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle2."' id='txtTitle2' name='txtTitle2' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL2."' id='txtURL2' name='txtURL2' />
								</td>
							</tr>
							<tr>
								<td><strong>Link 3:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle3."' id='txtTitle3' name='txtTitle3' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL3."' id='txtURL3' name='txtURL3' />
								</td>
							</tr>
							<tr>
								<td><strong>Link 4:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle4."' id='txtTitle4' name='txtTitle4' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL4."' id='txtURL4' name='txtURL4' />
								</td>
							</tr>
							<tr>
								<td><strong>Link 5:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle5."' id='txtTitle5' name='txtTitle5' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL5."' id='txtURL5' name='txtURL5' />
								</td>
							</tr>
							<tr>
								<td><strong>Link 6:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle6."' id='txtTitle6' name='txtTitle6' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL6."' id='txtURL6' name='txtURL6' />
								</td>
							</tr>
							<tr>
								<td><strong>Link 7:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle7."' id='txtTitle7' name='txtTitle7' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL7."' id='txtURL7' name='txtURL7' />
								</td>
							</tr>
							<tr>
								<td><strong>Link 8:</strong></td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editTitle8."' id='txtTitle8' name='txtTitle8' />
								</td>
								<td>
									<input style='width:400px' maxlength='200' type='text' value='".$editURL8."' id='txtURL8' name='txtURL8' />
								</td>
							</tr>						</table>				<td>				";

echo "			  <td><input type='hidden' value='" . $editID . "' id='txtID' name='txtID' />				<input type='hidden' value='edit' id='saveAction' name='saveAction' /></td>			  </tr>			  <tr><td colspan='7'><hr></td></tr>			  				<td colspan='7' align='right'><input type='submit' name='btnSubmitEdit' id='btnSubmitEdit' value='" . $buttonLabel . "'  /></td>			  </tr>			</table>		<br>";

echo "</div><br>";

?></p>			</div>		</fieldset>	</form>	</div></body></html>