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
<form method="POST" action="{{ route("save_department") }}" enctype="multipart/form-data">
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
        <label>description</label>
        <input value="{{ old("description") }}" class="form-control @error('description')is-invalid @enderror" name="description" placeholder=" Enter description"/>
        @error('description')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    <div class="w-50 m-auto">
        <label>keyword</label>
        <input  value="{{ old("keyword") }}" class="form-control @error('keyword')is-invalid @enderror" name="keyword" placeholder="Enter keyword"/>
        @error('keyword')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    

    <div class="w-50 m-auto">
        <label>icon</label>
        <br/>
        <input  type="file" class="@error('icon')is-invalid @enderror"  name="icon" placeholder="Enter icon"/>
        @error('icon')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    
    
    <br/>
    <div class="w-50 m-auto">
        <label>department</label>
        <select class="form-control @error('department')is-invalid @enderror" name="department">
            <option value="">nothing</option>
            @foreach(\App\Models\category::get() as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach

        </select>
        @error('department')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
    

    <br/>
    <br/>

    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create department</button></div>
</form>
  </div>

  @include("admin.layout.footer")
