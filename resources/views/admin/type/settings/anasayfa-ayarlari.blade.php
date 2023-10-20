
<?php 
if(getisset("update")) {
   // dump($_POST);
    foreach($_POST AS $key => $value) {
        firstOrUpdate([
            'title' => $key,
            'html' => $value
        ],"settings",[
            'title' => $key
        ]);
    }
    
}

 ?>
<form action="?t=anasayfa-ayarlari&hero-update" enctype="multipart/form-data" method="post">
    @csrf
    <?php if(getisset("hero-update")) {
            $logo = upload("hero");
            firstOrUpdate(
                ["title"=> 'hero', "html" => $logo],
                "settings",
                [
                "title"=> 'hero'
            ]);
            
            bilgi("Hero Güncellendi");
        } ?>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="file" name="hero" id="" class="form-control">
                    <button class="btn btn-primary">{{e2("Güncelle")}}</button>
                </div>
            </div>      
            <div class="col-md-6">
                <img src="{{url(setting("hero"))}}" class="img-fluid" alt="">
            </div>
            
        </div>
            


</form>
<form action="?t={{get("t")}}&update" method="post">
    @csrf
   
    <?php $settings = [
        'hizmetlerimiz-small',
        'hizmetlerimiz-big',
    ];
    foreach($settings AS $setting) {
         ?>
         {{e2($setting)}}:
         <input type="text" name="{{$setting}}" value="{{setting($setting)}}" id="" class="form-control">
         
         <?php 
    }
    ?>
    <button class="btn btn-primary mt-5">{{e2("Update")}}</button>
</form>