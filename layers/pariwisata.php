<?php
$url=file_get_contents("http://localhost:8080/geoserver/SHP_File/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=SHP_File%3Apoint&outputFormat=application%2Fjson"); 
# url yang ada di dalam ("") itu link address dari halaman GeoJSON.. jangan luap hapus bagian &maxFeatures=50
echo($url);
?>