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
<form method="POST" action="{{ route("change_factory") }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $factory->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $factory->name }}" placeholder="Enter Name"/>
        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        
    </div>
    
    <div class="w-50 m-auto">
      <label>person</label>
      <input class="form-control @error('person')is-invalid @enderror" value="{{ $factory->person }}" name="person" placeholder="Enter person Name"/>
      @error('person')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
      
  </div>
  
  <div class="w-50 m-auto">
      <label>Mobile</label>
      <input class="form-control @error('mobile')is-invalid @enderror" value="{{ $factory->mobile }}" name="mobile" placeholder="Enter Mobile"/>
      @error('mobile')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
      
  </div>
  <div class="w-50 m-auto">
      <label>Email</label>
      <input type="email" class="form-control @error('email')is-invalid @enderror" value="{{ $factory->email }}" name="email" placeholder="Enter email"/>
      @error('email')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
      
  </div>

  <div class="w-50 m-auto">
      <label>Facebook</label>
      <input type="url" class="form-control @error('facebook')is-invalid @enderror" name="facebook" value="{{ $factory->facebook }}" placeholder="Enter url facebook"/>
      @error('facebook')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
      
  </div>
  <div class="w-50 m-auto">
    <label>Address</label>
    <input id="address" readonly class="form-control @error('address')is-invalid @enderror" name="address" value="{{ $factory->address }}" placeholder="Enter address"/>
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
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit factory</button></div>
</form>
  </div>

  @include("admin.layout.footer")
