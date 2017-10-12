<section id="topSectionIntro"></section>
<div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mob-logo">
                    <div  class="row">
                        <div class="site-logo">
                            <a id='intro' href="index.html">BuzzMeABus</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-10 mob-menu">
                    <div class="row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                                <li><a href="{{URL::to('/')}}#parallax1">Book a Ride</a></li>
                                <li><a href="{{URL::to('/')}}#about">About</a></li>
                                <li><a href="{{URL::to('/')}}#service">How We Do</a></li> 
                                <li><a href="{{URL::to('/')}}#contact">Contact</a></li>
                                @if (!Auth::check())
                                <li><a href="{{URL::to('/register')}}">Register</a></li>
                                <li><a href="{{URL::to('/login')}}">Login</a></li>
                                  @else
                                <li class="dropdown nav-toggle">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="external" href="#">Profile</a></li>
                                        <li><a class="external" href="#">Edit</a></li>
                                    </ul>
                                </li>
                                @endif
                                
                                
                            </ul>
                        </div>
                        <!-- /.Navbar-collapse -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
</div> 