<?php 
$price = 300;
$is_match = false;

// 等しい
$is_match = ($price == 300);
var_dump($is_match);

// 大きい・小さい
// 300より大きい
$is_match = ($price > 300);
var_dump($is_match);

// 500より小さい
$is_match = ($price < 500);
var_dump($is_match);

// 以上・以下
// 300以上
$is_match = ($price >= 300);
var_dump($is_match);

// 500以下
$is_match = ($price <= 500);
var_dump($is_match);

// 等しくない
$is_match = ($price != 300);
var_dump($is_match);

// 同値（どうち）：値とデータ型が同じ
$price1 = 300;
$price2 = "300";

echo "<br>"; //HTMLの改行
var_dump($price1);
var_dump($price2);

// 等しい
$is_match = ($price1 == $price2);
var_dump($is_match);

// データ型も含めて等しい
$is_match = ($price1 === $price2);
var_dump($is_match);

// データ型も含めて等しくない
$is_match = ($price1 !== $price2);
var_dump($is_match);

// 三項演算
$price = 700;
$money = 500;
$message = "";

$message = ($price < $money) ? "購入できます" : "購入できません";
echo $message;

// NULL合体演算
// $user_name = "東京　太郎";
$display_name = ($user_name) ?? "匿名";
echo $display_name;

// エルビス演算子
// $price = 0;
// $price = 100;
$price = "";
$result = ($price) ?: "Empty";
echo $result;
?>