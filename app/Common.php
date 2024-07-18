<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQI</title>
    <!-- Add your CSS and JavaScript library links here 
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> -->
    <!--<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> -->
    <style>
        #map {
            height: 75%;
            width: 100%;
        }
    </style>
</head>
<body>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
           

            //existing Leaflet code
            var map = L.map('map').setView([20.5937, 78.9629], 5); 
            weatherData.forEach(function (data) {
                // Create a marker for each data point
                if (data.latitude && data.longitude) {
                    var marker = L.marker([data.latitude, data.longitude]).addTo(map);
                    marker.bindPopup(`<b>${data.city}</b><br>AQI: ${data.airqualityindexvalue}`);
                }
            });
        });
    </script>
</body>
</html>

