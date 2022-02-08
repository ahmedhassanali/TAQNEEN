<!-- As a link -->

<div id="sidebar" class="active " >
    <div class="sidebar-wrapper active  position-absolute top-0 end-0 " >
        <div class="sidebar-header" >
            <div class="d-flex  justify-content-between">
                <div class="logo">
                    {{-- <a class=""  href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> --}}
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu ">
                <div class="logo d-flex justify-content-center align-items-center">
                    <a class=""  href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <hr>
                <li class="sidebar-title">@lang('site.Menu')</li>

                <li id="sidebar_dashboard" class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house ms-2"></i>
                        <span> @lang('site.dashboard') </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>@lang('site.Name'): <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>@lang('site.role_name'):</span>
                            <span class="badge bg-success">@lang('site.admin')</span>
                            @endif
                            @if (Auth::user()->role_name=='Super Admin')
                                <span>@lang('site.Name'): <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>@lang('site.role_name'):</span>
                                <span class="badge bg-primary">@lang('site.SuperAdmin')</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                                <span>@lang('site.Name'): <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>@lang('site.role_name'):</span>
                                <span class="badge bg-warning">@lang('site.UserNormal')</span>
                            @endif
                        </div>
                    </div>
                </li>

                {{-- <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock ms-2"></i>
                        <span>@lang('site.ChangePassword')</span>
                    </a>
                </li> --}}

                @if (Auth::user()->role_name=='Admin')
                    <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill ms-2"></i>
                            <span>Maintenain</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">@lang('site.UserControl')</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">@lang('site.UserActivityLog')</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">@lang('site.ActivityLog')</a>
                            </li>
                        </ul>
                    </li>
                @endif


{{--
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-lock-fill ms-2"></i>
                        <span>@lang('site.FormElements')</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">@lang('site.StaffInput')</a>
                        </li>
                    </ul>
                </li> --}}

                 {{--
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill ms-2"></i>
                        <span>@lang('site.ViewRecord')</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">@lang('site.ViewDetail')</a>
                        </li>
                    </ul>
                </li> --}}




                {{-- -----------------------Users-------------------- --}}
                <li id="sidebar_Users" class="sidebar-item">
                    <a href="{{ route('Users') }}" class='sidebar-link'>
                        <i class="bi bi-people ms-2" alt=""></i>
                        <span>@lang('site.Users')</span>
                    </a>
                </li>

                {{-- --------------------Permission------------------- --}}
                <li id="sidebar_Permission" class="sidebar-item">
                    <a href="{{ route('permission') }}" class='sidebar-link'>
                        <i class="bi bi-key ms-2"></i>
                        <span>@lang('site.Permission')</span>
                    </a>
                </li>

                {{-- --------------------reporting------------------- --}}
                <li id="sidebar_reporting" class="sidebar-item">
                    <a href="{{ route('reporting') }}" class='sidebar-link'>
                        <i class="bi bi-clipboard-plus ms-2"></i>
                        <span>@lang('site.reporting')</span>
                    </a>
                </li>

                {{-- --------------------Financial-------------------
                <li id="sidebar_Financial" class="sidebar-item">
                    <a href="{{ route('financial') }}" class='sidebar-link'>
                        <i class="bi bi-file-bar-graph ms-2"></i>
                        <span>@lang('site.Financial')</span>
                    </a>
                </li> --}}

                {{-- --------------------Email customizer------------------- --}}
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-envelope ms-2"></i>
                        <span>@lang('site.Emailcustomizer')</span>
                    </a>

                    <ul class="submenu">
                        <li id="sidebar_EmailCompose" class="sidebar-item">
                            <a href="{{ route('EmailCompose') }}" class='sidebar-link'>
                                <i class="bi bi-envelope ms-2"></i>
                                <span>@lang('site.compose')</span>
                            </a>
                        </li>
                        <li id="sidebar_EmailRead" class="sidebar-item">
                            <a href="{{ route('EmailRead') }}" class='sidebar-link'>
                                <i class="bi bi-envelope ms-2"></i>
                                <span>@lang('site.read')</span>
                            </a>
                        </li>
                        <li id="sidebar_Emailinbox" class="sidebar-item">
                            <a href="{{ route('Emailinbox') }}" class='sidebar-link'>
                                <i class="bi bi-envelope ms-2"></i>
                                <span>@lang('site.inbox')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- --------------------Services------------------- --}}
                <li id="sidebar_Services" class="sidebar-item">
                    <a href="{{ route('services') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right ms-2"></i>
                        <span>@lang('site.Services')</span>
                    </a>
                </li>

                {{-- --------------------Opportunities------------------- --}}
                <li id="sidebar_Opportunities" class="sidebar-item">
                    <a href="{{ route('opportunities') }}" class='sidebar-link'>
                        <i class="bi bi-bookmark-check ms-2"></i>
                        <span>@lang('site.Opportunities')</span>
                    </a>
                </li>


                {{-- --------------------Posts------------------- --}}
                <li id="sidebar_Posts" class="sidebar-item">
                    <a href="{{ route('posts') }}" class='sidebar-link'>
                        <i class="bi bi-chat-left-dots ms-2"></i>
                        <span>@lang('site.Posts')</span>
                    </a>
                </li>


                {{-- --------------------Chat------------------- --}}
                <li id="sidebar_chat" class="sidebar-item">
                    <a href="{{ route('chat') }}" class='sidebar-link'>
                        <i class="bi bi-chat ms-2"></i>
                        <span>@lang('site.Chat')</span>
                    </a>
                </li>


                {{-- --------------------support------------------- --}}
                <li id="sidebar_support"  class="sidebar-item">
                    <a href="{{ route('support') }}" class='sidebar-link'>
                        <i class="bi bi-gear ms-2"></i>
                        <span>@lang('site.support')</span>
                    </a>
                </li>








                {{-- --------------------LogOut------------------- --}}
                <li id="sidebar_LogOut" class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right ms-2"></i>
                        <span>@lang('site.LogOut')</span>
                    </a>
                </li>


            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
