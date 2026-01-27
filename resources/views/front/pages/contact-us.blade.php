@extends('front.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Contact Us</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- contact us area start here  -->
    <div class="contact-us-area section-bottom">
        <div class="container">
            <div class="row">
                <div class="contact-us-top">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info border-0 text-center">
                                <img class="contact-info-icon" src="assets/images/contact-info-1.png"
                                    alt="contact-info" />
                                <h3 class="contact-info-title">Email</h3>
                                <p class="contact-info-content">
                                    support@fashionwave.com

                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info text-center">
                                <img class="contact-info-icon" src="assets/images/contact-info-2.png"
                                    alt="contact-info" />
                                <h3 class="contact-info-title">Address</h3>
                                <p class="contact-info-content">
                                    House 24, Road 17 <br />
                                    Banani-1213
                                    Bangladesh
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info text-center">
                                <img class="contact-info-icon" src="assets/images/contact-info-3.png"
                                    alt="contact-info" />
                                <h3 class="contact-info-title">Phone</h3>
                                <p class="contact-info-content">
                                    +123 2587 1456
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="googlemap mb-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3467536788835!2d90.36297567479366!3d23.806265586630474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1371cd20ff7%3A0x96197d49392ec960!2zTUlSUFVSIFNUQURJVU0gQlVTIENPVU5URVIg4Kau4Ka_4Kaw4Kaq4KeB4KawIOCmuOCnjeCmn-Cnh-CmoeCmv-Cmr-CmvOCmvuCmriDgpqzgpr7gprgg4KaV4Ka-4KaJ4Kao4KeN4Kaf4Ka-4Kaw!5e0!3m2!1sen!2sbd!4v1731517122853!5m2!1sen!2sbd"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-form-area">
                    <div class="contct-form-top text-center">
                        <h2 class="form-title">Got any questions?</h2>
                        <p class="form-subtitle">Use the form below to get in touch with the sales team</p>
                    </div>
                    <form method="post" action="/contact-us/store">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                        placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                                        placeholder="Contact Number" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control message-box" id="message" name="message" rows="3"
                                        placeholder="Type Message Here.."></textarea>
                                </div>
                                <div class="form-button text-center">
                                    <button type="submit" class="form-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection