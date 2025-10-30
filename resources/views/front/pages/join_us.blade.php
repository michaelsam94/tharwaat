@extends('front.pages.index')
@section('title')
    Join|Thrawaat
@endsection
@section('content')
    <section class="promo-primary">
        <picture>
            @php
                $joinHeader = \App\Models\WebsiteContent::active()->where('key', 'pages.join.header')->first();
            @endphp
            @if($joinHeader)
                <source srcset="{{ $joinHeader->image_url }}" media="(min-width: 992px)" />
                <img class="img--bg" src="{{ $joinHeader->image_url }}" alt="{{ $joinHeader->content }}" />
            @endif
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item">
                            <h1 class="promo-primary__title color--white"><span>{{ \App\Services\WebsiteContentService::getContent('pages.join.title') }}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <!-- section start-->
    <section class="section contacts">
        <div class="container">
            @include('front.layouts.message')
            <div class="row offset-margin">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#location-pin"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p>{{ \App\Services\WebsiteContentService::getContent('contact.address1') }}</p>
                            <p>{{ \App\Services\WebsiteContentService::getContent('contact.address2') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p> <a class="icon-item__link" href="tel:+20223589181">{{ \App\Services\WebsiteContentService::getContent('contact.phone1') }}</a>
                                <a class="icon-item__link" href="tel:+212614892033">{{ \App\Services\WebsiteContentService::getContent('contact.phone2') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#envelope"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p><a class="icon-item__link"
                                    href="mailto:{{ \App\Services\WebsiteContentService::getContent('contact.email_address') }}">{{ \App\Services\WebsiteContentService::getContent('contact.email') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#share"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <!-- socials start-->
                            <ul class="socials">
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->insta_link }}"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->google_link }}"><i
                                            class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link socials__link--active"
                                        href="{{ $setting->twitter_link }}"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->fb_link }}"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- socials end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->

    <!-- contacts start-->
    <section class="section contacts no-padding-top">
        <div class="contacts-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-12">
                        <form class="form message-form" action="{{ route('uploadResume') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <h6 class="form__title">{{ __('joinForm.resume') }}</h6>
                            <span class="form__text">{{ __('joinForm.req') }}</span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="fname"
                                        placeholder="{{ __('joinForm.firstName') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="lname"
                                        placeholder="{{ __('joinForm.lastName') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="email" name="email"
                                        placeholder="{{ __('joinForm.email') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="tel" name="phone"
                                        placeholder="{{ __('joinForm.phone') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="job_title"
                                        placeholder="{{ __('joinForm.jobTitle') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="file" name="cv" placeholder="Upload" required="required" accept=".pdf,.doc,.docx,.rtf" />
                                </div>
                                <div class="col-12" style="display:flex;align-items:center;gap:12px">
                                    <button class="form__submit" type="submit" id="joinSubmitBtn" disabled>{{ __('joinForm.joinCta') }}</button>
                                    <span id="resume-upload-loader" style="display:none">
                                        <i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Uploading...
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts end-->
    <script>
        (function() {
            var form = document.querySelector('.message-form');
            if (!form) return;
            var fnameInput = form.querySelector('input[name="fname"]');
            var lnameInput = form.querySelector('input[name="lname"]');
            var emailInput = form.querySelector('input[name="email"]');
            var phoneInput = form.querySelector('input[name="phone"]');
            var jobTitleInput = form.querySelector('input[name="job_title"]');
            var fileInput = form.querySelector('input[name="cv"]');
            var loader = document.getElementById('resume-upload-loader');
            var submitBtn = document.getElementById('joinSubmitBtn');

            function checkFormValidity() {
                var allFilled = true;
                
                if (!fnameInput || !fnameInput.value.trim()) allFilled = false;
                if (!lnameInput || !lnameInput.value.trim()) allFilled = false;
                if (!emailInput || !emailInput.value.trim()) allFilled = false;
                if (!phoneInput || !phoneInput.value.trim()) allFilled = false;
                if (!jobTitleInput || !jobTitleInput.value.trim()) allFilled = false;
                if (!fileInput || !fileInput.files || fileInput.files.length === 0) allFilled = false;

                if (submitBtn) {
                    submitBtn.disabled = !allFilled;
                }
            }

            function showLoader() {
                if (loader) loader.style.display = 'inline-block';
                if (submitBtn) submitBtn.disabled = true;
            }

            // Check form validity on every input change
            if (fnameInput) fnameInput.addEventListener('input', checkFormValidity);
            if (lnameInput) lnameInput.addEventListener('input', checkFormValidity);
            if (emailInput) emailInput.addEventListener('input', checkFormValidity);
            if (phoneInput) phoneInput.addEventListener('input', checkFormValidity);
            if (jobTitleInput) jobTitleInput.addEventListener('input', checkFormValidity);
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    checkFormValidity();
                    if (loader) loader.style.display = 'none';
                });
            }

            // Show loader on form submit
            form.addEventListener('submit', function() {
                showLoader();
            });

            // Initial check
            checkFormValidity();
        })();
    </script>
@endsection
