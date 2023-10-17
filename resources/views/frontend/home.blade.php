@extends('frontend.layout.layout')

@section('main-content')
  {{-- Hero --}}
  @include('frontend.partials.home.hero')

  {{-- Services --}}
  @include('frontend.partials.home.services')

  <div class="site-section site-blocks-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-lg-0 mb-4" data-aos="fade" data-aos-delay="">
          <a class="block-2-item" href="#">
            <figure class="image">
              <img src="images/women.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Women</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-lg-0 mb-5" data-aos="fade" data-aos-delay="100">
          <a class="block-2-item" href="#">
            <figure class="image">
              <img src="images/children.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Children</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-lg-0 mb-5" data-aos="fade" data-aos-delay="200">
          <a class="block-2-item" href="#">
            <figure class="image">
              <img src="images/men.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Men</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Featured Products --}}
  @include('frontend.partials.home.featured')
  <div class="site-section block-8">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 site-section-heading pt-4 text-center">
          <h2>Big Sale!</h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 mb-5">
          <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-12 col-lg-5 pl-md-5 text-center">
          <h2><a href="#">50% less in all items</a></h2>
          <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span>
            September 3, 2018</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere
            corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
          <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection
