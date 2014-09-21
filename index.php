<?php

if(isset($_POST['user_input'])&&!($_POST['user_inout'])){
	$user_input=$_POST['user_input'];

}
?>
 <hr>
  <form action="edit.php" method="POST">
  <textarea name="user_input" rows="6" cols="30"><?php echo $user_input ?></textarea><br><br>
  <input type="submit" value="submit">
  </form>
 
1.Index .php for if else

<?php
 $name='alex';
 $age=21;
 if(strtolower($name)==='alex')
 {
	if{$age>=21)
	echo'you are over 21';
	if(1==1){
		echo'Yes ,1 is eqal to 1';

	}
}

else{

	'you are not alex';

}
?>

2. error reporting

<?php
error_reporting(E_ALL);
echo $var='Alex'
$var='Billy';
?> 


3. logical operator



4.
 for loop
 for($number=90;$number<=1000; $number++){
 	echo $number.'<br>';
 }
  

5
 switch cases
for($man=1; $man<=5; $man++){

switch($man){

	case 1: echo'he is kamina';
	 break;
	  case 2: echo'he is a good man';
	  break;
	   case 3: echo  ' he is a nobel man';
	   break;
	   case 4: echo'  he wants to live in america';
	    break;
		   
 6. function 
 $food=array('Healthy'=>
	array('salad','vegetables','pasta'),
	'Unhealthy'=>array('Pizza','Ice Cream')
	);
foreach($food as $element=>$inner_array){
	 echo $element.'<br>';
	 foreach($inner_array as $item){
	 	echo $item.'<br>'; 

	 }

}

 

  
 $number1=40;
 $number3=30;


  function add($number1, $number3){
  	 echo $number1 + $number3;

  }
   add($number1,$number3);
  6  display date
 function displayDate($day, $date,$year){
  	echo $day.'' $date. '' $year;

  }
   displayDate('Monday' , 31 ,2011);
 


7. function add


function add($number1, $number2)
{
	$result=$number1+ $number2;
	return $result;
}

 function divide($number1,$number2){
 	$result=$number1/$number2;
 	return $result;

 }
$sum= divide(add (10,10),add(5,5));
echo $sum;
 8 string function .
 $string='This is an example string.';
 $string_word_count=str_word_count($string,2);

 print_r($string_word_count)


  string word count
 . string_reversed

string_length


9.
$string='This is an example string and i want to khnow th value of your life in a liiteral way to mannupulate the' ;
$string_length=strlen($string);
 echo($string_length);





 
10. passing value in an array
.


$food=array('pasta','pizza','salad' ,'vegetable');

echo $food[3];


$food[4]='fruit';

print_r($food);


 11 .passing the value in an array
  $food=array('pasta'=>300, 'pizza'=>1000, 'salad'=>5, 'vegetables'=>90);
  
    echo $food['pasta'];
   print_r($food);


12. using the multi dimention array

  $food=array('Healthy'=>
   	array('salad','vegetable','pasta '),
   	 'unhealthy'=>
   	 array('Pizza','Ice cream',' '));

   echo $food['Healthy'][1];



13. for each statement in array



$food=array('Healthy'=>
	array('salad','vegetables','pasta'),
	'Unhealthy'=>array('Pizza','Ice Cream')
	);
foreach($food as $element=>$inner_array){
	 echo $element.'<br>';
	 foreach($inner_array as $item){
	 	echo $item.'<br>'; 

	 }

}

14.
 finding the  match in the strings



 $string='This is a string';
  if(preg_match('/is/', $string)){
echo'Match found.';

  } else{
  	echo'No match Found. ';

  }

15. more on expression Matching.


 function has_space($string) {
 	if(preg_match('/ /', $string)){

 		return true;
 	}
 	else{
 		return false;

 	}
}


$string='This  doesnothavespace';
if (has_space($string)){ 
	echo'Has at least one space ';

}
else{
	echo'Has no space'.;

}


16. using form for the php
 if (isset($_GET['user_name'])&&!empty($_GET['user_name'])){
 	  $user_name=$_GET['user_name'];
 	  $user_name_lc=strtolower($user_name);

 	   if($user_name_lc=='alex')(
 	   	echo'You are the best.';
 	   	)


 }
?>

 <form action="edit.php" method="GET">
 Name:<input type="text" name="user_name"<br><br>
 <input type="submit" value="submit">
 </form>

