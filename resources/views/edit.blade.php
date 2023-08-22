@extends('home')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {!!session('success')!!}
</div>
@endif
<section class="">  
  <!-- <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6"> -->
          <div class="card" style="background-color:#fae6c4; with:500border-radius: 15px; margin-top:20%;">
            <div class="card-body p-5">
              <h3 class="text-uppercase text-center mb-5">Register Users</h3>

              <form action="{{ route('update',$data->id) }}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="firstname" value="{{$data->firstname}}" placeholder="Enter  firstname"class="form-control form-control-lg" />
                  <input type="text" id="form3Example3cg" name="lastname" value="{{$data->lastname}}" placeholder=" Enter last name"class="form-control form-control-lg mt-2" />
                  <input type="text" name="phone" id="form3Example4cg" value="{{$data->phone}}" placeholder="Enter contact number" class="form-control form-control-lg mt-2" />
                  <input type="company" name="company" id="form3Example4cdg" value="{{$data->company}}" placeholder="Enter company name"class="form-control form-control-lg mt-2" />
                  <input type="email" name="email" id="form3Example4cdg" value="{{$data->email}}"placeholder="Enter email" class="form-control form-control-lg mt-2" /><br>
                                                  
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary"name="submit">update</button>
                                  </div>
              </form>

            </div>
          </div>
        <!-- </div>
      </div>
    </div>
  </div> -->
</section>

@endsection