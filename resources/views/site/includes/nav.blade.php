<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li>
                                            <div class="question">Have any questions?</div>
                                        </li>
                                        <li>
                                            <div>{{config('company.phone1')}}</div>
                                        </li>
                                        <li>
                                            <div>{{config('company.email')}}</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <ul>
                                            <li><a href="{{route('filament.admin.pages.dashboard')}}">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="{{route('home')}}">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <!-- <div class="logo_img"><img src="/storage/assets/images/logo.png" width="50px"
                                                    height="auto" alt=""></div> -->
                                            <div class="logo_text">Kellu Hill School</div>
                                        </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class=""><a href="{{route('home')}}">home</a></li>
                                        <li><a href="{{route('about')}}">about us</a></li>
                                        <li><a href="{{route('news')}}">news</a></li>
                                        <li><a href="{{route('results')}}">results</a></li>
                                        <li><a href="{{route('contact')}}">contact</a></li>
                                    </ul>
                                    <!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

                                    <!-- Hamburger -->

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <!-- <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button
                                        class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <!-- <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form> -->
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="{{route('home')}}">Home</a></li>
                    <li class="menu_mm"><a href="{{route('about')}}">About Us</a></li>
                    <li class="menu_mm"><a href="{{route('news')}}">News</a></li>
                    <li class="menu_mm"><a href="{{route('results')}}">Results</a></li>
                    <li class="menu_mm"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>