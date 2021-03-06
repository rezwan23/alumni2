<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('/uploads/'.auth()->user()->photo)}}" style="height: 48px;width: 48px;" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{auth()->user()->name}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('home')}}" target="_blank"><i class="app-menu__icon fa fa-anchor"></i><span class="app-menu__label">Visit Site</span></a></li>
        <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        {{--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
            {{--<ul class="treeview-menu">--}}
                {{--<li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>--}}
                {{--<li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>--}}
                {{--<li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>--}}
                {{--<li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>--}}
        {{--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
            {{--<ul class="treeview-menu">--}}
                {{--<li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>--}}
                {{--<li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>--}}
                {{--<li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>--}}
                {{--<li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
            {{--<ul class="treeview-menu">--}}
                {{--<li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>--}}
                {{--<li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
            {{--<ul class="treeview-menu">--}}
                {{--<li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>--}}
                {{--<li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>--}}
                {{--<li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>--}}
                {{--<li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>--}}
                {{--<li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>--}}
                {{--<li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>--}}
                {{--<li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>--}}
                {{--<li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li><a class="app-menu__item" href="{{route('member.index')}}" target="_blank"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Member Request</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('page.index')}}"><i class="icon fa fa-circle-o"></i> All Pages</a></li>
                <li><a class="treeview-item" href="{{route('page.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('gallery.index')}}"><i class="icon fa fa-circle-o"></i> All Gallery</a></li>
                <li><a class="treeview-item" href="{{route('gallery.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Galllery Images</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('image.index')}}"><i class="icon fa fa-circle-o"></i> All Images</a></li>
                <li><a class="treeview-item" href="{{route('image.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">Sliders</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('slider.index')}}"><i class="icon fa fa-circle-o"></i> All Sliders</a></li>
                <li><a class="treeview-item" href="{{route('slider.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">Partners</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('partner.index')}}"><i class="icon fa fa-circle-o"></i> All Partners</a></li>
                <li><a class="treeview-item" href="{{route('partner.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Events</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('event.index')}}"><i class="icon fa fa-circle-o"></i> All Events</a></li>
                <li><a class="treeview-item" href="{{route('event.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar-times-o"></i><span class="app-menu__label">News</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('news.index')}}"><i class="icon fa fa-circle-o"></i> All News</a></li>
                <li><a class="treeview-item" href="{{route('news.create')}}"><i class="icon fa fa-circle-o"></i> Add New</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('info')}}"><i class="icon fa fa-circle-o"></i> Basic info</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">SMS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('sms.new')}}"><i class="icon fa fa-circle-o"></i> New Sms</a></li>
                <li><a class="treeview-item" href="{{route('sms.group')}}"><i class="icon fa fa-circle-o"></i> Group Sms</a></li>
                <li><a class="treeview-item" href="{{route('sms.group.create')}}"><i class="icon fa fa-circle-o"></i> Create Sms Group</a></li>
                {{--<li><a class="treeview-item" href="{{route('sms.config')}}"><i class="icon fa fa-circle-o"></i> Config</a></li>--}}
            </ul>
        </li>

    </ul>
</aside>