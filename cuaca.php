<html>
	<head>
	<title>WEATHER APP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
	body,td,th {
		font-family: "Comic Sans MS", cursive;
	}
	body {
		background-color: #9FF;
	}
	</style>
	<b><h1 align=center>Kondisi Cuaca </h1><br><b>
	</head>
	
	<body><body style="background-color:Deepskyblue">

	</body>
	
<center><?php 
  $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/Mugassari.json");
  $parsed_json = json_decode($json_string);
  
  
  $temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
  echo "Current temperature is: ${temp_c}<sup>0</sup>C\n";
  echo '<br>';
  
  $json_string1 = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/forecast/q/ID/Mugassari.json");
  $parsed_json1 = json_decode($json_string1);

  $location = $parsed_json1->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'monthname'};
  echo " ${location}\n";
  $location1 = $parsed_json1->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'day'};
  echo " ${location1}\n";
  $location2 = $parsed_json1->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'weekday'};
  echo " ${location2}\n";
  $location3 = $parsed_json1->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'year'};
  echo " ${location3}\n";
  echo '<br>';
  $location4 = $parsed_json1->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'conditions'};
  echo " ${location4}\n";
  echo '<br>';
  $location5 = $parsed_json1->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'icon'};
  //echo "${location5}";
  echo '<br>';
  echo "<img src='http://icons.wxug.com/i/c/k/". $location5 . ".gif'><br/>";
?></center>