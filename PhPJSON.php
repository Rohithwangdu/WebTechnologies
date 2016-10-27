<HTML>
<HEAD>
<TITLE>Forecast</TITLE>
<STYLE>
table {border:2px solid #000}
td,th {border:none}
</STYLE>
<SCRIPT type="text/javascript">
function clearForm()
{
    //document.getElementById("SearchForm").reset();
    form = document.forms["SearchForm"];
    form.street.value="";
    form.city.value="";
    form.State.selectedIndex=0;
    form.Degree[0].checked=true;
    if(document.getElementById("errorDiv1")!=null)
    {
    document.getElementById("errorDiv1").innerHTML = "";
    }
    if(document.getElementById("errorDiv2")!=null)
    {
    document.getElementById("errorDiv2").innerHTML = "";
    }
    if(document.getElementById("phpResult")!=null)
    {
    document.getElementById("phpResult").innerHTML = "";
    }
    //street="";
}
function formValidation()
{
    form = document.forms["SearchForm"];
    var alertMessage="Please enter the value for ";
    var street=form.street.value;
    if(street=="")
    {
        alertMessage+="Street Address";
    }
    var city=form.city.value;
    if(city=="")
    {
        alertMessage+=" city";
    }
    var state=form.State.selectedIndex;
    if(state==0)
    {
        alertMessage+=" state";
    }
    if (street=='' || city=='' || state==0) 
    { 
        window.alert(alertMessage); 
        return false; 
    }
    return true;
}
</SCRIPT>
</HEAD>
<BODY>
<FORM method="POST" id="SearchForm" name="SearchForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return formValidation();" >
<h2 align="Center">Forecast Search</h2>
<table id="FormTable" align="center" style="width:30%">
    <tr>
        <td>
            Street Address:* 
        </td>
        <td>    
            <input type="text" name="street" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {echo $_POST['street'];} ?>" ><br>
        </td>
    </tr>
    <tr>
        <td>
            City:* 
        </td>
        <td>
            <input type="text" name="city" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {echo $_POST['city'];}?>" ><br>
        </td>
    </tr>
    <tr>
        <td>
            State:* 
        </td>
        <td>
            <select name="State">
                <option value="NONE" selected>Select your state...</option>
                <option value="AL" <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "AL"){echo "selected";}}?>>Alabama</option>
                <option value="AK"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "AK"){echo "selected";}}?>>Alaska</option>
                <option value="AZ"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "AZ"){echo "selected";}}?>>Arizona</option>
                <option value="AR"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "AR"){echo "selected";}}?>>Arkansas</option>
                <option value="CA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "CA"){echo "selected";}}?>>California</option>
                <option value="CO"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "CO"){echo "selected";}}?>>Colorado</option>
                <option value="CT"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "CT"){echo "selected";}}?>>Connecticut</option>
                <option value="DE"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "DE"){echo "selected";}}?>>Delaware</option>
                <option value="DC"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "DC"){echo "selected";}}?>>District Of Columbia</option>
                <option value="FL"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "FL"){echo "selected";}}?>>Florida</option>
                <option value="GA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "GA"){echo "selected";}}?>>Georgia</option>
                <option value="HI"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "HI"){echo "selected";}}?>>Hawaii</option>
                <option value="ID"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "ID"){echo "selected";}}?>>Idaho</option>
                <option value="IL"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "IL"){echo "selected";}}?>>Illinois</option>
                <option value="IN"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "IN"){echo "selected";}}?>>Indiana</option>
                <option value="IA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "IA"){echo "selected";}}?>>Iowa</option>
                <option value="KS"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "KS"){echo "selected";}}?>>Kansas</option>
                <option value="KY"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "KY"){echo "selected";}}?>>Kentucky</option>
                <option value="LA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "LA"){echo "selected";}}?>>Louisiana</option>
                <option value="ME"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "ME"){echo "selected";}}?>>Maine</option>
                <option value="MD"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MD"){echo "selected";}}?>>Maryland</option>
                <option value="MA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MA"){echo "selected";}}?>>Massachusetts</option>
                <option value="MI"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MI"){echo "selected";}}?>>Michigan</option>
                <option value="MN"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MN"){echo "selected";}}?>>Minnesota</option>
                <option value="MS"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MS"){echo "selected";}}?>>Mississippi</option>
                <option value="MO"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MO"){echo "selected";}}?>>Missouri</option>
                <option value="MT"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "MT"){echo "selected";}}?>>Montana</option>
                <option value="NE"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NE"){echo "selected";}}?>>Nebraska</option>
                <option value="NV"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NV"){echo "selected";}}?>>Nevada</option>
                <option value="NH"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NH"){echo "selected";}}?>>New Hampshire</option>
                <option value="NJ"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NJ"){echo "selected";}}?>>New Jersey</option>
                <option value="NM"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NM"){echo "selected";}}?>>New Mexico</option>
                <option value="NY"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NY"){echo "selected";}}?>>New York</option>
                <option value="NC"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "NC"){echo "selected";}}?>>North Carolina</option>
                <option value="ND"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "ND"){echo "selected";}}?>>North Dakota</option>
                <option value="OH"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "OH"){echo "selected";}}?>>Ohio</option>
                <option value="OK"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "OK"){echo "selected";}}?>>Oklahoma</option>
                <option value="OR"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "OR"){echo "selected";}}?>>Oregon</option>
                <option value="PA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "PA"){echo "selected";}}?>>Pennsylvania</option>
                <option value="RI"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "RI"){echo "selected";}}?>>Rhode Island</option>
                <option value="SC"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "SC"){echo "selected";}}?>>South Carolina</option>
                <option value="SD"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "SD"){echo "selected";}}?>>South Dakota</option>
                <option value="TN"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "TN"){echo "selected";}}?>>Tennessee</option>
                <option value="TX"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "TX"){echo "selected";}}?>>Texas</option>
                <option value="UT"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "UT"){echo "selected";}}?>>Utah</option>
                <option value="VT"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "VT"){echo "selected";}}?>>Vermont</option>
                <option value="VA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "VA"){echo "selected";}}?>>Virginia</option>
                <option value="WA"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "WA"){echo "selected";}}?>>Washington</option>    
                <option value="WV"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "WV"){echo "selected";}}?>>West Virginia</option>
                <option value="WI"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "WI"){echo "selected";}}?>>Wisconsin</option>
                <option value="WY"<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['State'] == "WY"){echo "selected";}}?>>Wyoming</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Degree:*                 
        </td>
        <td>
            <input type="Radio" name="Degree" Value="Fahrenheit" checked  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['Degree'] == "Fahrenheit"){ echo "checked"; } }  ?>>Fahrenheit
            <input type="Radio" name="Degree" Value="Celsius" <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ if($_POST['Degree'] == "Celsius"){ echo "checked"; } } ?>>Celsius<br>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <input type="submit" Value="Search">
            <input type="button" onclick="clearForm()" Value="Clear">
        </td>
    </tr>
    <tr>
        <td>
            <div>
            *- <i> Mandatory fields.</i>
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div>
                <a href="http://forecast.io/">Powered by Forecast.io</a>
            </div>
        </td>
    </tr>
</table>
</FORM>

</BODY>
</HTML>

<?php
//error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $street= $_POST["street"];
    $city=$_POST['city'];
    if($_POST['Degree'] == "Fahrenheit")
    {
        $units="us";
        $degreeSign="&deg;F";
        $speedUnits="mph";
        $visibilityUnits="mi";
    }
    else
    {
        $units="si";
        $degreeSign="&deg;C";
        $speedUnits="kmph";
        $visibilityUnits="km";
    }
    $state=$_POST['State'];
    $address=$street.",".$city.",".$state;
    $address=urlencode($address);
    $googleURL="https://maps.google.com/maps/api/geocode/xml?address=";
    $googleURL=$googleURL.$address;
    $apikey="AIzaSyAWPwvd3USNZ4oUQzBAOvbbG3Kuz7WWlPk";
    $googleURL=$googleURL."&key=".$apikey;
    
	{
        $stringXML = file_get_contents($googleURL);
        $dataXML = simplexml_load_string($stringXML);
        if($dataXML->status=="ZERO_RESULTS")
        {
            echo "<div id=\"errorDiv1\" style=\"color:red\" align=center><h3>";
            exit("Google Geocode could not find the address specified");
            echo "</div></h3>";
        }
        //print_r($dataXML);
        //print_r($dataXML); 
        //echo '<br><hr>';
        $lat=$dataXML->result[0]->geometry->location->lat;
        $long=$dataXML->result[0]->geometry->location->lng;
        if($lat==""||$long=="")
        {
            echo "<div id=\"errorDiv2\" style=\"color:red\" align=center><h3>";
            exit("Google Geocode could not find the address specified");
            echo "</div></h3>";
        }
        //print_r("lat.long");
        //print_r($lat.$long);
        
        $weatherURL="https://api.forecast.io/forecast/";
        $weatherURL=$weatherURL."d516fe324c809d99a3ae2376cf874a97/";
        $weatherURL=$weatherURL.$lat.",".$long."?";
        $weatherURL=$weatherURL."units=$units";
        $weatherURL=$weatherURL."&exclude=flags";
        //print_r($weatherURL);
        //$weatherURL=urlencode($weatherURL);
        
        
        { 
            // no errors occurred when opening the page	
            $weatherXML = file_get_contents($weatherURL);
            $weatherData = json_decode($weatherXML);
            if($weatherData->currently->icon=="clear-day")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png";
                
            }
            else if($weatherData->currently->icon=="clear-night")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png";
                
            }
            else if($weatherData->currently->icon=="rain")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png";
                
            }
            else if($weatherData->currently->icon=="snow")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png";
                
            }
            else if($weatherData->currently->icon=="sleet")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png";
                
            }
            else if($weatherData->currently->icon=="wind")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png";
                
            }
            else if($weatherData->currently->icon=="fog")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png";
                
            }
            else if($weatherData->currently->icon=="cloudy")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png";
                
            }
            else if($weatherData->currently->icon=="partly-cloudy-day")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png";
                
            }
            else if($weatherData->currently->icon=="partly-cloudy-night")
            {
                $imgSrc="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png";
                
            }
            
            $altTxt=$weatherData->currently->summary;
            
            
            //print_r($weatherData); 
            //echo '<br><hr>';echo '<br><hr>';echo '<br><hr>';echo '<br><hr>';
            //echo "<img src=\"";
            //echo http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png;
            //echo "\">;
            //***********PRECIPITATION***********************************************************
            if(!($_POST['Degree'] == "Fahrenheit"))
            {
                $precipIntensity=$weatherData->currently->precipIntensity/25.4;
            }
            else
            {
                $precipIntensity=$weatherData->currently->precipIntensity;   
            }
            if($precipIntensity >=0 && $precipIntensity <0.002)
            {
                $precipitation="None";
            }
            else if($precipIntensity >=0.002 && $precipIntensity <0.017)
            {
                $precipitation="Very Light";                
            }
            else if($precipIntensity >=0.017 && $precipIntensity <0.1)
            {
                $precipitation="Light";
            }
            else if($precipIntensity >=0.1 && $precipIntensity <0.4)
            {
                $precipitation="Moderate";
            }
            else if($precipIntensity >=0.4)
            {
                $precipitation="Heavy";
            }
            //***********PRECIPITATION END***********************************************************
            
            //***********RAIN...HUMIDIDY***********************************************************
            $rain = $weatherData->currently->precipProbability * 100;
            $humidity=$weatherData->currently->humidity * 100;
            //***********RAIN ENDS***********************************************************
            
            //************************************WIND SPEED****************************
            if(!($_POST['Degree'] == "Fahrenheit"))
            {
                $windValue=round($weatherData->currently->windSpeed * 3.6) ;
            }
            else
            {
                $windValue=round($weatherData->currently->windSpeed);
            }
            //************************************WIND SPEED****************************
            
            //***********Sunrise***********************************************************
            //$script_tz = date_default_timezone_get();
            date_default_timezone_set($weatherData->timezone);
            
            $sunrise=date('h:i A',$weatherData->daily->data[0]->sunriseTime);
            $sunset=date('h:i A',$weatherData->daily->data[0]->sunsetTime);
            //***********Sunrise Ends***********************************************************
            
            //************Visibility
           // if(property_exists($weatherData ,$weatherData->currently->visibility))
            {
             //   $visible=round($weatherData->currently->visibility)." ".$visibilityUnits;
            }
            if(!(array_key_exists('visibility',$weatherData)))
            {
                $visible=round(@$weatherData->currently->visibility)." ".$visibilityUnits;
            }
            else
            {
                $visible="Data Unavailable";
            }
                        
            //************Visibility
            //echo "<div id=\"phpDiv\"";
            echo "<table id=\"phpResult\" style=\"width:30%\" align=\"center\">";
            echo "<tr><td colspan = \"2\" align=\"center\"><h3>".$weatherData->currently->summary."<br>".round($weatherData->currently->temperature).$degreeSign."</h3><br><img src=".$imgSrc." title=\"".$altTxt."\"></td></tr>";
           // echo "<tr><td style= \"align=\"center\"><h3>".round($weatherData->currently->temperature).$degreeSign."</h3></td></tr>";
            echo "<tr><td> Precipitation:</td><td>".$precipitation."</td></tr>";
            echo "<tr><td>Chance of Rain:</td><td>".$rain."%</td></tr>";
            echo "<tr><td>Wind Speed:</td><td>".$windValue." ".$speedUnits."</td></tr>";
            echo "<tr><td>Dew Point:</td><td>".round($weatherData->currently->dewPoint)."</td></tr>";
            echo "<tr><td>Humidity:</td><td>".$humidity."%</td></tr>";
            echo "<tr><td>Visibility:</td><td>".$visible."</td></tr>";
            echo "<tr><td>Sunrise:</td><td>".$sunrise."</td></tr>";
            echo "<tr><td>Sunset:</td><td>".$sunset."</td></tr>";
            echo "</table>";
//            echo "</div>";
            //print_r($weatherData->currently->summary);print_r($precipIntensity);
        }
    }
    
}
?>
