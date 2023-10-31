<?php function setting($key,$strip_tags=false) {
    $setting = db("settings")->where("title",$key)->first();
    if($setting) {
        if($strip_tags) {
            $setting->html = strip_tags($setting->html);
        }

        if(is_null($setting->html)) {
            return ""; 
        } else {
            return $setting->html;
        }
    
        
    } else {
        return $key . " Not found";
    }
    
} 
function setting2($key, $strip_tags=false) {
    return e2(setting($key, $strip_tags));
}
?>