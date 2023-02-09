<?php

// Завдання 1
//function numberToPow(int|float $number,int|float $pow) :int|float
//{
//    return pow($number,$pow);
//}
//echo numberToPow(5,2);

// Завдання 2

//function getDayOfWeek(int $number) :string
//{
//    switch ($number){
//        case 1: return "Понеділок";
//        case 2: return "Вівторок";
//        case 3: return "Середа";
//        case 4: return "Четвер";
//        case 5: return "П'ятниця";
//        case 6: return "Понеділок";
//        case 7: return "Понеділок";
//        default: return "Ви ввели число не з діапазону 1-7";
//    }
//}
//
//echo getDayOfWeek(2);

// Завдання 3
//function slug(string $str) :string
//{
//    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/','-',$str)));
//}
//echo slug('Hello World');

// Завдання 4
//
//$products = [
//    ['name' => 'Phone', 'price' => '500', 'quantity' => 2],
//    ['name' => 'TV', 'price' => '700', 'quantity' => 1],
//    ['name' => 'Notebook', 'price' => '600', 'quantity' => 4],
//];
//function getResultAboutShopping(array $arr) :string
//{
//
//
//    foreach ($arr as $product) {
//        $sumArr[] = $product['price'] * $product['quantity'];
//        $sum = array_sum($sumArr);
//    }
//    $quantity = array_sum(array_column($arr,'quantity'));
//
//   return "Сума покупок: $sum, Загальна к-сть товарів: $quantity";
//}
//
//echo getResultAboutShopping($products);

// Завдання 5

//function simpleCalc (int|float $num1,int|float$num2,string $sign) :int|float|string
//{
//    $signsArr = ['+','-','*','/','^'];
//    if(in_array($sign,$signsArr)){
//        switch ($sign) {
//            case '*': return $num1 * $num2;
//            case '+': return $num1 + $num2;
//            case '-': return $num1 - $num2;
//            case '^': return pow($num1,$num2);
//            case '/':
//                if($num2 == 0) {
//                    return 'На 0 ділити не можна';
//                }
//                else {
//                    return $num1 / $num2;
//                }
//        }
//    }
//
//    else {
//        return 'Ви ввели некоректний знак';
//    }
//
//}
//
//echo simpleCalc(10,0,'/');

// Завдання 6
//$array = [25, 17, 136, 12, 79, 15];
//function sumElemArray(array $arr) :int
//{
//
//    $sum = 0;
//    foreach ($arr as $item) {
//        $sum += pow($item, 2);
//    }
//    return $sum;
//}
//echo sumElemArray($array);

// Завдання 7

//function getOrder(string $str) :string
//{
//    $arr = explode(' ', $str);
//    sort($arr);
//    $str = implode(' ', $arr);
//
//    return $str;
//}
//
//echo getOrder("ноти акустика гітара");
//echo getOrder("д б г ф а р н");

// Завдання 8

//function truncateString(string $str, int $maxsymbol) :string
//{
//    if (mb_strlen($str) > $maxsymbol) {
//
//        return mb_substr($str, 0, $maxsymbol+1) . '...';
//    } else {
//        return $str;
//    }
//}
//
//echo truncateString('Some text',5);

// Завдання 9

//function getAbbreviation(string $str) :string
//{
//    $string = mb_strtolower($str);
//
//    $abbreviation = mb_strtoupper(mb_substr($string, 0, 1));
//    for ($i = 1; $i < mb_strlen($string); $i++) {
//        if (mb_substr($string, $i, 1) == ' ') {
//            $symbol = mb_strtoupper(mb_substr($string, $i + 1, 1));
//            $abbreviation .= $symbol;
//        }
//    }
//
//    return $abbreviation;
//}
//echo getAbbreviation('Збройні сили України');
//echo getAbbreviation('Українські телевізійні новини');
//echo getAbbreviation('Команда електронних бібліотек України');

// Завдання 10

//function getStringWithFirstBigLetter(string $str) :string
//{
//    $str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
//    return $str;
//}
//
//echo getStringWithFirstBigLetter('livo pravo veth');
//echo getStringWithFirstBigLetter('Fivo oslo lviv');
//echo getStringWithFirstBigLetter('push kick Reth');
//echo getStringWithFirstBigLetter('рима люкс шик');

// Завдання 11

//function formatEmpty(?string $i='') : ?string
//{
//    if(mb_strlen($i) >0) {
//        return $i;
//    }
//else return "Немає даних";
//}
//
//echo formatEmpty();

// Завдання 12

//$users = [
//    [
//        'id' => 1,
//        'name' => 'asdsada1',
//        // ...
//    ],
//    [
//        'id' => 2,
//        'name' => 'asdsada2',
//        // ...
//    ],
//];
//function pluck(array $array,?string $key) : array
//{
//    return array_column($array,$key);
//}
//
//print_r(pluck($users,'name'));

// Завдання 13

//$users = [
//    [
//        'id' => 1,
//        'name' => 'asdsada1',
//        // ...
//    ],
//    [
//        'id' => 2,
//        'name' => 'asdsada2',
//        // ...
//    ],
//];
//
//function findWhere(array $array,?string $key,?string $value) :array|string
//{
//foreach ($array as $item) {
//    if($item[$key]==$value) {
//        return $item;
//    }
//}
//return 'Упс, такого значення в масиві не знайдено';
//}
//
//print_r(findWhere($users,'id','12'));

// Завдання 14
//
//function exampleGenerator(int $totalExamples,string $sign,?int $minNum,?int $maxNum,bool $showAnswer = true,bool $omittingNumber = false) :void
//{
//    for($i=1;$i<=$totalExamples;$i++) {
//        $randomNumber1 = mt_rand($minNum,$maxNum);
//        $randomNumber2 = mt_rand($minNum,$maxNum);
//        $signsArr = ['+','-','*','/'];
//        $newSignsArr = explode(',', $sign);
//        $randomSign = $newSignsArr[array_rand($newSignsArr)];
//        $resultOperation = 0;
//        if(in_array($randomSign,$signsArr)){
//            switch ($randomSign) {
//                case '*':
//                    $resultOperation = $randomNumber1 * $randomNumber2;
//                    break;
//                case '+':
//                    $resultOperation = $randomNumber1 + $randomNumber2;
//                    break;
//                case '-':
//                    $resultOperation = $randomNumber1 - $randomNumber2;
//                    break;
//                case '/':
//                    if($randomNumber2 == 0) {
//                        echo 'На 0 ділити не можна';
//                    }
//                    else {
//                        $resultOperation= $randomNumber1 / $randomNumber2;
//                    }
//                    break;
//            }
//        }
//        else {
//            echo 'Ви ввели некоректний знак';
//        }
//        if($showAnswer && $omittingNumber) {
//            $res = "$randomNumber1 $randomSign $randomNumber2 = $resultOperation";
//                $arrayOfRes =  explode(' ',$res);
//                $arrayOfRes[array_rand($arrayOfRes)] = '_';
//                $newString = implode(' ',$arrayOfRes);
//                echo "$newString <br>";
//        }
//        elseif ($showAnswer && !$omittingNumber) {
//            echo "$randomNumber1 $randomSign $randomNumber2 = $resultOperation <br>";
//        }
//        elseif (!$showAnswer && $omittingNumber) {
//            $res = "$randomNumber1 $randomSign $randomNumber2";
//                $arrayOfRes =  explode(' ',$res);
//                $arrayOfRes[array_rand($arrayOfRes)] = '_';
//                $newString = implode(' ',$arrayOfRes);
//                echo "$newString = ... <br>";
//        }
//        elseif (!$showAnswer && !$omittingNumber) {
//            echo "$randomNumber1 $randomSign $randomNumber2 = ... <br>";
//        }
//
//    }
//}
//
//echo exampleGenerator(10,'+,-,!',1,10,true,false);

