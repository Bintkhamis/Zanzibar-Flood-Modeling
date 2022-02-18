<?php
if(isset($_POST["sub"])) {
	include("../connection.php");
	$sql = "INSERT INTO comments( Email,Comments) VALUES ( :Email,:Comments)";
	
	$pdo_statement = $con->prepare( $sql );	
	$result = $pdo_statement->execute( array( ':Email'=>$_POST['Email'],':Comments'=>$_POST['Comments']) );
	if (!empty($result) ){
	header('location:proximity.php');
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
	
	
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css"><link rel="stylesheet" href="css/L.Control.Locate.min.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
	
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
		
		#Testimonial{
			margin-top:800px';
			margin-left:45px;
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
                                            <li><a href="../index.php">Home</a></li>
                                            <li><a href="../drainage.php">Drainage</a></li>
											<li><a href="proximity.php">Proximity</a>
                                                <ul class="submenu">
                                                    <li><a href="proximity.php">Proximity</a></li>
													<li><a href="../flood_event.php">Flood Events</a></li>
                                                </ul>
                                            </li>
											<li><a href="../contact.php">Contact</a>
                                                <ul class="submenu">
                                                    <li><a href="https://bintkhamisfloodsimulation.blogspot.com/2021/11/flood-simulation-model-flood-simulation.html" target="_blank">Blog</a></li>					
													<li><a href="../contact.php">Contacts</a></li>
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
                                    <h1 data-animation="fadeInUp" data-delay=".3s"style="color:#3498db ">Proximity</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">The Proximity area for flood in<br> Zanzibar City.</p>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-7 col-lg-12 col-md-12 ">                
	  <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script><script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="data/AnalysisSummary_5.js"></script>
        <script src="data/Numberofstructures_6.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.179869020784659,39.20430475582207],[-6.157509674630811,39.23248596946504]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot;| Map Tiles by @ Bintkhamis, 2022 OpenSkiesFellows');
		var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_terrain_0');
        map.getPane('pane_terrain_0').style.zIndex = 400;
        var layer_terrain_0 = L.tileLayer('http://mt0.google.com/vt/lyrs=t&hl=en&x={x}&y={y}&z={z}', {
            pane: 'pane_terrain_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_terrain_0;
        map.addLayer(layer_terrain_0);
        map.createPane('pane_OpenStreetMap_1');
        map.getPane('pane_OpenStreetMap_1').style.zIndex = 401;
        var layer_OpenStreetMap_1 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_1',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_OpenStreetMap_1;
        map.addLayer(layer_OpenStreetMap_1);
        map.createPane('pane_satellite_2');
        map.getPane('pane_satellite_2').style.zIndex = 402;
        var layer_satellite_2 = L.tileLayer('http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}', {
            pane: 'pane_satellite_2',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_satellite_2;
        map.addLayer(layer_satellite_2);
        map.createPane('pane_googlehybrid_3');
        map.getPane('pane_googlehybrid_3').style.zIndex = 403;
        var layer_googlehybrid_3 = L.tileLayer('http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}', {
            pane: 'pane_googlehybrid_3',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_googlehybrid_3;
        map.addLayer(layer_googlehybrid_3);
        map.createPane('pane_flood_3m_4');
        map.getPane('pane_flood_3m_4').style.zIndex = 404;
        var img_flood_3m_4 = 'data/flood_3m_4.png';
        var img_bounds_flood_3m_4 = [[-6.181793111212982,39.20208007618514],[-6.154327160678496,39.23245932820178]];
        var layer_flood_3m_4 = new L.imageOverlay(img_flood_3m_4,
                                              img_bounds_flood_3m_4,
                                              {pane: 'pane_flood_3m_4'});
        bounds_group.addLayer(layer_flood_3m_4);
        map.addLayer(layer_flood_3m_4);
        function pop_AnalysisSummary_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_AnalysisSummary_5_0() {
            return {
                pane: 'pane_AnalysisSummary_5',
                opacity: 1,
                color: 'rgba(255,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 8.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_AnalysisSummary_5');
        map.getPane('pane_AnalysisSummary_5').style.zIndex = 405;
        map.getPane('pane_AnalysisSummary_5').style['mix-blend-mode'] = 'normal';
        var layer_AnalysisSummary_5 = new L.geoJson(json_AnalysisSummary_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_AnalysisSummary_5',
            layerName: 'layer_AnalysisSummary_5',
            pane: 'pane_AnalysisSummary_5',
            onEachFeature: pop_AnalysisSummary_5,
            style: style_AnalysisSummary_5_0,
        });
        bounds_group.addLayer(layer_AnalysisSummary_5);
        map.addLayer(layer_AnalysisSummary_5);
        function pop_Numberofstructures_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_Numberofstructures_6_0(feature) {
            switch(String(feature.properties['hazard_class'])) {
                case 'high':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,59,32,1.0)',
                interactive: true,
            }
                    break;
                case 'medium':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,178,76,1.0)',
                interactive: true,
            }
                    break;
                case 'low':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,178,1.0)',
                interactive: true,
            }
                    break;
                case 'use_caution':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,217,106,1.0)',
                interactive: true,
            }
                    break;
                case 'not exposed':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(140,140,140,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_Numberofstructures_6');
        map.getPane('pane_Numberofstructures_6').style.zIndex = 406;
        map.getPane('pane_Numberofstructures_6').style['mix-blend-mode'] = 'normal';
        var layer_Numberofstructures_6 = new L.geoJson(json_Numberofstructures_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Numberofstructures_6',
            layerName: 'layer_Numberofstructures_6',
            pane: 'pane_Numberofstructures_6',
            onEachFeature: pop_Numberofstructures_6,
            style: style_Numberofstructures_6_0,
        });
        bounds_group.addLayer(layer_Numberofstructures_6);
        map.addLayer(layer_Numberofstructures_6);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'Number of structures<br /><table><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_High15m45000.png" /></td><td>High > 1.5 m (4,500)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Medium0715m2641.png" /></td><td>Medium > 0.7 - 1.5 m (264)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Low01507m1252.png" /></td><td>Low > 0.15 - 0.7 m (125)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Usecaution015m323.png" /></td><td>Use caution <= 0.15 m (32)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Notexposed2564.png" /></td><td>Not exposed (256)</td></tr></table>': layer_Numberofstructures_6,'<img src="legend/AnalysisSummary_5.png" /> Analysis Summary': layer_AnalysisSummary_5,"flood_3m": layer_flood_3m_4,"google hybrid": layer_googlehybrid_3,"satellite": layer_satellite_2,"OpenStreetMap": layer_OpenStreetMap_1,"terrain": layer_terrain_0,}).addTo(map);
        setBounds();
        L.ImageOverlay.include({
            getBounds: function () {
                return this._bounds;
            }
        });
        </script>
					</div>
					
					
					
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
								background: #35424a;
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
					<div><strong>Proximity</strong></div> <br/>
					<i style="background: "><hr style="width:26px; height:5px;background: #2980B9"></i><span> &nbsp; &nbsp; High Risk</span><br><br>
					<i style="background: "><hr style="width:26px; height:5px;background: #5499C7"></i><span>&nbsp; &nbsp; Medium Risk</span><br><br>
					<i style="background: "><hr style="width:26px; height:5px;background:  #EBF5FB"></i><span>&nbsp; &nbsp; Low Risk</span><br>
					
					<img src="Images/t3.png"><span>&nbsp; &nbsp; Risk Analysis</span>
					<br>
					<hr>
					<div><strong>Building Proximity</strong></div> <br/>
					<i style="background: red"></i><span>High</span><br><br>
					<i style="background: orange"></i><span>Medium</span><br><br>
					<i style="background: #F9E79F"></i><span>Low</span><br><br>
					<i style="background: green"></i><span>Use caution</span><br><br>
					<i style="background: gray"></i><span>Not exposed</span><br><br>
					<img src="Images/water.png"><span>Water Path</span>
				</div>-->
				

					
					
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
                <div class="col-lg-7 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
        <div id="map1">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script><script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="data/AnalysisSummary_5.js"></script>
        <script src="data/Numberofstructures_6.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
            highlightLayer.openPopup();
        }
        var map1 = L.map('map1', {
        zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.179869020784659,39.20430475582207],[-6.157509674630811,39.23248596946504]]);
        var hash = new L.Hash(map1);
        map1.attributionControl.setPrefix('<a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot;| Map Tiles by @ Bintkhamis, 2022 OpenSkiesFellows');
		var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map1);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map1.createPane('pane_terrain_0');
        map1.getPane('pane_terrain_0').style.zIndex = 400;
        var layer_terrain_0 = L.tileLayer('http://mt0.google.com/vt/lyrs=t&hl=en&x={x}&y={y}&z={z}', {
            pane: 'pane_terrain_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_terrain_0;
        map1.addLayer(layer_terrain_0);
        map1.createPane('pane_OpenStreetMap_1');
        map1.getPane('pane_OpenStreetMap_1').style.zIndex = 401;
        var layer_OpenStreetMap_1 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_1',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_OpenStreetMap_1;
        map1.addLayer(layer_OpenStreetMap_1);
        map1.createPane('pane_satellite_2');
        map1.getPane('pane_satellite_2').style.zIndex = 402;
        var layer_satellite_2 = L.tileLayer('http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}', {
            pane: 'pane_satellite_2',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_satellite_2;
        map1.addLayer(layer_satellite_2);
        map1.createPane('pane_googlehybrid_3');
        map1.getPane('pane_googlehybrid_3').style.zIndex = 403;
        var layer_googlehybrid_3 = L.tileLayer('http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}', {
            pane: 'pane_googlehybrid_3',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_googlehybrid_3;
        map1.addLayer(layer_googlehybrid_3);
        map1.createPane('pane_flood_3m_4');
        map1.getPane('pane_flood_3m_4').style.zIndex = 404;
        var img_flood_3m_4 = 'data/flood_3m_4.png';
        var img_bounds_flood_3m_4 = [[-6.181793111212982,39.20208007618514],[-6.154327160678496,39.23245932820178]];
        var layer_flood_3m_4 = new L.imageOverlay(img_flood_3m_4,
                                              img_bounds_flood_3m_4,
                                              {pane: 'pane_flood_3m_4'});
        bounds_group.addLayer(layer_flood_3m_4);
        map1.addLayer(layer_flood_3m_4);
        function pop_AnalysisSummary_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_AnalysisSummary_5_0() {
            return {
                pane: 'pane_AnalysisSummary_5',
                opacity: 1,
                color: 'rgba(255,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 8.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map1.createPane('pane_AnalysisSummary_5');
        map1.getPane('pane_AnalysisSummary_5').style.zIndex = 405;
        map1.getPane('pane_AnalysisSummary_5').style['mix-blend-mode'] = 'normal';
        var layer_AnalysisSummary_5 = new L.geoJson(json_AnalysisSummary_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_AnalysisSummary_5',
            layerName: 'layer_AnalysisSummary_5',
            pane: 'pane_AnalysisSummary_5',
            onEachFeature: pop_AnalysisSummary_5,
            style: style_AnalysisSummary_5_0,
        });
        bounds_group.addLayer(layer_AnalysisSummary_5);
        map1.addLayer(layer_AnalysisSummary_5);
        function pop_Numberofstructures_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_Numberofstructures_6_0(feature) {
            switch(String(feature.properties['hazard_class'])) {
                case 'high':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,59,32,1.0)',
                interactive: true,
            }
                    break;
                case 'medium':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,178,76,1.0)',
                interactive: true,
            }
                    break;
                case 'low':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,178,1.0)',
                interactive: true,
            }
                    break;
                case 'use_caution':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,217,106,1.0)',
                interactive: true,
            }
                    break;
                case 'not exposed':
                    return {
                pane: 'pane_Numberofstructures_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(140,140,140,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map1.createPane('pane_Numberofstructures_6');
        map1.getPane('pane_Numberofstructures_6').style.zIndex = 406;
        map1.getPane('pane_Numberofstructures_6').style['mix-blend-mode'] = 'normal';
        var layer_Numberofstructures_6 = new L.geoJson(json_Numberofstructures_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Numberofstructures_6',
            layerName: 'layer_Numberofstructures_6',
            pane: 'pane_Numberofstructures_6',
            onEachFeature: pop_Numberofstructures_6,
            style: style_Numberofstructures_6_0,
        });
        bounds_group.addLayer(layer_Numberofstructures_6);
        map1.addLayer(layer_Numberofstructures_6);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map1);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'Number of structures<br /><table><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_High15m45000.png" /></td><td>High > 1.5 m (4,500)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Medium0715m2641.png" /></td><td>Medium > 0.7 - 1.5 m (264)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Low01507m1252.png" /></td><td>Low > 0.15 - 0.7 m (125)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Usecaution015m323.png" /></td><td>Use caution <= 0.15 m (32)</td></tr><tr><td style="text-align: center;"><img src="legend/Numberofstructures_6_Notexposed2564.png" /></td><td>Not exposed (256)</td></tr></table>': layer_Numberofstructures_6,'<img src="legend/AnalysisSummary_5.png" /> Analysis Summary': layer_AnalysisSummary_5,"flood_3m": layer_flood_3m_4,"google hybrid": layer_googlehybrid_3,"satellite": layer_satellite_2,"OpenStreetMap": layer_OpenStreetMap_1,"terrain": layer_terrain_0,}).addTo(map1);
        setBounds();
        L.ImageOverlay.include({
            getBounds: function () {
                return this._bounds;
            }
        });
        </script>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
					<div class="about-caption">
							<!-- Section Tittle -->
							<div class="section-tittle mb-35">
								<h2 style="color:#3498db ">Proximity of Hazard for Flood</h2>
							</div>
							<p class="pera-top mb-40" style="color:#3498db ">Urban West</p>
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
 
<!--? video_start -->
<div class="container">
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="assets/img/gallery/kwere.jpg">
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
                            <img src="assets/img/gallery/blog01.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="blog_details.html">Picha Ya Kwanza</a></h3>
                            <P>Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, 
                            Maelezo, Maelezo, Maelezo, Maelezo.</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/blog02.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="blog_details.html">Picha Ya Pili</a></h3>
                            <P> Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, 
                            Maelezo, Maelezo, Maelezo, Maelezo.</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/blog03.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a>Picha Ya Tatu</a></h3>
                            <P>Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, 
                            Maelezo, Maelezo, Maelezo, Maelezo.</P>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/blog3.png" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="blog_details.html">Everyday diet plan</a></h3>
                            <P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
                            sem ut ipsum.</P>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Blog Area End -->

<!--? Testimonial Area Start -->
 <section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"I Latifa Khamis,graduated at The State University of Zanzibar in Information Technology.."                      </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="../assets/img/icon/le.png"height="100px"width="100px" alt="">
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
                                <p>"Is a fellowship program led by Open Map Development Tanzania in collaboration with Uhuru labs and the Humanitarian OpenStreetMap Team, designed to develop youth in urban settings, giving them power and responsibility to gain technical and social skills"</p>
							</div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="../assets/img/icon/la.png" alt=""height="100px"width="100px">
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
<!-- About Law End-->
</main>
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
                                <center><h4><strong>Subscribe Simulation Model</strong></h4></center>
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
<script src="assets/founder/js/founder_jquery-3.3.1.min.js"></script>
<script src="assets/founder/js/founder_beifa.pkgd.min.js"></script>
<script src="assets/founder/js/founder_jquery.slicknav.js"></script>
<script src="assets/founder/js/founder_owl.carousel.min.js"></script>
<script src="assets/founder/js/founder_main.js"></script>

<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script>
						var north = L.control({position: "topright"});
						north.onAdd = function(map1) {
							var div = L.DomUtil.create("div");
							div.innerHTML = '<img src="Images/noorth.jpg" style="width:50px">';
							return div;
						}
						north.addTo(map);
						
						var north = L.control({position: "topright"});
						north.onAdd = function(map1) {
							var div = L.DomUtil.create("div");
							div.innerHTML = '<img src="Images/noorth.jpg" style="width:50px">';
							return div;
						}
						north.addTo(map1);
</script>
				
</body>
</html>