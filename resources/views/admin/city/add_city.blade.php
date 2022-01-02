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
<form method="POST" action="{{ route("save_city") }}">
    @csrf
    <div class="w-50 m-auto">
        <label>Name</label>
        <input id="address" readonly class="form-control" name="name" placeholder="Enter Name"/>
    </div>
    <br/>
    <div id='map' style='width: 400px; margin:auto; height: 300px;'></div>
    
    <br/>
    <div class="w-50 m-auto">

        <select class="form-control" name="country">
            @foreach(\App\Models\country::get() as $country)

            <option selected value="{{ $country->id }}"> {{ $country->name }}</option>
            @endforeach

        </select>


    </div>
    
    <br/>
    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create City</button></div>
</form>
  </div>

  @include("admin.layout.footer")
