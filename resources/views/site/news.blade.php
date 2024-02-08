@include('/site/includes/news')
<!-- Home -->

<div class="home">
    <div class="home_background parallax_background parallax-window" data-parallax="scroll"
        data-image-src="/storage/assets/images/news.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">News</div>
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

<!-- News -->

<div class="news">
    <div class="container">
        <div class="row">
            @foreach ($newsData as $data)
            <!-- News Posts -->
            <div class="col-lg-4 col-md-12">
                <div class="news_posts">

                    <!-- News Post -->
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="/storage/{{$data->news_image}}" alt="News Image" />
                        </div>
                        <div class="news_post_body">
                            <div class="news_post_date">
                                <a>{{date('F d , Y', strtotime($data->created_at))}}</a>
                            </div>
                            <div class="news_post_title">
                                <a>{{$data->news_title}}</a>
                            </div>
                            <div class="news_post_text">
                                <p>{!! \Illuminate\Support\Str::limit(strip_tags($data->news_body), 100)!!}</p>
                            </div>
                            <div class="news_post_link">
                                <a href="{{route('newsData', $data->id)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- News Post Ends -->

                </div>
            </div>
            @endforeach
            <!-- Sidebar -->

        </div>

        <!-- Pagination -->
        <!-- <div class="row">
            <div class="col">
                <div class="news_pagination">
                    <ul>
                        <li><a href="#">01</a></li>
                        <li class="active"><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</div>

<!-- Footer -->
@include('/site/includes/footer')