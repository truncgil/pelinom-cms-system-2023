
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
 <div class="row">
 {{col("col-12","Favicon")}} 
    <form action="?t=genel-ayarlar&favicon-update" enctype="multipart/form-data" method="post">
        @csrf
        <?php if(getisset("favicon-update")) {
                $logo = upload("favicon");
                firstOrUpdate(
                    ["title"=> 'favicon', "html" => $logo],
                    "settings",
                    [
                    "title"=> 'favicon'
                ]);
                
                bilgi("Favicon Güncellendi");
            } ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="file" name="favicon" id="" class="form-control">
                        <button class="btn btn-primary">{{e2("Güncelle")}}</button>
                    </div>
                </div>      
                <div class="col-md-4">
                    <img src="{{url(setting("favicon"))}}" class="img-fluid" alt="">
                </div>
                
            </div>
             
        

    </form>
  {{_col()}}
  {{col("col-12","Footer Logo")}} 
    <form action="?t=genel-ayarlar&footer-logo-update" enctype="multipart/form-data" method="post">
        @csrf
        <?php if(getisset("footer-logo-update")) {
                $logo = upload("footer-logo");
                firstOrUpdate(
                    ["title"=> 'footer-logo', "html" => $logo],
                    "settings",
                    [
                    "title"=> 'footer-logo'
                ]);
                
                bilgi("footer logo Güncellendi");
            } ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="file" name="footer-logo" id="" class="form-control">
                        <button class="btn btn-primary">{{e2("Güncelle")}}</button>
                    </div>
                </div>      
                <div class="col-md-4">
                    <img src="{{url(setting("footer-logo"))}}" style="background:gray;width:128px;padding:10px" class="img-fluid" alt="">
                </div>
                
            </div>
             
        

    </form>
  {{_col()}}
  {{col("col-12","Logo")}} 
    <form action="?t=genel-ayarlar&logo-update" enctype="multipart/form-data" method="post">
        @csrf
        <?php if(getisset("logo-update")) {
                $logo = upload("logo");
                firstOrUpdate(
                    ["title"=> 'logo', "html" => $logo],
                    "settings",
                    [
                    "title"=> 'logo'
                ]);
                
                bilgi("Logo Güncellendi");
            } ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="file" name="logo" id="" class="form-control">
                        <button class="btn btn-primary">{{e2("Güncelle")}}</button>
                    </div>
                </div>      
                <div class="col-md-4">
                    <img src="{{url(setting("logo"))}}" class="img-fluid" alt="">
                </div>
                
            </div>
             
        

    </form>
  {{_col()}}
 {{col("col-12","Genel Tanımlar")}} 
 <form action="?t={{get("t")}}&update" method="post">
    @csrf
    
    {{e2("Default Table Row Count Per Page")}}: 
    <input type="number" name="row_count" value="{{setting('row_count')}}" class="form-control" id="">
    <?php 
    $settings = [
        'Title',
        'Slogan',
        'Alt Slogan',
        'Address',
        'E-Mail',
        'Phone',
        'Facebook',
        'Instagram',
        'Telegram',
        'Youtube',
        'Linkedin',
        'Whatsapp',
        'Footer Description',
    ];
    foreach($settings AS $setting)  { 
     $key = str_slug($setting);
     ?>
        {{e2($setting)}}: 
        <input type="text" name="{{$key}}" value="{{setting($key)}}" class="form-control" id=""> 
     <?php } ?>
     {{e2("Çalışma Saatleri")}}
     <textarea name="working-hours" id="editor" cols="30" rows="10">{{setting("working-hours")}}</textarea>
    <button class="btn btn-primary mt-5">{{e2("Update")}}</button>
</form>
 {{_col()}}
</div>