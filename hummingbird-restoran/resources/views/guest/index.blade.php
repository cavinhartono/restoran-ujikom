@extends('/layouts/master')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush

@section('content')
@if (Session::get('success'))
<div class="greating">
  <span class="message">{{ Session::get('success') }}</span>
</div>
@endif
<x-header />
<div class="content" id="home">
  <div class="homepage">
    <img src="{{ asset('assets/images/homepage.png') }}" class="photo" />
    <h2 class="title" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="700">
      Think positively. Enjoy life...
    </h2>
  </div>
  <div class="gallery" id="gallery">
    <h2 class="title">Food and Drink</h2>
    <ul class="food">
      <li class="list" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="900" data-aos-duration="700">
        <div class="food_image">
          <img src="{{ asset('assets/images/fried-kway-teow.jpeg" alt="" class="photo" />
        </div>
        <div class="food_content">
          <h2 class="title">Kway Teow Goreng</h2>
          <p class="subtitle">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Doloribus culpa quis qui?
          </p>
        </div>
      </li>
      <li class="list" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="1000" data-aos-duration="700" data-aos-delay="400">
        <div class="food_image">
          <img src="{{ asset('assets/images/mie-ayam-jamur.jpeg') }}" alt="" class="photo" />
        </div>
        <div class="food_content">
          <h2 class="title">Mie Ayam Jamur</h2>
          <p class="subtitle">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          </p>
        </div>
      </li>
      <li class="list" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-duration="700" data-aos-offset="1200" data-aos-duration="700" data-aos-delay="400">
        <div class="food_image">
          <img src="{{ asset('assets/images/mushroom.jpeg') }}" alt="" class="photo" />
        </div>
        <div class="food_content">
          <h2 class="title">Mushroom Field</h2>
          <p class="subtitle">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Incidunt quasi ullam doloribus laborum officiis!
          </p>
        </div>
      </li>
      <li class="list" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="1400" data-aos-duration="700" data-aos-delay="400">
        <div class="food_image">
          <img src="{{ asset('assets/images/thai-chicken.jpeg') }}" alt="" class="photo" />
        </div>
        <div class="food_content">
          <h2 class="title">Nasi Goreng</h2>
          <p class="subtitle">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            soluta veritatis, minima dicta deleniti suscipit?
          </p>
        </div>
      </li>
    </ul>
  </div>
  <div class="contact" id="contact">
    <div class="contact_container">
      <h2 class="title">Contact Infomation</h2>
      <div class="content">
        <ul class="location" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="1600" data-aos-duration="700" data-aos-delay="400">
          <li class="list">
            <div class="info_location">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
                  <title>ionicons-v5-n</title>
                  <circle cx="256" cy="192" r="32" />
                  <path d="M256,32C167.78,32,96,100.65,96,185c0,40.17,18.31,93.59,54.42,158.78,29,52.34,62.55,99.67,80,123.22a31.75,31.75,0,0,0,51.22,0c17.42-23.55,51-70.88,80-123.22C397.69,278.61,416,225.19,416,185,416,100.65,344.22,32,256,32Zm0,224a64,64,0,1,1,64-64A64.07,64.07,0,0,1,256,256Z" />
                </svg>
              </span>
              <span class="subtitle">
                Jl. Progo no 14 Bandung 40115 - Jawa Barat
              </span>
            </div>
            <div class="maps"></div>
          </li>
          <li class="list">
            <p class="subtitle">
              Opening hours may vary due to covid 19. <br />Please check
              with our operator 022-4212582
            </p>
          </li>
          <ul class="schedule">
            <li class="list">
              <span class="subtitle">Weekend</span>
              <span class="subtitle">8AM - 9PM</span>
            </li>
            <li class="list">
              <span class="subtitle">Monday - Friday</span>
              <span class="subtitle">8AM - 6PM</span>
            </li>
          </ul>
        </ul>
        <form action="#" method="post" class="form">
          <ul class="input two">
            <li class="list">
              <label class="subtitle" for="name">Name<sup>*</sup></label>
              <input type="text" id="name" placeholder="Your Name..." />
            </li>
            <li class="list">
              <label class="subtitle" for="email">Email<sup>*</sup></label>
              <input type="text" id="email" placeholder="Your Email..." />
            </li>
          </ul>
          <ul class="input">
            <li class="list">
              <label class="subtitle" for="subject">Subject<sup>*</sup></label>
              <input type="text" id="subject" placeholder="Your Subject..." />
            </li>
          </ul>
          <ul class="input">
            <li class="list">
              <label class="subtitle" for="message">
                Message<sup>*</sup>
              </label>
              <textarea id="message" placeholder="Your Message"></textarea>
            </li>
            <div class="input">
              <button class="btn primary">Submit</button>
            </div>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="footer_container">
    <p class="subtitle">&copy; Copyright 2023 | Cavin Hartono Putra</p>
  </div>
</footer>
@push('js')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    var maps = {
      center: new google.maps.LatLng(-6.904766827642139, 107.6182506392575),
      zoom: 20,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    var output = new google.maps.Map(document.querySelector(".maps"), maps);
  }

  google.maps.event.addDomListener(window, "load", initialize);
</script>
<script>
  const list = document.querySelectorAll(".nav .list");

  list.forEach((item) => {
    item.addEventListener("click", () => {
      list.forEach((element) => {
        element.classList.remove("active");
      });
      item.classList.add("active");
    });
  });

  window.onscroll = function() {
    var currentScroll = window.pageYOffset;

    if (currentScroll < 100) {
      document.querySelector(".header").style.top = "0";
      document.querySelector(".header").style.transition = "0.3s";
      document.querySelector(".header").classList.add("active");
    } else {
      document.querySelector(".header").style.top = "-50px";
      document.querySelector(".header").classList.remove("active");
    }
  };
</script>
<script>
  AOS.init({
    once: true,
  });
</script>
@endpush
@endsection