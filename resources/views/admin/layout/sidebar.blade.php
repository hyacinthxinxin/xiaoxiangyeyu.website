<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            @can('system')
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>系统管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/permissions"><i class="fa fa-circle-o"></i> 权限管理</a></li>
                        <li><a href="/admin/users"><i class="fa fa-circle-o"></i> 用户管理</a></li>
                        <li><a href="/admin/roles"><i class="fa fa-circle-o"></i> 角色管理</a></li>
                    </ul>
                </li>
            @endcan
            @can('room')
                <li class="active treeview">
                    <a href="/admin/rooms">
                        <i class="fa fa-dashboard"></i> <span>房间管理</span>
                    </a>
                </li>
            @endcan
            @can('device')
                <li class="active treeview">
                    <a href="/admin/devices">
                        <i class="fa fa-dashboard"></i> <span>设备管理</span>
                    </a>
                </li>
            @endcan
            @can('command')
                <li class="active treeview">
                    <a href="/admin/commands">
                        <i class="fa fa-dashboard"></i> <span>指令管理</span>
                    </a>
                </li>
            @endcan
            @can('dingdong')
                <li class="active treeview">
                    <a href="/admin/dingdongs">
                        <i class="fa fa-dashboard"></i> <span>叮咚配置管理</span>
                    </a>
                </li>
            @endcan
        </ul>
    </section>
</aside>
