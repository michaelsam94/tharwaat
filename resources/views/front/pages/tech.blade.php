@extends('front.pages.index')
@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container" style="height:170px">
                        <h2 class="heading__title"><span>{{ \App\Services\WebsiteContentService::getContent('pages.tech.header') }}</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-us background--blue" style="padding: 40px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="img-box">
                        <div class="img-box__img">
                            @php
                                $techItImage = \App\Models\WebsiteContent::active()->where('key', 'pages.tech.it')->first();
                            @endphp
                            @if($techItImage)
                                <img class="img--bg" src="{{ $techItImage->image_url }}" alt="{{ $techItImage->content }}" />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary">
                        <h2 class="heading__title color--white"><span>{{ \App\Services\WebsiteContentService::getContent('pages.tech.title1') }}</span></h2>
                    </div>
                    <p class="color--white">{{ \App\Services\WebsiteContentService::getContent('pages.tech.p1') }}</p>
                    <ul class="color--white">
                        <li>Network and infrastructure design, deployment, and monitoring</li>
                        <li>Cloud migration and cost optimization</li>
                        <li>Cybersecurity hardening, SOC readiness, and compliance</li>
                        <li>Helpdesk and endpoint management at scale</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding: 40px 0;">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 col-xl-6">
                    <div class="heading heading--primary">
                        <h2 class="heading__title"><span>E‑Commerce Solutions</span></h2>
                    </div>
                    <p>We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction. Our team handles platform setup, integrations, and growth optimization.</p>
                    <ul>
                        <li>Storefront development (Shopify, Woo, custom Laravel)</li>
                        <li>Catalog, inventory, and ERP/CRM integrations</li>
                        <li>Payments, subscriptions, and checkout optimization</li>
                        <li>Analytics, CRO, and marketing automations</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="img-box">
                        <div class="img-box__img">
                            @php
                                $techEcommerceImage = \App\Models\WebsiteContent::active()->where('key', 'pages.tech.ecommerce')->first();
                            @endphp
                            @if($techEcommerceImage)
                                <img class="img--bg" src="{{ $techEcommerceImage->image_url }}" alt="{{ $techEcommerceImage->content }}" />
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-us" style="padding: 40px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="img-box">
                        <div class="img-box__img">
                            @php
                                $techAdsImage = \App\Models\WebsiteContent::active()->where('key', 'pages.tech.ads')->first();
                            @endphp
                            @if($techAdsImage)
                                <img class="img--bg" src="{{ $techAdsImage->image_url }}" alt="{{ $techAdsImage->content }}" />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary">
                        <h2 class="heading__title"><span>Advertising & Creative</span></h2>
                    </div>
                    <p>Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline while preserving ROI.</p>
                    <ul>
                        <li>Brand identity, campaign concepts, and production</li>
                        <li>Paid search, social, programmatic, and retargeting</li>
                        <li>SEO content and landing page optimization</li>
                        <li>Analytics dashboards and performance reporting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
