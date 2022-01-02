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
<form method="POST" action="{{ route("change_country") }}">
    @csrf
    <input type="hidden" name="id" value="{{ $country->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input id="address" class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $country->name }}" placeholder="Enter Name"/>

        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <br/>
    <div id='map' style='width: 400px; margin:auto; height: 300px;'></div>
    
    
    <div class="w-50 m-auto">
        <label>Abbr</label>
        <input  class="form-control @error('abbr')is-invalid @enderror" value="{{ $country->abbr }}" name="abbr" placeholder=" Enter Abbr"/>
        @error('abbr')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    
    <div class="w-50 m-auto">
        <label>Mob</label>
        <input  class="form-control @error('mob')is-invalid @enderror" value="{{ $country->mob }}" name="mob" placeholder="Enter Mob"/>
        @error('abbr')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit Country</button></div>
</form>
  </div>

  @include("admin.layout.footer")
