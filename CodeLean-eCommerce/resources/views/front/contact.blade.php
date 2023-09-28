@extends('front.layout.master')
@section('title', 'Contact')
@section('body')

<!--Breadcrumb section begin(giup dinh vi vi tri ban dang o dau trong web)-->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section end-->
 <!--Map Section Begin-->
 <div class="map spad">
    <div class="container">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d953720.9552066658!2d104.99313826721318!3d20.973689371376185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135008e13800a29%3A0x2987e416210b90d!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1688876468831!5m2!1svi!2s"
                 height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
        </div>
    </div>
</div>
<!--Map Section End-->

<!--Contact Section Begin-->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4 Contact Us></h4>
                    <p> Hello</p>
                </div>
                <div class="contact-widget">
                    <!--Address-->
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Address:</span>
                            <p>1 Dai Co Viet, Hai Ba Trung, Ha Noi</p>
                        </div>
                    </div>
                    <!--Phone-->
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Phone:</span>
                            <p>+84 98.51.88.688</p>
                        </div>
                    </div>
                    <!--Email-->
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>hkt123@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Section End-->
@endsection
