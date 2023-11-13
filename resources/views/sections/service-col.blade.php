<div class="col-lg-4 col-md-6 mb-5">
        <a href="{{$urun->slug}}">
          <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <img loading="lazy" class="w-100" src="{{picture2($urun->cover,512)}}" alt="{{e2($urun->title)}}">
              </div>
              <div class="d-flex">
          
                <div class="ts-service-info">
                    <h3 class="service-box-title">{{e2($urun->title)}}</h3>
                  
                </div>
              </div>
          </div><!-- Service1 end -->
        </a>
      </div>