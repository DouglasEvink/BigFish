<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Map</title>
  <meta name="description" content="Map">
  <meta name="author" content="Me">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="./js/util.js"></script>
<script type="text/javascript">
var stnlat = 42.899572;
var stnlon = -86.272291;
var stnid = "45029";
var map = null;
var stations = new Array();
var stnicon = null;
var otherstnicon = null;
var badstnicon = null;
function loadmap() {
	document.getElementById("stnmapcontainer").style.display = 'block';

	map = new google.maps.Map(document.getElementById("stnmap"), {
        center: new google.maps.LatLng(stnlat, stnlon),
        zoom: 7,
        maxZoom: 12,
        minZoom: 4,
        mapTypeId: google.maps.MapTypeId.TERRAIN,
        streetViewControl: false,
        mapTypeControl: false,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        }
    });

	stnicon = new google.maps.Marker({
        icon: './images/tiny_green_marker.png'
    });
	
	otherstnicon = new google.maps.Marker({
        icon: './images/tiny_active_marker.png'
    });

	badstnicon = new google.maps.Marker({
        icon: './images/tiny_inactive_marker.png'
    });

    downloadUrl('./mhldbcmapstations.xml', function (data) {
        var i, m, markers, st;

        markers = data.documentElement.getElementsByTagName('station');

        for (i = 0; i < markers.length; i += 1) {
            m = new google.maps.Marker({
                icon: (markers[i].getAttribute('data') === 'y') ? otherstnicon.icon : badstnicon.icon,
                position: new google.maps.LatLng(parseFloat(markers[i].getAttribute('lat')),
                    parseFloat(markers[i].getAttribute('lon'))),
                map: map,
                station: markers[i].getAttribute('id'),
                title: markers[i].getAttribute('name')
            });

            google.maps.event.addListener(m, 'click', function () {
                location.href = './station_page.php?station=' + this.station;
            });
        }
    });

}

function changeMapType(map_type) {
    map.setMapTypeId(map_type);
}

window.onload=loadmap;

</body>
</html>
