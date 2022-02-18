<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('svg/logo.png') }}" alt="" /></a>
            <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">

                    <li>

                        <a class="has-arrow" href="{{ route('admin.home') }}">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">Dashboard</span>
                        </a>
                    </li>
                    {{-- <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>

                        </ul> --}}


                  


                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span
                                    class="educate-icon educate-data-table icon-wrap"></span> <span
                                    class="mini-click-non">Categories</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Data Table" href="{{ route('category.create') }}"><span
                                            class="mini-sub-pro">Add</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Data Table" href="{{ route('category.index') }}"><span
                                            class="mini-sub-pro">All</span></a></li>
                            </ul>
                        </li>
                 

                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><span
                                class="educate-icon educate-data-table icon-wrap"></span> <span
                                class="mini-click-non">MemberShip</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Table" href="{{ route('member.create') }}"><span class="mini-sub-pro">Add
                                        Member</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Table" href="{{ route('member.index') }}"><span class="mini-sub-pro">All
                                        Memeber</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><span
                                class="educate-icon educate-data-table icon-wrap"></span> <span
                                class="mini-click-non">Add Subscription</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Table" href="{{ route('subscription.create') }}"><span
                                        class="mini-sub-pro">Add Subscription</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Table" href="{{ route('subscription.index') }}"><span
                                        class="mini-sub-pro">All Subscription</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><span
                                class="educate-icon educate-data-table icon-wrap"></span> <span
                                class="mini-click-non">Add Subscription <br> &ensp; &ensp; &ensp;User</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Table" href="{{ route('user_subscription.create') }}"><span
                                        class="mini-sub-pro">Add Subscription <br>user</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Table" href="{{ route('user_subscription.index') }}"><span
                                        class="mini-sub-pro">All Subscription user</span></a></li>
                        </ul>
                    </li>



                    
                        <!--<li>-->
                        <!--    <a class="has-arrow" href="" aria-expanded="false"><span-->
                        <!--            class="educate-icon educate-data-table icon-wrap"></span> <span-->
                        <!--            class="mini-click-non">Roles</span></a>-->
                        <!--    <ul class="submenu-angle" aria-expanded="false">-->
                        <!--        <li><a title="Data Table" href="{{ route('role.create') }}"><span-->
                        <!--                    class="mini-sub-pro">Add Role</span></a></li>-->
                        <!--    </ul>-->
                        <!--    <ul class="submenu-angle" aria-expanded="false">-->
                        <!--        <li><a title="Data Table" href="{{ route('role.index') }}"><span-->
                        <!--                    class="mini-sub-pro">All Roles</span></a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                  
                        <!--<li>-->
                        <!--    <a class="has-arrow" href="{{ route('permissions') }}" aria-expanded="false"><span-->
                        <!--            class="educate-icon educate-data-table icon-wrap"></span> <span-->
                        <!--            class="mini-click-non">Manage Permissions</span></a>-->

                        <!--</li>-->
                   
                        <!--<li>-->
                        <!--    <a class="has-arrow" href="" aria-expanded="false"><span-->
                        <!--            class="educate-icon educate-data-table icon-wrap"></span> <span-->
                        <!--            class="mini-click-non">Admin</span></a>-->
                        <!--    <ul class="submenu-angle" aria-expanded="false">-->
                        <!--        <li><a title="Data Table" href="{{ route('administrative.user.create') }}"><span-->
                        <!--                    class="mini-sub-pro">Add User</span></a></li>-->
                        <!--    </ul>-->
                        <!--    <ul class="submenu-angle" aria-expanded="false">-->
                        <!--        <li><a title="Data Table" href="{{ route('administrative.users') }}"><span-->
                        <!--                    class="mini-sub-pro">All Users</span></a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                    

                    
                        <li>
                            <a class="has-arrow" href="{{route('post.index')}}" aria-expanded="false"><span
                                    class="educate-icon educate-data-table icon-wrap"></span> <span
                                    class="mini-click-non">Post</span></a>

                        </li>
                   


                    {{-- <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                        <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                            <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>

                        </ul>
                    </li>

                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>

                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </nav>
</div>
