<?
if (isset($_POST['Profile_type'])){
    $Profile_type = filter_var(trim($_POST['Profile_type']), FILTER_SANITIZE_STRING);
    }else{
        $Profile_type = 0;
    }

if (isset($_POST['Double_glazed_windows'])){
    $Double_glazed_windows = filter_var(trim($_POST['Double_glazed_windows']), FILTER_SANITIZE_STRING);
    }else{
        $Double_glazed_windows = 0;
    }

if (isset($_POST['glassOption_1'])){
    $glassOption_1 = filter_var(trim($_POST['glassOption_1']), FILTER_SANITIZE_STRING);
    }else{
        $glassOption_1 = 0;
    }

if (isset($_POST['glassOption_2'])){
    $glassOption_2 = filter_var(trim($_POST['glassOption_2']), FILTER_SANITIZE_STRING);
    }else{
        $glassOption_2 = 0;
    }