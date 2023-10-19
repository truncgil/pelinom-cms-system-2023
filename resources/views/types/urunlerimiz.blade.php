<?php $title = $c->title; 

$ust = db("contents")->where("slug", $c->kid)->first();

if(!$ust) {
  $ust = (object) [];
  $ust->title = "Ürünlerimiz";
  $ust->slug = "urunler";
}
  

?>
@include("sections.banner-title")

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" src="{{picture2($c->cover, 1024)}}" alt="{{$c->title}}" />
          </div>

          <?php if($c->files!="")  { 

            $files = explode(",", $c->files); 

            foreach($files AS $file)  { 
                
             
             ?>
  
            <div class="item">
              <img loading="lazy" class="img-fluid" src="{{picture2($file, 1024, 0)}}" alt="{{e2($c->title)}}" />
            </div>  
             <?php } ?>
           <?php } ?>
        </div><!-- Page slider end -->
      </div><!-- Slider col end -->

      <div class="col-lg-4 mt-5 mt-lg-0">

        <h3 class="column-title mrt-0">{{e2($c->title)}}</h3>
        {{e2($c->title)}}

        <h4>{{e2("Teklif Formu")}}</h4>
        <?php if(getisset("add")) {
            $post = $_POST;
            $data = [];
            $data['type'] = "Teklif Formları";
            $data['kid'] = "Teklif Formları";
            $data['title'] = $c->title . " " . "({$post['title']})";
            $data['html'] = "
                <p>Adı Soyadı: {$post['title']}</p>
                <p>E-Posta Adresi: {$post['email']}</p>
                <p>Telefon: {$post['telefon']}</p>
                <p>Teklif İstediği Ürün:  {$post['telefon']}</p>
            ";
            ekle2($data, "contents");
            bilgi("Teklifiniz tarafımıza iletilmiştir. En kısa zamanda tarafınızla iletişime geçilecektir. ");
        } ?>
        <form action="?add" method="post">
            @csrf
            {{e2("Adınız")}}
            <input type="text" name="title" required id="" class="form-control">
            {{e2("E-Posta")}}
            <input type="email" name="email" required id="" class="form-control">
            {{e2("Telefon")}}
            <input type="text" name="telefon" required id="" class="form-control">
            <br>
            <button class="btn btn-primary mt-10" target="_blank" href="#">{{e2("Teklif Ver")}}</button>
        </form>

        


      </div><!-- Content col end -->

    </div><!-- Row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->