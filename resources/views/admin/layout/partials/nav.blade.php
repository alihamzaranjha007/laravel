<div class="sidebar" data-color="purple" data-image="{{asset('assets/admin/img/sidebar-5.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Website
                </a>
            </div>

            <ul class="nav">
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{('/dashboard')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ Request::is('user') ? 'active' : '' }}">
                    <a href="{{url('dashboard/user')}}">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/table')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li class="{{ Request::is('typography') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/typography')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li class="{{ Request::is('icons') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/icons')}}">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li class="{{ Request::is('maps') ? 'active' : '' }}">
                    <a href="{{('/dashboard/maps')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li class="{{ Request::is('notifications') ? 'active' : '' }}">
                    <a href="{{('dashboard/notifications')}}">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>