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
<form method="POST" action="{{ route("change_color") }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $color->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $color->name }}" placeholder="Enter Name"/>
        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    <div class="w-50 m-auto">
        <label>color</label>
        <input  type="color" class="form-control @error('color')is-invalid @enderror" value="{{ $color->color }}" name="color" placeholder=" Enter color"/>
        @error('color')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    
        <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit color</button></div>
</form>
  </div>

  @include("admin.layout.footer")
