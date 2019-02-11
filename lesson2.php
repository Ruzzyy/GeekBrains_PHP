<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
значения. Затем написать скрипт, который работает по следующему принципу:

a. Если $a и $b положительные, вывести их разность.
b. Если $а и $b отрицательные, вывести их произведение.
c. Если $а и $b разных знаков, вывести их сумму.
Ноль можно считать положительным числом.*/
$a = 7;
$b = 0;

if($a>=0 & $b>=0){
echo $a - $b;
}
else if($a < 0 & $b<0){
	echo $a * $b;
}
else{
	echo $a + $b;
}
echo '<br>';

/*2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
switch организовать вывод чисел от $a до 15.*/

$num = 5;

switch($num){
	case 0: 
		echo 0;
		echo '<br>';
	case 1: 
		echo 1;
		echo '<br>';
	case 2: 
		echo 2;
		echo '<br>';
	case 3: 
		echo 3;
		echo '<br>';
	case 4: 
		echo 4;
		echo '<br>';
	case 5: 
		echo 5;
		echo '<br>';
	case 6: 
		echo 6;
		echo '<br>';
	case 7: 
		echo 7;
		echo '<br>';
	case 8: 
		echo 8;
		echo '<br>';
	case 9: 
		echo 9;
		echo '<br>';
	case 10:
		echo 10;
		echo '<br>';
	case 11: 
		echo 11;
		echo '<br>';
	case 12: 
		echo 12;
		echo '<br>';
	case 13: 
		echo 13;
		echo '<br>';
	case 14: 
		echo 14;
		echo '<br>';
	case 15: 
		echo 15;
		echo '<br>';
}

/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.*/
function sum($x, $y){
	return $x + $y;
}

function sub($x, $y){
	return $x - $y;
}

function mul($x, $y){
	return $x * $y;
}

function div($x, $y){
	return $x / $y;
}

echo sum(3,5);
echo '<br>';

/* 
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/ 
function mathOperation($arg1, $arg2, $operation){
	$result = 0;
	switch($operation){
		case '+': 
			$result += sum($arg1,$arg2);
			break;
		case '-':
			$result += sub($arg1,$arg2);
			break;
		case '*': 
			$result += mul($arg1,$arg2);
			break;
		case '/':
			$result += div($arg1,$arg2);
			break;
		default:
			echo 'Укажите арифметическую операцию';
	}

	return $result;
};

echo mathOperation(10,2,'*');
echo '<br>';

/*5.  *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
power($val, $pow), где $val – заданное число, $pow – степень.*/

function power($val, $pow){
	
	if($pow == 1){
		return $val;
	}
	
		return $val * power($val, $pow - 1);
};	
echo power(2,3);


/* 6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты  */
 function numberAndNoun($number, $form1, $form2, $form3){
 	$less100 = $number % 100;

 	if($less100 > 10 && $less100 < 20){
 		return "$number $form1";
 	}

 	$rest = $less100 % 10;

 	if($rest == 1){
 		return "$number $form2";
 	}

 	if($rest >= 2 && $rest <=4){
 		return "$number #form3";
 	}

 	return "$number $form1";
 }

 $h = rand(0,60);

 echo numberAndNoun($h, 'часов', 'час', 'часа');

