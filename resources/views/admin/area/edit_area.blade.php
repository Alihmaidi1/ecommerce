@include('admin.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src={{ asset("AdminLTE/dist/img/AdminLTELogo.png") }} alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Preloader -->
  @include('admin.layout.messages')
  @include('admin.layout.navbar')
  @include('admin.layout.sidebar')
  <div class="content-wrapper">
      <br/>
<form method="POST" action="{{ route("change_area") }}">
    @csrf
    <input type="hidden" name="id" value="{{ $area->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input readonly id="address" class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $area->name }}" placeholder="Enter Name"/>
        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    <br/>
    <div id='map' style='width: 400px; margin:auto; height: 300px;'></div>
    
    <div class="w-50 m-auto">
        <label>City</label>
        <select class="form-control @error('city')is-invalid @enderror" name="city">
        @foreach(\App\Models\cities::get() as $city)

        <option selected value="{{ $city->id }}"> {{ $city->name }}</option>
        @endforeach
        </select>
        @error('city')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
      </div>
    
    
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit area</button></div>
</form>
  </div>

  @include("admin.layout.footer")
