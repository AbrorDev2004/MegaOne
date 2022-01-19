<section class="ui-block-09 about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title"></span>
                    <h2 class="title">{{ $about->title }}</h2><br><br>
                    <p class="para">{{$about->description}}</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="admin/images/about/{{ $about->image }}">
                </div>
            </div>
        </div>
    </div>
</section>
<script src="vendor/js/morphext.min.js"></script>
<script>
    if ($(".ui-block-09.about .js-rotating").length) {
        $(".ui-block-09.about .js-rotating").Morphext({
            // The [in] animation type. Refer to Animate.css for a list of available animations.
            animation: "flipInX",
            // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
            separator: ",",
            // The delay between the changing of each phrase in milliseconds.
            speed: 3000,
            complete: function () {
                // Called after the entrance animation is executed.
            }
        });
    }
</script>