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
                        <div class="home_title">{{$result->formId}} {{$result->examName}} {{$result->year}}</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>Result</li>
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
                    <div class="elements_title">{{$result->formId}} {{$result->examName}} {{$result->year}} Break Down
                    </div>
                </div>
            </div>
            <div class="row accordions_row">
                <!-- Tabs -->
                <div class=" offset-2 col-lg-8">
                    <div class="tabs">
                        <div class="tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                                <div class="tab active">{{$result->formId !== "Form One" ? "Div 1" : "Grade A"}}:
                                    {{$result->divOne}}
                                </div>
                                <div class="tab active">{{$result->formId !== "Form One" ? "Div 2" : "Grade B"}}:
                                    {{$result->divTwo}}
                                </div>
                                <div class="tab active">{{$result->formId !== "Form One" ? "Div 3" : "Grade C"}}:
                                    {{$result->divThree}}
                                </div>
                                <div class="tab active">{{$result->formId !== "Form One" ? "Div 4" : "Grade D"}}:
                                    {{$result->divFour}}
                                </div>
                                <div class="tab active">{{$result->formId !== "Form One" ? "Div 0" : "Grade F"}}:
                                    {{$result->divZero}}
                                </div>
                            </div>
                            <div class="tab_panels">
                                <div class="tab_panel active">
                                    <div class="tab_panel_content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                @if ($result->link !== NULL)
                                                <div class="button button_1">
                                                    <a href="{{$result->link}}"> Go to NECTA
                                                        Website Here
                                                        <div class="button_arrow">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                @else
                                                <div class="tab_text_title">
                                                    <a class="contact_button"> No Link Available</a>
                                                </div>
                                                @endif

                                                <div class="button button_1 mt-4">
                                                    <a href="storage/{{$result->pdf}}">Download
                                                        Results Here...
                                                        <div class="button_arrow">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                @if (($result->formId === "Form One") ||
                                                ($result->formId === "Form Two" && $result->examName !== "NECTA") )
                                                <?php
                                                $ga = $result->divOne * 87.5;
                                                $gb = $result->divTwo * 69.5;
                                                $gc = $result->divThree * 57;
                                                $gd = $result->divFour * 34;
                                                $gf = $result->divZero * 17;

                                                $f = $result->divOne + $result->divTwo + $result->divThree + $result->divFour + $result->divZero;
                                                $fx = $ga + $gb + $gc + $gd + $gf;
                                                $mean = intval($fx / $f);
                                                if ($mean > 75 && $mean < 100) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Grade is "A" </a>
                                                          </div>';
                                                } else if ($mean >= 65 && $mean <= 74) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Grade is "B" </a>
                                                          </div>';
                                                } else if ($mean >= 50 && $mean <= 64) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Grade is "C" </a>
                                                          </div>';
                                                } else if ($mean >= 35 && $mean <= 49) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Grade is "D" </a>
                                                          </div>';
                                                } else if ($mean >= 0 && $mean <= 34) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Grade is "F" </a>
                                                          </div>';
                                                }
                                                ?>
                                                @else
                                                <?php
                                                $ga = $result->divOne * 12;
                                                $gb = $result->divTwo * 20;
                                                $gc = $result->divThree * 24;
                                                $gd = $result->divFour * 29.5;
                                                $gf = $result->divZero * 34.5;

                                                $f = $result->divOne + $result->divTwo + $result->divThree + $result->divFour + $result->divZero;
                                                $fx = $ga + $gb + $gc + $gd + $gf;
                                                $mean = intval($fx / $f);
                                                if ($mean >= 7 && $mean <= 17) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Division is "DIV 1" </a>
                                                          </div>';
                                                }
                                                if ($mean >= 18 && $mean <= 22) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Division is "DIV 2" </a>
                                                          </div>';
                                                }
                                                if ($mean >= 23 && $mean <= 25) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Division is "DIV 3" </a>
                                                          </div>';
                                                }
                                                if ($mean >= 26 && $mean <= 33) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Division is "DIV 4" </a>
                                                          </div>';
                                                }
                                                if ($mean >= 34 && $mean <= 35) {
                                                    echo '<div class="tab_text_title">
                                                             <a class="contact_button"> Class Average Division is "DIV 0" </a>
                                                          </div>';
                                                }
                                                ?>
                                                @endif
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