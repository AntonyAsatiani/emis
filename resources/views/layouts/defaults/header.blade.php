<header id="main-header">
            <div class="container flex-container">
                <div class="left-main-header">
                    <ul>
                        <li><a class="home-link" href="{{url('/')}}">Home</a></li>
                    </ul>
                </div>
                <div class="right-main-header">
                    <form action="search.html" method="GET" class="search-form">
                        <input class="search-input" type="text" placeholder="Search" name="search">
                    </form>
                    <ul>
                        <li><a href="{{url('register')}}">Register</a></li>
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li class="dropdown-li" onClick="toggleUserDropdown();"><span class="user-image"><img  src="{{URL::asset('images/profile_default2.png') }}"></span><span>Username</span><i id="dropdown-icon" class="fa fa-caret-down"></i>
                            <ul id="user-dropdown-ul">
                                <li><a href="{{url('user/profile')}}">Profile</a></li>
                                <!-- <li><a href="">Gallery</a></li>
                                <li><a href="">Settings</a></li> -->
                                <li><a href="{{url('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a></li>
                            </ul>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>