<?PHP
require_once("./include/membersite_config.php");
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


    <script src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript">
	
	function xmlParse(str) {
    if (typeof ActiveXObject != 'undefined' && typeof GetObject != 'undefined') {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
    }

    if (typeof DOMParser != 'undefined') {
        return (new DOMParser()).parseFromString(str, 'text/xml');
    }

    return createElement('div', null);
}
var infoWindow = new google.maps.InfoWindow();
var customIcons = {
    cdc: {
        icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png'
    },
    ai: {
        icon: 'http://maps.google.com/mapfiles/ms/icons/green.png'
    },
    phag: {
        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow.png'
    }
};

var markerGroups = {
    "cdc": [],
	"ai": [],
	"phag": []
};

function load() {
    var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(39.50, -98.35),
        zoom: 4
    });
    var infoWindow = new google.maps.InfoWindow();



    map.set('styles', [{
        zoomControl: false
    }, 
	//{
    //    featureType: "road.highway",
    //    elementType: "geometry.fill",
    //    stylers: [{
    //        color: "#ffd986"
    //    }]
    //}, 
	//{
    //    featureType: "road.arterial",
    //    elementType: "geometry.fill",
    //    stylers: [{
    //        color: "#9e574f"
    //    }]
    //}, 
	//{
    //    featureType: "road.local",
    //    elementType: "geometry.fill",
    //    stylers: [{
    //        color: "#d0cbc0"
    //    }, {
    //        weight: 1.1
    //    }

    //    ]
    //},
	//{
    //    featureType: 'road',
    //    elementType: 'labels',
    //    stylers: [{
    //        saturation: -100
    //    }]
    //},
	{
        featureType: 'landscape',
        elementType: 'geometry',
        stylers: [{
            hue: '#ffff00'
        }, {
            gamma: 1.4
        }, {
            saturation: 82
        }, {
            lightness: 96
        }]
    }, {
        featureType: 'poi.school',
        elementType: 'geometry',
        stylers: [{
            hue: '#fff700'
        }, {
            lightness: -15
        }, {
            saturation: 99
        }]
    }]);

    

    //         downloadUrl("markers.xml", function (data) {
    var xml = xmlParse('<markers>	<marker name="SUNY" address="353 Broadway Albany, NY 12246"		email="" website="" phone="" lat="42.648032" lng="-73.749676" type="ai">		<people name="Eli Rosenberg" link="about.php#rosenberg" email="" />	</marker>	<marker name="Centers for Disease Control and Prevention"		address="1600 Clifton Rd, Atlanta, GA 30333" website="http://www.cdc.gov"		phone="(404)639-3311" lat="33.799318" lng="-84.328008" type="cdc" />	<marker name="Emory University" address="1518 Clifton Rd, Atlanta, GA 30322"		email="emorycamp@emory.edu" website="http://www.sph.emory.edu" phone="(404)727-3956"		lat="33.797420" lng="-84.323435" type="ai">		<people name="Patrick Sullivan" link="about.php#sullivan"			email="" />		<people name="Travis Sanchez" link="about.php#sanchez" email="" />		<people name="Monica Trigg" link="about.php#trigg" email="" />		<people name="James Curran" link="about.php#curran" email="" />		<people name="Carlos del Rio" link="about.php#delrio" email="" />	</marker>	<marker name="Building Healthy Online Communities" address="San Francisco, CA"		email="" website="http://www.bhocpartners.org/contact-information/"		phone="" lat="37.773972" lng="-122.431297" type="phag">		<people name="Dan Wohlfeiler" link="advisory-group.php#wohlfeiler"			email="dan.wohlfeiler@ucsf.edu" />	</marker>	<marker name="Georgia Department of Public Health"		address="2 Peachtree Street, NW, 15th Floor, Atlanta, Georgia 30303-3186"		email="" website="http://www.dph.georgia.gov" phone="404-657-2700"		lat="33.754074" lng="-84.390267" type="phag">		<people name="Jane Kelly" link="advisory-group.php#kelly"			email="jane.kelly@dph.ga.gov" />		<people name="Gregory Felzien" link="advisory-group.php#felzien"			email="gregory.felzien@dph.ga.gov" />		<people name="Michelle Allen" link="advisory-group.php#allen"			email="michelle.allen@dph.ga.gov" />	</marker>	<marker name="Johns Hopkins University" address="615 N Wolfe St, Baltimore, MD 21205"		email="" website="http://www.jhsph.edu" phone="" lat="39.297967" lng="-76.589822"		type="ai">		<people name="Dalid Holtgrave" link="" email="dholtgra@jhsph.edu" />		<people name="David Dowdy" link="about-partner.php#dowdy"			email="ddowdy1@jhmi.edu" />	</marker>	<marker name="National Coalition of STD Directors" address="Washington, D.C."		email="" website="" phone="" lat="38.9072" lng="-77.0369" type="phag">		<people name="David Harvey" link="advisory-group.php#harvey"			email="dharvey@ncsddc.org" />	</marker>	<marker name="New York City Department of Health and Mental Hygiene"		address="42-09 28th St, Queens, NY 11101" email="" website="http://www.nyc.gov"		phone="(347)396-7195" lat="40.749366" lng="-73.938989" type="phag">		<people name="Susan Blank" link="advisory-group.php#blank"			email="sblank@health.nyc.gov" />	</marker>	<marker name="Columbia Univeristy Mailman School of Public Health"		address="722 W 168th St, New York, NY 10032" email=""		website="https://www.mailman.columbia.edu/people/our-faculty/search/?letter=C"		phone="(212) 305-3927" lat="40.842733" lng="-73.943366" type="phag">		<people name="Mary Ann Chiasson" link="advisory-group.php#chiasson"			email="mac10@cumc.columbia.edu" />	</marker>	<marker name="Tri-County Health Department"		address="6162 S. Willow Drive, Suite 100, Greenwood Village, CO 80111"		email="" website="http://www.tchd.org" phone="303-220-9200" lat="39.605114"		lng="-104.886165" type="phag">		<people name="John Douglas" link="advisory-group.php#douglas"			email="jmdouglas@tchd.org" />	</marker>	<marker name="Texas Department of State Health Services"		address="1100 West 49th Street, Austin, TX 78756" email=""		website="http://www.tchd.org" phone="(512) 776-7111" lat="30.320432"		lng="-97.733659" type="phag">		<people name="Jonathon Poe" link="advisory-group.php#poe"			email="jonathon.poe@dshs.texas.gov" />	</marker>	<marker name="Rhode Island Department of Health" address="3 Capitol Hill, Providence, RI 02908"		email="" website="http://www.health.state.ri.us" phone="" lat="41.833472"		lng="-71.414694" type="phag">		<people name="Tom Bertrand" link="advisory-group.php#bertrand"			email="Thomas.Bertrand@health.ri.gov" />	</marker>	<marker name="University of Washington" address="Seattle, WA 98195"		email="" website="http://www.washington.edu" phone="(206)543-2100"		lat="47.655440" lng="-122.303949" type="ai">		<people name="Steven Goodreau" link="about-partner.php#goodreau"			email="goodreau@uw.edu" />		<people name="Martina Morris" link="about.php#morris" email="morrism@u.washington.edu" />	</marker>	<marker name="Northwestern University Feinberg School of Medicine"		address="420 E Superior St, Chicago, IL 60611" email=""		website="http://www.feinberg.northwestern.edu/" phone="(512) 776-7111"		lat="41.896068" lng="-87.616877" type="phag">		<people name="Nanette Benbow" link="advisory-group.php#benbow"			email="n.benbow@gmail.com" />	</marker></markers>');
    // var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers.length; i++) {
        var name = markers[i].getAttribute("name");
        var address = markers[i].getAttribute("address");
        var type = markers[i].getAttribute("type");
		var email = markers[i].getAttribute("email");
		var website = markers[i].getAttribute("website");

        var point = new google.maps.LatLng(
        parseFloat(markers[i].getAttribute("lat")),
        parseFloat(markers[i].getAttribute("lng")));
        var html = "";
		
		if (website == null)
			html = html + "<b>" + name + "</b> ";
		else
			html = html + "<b><a href='" + website + "' target='_blank'>" + name + "</a></b> ";
		
		if (email != null)
			html = html + "<br/>" + email;
			
		var people = markers[i].getElementsByTagName("people");
		for (var j = 0; j < people.length; j++) {
			var peoplename = people[j].getAttribute("name");
			var peoplelink = people[j].getAttribute("link");
			var peopleemail = people[j].getAttribute("email");
			if (peoplename != "")
			{
				if (peoplelink == "")
					html = html + "<br/>" + peoplename;
				else
					html = html + "<br/><a href='" + peoplelink + "' target='_blank'>" + peoplename + "</a>";
				if (peopleemail != "")
					html = html + "&nbsp;&nbsp;" + peopleemail;
			}
		}
        // var icon = customIcons[type] || {};
        var marker = createMarker(point, html, type, map);
        //bindInfoWindow(marker, map, infoWindow, html);
    }
    // });
}

function createMarker(point, html, type, map) {
    var icon = customIcons[type] || {};
    var marker = new google.maps.Marker({
        map: map,
        position: point,
        icon: icon.icon,
        // shadow: icon.shadow,
        type: type
    });
    if (!markerGroups[type]) markerGroups[type] = [];
    markerGroups[type].push(marker);
    bindInfoWindow(marker, map, infoWindow, html);
	
	
			
			
    return marker;
}

function toggleGroup(type) {
    for (var i = 0; i < markerGroups[type].length; i++) {
        var marker = markerGroups[type][i];
        if (!marker.getVisible()) {
            marker.setVisible(true);
        } else {
            marker.setVisible(false);
        }
    }
}

function bindInfoWindow(marker, map, infoWindow, html) {
    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
		marker.setVisible(true);
    });
}

function downloadUrl(url, callback) {
    var request = window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

function doNothing() {}
google.maps.event.addDomListener(window, 'load', load);

	
	</script>
    
		<style type="text/css">
		  .sign-in-facebook-b {
			background: url('http://maps.google.com/mapfiles/ms/icons/blue.png') #f2f2f2;

			height:45px;
			background-position: 0px 0px;
			background-repeat: no-repeat;
			background-size: 39px 43px;
			padding-left: 41px;
			color: #000;
		  }
		  .sign-in-facebook-g {
			background: url('http://maps.google.com/mapfiles/ms/icons/green.png') #f2f2f2;
			height:45px;
			background-position: 0px 0px;
			background-repeat: no-repeat;
			background-size: 39px 43px;
			padding-left: 41px;
			color: #000;
		  }
		  .sign-in-facebook-y {
			background: url('http://maps.google.com/mapfiles/ms/icons/yellow.png') #f2f2f2;
			height:45px;
			background-position: 0px 0px;
			background-repeat: no-repeat;
			background-size: 39px 43px;
			padding-left: 41px;
			color: #000;
		  }
		 
		</style>
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
                <h1 class="page-header">Locations
                    <small>Interactive map</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Location - Interactive Map</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<!-- Intro Content -->
        <div class="col-lg-12">
            <h2 class="page-header">Emory CAMP Team</h2>
        </div>
        <div class="row">
         	<div class="col-lg-12">
         
         <div class="map_wrap">
            <div class="siderbarmap">
                <ul>
                	<h4>Filter: &nbsp;&nbsp;&nbsp;
                    <a onclick="toggleGroup('cdc')" id='cdc' data-toggle="button" name='cdc' class="btn btn-default sign-in-facebook-b" role="button">CDC</a>
                    <a onclick="toggleGroup('ai')" id='ai' data-toggle="button" name='ai' class="btn btn-default sign-in-facebook-g" role="button">Academic Institutions</a>
                    <a onclick="toggleGroup('phag')" id='phag' data-toggle="button" name='phag' class="btn btn-default sign-in-facebook-y" role="button">Public Health Advisory Group</a>
                   
                </ul>
            </div>
            <div id="map" style="width:100%;height:300px; z-index: 1; align-content:center"></div>
        </div>

         	</div>
         </div>
         <div class="row">
         	<div class="col-lg-12">
                <div class="list-group">
                	<div class="list-group">
                      <a href="#" class="list-group-item active">
                        Click to find on the map
                      </a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['ai'][0],'click')" class="list-group-item">State University of New York System</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['cdc'][0],'click')" class="list-group-item">CDC</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['ai'][1],'click')" class="list-group-item">Emory University</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][0],'click')" class="list-group-item">Building Healthy Online Communities</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][1],'click')" class="list-group-item">Georgia Department of Public Health</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['ai'][2],'click')" class="list-group-item">Johns Hopkins University</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][2],'click')" class="list-group-item">National Coalition of STD Directors</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][3],'click')" class="list-group-item">New York City Department of Health and Mental Hygiene</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][4],'click')" class="list-group-item">Columbia Univeristy Mailman School of Public Health</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][5],'click')" class="list-group-item">Tri-County Health Department</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][6],'click')" class="list-group-item">Texas Department of State Health Services</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['phag'][7],'click')" class="list-group-item">Rhode Island Department of Health</a>
                      <a href="javascript:google.maps.event.trigger(markerGroups['ai'][3],'click')" class="list-group-item">University of Washington</a>
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

</body>

</html>
