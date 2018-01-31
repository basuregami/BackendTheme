   <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                  {{ Auth::user()->name }}<span class="caret"></span> 
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                         <a href=" {{route('users.update.password') }}" title="Edit" class="passwordUpdate" btn-value="'.$user->id.'">Change Password </a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.profile')}}" title="profile" class="profileUpdate">Profile</a>
                                    </li>
                                </ul>
                            </li>
                       
                    </ul>
                </div>
            </div>
        </nav>


<!-- <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        @include('backend.includes.partials.search')
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <div class="dropdown-messages-box">
                        <a href="profile.html" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a7.jpg">
                        </a>
                        <div class="media-body">
                            <small class="pull-right">46h ago</small>
                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="mailbox.html">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="profile.html">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>

            </ul>
        </li>


        <li>
            <a href="login.html">
                <i class="fa fa-sign-out"></i> Log out
            </a>
        </li>
        <li>
            <a class="right-sidebar-toggle">
                <i class="fa fa-tasks"></i>
            </a>
        </li>
    </ul>

</nav> -->