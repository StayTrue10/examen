<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <i class="fa fa-sign-out"></i>
                    <button class="btn btn-link">Cerrar sesión</button>
                </form>
            </li>
        </ul>
    </nav>
</div>
