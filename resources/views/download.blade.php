@extends('Layouts/front-end-layout')

@section('Content')


    <div
    class="hero page-inner overlay"
    style="background-image: url('{{ asset('assets/images/Download1.jpg') }}')" 
    >
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Download</h1>

                <nav
                    aria-label="breadcrumb"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li
                        class="breadcrumb-item active text-white-50"
                        aria-current="page"
                    >
                    Download
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>



@endsection