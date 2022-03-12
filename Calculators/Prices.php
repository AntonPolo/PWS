<?php
//Получаем данные о ценах из Базы данных
include('../php/connection_DB.php');

$PRICE_ARR = $mysql->query("SELECT * FROM `price_rate`");
$PRICE_ARR = $PRICE_ARR->fetch_assoc();

$Price_MosquitoNet_Ordinary = (int)$PRICE_ARR['Price_MosquitoNet_Ordinary'];  //Цена на обычную Москитную сетку
$Price_MosquitoNet_Antikoshka = (int)$PRICE_ARR['Price_MosquitoNet_Antikoshka'];  //Цена на Москитную сетку "Антокошка"

$Price_Double_glazed_Single_chamber_24mm = (int)$PRICE_ARR['Price_Double-glazed_Single-chamber_24mm'];  //Цена на Однокамерный стеклопакет 24мм
$Price_Double_glazed_Two_chamber_32mm = (int)$PRICE_ARR['Price_Double-glazed_Two-chamber_32mm'];  //Цена на Двухкамерный стеклопакет 32мм

$Rate_MosquitoNet_Color = (float)$PRICE_ARR['Rate_MosquitoNet_Color']; //Коэффициент для цветной маскитной сетки
$Rate_Sunscreens_Glass = (float)$PRICE_ARR['Rate_Sunscreens_Glass']; ///Коэффициент для Солнцезащитного стекла
$Rate_Energy_saving_Glass = (float)$PRICE_ARR['Rate_Energy-saving_Glass'];  //Коэффициент для Энергосберегающего стекла

?>