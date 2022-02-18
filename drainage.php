<?php
if(isset($_POST["sub"])) {
	include("connection.php");
	$sql = "INSERT INTO comments( Email,Comments) VALUES ( :Email,:Comments)";
	
	$pdo_statement = $con->prepare( $sql );	
	$result = $pdo_statement->execute( array( ':Email'=>$_POST['Email'],':Comments'=>$_POST['Comments']) );
	if (!empty($result) ){
	header('location:view.html');
	}
}


?>
<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bintkhamis</title>
    <meta name="description" content="Flood Simulation Model">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Beifa Technology">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loc.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/head_anim.css">
	
		<!-- Css Founder -->
		<link rel="stylesheet" href="assets/founder/css/founder_owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="assets/founder/css/style.css" type="text/css"> 
	
	
	<!-- Link Leaflet:-->
				<link rel="stylesheet" href="lib/CSS/leaflet.css" />
				<script src="lib/js_leaflet/leaflet.js"></script>
			
				<link rel="stylesheet" href="lib/CSS/leaflet.css"
			  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
			  crossorigin=""/>
	<!-- Ending Link Leaflet:-->
	
	<link rel="stylesheet" href="lib/CSS/leaflet.groupedlayercontrol.min.css">
    <script src="lib/JS/leaflet.groupedlayercontrol.min.js" type="text/javascript"></script>
	 
	 
    <link rel="stylesheet" href="lib/CSS/Control.MiniMap.css">
    <script src="lib/JS/Control.MiniMap.min.js" type="text/javascript"></script>
	 
	 <!--draw line-->
	  <link rel="stylesheet" href="lib/CSS/leaflet.css" />
		<link rel="stylesheet" href="lib/CSS/leaflet.draw.css"/>
		<link rel="stylesheet" href="lib/CSS/font-awesome.min.css"/>

		<script src="lib/js_leaflet/leaflet.draw.js"></script>
	 <script src="lib/dist/leaflet.motion.min.js"></script>
	 
	<!-- end draw line-->
	<link rel="stylesheet"href="lib/leaflet.css">
	<script src="lib/JS/Control.MiniMap.min.js"></script>
	<script src="lib/JS/leaflet.groupedlayercontrol.min.js"></script>
	<script src="lib/JS/leaflet.wms.js"></script>
	<script src="lib/JS/leaflet-providers.js"></script>
	<script src="lib/JS/leaflet-control-credits.js"></script>
	<!--<script src="Data/drg.geojson"></script>-->
	<script src="lib/leaflet-ajax-gh-pages/dist/leaflet.ajax.min.js"></script>
	
	<script src="lib/JS/exampledata.js"></script>
	
	<script src="lib/markers.js"></script>
	
	<!--- awesome-markers --->
	<script src="lib/markers_js/awesome/leaflet.awesome-markers.js"></script>
	<link rel="stylesheet" href="lib/markers_js/awesome/leaflet.awesome-markers.css">
	
	<style>
		#map{
			width:100%;
			height:500px;
			margin-top:9px;
			margin-left:87px;
		}
		
		#map1{
			width:100%;
			height:500px;
		}
	</style>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/osf_logo2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo" id="div_branding">
                                <a href="https://openskiesfellows.org/" target="_blank"><img src="assets/img/logo/osf_logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="drainage.php">Drainage</a></li>
											<li><a href="Proximity/proximity.php">Proximity</a>
                                                <ul class="submenu">
                                                    <li><a href="Proximity/proximity.php">Proximity</a></li>
													<li><a href="flood_event.php">Flood Events</a></li>
                                                </ul>
                                            </li>
											<li><a href="contact.php">Contact</a>
                                                <ul class="submenu">
                                                    <li><a href="https://bintkhamisfloodsimulation.blogspot.com/2021/11/flood-simulation-model-flood-simulation.html"target="_blank">Blog</a></li>
													<li><a href="contact.php">Contacts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="#" class="btn header-btn">Bint Khamis</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-5 ">
                             <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s" style="color:#3498db ">Drainage Path</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">The Drainage path, in<br> Zanzibar City.</p>
									
							   </div>
								
                            </div>
							</div>
    <div class="col-xl-7 col-lg-7 col-md-7 ">                
	<div id="map"></div>
	
	<script>
	 
	var lyrEagleNests;
	var map=L.map('map').setView([-6.1677,39.2015],14);
	
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: 'Map Tiles by &copy; Bintkhamis'
			}).addTo(map);
	<!-- var defaultBase = L.tileLayer.provider('Stamen.TonerLite').addTo(map); -->
	
	
		var groupedOverlays = {
		  <!-- "Drainage Path": { -->
			<!-- "Blocked": ExampleData.LayerGroups.blocked, -->
			<!-- "Not Blocked": ExampleData.LayerGroups.not_blocked, -->
			<!-- "Not Filled": ExampleData.LayerGroups.not_filled -->
		  <!-- },Vitu vya kwenye layer-->
		  "Drainage Blockage Material": {
			"Solid Waste": ExampleData.LayerGroups.solid_waste,
			"Metal": ExampleData.LayerGroups.metal,
			"Grass": ExampleData.LayerGroups.grass,
			"Dirt": ExampleData.LayerGroups.dirt,
			"Concrete": ExampleData.LayerGroups.concrete
		  }
		};
		
		L.control.groupedLayers(ExampleData.BaseLayers, groupedOverlays).addTo(map);
	
	
	
		
		//add scale bar to map
        L.control.scale({
            position: 'bottomleft'
        }).addTo(map);
		
		// Overview mini map
        var Esri_WorldTopoMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; Bintkhamis; 2020'
        });

        var miniMap = new L.Control.MiniMap(Esri_WorldTopoMap, {
            toggleDisplay: true,
            minimized: false,
            position: 'bottomleft'
        }).addTo(map);
	
	
var myGeoJSON={"type": "FeatureCollection","name": "dan","crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },"features": [
{ "type": "Feature", "properties": { "osm_id": "728711343", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 80.0, "width_bott": null, "width_top": null, "depth": 320.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.199464971534638, -6.176266423289512 ], [ 39.198098274661376, -6.177407180116619 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728045306", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 250.0, "width_bott": null, "width_top": null, "depth": 250.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.192735781572821, -6.167718215599526 ], [ 39.191989191740198, -6.169376192669119 ], [ 39.191845371463202, -6.169851596363476 ], [ 39.191646843785414, -6.170211609660813 ], [ 39.191518115205199, -6.170690227803679 ], [ 39.191453795830853, -6.170798204854351 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728040905", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 60.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195899468340443, -6.171121957252367 ], [ 39.195883747822968, -6.171121600008454 ], [ 39.195882041023928, -6.171089180122038 ], [ 39.195799845175429, -6.171091234274685 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728040903", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 60.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.19586326623449, -6.170460876972967 ], [ 39.195829130253692, -6.170464181483289 ], [ 39.195826794633959, -6.170367904119609 ], [ 39.195847455885485, -6.170328607231463 ], [ 39.195839460879455, -6.170277610583605 ], [ 39.195824099688096, -6.170147662886088 ], [ 39.195800563827653, -6.170149627731231 ], [ 39.195600778508471, -6.170149181175522 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728040904", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 60.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195872698544967, -6.170729256731897 ], [ 39.195753312443706, -6.17073157881908 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "381485233", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198436670028904, -6.168868993705623 ], [ 39.198432178452485, -6.168938120692762 ], [ 39.198426608897719, -6.168954286046328 ], [ 39.19841690709265, -6.169074409790866 ], [ 39.198424812267163, -6.169147287826327 ], [ 39.198420500353791, -6.169287953123798 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728045303", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 180.0, "width_bott": 180.0, "width_top": 180.0, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.191989191740198, -6.169376192669119 ], [ 39.191776021523268, -6.169092182744079 ], [ 39.191515779585465, -6.16875896210026 ], [ 39.191467450223179, -6.168589627701943 ], [ 39.19146475527733, -6.168541578163447 ], [ 39.191706222425701, -6.167976236612154 ], [ 39.191903402630565, -6.167508244097839 ], [ 39.192164902209768, -6.166886903016401 ], [ 39.192307015687717, -6.166528227137596 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728045323", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.197192952518037, -6.167021495720088 ], [ 39.197063595117129, -6.166947545652215 ], [ 39.196989753600782, -6.166897263172665 ], [ 39.196920762986956, -6.166839210570423 ], [ 39.196896957631928, -6.166810184266908 ], [ 39.196814043131198, -6.166744540159293 ], [ 39.196698789280241, -6.166652549083217 ], [ 39.196590452456981, -6.166561897667422 ], [ 39.196516341446042, -6.166503487781431 ], [ 39.196453369544628, -6.166442487847767 ], [ 39.196326707089561, -6.166346209753721 ], [ 39.196231755164028, -6.166259934563667 ], [ 39.196131143852213, -6.166179911186437 ], [ 39.196069788918308, -6.166128556892237 ], [ 39.196000349146843, -6.166071486635975 ], [ 39.195934412804988, -6.166020221643128 ], [ 39.195856618701377, -6.165972261183649 ], [ 39.195790592528006, -6.16594225240232 ], [ 39.195680548905699, -6.165887950793706 ], [ 39.195563588255702, -6.16583525679321 ], [ 39.195509869001718, -6.165797924430343 ], [ 39.195419408652604, -6.165760502752983 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "381482545", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198455714312928, -6.168036343254395 ], [ 39.198464068645066, -6.16804884686411 ], [ 39.19843478356681, -6.168183260649878 ], [ 39.198439993795454, -6.168202998485315 ], [ 39.19844214975214, -6.168210143402951 ], [ 39.198444215877288, -6.168214519664955 ], [ 39.198459846563232, -6.168257210545399 ], [ 39.198472512808742, -6.168316602664147 ], [ 39.198466224601752, -6.168366617074798 ], [ 39.198458049932661, -6.168500852157163 ], [ 39.198455175323758, -6.168532736333397 ], [ 39.198462990666734, -6.168600434381934 ], [ 39.198465685612582, -6.168642142805938 ], [ 39.198459846563232, -6.168688406107543 ], [ 39.19844628200245, -6.168768607728917 ], [ 39.198437388681128, -6.16881245961254 ], [ 39.198437388681128, -6.168827017365357 ], [ 39.198436670028904, -6.168868993705623 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "381482543", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198455714312928, -6.168036343254395 ], [ 39.198357169126261, -6.167985792943552 ], [ 39.198296443013056, -6.16795462322651 ], [ 39.198203197886556, -6.167872278005362 ], [ 39.198144448066984, -6.167835838901254 ], [ 39.198110940906879, -6.167812885836817 ], [ 39.197993710762312, -6.167756708877298 ], [ 39.197839649691076, -6.167673291886686 ], [ 39.197743260461095, -6.167634798602865 ], [ 39.197684600473039, -6.16760871962477 ], [ 39.197588211243051, -6.167481718555542 ], [ 39.197552548126275, -6.167419200437158 ], [ 39.197488677909575, -6.16730354189874 ], [ 39.197443582482308, -6.167249419052792 ], [ 39.197398576886577, -6.167202530444138 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728038151", "covered": "yes", "waterway": "drain", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": "concrete", "material": "concrete", "profile": "natural", "channels": null, "width": 100.0, "width_bott": 97.0, "width_top": 97.0, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198475746743767, -6.168027501415917 ], [ 39.19769277514213, -6.16759014281765 ], [ 39.19760240462454, -6.167448048084137 ], [ 39.197557129534225, -6.167396961847571 ], [ 39.197385281820374, -6.167161447088408 ], [ 39.197252510821386, -6.16710044723044 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728045319", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 190.0, "width_bott": null, "width_top": null, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195080384464369, -6.165613852621964 ], [ 39.194948691443727, -6.165561515841879 ], [ 39.194850775077761, -6.165520253735163 ], [ 39.194701924235176, -6.165463540661182 ], [ 39.194626825077428, -6.165423528913977 ], [ 39.194604007869209, -6.165389501064119 ], [ 39.194585861900471, -6.16534618476914 ], [ 39.19458514324824, -6.165280183232454 ], [ 39.19458855684632, -6.165238206608085 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728045307", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 610.0, "width_bott": 110.0, "width_top": 610.0, "depth": 130.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.19458855684632, -6.165238206608085 ], [ 39.19460068410266, -6.165078963341219 ], [ 39.194621345354193, -6.164822905783832 ], [ 39.194624130131565, -6.164765478138894 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728045320", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 190.0, "width_bott": 50.0, "width_top": 190.0, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195419408652604, -6.165760502752983 ], [ 39.195246393128883, -6.165685212830847 ], [ 39.195228965812369, -6.165677621319739 ], [ 39.195110927184039, -6.165625909729261 ], [ 39.195080384464369, -6.165613852621964 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067836", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 90.0, "width_bott": 10.0, "width_top": 50.0, "depth": 50.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.194943301552016, -6.163136781097682 ], [ 39.194936743850448, -6.163166522100755 ], [ 39.194931174295689, -6.163197245537609 ], [ 39.19491976569158, -6.163231541465022 ], [ 39.194910962201796, -6.163258692405985 ], [ 39.194896409494191, -6.163300222625498 ], [ 39.194888504319692, -6.163344521522724 ], [ 39.194874670264312, -6.163403289005679 ], [ 39.194865687111474, -6.163449999325627 ], [ 39.194851044572346, -6.163493315775457 ], [ 39.194848080131905, -6.163526807873391 ], [ 39.19483514439181, -6.163578787605239 ], [ 39.194819873031982, -6.163639698555972 ], [ 39.194804511840623, -6.163703020929911 ], [ 39.194789150649264, -6.16375330371232 ], [ 39.194774687773197, -6.163836185446218 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067846", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "2", "width": 85.0, "width_bott": null, "width_top": null, "depth": 75.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198651457213337, -6.162492838850641 ], [ 39.198644809680232, -6.162659495823382 ], [ 39.198643372375777, -6.162888850028236 ], [ 39.198642114734376, -6.163064795359625 ], [ 39.198642114734376, -6.163288790651429 ], [ 39.198627292532201, -6.163514214844823 ], [ 39.198623250113421, -6.163702217119853 ], [ 39.19861390763446, -6.163910225260083 ], [ 39.198603217682574, -6.164184860185055 ], [ 39.198581658115764, -6.164488878648378 ], [ 39.198580400474356, -6.16466625244221 ], [ 39.198587048007468, -6.164984203303867 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067847", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "2", "width": 70.0, "width_bott": null, "width_top": null, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.19874057008952, -6.164886228016529 ], [ 39.198750002399997, -6.164598196643155 ], [ 39.198754044818784, -6.164368843177211 ], [ 39.198754044818784, -6.164206205787915 ], [ 39.198760782183413, -6.163980781888529 ], [ 39.198766082243587, -6.163652827454993 ], [ 39.198774167081147, -6.163358186302757 ], [ 39.198772819608216, -6.163144819206789 ], [ 39.198779467141321, -6.162843479344485 ], [ 39.198777490847696, -6.162501502156528 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067841", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "round", "channels": "2", "width": 104.0, "width_bott": null, "width_top": null, "depth": 90.0, "diameter": 30.0 }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.194864878627726, -6.162746218160938 ], [ 39.194702553055876, -6.162731481616412 ], [ 39.194549659794511, -6.162681555986794 ], [ 39.194300197640118, -6.162585545147402 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067842", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 50.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195156920926586, -6.162704509273278 ], [ 39.195155303959076, -6.162750594468012 ], [ 39.19510589661845, -6.1627392517945 ], [ 39.195036187352393, -6.162742556352946 ], [ 39.195007710757885, -6.162751487591904 ], [ 39.194995583501559, -6.162836512979308 ], [ 39.194974742586965, -6.162941812258495 ], [ 39.19496010004783, -6.163030856670791 ], [ 39.194951027063468, -6.163079799831874 ], [ 39.194943301552016, -6.163136781097682 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067840", "covered": "culvert", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 190.0, "width_bott": null, "width_top": null, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.19471126671413, -6.16050482969391 ], [ 39.194641557448087, -6.16071149939641 ], [ 39.194610655402307, -6.160928797229363 ], [ 39.19459601286318, -6.161120819490224 ], [ 39.194554420865522, -6.161248804521319 ], [ 39.19451552381372, -6.161454134245059 ], [ 39.194447072189071, -6.161739487948459 ], [ 39.194397485185391, -6.161991527930693 ], [ 39.194369278085475, -6.162074142002282 ], [ 39.194417607447754, -6.16215952474818 ], [ 39.194358588133589, -6.162396827977111 ], [ 39.194300197640118, -6.162585545147402 ], [ 39.194171109733787, -6.162922342164338 ], [ 39.194056754198122, -6.163555477107554 ], [ 39.193956322549354, -6.163978191835253 ], [ 39.193867658830811, -6.164326241295865 ], [ 39.193869724955967, -6.16433231452026 ], [ 39.19387439619544, -6.164347497580906 ], [ 39.194111820925045, -6.164426181552995 ], [ 39.194427578747401, -6.16452281724394 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067845", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "round", "channels": "2", "width": 104.0, "width_bott": null, "width_top": null, "depth": 90.0, "diameter": 30.0 }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.194967915390805, -6.162345116066863 ], [ 39.194979503657976, -6.162288224028509 ], [ 39.195030527966104, -6.162289474403069 ], [ 39.195136349506583, -6.162294833151036 ], [ 39.195192763706423, -6.162297512524998 ], [ 39.195194829831571, -6.162378250987471 ], [ 39.19517668386284, -6.162472832865416 ], [ 39.195167880373049, -6.162552231614886 ], [ 39.195157909073394, -6.162649492833996 ], [ 39.195156920926586, -6.162704509273278 ], [ 39.195031785607512, -6.162699507779026 ], [ 39.194978785005745, -6.162717548883052 ], [ 39.194925155583284, -6.162752827277748 ], [ 39.194864878627726, -6.162746218160938 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067844", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 356.0, "width_bott": 80.0, "width_top": 166.0, "depth": 98.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195041397581051, -6.1617733374073 ], [ 39.195025497400515, -6.16185514770001 ], [ 39.195012381997373, -6.161930795415778 ], [ 39.195007980252477, -6.162015552997146 ], [ 39.194999985246454, -6.162097809815021 ], [ 39.194993247881825, -6.16215648812356 ], [ 39.194984174897449, -6.16220882523954 ], [ 39.194970789999722, -6.162281525593467 ], [ 39.194967915390805, -6.162345116066863 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067843", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 120.0, "width_bott": null, "width_top": null, "depth": 90.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.19579885702862, -6.161540856779589 ], [ 39.195789514549659, -6.161566132242699 ], [ 39.195692945656617, -6.161610163346951 ], [ 39.195635992467608, -6.161632134241409 ], [ 39.195576254501212, -6.161650800569736 ], [ 39.195517325018571, -6.16166616233227 ], [ 39.195470971949916, -6.161672146274533 ], [ 39.195400544031642, -6.161682774470314 ], [ 39.195387877786132, -6.16169751104394 ], [ 39.195355718098959, -6.161710104115652 ], [ 39.195284571528461, -6.161710104115659 ], [ 39.195188092466942, -6.161710104115646 ], [ 39.195093499867525, -6.16171081861615 ], [ 39.195055321467947, -6.161726091064392 ], [ 39.195041397581051, -6.1617733374073 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043028", "covered": "yes", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195264449266098, -6.160301375171761 ], [ 39.1953033463179, -6.160231443243827 ], [ 39.195365779230144, -6.160120784657028 ], [ 39.195432793550339, -6.159999408505039 ], [ 39.195533404862161, -6.159844807935735 ], [ 39.19558694445309, -6.159760853823758 ], [ 39.195665457208925, -6.159686813431015 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043029", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": 242.0, "depth": 132.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.195665457208925, -6.159686813431015 ], [ 39.195756726041786, -6.159628849352761 ], [ 39.195869284946895, -6.159599376090233 ], [ 39.196011488256367, -6.15957338603007 ], [ 39.196135545597102, -6.159566776873674 ], [ 39.196276401433657, -6.159536142539589 ], [ 39.196405758834565, -6.159511402857432 ], [ 39.196478881698695, -6.15950613339428 ], [ 39.196576079412438, -6.159487377677596 ], [ 39.196689356969763, -6.159483447908325 ], [ 39.196782602096256, -6.159478803635476 ], [ 39.196849975742559, -6.159431825027176 ], [ 39.196877464190258, -6.15936439374756 ], [ 39.196910701855771, -6.159132090690819 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043026", "covered": "yes", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.197648308535562, -6.160349425456641 ], [ 39.197638696562016, -6.160244482914353 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043025", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.197638696562016, -6.160244482914353 ], [ 39.19764255931775, -6.160102832777581 ], [ 39.197657471351455, -6.160004945901831 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043027", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": 96.0, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.197657471351455, -6.160004945901831 ], [ 39.19773894854773, -6.159889642998592 ], [ 39.197762484408166, -6.159856954486989 ], [ 39.197797967861895, -6.159829624746235 ], [ 39.197843602278333, -6.159802652255634 ], [ 39.197891212988388, -6.159781574414318 ], [ 39.197935499931894, -6.159747903454234 ], [ 39.19799344126772, -6.159688599689106 ], [ 39.19806485733281, -6.159641889038111 ], [ 39.198135554745669, -6.159586336403848 ], [ 39.198187387537558, -6.159562132601569 ], [ 39.198239759318625, -6.159518458579165 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "729067835", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": 96.0, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198464697465766, -6.159526853994786 ], [ 39.198239759318625, -6.159518458579165 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043024", "covered": "yes", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198926341690274, -6.159536410478387 ], [ 39.198906578754034, -6.159536142539598 ], [ 39.198849895059595, -6.159532123457728 ], [ 39.198802643675656, -6.159531141015489 ], [ 39.198758356732149, -6.159527836437038 ], [ 39.198633670570715, -6.159524799797364 ], [ 39.198511679355136, -6.15952783643704 ], [ 39.198464697465766, -6.159526853994786 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043030", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": 242.0, "depth": 132.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.196946903961717, -6.158841823368283 ], [ 39.196951305706612, -6.158903092114807 ], [ 39.196941603901543, -6.15896141352439 ], [ 39.196928129172285, -6.159030809741536 ], [ 39.196910701855771, -6.159132090690819 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728043023", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.198239759318625, -6.159518458579165 ], [ 39.198225026947974, -6.159468443334385 ], [ 39.198219277730139, -6.159400118929867 ], [ 39.198217301436522, -6.159338403675896 ], [ 39.198212630197048, -6.159263380781508 ], [ 39.19821227087094, -6.159186839555694 ], [ 39.198213618343857, -6.159124856337931 ], [ 39.198213887838442, -6.159037776156645 ], [ 39.198211911544817, -6.158983116589421 ], [ 39.19823436942692, -6.157926095910536 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046015", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 170.0, "width_bott": 170.0, "width_top": 170.0, "depth": 50.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211182057111522, -6.185092689399448 ], [ 39.211163282322083, -6.18511072974073 ], [ 39.211152592370205, -6.185129395241721 ], [ 39.211112976666172, -6.185139397806552 ], [ 39.211081445799699, -6.185134753758624 ], [ 39.211059347243712, -6.185133414129409 ], [ 39.211039224981349, -6.185140022966854 ], [ 39.210998980456623, -6.185180033224307 ], [ 39.210972210661147, -6.185212720173459 ], [ 39.210926576244717, -6.185239423444638 ], [ 39.210858843272291, -6.18528068401482 ], [ 39.210805842670531, -6.185312031328986 ], [ 39.210738199529636, -6.185348737156029 ], [ 39.210691217640274, -6.185354720830754 ], [ 39.210633545799034, -6.185371421534473 ], [ 39.210583329974654, -6.185403394003246 ], [ 39.210524310660482, -6.185440724983879 ], [ 39.210475262645971, -6.185474037076825 ], [ 39.210433041827628, -6.185506009539382 ], [ 39.21039082100927, -6.185536017211978 ], [ 39.210356595196941, -6.185560041210545 ], [ 39.210315721851515, -6.185570043767239 ], [ 39.210251941466346, -6.185583975899477 ], [ 39.210202354462652, -6.185587994783713 ], [ 39.210158067519153, -6.185588709251999 ], [ 39.210098509215818, -6.185599426276458 ], [ 39.210038771249415, -6.185607999895851 ], [ 39.209997179251765, -6.185608714364129 ], [ 39.209952892308259, -6.185614698035925 ], [ 39.209874469383955, -6.185632738359403 ], [ 39.209812126303241, -6.185666050440233 ], [ 39.209757778228543, -6.18569739773153 ], [ 39.209706214931245, -6.185722761350505 ], [ 39.209655190623096, -6.185732674595601 ], [ 39.209577396519499, -6.185717402839561 ], [ 39.209523048444801, -6.185705435498255 ], [ 39.209445972993429, -6.185683376293773 ], [ 39.209346798986061, -6.185688734805087 ], [ 39.209221394172395, -6.185699451827496 ], [ 39.20911269802302, -6.185703381402318 ], [ 39.209018913907357, -6.185697397731536 ], [ 39.208965194653373, -6.185685430389784 ], [ 39.208896743028717, -6.185663996344163 ], [ 39.20883718472539, -6.185626040219577 ], [ 39.208802330092361, -6.185596032552071 ], [ 39.208784812944316, -6.185577456376107 ], [ 39.208721122390671, -6.185554682697955 ], [ 39.208693723774509, -6.185532712795736 ], [ 39.208657342005502, -6.185525389494793 ], [ 39.208579008912722, -6.185501454803201 ], [ 39.208530679550442, -6.185484754103596 ], [ 39.208462317757316, -6.185454746428095 ], [ 39.208392608491273, -6.185428043167796 ], [ 39.208342302835362, -6.185408038048825 ], [ 39.208281846216735, -6.185398035489056 ], [ 39.208238277925467, -6.185407412888854 ], [ 39.208196057107109, -6.185422684653867 ], [ 39.208125000368128, -6.185435991630015 ], [ 39.208082060897553, -6.185455996747947 ], [ 39.208036516312653, -6.185461444570081 ], [ 39.208000314206693, -6.185458050844827 ], [ 39.207970759633852, -6.18543599163001 ], [ 39.207914525097067, -6.185405448100346 ], [ 39.207892246878018, -6.185368742277222 ], [ 39.207862153316, -6.185349451624645 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046011", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "plants", "profile": "natural", "channels": null, "width": 230.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210835397243386, -6.186147333861841 ], [ 39.210740175823261, -6.186049987649363 ], [ 39.210689151515126, -6.185986042788104 ], [ 39.210627527086629, -6.185911291592729 ], [ 39.210603362405493, -6.185874049953806 ], [ 39.210581892670199, -6.185827430920095 ], [ 39.210535000612374, -6.185790010658254 ], [ 39.210466548987718, -6.185724726137837 ], [ 39.210404924559221, -6.185655422725665 ], [ 39.210239904041536, -6.185600676595957 ], [ 39.21021106812092, -6.185592013667904 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728711341", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 67.0, "width_bott": null, "width_top": null, "depth": 57.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203362402226311, -6.179460947034235 ], [ 39.203306347352587, -6.17947880894847 ], [ 39.203264845186467, -6.179480237901577 ], [ 39.203221905715878, -6.179492830550719 ], [ 39.20315758634154, -6.179495509837722 ], [ 39.202945673766017, -6.179571512273628 ], [ 39.202748493561153, -6.179740843160895 ], [ 39.202714986401048, -6.17981818520426 ], [ 39.202587605293765, -6.179899546163776 ], [ 39.202375692718242, -6.180104779351807 ], [ 39.202246964138027, -6.180230080514955 ], [ 39.202147700299129, -6.180443530040282 ], [ 39.202018971718921, -6.180544806897918 ], [ 39.201911712873986, -6.180646083736155 ], [ 39.201852693559822, -6.180683504361965 ], [ 39.201788284353952, -6.1806727872379 ], [ 39.201723875148083, -6.180752808425675 ], [ 39.201670245725623, -6.1808275603502 ], [ 39.201584456615983, -6.180880788715331 ], [ 39.20162200619486, -6.181003499724658 ], [ 39.201305529720265, -6.181222128875949 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046014", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 297.0, "width_bott": 297.0, "width_top": 297.0, "depth": 157.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207851373532591, -6.185338020126504 ], [ 39.207796486468737, -6.185244692651834 ], [ 39.207764326781557, -6.185202003141179 ], [ 39.207705307467393, -6.18514341669416 ], [ 39.207638203315668, -6.185068754688278 ], [ 39.207576489055647, -6.184973998227809 ], [ 39.207533549585065, -6.184875401478052 ], [ 39.207500042424975, -6.184767427298947 ], [ 39.207490699946021, -6.184676689675626 ], [ 39.207478572689674, -6.184510128938769 ], [ 39.207480009994136, -6.184399386114153 ], [ 39.207474620102431, -6.184275425570085 ], [ 39.207470577683658, -6.18406072726793 ], [ 39.207466445433347, -6.183966149244431 ], [ 39.207466445433347, -6.183770116365672 ], [ 39.207436980692023, -6.183498081553396 ], [ 39.207437160355084, -6.183423151388462 ], [ 39.207440304458579, -6.183385463029725 ], [ 39.207431500968788, -6.183363225110631 ], [ 39.207422248321372, -6.183299458542293 ], [ 39.207433028104781, -6.183236674364561 ], [ 39.207426380571675, -6.183042159467854 ], [ 39.207428985686001, -6.182955529761722 ], [ 39.207451802894219, -6.182824781394866 ], [ 39.207466445433347, -6.182690103398493 ], [ 39.207497347479112, -6.182539439047603 ], [ 39.207534897057997, -6.182372788328489 ], [ 39.207615386107456, -6.182044845281008 ], [ 39.207651588213402, -6.182003405840052 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046012", "covered": "culvert", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "metal", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 297.0, "width_bott": null, "width_top": null, "depth": 157.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207701175217082, -6.181779418460788 ], [ 39.207702612521544, -6.181700826375415 ], [ 39.207661020523886, -6.181656796940659 ], [ 39.207634160896895, -6.181588832633573 ], [ 39.207584573893207, -6.181516849402607 ], [ 39.207552414206035, -6.181426111221588 ], [ 39.207497347479112, -6.181371543272562 ], [ 39.207434375577698, -6.181290093230155 ], [ 39.207372661317677, -6.181231506349787 ], [ 39.207286782376521, -6.181168811235856 ], [ 39.207200993266895, -6.181068784827909 ], [ 39.207085649584407, -6.180977689332773 ], [ 39.207037410053651, -6.18092079929502 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046010", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 185.0, "width_bott": null, "width_top": null, "depth": 157.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20706417984912, -6.180899543674935 ], [ 39.207174223471419, -6.180806126107691 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046013", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "natural", "channels": null, "width": 206.0, "width_bott": 206.0, "width_top": 206.0, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207659673050955, -6.181987419503118 ], [ 39.207669015529916, -6.181911417414258 ], [ 39.207702612521544, -6.181795404803982 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046009", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 100.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20724114796009, -6.180766115519355 ], [ 39.207410210896562, -6.180720835675756 ], [ 39.207597958790934, -6.180667517985158 ], [ 39.20768922762381, -6.180664838704071 ], [ 39.20785811089722, -6.180635545230083 ], [ 39.207897007949022, -6.180634116280086 ], [ 39.207968513845643, -6.180714137473721 ], [ 39.208047296096055, -6.180777100569571 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728711342", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "round", "channels": "1", "width": 98.0, "width_bott": null, "width_top": null, "depth": 105.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204270688810091, -6.179295545679839 ], [ 39.204103063178074, -6.179354222084152 ], [ 39.20391801022955, -6.179431474874445 ], [ 39.203696665343536, -6.179464787345836 ], [ 39.203541077136329, -6.179448800932211 ], [ 39.203362402226311, -6.179460947034235 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728711340", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 80.0, "width_bott": null, "width_top": null, "depth": 320.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20100845685581, -6.174989555083692 ], [ 39.200986268468299, -6.175011525423677 ], [ 39.200942071356316, -6.175026261626813 ], [ 39.200912606614992, -6.175030191280926 ], [ 39.200884399515076, -6.175024921972002 ], [ 39.200852149996379, -6.175044927483549 ], [ 39.200845502463274, -6.175075560921625 ], [ 39.200848197409123, -6.175127539520952 ], [ 39.200836070152789, -6.17515826226454 ], [ 39.200814690249032, -6.175195504657731 ], [ 39.200790525567882, -6.175231496704314 ], [ 39.200774355892769, -6.17528749425079 ], [ 39.200759713353641, -6.17532750525327 ], [ 39.200756299755561, -6.175340187311464 ], [ 39.200746328455907, -6.17534224144762 ], [ 39.200703388985325, -6.175340187311458 ], [ 39.200667097047841, -6.175358942467377 ], [ 39.20064895107911, -6.175384931753776 ], [ 39.200637003485831, -6.175409492074799 ], [ 39.200605472619358, -6.175447538242566 ], [ 39.200596130140404, -6.175480940274921 ], [ 39.200589662270346, -6.175493533019198 ], [ 39.200573582426763, -6.175502196112599 ], [ 39.200557143257065, -6.175505232660777 ], [ 39.200554448311209, -6.175517200232805 ], [ 39.200539087119857, -6.175535240900571 ], [ 39.200520941151126, -6.175548190884491 ], [ 39.200503513834605, -6.175556943287229 ], [ 39.200479708479584, -6.175573197749083 ], [ 39.200457250597481, -6.175590881174048 ], [ 39.20043649951441, -6.17560356322593 ], [ 39.200418712871787, -6.175618924584137 ], [ 39.200398590609424, -6.175633214219292 ], [ 39.200362388503464, -6.175663490382478 ], [ 39.200348554448098, -6.175670545889295 ], [ 39.20032986949019, -6.175691176547882 ], [ 39.200307681102672, -6.175703947907594 ], [ 39.200288277492533, -6.175721899258783 ], [ 39.200268514556278, -6.175740207850184 ], [ 39.200134126589774, -6.175846219047452 ], [ 39.200125682426105, -6.175863545222573 ], [ 39.20010591948985, -6.175869261074047 ], [ 39.200042857756905, -6.175911504786864 ], [ 39.200010698069747, -6.17593195681575 ], [ 39.199998570813399, -6.175944192308624 ], [ 39.199969824724306, -6.175966519849661 ], [ 39.199919519068402, -6.176008227693788 ], [ 39.199844958899817, -6.17606154585374 ], [ 39.199779292052547, -6.176113524356291 ], [ 39.199720991390613, -6.176162912859993 ], [ 39.199616427491534, -6.176245524722976 ], [ 39.199512492413163, -6.176332244837716 ], [ 39.199307856191446, -6.176454956901638 ], [ 39.198958591208978, -6.176699487843791 ], [ 39.198816387899505, -6.176856941418415 ], [ 39.19868361690051, -6.176982243350488 ], [ 39.198380615155166, -6.177318227429605 ], [ 39.198243801737405, -6.177472822903158 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728711344", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 80.0, "width_bott": null, "width_top": null, "depth": 320.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.200557143257065, -6.175505232660777 ], [ 39.200014021836282, -6.175894178613307 ], [ 39.199747042533843, -6.176087535105665 ], [ 39.199464971534638, -6.176266423289512 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728711345", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 80.0, "width_bott": null, "width_top": null, "depth": 320.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.201128022620132, -6.175057877479438 ], [ 39.200927967806351, -6.175412260692744 ], [ 39.200704646626725, -6.175587487385464 ], [ 39.20032986949019, -6.175691176547882 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727048334", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": "metal", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205635229726667, -6.177773529278448 ], [ 39.205593008908316, -6.177848817482859 ], [ 39.20553668454, -6.178044852555669 ], [ 39.20554072695878, -6.178135502006711 ], [ 39.205582318956431, -6.17833823520552 ], [ 39.205442810592807, -6.178602234796484 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727048335", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": "metal", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208535979610616, -6.175447627552812 ], [ 39.208458275338543, -6.175432891361395 ], [ 39.207832688574683, -6.175344920755648 ], [ 39.207204945854137, -6.175250251864064 ], [ 39.207202969560512, -6.175327505253271 ], [ 39.207208359452217, -6.175579538775284 ], [ 39.207150687610977, -6.176075656856656 ], [ 39.206920000246015, -6.176123527091596 ], [ 39.206885145612993, -6.176438255916437 ], [ 39.206345347958766, -6.176421554930712 ], [ 39.20634202419221, -6.176451563118597 ], [ 39.206243389174013, -6.176758253845924 ], [ 39.206161013662459, -6.176915528783065 ], [ 39.206093280690041, -6.177029488333559 ], [ 39.205918199041164, -6.177097542536182 ], [ 39.20576000571964, -6.177206232760261 ], [ 39.205738446152814, -6.177267499384551 ], [ 39.205703681351316, -6.177371545457656 ], [ 39.205647267151477, -6.17754891493943 ], [ 39.205628582193569, -6.177611521172309 ], [ 39.205635229726667, -6.177773529278448 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302082", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 25.0, "width_bott": null, "width_top": null, "depth": 12.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204939215044533, -6.169473631259299 ], [ 39.204773565706134, -6.169454875895018 ], [ 39.20458447033883, -6.169430225986686 ], [ 39.204463826596182, -6.169408255415238 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727048337", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "2", "width": 186.0, "width_bott": null, "width_top": null, "depth": 620.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211057011623978, -6.176148176688477 ], [ 39.210939242490227, -6.176107629887185 ], [ 39.210689870167357, -6.17602894764939 ], [ 39.210600667459637, -6.176043505203911 ], [ 39.210505446039519, -6.176038861076121 ], [ 39.210359918963498, -6.176027518686951 ], [ 39.210132645196616, -6.175939548179963 ], [ 39.209996460599541, -6.175892213789466 ], [ 39.20987590668841, -6.17581085221399 ], [ 39.209330719142486, -6.175673493126268 ], [ 39.209327305544399, -6.175683495869889 ], [ 39.209272328649014, -6.175973486042262 ], [ 39.209228760357732, -6.176345552042525 ], [ 39.209326676723705, -6.176359484417677 ], [ 39.20931661559252, -6.17637752505675 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727046016", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "plants", "profile": "natural", "channels": null, "width": 110.0, "width_bott": 110.0, "width_top": 110.0, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210812580035167, -6.18458773821088 ], [ 39.210850758434738, -6.184640162419329 ], [ 39.210888667339731, -6.184681423036285 ], [ 39.210937984848826, -6.184772696510843 ], [ 39.210960083404821, -6.184823691762277 ], [ 39.210999699108839, -6.184871025353762 ], [ 39.211037158856193, -6.184956404425066 ], [ 39.211051711563798, -6.18501900978136 ], [ 39.211058359096896, -6.185095725892576 ], [ 39.211058359096896, -6.185120732305942 ], [ 39.211049555607111, -6.185132699660467 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728032941", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "2", "width": 186.0, "width_bott": null, "width_top": null, "depth": 620.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220038098340012, -6.181202123597878 ], [ 39.21956998624546, -6.180932856053915 ], [ 39.218844506822002, -6.18044879929526 ], [ 39.218365704775572, -6.180160776382776 ], [ 39.217827883414962, -6.179796840230372 ], [ 39.217217657842461, -6.179419507390905 ], [ 39.216321857841137, -6.178827563165937 ], [ 39.21606700579504, -6.178695474133414 ], [ 39.215934324627568, -6.178650194112646 ], [ 39.215400455854223, -6.178272860455624 ], [ 39.214855986960508, -6.177984836358858 ], [ 39.214299480641998, -6.177567491397324 ], [ 39.214071488222892, -6.177384941946268 ], [ 39.213589991230606, -6.177082181220852 ], [ 39.213066273419969, -6.176754234894624 ], [ 39.212861098209075, -6.176619555353203 ], [ 39.212780698991139, -6.176572935503961 ], [ 39.212659246764723, -6.176546946275892 ], [ 39.212545250555173, -6.176514883961829 ], [ 39.212428020410592, -6.176494789195734 ], [ 39.212189427871131, -6.176432986621538 ], [ 39.211929096101798, -6.176364217852741 ], [ 39.2116454979666, -6.176293752182977 ], [ 39.211464397605319, -6.176242220248701 ], [ 39.211057011623978, -6.176148176688477 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404565", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "sand", "profile": null, "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 25.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210305391225752, -6.175064397132441 ], [ 39.210173069384396, -6.174962761984894 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404564", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "gravel", "profile": "open_rectangular", "channels": null, "width": 110.0, "width_bott": null, "width_top": null, "depth": 67.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210173069384396, -6.174962761984894 ], [ 39.210368363127166, -6.174618023993004 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727994475", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 95.0, "width_bott": null, "width_top": null, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.215794816263937, -6.175788703286794 ], [ 39.215590269873751, -6.175751550245524 ], [ 39.215249449054951, -6.175698499984947 ], [ 39.215155754770819, -6.17568617517618 ], [ 39.215023163434886, -6.175671528301608 ], [ 39.214891919571876, -6.175663847623329 ], [ 39.21467767137662, -6.175642949033024 ], [ 39.214380598512157, -6.175618924584138 ], [ 39.214197521857251, -6.175586237042281 ], [ 39.214116044660983, -6.175582486012785 ], [ 39.213964229377972, -6.175577931191174 ], [ 39.213673265057437, -6.175589720141114 ], [ 39.213471952602269, -6.175592220827443 ], [ 39.21322428707844, -6.17569323068268 ], [ 39.213260129858277, -6.175827553218983 ], [ 39.213184312048298, -6.176137548782719 ], [ 39.212913380158604, -6.17652354703853 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727994476", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 50.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.215547689729284, -6.174738950246787 ], [ 39.215503762111894, -6.174734931280181 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728032940", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 200.0, "width_bott": null, "width_top": null, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216245411210458, -6.180182121341964 ], [ 39.216349975109537, -6.179812826633498 ], [ 39.216586052366196, -6.179510245916048 ], [ 39.217186845628213, -6.179419507390903 ], [ 39.217217657842461, -6.179419507390905 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727049250", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220070617353294, -6.181130051005024 ], [ 39.220110502551918, -6.181081288129948 ], [ 39.220131882455675, -6.181026988073262 ], [ 39.220140685945459, -6.181000641826654 ], [ 39.220205005319805, -6.180837116449702 ], [ 39.220240848099643, -6.18075513046889 ], [ 39.22032340327425, -6.180557488831106 ], [ 39.220386105681079, -6.180349129988866 ], [ 39.220581219760795, -6.179683506442488 ], [ 39.220868141662542, -6.179035476059077 ], [ 39.221055979388453, -6.178430224252512 ], [ 39.221290619340657, -6.177704849993631 ], [ 39.221440727824636, -6.177276519688681 ], [ 39.22144665670551, -6.177261426308404 ], [ 39.221647789497631, -6.176779241702246 ], [ 39.221800053938281, -6.176248918507336 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727994477", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plant", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 70.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.215645606095258, -6.174470215277481 ], [ 39.215637880583813, -6.174588194322015 ], [ 39.215570776432088, -6.174618202613772 ], [ 39.215547689729284, -6.174738950246787 ], [ 39.215523884374257, -6.174868896818148 ], [ 39.215506097731627, -6.174968477846094 ], [ 39.215679742076048, -6.174986518532569 ], [ 39.215674891173521, -6.17503724679618 ], [ 39.215664650379281, -6.175116197112253 ], [ 39.215715944182001, -6.175212562923289 ], [ 39.215771999055725, -6.175230514291159 ], [ 39.215869556095583, -6.175238909458006 ], [ 39.215873868008948, -6.175285886665794 ], [ 39.215876562954804, -6.175371535214552 ], [ 39.215934324627568, -6.175450932032033 ], [ 39.215836408261602, -6.175514252994937 ], [ 39.215764004049703, -6.175602938054358 ], [ 39.215763285397472, -6.175658221079866 ], [ 39.215794816263937, -6.175788703286794 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727049248", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": 150.0, "width_bott": null, "width_top": null, "depth": 154.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220752169159361, -6.176456207242738 ], [ 39.220717943347033, -6.176718957431841 ], [ 39.220704648280837, -6.176962148602137 ], [ 39.220729351951142, -6.177019485615367 ], [ 39.220796456102867, -6.17706753438492 ], [ 39.22087757397302, -6.177101561484864 ], [ 39.220964800387115, -6.177122906567466 ], [ 39.221174018016782, -6.177180243563266 ], [ 39.221440727824636, -6.177276519688681 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727049249", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 70.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220642305200109, -6.175637679730191 ], [ 39.220669793647808, -6.1755935604808 ], [ 39.220717763683979, -6.17550425024814 ], [ 39.220736628304941, -6.175418958961859 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302058", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": 290.0, "width_bott": null, "width_top": null, "depth": 105.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.202988613236599, -6.172182881310601 ], [ 39.202996608242621, -6.172120899611612 ], [ 39.202979180926107, -6.172042931268146 ], [ 39.202982594524187, -6.172006224518268 ], [ 39.202992565823841, -6.171916913680724 ], [ 39.202986547111436, -6.171860201291077 ], [ 39.202974509686641, -6.171791610550279 ], [ 39.2029617536096, -6.171714892510642 ], [ 39.202948368711866, -6.171640228610444 ], [ 39.202928875270196, -6.171534931058656 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728038153", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": "concrete", "material": "concrete", "profile": "natural", "channels": null, "width": 115.0, "width_bott": 115.0, "width_top": 120.0, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.199384392653648, -6.169184619953372 ], [ 39.199261323459723, -6.1699689512583 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728038149", "covered": "yes", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 130.0, "width_bott": null, "width_top": null, "depth": 130.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.200118675566891, -6.170093629641671 ], [ 39.200098463472997, -6.170243583045266 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728038152", "covered": "yes", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 115.0, "width_bott": null, "width_top": null, "depth": 130.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.200127029899029, -6.170092915152437 ], [ 39.200115800957981, -6.170170794471696 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728038154", "covered": "yes", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 62.0, "width_bott": null, "width_top": null, "depth": 35.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.199543663953527, -6.169058333752286 ], [ 39.199277403303313, -6.169036899033419 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728038150", "covered": "yes", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 34.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.199208502521017, -6.168754943088251 ], [ 39.199217395842332, -6.168977596306692 ], [ 39.199384392653648, -6.169184619953372 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302065", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid_eliptical", "channels": null, "width": 50.0, "width_bott": null, "width_top": null, "depth": 53.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.202533257219073, -6.170414881759373 ], [ 39.202617070035082, -6.170438906444244 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302059", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 167.0, "width_top": 290.0, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.202751188507001, -6.169840253841821 ], [ 39.202756578398706, -6.169921616334286 ], [ 39.202755141094251, -6.169980918955402 ], [ 39.202760620817486, -6.170008248173121 ], [ 39.202794127977583, -6.17059493290281 ], [ 39.202828263958381, -6.170922257865548 ], [ 39.202908753007833, -6.171393641181046 ], [ 39.202928875270196, -6.171534931058656 ], [ 39.202517896027715, -6.171506887432339 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302064", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": 150.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.202617070035082, -6.170438906444244 ], [ 39.202655967086883, -6.170468200482323 ], [ 39.202708249036419, -6.170512945336155 ], [ 39.202741217207354, -6.170558940541238 ], [ 39.202752625811456, -6.170580196576419 ], [ 39.202794127977583, -6.17059493290281 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302057", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 352.0, "width_top": 470.0, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204625343684263, -6.170687637783178 ], [ 39.204370581469689, -6.170808207690023 ], [ 39.204041348918054, -6.170971646853282 ], [ 39.203679866847722, -6.171146249838119 ], [ 39.203330601865261, -6.17132094207636 ], [ 39.20301942545084, -6.171480897955669 ], [ 39.202928875270196, -6.171534931058656 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302067", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid_eliptical", "channels": null, "width": null, "width_bott": 104.0, "width_top": 160.0, "depth": 70.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.202979180926107, -6.169332876699817 ], [ 39.202959058663751, -6.169486938636401 ], [ 39.20295034500549, -6.16956696151447 ], [ 39.202926180324347, -6.169636177721831 ], [ 39.202885306978928, -6.169693604839241 ], [ 39.202824311371131, -6.169790239570229 ], [ 39.202792780504652, -6.169866243398954 ], [ 39.202756578398706, -6.169921616334286 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302069", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.202755141094251, -6.168594182583608 ], [ 39.202755141094251, -6.168672955236995 ], [ 39.202755141094251, -6.16879022108139 ], [ 39.202788827917409, -6.169060923780749 ], [ 39.202850452345892, -6.169287595878634 ], [ 39.202843804812794, -6.169520876912047 ], [ 39.202816855354271, -6.169662613845086 ], [ 39.202777688807885, -6.169744244298441 ], [ 39.202751188507001, -6.169840253841821 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302066", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid_eliptical", "channels": null, "width": 46.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203072875210246, -6.169493726291684 ], [ 39.203025444163245, -6.169488903483979 ], [ 39.202984391154757, -6.169485598967556 ], [ 39.202959058663751, -6.169486938636401 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302068", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "round", "channels": "2", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203433728459878, -6.169263660452863 ], [ 39.203320450902545, -6.169291614886586 ], [ 39.203154891395684, -6.16932162347835 ], [ 39.202989870877992, -6.169330911851634 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302079", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203735562395337, -6.169311620614615 ], [ 39.20352634476567, -6.169287417256053 ], [ 39.203433728459878, -6.169263660452863 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302080", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 26.0, "width_bott": null, "width_top": null, "depth": 13.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204060123707492, -6.169194176262963 ], [ 39.203896450662725, -6.169178189539328 ], [ 39.203799252948983, -6.169162202815193 ], [ 39.203757660951332, -6.169154879287779 ], [ 39.203746970999454, -6.169238206733975 ], [ 39.203735562395337, -6.169311620614615 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302081", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 40.0, "width_bott": null, "width_top": null, "depth": 17.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20443229572971, -6.169406915746225 ], [ 39.204339769255434, -6.169402896739157 ], [ 39.204256585260126, -6.169390929029012 ], [ 39.204144026355024, -6.169374942311284 ], [ 39.203978287185116, -6.169350917578176 ], [ 39.20382880752183, -6.169326178353724 ], [ 39.203735562395337, -6.169311620614615 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302054", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 148.0, "width_bott": null, "width_top": null, "depth": 19.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204974788329785, -6.169544187147512 ], [ 39.204778955597845, -6.16951766170708 ], [ 39.204591207703459, -6.169493636980442 ], [ 39.204323689411851, -6.169456930053991 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404552", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "sand", "profile": "open_rectangular", "channels": null, "width": 135.0, "width_bott": null, "width_top": null, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209956485569393, -6.173541386151268 ], [ 39.210019726965399, -6.173455201443034 ], [ 39.21007227840952, -6.173362943599932 ], [ 39.210092759997991, -6.173274615407877 ], [ 39.210068954642971, -6.173181821669533 ], [ 39.209821468782195, -6.172998198978637 ], [ 39.209713670948098, -6.172908620376289 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404563", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 200.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209713670948098, -6.172908620376289 ], [ 39.209678007831315, -6.17271294064488 ], [ 39.209643153198293, -6.172538248865589 ], [ 39.209598147602563, -6.172364182204074 ], [ 39.209576049046568, -6.172289875638482 ], [ 39.209589254281248, -6.172015155601215 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404562", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 135.0, "width_bott": null, "width_top": null, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209589254281248, -6.172015155601215 ], [ 39.209421628649224, -6.171912894692691 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404561", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 120.0, "width_bott": null, "width_top": null, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209655549949211, -6.171889138007177 ], [ 39.209567065893729, -6.171820011404954 ], [ 39.209533918059748, -6.171797147823942 ], [ 39.209509124557904, -6.171785894654797 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302056", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 70.0, "width_top": 170.0, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20616568490194, -6.169835609659679 ], [ 39.206011354336127, -6.1698649037311 ], [ 39.205933021243354, -6.169913578327894 ], [ 39.20574392587605, -6.170017625845539 ], [ 39.205515843625406, -6.170158201600879 ], [ 39.205312105718967, -6.17026823291578 ], [ 39.205095521903964, -6.170398895072549 ], [ 39.204914421542689, -6.170515624668601 ], [ 39.204826566307901, -6.170570908225003 ], [ 39.204625343684263, -6.170687637783178 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302055", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 130.0, "width_bott": null, "width_top": null, "depth": 130.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206693085805249, -6.169762910341255 ], [ 39.206483508849466, -6.16977291319647 ], [ 39.206281028584428, -6.169808905611431 ], [ 39.20616568490194, -6.169835609659679 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318040", "covered": null, "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 294.0, "width_top": 294.0, "depth": 111.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207530225818516, -6.170265642893225 ], [ 39.20747219465116, -6.170217236262134 ], [ 39.207438417996478, -6.170184191142423 ], [ 39.207363588333315, -6.17011926194177 ], [ 39.207280763664123, -6.170041650548434 ], [ 39.207196950848108, -6.169976185463285 ], [ 39.207130924674722, -6.169924206358532 ], [ 39.207044416912865, -6.169863921307981 ], [ 39.206968958429002, -6.169796580665648 ], [ 39.206925659632304, -6.169749245726234 ], [ 39.206901315288107, -6.169740939783611 ], [ 39.20684894350704, -6.169751210572866 ], [ 39.206765040859501, -6.16975719442392 ], [ 39.206675568657211, -6.169765232432654 ], [ 39.206608195010901, -6.169767643835255 ], [ 39.206540462038475, -6.169775949777472 ], [ 39.206489886887979, -6.169778629113654 ], [ 39.206461140798886, -6.169784077097157 ], [ 39.20642080644263, -6.169788899902179 ], [ 39.206343371665142, -6.169800599669731 ], [ 39.206266925034463, -6.16981622912981 ], [ 39.206218954998292, -6.169826231984021 ], [ 39.206142149041504, -6.169841950754539 ], [ 39.20609489765755, -6.16984757735978 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318039", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": 70.0, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207792354218427, -6.169591879350143 ], [ 39.207746809633527, -6.169600185295129 ], [ 39.207697222629832, -6.169607955372553 ], [ 39.207655001811482, -6.16961661856221 ], [ 39.207604246997931, -6.169626889353871 ], [ 39.207546305662099, -6.169633944941081 ], [ 39.207464469139722, -6.169651628564286 ], [ 39.207427009392369, -6.169657255171535 ], [ 39.207358917093842, -6.169671634278732 ], [ 39.207316965770062, -6.169677886064332 ], [ 39.207259293928821, -6.169687888921137 ], [ 39.207203688212743, -6.169696194864595 ], [ 39.207135326419618, -6.169709948792209 ], [ 39.207071905360564, -6.169718611980181 ], [ 39.207026989596358, -6.169722184428811 ], [ 39.206972641521666, -6.169725935499816 ], [ 39.206926108789943, -6.169735581110874 ], [ 39.206901315288107, -6.169740939783611 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318041", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209370155183457, -6.171846179486713 ], [ 39.209278347361419, -6.171780893246215 ], [ 39.209125454100054, -6.171673630882886 ], [ 39.209033017457315, -6.171616203980035 ], [ 39.20890887028505, -6.171522963396653 ], [ 39.20879020283602, -6.17143963630968 ], [ 39.208707108672236, -6.17138095902836 ], [ 39.208511904761004, -6.171244938456285 ], [ 39.208450190500983, -6.171120885520624 ], [ 39.208330175579029, -6.170912255032032 ], [ 39.208236301631842, -6.170796240011602 ], [ 39.20809544579528, -6.170711662455704 ], [ 39.207847420945342, -6.170563584717064 ], [ 39.207691742906604, -6.170419615247559 ], [ 39.207530225818516, -6.170265642893225 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404551", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 135.0, "width_bott": null, "width_top": null, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209589254281248, -6.172015155601215 ], [ 39.209655549949211, -6.171889138007177 ], [ 39.20999915554539, -6.171397660173025 ], [ 39.210264068722672, -6.171023625855299 ], [ 39.210651961262357, -6.170462663194777 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318035", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "sand", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207783730391689, -6.170189907055172 ], [ 39.20778669483213, -6.170161595424257 ], [ 39.207786425337552, -6.170124888544079 ], [ 39.207786425337552, -6.170072194964662 ], [ 39.207792803376066, -6.169994583564428 ], [ 39.207793342365235, -6.169949213488616 ], [ 39.207795408490391, -6.169871244825617 ], [ 39.207794061017459, -6.169825606805638 ], [ 39.207773669260519, -6.16978863196857 ], [ 39.207755613123297, -6.169722898918518 ], [ 39.207749504579375, -6.169663239023644 ], [ 39.207747528285751, -6.169627961088655 ], [ 39.207746809633527, -6.169600185295129 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318027", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207792354218427, -6.169591879350143 ], [ 39.207845085325602, -6.169579911644287 ], [ 39.20790536228116, -6.1695696408517 ], [ 39.207955398442486, -6.169556958655377 ], [ 39.208036156986537, -6.169546241306116 ], [ 39.208099218719475, -6.169542579545082 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318026", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208099218719475, -6.169542579545082 ], [ 39.208213214929032, -6.169517215150825 ], [ 39.208295949766701, -6.169507212290798 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318036", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209112787854551, -6.169437549510289 ], [ 39.209004451031291, -6.16942513524461 ], [ 39.208972291344118, -6.169424688688271 ], [ 39.208939053678606, -6.169427189403694 ], [ 39.208891263305482, -6.169427725271277 ], [ 39.208864313846959, -6.169430404609221 ], [ 39.208839161019007, -6.169431208410586 ], [ 39.208781309514713, -6.169434602238606 ], [ 39.208746005724045, -6.169441925762155 ], [ 39.208694262763679, -6.169445944768945 ], [ 39.208638297721485, -6.169454429338712 ], [ 39.208586464929581, -6.169464700133531 ], [ 39.208537057588956, -6.169469612252722 ], [ 39.208470941584046, -6.169482651696156 ], [ 39.208371767576686, -6.169500603258165 ], [ 39.208347962221652, -6.169499620834389 ], [ 39.208295949766701, -6.169507212290798 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173214", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "grass_or_plants", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 90.0, "width_bott": null, "width_top": null, "depth": 62.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208924321307947, -6.169002603481423 ], [ 39.208885783582254, -6.168988938846799 ], [ 39.208864583341551, -6.168978578731431 ], [ 39.208842484785556, -6.168970630022084 ], [ 39.208823709996125, -6.168966611011715 ], [ 39.208789484183804, -6.168964199605457 ], [ 39.208773404340214, -6.168952946376156 ], [ 39.208776099286062, -6.168894626064958 ], [ 39.208719774917746, -6.168857204606137 ], [ 39.208622577204011, -6.168809244403278 ], [ 39.20853786607271, -6.168799688086715 ], [ 39.208510377625018, -6.16879441871583 ], [ 39.208496453738121, -6.168790578326853 ], [ 39.208485314628597, -6.168723862727828 ], [ 39.208473726361433, -6.168676617004046 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173213", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 140.0, "width_bott": null, "width_top": null, "depth": 130.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209256877626125, -6.169076910507929 ], [ 39.209136144051946, -6.169034219693497 ], [ 39.209016218961509, -6.169029575504277 ], [ 39.208924321307947, -6.169002603481423 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318049", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "metal", "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209275652415556, -6.169384587928747 ], [ 39.209253553859568, -6.169329214937302 ], [ 39.209263974316869, -6.169277950259422 ], [ 39.209313201994441, -6.169174885020967 ], [ 39.209335390381959, -6.169114957130458 ], [ 39.20941920319796, -6.168940174853728 ], [ 39.209449386591515, -6.168859616012861 ], [ 39.209693369022673, -6.168335179445796 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302070", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "metal", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 50.0, "width_bott": null, "width_top": null, "depth": 90.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203348029181775, -6.168858187031099 ], [ 39.20312138423558, -6.168784951710412 ], [ 39.203048890192164, -6.168763606291859 ], [ 39.202755141094251, -6.168672955236995 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302071", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203395280565715, -6.167185918478956 ], [ 39.203329164560806, -6.167300951861685 ], [ 39.203211215764, -6.167482254425104 ], [ 39.203097219554444, -6.16767695366064 ], [ 39.202953668772039, -6.167887550276183 ], [ 39.202812902767022, -6.168096896447259 ], [ 39.202767268350584, -6.168511658838973 ], [ 39.202755141094251, -6.168594182583608 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302060", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20359138279224, -6.165894202623931 ], [ 39.203498856317978, -6.165950201157063 ], [ 39.20341908592075, -6.166030224568961 ], [ 39.203364109025358, -6.166131504182309 ], [ 39.203320450902545, -6.166228943368801 ], [ 39.203268168953009, -6.166356927167655 ], [ 39.203178427256134, -6.166565559449048 ], [ 39.203103328098379, -6.166750256109121 ], [ 39.203038200240279, -6.166901550133793 ], [ 39.202973162213709, -6.167075529277647 ], [ 39.202908753007833, -6.167260225760081 ], [ 39.202855752406073, -6.167432954423855 ], [ 39.202807512875317, -6.167611488283457 ], [ 39.202761878458887, -6.167810206490716 ], [ 39.202723700059309, -6.168023482398379 ], [ 39.202699625209689, -6.168195585633173 ], [ 39.202682197893182, -6.168369653663864 ], [ 39.202666657038762, -6.168543632325958 ], [ 39.202655967086883, -6.168774234345557 ], [ 39.202646624607937, -6.168952946376155 ], [ 39.202637192297445, -6.169097630734625 ], [ 39.202625783693335, -6.16931563962239 ], [ 39.202661985799288, -6.169428261138866 ], [ 39.202715705053279, -6.169560888350035 ], [ 39.202745888446827, -6.169690925502649 ], [ 39.202751188507001, -6.169840253841821 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302078", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "grass_or_plants", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 40.0, "width_top": 92.0, "depth": 54.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203797995307582, -6.16797150310215 ], [ 39.203772752648099, -6.168067602278111 ], [ 39.203744994705822, -6.168171650158101 ], [ 39.203704660349565, -6.168306957027272 ], [ 39.203661810710514, -6.168488259246678 ], [ 39.203598120156869, -6.168727613805915 ], [ 39.203527692238602, -6.168958215745474 ], [ 39.203486818893175, -6.169136927714062 ], [ 39.203433728459878, -6.169263660452863 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302072", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203970561673664, -6.166913517900136 ], [ 39.203664505656363, -6.166938257237188 ], [ 39.203395280565715, -6.167185918478956 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302073", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203797995307582, -6.165845527658116 ], [ 39.203761344043997, -6.165955202620659 ], [ 39.203711397714201, -6.1660955115177 ], [ 39.203649773285711, -6.166256897962515 ], [ 39.203586711552759, -6.166454544936239 ], [ 39.20352805156471, -6.166622540340388 ], [ 39.203485740914829, -6.166753203395736 ], [ 39.203455288026696, -6.166854929429486 ], [ 39.203431482671668, -6.16696255001466 ], [ 39.203392316125282, -6.167067491228117 ], [ 39.203361054753394, -6.167160553971944 ], [ 39.203395280565715, -6.167185918478956 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302061", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203533800782523, -6.165842937613938 ], [ 39.203535417750039, -6.165844277291968 ], [ 39.20359138279224, -6.165894202623931 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302074", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.203739245488009, -6.165712899517566 ], [ 39.203769518713088, -6.165803908326011 ], [ 39.203797995307582, -6.165845527658116 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302075", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204685800302883, -6.165413258040915 ], [ 39.204620402950191, -6.16543424634658 ], [ 39.204532907041525, -6.16546648795494 ], [ 39.204415227739304, -6.165497925754 ], [ 39.204323689411851, -6.165526237633947 ], [ 39.204203943984474, -6.165559908227389 ], [ 39.204065154273088, -6.165605903862178 ], [ 39.204009189230881, -6.165647523209829 ], [ 39.203950529242832, -6.16572022309253 ], [ 39.203797995307582, -6.165845527658116 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302077", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206205570100558, -6.166509560980887 ], [ 39.206040908908975, -6.16651920665048 ], [ 39.205863850966473, -6.166528495072866 ], [ 39.205682481110614, -6.166531174425453 ], [ 39.205582947777138, -6.166540552159378 ], [ 39.205427718896033, -6.16655421685708 ], [ 39.205273208667165, -6.166542874264897 ], [ 39.205102169437069, -6.166494556605654 ], [ 39.20502464482805, -6.166487500976667 ], [ 39.20489672473159, -6.166508935798595 ], [ 39.204768175814436, -6.166541177341635 ], [ 39.204627050483303, -6.166549215399141 ], [ 39.204513413599855, -6.166556181715554 ], [ 39.204356927077363, -6.166553948921837 ], [ 39.204207986403262, -6.1665459108644 ], [ 39.204146002648656, -6.166575919611561 ], [ 39.204080874790556, -6.166618253376987 ], [ 39.20404871510339, -6.166660229892124 ], [ 39.204029311493244, -6.166713548992729 ], [ 39.204006763779624, -6.166785534235601 ], [ 39.203970561673664, -6.166913517900136 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173217", "covered": "culvert", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206510997297158, -6.166832244257723 ], [ 39.206230004276286, -6.166855554611373 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173216", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206830168717609, -6.166772226790713 ], [ 39.206781929186846, -6.166785534235609 ], [ 39.206761088272252, -6.166860198819649 ], [ 39.206688684060353, -6.166861538495104 ], [ 39.206623646033783, -6.166839478505513 ], [ 39.206510997297158, -6.166832244257723 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173218", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206601906803911, -6.166506524381159 ], [ 39.206577382796659, -6.166516884544844 ], [ 39.206502103975836, -6.166516884544849 ], [ 39.206494108969814, -6.166509739604397 ], [ 39.206397989234411, -6.166514383815703 ], [ 39.206270787790174, -6.166517688350639 ], [ 39.206213295612002, -6.166519474585734 ], [ 39.206212756622826, -6.166540998718131 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173219", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 153.0, "width_bott": null, "width_top": null, "depth": 46.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206650505660782, -6.166502237416832 ], [ 39.206601906803911, -6.166506524381159 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173220", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 280.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.206960604096849, -6.166873506262355 ], [ 39.20693751739406, -6.166801521031394 ], [ 39.206893230450547, -6.166667553453997 ], [ 39.206824778825897, -6.166503487781426 ], [ 39.206797290378205, -6.166496253529067 ], [ 39.206650505660782, -6.166502237416832 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173212", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208473726361433, -6.168676617004046 ], [ 39.20850319110275, -6.168565602933237 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173215", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 81.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20850319110275, -6.168565602933237 ], [ 39.208502023292887, -6.168539345378098 ], [ 39.208497172390345, -6.168501655959941 ], [ 39.208476421307282, -6.168486919575346 ], [ 39.208452615952261, -6.168479238792901 ], [ 39.208446148082203, -6.168459590279174 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173221", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 160.0, "width_top": 240.0, "depth": 71.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208926297601572, -6.166836888466183 ], [ 39.208893059936052, -6.166838228141708 ], [ 39.208870961380065, -6.166834923608764 ], [ 39.208829099887822, -6.166827510737501 ], [ 39.208752024436443, -6.166815900216042 ], [ 39.208676925278695, -6.166810184266907 ], [ 39.208600748142601, -6.166805897305036 ], [ 39.208447226060549, -6.16679517990017 ], [ 39.208163627925344, -6.166782229702336 ], [ 39.207999595554469, -6.166788928080573 ], [ 39.207742767214739, -6.166796876822621 ], [ 39.207514505301049, -6.166819561995906 ], [ 39.207155718176573, -6.166859484326073 ], [ 39.206960604096849, -6.166873506262355 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173227", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 138.0, "width_top": 270.0, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20836907263083, -6.166194915570598 ], [ 39.208267473172199, -6.166407477633785 ], [ 39.208120329128661, -6.166603874187 ], [ 39.208074425217639, -6.166670500741075 ], [ 39.20806598105397, -6.166684879929241 ], [ 39.208032743388458, -6.166735251740678 ], [ 39.207999595554469, -6.166788928080573 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173222", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 138.0, "width_bott": null, "width_top": null, "depth": 94.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209012446037313, -6.16685251801363 ], [ 39.208964565832673, -6.166840550245918 ], [ 39.208926297601572, -6.166836888466183 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173195", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 138.0, "width_bott": null, "width_top": null, "depth": 94.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209220585688641, -6.166860198819651 ], [ 39.209081975640309, -6.166862699547161 ], [ 39.209012446037313, -6.16685251801363 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173223", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209614946098377, -6.166915929315715 ], [ 39.209537870646997, -6.166908963004025 ], [ 39.209360902536027, -6.166906908835167 ], [ 39.209361441525203, -6.166879490145869 ], [ 39.209358746579341, -6.16686555752144 ], [ 39.209266130273548, -6.166847159311717 ], [ 39.209220585688641, -6.166860198819651 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728302076", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": 38.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205203050243483, -6.165272234467666 ], [ 39.20511258989437, -6.165305190581547 ], [ 39.205056624852169, -6.165325553707805 ], [ 39.204997875032589, -6.165343505410558 ], [ 39.20494685072444, -6.165358241882538 ], [ 39.204890616187662, -6.165369495188118 ], [ 39.204826206981792, -6.165382534732401 ], [ 39.204725685501494, -6.165399504001852 ], [ 39.204708168353456, -6.165405487901993 ], [ 39.204685800302883, -6.165413258040915 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046741", "covered": "culvert", "waterway": "underground_drain", "blockage": "yes", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "2", "width": 240.0, "width_bott": null, "width_top": null, "depth": 70.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20477230806474, -6.165094235692506 ], [ 39.204728649941934, -6.165269555108709 ], [ 39.205016290495905, -6.165192210941419 ], [ 39.2053978948286, -6.16507092526142 ], [ 39.205721108667831, -6.164965537092809 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046765", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 45.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20477230806474, -6.165094235692506 ], [ 39.204728649941934, -6.165269555108709 ], [ 39.205016290495905, -6.165192210941419 ], [ 39.2053978948286, -6.16507092526142 ], [ 39.205721108667831, -6.164965537092809 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046747", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 100.0, "width_bott": null, "width_top": null, "depth": 70.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205529947175371, -6.163726242108885 ], [ 39.205444158065738, -6.163936840293185 ], [ 39.204969398438081, -6.164752885139706 ], [ 39.20477230806474, -6.165094235692506 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "733173228", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 127.0, "width_top": 160.0, "depth": 81.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208654108070483, -6.165399236066005 ], [ 39.20853606944214, -6.165640199633866 ], [ 39.208464294050948, -6.165872231905968 ], [ 39.208454951571994, -6.165904294863992 ], [ 39.208425307167616, -6.166006288996126 ], [ 39.208383086349265, -6.16614257884785 ], [ 39.20836907263083, -6.166194915570598 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046730", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 170.0, "width_bott": null, "width_top": null, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208833052475079, -6.165078248845258 ], [ 39.208757414328154, -6.165206232921778 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046758", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 80.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209809970346562, -6.166330490879543 ], [ 39.209769905484883, -6.166074255302709 ], [ 39.209690045256131, -6.165692893653778 ], [ 39.209609556206665, -6.165333502471779 ], [ 39.209556016615728, -6.165207483289435 ], [ 39.209461424016318, -6.16505091937341 ], [ 39.209326676723705, -6.164886942512771 ], [ 39.209266309936602, -6.164819958486489 ], [ 39.209232802776512, -6.164806383056134 ], [ 39.209200373594747, -6.164789413767709 ], [ 39.209174861440687, -6.164785394725634 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046757", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 35.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210161481117233, -6.167053558608624 ], [ 39.210087100611709, -6.166910213367663 ], [ 39.210036794955798, -6.166757490358028 ], [ 39.20992208009401, -6.166296195152493 ], [ 39.20979595662812, -6.16573495955402 ], [ 39.209740350912035, -6.165513555340899 ], [ 39.209693369022673, -6.165295544889892 ], [ 39.209698130093678, -6.165248924044412 ], [ 39.209554579311281, -6.165019481547854 ], [ 39.209481995436327, -6.164927490172574 ], [ 39.209401057229222, -6.164824245464429 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046759", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 160.0, "width_bott": null, "width_top": null, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209189503979815, -6.164765924699134 ], [ 39.209174861440687, -6.164785394725634 ], [ 39.209042988756977, -6.164955534146921 ], [ 39.208952528407863, -6.165134247464532 ], [ 39.208833052475079, -6.165078248845258 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046731", "covered": null, "waterway": "drain:culvert_entrance", "blockage": null, "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209271430333729, -6.164687776649826 ], [ 39.209189503979815, -6.164765924699134 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046732", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 120.0, "width_bott": null, "width_top": null, "depth": 75.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209331258131648, -6.164740202828169 ], [ 39.209283377927008, -6.164701887955569 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "732653251", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209401057229222, -6.164824245464429 ], [ 39.209331258131648, -6.164740202828169 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046760", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 35.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209264243811454, -6.164679559939964 ], [ 39.209230107830656, -6.164643924425106 ], [ 39.208804306385986, -6.164264794551132 ], [ 39.208839789839708, -6.164222014037154 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046733", "covered": null, "waterway": "drain:silt_trap", "blockage": null, "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209283377927008, -6.164701887955569 ], [ 39.209271430333729, -6.164687776649826 ], [ 39.209264243811454, -6.164679559939964 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046761", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209437349166699, -6.164658392980304 ], [ 39.209331258131648, -6.164709926040976 ], [ 39.209283377927008, -6.164701887955569 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "732653250", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 100.0, "width_bott": null, "width_top": null, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209529606146383, -6.16465964334926 ], [ 39.209506878769695, -6.164660536469932 ], [ 39.209437349166699, -6.164658392980304 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046762", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 100.0, "width_bott": null, "width_top": null, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209550447060977, -6.163669707467572 ], [ 39.209529695977913, -6.163819752000014 ], [ 39.209513885628908, -6.163969439241296 ], [ 39.209502746519391, -6.164077060411941 ], [ 39.209480019142696, -6.164262293811372 ], [ 39.209463849467582, -6.164461013273581 ], [ 39.209437349166699, -6.164658392980304 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728404560", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 50.0, "width_top": 130.0, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210510296942061, -6.170369958275058 ], [ 39.210651961262357, -6.170462663194777 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012126", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 190.0, "width_bott": 160.0, "width_top": 180.0, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216157555975677, -6.167008545527786 ], [ 39.216235709405389, -6.167020959850059 ], [ 39.216312515362191, -6.167031498627014 ], [ 39.21644887962232, -6.167080262795657 ], [ 39.216516253268622, -6.167114915718616 ], [ 39.216616864580445, -6.167157249441003 ], [ 39.216704719815226, -6.167169217201576 ], [ 39.21673014213777, -6.167110539447537 ], [ 39.216755384797253, -6.167058560061814 ], [ 39.216758349237701, -6.167033910042051 ], [ 39.216765805254553, -6.167009527956172 ], [ 39.21677505790197, -6.166988539712861 ], [ 39.216785927516909, -6.166983181012304 ], [ 39.216808026072897, -6.166936917561907 ], [ 39.21681871602479, -6.166880919132975 ], [ 39.216822129622862, -6.166845194454335 ], [ 39.216842880705933, -6.166804557629431 ], [ 39.216896510128393, -6.166793929536251 ], [ 39.216899205074242, -6.166764188736573 ], [ 39.2169237290815, -6.166727928179737 ], [ 39.216934688527964, -6.166687916527946 ], [ 39.216991641716973, -6.166645493456336 ], [ 39.217049672884336, -6.166627899044594 ], [ 39.217152709647415, -6.166628524226759 ], [ 39.217260956639151, -6.166629506655856 ], [ 39.217352494966612, -6.166618521312213 ], [ 39.217450411332585, -6.166603249004831 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728318070", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "concrete", "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.212488027871579, -6.169832215834198 ], [ 39.212499975464858, -6.169855615367172 ], [ 39.212520187558745, -6.169910184502938 ], [ 39.212534919929404, -6.169954214914476 ], [ 39.21253420127718, -6.170018876201872 ], [ 39.21251012642756, -6.170083626792512 ], [ 39.212493327931753, -6.170126228211273 ], [ 39.212464492011129, -6.170178207296219 ], [ 39.212432961144657, -6.170242957867389 ], [ 39.212390111505606, -6.170296187296533 ], [ 39.212351843274504, -6.17035022052031 ], [ 39.212284828954303, -6.170416221425834 ], [ 39.212249255669057, -6.170455607618582 ], [ 39.212196973719514, -6.170498209007481 ], [ 39.212135888280201, -6.170537595194127 ], [ 39.212114508376438, -6.170550188055931 ], [ 39.212087648749439, -6.170568228892853 ], [ 39.212032671854054, -6.17059493290281 ], [ 39.211952182804595, -6.170628245930095 ], [ 39.211890468544574, -6.170644232609999 ], [ 39.211862710602297, -6.170654414070706 ], [ 39.211839444236439, -6.17065825444617 ], [ 39.211770273959566, -6.170677902878404 ], [ 39.211723741227843, -6.170690138492642 ], [ 39.211671189783722, -6.170706214481745 ], [ 39.211610912828156, -6.170716931807515 ], [ 39.211538508616265, -6.170732918484752 ], [ 39.211484160541573, -6.170740956478689 ], [ 39.211416427569148, -6.170752209670041 ], [ 39.211230027147693, -6.170718182162179 ], [ 39.211149627929764, -6.170686208806334 ], [ 39.211080457652891, -6.170642892944109 ], [ 39.210943015414415, -6.17055563603149 ], [ 39.210901423416757, -6.170528217530909 ], [ 39.210777366076023, -6.17044417579879 ], [ 39.210725084126494, -6.170408897915738 ], [ 39.210639295016861, -6.170336198675983 ], [ 39.210582880817014, -6.170297616274421 ], [ 39.210551349950542, -6.170268232915788 ], [ 39.210537246400584, -6.170254211069296 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320009", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 150.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211666159218126, -6.168720200961111 ], [ 39.211724190385489, -6.168775931261668 ], [ 39.211883461685368, -6.168968218615876 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322157", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 150.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211666159218126, -6.168720200961111 ], [ 39.211724190385489, -6.168775931261668 ], [ 39.211883461685368, -6.168968218615876 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294013", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 210.0, "width_bott": 98.0, "width_top": 168.0, "depth": 43.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.21514201054697, -6.170813655662949 ], [ 39.215204353627698, -6.170836876530504 ], [ 39.215260408501422, -6.170871261274826 ], [ 39.215314397249998, -6.170898590446647 ], [ 39.215385364157449, -6.170928241703369 ], [ 39.215461451462012, -6.170959589867556 ], [ 39.215508792677483, -6.170981649685676 ], [ 39.21558559863427, -6.170981649685671 ], [ 39.215648570535691, -6.170971914786297 ], [ 39.215707589849856, -6.170981203130658 ], [ 39.215786821257915, -6.171004602612881 ], [ 39.215834970957147, -6.171031217289866 ], [ 39.215847816865704, -6.171052205373126 ], [ 39.215927227936824, -6.171074890364302 ], [ 39.216001967768463, -6.171080606267448 ], [ 39.216056315843147, -6.171118206191221 ], [ 39.21604059532568, -6.171164647898642 ], [ 39.216017059465237, -6.171221896228525 ], [ 39.215997566023574, -6.171277894198869 ], [ 39.216083804290847, -6.171309242342376 ], [ 39.216135816745798, -6.171329247994229 ], [ 39.216188817347565, -6.171352200906379 ], [ 39.216249363797708, -6.171379619364332 ], [ 39.216313503508999, -6.171395248777841 ], [ 39.216372073665525, -6.171409627837845 ], [ 39.216449598274544, -6.171428204511106 ], [ 39.216493885218043, -6.171441243906349 ], [ 39.216539609466004, -6.171454819166797 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294012", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 240.0, "width_bott": null, "width_top": null, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216539609466004, -6.171454819166797 ], [ 39.216571319995538, -6.171473574460301 ], [ 39.216598449117122, -6.171483577283214 ], [ 39.216600784736855, -6.171519926825638 ], [ 39.216619200200185, -6.171545648367677 ], [ 39.216659804051019, -6.171566636430542 ], [ 39.216716128419343, -6.171569226446767 ], [ 39.216758708563809, -6.171557883961881 ], [ 39.216809283714305, -6.171538235562282 ], [ 39.21686264364218, -6.171536627965919 ], [ 39.216861026674664, -6.171517247498278 ], [ 39.216925705375125, -6.171514925414544 ], [ 39.216974573726581, -6.171534931058644 ], [ 39.217029550621966, -6.171555651189252 ], [ 39.217079227457184, -6.17155895569275 ], [ 39.217187204954328, -6.171562885372579 ], [ 39.217309914822138, -6.171546898720383 ], [ 39.2174024412964, -6.171523588573023 ], [ 39.217448704533538, -6.171516890254629 ], [ 39.217488949058271, -6.171515639901853 ], [ 39.217547609046314, -6.171494919769703 ], [ 39.217662952728794, -6.171475896544209 ], [ 39.217936489732814, -6.171371581380058 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294011", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 430.0, "width_bott": 390.0, "width_top": 420.0, "depth": 5.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217936489732814, -6.171371581380058 ], [ 39.217869475412613, -6.17126360444623 ], [ 39.217855371862662, -6.171124190026837 ], [ 39.217903701224948, -6.170992188383902 ], [ 39.217960654413965, -6.170904931528784 ], [ 39.218051204594602, -6.170736222993375 ], [ 39.21802605176665, -6.170637891524732 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294010", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 240.0, "width_bott": null, "width_top": null, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218081657482728, -6.169632248027718 ], [ 39.218109145930427, -6.169721202005444 ], [ 39.218112918854622, -6.169772913196468 ], [ 39.218074021802821, -6.169784880897992 ], [ 39.218059918252855, -6.169809352167447 ], [ 39.218043479083157, -6.169905183076669 ], [ 39.218006917651088, -6.170006908505623 ], [ 39.217973769817107, -6.17013917832741 ], [ 39.217964966327315, -6.170258587314408 ], [ 39.217971074871258, -6.170295204874223 ], [ 39.217957689973517, -6.17037862145225 ], [ 39.217949964462072, -6.17044319337675 ], [ 39.217954276375444, -6.170506604249308 ], [ 39.2179750274585, -6.170544561458131 ], [ 39.21802605176665, -6.170637891524732 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294008", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 320.0, "width_bott": 166.0, "width_top": 245.0, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218081657482728, -6.169632248027718 ], [ 39.218083094787183, -6.169575535393546 ], [ 39.218075009949622, -6.169521234157056 ], [ 39.218079950683695, -6.169467915338817 ], [ 39.218074021802821, -6.169439246424274 ], [ 39.218055875834075, -6.169350203087951 ], [ 39.218064589492329, -6.169291257641443 ], [ 39.218058301285346, -6.169260623868911 ], [ 39.218090101646403, -6.169126210356297 ], [ 39.2181131883492, -6.169012606350985 ], [ 39.218156666808959, -6.1689272247083 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320012", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 153.0, "width_bott": 35.0, "width_top": 142.0, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211139926124694, -6.168186743797376 ], [ 39.211149178772125, -6.168196925305252 ], [ 39.211376452539, -6.168428956458577 ], [ 39.211462421311694, -6.168504960482479 ], [ 39.211666159218126, -6.168720200961111 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322160", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 153.0, "width_bott": 35.0, "width_top": 142.0, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211139926124694, -6.168186743797376 ], [ 39.211149178772125, -6.168196925305252 ], [ 39.211376452539, -6.168428956458577 ], [ 39.211462421311694, -6.168504960482479 ], [ 39.211666159218126, -6.168720200961111 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322165", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 153.0, "width_bott": 35.0, "width_top": 142.0, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210376717459305, -6.167401516739488 ], [ 39.210554404222506, -6.167568261481549 ], [ 39.210651691767779, -6.167678918514942 ], [ 39.210809885089304, -6.167833516801383 ], [ 39.210929271190565, -6.167954891161057 ], [ 39.211069408374897, -6.168109578678512 ], [ 39.211139926124694, -6.168186743797376 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320017", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 153.0, "width_bott": 35.0, "width_top": 142.0, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210376717459305, -6.167401516739488 ], [ 39.210554404222506, -6.167568261481549 ], [ 39.210651691767779, -6.167678918514942 ], [ 39.210809885089304, -6.167833516801383 ], [ 39.210929271190565, -6.167954891161057 ], [ 39.211069408374897, -6.168109578678512 ], [ 39.211139926124694, -6.168186743797376 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320016", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 310.0, "width_bott": 76.0, "width_top": 260.0, "depth": 85.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211666518544249, -6.168010621542058 ], [ 39.21159411433235, -6.167933902955156 ], [ 39.211561595319061, -6.167899518020277 ], [ 39.211504552298514, -6.167841554839309 ], [ 39.211437358315273, -6.167754386777104 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322164", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 310.0, "width_bott": 76.0, "width_top": 260.0, "depth": 85.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211666518544249, -6.168010621542058 ], [ 39.21159411433235, -6.167933902955156 ], [ 39.211561595319061, -6.167899518020277 ], [ 39.211504552298514, -6.167841554839309 ], [ 39.211437358315273, -6.167754386777104 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322154", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 310.0, "width_bott": 76.0, "width_top": 260.0, "depth": 85.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211808721853728, -6.168173615010568 ], [ 39.211724909037713, -6.168079212772176 ], [ 39.211670920289144, -6.168015176428709 ], [ 39.211666518544249, -6.168010621542058 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320006", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 310.0, "width_bott": 76.0, "width_top": 260.0, "depth": 85.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211808721853728, -6.168173615010568 ], [ 39.211724909037713, -6.168079212772176 ], [ 39.211670920289144, -6.168015176428709 ], [ 39.211666518544249, -6.168010621542058 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322166", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "asphalt", "profile": "round", "channels": "1", "width": 80.0, "width_bott": null, "width_top": null, "depth": 56.0, "diameter": 48.0 }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210302606448366, -6.167095535089299 ], [ 39.210304313247406, -6.167278891890387 ], [ 39.210376717459305, -6.167401516739488 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320018", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "asphalt", "profile": "round", "channels": "1", "width": 80.0, "width_bott": null, "width_top": null, "depth": 56.0, "diameter": 48.0 }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210302606448366, -6.167095535089299 ], [ 39.210304313247406, -6.167278891890387 ], [ 39.210376717459305, -6.167401516739488 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322163", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 90.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211437358315273, -6.167754386777104 ], [ 39.211421278471683, -6.167717858353327 ], [ 39.211401515535428, -6.167696155645594 ], [ 39.21138058478931, -6.167663556926525 ], [ 39.211364415114197, -6.167647748779875 ], [ 39.211333602899956, -6.167616400419808 ], [ 39.211306114452256, -6.167590678687114 ], [ 39.21126416312849, -6.167546916014008 ], [ 39.211221942310132, -6.167502528156176 ], [ 39.211182685932215, -6.167462516562834 ], [ 39.21113345825465, -6.167411876885683 ], [ 39.21107982883219, -6.167357932674016 ], [ 39.211005717821251, -6.167285233015826 ], [ 39.210964754644294, -6.167249419052776 ], [ 39.210908250612917, -6.167194045838325 ], [ 39.210863424680234, -6.167150908314026 ], [ 39.210815993633247, -6.167106877669686 ], [ 39.210751225101262, -6.167146889289859 ], [ 39.210713406027793, -6.167176540756425 ], [ 39.210674778470576, -6.167207531895942 ], [ 39.210598691166012, -6.167273175946238 ], [ 39.210552427928889, -6.167240934447723 ], [ 39.210486401755496, -6.16722950255857 ], [ 39.210304313247406, -6.167278891890387 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320015", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 90.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.211437358315273, -6.167754386777104 ], [ 39.211421278471683, -6.167717858353327 ], [ 39.211401515535428, -6.167696155645594 ], [ 39.21138058478931, -6.167663556926525 ], [ 39.211364415114197, -6.167647748779875 ], [ 39.211333602899956, -6.167616400419808 ], [ 39.211306114452256, -6.167590678687114 ], [ 39.21126416312849, -6.167546916014008 ], [ 39.211221942310132, -6.167502528156176 ], [ 39.211182685932215, -6.167462516562834 ], [ 39.21113345825465, -6.167411876885683 ], [ 39.21107982883219, -6.167357932674016 ], [ 39.211005717821251, -6.167285233015826 ], [ 39.210964754644294, -6.167249419052776 ], [ 39.210908250612917, -6.167194045838325 ], [ 39.210863424680234, -6.167150908314026 ], [ 39.210815993633247, -6.167106877669686 ], [ 39.210751225101262, -6.167146889289859 ], [ 39.210713406027793, -6.167176540756425 ], [ 39.210674778470576, -6.167207531895942 ], [ 39.210598691166012, -6.167273175946238 ], [ 39.210552427928889, -6.167240934447723 ], [ 39.210486401755496, -6.16722950255857 ], [ 39.210304313247406, -6.167278891890387 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728320019", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 160.0, "width_bott": 60.0, "width_top": 60.0, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.21096682076945, -6.165630196700693 ], [ 39.210822012345652, -6.165964937612165 ], [ 39.210701278771459, -6.166251539254575 ], [ 39.210695619385163, -6.166263060476602 ], [ 39.2105107460997, -6.166634240177825 ], [ 39.21038336499241, -6.166911553043007 ], [ 39.210302606448366, -6.167095535089299 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728322167", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 160.0, "width_bott": 60.0, "width_top": 60.0, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.21096682076945, -6.165630196700693 ], [ 39.210822012345652, -6.165964937612165 ], [ 39.210701278771459, -6.166251539254575 ], [ 39.210695619385163, -6.166263060476602 ], [ 39.2105107460997, -6.166634240177825 ], [ 39.21038336499241, -6.166911553043007 ], [ 39.210302606448366, -6.167095535089299 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012128", "covered": "no", "waterway": "drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 292.0, "width_bott": 120.0, "width_top": 250.0, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218156666808959, -6.1689272247083 ], [ 39.218217662416741, -6.168734848027849 ], [ 39.218207780948617, -6.168476916695852 ], [ 39.218288180166546, -6.168140927009381 ], [ 39.218040784137301, -6.16795560565314 ], [ 39.218044826556088, -6.167862900294977 ], [ 39.21805560633949, -6.167700174665613 ], [ 39.218049497795555, -6.167520211850483 ], [ 39.218044826556088, -6.167434919279052 ], [ 39.218040065485077, -6.167298183201357 ], [ 39.218015990635465, -6.167132242179244 ], [ 39.218017248276858, -6.167032927613721 ], [ 39.218014283836418, -6.166943258691451 ], [ 39.218027129744975, -6.166908605757274 ], [ 39.218038089191452, -6.166859216390987 ], [ 39.218035394245597, -6.16680125309628 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728005788", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 210.0, "width_bott": 210.0, "width_top": 210.0, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207199196636317, -6.154515303135713 ], [ 39.207201711919119, -6.154556030215184 ], [ 39.207099124313665, -6.154634001128399 ], [ 39.207008574133035, -6.154692590947971 ], [ 39.206942817454234, -6.15474198144636 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987869", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish_or_solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 82.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.219582382996379, -6.167570940828875 ], [ 39.21946335622124, -6.16755691891104 ], [ 39.21936148726801, -6.167515210401657 ], [ 39.219305791720402, -6.167499223627385 ], [ 39.21926455904886, -6.16749520460584 ], [ 39.219220002610761, -6.167519229423044 ], [ 39.219189100564996, -6.16752753540048 ], [ 39.219155323910314, -6.167529500255353 ], [ 39.219122086244795, -6.167539949710618 ], [ 39.219070792442075, -6.167532894095533 ], [ 39.219040878543112, -6.167517889749245 ], [ 39.219006652730783, -6.167508244097836 ], [ 39.218932990877491, -6.167503957141593 ], [ 39.218915563560977, -6.167495204605841 ], [ 39.218881697074771, -6.167489935221994 ], [ 39.218829415125228, -6.167491185584271 ], [ 39.218795907965131, -6.167479217830962 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987867", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": 250.0, "width_bott": null, "width_top": null, "depth": 146.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221868685225992, -6.168514248870092 ], [ 39.221761965370241, -6.168496922454634 ], [ 39.221637997861023, -6.16851219470747 ], [ 39.221554813865716, -6.16853487980736 ], [ 39.221489057186929, -6.168573640960064 ], [ 39.221389883179562, -6.168604185460886 ], [ 39.22129331428652, -6.168636962744898 ], [ 39.221136378606374, -6.16864089244639 ], [ 39.221015106043019, -6.168656879186233 ], [ 39.220939288233041, -6.168675634578726 ], [ 39.220870926439922, -6.168684208472226 ], [ 39.220788371265307, -6.168638927595638 ], [ 39.220668356343353, -6.168590252881786 ], [ 39.220493364526, -6.168548187208025 ], [ 39.220439016451316, -6.168556225235124 ], [ 39.220382692083007, -6.168558190086164 ], [ 39.220319001529361, -6.168528895942521 ], [ 39.220275343406556, -6.168482186069899 ], [ 39.220235907365584, -6.168431635801563 ], [ 39.220150028424413, -6.168395643293095 ], [ 39.220053459531371, -6.168359650782153 ], [ 39.219884486426437, -6.168292220637255 ], [ 39.219762495210844, -6.168282932245771 ], [ 39.219717489615114, -6.168265605822739 ], [ 39.219715513321482, -6.16819219179723 ], [ 39.21971614214219, -6.168166916649843 ], [ 39.219667183959203, -6.168118241892647 ], [ 39.219532526498107, -6.168007495639427 ], [ 39.219476112298274, -6.167940958564883 ], [ 39.219376848459369, -6.167882906076915 ], [ 39.219249467352086, -6.167832891620654 ], [ 39.219152269638336, -6.167792880052237 ], [ 39.219076451828364, -6.167771534593746 ], [ 39.219017522345723, -6.167773499447703 ], [ 39.218903526136167, -6.167782251978879 ], [ 39.218803543645052, -6.167787878605973 ], [ 39.21873078010703, -6.167777250532502 ], [ 39.218631606099663, -6.167753225727007 ], [ 39.218618490696514, -6.167730897839847 ], [ 39.21862181446307, -6.167702228831383 ], [ 39.21863726548596, -6.167665521780885 ], [ 39.218624509408919, -6.167616936289233 ], [ 39.21862181446307, -6.16752092634318 ], [ 39.218588307302973, -6.167386244454673 ], [ 39.218519855678323, -6.167287555118075 ], [ 39.218489043464082, -6.167195474824584 ], [ 39.218317375413285, -6.167007563099394 ], [ 39.218168614402231, -6.166880919132981 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987870", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": null, "width_bott": 157.0, "width_top": 160.0, "depth": 70.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.22101690267359, -6.167384726157319 ], [ 39.220850804177552, -6.167367042458481 ], [ 39.220800049364009, -6.167373740829311 ], [ 39.220768518497536, -6.167375437749916 ], [ 39.220734382516731, -6.167383207859949 ], [ 39.220681381914972, -6.167375259126699 ], [ 39.220637903455227, -6.167393925252953 ], [ 39.220626045693471, -6.167434562032655 ], [ 39.220628471144728, -6.167470197360004 ], [ 39.220623799905255, -6.167498955692612 ], [ 39.220615984562286, -6.167503421272066 ], [ 39.220599365729534, -6.167502081598236 ], [ 39.220577087510485, -6.167499491562157 ], [ 39.220516091902695, -6.167491006961093 ], [ 39.220468301529579, -6.167482879606257 ], [ 39.220456982756993, -6.16747975370053 ], [ 39.220439645272016, -6.167467785946945 ], [ 39.22043461470642, -6.167456443374297 ], [ 39.220431021445286, -6.167447512214563 ], [ 39.220425182395935, -6.167442153518635 ], [ 39.220361851168406, -6.167433490293448 ], [ 39.220264383960092, -6.16742848884379 ], [ 39.220186859351067, -6.167420182864817 ], [ 39.220146345331749, -6.167420182864811 ], [ 39.220126223069393, -6.167427506416178 ], [ 39.220122180650613, -6.167468946997693 ], [ 39.220118228063356, -6.167520926343182 ], [ 39.220109514405102, -6.167573888110923 ], [ 39.220100351589195, -6.167573530864608 ], [ 39.220067922407445, -6.167571476698344 ], [ 39.219999201288211, -6.167566921807886 ], [ 39.219967580590215, -6.167566921807886 ], [ 39.219946470181029, -6.167572191190963 ], [ 39.219924371625041, -6.167578175066604 ], [ 39.219868047256732, -6.167585945173665 ], [ 39.219821065367363, -6.167581926152776 ], [ 39.219794026077317, -6.167582908580109 ], [ 39.219767166450318, -6.167584962746336 ], [ 39.219744349242106, -6.167586213108382 ], [ 39.219705092864189, -6.167588535209322 ], [ 39.219694672406902, -6.167585945173674 ], [ 39.219680658688461, -6.167584516188458 ], [ 39.219664848339463, -6.167582462022216 ], [ 39.219660626257628, -6.167581836841197 ], [ 39.219655865186624, -6.167581033037027 ], [ 39.219634395451337, -6.167573530864606 ], [ 39.219623795330975, -6.167575406407714 ], [ 39.219606098519883, -6.167573709487763 ], [ 39.219595498399535, -6.167572994995153 ], [ 39.219582382996379, -6.167570940828875 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987871", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 30.0, "width_bott": null, "width_top": null, "depth": 8.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221131707366901, -6.16762292016437 ], [ 39.221027053636298, -6.167623545345346 ], [ 39.220999026199436, -6.167614882123131 ], [ 39.220996241422057, -6.167583533761128 ], [ 39.221002260134462, -6.16750288540254 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987868", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 72.0, "width_bott": null, "width_top": null, "depth": 18.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218795907965131, -6.167479217830962 ], [ 39.218768958506608, -6.167481182685992 ], [ 39.218734822525811, -6.167487255874264 ], [ 39.218700327218905, -6.167482522359883 ], [ 39.218667089553392, -6.16747055460638 ], [ 39.218630887447439, -6.167460908954117 ], [ 39.218599715907082, -6.167438491743054 ], [ 39.21855210519702, -6.167356950246267 ], [ 39.218487695991151, -6.167304881573069 ], [ 39.218456883776909, -6.167278177397351 ], [ 39.218427419035592, -6.167243524485067 ], [ 39.218401906881525, -6.167222179004465 ], [ 39.218360314883867, -6.167171539304345 ], [ 39.218358967410936, -6.16712348963735 ], [ 39.218326807723763, -6.167068920214708 ], [ 39.218299948096771, -6.167046235052084 ], [ 39.218202121562335, -6.166936917561907 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987872", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 15.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221002260134462, -6.16750288540254 ], [ 39.220986180290872, -6.167446887033364 ], [ 39.220996241422057, -6.167413484494555 ], [ 39.22101690267359, -6.167384726157319 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987873", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 20.0, "width_top": 127.0, "depth": 48.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221352243769154, -6.167286215443709 ], [ 39.221348650508013, -6.167335515458589 ], [ 39.221345326741464, -6.167363202059176 ], [ 39.221338858871412, -6.167376509489239 ], [ 39.221323767174646, -6.167384904780549 ], [ 39.221302027944773, -6.167389906230604 ], [ 39.221273910676373, -6.16739053141185 ], [ 39.221206177703955, -6.167396247354701 ], [ 39.22115452457512, -6.167410179965198 ], [ 39.22111499870261, -6.167412948624936 ], [ 39.221086791602701, -6.167410894458022 ], [ 39.22101690267359, -6.167384726157319 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012127", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.215603025950784, -6.164993491753148 ], [ 39.215727712112219, -6.165002958826287 ], [ 39.215885995265282, -6.16499751079364 ], [ 39.216027479922531, -6.164992955881076 ], [ 39.216154861029821, -6.164998939785826 ], [ 39.21630838311188, -6.164998939785823 ], [ 39.216462713677686, -6.164996260425498 ], [ 39.216726908202752, -6.164992955881088 ], [ 39.216923279923854, -6.164990901704813 ], [ 39.217012482631574, -6.164993491753157 ], [ 39.217239217409279, -6.165001529834121 ], [ 39.217406124389072, -6.165010907595097 ], [ 39.217627379443549, -6.165009478602951 ], [ 39.217879446712274, -6.165012247275228 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012129", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 320.0, "width_bott": 200.0, "width_top": 310.0, "depth": 10.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218035394245597, -6.16680125309628 ], [ 39.217876212777249, -6.166560915238194 ], [ 39.217806503511206, -6.166038262634221 ], [ 39.21784935315025, -6.165590184966062 ], [ 39.218023716146902, -6.16535154348623 ], [ 39.218037101044636, -6.165246244685353 ], [ 39.218030363680001, -6.165100934092048 ], [ 39.218015721140873, -6.164930884029411 ], [ 39.217991466628199, -6.164802899886449 ], [ 39.217910348758046, -6.164627491003914 ], [ 39.21785339556903, -6.164526925600103 ], [ 39.217785662596611, -6.164394207817729 ], [ 39.217726643282454, -6.164270242591294 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012130", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "tabulated", "channels": null, "width": 340.0, "width_bott": 305.0, "width_top": 300.0, "depth": 325.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217726643282454, -6.164270242591294 ], [ 39.217568360129384, -6.163981496385992 ], [ 39.217469186122017, -6.163813500145357 ], [ 39.217413310911347, -6.163669350218631 ], [ 39.217424180526287, -6.163609511018215 ], [ 39.217401363318068, -6.163529487241138 ], [ 39.21735114749368, -6.16343954978977 ], [ 39.217299494364845, -6.163386408984646 ], [ 39.217284043341962, -6.163343539087533 ], [ 39.217211010309363, -6.16332621250315 ], [ 39.217141929864006, -6.163315495027984 ], [ 39.217085605495697, -6.163306206549324 ], [ 39.217013919936022, -6.163303527180457 ], [ 39.216923998576078, -6.163289505149801 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294955", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": 280.0, "width_bott": null, "width_top": null, "depth": 170.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.200032796625727, -6.159554094438208 ], [ 39.199635202280973, -6.159561418098152 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294958", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 280.0, "width_bott": null, "width_top": null, "depth": 170.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.199635202280973, -6.159561418098152 ], [ 39.199151010342838, -6.159566151683198 ], [ 39.199046087117651, -6.159558649397451 ], [ 39.198926341690274, -6.159536410478387 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294956", "covered": null, "waterway": "drain:culvert_entrance", "blockage": null, "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.200111309381562, -6.159547128029867 ], [ 39.200032796625727, -6.159554094438208 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294957", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": 350.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.200558490729989, -6.159444150213787 ], [ 39.200325827071403, -6.159528818879293 ], [ 39.200111309381562, -6.159547128029867 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728007834", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "sand", "profile": "open_rectangular", "channels": null, "width": 310.0, "width_bott": 310.0, "width_top": 310.0, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204262514141007, -6.157002953865229 ], [ 39.204559676836993, -6.15745541513398 ], [ 39.204560125994632, -6.157459702171408 ], [ 39.204862858245384, -6.1603721109056 ], [ 39.204987454575289, -6.16157015130917 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046766", "covered": "culvert", "waterway": "underground_drain", "blockage": "yes", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 70.0, "width_bott": null, "width_top": null, "depth": 45.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205097498197595, -6.162461222248645 ], [ 39.205102798257769, -6.162528474509993 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046767", "covered": null, "waterway": "drain:culvert_entrance", "blockage": null, "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.20509606089314, -6.162435232328618 ], [ 39.205097498197595, -6.162461222248645 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046748", "covered": "culvert", "waterway": "underground_drain", "blockage": "yes", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 70.0, "width_bott": null, "width_top": null, "depth": 45.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205097498197595, -6.162351814501115 ], [ 39.20509606089314, -6.162435232328618 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046753", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 110.0, "width_bott": null, "width_top": null, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205084113299861, -6.162248837229189 ], [ 39.205097498197595, -6.162351814501115 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046752", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "2", "width": 130.0, "width_bott": null, "width_top": null, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.205056624852169, -6.162108795252282 ], [ 39.205084113299861, -6.162248837229189 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046768", "covered": "no", "waterway": "drain:pipe_inflow", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 90.0, "width_bott": null, "width_top": null, "depth": 70.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204963649220261, -6.161767085528513 ], [ 39.204964996693192, -6.161776820596887 ], [ 39.20498817322752, -6.161798076984041 ], [ 39.204983501988039, -6.16185550495018 ], [ 39.205024824491112, -6.161998851557003 ], [ 39.205056624852169, -6.162108795252282 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046739", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": "concrete", "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 120.0, "width_bott": null, "width_top": null, "depth": 55.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207983875036994, -6.161856844638263 ], [ 39.207962045975599, -6.161771551156235 ], [ 39.207923867576021, -6.161692509540209 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046738", "covered": null, "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 25.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.207923867576021, -6.161692509540209 ], [ 39.207900062220986, -6.161622845733301 ], [ 39.207881916252255, -6.161570508559513 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728007836", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "concrete", "covered_ma": "concrete", "material": "concrete", "profile": "natural", "channels": null, "width": 120.0, "width_bott": 120.0, "width_top": 120.0, "depth": 25.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.208530050729735, -6.158962753219792 ], [ 39.208397279730754, -6.158832802750476 ], [ 39.208281307227573, -6.158695439264499 ], [ 39.20818806210108, -6.158522082564704 ], [ 39.208104159453548, -6.15830174710003 ], [ 39.208065262401746, -6.158227438564364 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728007837", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": "concrete", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 340.0, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.209174681777625, -6.158001386933431 ], [ 39.20860182612094, -6.158114725357024 ], [ 39.208065262401746, -6.158227438564364 ], [ 39.207868172028405, -6.15825869816598 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728007835", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": "concrete", "material": "concrete", "profile": "natural", "channels": null, "width": 290.0, "width_bott": 290.0, "width_top": 290.0, "depth": 170.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.204634326837102, -6.157531152789947 ], [ 39.204568929484424, -6.157474438862256 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728427342", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": 360.0, "width_bott": null, "width_top": null, "depth": 160.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.212446076547806, -6.155059313056046 ], [ 39.212184487137073, -6.154997329356572 ], [ 39.212099416679671, -6.154925342514985 ], [ 39.21202162257606, -6.154865323701623 ], [ 39.211954518424335, -6.154817362234291 ], [ 39.211916250193227, -6.154761362526733 ], [ 39.211914273899609, -6.154705988009461 ], [ 39.211936372455597, -6.154661331136507 ], [ 39.211930353743192, -6.15458603964019 ], [ 39.211897565235319, -6.154512623722482 ], [ 39.211907626366504, -6.154441351325502 ], [ 39.21195245229918, -6.154384637067953 ], [ 39.212002218965921, -6.154313989850445 ], [ 39.212057106029782, -6.15424128840571 ], [ 39.212113520229622, -6.154193326882053 ], [ 39.212196614393399, -6.154138041619428 ], [ 39.212267671132381, -6.154076593695583 ], [ 39.212310610602962, -6.154003356335181 ], [ 39.212313305548811, -6.153958610089306 ], [ 39.212322648027765, -6.153907343926714 ], [ 39.212323995500697, -6.153849915101079 ], [ 39.212351483948382, -6.15357661453942 ], [ 39.212345465235984, -6.153431300752188 ], [ 39.212311958075887, -6.153273929537666 ], [ 39.212273061024078, -6.153204621882432 ], [ 39.212229492732803, -6.153119952208871 ], [ 39.212187900735145, -6.153043945982008 ], [ 39.212107411685693, -6.15296793974425 ], [ 39.212047763550835, -6.152909260420492 ], [ 39.212015603863655, -6.152873177545419 ], [ 39.211933048689048, -6.152865943107296 ], [ 39.211856602058369, -6.152855939933441 ], [ 39.211757428051001, -6.152861209462547 ], [ 39.211685023839095, -6.152853885710229 ], [ 39.211583065054349, -6.152818606657939 ], [ 39.211443556690725, -6.152761892227203 ], [ 39.211343664031133, -6.152718574902 ], [ 39.211215564271619, -6.152655251218207 ], [ 39.211082793272624, -6.152614613307157 ], [ 39.210970773356699, -6.152569241745613 ], [ 39.210884265594835, -6.152537892495148 ], [ 39.210807190143456, -6.152515921224474 ], [ 39.210492689962486, -6.152388648602124 ], [ 39.210374651334156, -6.152339257885026 ], [ 39.210233885329124, -6.152302639086399 ], [ 39.210135250310934, -6.152268610395646 ], [ 39.20999520295814, -6.152249229224356 ], [ 39.209827577326124, -6.152250658250847 ], [ 39.209649171910691, -6.152247889512027 ], [ 39.209482893751606, -6.152247889512029 ], [ 39.20935344651916, -6.152243245175939 ], [ 39.20927098117609, -6.152242619976835 ], [ 39.209203877024365, -6.152236635928336 ], [ 39.209078472210706, -6.152227883140871 ], [ 39.208944353738772, -6.152257892697338 ], [ 39.208755977023699, -6.152253248361316 ], [ 39.208605778708197, -6.152237261127457 ], [ 39.208488458732084, -6.15218126114801 ], [ 39.208408688334856, -6.152124635963435 ], [ 39.208296668418932, -6.152065242033067 ], [ 39.208200818178113, -6.152004508383143 ], [ 39.208071370945675, -6.151951187805349 ], [ 39.207999595554469, -6.151933235649822 ], [ 39.207890989236617, -6.151957886370675 ], [ 39.207748157106444, -6.151959940597382 ], [ 39.207593916372161, -6.151956546657625 ], [ 39.207503366191517, -6.151954492430917 ], [ 39.207402215890525, -6.151928501996752 ], [ 39.207334393086583, -6.151889918257091 ], [ 39.207260012581052, -6.151849905487048 ], [ 39.207246627683325, -6.151834543440621 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728046763", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.210911215053358, -6.162976822701228 ], [ 39.210438341887802, -6.162810255140551 ], [ 39.20969552497936, -6.162563484979995 ], [ 39.209767929191266, -6.161880780398297 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728005799", "covered": "no", "waterway": "drain", "blockage": null, "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 400.0, "width_bott": 60.0, "width_top": 400.0, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.2149767205347, -6.160127393806523 ], [ 39.214957586419153, -6.160122392288001 ], [ 39.214674617104656, -6.159988423024124 ], [ 39.214379879859926, -6.159871780424186 ], [ 39.214164643517854, -6.159824087347633 ], [ 39.214097988523768, -6.159802384316967 ], [ 39.214065110184372, -6.159786397310295 ], [ 39.213999712831694, -6.159758442375669 ], [ 39.213857868848329, -6.159677435575948 ], [ 39.213804868246562, -6.159666092836732 ], [ 39.213771361086465, -6.15965814398787 ], [ 39.213744860785589, -6.15965644704259 ], [ 39.213698956874566, -6.159655107348932 ], [ 39.213624576369043, -6.159641085221895 ], [ 39.213524324383329, -6.159601162348603 ], [ 39.213448147247242, -6.159564454737632 ], [ 39.213417694359116, -6.15952908681808 ], [ 39.213372059942678, -6.159437451742829 ], [ 39.213304416801783, -6.159329829631353 ], [ 39.213251685694601, -6.159257128873155 ], [ 39.213226892192758, -6.159152096801971 ], [ 39.21316392029135, -6.159081092966566 ], [ 39.213108853564428, -6.159059389905542 ], [ 39.212984167402986, -6.159003390645225 ], [ 39.212885262890211, -6.158984456284752 ], [ 39.212830285994819, -6.158971148644195 ], [ 39.21277800404529, -6.158980437198716 ], [ 39.212621068365152, -6.158989457814005 ], [ 39.212499346644151, -6.158996424229667 ], [ 39.212447693515315, -6.158999460872359 ], [ 39.212395770891895, -6.159006784539969 ], [ 39.212333068485066, -6.158986153232193 ], [ 39.212229492732803, -6.158919436400221 ], [ 39.21219329062685, -6.158886837141917 ], [ 39.212101392973288, -6.158830391298179 ], [ 39.212037343093535, -6.158807437844172 ], [ 39.212003746101907, -6.158804847765642 ], [ 39.21194275049411, -6.158809849296585 ], [ 39.211901607654099, -6.158830837863419 ], [ 39.211869088640817, -6.158881121107371 ], [ 39.211837917100461, -6.158911844792302 ], [ 39.211788330096766, -6.158952839473765 ], [ 39.211666518544249, -6.159005444844674 ], [ 39.211612170469557, -6.15899740667289 ], [ 39.211542820529623, -6.158952392908621 ], [ 39.211500599711272, -6.158900859288895 ], [ 39.211427476847142, -6.158793147755581 ], [ 39.211395945980669, -6.15869043773248 ], [ 39.211341687737509, -6.158549412372755 ], [ 39.211303419506407, -6.158465100803536 ], [ 39.211224727087519, -6.158436163355061 ], [ 39.211172265474929, -6.158399455663549 ], [ 39.211134446401459, -6.158339705182131 ], [ 39.211085488218487, -6.158204127831691 ], [ 39.211033206268944, -6.158080697038514 ], [ 39.210935020408392, -6.15799442050471 ], [ 39.210855789000327, -6.157965393717408 ], [ 39.210834678591155, -6.157964143332686 ], [ 39.210745206388857, -6.1579524433041 ], [ 39.210656363007253, -6.157947084512293 ], [ 39.210453164089984, -6.157913413435871 ], [ 39.210352912104277, -6.157924756212514 ], [ 39.210319045618064, -6.15795815934864 ], [ 39.210214481718999, -6.157950835666559 ], [ 39.210175584667198, -6.157948156270669 ], [ 39.210058174859562, -6.157937438686887 ], [ 39.209952982139789, -6.157917432529978 ], [ 39.209815180575205, -6.157902159972188 ], [ 39.209707203078054, -6.157894389723313 ], [ 39.209666599227212, -6.157901713406168 ], [ 39.209617012223525, -6.157910019534159 ], [ 39.20960757991304, -6.157912430990633 ], [ 39.209511370346114, -6.157935741736135 ], [ 39.209475168240161, -6.157938421132092 ], [ 39.209415520105303, -6.15795414025483 ], [ 39.20939710464198, -6.15795842728822 ], [ 39.209174681777625, -6.158001386933431 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727975951", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 300.0, "width_bott": 90.0, "width_top": 300.0, "depth": 95.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.215921478719004, -6.160488842708355 ], [ 39.215881324025808, -6.16041015815247 ], [ 39.215820328418019, -6.160332813276853 ], [ 39.215688186239731, -6.160280118724659 ], [ 39.215509780824299, -6.160225459285317 ], [ 39.215383118369239, -6.160189376907253 ], [ 39.215291849536371, -6.160218135634522 ], [ 39.215250257538713, -6.16023939208411 ], [ 39.215193304349697, -6.160231443243823 ], [ 39.215077242014985, -6.160173389912216 ], [ 39.2149767205347, -6.160127393806523 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727990246", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": null, "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": 250.0, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217510059467443, -6.163202247027164 ], [ 39.217520749419329, -6.163100788229867 ], [ 39.217501974629883, -6.163038180282777 ], [ 39.21742831277659, -6.162950207619964 ], [ 39.217392649659807, -6.16289679882872 ], [ 39.217358513679009, -6.162847498401272 ], [ 39.217335696470798, -6.162794178912076 ], [ 39.217292757000216, -6.1627062062088 ], [ 39.217223047734166, -6.162642258529055 ], [ 39.217161423305683, -6.162570183411484 ], [ 39.217144894304447, -6.162556697235993 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727990249", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": 250.0, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217144894304447, -6.162556697235993 ], [ 39.217109051524616, -6.162512844835144 ], [ 39.217028562475164, -6.162439519325819 ], [ 39.216992360369211, -6.162394237916091 ], [ 39.216950768371554, -6.162300817086209 ], [ 39.216887796470139, -6.162132820313437 ], [ 39.216796617468795, -6.161926151164365 ], [ 39.216724213256889, -6.161842108069047 ], [ 39.216650281909011, -6.161768335904281 ], [ 39.216614708623766, -6.16173332538181 ], [ 39.216574014941386, -6.161688847724947 ], [ 39.216520295687403, -6.161580779507003 ], [ 39.21649217841901, -6.161523530136327 ], [ 39.216412947010944, -6.161515492002676 ], [ 39.216312515362191, -6.161488787535533 ], [ 39.216198519152627, -6.161479499024921 ], [ 39.216080480524298, -6.161487537159107 ], [ 39.216013376372565, -6.161478159335863 ], [ 39.215982564158331, -6.161444845733823 ], [ 39.215965047010286, -6.161356783494248 ], [ 39.215946002726263, -6.161292478401359 ], [ 39.215915460006599, -6.16115681249232 ], [ 39.215903422581803, -6.161059550999655 ], [ 39.215888690211131, -6.160846093666767 ], [ 39.215893990271312, -6.160744813044487 ], [ 39.215915460006599, -6.160598161527184 ], [ 39.215921478719004, -6.160488842708355 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727990231", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 60.0, "width_top": 310.0, "depth": 160.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217750089311352, -6.161703494985867 ], [ 39.217598543522925, -6.161680809593804 ], [ 39.217396063257887, -6.16163284874203 ], [ 39.217288804412966, -6.161614093100502 ], [ 39.217091624208102, -6.161618112166609 ], [ 39.216996402787984, -6.161624810610035 ], [ 39.216793024207661, -6.161662053953957 ], [ 39.216722775952448, -6.161674111151073 ], [ 39.216614708623766, -6.16173332538181 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727990248", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.2178447717423, -6.161399653551854 ], [ 39.217625403149924, -6.161375539144893 ], [ 39.217547698877851, -6.161355533117512 ], [ 39.217484547313376, -6.16132480957404 ], [ 39.21744026036987, -6.161312841681624 ], [ 39.217350518672987, -6.161290156272863 ], [ 39.217249907361165, -6.161275509000539 ], [ 39.21711435158479, -6.161270507492818 ], [ 39.217007182571393, -6.161271489931861 ], [ 39.216927951163335, -6.16128613720428 ], [ 39.216867674207776, -6.161340796534393 ], [ 39.216839467107846, -6.161382148278741 ], [ 39.216781166445912, -6.161440826666413 ], [ 39.216729603148607, -6.161452794555943 ], [ 39.216651090392766, -6.161463512068729 ], [ 39.216555779141117, -6.161493789041191 ], [ 39.21649217841901, -6.161523530136327 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727975954", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 310.0, "width_bott": 60.0, "width_top": 310.0, "depth": 87.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218897058266123, -6.161477534147632 ], [ 39.218784499361028, -6.161432788531491 ], [ 39.218597020961226, -6.161362856752622 ], [ 39.218517879384699, -6.161343475913172 ], [ 39.218448170118641, -6.161373484954618 ], [ 39.218374418433825, -6.16137884371182 ], [ 39.218223501466092, -6.161363481940979 ], [ 39.218073303150582, -6.161420106140618 ], [ 39.2178447717423, -6.161399653551854 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727975965", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 265.0, "width_bott": 100.0, "width_top": 265.0, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.2206321542374, -6.1627182633822 ], [ 39.220548970242092, -6.162682806360405 ], [ 39.220397514285182, -6.162607516001482 ], [ 39.220253604176676, -6.162483818294905 ], [ 39.220238153153794, -6.162476405362827 ], [ 39.220129187509819, -6.162419602651008 ], [ 39.220074300445965, -6.162392183729751 ], [ 39.219943505740595, -6.16232421695146 ], [ 39.219904608688793, -6.16230153158592 ], [ 39.219863016691136, -6.162235529670462 ], [ 39.219844241901704, -6.162200251241367 ], [ 39.219814058508163, -6.162144162999916 ], [ 39.219773903814954, -6.16195616017286 ], [ 39.21974964930228, -6.16180281054914 ], [ 39.219689372346714, -6.161670092085397 ], [ 39.219655775355093, -6.161639547185288 ], [ 39.219586784741267, -6.161656784512157 ], [ 39.219409726798766, -6.161646156315879 ], [ 39.219209851648053, -6.161634099118114 ], [ 39.219093879144872, -6.161598106148379 ], [ 39.219003418795765, -6.161538802589951 ], [ 39.2189443994816, -6.161496111168788 ], [ 39.218897058266123, -6.161477534147632 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727975947", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 300.0, "width_bott": 90.0, "width_top": 300.0, "depth": 95.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216285565903668, -6.160171603655763 ], [ 39.216240021318761, -6.160173389912222 ], [ 39.216177408743455, -6.160179195245671 ], [ 39.216138062534007, -6.160182857071357 ], [ 39.216111292738539, -6.160239392084112 ], [ 39.216093146769801, -6.160254128697844 ], [ 39.215995320235365, -6.160284137800856 ], [ 39.215902344603457, -6.160311378205401 ], [ 39.215840091354259, -6.160326114817112 ], [ 39.215820328418019, -6.160332813276853 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727975943", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": null, "profile": "natural", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217487601585347, -6.160037455778626 ], [ 39.217482301525166, -6.159991727599708 ], [ 39.217477181128039, -6.159986815392752 ], [ 39.217194211813542, -6.159988780275548 ], [ 39.216842162053702, -6.159964844430192 ], [ 39.216826082210119, -6.159938854387924 ], [ 39.216643005555213, -6.159930101727367 ], [ 39.216649114099148, -6.160132841889153 ], [ 39.216574643762094, -6.16013614646385 ], [ 39.216481757961716, -6.160146774690389 ], [ 39.216441872763099, -6.160141415920725 ], [ 39.21640531133103, -6.160145792249279 ], [ 39.216367043099929, -6.160158385357801 ], [ 39.21635168190857, -6.160163386875992 ], [ 39.216304789850746, -6.160172139532707 ], [ 39.216285565903668, -6.160171603655763 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728002814", "covered": "no", "waterway": "drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 95.0, "width_bott": 90.0, "width_top": 300.0, "depth": 300.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217718288950302, -6.159676810385595 ], [ 39.21768172751824, -6.159685384424541 ], [ 39.217593872283452, -6.159704140134227 ], [ 39.217459394485424, -6.159741383612912 ], [ 39.21734476945516, -6.159774429383178 ], [ 39.217185228660703, -6.159797114856721 ], [ 39.217045360970964, -6.159768445419521 ], [ 39.216920315483414, -6.159765140842556 ], [ 39.216745323666075, -6.159699138611702 ], [ 39.216589106638168, -6.159737453845503 ], [ 39.216482117287832, -6.159793810279932 ], [ 39.216376744904998, -6.159828820930318 ], [ 39.216241368791678, -6.159840074353169 ], [ 39.216146776192261, -6.159851774340156 ], [ 39.216129348875754, -6.159918133803501 ], [ 39.216136086240382, -6.15996341542446 ], [ 39.216181720656813, -6.160072823664303 ], [ 39.216177408743455, -6.160179195245671 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728002812", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": "no", "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 300.0, "width_bott": null, "width_top": null, "depth": 300.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217831566507627, -6.160033883264792 ], [ 39.217816295147799, -6.160025845108568 ], [ 39.217783686302987, -6.159852131591675 ], [ 39.217761228420883, -6.159713428675914 ], [ 39.217718288950302, -6.159676810385595 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728002813", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 300.0, "width_bott": 300.0, "width_top": 300.0, "depth": 90.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220601970843859, -6.160120427405702 ], [ 39.220441711397164, -6.160071394658853 ], [ 39.220294208027511, -6.160053085526379 ], [ 39.22013727234738, -6.160012090929876 ], [ 39.22006989870107, -6.160015395505293 ], [ 39.2199776417214, -6.159999140566479 ], [ 39.219935510734565, -6.159971721520208 ], [ 39.219895625535948, -6.159934835309119 ], [ 39.219888708508265, -6.159920277312272 ], [ 39.219818550084582, -6.159878836141145 ], [ 39.219743271263766, -6.159833643825862 ], [ 39.219557409831481, -6.159802920194278 ], [ 39.219413050565322, -6.159778805714756 ], [ 39.219118043826015, -6.159801401875238 ], [ 39.219023810552713, -6.159821140022525 ], [ 39.218986620299958, -6.159828285053019 ], [ 39.218845944126457, -6.159859901811895 ], [ 39.218799141900156, -6.159865885774511 ], [ 39.21877461789289, -6.159861330817878 ], [ 39.218703471322392, -6.159884820103552 ], [ 39.218463890636116, -6.159969399385926 ], [ 39.218414573127028, -6.159971453581639 ], [ 39.218363728481947, -6.15997279327447 ], [ 39.218320429685249, -6.159979848990099 ], [ 39.218314410972845, -6.159988780275548 ], [ 39.218279466508292, -6.160004856588986 ], [ 39.218202750383028, -6.160009411544371 ], [ 39.21805955892674, -6.160016110008096 ], [ 39.217924452308004, -6.160018074890781 ], [ 39.217837315725447, -6.160032097007874 ], [ 39.217831566507627, -6.160033883264792 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728033708", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 310.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.21057515530557, -6.156531379136204 ], [ 39.210518920768784, -6.156819414886944 ], [ 39.210431694354696, -6.157079852659177 ], [ 39.210321111743227, -6.157459434231563 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728005789", "covered": "culvert", "waterway": "underground_drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 150.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.214929109824645, -6.158188140776881 ], [ 39.214428209222213, -6.158118387196929 ], [ 39.214298492495189, -6.158099095552219 ], [ 39.213888770894101, -6.158064709980008 ], [ 39.213768396646032, -6.158045418333335 ], [ 39.213490368065592, -6.157990758663929 ], [ 39.213118016380328, -6.157944405116361 ], [ 39.212430266198801, -6.157882153813937 ], [ 39.212215389182838, -6.157838390340153 ], [ 39.212096721733808, -6.157819277311692 ], [ 39.211113246160757, -6.157632701965004 ], [ 39.210361266436422, -6.157476761007464 ], [ 39.210321111743227, -6.157459434231563 ], [ 39.21025840933639, -6.157484441949166 ], [ 39.210181244053487, -6.157558393335741 ], [ 39.210055479913713, -6.157655744783032 ], [ 39.209881206748584, -6.157792751285062 ], [ 39.209741698384967, -6.157831155969653 ], [ 39.209624019082739, -6.157869382025023 ], [ 39.209616652897417, -6.157896711866671 ], [ 39.209617012223525, -6.157910019534159 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986326", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 340.0, "width_bott": null, "width_top": null, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216316018791794, -6.15597424163467 ], [ 39.216167976432963, -6.15600228608203 ], [ 39.215834970957147, -6.156392675353099 ], [ 39.215765261691097, -6.156570051852288 ], [ 39.215566823844831, -6.156607384864227 ], [ 39.215427315481215, -6.156603455073603 ], [ 39.215332094061097, -6.156416700672906 ], [ 39.215277117165705, -6.156329977301446 ], [ 39.215062599475857, -6.156284695370663 ], [ 39.21477684538398, -6.15620333078708 ], [ 39.214676323903689, -6.156239413436004 ], [ 39.214441594119947, -6.156332746018977 ], [ 39.214366494962192, -6.156478059012671 ], [ 39.214280705852559, -6.156596756566826 ], [ 39.214095563072505, -6.156510033224745 ], [ 39.214020463914757, -6.156398034160571 ], [ 39.213862270593218, -6.156320688700562 ], [ 39.21370201114653, -6.156252721144997 ], [ 39.213646405430453, -6.156154029738067 ], [ 39.213591967524231, -6.156095350766149 ], [ 39.213346547788603, -6.15599201502665 ], [ 39.213304955790953, -6.15581999714775 ], [ 39.21329228954545, -6.155623328663449 ], [ 39.213187725646371, -6.155375304771767 ], [ 39.213099151759366, -6.155355298518349 ], [ 39.213014710122657, -6.155347349604953 ], [ 39.212971770652075, -6.155386022407217 ], [ 39.212911403864986, -6.155395311024438 ], [ 39.212856426969594, -6.155403349250752 ], [ 39.212767853082575, -6.155382003293945 ], [ 39.212652599231625, -6.15533270216872 ], [ 39.212566810121984, -6.155284740743586 ], [ 39.212525218124334, -6.155229991476436 ], [ 39.212503658557516, -6.155158004666363 ], [ 39.21247149887035, -6.155102004994699 ], [ 39.212446076547806, -6.155059313056046 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728427343", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 54.0, "width_top": 132.0, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.212169575103353, -6.152712501544789 ], [ 39.212110106631542, -6.15277511070924 ], [ 39.21203994820786, -6.152856654445878 ], [ 39.212015603863655, -6.152873177545419 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728700628", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "concrete", "covered_ma": "concrete", "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 38.0, "width_top": 72.0, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218168614402231, -6.156932753562764 ], [ 39.218036472223936, -6.15689399155973 ], [ 39.217835968252523, -6.156929984848373 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728700627", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218464878782939, -6.156842725680405 ], [ 39.21834827745905, -6.156871395275552 ], [ 39.218267069757367, -6.156905423671517 ], [ 39.218168614402231, -6.156932753562764 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986328", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 340.0, "width_bott": null, "width_top": null, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216808654893605, -6.156300057288428 ], [ 39.216713523305017, -6.156162693147383 ], [ 39.216566558924526, -6.155990675323748 ], [ 39.216456964459866, -6.155938337594808 ], [ 39.216352670055386, -6.155946733067038 ], [ 39.216316018791794, -6.15597424163467 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986329", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": "1", "width": 340.0, "width_bott": null, "width_top": null, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216557845266273, -6.155315286009245 ], [ 39.216490741114555, -6.155370035267593 ], [ 39.216317815422357, -6.155417282176063 ], [ 39.216309820416328, -6.155472745932804 ], [ 39.216260772401817, -6.155563309928939 ], [ 39.216256819814575, -6.155675309169109 ], [ 39.216298411812225, -6.155808743639715 ], [ 39.216316018791794, -6.15597424163467 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986332", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": 80.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218779378963902, -6.155341276277789 ], [ 39.218750902369393, -6.155346545782233 ], [ 39.218776684018053, -6.155500701093017 ], [ 39.218799501226272, -6.155526691352486 ], [ 39.218794470660683, -6.155552056415472 ], [ 39.218758627880838, -6.155564828260121 ], [ 39.218689277940904, -6.155582512352195 ], [ 39.218688918614802, -6.155630741691193 ], [ 39.218533330407588, -6.155633331785208 ], [ 39.218401188229294, -6.155649318916915 ], [ 39.218234910070201, -6.15566530604813 ], [ 39.218113547675308, -6.155676738186371 ], [ 39.218068542079578, -6.155721305660424 ], [ 39.217946550863999, -6.155784003783916 ], [ 39.217799766146577, -6.155785343487306 ], [ 39.217666995147574, -6.155840003383658 ], [ 39.217676966447229, -6.155928691732954 ], [ 39.21755497523165, -6.155952717073752 ], [ 39.217520749419329, -6.156028008376395 ], [ 39.217402081970299, -6.156094725571587 ], [ 39.217177503149266, -6.156188683374452 ], [ 39.217066201885558, -6.156201455203777 ], [ 39.217062069635247, -6.156256740251694 ], [ 39.216951487023778, -6.156264689151481 ], [ 39.216808654893605, -6.156300057288428 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728700631", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "concrete", "covered_ma": "concrete", "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 38.0, "width_top": 72.0, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.22428596182403, -6.158234762242622 ], [ 39.224251556348648, -6.158249677538284 ], [ 39.224171696119896, -6.158287724937249 ], [ 39.224161994314827, -6.158318716595883 ], [ 39.224080786613143, -6.158339437242762 ], [ 39.224045842148577, -6.158350154818383 ], [ 39.223914508454051, -6.158369714393369 ], [ 39.223778683183085, -6.15838007471591 ], [ 39.223602343892814, -6.158371411342754 ], [ 39.223385760077811, -6.158357389181815 ], [ 39.223255953519256, -6.15834408152556 ], [ 39.223030656045999, -6.158339079990226 ], [ 39.222955287393667, -6.158339079990213 ], [ 39.222946843229991, -6.158370160958999 ], [ 39.222839943711186, -6.158367392252089 ], [ 39.222839584385071, -6.15830210435258 ], [ 39.222666568861342, -6.158300675342393 ], [ 39.22266028065436, -6.158370160959003 ], [ 39.222478192146262, -6.158362122777594 ], [ 39.222457351231682, -6.158431429759954 ], [ 39.22203756849941, -6.158388112897049 ], [ 39.22189078378198, -6.15837471592842 ], [ 39.221739866814254, -6.158386683887064 ], [ 39.221530020363879, -6.158403385440856 ], [ 39.221396261218075, -6.15845375803841 ], [ 39.221405963023145, -6.1585507520692 ], [ 39.221341014828106, -6.158569150566595 ], [ 39.221236989918197, -6.15858308340886 ], [ 39.221016363684427, -6.158660696478622 ], [ 39.220728723130442, -6.158681417112118 ], [ 39.220654971445612, -6.158688740784119 ], [ 39.220634759351725, -6.158704727823845 ], [ 39.220429673972362, -6.158682131616705 ], [ 39.220298879266991, -6.158646138446833 ], [ 39.220049506944129, -6.158460724461113 ], [ 39.219978989194317, -6.158306123443759 ], [ 39.219786570060464, -6.158223419472593 ], [ 39.219675268796756, -6.158223419472607 ], [ 39.219535760433132, -6.1582827234014 ], [ 39.219355558387143, -6.158314608191684 ], [ 39.219314505378655, -6.158338097545772 ], [ 39.219262403092173, -6.15834765405075 ], [ 39.219191795510845, -6.158336132656882 ], [ 39.219104030107594, -6.158300139463542 ], [ 39.219011413801788, -6.158238156142274 ], [ 39.21895580808571, -6.158154112463096 ], [ 39.218828426978419, -6.158088735224197 ], [ 39.218746500624505, -6.157993438059635 ], [ 39.2186943085065, -6.157973431904823 ], [ 39.218477006039265, -6.15778542760073 ], [ 39.218205355497354, -6.157415402783068 ], [ 39.218100791598275, -6.157324749789396 ], [ 39.217920499720762, -6.157197389005646 ], [ 39.217835968252523, -6.156929984848373 ], [ 39.217766169154942, -6.156788691080966 ], [ 39.217709844786633, -6.156689999773614 ], [ 39.217641482993507, -6.156604705461532 ], [ 39.217574378841789, -6.156563442658522 ], [ 39.217480594726126, -6.156552725046819 ], [ 39.217390673366189, -6.156526020330052 ], [ 39.21729006205436, -6.156507443135014 ], [ 39.217196277938704, -6.156488687312431 ], [ 39.217107704051692, -6.156497975910362 ], [ 39.21702056746912, -6.156507443135009 ], [ 39.216949510730153, -6.156492706417317 ], [ 39.216889054111533, -6.156440725991655 ], [ 39.216848899418338, -6.156391424964669 ], [ 39.216808654893605, -6.156300057288428 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728700630", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "trapezoid", "channels": null, "width": null, "width_bott": 270.0, "width_top": 383.0, "depth": 152.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.223610788056483, -6.156723760240999 ], [ 39.223431663988833, -6.156815038530963 ], [ 39.223319644072902, -6.156786458246155 ], [ 39.223080422712741, -6.156741712234698 ], [ 39.222750381677351, -6.156748410739646 ], [ 39.222551315010399, -6.156681693626543 ], [ 39.222418454179881, -6.156644449933267 ], [ 39.222346049967967, -6.15664570032108 ], [ 39.222199175419021, -6.156679728731525 ], [ 39.222137550990524, -6.156693393683132 ], [ 39.222057061941072, -6.156683033327678 ], [ 39.221992652735196, -6.156659454586985 ], [ 39.221967859233359, -6.156623729220274 ], [ 39.221921595996228, -6.156575053404286 ], [ 39.22178478257846, -6.156526377583815 ], [ 39.221629913023477, -6.156522447792617 ], [ 39.221450878787351, -6.156463054353816 ], [ 39.221406681675369, -6.156451443605603 ], [ 39.221286576921891, -6.156442422947201 ], [ 39.221124251350048, -6.156537005882596 ], [ 39.220503425657185, -6.15705439835579 ], [ 39.220514744429771, -6.157289738973905 ], [ 39.220477913503117, -6.157346452921316 ], [ 39.22040622794345, -6.157371996523983 ], [ 39.220339123791717, -6.157393699653974 ], [ 39.22019090176984, -6.157399058451357 ], [ 39.220055525656527, -6.1574327295604 ], [ 39.219942787088364, -6.157514093955637 ], [ 39.219692696113263, -6.157590099542998 ], [ 39.219549863983097, -6.157589117097171 ], [ 39.219406403032217, -6.157532760428754 ], [ 39.219258899662563, -6.157523114595835 ], [ 39.21920589906081, -6.157535439826755 ], [ 39.219165025715377, -6.157559375781622 ], [ 39.219118672646722, -6.157640382904459 ], [ 39.21896784551052, -6.157736126698564 ], [ 39.218851154355107, -6.15788072480261 ], [ 39.218746500624505, -6.157993438059635 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986330", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 110.0, "width_bott": null, "width_top": null, "depth": 50.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.219440898339137, -6.155345741959522 ], [ 39.219404965727769, -6.155349135877648 ], [ 39.219341365005654, -6.155355298518352 ], [ 39.219332561515863, -6.155337346477824 ], [ 39.219111396292917, -6.155350029013992 ], [ 39.218959760672952, -6.155338686182358 ], [ 39.218779378963902, -6.155341276277789 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986331", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "grass or plant", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": 80.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.219440898339137, -6.155345741959522 ], [ 39.219440269518429, -6.155326360900462 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986334", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "grass or plant", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": 80.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.219629005559625, -6.155357352731915 ], [ 39.219497851528146, -6.155346992350398 ], [ 39.219440898339137, -6.155345741959522 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986333", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": "grass or plant", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 100.0, "width_bott": null, "width_top": null, "depth": 90.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.219936588712912, -6.155413352376647 ], [ 39.219919969880145, -6.155390756029478 ], [ 39.219629005559625, -6.155357352731915 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986335", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "grass or plant", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": 110.0, "width_bott": null, "width_top": null, "depth": 65.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220120473851566, -6.155482034548514 ], [ 39.21993694803902, -6.155464529080311 ], [ 39.219936588712912, -6.155413352376647 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986336", "covered": "no", "waterway": "ditch", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 40.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220907757366568, -6.155718715566842 ], [ 39.22089302499591, -6.155677988576475 ], [ 39.220772560916309, -6.155664323598748 ], [ 39.220758187871759, -6.155670307608646 ], [ 39.220663505440818, -6.155655481554158 ], [ 39.220545017654842, -6.155635296684101 ], [ 39.220302921685771, -6.155562684733758 ], [ 39.220104394007983, -6.155594033805797 ], [ 39.220120473851566, -6.155482034548514 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986327", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": null, "channels": "1", "width": 160.0, "width_bott": null, "width_top": null, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216535926373339, -6.154634358383429 ], [ 39.21655721644558, -6.154705988009468 ], [ 39.216577967528643, -6.155012601997897 ], [ 39.216562606337284, -6.155252051948542 ], [ 39.216557845266273, -6.155315286009245 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728037759", "covered": "yes", "waterway": "drain", "blockage": "yes", "blockage_m": "dirty", "covered_ma": null, "material": "concrete", "profile": "drain", "channels": null, "width": null, "width_bott": 202.0, "width_top": 202.0, "depth": 203.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.223730802978444, -6.172949613975869 ], [ 39.22365345803248, -6.172926750443579 ], [ 39.223465889801162, -6.172868877123128 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728037758", "covered": "yes", "waterway": "drain", "blockage": null, "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "drain", "channels": null, "width": null, "width_bott": 252.0, "width_top": 252.0, "depth": 149.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.223086351593615, -6.172330244110491 ], [ 39.222991220005028, -6.172159660502039 ], [ 39.222906508873741, -6.17196139047971 ], [ 39.222789997381383, -6.171811616183913 ], [ 39.222752807128622, -6.171714981821536 ], [ 39.222741668019097, -6.171686223717679 ], [ 39.222728283121363, -6.171548952871257 ], [ 39.222725947501623, -6.17151117435619 ], [ 39.222701513325902, -6.1711115971787 ], [ 39.222660100991298, -6.170856435645085 ], [ 39.222634409174177, -6.170698176487243 ], [ 39.222606291905777, -6.170547598034726 ], [ 39.222646446598986, -6.170332894164845 ], [ 39.222668006165797, -6.170274216760994 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986338", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 200.0, "width_bott": null, "width_top": null, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220341100085349, -6.150877808604267 ], [ 39.220508815548897, -6.150811180068534 ], [ 39.22070186350345, -6.150740532376063 ], [ 39.220887006283505, -6.150673814508706 ], [ 39.221043492805997, -6.150632819188471 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728307171", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 155.0, "width_bott": null, "width_top": null, "depth": 390.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221010344972022, -6.14900711550969 ], [ 39.220667727522645, -6.148715860194248 ], [ 39.218343965545692, -6.141818484025681 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728307170", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 155.0, "width_bott": null, "width_top": null, "depth": 390.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218343965545692, -6.141818484025681 ], [ 39.218338126496342, -6.141797941366844 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728307173", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "dirt", "profile": "open_rectangular", "channels": null, "width": 110.0, "width_bott": null, "width_top": null, "depth": 390.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218338126496342, -6.141797941366844 ], [ 39.218334982392854, -6.141733812539819 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728307172", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "dirt", "profile": "open_rectangular", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218337228181063, -6.14173381253983 ], [ 39.218357170780365, -6.141640834658523 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987866", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "rubish_or_solid_waste", "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 273.0, "width_bott": null, "width_top": null, "depth": 50.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.225191194135832, -6.168987599176727 ], [ 39.2251717905257, -6.168978935976807 ], [ 39.225132893473898, -6.168974202475749 ], [ 39.225051775603745, -6.168952231885406 ], [ 39.225002188600051, -6.168949641856408 ], [ 39.224963291548256, -6.168911595222013 ], [ 39.224951882944147, -6.168878907266334 ], [ 39.224896906048755, -6.168842914788216 ], [ 39.22484121050114, -6.168820229701524 ], [ 39.224778867420433, -6.168790935572336 ], [ 39.224728561764515, -6.168768250483418 ], [ 39.224646096421431, -6.16872761380591 ], [ 39.224586358455042, -6.168685637454454 ], [ 39.224493203160073, -6.168654199844386 ], [ 39.224428793954203, -6.168630175078614 ], [ 39.224336267479941, -6.168570961617797 ], [ 39.224259192028555, -6.168506210842367 ], [ 39.224255149609789, -6.168468878667571 ], [ 39.224257215734937, -6.168439584518993 ], [ 39.224241674880531, -6.16836492015737 ], [ 39.224224966216234, -6.168320175122209 ], [ 39.22420080153509, -6.16827158969054 ], [ 39.224186069164432, -6.16822157527094 ], [ 39.22418211657719, -6.168186922420304 ], [ 39.224128397323192, -6.168099486480418 ], [ 39.224081505265367, -6.168042952305282 ], [ 39.224035152196699, -6.168030180760911 ], [ 39.223968227708035, -6.168014194002173 ], [ 39.223905076143559, -6.167975522120085 ], [ 39.223858902737959, -6.167928187018082 ], [ 39.223804464831744, -6.167902911858103 ], [ 39.223744906528395, -6.167893534148267 ], [ 39.223695229693192, -6.167906930876569 ], [ 39.223606655806179, -6.167936225054565 ], [ 39.223486640884211, -6.167967484084194 ], [ 39.223375429452048, -6.167987489862186 ], [ 39.223338508693871, -6.167979541137986 ], [ 39.223310391425478, -6.167954891161048 ], [ 39.223281465673324, -6.167947478305452 ], [ 39.223252719584231, -6.167950961454473 ], [ 39.223187591726131, -6.167982220483241 ], [ 39.223133243651439, -6.168022946529375 ], [ 39.223078985408286, -6.168055545226331 ], [ 39.22303874088356, -6.168080195198586 ], [ 39.222979811400918, -6.168138962156806 ], [ 39.222947561882215, -6.168204963337678 ], [ 39.22292411585331, -6.168302938011848 ], [ 39.222917378488674, -6.168347593737013 ], [ 39.222883871328577, -6.16841020105737 ], [ 39.222854406587253, -6.168438244847519 ], [ 39.222800058512568, -6.16848165020135 ], [ 39.222752447802506, -6.168519607555173 ], [ 39.222707442206783, -6.16855560005523 ], [ 39.222677977465452, -6.168581589675351 ], [ 39.222641775359499, -6.168585608688662 ], [ 39.222596140943068, -6.16857292646879 ], [ 39.222525802856325, -6.168552920712898 ], [ 39.222458069883899, -6.168557654217698 ], [ 39.222372909594966, -6.168546222356951 ], [ 39.22226232698349, -6.168550955861813 ], [ 39.222185161700587, -6.168537648461218 ], [ 39.22207116549103, -6.168522912077616 ], [ 39.221996695153976, -6.168519607555166 ], [ 39.221924290942077, -6.168517642704001 ], [ 39.221868685225992, -6.168514248870092 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987874", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 203.0, "width_top": 170.0, "depth": 37.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221668720243756, -6.167280231564777 ], [ 39.221361676079631, -6.167279517071753 ], [ 39.221352243769154, -6.167286215443709 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987865", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish_or_solid_waste", "covered_ma": null, "material": "concrete", "profile": "trapezoid_eliptical", "channels": null, "width": 47.0, "width_bott": null, "width_top": null, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.225393764232408, -6.168438244847511 ], [ 39.225342829755803, -6.168570247126517 ], [ 39.225305190345388, -6.168652949484849 ], [ 39.225282373137169, -6.168730203836 ], [ 39.225244913389822, -6.168764945962498 ], [ 39.225167119286219, -6.168892929149215 ], [ 39.225153644556961, -6.168913649383096 ], [ 39.225132893473898, -6.168974202475749 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012175", "covered": null, "waterway": "drain", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "drain", "channels": null, "width": null, "width_bott": 128.0, "width_top": 128.0, "depth": 120.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.223508200451036, -6.162915822362018 ], [ 39.223396180535111, -6.162977537200034 ], [ 39.223313715192027, -6.163088195191182 ], [ 39.223262690883885, -6.163128832300796 ], [ 39.223187591726131, -6.163124813246142 ], [ 39.223109797622534, -6.163042199338096 ], [ 39.22303874088356, -6.162992809611813 ], [ 39.222948280534446, -6.162950207619968 ], [ 39.22283087072681, -6.162927522281198 ], [ 39.222702142146602, -6.162906801813444 ], [ 39.222646446598986, -6.162871523429003 ], [ 39.22252849780218, -6.162868218871346 ], [ 39.222417825359173, -6.16286482500131 ], [ 39.222330688776616, -6.162860180758059 ], [ 39.222195851652472, -6.162855536514772 ], [ 39.222073141784655, -6.162864199814705 ], [ 39.222014212302021, -6.162904836941473 ], [ 39.222022207308051, -6.162991559238936 ], [ 39.221934352073262, -6.163062830488219 ], [ 39.221831764467815, -6.163089534876165 ], [ 39.221758012782985, -6.16310623628199 ], [ 39.221674199966976, -6.163094179117413 ], [ 39.221615180652819, -6.163083550949877 ], [ 39.22150837096553, -6.163053542005144 ], [ 39.221395273071259, -6.163014780449029 ], [ 39.221255046055411, -6.162935560393468 ], [ 39.221175994310407, -6.162829546614048 ], [ 39.221129012421052, -6.162760776080276 ], [ 39.221071430411335, -6.162718263382192 ], [ 39.220980161578467, -6.162690219289606 ], [ 39.220904343768488, -6.162668248438938 ], [ 39.220836700627601, -6.162642258529052 ], [ 39.220803822288204, -6.162640204343689 ], [ 39.220765554057095, -6.162654226391489 ], [ 39.220723782396384, -6.162694238347544 ], [ 39.220663685103865, -6.162711475640172 ], [ 39.2206321542374, -6.1627182633822 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727990219", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.226089778914542, -6.163321836200811 ], [ 39.225996623619579, -6.163306831735418 ], [ 39.225877147686788, -6.163274232746579 ], [ 39.225767912548235, -6.163243509314183 ], [ 39.225587441007661, -6.163208856138292 ], [ 39.225443351236088, -6.163155536685395 ], [ 39.225343458576496, -6.163135530725151 ], [ 39.225208711283869, -6.163105521783357 ], [ 39.225124898467868, -6.163088820377519 ], [ 39.225085282763828, -6.163080246393553 ], [ 39.225054470549594, -6.163132851355413 ], [ 39.224962572896032, -6.163250832923225 ], [ 39.224940474340045, -6.163271553377532 ], [ 39.224892144977751, -6.163326837689191 ], [ 39.2248499241594, -6.163342824589233 ], [ 39.224789557372304, -6.163357561116763 ], [ 39.224733861824696, -6.163388195230289 ], [ 39.224672866216899, -6.163427492632787 ], [ 39.224614565554958, -6.163462235106666 ], [ 39.224544227468215, -6.163473488452473 ], [ 39.22444217885193, -6.16347679300634 ], [ 39.224357827046759, -6.163497513451836 ], [ 39.22427329557852, -6.163509481294988 ], [ 39.224177984326872, -6.163519484268159 ], [ 39.224081505265367, -6.16351484003064 ], [ 39.224015119765859, -6.1635108209789 ], [ 39.223959424218258, -6.1634848311103 ], [ 39.223871568983462, -6.163452857318292 ], [ 39.223771676323871, -6.16346955871268 ], [ 39.223734126745001, -6.163474202950611 ], [ 39.223686516034931, -6.163473488452472 ], [ 39.223661003880864, -6.163527522371459 ], [ 39.223568477406602, -6.163554226736015 ], [ 39.223484664590593, -6.163577537233725 ], [ 39.223451157430503, -6.163576197549985 ], [ 39.223408307791445, -6.163549493186533 ], [ 39.223386748224634, -6.163467504530519 ], [ 39.223319105083732, -6.163392214282946 ], [ 39.223306259175175, -6.163359525987081 ], [ 39.223295569223289, -6.163307546233766 ], [ 39.223271494373677, -6.163224843041867 ], [ 39.223262690883885, -6.163128832300796 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012176", "covered": "yes", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": null, "profile": "drain", "channels": null, "width": null, "width_bott": 410.0, "width_top": 450.0, "depth": 90.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.224599204363606, -6.162093612127546 ], [ 39.224570727769098, -6.162133534813373 ], [ 39.224511079634226, -6.162175154433431 ], [ 39.224489070909769, -6.162208914552028 ], [ 39.22445304846687, -6.162264377599334 ], [ 39.224423943051676, -6.162309659020144 ], [ 39.224397712245377, -6.162318947516233 ], [ 39.22439088504921, -6.162342883255426 ], [ 39.224385584989037, -6.162398882163429 ], [ 39.224378398466769, -6.162461579498385 ], [ 39.224332584387284, -6.162476851924991 ], [ 39.224279583785517, -6.162495518223615 ], [ 39.224259461523147, -6.162548837742822 ], [ 39.224231973075455, -6.162668248438937 ], [ 39.224200442208975, -6.162745503661821 ], [ 39.224173492750452, -6.162802931525398 ], [ 39.22413675165533, -6.16281820394222 ], [ 39.22403820646867, -6.162828206928418 ], [ 39.22390750159483, -6.16282356268485 ], [ 39.223772664470687, -6.162842228971256 ], [ 39.223708973917034, -6.162845533529066 ], [ 39.22360099641989, -6.162862234942573 ], [ 39.223581502978227, -6.162897602639997 ], [ 39.223544672051567, -6.162903497256018 ], [ 39.223508200451036, -6.162915822362018 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012177", "covered": null, "waterway": "ditch", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": null, "profile": "ditch", "channels": null, "width": null, "width_bott": 530.0, "width_top": 350.0, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.224775453822346, -6.161900161218133 ], [ 39.224711044616477, -6.161910074909122 ], [ 39.22467358486913, -6.161954820485003 ], [ 39.224649420187987, -6.16200680037082 ], [ 39.224631094556187, -6.162045383375564 ], [ 39.224624267360035, -6.16205958406411 ], [ 39.224619057131378, -6.162070480189655 ], [ 39.224609265494792, -6.162081912189976 ], [ 39.224599204363606, -6.162093612127546 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727990218", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "solid_waste", "covered_ma": null, "material": "sand", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.226372748229039, -6.163081228829232 ], [ 39.226266747025512, -6.163112488144987 ], [ 39.226164159420065, -6.163149820696822 ], [ 39.226124723379101, -6.1631892074293 ], [ 39.226131370912192, -6.163255209226138 ], [ 39.226126699672719, -6.163307188984578 ], [ 39.226089778914542, -6.163321836200811 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012181", "covered": null, "waterway": "ditch", "blockage": null, "blockage_m": null, "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": null, "width_bott": 87.0, "width_top": 290.0, "depth": 47.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.225933561886634, -6.162063513814339 ], [ 39.225795400995935, -6.162095487690053 ], [ 39.225635770369941, -6.16208878925256 ], [ 39.225478924521333, -6.162075481689818 ], [ 39.225323246482603, -6.162112814314619 ], [ 39.22522604876886, -6.162056100876392 ], [ 39.225148973317488, -6.162012784309256 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012179", "covered": "house", "waterway": "underground_drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": null, "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 70.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.224977305266691, -6.161896856654437 ], [ 39.224892773798452, -6.161894623841117 ], [ 39.224854595398874, -6.161890962027254 ], [ 39.224796654063049, -6.161887925401095 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012180", "covered": null, "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "drain", "channels": null, "width": null, "width_bott": 114.0, "width_top": 114.0, "depth": 60.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.225148973317488, -6.162012784309256 ], [ 39.225029587216227, -6.161972861614339 ], [ 39.224977305266691, -6.161896856654437 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012178", "covered": null, "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "gravel", "profile": "drain", "channels": null, "width": null, "width_bott": 120.0, "width_top": 120.0, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.224832227348301, -6.16083332194914 ], [ 39.224819381439737, -6.160919330083538 ], [ 39.224811386433707, -6.161000604631786 ], [ 39.224809410140082, -6.161065981512129 ], [ 39.2247945879379, -6.161170655954025 ], [ 39.224815698347072, -6.161174049834885 ], [ 39.224824052679224, -6.161190036799782 ], [ 39.224825849309781, -6.161199593253428 ], [ 39.224826118804366, -6.161217187845195 ], [ 39.224824052679224, -6.161281314321927 ], [ 39.224799977829598, -6.161358659059336 ], [ 39.224780484387935, -6.16143135952971 ], [ 39.224777160621379, -6.161521297321436 ], [ 39.224785874279647, -6.161586584825059 ], [ 39.22479000652995, -6.161632223553984 ], [ 39.22479342012803, -6.16167080658597 ], [ 39.22480195412323, -6.161767353466176 ], [ 39.224803301596154, -6.161793343418922 ], [ 39.224805277889779, -6.161853986636996 ], [ 39.224796654063049, -6.161887925401095 ], [ 39.224775453822346, -6.161900161218133 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728700629", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "trapezoid", "channels": null, "width": 72.0, "width_bott": 38.0, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221854851170619, -6.159017144850064 ], [ 39.221726481916512, -6.1589607883332 ], [ 39.221666743950117, -6.158929439459885 ], [ 39.221589668498744, -6.158916846322236 ], [ 39.221566222469832, -6.158899430280296 ], [ 39.221550142626242, -6.158880853168275 ], [ 39.221444141422722, -6.158853434064238 ], [ 39.221391859473179, -6.158820120297482 ], [ 39.221357004840165, -6.158799399669386 ], [ 39.221352962421378, -6.15877474926594 ], [ 39.221344248763124, -6.15864345905444 ], [ 39.221341014828106, -6.158569150566595 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986341", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 300.0, "width_bott": 100.0, "width_top": 150.0, "depth": 20.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.222832308031265, -6.154540043050593 ], [ 39.222625695515916, -6.154602026803413 ], [ 39.222572066093456, -6.154616584946037 ], [ 39.222529216454404, -6.154592023662238 ], [ 39.222519065491696, -6.154557995118073 ], [ 39.222406416755064, -6.154444655935595 ], [ 39.222156954600671, -6.154415986209468 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986340", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": null, "channels": null, "width": 250.0, "width_bott": null, "width_top": null, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.222156954600671, -6.154415986209468 ], [ 39.222092545394801, -6.154411341892338 ], [ 39.221981244131094, -6.154338015264286 ], [ 39.221916924756755, -6.154254060281872 ], [ 39.221941089437891, -6.154167336557371 ], [ 39.221804994672354, -6.154090615969514 ], [ 39.221781997801074, -6.154077397520197 ], [ 39.221747322831114, -6.154073289083192 ], [ 39.221656772650469, -6.154072574572409 ], [ 39.221637997861023, -6.154003356335184 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986342", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plant", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 120.0, "width_bott": null, "width_top": null, "depth": 80.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221637997861023, -6.154003356335184 ], [ 39.221624163805657, -6.153979062964651 ], [ 39.221622546838141, -6.153960574994389 ], [ 39.221519330411994, -6.153978616395323 ], [ 39.221450160135127, -6.153946642030901 ], [ 39.221442883781322, -6.15389394684509 ], [ 39.221420695393803, -6.153793290094294 ], [ 39.221367784623574, -6.153742649113078 ], [ 39.221287295574115, -6.153730591735886 ], [ 39.221210220122735, -6.153632614371837 ], [ 39.221129641241745, -6.153423351810003 ], [ 39.221019687450969, -6.153328589692376 ], [ 39.220983485345023, -6.153216589957565 ], [ 39.220987617595334, -6.153069936361623 ], [ 39.220970100447289, -6.152992590417147 ], [ 39.221045199605044, -6.152856654445864 ], [ 39.22107735929221, -6.152827180807569 ], [ 39.221070711759111, -6.152645962553095 ], [ 39.221071430411335, -6.152407940454218 ], [ 39.221088049244088, -6.15228995647751 ], [ 39.221056608209146, -6.152145892736893 ], [ 39.221034509653158, -6.151923232458394 ], [ 39.221027053636298, -6.151808553000598 ], [ 39.22102381970128, -6.151787206899407 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728427340", "covered": "yes", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "round", "channels": "1", "width": 50.0, "width_bott": null, "width_top": null, "depth": 55.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.212948324623163, -6.150776258138291 ], [ 39.2129456296773, -6.151003205986679 ], [ 39.2129456296773, -6.151086536282153 ], [ 39.212932154948035, -6.151151914382636 ], [ 39.212917063251268, -6.151206932012882 ], [ 39.212906642793975, -6.151253554091207 ], [ 39.212899007114061, -6.151282491930857 ], [ 39.212873854286109, -6.151337956119126 ], [ 39.21285849309475, -6.151374932241414 ], [ 39.21283154363622, -6.151428252877002 ], [ 39.212806121313683, -6.151472910021639 ], [ 39.212763181843101, -6.151540520931451 ], [ 39.21259762233624, -6.151824540247362 ], [ 39.21252620627115, -6.15196351316551 ], [ 39.212448412167539, -6.152099627993562 ], [ 39.212329654886986, -6.152342205251652 ], [ 39.21228141535623, -6.1524272323056 ], [ 39.212240452179266, -6.152504935588807 ], [ 39.212219790927733, -6.152540214661906 ], [ 39.212217455308, -6.152580495322273 ], [ 39.21221565867743, -6.152599429911003 ], [ 39.21221458069909, -6.152618453813158 ], [ 39.212201555127464, -6.152658377211242 ], [ 39.21218646343069, -6.152685975263189 ], [ 39.212169575103353, -6.152712501544789 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986337", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 200.0, "width_bott": null, "width_top": null, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.220076546234175, -6.151444508078089 ], [ 39.220013215006645, -6.151469248135908 ], [ 39.219958866931954, -6.151483895678643 ], [ 39.219914669819978, -6.151393509615891 ], [ 39.219810644910069, -6.151431557505837 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727986339", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish or solid_waste", "covered_ma": null, "material": "gravel", "profile": null, "channels": null, "width": 140.0, "width_bott": null, "width_top": null, "depth": 90.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.22102381970128, -6.151787206899407 ], [ 39.22108140171099, -6.151616527373331 ], [ 39.220864189075293, -6.151304552566819 ], [ 39.220654971445612, -6.15101651382683 ], [ 39.22046048618661, -6.150861821329018 ], [ 39.220341100085349, -6.150877808604267 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "737982665", "covered": null, "waterway": "stream", "blockage": null, "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.22173914816203, -6.141770789329614 ], [ 39.221714354660179, -6.141752747514623 ], [ 39.221670876200427, -6.141731401009956 ], [ 39.221632607969326, -6.141713448509573 ], [ 39.221600358450623, -6.141714698932512 ], [ 39.22156828859498, -6.141742744131795 ], [ 39.221551490099166, -6.141805443903213 ], [ 39.221542057788689, -6.141840813001776 ], [ 39.221505855682729, -6.141843403162945 ], [ 39.221463545032854, -6.141810088330425 ], [ 39.221374521988203, -6.141780792711904 ], [ 39.221294661759437, -6.141791421305393 ], [ 39.221204830231024, -6.141803389637297 ], [ 39.221120298762784, -6.14178481192796 ], [ 39.221051308148972, -6.141750157353015 ], [ 39.221000283840837, -6.141740689865649 ], [ 39.220719290819964, -6.14174345865915 ], [ 39.220585172348045, -6.141705410076366 ], [ 39.220475308388792, -6.14170808955412 ], [ 39.220378649664227, -6.141724077104409 ], [ 39.220268695873443, -6.141702730598605 ], [ 39.220106460133138, -6.141644139348133 ], [ 39.219899847617789, -6.141582689980975 ], [ 39.219706799663228, -6.141532137153248 ], [ 39.219457427340366, -6.141441392135974 ], [ 39.219344688772203, -6.141392089718537 ], [ 39.219292406822667, -6.141374762418553 ], [ 39.219252162297934, -6.141386730759836 ], [ 39.219195748098095, -6.14142942379592 ], [ 39.219148856040263, -6.141456129270739 ], [ 39.219093879144872, -6.141436122493757 ], [ 39.219063066930623, -6.14144273187551 ], [ 39.219044292141191, -6.141481405688814 ], [ 39.219017522345723, -6.14152811793529 ], [ 39.218966498037588, -6.141526688880015 ], [ 39.218902088831719, -6.141481405688813 ], [ 39.218784050203389, -6.141321440775418 ], [ 39.2186943085065, -6.141177463380697 ], [ 39.218672748939674, -6.141048044461016 ], [ 39.218635289192328, -6.140984004859727 ], [ 39.218583007242799, -6.140976055731548 ], [ 39.218529287988808, -6.141021428281779 ], [ 39.218447451466417, -6.141093417005097 ], [ 39.218361662356791, -6.141110744314234 ], [ 39.218273178301303, -6.141071981157986 ], [ 39.218228891357789, -6.141018748800594 ], [ 39.218231586303652, -6.140945420326376 ], [ 39.218259793403568, -6.140886739676526 ], [ 39.218285215726112, -6.140847976503966 ], [ 39.218316117771884, -6.140884060194634 ], [ 39.218345582513201, -6.140930683177478 ], [ 39.218388521983783, -6.140940061363175 ], [ 39.218444756520569, -6.140923984473305 ], [ 39.218459578722758, -6.14086798330306 ], [ 39.218439456460395, -6.140782686453509 ], [ 39.218363009829723, -6.140654696495513 ], [ 39.218278478361484, -6.140524027023062 ], [ 39.218214158987131, -6.140423992955495 ], [ 39.218082645629543, -6.140376030186085 ], [ 39.217995598878503, -6.140347984914832 ], [ 39.217949964462072, -6.140238751248651 ], [ 39.217885555256203, -6.140161314122579 ], [ 39.217827883414962, -6.140110761159927 ], [ 39.217739399359481, -6.140102722702518 ], [ 39.21762001325822, -6.140184000432881 ], [ 39.217484547313376, -6.140232052535772 ], [ 39.217272724569384, -6.140293323426455 ], [ 39.217059464520929, -6.140289304199144 ], [ 39.216771105314727, -6.140314759304915 ], [ 39.216529727997887, -6.140269297378318 ], [ 39.216325900259918, -6.140306720850604 ], [ 39.216164922160999, -6.140376030186085 ], [ 39.216025503628913, -6.140485353140245 ], [ 39.215893990271312, -6.14060530468912 ], [ 39.2158430557947, -6.140770718098662 ], [ 39.215808201161678, -6.140861463230229 ], [ 39.215832276011298, -6.140925413530197 ], [ 39.215869915421699, -6.14095202971423 ], [ 39.215872610367548, -6.14098668434112 ], [ 39.215864525529994, -6.141029377409272 ], [ 39.215792121318088, -6.141032056890425 ], [ 39.215682077695789, -6.140994722785174 ], [ 39.215448785216502, -6.140941401103983 ], [ 39.215258342376266, -6.140917375085092 ], [ 39.215059904530008, -6.140925413530188 ], [ 39.214939170955816, -6.140946760067149 ], [ 39.214842602062774, -6.140896028546955 ], [ 39.214660154228575, -6.140886739676522 ], [ 39.214613262170744, -6.140846726079003 ], [ 39.214634642074508, -6.140432031408054 ], [ 39.214623952122622, -6.1402813550606 ], [ 39.214623952122622, -6.140114691072407 ], [ 39.21459592468576, -6.140017336414209 ], [ 39.214557027633951, -6.139882647554993 ], [ 39.214527473061118, -6.139797350547642 ], [ 39.214513998331853, -6.139709284722579 ], [ 39.214498008319794, -6.139665341120856 ], [ 39.214476448752968, -6.139614609478562 ], [ 39.214438899174098, -6.139597282120767 ], [ 39.214378622218533, -6.139628006919771 ], [ 39.214280705852559, -6.139701335575374 ], [ 39.214167967284403, -6.139732060368392 ], [ 39.214050018487605, -6.139744028746565 ], [ 39.213930722217867, -6.139722592845147 ], [ 39.213842148330862, -6.139677309500529 ], [ 39.21372949959423, -6.13962398768745 ], [ 39.213600771014015, -6.139578615018178 ], [ 39.213466562710565, -6.139550659021219 ], [ 39.213266777391375, -6.139524042767131 ], [ 39.213152781181826, -6.139518594473359 ], [ 39.213049564755671, -6.139537350894346 ], [ 39.212959643395735, -6.139541280811041 ], [ 39.212890023961215, -6.13948804830063 ], [ 39.212857774442519, -6.13936389863319 ], [ 39.212840257294474, -6.139165348421486 ], [ 39.212833609761375, -6.139049326468639 ], [ 39.212776027751666, -6.138938574157531 ], [ 39.212691496283426, -6.138899900159576 ], [ 39.212617654767072, -6.138938574157522 ], [ 39.212505095861964, -6.138913297618762 ], [ 39.21231600049466, -6.138747883632398 ], [ 39.212110825283773, -6.138587917898032 ], [ 39.211994044296837, -6.138445190194987 ], [ 39.211885527810516, -6.138241191334012 ], [ 39.211762099290475, -6.138030493654353 ], [ 39.21163741312904, -6.137810506967283 ], [ 39.211593126185534, -6.13763723277713 ], [ 39.211565008917148, -6.137517191243286 ], [ 39.211493862346636, -6.137278537161118 ], [ 39.211452270348985, -6.137171803732739 ] ] ] } }
]
}

	
	L.geoJSON(myGeoJSON,{
			style: function(feature) {
			b = feature.properties.blockage;
			   return b =="yes" ? {color: '#FF9900', opacity:0.7} :
				   b == "no"  ? {color: '#0099FF', opacity:0.7} :
						  {color: '#', opacity:0.7};
			}	
		}).addTo(map);
		
		
		
		// markers
			<!-- var LeafIcon = L.Icon.extend({ -->
				<!-- options: { -->
					<!-- shadowUrl: 'lib/img/marker-shadow.png', -->
					<!-- iconSize:     [38, 95], -->
					<!-- shadowSize:   [50, 64], -->
					<!-- iconAnchor:   [22, 94], -->
					<!-- shadowAnchor: [4, 62], -->
					<!-- popupAnchor:  [-3, -76] -->
				<!-- } -->
			<!-- }); -->
			
			<!-- var greenIcon = new LeafIcon({iconUrl: 'lib/img/marker-icon-2x-green.png'}), -->
				<!-- redIcon = new LeafIcon({iconUrl: 'lib/img/marker-icon-2x-red.png'}), -->
				<!-- blackIcon = new LeafIcon({iconUrl: 'lib/img/marker-icon-2x-black.png'}); -->
				
			<!-- L.icon = function (options) { -->
				<!-- return new L.Icon(options); -->
			<!-- }; -->
			
			<!-- L.marker([-6.17626,39.19946], {icon: greenIcon}).addTo(groups.blocked).bindPopup("I am a green leaf."); -->
			<!-- L.marker([-6.177407180116619,39.198098274661376], {icon: redIcon}).addTo(map).bindPopup("I am a red leaf."); -->
			<!-- L.marker([-6.169376192669119, 39.191989191740198], {icon: blackIcon}).addTo(map).bindPopup("I am an orange leaf."); -->
			
			
		// markers/
		
		
		//L.marker([-6.17626,39.19946], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: '#0033CC', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	</b> <div><center><img style="width:250px; height:220px"  src="Images/solid_waste/sw.jpg" alt="image" /></center> </div>',
		//{minWidth:90});
		//L.marker([-6.177407180116619,39.198098274661376], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: '#FFFF42', iconColor: '#f28f82'}) }).addTo(map);
    <!-- L.marker([51.936063,4.502077], {icon: L.AwesomeMarkers.icon({icon: 'cog', prefix: 'fa', markerColor: 'purple', iconColor: 'black'}) }).addTo(map); -->
    //L.marker([ -6.181779418460788,39.207701175217082], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green'}) }).addTo(map);
    <!-- L.marker([51.930295,4.515209], {icon: L.AwesomeMarkers.icon({icon: 'shopping-cart', prefix: 'fa', markerColor: 'blue'}) }).addTo(map); -->
    <!-- L.marker([51.930083,4.507742], {icon: L.AwesomeMarkers.icon({icon: 'info', prefix: 'fa', markerColor: 'orange'}) }).addTo(map); -->

    <!-- L.marker([51.930454,4.527054], {icon: L.AwesomeMarkers.icon({icon: 'group', prefix: 'fa', markerColor: 'darkred'}) }).addTo(map); -->
    <!-- L.marker([51.929607,4.527054], {icon: L.AwesomeMarkers.icon({icon: 'arrow-right', prefix: 'fa', markerColor: 'darkblue'}) }).addTo(map); -->
    <!-- L.marker([51.928919,4.528856], {icon: L.AwesomeMarkers.icon({icon: 'twitter', prefix: 'fa', markerColor: 'cadetblue'}) }).addTo(map); -->
    <!-- L.marker([51.930295,4.530745], {icon: L.AwesomeMarkers.icon({icon: 'phone', prefix: 'fa', markerColor: 'darkpurple'}) }).addTo(map); -->
    <!-- L.marker([51.925055,4.512806], {icon: L.AwesomeMarkers.icon({icon: 'ambulance', prefix: 'fa', markerColor: 'darkgreen'}) }).addTo(map); -->
    <!-- L.marker([51.925902,4.505768], {icon: L.AwesomeMarkers.icon({icon: 'medkit', prefix: 'fa', markerColor: 'darkblue'}) }).addTo(map); -->


	//solid_waste just circle for try tu
	
	// awesome-markers for solid waste
	
	<!-- 
	<!-- L.marker([-6.177407180116619,39.198098274661376], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.<div><img style="width:300px;height:250px" src="Images/solid_waste/sw.jpg" alt="image" /></div>', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.169376192669119, 39.191989191740198], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
		
	<!-- L.marker([-6.169851596363476,39.191845371463202], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.170211609660813,39.191646843785414], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.170690227803679, 39.191518115205199], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.170798204854351,39.191453795830853], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.171121957252367, 39.195899468340443], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.171121600008454,39.195883747822968], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.171089180122038,39.195882041023928], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
		
	<!-- L.marker([-6.171091234274685,39.195799845175429], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.168868993705623,39.198436670028904], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.169376192669119,39.191989191740198], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	
	<!-- L.marker([-6.167021495720088,39.19719295251803], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.168036343254395,39.198455714312928], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.168036343254395,39.198455714312928], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
		
	L.marker([-6.168027501415917,39.198475746743767], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	',
		{minWidth:90});
	
	<!-- L.marker([-6.165613852621964,39.195080384464369], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.165238206608085,39.19458855684632], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.165760502752983,39.195419408652604], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	
	<!-- L.marker([-6.163136781097682, 39.194943301552016], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.162492838850641,39.198651457213337], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.164886228016529 ,39.19874057008952], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.162746218160938,39.194864878627726], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.162704509273278,39.195156920926586], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.16050482969391,39.19471126671413], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	
	<!-- L.marker([-6.162345116066863,39.194967915390805], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.1617733374073,39.195041397581051], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.161540856779589,39.19579885702862], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.160301375171761,39.195264449266098], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.159686813431015,39.195665457208925], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	<!-- --> -->
	
	//end // awesome-markers for solid waste
//mental

	// awesome-markers metals
	
	<!-- L.marker([-6.185092689399448,39.211182057111522], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.186147333861841,39.210835397243386], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.179460947034235, 39.203362402226311], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.<div><img style="width:300px;height:250px" src="Images/metal/2.jpg" alt="image" /></div>', -->
	<!-- {minWidth:90}); -->
	
	L.marker([-6.185338020126504,39.207851373532591], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.',
	{minWidth:90});
	

//grass_or_plants

	// awesome-markers grass
	
	L.marker([-6.181779418460788,39.207701175217082], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.<div><img style="width:300px;height:250px" src="Images/grass/a.jpg" alt="image" /></div>',
	{minWidth:90});
	
	<!-- L.marker([-6.180899543674935,39.20706417984912], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.181987419503118, 39.207659673050955], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.180766115519355,39.20724114796009], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.179295545679839 ,39.204270688810091], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	L.marker([-6.174989555083692,39.20100845685581], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ',
	{minWidth:90});
	
	<!-- L.marker([-6.175505232660777,39.200557143257065], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175057877479438,39.201128022620132], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.177773529278448 ,39.205635229726667], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175447627552812,39.208535979610616], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.169473631259299 ,39.204939215044533], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	L.marker([-6.176148176688477 ,39.211057011623978], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.',
	{minWidth:90});
	
	<!-- L.marker([-6.18458773821088,39.210812580035167], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175505232660777,39.200557143257065], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.</div>', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175057877479438,39.201128022620132], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.</div>', -->
	<!-- {minWidth:90}); -->
	
	
	//end awesome-markers grass

//dirt

	// awesome-markers dirt
	
	<!-- L.marker([-6.174962761984894 ,39.210173069384396], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.<div><img style="width:300px;height:250px" src="Images/dirty/1.jpg" alt="image" /></div>', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.175788703286794,39.215794816263937], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->

	<!-- L.marker([-6.180182121341964,39.216245411210458], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.181130051005024 ,39.220070617353294], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.174470215277481, 39.215645606095258], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.176456207242738, 39.220752169159361], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.175637679730191,39.220642305200109], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.172182881310601,39.202988613236599], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169184619953372,39.199384392653648], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170093629641671,39.200118675566891], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170092915152437,39.200127029899029], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169058333752286 ,39.199543663953527], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.168754943088251,39.199208502521017], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170414881759373,39.202533257219073], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169840253841821,39.202751188507001], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.181130051005024 ,39.220070617353294], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.174470215277481, 39.215645606095258], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	L.marker([-6.176456207242738, 39.220752169159361], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:100});
	
	<!-- L.marker([-6.175637679730191,39.220642305200109], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.172182881310601,39.202988613236599], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169184619953372,39.199384392653648], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	L.marker([-6.170093629641671,39.200118675566891], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:100});
	
	<!-- L.marker([-6.170092915152437,39.200127029899029], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169058333752286 ,39.199543663953527], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.168754943088251,39.199208502521017], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170438906444244,39.202617070035082], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	L.marker([-6.170687637783178 ,39.204625343684263], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:100});
	
	<!-- L.marker([-6.169332876699817,39.202979180926107], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.168594182583608 ,39.202755141094251], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169493726291684 ,39.203072875210246], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169263660452863, 39.203433728459878], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:300}); -->
	
	L.marker([-6.169311620614615, 39.203735562395337], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:300});
	
	
	//end awesome-markers dirt

//start concrete

	// awesome-markers concrete
	
	// Icons za Blockage	
	
	
	L.marker([-6.16741,39.21856], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>',
	{minWidth:100});
	
	L.marker([-6.16400,39.21748], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>',
	{minWidth:100});
	
	L.marker([-6.168431635801563,39.220235907365584], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>',
	{minWidth:100});
	
	L.marker([-6.168764945962498,39.225244913389822], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.',
	{minWidth:100});
	
	L.marker([-6.168359650782153,39.220053459531371], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.',
	{minWidth:100});
		
		<!-- L.marker([-6.169194176262963,39.204060123707492], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169406915746225,39.20443229572971], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169544187147512,39.204974788329785], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.173541386151268,39.209956485569393], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.172908620376289,39.209713670948098], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.172015155601215 ,39.209589254281248], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.171889138007177,39.209655549949211], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169835609659679,39.20616568490194], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169762910341255,39.206693085805249], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.170265642893225,39.207530225818516], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		
	// end awesome-markers concrete
	  
	//ILIKUWA KUNA ICON YA FLOOD HOUSE
	<!--greenIcon = L.icon({
	//iconUrl: 'Images/f1.png',

	//iconSize:     [28, 30], // size of the icon
	//iconAnchor:   [22, 16], // point of the icon which will correspond to marker's location
	//popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
	//});
	
	//L.marker([-6.174470215277481,39.215645606095258], {icon: greenIcon}).addTo(map).bindPopup('<b>Floods:</b>Urban floods are entirely manmade with poorly maintained drains.  This could be due to blockage materials reducing the flow of water.  <div><img style="width:300px;height:250px" src="Images/Threat/mwa01.jpg" alt="image" /></div>',
	//{minWidth:200}
	
	//);
	
	<!-- greenIcon = L.icon({
	//iconUrl: 'lib/img/marker-icon-2x-blue.png',

	//iconSize:     [28, 30], // size of the icon
	//iconAnchor:   [22, 16], // point of the icon which will correspond to marker's location
	//popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
	//});
	
	//L.marker([-6.175064397132441,39.210305391225752], {icon: greenIcon}).addTo(map).bindPopup('<b>Pollution:</b> This is due to surface water picking up contaminants as it drains from the urban landscape and flows into the river. <div><img style="width:300px;height:250px" src="Images/Threat/tf1.jpg" alt="image" /></div>',
	//{minWidth:200}
	
	//);
	
	 -->
	

	  
	</script>
	<style>
						.legend {
								position:fixed;
								bottom:1%;
								left:80%;
								opacity:0.9;
								z-index:9999;
								line-height: 18px;
								color: #ffffff;
								border-radius: 10px;
								background:  #52be80  
;
								box-shadow: 0 0 15px rgba(0,0,0,0.2);
								border-radius: 5px;
								padding:10px;
								width:190px;
								font: 14px/16px Arial, Helvetica, sans-serif;
								line-height: 18px;
								}
						.legend i {
								width: 18px;
								height: 18px;
								float: left;
								margin-right: 8px;
								opacity: 0.7;
								}
						.legend img {
								width: 20px;
								height: 20px;
								float: left;
								margin-right: 8px;
								}
								
						.dot{
							height:23px;
							width:23px;
							border-radius:50%;
							display:inline-block;

						}
						
						hr{
							display:block;
							border-width:1px;
							border-style:inset;
							
						}			
			</style>
			
			<!--<div class="legend">
				
					<div><center><strong>Legends</strong></center></div>
					<hr>
					<div><strong>Drainage Path</strong></div> <br/>
					
					<i style="background: "><hr style="width:26px; height:5px;background: #FF9900"></i><span> &nbsp; &nbsp; Blocked</span><br><br>
					<i style="background: "><hr style="width:26px; height:5px;background: #0099FF"></i><span>&nbsp; &nbsp; Not Blocked</span><br>
					
					<!-- <img src="Images/t3.png"><span>&nbsp; &nbsp; Risk Analysis</span> -->
				<!--	<br>
					<hr>
					<div><strong>Drainage Blockage Materials</strong></div> <br/>
					<i style="background: #0033CC" class="dot"></i><span >&nbsp; &nbsp; Solid Waste</span><br><br>
					<i style="background: #FFFF42" class="dot"></i><span>&nbsp; &nbsp; Metal</span><br><br>
					<i style="background: #238E23" class="dot"></i><span>&nbsp; &nbsp; Grass or Plants</span><br><br>
					<i style="background: #FF0000" class="dot"></i><span>&nbsp; &nbsp; Dirty</span><br><br>
					<i style="background: #808080" class="dot"></i><span>&nbsp; &nbsp; Concrete</span>
					<!--<img src="Images/water.png"><span>Water Path</span>
				</div>-->
				</div>
					
					
					
					
                </div>
            </div>    
        </div>
    </div>
	</div>
    <!-- Slider Area End -->
    <!--? Team Area Start-->
<!--     <section class="team-area pb-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/membr01.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Flood Simulation Developer</a></h5>
                            <p>Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, 
                            Maelezo, Maelezo, Maelezo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/membr01.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">GIS Expert</a></h5>
                            <p>Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, 
                            Maelezo, Maelezo, Maelezo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/membr01.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Drone Expert</a></h5>
                            <p>Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, 
                            Maelezo, Maelezo, Maelezo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--? Team End-->
    <!-- Services End-->
   <!--? About-2 Area Start -->
<div class="about-area2 section-padding40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <!-- about-img -->
                <div class="about-img ">
                    
	<div id="map1"></div>
	
	<script>
	var lyrEagleNests;
	var map1=L.map('map1').setView([-6.1673,39.2202],16);
	
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: 'Map Tiles by &copy; Bintkhamis'
			}).addTo(map1);
	<!-- var defaultBase = L.tileLayer.provider('Stamen.TonerLite').addTo(map); -->
	
	
		var groupedOverlays = {
		  <!-- "Drainage Path": { -->
			<!-- "Blocked": ExampleData.LayerGroups.blocked, -->
			<!-- "Not Blocked": ExampleData.LayerGroups.not_blocked, -->
			<!-- "Not Filled": ExampleData.LayerGroups.not_filled -->
		  <!-- },Vitu vya kwenye layer-->
		  "Drainage Blockage Material": {
			"Solid Waste": ExampleData.LayerGroups.solid_waste,
			"Metal": ExampleData.LayerGroups.metal,
			"Grass": ExampleData.LayerGroups.grass,
			"Dirt": ExampleData.LayerGroups.dirt,
			"Concrete": ExampleData.LayerGroups.concrete
		  }
		};
		
		L.control.groupedLayers(ExampleData.BaseLayers, groupedOverlays).addTo(map1);
	
	
	
		
		//add scale bar to map
        L.control.scale({
            position: 'bottomleft'
        }).addTo(map1);
		
		// Overview mini map
        var Esri_WorldTopoMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; Bintkhamis; 2020'
        });

        var miniMap = new L.Control.MiniMap(Esri_WorldTopoMap, {
            toggleDisplay: true,
            minimized: false,
            position: 'bottomleft'
        }).addTo(map1);
	
	
var myGeoJSON={"type": "FeatureCollection","name": "dan","crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },"features": [
{ "type": "Feature", "properties": { "osm_id": "728294012", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 240.0, "width_bott": null, "width_top": null, "depth": 200.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.216539609466004, -6.171454819166797 ], [ 39.216571319995538, -6.171473574460301 ], [ 39.216598449117122, -6.171483577283214 ], [ 39.216600784736855, -6.171519926825638 ], [ 39.216619200200185, -6.171545648367677 ], [ 39.216659804051019, -6.171566636430542 ], [ 39.216716128419343, -6.171569226446767 ], [ 39.216758708563809, -6.171557883961881 ], [ 39.216809283714305, -6.171538235562282 ], [ 39.21686264364218, -6.171536627965919 ], [ 39.216861026674664, -6.171517247498278 ], [ 39.216925705375125, -6.171514925414544 ], [ 39.216974573726581, -6.171534931058644 ], [ 39.217029550621966, -6.171555651189252 ], [ 39.217079227457184, -6.17155895569275 ], [ 39.217187204954328, -6.171562885372579 ], [ 39.217309914822138, -6.171546898720383 ], [ 39.2174024412964, -6.171523588573023 ], [ 39.217448704533538, -6.171516890254629 ], [ 39.217488949058271, -6.171515639901853 ], [ 39.217547609046314, -6.171494919769703 ], [ 39.217662952728794, -6.171475896544209 ], [ 39.217936489732814, -6.171371581380058 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294011", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 430.0, "width_bott": 390.0, "width_top": 420.0, "depth": 5.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217936489732814, -6.171371581380058 ], [ 39.217869475412613, -6.17126360444623 ], [ 39.217855371862662, -6.171124190026837 ], [ 39.217903701224948, -6.170992188383902 ], [ 39.217960654413965, -6.170904931528784 ], [ 39.218051204594602, -6.170736222993375 ], [ 39.21802605176665, -6.170637891524732 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294010", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 240.0, "width_bott": null, "width_top": null, "depth": 110.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218081657482728, -6.169632248027718 ], [ 39.218109145930427, -6.169721202005444 ], [ 39.218112918854622, -6.169772913196468 ], [ 39.218074021802821, -6.169784880897992 ], [ 39.218059918252855, -6.169809352167447 ], [ 39.218043479083157, -6.169905183076669 ], [ 39.218006917651088, -6.170006908505623 ], [ 39.217973769817107, -6.17013917832741 ], [ 39.217964966327315, -6.170258587314408 ], [ 39.217971074871258, -6.170295204874223 ], [ 39.217957689973517, -6.17037862145225 ], [ 39.217949964462072, -6.17044319337675 ], [ 39.217954276375444, -6.170506604249308 ], [ 39.2179750274585, -6.170544561458131 ], [ 39.21802605176665, -6.170637891524732 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728294008", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "natural", "channels": null, "width": 320.0, "width_bott": 166.0, "width_top": 245.0, "depth": 100.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218081657482728, -6.169632248027718 ], [ 39.218083094787183, -6.169575535393546 ], [ 39.218075009949622, -6.169521234157056 ], [ 39.218079950683695, -6.169467915338817 ], [ 39.218074021802821, -6.169439246424274 ], [ 39.218055875834075, -6.169350203087951 ], [ 39.218064589492329, -6.169291257641443 ], [ 39.218058301285346, -6.169260623868911 ], [ 39.218090101646403, -6.169126210356297 ], [ 39.2181131883492, -6.169012606350985 ], [ 39.218156666808959, -6.1689272247083 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987869", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "rubish_or_solid_waste", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": 82.0, "width_bott": null, "width_top": null, "depth": 40.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.219582382996379, -6.167570940828875 ], [ 39.21946335622124, -6.16755691891104 ], [ 39.21936148726801, -6.167515210401657 ], [ 39.219305791720402, -6.167499223627385 ], [ 39.21926455904886, -6.16749520460584 ], [ 39.219220002610761, -6.167519229423044 ], [ 39.219189100564996, -6.16752753540048 ], [ 39.219155323910314, -6.167529500255353 ], [ 39.219122086244795, -6.167539949710618 ], [ 39.219070792442075, -6.167532894095533 ], [ 39.219040878543112, -6.167517889749245 ], [ 39.219006652730783, -6.167508244097836 ], [ 39.218932990877491, -6.167503957141593 ], [ 39.218915563560977, -6.167495204605841 ], [ 39.218881697074771, -6.167489935221994 ], [ 39.218829415125228, -6.167491185584271 ], [ 39.218795907965131, -6.167479217830962 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987867", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": null, "width": 250.0, "width_bott": null, "width_top": null, "depth": 146.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221868685225992, -6.168514248870092 ], [ 39.221761965370241, -6.168496922454634 ], [ 39.221637997861023, -6.16851219470747 ], [ 39.221554813865716, -6.16853487980736 ], [ 39.221489057186929, -6.168573640960064 ], [ 39.221389883179562, -6.168604185460886 ], [ 39.22129331428652, -6.168636962744898 ], [ 39.221136378606374, -6.16864089244639 ], [ 39.221015106043019, -6.168656879186233 ], [ 39.220939288233041, -6.168675634578726 ], [ 39.220870926439922, -6.168684208472226 ], [ 39.220788371265307, -6.168638927595638 ], [ 39.220668356343353, -6.168590252881786 ], [ 39.220493364526, -6.168548187208025 ], [ 39.220439016451316, -6.168556225235124 ], [ 39.220382692083007, -6.168558190086164 ], [ 39.220319001529361, -6.168528895942521 ], [ 39.220275343406556, -6.168482186069899 ], [ 39.220235907365584, -6.168431635801563 ], [ 39.220150028424413, -6.168395643293095 ], [ 39.220053459531371, -6.168359650782153 ], [ 39.219884486426437, -6.168292220637255 ], [ 39.219762495210844, -6.168282932245771 ], [ 39.219717489615114, -6.168265605822739 ], [ 39.219715513321482, -6.16819219179723 ], [ 39.21971614214219, -6.168166916649843 ], [ 39.219667183959203, -6.168118241892647 ], [ 39.219532526498107, -6.168007495639427 ], [ 39.219476112298274, -6.167940958564883 ], [ 39.219376848459369, -6.167882906076915 ], [ 39.219249467352086, -6.167832891620654 ], [ 39.219152269638336, -6.167792880052237 ], [ 39.219076451828364, -6.167771534593746 ], [ 39.219017522345723, -6.167773499447703 ], [ 39.218903526136167, -6.167782251978879 ], [ 39.218803543645052, -6.167787878605973 ], [ 39.21873078010703, -6.167777250532502 ], [ 39.218631606099663, -6.167753225727007 ], [ 39.218618490696514, -6.167730897839847 ], [ 39.21862181446307, -6.167702228831383 ], [ 39.21863726548596, -6.167665521780885 ], [ 39.218624509408919, -6.167616936289233 ], [ 39.21862181446307, -6.16752092634318 ], [ 39.218588307302973, -6.167386244454673 ], [ 39.218519855678323, -6.167287555118075 ], [ 39.218489043464082, -6.167195474824584 ], [ 39.218317375413285, -6.167007563099394 ], [ 39.218168614402231, -6.166880919132981 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987872", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 15.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221002260134462, -6.16750288540254 ], [ 39.220986180290872, -6.167446887033364 ], [ 39.220996241422057, -6.167413484494555 ], [ 39.22101690267359, -6.167384726157319 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987873", "covered": "no", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 20.0, "width_top": 127.0, "depth": 48.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221352243769154, -6.167286215443709 ], [ 39.221348650508013, -6.167335515458589 ], [ 39.221345326741464, -6.167363202059176 ], [ 39.221338858871412, -6.167376509489239 ], [ 39.221323767174646, -6.167384904780549 ], [ 39.221302027944773, -6.167389906230604 ], [ 39.221273910676373, -6.16739053141185 ], [ 39.221206177703955, -6.167396247354701 ], [ 39.22115452457512, -6.167410179965198 ], [ 39.22111499870261, -6.167412948624936 ], [ 39.221086791602701, -6.167410894458022 ], [ 39.22101690267359, -6.167384726157319 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012127", "covered": "culvert", "waterway": "underground_drain", "blockage": "no", "blockage_m": null, "covered_ma": null, "material": "concrete", "profile": "boxed_rectangular", "channels": "1", "width": 140.0, "width_bott": null, "width_top": null, "depth": 140.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.215603025950784, -6.164993491753148 ], [ 39.215727712112219, -6.165002958826287 ], [ 39.215885995265282, -6.16499751079364 ], [ 39.216027479922531, -6.164992955881076 ], [ 39.216154861029821, -6.164998939785826 ], [ 39.21630838311188, -6.164998939785823 ], [ 39.216462713677686, -6.164996260425498 ], [ 39.216726908202752, -6.164992955881088 ], [ 39.216923279923854, -6.164990901704813 ], [ 39.217012482631574, -6.164993491753157 ], [ 39.217239217409279, -6.165001529834121 ], [ 39.217406124389072, -6.165010907595097 ], [ 39.217627379443549, -6.165009478602951 ], [ 39.217879446712274, -6.165012247275228 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012129", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "sand", "profile": "natural", "channels": null, "width": 320.0, "width_bott": 200.0, "width_top": 310.0, "depth": 10.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218035394245597, -6.16680125309628 ], [ 39.217876212777249, -6.166560915238194 ], [ 39.217806503511206, -6.166038262634221 ], [ 39.21784935315025, -6.165590184966062 ], [ 39.218023716146902, -6.16535154348623 ], [ 39.218037101044636, -6.165246244685353 ], [ 39.218030363680001, -6.165100934092048 ], [ 39.218015721140873, -6.164930884029411 ], [ 39.217991466628199, -6.164802899886449 ], [ 39.217910348758046, -6.164627491003914 ], [ 39.21785339556903, -6.164526925600103 ], [ 39.217785662596611, -6.164394207817729 ], [ 39.217726643282454, -6.164270242591294 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728012130", "covered": "yes", "waterway": "drain", "blockage": "no", "blockage_m": null, "covered_ma": "concrete", "material": "concrete", "profile": "tabulated", "channels": null, "width": 340.0, "width_bott": 305.0, "width_top": 300.0, "depth": 325.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.217726643282454, -6.164270242591294 ], [ 39.217568360129384, -6.163981496385992 ], [ 39.217469186122017, -6.163813500145357 ], [ 39.217413310911347, -6.163669350218631 ], [ 39.217424180526287, -6.163609511018215 ], [ 39.217401363318068, -6.163529487241138 ], [ 39.21735114749368, -6.16343954978977 ], [ 39.217299494364845, -6.163386408984646 ], [ 39.217284043341962, -6.163343539087533 ], [ 39.217211010309363, -6.16332621250315 ], [ 39.217141929864006, -6.163315495027984 ], [ 39.217085605495697, -6.163306206549324 ], [ 39.217013919936022, -6.163303527180457 ], [ 39.216923998576078, -6.163289505149801 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728307173", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "solid waste or rubbish", "covered_ma": null, "material": "dirt", "profile": "open_rectangular", "channels": null, "width": 110.0, "width_bott": null, "width_top": null, "depth": 390.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218338126496342, -6.141797941366844 ], [ 39.218334982392854, -6.141733812539819 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "728307172", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "grass or plants", "covered_ma": null, "material": "dirt", "profile": "open_rectangular", "channels": null, "width": 60.0, "width_bott": null, "width_top": null, "depth": 30.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.218337228181063, -6.14173381253983 ], [ 39.218357170780365, -6.141640834658523 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987866", "covered": "no", "waterway": "ditch", "blockage": "yes", "blockage_m": "rubish_or_solid_waste", "covered_ma": null, "material": "dirt", "profile": "natural", "channels": null, "width": 273.0, "width_bott": null, "width_top": null, "depth": 50.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.225191194135832, -6.168987599176727 ], [ 39.2251717905257, -6.168978935976807 ], [ 39.225132893473898, -6.168974202475749 ], [ 39.225051775603745, -6.168952231885406 ], [ 39.225002188600051, -6.168949641856408 ], [ 39.224963291548256, -6.168911595222013 ], [ 39.224951882944147, -6.168878907266334 ], [ 39.224896906048755, -6.168842914788216 ], [ 39.22484121050114, -6.168820229701524 ], [ 39.224778867420433, -6.168790935572336 ], [ 39.224728561764515, -6.168768250483418 ], [ 39.224646096421431, -6.16872761380591 ], [ 39.224586358455042, -6.168685637454454 ], [ 39.224493203160073, -6.168654199844386 ], [ 39.224428793954203, -6.168630175078614 ], [ 39.224336267479941, -6.168570961617797 ], [ 39.224259192028555, -6.168506210842367 ], [ 39.224255149609789, -6.168468878667571 ], [ 39.224257215734937, -6.168439584518993 ], [ 39.224241674880531, -6.16836492015737 ], [ 39.224224966216234, -6.168320175122209 ], [ 39.22420080153509, -6.16827158969054 ], [ 39.224186069164432, -6.16822157527094 ], [ 39.22418211657719, -6.168186922420304 ], [ 39.224128397323192, -6.168099486480418 ], [ 39.224081505265367, -6.168042952305282 ], [ 39.224035152196699, -6.168030180760911 ], [ 39.223968227708035, -6.168014194002173 ], [ 39.223905076143559, -6.167975522120085 ], [ 39.223858902737959, -6.167928187018082 ], [ 39.223804464831744, -6.167902911858103 ], [ 39.223744906528395, -6.167893534148267 ], [ 39.223695229693192, -6.167906930876569 ], [ 39.223606655806179, -6.167936225054565 ], [ 39.223486640884211, -6.167967484084194 ], [ 39.223375429452048, -6.167987489862186 ], [ 39.223338508693871, -6.167979541137986 ], [ 39.223310391425478, -6.167954891161048 ], [ 39.223281465673324, -6.167947478305452 ], [ 39.223252719584231, -6.167950961454473 ], [ 39.223187591726131, -6.167982220483241 ], [ 39.223133243651439, -6.168022946529375 ], [ 39.223078985408286, -6.168055545226331 ], [ 39.22303874088356, -6.168080195198586 ], [ 39.222979811400918, -6.168138962156806 ], [ 39.222947561882215, -6.168204963337678 ], [ 39.22292411585331, -6.168302938011848 ], [ 39.222917378488674, -6.168347593737013 ], [ 39.222883871328577, -6.16841020105737 ], [ 39.222854406587253, -6.168438244847519 ], [ 39.222800058512568, -6.16848165020135 ], [ 39.222752447802506, -6.168519607555173 ], [ 39.222707442206783, -6.16855560005523 ], [ 39.222677977465452, -6.168581589675351 ], [ 39.222641775359499, -6.168585608688662 ], [ 39.222596140943068, -6.16857292646879 ], [ 39.222525802856325, -6.168552920712898 ], [ 39.222458069883899, -6.168557654217698 ], [ 39.222372909594966, -6.168546222356951 ], [ 39.22226232698349, -6.168550955861813 ], [ 39.222185161700587, -6.168537648461218 ], [ 39.22207116549103, -6.168522912077616 ], [ 39.221996695153976, -6.168519607555166 ], [ 39.221924290942077, -6.168517642704001 ], [ 39.221868685225992, -6.168514248870092 ] ] ] } },
{ "type": "Feature", "properties": { "osm_id": "727987874", "covered": "no", "waterway": "drain", "blockage": "yes", "blockage_m": "dirt", "covered_ma": null, "material": "concrete", "profile": "open_rectangular", "channels": null, "width": null, "width_bott": 203.0, "width_top": 170.0, "depth": 37.0, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.221668720243756, -6.167280231564777 ], [ 39.221361676079631, -6.167279517071753 ], [ 39.221352243769154, -6.167286215443709 ] ] ] } },

{ "type": "Feature", "properties": { "osm_id": "737982665", "covered": null, "waterway": "stream", "blockage": null, "blockage_m": null, "covered_ma": null, "material": null, "profile": null, "channels": null, "width": null, "width_bott": null, "width_top": null, "depth": null, "diameter": null }, "geometry": { "type": "MultiLineString", "coordinates": [ [ [ 39.22173914816203, -6.141770789329614 ], [ 39.221714354660179, -6.141752747514623 ], [ 39.221670876200427, -6.141731401009956 ], [ 39.221632607969326, -6.141713448509573 ], [ 39.221600358450623, -6.141714698932512 ], [ 39.22156828859498, -6.141742744131795 ], [ 39.221551490099166, -6.141805443903213 ], [ 39.221542057788689, -6.141840813001776 ], [ 39.221505855682729, -6.141843403162945 ], [ 39.221463545032854, -6.141810088330425 ], [ 39.221374521988203, -6.141780792711904 ], [ 39.221294661759437, -6.141791421305393 ], [ 39.221204830231024, -6.141803389637297 ], [ 39.221120298762784, -6.14178481192796 ], [ 39.221051308148972, -6.141750157353015 ], [ 39.221000283840837, -6.141740689865649 ], [ 39.220719290819964, -6.14174345865915 ], [ 39.220585172348045, -6.141705410076366 ], [ 39.220475308388792, -6.14170808955412 ], [ 39.220378649664227, -6.141724077104409 ], [ 39.220268695873443, -6.141702730598605 ], [ 39.220106460133138, -6.141644139348133 ], [ 39.219899847617789, -6.141582689980975 ], [ 39.219706799663228, -6.141532137153248 ], [ 39.219457427340366, -6.141441392135974 ], [ 39.219344688772203, -6.141392089718537 ], [ 39.219292406822667, -6.141374762418553 ], [ 39.219252162297934, -6.141386730759836 ], [ 39.219195748098095, -6.14142942379592 ], [ 39.219148856040263, -6.141456129270739 ], [ 39.219093879144872, -6.141436122493757 ], [ 39.219063066930623, -6.14144273187551 ], [ 39.219044292141191, -6.141481405688814 ], [ 39.219017522345723, -6.14152811793529 ], [ 39.218966498037588, -6.141526688880015 ], [ 39.218902088831719, -6.141481405688813 ], [ 39.218784050203389, -6.141321440775418 ], [ 39.2186943085065, -6.141177463380697 ], [ 39.218672748939674, -6.141048044461016 ], [ 39.218635289192328, -6.140984004859727 ], [ 39.218583007242799, -6.140976055731548 ], [ 39.218529287988808, -6.141021428281779 ], [ 39.218447451466417, -6.141093417005097 ], [ 39.218361662356791, -6.141110744314234 ], [ 39.218273178301303, -6.141071981157986 ], [ 39.218228891357789, -6.141018748800594 ], [ 39.218231586303652, -6.140945420326376 ], [ 39.218259793403568, -6.140886739676526 ], [ 39.218285215726112, -6.140847976503966 ], [ 39.218316117771884, -6.140884060194634 ], [ 39.218345582513201, -6.140930683177478 ], [ 39.218388521983783, -6.140940061363175 ], [ 39.218444756520569, -6.140923984473305 ], [ 39.218459578722758, -6.14086798330306 ], [ 39.218439456460395, -6.140782686453509 ], [ 39.218363009829723, -6.140654696495513 ], [ 39.218278478361484, -6.140524027023062 ], [ 39.218214158987131, -6.140423992955495 ], [ 39.218082645629543, -6.140376030186085 ], [ 39.217995598878503, -6.140347984914832 ], [ 39.217949964462072, -6.140238751248651 ], [ 39.217885555256203, -6.140161314122579 ], [ 39.217827883414962, -6.140110761159927 ], [ 39.217739399359481, -6.140102722702518 ], [ 39.21762001325822, -6.140184000432881 ], [ 39.217484547313376, -6.140232052535772 ], [ 39.217272724569384, -6.140293323426455 ], [ 39.217059464520929, -6.140289304199144 ], [ 39.216771105314727, -6.140314759304915 ], [ 39.216529727997887, -6.140269297378318 ], [ 39.216325900259918, -6.140306720850604 ], [ 39.216164922160999, -6.140376030186085 ], [ 39.216025503628913, -6.140485353140245 ], [ 39.215893990271312, -6.14060530468912 ], [ 39.2158430557947, -6.140770718098662 ], [ 39.215808201161678, -6.140861463230229 ], [ 39.215832276011298, -6.140925413530197 ], [ 39.215869915421699, -6.14095202971423 ], [ 39.215872610367548, -6.14098668434112 ], [ 39.215864525529994, -6.141029377409272 ], [ 39.215792121318088, -6.141032056890425 ], [ 39.215682077695789, -6.140994722785174 ], [ 39.215448785216502, -6.140941401103983 ], [ 39.215258342376266, -6.140917375085092 ], [ 39.215059904530008, -6.140925413530188 ], [ 39.214939170955816, -6.140946760067149 ], [ 39.214842602062774, -6.140896028546955 ], [ 39.214660154228575, -6.140886739676522 ], [ 39.214613262170744, -6.140846726079003 ], [ 39.214634642074508, -6.140432031408054 ], [ 39.214623952122622, -6.1402813550606 ], [ 39.214623952122622, -6.140114691072407 ], [ 39.21459592468576, -6.140017336414209 ], [ 39.214557027633951, -6.139882647554993 ], [ 39.214527473061118, -6.139797350547642 ], [ 39.214513998331853, -6.139709284722579 ], [ 39.214498008319794, -6.139665341120856 ], [ 39.214476448752968, -6.139614609478562 ], [ 39.214438899174098, -6.139597282120767 ], [ 39.214378622218533, -6.139628006919771 ], [ 39.214280705852559, -6.139701335575374 ], [ 39.214167967284403, -6.139732060368392 ], [ 39.214050018487605, -6.139744028746565 ], [ 39.213930722217867, -6.139722592845147 ], [ 39.213842148330862, -6.139677309500529 ], [ 39.21372949959423, -6.13962398768745 ], [ 39.213600771014015, -6.139578615018178 ], [ 39.213466562710565, -6.139550659021219 ], [ 39.213266777391375, -6.139524042767131 ], [ 39.213152781181826, -6.139518594473359 ], [ 39.213049564755671, -6.139537350894346 ], [ 39.212959643395735, -6.139541280811041 ], [ 39.212890023961215, -6.13948804830063 ], [ 39.212857774442519, -6.13936389863319 ], [ 39.212840257294474, -6.139165348421486 ], [ 39.212833609761375, -6.139049326468639 ], [ 39.212776027751666, -6.138938574157531 ], [ 39.212691496283426, -6.138899900159576 ], [ 39.212617654767072, -6.138938574157522 ], [ 39.212505095861964, -6.138913297618762 ], [ 39.21231600049466, -6.138747883632398 ], [ 39.212110825283773, -6.138587917898032 ], [ 39.211994044296837, -6.138445190194987 ], [ 39.211885527810516, -6.138241191334012 ], [ 39.211762099290475, -6.138030493654353 ], [ 39.21163741312904, -6.137810506967283 ], [ 39.211593126185534, -6.13763723277713 ], [ 39.211565008917148, -6.137517191243286 ], [ 39.211493862346636, -6.137278537161118 ], [ 39.211452270348985, -6.137171803732739 ] ] ] } }
]
}

	
	L.geoJSON(myGeoJSON,{
			style: function(feature) {
			b = feature.properties.blockage;
			   return b =="yes" ? {color: '#FF9900', opacity:0.7} :
				   b == "no"  ? {color: '#0099FF', opacity:0.7} :
						  {color: '#', opacity:0.7};
			}	
		}).addTo(map1);
		
		
		
		// markers
			<!-- var LeafIcon = L.Icon.extend({ -->
				<!-- options: { -->
					<!-- shadowUrl: 'lib/img/marker-shadow.png', -->
					<!-- iconSize:     [38, 95], -->
					<!-- shadowSize:   [50, 64], -->
					<!-- iconAnchor:   [22, 94], -->
					<!-- shadowAnchor: [4, 62], -->
					<!-- popupAnchor:  [-3, -76] -->
				<!-- } -->
			<!-- }); -->
			
			<!-- var greenIcon = new LeafIcon({iconUrl: 'lib/img/marker-icon-2x-green.png'}), -->
				<!-- redIcon = new LeafIcon({iconUrl: 'lib/img/marker-icon-2x-red.png'}), -->
				<!-- blackIcon = new LeafIcon({iconUrl: 'lib/img/marker-icon-2x-black.png'}); -->
				
			<!-- L.icon = function (options) { -->
				<!-- return new L.Icon(options); -->
			<!-- }; -->
			
			<!-- L.marker([-6.17626,39.19946], {icon: greenIcon}).addTo(groups.blocked).bindPopup("I am a green leaf."); -->
			<!-- L.marker([-6.177407180116619,39.198098274661376], {icon: redIcon}).addTo(map).bindPopup("I am a red leaf."); -->
			<!-- L.marker([-6.169376192669119, 39.191989191740198], {icon: blackIcon}).addTo(map).bindPopup("I am an orange leaf."); -->
			
			
		// markers/
		
		
		//L.marker([-6.17626,39.19946], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: '#0033CC', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	</b> <div><center><img style="width:250px; height:220px"  src="Images/solid_waste/sw.jpg" alt="image" /></center> </div>',
		//{minWidth:90});
		//L.marker([-6.177407180116619,39.198098274661376], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: '#FFFF42', iconColor: '#f28f82'}) }).addTo(map);
    <!-- L.marker([51.936063,4.502077], {icon: L.AwesomeMarkers.icon({icon: 'cog', prefix: 'fa', markerColor: 'purple', iconColor: 'black'}) }).addTo(map); -->
    //L.marker([ -6.181779418460788,39.207701175217082], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green'}) }).addTo(map);
    <!-- L.marker([51.930295,4.515209], {icon: L.AwesomeMarkers.icon({icon: 'shopping-cart', prefix: 'fa', markerColor: 'blue'}) }).addTo(map); -->
    <!-- L.marker([51.930083,4.507742], {icon: L.AwesomeMarkers.icon({icon: 'info', prefix: 'fa', markerColor: 'orange'}) }).addTo(map); -->

    <!-- L.marker([51.930454,4.527054], {icon: L.AwesomeMarkers.icon({icon: 'group', prefix: 'fa', markerColor: 'darkred'}) }).addTo(map); -->
    <!-- L.marker([51.929607,4.527054], {icon: L.AwesomeMarkers.icon({icon: 'arrow-right', prefix: 'fa', markerColor: 'darkblue'}) }).addTo(map); -->
    <!-- L.marker([51.928919,4.528856], {icon: L.AwesomeMarkers.icon({icon: 'twitter', prefix: 'fa', markerColor: 'cadetblue'}) }).addTo(map); -->
    <!-- L.marker([51.930295,4.530745], {icon: L.AwesomeMarkers.icon({icon: 'phone', prefix: 'fa', markerColor: 'darkpurple'}) }).addTo(map); -->
    <!-- L.marker([51.925055,4.512806], {icon: L.AwesomeMarkers.icon({icon: 'ambulance', prefix: 'fa', markerColor: 'darkgreen'}) }).addTo(map); -->
    <!-- L.marker([51.925902,4.505768], {icon: L.AwesomeMarkers.icon({icon: 'medkit', prefix: 'fa', markerColor: 'darkblue'}) }).addTo(map); -->


	//solid_waste just circle for try tu
	
	// awesome-markers for solid waste
	
	<!-- 
	<!-- L.marker([-6.177407180116619,39.198098274661376], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.<div><img style="width:300px;height:250px" src="Images/solid_waste/sw.jpg" alt="image" /></div>', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.169376192669119, 39.191989191740198], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
		
	<!-- L.marker([-6.169851596363476,39.191845371463202], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.170211609660813,39.191646843785414], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.170690227803679, 39.191518115205199], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.170798204854351,39.191453795830853], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.171121957252367, 39.195899468340443], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.171121600008454,39.195883747822968], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.171089180122038,39.195882041023928], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
		
	<!-- L.marker([-6.171091234274685,39.195799845175429], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.168868993705623,39.198436670028904], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.169376192669119,39.191989191740198], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	
	<!-- L.marker([-6.167021495720088,39.19719295251803], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.168036343254395,39.198455714312928], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.168036343254395,39.198455714312928], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
		
	L.marker([-6.168027501415917,39.198475746743767], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	',
		{minWidth:90});
	
	<!-- L.marker([-6.165613852621964,39.195080384464369], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.165238206608085,39.19458855684632], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.165760502752983,39.195419408652604], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	
	<!-- L.marker([-6.163136781097682, 39.194943301552016], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.162492838850641,39.198651457213337], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.164886228016529 ,39.19874057008952], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.162746218160938,39.194864878627726], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.162704509273278,39.195156920926586], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.16050482969391,39.19471126671413], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	
	<!-- L.marker([-6.162345116066863,39.194967915390805], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.1617733374073,39.195041397581051], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.161540856779589,39.19579885702862], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.', -->
		<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.160301375171761,39.195264449266098], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	', -->
		<!-- {minWidth:90}); -->
	
	L.marker([-6.159686813431015,39.195665457208925], {icon: L.AwesomeMarkers.icon({icon: 'bitbucket', prefix: 'fa', markerColor: 'blue',iconColor: 'blue', spin:true}) }).addTo(map).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.',
		{minWidth:90});
	<!-- --> -->
	
	//end // awesome-markers for solid waste
//mental

	// awesome-markers metals
	
	<!-- L.marker([-6.185092689399448,39.211182057111522], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.186147333861841,39.210835397243386], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.179460947034235, 39.203362402226311], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.<div><img style="width:300px;height:250px" src="Images/metal/2.jpg" alt="image" /></div>', -->
	<!-- {minWidth:90}); -->
	
	L.marker([-6.185338020126504,39.207851373532591], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: 'yellow', iconColor: 'yellow'}) }).addTo(map).bindPopup('<b>Metal:</b> Once corrosion occurred down to the base metal, plaques and rust will obviously leading to sediment build up which will gradually act a barrier for water inflow.',
	{minWidth:90});
	

//grass_or_plants

	// awesome-markers grass
	
	L.marker([-6.181779418460788,39.207701175217082], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.<div><img style="width:300px;height:250px" src="Images/grass/a.jpg" alt="image" /></div>',
	{minWidth:90});
	
	<!-- L.marker([-6.180899543674935,39.20706417984912], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.181987419503118, 39.207659673050955], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.180766115519355,39.20724114796009], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.179295545679839 ,39.204270688810091], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	L.marker([-6.174989555083692,39.20100845685581], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ',
	{minWidth:90});
	
	<!-- L.marker([-6.175505232660777,39.200557143257065], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175057877479438,39.201128022620132], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.177773529278448 ,39.205635229726667], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175447627552812,39.208535979610616], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn. ', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.169473631259299 ,39.204939215044533], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	L.marker([-6.176148176688477 ,39.211057011623978], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.',
	{minWidth:90});
	
	<!-- L.marker([-6.18458773821088,39.210812580035167], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175505232660777,39.200557143257065], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.</div>', -->
	<!-- {minWidth:90}); -->
	
	<!-- L.marker([-6.175057877479438,39.201128022620132], {icon: L.AwesomeMarkers.icon({icon: 'tree', prefix: 'fa', markerColor: 'green', iconColor: 'green'}) }).addTo(map).bindPopup('<b>Grass or Plants:</b>  Natural debris include leaves and shrubs can be an issue for water drains especially spring and autumn.</div>', -->
	<!-- {minWidth:90}); -->
	
	
	//end awesome-markers grass

//dirt

	// awesome-markers dirt
	
	<!-- L.marker([-6.174962761984894 ,39.210173069384396], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.<div><img style="width:300px;height:250px" src="Images/dirty/1.jpg" alt="image" /></div>', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.175788703286794,39.215794816263937], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->

	<!-- L.marker([-6.180182121341964,39.216245411210458], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.181130051005024 ,39.220070617353294], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.174470215277481, 39.215645606095258], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.176456207242738, 39.220752169159361], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.175637679730191,39.220642305200109], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.172182881310601,39.202988613236599], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169184619953372,39.199384392653648], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170093629641671,39.200118675566891], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170092915152437,39.200127029899029], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169058333752286 ,39.199543663953527], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.168754943088251,39.199208502521017], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170414881759373,39.202533257219073], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169840253841821,39.202751188507001], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.181130051005024 ,39.220070617353294], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.174470215277481, 39.215645606095258], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	L.marker([-6.176456207242738, 39.220752169159361], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:100});
	
	<!-- L.marker([-6.175637679730191,39.220642305200109], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.172182881310601,39.202988613236599], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169184619953372,39.199384392653648], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	L.marker([-6.170093629641671,39.200118675566891], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:100});
	
	<!-- L.marker([-6.170092915152437,39.200127029899029], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169058333752286 ,39.199543663953527], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.168754943088251,39.199208502521017], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.170438906444244,39.202617070035082], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	L.marker([-6.170687637783178 ,39.204625343684263], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:100});
	
	<!-- L.marker([-6.169332876699817,39.202979180926107], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.168594182583608 ,39.202755141094251], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169493726291684 ,39.203072875210246], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:100}); -->
	
	<!-- L.marker([-6.169263660452863, 39.203433728459878], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.', -->
	<!-- {minWidth:300}); -->
	
	L.marker([-6.169311620614615, 39.203735562395337], {icon: L.AwesomeMarkers.icon({icon: 'trash', prefix: 'fa', markerColor: 'red', iconColor: 'red', spin:true}) }).addTo(map).bindPopup('<b>Dirty:</b> Blocked drains are usually the unfortunate result of dirt materials accumulating in the pipe that carries mud or clay.',
	{minWidth:300});
	
	
	//end awesome-markers dirt

//start concrete

	// awesome-markers concrete
	
	// Icons za Blockage	
	
	
	L.marker([-6.16741,39.21856], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>',
	{minWidth:100});
	
	L.marker([-6.16400,39.21748], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>',
	{minWidth:100});
	
	L.marker([-6.168431635801563,39.220235907365584], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>',
	{minWidth:100});
	
	L.marker([-6.168764945962498,39.225244913389822], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.',
	{minWidth:100});
	
	L.marker([-6.168359650782153,39.220053459531371], {icon: L.AwesomeMarkers.icon({icon: 'bars', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.',
	{minWidth:100});
		
		<!-- L.marker([-6.169194176262963,39.204060123707492], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.<div><img style="width:300px;height:250px" src="Images/concrete/6.jpg" alt="image" /></div>', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169406915746225,39.20443229572971], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169544187147512,39.204974788329785], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.173541386151268,39.209956485569393], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.172908620376289,39.209713670948098], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.172015155601215 ,39.209589254281248], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.171889138007177,39.209655549949211], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169835609659679,39.20616568490194], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.169762910341255,39.206693085805249], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		<!-- L.marker([-6.170265642893225,39.207530225818516], {icon: L.AwesomeMarkers.icon({icon: 'cubes', prefix: 'fa', markerColor: '#808080', iconColor: '#808080', spin:true}) }).addTo(map).bindPopup('<b>Concrete:</b> When concrete materials such sand and gravel is washed down the drains especially during rainy season, the blockage may happen.', -->
	<!-- {minWidth:100}); -->
		
		
	// end awesome-markers concrete
	  
	//ILIKUWA KUNA ICON YA FLOOD HOUSE
	<!--greenIcon = L.icon({
	//iconUrl: 'Images/f1.png',

	//iconSize:     [28, 30], // size of the icon
	//iconAnchor:   [22, 16], // point of the icon which will correspond to marker's location
	//popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
	//});
	
	//L.marker([-6.174470215277481,39.215645606095258], {icon: greenIcon}).addTo(map).bindPopup('<b>Floods:</b>Urban floods are entirely manmade with poorly maintained drains.  This could be due to blockage materials reducing the flow of water.  <div><img style="width:300px;height:250px" src="Images/Threat/mwa01.jpg" alt="image" /></div>',
	//{minWidth:200}
	
	//);
	
	<!-- greenIcon = L.icon({
	//iconUrl: 'lib/img/marker-icon-2x-blue.png',

	//iconSize:     [28, 30], // size of the icon
	//iconAnchor:   [22, 16], // point of the icon which will correspond to marker's location
	//popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
	//});
	
	//L.marker([-6.175064397132441,39.210305391225752], {icon: greenIcon}).addTo(map).bindPopup('<b>Pollution:</b> This is due to surface water picking up contaminants as it drains from the urban landscape and flows into the river. <div><img style="width:300px;height:250px" src="Images/Threat/tf1.jpg" alt="image" /></div>',
	//{minWidth:200}
	
	//);
	
	 -->
	

	  
	</script>
					
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <h2 style="color:#3498db ">Zanzibar Drainage System</h2>	
                    </div>
                    <p class="pera-top mb-40"style="color: #3498db ">Urban West</p>
                    <p class="pera-bottom mb-30">The failure of control of the drainage impediments results major threats    
                        toward urban development and affect infrastructure 
                    in Zanzibar Island (Unguja).</p>
                    <div class="icon-about">
						 <img src="assets/img/icon/about1.svg" alt="" class=" mr-20">
						 <img src="assets/img/icon/about2.svg" alt="" class=" mr-20">
						 <img src="assets/img/icon/about2.svg" alt="" class=" mr-20">
						 <img src="assets/img/icon/about2.svg" alt="">
					</div>
				</div>
			</div>
     </div>
 </div>
</div>
<!--? Testimonial Area End -->
<!--? video_start -->
<div class="container">
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="assets/img/gallery/d3.png">
        <div class="video-wrap position-relative">
            <div class="video-icon" >
                <a class="popup-video btn-icon" href="assets/videos/try_one.mp4"><i class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- video_end -->      
<!--? Blog Area Start -->

<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/dr6.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <center><h3 style="color:#3498db;">DRAINAGE SYSTEM </h3></center>
							<center><p>
							During data collection we found that many communities dump waste directly into the drainage system,that can be the source of drainage to be blocked. </p></center>
						
						</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/dr3.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <center><h3 style="color: #3498db;">DRAINAGE SYSTEM  </h3></center>
							<center><p>
							Through data collection we saw many drainage are open that can lead the children to employee himself by collected the sand in drainage and go to sell ,that can be the problem to him beacause they can loose their study.</p></center>
						
						</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/dr1.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                           <center><h3 style="color:#3498db;">DRAINAGE SYSTEM </h3></center>
							<center><p>
							When we were at field we found that many children were play around the drainage that can be the threat to him,to get different problems like disease (cholera ,malaria). </p></center>
						
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Blog Area End -->

<!--? Testimonial Area Start -->
<style>
</style>
 <section class="testimonial-area testimonial-padding fix">
    <div class="container"id="d">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"I Latifa Khamis,I'm Tanzanian.I'm working with Graphic Designer, Website Designer,Map Developer, GIS and Data input. I had participated in different project like UNDP(Tourist attraction project), School Mapping project(SUZA Youthmappers), FAWE (Student Dropout School project ) ,Resilience Academy Tanzania(Internship Zanzibar Mapping) and OpenStreetMap-Uganda (Mapping Internship)".</div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets/img/icon/le.png"height="100px"width="100px" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Bintkhamis</span>
                                    <p>Developer of Flood Simulation Model</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"Is a fellowship program led by Open Map Development Tanzania in collaboration with Uhuru labs and the Humanitarian OpenStreetMap Team, designed to develop youth in urban settings, giving them power and responsibility to gain technical and social skills".</p>
							</div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets/img/icon/la.png" alt=""height="100px"width="100px">
                                </div>
                                <div class="founder-text">
                                    <span>OpenSkiesFellows </span>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Testimonial Area End -->

<footer>
    <div class="footer-wrappr section-bg3" data-background="assets/img/gallery/footer-bg.png">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="index.php"><img src="assets/img/logo/osf_logo.png" alt=""></a>
                            </div>
                            <d iv class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav> 
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="drainage.php">Drainage</a></li>
                                                    <li><a href="Proximity/proximity.php">Proximity</a></li>
                                                    <li><a href="https://bintkhamisfloodsimulation.blogspot.com/2021/11/flood-simulation-model-flood-simulation.html">Blog</a></li>
													<li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>  
                                </div>
                            </d>
                            <!-- social -->
                            <div class="footer-social mt-50">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-drive"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-50">
                                <center><h4 style="color:#3498db"><strong>Subscribe Simulation Model</strong></h4></center>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                    <form  action="" method="POST" >
                                        <input type="email" name="Email" id="Email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'"><br><br><br>
										<input type="text" name="Comments" id="comment" placeholder=" Suggestion Please !!!!! " class="placeholder hide-on-focus">
									   <div class="form-icon">
                                            <button type="submit"  name="sub" id="sub">
                                            Subscribe
											</button>  
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Flood Simulation Model, Present Some areas in Zanzibar, that are experienced with flood.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
						<!-- Logo Founder -->
						  	<div class="container">
									<div class="row">
										<div class="col-lg-12">
												<marquee><b><p style="color:#3498db ;">FLOOD SIMULATION MODEL IN UBRAN WEST ZANZIBAR AT SEBLENI,NYERERE,MTUMWAJENI & MWANTENGA .<p></b></marquee>		
										</div>
									</div>
								</div>
						<!-- Logo Founder -->

        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
									<p>
										Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bintkhamis <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://beifatechnology.com" target="_blank">Beifa Technology</a>
									</p>
							</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<!-- Js Founder -->
<script src="./assets/founder/js/founder_jquery-3.3.1.min.js"></script>
<script src="./assets/founder/js/founder_beifa.pkgd.min.js"></script>
<script src="./assets/founder/js/founder_jquery.slicknav.js"></script>
<script src="./assets/founder/js/founder_owl.carousel.min.js"></script>
<script src="./assets/founder/js/founder_main.js"></script>

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>


<script>
	var north = L.control({position: "topright"});
	north.onAdd = function(map) {
		var div = L.DomUtil.create("div");
		div.innerHTML = '<img src="Images/noorth.jpg" style="width:50px">';
		return div;
	}
	north.addTo(map);
</script>
					
									
<script>
		
			var options = {
		        draw: {
		            circle: false, // Turns off this drawing tool
		            rectangle: false,
		            marker: false,
					circlemarker: false
		        }
		    };

			var drawControl = new L.Control.Draw(options);
		    map.addControl(drawControl);

		    map.on(L.Draw.Event.CREATED, function (e) {
		        var type = e.layerType,
		            layer = e.layer;

				if (type === "polyline") {
					var line = L.motion.polyline(layer.getLatLngs(), {
						color: "orange"
					}, {
						auto: true,
						easing: L.Motion.Ease.swing
					}).motionSpeed(100000).addTo(map);
				}

				if (type === "polygon") {
					L.motion.polygon(layer.getLatLngs(), {
						color: "red",
						fill: true,
						fillOpacity: 0.4
					},{
						auto: true
					}, {
						removeOnEnd: true,
						icon: L.divIcon({className:"red", html: "<i class='fa fa-superpowers fa-spin fa-2x' aria-hidden='true' motion-base='0'></i>", iconSize: L.point(24, 24), iconAnchor: L.point(5, 22)})
					}).motionDuration(10000).addTo(map);
				}
		    });
	
				
				
			var trackRoute = JSON.parse('[{"lat":-6.181130051005024,"lng":39.220070617353294},{"lat":-6.181081288129948,"lng":39.220110502551918},{"lat":-6.181026988073262,"lng":39.220131882455675},{"lat":-6.181000641826654,"lng":39.220140685945459},{"lat":-6.180837116449702,"lng":39.220205005319805},{"lat":-6.18075513046889,"lng":39.220240848099643},{"lat":-6.180557488831106,"lng":39.22032340327425},{"lat":-6.180349129988866,"lng":39.220386105681079},{"lat":-6.179683506442488,"lng":39.220581219760795},{"lat":-6.179035476059077,"lng":39.220868141662542},{"lat":-6.178430224252512,"lng":39.221055979388453},{"lat":-6.177704849993631,"lng":39.221290619340657},{"lat":-6.177276519688681,"lng":39.221440727824636},{"lat":-6.177261426308404,"lng":39.22144665670551},{"lat":-6.176779241702246,"lng":39.221647789497631},{"lat":-6.176248918507336,"lng":39.221800053938281}]');
			var trackRoute2 = JSON.parse('[{"lat":-6.180182121341964,"lng":39.216245411210458},{"lat":-6.179812826633498,"lng":39.216349975109537},{"lat":-6.179510245916048,"lng":39.216586052366196},{"lat":-6.179419507390903,"lng":39.217186845628213},{"lat":-6.179419507390905,"lng":39.217217657842461}]');
			var trackRoute3 = JSON.parse('[{"lat":-6.176456207242738,"lng":39.220752169159361},{"lat":-6.176718957431841,"lng":39.220717943347033},{"lat":-6.176962148602137,"lng":39.220704648280837},{"lat":-6.177019485615367,"lng":39.220729351951142},{"lat":-6.17706753438492,"lng":39.220796456102867},{"lat":-6.177101561484864,"lng":39.22087757397302},{"lat":-6.177122906567466,"lng":39.220964800387115},{"lat":-6.177180243563266,"lng":39.221174018016782},{"lat":-6.177276519688681,"lng":39.221440727824636}]');
			var trackRoute4 = JSON.parse('[{"lat":-6.170813655662949,"lng":39.21514201054697},{"lat":-6.170836876530504,"lng":39.215204353627698},{"lat":-6.170871261274826,"lng":39.215260408501422},{"lat":-6.170898590446647,"lng":39.215314397249998},{"lat":-6.170928241703369,"lng":39.215385364157449},{"lat":-6.170959589867556,"lng":39.215461451462012},{"lat":-6.170981649685676,"lng":39.215508792677483},{"lat":-6.170981649685671,"lng":39.21558559863427},{"lat":-6.170971914786297,"lng":39.215648570535691},{"lat":-6.170981203130658,"lng":39.215707589849856},{"lat":-6.171004602612881,"lng":39.215786821257915},{"lat":-6.171031217289866,"lng":39.215834970957147},{"lat":-6.171052205373126,"lng":39.215847816865704},{"lat":-6.171074890364302,"lng":39.215927227936824},{"lat":-6.171080606267448,"lng":39.216001967768463},{"lat":-6.171164647898642,"lng":39.21604059532568},{"lat":-6.171221896228525,"lng":39.216017059465237},{"lat":-6.171277894198869,"lng":39.215997566023574},{"lat":-6.171309242342376,"lng":39.216083804290847},{"lat":-6.171329247994229,"lng":39.216135816745798},{"lat":-6.171352200906379,"lng":39.216188817347565},{"lat":-6.171379619364332,"lng":39.216249363797708},{"lat":-6.171395248777841,"lng":39.216313503508999},{"lat":-6.171409627837845,"lng":39.216372073665525},{"lat":-6.171428204511106,"lng":39.216449598274544},{"lat":-6.171441243906349,"lng":39.216493885218043},{"lat":-6.171454819166797,"lng":39.216539609466004}]');
			var trackRoute5 = JSON.parse('[{"lat":-6.171454819166797,"lng":39.216539609466004},{"lat":-6.171473574460301,"lng":39.216571319995538},{"lat":-6.171483577283214,"lng":39.216598449117122},{"lat":-6.171519926825638,"lng":39.216600784736855},{"lat":-6.171545648367677,"lng":39.216619200200185},{"lat":-6.171566636430542,"lng":39.216659804051019},{"lat":-6.171569226446767,"lng":39.216716128419343},{"lat":-6.171557883961881,"lng":39.216758708563809},{"lat":-6.171538235562282,"lng":39.216809283714305},{"lat":-6.171536627965919,"lng":39.21686264364218},{"lat":-6.171517247498278,"lng":39.216861026674664},{"lat":-6.171514925414544,"lng":39.216925705375125},{"lat":-6.171534931058644,"lng":39.216974573726581},{"lat":-6.171555651189252,"lng":39.217029550621966},{"lat":-6.17155895569275,"lng":39.217079227457184},{"lat":-6.171562885372579,"lng":39.217187204954328},{"lat":-6.171546898720383,"lng":39.217309914822138},{"lat":-6.171523588573023,"lng":39.2174024412964},{"lat":-6.171516890254629,"lng":39.217448704533538},{"lat":-6.171515639901853,"lng":39.217488949058271},{"lat":-6.171494919769703,"lng":39.217547609046314},{"lat":-6.171475896544209,"lng":39.217662952728794},{"lat":-6.171371581380058,"lng":39.217936489732814}]');
			var trackRoute6 = JSON.parse('[{"lat":-6.169632248027718,"lng":39.218081657482728},{"lat":-6.169721202005444,"lng":39.218109145930427},{"lat":-6.169772913196468,"lng":39.218112918854622},{"lat":-6.169784880897992,"lng":39.218074021802821},{"lat":-6.169809352167447,"lng":39.218059918252855},{"lat":-6.169905183076669,"lng":39.218043479083157},{"lat":-6.170006908505623,"lng":39.218006917651088},{"lat":-6.17013917832741,"lng":39.217973769817107},{"lat":-6.170258587314408,"lng":39.217964966327315},{"lat":-6.170295204874223,"lng":39.217971074871258},{"lat":-6.17037862145225,"lng":39.217957689973517},{"lat":-6.17044319337675,"lng":39.217949964462072},{"lat":-6.170506604249308,"lng":39.217954276375444},{"lat":-6.170544561458131,"lng":39.2179750274585},{"lat":-6.170637891524732,"lng":39.21802605176665}]');
			var trackRoute7 = JSON.parse('[{"lat":-6.169632248027718,"lng":39.218081657482728},{"lat":-6.169575535393546,"lng":39.218083094787183},{"lat":-6.169521234157056,"lng":39.218075009949622},{"lat":-6.169467915338817,"lng":39.218079950683695},{"lat":-6.169439246424274,"lng":39.218074021802821},{"lat":-6.169350203087951,"lng":39.218055875834075},{"lat":-6.169291257641443,"lng":39.218064589492329},{"lat":-6.169260623868911,"lng":39.218058301285346},{"lat":-6.169126210356297,"lng":39.218090101646403},{"lat":-6.169012606350985,"lng":39.2181131883492},{"lat":-6.1689272247083,"lng":39.218156666808959}]');
			var trackRoute8 = JSON.parse('[{"lat":-6.1689272247083,"lng":39.218156666808959},{"lat":-6.168734848027849,"lng":39.218217662416741},{"lat":-6.168476916695852,"lng":39.218207780948617},{"lat":-6.168140927009381,"lng":39.218288180166546},{"lat":-6.16795560565314,"lng":39.218040784137301},{"lat":-6.167862900294977,"lng":39.218044826556088},{"lat":-6.167700174665613,"lng":39.21805560633949},{"lat":-6.167520211850483,"lng":39.218049497795555},{"lat":-6.167434919279052,"lng":39.218044826556088},{"lat":-6.167298183201357,"lng":39.218040065485077},{"lat":-6.167132242179244,"lng":39.218015990635465},{"lat":-6.167032927613721,"lng":39.218017248276858},{"lat":-6.166943258691451,"lng":39.218014283836418},{"lat":-6.166908605757274,"lng":39.218027129744975},{"lat":-6.166859216390987,"lng":39.218038089191452},{"lat":-6.16680125309628,"lng":39.218035394245597}]');
			var trackRoute9 = JSON.parse('[{"lat":-6.169437549510289,"lng":39.209112787854551},{"lat":-6.16942513524461,"lng":39.209004451031291},{"lat":-6.169424688688271,"lng":39.208972291344118},{"lat":-6.169427189403694,"lng":39.208939053678606},{"lat":-6.169427725271277,"lng":39.208891263305482},{"lat":-6.169430404609221,"lng":39.208864313846959},{"lat":-6.169431208410586,"lng":39.208839161019007},{"lat":-6.169434602238606,"lng":39.208781309514713},{"lat":-6.169441925762155,"lng":39.208746005724045},{"lat":-6.169445944768945,"lng":39.208694262763679},{"lat":-6.169454429338712,"lng":39.208638297721485},{"lat":-6.169464700133531,"lng":39.208586464929581},{"lat":-6.169469612252722,"lng":39.208537057588956},{"lat":-6.169482651696156,"lng":39.208470941584046},{"lat":-6.169500603258165,"lng":39.208371767576686},{"lat":-6.169499620834389,"lng":39.208347962221652},{"lat":-6.169507212290798,"lng":39.208295949766701},{"lat":-6.169591879350143,"lng":39.207792354218427},{"lat":-6.169579911644287,"lng":39.207845085325602},{"lat":-6.1695696408517,"lng":39.20790536228116},{"lat":-6.169556958655377,"lng":39.207955398442486},{"lat":-6.169546241306116,"lng":39.208036156986537},{"lat":-6.169542579545082,"lng":39.208099218719475}]');
			var trackRoute10 = JSON.parse('[{"lat":-6.169591879350143,"lng":39.207792354218427},{"lat":-6.169600185295129,"lng":39.207746809633527},{"lat":-6.169607955372553,"lng":39.207697222629832},{"lat":-6.16961661856221,"lng":39.207655001811482},{"lat":-6.169626889353871,"lng":39.207604246997931},{"lat":-6.169633944941081,"lng":39.207546305662099},{"lat":-6.169651628564286,"lng":39.207464469139722},{"lat":-6.169657255171535,"lng":39.207427009392369},{"lat":-6.169677886064332,"lng":39.207316965770062},{"lat":-6.169687888921137,"lng":39.207259293928821},{"lat":-6.169696194864595,"lng":39.207203688212743},{"lat":-6.169709948792209,"lng":39.207135326419618},{"lat":-6.169718611980181,"lng":39.207071905360564},{"lat":-6.169722184428811,"lng":39.207026989596358},{"lat":-6.169725935499816,"lng":39.206972641521666},{"lat":-6.169735581110874,"lng":39.206926108789943},{"lat":-6.169740939783611,"lng":39.206901315288107},{"lat":-6.169762910341255,"lng":39.206693085805249},{"lat":-6.16977291319647,"lng":39.206483508849466},{"lat":-6.169808905611431,"lng":39.206281028584428},{"lat":-6.169835609659679,"lng":39.20616568490194},{"lat":-6.169835609659679,"lng":39.20616568490194},{"lat":-6.1698649037311,"lng":39.206011354336127},{"lat":-6.169913578327894,"lng":39.205933021243354},{"lat":-6.170017625845539,"lng":39.20574392587605},{"lat":-6.170158201600879,"lng":39.205515843625406},{"lat":-6.17026823291578,"lng":39.205312105718967},{"lat":-6.170398895072549,"lng":39.205095521903964},{"lat":-6.170515624668601,"lng":39.204914421542689},{"lat":-6.170570908225003,"lng":39.204826566307901},{"lat":-6.170687637783178,"lng":39.204625343684263},{"lat":-6.170687637783178,"lng":39.204625343684263},{"lat":-6.170808207690023,"lng":39.204370581469689},{"lat":-6.170971646853282,"lng":39.204041348918054},{"lat":-6.171146249838119,"lng":39.203679866847722},{"lat":-6.17132094207636,"lng":39.203330601865261},{"lat":-6.171480897955669,"lng":39.20301942545084},{"lat":-6.171534931058656,"lng":39.202928875270196}]');
			var trackRoute11 = JSON.parse('[{"lat":-6.162063513814339,"lng":39.225933561886634},{"lat":-6.162095487690053,"lng":39.225795400995935},{"lat":-6.16208878925256,"lng":39.225635770369941},{"lat":-6.162075481689818,"lng":39.225478924521333},{"lat":-6.162112814314619,"lng":39.225323246482603},{"lat":-6.162056100876392,"lng":39.22522604876886},{"lat":-6.162012784309256,"lng":39.225148973317488}]');
			var trackRoute13 = JSON.parse('[{"lat":-6.162915822362018,"lng":39.223508200451036},{"lat":-6.162977537200034,"lng":39.223396180535111},{"lat":-6.163088195191182,"lng":39.223313715192027},{"lat":-6.163128832300796,"lng":39.223262690883885},{"lat":-6.163124813246142,"lng":39.223187591726131},{"lat":-6.163042199338096,"lng":39.223109797622534},{"lat":-6.162992809611813,"lng":39.22303874088356},{"lat":-6.162950207619968,"lng":39.222948280534446},{"lat":-6.162927522281198,"lng":39.22283087072681},{"lat":-6.162906801813444,"lng":39.222702142146602},{"lat":-6.162871523429003,"lng":39.222646446598986},{"lat":-6.162868218871346,"lng":39.22252849780218},{"lat":-6.16286482500131,"lng":39.222417825359173},{"lat":-6.162860180758059,"lng":39.222330688776616},{"lat":-6.162855536514772,"lng":39.222195851652472},{"lat":-6.162864199814705,"lng":39.222073141784655},{"lat":-6.162904836941473,"lng":39.222014212302021},{"lat":-6.162991559238936,"lng":39.222022207308051},{"lat":-6.163062830488219,"lng":39.221934352073262},{"lat":-6.163089534876165,"lng":39.221831764467815},{"lat":-6.16310623628199,"lng":39.221758012782985},{"lat":-6.163094179117413,"lng":39.221674199966976},{"lat":-6.163083550949877,"lng":39.221615180652819},{"lat":-6.163053542005144,"lng":39.22150837096553},{"lat":-6.163014780449029,"lng":39.221395273071259},{"lat":-6.162935560393468,"lng":39.221255046055411},{"lat":-6.162829546614048,"lng":39.221175994310407},{"lat":-6.162760776080276,"lng":39.221129012421052},{"lat":-6.162718263382192,"lng":39.221071430411335},{"lat":-6.162690219289606,"lng":39.220980161578467},{"lat":-6.162668248438938,"lng":39.220904343768488},{"lat":-6.162642258529052,"lng":39.220836700627601},{"lat":-6.162640204343689,"lng":39.220803822288204},{"lat":-6.162654226391489,"lng":39.220765554057095},{"lat":-6.162694238347544,"lng":39.220723782396384},{"lat":-6.162711475640172,"lng":39.220663685103865},{"lat":-6.1627182633822,"lng":39.2206321542374}]');
			
			
			var trackRoute12 = JSON.parse('[{"lat":-6.161896856654437,"lng":39.224977305266691},{"lat":-6.161894623841117,"lng":39.224892773798452},{"lat":-6.161890962027254,"lng":39.224854595398874},{"lat":-6.161887925401095,"lng":39.224796654063049},{"lat":-6.162093612127546,"lng":39.224599204363606},{"lat":-6.162133534813373,"lng":39.224570727769098},{"lat":-6.162175154433431,"lng":39.224511079634226},{"lat":-6.162208914552028,"lng":39.224489070909769},{"lat":-6.162264377599334,"lng":39.22445304846687},{"lat":-6.162309659020144,"lng":39.224423943051676},{"lat":-6.162318947516233,"lng":39.224397712245377},{"lat":-6.162342883255426,"lng":39.22439088504921},{"lat":-6.162398882163429,"lng":39.224385584989037},{"lat":-6.162461579498385,"lng":39.224378398466769},{"lat":-6.162476851924991,"lng":39.224332584387284},{"lat":-6.162495518223615,"lng":39.224279583785517},{"lat":-6.162548837742822,"lng":39.224259461523147},{"lat":-6.162668248438937,"lng":39.224231973075455},{"lat":-6.162745503661821,"lng":39.224200442208975},{"lat":-6.162802931525398,"lng":39.224173492750452},{"lat":-6.16281820394222,"lng":39.22413675165533},{"lat":-6.162828206928418,"lng":39.22403820646867},{"lat":-6.16282356268485,"lng":39.22390750159483},{"lat":-6.162842228971256,"lng":39.223772664470687},{"lat":-6.162845533529066,"lng":39.223708973917034},{"lat":-6.162862234942573,"lng":39.22360099641989},{"lat":-6.162897602639997,"lng":39.223581502978227},{"lat":-6.162903497256018,"lng":39.223544672051567},{"lat":-6.162915822362018,"lng":39.223508200451036}]');
			var trackRoute14 = JSON.parse('[{"lat":-6.1627182633822,"lng":39.2206321542374},{"lat":-6.162682806360405,"lng":39.220548970242092},{"lat":-6.162607516001482,"lng":39.220397514285182},{"lat":-6.162483818294905,"lng":39.220253604176676},{"lat":-6.162476405362827,"lng":39.220238153153794},{"lat":-6.162419602651008,"lng":39.220129187509819},{"lat":-6.162392183729751,"lng":39.220074300445965},{"lat":-6.16232421695146,"lng":39.219943505740595},{"lat":-6.16230153158592,"lng":39.219904608688793},{"lat":-6.162235529670462,"lng":39.219863016691136},{"lat":-6.162200251241367,"lng":39.219844241901704},{"lat":-6.162144162999916,"lng":39.219814058508163},{"lat":-6.16195616017286,"lng":39.219773903814954},{"lat":-6.16180281054914,"lng":39.21974964930228},{"lat":-6.161670092085397,"lng":39.219689372346714},{"lat":-6.161639547185288,"lng":39.219655775355093},{"lat":-6.161656784512157,"lng":39.219586784741267},{"lat":-6.161646156315879,"lng":39.219409726798766},{"lat":-6.161634099118114,"lng":39.219209851648053},{"lat":-6.161598106148379,"lng":39.219093879144872},{"lat":-6.161538802589951,"lng":39.219003418795765},{"lat":-6.161496111168788,"lng":39.2189443994816},{"lat":-6.161477534147632,"lng":39.218897058266123},{"lat":-6.161477534147632,"lng":39.218897058266123},{"lat":-6.161432788531491,"lng":39.218784499361028},{"lat":-6.161362856752622,"lng":39.218597020961226},{"lat":-6.161343475913172,"lng":39.218517879384699},{"lat":-6.161373484954618,"lng":39.218448170118641},{"lat":-6.16137884371182,"lng":39.218374418433825},{"lat":-6.161363481940979,"lng":39.218223501466092},{"lat":-6.161420106140618,"lng":39.218073303150582},{"lat":-6.161399653551854,"lng":39.2178447717423},{"lat":-6.161399653551854,"lng":39.2178447717423},{"lat":-6.161375539144893,"lng":39.217625403149924},{"lat":-6.161355533117512,"lng":39.217547698877851},{"lat":-6.16132480957404,"lng":39.217484547313376},{"lat":-6.161312841681624,"lng":39.21744026036987},{"lat":-6.161290156272863,"lng":39.217350518672987},{"lat":-6.161275509000539,"lng":39.217249907361165},{"lat":-6.161270507492818,"lng":39.21711435158479},{"lat":-6.161271489931861,"lng":39.217007182571393},{"lat":-6.16128613720428,"lng":39.216927951163335},{"lat":-6.161340796534393,"lng":39.216867674207776},{"lat":-6.161382148278741,"lng":39.216839467107846},{"lat":-6.161440826666413,"lng":39.216781166445912},{"lat":-6.161452794555943,"lng":39.216729603148607},{"lat":-6.161463512068729,"lng":39.216651090392766},{"lat":-6.161493789041191,"lng":39.216555779141117},{"lat":-6.161523530136327,"lng":39.21649217841901},{"lat":-6.162556697235993,"lng":39.217144894304447},{"lat":-6.162512844835144,"lng":39.217109051524616},{"lat":-6.162439519325819,"lng":39.217028562475164},{"lat":-6.162394237916091,"lng":39.216992360369211},{"lat":-6.162300817086209,"lng":39.216950768371554},{"lat":-6.162132820313437,"lng":39.216887796470139},{"lat":-6.161926151164365,"lng":39.216796617468795},{"lat":-6.161842108069047,"lng":39.216724213256889},{"lat":-6.161768335904281,"lng":39.216650281909011},{"lat":-6.16173332538181,"lng":39.216614708623766},{"lat":-6.161688847724947,"lng":39.216574014941386},{"lat":-6.161580779507003,"lng":39.216520295687403},{"lat":-6.161523530136327,"lng":39.21649217841901},{"lat":-6.161515492002676,"lng":39.216412947010944},{"lat":-6.161488787535533,"lng":39.216312515362191},{"lat":-6.161479499024921,"lng":39.216198519152627},{"lat":-6.161487537159107,"lng":39.216080480524298},{"lat":-6.161478159335863,"lng":39.216013376372565},{"lat":-6.161444845733823,"lng":39.215982564158331},{"lat":-6.161356783494248,"lng":39.215965047010286},{"lat":-6.161292478401359,"lng":39.215946002726263},{"lat":-6.16115681249232,"lng":39.215915460006599},{"lat":-6.161059550999655,"lng":39.215903422581803},{"lat":-6.160846093666767,"lng":39.215888690211131},{"lat":-6.160744813044487,"lng":39.215893990271312},{"lat":-6.160598161527184,"lng":39.215915460006599},{"lat":-6.160488842708355,"lng":39.215921478719004},{"lat":-6.160488842708355,"lng":39.215921478719004},{"lat":-6.16041015815247,"lng":39.215881324025808},{"lat":-6.160332813276853,"lng":39.215820328418019},{"lat":-6.160280118724659,"lng":39.215688186239731},{"lat":-6.160225459285317,"lng":39.215509780824299},{"lat":-6.160189376907253,"lng":39.215383118369239},{"lat":-6.160218135634522,"lng":39.215291849536371},{"lat":-6.16023939208411,"lng":39.215250257538713},{"lat":-6.160231443243823,"lng":39.215193304349697},{"lat":-6.160173389912216,"lng":39.215077242014985},{"lat":-6.160127393806523,"lng":39.2149767205347}]');
			var trackRoute15 = JSON.parse('[{"lat":-6.160127393806523,"lng":39.2149767205347},{"lat":-6.160122392288001,"lng":39.214957586419153},{"lat":-6.159988423024124,"lng":39.214674617104656},{"lat":-6.159871780424186,"lng":39.214379879859926},{"lat":-6.159824087347633,"lng":39.214164643517854},{"lat":-6.159802384316967,"lng":39.214097988523768},{"lat":-6.159786397310295,"lng":39.214065110184372},{"lat":-6.159758442375669,"lng":39.213999712831694},{"lat":-6.159677435575948,"lng":39.213857868848329},{"lat":-6.159666092836732,"lng":39.213804868246562},{"lat":-6.15965814398787,"lng":39.213771361086465},{"lat":-6.15965644704259,"lng":39.213744860785589},{"lat":-6.159655107348932,"lng":39.213698956874566},{"lat":-6.159641085221895,"lng":39.213624576369043},{"lat":-6.159601162348603,"lng":39.213524324383329},{"lat":-6.159564454737632,"lng":39.213448147247242},{"lat":-6.15952908681808,"lng":39.213417694359116},{"lat":-6.159437451742829,"lng":39.213372059942678},{"lat":-6.159329829631353,"lng":39.213304416801783},{"lat":-6.159257128873155,"lng":39.213251685694601},{"lat":-6.159152096801971,"lng":39.213226892192758},{"lat":-6.159081092966566,"lng":39.21316392029135},{"lat":-6.159059389905542,"lng":39.213108853564428},{"lat":-6.159003390645225,"lng":39.212984167402986},{"lat":-6.158984456284752,"lng":39.212885262890211},{"lat":-6.158971148644195,"lng":39.212830285994819},{"lat":-6.158980437198716,"lng":39.21277800404529},{"lat":-6.158989457814005,"lng":39.212621068365152},{"lat":-6.158996424229667,"lng":39.212499346644151},{"lat":-6.158999460872359,"lng":39.212447693515315},{"lat":-6.159006784539969,"lng":39.212395770891895},{"lat":-6.158986153232193,"lng":39.212333068485066},{"lat":-6.158919436400221,"lng":39.212229492732803},{"lat":-6.158886837141917,"lng":39.21219329062685},{"lat":-6.158830391298179,"lng":39.212101392973288},{"lat":-6.158807437844172,"lng":39.212037343093535},{"lat":-6.158804847765642,"lng":39.212003746101907},{"lat":-6.158809849296585,"lng":39.21194275049411},{"lat":-6.158830837863419,"lng":39.211901607654099},{"lat":-6.158881121107371,"lng":39.211869088640817},{"lat":-6.158911844792302,"lng":39.211837917100461},{"lat":-6.158952839473765,"lng":39.211788330096766},{"lat":-6.159005444844674,"lng":39.211666518544249},{"lat":-6.15899740667289,"lng":39.211612170469557},{"lat":-6.158952392908621,"lng":39.211542820529623},{"lat":-6.158900859288895,"lng":39.211500599711272},{"lat":-6.158793147755581,"lng":39.211427476847142},{"lat":-6.15869043773248,"lng":39.211395945980669},{"lat":-6.158549412372755,"lng":39.211341687737509},{"lat":-6.158465100803536,"lng":39.211303419506407},{"lat":-6.158436163355061,"lng":39.211224727087519},{"lat":-6.158399455663549,"lng":39.211172265474929},{"lat":-6.158339705182131,"lng":39.211134446401459},{"lat":-6.158204127831691,"lng":39.211085488218487},{"lat":-6.158080697038514,"lng":39.211033206268944},{"lat":-6.15799442050471,"lng":39.210935020408392},{"lat":-6.157965393717408,"lng":39.210855789000327},{"lat":-6.157964143332686,"lng":39.210834678591155},{"lat":-6.1579524433041,"lng":39.210745206388857},{"lat":-6.157947084512293,"lng":39.210656363007253},{"lat":-6.157913413435871,"lng":39.210453164089984},{"lat":-6.157924756212514,"lng":39.210352912104277},{"lat":-6.15795815934864,"lng":39.210319045618064},{"lat":-6.157950835666559,"lng":39.210214481718999},{"lat":-6.157948156270669,"lng":39.210175584667198},{"lat":-6.157937438686887,"lng":39.210058174859562},{"lat":-6.157917432529978,"lng":39.209952982139789},{"lat":-6.157902159972188,"lng":39.209815180575205},{"lat":-6.157894389723313,"lng":39.209707203078054},{"lat":-6.157901713406168,"lng":39.209666599227212},{"lat":-6.157910019534159,"lng":39.209617012223525},{"lat":-6.157912430990633,"lng":39.20960757991304},{"lat":-6.157935741736135,"lng":39.209511370346114},{"lat":-6.157938421132092,"lng":39.209475168240161},{"lat":-6.15795414025483,"lng":39.209415520105303},{"lat":-6.15795842728822,"lng":39.20939710464198},{"lat":-6.158001386933431,"lng":39.209174681777625}]');
			
			var trackRoute16 = JSON.parse('[{"lat":-6.158001386933431,"lng":39.209174681777625},{"lat":-6.158114725357024,"lng":39.20860182612094},{"lat":-6.158227438564364,"lng":39.208065262401746},{"lat":-6.15825869816598,"lng":39.207868172028405}]');
			
			
			var trackRoute17 = JSON.parse('[{"lat":-6.141770789329614,"lng":39.22173914816203},{"lat":-6.141752747514623,"lng":39.221714354660179},{"lat":-6.141731401009956,"lng":39.221670876200427},{"lat":-6.141713448509573,"lng":39.221632607969326},{"lat":-6.141714698932512,"lng":39.221600358450623},{"lat":-6.141742744131795,"lng":39.22156828859498},{"lat":-6.141805443903213,"lng":39.221551490099166},{"lat":-6.141840813001776,"lng":39.221542057788689},{"lat":-6.141843403162945,"lng":39.221505855682729},{"lat":-6.141810088330425,"lng":39.221463545032854},{"lat":-6.141780792711904,"lng":39.221374521988203},{"lat":-6.141791421305393,"lng":39.221294661759437},{"lat":-6.141803389637297,"lng":39.221204830231024},{"lat":-6.14178481192796,"lng":39.221120298762784},{"lat":-6.141750157353015,"lng":39.221051308148972},{"lat":-6.141740689865649,"lng":39.221000283840837},{"lat":-6.14174345865915,"lng":39.220719290819964},{"lat":-6.141705410076366,"lng":39.220585172348045},{"lat":-6.14170808955412,"lng":39.220475308388792},{"lat":-6.141724077104409,"lng":39.220378649664227},{"lat":-6.141702730598605,"lng":39.220268695873443},{"lat":-6.141644139348133,"lng":39.220106460133138},{"lat":-6.141582689980975,"lng":39.219899847617789},{"lat":-6.141532137153248,"lng":39.219706799663228},{"lat":-6.141441392135974,"lng":39.219457427340366},{"lat":-6.141392089718537,"lng":39.219344688772203},{"lat":-6.141374762418553,"lng":39.219292406822667},{"lat":-6.141386730759836,"lng":39.219252162297934},{"lat":-6.14142942379592,"lng":39.219195748098095},{"lat":-6.141456129270739,"lng":39.219148856040263},{"lat":-6.141436122493757,"lng":39.219093879144872},{"lat":-6.14144273187551,"lng":39.219063066930623},{"lat":-6.141481405688814,"lng":39.219044292141191},{"lat":-6.14152811793529,"lng":39.219017522345723},{"lat":-6.141526688880015,"lng":39.218966498037588},{"lat":-6.141481405688813,"lng":39.218902088831719},{"lat":-6.141321440775418,"lng":39.218784050203389},{"lat":-6.141177463380697,"lng":39.2186943085065},{"lat":-6.141048044461016,"lng":39.218672748939674},{"lat":-6.140984004859727,"lng":39.218635289192328},{"lat":-6.140976055731548,"lng":39.218583007242799},{"lat":-6.141021428281779,"lng":39.218529287988808},{"lat":-6.141093417005097,"lng":39.218447451466417},{"lat":-6.141110744314234,"lng":39.218361662356791},{"lat":-6.141071981157986,"lng":39.218273178301303},{"lat":-6.141018748800594,"lng":39.218228891357789},{"lat":-6.140945420326376,"lng":39.218231586303652},{"lat":-6.140886739676526,"lng":39.218259793403568},{"lat":-6.140847976503966,"lng":39.218285215726112},{"lat":-6.140884060194634,"lng":39.218316117771884},{"lat":-6.140930683177478,"lng":39.218345582513201},{"lat":-6.140940061363175,"lng":39.218388521983783},{"lat":-6.140923984473305,"lng":39.218444756520569},{"lat":-6.14086798330306,"lng":39.218459578722758},{"lat":-6.140782686453509,"lng":39.218439456460395},{"lat":-6.140654696495513,"lng":39.218363009829723},{"lat":-6.140524027023062,"lng":39.218278478361484},{"lat":-6.140423992955495,"lng":39.218214158987131},{"lat":-6.140376030186085,"lng":39.218082645629543},{"lat":-6.140347984914832,"lng":39.217995598878503},{"lat":-6.140238751248651,"lng":39.217949964462072},{"lat":-6.140161314122579,"lng":39.217885555256203},{"lat":-6.140110761159927,"lng":39.217827883414962},{"lat":-6.140102722702518,"lng":39.217739399359481},{"lat":-6.140184000432881,"lng":39.21762001325822},{"lat":-6.140232052535772,"lng":39.217484547313376},{"lat":-6.140293323426455,"lng":39.217272724569384},{"lat":-6.140289304199144,"lng":39.217059464520929},{"lat":-6.140314759304915,"lng":39.216771105314727},{"lat":-6.140269297378318,"lng":39.216529727997887},{"lat":-6.140306720850604,"lng":39.216325900259918},{"lat":-6.140376030186085,"lng":39.216164922160999},{"lat":-6.140485353140245,"lng":39.216025503628913},{"lat":-6.14060530468912,"lng":39.215893990271312},{"lat":-6.140770718098662,"lng":39.2158430557947},{"lat":-6.140861463230229,"lng":39.215808201161678},{"lat":-6.140925413530197,"lng":39.215832276011298},{"lat":-6.14095202971423,"lng":39.215869915421699},{"lat":-6.14098668434112,"lng":39.215872610367548},{"lat":-6.141029377409272,"lng":39.215864525529994},{"lat":-6.141032056890425,"lng":39.215792121318088},{"lat":-6.140994722785174,"lng":39.215682077695789},{"lat":-6.140941401103983,"lng":39.215448785216502},{"lat":-6.140917375085092,"lng":39.215258342376266},{"lat":-6.140925413530188,"lng":39.215059904530008},{"lat":-6.140946760067149,"lng":39.214939170955816},{"lat":-6.140896028546955,"lng":39.214842602062774},{"lat":-6.140886739676522,"lng":39.214660154228575},{"lat":-6.140846726079003,"lng":39.214613262170744},{"lat":-6.140432031408054,"lng":39.214634642074508},{"lat":-6.1402813550606,"lng":39.214623952122622},{"lat":-6.140114691072407,"lng":39.214623952122622},{"lat":-6.140017336414209,"lng":39.21459592468576},{"lat":-6.139882647554993,"lng":39.214557027633951},{"lat":-6.139797350547642,"lng":39.214527473061118},{"lat":-6.139709284722579,"lng":39.214513998331853},{"lat":-6.139665341120856,"lng":39.214498008319794},{"lat":-6.139614609478562,"lng":39.214476448752968},{"lat":-6.139597282120767,"lng":39.214438899174098},{"lat":-6.139628006919771,"lng":39.214378622218533},{"lat":-6.139701335575374,"lng":39.214280705852559},{"lat":-6.139732060368392,"lng":39.214167967284403},{"lat":-6.139744028746565,"lng":39.214050018487605},{"lat":-6.139722592845147,"lng":39.213930722217867},{"lat":-6.139677309500529,"lng":39.213842148330862},{"lat":-6.13962398768745,"lng":39.21372949959423},{"lat":-6.139578615018178,"lng":39.213600771014015},{"lat":-6.139550659021219,"lng":39.213466562710565},{"lat":-6.139524042767131,"lng":39.213266777391375},{"lat":-6.139518594473359,"lng":39.213152781181826},{"lat":-6.139537350894346,"lng":39.213049564755671},{"lat":-6.139541280811041,"lng":39.212959643395735},{"lat":-6.13948804830063,"lng":39.212890023961215},{"lat":-6.13936389863319,"lng":39.212857774442519},{"lat":-6.139165348421486,"lng":39.212840257294474},{"lat":-6.139049326468639,"lng":39.212833609761375},{"lat":-6.138938574157531,"lng":39.212776027751666},{"lat":-6.138899900159576,"lng":39.212691496283426},{"lat":-6.138938574157522,"lng":39.212617654767072},{"lat":-6.138913297618762,"lng":39.212505095861964},{"lat":-6.138747883632398,"lng":39.21231600049466},{"lat":-6.138587917898032,"lng":39.212110825283773},{"lat":-6.138445190194987,"lng":39.211994044296837},{"lat":-6.138241191334012,"lng":39.211885527810516},{"lat":-6.138030493654353,"lng":39.211762099290475},{"lat":-6.137810506967283,"lng":39.21163741312904},{"lat":-6.13763723277713,"lng":39.211593126185534},{"lat":-6.137517191243286,"lng":39.211565008917148},{"lat":-6.137278537161118,"lng":39.211493862346636},{"lat":-6.137171803732739,"lng":39.211452270348985}]');
			
			var trackRoute18 = JSON.parse('[{"lat":-6.156723760240999,"lng":39.223610788056483},{"lat":-6.156815038530963,"lng":39.223431663988833},{"lat":-6.156786458246155,"lng":39.223319644072902},{"lat":-6.156741712234698,"lng":39.223080422712741},{"lat":-6.156748410739646,"lng":39.222750381677351},{"lat":-6.156681693626543,"lng":39.222551315010399},{"lat":-6.156644449933267,"lng":39.222418454179881},{"lat":-6.15664570032108,"lng":39.222346049967967},{"lat":-6.156679728731525,"lng":39.222199175419021},{"lat":-6.156693393683132,"lng":39.222137550990524},{"lat":-6.156683033327678,"lng":39.222057061941072},{"lat":-6.156659454586985,"lng":39.221992652735196},{"lat":-6.156623729220274,"lng":39.221967859233359},{"lat":-6.156575053404286,"lng":39.221921595996228},{"lat":-6.156526377583815,"lng":39.22178478257846},{"lat":-6.156522447792617,"lng":39.221629913023477},{"lat":-6.156463054353816,"lng":39.221450878787351},{"lat":-6.156451443605603,"lng":39.221406681675369},{"lat":-6.156442422947201,"lng":39.221286576921891},{"lat":-6.156537005882596,"lng":39.221124251350048},{"lat":-6.15705439835579,"lng":39.220503425657185},{"lat":-6.157289738973905,"lng":39.220514744429771},{"lat":-6.157346452921316,"lng":39.220477913503117},{"lat":-6.157371996523983,"lng":39.22040622794345},{"lat":-6.157393699653974,"lng":39.220339123791717},{"lat":-6.157399058451357,"lng":39.22019090176984},{"lat":-6.1574327295604,"lng":39.220055525656527},{"lat":-6.157514093955637,"lng":39.219942787088364},{"lat":-6.157590099542998,"lng":39.219692696113263},{"lat":-6.157589117097171,"lng":39.219549863983097},{"lat":-6.157532760428754,"lng":39.219406403032217},{"lat":-6.157523114595835,"lng":39.219258899662563},{"lat":-6.157535439826755,"lng":39.21920589906081},{"lat":-6.157559375781622,"lng":39.219165025715377},{"lat":-6.157640382904459,"lng":39.219118672646722},{"lat":-6.157736126698564,"lng":39.21896784551052},{"lat":-6.15788072480261,"lng":39.218851154355107},{"lat":-6.158234762242622,"lng":39.22428596182403},{"lat":-6.158249677538284,"lng":39.224251556348648},{"lat":-6.158287724937249,"lng":39.224171696119896},{"lat":-6.158318716595883,"lng":39.224161994314827},{"lat":-6.158339437242762,"lng":39.224080786613143},{"lat":-6.158350154818383,"lng":39.224045842148577},{"lat":-6.158369714393369,"lng":39.223914508454051},{"lat":-6.15838007471591,"lng":39.223778683183085},{"lat":-6.158371411342754,"lng":39.223602343892814},{"lat":-6.158357389181815,"lng":39.223385760077811},{"lat":-6.15834408152556,"lng":39.223255953519256},{"lat":-6.158339079990226,"lng":39.223030656045999},{"lat":-6.158339079990213,"lng":39.222955287393667},{"lat":-6.158370160958999,"lng":39.222946843229991},{"lat":-6.158367392252089,"lng":39.222839943711186},{"lat":-6.15830210435258,"lng":39.222839584385071},{"lat":-6.158300675342393,"lng":39.222666568861342},{"lat":-6.158370160959003,"lng":39.22266028065436},{"lat":-6.158362122777594,"lng":39.222478192146262},{"lat":-6.158431429759954,"lng":39.222457351231682},{"lat":-6.158388112897049,"lng":39.22203756849941},{"lat":-6.15837471592842,"lng":39.22189078378198},{"lat":-6.158386683887064,"lng":39.221739866814254},{"lat":-6.158403385440856,"lng":39.221530020363879},{"lat":-6.15845375803841,"lng":39.221396261218075},{"lat":-6.1585507520692,"lng":39.221405963023145},{"lat":-6.158569150566595,"lng":39.221341014828106},{"lat":-6.15858308340886,"lng":39.221236989918197},{"lat":-6.158660696478622,"lng":39.221016363684427},{"lat":-6.158681417112118,"lng":39.220728723130442},{"lat":-6.158688740784119,"lng":39.220654971445612},{"lat":-6.158704727823845,"lng":39.220634759351725},{"lat":-6.158682131616705,"lng":39.220429673972362},{"lat":-6.158646138446833,"lng":39.220298879266991},{"lat":-6.158460724461113,"lng":39.220049506944129},{"lat":-6.158306123443759,"lng":39.219978989194317},{"lat":-6.158223419472593,"lng":39.219786570060464},{"lat":-6.158223419472607,"lng":39.219675268796756},{"lat":-6.1582827234014,"lng":39.219535760433132},{"lat":-6.158314608191684,"lng":39.219355558387143},{"lat":-6.158338097545772,"lng":39.219314505378655},{"lat":-6.15834765405075,"lng":39.219262403092173},{"lat":-6.158336132656882,"lng":39.219191795510845},{"lat":-6.158300139463542,"lng":39.219104030107594},{"lat":-6.158238156142274,"lng":39.219011413801788},{"lat":-6.158154112463096,"lng":39.21895580808571},{"lat":-6.158088735224197,"lng":39.218828426978419},{"lat":-6.157993438059635,"lng":39.218746500624505},{"lat":-6.157973431904823,"lng":39.2186943085065},{"lat":-6.15778542760073,"lng":39.218477006039265},{"lat":-6.157415402783068,"lng":39.218205355497354},{"lat":-6.157324749789396,"lng":39.218100791598275},{"lat":-6.157197389005646,"lng":39.217920499720762},{"lat":-6.156929984848373,"lng":39.217835968252523},{"lat":-6.156788691080966,"lng":39.217766169154942},{"lat":-6.156689999773614,"lng":39.217709844786633},{"lat":-6.156604705461532,"lng":39.217641482993507},{"lat":-6.156563442658522,"lng":39.217574378841789},{"lat":-6.156552725046819,"lng":39.217480594726126},{"lat":-6.156526020330052,"lng":39.217390673366189},{"lat":-6.156507443135014,"lng":39.21729006205436},{"lat":-6.156488687312431,"lng":39.217196277938704},{"lat":-6.156497975910362,"lng":39.217107704051692},{"lat":-6.156507443135009,"lng":39.21702056746912},{"lat":-6.156492706417317,"lng":39.216949510730153},{"lat":-6.156440725991655,"lng":39.216889054111533},{"lat":-6.156391424964669,"lng":39.216848899418338},{"lat":-6.156300057288428,"lng":39.216808654893605},{"lat":-6.156932753562764,"lng":39.218168614402231},{"lat":-6.15689399155973,"lng":39.218036472223936},{"lat":-6.156929984848373,"lng":39.217835968252523},{"lat":-6.15597424163467,"lng":39.216316018791794},{"lat":-6.15600228608203,"lng":39.216167976432963},{"lat":-6.156392675353099,"lng":39.215834970957147},{"lat":-6.156570051852288,"lng":39.215765261691097},{"lat":-6.156607384864227,"lng":39.215566823844831},{"lat":-6.156603455073603,"lng":39.215427315481215},{"lat":-6.156416700672906,"lng":39.215332094061097},{"lat":-6.156329977301446,"lng":39.215277117165705},{"lat":-6.156284695370663,"lng":39.215062599475857},{"lat":-6.15620333078708,"lng":39.21477684538398},{"lat":-6.156239413436004,"lng":39.214676323903689},{"lat":-6.156332746018977,"lng":39.214441594119947},{"lat":-6.156478059012671,"lng":39.214366494962192},{"lat":-6.156596756566826,"lng":39.214280705852559},{"lat":-6.156510033224745,"lng":39.214095563072505},{"lat":-6.156398034160571,"lng":39.214020463914757},{"lat":-6.156320688700562,"lng":39.213862270593218},{"lat":-6.156252721144997,"lng":39.21370201114653},{"lat":-6.156154029738067,"lng":39.213646405430453},{"lat":-6.156095350766149,"lng":39.213591967524231},{"lat":-6.15599201502665,"lng":39.213346547788603},{"lat":-6.15581999714775,"lng":39.213304955790953},{"lat":-6.155623328663449,"lng":39.21329228954545},{"lat":-6.155375304771767,"lng":39.213187725646371},{"lat":-6.155355298518349,"lng":39.213099151759366},{"lat":-6.155347349604953,"lng":39.213014710122657},{"lat":-6.155386022407217,"lng":39.212971770652075},{"lat":-6.155395311024438,"lng":39.212911403864986},{"lat":-6.155403349250752,"lng":39.212856426969594},{"lat":-6.155382003293945,"lng":39.212767853082575},{"lat":-6.15533270216872,"lng":39.212652599231625},{"lat":-6.155284740743586,"lng":39.212566810121984},{"lat":-6.155229991476436,"lng":39.212525218124334},{"lat":-6.155158004666363,"lng":39.212503658557516},{"lat":-6.155102004994699,"lng":39.21247149887035},{"lat":-6.155059313056046,"lng":39.212446076547806},{"lat":-6.155059313056046,"lng":39.212446076547806},{"lat":-6.154997329356572,"lng":39.212184487137073},{"lat":-6.154925342514985,"lng":39.212099416679671},{"lat":-6.154865323701623,"lng":39.21202162257606},{"lat":-6.154817362234291,"lng":39.211954518424335},{"lat":-6.154761362526733,"lng":39.211916250193227},{"lat":-6.154705988009461,"lng":39.211914273899609},{"lat":-6.154661331136507,"lng":39.211936372455597},{"lat":-6.15458603964019,"lng":39.211930353743192},{"lat":-6.154512623722482,"lng":39.211897565235319},{"lat":-6.154441351325502,"lng":39.211907626366504},{"lat":-6.154384637067953,"lng":39.21195245229918},{"lat":-6.154313989850445,"lng":39.212002218965921},{"lat":-6.15424128840571,"lng":39.212057106029782},{"lat":-6.154193326882053,"lng":39.212113520229622},{"lat":-6.154138041619428,"lng":39.212196614393399},{"lat":-6.154076593695583,"lng":39.212267671132381},{"lat":-6.154003356335181,"lng":39.212310610602962},{"lat":-6.153958610089306,"lng":39.212313305548811},{"lat":-6.153907343926714,"lng":39.212322648027765},{"lat":-6.153849915101079,"lng":39.212323995500697},{"lat":-6.15357661453942,"lng":39.212351483948382},{"lat":-6.153431300752188,"lng":39.212345465235984},{"lat":-6.153273929537666,"lng":39.212311958075887},{"lat":-6.153204621882432,"lng":39.212273061024078},{"lat":-6.153119952208871,"lng":39.212229492732803},{"lat":-6.153043945982008,"lng":39.212187900735145},{"lat":-6.15296793974425,"lng":39.212107411685693},{"lat":-6.152909260420492,"lng":39.212047763550835},{"lat":-6.152873177545419,"lng":39.212015603863655},{"lat":-6.152865943107296,"lng":39.211933048689048},{"lat":-6.152855939933441,"lng":39.211856602058369},{"lat":-6.152861209462547,"lng":39.211757428051001},{"lat":-6.152853885710229,"lng":39.211685023839095},{"lat":-6.152818606657939,"lng":39.211583065054349},{"lat":-6.152761892227203,"lng":39.211443556690725},{"lat":-6.152718574902,"lng":39.211343664031133},{"lat":-6.152655251218207,"lng":39.211215564271619},{"lat":-6.152614613307157,"lng":39.211082793272624},{"lat":-6.152569241745613,"lng":39.210970773356699},{"lat":-6.152537892495148,"lng":39.210884265594835},{"lat":-6.152515921224474,"lng":39.210807190143456},{"lat":-6.152388648602124,"lng":39.210492689962486},{"lat":-6.152339257885026,"lng":39.210374651334156},{"lat":-6.152302639086399,"lng":39.210233885329124},{"lat":-6.152268610395646,"lng":39.210135250310934},{"lat":-6.152249229224356,"lng":39.20999520295814},{"lat":-6.152250658250847,"lng":39.209827577326124},{"lat":-6.152247889512027,"lng":39.209649171910691},{"lat":-6.152247889512029,"lng":39.209482893751606},{"lat":-6.152243245175939,"lng":39.20935344651916},{"lat":-6.152242619976835,"lng":39.20927098117609},{"lat":-6.152236635928336,"lng":39.209203877024365},{"lat":-6.152227883140871,"lng":39.209078472210706},{"lat":-6.152257892697338,"lng":39.208944353738772},{"lat":-6.152253248361316,"lng":39.208755977023699},{"lat":-6.152237261127457,"lng":39.208605778708197},{"lat":-6.15218126114801,"lng":39.208488458732084},{"lat":-6.152124635963435,"lng":39.208408688334856},{"lat":-6.152065242033067,"lng":39.208296668418932},{"lat":-6.152004508383143,"lng":39.208200818178113},{"lat":-6.151951187805349,"lng":39.208071370945675},{"lat":-6.151933235649822,"lng":39.207999595554469},{"lat":-6.151957886370675,"lng":39.207890989236617},{"lat":-6.151959940597382,"lng":39.207748157106444},{"lat":-6.151956546657625,"lng":39.207593916372161},{"lat":-6.151954492430917,"lng":39.207503366191517},{"lat":-6.151928501996752,"lng":39.207402215890525},{"lat":-6.151889918257091,"lng":39.207334393086583},{"lat":-6.151849905487048,"lng":39.207260012581052},{"lat":-6.151834543440621,"lng":39.207246627683325}]');
			
			
			


			var shipRoute = JSON.parse('[{"lat":-6.181202123597878,"lng":39.220038098340012},{"lat":-6.180932856053915,"lng":39.21956998624546},{"lat":-6.18044879929526,"lng":39.218844506822002},{"lat":-6.180160776382776,"lng":39.218365704775572},{"lat":-6.179419507390905,"lng":39.217217657842461},{"lat":-6.178827563165937,"lng":39.216321857841137},{"lat":-6.178695474133414,"lng":39.21606700579504},{"lat":-6.178650194112646,"lng":39.215934324627568},{"lat":-6.178272860455624,"lng":39.215400455854223},{"lat":-6.177984836358858,"lng":39.214855986960508},{"lat":-6.177567491397324,"lng":39.214299480641998},{"lat":-6.177384941946268,"lng":39.214071488222892},{"lat":-6.177082181220852,"lng":39.213589991230606},{"lat":-6.176754234894624,"lng":39.213066273419969},{"lat":-6.176619555353203,"lng":39.212861098209075},{"lat":-6.176572935503961,"lng":39.212780698991139},{"lat":-6.176546946275892,"lng":39.212659246764723},{"lat":-6.176514883961829,"lng":39.212545250555173},{"lat":-6.176494789195734,"lng":39.212428020410592},{"lat":-6.176432986621538,"lng":39.212189427871131},{"lat":-6.176364217852741,"lng":39.211929096101798},{"lat":-6.176293752182977,"lng":39.2116454979666},{"lat":-6.176242220248701,"lng":39.211464397605319},{"lat":-6.176148176688477,"lng":39.211057011623978}]');
			var shipRoute2 = JSON.parse('[{"lat":-6.165760502752983,"lng":39.195419408652604},{"lat":-6.165797924430343,"lng":39.195509869001718},{"lat":-6.16583525679321,"lng":39.195563588255702},{"lat":-6.165887950793706,"lng":39.195680548905699},{"lat":-6.16594225240232,"lng":39.195790592528006},{"lat":-6.165972261183649,"lng":39.195856618701377},{"lat":-6.166020221643128,"lng":39.195934412804988},{"lat":-6.166071486635975,"lng":39.196000349146843},{"lat":-6.166128556892237,"lng":39.196069788918308},{"lat":-6.166179911186437,"lng":39.196131143852213},{"lat":-6.166259934563667,"lng":39.196231755164028},{"lat":-6.166346209753721,"lng":39.196326707089561},{"lat":-6.166442487847767,"lng":39.196453369544628},{"lat":-6.166503487781431,"lng":39.196516341446042},{"lat":-6.166561897667422,"lng":39.196590452456981},{"lat":-6.166652549083217,"lng":39.196698789280241},{"lat":-6.166744540159293,"lng":39.196814043131198},{"lat":-6.166810184266908,"lng":39.196896957631928},{"lat":-6.166839210570423,"lng":39.196920762986956},{"lat":-6.166897263172665,"lng":39.196989753600782},{"lat":-6.166947545652215,"lng":39.197063595117129},{"lat":-6.167021495720088,"lng":39.197192952518037}]');
			var shipRoute3 = JSON.parse('[{"lat":-6.168027501415917,"lng":39.198475746743767},{"lat":-6.16759014281765,"lng":39.19769277514213},{"lat":-6.167448048084137,"lng":39.19760240462454},{"lat":-6.167396961847571,"lng":39.197557129534225},{"lat":-6.167161447088408,"lng":39.197385281820374},{"lat":-6.16710044723044,"lng":39.197252510821386}]');
			
			
			var carRoute = JSON.parse('[{"lat":-6.176148176688477,"lng":39.211057011623978},{"lat":-6.176107629887185,"lng":39.210939242490227},{"lat":-6.17602894764939,"lng":39.210689870167357},{"lat":-6.176043505203911,"lng":39.210600667459637},{"lat":-6.176038861076121,"lng":39.210505446039519},{"lat":-6.176027518686951,"lng":39.210359918963498},{"lat":-6.175939548179963,"lng":39.210132645196616},{"lat":-6.175892213789466,"lng":39.209996460599541},{"lat":-6.17581085221399,"lng":39.20987590668841},{"lat":-6.175673493126268,"lng":39.209330719142486},{"lat":-6.175683495869889,"lng":39.209327305544399},{"lat":-6.175973486042262,"lng":39.209272328649014},{"lat":-6.176345552042525,"lng":39.209228760357732},{"lat":-6.176359484417677,"lng":39.209326676723705},{"lat":-6.17637752505675,"lng":39.20931661559252}]');
			var carRoute2 = JSON.parse('[{"lat":-6.175788703286794,"lng":39.215794816263937},{"lat":-6.175751550245524,"lng":39.215590269873751},{"lat":-6.175698499984947,"lng":39.215249449054951},{"lat":-6.17568617517618,"lng":39.215155754770819},{"lat":-6.175671528301608,"lng":39.215023163434886},{"lat":-6.175663847623329,"lng":39.214891919571876},{"lat":-6.175642949033024,"lng":39.21467767137662},{"lat":-6.175618924584138,"lng":39.214380598512157},{"lat":-6.175586237042281,"lng":39.214197521857251},{"lat":-6.175582486012785,"lng":39.214116044660983},{"lat":-6.175577931191174,"lng":39.213964229377972},{"lat":-6.175589720141114,"lng":39.213673265057437},{"lat":-6.175592220827443,"lng":39.213471952602269},{"lat":-6.17569323068268,"lng":39.21322428707844},{"lat":-6.175827553218983,"lng":39.213260129858277},{"lat":-6.176137548782719,"lng":39.213184312048298},{"lat":-6.17652354703853,"lng":39.212913380158604}]');
			var carRoute3 = JSON.parse('[{"lat":-6.174470215277481,"lng":39.215645606095258},{"lat":-6.174588194322015,"lng":39.215637880583813},{"lat":-6.174618202613772,"lng":39.215570776432088},{"lat":-6.174738950246787,"lng":39.215547689729284},{"lat":-6.174868896818148,"lng":39.215523884374257},{"lat":-6.174968477846094,"lng":39.215506097731627},{"lat":-6.174986518532569,"lng":39.215679742076048},{"lat":-6.17503724679618,"lng":39.215674891173521},{"lat":-6.175116197112253,"lng":39.215664650379281},{"lat":-6.175212562923289,"lng":39.215715944182001},{"lat":-6.175230514291159,"lng":39.215771999055725},{"lat":-6.175238909458006,"lng":39.215869556095583},{"lat":-6.175285886665794,"lng":39.215873868008948},{"lat":-6.175371535214552,"lng":39.215876562954804},{"lat":-6.175450932032033,"lng":39.215934324627568},{"lat":-6.175514252994937,"lng":39.215836408261602},{"lat":-6.175602938054358,"lng":39.215764004049703},{"lat":-6.175658221079866,"lng":39.215763285397472},{"lat":-6.175788703286794,"lng":39.215794816263937}]');
			var carRoute4 = JSON.parse('[{"lat":-6.174470215277481,"lng":39.215645606095258},{"lat":-6.174588194322015,"lng":39.215637880583813},{"lat":-6.174618202613772,"lng":39.215570776432088},{"lat":-6.174738950246787,"lng":39.215547689729284},{"lat":-6.174868896818148,"lng":39.215523884374257},{"lat":-6.174968477846094,"lng":39.215506097731627},{"lat":-6.174986518532569,"lng":39.215679742076048},{"lat":-6.17503724679618,"lng":39.215674891173521},{"lat":-6.175116197112253,"lng":39.215664650379281},{"lat":-6.175212562923289,"lng":39.215715944182001},{"lat":-6.175230514291159,"lng":39.215771999055725},{"lat":-6.175238909458006,"lng":39.215869556095583},{"lat":-6.175285886665794,"lng":39.215873868008948},{"lat":-6.175371535214552,"lng":39.215876562954804},{"lat":-6.175450932032033,"lng":39.215934324627568},{"lat":-6.175514252994937,"lng":39.215836408261602},{"lat":-6.175602938054358,"lng":39.215764004049703},{"lat":-6.175658221079866,"lng":39.215763285397472},{"lat":-6.175788703286794,"lng":39.215794816263937}]');
			
			
			
			var shipRoute4 = JSON.parse('[{"lat":-6.168438244847511,"lng":39.225393764232408},{"lat":-6.168570247126517,"lng":39.225342829755803},{"lat":-6.168652949484849,"lng":39.225305190345388} ,{"lat":-6.168730203836,"lng":39.225282373137169},{"lat":-6.168764945962498,"lng":39.225244913389822},{"lat":-6.168892929149215,"lng":39.225167119286219},{"lat":-6.168913649383096,"lng":39.225153644556961},{"lat":-6.168974202475749,"lng":39.225132893473898}]');
			var shipRoute5 = JSON.parse('[{"lat":-6.168987599176727,"lng":39.225191194135832},{"lat":-6.168978935976807,"lng":39.2251717905257},{"lat":-6.168974202475749,"lng":39.225132893473898},{"lat":-6.168952231885406,"lng":39.225051775603745},{"lat":-6.168949641856408,"lng":39.225002188600051},{"lat":-6.168911595222013,"lng":39.224963291548256},{"lat":-6.168878907266334,"lng":39.224951882944147},{"lat":-6.168842914788216,"lng":39.224896906048755},{"lat":-6.168820229701524,"lng":39.22484121050114},{"lat":-6.168790935572336,"lng":39.224778867420433},{"lat":-6.168768250483418,"lng":39.224728561764515},{"lat":-6.16872761380591,"lng":39.224646096421431},{"lat":-6.168685637454454,"lng":39.224586358455042},{"lat":-6.168654199844386,"lng":39.224493203160073},{"lat":-6.168630175078614,"lng":39.224428793954203},{"lat":-6.168570961617797,"lng":39.224336267479941},{"lat":-6.168506210842367,"lng":39.224259192028555},{"lat":-6.168468878667571,"lng":39.224255149609789},{"lat":-6.168439584518993,"lng":39.224257215734937},{"lat":-6.16836492015737,"lng":39.224241674880531},{"lat":-6.168320175122209,"lng":39.224224966216234},{"lat":-6.16827158969054,"lng":39.22420080153509},{"lat":-6.16822157527094,"lng":39.224186069164432},{"lat":-6.168186922420304,"lng":39.22418211657719},{"lat":-6.168099486480418,"lng":39.224128397323192},{"lat":-6.168042952305282,"lng":39.224081505265367},{"lat":-6.168030180760911,"lng":39.224035152196699},{"lat":-6.168014194002173,"lng":39.223968227708035},{"lat":-6.167975522120085,"lng":39.223905076143559},{"lat":-6.167928187018082,"lng":39.223858902737959},{"lat":-6.167902911858103,"lng":39.223804464831744},{"lat":-6.167893534148267,"lng":39.223744906528395},{"lat":-6.167906930876569,"lng":39.223695229693192},{"lat":-6.167936225054565,"lng":39.223606655806179},{"lat":-6.167967484084194,"lng":39.223486640884211},{"lat":-6.167987489862186,"lng":39.223375429452048},{"lat":-6.167979541137986,"lng":39.223338508693871},{"lat":-6.167954891161048,"lng":39.223310391425478},{"lat":-6.167947478305452,"lng":39.223281465673324},{"lat":-6.167950961454473,"lng":39.223252719584231},{"lat":-6.167982220483241,"lng":39.223187591726131},{"lat":-6.168022946529375,"lng":39.223133243651439},{"lat":-6.168055545226331,"lng":39.223078985408286},{"lat":-6.168080195198586,"lng":39.22303874088356},{"lat":-6.168138962156806,"lng":39.222979811400918},{"lat":-6.168204963337678,"lng":39.222947561882215},{"lat":-6.168302938011848,"lng":39.22292411585331},{"lat":-6.168347593737013,"lng":39.222917378488674},{"lat":-6.16841020105737,"lng":39.222883871328577},{"lat":-6.168438244847519,"lng":39.222854406587253},{"lat":-6.16848165020135,"lng":39.222800058512568},{"lat":-6.16855560005523,"lng":39.222707442206783},{"lat":-6.168581589675351,"lng":39.222677977465452},{"lat":-6.168585608688662,"lng":39.222641775359499},{"lat":-6.16857292646879,"lng":39.222596140943068},{"lat":-6.168552920712898,"lng":39.222525802856325},{"lat":-6.168557654217698,"lng":39.222458069883899},{"lat":-6.168546222356951,"lng":39.222372909594966},{"lat":-6.168550955861813,"lng":39.22226232698349},{"lat":-6.168537648461218,"lng":39.222185161700587},{"lat":-6.168522912077616,"lng":39.22207116549103},{"lat":-6.168519607555166,"lng":39.221996695153976},{"lat":-6.168517642704001,"lng":39.221924290942077},{"lat":-6.168514248870092,"lng":39.221868685225992}]');
			var shipRoute6 = JSON.parse('[{"lat":-6.168514248870092,"lng":39.221868685225992},{"lat":-6.168496922454634,"lng":39.221761965370241},{"lat":-6.16851219470747,"lng":39.221637997861023},{"lat":-6.16853487980736,"lng":39.221554813865716},{"lat":-6.168573640960064,"lng":39.221489057186929},{"lat":-6.168604185460886,"lng":39.221389883179562},{"lat":-6.168636962744898,"lng":39.22129331428652},{"lat":-6.16864089244639,"lng":39.221136378606374},{"lat":-6.168656879186233,"lng":39.221015106043019},{"lat":-6.168675634578726,"lng":39.220939288233041},{"lat":-6.168684208472226,"lng":39.220870926439922},{"lat":-6.168638927595638,"lng":39.220788371265307},{"lat":-6.168590252881786,"lng":39.220668356343353},{"lat":-6.168548187208025,"lng":39.220493364526},{"lat":-6.168556225235124,"lng":39.220439016451316},{"lat":-6.168558190086164,"lng":39.220382692083007},{"lat":-6.168528895942521,"lng":39.220319001529361},{"lat":-6.168482186069899,"lng":39.220275343406556},{"lat":-6.168431635801563,"lng":39.220235907365584},{"lat":-6.168395643293095,"lng":39.220150028424413},{"lat":-6.168359650782153,"lng":39.220053459531371},{"lat":-6.168292220637255,"lng":39.219884486426437},{"lat":-6.168282932245771,"lng":39.219762495210844},{"lat":-6.168265605822739,"lng":39.219717489615114},{"lat":-6.16819219179723,"lng":39.219715513321482},{"lat":-6.168166916649843,"lng":39.21971614214219},{"lat":-6.168118241892647,"lng":39.219667183959203},{"lat":-6.168007495639427,"lng":39.219532526498107},{"lat":-6.167940958564883,"lng":39.219476112298274},{"lat":-6.167882906076915,"lng":39.219376848459369},{"lat":-6.167832891620654,"lng":39.219249467352086},{"lat":-6.167792880052237,"lng":39.219152269638336},{"lat":-6.167771534593746,"lng":39.219076451828364},{"lat":-6.167773499447703,"lng":39.219017522345723},{"lat":-6.167782251978879,"lng":39.218903526136167},{"lat":-6.167787878605973,"lng":39.218803543645052},{"lat":-6.167777250532502,"lng":39.21873078010703},{"lat":-6.167753225727007,"lng":39.218631606099663},{"lat":-6.167730897839847,"lng":39.218618490696514},{"lat":-6.167702228831383,"lng":39.21862181446307},{"lat":-6.167665521780885,"lng":39.21863726548596},{"lat":-6.167616936289233,"lng":39.218624509408919},{"lat":-6.16752092634318,"lng":39.21862181446307},{"lat":-6.167386244454673,"lng":39.218588307302973},{"lat":-6.167287555118075,"lng":39.218519855678323},{"lat":-6.167195474824584,"lng":39.218489043464082},{"lat":-6.167007563099394,"lng":39.218317375413285},{"lat":-6.166880919132981,"lng":39.218168614402231}]');

			
			var planeRoute2 = JSON.parse('[{"lat":50,"lng":0},{"lat":51.15611417450841,"lng":-2.1906730905175213}]');
			
			
			var seqGroup = L.motion.seq([
					<!-- L.motion.polyline(trackRoute, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					<!-- L.motion.polyline(trackRoute2, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					<!-- L.motion.polyline(trackRoute3, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					<!-- L.motion.polyline(trackRoute5, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					
					//nimeifunga
					<!-- L.motion.polyline(trackRoute6, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					L.motion.polyline(trackRoute7, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute7, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute7, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					//orange
					<!-- L.motion.polyline(carRoute3, { -->
						<!-- colors: "#FF9900" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutElastic -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(2000), -->
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
						
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
							
							
				]).addTo(map);


			seqGroup.on("click", function(){
				seqGroup.motionStart();
			});

			seqGroup.on("dblclick", function(e){
				seqGroup.motionToggle();
			});

			setTimeout(function () {
				seqGroup.motionStart();
			}, 1000);

</script>

<script>
		var north = L.control({position: "topright"});
		north.onAdd = function(map1) {
			var div = L.DomUtil.create("div");
			div.innerHTML = '<img src="Images/noorth.jpg" style="width:50px">';
			return div;
		}
		north.addTo(map1);
	</script>
					
					
					
<script>
		
			var options = {
		        draw: {
		            circle: false, // Turns off this drawing tool
		            rectangle: false,
		            marker: false,
					circlemarker: false
		        }
		    };

			var drawControl = new L.Control.Draw(options);
		    map1.addControl(drawControl);

		    map1.on(L.Draw.Event.CREATED, function (e) {
		        var type = e.layerType,
		            layer = e.layer;

				if (type === "polyline") {
					var line = L.motion.polyline(layer.getLatLngs(), {
						color: "orange"
					}, {
						auto: true,
						easing: L.Motion.Ease.swing
					}).motionSpeed(100000).addTo(map1);
				}

				if (type === "polygon") {
					L.motion.polygon(layer.getLatLngs(), {
						color: "red",
						fill: true,
						fillOpacity: 0.4
					},{
						auto: true
					}, {
						removeOnEnd: true,
						icon: L.divIcon({className:"red", html: "<i class='fa fa-superpowers fa-spin fa-2x' aria-hidden='true' motion-base='0'></i>", iconSize: L.point(24, 24), iconAnchor: L.point(5, 22)})
					}).motionDuration(10000).addTo(map1);
				}
		    });
	
				
				
			var trackRoute = JSON.parse('[{"lat":-6.181130051005024,"lng":39.220070617353294},{"lat":-6.181081288129948,"lng":39.220110502551918},{"lat":-6.181026988073262,"lng":39.220131882455675},{"lat":-6.181000641826654,"lng":39.220140685945459},{"lat":-6.180837116449702,"lng":39.220205005319805},{"lat":-6.18075513046889,"lng":39.220240848099643},{"lat":-6.180557488831106,"lng":39.22032340327425},{"lat":-6.180349129988866,"lng":39.220386105681079},{"lat":-6.179683506442488,"lng":39.220581219760795},{"lat":-6.179035476059077,"lng":39.220868141662542},{"lat":-6.178430224252512,"lng":39.221055979388453},{"lat":-6.177704849993631,"lng":39.221290619340657},{"lat":-6.177276519688681,"lng":39.221440727824636},{"lat":-6.177261426308404,"lng":39.22144665670551},{"lat":-6.176779241702246,"lng":39.221647789497631},{"lat":-6.176248918507336,"lng":39.221800053938281}]');
			var trackRoute2 = JSON.parse('[{"lat":-6.180182121341964,"lng":39.216245411210458},{"lat":-6.179812826633498,"lng":39.216349975109537},{"lat":-6.179510245916048,"lng":39.216586052366196},{"lat":-6.179419507390903,"lng":39.217186845628213},{"lat":-6.179419507390905,"lng":39.217217657842461}]');
			var trackRoute3 = JSON.parse('[{"lat":-6.176456207242738,"lng":39.220752169159361},{"lat":-6.176718957431841,"lng":39.220717943347033},{"lat":-6.176962148602137,"lng":39.220704648280837},{"lat":-6.177019485615367,"lng":39.220729351951142},{"lat":-6.17706753438492,"lng":39.220796456102867},{"lat":-6.177101561484864,"lng":39.22087757397302},{"lat":-6.177122906567466,"lng":39.220964800387115},{"lat":-6.177180243563266,"lng":39.221174018016782},{"lat":-6.177276519688681,"lng":39.221440727824636}]');
			var trackRoute4 = JSON.parse('[{"lat":-6.170813655662949,"lng":39.21514201054697},{"lat":-6.170836876530504,"lng":39.215204353627698},{"lat":-6.170871261274826,"lng":39.215260408501422},{"lat":-6.170898590446647,"lng":39.215314397249998},{"lat":-6.170928241703369,"lng":39.215385364157449},{"lat":-6.170959589867556,"lng":39.215461451462012},{"lat":-6.170981649685676,"lng":39.215508792677483},{"lat":-6.170981649685671,"lng":39.21558559863427},{"lat":-6.170971914786297,"lng":39.215648570535691},{"lat":-6.170981203130658,"lng":39.215707589849856},{"lat":-6.171004602612881,"lng":39.215786821257915},{"lat":-6.171031217289866,"lng":39.215834970957147},{"lat":-6.171052205373126,"lng":39.215847816865704},{"lat":-6.171074890364302,"lng":39.215927227936824},{"lat":-6.171080606267448,"lng":39.216001967768463},{"lat":-6.171164647898642,"lng":39.21604059532568},{"lat":-6.171221896228525,"lng":39.216017059465237},{"lat":-6.171277894198869,"lng":39.215997566023574},{"lat":-6.171309242342376,"lng":39.216083804290847},{"lat":-6.171329247994229,"lng":39.216135816745798},{"lat":-6.171352200906379,"lng":39.216188817347565},{"lat":-6.171379619364332,"lng":39.216249363797708},{"lat":-6.171395248777841,"lng":39.216313503508999},{"lat":-6.171409627837845,"lng":39.216372073665525},{"lat":-6.171428204511106,"lng":39.216449598274544},{"lat":-6.171441243906349,"lng":39.216493885218043},{"lat":-6.171454819166797,"lng":39.216539609466004}]');
			var trackRoute5 = JSON.parse('[{"lat":-6.171454819166797,"lng":39.216539609466004},{"lat":-6.171473574460301,"lng":39.216571319995538},{"lat":-6.171483577283214,"lng":39.216598449117122},{"lat":-6.171519926825638,"lng":39.216600784736855},{"lat":-6.171545648367677,"lng":39.216619200200185},{"lat":-6.171566636430542,"lng":39.216659804051019},{"lat":-6.171569226446767,"lng":39.216716128419343},{"lat":-6.171557883961881,"lng":39.216758708563809},{"lat":-6.171538235562282,"lng":39.216809283714305},{"lat":-6.171536627965919,"lng":39.21686264364218},{"lat":-6.171517247498278,"lng":39.216861026674664},{"lat":-6.171514925414544,"lng":39.216925705375125},{"lat":-6.171534931058644,"lng":39.216974573726581},{"lat":-6.171555651189252,"lng":39.217029550621966},{"lat":-6.17155895569275,"lng":39.217079227457184},{"lat":-6.171562885372579,"lng":39.217187204954328},{"lat":-6.171546898720383,"lng":39.217309914822138},{"lat":-6.171523588573023,"lng":39.2174024412964},{"lat":-6.171516890254629,"lng":39.217448704533538},{"lat":-6.171515639901853,"lng":39.217488949058271},{"lat":-6.171494919769703,"lng":39.217547609046314},{"lat":-6.171475896544209,"lng":39.217662952728794},{"lat":-6.171371581380058,"lng":39.217936489732814}]');
			var trackRoute6 = JSON.parse('[{"lat":-6.169632248027718,"lng":39.218081657482728},{"lat":-6.169721202005444,"lng":39.218109145930427},{"lat":-6.169772913196468,"lng":39.218112918854622},{"lat":-6.169784880897992,"lng":39.218074021802821},{"lat":-6.169809352167447,"lng":39.218059918252855},{"lat":-6.169905183076669,"lng":39.218043479083157},{"lat":-6.170006908505623,"lng":39.218006917651088},{"lat":-6.17013917832741,"lng":39.217973769817107},{"lat":-6.170258587314408,"lng":39.217964966327315},{"lat":-6.170295204874223,"lng":39.217971074871258},{"lat":-6.17037862145225,"lng":39.217957689973517},{"lat":-6.17044319337675,"lng":39.217949964462072},{"lat":-6.170506604249308,"lng":39.217954276375444},{"lat":-6.170544561458131,"lng":39.2179750274585},{"lat":-6.170637891524732,"lng":39.21802605176665}]');
			var trackRoute7 = JSON.parse('[{"lat":-6.169632248027718,"lng":39.218081657482728},{"lat":-6.169575535393546,"lng":39.218083094787183},{"lat":-6.169521234157056,"lng":39.218075009949622},{"lat":-6.169467915338817,"lng":39.218079950683695},{"lat":-6.169439246424274,"lng":39.218074021802821},{"lat":-6.169350203087951,"lng":39.218055875834075},{"lat":-6.169291257641443,"lng":39.218064589492329},{"lat":-6.169260623868911,"lng":39.218058301285346},{"lat":-6.169126210356297,"lng":39.218090101646403},{"lat":-6.169012606350985,"lng":39.2181131883492},{"lat":-6.1689272247083,"lng":39.218156666808959}]');
			var trackRoute8 = JSON.parse('[{"lat":-6.1689272247083,"lng":39.218156666808959},{"lat":-6.168734848027849,"lng":39.218217662416741},{"lat":-6.168476916695852,"lng":39.218207780948617},{"lat":-6.168140927009381,"lng":39.218288180166546},{"lat":-6.16795560565314,"lng":39.218040784137301},{"lat":-6.167862900294977,"lng":39.218044826556088},{"lat":-6.167700174665613,"lng":39.21805560633949},{"lat":-6.167520211850483,"lng":39.218049497795555},{"lat":-6.167434919279052,"lng":39.218044826556088},{"lat":-6.167298183201357,"lng":39.218040065485077},{"lat":-6.167132242179244,"lng":39.218015990635465},{"lat":-6.167032927613721,"lng":39.218017248276858},{"lat":-6.166943258691451,"lng":39.218014283836418},{"lat":-6.166908605757274,"lng":39.218027129744975},{"lat":-6.166859216390987,"lng":39.218038089191452},{"lat":-6.16680125309628,"lng":39.218035394245597}]');
			var trackRoute9 = JSON.parse('[{"lat":-6.169437549510289,"lng":39.209112787854551},{"lat":-6.16942513524461,"lng":39.209004451031291},{"lat":-6.169424688688271,"lng":39.208972291344118},{"lat":-6.169427189403694,"lng":39.208939053678606},{"lat":-6.169427725271277,"lng":39.208891263305482},{"lat":-6.169430404609221,"lng":39.208864313846959},{"lat":-6.169431208410586,"lng":39.208839161019007},{"lat":-6.169434602238606,"lng":39.208781309514713},{"lat":-6.169441925762155,"lng":39.208746005724045},{"lat":-6.169445944768945,"lng":39.208694262763679},{"lat":-6.169454429338712,"lng":39.208638297721485},{"lat":-6.169464700133531,"lng":39.208586464929581},{"lat":-6.169469612252722,"lng":39.208537057588956},{"lat":-6.169482651696156,"lng":39.208470941584046},{"lat":-6.169500603258165,"lng":39.208371767576686},{"lat":-6.169499620834389,"lng":39.208347962221652},{"lat":-6.169507212290798,"lng":39.208295949766701},{"lat":-6.169591879350143,"lng":39.207792354218427},{"lat":-6.169579911644287,"lng":39.207845085325602},{"lat":-6.1695696408517,"lng":39.20790536228116},{"lat":-6.169556958655377,"lng":39.207955398442486},{"lat":-6.169546241306116,"lng":39.208036156986537},{"lat":-6.169542579545082,"lng":39.208099218719475}]');
			var trackRoute10 = JSON.parse('[{"lat":-6.169591879350143,"lng":39.207792354218427},{"lat":-6.169600185295129,"lng":39.207746809633527},{"lat":-6.169607955372553,"lng":39.207697222629832},{"lat":-6.16961661856221,"lng":39.207655001811482},{"lat":-6.169626889353871,"lng":39.207604246997931},{"lat":-6.169633944941081,"lng":39.207546305662099},{"lat":-6.169651628564286,"lng":39.207464469139722},{"lat":-6.169657255171535,"lng":39.207427009392369},{"lat":-6.169677886064332,"lng":39.207316965770062},{"lat":-6.169687888921137,"lng":39.207259293928821},{"lat":-6.169696194864595,"lng":39.207203688212743},{"lat":-6.169709948792209,"lng":39.207135326419618},{"lat":-6.169718611980181,"lng":39.207071905360564},{"lat":-6.169722184428811,"lng":39.207026989596358},{"lat":-6.169725935499816,"lng":39.206972641521666},{"lat":-6.169735581110874,"lng":39.206926108789943},{"lat":-6.169740939783611,"lng":39.206901315288107},{"lat":-6.169762910341255,"lng":39.206693085805249},{"lat":-6.16977291319647,"lng":39.206483508849466},{"lat":-6.169808905611431,"lng":39.206281028584428},{"lat":-6.169835609659679,"lng":39.20616568490194},{"lat":-6.169835609659679,"lng":39.20616568490194},{"lat":-6.1698649037311,"lng":39.206011354336127},{"lat":-6.169913578327894,"lng":39.205933021243354},{"lat":-6.170017625845539,"lng":39.20574392587605},{"lat":-6.170158201600879,"lng":39.205515843625406},{"lat":-6.17026823291578,"lng":39.205312105718967},{"lat":-6.170398895072549,"lng":39.205095521903964},{"lat":-6.170515624668601,"lng":39.204914421542689},{"lat":-6.170570908225003,"lng":39.204826566307901},{"lat":-6.170687637783178,"lng":39.204625343684263},{"lat":-6.170687637783178,"lng":39.204625343684263},{"lat":-6.170808207690023,"lng":39.204370581469689},{"lat":-6.170971646853282,"lng":39.204041348918054},{"lat":-6.171146249838119,"lng":39.203679866847722},{"lat":-6.17132094207636,"lng":39.203330601865261},{"lat":-6.171480897955669,"lng":39.20301942545084},{"lat":-6.171534931058656,"lng":39.202928875270196}]');
			var trackRoute11 = JSON.parse('[{"lat":-6.162063513814339,"lng":39.225933561886634},{"lat":-6.162095487690053,"lng":39.225795400995935},{"lat":-6.16208878925256,"lng":39.225635770369941},{"lat":-6.162075481689818,"lng":39.225478924521333},{"lat":-6.162112814314619,"lng":39.225323246482603},{"lat":-6.162056100876392,"lng":39.22522604876886},{"lat":-6.162012784309256,"lng":39.225148973317488}]');
			var trackRoute13 = JSON.parse('[{"lat":-6.162915822362018,"lng":39.223508200451036},{"lat":-6.162977537200034,"lng":39.223396180535111},{"lat":-6.163088195191182,"lng":39.223313715192027},{"lat":-6.163128832300796,"lng":39.223262690883885},{"lat":-6.163124813246142,"lng":39.223187591726131},{"lat":-6.163042199338096,"lng":39.223109797622534},{"lat":-6.162992809611813,"lng":39.22303874088356},{"lat":-6.162950207619968,"lng":39.222948280534446},{"lat":-6.162927522281198,"lng":39.22283087072681},{"lat":-6.162906801813444,"lng":39.222702142146602},{"lat":-6.162871523429003,"lng":39.222646446598986},{"lat":-6.162868218871346,"lng":39.22252849780218},{"lat":-6.16286482500131,"lng":39.222417825359173},{"lat":-6.162860180758059,"lng":39.222330688776616},{"lat":-6.162855536514772,"lng":39.222195851652472},{"lat":-6.162864199814705,"lng":39.222073141784655},{"lat":-6.162904836941473,"lng":39.222014212302021},{"lat":-6.162991559238936,"lng":39.222022207308051},{"lat":-6.163062830488219,"lng":39.221934352073262},{"lat":-6.163089534876165,"lng":39.221831764467815},{"lat":-6.16310623628199,"lng":39.221758012782985},{"lat":-6.163094179117413,"lng":39.221674199966976},{"lat":-6.163083550949877,"lng":39.221615180652819},{"lat":-6.163053542005144,"lng":39.22150837096553},{"lat":-6.163014780449029,"lng":39.221395273071259},{"lat":-6.162935560393468,"lng":39.221255046055411},{"lat":-6.162829546614048,"lng":39.221175994310407},{"lat":-6.162760776080276,"lng":39.221129012421052},{"lat":-6.162718263382192,"lng":39.221071430411335},{"lat":-6.162690219289606,"lng":39.220980161578467},{"lat":-6.162668248438938,"lng":39.220904343768488},{"lat":-6.162642258529052,"lng":39.220836700627601},{"lat":-6.162640204343689,"lng":39.220803822288204},{"lat":-6.162654226391489,"lng":39.220765554057095},{"lat":-6.162694238347544,"lng":39.220723782396384},{"lat":-6.162711475640172,"lng":39.220663685103865},{"lat":-6.1627182633822,"lng":39.2206321542374}]');
			
			
			var trackRoute12 = JSON.parse('[{"lat":-6.161896856654437,"lng":39.224977305266691},{"lat":-6.161894623841117,"lng":39.224892773798452},{"lat":-6.161890962027254,"lng":39.224854595398874},{"lat":-6.161887925401095,"lng":39.224796654063049},{"lat":-6.162093612127546,"lng":39.224599204363606},{"lat":-6.162133534813373,"lng":39.224570727769098},{"lat":-6.162175154433431,"lng":39.224511079634226},{"lat":-6.162208914552028,"lng":39.224489070909769},{"lat":-6.162264377599334,"lng":39.22445304846687},{"lat":-6.162309659020144,"lng":39.224423943051676},{"lat":-6.162318947516233,"lng":39.224397712245377},{"lat":-6.162342883255426,"lng":39.22439088504921},{"lat":-6.162398882163429,"lng":39.224385584989037},{"lat":-6.162461579498385,"lng":39.224378398466769},{"lat":-6.162476851924991,"lng":39.224332584387284},{"lat":-6.162495518223615,"lng":39.224279583785517},{"lat":-6.162548837742822,"lng":39.224259461523147},{"lat":-6.162668248438937,"lng":39.224231973075455},{"lat":-6.162745503661821,"lng":39.224200442208975},{"lat":-6.162802931525398,"lng":39.224173492750452},{"lat":-6.16281820394222,"lng":39.22413675165533},{"lat":-6.162828206928418,"lng":39.22403820646867},{"lat":-6.16282356268485,"lng":39.22390750159483},{"lat":-6.162842228971256,"lng":39.223772664470687},{"lat":-6.162845533529066,"lng":39.223708973917034},{"lat":-6.162862234942573,"lng":39.22360099641989},{"lat":-6.162897602639997,"lng":39.223581502978227},{"lat":-6.162903497256018,"lng":39.223544672051567},{"lat":-6.162915822362018,"lng":39.223508200451036}]');
			var trackRoute14 = JSON.parse('[{"lat":-6.1627182633822,"lng":39.2206321542374},{"lat":-6.162682806360405,"lng":39.220548970242092},{"lat":-6.162607516001482,"lng":39.220397514285182},{"lat":-6.162483818294905,"lng":39.220253604176676},{"lat":-6.162476405362827,"lng":39.220238153153794},{"lat":-6.162419602651008,"lng":39.220129187509819},{"lat":-6.162392183729751,"lng":39.220074300445965},{"lat":-6.16232421695146,"lng":39.219943505740595},{"lat":-6.16230153158592,"lng":39.219904608688793},{"lat":-6.162235529670462,"lng":39.219863016691136},{"lat":-6.162200251241367,"lng":39.219844241901704},{"lat":-6.162144162999916,"lng":39.219814058508163},{"lat":-6.16195616017286,"lng":39.219773903814954},{"lat":-6.16180281054914,"lng":39.21974964930228},{"lat":-6.161670092085397,"lng":39.219689372346714},{"lat":-6.161639547185288,"lng":39.219655775355093},{"lat":-6.161656784512157,"lng":39.219586784741267},{"lat":-6.161646156315879,"lng":39.219409726798766},{"lat":-6.161634099118114,"lng":39.219209851648053},{"lat":-6.161598106148379,"lng":39.219093879144872},{"lat":-6.161538802589951,"lng":39.219003418795765},{"lat":-6.161496111168788,"lng":39.2189443994816},{"lat":-6.161477534147632,"lng":39.218897058266123},{"lat":-6.161477534147632,"lng":39.218897058266123},{"lat":-6.161432788531491,"lng":39.218784499361028},{"lat":-6.161362856752622,"lng":39.218597020961226},{"lat":-6.161343475913172,"lng":39.218517879384699},{"lat":-6.161373484954618,"lng":39.218448170118641},{"lat":-6.16137884371182,"lng":39.218374418433825},{"lat":-6.161363481940979,"lng":39.218223501466092},{"lat":-6.161420106140618,"lng":39.218073303150582},{"lat":-6.161399653551854,"lng":39.2178447717423},{"lat":-6.161399653551854,"lng":39.2178447717423},{"lat":-6.161375539144893,"lng":39.217625403149924},{"lat":-6.161355533117512,"lng":39.217547698877851},{"lat":-6.16132480957404,"lng":39.217484547313376},{"lat":-6.161312841681624,"lng":39.21744026036987},{"lat":-6.161290156272863,"lng":39.217350518672987},{"lat":-6.161275509000539,"lng":39.217249907361165},{"lat":-6.161270507492818,"lng":39.21711435158479},{"lat":-6.161271489931861,"lng":39.217007182571393},{"lat":-6.16128613720428,"lng":39.216927951163335},{"lat":-6.161340796534393,"lng":39.216867674207776},{"lat":-6.161382148278741,"lng":39.216839467107846},{"lat":-6.161440826666413,"lng":39.216781166445912},{"lat":-6.161452794555943,"lng":39.216729603148607},{"lat":-6.161463512068729,"lng":39.216651090392766},{"lat":-6.161493789041191,"lng":39.216555779141117},{"lat":-6.161523530136327,"lng":39.21649217841901},{"lat":-6.162556697235993,"lng":39.217144894304447},{"lat":-6.162512844835144,"lng":39.217109051524616},{"lat":-6.162439519325819,"lng":39.217028562475164},{"lat":-6.162394237916091,"lng":39.216992360369211},{"lat":-6.162300817086209,"lng":39.216950768371554},{"lat":-6.162132820313437,"lng":39.216887796470139},{"lat":-6.161926151164365,"lng":39.216796617468795},{"lat":-6.161842108069047,"lng":39.216724213256889},{"lat":-6.161768335904281,"lng":39.216650281909011},{"lat":-6.16173332538181,"lng":39.216614708623766},{"lat":-6.161688847724947,"lng":39.216574014941386},{"lat":-6.161580779507003,"lng":39.216520295687403},{"lat":-6.161523530136327,"lng":39.21649217841901},{"lat":-6.161515492002676,"lng":39.216412947010944},{"lat":-6.161488787535533,"lng":39.216312515362191},{"lat":-6.161479499024921,"lng":39.216198519152627},{"lat":-6.161487537159107,"lng":39.216080480524298},{"lat":-6.161478159335863,"lng":39.216013376372565},{"lat":-6.161444845733823,"lng":39.215982564158331},{"lat":-6.161356783494248,"lng":39.215965047010286},{"lat":-6.161292478401359,"lng":39.215946002726263},{"lat":-6.16115681249232,"lng":39.215915460006599},{"lat":-6.161059550999655,"lng":39.215903422581803},{"lat":-6.160846093666767,"lng":39.215888690211131},{"lat":-6.160744813044487,"lng":39.215893990271312},{"lat":-6.160598161527184,"lng":39.215915460006599},{"lat":-6.160488842708355,"lng":39.215921478719004},{"lat":-6.160488842708355,"lng":39.215921478719004},{"lat":-6.16041015815247,"lng":39.215881324025808},{"lat":-6.160332813276853,"lng":39.215820328418019},{"lat":-6.160280118724659,"lng":39.215688186239731},{"lat":-6.160225459285317,"lng":39.215509780824299},{"lat":-6.160189376907253,"lng":39.215383118369239},{"lat":-6.160218135634522,"lng":39.215291849536371},{"lat":-6.16023939208411,"lng":39.215250257538713},{"lat":-6.160231443243823,"lng":39.215193304349697},{"lat":-6.160173389912216,"lng":39.215077242014985},{"lat":-6.160127393806523,"lng":39.2149767205347}]');
			var trackRoute15 = JSON.parse('[{"lat":-6.160127393806523,"lng":39.2149767205347},{"lat":-6.160122392288001,"lng":39.214957586419153},{"lat":-6.159988423024124,"lng":39.214674617104656},{"lat":-6.159871780424186,"lng":39.214379879859926},{"lat":-6.159824087347633,"lng":39.214164643517854},{"lat":-6.159802384316967,"lng":39.214097988523768},{"lat":-6.159786397310295,"lng":39.214065110184372},{"lat":-6.159758442375669,"lng":39.213999712831694},{"lat":-6.159677435575948,"lng":39.213857868848329},{"lat":-6.159666092836732,"lng":39.213804868246562},{"lat":-6.15965814398787,"lng":39.213771361086465},{"lat":-6.15965644704259,"lng":39.213744860785589},{"lat":-6.159655107348932,"lng":39.213698956874566},{"lat":-6.159641085221895,"lng":39.213624576369043},{"lat":-6.159601162348603,"lng":39.213524324383329},{"lat":-6.159564454737632,"lng":39.213448147247242},{"lat":-6.15952908681808,"lng":39.213417694359116},{"lat":-6.159437451742829,"lng":39.213372059942678},{"lat":-6.159329829631353,"lng":39.213304416801783},{"lat":-6.159257128873155,"lng":39.213251685694601},{"lat":-6.159152096801971,"lng":39.213226892192758},{"lat":-6.159081092966566,"lng":39.21316392029135},{"lat":-6.159059389905542,"lng":39.213108853564428},{"lat":-6.159003390645225,"lng":39.212984167402986},{"lat":-6.158984456284752,"lng":39.212885262890211},{"lat":-6.158971148644195,"lng":39.212830285994819},{"lat":-6.158980437198716,"lng":39.21277800404529},{"lat":-6.158989457814005,"lng":39.212621068365152},{"lat":-6.158996424229667,"lng":39.212499346644151},{"lat":-6.158999460872359,"lng":39.212447693515315},{"lat":-6.159006784539969,"lng":39.212395770891895},{"lat":-6.158986153232193,"lng":39.212333068485066},{"lat":-6.158919436400221,"lng":39.212229492732803},{"lat":-6.158886837141917,"lng":39.21219329062685},{"lat":-6.158830391298179,"lng":39.212101392973288},{"lat":-6.158807437844172,"lng":39.212037343093535},{"lat":-6.158804847765642,"lng":39.212003746101907},{"lat":-6.158809849296585,"lng":39.21194275049411},{"lat":-6.158830837863419,"lng":39.211901607654099},{"lat":-6.158881121107371,"lng":39.211869088640817},{"lat":-6.158911844792302,"lng":39.211837917100461},{"lat":-6.158952839473765,"lng":39.211788330096766},{"lat":-6.159005444844674,"lng":39.211666518544249},{"lat":-6.15899740667289,"lng":39.211612170469557},{"lat":-6.158952392908621,"lng":39.211542820529623},{"lat":-6.158900859288895,"lng":39.211500599711272},{"lat":-6.158793147755581,"lng":39.211427476847142},{"lat":-6.15869043773248,"lng":39.211395945980669},{"lat":-6.158549412372755,"lng":39.211341687737509},{"lat":-6.158465100803536,"lng":39.211303419506407},{"lat":-6.158436163355061,"lng":39.211224727087519},{"lat":-6.158399455663549,"lng":39.211172265474929},{"lat":-6.158339705182131,"lng":39.211134446401459},{"lat":-6.158204127831691,"lng":39.211085488218487},{"lat":-6.158080697038514,"lng":39.211033206268944},{"lat":-6.15799442050471,"lng":39.210935020408392},{"lat":-6.157965393717408,"lng":39.210855789000327},{"lat":-6.157964143332686,"lng":39.210834678591155},{"lat":-6.1579524433041,"lng":39.210745206388857},{"lat":-6.157947084512293,"lng":39.210656363007253},{"lat":-6.157913413435871,"lng":39.210453164089984},{"lat":-6.157924756212514,"lng":39.210352912104277},{"lat":-6.15795815934864,"lng":39.210319045618064},{"lat":-6.157950835666559,"lng":39.210214481718999},{"lat":-6.157948156270669,"lng":39.210175584667198},{"lat":-6.157937438686887,"lng":39.210058174859562},{"lat":-6.157917432529978,"lng":39.209952982139789},{"lat":-6.157902159972188,"lng":39.209815180575205},{"lat":-6.157894389723313,"lng":39.209707203078054},{"lat":-6.157901713406168,"lng":39.209666599227212},{"lat":-6.157910019534159,"lng":39.209617012223525},{"lat":-6.157912430990633,"lng":39.20960757991304},{"lat":-6.157935741736135,"lng":39.209511370346114},{"lat":-6.157938421132092,"lng":39.209475168240161},{"lat":-6.15795414025483,"lng":39.209415520105303},{"lat":-6.15795842728822,"lng":39.20939710464198},{"lat":-6.158001386933431,"lng":39.209174681777625}]');
			
			var trackRoute16 = JSON.parse('[{"lat":-6.158001386933431,"lng":39.209174681777625},{"lat":-6.158114725357024,"lng":39.20860182612094},{"lat":-6.158227438564364,"lng":39.208065262401746},{"lat":-6.15825869816598,"lng":39.207868172028405}]');
			
			
			var trackRoute17 = JSON.parse('[{"lat":-6.141770789329614,"lng":39.22173914816203},{"lat":-6.141752747514623,"lng":39.221714354660179},{"lat":-6.141731401009956,"lng":39.221670876200427},{"lat":-6.141713448509573,"lng":39.221632607969326},{"lat":-6.141714698932512,"lng":39.221600358450623},{"lat":-6.141742744131795,"lng":39.22156828859498},{"lat":-6.141805443903213,"lng":39.221551490099166},{"lat":-6.141840813001776,"lng":39.221542057788689},{"lat":-6.141843403162945,"lng":39.221505855682729},{"lat":-6.141810088330425,"lng":39.221463545032854},{"lat":-6.141780792711904,"lng":39.221374521988203},{"lat":-6.141791421305393,"lng":39.221294661759437},{"lat":-6.141803389637297,"lng":39.221204830231024},{"lat":-6.14178481192796,"lng":39.221120298762784},{"lat":-6.141750157353015,"lng":39.221051308148972},{"lat":-6.141740689865649,"lng":39.221000283840837},{"lat":-6.14174345865915,"lng":39.220719290819964},{"lat":-6.141705410076366,"lng":39.220585172348045},{"lat":-6.14170808955412,"lng":39.220475308388792},{"lat":-6.141724077104409,"lng":39.220378649664227},{"lat":-6.141702730598605,"lng":39.220268695873443},{"lat":-6.141644139348133,"lng":39.220106460133138},{"lat":-6.141582689980975,"lng":39.219899847617789},{"lat":-6.141532137153248,"lng":39.219706799663228},{"lat":-6.141441392135974,"lng":39.219457427340366},{"lat":-6.141392089718537,"lng":39.219344688772203},{"lat":-6.141374762418553,"lng":39.219292406822667},{"lat":-6.141386730759836,"lng":39.219252162297934},{"lat":-6.14142942379592,"lng":39.219195748098095},{"lat":-6.141456129270739,"lng":39.219148856040263},{"lat":-6.141436122493757,"lng":39.219093879144872},{"lat":-6.14144273187551,"lng":39.219063066930623},{"lat":-6.141481405688814,"lng":39.219044292141191},{"lat":-6.14152811793529,"lng":39.219017522345723},{"lat":-6.141526688880015,"lng":39.218966498037588},{"lat":-6.141481405688813,"lng":39.218902088831719},{"lat":-6.141321440775418,"lng":39.218784050203389},{"lat":-6.141177463380697,"lng":39.2186943085065},{"lat":-6.141048044461016,"lng":39.218672748939674},{"lat":-6.140984004859727,"lng":39.218635289192328},{"lat":-6.140976055731548,"lng":39.218583007242799},{"lat":-6.141021428281779,"lng":39.218529287988808},{"lat":-6.141093417005097,"lng":39.218447451466417},{"lat":-6.141110744314234,"lng":39.218361662356791},{"lat":-6.141071981157986,"lng":39.218273178301303},{"lat":-6.141018748800594,"lng":39.218228891357789},{"lat":-6.140945420326376,"lng":39.218231586303652},{"lat":-6.140886739676526,"lng":39.218259793403568},{"lat":-6.140847976503966,"lng":39.218285215726112},{"lat":-6.140884060194634,"lng":39.218316117771884},{"lat":-6.140930683177478,"lng":39.218345582513201},{"lat":-6.140940061363175,"lng":39.218388521983783},{"lat":-6.140923984473305,"lng":39.218444756520569},{"lat":-6.14086798330306,"lng":39.218459578722758},{"lat":-6.140782686453509,"lng":39.218439456460395},{"lat":-6.140654696495513,"lng":39.218363009829723},{"lat":-6.140524027023062,"lng":39.218278478361484},{"lat":-6.140423992955495,"lng":39.218214158987131},{"lat":-6.140376030186085,"lng":39.218082645629543},{"lat":-6.140347984914832,"lng":39.217995598878503},{"lat":-6.140238751248651,"lng":39.217949964462072},{"lat":-6.140161314122579,"lng":39.217885555256203},{"lat":-6.140110761159927,"lng":39.217827883414962},{"lat":-6.140102722702518,"lng":39.217739399359481},{"lat":-6.140184000432881,"lng":39.21762001325822},{"lat":-6.140232052535772,"lng":39.217484547313376},{"lat":-6.140293323426455,"lng":39.217272724569384},{"lat":-6.140289304199144,"lng":39.217059464520929},{"lat":-6.140314759304915,"lng":39.216771105314727},{"lat":-6.140269297378318,"lng":39.216529727997887},{"lat":-6.140306720850604,"lng":39.216325900259918},{"lat":-6.140376030186085,"lng":39.216164922160999},{"lat":-6.140485353140245,"lng":39.216025503628913},{"lat":-6.14060530468912,"lng":39.215893990271312},{"lat":-6.140770718098662,"lng":39.2158430557947},{"lat":-6.140861463230229,"lng":39.215808201161678},{"lat":-6.140925413530197,"lng":39.215832276011298},{"lat":-6.14095202971423,"lng":39.215869915421699},{"lat":-6.14098668434112,"lng":39.215872610367548},{"lat":-6.141029377409272,"lng":39.215864525529994},{"lat":-6.141032056890425,"lng":39.215792121318088},{"lat":-6.140994722785174,"lng":39.215682077695789},{"lat":-6.140941401103983,"lng":39.215448785216502},{"lat":-6.140917375085092,"lng":39.215258342376266},{"lat":-6.140925413530188,"lng":39.215059904530008},{"lat":-6.140946760067149,"lng":39.214939170955816},{"lat":-6.140896028546955,"lng":39.214842602062774},{"lat":-6.140886739676522,"lng":39.214660154228575},{"lat":-6.140846726079003,"lng":39.214613262170744},{"lat":-6.140432031408054,"lng":39.214634642074508},{"lat":-6.1402813550606,"lng":39.214623952122622},{"lat":-6.140114691072407,"lng":39.214623952122622},{"lat":-6.140017336414209,"lng":39.21459592468576},{"lat":-6.139882647554993,"lng":39.214557027633951},{"lat":-6.139797350547642,"lng":39.214527473061118},{"lat":-6.139709284722579,"lng":39.214513998331853},{"lat":-6.139665341120856,"lng":39.214498008319794},{"lat":-6.139614609478562,"lng":39.214476448752968},{"lat":-6.139597282120767,"lng":39.214438899174098},{"lat":-6.139628006919771,"lng":39.214378622218533},{"lat":-6.139701335575374,"lng":39.214280705852559},{"lat":-6.139732060368392,"lng":39.214167967284403},{"lat":-6.139744028746565,"lng":39.214050018487605},{"lat":-6.139722592845147,"lng":39.213930722217867},{"lat":-6.139677309500529,"lng":39.213842148330862},{"lat":-6.13962398768745,"lng":39.21372949959423},{"lat":-6.139578615018178,"lng":39.213600771014015},{"lat":-6.139550659021219,"lng":39.213466562710565},{"lat":-6.139524042767131,"lng":39.213266777391375},{"lat":-6.139518594473359,"lng":39.213152781181826},{"lat":-6.139537350894346,"lng":39.213049564755671},{"lat":-6.139541280811041,"lng":39.212959643395735},{"lat":-6.13948804830063,"lng":39.212890023961215},{"lat":-6.13936389863319,"lng":39.212857774442519},{"lat":-6.139165348421486,"lng":39.212840257294474},{"lat":-6.139049326468639,"lng":39.212833609761375},{"lat":-6.138938574157531,"lng":39.212776027751666},{"lat":-6.138899900159576,"lng":39.212691496283426},{"lat":-6.138938574157522,"lng":39.212617654767072},{"lat":-6.138913297618762,"lng":39.212505095861964},{"lat":-6.138747883632398,"lng":39.21231600049466},{"lat":-6.138587917898032,"lng":39.212110825283773},{"lat":-6.138445190194987,"lng":39.211994044296837},{"lat":-6.138241191334012,"lng":39.211885527810516},{"lat":-6.138030493654353,"lng":39.211762099290475},{"lat":-6.137810506967283,"lng":39.21163741312904},{"lat":-6.13763723277713,"lng":39.211593126185534},{"lat":-6.137517191243286,"lng":39.211565008917148},{"lat":-6.137278537161118,"lng":39.211493862346636},{"lat":-6.137171803732739,"lng":39.211452270348985}]');
			
			var trackRoute18 = JSON.parse('[{"lat":-6.156723760240999,"lng":39.223610788056483},{"lat":-6.156815038530963,"lng":39.223431663988833},{"lat":-6.156786458246155,"lng":39.223319644072902},{"lat":-6.156741712234698,"lng":39.223080422712741},{"lat":-6.156748410739646,"lng":39.222750381677351},{"lat":-6.156681693626543,"lng":39.222551315010399},{"lat":-6.156644449933267,"lng":39.222418454179881},{"lat":-6.15664570032108,"lng":39.222346049967967},{"lat":-6.156679728731525,"lng":39.222199175419021},{"lat":-6.156693393683132,"lng":39.222137550990524},{"lat":-6.156683033327678,"lng":39.222057061941072},{"lat":-6.156659454586985,"lng":39.221992652735196},{"lat":-6.156623729220274,"lng":39.221967859233359},{"lat":-6.156575053404286,"lng":39.221921595996228},{"lat":-6.156526377583815,"lng":39.22178478257846},{"lat":-6.156522447792617,"lng":39.221629913023477},{"lat":-6.156463054353816,"lng":39.221450878787351},{"lat":-6.156451443605603,"lng":39.221406681675369},{"lat":-6.156442422947201,"lng":39.221286576921891},{"lat":-6.156537005882596,"lng":39.221124251350048},{"lat":-6.15705439835579,"lng":39.220503425657185},{"lat":-6.157289738973905,"lng":39.220514744429771},{"lat":-6.157346452921316,"lng":39.220477913503117},{"lat":-6.157371996523983,"lng":39.22040622794345},{"lat":-6.157393699653974,"lng":39.220339123791717},{"lat":-6.157399058451357,"lng":39.22019090176984},{"lat":-6.1574327295604,"lng":39.220055525656527},{"lat":-6.157514093955637,"lng":39.219942787088364},{"lat":-6.157590099542998,"lng":39.219692696113263},{"lat":-6.157589117097171,"lng":39.219549863983097},{"lat":-6.157532760428754,"lng":39.219406403032217},{"lat":-6.157523114595835,"lng":39.219258899662563},{"lat":-6.157535439826755,"lng":39.21920589906081},{"lat":-6.157559375781622,"lng":39.219165025715377},{"lat":-6.157640382904459,"lng":39.219118672646722},{"lat":-6.157736126698564,"lng":39.21896784551052},{"lat":-6.15788072480261,"lng":39.218851154355107},{"lat":-6.158234762242622,"lng":39.22428596182403},{"lat":-6.158249677538284,"lng":39.224251556348648},{"lat":-6.158287724937249,"lng":39.224171696119896},{"lat":-6.158318716595883,"lng":39.224161994314827},{"lat":-6.158339437242762,"lng":39.224080786613143},{"lat":-6.158350154818383,"lng":39.224045842148577},{"lat":-6.158369714393369,"lng":39.223914508454051},{"lat":-6.15838007471591,"lng":39.223778683183085},{"lat":-6.158371411342754,"lng":39.223602343892814},{"lat":-6.158357389181815,"lng":39.223385760077811},{"lat":-6.15834408152556,"lng":39.223255953519256},{"lat":-6.158339079990226,"lng":39.223030656045999},{"lat":-6.158339079990213,"lng":39.222955287393667},{"lat":-6.158370160958999,"lng":39.222946843229991},{"lat":-6.158367392252089,"lng":39.222839943711186},{"lat":-6.15830210435258,"lng":39.222839584385071},{"lat":-6.158300675342393,"lng":39.222666568861342},{"lat":-6.158370160959003,"lng":39.22266028065436},{"lat":-6.158362122777594,"lng":39.222478192146262},{"lat":-6.158431429759954,"lng":39.222457351231682},{"lat":-6.158388112897049,"lng":39.22203756849941},{"lat":-6.15837471592842,"lng":39.22189078378198},{"lat":-6.158386683887064,"lng":39.221739866814254},{"lat":-6.158403385440856,"lng":39.221530020363879},{"lat":-6.15845375803841,"lng":39.221396261218075},{"lat":-6.1585507520692,"lng":39.221405963023145},{"lat":-6.158569150566595,"lng":39.221341014828106},{"lat":-6.15858308340886,"lng":39.221236989918197},{"lat":-6.158660696478622,"lng":39.221016363684427},{"lat":-6.158681417112118,"lng":39.220728723130442},{"lat":-6.158688740784119,"lng":39.220654971445612},{"lat":-6.158704727823845,"lng":39.220634759351725},{"lat":-6.158682131616705,"lng":39.220429673972362},{"lat":-6.158646138446833,"lng":39.220298879266991},{"lat":-6.158460724461113,"lng":39.220049506944129},{"lat":-6.158306123443759,"lng":39.219978989194317},{"lat":-6.158223419472593,"lng":39.219786570060464},{"lat":-6.158223419472607,"lng":39.219675268796756},{"lat":-6.1582827234014,"lng":39.219535760433132},{"lat":-6.158314608191684,"lng":39.219355558387143},{"lat":-6.158338097545772,"lng":39.219314505378655},{"lat":-6.15834765405075,"lng":39.219262403092173},{"lat":-6.158336132656882,"lng":39.219191795510845},{"lat":-6.158300139463542,"lng":39.219104030107594},{"lat":-6.158238156142274,"lng":39.219011413801788},{"lat":-6.158154112463096,"lng":39.21895580808571},{"lat":-6.158088735224197,"lng":39.218828426978419},{"lat":-6.157993438059635,"lng":39.218746500624505},{"lat":-6.157973431904823,"lng":39.2186943085065},{"lat":-6.15778542760073,"lng":39.218477006039265},{"lat":-6.157415402783068,"lng":39.218205355497354},{"lat":-6.157324749789396,"lng":39.218100791598275},{"lat":-6.157197389005646,"lng":39.217920499720762},{"lat":-6.156929984848373,"lng":39.217835968252523},{"lat":-6.156788691080966,"lng":39.217766169154942},{"lat":-6.156689999773614,"lng":39.217709844786633},{"lat":-6.156604705461532,"lng":39.217641482993507},{"lat":-6.156563442658522,"lng":39.217574378841789},{"lat":-6.156552725046819,"lng":39.217480594726126},{"lat":-6.156526020330052,"lng":39.217390673366189},{"lat":-6.156507443135014,"lng":39.21729006205436},{"lat":-6.156488687312431,"lng":39.217196277938704},{"lat":-6.156497975910362,"lng":39.217107704051692},{"lat":-6.156507443135009,"lng":39.21702056746912},{"lat":-6.156492706417317,"lng":39.216949510730153},{"lat":-6.156440725991655,"lng":39.216889054111533},{"lat":-6.156391424964669,"lng":39.216848899418338},{"lat":-6.156300057288428,"lng":39.216808654893605},{"lat":-6.156932753562764,"lng":39.218168614402231},{"lat":-6.15689399155973,"lng":39.218036472223936},{"lat":-6.156929984848373,"lng":39.217835968252523},{"lat":-6.15597424163467,"lng":39.216316018791794},{"lat":-6.15600228608203,"lng":39.216167976432963},{"lat":-6.156392675353099,"lng":39.215834970957147},{"lat":-6.156570051852288,"lng":39.215765261691097},{"lat":-6.156607384864227,"lng":39.215566823844831},{"lat":-6.156603455073603,"lng":39.215427315481215},{"lat":-6.156416700672906,"lng":39.215332094061097},{"lat":-6.156329977301446,"lng":39.215277117165705},{"lat":-6.156284695370663,"lng":39.215062599475857},{"lat":-6.15620333078708,"lng":39.21477684538398},{"lat":-6.156239413436004,"lng":39.214676323903689},{"lat":-6.156332746018977,"lng":39.214441594119947},{"lat":-6.156478059012671,"lng":39.214366494962192},{"lat":-6.156596756566826,"lng":39.214280705852559},{"lat":-6.156510033224745,"lng":39.214095563072505},{"lat":-6.156398034160571,"lng":39.214020463914757},{"lat":-6.156320688700562,"lng":39.213862270593218},{"lat":-6.156252721144997,"lng":39.21370201114653},{"lat":-6.156154029738067,"lng":39.213646405430453},{"lat":-6.156095350766149,"lng":39.213591967524231},{"lat":-6.15599201502665,"lng":39.213346547788603},{"lat":-6.15581999714775,"lng":39.213304955790953},{"lat":-6.155623328663449,"lng":39.21329228954545},{"lat":-6.155375304771767,"lng":39.213187725646371},{"lat":-6.155355298518349,"lng":39.213099151759366},{"lat":-6.155347349604953,"lng":39.213014710122657},{"lat":-6.155386022407217,"lng":39.212971770652075},{"lat":-6.155395311024438,"lng":39.212911403864986},{"lat":-6.155403349250752,"lng":39.212856426969594},{"lat":-6.155382003293945,"lng":39.212767853082575},{"lat":-6.15533270216872,"lng":39.212652599231625},{"lat":-6.155284740743586,"lng":39.212566810121984},{"lat":-6.155229991476436,"lng":39.212525218124334},{"lat":-6.155158004666363,"lng":39.212503658557516},{"lat":-6.155102004994699,"lng":39.21247149887035},{"lat":-6.155059313056046,"lng":39.212446076547806},{"lat":-6.155059313056046,"lng":39.212446076547806},{"lat":-6.154997329356572,"lng":39.212184487137073},{"lat":-6.154925342514985,"lng":39.212099416679671},{"lat":-6.154865323701623,"lng":39.21202162257606},{"lat":-6.154817362234291,"lng":39.211954518424335},{"lat":-6.154761362526733,"lng":39.211916250193227},{"lat":-6.154705988009461,"lng":39.211914273899609},{"lat":-6.154661331136507,"lng":39.211936372455597},{"lat":-6.15458603964019,"lng":39.211930353743192},{"lat":-6.154512623722482,"lng":39.211897565235319},{"lat":-6.154441351325502,"lng":39.211907626366504},{"lat":-6.154384637067953,"lng":39.21195245229918},{"lat":-6.154313989850445,"lng":39.212002218965921},{"lat":-6.15424128840571,"lng":39.212057106029782},{"lat":-6.154193326882053,"lng":39.212113520229622},{"lat":-6.154138041619428,"lng":39.212196614393399},{"lat":-6.154076593695583,"lng":39.212267671132381},{"lat":-6.154003356335181,"lng":39.212310610602962},{"lat":-6.153958610089306,"lng":39.212313305548811},{"lat":-6.153907343926714,"lng":39.212322648027765},{"lat":-6.153849915101079,"lng":39.212323995500697},{"lat":-6.15357661453942,"lng":39.212351483948382},{"lat":-6.153431300752188,"lng":39.212345465235984},{"lat":-6.153273929537666,"lng":39.212311958075887},{"lat":-6.153204621882432,"lng":39.212273061024078},{"lat":-6.153119952208871,"lng":39.212229492732803},{"lat":-6.153043945982008,"lng":39.212187900735145},{"lat":-6.15296793974425,"lng":39.212107411685693},{"lat":-6.152909260420492,"lng":39.212047763550835},{"lat":-6.152873177545419,"lng":39.212015603863655},{"lat":-6.152865943107296,"lng":39.211933048689048},{"lat":-6.152855939933441,"lng":39.211856602058369},{"lat":-6.152861209462547,"lng":39.211757428051001},{"lat":-6.152853885710229,"lng":39.211685023839095},{"lat":-6.152818606657939,"lng":39.211583065054349},{"lat":-6.152761892227203,"lng":39.211443556690725},{"lat":-6.152718574902,"lng":39.211343664031133},{"lat":-6.152655251218207,"lng":39.211215564271619},{"lat":-6.152614613307157,"lng":39.211082793272624},{"lat":-6.152569241745613,"lng":39.210970773356699},{"lat":-6.152537892495148,"lng":39.210884265594835},{"lat":-6.152515921224474,"lng":39.210807190143456},{"lat":-6.152388648602124,"lng":39.210492689962486},{"lat":-6.152339257885026,"lng":39.210374651334156},{"lat":-6.152302639086399,"lng":39.210233885329124},{"lat":-6.152268610395646,"lng":39.210135250310934},{"lat":-6.152249229224356,"lng":39.20999520295814},{"lat":-6.152250658250847,"lng":39.209827577326124},{"lat":-6.152247889512027,"lng":39.209649171910691},{"lat":-6.152247889512029,"lng":39.209482893751606},{"lat":-6.152243245175939,"lng":39.20935344651916},{"lat":-6.152242619976835,"lng":39.20927098117609},{"lat":-6.152236635928336,"lng":39.209203877024365},{"lat":-6.152227883140871,"lng":39.209078472210706},{"lat":-6.152257892697338,"lng":39.208944353738772},{"lat":-6.152253248361316,"lng":39.208755977023699},{"lat":-6.152237261127457,"lng":39.208605778708197},{"lat":-6.15218126114801,"lng":39.208488458732084},{"lat":-6.152124635963435,"lng":39.208408688334856},{"lat":-6.152065242033067,"lng":39.208296668418932},{"lat":-6.152004508383143,"lng":39.208200818178113},{"lat":-6.151951187805349,"lng":39.208071370945675},{"lat":-6.151933235649822,"lng":39.207999595554469},{"lat":-6.151957886370675,"lng":39.207890989236617},{"lat":-6.151959940597382,"lng":39.207748157106444},{"lat":-6.151956546657625,"lng":39.207593916372161},{"lat":-6.151954492430917,"lng":39.207503366191517},{"lat":-6.151928501996752,"lng":39.207402215890525},{"lat":-6.151889918257091,"lng":39.207334393086583},{"lat":-6.151849905487048,"lng":39.207260012581052},{"lat":-6.151834543440621,"lng":39.207246627683325}]');
			
			
			


			var shipRoute = JSON.parse('[{"lat":-6.181202123597878,"lng":39.220038098340012},{"lat":-6.180932856053915,"lng":39.21956998624546},{"lat":-6.18044879929526,"lng":39.218844506822002},{"lat":-6.180160776382776,"lng":39.218365704775572},{"lat":-6.179419507390905,"lng":39.217217657842461},{"lat":-6.178827563165937,"lng":39.216321857841137},{"lat":-6.178695474133414,"lng":39.21606700579504},{"lat":-6.178650194112646,"lng":39.215934324627568},{"lat":-6.178272860455624,"lng":39.215400455854223},{"lat":-6.177984836358858,"lng":39.214855986960508},{"lat":-6.177567491397324,"lng":39.214299480641998},{"lat":-6.177384941946268,"lng":39.214071488222892},{"lat":-6.177082181220852,"lng":39.213589991230606},{"lat":-6.176754234894624,"lng":39.213066273419969},{"lat":-6.176619555353203,"lng":39.212861098209075},{"lat":-6.176572935503961,"lng":39.212780698991139},{"lat":-6.176546946275892,"lng":39.212659246764723},{"lat":-6.176514883961829,"lng":39.212545250555173},{"lat":-6.176494789195734,"lng":39.212428020410592},{"lat":-6.176432986621538,"lng":39.212189427871131},{"lat":-6.176364217852741,"lng":39.211929096101798},{"lat":-6.176293752182977,"lng":39.2116454979666},{"lat":-6.176242220248701,"lng":39.211464397605319},{"lat":-6.176148176688477,"lng":39.211057011623978}]');
			var shipRoute2 = JSON.parse('[{"lat":-6.165760502752983,"lng":39.195419408652604},{"lat":-6.165797924430343,"lng":39.195509869001718},{"lat":-6.16583525679321,"lng":39.195563588255702},{"lat":-6.165887950793706,"lng":39.195680548905699},{"lat":-6.16594225240232,"lng":39.195790592528006},{"lat":-6.165972261183649,"lng":39.195856618701377},{"lat":-6.166020221643128,"lng":39.195934412804988},{"lat":-6.166071486635975,"lng":39.196000349146843},{"lat":-6.166128556892237,"lng":39.196069788918308},{"lat":-6.166179911186437,"lng":39.196131143852213},{"lat":-6.166259934563667,"lng":39.196231755164028},{"lat":-6.166346209753721,"lng":39.196326707089561},{"lat":-6.166442487847767,"lng":39.196453369544628},{"lat":-6.166503487781431,"lng":39.196516341446042},{"lat":-6.166561897667422,"lng":39.196590452456981},{"lat":-6.166652549083217,"lng":39.196698789280241},{"lat":-6.166744540159293,"lng":39.196814043131198},{"lat":-6.166810184266908,"lng":39.196896957631928},{"lat":-6.166839210570423,"lng":39.196920762986956},{"lat":-6.166897263172665,"lng":39.196989753600782},{"lat":-6.166947545652215,"lng":39.197063595117129},{"lat":-6.167021495720088,"lng":39.197192952518037}]');
			var shipRoute3 = JSON.parse('[{"lat":-6.168027501415917,"lng":39.198475746743767},{"lat":-6.16759014281765,"lng":39.19769277514213},{"lat":-6.167448048084137,"lng":39.19760240462454},{"lat":-6.167396961847571,"lng":39.197557129534225},{"lat":-6.167161447088408,"lng":39.197385281820374},{"lat":-6.16710044723044,"lng":39.197252510821386}]');
			
			
			var carRoute = JSON.parse('[{"lat":-6.176148176688477,"lng":39.211057011623978},{"lat":-6.176107629887185,"lng":39.210939242490227},{"lat":-6.17602894764939,"lng":39.210689870167357},{"lat":-6.176043505203911,"lng":39.210600667459637},{"lat":-6.176038861076121,"lng":39.210505446039519},{"lat":-6.176027518686951,"lng":39.210359918963498},{"lat":-6.175939548179963,"lng":39.210132645196616},{"lat":-6.175892213789466,"lng":39.209996460599541},{"lat":-6.17581085221399,"lng":39.20987590668841},{"lat":-6.175673493126268,"lng":39.209330719142486},{"lat":-6.175683495869889,"lng":39.209327305544399},{"lat":-6.175973486042262,"lng":39.209272328649014},{"lat":-6.176345552042525,"lng":39.209228760357732},{"lat":-6.176359484417677,"lng":39.209326676723705},{"lat":-6.17637752505675,"lng":39.20931661559252}]');
			var carRoute2 = JSON.parse('[{"lat":-6.175788703286794,"lng":39.215794816263937},{"lat":-6.175751550245524,"lng":39.215590269873751},{"lat":-6.175698499984947,"lng":39.215249449054951},{"lat":-6.17568617517618,"lng":39.215155754770819},{"lat":-6.175671528301608,"lng":39.215023163434886},{"lat":-6.175663847623329,"lng":39.214891919571876},{"lat":-6.175642949033024,"lng":39.21467767137662},{"lat":-6.175618924584138,"lng":39.214380598512157},{"lat":-6.175586237042281,"lng":39.214197521857251},{"lat":-6.175582486012785,"lng":39.214116044660983},{"lat":-6.175577931191174,"lng":39.213964229377972},{"lat":-6.175589720141114,"lng":39.213673265057437},{"lat":-6.175592220827443,"lng":39.213471952602269},{"lat":-6.17569323068268,"lng":39.21322428707844},{"lat":-6.175827553218983,"lng":39.213260129858277},{"lat":-6.176137548782719,"lng":39.213184312048298},{"lat":-6.17652354703853,"lng":39.212913380158604}]');
			var carRoute3 = JSON.parse('[{"lat":-6.174470215277481,"lng":39.215645606095258},{"lat":-6.174588194322015,"lng":39.215637880583813},{"lat":-6.174618202613772,"lng":39.215570776432088},{"lat":-6.174738950246787,"lng":39.215547689729284},{"lat":-6.174868896818148,"lng":39.215523884374257},{"lat":-6.174968477846094,"lng":39.215506097731627},{"lat":-6.174986518532569,"lng":39.215679742076048},{"lat":-6.17503724679618,"lng":39.215674891173521},{"lat":-6.175116197112253,"lng":39.215664650379281},{"lat":-6.175212562923289,"lng":39.215715944182001},{"lat":-6.175230514291159,"lng":39.215771999055725},{"lat":-6.175238909458006,"lng":39.215869556095583},{"lat":-6.175285886665794,"lng":39.215873868008948},{"lat":-6.175371535214552,"lng":39.215876562954804},{"lat":-6.175450932032033,"lng":39.215934324627568},{"lat":-6.175514252994937,"lng":39.215836408261602},{"lat":-6.175602938054358,"lng":39.215764004049703},{"lat":-6.175658221079866,"lng":39.215763285397472},{"lat":-6.175788703286794,"lng":39.215794816263937}]');
			var carRoute4 = JSON.parse('[{"lat":-6.174470215277481,"lng":39.215645606095258},{"lat":-6.174588194322015,"lng":39.215637880583813},{"lat":-6.174618202613772,"lng":39.215570776432088},{"lat":-6.174738950246787,"lng":39.215547689729284},{"lat":-6.174868896818148,"lng":39.215523884374257},{"lat":-6.174968477846094,"lng":39.215506097731627},{"lat":-6.174986518532569,"lng":39.215679742076048},{"lat":-6.17503724679618,"lng":39.215674891173521},{"lat":-6.175116197112253,"lng":39.215664650379281},{"lat":-6.175212562923289,"lng":39.215715944182001},{"lat":-6.175230514291159,"lng":39.215771999055725},{"lat":-6.175238909458006,"lng":39.215869556095583},{"lat":-6.175285886665794,"lng":39.215873868008948},{"lat":-6.175371535214552,"lng":39.215876562954804},{"lat":-6.175450932032033,"lng":39.215934324627568},{"lat":-6.175514252994937,"lng":39.215836408261602},{"lat":-6.175602938054358,"lng":39.215764004049703},{"lat":-6.175658221079866,"lng":39.215763285397472},{"lat":-6.175788703286794,"lng":39.215794816263937}]');
			
			
			
			var shipRoute4 = JSON.parse('[{"lat":-6.168438244847511,"lng":39.225393764232408},{"lat":-6.168570247126517,"lng":39.225342829755803},{"lat":-6.168652949484849,"lng":39.225305190345388} ,{"lat":-6.168730203836,"lng":39.225282373137169},{"lat":-6.168764945962498,"lng":39.225244913389822},{"lat":-6.168892929149215,"lng":39.225167119286219},{"lat":-6.168913649383096,"lng":39.225153644556961},{"lat":-6.168974202475749,"lng":39.225132893473898}]');
			var shipRoute5 = JSON.parse('[{"lat":-6.168987599176727,"lng":39.225191194135832},{"lat":-6.168978935976807,"lng":39.2251717905257},{"lat":-6.168974202475749,"lng":39.225132893473898},{"lat":-6.168952231885406,"lng":39.225051775603745},{"lat":-6.168949641856408,"lng":39.225002188600051},{"lat":-6.168911595222013,"lng":39.224963291548256},{"lat":-6.168878907266334,"lng":39.224951882944147},{"lat":-6.168842914788216,"lng":39.224896906048755},{"lat":-6.168820229701524,"lng":39.22484121050114},{"lat":-6.168790935572336,"lng":39.224778867420433},{"lat":-6.168768250483418,"lng":39.224728561764515},{"lat":-6.16872761380591,"lng":39.224646096421431},{"lat":-6.168685637454454,"lng":39.224586358455042},{"lat":-6.168654199844386,"lng":39.224493203160073},{"lat":-6.168630175078614,"lng":39.224428793954203},{"lat":-6.168570961617797,"lng":39.224336267479941},{"lat":-6.168506210842367,"lng":39.224259192028555},{"lat":-6.168468878667571,"lng":39.224255149609789},{"lat":-6.168439584518993,"lng":39.224257215734937},{"lat":-6.16836492015737,"lng":39.224241674880531},{"lat":-6.168320175122209,"lng":39.224224966216234},{"lat":-6.16827158969054,"lng":39.22420080153509},{"lat":-6.16822157527094,"lng":39.224186069164432},{"lat":-6.168186922420304,"lng":39.22418211657719},{"lat":-6.168099486480418,"lng":39.224128397323192},{"lat":-6.168042952305282,"lng":39.224081505265367},{"lat":-6.168030180760911,"lng":39.224035152196699},{"lat":-6.168014194002173,"lng":39.223968227708035},{"lat":-6.167975522120085,"lng":39.223905076143559},{"lat":-6.167928187018082,"lng":39.223858902737959},{"lat":-6.167902911858103,"lng":39.223804464831744},{"lat":-6.167893534148267,"lng":39.223744906528395},{"lat":-6.167906930876569,"lng":39.223695229693192},{"lat":-6.167936225054565,"lng":39.223606655806179},{"lat":-6.167967484084194,"lng":39.223486640884211},{"lat":-6.167987489862186,"lng":39.223375429452048},{"lat":-6.167979541137986,"lng":39.223338508693871},{"lat":-6.167954891161048,"lng":39.223310391425478},{"lat":-6.167947478305452,"lng":39.223281465673324},{"lat":-6.167950961454473,"lng":39.223252719584231},{"lat":-6.167982220483241,"lng":39.223187591726131},{"lat":-6.168022946529375,"lng":39.223133243651439},{"lat":-6.168055545226331,"lng":39.223078985408286},{"lat":-6.168080195198586,"lng":39.22303874088356},{"lat":-6.168138962156806,"lng":39.222979811400918},{"lat":-6.168204963337678,"lng":39.222947561882215},{"lat":-6.168302938011848,"lng":39.22292411585331},{"lat":-6.168347593737013,"lng":39.222917378488674},{"lat":-6.16841020105737,"lng":39.222883871328577},{"lat":-6.168438244847519,"lng":39.222854406587253},{"lat":-6.16848165020135,"lng":39.222800058512568},{"lat":-6.16855560005523,"lng":39.222707442206783},{"lat":-6.168581589675351,"lng":39.222677977465452},{"lat":-6.168585608688662,"lng":39.222641775359499},{"lat":-6.16857292646879,"lng":39.222596140943068},{"lat":-6.168552920712898,"lng":39.222525802856325},{"lat":-6.168557654217698,"lng":39.222458069883899},{"lat":-6.168546222356951,"lng":39.222372909594966},{"lat":-6.168550955861813,"lng":39.22226232698349},{"lat":-6.168537648461218,"lng":39.222185161700587},{"lat":-6.168522912077616,"lng":39.22207116549103},{"lat":-6.168519607555166,"lng":39.221996695153976},{"lat":-6.168517642704001,"lng":39.221924290942077},{"lat":-6.168514248870092,"lng":39.221868685225992}]');
			var shipRoute6 = JSON.parse('[{"lat":-6.168514248870092,"lng":39.221868685225992},{"lat":-6.168496922454634,"lng":39.221761965370241},{"lat":-6.16851219470747,"lng":39.221637997861023},{"lat":-6.16853487980736,"lng":39.221554813865716},{"lat":-6.168573640960064,"lng":39.221489057186929},{"lat":-6.168604185460886,"lng":39.221389883179562},{"lat":-6.168636962744898,"lng":39.22129331428652},{"lat":-6.16864089244639,"lng":39.221136378606374},{"lat":-6.168656879186233,"lng":39.221015106043019},{"lat":-6.168675634578726,"lng":39.220939288233041},{"lat":-6.168684208472226,"lng":39.220870926439922},{"lat":-6.168638927595638,"lng":39.220788371265307},{"lat":-6.168590252881786,"lng":39.220668356343353},{"lat":-6.168548187208025,"lng":39.220493364526},{"lat":-6.168556225235124,"lng":39.220439016451316},{"lat":-6.168558190086164,"lng":39.220382692083007},{"lat":-6.168528895942521,"lng":39.220319001529361},{"lat":-6.168482186069899,"lng":39.220275343406556},{"lat":-6.168431635801563,"lng":39.220235907365584},{"lat":-6.168395643293095,"lng":39.220150028424413},{"lat":-6.168359650782153,"lng":39.220053459531371},{"lat":-6.168292220637255,"lng":39.219884486426437},{"lat":-6.168282932245771,"lng":39.219762495210844},{"lat":-6.168265605822739,"lng":39.219717489615114},{"lat":-6.16819219179723,"lng":39.219715513321482},{"lat":-6.168166916649843,"lng":39.21971614214219},{"lat":-6.168118241892647,"lng":39.219667183959203},{"lat":-6.168007495639427,"lng":39.219532526498107},{"lat":-6.167940958564883,"lng":39.219476112298274},{"lat":-6.167882906076915,"lng":39.219376848459369},{"lat":-6.167832891620654,"lng":39.219249467352086},{"lat":-6.167792880052237,"lng":39.219152269638336},{"lat":-6.167771534593746,"lng":39.219076451828364},{"lat":-6.167773499447703,"lng":39.219017522345723},{"lat":-6.167782251978879,"lng":39.218903526136167},{"lat":-6.167787878605973,"lng":39.218803543645052},{"lat":-6.167777250532502,"lng":39.21873078010703},{"lat":-6.167753225727007,"lng":39.218631606099663},{"lat":-6.167730897839847,"lng":39.218618490696514},{"lat":-6.167702228831383,"lng":39.21862181446307},{"lat":-6.167665521780885,"lng":39.21863726548596},{"lat":-6.167616936289233,"lng":39.218624509408919},{"lat":-6.16752092634318,"lng":39.21862181446307},{"lat":-6.167386244454673,"lng":39.218588307302973},{"lat":-6.167287555118075,"lng":39.218519855678323},{"lat":-6.167195474824584,"lng":39.218489043464082},{"lat":-6.167007563099394,"lng":39.218317375413285},{"lat":-6.166880919132981,"lng":39.218168614402231}]');

			
			var planeRoute2 = JSON.parse('[{"lat":50,"lng":0},{"lat":51.15611417450841,"lng":-2.1906730905175213}]');
			
			
			var seqGroup = L.motion.seq([
					<!-- L.motion.polyline(trackRoute, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					<!-- L.motion.polyline(trackRoute2, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					<!-- L.motion.polyline(trackRoute3, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute4, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					<!-- L.motion.polyline(trackRoute5, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					
					//nimeifunga
					<!-- L.motion.polyline(trackRoute6, { -->
					<!-- color: "steelblue" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutQuad -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(1000), -->
					
					L.motion.polyline(trackRoute7, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute7, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					L.motion.polyline(trackRoute7, {
					color: "steelblue"
					}, {
						easing: L.Motion.Ease.easeInOutQuad
					}, {
						removeOnEnd: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x fa-flip-horizontal' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(1000),
					
					//orange
					<!-- L.motion.polyline(carRoute3, { -->
						<!-- colors: "#FF9900" -->
					<!-- }, { -->
						<!-- easing: L.Motion.Ease.easeInOutElastic -->
					<!-- }, { -->
						<!-- removeOnEnd: true, -->
						<!-- icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)}) -->
					<!-- }).motionDuration(2000), -->
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
						
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					
					L.motion.polyline(shipRoute4, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute5, {
						color: "#FF9900"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
					
					L.motion.polyline(shipRoute6, {
						color: "#009FF"
					}, {
						easing: L.Motion.Ease.easeInOutQuart
					}, {
						removeOnEnd: true,
						showMarker: true,
						icon: L.divIcon({html: "<i class='fa fa-tint fa-2x' aria-hidden='true'></i>", iconSize: L.point(0.5, 0)})
					}).motionDuration(2000),
							
							
				]).addTo(map1);


			seqGroup.on("click", function(){
				seqGroup.motionStart();
			});

			seqGroup.on("dblclick", function(e){
				seqGroup.motionToggle();
			});

			setTimeout(function () {
				seqGroup.motionStart();
			}, 1000);

</script>

</body>
</html>