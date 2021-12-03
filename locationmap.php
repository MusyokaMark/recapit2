<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #map{
            height: 300px;
            width: 100%;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Find our Location</h2>
    <div id="map"> </div>
    <script>
        function initMap(){
            var location = {lat: -1.29184, lng: 36.82188};
            var map = new google.maps.Map(document.getElementById("map"),{
                zoom: 4, 
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC4ZJDXy7EBUVbp0so7q2jUTLb6F-tW0M&callback=initMap">
</script>    
</body>
</html>