<section id="contact" style="margin:0% 15%;">
    <h3 class="my-4 center-leave">Savol va takliflar uchun<span class="divider-left gradient-bg1"></span></h3>
    <form action="{{ route('admin.contact.store') }}" method="POST" class="findus wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-20">
                    <input type="text" class="form-control para-color" placeholder="ismingiz yozing" required name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control para-color" placeholder="Email" required name="email">
                </div>
            </div>
            <div class="col-md-12">
                <textarea placeholder="xabarni yozing" name="message"></textarea>
                <div class="text-1 text-11 margin-sm">
                    <button type="submit" class="btn btn-green btn-large rev-slider btn-rounded w-100" >send message</button>
                </div>
            </div>
        </div>
    </form>
</section>
