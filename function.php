<?php
$koneksi    = mysqli_connect("localhost","root","","test");

function ambil_text($id_tulisan){
    global $koneksi;
    $q1     = mysqli_query($koneksi, "select * from config where config_name = '$id_tulisan'");
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['config_value'];
    return $text;
}

function ambil_menu(){
    global $koneksi;
    $q1     = mysqli_query($koneksi, "select * from menu order by id asc");
    $rows = [];
    while ($r1     = mysqli_fetch_assoc($q1)){
        $rows[] = $r1;
    }
    return $rows;
}

function ambil_asset($asset_name){
    global $koneksi;
    $q1     = mysqli_query($koneksi, "select * from asset where asset_name = '$asset_name'");
    $r1     = mysqli_fetch_array($q1);
    $asset   = $r1['asset_value'];
    return $asset;
}
?>