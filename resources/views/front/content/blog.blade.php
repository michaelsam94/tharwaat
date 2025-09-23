<section class="section blog blog--front_2 no-padding-top background--light">
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-12">
                <div class="heading heading--primary heading--center"><span class="heading__pre-title">News</span>
                    <h2 class="heading__title no-margin-bottom"><span>Helpo</span> <span>Blog</span></h2>
                </div>
            </div>
        </div>
        <div class="row offset-margin">
            <div class="col-md-6 col-lg-7 col-xl-8">
                <div class="blog-item blog-item--style-2">
                    @php
                        $blogImage = \App\Models\WebsiteContent::active()->where('key', 'blog.image1')->first();
                    @endphp
                    @if($blogImage)
                        <img class="img--bg" src="{{ $blogImage->image_url }}" alt="{{ $blogImage->content }}"/>
                    @endif
                    <div class="blog-item__content"><span class="blog-item__badge">Food</span>
                        <h6 class="blog-item__title"><a href="blog-post.html">Condolences to Families Effected By Flash Floods in Setswetla, Alexandra Township, Johannesburg</a></h6>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail</p>
                    </div>
                    <div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
										<svg class="icon">
											<use xlink:href="#comment"></use>
										</svg> 501</span></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
                <div class="blog-item blog-item--style-1">
                    <div class="blog-item__img">
                        @php
                            $blogImage2 = \App\Models\WebsiteContent::active()->where('key', 'blog.image2')->first();
                        @endphp
                        @if($blogImage2)
                            <img class="img--bg" src="{{ $blogImage2->image_url }}" alt="{{ $blogImage2->content }}"/>
                        @endif
                        <span class="blog-item__badge">Medicine</span>
                    </div>
                    <div class="blog-item__content">
                        <h6 class="blog-item__title"><a href="blog-post.html">Save the Children's Role in Fight Against Malnutrition Hailed</a></h6>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 501</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item blog-item--style-1">
                    <div class="blog-item__img">
                        @php
                            $blogImage3 = \App\Models\WebsiteContent::active()->where('key', 'blog.image3')->first();
                        @endphp
                        @if($blogImage3)
                            <img class="img--bg" src="{{ $blogImage3->image_url }}" alt="{{ $blogImage3->content }}"/>
                        @endif
                        <span class="blog-item__badge">Medicine</span>
                    </div>
                    <div class="blog-item__content">
                        <h6 class="blog-item__title"><a href="blog-post.html">Share HHAPI-NeSS this Mother’s Day support Save the Children</a></h6>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 5</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item blog-item--style-1">
                    <div class="blog-item__img">
                        @php
                            $blogImage4 = \App\Models\WebsiteContent::active()->where('key', 'blog.image4')->first();
                        @endphp
                        @if($blogImage4)
                            <img class="img--bg" src="{{ $blogImage4->image_url }}" alt="{{ $blogImage4->content }}"/>
                        @endif
                        <span class="blog-item__badge">Water Delivery</span>
                    </div>
                    <div class="blog-item__content">
                        <h6 class="blog-item__title"><a href="blog-post.html">Save the Children's Role in Fight Against Malnutrition Hailed</a></h6>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 5</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item blog-item--style-1">
                    <div class="blog-item__img">
                        @php
                            $blogImage5 = \App\Models\WebsiteContent::active()->where('key', 'blog.image5')->first();
                        @endphp
                        @if($blogImage5)
                            <img class="img--bg" src="{{ $blogImage5->image_url }}" alt="{{ $blogImage5->content }}"/>
                        @endif
                        <span class="blog-item__badge">Food</span>
                    </div>
                    <div class="blog-item__content">
                        <h6 class="blog-item__title"><a href="blog-post.html">Back to the future: Quality education through respect, </a></h6>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 5</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
