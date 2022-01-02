@include('style.layout.header')
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

    @include("style.layout.navbar")        

        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="{{ route('show_style_user') }}">Home</a></li>
                                    <li class="is-marked">

                                        <a href="{{ route("show_style_user") }}">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">

                                    <!--====== Dashboard Features ======-->
                                    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                        
                                    </div>
                                    <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                        <div class="dash__pad-1">
                                            <ul class="dash__w-list">
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                                        <span class="dash__w-text">{{ count(\App\Models\order::where('status','cancel')->get()) }}</span>

                                                        <span class="dash__w-name">Orders Cancel</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                                        <span class="dash__w-text">{{ count(\App\Models\order::where("status","success")->get()) }}</span>

                                                        <span class="dash__w-name">Cancel Orders</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Wishlist</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Dashboard Features ======-->
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>

                                            <span class="dash__text u-s-m-b-30">Here you can see all products that have been delivered.</span>
                                            <div class="m-order__list">

                                                  


                                                    @foreach($order1=\App\Models\order::paginate(3) as $order)
                                                    <div class="m-order__get">

                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Order #{{ $order->id }}</div>
                                                                    <div class="manage-o__text u-c-silver">Placed on 26 Oct 2016 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                    <div class="dash__link dash__link--brand">
    
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        


                                                    <div class="manage-o__description" >
                                                        
                                                        <div class="description__container">
                                                            
                                                            
                                                            <div class="description__img-wrap">

                                                                <img style="width:90px;height:90px" src="{{ asset("img/upload/product/".$order->product->photo) }}" alt=""></div>
                                                            <div class="description-title">{{ $order->product->title }}</div>
                                                        </div>
                                                        <div class="description__info-wrap">
                                                            <div>

                                                                @if($order->status=='processing')
                                                                <div style="width:auto" class="manage-o__badge badge--processing ">Processing  </div>
                                                                @endif

                                                                @if($order->status=='cancel')
                                                                <div style="width:auto;color:red;background:rgba(255, 209, 209, 0.726)" class="manage-o__badge badge--processing" >Cancel  </div>
                                                                @endif
                                                                
                                                                @if($order->status=='success')
                                                                <div class="manage-o__badge badge--processing " style="background:rgba(189, 230, 189, 0.692);color:green;width:auto ">Success  </div>
                                                                @endif

                                                            </div>
                                                            <div>

                                                                <span class="manage-o__text-2 u-c-silver">Quantity:

                                                                    <span class="manage-o__text-2 u-c-secondary">{{ $order->quantity }}</span></span></div>
                                                            <div>

                                                                <span class="manage-o__text-2 u-c-silver">Total:

                                                                    <span class="manage-o__text-2 u-c-secondary">${{ $order->total }}</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    @endforeach

                                                <div style="display: flex;justify-content:center">{{ $order1->links() }}</div>









                                                    
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
            </div>
            @section('js')
            <script src={{ asset("site/js1/map-init.js") }}></script> 
            
            <!--====== Vendor Js ======-->
            <script src="{{ asset("site/js1/vendor.js") }}"></script>
            
            <!--====== jQuery Shopnav plugin ======-->
            <script src="{{ asset("site/js1/jquery.shopnav.js") }}"></script>
            
            <!--====== App ======-->
            <script src="{{ asset('site/js1/app.js') }}"></script>
            
            @endsection
            @include('style.layout.footer')
