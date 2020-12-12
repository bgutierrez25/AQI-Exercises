<?php
function getInfo ()
{
    $curl = curl_init();
    $state = $_POST["state"];
    $city = $_POST["city"];;
    //$state = "California";
    $url = "api.airvisual.com/v2/city?city=$city&state=$state&country=USA&key=93175519-0750-434a-ade7-b389ba04587e";
    $url = str_replace(" ","%20",$url);//replace any white spaces in the url with '%20' which tells curl that it's a whitespace
    curl_setopt ($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = json_decode(curl_exec ($curl), true);
    curl_close ($curl);
    echo "<pre>";
    echo "You're in ";
    echo $result['data']['city'];
    echo ", ";
    echo $result['data']['state'];
    echo ".";
    echo "</pre>";
    $aqi = $result['data']['current']['pollution']['aqius'];
    echo "<pre>";
    if ($aqi <= 50 )
    {
    	echo "Very little risk. All groups may generally go outside.";
    }    
    if ($aqi >= 51 && $aqi <= 100 )
    {
    	echo "People who are unusually sensitive should stay inside. Most people are fine to go out.";
    }
    
    if ($aqi >= 101 && $aqi <= 150)
    {
    	echo "Try staying inside. Everyone's health can be affected. Sensitive groups can suffer more severe effects.";
    }

    if ($aqi >= 201 && $aqi <= 300)
    {
    	echo "Stay inside. Everyone can suffer severe health effects.";
    }
    if ($aqi >= 301 && $aqi <= 500)
    {
    	echo "Do not go outside. The air is likely life-threatening.";
    }
    
    
    //echo "</pre>";
    //var_dump($result);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    getInfo();
}

?>  
<html>
<body>

<form action="" method="post">
State: <input type="text" name="state"><br>
City: <input type="text" name="city"><br>
<input type="submit">
</form>

</body>
</html>
