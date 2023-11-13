<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">{{setting2("urunler-ust-baslik")}}</h2>
        <h3 class="section-sub-title">{{setting2("urunler-alt-baslik")}}</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">{{e2("Tümü")}}
          </label>
          <?php $servislerimiz = contents("Servislerimiz");
          foreach($servislerimiz AS $servis)  { 
           
           ?>
           <label for="{{$servis->title}}">
             <input type="radio" name="shuffle-filter" id="{{$servis->title}}" value="commercial">{{e2($servis->title)}}
           </label> 
           <?php } ?>
          
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>
            <?php $urunlerimiz = contents("Ürünlerimiz"); 
            foreach($urunlerimiz AS $urun)  { 
             
             ?>
                    @include("sections.gallery-col")
             <?php } ?>

          
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="{{url("urunlerimiz")}}">{{e2("Tüm Ürünlerimizi Gör")}}</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->