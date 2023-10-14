<nav class="navbar navbar-expand-lg main-navbar">
    <div class="mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <!-- <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> -->
                <div class="d-sm-none d-lg-inline-block">Hi | {{ Auth::user()->name }}</div>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="dropdown-menu dropdown-menu-right">
                    <a :href="route('logout')" style="cursor: pointer;" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </form>
        </li>
    </ul>
</nav>