@extends('Layouts/front-end-layout')

@section('Content')


    @include('component/main-hero')




 

  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            News
          </h2>
        </div>
       
      </div>
      <div class="row">
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">
              <div class="property-item">
                <a href="news_1" class="img">
                  <img src="{{asset('assets/images/news1.jpg')}}" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>"Diriya Piyasa</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      > Doluwa Divisional</span
                    >
                    <span class="city d-block mb-3">Saviyak Community Basic Project</span>

                    <a
                      href="news_1"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="news_2" class="img">
                  <img src="{{asset('assets/images/news2.1.jpg')}}" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>"Diriya Piyasa</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      > Doluwa Divisional</span
                    >
                    <span class="city d-block mb-3">Saviyak Community Basic Project</span>

                    <a
                      href="news_2"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="news_3" class="img">
                  <img src="{{asset('assets/images/news3.1.jpeg')}}" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>"Diriya Piyasa</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      > Doluwa Divisional</span
                    >
                    <span class="city d-block mb-3">Saviyak Community Basic Project</span>

                    <a
                      href="news_3"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->


              
              <div class="property-item">
                <a href="news_4" class="img">
                  <img src="{{asset('assets/images/news4.1.jpg')}}" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>"Diriya Piyasa</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      > Doluwa Divisional</span
                    >
                    <span class="city d-block mb-3">Saviyak Community Basic Project</span>

                    <a
                      href="news_4"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>

              
              <!-- .item -->
            </div>

            <div
              id="property-nav"
              class="controls"
              tabindex="0"
              aria-label="Carousel Navigation"
            >
              <span
                class="prev"
                data-controls="prev"
                aria-controls="property"
                tabindex="-1"
                >Prev</span
              >
              <span
                class="next"
                data-controls="next"
                aria-controls="property"
                tabindex="-1"
                >Next</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Our Vision / Mission 
          </h2>
          <p class="text-black-50">
            The Divisional Secretariat Appointment Management System envisions a future where the administrative processes of Divisional Secretariats are transformed into efficient, transparent, and citizen-centric operations. Our mission is to develop and operate a comprehensive digital platform that revolutionizes appointment management, promotes accountability, and advances public administration to better serve communities.
          </p>
        </div>
      </div>
      <div class="row justify-content-between mb-5">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
          <div class="img-about dots">
            <img src="{{asset('assets/images/hero_bg_3.jpg')}}" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-4">

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-person"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Vision Statement::</h3>
              <p class="text-black-50">
                "To be the leading and trusted digital platform that empowers Divisional Secretariats with efficient, transparent, and citizen-centric appointment management solutions, contributing to a well-organized and accountable public administration system."
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Mission Statement:</h3>
              <p class="text-black-50">
                Our mission is to create a comprehensive Appointment Management System for Divisional Secretariats that streamlines processes, enhances accessibility, ensures fairness, and promotes good governance. We're dedicated to delivering innovative technology solutions that optimize resource allocation, foster public participation, and empower Divisional Secretariats to serve their communities effectively.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row section-counter mt-5">
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">523298</span></span
            >
            <span class="caption text-black-50"># of Cetirizine</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">300</span></span
            >
            <span class="caption text-black-50"># of Officers</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">1500</span></span
            >
            <span class="caption text-black-50"># of Grama Niladari Divitions</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">1250</span></span
            >
            <span class="caption text-black-50"># of Office</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section section-5 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Our Management 
          </h2>
          <p class="text-black-50">
            Our Management: The dedicated team behind the Divisional Secretariat Appointment Management System is driven by a passion for modernizing public administration. We bring a wealth of expertise in technology and governance to ensure the effective development, operation, and continuous improvement of the system, enabling efficient appointment processes and enhanced citizen engagement
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{asset('assets/images/person_1-min.jpg')}}"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">James Doe</a></h2>
              <span class="meta d-block mb-3">Assistent Divisional Secretariat</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere officiis inventore cumque tenetur laboriosam, minus
                culpa doloremque odio, neque molestias?
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{asset('assets/images/person_2-min.jpg')}}"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Jean Smith</a></h2>
              <span class="meta d-block mb-3">Divisional Secretariat</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere officiis inventore cumque tenetur laboriosam, minus
                culpa doloremque odio, neque molestias?
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{asset('assets/images/person_3-min.jpg')}}"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
              <span class="meta d-block mb-3">IT Manager</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere officiis inventore cumque tenetur laboriosam, minus
                culpa doloremque odio, neque molestias?
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

@endsection