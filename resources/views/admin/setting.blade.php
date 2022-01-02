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
    <div class="container">
        <br/>
        @if(session()->has("success"))
    <div class="alert alert-success d-flex justify-content-center">{{ session()->get("success") }}</div>
        @endif
        @if(session()->has("error"))
    <div class="alert alert-danger d-flex justify-content-center">{{ session()->get("error") }}</div>
        @endif
        <br/>
        <form method="POST" action="{{ route("add_setting") }}" enctype="multipart/form-data">
        
            @csrf
            <div class="w-50 m-auto">
               <div class="d-none"> {!! $admin11=\App\Models\setting::find(1) !!}</div>
            <label>Name in English</label>
            <input value="{{ $admin11->name_eng }}" type="text" class="form-control @error('name_eng')is-invalid @enderror" name="name_eng" placeholder="Name in English"/>
            @error('name_eng')
            <span class="invalid-feedback " role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
        </div>
        <div class="w-50 m-auto">
            <label>Name in Arabic</label>
            <input value="{{ $admin11->name_ar }}" type="text" class="form-control @error('name_ar')is-invalid @enderror" name="name_ar" placeholder="name in Arabic"/>
            @error('name_ar')
            <span class="invalid-feedback " role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
        </div>  


        <div class="w-50 m-auto">
            <label>Email</label>
            <input value="{{ $admin11->email }}" type="text" class="form-control @error('Email')is-invalid @enderror" name="Email" placeholder="Email"/>
            @error('Email')
            <span class="invalid-feedback " role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
        </div>  


        
        
        <div class="w-50 m-auto">
            <label>Logo</label>
        <br/>
            <input type="File" class="form-control @error('logo')is-invalid @enderror" name="logo" placeholder="logo"/>
            @error('logo')
            <span class="invalid-feedback " role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
        </div>      
        <br/>
        <div class="w-50 m-auto">
            <div><label>description</label></div>
        <textarea cols="50" class="form-control @error('description')is-invalid @enderror" rows="5" name="description" style="resize: none"> {{ $admin11->description }}</textarea>
        @error('description')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>

        <br/>
        <div class="w-50 m-auto">
            <div><label>keywords</label></div>
        <textarea cols="50" rows="5" class="form-control @error('keyword')is-invalid @enderror" name="keyword" style="resize: none">{{ $admin11->keywords }}</textarea>
        @error('keyword')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
        <div class="w-50 m-auto">
            <br/>
        <select  name="status" class="form-control @error('status')is-invalid @enderror">

            <option value="open" @if($admin11->status=="open")selected @endif>open</option>
            <option value="close" @if($admin11->status=="close")selected @endif>close</option>
        </select>
        @error('status')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


        </div>

        
        <br/>
        <div class="w-50 m-auto">
            <div><label>messages </label></div>
        <textarea cols="50" rows="5" class="form-control @error('message')is-invalid @enderror" name="message" style="resize: none">{{ $admin11->message }}</textarea>
        @error('message')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    </div>
        <div class="w-50 m-auto">

        <button class="btn btn-primary">Save</button>
        </div>
    </div>
  








  </div>







  @include("admin.layout.footer")
