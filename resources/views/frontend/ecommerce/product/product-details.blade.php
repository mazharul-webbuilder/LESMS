@extends('frontend.master.master')
@section('title')
    Product Details Page
@endsection
@section('content')





    <!-- feature__section__start -->
    <div class="featurearea featurearea--2 sp_top_100 sp_bottom_100">
        <div class="">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6">

                        <div class="featurearea__details__img">
                            <div class="swiper details__gallery__big">
                                <div class="featurearea__big__img swiper-wrapper">
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/1.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/2.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/3.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/4.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/5.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/6.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/7.jpg" alt="Product Big Img">
                                    </div>
                                </div>
                            </div>

                            <div thumbsSlider="" class="swiper details__gallery">
                                <div class=" featurearea__thumb__img swiper-wrapper">
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/1.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/2.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/2.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/4.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/5.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/6.jpg" alt="Product Big Img">
                                    </div>
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{ asset('asset/img')}}/products/7.jpg" alt="Product Big Img">
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="featurearea__inner">
                            <div class="featurearea__small__title">
                                <span>Book</span>
                            </div>
                            <div class="featurearea__main__title">
                                <h3>Book Lorem ipsum dolor.</h3>
                            </div>
                            <div class="featurearea__price">
                                <span><del> $110.00</del></span>
                                <span>$80.00</span>
                                <span class="featurearea__price__button">SALE </span>
                                <span class="featurearea__price__button black__color">-27%</span>
                            </div>
                            <div class="featurearea__countdown__title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock timer__icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <h5>Hurry up! Sale ends in</h5>
                            </div>
                            <div class="featurearea__countdown" data-countdown="2025/06/01">
                                <div class="count"><p>00</p><span>Days</span></div>
                                <div class="count"><p>00</p><span>Hrs</span></div>
                                <div class="count"><p>00</p><span>Min</span></div>
                                <div class="count"><p>00</p><span>Sec</span></div>
                            </div>
                            <div class="featurearea__progress__text">
                                <h6>Only 10 items in stock!</h6>
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
                                </div>
                            </div>


                            <div class="featurearea__size">
                                <span>Size:</span>
                                X
                            </div>
                            <div class="featurearea__size__button">
                                <ul>
                                    <li><a href="#">x</a></li>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">s</a></li>
                                </ul>
                            </div>

                            <div class="featurearea__size">
                                <span>Color:</span>
                                violet
                            </div>
                            <div class="featurearea__size__img">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('asset/img')}}/products/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('asset/img')}}/products/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('asset/img')}}/products/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('asset/img')}}/products/4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('asset/img')}}/products/5.jpg" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="featurearea__size">
                                <span>Quantity</span>

                            </div>
                            <div class="featurearea__quantity">

                                <div class="featurearea__quantity__button cartarea__plus__minus">
                                    <div class="dec qtybutton">- </div>
                                    <input class="cartarea__plus__minus__box" type="text" value="1" name="updates[]">
                                    <div class="inc qtybutton">+</div>
                                </div>

                                <a class="featurearea__quantity__button" href="#">Add to cart</a>



                            </div>
                            <div class="featurearea__bottom__button">
                                <a href="#">By it now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- feature__section__end -->



    <!-- description__review__start -->
    <div class="descriptionarea sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 descriptionarea__tab__wrapper">
                    <ul class="nav  descriptionarea__tab__button" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link active"  data-bs-toggle="tab" data-bs-target="#description" type="button">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link"  data-bs-toggle="tab" data-bs-target="#video" type="button">Video</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link"  data-bs-toggle="tab" data-bs-target="#product__Type" type="button">Product Type</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link"  data-bs-toggle="tab" data-bs-target="#delivery__system" type="button">Delivery system</button>
                        </li>
                    </ul>
                    <div class="tab-content tab__content__wrapper" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description">

                            <p>
                                As opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the
                                years, sometimes by accident, sometimes on purpose (injected humour and the
                                like. It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis provident eius. Tenetur facilis, illo nesciunt numquam non, odit iure, quia recusandae deleniti nihil excepturi?
                            </p>


                        </div>
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video">

                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/vHdclsdkp28" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                        </div>
                        <div class="tab-pane fade" id="product__Type" role="tabpanel" aria-labelledby="product__Type">

                            <p>
                                As opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the
                                years, sometimes by accident, sometimes on purpose (injected humour and the
                                like. It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters
                            </p>
                            <p>
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary, making
                                this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humour, or non-characteristic words etc
                            </p>


                        </div>
                        <div class="tab-pane fade" id="delivery__system" role="tabpanel" aria-labelledby="delivery__system">

                            <p>
                                As opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the
                                years, sometimes by accident, sometimes on purpose (injected humour and the
                                like. It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters
                            </p>
                            <p>
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary, making
                                this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humour, or non-characteristic words etc
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- faq__section__start -->
    <div class="faqarea sp_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="faqarea__heading">
                        <h3>faq</h3>
                    </div>
                </div>


                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">

                    <div class="faqarea__wrapper">
                        <div class="accordion" id="faqaccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Can I cancel my account at any time?
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What happens after the license expires?
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Does Harry have any documentations?
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How long do I get support &amp; updates?
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- faq__section__end -->

    <!-- about__tap__section__end -->
    <div class="gridarea__2 sp_top_100" data-aos="fade-up">
        <div class="container-fluid full__width__padding">

            <div class="section__title">

                <div class="section__title__heading">
                    <h2>Featured Products</h2>
                </div>
            </div>

            <div class="row row__custom__class">

                <div class="swiper featured__course">
                    <div class="swiper-wrapper">

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/1.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge">Sale</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Book stand about Software</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Sports
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

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/2.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge blue__color">New</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $56.00 <del>/ $99.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Coocking
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(98)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/3.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge green__color">Sold Out</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $57.00 <del>/ $88.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Drama
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(45)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/4.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge yellow__color">20% Off</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $88.00 <del>/ $99.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Design
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(45)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/5.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge">Sale</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Book stand about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Development
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

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/6.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge blue__color">New</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $56.00 <del>/ $99.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Business
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(98)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/7.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge green__color">Sold Out</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $57.00 <del>/ $88.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Affiliate
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(45)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper product__grid">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img src="{{ asset('asset/img')}}/products/8.jpg" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge yellow__color">20% Off</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                    <div class="product__grid__action">
                                        <ul>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                    Add to cart
                                                </a>
                                            </li>
                                            <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="gridarea__content">

                                    <div class="gridarea__heading">
                                        <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $88.00 <del>/ $99.00</del>
                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            Marketing
                                        </a>
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(45)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="slider__controls__wrap slider__controls__arrows">
                        <div class="swiper-button-next arrow-btn"></div>
                        <div class="swiper-button-prev arrow-btn"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- feture__tap__section__start -->
    <div class="tabcollectionarea sp_top_100 sp_bottom_100">
        <div class="container-fluid full__width__padding">
            <div class="row">
                <div class="section__title text-center" data-aos="fade-up">
                    <div class="section__title__button">
                        <div class="default__small__button">Course List</div>
                    </div>
                    <div class="section__title__heading heading__underline">
                        <h2>Perfect Online <span>Course</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav tabcollectionarea__item__wrap tabcollectionarea__button__area text-center">
                        <li class="tabcollectionarea__product__item" role="presentation">
                            <button class="tabcollectionarea__product__item__link active" data-bs-toggle="tab"
                                    data-bs-target="#projects__one" type="button">New Collection</button>
                        </li>

                        <li class="tabcollectionarea__product__item" role="presentation">
                            <button class="tabcollectionarea__product__item__link" data-bs-toggle="tab" data-bs-target="#projects__two"
                                    type="button">Hot Sale</button>
                        </li>

                        <li class="tabcollectionarea__product__item" role="presentation">
                            <button class="tabcollectionarea__product__item__link" data-bs-toggle="tab" data-bs-target="#projects__three"
                                    type="button">Best Selling</button>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="tab-content tab__content__wrapper" id="myTabContent">

                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="social__wrapper">
                        <div class="row">

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/grid_1.png" alt="grid"></a>
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
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_1.jpg" alt="grid">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <img src="{{ asset('asset/img')}}/grid/grid_2.png" alt="grid">
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
                                                    <i class="icofont-book-alt"></i> 29 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 2 hr 10 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="#">Nidnies course to under stand
                                                    about softwere</a></h3>
                                        </div>
                                        <div class="gridarea__price green__color">
                                            $32.00<del>/$67.00</del>
                                            <span>.Free</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_2.jpg" alt="grid">
                                                    <div class="gridarea__small__content">
                                                        <h6>Rinis Jhon</h6>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/grid_3.png" alt="grid"></a>
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
                                                    <i class="icofont-book-alt"></i> 25 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 40 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Minws course to under stand
                                                    about solution</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $40.00 <del>/ $67.00</del>
                                            <span> <del class="del__2">Free</del></span>

                                        </div>
                                        <div class="gridarea__bottom">

                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_3.jpg" alt="grid">
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
                                                <span>(44)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/grid_4.png" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge green__color">Ui & UX Design</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 36 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 3 hr 40 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Design course to under stand
                                                    about solution</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $40.00 <del>/ $67.00</del>
                                            <span> <del class="del__2">Free</del></span>

                                        </div>
                                        <div class="gridarea__bottom">

                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_4.jpg" alt="grid">
                                                    <div class="gridarea__small__content">
                                                        <h6>Micle Robin</h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                    <div class="social__wrapper">
                        <div class="row">

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/kid_1.jpg" alt="grid"></a>
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
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_1.jpg" alt="grid">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <img src="{{ asset('asset/img')}}/grid/kid_2.jpg" alt="grid">
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
                                                    <i class="icofont-book-alt"></i> 29 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 2 hr 10 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="#">Nidnies course to under stand
                                                    about softwere</a></h3>
                                        </div>
                                        <div class="gridarea__price green__color">
                                            $32.00<del>/$67.00</del>
                                            <span>.Free</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_2.jpg" alt="grid">
                                                    <div class="gridarea__small__content">
                                                        <h6>Rinis Jhon</h6>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/kid_3.jpg" alt="grid"></a>
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
                                                    <i class="icofont-book-alt"></i> 25 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 40 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Minws course to under stand
                                                    about solution</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $40.00 <del>/ $67.00</del>
                                            <span> <del class="del__2">Free</del></span>

                                        </div>
                                        <div class="gridarea__bottom">

                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_3.jpg" alt="grid">
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
                                                <span>(44)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/kid_4.jpg" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge green__color">Ui & UX Design</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 36 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 3 hr 40 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Design course to under stand
                                                    about solution</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $40.00 <del>/ $67.00</del>
                                            <span> <del class="del__2">Free</del></span>

                                        </div>
                                        <div class="gridarea__bottom">

                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_4.jpg" alt="grid">
                                                    <div class="gridarea__small__content">
                                                        <h6>Micle Robin</h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                    <div class="social__wrapper">
                        <div class="row">

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/grid_5.png" alt="grid"></a>
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
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_1.jpg" alt="grid">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <img src="{{ asset('asset/img')}}/grid/grid_6.png" alt="grid">
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
                                                    <i class="icofont-book-alt"></i> 29 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 2 hr 10 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="#">Nidnies course to under stand
                                                    about softwere</a></h3>
                                        </div>
                                        <div class="gridarea__price green__color">
                                            $32.00<del>/$67.00</del>
                                            <span>.Free</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_2.jpg" alt="grid">
                                                    <div class="gridarea__small__content">
                                                        <h6>Rinis Jhon</h6>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/grid_7.png" alt="grid"></a>
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
                                                    <i class="icofont-book-alt"></i> 25 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 40 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Minws course to under stand
                                                    about solution</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $40.00 <del>/ $67.00</del>
                                            <span> <del class="del__2">Free</del></span>

                                        </div>
                                        <div class="gridarea__bottom">

                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_3.jpg" alt="grid">
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
                                                <span>(44)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="gridarea__wraper gridarea__wraper__2">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="{{ asset('asset/img')}}/grid/grid_4.png" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge green__color">Ui & UX Design</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 36 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 3 hr 40 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Design course to under stand
                                                    about solution</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $40.00 <del>/ $67.00</del>
                                            <span> <del class="del__2">Free</del></span>

                                        </div>
                                        <div class="gridarea__bottom">

                                            <a href="instructor-details.html">
                                                <div class="gridarea__small__img">
                                                    <img src="{{ asset('asset/img')}}/grid/grid_small_4.jpg" alt="grid">
                                                    <div class="gridarea__small__content">
                                                        <h6>Micle Robin</h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- feture__tap__section__end -->
@endsection
