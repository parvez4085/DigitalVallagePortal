<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <!-- Start Slider -->
            @foreach($simage as $slider)
            <div class="item">
                <li>
                    <div class="slider-info  banner-view  bg bg2" style="background: url(../slider/{{$slider->slider_image}}) no-repeat;background-size: cover;" >
                        
                    </div>
                </li>
            </div>
            @endforeach
            <!-- End Slider -->
        </div>
        <!-- Start Slider Box -->
        <div class="w3l-banner-grids">
            <div class="bangrids-inn">
                <div class="banhny-grid-1">
                    <div class="banhny-grid-icon">
                        <span class="fa fa-users"></span>
                    </div>
                    <div class="banhny-grid-right-info">
                        <h6><a href="#url">Population(जनसंख्या)</a></h6>
                        <p>125000</p>
                    </div>
                </div>
                <div class="banhny-grid-1">
                    <div class="banhny-grid-icon">
                        <span class="fa fa-users"></span>
                    </div>
                    <div class="banhny-grid-right-info">
                        <h6><a href="#url">Lifetime entrance</a></h6>
                        <p>New skills online the best way is to develop and follow.</p>
                    </div>
                </div>
                <div class="banhny-grid-1">
                    <div class="banhny-grid-icon">
                        <span class="fa fa-book"></span>
                    </div>
                    <div class="banhny-grid-right-info">
                        <h6><a href="#url">Live learning</a></h6>
                        <p>Start with your goals in mind and then work.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Box -->
    </div>
</section>