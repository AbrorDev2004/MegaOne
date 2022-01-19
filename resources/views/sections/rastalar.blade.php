{{-- <section class="bg-light ui-block-01 blog" id="rastalar">
    <div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 pb-lg-5 mb-5">

                    <h2 class="title mb-0">Savdo <span class="alt-color js-rotating">Rastalari</span></h2>
                </div>
            </div>
        </div>
        <!--Row-->
        <div class="row wow fadeInUp">
            @foreach ($rastalar as $rasta)
                <!--News Item-->
                <div class="col-lg-4">
                    <div class="news-item">
                        <img alt="image" class="news-img" src="admin/images/rasta/{{ $rasta->image }}">
                        <div class="news-text-box">
                            <a href="javascript:void(0);"><h4 class="news-title" align="center">{{ $rasta->title }}</h4></a>
                            <p class="para">{{$rasta->description}}</p><br>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section> --}}




<!--Gallery-->
<section class="gallery portfolio-three pb-0" id="rastalar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="zic-img">
                        <div class="img-zic">
                            <img src="/img/ziczac2.png" alt="image">
                        </div>
                        <h5 class="response my-3 mb-0">MegaOne</h5>
                        <h2 class="text-capitalize text-gradient">Savdo Rastalari</h2>
                    </div>
                </div>
            </div>

            <div class="row m-0 container" margin left>
                @foreach ($rastalar as $rasta)
                    <!-- gallery item -->
                    <div class="col-md-4 items graphic brand">
                        <div class="item-img">
                            <a href="admin/images/rasta/{{ $rasta->image }}" data-fancybox="images">
                                <img src="admin/images/rasta/{{ $rasta->image }}" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info text-center">
                                        <span class="dinner-hover mb-3 gradient-bg1"><i class="lni-dinner"></i></span>
                                        <h5 class="text-white">{{ $rasta->title }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
     </div>
</section>

<!--End Gallery-->
