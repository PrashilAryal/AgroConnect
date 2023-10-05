<html>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 10px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    navbar {
        width: 100%;
        height: 80px;
        position: fixed;
        z-index: 99;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
    }

    navbar ul {
        display: flex;
        gap: 10px;
    }

    navbar ul li {
        list-style: none;
    }

    .login-btn {
        font-size: 2rem;
        background-color: gray;
        padding: 10px 20px;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .signup-btn {
        font-size: 2rem;
        background-color: #365902;
        padding: 10px 20px;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .signup-btn:hover {
        background-color: #4d7117;
    }

    .login-btn:hover {
        background-color: rgb(56, 56, 56);
    }

    .herosection {
        width: 100%;
        height: 100vh;
        overflow: hidden;
        position: relative;
    }

    .hero-section-img {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .hero-section-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .herosection-description {
        position: absolute;
        top: 250px;
        left: 30px;
        width: 40%;
    }

    .herosection-description h1 {
        color: #365902;
        font-size: 6.4rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .herosection-description p {
        color: black;
        font-size: 2rem;
        line-height: 1.3;
        letter-spacing: 0.8px;
        margin-bottom: 30px;
        font-weight: 400;
    }

    .extra-padding {
        padding: 15px 50px;
        font-size: 2.4rem;
        letter-spacing: 1px;
    }
</style>

<body>

    <div>
        <navbar>
            <h1 class="logo">Agro<span class="wizard-text">Connect</span></h1>
            <div class="authentication-links">
                <ul>
                    <li class="signup-btn">
                        <a href="{{ route('signup') }}">Sign up</a>
                    </li>
                    <li class="login-btn">
                        <a href="{{ route('login') }}">Log in</a>
                    </li>
                </ul>
            </div>
        </navbar>
        <div class="herosection">
            <div class="hero-section-img">
                <img src="{{asset('../images/landingPage.jpg')}}" alt="" />
            </div>
            <div class="herosection-description">
                <h1>Cultivate Success in Agriculture</h1>
                <p>
                    Manage your agricultural operations effectively with our Agriculture Management Tools. Stay in control of your farm's finances and make informed decisions. Join us now and take charge of your agricultural journey!
                </p>
                <a class="signup-btn extra-padding" href="{{ route('signup') }}">Sign up &rarr;</a>
            </div>
        </div>
    </div>
</body>

</html>