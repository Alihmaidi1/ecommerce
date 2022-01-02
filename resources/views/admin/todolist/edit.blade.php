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
<form method="POST" action="{{ route("change_todolist") }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $todolist1->id }}"/>
    <div class="w-50 m-auto">
        <label>Content</label>
        <textarea class="form-control @error('content')is-invalid @enderror" style="resize: none" name="content" placeholder="Enter Content">{{ $todolist1->content }}</textarea>
        @error('content')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
    
    <div class="w-50 m-auto">
        <label>Task End at</label>
        <input value="{{ $todolist1->end_at }}" class="form-control @error('end_at')is-invalid @enderror"  type="datetime-local" name="end_at" />
        @error('end_at')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>




    <br/>
    <div  class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create Task</button></div>
</form>
  </div>

  @include("admin.layout.footer")
