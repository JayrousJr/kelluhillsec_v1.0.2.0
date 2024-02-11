@include('/site/includes/about')

<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll"
        data-image-src="/assets/images/about.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">About us</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About -->

<div class="about">
    <div class="container">
        <div class="row about_row row-lg-eq-height">
            <div class="col-lg-6">
                <div class="about_content">
                    <div class="about_title">Schools History</div>
                    <div class="about_text">
                        <p>Kellu hill secondary School was Established in 2010, and is Located at Mlimba in
                            Morogoro.<br>The School has grown up and is now among of the best schools in Tanzania. At
                            Kellu hisgh School we Take students of all Religions and every student has the right to
                            worship according to the Government Laws.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about_content">
                    <div class="about_title">Schools Mission</div>
                    <div class="about_text">
                        <p>Provision of quality education through high committed teachers, disciplined students and thge
                            workers conductive teaching and learning environment, Promotionof high moral and spiritual
                            values and good governance</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_row row-lg-eq-height">
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="about_content">
                    <div class="about_title">School Vision</div>
                    <div class="about_text">
                        <p>Kellu Hill Sec School Vision in to reach the best level og education proviosn that will build
                            the student to solve the society issues. A school with examplary academic excellence.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about_content">
                    <div class="about_title">School Motto</div>
                    <div class="about_text">
                        <p>Education for bright Future</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Milestones -->

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

<!-- Teachers -->

<div class="teachers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="teachers_title text-center">Meet our Team of Teachers</div>
            </div>
        </div>
        <div class="row teachers_row">
            @foreach ($teacher as $data)

            <!-- Teacher -->
            <div class="col-lg-4 col-md-6">
                <div class="eacher">
                    <div class="teacher_image">
                        <img src="/storage/{{$data->profile_photo_path}}" alt="Teacher Image">
                    </div>
                    <div class="teacher_body text-center">
                        <div class="teacher_title"><a>{{$data->name}}</a></div>
                        <div class="teacher_subtitle">{{$data->role}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Footer -->

@include('/site/includes/footer')