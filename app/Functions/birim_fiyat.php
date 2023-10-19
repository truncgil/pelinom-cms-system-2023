<?php function birim_fiyat() {
    $fiyat = db("contents")->where("slug", "birim-fiyat")->first();
    $fiyat = explode("/", $fiyat->title);
    $fiyat = trim($fiyat[1]);
    return $fiyat;
} ?>