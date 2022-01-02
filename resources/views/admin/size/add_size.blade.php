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
<form method="POST" action="{{ route("save_size") }}" enctype="multipart/form-data">
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
        <label>department</label>
      <br/>
      <select name="department_id" class="form-control @error('department_id')is-invalid @enderror">

        @foreach(\App\Models\category::get() as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
          
        @endforeach

      </select>
      @error('department_id')
      <span class="invalid-feedback " role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  

    </div>
    
    

    
    <br/>

    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create size</button></div>
</form>
  </div>

  @include("admin.layout.footer")
