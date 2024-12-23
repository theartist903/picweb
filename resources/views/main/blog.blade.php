{{-- Blog Section Starts Here--}}
<div class="elementor-section elementor-top-section elementor-element elementor-element-a634e48 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
     data-id="a634e48" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2348457"
             data-id="2348457" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-bc11bff elementor-widget elementor-widget-HospaPosts"
                     data-id="bc11bff" data-element_type="widget" data-widget_type="HospaPosts.default">
                    <div class="elementor-widget-container">
                        <div class="blog-area pb-100">
                            <div class="container">
                                <div class="section-title">
{{--                                    <span class="sub"> NEWS & EVENTS </span>--}}
                                    <h2>Read about latest <br><b>News & Events</b></h2>
                                </div>
                                <div class="row justify-content-center">

                                    @foreach($news as $new)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-card">
                                            <div class="blog-image">
                                                <a href="#">
                                                    <img decoding="async" src="{{ env('APP_CMS') }}/resources/news/{{ $new->news_image }}" alt>
                                                </a>
{{--                                                <a href="category/uncategorized.html" class="tag-btn">Uncategorized</a>--}}
                                            </div>
                                            <div class="blog-content">
                                                <ul class="meta">
                                                    <li>{{ \Carbon\Carbon::parse($new->created_at)->format('l, F j, Y') }}
{{--                                                        {{ $new->created_at }}</li>--}}
{{--                                                    <li>4 MINS READ</li>--}}
                                                </ul>

                                                <h3>
                                                    <a href="#">
                                                        @if($new->news_image_description != null)
                                                            {!! substr($new->news_image_description,0,50) !!}.....
                                                        @endif
                                                    </a>
                                                </h3>
                                                <a href="#"
                                                   class="blog-btn">
                                                    <i class="ti ti-arrow-right"></i>
                                                    Read More </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-lg-12">
                                        <div class="blog-bottom-text">
                                            <p>We have 4 more Articles. <a href="contact-form-1.html">View
                                                    All <i class="ti ti-arrow-right"></i>
                                                </a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
{{--Blog Section Ends Here--}}
