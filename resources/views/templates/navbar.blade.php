<nav class="navbar navbar-light navbar-expand-md">
<div class="container"><a href="{{ url('/home') }}" class="navbar-brand"><i class="icon ion-android-car"></i> Car Rental</a>
    <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav ml-auto">
            <li role="presentation" class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Home </a></li>
                <div class="top-right links">
                    @if (Auth::check())
                    <li class="dropdown">
                      <a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle">{{ Auth::user()->name }}</a>
                        <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a>
                        <a role="presentation" href="{{ url('/logout') }}" class="dropdown-item">logout</a>
                        </div>
                    </li>
                    @else
                    <li class="dropdown">
                      <a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle">Have an account? </a>
                        <div role="menu" class="dropdown-menu">
                        <a role="presentation" data-toggle="modal" data-target="#LoginModal" class="dropdown-item">Login</a>
                        <a role="presentation" data-toggle="modal" data-target="#RegisterModal" class="dropdown-item">Register</a>
                        </div>
                    </li>
                    @endif
                </div>
        </ul>
    </div>
</div>
</nav>
