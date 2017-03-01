<?php 
if(isset($_POST['submit'])){
    $to = "office@vastama.com"; // this is your Email address
    $reqemail = "admin@sher.biz";
    
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
    $phone = $_POST['phone'];
    $tour_select = $_POST['tour-select'];
    
    $pickup_location = $_POST['pickup-location'];
    $pickup_date = $_POST['pickup-date'];
//    $pickup_time = $_POST['pickup-time'];     
    
    $message = $_POST['message'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
//    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['Last_name'] . " " . $_POST['car-select'] . " " . "rentcarisrael.online";    
            $message = '<html><body>';
            $message .= '<hr />';
            $message .= 'Заказ частной экскурсии на http://www.rentcarisrael.online +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.rentcarisrael.online/images/Thrifty-Israel.jpg" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Tour:</strong> </td><td>" . strip_tags($_POST['tour-select']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>pickup location:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>pickup date:</strong> </td><td>" . strip_tags($_POST['pickup-date']) . "</td></tr>";
//$message .= "<tr style='background: #eee;'><td><strong>pickup time:</strong> </td><td>" . strip_tags($_POST['pickup-time']) . "</td></tr>";


$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Заказ частного гида на http://www.rentcarisrael.online +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
header('Location: http://www.rentcarisrael.online/thankyou.php');
    }
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<title>Индивидуальные экскурсии по Израилю | RentCarIsrael.online</title>
<meta name="keywords" content="Индивидуальные экскурсии по Израилю" />
<meta  name="description"  content="Индивидуальные экскурсии по Израилю звоните +972-58-7710101" />
<meta property="fb:app_id" content="1322511981092474" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="ru_RU" />
<meta property="og:url" content="http://www.rentcarisrael.online/tours.php" />
<meta property="og:image" content="http://www.rentcarisrael.online/images/guide_ru.png"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="460" />
<meta property="og:title" content="Индивидуальные экскурсии по Израилю на вашей машине" />
<meta property="og:description" content="Заплатите только 250$ за индивидуальную экскурсию от лицензированного частного гида, нет предоплаты, заказ онлайн, Whatsapp/Viber +972-58-7710101"/>
<?php include("__header.html"); ?>
</head>
<body>
<?php include("__facebook.html"); ?>
<?php include("__google.html"); ?>
<?php include("__mailru.html"); ?>
<?php include("__yandex.html"); ?>
<?php include("__shema.html"); ?>

<?php include("__top.html"); ?>
<?php include("_tours.php"); ?>
<?php include("__footer.html"); ?>
</body>
</html>


