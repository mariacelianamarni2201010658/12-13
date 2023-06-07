<?php
    $dta[0]["NIM"] = "1122334455";
    $dta[0]["NAMA"] = "Intan tunti";
    $dta[0]["ALAMAT"] = "Manggarai";
    $dta[0]["TGL_LAHIR"] = "15 februari";
    $dta[0]["JKEL"] = "P";
    $dta[0]["HOBI"] = "Begadang";


    $dta[1]["NIM"] = "1133245223";
    $dta[1]["NAMA"] = "Icha mane";
    $dta[1]["ALAMAT"] = "Manggarai";
    $dta[1]["TGL_LAHIR"] = "10 april";
    $dta[1]["JKEL"] = "P";
    $dta[1]["HOBI"] = "Makan";


    $dta[2]["NIM"] = "1134663421";
    $dta[2]["NAMA"] = "Renita dia";
    $dta[2]["ALAMAT"] = "Manggarai";
    $dta[2]["TGL_LAHIR"] = "22 april";
    $dta[2]["JKEL"] = "P";
    $dta[2]["HOBI"] = "Gosip";


    $dta[3]["NIM"] = "1144328654";
    $dta[3]["NAMA"] = "Ani nganim";
    $dta[3]["ALAMAT"] = "Manggarai";
    $dta[3]["TGL_LAHIR"] = "14 januari";
    $dta[3]["JKEL"] = "P";
    $dta[3]["HOBI"] = "Menari";


    $dta[3]["NIM"] = "1133215678";
    $dta[3]["NAMA"] = "Celi marni";
    $dta[3]["ALAMAT"] = "Manggarai";
    $dta[3]["TGL_LAHIR"] = "07 april";
    $dta[3]["JKEL"] = "P";
    $dta[3]["HOBI"] = "Membaca";



    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);