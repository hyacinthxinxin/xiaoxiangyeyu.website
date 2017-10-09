<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            @can('system')
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>系统管理</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/permissions"><i class="fa fa-circle-o"></i> 权限管理</a></li>
                        <li><a href="/admin/users"><i class="fa fa-circle-o"></i> 用户管理</a></li>
                        <li><a href="/admin/roles"><i class="fa fa-circle-o"></i> 角色管理</a></li>
                        <li><a href="/admin/dingdongs"><i class="fa fa-circle-o"></i> 项目管理</a></li>
                    </ul>
                </li>
            @endcan
            @can('dingdong')
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>叮咚配置管理</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/rooms"><i class="fa fa-circle-o text-red"></i> <span>房间管理</span></a></li>
                        <li><a href="/admin/devices"><i class="fa fa-circle-o text-yellow"></i> <span>设备管理</span></a>
                        </li>
                        <li><a href="/admin/commands"><i class="fa fa-circle-o text-aqua"></i> <span>指令管理</span></a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('project')
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>项目配置</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @if(\Illuminate\Support\Facades\Auth::user()->dingdong != null)
                            <li><a href="/admin/dingdongs/{{\Illuminate\Support\Facades\Auth::user()->dingdong->id}}"><i
                                            class="fa fa-circle-o"></i> 项目配置</a></li>
                            <li>
                                <a href="/admin/dingdongs/{{\Illuminate\Support\Facades\Auth::user()->dingdong->id}}/controls"><i
                                            class="fa fa-circle-o"></i> 设备管理</a></li>
                            <li>
                                <a href="/admin/dingdongs/{{\Illuminate\Support\Facades\Auth::user()->dingdong->id}}/controls/create"><i
                                            class="fa fa-circle-o"></i> 添加设备</a></li>
                        @endif
                    </ul>
                </li>
            @endcan
        </ul>
    </section>
</aside>
