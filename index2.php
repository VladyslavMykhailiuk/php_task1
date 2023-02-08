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


//function getResultAboutShopping()
//{
//    $products = [
//        ['name' => 'Phone', 'price' => '500', 'quantity' => 2],
//        ['name' => 'TV', 'price' => '700', 'quantity' => 1],
//        ['name' => 'Notebook', 'price' => '600', 'quantity' => 4],
//    ];
//
//    foreach ($products as $product) {
//        $sumArr[] = $product['price'] * $product['quantity'];
//        $sum = array_sum($sumArr);
//    }
//    $quantity = array_sum(array_column($products,'quantity'));
//
//   return "Сума покупок: $sum, Загальна к-сть товарів: $quantity";
//}
//
//echo getResultAboutShopping();

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
