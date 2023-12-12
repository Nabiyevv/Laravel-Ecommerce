@extends('frontend.layout.layout')


@section('main-content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-8">
        <div style="max-width: 500px;">
          <form action="{{ route('login') }}" method="post">
            @method('POST')
            @csrf
              <div class="form-group">
                <input type="text" name="firstName" class="form-control py-4" id="" placeholder="First Name">
              </div>

              <div class="form-group">
                <input type="text" name="lastName" class="form-control py-4" id="" placeholder="Last Name">
              </div>

              <div class="form-group">
                <input type="text" name="address" class="form-control py-4" id="" placeholder="Address">
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control py-4" id="" placeholder="Email">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control py-4" id="" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="file" name="image" id="">
              </div>

            <div class="form-group">
              <input type="submit" class="btn btn-sm btn-primary" value="Send">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  
  
@endsection