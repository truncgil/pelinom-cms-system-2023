<div class="col-lg-4 col-sm-6 shuffle-item" data-groups="{{json_encode_tr($urun->kid)}}">
             <div class="project-img-container">
               <a class="gallery-popup" href="{{url("storage/app/files/".$urun->cover)}}" aria-label="project-img">
                 <img class="img-fluid" src="{{picture2($urun->cover,512)}}" alt="{{e2($urun->title)}}">
                 <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                 <div class="project-item-info-content">
                   <h3 class="project-item-title">
                     <a href="{{$urun->slug}}">{{e2($urun->title)}}</a>
                   </h3>
                   <p class="project-cat">{{$urun->kid}}</p>
                 </div>
               </div>
             </div>
           </div><!-- shuffle item 1 end --> 