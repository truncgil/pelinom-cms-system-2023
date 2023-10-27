<section id="project-area" class="project-area solid-bg">
  <div class="container">
  <div class="row">
            <?php $urunlerimiz = contents("Servislerimiz"); 
            foreach($urunlerimiz AS $urun)  {  ?>
                    @include("sections.service-col")
             <?php } ?>

          
        </div><!-- shuffle end -->
  <!--/ Container end -->
</section><!-- Project area end -->