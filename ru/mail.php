
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  
  //Email information
  $admin_email = "oleg@sher.biz";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['car-select'];
// $car-select = $_REQUEST['car-select'];  


$message = '<html><body>';
$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['pickup-location']) . "</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['pickup-date']) . "</td></tr>";
$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
$addURLS = $_POST['addURLS'];
if (($addURLS) != '') {
    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
}
$curText = htmlentities($_POST['curText']);           
if (($curText) != '') {
    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
}
$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";













  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 
<form method="POST">
		<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">Выбирайте класс автомобиля</label>
<!--				<input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>-->
                                <!-- Car select start -->
                        
						 <select type="text" value="Выбирайте машину" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Выбирайте машину';}" name="car-select" id="car-select" required = "required" autofocus>							
							<option value="Category Q" >Smart Fortwo или похожая в категории Q - от 9$ в сутки</option>
							<option value="Category B" >Suzuki Alto или похожая в категории B - от 9$ в сутки</option>
							<option value="Category C" >Toyota Aygo или похожая в категории C - от 10$ в сутки</option>
							<option value="Category D" >Hyundai i20 или похожая в категории D - от 11$ в сутки</option>
							<option value="Category E" >Ford Fiesta или похожая в категории E - от 12$ в сутки</option>
							<option value="Category F" >Kia Forte или похожая в категории F - от 14$ в сутки</option>							
							<option value="Category I" >Mazda 3 или похожая в категории I - от 16$ в сутки</option>
							<option value="Category H" >Honda Civic или похожая в категории H - от 22$ в сутки</option>
							<option value="Category M" >Mazda 6 или похожая в категории M - от 28$ в сутки</option>
<!--                                                    <option value="Category FH" >Honda Insight Hybrid или похожая в категории - от 17$ в сутки</option>-->
							<option value="Category MH" >Honda Accord Hybrid или похожая в категории MH - от 38$ в сутки</option>
							<option value="Category T" >Fiat Doblo(ручник, 5 мест) или похожая в категории T - от 35$ в сутки</option>
							<option value="Category J" >Nissan Qashqai(автомат, 5 мест) или похожая в категории J - от 38$ в сутки</option>
							<option value="Category U" >Mazda 5(автомат, 7 мест) или похожая в категории U - от 35$ в сутки</option>
                                                        <option value="Category V" >Ford Galaxy V(автомат, 7 мест) или похожая в категории V - от 52$ в сутки</option>
                                                        <option value="Category S" >Hyundai i800(ручник, 8 мест) или похожая в категории S - от 59$ в сутки</option>
                                                        <option value="Category V8" >Toyota Sienna(автомат, 8 мест) или похожая в категории V8 - от 75$ в сутки</option>
                                                        <option value="Category Y" >Citroen Jumpy(ручник, 9 мест)или похожая в категории Y - от 49$ в сутки </option>
							<option value="Category Z" >Hyundai i800(автомат, 9 мест) или похожая в категории Z - от 95$ в сутки</option>
                                                        <option value="Category R" >Chevrolet Malibu или похожая в категории R - от 52$ в сутки</option>
                                                        <option value="Category P" >Buick LaCrosse или похожая в категории P - от 71$ в сутки</option>
							<option value="Category K" >BMW 318i или похожая в категории K - от 72$ в сутки</option>
							<option value="Category W" >BMW i535 или похожая в категории W - от 110$ в сутки</option>
							<option value="Category O" >Toyota Highlander(автомат) или похожая в категории O - от 149$ в сутки</option>
						</select>
                             <br />
                      </div>
			<!-- Car select end -->
                     <div class="clearfix"></div>
                      <hr />  
                    
                        <div class="bnr-left">
				<label class="inputLabel">Аренда</label>
<!--				<input class="city" type="text" value="Отделение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>-->
                                <select class="city" type="text" value="Отделение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Отделение';}"  name="pickup-location" id="pickup-location" required=>
                                        <option value="">Отделение</option>
                                        <option value="Аэропорт Бен Гурион">Аэропорт Бен Гурион</option>
                                        <option value="Тель Авив, ул. ха-Яркон, 80">Тель Авив, ул. ха-Яркон, 80</option>
                                        <option value="Тель Авив, ул. ха-Масгер, 9">Тель Авив, ул. ха-Масгер, 9</option>
                                        <option value="Иерусалим, ул. Кинг Давид, 19">Иерусалим, ул. Кинг Давид, 19</option>
                                        <option value="Хайфа, шдерот ха-Гистадрут, 88">Хайфа, шдерот ха-Гистадрут, 88</option>
                                        <option value="Нетания, ул. Усишкин, 1">Нетания, ул. Усишкин, 1</option>
                                        <option value="Тверия, ул. ха-Ярден, 71">Тверия, ул. ха-Ярден, 71</option>
                                        <option value="Эйлат, ул. Шешет ха-Ямим, 3">Эйлат, ул. Шешет ха-Ямим, 3</option>								
                                        <option value="Афула, ул. Менахем Бегин, 70">Афула, ул. Менахем Бегин, 70</option>
                                        <option value="Ашдод, ул. ха-Оргим, 7">Ашдод, ул. ха-Оргим, 7</option>
                                        <option value="Беэр Шева, дерех Хеврон, 129">Беэр Шева, дерех Хеврон, 129</option>
                                        <option value="Бейт Шемеш, ул. Нахалат Зоар, 10">Бейт Шемеш, ул. Нахалат Зоар, 10</option>
                                        <option value="Бней Брак, ул. Каханман, 106">Бней Брак, ул. Каханман, 106</option>
                                        <option value="Бней Брак, ул. Мивца Кадош, 64">Бней Брак, ул. Мивца Кадош, 64</option>
                                        <option value="Герцелия, ул. Аба Евен, 8">Герцелия, ул. Аба Евен, 8</option>
                                        <option value="Холон, ул. ха-Меркава, 73">Холон, ул. ха-Меркава, 73</option>
                                        <option value="Кфар Саба, ул. ха-Таяс, 17">Кфар Саба, ул. ха-Таяс, 17</option>								
                                        <option value="Кирьят Шмона, ул. ха-Ярден, 1">Кирьят Шмона, ул. ха-Ярден, 1</option>
                                        <option value="Нес Циона, ул. ха-Патиш, 10">Нес Циона, ул. ха-Патиш, 10</option>
                                        <option value="Петах Тиква, ул. Жаботински, 82">Петах Тиква, ул. Жаботински, 82</option>
                                        <option value="Реховот, ул. Герцль, 96">Реховот, ул. Герцль, 96</option>
                                        <option value="Ришон ле-Цион, ул. Сахаров, 14">Ришон ле-Цион, ул. Сахаров, 14</option>
                                </select>
                                <input class="date" name="pickup-date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
                                <input type="time" name="pickup-time" id="pickup-time" placeholder="Время" required = "required" value="hh:mm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'hh:mm';}">
			
			</div>
				
                    
                        <div class="bnr-right">
				<label class="inputLabel">Возврат</label>				
<!--				<input class="city" type="text" value="Отделение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>-->
                                <select class="city" onfocus="this.value = '';"   name="dropoff-location" id="dropoff-location" required=>
                                        <option value="">Отделение</option>
                                        <option value="Аэропорт Бен Гурион">Аэропорт Бен Гурион</option>
                                        <option value="Тель Авив, ул. ха-Яркон, 80">Тель Авив, ул. ха-Яркон, 80</option>
                                        <option value="Тель Авив, ул. ха-Масгер, 9">Тель Авив, ул. ха-Масгер, 9</option>
                                        <option value="Иерусалим, ул. Кинг Давид, 19">Иерусалим, ул. Кинг Давид, 19</option>
                                        <option value="Хайфа, шдерот ха-Гистадрут, 88">Хайфа, шдерот ха-Гистадрут, 88</option>
                                        <option value="Нетания, ул. Усишкин, 1">Нетания, ул. Усишкин, 1</option>
                                        <option value="Тверия, ул. ха-Ярден, 71">Тверия, ул. ха-Ярден, 71</option>
                                        <option value="Эйлат, ул. Шешет ха-Ямим, 3">Эйлат, ул. Шешет ха-Ямим, 3</option>								
                                        <option value="Афула, ул. Менахем Бегин, 70">Афула, ул. Менахем Бегин, 70</option>
                                        <option value="Ашдод, ул. ха-Оргим, 7">Ашдод, ул. ха-Оргим, 7</option>
                                        <option value="Беэр Шева, дерех Хеврон, 129">Беэр Шева, дерех Хеврон, 129</option>
                                        <option value="Бейт Шемеш, ул. Нахалат Зоар, 10">Бейт Шемеш, ул. Нахалат Зоар, 10</option>
                                        <option value="Бней Брак, ул. Каханман, 106">Бней Брак, ул. Каханман, 106</option>
                                        <option value="Бней Брак, ул. Мивца Кадош, 64">Бней Брак, ул. Мивца Кадош, 64</option>
                                        <option value="Герцелия, ул. Аба Евен, 8">Герцелия, ул. Аба Евен, 8</option>
                                        <option value="Холон, ул. ха-Меркава, 73">Холон, ул. ха-Меркава, 73</option>
                                        <option value="Кфар Саба, ул. ха-Таяс, 17">Кфар Саба, ул. ха-Таяс, 17</option>								
                                        <option value="Кирьят Шмона, ул. ха-Ярден, 1">Кирьят Шмона, ул. ха-Ярден, 1</option>
                                        <option value="Нес Циона, ул. ха-Патиш, 10">Нес Циона, ул. ха-Патиш, 10</option>
                                        <option value="Петах Тиква, ул. Жаботински, 82">Петах Тиква, ул. Жаботински, 82</option>
                                        <option value="Реховот, ул. Герцль, 96">Реховот, ул. Герцль, 96</option>
                                        <option value="Ришон ле-Цион, ул. Сахаров, 14">Ришон ле-Цион, ул. Сахаров, 14</option>
                                </select>
                                <input class="date" name="dropoff-date" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
                                <input type="time" name="dropoff-time" id="dropoff-time" placeholder="Время" value="hh:mm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'hh:mm';}" required=>
                        
			</div>
<!--				<div class="clearfix"></div>-->
		</div>
	
<div class="ban-bottom">
                    
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->
                       <section> 
                           <hr />
                        Ваше имя <input type="text" name="First_name" placeholder="на английском" required=>
                        Фамилия <input type="text" name="Last_name" placeholder="на английском" required=> <br />
                        Почта <input type="email" name="email" placeholder="на нее придет ваучер" required=>
                        Телефон <input type="text" name="phone" placeholder="включая код страны" required=> <br />
                        Возраст водителя <input type="number" name="age" min="21" max="70" placeholder="от 21" required=> 
                        Стаж вождения <input type="number" name="DriverExperience" min="1" max="70" placeholder="" required=> 
                        </section>
		</div>
<!--		<div class="sear">-->
<!--			<form action="//formspree.io/rentcar@vastama.com" method="POST">
				<button class="seabtn">Search Buses</button>-->
			
                        <section>
                            <hr />
                        <input type="checkbox" name="SuperCDW" value="V"> Добавить отмену личного участия при повреждении машины<br>
                        <input type="checkbox" name="SuperTP" value="V"> Добавить отмену личного участия при угоне машины<br>
                        <input type="checkbox" name="childseat" value="V"> Детское сидение 5$ в день<br>
                        <input type="checkbox" name="GPS" value="V"> Навигатор 10$ в день<br>
<!--                        <input type="checkbox" name="youngDriver" value="youngDriver"> Молодой водитель, менее года<br>-->
                        <input type="checkbox" name="addDriver" value="V"> Дополнительный водитель 2$ в день (Бесплатно при заказе 7+ дней)<br>
                        <input type="checkbox" name="RoadSafe" value="V"> Быстрая помощь на дороге 4$ в день<br>
                        <input type="checkbox" name="Religious" value="V"> Я соблюдаю шабат. Расчет по прейскуранту для верующих <br>
<!--                        <input type="checkbox" name="vehicle1" valu	-->

<textarea name="message" placeholder="Дополнительная информация, вопрос..."></textarea> <br />
                        </section>

<input type="submit" value="ОТПРАВИТЬ" >
</form>                        

 
<?php
  }
?>
