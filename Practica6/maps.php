<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "baretos") or die("No se ha podido conectar con la base de datos.");
$query = "SELECT * FROM locales";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>

<head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />

    <script type="text/javascript">
        let map;

        function initMap() {
            const myLatLng = {
                lat: 37.8035,
                lng: -0.8044
            };
            map = new google.maps.Map(document.getElementById("map"), {
                center: myLatLng,
                zoom: 12,
            });

            let misMarcadores = [];

            <?php

            while ($locales = mysqli_fetch_array($result)) {
                extract($locales);
                echo "misMarcadores.push(['" . $nombre . "'," . $coordenadas . "]);";
            }
            ?>

            const infowindow = new google.maps.InfoWindow();

            misMarcadores.forEach(([nombre, position], i) => {
                const marker = new google.maps.Marker({
                    position,
                    map,
                    title: `${nombre}`
                });
                marker.addListener("click", () => {
                    infowindow.setContent("<h3>" + nombre + "</h3><p>" + descripcion + "</p>");
                    infowindow.open({
                        anchor: marker,
                        map,
                        shouldFocus: false,
                    });
                });
            });
        }
        window.initMap = initMap;

        function getWeather(coords, callback) {
	  var url = 'https://api.openweathermap.org/data/2.5/weather?lat=37.8035&lon=-0.8044&appid=e376d29d9e9d80cff60c8404c9cdc7c2';
	  $.ajax({
	    dataType: "jsonp",
	    url: url,
	    jsonCallback: 'jsonp',
	    data: { lat: coords[0], lon: coords[1] },
	    cache: false,
	    success: function (data) {
	    	callback(data);
	    }
	  });
	}

	$(document).ready(function () {

			var ciudades = [
				{
				  ciudades: "Santiago de la Ribera",
				  Long: -0.8044,
				  Lat: 37.8035,
				  Weather: "api.openweathermap.org/data/2.5/weather?lat=51.6306&lon=-0.800299&mode=html"
				},
				{
				  ciudades: "Livingston",
				  Long: -3.52207,
				  Lat: 55.8864,
				  Weather: "api.openweathermap.org/data/2.5/weather?lat=55.8864&lon=-3.52207&mode=html"
				},
				{
				  ciudades: "Brighton and Hove Albion",
				  Long: -0.08014,
				  Lat: 50.8609,
				  Weather: "api.openweathermap.org/data/2.5/weather?lat=50.8609&lon=-0.08014&mode=html"
				}
			];

	    $("#btn382").click(function () {

	    	for (var ciudad in ciudades) {
	    		var obj = ciudades[ciudad];
	    		(function (ciudad) {
		    		coords = [ciudad.Lat, ciudad.Long]
			      getWeather(coords, function(data) {
							var html = [];
							html.push('<div>')
			        html.push('City: ', ciudad.ciudades, ', ');
			        html.push('Lat: ', data.coord.lat, ', ');
			        html.push('Lon: ', data.coord.lon, ', ');
			        html.push('Weather: ', data.weather[0].description);
							html.push('</div>')
			        $("#div381").append(html.join('')).css("background-color", "orange");
			      });
	    		}(obj));
	    	}

	    });

	});
    </script>

</head>

<body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBygvZALWChi5ZICTa-C-fSN5Y7VuDRD4U&callback=initMap&v=weekly" defer></script>
    <div>

        <div id="weather"></div>
        <script src="https://api.openweathermap.org/data/2.5/weather?lat=37.8035&lon=-0.8044&appid=e376d29d9e9d80cff60c8404c9cdc7c2" defer>

        </script>

        <a name="#ajax-getjson-example"></a>
        <div id="example-section38">
            <div>Disco Tiempo</div>
            <div id="div381"></div>
            <button id="btn382" type="button">Meteo en ciudad</button>
        </div>
    </div>
</body>

<?php




echo "<table border='1'>";
echo "<h2>Tabla por tipos de locales</h2>";
foreach ($result as $tipo) {
    $array = json_decode(json_encode($tipo), true);
    echo "<tr>";
    echo "<td>" . $array["id_local"] . "</td>";
    echo "<td>" . $array["nombre"] . "</td>";
    echo "<td>" . $array["tipo"] . "</td>";
    echo "</tr>";
}
echo "</table>";


echo "<table border='1'>";
echo "<h2>Tabla por poblaciones poblacion</h2>";
foreach ($result as $poblacion) {
    $array = json_decode(json_encode($poblacion), true);
    echo "<tr>";
    echo "<td>" . $array["id_local"] . "</td>";
    echo "<td>" . $array["nombre"] . "</td>";
    echo "<td>" . $array["poblacion"] . "</td>";
    echo "</tr>";
}
echo "</table>";


?>

</html>