<?PHP
if(isset($_POST['submitted']))
  {
	if($_POST['submitted'] == "mailinglist")
    {	
	   if($fgmembersite->Login())
	   {
			$fgmembersite->RedirectToURL("s-dashboard.php");
	   }
	}
  }
?>

	<script>
		function imNotARobot() {

			document.getElementById("btnMailingList").disabled = false;
		}

		function addToMailinglist() {

			fname = document.getElementById("mailinglist_firstname").value;
			lname = document.getElementById("mailinglist_lastname").value;
			email = document.getElementById("mailinglist_email").value;

			if ((fname == "") || (lname == "") || (email == "")) {
				document.getElementById("txtAddResult").innerHTML =
					"<div class='alert alert-danger' role='alert'>All fields are required.</div>";
				return;
			} else {

				$(btnMailingList).button('loading');

				if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else { // code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("txtAddResult").innerHTML = xmlhttp.responseText;
						$(btnMailingList).button('reset');
					}
				}

				var paramURL = "";
				paramURL = "addtoml.php?f=" + fname + "&l=" + lname + "&e=" + email;


				xmlhttp.open("GET", paramURL, true);
				xmlhttp.send();

			}
		}
	</script>
	<footer>
		<hr/>
		<div class="row">
			<div class="col-xs-2" style="margin:0px">
				<a href="http://www.sph.emory.edu/" target="blank">
					<img class="img-responsive img-hover" src="images/logo-RSPH.png" alt="Rollins School of Public Health">
				</a>
			</div>
			<div class="col-xs-2" style="margin:0px">
				<span class=".text-center">
					<a href="http://prismhealth.emory.edu/" target="blank">
						<img class="img-responsive img-hover" src="images/logo-PRISM.jpg" alt="PRISM Healthcare">
					</a>
				</span>
			</div>
			<form data-toggle="validator" class="form-inline" id='profile' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post'
			    accept-charset='UTF-8'>
				<input type='hidden' name='submitted' id='submitted' value='mailinglist' />
				<div class="col-md-7">
					<span class="pull-right">
						<div id="txtAddResult">Enter your name and email to be a part of our mailing list.</div>
						<div class="form-group">
						<label>First Name:</label>
						<div class="control-group form-group" style="padding-top:10px">
							<div class="controls">

								<input type="text" class="form-control" name="mailinglist_firstname" id="mailinglist_firstname" required data-validation-required-message="Please enter your first name."
								    required>
								<p class="help-block"></p>
							</div>
						</div>
						</div>
						<div class="form-group">
						<label>Last Name:</label>
						<div class="control-group form-group" style="padding-top:10px">
							<div class="controls">

								<input type="text" class="form-control" name="mailinglist_lastname" id="mailinglist_lastname" required data-validation-required-message="Please enter your last name."
								    required>
								<p class="help-block"></p>
							</div>
						</div>
						</div>
						<br/>
						<div class="form-group">
						<label>Email:</label>
						<div class="control-group form-group" style="padding-top:10px">
							<div class="controls">

								<input type="email" class="form-control" name="mailinglist_email" id="mailinglist_email" required data-error="Please endter a valid Email Address"
								    data-validation-required-message="Please enter your email address." required>
								<p class="help-block"></p>
							</div>
						</div>
						</div>

						<div class="control-group form-group" style="padding-left:20px">
							<div class="g-recaptcha" id="rcaptcha" data-callback="imNotARobot" data-sitekey="6Lepsj0UAAAAAJ2JXX-4DYFY54z7itywp6PQCGg9"></div>
						</div>
						<div class="control-group form-group" style="padding-left:145px">
							<button id="btnMailingList" name="btnMailingList" disabled type="button" class="btn btn-primary" onclick="addToMailinglist()"
							    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Adding Email">Add To Mailing List</button>
						</div>
					</span>
				</div>


			</form>
		</div>
		<div class="row">
			<div class="col-lg-12" style="padding-top:30px">
				<p class="text-center">Emory CAMP - Coalition for Applied Modeling for Prevention</p>
			</div>
		</div>
	</footer>