{{-- <section class="home-fact-area">
        <div class="container-lg">
            <div class="row">
            <div class="col-md-4 d-flex">
            <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-bullseye float-left"></i>
                        <div class="text-box">
                           <a href="#"><h4>Get Appointment</h4></a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 d-flex">
            <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-check float-left"></i>
                        <div class="text-box">
                        <a href="#" style="color:white"><h4>Contact Us Today</h4></a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 d-flex">
            <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-clock float-left"></i>
                        <div class="text-box">
                        <a href="#" style="color:white"> <h4>Take a School Tour</h4></a>
                        </div>
                    </div>
            </div>
            </div>
            <hr style="background-color:white; height:5px;">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <!-- <i class="fas fa-bullseye float-left"></i> -->
                        <div class="text-box">
                            <h4>About</h4><br/><br/>
                            <h4></h4>
                            <p> Infinity Tech World is an extraordinary place of learning. Our talented staff provides each student with a rigorous standards, high academic and behavioral expectati equity and a solid foundation. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <!-- <i class="fa fa-check float-left"></i> -->
                        <div class="text-box">
                            <h4>Our Social Links</h4>
                            <p><i class="fab fa-facebook-square"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <!-- <i class="fa fa-clock float-left"></i> -->
                        <div class="text-box">
                            <h4>Testimonials</h4>
                           <p align="justify" style="color:grey">"I called School Time and my husband and son came
                           with me for the tour. We felt the magic immediately."<br/>
                           <span style="color:white">-- Robby Robinson</span>
                           </p>
                           <p align="justify" style="color:grey">" My husband and son came with me for the
                           tour. We felt the magic immediately."<br/>
                           <span style="color:white">-- Zoe Ranson</span>
                           </p>
                    </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <!-- <i class="fa fa-clock float-left"></i> -->
                        <div class="text-box">
                            <h5>Contact Info</h5><br>
                            <h4> Our Address</h4>
                            <p>N0 1 Dike Street Awka Anambra State</p> <br/><br>
                   <h5>Working Hours</h5> <br/>
                            <p>Week Days: 07:30-18:00</p>
                            <p> Saturday: 09:00-18:00</p>
                            <p>Sunday: Closed</p>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<footer class="footer-area">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav justify-content-md-end footer-menu">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">Terms & Condition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('contact')}}">Contact Us</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('instructor.login')}}">Instructor</a>
                        </li> --}}
                        </ul>
            </div>
            <div class="col-md-4">

                    <ul class="nav justify-content-md-end footer-menu">
                            <li class="nav-item">
                                    <a href="https://web.facebook.com/InfinityTechWorldltd/" style="float:right"><i class="fab fa-facebook-square fa-3x"></i></a>
                            </li>
                            <li class="nav-item">
                                    <a href="" style="float:right"><i class="fab fa-twitter-square fa-3x"></i></a>
                            </li>
                            <li class="nav-item">
                                    <a href="" style="float:right"><i class="fab fa-instagram fa-3x"></i></a>
                            </li>

                            <li class="nav-item">
                                    <a href="" style="float:right"><i class="fab fa-google-plus fa-3x"></i></i></a>
                            </li>
                                </ul>



            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content sign-in-modal">
            <div class="modal-header">
                <h5 class="modal-title">Login to your account!</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="forgot-pass">
                        <span>or</span>
                        <a href="" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal">Forgot
                            password</a>
                    </div>
                </form>
                <div class="account-have">
                    Don't have an account? <a href="" data-toggle="modal" data-target="#signUpModal"
                                              data-dismiss="modal">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->

<!-- Rating Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true"
     reset-on-close="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content edit-rating-modal">
            <div class="modal-header">
                <h5 class="modal-title step-1" data-step="1">Step 1</h5>
                <h5 class="modal-title step-2" data-step="2">Step 2</h5>
                <h5 class="m-progress-stats modal-title">
                    &nbsp;of&nbsp;<span class="m-progress-total"></span>
                </h5>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="m-progress-bar-wrapper">
                <div class="m-progress-bar">
                </div>
            </div>
            <form action="{{ route('add.review') }}" method="post">
                @csrf
                <div class="modal-body step step-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-rating-box">
                                    <h4 class="rating-title">How would you rate this course overall?</h4>
                                    <fieldset class="your-rating">

                                        <input type="radio" id="star5" name="rating" value="5"/>
                                        <label class="full" for="star5"></label>

                                        <input type="radio" id="star4" name="rating" value="4"/>
                                        <label class="full" for="star4"></label>

                                        <input type="radio" id="star3" name="rating" value="3"/>
                                        <label class="full" for="star3"></label>

                                        <input type="radio" id="star2" name="rating" value="2"/>
                                        <label class="full" for="star2"></label>

                                        <input type="radio" id="star1" name="rating" value="1"/>
                                        <label class="full" for="star1"></label>

                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-course-preview-box">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" class="course_title_for_rating"
                                                id="course_title_1"></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body step step-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-rating-comment-box">
                                    <h4 class="rating-title">Write a review</h4>
                                    <textarea id="review_of_a_course" name="review"
                                              placeholder="Describe your experience what you got out from this course"
                                              maxlength="1000" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-course-preview-box">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" class="course_title_for_rating"
                                                id="course_title_2"></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="course_id" id="course_id_for_rating" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary next step step-1" data-step="1"
                            onclick="sendEvent(2)">Next
                    </button>
                    <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2"
                            onclick="sendEvent(1)">Previous
                    </button>
                    <button type="submit" class="btn btn-primary publish step step-2" id="">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content sign-in-modal">
            <div class="modal-header">
                <h5 class="modal-title">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control forgot-email" placeholder="E-mail">
                    </div>
                    <div class="forgot-pass-btn">
                        <button type="submit" class="btn btn-primary d-inline-block">Reset Password</button>
                        <span>or</span>
                        <a href="" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Log In</a>
                    </div>
                </form>
                <div class="forgot-recaptcha">

                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content sign-in-modal">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up And Start Learning!</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-user"></i></span>
                        <input type="text" name="first_name" class="form-control"
                               placeholder="first name">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-user"></i></span>
                        <input type="text" name="last_name" class="form-control"
                               placeholder="last name">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control"
                               placeholder="email">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control"
                               placeholder="password">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password_confirmation" class="form-control"
                               placeholder="Confirm password">
                    </div>
                    <div class="custom-control custom-checkbox deal-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dealCheckbox">
                        <label class="custom-control-label" for="dealCheckbox">
                            Check Here For Exciting Deals And Personalized Course Recommendations
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
                <div class="agreement-text">
                    By Signing Up You Agree To Our
                    <a href="">Terms of use</a> and <a
                            href="">Privacy Policy</a>.
                </div>
                <div class="account-have">
                    Already have an account?
                    <a href="" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Login</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->

{{--payment modal--}}
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content payment-in-modal">
            <div class="modal-header">
                <h5 class="modal-title">Checkout!</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('enroll') }}" method="get">
                            <input type="hidden" class="total_price_of_checking_out" name="total_price_of_checking_out"
                                   value="">
                            <button type="submit" class="btn btn-default paypal">
                                Paypal
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->
