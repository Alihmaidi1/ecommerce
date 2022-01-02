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
<form method="POST" action="{{ route("change_admin") }}">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input class="form-control @error('name')is-invalid @enderror"  name="name" value="{{ $user->name }}" placeholder="Enter Name"/>

    </div>
    @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <div class="w-50 m-auto">
        <label>Email</label>
        <input type="email" class="form-control @error('email')is-invalid @enderror" value="{{ $user->email }}" name="email" placeholder=" Enter Email"/>

    </div>
    @error('email')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="w-50 m-auto">
        <label>Password</label>
        <input type="password" class="form-control @error('password')is-invalid @enderror" value="" name="password" placeholder="Enter Password"/>

    </div>
    @error('password')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <div class="w-50 m-auto">
        <label>Confirm Password</label>
        <input type="password" class="form-control @error('confirm_password')is-invalid @enderror" name="confirm_password" placeholder="Conform Password"/>

    </div>
    @error('confirm_password')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit Admin</button></div>
</form>
  </div>

  @include("admin.layout.footer")
