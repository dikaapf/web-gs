@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="section-header bg-primary text-white">
    <!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="{{asset('img/banner-galipat-slide1.png')}}" class="d-block w-100"
        alt="Sunset Over the City" />
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{asset('img/banner-galipat-slide1.png')}}" class="d-block w-100"
        alt="Canyon at Nigh" />
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{asset('img/banner-galipat-slide1.png')}}" class="d-block w-100"
        alt="Cliff Above a Stormy Sea" />
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
    <div class="pattern bottom"></div>
</section>

<!-- Bagian 2 -->
<section class="section section-ld">
    <div class="container">
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Card image cap">
            <div class="card-body">
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Card image cap">
            <div class="card-body">
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Card image cap">
            <div class="card-body">
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Card image cap">
            <div class="card-body">
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Bagian 3 -->
<section class="section section-ld">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <nav>
                <div class="nav nav-tabs flex-column flex-md-row bg-white shadow-soft border border-light justify-content-around rounded mb-lg-3 py-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link rounded mr-md-3 active" id="nav-content-research-tab" data-toggle="tab" href="#nav-content-research" role="tab" aria-controls="nav-content-research" aria-selected="true"><span class="d-block"><i class="fa fa-mobile"></i><span class="font-weight-normal">ANDROID</span></span></a>
                    <a class="nav-item nav-link rounded mr-md-3" id="nav-rank-track-tab" data-toggle="tab" href="#nav-rank-track" role="tab" aria-controls="nav-rank-track" aria-selected="false"><i class="fas fa-mobile"></i><span class="font-weight-normal">IPHONE</span></a>
                    <a class="nav-item nav-link rounded mr-md-3" id="nav-web-monitor-tab" data-toggle="tab" href="#nav-web-monitor" role="tab" aria-controls="nav-web-monitor" aria-selected="false"><i class="fas fa-clock"></i><span class="font-weight-normal">SMART WATCH</span></a>
                </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-content-research" role="tabpanel" aria-labelledby="nav-content-research-tab">
                    <p>Android</p>
                </div>
                <div class="tab-pane fade" id="nav-rank-track" role="tabpanel" aria-labelledby="nav-rank-track-tab">
                    <p>Iphone</p>
                </div>
                <div class="tab-pane fade" id="nav-web-monitor" role="tabpanel" aria-labelledby="nav-web-monitor-tab">
                    <p>Smart Watch</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Bagian 4 -->
<section class="section section-ld">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 mb-lg-5">Backend pages</h2>
            </div>
            <div class="col-6 col-sm-4 mb-5">
                <a href="#" class="page-preview scale-up-hover-2">
                    <img class="shadow-lg rounded scale" src="https://user-images.githubusercontent.com/396987/88489727-f3889200-cfb7-11ea-819f-dc9a52bc8d82.jpg"
                        alt="Landing page preview">
                    <div class="text-center show-on-hover">
                        <h6 class="m-0 text-center text-white">Dashboard<i
                                class="fas fa-external-link-alt ml-2"></i></h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mb-5">
                <a href="#" class="page-preview scale-up-hover-2">
                    <img class="shadow-lg rounded scale" src="https://user-images.githubusercontent.com/396987/88519250-a0dcc380-d013-11ea-9dc5-9d731af611f1.jpg"
                        alt="About page preview">
                    <div class="text-center show-on-hover">
                        <h6 class="m-0 text-center text-white">Posts List <i
                                class="fas fa-external-link-alt ml-2"></i></h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mb-5">
                <a href="#" class="page-preview scale-up-hover-2">
                    <img class="shadow-lg rounded scale" src="https://user-images.githubusercontent.com/396987/88519360-d1bcf880-d013-11ea-9f6c-b5d33912057f.jpg"
                        alt="Pricing page preview">
                    <div class="text-center show-on-hover">
                        <h6 class="m-0 text-center text-white">Posts Edit <i
                                class="fas fa-external-link-alt ml-2"></i></h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection