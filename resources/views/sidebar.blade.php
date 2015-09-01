        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                          <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                          </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">MENU PRINCIPAL</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="/"><i class="fa fa-home"></i><span>Início</span></a></li>
                    <li><a href="/estoque"><i class="fa fa-cart-arrow-down"></i><span>Estoque</span></a></li>
                    <li><a href="/missoes"><i class="fa fa-calendar"></i><span>Calendário de Missões</span></a></li>
                    <li>
                        <a href="#">
                            <i class="fa fa-wrench"></i>
                            <span>Missões</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/missoesexternas"><i class="fa fa-circle-o"></i><span>Missões Externas</span></a></li>
                            <li><a href="/missoesinternas"><i class="fa fa-circle-o"></i><span>Missões Internas</span></a></li>
                        </ul>
                    </li>
                    <li><a href="/corridaouro"><i class="fa fa-dollar"></i><span>Corrida do Ouro</span></a></li>
                    <li><a href="/dispensas"><i class="fa fa-bed"></i><span>Dispensas</span></a></li>
                    <li><a href="/ferias"><i class="fa fa-plane"></i><span>Férias</span></a></li>
                    <li><a href="/corridachurrasco"><i class="fa fa-beer"></i><span>Corrida do Churrasco</span></a></li>
                    <li><a href="/fundochurrasco"><i class="fa fa-money"></i><span>Fundo de Churrasco</span></a></li>

                    <li class="header">MINHA CONTA</li>
                    <li><a href="/alterardados"><i class="fa fa-user"></i><span>Alterar meus dados</span></a></li>
                    <li><a href="/alterarsenha"><i class="fa fa-lock"></i><span>Alterar minha senha</span></a></li>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
