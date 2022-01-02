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
<form method="POST" action="{{ route("save_country") }}">
    @csrf
    <div class="w-50 m-auto">
        <label>Name</label>
        <input value="{{ old("name") }}" id="address" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Enter Name"/>
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
        <input  value="{{ old("abbr") }}" class="form-control @error('abbr')is-invalid @enderror" name="abbr" placeholder=" Enter Abbr"/>

        @error('abbr')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    

    </div>
    
    <div class="w-50 m-auto">
        <label>mob</label>
        <input value="{{ old("mob") }}" type="number" class="form-control @error('name')is-invalid @enderror" name="mob" placeholder="Enter Mob"/>
        @error('mob')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create Country</button></div>
</form>
  </div>

  @include("admin.layout.footer")
