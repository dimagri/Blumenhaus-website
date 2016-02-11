<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="dmitriigrigor@gmail.com";  // e-mail получателя 
 
$backurl="/";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 

$from="​​​​Blumenhaus";

$header="Content-type: text/html; charset=\"windows-1251\"";
	
$header .="From: .$from.";
 
$name=$_POST['name']; 
 
$phone_number=$_POST['phone']; 

$address=$_POST['address'];

$subject="Заявка на ремонт";

// Проверяем валидность e-mail 


$msg=" 
 
<p>Имя: $name</p>
 
<p>Телефон: $tel</p> 

<p>Адрес: $address</p> 
 
"; 

	// Отправляем письмо
	mail("$adminemail", "$subject", "$msg","$header"); 
	
	header("Location: ./"); 
 
?>