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
        <div class="all_product" >
        @foreach($product12 as $product)
        <div class="card "> 
            <div class="head-card">
              <span class="rate"><i class="far fa-star" aria-hidden="true"></i> 4.5/5 (50)</span>
              <span class="like"><i class="far fa-heart"></i></span>
              </div>
              
              <div class="img-mask">
                  <img src="{{ asset("img/upload/product/".$product->photo) }}" alt="">
            </div>
              
              <div class="card-content">
                <h2 class="title text-center text-bold w-100">{{ $product->title }}</h2>
                <div class="bg-light w-100 " style="height: 80px; overflow: auto;">{{ $product->content }} </div>
                <hr/>

                <span class="price" style="font-weight:900"> price<b>$</b> {{ $product->price }}</span>
                <span class="price" style="font-weight:900"> {{ $product->status }}</span>
                <span class="price" style="font-weight:900">Weight:  {{ $product->weight }}</span>
              </div>
            </div>
        @endforeach
    </div>
          

    </div>
  








  </div>







  @include("admin.layout.footer")
