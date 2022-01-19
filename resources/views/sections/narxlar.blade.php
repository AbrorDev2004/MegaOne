<!--Delicious Food-->
<section class="" id="narxlar">
    <div class="container">
        <div class="row position-relative">
            <img src="/img/menu-img1.png" class="food-img-before wow rotateInDownLeft" data-wow-delay="300ms" alt="image">
            <img src="/img/menu-img2.png" class="food-img-after wow rotateInDownRight" data-wow-delay="300ms" alt="image">
            <div class="col-lg-12 text-center mb-50">
                <div class="zic-img">
                    <div class="img-zic">
                        <img src="/img/ziczac2.png" alt="image">
                    </div>
                    <h5 class="response my-3 mb-0">Eng arzon narxlar bizda</h5>
                    <h2 class="text-capitalize text-gradient">Bugungi narxlar</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">


            <div class="tab-to-accordion">
                <div class="tab-container">
                    <div>
                        <div class="d-flex justify-content-lg-between flex-column flex-lg-row">
                            <div class="mt-30 da-thumbs food-menu">
                                @foreach ($product_1 as $product)
                                    <div class="menu-price mr-0 mr-lg-5">
                                        <div class="overlay"></div>
                                        <div class="d-flex justify-content-between pt-20">
                                            <div class="position-relative food-menu-list">
                                                <p class="text-capitalize menu-heading mb-10">{{ $product->name }}</p>
                                                <p class="mb-4">{{ $product->description }}</p>
                                            </div>
                                            <div>
                                                <div class="text-gradient price2 mr-2 mt-10"><span class="price text-gradient"></span>{{ $product->price }}</div>
                                            </div>
                                        </div>
                                        <span class="hr-line"></span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-30 ml-lg-5 da-thumbs food-menu">
                                @foreach ($product_0 as $product)
                                    <div class="menu-price">
                                        <div class="overlay"></div>
                                        <div class="d-flex justify-content-between pt-20">
                                            <div class="position-relative food-menu-list">
                                                <p class="text-capitalize menu-heading mb-10">{{ $product->name }}</p>
                                                <p class="mb-4">{{ $product->description }}</p>
                                            </div>
                                            <div>
                                                <div class="text-gradient price2 mr-2 mt-10"><span class="price text-gradient"></span>{{ $product->price }}</div>
                                            </div>
                                        </div>
                                        <span class="hr-line"></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</section>
<!--End Delicious Food-->
