@extends('layouts.app')
@section('content')
    {{-- <div class="header-top navBarDetailPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                        <div class="header-info-left">

                        </div>
                        <div class="header-info-right d-none d-sm-block">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <main>
        {{-- {{dd($banner)}} --}}

        {{--  style="background-image: url({{ $banner ? asset('storage/' . $banner->banner) : asset('img/h1_hero.jpg') }});" --}}

        {{-- @include('layouts.headerSearch') --}}
        <div class="slider-area hero-bg1   hero-overly">
            {{-- <img   src="../img/h1_hero.jpg" alt=""> --}}
            <div class="single-slider  slider-height1 d-flex justify-content-start align-items-center">
                <div class="container">
                    <div class="row justify-content-start ">
                        <div class="col-xl-7 col-lg-11">

                            <div class="hero-caption pt-10">
                                <h1>Find Your Stay & Taxi in Bodhgaya</h1>
                                <p>Search deals on Hotels Taxi and much more...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.headerSearch')

        </div>




        <div class="container-fluid location-house section-padding">
            <div class="row mx-auto">
                {{-- <div class="col-xl-1 col-lg-1 d-none d-md-block"></div> --}}
                <div class="col-xl-12 col-lg-10 col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9 col-md-12">

                                <div class="section-tittle mb-50">
                                    <h2>Top rated Hotel in Bodhgaya.</h2>

                                    <p>BodhGaya: The City of Enlightenment
                                        {{-- In the heart <i class="fa fa-heart color-danger" aria-hidden="true"
                                            style="color:#003580"></i> of the city of Bodhgaya. --}}

                                    </p>
                                </div>
                            </div>
                        </div>
                        @include('pages.hotelCard')
                    </div>

                    {{-- <div class="slideproducts"> --}}
                    {{-- </div> --}}

                </div>
                {{-- </div> --}}
                {{-- <div class="col-xl-4 col-lg-4 col-md-12">
                    <div id="map" style="height: 68rem; width:100%;">
                    </div>
                </div> --}}
            </div>







            <div class="support-company-area section-padding">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-10">
                            <div class="support-location-img mb-40">
                                <img src="{{ asset('img/gallery/about.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="right-caption">
                                <div class="section-tittle">
                                    <h2>Book Your All Travel Related Services</h2>
                                </div>
                                <div class="support-caption">
                                    <p class="mb-10">We are a BODHGAYA-BASED Travel company. your ONE-STOP Shop for all
                                        your Travel Needs.
                                        If you are looking for Hotels and Transport services like
                                        Car/ Luxury Bus/ Luxury Mini Bus/ Tempo traveler etc. in Bodhgaya, then you have
                                        come
                                        to the right place.
                                        <br> Whether you are planning a family vacation, a Buddhist Circuit Tour, a Bodhgaya
                                        Tour, a Pind Daan, or a Solo Adventure, we are here to arrange your
                                        all travel needs.
                                    </p>
                                    <a href="{{ route('contact') }}" class="btn_01 about-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="about-right-img d-none d-xl-block">
                                <img src="{{ asset('img/gallery/about-right.webp') }}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="location-house ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-8">

                            <div class="section-tittle mb-50">
                                <h2>Our Rooms</h2>
                                <p>The concept and service of the best luxury hotels in Asturias in our sophisticated.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="rows">
                        <div class="location-active owl-carousel">




                            @if (count($bedrooms) < 2)
                                <div class="col-lg-12">

                                    <div class="single-location">
                                        <img src="{{ asset('img/gallery/hotel3.webp') }}" alt="">
                                        <div class="location-contents">
                                            <h3><a href="#">Family Room </a></h3>
                                            <div class="price">
                                                <span>Started from<span>$500</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <div class="single-location">
                                        <img src="{{ asset('img/gallery/hotel3.webp') }}" alt="">
                                        <div class="location-contents">
                                            <h3><a href="#">Couple Room </a></h3>

                                            <div class="price">
                                                <span>Started from<span>$500</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <div class="single-location">
                                        <img src="{{ asset('img/gallery/hotel2.webp') }}" alt="">
                                        <div class="location-contents">
                                            <h3><a href="#">Luxurious Room </a></h3>

                                            <div class="price">
                                                <span>Started from<span>$500</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                @forelse ($bedrooms as $key => $bedroom)
                                <div class="col-lg-12 {{ $key }}">
                                    <a href="{{route('contact')}}">   
                                        {{-- {{dd($bedroom)}} --}}
                                        <div class="single-location">
                                            <img src="{{ asset('storage/' . $bedroom->bedroom_image) }}" alt="">
                                            <div class="location-contents">
                                                <h3><a href="#">{{ $bedroom->bedroom_name }}</a></h3>
                                                {{-- <p>2 Adult 1 Children</p> --}}
                                                <div class="price">
                                                    <span>Started from<span>₹{{ $bedroom->bedroom_price }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                @empty
                                @endforelse
                            @endif


                        </div>
                    </div>
                </div>
            </div>


            <div class="services-area2 section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="section-tittle mb-60 text-center">
                                <h2>Surrounded by galleries, boutiques, restaurants and cafes, our Hotel is a hub of energy
                                    and style.</h2>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="col-xl-12">
                                <div class="single-services2 mb-30">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                                            <div class="features-img">
                                                <img src="{{ asset('img/gallery/project-img.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                                            <div class="features-caption">
                                                <h3><a>You can also book Tour Package from us.</a></h3>
                                                <p>If you’re looking to experience the holy site of Bodhgaya then this tour
                                                    package is definitely the way to go. With so much to see and do, having
                                                    everything organized in advance will help you make the most of your time
                                                    at this sacred site.</p>
                                                <a href="/tour" class="btn">Tour Packages</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card videoWebsite">
                            <section class="w3l-videohny" id="video">
                                <div class="new-block">
                                    <div class="container">
                                        <div class="history-info position-relative"
                                            style="background-image: url({{ count($webSiteVideo) > 0 ? asset('storage/' . $webSiteVideo[0]->previewImage) : asset('img/gallery/project-img.webp') }})">
                                            <div class="video-icon">
                                                <a class="popup-video btn-icon"
                                                    href="{{ count($webSiteVideo) > 0 ? asset('storage' . $webSiteVideo[0]->video) : 'https://www.youtube.com/watch?v=up68UAfH0d0' }}">
                                                    <img src="{{ asset('img/icon/video-icon_2.svg') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div style="text-align: center!important;">
                                <a href="#" class="blog-desc" style="font-size: 2em;">Hindi
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="card videoWebsite">
                            <section class="w3l-videohny" id="video">
                                <div class="new-block">
                                    <div class="container">
                                        <div class="history-info position-relative"
                                            style="background-image: url({{ count($webSiteVideo) > 1 ? asset('storage/' . $webSiteVideo[1]->previewImage) : asset('img/gallery/project-img.webp') }})">
                                            <div class="video-icon">
                                                <a class="popup-video btn-icon"
                                                    href="{{ count($webSiteVideo) > 1 ? asset('storage' . $webSiteVideo[1]->video) : 'https://www.youtube.com/watch?v=up68UAfH0d0' }}">
                                                    <img src="{{ asset('img/icon/video-icon_2.svg') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div style="text-align: center!important;">
                                <a href="#" class="blog-desc" style="font-size: 2em;">English
                                </a>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

            {{-- 
            <div class="video-area section-img-bg2 d-flex align-items-center"
                data-background="{{ asset('img/gallery/video-bg.jpg.webp') }}">
                <div class="container">
                    <div class="row">

                   
                    <div class="col-sm-6">
                        <div class="video-wrap position-relative">

                            <div class="video-icon">
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0">
                                    <img src="{{ asset('img/icon/video-icon_2.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="video-wrap position-relative">

                            <div class="video-icon">
                                <p class="videoText">Test1</p>
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0">
                                    <img src="{{ asset('img/icon/video-icon_2.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div> --}}


            <div class="guest-house section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">

                            <div class="section-tittle text-center mb-50">
                                <h2>We Offer to Our Guest</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 weOffers">
                            <div class="single-location mb-30">
                                <img src="{{ asset('img/gallery/guest1.webp') }}" alt="">
                                <div class="guest-contents guest-contents2">
                                    <h3><a href="#">European Plan</a></h3>
                                </div>
                                <div class="guest-contents">
                                    <h3><a href="#">European Plan</a></h3>
                                    <p>A European plan typically means that your accommodations only are included.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 weOffers">
                            <div class="single-location mb-30">
                                <img src="{{ asset('img/gallery/guest2.jpg') }}" alt="">
                                <div class="guest-contents guest-contents2">
                                    <h3><a href="#">Continental Plan</a></h3>
                                </div>
                                <div class="guest-contents">
                                    <h3><a href="#">Continental Plan</a></h3>
                                    <p>Continental Plan is where the hotel includes a daily breakfast with your rooms stay.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 weOffers">
                            <div class="single-location mb-30">
                                <img src="{{ asset('img/gallery/guest3.webp') }}" alt="">
                                <div class="guest-contents guest-contents2">
                                    <h3><a href="#">Modified American Plan</a></h3>
                                </div>
                                <div class="guest-contents">
                                    <h3><a href="#">Modified American Plan</a></h3>
                                    <p>Modified American Plan is a slightly altered version of the American Plan, and
                                        includes a room stay with breakfast and a choice between lunch and dinner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 weOffers">
                            <div class="single-location mb-30">
                                <img src="{{ asset('img/gallery/guest3.webp') }}" alt="">
                                <div class="guest-contents guest-contents2">
                                    <h3><a href="#">American Plan</a></h3>
                                </div>
                                <div class="guest-contents">
                                    <h3><a href="#">American Plant</a></h3>
                                    <p>In American Plan is where the hotel includes the costs of the room and three meals
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="client-say">
                <div class="container">
                    <div class="custom-row">
                        <div class="client-active">
                            @if (count($testimonials) > 2)
                                @forelse ($testimonials as  $testimonial)
                                    <div class="col-lg-5 col-md-6 col-sm-6">
                                        <div class="client-caption">
                                            <h3>{{ $testimonial->review_title }}</h3>
                                            <p>{{ $testimonial->review_desc }}</p>

                                            <div class="testimonial-founder d-flex align-items-center mt-30">
                                                <div class="testimonialimg">
                                                    <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                        class="img-fluid" alt="client-img">
                                                </div>
                                                <div class="founder-text mx-1">
                                                    <span> - {{ $testimonial->name }}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <div class="col-lg-5 col-md-6 col-sm-6">
                                        <div class="client-caption">
                                            <h3>Delicious Food</h3>
                                            <p>"My hotel is on Excellent location. All the major attractions in Bodhgaya are
                                                at a walking distance from this hotel. The owner is an amazing individual.
                                                Always ready to help with a smile. Is a minefield of knowledge in regards to
                                                Bodhgaya and around. About the hotel, it’s well maintained and complete
                                                value for money. Good for families.</p>

                                            <div class="testimonial-founder d-flex align-items-center mt-30">
                                                <div class="testimonialimg">
                                                    <img src="{{ asset('img/testiImg.png') }}" class="img-fluid"
                                                        alt="client-img">
                                                </div>
                                                <div class="founder-text mx-1">
                                                    <span>- Omeka Lotus</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-6">
                                        <div class="client-caption">
                                            <h3>Nice Accommodation</h3>
                                            <p>"Leather detail shoulder contrastic colour
                                                contour stunning silhouette working peplum.
                                                Statement buttons cover-up tweaks patch.</p>

                                            <div class="testimonial-founder d-flex align-items-center mt-30">
                                                <div class="testimonialimg">
                                                    <img src="{{ asset('img/testiImg.png') }}" class="img-fluid"
                                                        alt="client-img">
                                                </div>
                                                <div class="founder-text mx-1">
                                                    <span>- Omeka Lotus</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            @else
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="client-caption">
                                        <h3>Excellent Location</h3>
                                        <p>"My hotel is on Excellent location. All the major attractions in Bodhgaya are
                                            at a walking distance from this hotel. The owner is an amazing individual.
                                            Always ready to help with a smile. Is a minefield of knowledge in regards to
                                            Bodhgaya and around. About the hotel, it’s well maintained and complete
                                            value for money. Good for families.</p>
                                        <div class="testimonial-founder d-flex align-items-center mt-30">
                                            <div class="testimonialimg">
                                                <img src="{{ asset('testimonials/1.jpeg') }}" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="founder-text mx-1">
                                                <span>- Himanshu Sheth</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="client-caption">
                                        <h3>Delicious food</h3>
                             
                                            <p>"We had booked an family room 4 bed. The room was very spacious and well
                                                maintained. the bathroom was neat and clean. Service of hotel shelton is superb,
                                                anything you request would be fullfilled instantly within few minutes. Food
                                                served in the hotel was also delicious. Overall had an good experience in this
                                                hotel. Would recommend to everyone who are travelling with family. I have good
                                                experience with Hotel in Bodhgaya.</p>

                                        <div class="testimonial-founder d-flex align-items-center mt-30">
                                            <div class="testimonialimg">
                                                <img src="{{ asset('testimonials/4.jpeg') }}" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="founder-text mx-1">
                                                <span>- Shubham Chauhan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="client-caption">
                                        <h3>Nice accommodation</h3>
                                        <p>"Rooms are neat and maintained well. Service is very good, especially Saheed and
                                            Tinku are very good. Quickly do the work asked for. Food is also good here</p>

                                        <div class="testimonial-founder d-flex align-items-center mt-30">
                                            <div class="testimonialimg">
                                                <img src="{{ asset('testimonials/2.jpeg') }}" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="founder-text mx-1">
                                                <span>- Kunal Rout</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="client-caption">
                                        <h3>Nice service</h3>
                                        <p>"Excellent customer service. Room well maintained. Staffs are very helpful and friendly. book your travel services from hotel in bodhgaya for nice service 😊😊</p>

                                        <div class="testimonial-founder d-flex align-items-center mt-30">
                                            <div class="testimonialimg">
                                                <img src="{{ asset('testimonials/3.jpeg') }}" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="founder-text mx-1">
                                                <span>- Alok Kumar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </section>

    </main>

    <style>
        .next {
            display: none;
        }
    </style>

    @if (count($hotels) > 2)
        <script>
            $(document).ready(function() {

                // alert("test");
                pageSize = 8;
                incremSlide = 5;
                startPage = 0;
                numberPage = 0;

                var pageCount = $(".line-content").length / pageSize;
                var totalSlidepPage = Math.floor(pageCount / incremSlide);

                for (var i = 0; i < pageCount; i++) {
                    $("#pagin").append('<li><a href="#topScroll">' + (i + 1) + '</a></li> ');
                    if (i > pageSize) {
                        $("#pagin li").eq(i).hide();
                    }
                }

                var prev = $("<li/>").addClass("prev").html("Prev").click(function() {
                    startPage -= 5;
                    incremSlide -= 5;
                    numberPage--;
                    slide();
                });

                prev.hide();

                var next = $("<li/>").addClass("next").html("Next").click(function() {
                    startPage += 5;
                    incremSlide += 5;
                    numberPage++;
                    slide();
                });

                $("#pagin").prepend(prev).append(next);

                $("#pagin li").first().find("a").addClass("current");

                slide = function(sens) {
                    $("#pagin li").hide();

                    for (t = startPage; t < incremSlide; t++) {
                        $("#pagin li").eq(t + 1).show();
                    }
                    if (startPage == 0) {
                        next.show();
                        prev.hide();
                    } else if (numberPage == totalSlidepPage) {
                        next.hide();
                        prev.show();
                    } else {
                        next.show();
                        prev.show();
                    }


                }

                showPage = function(page) {
                    $(".line-content").hide();
                    $(".line-content").each(function(n) {
                        if (n >= pageSize * (page - 1) && n < pageSize * page)
                            $(this).show();
                    });
                }

                showPage(1);
                $("#pagin li a").eq(0).addClass("current");

                $("#pagin li a").click(function() {
                    $("#pagin li a").removeClass("current");
                    $(this).addClass("current");
                    showPage(parseInt($(this).text()));
                });


            });
        </script>
    @endif

    <script>
        // function initMap() {


        //     var locationArr = @json($locations);

        //     // console.log(locationArr.length);

        //     var mainCoords = locationArr[0];
        //     // console.log(mainCoords);

        //     var mapOptions = {
        //         center: {
        //             lat: mainCoords.lat,
        //             lng: mainCoords.lng
        //         },
        //         zoom: 13,
        //     };

        //     const map = new google.maps.Map(document.getElementById('map'), mapOptions);
        //     const icon = {
        //         url: @json(asset('/storage/map_pointer.png')), // url
        //         // url: "https://hostdev2.justboardrooms.com/Images/LocationPointer.png", // url
        //         scaledSize: new google.maps.Size(45, 65), // scaled size

        //     };
        //     var allMarkers = [];
        //     for (var i = 0; i < locationArr.length; i++) {


        //         var myCoords = locationArr[i];

        //         // console.log(myCoords);

        //         r = new google.maps.Marker({
        //             position: myCoords,
        //             map: map,
        //             icon: icon,
        //             title: myCoords.hotel_name,
        //             optimized: true,
        //             // label: `${i + 1}`,
        //             animation: google.maps.Animation.DROP,
        //             url: @json(url('/hotel-details')) + '/' + myCoords.listing_id,
        //         });




        //         allMarkers.push(r);




        //     }

        //     allMarkers.map((marker) => {
        //         marker.addListener("click", () => {
        //             // marker.addListener("click", toggleBounce);
        //             window.open(marker.url, '_blank')
        //         })
        //     });
        // }



        //         function toggleBounce() {
        //   if (r.getAnimation() !== null) {
        //     r.setAnimation(null);
        //   } else {
        //     r.setAnimation(google.maps.Animation.BOUNCE);
        //   }
        // }
    </script>

    {{-- <script
        
        GOlocalBaskst
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1GLowllQeWOX52ML3wtC-qYcoZ6ygOwg&libraries=places&callback=initMap">
    </script> --}}

    {{-- <script
        
        JB
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSuy4U3KFAhhK1gtshBsDJIiKDnK16upg&libraries=places&callback=initMap">
    </script> --}}
@endsection
