<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">VestaCP Admin Multi</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Configurações</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="{{ URL::to('/') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ URL::to('users') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Usuários</a>
            </li>
            <li>
                <a href="{{ URL::to('resellers') }}"><i class="fa fa-fw fa-table"></i> Revendas</a>
            </li>
            <li>
                <a href="{{ URL::to('servers') }}"><i class="fa fa-fw fa-edit"></i> Servers</a>
            </li>
            <li>
                <a href="{{ URL::to('config') }}"><i class="fa fa-fw fa-desktop"></i> Configurações</a>
            </li>
            <li>
                <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Sair</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>