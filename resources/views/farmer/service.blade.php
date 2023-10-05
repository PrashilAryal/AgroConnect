@extends('layout.header')
@section('homeContents')
<style>
    .service_section {
  position: relative;
}

.service_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 45px;
  background-color: #f8f8f9;
  padding: 20px;
  border-radius: 5px;
}

.service_section .box .img-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;

          justify-content: center;

          align-items: flex-start;
  width: 250px;
  height: 150px;
  margin-right: 25px;
}

.service_section .box .img-box img {
  width: 100%;
  height: 100%;

  transition: all .3s;
}

.service_section .box .detail-box h5 {
  font-weight: bold;
  text-transform: uppercase;
}

.service_section .box .detail-box a {
  color: #04233b;
  font-weight: 600;
}

.service_section .box .detail-box a:hover {
  color: #0a97b0;
}
</style>


<section class="service_section layout_padding mt-5">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2 class="fs-1">
            Our <span>Services</span>
          </h2>
          <p class="fs-3 text-secondary">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/soilTesting.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>
                  Soil Testing
                </h1>
                <p class="fs-4">
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/teaching.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>
                  Provide Course
                </h1>
                <p class="fs-4">
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/financialService.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>
                Financial Services
                </h1>
                <p class="fs-4">
                Expand your financial services to include savings accounts, credit, and insurance tailored to the needs of farmers.
                </p>
              
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/agTraining.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>
                Agricultural Training and Workshops
                </h1>
                <p class="fs-4">
                Organize and promote training sessions, workshops, and webinars on various agricultural topics, including modern farming techniques, organic farming, and sustainable agriculture.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection