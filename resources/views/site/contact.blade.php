@include('/site/includes/contact')

@if(session('success'))
<div class="success" id="fade">
    {{@session('success')}}
</div>
@endif
@if(session('error'))
<div class="error" id="fade">
    {{@session('error')}}
</div>
@endif
<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll"
        data-image-src="/assets/images/contact.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Contact</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container-fluid">
        <div class="row row-xl-eq-height">
            <!-- Contact Content -->
            <div class="col-xl-6">
                <div class="contact_content">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact_about">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <!-- <div class="logo_img"><img src="/assets/images/log.png" alt=""></div> -->
                                            <div class="logo_text">learn</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="contact_about_text">
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis
                                        in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem
                                        convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio
                                        eget lacus tempus pulvinar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6" id="contact">
                            <div class="contact_info_container">
                                <div class="contact_info_main_title">Contact Us</div>
                                <div class="contact_info">
                                    <div class="contact_info_item">
                                        <div class="contact_info_title">Address:</div>
                                        <div class="contact_info_line">{{config('company.address.street')}}
                                            {{config('company.address.city')}},
                                            {{config('company.address.country')}}</div>
                                    </div>
                                    <div class="contact_info_item">
                                        <div class="contact_info_title">Phone:</div>
                                        <div class="contact_info_line"><a
                                                href="tel:{{config('company.phone1')}}">{{config('company.phone1')}}</a>
                                        </div>
                                    </div>
                                    <div class="contact_info_item">
                                        <div class="contact_info_title">Email:</div>
                                        <div class="contact_info_line">
                                            <a href="mailto:{{config('company.email')}}">{{config('company.email')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_form_container">
                        <form action="{{route('message')}}" method="post" id="contact_form" class="contact_form">
                            @csrf
                            <div>
                                <div class="row">
                                    <div class="col-lg-6 contact_name_col">
                                        <input type="text" class="contact_input @error('name') is-invalid @enderror"
                                            name="name" placeholder="Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="contact_input @error('email') is-invalid @enderror"
                                            placeholder="E-mail" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="text" class="contact_input @error('subject') is-invalid @enderror"
                                    placeholder="Subject">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <textarea class="contact_input @error('message') is-invalid @enderror contact_textarea"
                                    placeholder="Message" name="message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                            <button class="contact_button"><span>send message</span><span class="button_arrow"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Map -->
            <div class="col-xl-6 map_col">
                <div class="contact_map">

                    <!-- Google Map -->
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
@include('/site/includes/footer')