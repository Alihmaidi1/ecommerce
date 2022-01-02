@include("style.layout.header")
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        @include('style.layout.navbar')

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

                                        <a href="index.html">Home</a></li>
                                    <li class="is-marked">

                                        <a href="dash-edit-profile.html">My Account</a></li>
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
                                
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>

                                            <span class="dash__text u-s-m-b-30">Looks like you haven't update your profile</span>
                                            <div class="dash__link dash__link--secondary u-s-m-b-30">

                                                <a data-modal="modal" data-modal-id="#dash-newsletter">Subscribe Newsletter</a></div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form class="dash-edit-p" method="POST" action="{{ route("save_user_edit_style") }}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $id }}"/>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="reg-fname">Name</label>

                                                                <input class="input-text input-text--primary-style" name="name" type="text" id="reg-fname" placeholder="Enter Name"></div>
                                                                <div class="u-s-m-b-30">

                                                                    <label class="gl-label" for="reg-lname">level</label>
        
                                                                    <input name="level" class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Enter Level"></div>
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="reg-lname">new  password</label>

                                                                <input name="password" class="input-text input-text--primary-style" type="password" id="reg-lname" placeholder="Enter Password"></div>
                                                        </div>
                                                    
                                                        </div>
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">Confirm new  password</label>

                                                            <input name="confirm_password" style="width:100%" class="input-text input-text--primary-style" type="password" id="reg-lname" placeholder="Enter Password"></div>
                                                    </div>

                                                        <button style="left: 30px;position:relative" class="btn" type="submit">SAVE</button>
                                                    </form>
                                                </div>
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

        <!--====== Main Footer ======-->
        
        <!--====== Modal Section ======-->


        <!--====== Unsubscribe or Subscribe Newsletter ======-->
        
        <!--====== Unsubscribe or Subscribe Newsletter ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->
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