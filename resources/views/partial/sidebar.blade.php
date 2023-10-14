@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'IndependenM' || Auth::user()->role == 'IndependenS' || Auth::user()->role == 'IndependenN')
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">TECHCOMFEST</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TCF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ Request::segment(1) === 'dashboard' ? 'active' : "" }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/assets/file/2024 GENERAL RULEBOOK TECHCOMFEST.pdf" class="btn btn-primary btn-lg btn-block btn-icon-split" download>
                <i class="fas fa-rocket"></i>Panduan Umum
            </a>
        </div>
    </aside>
</div>
@else
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">TECHCOMFEST</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TCF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ Request::segment(1) === 'dashboard' ? 'active' : "" }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                </ul>
            </li>
            <li class="menu-header">Menu</li>
            <li class="dropdown {{ Request::segment(1) === 'Teams' ? 'active' : "" }}">
                <a href="{{ route('TeamsIndex') }}" class="nav-link"><i class="bi bi-people"></i> <span>Tim</span></a>
            </li>
            <li class="dropdown {{ Request::segment(1) === 'DataDiris' ? 'active' : "" }}">
                <a href="{{ route('DataDiriIndex') }}" class="nav-link"><i class="bi bi-file-earmark-person"></i> <span>Verifikasi Data</span></a>
            </li>

            <li class="dropdown {{ Request::segment(1) === 'SSoftware' || Request::segment(1) === 'SMulmed' || Request::segment(1) === 'network' ? 'active' : "" }}"> 
                <a href="" class="nav-link has-dropdown"><i class="bi bi-file-earmark"></i> <span>Pengumpulan</span></a>
                <ul class="dropdown-menu">
                    @if(Auth::user()->kategori == 'Software')
                    <li class="dropdown {{ Request::segment(1) === 'SSoftware' ? 'active' : "" }}">
                        <a class="nav-link" href="{{ Route('SSoftware')}}">Software</a>
                    </li>

                    @elseif(Auth::user()->kategori == 'Multimedia')
                    <li class="dropdown {{ Request::segment(1) === 'SMulmed' ? 'active' : "" }}">
                        <a class="nav-link" href="{{ Route('SMulmed')}}">Multimedia</a>
                    </li>

                    @elseif(Auth::user()->kategori == 'Network')
                    <li class="dropdown {{ Request::segment(1) === 'network' ? 'active' : "" }}">
                        <a class="nav-link" href="{{ route('SNetwork') }}">Network</a>
                    </li>

                    @else
                    <li>
                        <a class="nav-link" href="#">Unavailable</a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/assets/file/GENERAL_RULEBOOK_TECHCOMFEST_2023.pdf" class="btn btn-primary btn-lg btn-block btn-icon-split" download>
                <i class="fas fa-rocket"></i>Panduan Umum
            </a>
        </div>
    </aside>
</div>
@endif