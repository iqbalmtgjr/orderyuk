<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="/dashboard" class="brand-logo">
            <img alt="Logo" src="{{ asset('admin/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item {{ request()->is('dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ url('/dashboard') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Stockholm-icons-/-Home-/-Home" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                    </rect>
                                    <path
                                        d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                        id="Combined-Shape" fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                {{-- Kelola User --}}
                <li class="menu-item {{ request()->is('kelola_user') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href={{ url('/kelola_user') }} class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            {{-- <img src="admin/media/svg/icons/Home/Library.svg" alt=""> --}}
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Kelola User</span>
                    </a>
                </li>
                {{-- Kelola Resto.Cafe --}}
                <li class="menu-item {{ request()->is('kelola_resto') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href={{ url('/kelola_resto') }} class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M15,3 L15.4502481,7.5024814 C15.4784917,7.78491722 15.7161555,8 16,8 C16.2838445,8 16.5215083,7.78491722 16.5497519,7.5024814 L17,3 L18,3 L18.4502481,7.5024814 C18.4784917,7.78491722 18.7161555,8 19,8 C19.2838445,8 19.5215083,7.78491722 19.5497519,7.5024814 L20,3 L21,3 L21,7.5 C21,9.43299662 19.4329966,11 17.5,11 C15.5670034,11 14,9.43299662 14,7.5 L14,3 L15,3 Z"
                                        fill="#000000" />
                                    <path
                                        d="M17.5,13 L17.5,13 C18.0610373,13 18.5243493,13.4382868 18.55547,13.9984604 L18.916795,20.5023095 C18.9602658,21.2847837 18.3611851,21.9543445 17.5787108,21.9978153 C17.5524991,21.9992715 17.5262521,22 17.5,22 L17.5,22 C16.7163192,22 16.0810203,21.3647011 16.0810203,20.5810203 C16.0810203,20.5547682 16.0817488,20.5285212 16.083205,20.5023095 L16.44453,13.9984604 C16.4756507,13.4382868 16.9389627,13 17.5,13 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M7.5,14 L7.5,14 C8.06209761,14 8.5273156,14.4370496 8.56237829,14.9980526 L8.90643257,20.5029211 C8.95497952,21.2796724 8.3646533,21.9487088 7.58790204,21.9972557 C7.55863704,21.9990848 7.52932209,22 7.5,22 L7.5,22 C6.72173313,22 6.09082317,21.36909 6.09082317,20.5908232 C6.09082317,20.5615011 6.09173837,20.5321861 6.09356743,20.5029211 L6.43762171,14.9980526 C6.4726844,14.4370496 6.93790239,14 7.5,14 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M7.5,12 C5.56700338,12 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,3 7.5,3 C9.43299662,3 11,5.56700338 11,7.5 C11,9.43299662 9.43299662,12 7.5,12 Z M7.5095372,4.60103244 L7.56069005,9.94758244 C8.61891495,9.8578583 9.45855912,8.97981222 9.47749614,7.8949109 C9.49728809,6.76103086 8.63275447,4.70470991 7.5095372,4.60103244 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            {{-- <img src="admin/media/svg/icons/Home/Library.svg" alt=""> --}}
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Kelola Resto/Cafe</span>
                    </a>
                </li>
                {{-- Kelola Dapur/Kasir --}}
                <li class="menu-item {{ request()->is('kelola_user_dapur_kasir') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href={{ url('/kelola_user_dapur_kasir') }} class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" opacity="0.3" x="5" y="20"
                                        width="14" height="2" rx="1" />
                                    <path
                                        d="M5,12.8739825 C3.27477279,12.4299397 2,10.8638394 2,9 C2,6.790861 3.790861,5 6,5 C6.11332888,5 6.22555698,5.00471299 6.33649899,5.01395368 C7.15621908,2.67628292 9.38235111,1 12,1 C14.6176489,1 16.8437809,2.67628292 17.663501,5.01395368 C17.774443,5.00471299 17.8866711,5 18,5 C20.209139,5 22,6.790861 22,9 C22,10.8638394 20.7252272,12.4299397 19,12.8739825 L19,17 C19,17.5522847 18.5522847,18 18,18 L6,18 C5.44771525,18 5,17.5522847 5,17 L5,12.8739825 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            {{-- <img src="admin/media/svg/icons/Home/Library.svg" alt=""> --}}
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Kelola User Dapur/Kasir</span>
                    </a>
                </li>
                {{-- Kelola_Menu --}}
                <li class="menu-item {{ request()->is('kelola_menu') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href={{ url('/kelola_menu') }} class="menu-link active">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M7,17 C9.28100068,17 11,15.9686004 11,15 C11,14.0313996 9.28100068,13 7,13 C4.71899932,13 3,14.0313996 3,15 C3,15.9686004 4.71899932,17 7,17 Z M11.5,21.3092376 C10.6896396,22.3100893 8.97910086,23 7,23 C4.23857625,23 2,21.6568542 2,20 C2,17.2642141 2,15.5975474 2,15 C2,13.3431458 4.23857625,12 7,12 C8.97910086,12 10.6896396,12.6899107 11.5,13.6907624 C12.3103604,12.6899107 14.0208991,12 16,12 C18.7614237,12 21,13.3431458 21,15 C21,15.3356863 21,17.0023529 21,20 C21,21.6568542 18.7614237,23 16,23 C14.0208991,23 12.3103604,22.3100893 11.5,21.3092376 Z M16,17 C18.2810007,17 20,15.9686004 20,15 C20,14.0313996 18.2810007,13 16,13 C13.7189993,13 12,14.0313996 12,15 C12,15.9686004 13.7189993,17 16,17 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M19.6608485,2.02106698 C19.8359854,2.52970126 19.5656323,3.08400728 19.056998,3.25914411 C19.0489211,3.2619252 19.040808,3.26459992 19.0326607,3.26716758 L2.33565766,8.52933019 C2.07027996,8.61296559 1.78658327,8.46994761 1.6959956,8.20686191 C1.60540793,7.94377622 1.74091331,7.65641538 2.00152489,7.55893815 L18.3986537,1.42587734 C18.9025046,1.23742064 19.4637309,1.49309823 19.6521876,1.99694922 C19.6551802,2.00495015 19.6580674,2.01299009 19.6608485,2.02106698 Z M20.9715106,6.55164469 C21.0649233,7.08141428 20.7111861,7.58660332 20.1814165,7.68001599 C20.173004,7.68149934 20.1645723,7.68287196 20.1561237,7.68413349 L2.84150489,10.2695234 C2.56631096,10.3106149 2.30848,10.1249778 2.26016328,9.85096006 C2.21184657,9.57694235 2.39063678,9.31431712 2.6632886,9.25880863 L19.8179636,5.76633204 C20.3450925,5.65901521 20.8594123,5.99934012 20.9667291,6.52646899 C20.9684333,6.53483956 20.9700272,6.54323218 20.9715106,6.55164469 Z M16,16 C15.1715729,16 14.5,15.5522847 14.5,15 C14.5,14.4477153 15.1715729,14 16,14 C16.8284271,14 17.5,14.4477153 17.5,15 C17.5,15.5522847 16.8284271,16 16,16 Z M7,16 C6.17157288,16 5.5,15.5522847 5.5,15 C5.5,14.4477153 6.17157288,14 7,14 C7.82842712,14 8.5,14.4477153 8.5,15 C8.5,15.5522847 7.82842712,16 7,16 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            {{-- <img src="admin/media/svg/icons/Home/Library.svg" alt=""> --}}
                            <!--end::Svg Icon-->
                        </span>

                        <span class="menu-text">Kelola Menu</span>
                    </a>
                </li>
                {{-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Subheaders</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Subheaders</span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/toolbar.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Toolbar Nav</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/actions.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Actions Buttons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/tabbed.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tabbed Nav</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/classic.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Classic</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/none.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">None</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->
