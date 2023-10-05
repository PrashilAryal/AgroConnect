@extends('layout.header')

@section('homeContents')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<section class="hero-section">
    <div class="hero">
        <div class="hero-text-box">
            <!-- <p class="text-1">It is good time for the great taste of Burgers</p> -->
            <h1 class="text-3">Seeds of Success</h1>
            <p class="text-4">Sow the seeds of your agricultural dreams with us. Our user-friendly interface and expert
                support make it easier than ever to navigate the agricultural landscape. Whether you're looking for
                products, information, or partnerships, we've got you covered.</p>
            <a href="#" class="order-now-link">Get Started</a>

        </div>
        <div class="hero-img-box">
            <img src="{{ asset('../images/pngwing.com.png') }}" class="hero-img" alt="a burger image">
        </div>
    </div>


</section>
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('../images/home0.jpg') }}" class="d-block w-100 sliderImages" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('../images/home1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('../images/home2.jpg') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> -->

<div class="weatherContainer">
    <h4>Something about weather</h4>
    <div class="weatherContents" style="display: flex;justify-content:space-around">
        <div class="weather">
            <p>Current</p>
            <img id="currentImg" src="{{ asset('../images/clouds.png') }}" alt=""><br>
            <span id="currentTemp">23°C</span>
        </div>
        <div class="weather">
            <p>00</p>
            <img id="Img0" src="{{ asset('../images/cloudy-day.png') }}" alt=""><br>
            <span id="day0">23°C</span>
        </div>
        <div class="weather">
            <p>01</p>
            <img id="Img1" src="{{ asset('../images/cloudy-day.png') }}" alt=""><br>
            <span id="day1">23°C</span>
        </div>
        <div class="weather ">
            <p>02</p>
            <img id="Img2" src="{{ asset('../images/clouds.png') }}" alt=""><br>
            <span id="day2">23°C</span>
        </div>

    </div>
</div>

<div class="contain">
    <h2>Product</h2>
    <div id="owl-carousel" class="owl-carousel owl-theme">
        @foreach ($equipment as $euip)
        @if ($euip->user->role == 4)
        <div style="width:300px;height:350px;position:relative;" class="border">
            <div class="w-100 border-bottom " style="height:250px;">
                <img src="{{ asset('/storage/' . $euip->imgname) }}" alt="" class="w-100 h-100">

            </div>
            @if($euip->loan == "loan")
            <p class="text-white  p-2 fs-3"
                style="position:Absolute;z-index:99;background-color:orangered;top:0;right:0;">
                Loan
            </p>
            @endif
            <div class="d-flex flex-column align-items-center" style="gap:5px">
                <p class="mb-0 fs-3">{{ $euip->toolname }}</p>
                <p class="mb-0 fs-4">{{ $euip->price }}</p>
                <a class="p-1 fs-4" href="{{url('farmer-order-page/' . $euip->id)}}"
                    style="width: 100px;border:none;background-color:green;color:white;border-radius:5px;">Add
                    to
                    cart</a>
            </div>
        </div>
        @endif
        @endforeach
        <!-- <div style="width:300px;height:350px;" class="border">
                 <div class="w-100 border-bottom" style="height:250px;">
                       <img src="https://fmexim.com/images/asset-agri-tools-sickle.jpg" alt="" class="w-100 h-100">
                 </div>
                 <div class="d-flex flex-column align-items-center" style="gap:5px">
                 <p class="mb-0 fs-3">Product1</p>
                      <p class="mb-0 fs-4">Price</p>
                      <button class="p-1 fs-4" style="width: 100px;border:none;background-color:green;color:white;border-radius:5px;">Add to cart</button>
                 </div>
              </div>
          </div> -->
    </div>
    <div class="contain">
        <h2>Agriculture Product</h2>
        <div id="owl-carousel1" class="owl-carousel owl-theme">
            <!-- @foreach ($equipment as $euip)
            @if ($euip->user->role == 1)
            <div style="width:300px;height:350px;" class="border">
                <div class="w-100 border-bottom" style="height:250px;">
                    <img src="{{ asset('/storage/' . $euip->imgname) }}" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex flex-column align-items-center" style="gap:5px">
                    <p class="mb-0 fs-3">{{ $euip->toolname }}</p>
                    <p class="mb-0 fs-4">{{ $euip->price }}</p>

                </div>
            </div>
            @endif
            @endforeach -->
            <div style="width:300px;height:350px;" class="border">
                <div class="w-100 border-bottom" style="height:250px;">
                    <img src="{{ asset('../images/maze.jpg') }}" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex flex-column align-items-center" style="gap:5px">
                    <p class="mb-0 fs-3">Product1</p>
                    <p class="mb-0 fs-4">Price</p>

                </div>
            </div>
            <div style="width:300px;height:350px;" class="border">
                <div class="w-100 border-bottom" style="height:250px;">
                    <img src="{{ asset('../images/fertilizer.jpg') }}" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex flex-column align-items-center" style="gap:5px">
                    <p class="mb-0 fs-3">Product1</p>
                    <p class="mb-0 fs-4">Price</p>

                </div>
            </div>
            <div style="width:300px;height:350px;" class="border">
                <div class="w-100 border-bottom" style="height:250px;">
                    <img src="{{ asset('../images/wheat.jpg') }}" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex flex-column align-items-center" style="gap:5px">
                    <p class="mb-0 fs-3">Product1</p>
                    <p class="mb-0 fs-4">Price</p>

                </div>
            </div>
            <div style="width:300px;height:350px;" class="border">
                <div class="w-100 border-bottom" style="height:250px;">
                    <img src="{{ asset('../images/fertilizer2.jpg') }}" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex flex-column align-items-center" style="gap:5px">
                    <p class="mb-0 fs-3">Product1</p>
                    <p class="mb-0 fs-4">Price</p>

                </div>
            </div>
        </div>
    </div>
    <div class="contain">
        <h2>Top Stories</h2>
        <div class="d-flex" style="gap:10px;flex-wrap:wrap;">
            <div style="width:400px;height:200px;border-radius:10px;position:relative;overflow:hidden;">
                <div style="position:absolute" class="w-100 h-100">
                    <img src="{{ asset('../images/home0.jpg') }}" class="h-100 w-100" alt="...">
                </div>
                <div class="linear"></div>
                <h2 style="position:absolute;bottom:10px;left:50%;color:white;">New Machine in Terai</h2>
            </div>
            <div style="width:400px;height:200px;border-radius:10px;position:relative;overflow:hidden;">
                <div style="position:absolute" class="w-100 h-100">
                    <img src="{{ asset('../images/chicken.jpg') }}" class="h-100 w-100" alt="...">
                </div>
                <div class="linear"></div>
                <h2 style="position:absolute;bottom:10px;left:50%;color:white;">Diseases on Chicken</h2>
            </div>
        </div>
    </div>

    <!-- <div class="container mt-5">
          <h2>Product List</h2>
        <div class="owl-carousel owl-theme" >
              <div style="width:300px;height:250px;" class="border">
                 <div class="w-100" style="height:250px;overflow:hidden">
                       <img src="https://fmexim.com/images/asset-agri-tools-sickle.jpg" alt="" class="w-100 h-100">
                 </div>
                 <div class="d-flex flex-direction-column justify-contenct-center" style="background-color:red;">
                      <h2>Product1</h2>
                      <p>Price</p>
                      <button class="btn btn-success">Add to cart</button>
                 </div>
              </div>
            
        </div>
        </div> -->
    <script src="{{ asset('../js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: true,
        items: 4,
    })
    $('#owl-carousel1').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: true,
        items: 4,
    })
    </script>
    @endsection