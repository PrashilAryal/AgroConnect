<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroConnect | Admin
    </title>
    <link rel="stylesheet" href="{{ URL::asset('css/adminstyle.css'); }}" />
    <link rel="stylesheet" href="{{ asset('css/recipe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300;400;900&family=Fira+Sans&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/6ac97bb13c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <div class="adminLogo">
                <a href="{{url('/admin-dashboard')}}">
                    <img src="{{ asset('../images/agriculture.png') }}" alt="logo">
                </a>
            </div>
            <ul>
                <li>
                    <a href="{{url('/admin-dashboard')}}">
                        <span class="icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin-view-courses')}}">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/loan-request')}}">
                        <span class="icon">
                            <i class="fa fa-dollar"></i>
                        </span>
                        <span class="title">Loan Request</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin-market-price')}}">
                        <span class="icon">
                            <i class="fa fa-money"></i>
                        </span>
                        <span class="title">Market Price</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        <span class="icon">
                            <i class="fa-solid fa-left-long"></i>
                        </span>
                        <span class="title">Go to website</span>
                    </a>
                </li>


                <li>
                    <a href="{{url('/logout-admin')}}">
                        <span class="icon">
                            <i class="fa fa-right-from-bracket"></i>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h2>AgroConnect</h2>
                <div class="adminTopName">
                    <h3>Username</h3>
                    <div class="user">
                        <span>
                            <img src="{{ asset('../images/agriculture.png') }}" alt="">
                            <!-- <ion-icon name="person-circle-sharp" size="large"></ion-icon> -->
                        </span>
                    </div>
                </div>
            </div>
            <!-- cards -->
            {{-- <div class="cardBox">
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
        </div> --}}
            <!-- order detail list -->
            <div class="details">
                @yield('adminContent')
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
    //Menu toogle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function() {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    };

    //add hovered class in selected list item
    let list = document.querySelectorAll(".navigation li");

    function activelink() {
        list.forEach((item) => item.classList.remove("hovered"));
        this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("mouseover", activelink));
    </script>
</body>

</html>