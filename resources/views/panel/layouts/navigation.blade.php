<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span>
                        </span>
                </div>
                <div class="logo-element">
                    A+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ route('main') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Hacer reservación</span></a>
            </li>
            {{-- <li class="{{ isActiveRoute('minor') }}">
                <a href="{{ route('minor') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
            </li> --}}
        </ul>

    </div>
</nav>
