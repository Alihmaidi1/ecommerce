<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li>
                        @if(empty(auth()->user()))
                        
                        <a href="{{ route("login_style") }}"><i class="fa fa-user"></i> My Account</a>
                    @else
                    <a href="{{ route("my_profile") }}"><i class="fa fa-user"></i> My Account</a>
                    @endif
                    </li>

                        <li>

                        @if(empty(auth()->user()))
                            <a href="{{ route("login_style") }}"><i class="fa fa-user"></i> Login</a>
                        
                        @else
                        <a href="{{ route("logout_style") }}"><i class="fa fa-user"></i> Logout</a>

                        @endif
                        
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                       
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
