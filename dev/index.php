<?php 
if(isset($_POST['submit'])){
    $to = "rentcargroup@privateisrael.com"; // this is your Email address
#$to = "rentcar@vastama.com"; // this is your Email address    
$reqemail = "rentcargroup@privateisrael.com";
#    $reqemail = "admin@sher.biz";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
//    $last_name = $_POST['Last_name'];
    $phone = $_POST['phone'];
    
    $car_select = $_POST['car-select'];
    $pickup_location = $_POST['pickup-location'];
    $pickup_date = $_POST['pickup-date'];
    $pickup_time = $_POST['pickup-time'];
    $dropoff_location = $_POST['dropoff-location'];
    $dropoff_date = $_POST['dropoff-date'];    
    $dropoff_time = $_POST['dropoff-time'];
    
    $age = $_POST['age'];
    $DriverExperience = $_POST['DriverExperience'];
    
    $SuperCDW = $_POST['SuperCDW'];
    $SuperTP = $_POST['SuperTP'];
    $childseat = $_POST['childseat'];
//    $GPS = $_POST['GPS'];
    $addDriver = $_POST['addDriver'];
//    $RoadSafe = $_POST['RoadSafe'];    
//    $Tour = $_POST['tour'];
    
    $message = $_POST['message'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
//    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['car-select'] . " " . "rentcarisrael.online";    
            $message = '<html lang="en"><body>';
            $message .= '<hr />';
            $message .= 'Rent car Israel http://www.rentcarisrael.online +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.rentcarisrael.online/images/Thrifty-Israel.jpg" alt="Бронирование автомобиля в Израиле +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
//$message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup location:</strong> </td><td>" . strip_tags($_POST['pickup-location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup date:</strong> </td><td>" . strip_tags($_POST['pickup-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup time:</strong> </td><td>" . strip_tags($_POST['pickup-time']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Dropoff location:</strong> </td><td>" . strip_tags($_POST['dropoff-location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Dropoff date:</strong> </td><td>" . strip_tags($_POST['dropoff-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Dropoff time:</strong> </td><td>" . strip_tags($_POST['dropoff-time']) . "</td></tr>";
$message .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";
$message .= "<tr><td><strong>Driver Experience:</strong> </td><td>" . strip_tags($_POST['DriverExperience']) . "</td></tr>";
$message .= "<tr><td><strong>SuperCDW:</strong> </td><td>" . strip_tags($_POST['SuperCDW']) . "</td></tr>";
$message .= "<tr><td><strong>SuperTP:</strong> </td><td>" . strip_tags($_POST['SuperTP']) . "</td></tr>";
$message .= "<tr><td><strong>Children seat:</strong> </td><td>" . strip_tags($_POST['childseat']) . "</td></tr>";
// $message .= "<tr><td><strong>GPS:</strong> </td><td>" . strip_tags($_POST['GPS']) . "</td></tr>";
// $message .= "<tr><td><strong>Roadsafe:</strong> </td><td>" . strip_tags($_POST['RoadSafe']) . "</td></tr>";
$message .= "<tr><td><strong>Additional driver:</strong> </td><td>" . strip_tags($_POST['addDriver']) . "</td></tr>";
//$message .= "<tr><td><strong>Tour:</strong> </td><td>" . strip_tags($_POST['tour']) . "</td></tr>";
$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Rent car in Israel http://www.rentcarisrael.online +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
//header('Location: http://www.rentcarisrael.online/thankyou.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Car|Rental Landingpage</title>


  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <!-- Bootstrap -->
  <link href="css/animate.css" rel="stylesheet">

  <!-- Google Font Lato -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Plugin Styles -->
  <link href="css/datepicker.css" rel="stylesheet">


  <!-- Main Styles -->
  <link href="css/styles-red.css" rel="stylesheet">
  <!-- Available main styles: styles-red.css, styles-green.css -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/ie8fix.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <![endif]-->


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">

  </head>
  <body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

  <!-- Header start -->
  <header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

      <div class="row container box">
          <div class="col-md-5">
              <!-- Logo start -->
              <div class="brand">
                  <h1>
<!--                      <a class="scroll-to" href="#top"><img class="img-responsive" src=".img/logo-red.gif" alt="Car|Rental"></a>-->
                      Car Rental Israel
                  </h1>
                  by Vastama Ltd 
                    
              </div>
              <!-- Logo end -->
          </div>

          <div class="col-md-7">
              <div class="pull-right">
                  <div class="header-info pull-right">
                      <div class="contact pull-left">+44 7978204454(English, phone only)<br> +7-499-1123-995(Russian, phone only) <br>+972-58-771-0101(WhatsApp/Viber, chat only)</div>
                      
                      <!-- Language Switch start -->
                      <div class="language-switch pull-right">
                          <div class="dropdown">
   <!--                            <a data-toggle="dropdown" href="#" id="language-switch-dropdown">Select your language </a> 
                               <ul class="dropdown-menu" role="menu" aria-labelledby="language-switch-dropdown">
                                  <li><a href="#"><img src="img/flags/United-States.png" alt="usa"> English</a></li>
                                  <li><a href="#"><img src="img/flags/Germany.png" alt="germany"> German</a></li>
                                  <li><a href="#"><img src="img/flags/France.png" alt="france"> French</a></li>
                              </ul> -->
                          </div>
                      </div>
                      <!-- Language Switch end -->
                  </div>
              </div>

              <div class="clearfix"></div>

              <!-- start navigation -->
              <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                      <!-- Toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="img/logo-red.gif" alt="Car|Rental"></a>
                      </div>
                      <!-- Collect the nav links, for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <!-- Nav-Links start -->
                          <ul class="nav navbar-nav navbar-right">
                              <!-- <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                              <li><a href="#services" class="scroll-to">Services</a></li>
                              <li><a href="#vehicles" class="scroll-to">Vehicle Models</a></li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="blog-posts.php">Blog Posts</a></li>
                                      <li><a href="blog-single-post.php">Blog Single Post</a></li>
                                      <li><a href="error404.php">Error 404</a></li>
                                  </ul>
                              </li> 
                              <!-- <li><a href="#locations" class="scroll-to">Locations</a></li> 
                              <li><a href="#contact" class="scroll-to">Contact</a></li>-->
                          </ul>
                          <!-- Nav-Links end -->
                      </div>
                  </div>
              </nav>
              <!-- end navigation -->
          </div>
      </div>

  </header>
  <!-- Header end -->



    <!-- Teaser start -->
    <section id="teaser">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12 pull-right">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title">Luxury car from from $2228 day
                    <span class="subtitle">Treat yourself in USA</span></h1>
                    <div class="car-img">
                      <img src="img/mazda3.png" class="img-responsive" alt="car1">
                    </div>
                  </div>
                  <div class="item">
                    <h1 class="title">Get 15% off your rental
                      <span class="subtitle">Plan your trip now</span></h1>
                      <div class="car-img">
                        <img src="img/hyundai.png" class="img-responsive" alt="car1">
                      </div>
                    </div>
                    <div class="item">
                    <h1 class="title">Get 15% off your rental
                      <span class="subtitle">Plan your trip now</span></h1>
                      <div class="car-img">
                        <img src="img/Sienna.png" class="img-responsive" alt="car1">
                      </div>
                    </div>
                    <div class="item">
                    <h1 class="title">Get 15% off your rental
                      <span class="subtitle">Plan your trip now</span></h1>
                      <div class="car-img">
                        <img src="img/bmw.jpg" class="img-responsive" alt="car1">
                      </div>
                    </div>
                    <div class="item">
                    <h1 class="title">Get 15% off your rental
                      <span class="subtitle">Plan your trip now</span></h1>
                      <div class="car-img">
                        <img src="img/hyundai_small.png" class="img-responsive" alt="car1">
                      </div>
                    </div>
		<div class="item">
                    <h1 class="title">Get 15% off your rental
                      <span class="subtitle">Plan your trip now</span></h1>
                      <div class="car-img">
                        <img src="img/mercedes.jpg" class="img-responsive" alt="car1">
                      </div>
                    </div>
                  
                  Contact Us: 
<br>+44 7978204454(English, phone only)
<br>+7-499-1123-995(Russian, phone only)
<br>+972-58-771-0101(WhatsApp/Viber, chat only)
                  </div>
              
        
                  <!-- Wrapper for slides end -->

                  <!-- Slider Controls start -->
                  <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a> -->
                  <!-- <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a> -->
                  <!-- Slider Controls end -->
                </div>
              </div>
              <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                  <form action="#" method="post" name="car-select-form" id="car-select-form">

                    <div class="alert alert-danger hidden" id="car-select-form-msg">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <strong>Note:</strong> All fields required!
                    </div>
                      
                      
                       
                    
                      

                    <!-- Car select start -->
                    <div class="styled-select-car">
                      <select name="car-select" id="car-select" required>
                        <option value="">Select your car type</option>                                             						
                        <option value="Category Q" >Fiat 500(two seats) or similar in category Q - from 24$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category B" >Kia Picanto(manual) or similar in category B - from 24$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category C" >Toyota Aygo(robotic) or similar in category C - from 25$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category D" >Hyundai i20(automatic) or similar in category D - from 26$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category E" >Ford Fiesta(automatic) or similar in category E - from 27$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category F" >Kia Forte(automatic) or similar in category F - from 30$ per day(renter’s responsibility - 475$)</option>							
                        <option value="Category I" >Mazda 3(automatic) or similar in category I - from 32$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category H" >Honda Civic(automatic) or similar in category H - from 41$ per day(renter’s responsibility - 715$)</option>
                        <option value="Category M" >Mazda 6(automatic) or similar in category M - from 47$ per day(renter’s responsibility - 715$)</option>
                        <option value="Category MH" >Honda Accord Hybrid(automatic) or similar in category MH - from 57$ per day(renter’s responsibility - 715$)</option>
                        <option value="Category T" >Fiat Doblo(manual, 5 seats) or similar in category T - from 60$ per day(renter’s responsibility - 475$)</option>
                        <option value="Category J" >Hyundai Tucson(automatic, 5 seats) or similar in category J - from 63$ per day(renter’s responsibility - 715$)</option>
                        <option value="Category U" >Mazda 5(automatic, 7 seats) or similar in category U - from 60$ per day(renter’s responsibility - 715$)</option>
                        <option value="Category V" >Mitsubishi Outlander(automatic, 7 seats) or similar in category V - from 77$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category S" >Hyundai i800(manual, 8 seats) or similar in category S - from 104$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category V8" >Toyota Sienna(automatic, 8 seats) or similar in category V8 - from 120$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category Y" >Citroen Jumpy(manual, 9 seats)or similar in category Y - from 94$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category Z" >Hyundai i800(automatic, 9 seats) or similar in category Z - from 131$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category P" >Volvo S80(automatic) or similar in category P - from 116$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category K" >BMW 318i(automatic) or similar in category K - from 84$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category W" >BMW i535(automatic) or similar in category W - from 155$ per day(renter’s responsibility - 960$)</option>
                        <option value="Category O" >Toyota Highlander(automatic) or similar in category O - from 174$ per day(renter’s responsibility - 960$)</option>
						
                      </select>
                    </div>
                    <!-- Car select end -->

                    
                    
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-map-marker"></span> Pick-up
                    </span>
                    <div class="styled-select-car">
                      <select name="pickup-location" id="pick-up-location" required>
                          
                            <option value="Ben Gurion Airport">Ben Gurion Airport</option>
                            <option value="80 Hayarkon Street, Tel Aviv">80 Hayarkon Street, Tel Aviv</option>
                            <option value="9 Hamasger Street, Tel Aviv">9 Hamasger Street, Tel Aviv</option>
                            <option value="19 King David Street, Jerusalem">19 King David Street, Jerusalem</option>
                            <option value="88 Hahistadrut Street, Haifa">88 Hahistadrut Street, Haifa</option>
                            <option value="1 Ussishkin Street, Natanya">1 Ussishkin Street, Natanya</option>
                            <option value="71 Hayarden Street, Tiberias">71 Hayarden Street, Tiberias</option>
                            <option value="3 Sheshet Hayamim Street, Eilat">3 Sheshet Hayamim Street, Eilat</option>								
                            <option value="71 Menachem Begin Street, Afula">71 Menachem Begin Street, Afula</option>
                            <option value="7 Haorgim Street, Ashdod">7 Haorgim Street, Ashdod</option>
                            <option value="18 Itzhak Nafha Street, Beer Sheva">18 Itzhak Nafha Street, Beer Sheva</option>
                            <option value="10 Nahal Zohar Street, Beit Shemesh">10 Nahal Zohar Street, Beit Shemesh</option>
                            <option value="106 Kahanman Street, Bnei Brak">106 Kahanman Street, Bnei Brak</option>
                            <option value="64 Mivtza Kadesh Street, Bnei Brak">64 Mivtza Kadesh Street, Bnei Brak</option>
                            <option value="8 Aba Even Street, Herzeliya">8 Aba Even Street, Herzeliya</option>
                            <option value="73 Hamerkava Street, Holon">73 Hamerkava Street, Holon</option>
                            <option value="17 Ha'Taas Street, Kfar Saba">17 Ha'Taas Street, Kfar Saba</option>								
                            <option value="1 Hayarden Street, Kiryat Shmone">1 Hayarden Street, Kiryat Shmone</option>
                            <option value="10 Hapatish Street, Nes Tziona">10 Hapatish Street, Nes Tziona</option>
                            <option value="82 Jabotinski Street, Petach Tikva">82 Jabotinski Street, Petach Tikva</option>
                            <option value="96 Herzl Street, Rehovot">96 Herzl Street, Rehovot</option>
                            <option value="14 David Saharov Street, Rishon LeTsiyon">14 David Saharov Street, Rishon LeTsiyon</option>
                                			
                      </select>
                    </div>
                    <!-- Pick-up date/time start -->
                    <div class="datetime pick-up">
                      <div class="date pull-left">
                        <div class="input-group">
<!--                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>-->
                          <input required type="text" name="pickup-date" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select required name="pickup-time" id="pickup-location-time">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                          </select>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- Pick-up date/time end -->
                    
                    <hr />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-map-marker"></span> Drop-Off
                    </span>
                    <div class="styled-select-car">
                      <select required name="dropoff-location" id="drop-off-location">
                          
                            <option value="Ben Gurion Airport">Ben Gurion Airport</option>
                            <option value="80 Hayarkon Street, Tel Aviv">80 Hayarkon Street, Tel Aviv</option>
                            <option value="9 Hamasger Street, Tel Aviv">9 Hamasger Street, Tel Aviv</option>
                            <option value="19 King David Street, Jerusalem">19 King David Street, Jerusalem</option>
                            <option value="88 Hahistadrut Street, Haifa">88 Hahistadrut Street, Haifa</option>
                            <option value="1 Ussishkin Street, Natanya">1 Ussishkin Street, Natanya</option>
                            <option value="71 Hayarden Street, Tiberias">71 Hayarden Street, Tiberias</option>
                            <option value="3 Sheshet Hayamim Street, Eilat">3 Sheshet Hayamim Street, Eilat</option>								
                            <option value="71 Menachem Begin Street, Afula">71 Menachem Begin Street, Afula</option>
                            <option value="7 Haorgim Street, Ashdod">7 Haorgim Street, Ashdod</option>
                            <option value="18 Itzhak Nafha Street, Beer Sheva">18 Itzhak Nafha Street, Beer Sheva</option>
                            <option value="10 Nahal Zohar Street, Beit Shemesh">10 Nahal Zohar Street, Beit Shemesh</option>
                            <option value="106 Kahanman Street, Bnei Brak">106 Kahanman Street, Bnei Brak</option>
                            <option value="64 Mivtza Kadesh Street, Bnei Brak">64 Mivtza Kadesh Street, Bnei Brak</option>
                            <option value="8 Aba Even Street, Herzeliya">8 Aba Even Street, Herzeliya</option>
                            <option value="73 Hamerkava Street, Holon">73 Hamerkava Street, Holon</option>
                            <option value="17 Ha'Taas Street, Kfar Saba">17 Ha'Taas Street, Kfar Saba</option>								
                            <option value="1 Hayarden Street, Kiryat Shmone">1 Hayarden Street, Kiryat Shmone</option>
                            <option value="10 Hapatish Street, Nes Tziona">10 Hapatish Street, Nes Tziona</option>
                            <option value="82 Jabotinski Street, Petach Tikva">82 Jabotinski Street, Petach Tikva</option>
                            <option value="96 Herzl Street, Rehovot">96 Herzl Street, Rehovot</option>
                            <option value="14 David Saharov Street, Rishon LeTsiyon">14 David Saharov Street, Rishon LeTsiyon</option>
                                			
                      </select>
                    </div>
                    
                      

                    <!-- Drop-off date/time start -->
                    <div class="datetime drop-off">
                      <div class="date pull-left">
                        <div class="input-group">
<!--                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>-->
                          <input type="text" required name="dropoff-date" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select name="dropoff-time" id="drop-off-time" required>
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                          </select>
                        </div>
                      </div>
                        
                        
                     
                        
                        
                        
                        
                        
                      <div class="clearfix"></div>
                    </div>
                    <!-- Drop-off date/time end -->
                    
                    <!--renter info start --> 
                    <hr />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span> Renter info
                    </span>
                    
                    <input type="text" name="First_name" required class="form-control" placeholder="First and Last Name">  
<!--                     <input type="text" name="Last_name" required class="form-control" placeholder="Last Name">  -->
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" class="form-control" placeholder="Email address">  
                      <input type="text" name="phone" required class="form-control" placeholder="Phone/WhatsApp/Viber" >  
                      <input type="text" name="message" class="form-control" placeholder="message">  
                        
                        <div >Driver's age:                         
                       <label class="radio-inline"><input type="radio" name="age" value="21-22">21-22</label>
                       <label class="radio-inline"><input type="radio" name="age" value="23+">23+</label>
                       <label class="radio-inline"><input type="radio" name="age" value="25+">25+</label>
                       <label class="radio-inline"><input type="radio" name="age" value="28+">28+</label>
                       </div>
                        <div>Drivers License years: 
                       <label class="radio-inline"><input type="radio" name="DriverExperience" value="1-2">1-2</label>
                       <label class="radio-inline"><input type="radio" name="DriverExperience" value="3+">3+</label>							  
                      </div>
                        <div class="checkbox">
                        Reduce responsibility to Zero in case of: <br>
                        
                        <label><input type="checkbox" name="SuperCDW" value="V">damage to the vehicle | </label>
                        <label><input type="checkbox" name="SuperTP" value="V">theft of the vehicle</label>
              </div>
                <div class="checkbox">
                        <label><input type="checkbox" name="addDriver" value="V">Additional Driver</label>
                </div>
                <div class="checkbox">
                        <label><input type="checkbox" name="childseat" value="V">Child Seat</label>
                </div>
<!--                <div class="checkbox">
                        <label><input type="checkbox" name="tour" value="V">interesting in private tour</label>
                </div>-->
                       <!--renter info stop -->
                    <div class="clearfix"></div>

                    <input type="submit" class="submit" name="submit" value="Book Car" id="checkoutModalLabel">
                  </form>

                </div>
              </div>
                
        </div>
          </div>
        </section>
     
      
        <!-- Teaser end -->



        <!-- Services start -->
<!--        <section id="services" class="container">
          <div class="row">
            <div class="col-md-12 title">
              <h2>Customer Services</h2>
              <span class="underline">&nbsp;</span>
            </div>

             Service Box start 
            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Special rates on car booking</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
             Service Box end 

             Service Box start 
            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Mobile Phone Reservation</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
             Service Box end 

             Service Box start 
            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Unlimited Miles Car Rental</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
             Service Box end 

             Service Box start 
            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">One Way Car Rentals</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
             Service Box end 

          </div>
        </section>-->
        <!-- Services end -->



         <!-- Vehicles start -->
<!--          <section id="vehicles" class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title wow fadeInDown" data-wow-offset="200">Vehicle Models - <span class="subtitle">Our rental fleet at a glance</span></h2>
              </div>

               Vehicle nav start 
              <div class="col-md-3 vehicle-nav-row wow fadeInUp" data-wow-offset="100">
                <div id="vehicle-nav-container">
                  <ul class="vehicle-nav">
                      <li class="active"><a href="#vehicle-1">VW Golf VII</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-2">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-3">Toyota Camry</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-4">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-5">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-6">VW Passat CC</a><span class="active">&nbsp;</span></li>

                      <li><a href="#vehicle-7">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Toyota Camry</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-11">VW Passat CC</a><span class="active">&nbsp;</span></li>

                      <li><a href="#vehicle-7">Audi A1 S-LINE 12</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Toyota Camry 13</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">BMW 320 ModernLine 14</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">Mercedes-Benz GLK 15</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-11">VW Passat CC 16</a><span class="active">&nbsp;</span></li>

                      <li><a href="#vehicle-7">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Toyota Camry</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-11">VW Passat CC</a><span class="active">&nbsp;</span></li>
                  </ul>
                </div>

                  <div class="vehicle-nav-control">
                      <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>
                      <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>
                  </div>

              </div>
               Vehicle nav end 

               Vehicle 1 data start 
              <div class="vehicle-data" id="vehicle-1">
                <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle1.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                  <div class="vehicle-price">$ 37.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
               Vehicle 1 data end 

               Vehicle 2 data start 
              <div class="vehicle-data" id="vehicle-2">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle2.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 70.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
               Vehicle 2 data end 

               Vehicle 3 data start 
              <div class="vehicle-data" id="vehicle-3">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle3.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
               Vehicle 3 data end 

               Vehicle 4 data start 
              <div class="vehicle-data" id="vehicle-4">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle4.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
               Vehicle 4 data end 

               Vehicle 5 data start 
              <div class="vehicle-data" id="vehicle-5">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
               Vehicle 5 data end 

               Vehicle 6 data start 
              <div class="vehicle-data" id="vehicle-6">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle6.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
               Vehicle 6 data end 

                 Vehicle 7 data start 
                <div class="vehicle-data" id="vehicle-7">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle2.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 70.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                 Vehicle 7 data end 

                 Vehicle 8 data start 
                <div class="vehicle-data" id="vehicle-8">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle3.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                 Vehicle 8 data end 

                 Vehicle 9 data start 
                <div class="vehicle-data" id="vehicle-9">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle4.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                 Vehicle 9 data end 

                 Vehicle 10 data start 
                <div class="vehicle-data" id="vehicle-10">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                 Vehicle 10 data end 

                 Vehicle 11 data start 
                <div class="vehicle-data" id="vehicle-11">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle6.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                 Vehicle 11 data end 

            </div>
          </section>-->
          <!-- Vehicles end -->



          



              



        



       



        <!-- Contact start -->
<!--        <section id="contact" class="container wow bounceInUp" data-wow-offset="50">
          <div class="row">
            <div class="col-md-12">
              <h2>Contact Us</h2>
            </div>
            <div class="col-md-4 col-xs-12 pull-right">
              <h4 class="contact-box-title">Customer Center</h4>
              <div class="contact-box">
                <img src="img/contact-box-img1.jpg" alt="contact-img">
                <div class="contact-box-name">Sarah Connor</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
              </div>
              <div class="contact-box-border">&nbsp;</div>

              <div class="contact-box-divider">&nbsp;</div>

              <h4 class="contact-box-title">Change or Cancel Reservation</h4>
              <div class="contact-box">
                <img src="img/contact-box-img2.jpg" alt="contact-img">
                <div class="contact-box-name">Mike Smith</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
              </div>
              <div class="contact-box-border">&nbsp;</div>

              <div class="contact-box">
                <img src="img/contact-box-img3.jpg" alt="contact-img">
                <div class="contact-box-name">Jane Doe</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
              </div>
              <div class="contact-box-border">&nbsp;</div>
            </div>
            <div class="col-md-8 col-xs-12 pull-left">
              <p class="contact-info">You have any questions or need additional information? <br>
                <span class="address"><span class="highlight">Address:</span>  Car|Rental / 3861 Sepulveda Blvd. / Culver City, CA 90230</span></p>
                <form action="#" method="post" id="contact-form" name="contact-form">
                    <input type="hidden" name="action" value="send_contact_form"/>

                  <div class="alert hidden" id="contact-form-msg"></div>

                  <div class="form-group">
                    <input type="text" class="form-control first-name text-field" name="first-name" placeholder="First Name:">
                    <input type="text" class="form-control last-name text-field" name="last-name" placeholder="Last Name:">
                    <div class="clearfix"></div>
                  </div>

                  <div class="form-group">
                    <input type="tel" class="form-control telephone text-field" name="telephone" placeholder="Telephone:">
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control message" name="message" placeholder="Message:"></textarea>
                  </div>

                    <input type="submit" class="btn submit-message" name="submit-message" value="Submit Message">


                </form>
              </div>

            </div>
          </section>-->
          <!-- Contact end -->


<!--          <a href="#" class="scrollup">ScrollUp</a>-->


          <!-- Footer start -->
<!--          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <ul class="footer-nav">
                    <li><a class="scroll-to" href="#top">Home</a></li>
                    <li><a class="scroll-to" href="#services">Service</a></li>
                    <li><a class="scroll-to" href="#vehicles">Vehicle Models</a></li>
                    <li><a class="scroll-to" href="#reviews">Reviews</a></li>
                    <li><a class="scroll-to" href="#locations">Locations</a></li>
                    <li><a class="scroll-to" href="#contact">Contact</a></li>
                  </ul>
                  <div class="clearfix"></div>
                  <p class="copyright">©2014 Themeinjection, All Rights Reserved</p>
                </div>
              </div>
            </div>
          </footer>-->
          <!-- Footer end -->



          <!-- Checkout Modal Start -->
<!--          <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="#" method="post" id="checkout-form" name="checkout-form">
                    <input type="hidden" name="action" value="send_inquiry_form"/>

                   Modal header start 
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Complete reservation</h4>
                  </div>
                   Modal header end 

                   Modal body start 
                  <div class="modal-body">

                     Checkout Info start 
                    <div class="checkout-info-box">
                      <h3><i class="fa fa-info-circle"></i> Upon completing this reservation enquiry, you will receive::</h3>
                      <p>Your rental voucher to produce on arrival at the rental desk and a toll-free customer support number.</p>
                    </div>
                     Checkout Info end 

                     Checkout Rental Info start 
                    <div class="checkout-vehicle-info">
                      <div class="location-date-info">
                        <h3>Location & Date</h3>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-calendar"></span>
                          <h4 class="info-box-title">Pick-Up Time</h4>
                          <p class="info-box-description"><span id="pick-up-date-ph"></span> at <span id="pick-up-time-ph"></span></p>
                          <input type="hidden" name="pick-up" id="pick-up" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-calendar"></span>
                          <h4 class="info-box-title">Drop-Off Time</h4>
                          <p class="info-box-description"><span id="drop-off-date-ph"></span> at <span id="drop-off-time-ph"></span></p>
                          <input type="hidden" name="drop-off" id="drop-off" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Pick-Up Location</h4>
                          <p class="info-box-description" id="pickup-location-ph"></p>
                          <input type="hidden" name="pickup-location" id="pickup-location" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Drop-Off Location</h4>
                          <p class="info-box-description" id="dropoff-location-ph"></p>
                          <input type="hidden" name="dropoff-location" id="dropoff-location" value="">
                        </div>
                      </div>

                      <div class="vehicle-info">
                        <h3>CAR: <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">[ Vehicle Models ]</a>
                        <input type="hidden" name="selected-car" id="selected-car" value="">
                        <div class="clearfix"></div>
                        <div class="vehicle-image">
                          <img class="img-responsive" id="selected-vehicle-image" src="img/vehicle1.jpg" alt="Vehicle">
                        </div>
                      </div>

                      <div class="clearfix"></div>

                    </div>
                     Checkout Rental Info end 

                    <hr>

                    

                  

                  
                </div>
                 Modal body end 

                 Modal footer start 
                <div class="modal-footer">
                  <span class="btn-border btn-gray">
                    <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Cancel</button>
                  </span>
                  <span class="btn-border btn-yellow">
                    <button type="submit" class="btn btn-primary btn-yellow">Reserve now</button>
                  </span>
                </div>
                 Modal footer end 

              </form>
            </div>
          </div>
        </div>-->
        <!-- Checkout Modal end -->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.autocomplete.min.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/locations-autocomplete.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
<!--        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>-->
        <script src="js/gmap3.min.js"></script>
      

        <!--[if !(gte IE 8)]><!-->
            <script src="js/wow.min.js"></script>
            <script>
                // Initialize WOW
                //-------------------------------------------------------------
                new WOW({mobile: false}).init();
            </script>
        <!--<![endif]-->

        <script src="js/custom.js"></script>



      </body>
      </html>

