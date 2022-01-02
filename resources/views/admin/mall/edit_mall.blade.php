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
<form method="POST" action="{{ route("change_mall") }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $mall->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $mall->name }}" placeholder="Enter Name"/>
        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
    
    <div class="w-50 m-auto">
      <label>person</label>
      <input class="form-control @error('person')is-invalid @enderror" value="{{ $mall->person }}" name="person" placeholder="Enter person Name"/>
      @error('person')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror

  </div>
  
  <div class="w-50 m-auto">
      <label>email</label>
      <input type="email" class="form-control @error('email')is-invalid @enderror" value="{{ $mall->email }}" name="email" placeholder="Enter email"/>
      @error('email')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror

  </div>
  
  <div class="w-50 m-auto">
      <label>mobile</label>
      <input  class="form-control @error('mobile')is-invalid @enderror" name="mobile" value="{{ $mall->mobile }}" placeholder="Enter mobile"/>
      @error('mobile')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror

  </div>
  
  <div class="w-50 m-auto">
    <label>Address</label>
    <input  id="address" class="form-control @error('address')is-invalid @enderror" name="address" value="{{ $mall->address }}" placeholder="Enter address by map " readonly/>
    @error('address')
    <span class="invalid-feedback " role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

</div>
  
  <br/>

  <div id='map' style='width: 400px; margin:auto; height: 300px;'></div>

  
  <div class="w-50 m-auto">
      <label>icon</label>
      <input type="file" class="form-control @error('icon')is-invalid @enderror" name="icon" placeholder="Enter icon"/>
      @error('icon')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror

  </div>




    
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit mall</button></div>
</form>
  </div>

  @include("admin.layout.footer")
