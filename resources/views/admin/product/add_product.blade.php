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
<form method="POST" action="{{ route("save_product") }}" enctype="multipart/form-data">
    @csrf
    <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#product_info" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product info</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#product_setting" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product Setting</button>
          </li>

        <li class="nav-item" data-bs-toggle="toolyip" title="You Should Choose Department in Product info to enable this feild" role="presentation">
          <button  class="nav-link btn disabled" id="pills-size-tab" data-bs-toggle="pill" data-bs-target="#product_sizing" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Product Size</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link btn" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#product_additional" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Additional info</button>
        </li>
      </ul>
      


    
    <br/>
      <div  class="tab-content">
      @include('admin.product.tab.additional')
      @include('admin.product.tab.info')
      @include('admin.product.tab.setting')
      @include('admin.product.tab.sizing')
    </div>





    <div class="d-flex justify-content-center"><button class="btn btn-primary w-25  ">Create Product</button></div>
</form>
  </div>

  @include("admin.layout.footer")
