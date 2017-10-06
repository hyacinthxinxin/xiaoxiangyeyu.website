<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            @can('dingdong')
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>区域管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/dingdongs/{{ $dingdong->id }}/rooms"><i class="fa fa-circle-o"></i> 房间管理</a></li>
                        <li><a href="/admin/dingdongs/{{ $dingdong->id }}"><i class="fa fa-circle-o"></i> 设备管理 </a></li>
                        <li><a href="/admin/roles"><i class="fa fa-circle-o"></i> 全局场景</a></li>
                    </ul>
                </li>
            @endcan
        </ul>
    </section>
</aside>
