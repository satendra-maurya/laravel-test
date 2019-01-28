<ul class="sidebar-menu">
            <li class="treeview{{{ (Request::is('home') ? ' active' : '') }}}">
                <a href="{{ route('dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview{{{ (Request::is('blog') ? ' active' : '') }}}">
                <a href="{{ route('admin.blog') }}">
                    <i class="fa fa-newspaper-o"></i> <span>Blog</span>
                </a>
            </li>
            <li class="treeview{{{ (Request::is('setting') ? ' active' : '') }}}">
                <a href="{{ route('admin.setting')}}">
                    <i class="fa fa-gear"></i> <span>Settings</span>
                </a>
            </li>
</ul>
