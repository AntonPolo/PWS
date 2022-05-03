<?php
include('../php/DB.php');
if (isset($_POST['index_1'])){
$index_mn = filter_var(trim($_POST['index_1']), FILTER_SANITIZE_STRING);
}else{
    $index_mn = 0;
}

if (isset($_POST['index_2'])){
    $index_dgw = filter_var(trim($_POST['index_2']), FILTER_SANITIZE_STRING);
    }else{
    $index_dgw = 0;
}


if ($index_mn == 1){

    $Height_mn = filter_var(trim($_POST['Height_mn']), FILTER_SANITIZE_STRING); //Высота москитной сетки

    $Width_mn = filter_var(trim($_POST['Width_mn']), FILTER_SANITIZE_STRING); //Ширина москитной сетки

    $type_mn = filter_var(trim($_POST['type_mn']), FILTER_SANITIZE_STRING); //

    $checkbox_mn = filter_var(trim($_POST['checkbox_mn']), FILTER_SANITIZE_STRING);

$Square_mn = ($Height_mn / 100) * ($Width_mn / 100);

if ($type_mn == "custom"){
    $result_mn = $Square_mn * $Price_MosquitoNet_Ordinary;
}else {
    $result_mn = $Square_mn * $Price_MosquitoNet_Antikoshka;
}
if ($checkbox_mn == "Checked"){
    $result_mn = $result_mn * $Rate_MosquitoNet_Color;
}
if (empty($result_mn)){
    $result_mn = 0;
}
echo $result_mn;
$index_mn = 0;
}

if ($index_dgw == 1){

    $Height_dgw = filter_var(trim($_POST['Height_dgw']), FILTER_SANITIZE_STRING); //Высота москитной сетки

    $Width_dgw = filter_var(trim($_POST['Width_dgw']), FILTER_SANITIZE_STRING); //Ширина москитной сетки

    $type_dgw = filter_var(trim($_POST['type_dgw']), FILTER_SANITIZE_STRING); //

    $checkbox_1_dgw = filter_var(trim($_POST['checkbox_1_dgw']), FILTER_SANITIZE_STRING);

    $checkbox_2_dgw = filter_var(trim($_POST['checkbox_2_dgw']), FILTER_SANITIZE_STRING);

$Square_dgw = ($Height_dgw / 100) * ($Width_dgw / 100);

if ($type_dgw == "Single_chamber"){
    $result_dgw = $Square_dgw * $Price_Double_glazed_Single_chamber_24mm;
}else {
    $result_dgw = $Square_dgw * $Price_Double_glazed_Two_chamber_32mm;
}

if ($checkbox_1_dgw == "Checked"){
    $result_dgw = $result_dgw * $Rate_Sunscreens_Glass;
}

if ($checkbox_2_dgw == "Checked"){
    $result_dgw = $result_dgw * $Rate_Energy_saving_Glass;
}

if (empty($result_dgw)){
    $result_dgw = 0;
}
echo $result_dgw;
$index_dgw = 0;
}
?>
