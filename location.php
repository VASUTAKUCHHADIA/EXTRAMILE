<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://apis.mappls.com/advancedmaps/api/70ba91487b3d3c787860c82d8bf106e2/map_sdk?v=3.0&layer=vector"></script>

<style>
#map{
    margin: 1px;
    padding: 1px;
    width : 500px;
    height : 500px;
    border: 2px solid rgba(0,0,0,0.8);
    border-radius: 10px;
}
body{
    align-items:center;
}
</style>
</head>
<body>

    <div id="map"></div>


    <script>

if ("geolocation" in navigator) {
 
  navigator.geolocation.getCurrentPosition(
   
    (position) => {
      
    lat = position.coords.latitude;
    lng = position.coords.longitude;
        
        plotMap(lat,lng);


    },
 
    (error) => {
      
      console.error("Error getting user location:", error);
    }
  );
} else {

  console.error("Geolocation is not supported by this browser.");
}

       
    function plotMap(lat,lng)
    {    
       
        var maps = new mappls.Map('map', {center:{lat:lat, lng:lng}});
        console.log(lat,lng);
        var userData = {
            "type" : "FeatureCollection",
            "features" : [{    
            "type": "Feature",
                "properties": {"description":"vizag","icon":"https://apis.mapmyindia.com/map_v3/1.png"},
                "geometry": {"type": "Point", "coordinates": [lat,lng]},
                
        }],
      
    }
        var marker = mappls.addGeoJson({
            map : maps,
            data:userData,
            fitbounds:true,
            cType:0
        });




   
        var othersData = {
            "type" : "FeatureCollection",
            "features": [
                <?php 
                $arr = array("f1"=>array("name"=>"f1", "lat"=>17.7327661, "lng"=>83.3083623), "f2"=>array("name"=>"f2", "lat"=>17.7387661, "lng"=>83.8083623), "f3"=>array("name"=>"f3", "lat"=>17.0312661, "lng"=>83.0283623));

                foreach($arr as $x => $x_value) {
                
                     echo '{"type": "Feature",
                                  "properties":
                                      {
                                          "description":"'.$x_value["name"].'",
                                          "icon":"https://apis.mapmyindia.com/map_v3/1.png",
                                  },
                                  "geometry": {"type": "Point", "coordinates": ['.$x_value["lat"].','.$x_value["lng"].']}
                                 },
                                ';
                                
                    }

        ?>
                
            ]

        };

    var marker=mappls.addGeoJson({map:maps,data:othersData,fitbounds:true,cType:0});
        }
    </script>
</body>
</html>