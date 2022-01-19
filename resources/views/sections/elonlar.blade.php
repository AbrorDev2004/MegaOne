    <!--Mega Deal-->
    <section class="mega-deal bg-light" id="yangiliklar">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-block m-auto">
                    <div class="zic-img">
                        <div class="img-zic">
                            <img src="/img/ziczac2.png" alt="image">
                        </div></h5>
                        <h2 class="text-capitalize text-gradient mb-50">Elon va yangiliklar</h2>
                    </div>
                    <div class="row">
                        <div id="deal-slider" class="owl-carousel owl-theme">
                            @foreach ($elonlar as $elon)
                                <div class="item item-deal">
                                    <!--Deal Item-->
                                    <div class="mega-deal-item">
                                        <!--Deal Img-->
                                        <div class="deal-img">
                                            <img src="admin/images/announ/{{ $elon->image }}" alt="image">
                                        </div>
                                    </div>
                                    <!--Deal Text-->
                                    <p class="deal-text feature-para text-left mt-40 mb-20">{{ $elon->title }}</p>
                                    <p class="text-left deal-para">{{ $elon->description }}</p>
                                </div>                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Mega Deal-->
