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
<form method="POST" action="{{ route("save_user") }}">
    @csrf
    <div class="w-50 m-auto">
        <label>Name</label>
        <input value="{{ old("name") }}" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Enter Name"/>
        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    <div class="w-50 m-auto">
        <label>Email</label>
        <input type="email" value="{{ old("email") }}" class="form-control @error('email')is-invalid @enderror" name="email" placeholder=" Enter Email"/>
        @error('email')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
        <div class="w-50 m-auto">
        <label>Level</label>
        <input  value="{{ old("level") }}" class="form-control @error('level')is-invalid @enderror" name="level" placeholder=" Enter Level"/>
        @error('level')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
 
    </div>
   
    <div class="w-50 m-auto">
        <label>Password</label>
        <input value="{{ old("password") }}" type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Enter Password"/>
        @error('password')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror    
     
    </div>
    <div class="w-50 m-auto">
        <label>Confirm Password</label>
        <input type="password" value="{{ old("confirm_password") }}" class="form-control @error('confirm_password')is-invalid @enderror" name="confirm_password" placeholder="Conform Password"/>
        @error('confirm_password')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
 
    </div>
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create User</button></div>
</form>
  </div>

  @include("admin.layout.footer")
