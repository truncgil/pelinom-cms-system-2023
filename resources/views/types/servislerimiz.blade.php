<?php $title = $c->title; 
$ust = (object) [];
$ust->title = "Ürünlerimiz";
$ust->slug = "urunler";
?>
@include("sections.banner-title")

<section id="project-area" class="project-area solid-bg">
  <div class="container">
  <div class="row">
            <?php $urunlerimiz = contents($c->slug); 
            foreach($urunlerimiz AS $urun)  {  ?>
                    @include("sections.service-col")
             <?php } ?>

          
        </div><!-- shuffle end -->
  <!--/ Container end -->
</section><!-- Project area end -->