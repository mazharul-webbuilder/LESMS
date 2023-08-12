@extends('frontend.master.master')
@section('title')
    About Us
@endsection
@section('content')

    <!-- theme fixed shadow -->
    <div>
        <div class="theme__shadow__circle"></div>
        <div class="theme__shadow__circle shadow__right"></div>
    </div>
    <!-- theme fixed shadow -->
    <!-- breadcrumbarea__section__start -->

    <div class="breadcrumbarea" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper">
                        <div class="breadcrumb__title">
                            <h2 class="heading">About Page</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Home</a></li>
                                <li> About Page</li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="shape__icon__2">
            <img class=" shape__icon__img shape__icon__img__1" src="{{ asset("asset/img") }}/herobanner/herobanner__1.png" alt="photo">
            <img class=" shape__icon__img shape__icon__img__2" src="{{ asset("asset/img") }}/herobanner/herobanner__2.png" alt="photo">
            <img class=" shape__icon__img shape__icon__img__3" src="{{ asset("asset/img") }}/herobanner/herobanner__3.png" alt="photo">
            <img class=" shape__icon__img shape__icon__img__4" src="{{ asset("asset/img") }}/herobanner/herobanner__5.png" alt="photo">
        </div>

    </div>
    <!-- breadcrumbarea__section__end-->

    <!-- aboutarea__5__section__start -->
    <div class="aboutarea__5 sp_bottom_100 sp_top_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                    <div class="aboutarea__5__img" data-tilt>
                        <img src="{{ asset("asset/img") }}/about/about_14.png" alt="about">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                    <div class="aboutarea__content__wraper__5">
                        <div class="section__title">
                            <div class="section__title__button">
                                <div class="default__small__button">About us</div>
                            </div>
                            <div class="section__title__heading ">
                                <h2>Welcome to the online Learning Center</h2>
                            </div>
                        </div>
                        <div class="about__text__5">
                            <p>Meet my startup design agency Shape Rex Currently I am working at CodeNext as Product Designer.</p>
                        </div>

                        <div class="aboutarea__5__small__icon__wraper">
                            <div class="aboutarea__5__small__icon">
                                <img src="{{ asset("asset/img") }}/about/about_15.png" alt="about">

                            </div>
                            <div class="aboutarea__small__heading">
                                <span>10+ Years ExperienceIn</span> this game, Means Product Designing
                            </div>

                        </div>




                        <div class="aboutarea__para__5">
                            <p>I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user
                                experience. I have been working as a UX Designer</p>
                        </div>

                        <div class="aboutarea__bottom__button__5">
                            <a class="default__button" href="#"> More About
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- aboutarea__5__section__end -->

    <!-- about__tap__section__start -->
    <div class="abouttabarea sp_bottom_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12" data-aos="fade-up">
                    <ul class="nav  about__button__wrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">About</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Course</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button">awards</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__four" type="button">education</button>
                        </li>


                    </ul>
                </div>



                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">
                                <p class="paragraph__1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words look even slightly believable. If you are going to use
                                    a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first
                                    true generator on the Internet. It uses a dictionary of over 200 combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always
                                    free from characteristic words etc.</p>
                                <div class="aboutarea__tap__heading">
                                    <h5>World best education site - (Computer engeenering)</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>

                                <div class="aboutarea__tap__heading">
                                    <h5>Web and user interface design - Development</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>
                                <div class="aboutarea__tap__heading">
                                    <h5>Interaction design - Animation</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">

                        <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img src="{{ asset("asset/img") }}/grid/grid_1.png" alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge">Data & Tech</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 23 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Become a product Manager learn the
                                            skills & job.
                                        </a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $32.00 <del>/ $67.00</del>
                                    <span>Free.</span>

                                </div>
                                <div class="gridarea__bottom">
                                    <div class="gridarea__bottom__left">
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Mirnsdo .H</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>

                                    <div class="gridarea__details">
                                        <a href="course-details.html">Know Details
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                            <div class="gridarea__img">
                                <img src="{{ asset("asset/img") }}/grid/grid_2.png" alt="grid">
                                <div class="gridarea__small__button">
                                    <div class="grid__badge blue__color">Mechanical</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 23 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Foundation course to under stand
                                            about softwere</a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $32.00 <del>/ $67.00</del>
                                    <span>Free.</span>

                                </div>
                                <div class="gridarea__bottom">
                                    <div class="gridarea__bottom__left">
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Mirnsdo .H</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>

                                    <div class="gridarea__details">
                                        <a href="course-details.html">Know Details
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img src="{{ asset("asset/img") }}/grid/grid_3.png" alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge pink__color">Development</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 23 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Strategy law and with for organization
                                            Foundation
                                        </a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $32.00 <del>/ $67.00</del>
                                    <span>Free.</span>

                                </div>
                                <div class="gridarea__bottom">
                                    <div class="gridarea__bottom__left">
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Mirnsdo .H</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>

                                    <div class="gridarea__details">
                                        <a href="course-details.html">Know Details
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">

                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img src="{{ asset("asset/img") }}/about/award-1.jpg" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Forging relationships between national</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img src="{{ asset("asset/img") }}/about/award-2.jpg" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Lorem ipsum dolor sit amet conse ctetur.</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img src="{{ asset("asset/img") }}/about/award-3.jpg" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Forging relationships between national</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img src="{{ asset("asset/img") }}/about/award-4.jpg" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Lorem ipsum dolor sit amet conse ctetur.</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__four" role="tabpanel" aria-labelledby="projects__four">
                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">
                                <div class="aboutarea__tap__heading">
                                    <h5>World best education site - (Computer engeenering)</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>

                                <div class="aboutarea__tap__heading">
                                    <h5>Web and user interface design - Development</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>
                                <div class="aboutarea__tap__heading">
                                    <h5>Interaction design - Animation</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>





            </div>
        </div>
    </div>
    <!-- .about__tap__section__end -->

    <div class="gridarea__2 sp_bottom_100" data-aos="fade-up">
        <div class="container">

            <div class="section__title">
                <div class="section__title__button">
                    <div class="default__small__button">Popular Courses</div>
                </div>
                <div class="section__title__heading">
                    <h2>Choose The Best Package
                        <br>For your Learning</h2>
                </div>
            </div>

            <div class="row about__course__slider__active row__custom__class">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class">
                    <div class="gridarea__wraper">
                        <div class="gridarea__img">
                            <a href="course-details.html"><img src="{{ asset("asset/img") }}/grid/grid_7.png" alt="grid"></a>
                            <div class="gridarea__small__button gridarea__small__button__1">
                                <div class="grid__badge">Data & Tech</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Foundation course to under stand
                                        about softwere</a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span> <del class="del__2">Free</del></span>

                            </div>
                            <div class="gridarea__bottom">

                                <a href="instructor-details.html">
                                    <div class="gridarea__small__img">
                                        <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                        <div class="gridarea__small__content">
                                            <h6>Micle Jhon</h6>
                                        </div>
                                    </div>
                                </a>

                                <div class="gridarea__star">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <span>(44)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class">
                    <div class="gridarea__wraper">
                        <div class="gridarea__img">
                            <a href="course-details.html"><img src="{{ asset("asset/img") }}/grid/grid_8.png" alt="grid"></a>
                            <div class="gridarea__small__button">
                                <div class="grid__badge">Data & Tech</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Foundation course to under stand
                                        about softwere</a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span> <del class="del__2">Free</del></span>

                            </div>
                            <div class="gridarea__bottom">

                                <a href="instructor-details.html">
                                    <div class="gridarea__small__img">
                                        <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                        <div class="gridarea__small__content">
                                            <h6>Micle Jhon</h6>
                                        </div>
                                    </div>
                                </a>

                                <div class="gridarea__star">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <span>(44)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class">
                    <div class="gridarea__wraper">
                        <div class="gridarea__img">
                            <a href="course-details.html"><img src="{{ asset("asset/img") }}/grid/grid_9.png" alt="grid"></a>
                            <div class="gridarea__small__button">
                                <div class="grid__badge">Data & Tech</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Foundation course to under stand
                                        about softwere</a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span> <del class="del__2">Free</del></span>

                            </div>
                            <div class="gridarea__bottom">

                                <a href="instructor-details.html">
                                    <div class="gridarea__small__img">
                                        <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                        <div class="gridarea__small__content">
                                            <h6>Micle Jhon</h6>
                                        </div>
                                    </div>
                                </a>

                                <div class="gridarea__star">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <span>(44)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class">
                    <div class="gridarea__wraper">
                        <div class="gridarea__img">
                            <a href="course-details.html"><img src="{{ asset("asset/img") }}/grid/grid_7.png" alt="grid"></a>
                            <div class="gridarea__small__button gridarea__small__button__1">
                                <div class="grid__badge">Data & Tech</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Foundation course to under stand
                                        about softwere</a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span> <del class="del__2">Free</del></span>

                            </div>
                            <div class="gridarea__bottom">

                                <a href="instructor-details.html">
                                    <div class="gridarea__small__img">
                                        <img src="{{ asset("asset/img") }}/grid/grid_small_1.jpg" alt="grid">
                                        <div class="gridarea__small__content">
                                            <h6>Micle Jhon</h6>
                                        </div>
                                    </div>
                                </a>

                                <div class="gridarea__star">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <span>(44)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- testmonialarea__section__atart -->
    <div class="testmonialarea sp_top_100 sp_bottom_110">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="section__title text-center">
                    <div class="section__title__button">
                        <div class="default__small__button">Course List</div>
                    </div>
                    <div class="section__title__heading heading__underline">
                        <h2>Client <span>Testimonial</span></h2>
                    </div>
                </div>
            </div>
            <div class="row row__custom__class testimonial__slider__active default__arrow" data-aos="fade-up">
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img src="{{ asset("asset/img") }}/testimonial/testi_1.png" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img src="{{ asset("asset/img") }}/testimonial/testi_1.png" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img src="{{ asset("asset/img") }}/testimonial/testi_1.png" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img src="{{ asset("asset/img") }}/testimonial/testi_1.png" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonialarea__section__end-->

    <!-- brand__section__start -->
    <div class="brandarea sp_bottom_60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12" data-aos="fade-up">
                    <div class="section__title text-center">

                        <div class="section__title__heading heading__underline">
                            <h2>Relied on marketers trusted by engineers and
                                <br>Beloved by <span>Executives</span></h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="brandarea__wraper" data-aos="fade-up">
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_1.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_2.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_3.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_4.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_5.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_6.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_7.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_8.png" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img src="{{ asset("asset/img") }}/brand/brand_9.png" alt="brand"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- brand__section__end -->
@endsection
