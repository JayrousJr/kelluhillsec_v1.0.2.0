@include('/site/includes/home')
<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            @foreach ($carousel as $data)
            <!-- Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(/storage/{{$data->image}})">
                </div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content text-center">
                                    <div class="home_text">
                                        <div class="home_subtitle">{!!$data->caption!!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>

<!-- Featured Course -->

<div class="featured" style="margin-top: 45px;">
    <div class="row">
        <!-- Home Slider Nav -->
        <div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
            <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
        </div>
        <div class="featured_container">
            <div class="row">
                <!-- Updates and Results -->
                <div class="col-lg-3 featured_col">
                    <div class="featured_content">
                        <div class="grouped_title text-center">Results</div>
                        <div class="events">
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
                                    <div class="event_title">
                                        <a href="{{route('result', $data->id)}}">{{$data->formId}}
                                            {{$data->examName}}
                                        </a>
                                    </div>
                                    <div class="news_post_link">
                                        <a href="{{route('result', $data->id)}}">View </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="news_post_link text-center">
                                <a href="{{route('results')}}">View More Previous Results</a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Latest News -->
                <div class="col-lg-3 offset-lg-6 featured_col bg-light">
                    <div class="news">
                        <div class="grouped_title mb-2 text-center">Latest News</div>

                        @foreach ($news as $data)
                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start px-4">
                            <div>
                                <div class="news_post_image"><img src="/storage/{{$data->news_image}}"
                                        alt="Kellu News Picture" style="background-repeat:repeat" width="90px"
                                        height="50px"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">{{date('F d, Y',strtotime($data->created_at))}}
                                </div>
                                <div class="news_post_title"><a
                                        href="{{route('newsData',$data->id)}}">{{$data->news_title}}</a>
                                </div>
                                <!-- <div class="news_post_author">By <a>{{$data->publisher}}</a></div> -->
                            </div>
                        </div>
                        <!-- News Post Ends-->
                        @endforeach
                        <div class="news_post_link text-center">
                            <a href="{{route('news')}}">More News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Courses -->

<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center">
                    <h2>We Have Best Education</h2>
                </div>
                <div class="section_subtitle">At Kellu Hill Secondary School we offer a variety of studies to our
                    students, any student can study any subjects he/she wants from our school. Explore what we offer to
                    our students.</div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Courses Slider -->
                <div class="courses_slider_container">
                    <div class="owl-carousel owl-theme courses_slider">

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="/assets/images/science.webp" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">All Levels</a></div>
                                    </div>
                                    <div class="course_title">
                                        <h3><a>Science Subjects</a></h3>
                                    </div>
                                    <div class="course_text">Best teachers for science subjects, including Physics,
                                        Chemistry and Biology. We also have best Laboratory for Practical works.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="/assets/images/history.png" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">All Levels</a></div>
                                    </div>
                                    <div class="course_title">
                                        <h3><a>Arts Subjects</a></h3>
                                    </div>
                                    <div class="course_text">Best Art teachers for students to learn the Art subjects,
                                        we have the best Library and books for more personal studies for our students.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="/assets/images/business.webp" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">All Levels</a></div>
                                    </div>
                                    <div class="course_title">
                                        <h3><a>Business Subjects</a></h3>
                                    </div>
                                    <div class="course_text">Best teachers for business studies, students learn more on
                                        how to handle business and records, also Library for more personal studies.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="/assets/images/necta.png" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Service</a></div>
                                    </div>
                                    <div class="course_title">
                                        <h3><a>Private Candidates</a></h3>
                                    </div>
                                    <div class="course_text">We also have Private Candidates programs to help the
                                        students
                                        under Private Candidate Category, Best Environment to archieve your goal.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="/assets/images/necta.png" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Service</a></div>
                                    </div>
                                    <div class="course_title">
                                        <h3><a>Qualifting Tests (QT)</a></h3>
                                    </div>
                                    <div class="course_text">Kellu Hill Secondary School is the center for Qualifying
                                        Test
                                        examinations, we provide best environment for you to reach your goals
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="/assets/images/p1.jpg" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Service</a></div>
                                    </div>
                                    <div class="course_title">
                                        <h3><a>Pre Form One</a></h3>
                                    </div>
                                    <div class="course_text">Pre form one Courses are also provided for your kid, we
                                        have
                                        the best teachers to enlight your kid about the secondary education students.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Courses Slider Nav -->
                    <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></div>
                    <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Population -->

<div class="milestones">

    <div class="parallax_background parallax-window" data-parallax="scroll"
        data-image-src="/assets/images/milestones.jpg" data-speed="0.8"></div>
    <div class="container">
        @foreach ($population as $data)


        <div class="row milestones_container">

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><i class="fa fa-users"
                            style="font-size:60px; color:rgb(255, 255, 255)"></i></div>
                    <div class="milestone_counter" data-end-value="{{$data->students}}">0</div>
                    <div class="milestone_text">Students</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><i class="fa fa-briefcase"
                            style="font-size:60px; color:rgb(255, 255, 255)"></i></div>
                    <div class="milestone_counter" data-end-value="{{$data->teachers}}">0</div>
                    <div class="milestone_text">Teaching Staff</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><i class="fa fa-gear"
                            style="font-size:60px; color:rgb(255, 255, 255)"></i></div>
                    <div class="milestone_counter" data-end-value="{{$data->nonTeachers}}">0</div>
                    <div class="milestone_text">Non Teaching Staff</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><i class="fa fa-building"
                            style="font-size:60px; color:rgb(255, 255, 255)"></i></div>
                    <div class="milestone_counter" data-end-value="{{$data->levels}}">0</div>
                    <div class="milestone_text">Class Levels</div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>

<!-- Sections -->

<div class="grouped_sections">
    <div class="container">
        <div class="row">

            <!-- Why Choose Us -->

            <div class="col-lg-12 grouped_col" id="about">
                <div class="grouped_title">About Kellu Hill Secondary School</div>
                <div class="accordions">

                    <div class="accordion_container">
                        <div class="accordion d-flex flex-row align-items-center active">
                            <div>School History</div>
                        </div>
                        <div class="accordion_panel">
                            <div>
                                <p>Kellu hill secondary School was Established in 2010, and is Located at Mlimba in
                                    Morogoro.
                                </p>
                                <p>
                                    The School has grown up and is now among of the best schools in Tanzania. At Kellu
                                    hisgh School we Take students of all Religions and every student has the right to
                                    worship according to the Government Laws.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_container">
                        <div class="accordion d-flex flex-row align-items-center">
                            <div>School Mission?</div>
                        </div>
                        <div class="accordion_panel">
                            <div>
                                <p>Provision of quality education through high committed teachers, disciplined students
                                    and thge workers conductive teaching and learning environment, Promotionof high
                                    moral and spiritual values and good governance</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_container">
                        <div class="accordion d-flex flex-row align-items-center">
                            <div>School Vision</div>
                        </div>
                        <div class="accordion_panel">
                            <div>
                                <p>Kellu Hill Sec School Vision in to reach the best level og education proviosn that
                                    will build the student to solve the society issues. A school with examplary academic
                                    excellence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_container">
                        <div class="accordion d-flex flex-row align-items-center">
                            <div>School Motto</div>
                        </div>
                        <div class="accordion_panel">
                            <div>
                                <p>Education for bright Future</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Events -->



            <!-- News -->

            <!-- <div class="col-lg-5 grouped_col">
                <div class="grouped_title">Latest News</div>
                <img src="/storage/assets/images/featured.jpg" alt="" width="auto" height="auto">

               <div class="featured_background" style="background-image:url(/storage/assets/images/featured.jpg)"></div> 
            </div> -->
        </div>
    </div>
</div>

@include('/site/includes/footer')