@include('/site/includes/var')

<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/about.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">News Data</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Elements -->

<div class="elements">
    <!-- Accordions & Tabs -->
    <div class="accordions_tabs" style="top:-200px">
        <div class="container">
            <div class="row accordions_row">
                <!-- Tabs -->
                <div class="col-lg-12">
                    <div class="tabs">
                        <div class="tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                                <div class="tab">{{date('F d , Y', strtotime($news->created_at))}}</div>
                                <div class="tab text-uppercase">
                                    Published by: {{$news->publisher}}
                                </div>
                            </div>
                            <div class="tab_panels">
                                <div class="tab_panel">
                                    <div class="tab_panel_content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tab_image">
                                                    <img src="/storage/{{$news->news_image}}" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tab_text_title">
                                                    {{$news->news_title}}
                                                </div>
                                                <div class="tab_text">
                                                    <p> {!!$news->news_body!!} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab_panel active">
                                    <div class="tab_panel_content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tab_image">
                                                    <img src="/storage/{{$news->news_image}}" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tab_text_title">
                                                    {{$news->news_title}}
                                                </div>
                                                <div class="tab_text">
                                                    <p>
                                                        {!!$news->news_body!!}
                                                    </p>
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

<!-- Footer -->
@include('/site/includes/footer')