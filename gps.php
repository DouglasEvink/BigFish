<script language="JavaScript">

navigator.geolocation.getCurrentPosition(foundLocation, noLocation);

 function foundLocation(position)
 {
   var lat = position.coords.latitude;
   var long = position.coords.longitude;
   // alert('Found location: ' + lat + ', ' + long);
   console.log(lat); 
   window.location="gps2.php?lat="+lat+"&long="+long;

 }
 function noLocation()
 {
   alert('Could not find location');
 }
</script>

