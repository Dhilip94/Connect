<?php
include("auth.php"); //include auth.php file on all secure pages 
require('db.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="300">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">

<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMART</title>
    <meta name="description" content="SMART">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<title>Welcome Home</title>
<script>
window.onload = function() {
	var a;
	
$.ajax({
	url: "http://localhost/tutorials/login/severity.php",
	success: function(data){
		
	a = JSON.parse(data);
		var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Severity"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"\"",
		indexLabel: "{label} {y}",
		dataPoints: a
	}]
});
chart.render();
		
	}
});



}
</script>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><?php echo $_SESSION['username']; ?></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
						<?php 
					if($_SESSION['username']=="admin"){
					?>

						<a href="registration.php"> <i class="menu-icon fa fa-dashboard"></i>Add new User </a>
						<?php } ?>
                <a href="mapview.php"> <i class="menu-icon fa fa-dashboard"></i>Map View </a>
                    </li>
                 

                    

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
	 <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <!-- <button class="search-trigger"><i class="fa fa-search"></i></button> -->
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                              <!--   <button class="search-close" type="submit"><i class="fa fa-close"></i></button> -->
                            </form>
                        </div>

                      <!--   <div class="dropdown for-notification">
                           <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>-->

                       <!--  <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>-->
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
 -->
                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                  
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Social Media Analysis & Reporting Tool (SMART)</strong>
                        </div>
                        <div class="card-body">
                  <table id="employee_grid" class="table table-striped table-bordered">
                    <thead>
            <tr>
                
                <th data-column-id="screen_name" >Source Name</th>
				<th data-column-id="tweet">News</th>
				<th data-column-id="time_posted">Time</th>
                <th data-column-id="tweetid">URL</th>
				
            </tr>
        </thead>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
			
			<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
				
        </div><!-- .content -->
		
</div>

	<script type="text/javascript">
$( document ).ready(function() {
	$("#employee_grid").bootgrid({
		ajax: true,
		post: function ()
		{
			/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		url: "response.php",
		formatters: {
			
		}
   });
});
</script>

<?php 
include "library/twitteroauth.php";
require_once('TwitterAPIExchange.php');

 $consumer = "Wufwp3sODKu2Q64WOOHSfSnjp";
 $consumersecret = "7FNGb9f0Uc07Woxl7c2QBcA0znEE7nmhGvWJQb9NQAcIGpzhWo";
 $accesstoken = "1302767587-MJHV4M2bgFcynK12y8UMSublp4zeMCmM3ymvEuj";
 $accesstokensecret = "LSp4Pyc6KgNyUfo9idxe8oNwfs83rhTblOZOvjFXxtmAP";


 //$twitter = new TwitterOAuth($consumer,$consumersecret,$accesstoken,$accesstokensecret);
 //$search = $_POST["keyword"];
 //$url_str = 'https://api.twitter.com/1.1/search/tweets.json?q='.$search.'&result_type=recent&count=20';
 //$url_str='https://api.twitter.com/1.1/trends/available.json?count=1';
 //echo $url_str;
 //$tweets = $twitter->get($url_str);
 //print_r($tweets);

$settings = array(
    'oauth_access_token' => "995966726817759233-OqCFpdaCFxpL1P9Fzshjidrg84xK3ur",
    'oauth_access_token_secret' => "ufImW9pCupSlckJ9tBzOE1sLKHdFxmJ838PSMgbDc6VJM",
    'consumer_key' => "nPSmfMkqjfNADhz2KpbAXCdQd",
    'consumer_secret' => "avI12RnIML3vmXZqLHx4YEQR22RJPs14ewXsfJLGhvqTn9vsks"
);
 
$url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=cyberknights5';

$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);

//print_r($string);
//if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
    {
        ?>
        <!-- <img src="<?=$items['user']['profile_image_url']?>" /> -->
        <?php
		preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $items['text'], $match);
		
        $time_posted = $items['user']['created_at'];
        $tweet_url =  end($match[0]);
        $tweet_name = $items['user']['name'];
        $tweet = $items['text'];
		$fullurl= "<a href=$tweet_url target=_blank>Link</a>";
		$tweet_withouturl = preg_replace('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $tweet);

		$datetime1 = new DateTime();
		$str=strtotime($time_posted);
		$datetime2 = date("Y-m-d  h:i:s",$str);
		$datetime3 = new DateTime($datetime2);
		//echo date("Y-m-d  h:i:s",$str);
		$interval = $datetime1->diff($datetime3);
		if($interval->format('%D')!=0){
		$full_time = $interval->format('%D days %H hours %I minutes ago');
		//echo $full_time;
		}
		else
		{
			$full_time = $interval->format('%H hours %I minutes ago');
			//echo $full_time;
		}

		//echo $tweet;
		//echo $tweet_url;
        // echo "Time and Date of Tweet: ".$items['user']['url']."<br />";
        // echo "Tweet: ". $items['text']."<br />";
        // echo "Tweeted by: ". $items['user']['name']."<br /><hr/>";
		
		$sql = "SELECT * FROM tweets WHERE tweetid LIKE '%$tweet_url%'";
		$result1 = mysqli_query($con,$sql) or die(mysql_error());
		$rows = mysqli_num_rows($result1);
        if($rows>0){
		//echo "Tweet exists";
		die();
		}
       else{
		   $a = $tweet_withouturl;
if(strpos($a,'lightening') !== false || strpos($a,'bomb attack') !== false || strpos($a,'volcano') !== false || strpos($a,'quake') !== false || strpos($a,'earthquake') !== false || strpos($a,'flooding') !== false || strpos($a,'squall') !== false || strpos($a,'thunderstorms') !== false || strpos($a,'StormAlert') !== false || strpos($a,'tornado') !== false || strpos($a,'volcanic') !== false || strpos($a,'gunfire') !== false || strpos($a,'forest fire') !== false || strpos($a,'cyclone') !== false || strpos($a,'bomb threat') !== false || strpos($a,'emergency') !== false || strpos($a,'tsunami') !== false || strpos($a,'hurricane') !== false || strpos($a,'epidemic') !== false || strpos($a,'security breach') !== false || strpos($a,'tropical storm') !== false || strpos($a,'blast') !== false || strpos($a,'swine flu') !== false || strpos($a,'ebola') !== false || strpos($a,'wildfire') !== false || strpos($a,'landslide') !== false || strpos($a,'terrorist attack') !== false || strpos($a,'national security') !== false || strpos($a,'High Alert') !== false)
{
$sql = "INSERT INTO tweets (screen_name, tweet, tweetid, time_posted, severity) VALUES ('$tweet_name', '$a', '$fullurl', '$full_time', 'Critical')";
        if(mysqli_query($con, $sql)){
        //echo "Records inserted successfully.";
        } else{
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
}

else if(strpos($a,'wind') !== false || strpos($a,'storm') !== false || strpos($a,'explode') !== false || strpos($a,'gunshot') !== false || strpos($a,'evacuation') !== false || strpos($a,'plane crash') !== false || strpos($a,'bombing') !== false || strpos($a,'storm warning') !== false || strpos($a,'hail') !== false || strpos($a,'strong wind') !== false || strpos($a,'heavy rain') !== false || strpos($a,'severe weather') !== false || strpos($a,'IMD') !== false || strpos($a,'lava') !== false || strpos($a,'explosion') !== false || strpos($a,'suicide bomb') !== false || strpos($a,'suicide bomber') !== false || strpos($a,'hacker') !== false || strpos($a,'explosive') !== false || strpos($a,'ammunition') !== false || strpos($a,'firing') !== false || strpos($a,'flight crash') !== false || strpos($a,'protest') !== false || strpos($a,'kidnapping') !== false || strpos($a,'abduction') !== false || strpos($a,'insurgency') !== false || strpos($a,'violence') !== false || strpos($a,'strike') !== false || strpos($a,'bandh') !== false || strpos($a,'military operation') !== false || strpos($a,'bomb') !== false || strpos($a,'explosive') !== false || strpos($a,'improvised explosive device') !== false || strpos($a,'shootout') !== false || strpos($a,'power outage') !== false || strpos($a,'dharna') !== false || strpos($a,'quarantine') !== false || strpos($a,'shooter') !== false || strpos($a,'maritime') !== false || strpos($a,'capsize') !== false || strpos($a,'air travel delay') !== false || strpos($a,'transportation disruption') !== false || strpos($a,'natural disaster') !== false || strpos($a,'emergency landing') !== false || strpos($a,'fire') !== false || strpos($a,'blockade') !== false || strpos($a,'political unrest') !== false || strpos($a,'civil unrest') !== false || strpos($a,'rally') !== false || strpos($a,'shutdown') !== false || strpos($a,'striking') !== false || strpos($a,'airport disruption') !== false || strpos($a,'air traffic control') !== false || strpos($a,'bomb defused') !== false || strpos($a,'explosive defused') !== false || strpos($a,'precaution') !== false || strpos($a,'refuge') !== false || strpos($a,'fireproof') !== false || strpos($a,'Biological attack') !== false || strpos($a,'traffic alert') !== false || strpos($a,'commute alert') !== false || strpos($a,'train derailment') !== false || strpos($a,'blaze') !== false || strpos($a,'accident') !== false)
{
$sql = "INSERT INTO tweets (screen_name, tweet, tweetid, time_posted, severity) VALUES ('$tweet_name', '$a', '$fullurl', '$full_time', 'high')";
        if(mysqli_query($con, $sql)){
        //echo "Records inserted successfully.";
        } else{
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
}




else if(strpos($a,'rain') !== false || strpos($a,'crashes') !== false || strpos($a,'dead') !== false || strpos($a,'basement fire') !== false || strpos($a,'wounded') !== false || strpos($a,'damage') !== false || strpos($a,'short circuit') !== false || strpos($a,'gale') !== false || strpos($a,'evacuation') !== false || strpos($a,'epicenter') !== false || strpos($a,'militant') !== false || strpos($a,'meteorological') !== false || strpos($a,'crime') !== false || strpos($a,'theft') !== false || strpos($a,'rescue') !== false || strpos($a,'saves') !== false || strpos($a,'nuke') !== false || strpos($a,'nuke-site') !== false || strpos($a,'sharpshooter') !== false || strpos($a,'murder') !== false || strpos($a,'terrorist') !== false || strpos($a,'hoffman estates') !== false || strpos($a,'meteorologic') !== false || strpos($a,'demonstration') !== false || strpos($a,'hoax') !== false || strpos($a,'robbery') !== false || strpos($a,'active shooter') !== false || strpos($a,'MERS') !== false || strpos($a,'criminal') !== false || strpos($a,'escape') !== false || strpos($a,'derail') !== false || strpos($a,'behead') !== false || strpos($a,'incapicitate') !== false || strpos($a,'suspicious') !== false || strpos($a,'arrest') !== false || strpos($a,'insurgents') !== false || strpos($a,'hoax call') !== false || strpos($a,'dangerous') !== false || strpos($a,'burgalry') !== false || strpos($a,'embezzle') !== false || strpos($a,'flight delay') !== false || strpos($a,'road block') !== false || strpos($a,'substance abuse') !== false || strpos($a,'drug abuse') !== false || strpos($a,'hit and run') !== false || strpos($a,'hit & run') !== false || strpos($a,'extortion') !== false || strpos($a,'break-in') !== false || strpos($a,'arson') !== false || strpos($a,'forgery') !== false || strpos($a,'counterfeiting') !== false || strpos($a,'misappropriation') !== false || strpos($a,'Crisis') !== false || strpos($a,'threat foiled') !== false || strpos($a,'threat averted') !== false || strpos($a,'CDK ') !== false || strpos($a,'CDK Global') !== false || strpos($a,'ADP') !== false || strpos($a,'disaster management') !== false || strpos($a,'disaster') !== false || strpos($a,'prison break') !== false || strpos($a,'highway block') !== false || strpos($a,'police chase') !== false || strpos($a,'criminal chase') !== false || strpos($a,'poisoning') !== false || strpos($a,'drugs') !== false || strpos($a,'narcotics') !== false || strpos($a,'confidentiality') !== false || strpos($a,'beefed up') !== false || strpos($a,'chemical attack') !== false || strpos($a,'defense') !== false || strpos($a,'stolen') !== false || strpos($a,'armament') !== false || strpos($a,'armor') !== false || strpos($a,'custody') !== false || strpos($a,'retreat') !== false || strpos($a,'shelter') !== false || strpos($a,'warrant') !== false || strpos($a,'endanger') !== false || strpos($a,'endangerment') !== false || strpos($a,'Biological monitoring') !== false || strpos($a,'robbing') !== false || strpos($a,'gunpoint') !== false || strpos($a,'shots fired') !== false || strpos($a,'shooting') !== false || strpos($a,'shot') !== false || strpos($a,'crime scene') !== false || strpos($a,'carjacking') !== false || strpos($a,'shooting investigation') !== false || strpos($a,'power failure') !== false || strpos($a,'power blockout') !== false || strpos($a,'violent ') !== false || strpos($a,'armed') !== false || strpos($a,'homicide') !== false || strpos($a,'stabbing') !== false || strpos($a,'hostage') !== false || strpos($a,'suspect') !== false || strpos($a,'overdose') !== false || strpos($a,'shipwreck') !== false || strpos($a,'helicopter crash') !== false)
{
$sql = "INSERT INTO tweets (screen_name, tweet, tweetid, time_posted, severity) VALUES ('$tweet_name', '$a', '$fullurl', '$full_time', 'low')";
        if(mysqli_query($con, $sql)){
        //echo "Records inserted successfully.";
        } else{
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
}
	   }		   
		
		
			
		
	
		
        // echo "Screen name: ". $items['user']['screen_name']."<br />";
        // echo "Followers: ". $items['user']['followers_count']."<br />";
        // echo "Friends: ". $items['user']['friends_count']."<br />";
        // echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  
<meta charset="UTF-8">  
  
<title>Twitter API SEARCH</title>

</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<lable>Search : <input type="text" name="keyword"/></label><br>
<input type="submit">
</form>
<?php foreach ($tweets->statuses as $key => $tweet) { ?>
   <table border="0"><tr><th> 
Tweet : </th><td>
<img src="<?=$tweet->user->profile_image_url;?>" /></td>
<td><?=$tweet->text; ?><br></td>
<td><?=$tweet->user->url ?></td></tr>
</table>

<?php } ?>
  


</body>
</html> -->
</body>
</html>

