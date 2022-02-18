(function() {

  var baseLayers = {
    Zanzibar: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: ''
    }),
    Imagery: L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
      maxZoom: 19,
      attribution: ''
    })
  };

  var groups = {
    blocked: new L.LayerGroup(),
    not_blocked: new L.LayerGroup(),
	not_filled: new L.LayerGroup(),
    solid_waste: new L.LayerGroup(),
    metal: new L.LayerGroup(),
	grass: new L.LayerGroup(),
	dirt: new L.LayerGroup(),
	concrete: new L.LayerGroup()
  };
  
  
  
  // L.marker([-6.17626,39.19946], {icon: greenIcon}).addTo(groups.blocked);


  L.circle([-6.17626,39.19946]).bindPopup('<b>Solid Waste:</b> Frequent disposing of trash and other garbage materials near the drainage systems can block the water to pass.	</b> <div><center><img style="width:250px; height:220px"  src="Images/solid_waste/sw.jpg" alt="image" /></center> </div>').addTo(groups.blocked);
  L.marker([-6.177407180116619,39.198098274661376]).bindPopup('Not Blocked Drainage').addTo(groups.not_blocked);
  L.marker([-6.169376192669119, 39.191989191740198]).bindPopup('Not Filled').addTo(groups.not_filled);
  L.marker([-6.168036343254395,39.198455714312928]).bindPopup('Solid Waste').addTo(groups.solid_waste);

  L.marker([-6.185092689399448,39.211182057111522]).bindPopup('Metal').addTo(groups.metal);
  L.marker([-6.185338020126504,39.207851373532591]).bindPopup('Grass').addTo(groups.grass);

  L.marker([-6.181779418460788,39.207701175217082]).bindPopup('Dirt').addTo(groups.dirt);
  L.marker([-6.180766115519355,39.20724114796009]).bindPopup('Concrete').addTo(groups.concrete);

  L.marker([-6.177773529278448 ,39.205635229726667]).bindPopup('Solid Waste').addTo(groups.solid_waste);
  L.marker([-6.174962761984894 ,39.210173069384396]).bindPopup('Grass').addTo(groups.grass);
  
  


  window.ExampleData = {
    LayerGroups: groups,
    BaseLayers: baseLayers
  };

}());
