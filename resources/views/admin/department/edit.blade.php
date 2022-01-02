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
<form method="POST" action="{{ route("change_department") }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $department->id }}"/>
    <div class="w-50 m-auto">
        <label>Name</label>
        <input class="form-control @error('name')is-invalid @enderror" name="name" value="{{ $department->name }}" placeholder="Enter Name"/>

        @error('name')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    <div class="w-50 m-auto">
        <label>description</label>
        <input  class="form-control @error('description')is-invalid @enderror" value="{{ $department->description }}" name="description" placeholder=" Enter Email"/>
        @error('description')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    
    <div class="w-50 m-auto">
        <label>keyword</label>
        <input  class="form-control @error('keyword')is-invalid @enderror" value="{{ $department->keyword }}" name="keyword" placeholder="keyword"/>
        @error('keyword')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>


    
    <div class="w-50 m-auto">
        <label>parent</label>
        <br/>
        <select class="form-control " name="parent">
            @foreach(\App\Models\category::get() as $department1)
            <option value="{{ $department1->id }}">{{ $department1->name }}</option>
                
            @endforeach

        </select>
    
    </div>

    <div class="w-50 m-auto">
        <label>icon</label>
        <input  type="file" class="form-control @error('icon')is-invalid @enderror" value="{{ $department->icon }}" name="icon" placeholder="icon"/>
    </div>
    @error('icon')
    <span class="invalid-feedback " role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Edit department</button></div>
</form>
  </div>

  @include("admin.layout.footer")
