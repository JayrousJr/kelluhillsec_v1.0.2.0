@include('/site/includes/var')

<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll"
        data-image-src="images/elements.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Elements</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>Elements</li>
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
    <!-- Buttons -->
    <div class="buttons">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="elements_title">Buttons</div>
                    <div class="buttons_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                        <div class="button button_1">
                            <a href="#">send message
                                <div class="button_arrow">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="button button_2">
                            <a href="#">learn more
                                <div class="button_arrow">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accordions & Tabs -->
    <div class="accordions_tabs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="elements_title">Accordions & Tabs</div>
                </div>
            </div>
            <div class="row accordions_row">
                <!-- Accordions -->
                <div class="col-lg-4">
                    <div class="accordions">
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center active">
                                <div>Mauris vehicula nisi congue?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>
                                        Suspendisse tincidunt magna eget massa
                                        hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet
                                        gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Vehicula nisi congue, blandit?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>
                                        Suspendisse tincidunt magna eget massa
                                        hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet
                                        gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Mauris vehicula nisi congue?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>
                                        Suspendisse tincidunt magna eget massa
                                        hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet
                                        gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Nisi congue, blandit purus sed?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>
                                        Suspendisse tincidunt magna eget massa
                                        hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet
                                        gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="col-lg-8">
                    <div class="tabs">
                        <div class="tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                                <div class="tab">Mauris vehicula</div>
                                <div class="tab active">
                                    Vehicula nisi congue
                                </div>
                                <div class="tab">Hicula nisi congue</div>
                            </div>
                            <div class="tab_panels">
                                <div class="tab_panel">
                                    <div class="tab_panel_content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tab_image">
                                                    <img src="images/tab.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tab_text_title">
                                                    Nisi congue, blandit purus
                                                    sed?
                                                </div>
                                                <div class="tab_text">
                                                    <p>
                                                        Suspendisse tincidunt
                                                        magna eget massa
                                                        hendrerit efficitur. Ut
                                                        euismod pellentesque
                                                        imperdiet. Cras laoreet
                                                        gravida lectus, at
                                                        viverra lorem venenatis
                                                        in. Aenean id varius
                                                        quam.
                                                    </p>
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
                                                    <img src="images/tab.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tab_text_title">
                                                    Nisi congue, blandit purus
                                                    sed?
                                                </div>
                                                <div class="tab_text">
                                                    <p>
                                                        Suspendisse tincidunt
                                                        magna eget massa
                                                        hendrerit efficitur. Ut
                                                        euismod pellentesque
                                                        imperdiet. Cras laoreet
                                                        gravida lectus, at
                                                        viverra lorem venenatis
                                                        in. Aenean id varius
                                                        quam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab_panel">
                                    <div class="tab_panel_content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tab_image">
                                                    <img src="images/tab.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tab_text_title">
                                                    Nisi congue, blandit purus
                                                    sed?
                                                </div>
                                                <div class="tab_text">
                                                    <p>
                                                        Suspendisse tincidunt
                                                        magna eget massa
                                                        hendrerit efficitur. Ut
                                                        euismod pellentesque
                                                        imperdiet. Cras laoreet
                                                        gravida lectus, at
                                                        viverra lorem venenatis
                                                        in. Aenean id varius
                                                        quam.
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

    <!-- Milestones -->
    <div class="milestones_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="elements_title">Milestones</div>
                </div>
            </div>
        </div>
    </div>
    <div class="milestones">
        <!-- Background image artis https://unsplash.com/@thepootphotographer -->
        <div class="milestones_background" style="background-image: url(images/milestones.jpg)"></div>
        <div class="container">
            <div class="row milestones_container">
                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="images/milestone_1.svg" alt="" />
                        </div>
                        <div class="milestone_counter" data-end-value="1548">
                            0
                        </div>
                        <div class="milestone_text">Online Courses</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="images/milestone_2.svg" alt="" />
                        </div>
                        <div class="milestone_counter" data-end-value="7286">
                            0
                        </div>
                        <div class="milestone_text">Students</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="images/milestone_3.svg" alt="" />
                        </div>
                        <div class="milestone_counter" data-end-value="257">
                            0
                        </div>
                        <div class="milestone_text">Teachers</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="images/milestone_4.svg" alt="" />
                        </div>
                        <div class="milestone_counter" data-end-value="39">
                            0
                        </div>
                        <div class="milestone_text">Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loaders -->
    <div class="loaders">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="elements_title">Loaders</div>
                </div>
            </div>
            <div class="row loaders_container">
                <div class="col-lg-3 loader_col">
                    <!-- Loader -->
                    <div class="loader" data-perc="1.00">
                        <span>Education</span>
                    </div>
                </div>
                <div class="col-lg-3 loader_col">
                    <!-- Loader -->
                    <div class="loader" data-perc="0.50">
                        <span>Passion</span>
                    </div>
                </div>
                <div class="col-lg-3 loader_col">
                    <!-- Loader -->
                    <div class="loader" data-perc="0.75"><span>Work</span></div>
                </div>
                <div class="col-lg-3 loader_col">
                    <!-- Loader -->
                    <div class="loader" data-perc="0.90">
                        <span>Inspiration</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->
    <div class="icon_boxes">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="elements_title">Icon Boxes</div>
                </div>
            </div>
            <div class="row icon_boxes_row">
                <!-- Icon Box -->
                <div class="col-lg-4 ib_col">
                    <div class="icon_box">
                        <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="ib_image">
                                <img src="images/icon_1.png" alt="" />
                            </div>
                            <div class="ib_title">Social Media Course</div>
                        </div>
                        <div class="ib_text">
                            <p>
                                Maecenas rutrum viverra sapien sed ferm entum.
                                Morbi tempor odio eget lacus tempus pulvinar.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 ib_col">
                    <div class="icon_box">
                        <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="ib_image">
                                <img src="images/icon_2.png" alt="" />
                            </div>
                            <div class="ib_title">The Best Education</div>
                        </div>
                        <div class="ib_text">
                            <p>
                                Maecenas rutrum viverra sapien sed ferm entum.
                                Morbi tempor odio eget lacus tempus pulvinar.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 ib_col">
                    <div class="icon_box">
                        <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="ib_image">
                                <img src="images/icon_3.png" alt="" />
                            </div>
                            <div class="ib_title">Only Certified Teachers</div>
                        </div>
                        <div class="ib_text">
                            <p>
                                Maecenas rutrum viverra sapien sed ferm entum.
                                Morbi tempor odio eget lacus tempus pulvinar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('/site/includes/footer')