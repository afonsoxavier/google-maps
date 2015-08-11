<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<title>Sort data from Google Maps kml file</title>
</head>

<body>

<H2>Place names index</h2>

<?php
$xmldoc="mapgoo.kml";  // whatever the name your Google Maps xml file is. In the same directory as this script.
$listgoo = new SimpleXMLElement($xmldoc, null, true);
$i=1;
foreach ($listgoo->Document->Placemark as $placemark) {
   echo $i, ' <b>', $placemark->name, '</B>:',  $placemark->Point->coordinates, '<BR>', $placemark->description, '<BR>';
$i++;
	
}
?>

</body>
</html>
