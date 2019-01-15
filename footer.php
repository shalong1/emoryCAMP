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
	<hr />

	<form data-toggle="validator" class="form-inline" id='profile' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
		<div class="row">
			<div id="txtAddResult" class="text-center">SIGN UP FOR OUR MAILING LIST</div>
			<input type='hidden' name='submitted' id='submitted' value='mailinglist' />
		</div>
		<div class="row">
			<div class="col-md-3">
				<span class="pull-right">
					<div class="controls">
						<input type="text" class="form-control" name="mailinglist_firstname" id="mailinglist_firstname" placeholder="First Name"
						 required data-validation-required-message="Please enter your first name." required>
					</div>
				</span>
			</div>
			<div class="col-md-3">
				<span class="pull-right">
					<div class="controls">
						<input type="text" class="form-control" name="mailinglist_lastname" id="mailinglist_lastname" placeholder="Last Name" required data-validation-required-message="Please enter your last name." required>
					</div>
				</span>
			</div>
			<div class="col-md-3">
				<span class="pull-right">
					<div class="controls">
						<input type="email" class="form-control" name="mailinglist_email" id="mailinglist_email" required data-error="Please endter a valid Email Address" data-validation-required-message="Please enter your email address." placeholder="Email" required>
					</div>
				</span>
			</div>
			<div class="col-md-3">
				<span class="pull-right">
					<div class="control-group form-group" style="padding-left:20px">
						<div class="g-recaptcha" id="rcaptcha" data-callback="imNotARobot" data-sitekey="6Lepsj0UAAAAAJ2JXX-4DYFY54z7itywp6PQCGg9"></div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center" >
				<div class="control-group form-group" >
					<button style="margin-bottom:-80px" id="btnMailingList" name="btnMailingList" disabled type="button" class="btn btn-primary" onclick="addToMailinglist()" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Adding Email">Add To Mailing List</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2" >
				<a href="http://www.sph.emory.edu/" target="blank">
					<img style="padding-left:40px" class="img-responsive img-hover" src="images/logo-RSPH.png" alt="Rollins School of Public Health">
				</a>
			</div>
			<div class="col-xs-2" >
				<a href="http://www.facebook.com" target="blank">
					<img style="padding-right:40px" class="img-responsive img-hover" src="images/icon_facebook.png" alt="EmoryCAMP Facebook Page">
				</a>
			</div>
			<div class="col-xs-4 text-center">
				
			</div>
			<div class="col-xs-2" >
				<a href="http://www.twitter.com" target="blank">
					<img style="padding-left:40px" class="img-responsive img-hover" src="images/icon_twitter.png" alt="EmoryCAMP Twitter Posts">
				</a>
			</div>
			<div class="col-xs-2" >
				<span class="text-center">
					<a href="http://prismhealth.emory.edu/" target="blank">
						<img style="padding-right:40px" class="img-responsive img-hover" src="images/logo-PRISM.jpg" alt="PRISM Healthcare">
					</a>
				</span>
			</div>
		</div>
	</form>

	<div class="row">
		<div class="col-lg-12" style="padding-top:30px">
			<p class="text-center">Emory CAMP - Coalition for Applied Modeling for Prevention</p>
		</div>
	</div>
</footer>