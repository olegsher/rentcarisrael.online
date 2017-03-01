<?php 
if(isset($_POST['submit'])){
    $to = "admin@sher.biz"; // this is your Email address
    $reqemail = "admin@sher.biz";
    
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
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
    $GPS = $_POST['GPS'];
    $addDriver = $_POST['addDriver'];
    $RoadSafe = $_POST['RoadSafe'];    
    $Religious = $_POST['Religious'];
    
    $message = $_POST['message'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['Last_name'] . " " . $_POST['car-select'] . " " . "rentcarisrael.online";    
            $message = '<html><body>';
$message .= '<img src="http://www.rentcarisrael.online/images/Thrifty-Israel.jpg" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Car:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>pickup location:</strong> </td><td>" . strip_tags($_POST['pickup-location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>pickup date:</strong> </td><td>" . strip_tags($_POST['pickup-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>pickup time:</strong> </td><td>" . strip_tags($_POST['pickup-time']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>dropoff location:</strong> </td><td>" . strip_tags($_POST['dropoff-location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>dropoff date:</strong> </td><td>" . strip_tags($_POST['dropoff-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>dropoff time:</strong> </td><td>" . strip_tags($_POST['dropoff-time']) . "</td></tr>";
$message .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";
$message .= "<tr><td><strong>Driver Experience:</strong> </td><td>" . strip_tags($_POST['DriverExperience']) . "</td></tr>";
$message .= "<tr><td><strong>SuperCDW:</strong> </td><td>" . strip_tags($_POST['SuperCDW']) . "</td></tr>";
$message .= "<tr><td><strong>SuperTP:</strong> </td><td>" . strip_tags($_POST['SuperTP']) . "</td></tr>";
$message .= "<tr><td><strong>Children seat:</strong> </td><td>" . strip_tags($_POST['childseat']) . "</td></tr>";
$message .= "<tr><td><strong>GPS:</strong> </td><td>" . strip_tags($_POST['GPS']) . "</td></tr>";
$message .= "<tr><td><strong>Roadsafe:</strong> </td><td>" . strip_tags($_POST['RoadSafe']) . "</td></tr>";
$message .= "<tr><td><strong>Add driver:</strong> </td><td>" . strip_tags($_POST['addDriver']) . "</td></tr>";
$message .= "<tr><td><strong>Religious:</strong> </td><td>" . strip_tags($_POST['Religious']) . "</td></tr>";
$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Ваш заказ автомобиля на rentcarisrael.online";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
header('Location: http://www.rentcarisrael.online/thankyou.php');
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Недорогая аренда прокат автомобиля в Израиле | RentCarIsrael.online</title>
<meta name="keywords" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, arenda avto, стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
<meta  name="description"  content="Аренда прокат автомобиля в Израиле. Бюджетные авто, Миниваны, семейные машины, класс люкс и джипы звоните +972-58-7710101" />
<?php include("__header.html"); ?>
</header>
<body>
<?php include("__facebook.html"); ?>
<?php include("__google.html"); ?>
<?php include("__mailru.html"); ?>
<?php include("__yandex.html"); ?>
<?php include("__shema.html"); ?>
TEST TEST
<?php include("__top.html"); ?>
<?php include("_index.php"); ?>
<?php include("__footer.html"); ?>
</body>

