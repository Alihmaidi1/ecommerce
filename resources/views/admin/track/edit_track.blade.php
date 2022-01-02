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
<form method="POST" action="{{ route("change_track") }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $track->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input  class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $track->name }}" placeholder="Enter Name"/>
        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    <div class="w-50 m-auto">
      <label>person</label>
      <input class="form-control @error('person')is-invalid @enderror" value="{{ $track->person }}" name="person" placeholder="Enter person Name"/>
      @error('person')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  
  </div>
  
  <div class="w-50 m-auto">
      <label>website</label>
      <input class="form-control @error('website')is-invalid @enderror" value="{{ $track->website }}" name="website" placeholder="Enter website"/>
      @error('website')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  
  </div>
  
  <div class="w-50 m-auto">
      <label>Facebook</label>
      <input type="url" class="form-control @error('facebook')is-invalid @enderror" name="facebook" value="{{ $track->facebook }}" placeholder="Enter url facebook"/>
      @error('facebook')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  
  </div>
  
  <div class="w-50 m-auto">
    <label>Address</label>
    <input  id="address" class="form-control @error('address')is-invalid @enderror" name="address" value="{{ $track->address }}" placeholder="Enter address by map " readonly/>
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
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit track</button></div>
</form>
  </div>

  @include("admin.layout.footer")
