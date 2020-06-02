<?php
include_once 'includes/database_handler.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weather API</title>
    <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
  </head>
  <body>
    <input id="city">
    <button id="getWeatherForcast">Get Weather</button>
    <link rel="stylesheet" href="/css/main.css">
    <div class = "app-wrap">
      <header>
    <div id="showWeatherForcast"></div>
  </header>
  <main>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#getWeatherForcast").click(function() {
          var city = $("#city").val();
          var key = '7242886abe19907eab9d97eafcb462bf';

          $.ajax({
            url: 'http://api.openweathermap.org/data/2.5/weather',
            datatype: 'json',
            type: 'GET',
            data: {q:city, appid: key, units: 'metric'},

            success: function(data){
              var wf = '';
              $.each(data.weather, function(index, val){
                wf += '<p><b>' + data.name + "</b><img src =/foto/" +val.icon + ".png></p>"
                + data.main.temp + '&deg;C'
                + ' | '+ val.main + "," + val.description;
                if (`${data.weather[0].main}` == "Clouds") {
                    console.log("pavyko");
                  }else {
                    console.log("nepavyko");
                  }
              });
              $("#showWeatherForcast").html(wf);
            }
          });
        });
      });
    </script>
  </body>
</html>
