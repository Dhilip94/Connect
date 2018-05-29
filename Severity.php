<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('db.php'); 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $critical=0;
 $high=0;
 $low=0;
 $jsonArray = array();
 $jsonArrayItem = array();
           
// Attempt select query execution
$sql1 = "SELECT COUNT(tweet) FROM `tweets` WHERE 
tweet LIKE '%lightening%' OR 
tweet LIKE '%bomb attack%' OR 
tweet LIKE '%volcano%' OR 
tweet LIKE '%quake%' OR 
tweet LIKE '%earthquake%' OR 
tweet LIKE '%flooding%' OR 
tweet LIKE '%squall%' OR 
tweet LIKE '%thunderstorms%' OR 
tweet LIKE '%StormAlert%' OR 
tweet LIKE '%tornado%' OR 
tweet LIKE '%volcanic%' OR 
tweet LIKE '%gunfire%' OR 
tweet LIKE '%forest fire%' OR 
tweet LIKE '%cyclone%' OR 
tweet LIKE '%bomb threat%' OR 
tweet LIKE '%emergency%' OR 
tweet LIKE '%tsunami%' OR 
tweet LIKE '%hurricane%' OR 
tweet LIKE '%epidemic%' OR 
tweet LIKE '%security breach%' OR 
tweet LIKE '%tropical storm%' OR 
tweet LIKE '%blast%' OR 
tweet LIKE '%swine flu%' OR 
tweet LIKE '%ebola%' OR 
tweet LIKE '%wildfire%' OR 
tweet LIKE '%landslide%' OR 
tweet LIKE '%terrorist attack%' OR 
tweet LIKE '%national security%' OR 
tweet LIKE '%High Alert%'";
if($result1 = mysqli_query($con, $sql1)){
    if(mysqli_num_rows($result1) > 0){

        while($row1 = mysqli_fetch_array($result1)){
			//$critical = $row1['COUNT(tweet)'];
             $jsonArrayItem['y'] = $row1['COUNT(tweet)'];
            $jsonArrayItem['label'] = "Critical";
			array_push($jsonArray, $jsonArrayItem);
        }
       
        // Free result set
        mysqli_free_result($result1);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
}
 //echo $critical. '<br>';
 $sql2="SELECT COUNT(tweet) FROM `tweets` WHERE 
 tweet LIKE '%wind%' OR 
tweet LIKE '%storm%' OR 
tweet LIKE '%explode%' OR 
tweet LIKE '%gunshot%' OR 
tweet LIKE '%evacuation%' OR 
tweet LIKE '%plane crash%' OR 
tweet LIKE '%bombing%' OR 
tweet LIKE '%storm warning%' OR 
tweet LIKE '%hail%' OR 
tweet LIKE '%strong wind%' OR 
tweet LIKE '%heavy rain%' OR 
tweet LIKE '%severe weather%' OR 
tweet LIKE '%IMD%' OR 
tweet LIKE '%lava%' OR 
tweet LIKE '%explosion%' OR 
tweet LIKE '%suicide bomb%' OR 
tweet LIKE '%suicide bomber%' OR 
tweet LIKE '%hacker%' OR 
tweet LIKE '%explosive%' OR 
tweet LIKE '%ammunition%' OR 
tweet LIKE '%firing%' OR 
tweet LIKE '%flight crash%' OR 
tweet LIKE '%protest%' OR 
tweet LIKE '%kidnapping%' OR 
tweet LIKE '%abduction%' OR 
tweet LIKE '%insurgency%' OR 
tweet LIKE '%violence%' OR 
tweet LIKE '%strike%' OR 
tweet LIKE '%bandh%' OR 
tweet LIKE '%military operation%' OR 
tweet LIKE '%bomb%' OR 
tweet LIKE '%explosive%' OR 
tweet LIKE '%improvised explosive device%' OR 
tweet LIKE '%shootout%' OR 
tweet LIKE '%power outage%' OR 
tweet LIKE '%dharna%' OR 
tweet LIKE '%quarantine%' OR 
tweet LIKE '%shooter%' OR 
tweet LIKE '%maritime%' OR 
tweet LIKE '%capsize%' OR 
tweet LIKE '%air travel delay%' OR 
tweet LIKE '%transportation disruption%' OR 
tweet LIKE '%natural disaster%' OR 
tweet LIKE '%emergency landing%' OR 
tweet LIKE '%fire%' OR 
tweet LIKE '%blockade%' OR 
tweet LIKE '%political unrest%' OR 
tweet LIKE '%civil unrest%' OR 
tweet LIKE '%rally%' OR 
tweet LIKE '%shutdown%' OR 
tweet LIKE '%striking%' OR 
tweet LIKE '%airport disruption%' OR 
tweet LIKE '%air traffic control%' OR 
tweet LIKE '%bomb defused%' OR 
tweet LIKE '%explosive defused%' OR 
tweet LIKE '%precaution%' OR 
tweet LIKE '%refuge%' OR 
tweet LIKE '%fireproof%' OR 
tweet LIKE '%Biological attack%' OR 
tweet LIKE '%traffic alert%' OR 
tweet LIKE '%commute alert%' OR 
tweet LIKE '%train derailment%' OR 
tweet LIKE '%blaze%' OR 
tweet LIKE '%accident%'";
 
 if($result2 = mysqli_query($con, $sql2)){
    if(mysqli_num_rows($result2) > 0){
     
        while($row2 = mysqli_fetch_array($result2)){
           //$high = $row2['COUNT(tweet)'];
		    $jsonArrayItem['y'] = $row2['COUNT(tweet)'];
            $jsonArrayItem['label'] = "High";
			array_push($jsonArray, $jsonArrayItem);
        }
       
        // Free result set
        mysqli_free_result($result2);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($con);
}

//echo $high. '<br>';
 $sql3 ="SELECT COUNT(tweet) FROM `tweets` WHERE 
tweet LIKE '%rain%' OR 
tweet LIKE '%crashes%' OR 
tweet LIKE '%dead%' OR 
tweet LIKE '%basement fire%' OR 
tweet LIKE '%wounded%' OR 
tweet LIKE '%damage%' OR 
tweet LIKE '%short circuit%' OR 
tweet LIKE '%gale%' OR 
tweet LIKE '%evacuation%' OR 
tweet LIKE '%epicenter%' OR 
tweet LIKE '%militant%' OR 
tweet LIKE '%meteorological%' OR 
tweet LIKE '%crime%' OR 
tweet LIKE '%theft%' OR 
tweet LIKE '%rescue%' OR 
tweet LIKE '%saves%' OR 
tweet LIKE '%nuke%' OR 
tweet LIKE '%nuke-site%' OR 
tweet LIKE '%sharpshooter%' OR 
tweet LIKE '%murder%' OR 
tweet LIKE '%terrorist%' OR 
tweet LIKE '%hoffman estates%' OR 
tweet LIKE '%meteorologic%' OR 
tweet LIKE '%demonstration%' OR 
tweet LIKE '%hoax%' OR 
tweet LIKE '%robbery%' OR 
tweet LIKE '%active shooter%' OR 
tweet LIKE '%MERS%' OR 
tweet LIKE '%criminal%' OR 
tweet LIKE '%escape%' OR 
tweet LIKE '%derail%' OR 
tweet LIKE '%behead%' OR 
tweet LIKE '%incapicitate%' OR 
tweet LIKE '%suspicious%' OR 
tweet LIKE '%arrest%' OR 
tweet LIKE '%insurgents%' OR 
tweet LIKE '%hoax call%' OR 
tweet LIKE '%dangerous%' OR 
tweet LIKE '%burgalry%' OR 
tweet LIKE '%embezzle%' OR 
tweet LIKE '%flight delay%' OR 
tweet LIKE '%road block%' OR 
tweet LIKE '%substance abuse%' OR 
tweet LIKE '%drug abuse%' OR 
tweet LIKE '%hit and run%' OR 
tweet LIKE '%hit & run%' OR 
tweet LIKE '%extortion%' OR 
tweet LIKE '%break-in%' OR 
tweet LIKE '%arson%' OR 
tweet LIKE '%forgery%' OR 
tweet LIKE '%counterfeiting%' OR 
tweet LIKE '%misappropriation%' OR 
tweet LIKE '%Crisis%' OR 
tweet LIKE '%threat foiled%' OR 
tweet LIKE '%threat averted%' OR 
tweet LIKE '%CDK %' OR 
tweet LIKE '%CDK Global%' OR 
tweet LIKE '%ADP%' OR 
tweet LIKE '%disaster management%' OR 
tweet LIKE '%disaster%' OR 
tweet LIKE '%prison break%' OR 
tweet LIKE '%highway block%' OR 
tweet LIKE '%police chase%' OR 
tweet LIKE '%criminal chase%' OR 
tweet LIKE '%poisoning%' OR 
tweet LIKE '%drugs%' OR 
tweet LIKE '%narcotics%' OR 
tweet LIKE '%confidentiality%' OR 
tweet LIKE '%beefed up%' OR 
tweet LIKE '%chemical attack%' OR 
tweet LIKE '%defense%' OR 
tweet LIKE '%stolen%' OR 
tweet LIKE '%armament%' OR 
tweet LIKE '%armor%' OR 
tweet LIKE '%custody%' OR 
tweet LIKE '%retreat%' OR 
tweet LIKE '%shelter%' OR 
tweet LIKE '%warrant%' OR 
tweet LIKE '%endanger%' OR 
tweet LIKE '%endangerment%' OR 
tweet LIKE '%Biological monitoring%' OR 
tweet LIKE '%robbing%' OR 
tweet LIKE '%gunpoint%' OR 
tweet LIKE '%shots fired%' OR 
tweet LIKE '%shooting%' OR 
tweet LIKE '%shot%' OR 
tweet LIKE '%crime scene%' OR 
tweet LIKE '%carjacking%' OR 
tweet LIKE '%shooting investigation%' OR 
tweet LIKE '%power failure%' OR 
tweet LIKE '%power blockout%' OR 
tweet LIKE '%violent %' OR 
tweet LIKE '%armed%' OR 
tweet LIKE '%homicide%' OR 
tweet LIKE '%stabbing%' OR 
tweet LIKE '%hostage%' OR 
tweet LIKE '%suspect%' OR 
tweet LIKE '%overdose%' OR 
tweet LIKE '%shipwreck%' OR 
tweet LIKE '%helicopter crash%'";
 
 if($result3 = mysqli_query($con, $sql3)){
    if(mysqli_num_rows($result3) > 0){
       
        while($row3 = mysqli_fetch_array($result3)){
            //$low = $row3['COUNT(tweet)'] ;
			$jsonArrayItem['y'] = $row3['COUNT(tweet)'];
            $jsonArrayItem['label'] = "Low";
			array_push($jsonArray, $jsonArrayItem);
        }
        
        // Free result set
        mysqli_free_result($result3);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($con);
}
//echo $low;

			
echo json_encode($jsonArray);
// Close connection
mysqli_close($con);
?>