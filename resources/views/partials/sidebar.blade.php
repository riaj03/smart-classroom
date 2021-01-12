@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    @if(Auth::getUser()->role_id == 3)
                        <span class="title">Main Page</span>
                    @else
                        <span class="title">@lang('quickadmin.qa_dashboard')</span>
                    @endif
                </a>
            </li>            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.teachers.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Teachers
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.students.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Students
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('user_access')
            <li class="{{ $request->segment(2) == 'batch' ? 'active' : '' }}">
                <a href="{{ route('admin.batches.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Batch</span>
                </a>
            </li>
            @endcan
            @can('user_access')
            <li class="{{ $request->segment(2) == 'course' ? 'active' : '' }}">
                <a href="{{ route('admin.courses.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Course</span>
                </a>
            </li>
            @endcan
            @can('user_access')
            <li class="{{ $request->segment(2) == 'course' ? 'active' : '' }}">
                <a href="{{ route('admin.courseteacher.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Course Teachers</span>
                </a>
            </li>
            @endcan
            @can('user_access')
            <li class="{{ $request->segment(2) == 'course' ? 'active' : '' }}">
                <a href="{{ route('admin.studentcourse.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Student Course</span>
                </a>
            </li>
            @endcan
            @can('course_view')
            <li class="{{ $request->segment(2) == 'students' ? 'active' : '' }}">
                @if(Auth::getUser()->role_id == 3)
                <a href="{{ route('admin.students.show', Auth::getUser()->id) }}">
                @elseif(Auth::getUser()->role_id == 2)
                <a href="{{ route('admin.teachers.show', Auth::getUser()->id) }}">
                @endif
                    <i class="fa fa-gears"></i>
                    <span class="title">My Courses</span>
                </a>
            </li>
            @endcan
            @can('profile_view')
            <li class="{{ $request->segment(2) == 'profile' ? 'active' : '' }}">
                <a href="{{ route('admin.users.show', Auth::getUser()->id) }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Profile</span>
                </a>
            </li>
            @endcan
            <li class="{{ $request->segment(2) == 'settings' ? 'active' : '' }}">
                    <a href="{{ route('admin.users.edit', Auth::getUser()->id) }}">
                        <i class="fa fa-gears"></i>
                        <span class="title">Settings</span>
                    </a>
            </li>
            <li class="{{ $request->segment(2) == 'help' ? 'active' : '' }}">
                    <a href="{{ url('admin/help') }}">
                        <i class="fa fa-gears"></i>
                        <span class="title">Help</span>
                    </a>
            </li>
            <li class="{{ $request->segment(2) == 'contact' ? 'active' : '' }}">
                    <a href="{{ url('admin/contact') }}">
                        <i class="fa fa-gears"></i>
                        <span class="title">Contact</span>
                    </a>
            </li>
            @can('folder_edit')
            <li class="{{ $request->segment(2) == 'folders' ? 'active' : '' }}">
                <a href="{{ route('admin.folders.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.folders.title')</span>
                </a>
            </li>
            @endcan
            
            @can('file_edit')
            <li class="{{ $request->segment(2) == 'files' ? 'active' : '' }}">
                <a href="{{ route('admin.files.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.files.title')</span>
                </a>
            </li>
            @endcan

        
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

