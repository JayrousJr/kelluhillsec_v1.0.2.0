@include('/site/includes/results')

<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll"
        data-image-src="/assets/images/about.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center mt-4">
                        <div class="home_title">Results</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>Results</li>
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
    <div class="accordions_tabs" style="top:-150px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="elements_title">School Results</div>
                </div>
            </div>
            <div class="row accordions_row">
                <!-- Accordions -->
                <div class="col-lg-4">
                    <div class="accordions">
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center active">
                                <div>What is About the Results?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>
                                        These Results are the official Results of Kellu Hill Secondary School. you can
                                        check all the Continuous Development of your Children(s) throught here. You can
                                        also download the PDF document of the results and or Check the NECTA link For
                                        more Validation of the NECTA results for Form Four and Form Two.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Some Texts -->
                    </div>
                </div>

                <!-- Tabs -->
                <div class="col-lg-8">
                    <div class="tabs">
                        <div class="tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                                <div class="tab">Both NECTA and Continuous Assessment</div>
                            </div>
                            <div class="tab_panels">
                                <div class="tab_panel active">
                                    @foreach ($result as $data)
                                    <!-- Event -->
                                    <div class="event d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div
                                                class="event_date d-flex flex-column align-items-center justify-content-center">
                                                <div class="event_day">{{$data->year}}</div>
                                                <div class="event_month">Approved</div>
                                            </div>
                                        </div>
                                        <div class="event_body">
                                            <div class="event_title"><a
                                                    href="{{route('result', $data->id)}}">{{$data->formId}}
                                                    {{$data->examName}}
                                                    {{$data->year}}</a>
                                            </div>
                                            <div class="news_post_link">
                                                <a href="{{route('result', $data->id)}}">View More about this
                                                    results</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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