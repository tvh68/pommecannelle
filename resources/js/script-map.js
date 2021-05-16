// Map  avec OpenStreetMap******************************************************************************************

//On initialise la carte (13 : zoom par défaut)
var mymap = L.map('macarte').setView([50.6847299, 4.3748208], 20);
//On charge les tuiles (couches)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    minzoom: 1,
    maxzoom: 20
}).addTo(mymap);
//On personnalise le marqueur
var icone= L.icon({
    iconUrl: "/images/location-pin.gif",
    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -35]
})

//On ajoute le marqueur et une popup
var marker = L.marker([50.6847299, 4.3748208],{icon: icone}).addTo(mymap);
marker.bindPopup("<strong>Pomme Cannelle</strong><br>Restaurant et Pâtisserie.").openPopup();