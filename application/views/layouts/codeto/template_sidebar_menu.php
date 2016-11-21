<!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class="nav-item start active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">List Tool</h3>
                            </li>
                            <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="icon-folder"></i>
                                            <span class="title">Multi Level Menu</span>
                                            <span class="arrow "></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="javascript:;" class="nav-link nav-toggle">
                                                    <i class="icon-settings"></i> Item 1
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="javascript:;" target="_blank" class="nav-link">
                                                            <i class="icon-user"></i> Arrow Toggle
                                                            <span class="arrow nav-toggle"></span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link">
                                                                    <i class="icon-star"></i> Sample Link 1</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i class="icon-camera"></i> Sample Link 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:;" target="_blank" class="nav-link">
                                                    <i class="icon-globe"></i> Arrow Toggle
                                                    <span class="arrow nav-toggle"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i class="icon-tag"></i> Sample Link 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i class="icon-graph"></i> Sample Link 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-bar-chart"></i> Item 3 </a>
                                            </li>
                                        </ul>
                                    </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Tables</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="table_static_basic.html" class="nav-link ">
                                            <span class="title">Basic Tables</span>
                                        </a>
                                    </li>

                                    
                                    <li class="nav-item  ">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <span class="title">Datatables</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item ">
                                                <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="?p=" class="nav-link nav-toggle">
                                    <i class="icon-wallet"></i>
                                    <span class="title">Portlets</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="portlet_boxed.html" class="nav-link ">
                                            <span class="title">Boxed Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_light.html" class="nav-link ">
                                            <span class="title">Light Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_solid.html" class="nav-link ">
                                            <span class="title">Solid Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_ajax.html" class="nav-link ">
                                            <span class="title">Ajax Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_draggable.html" class="nav-link ">
                                            <span class="title">Draggable Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Find Content</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Page Layouts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="layout_blank_page.html" class="nav-link ">
                                            <span class="title">Blank Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_ajax_page.html" class="nav-link ">
                                            <span class="title">Ajax Content Layout</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_offcanvas_mobile_menu.html" class="nav-link ">
                                            <span class="title">Off-canvas Mobile Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_classic_page_head.html" class="nav-link ">
                                            <span class="title">Classic Page Head</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_light_page_head.html" class="nav-link ">
                                            <span class="title">Light Page Head</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_content_grey.html" class="nav-link ">
                                            <span class="title">Grey Bg Content</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_search_on_header_1.html" class="nav-link ">
                                            <span class="title">Search Box On Header 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_search_on_header_2.html" class="nav-link ">
                                            <span class="title">Search Box On Header 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_language_bar.html" class="nav-link ">
                                            <span class="title">Header Language Bar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_footer_fixed.html" class="nav-link ">
                                            <span class="title">Fixed Footer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_boxed_page.html" class="nav-link ">
                                            <span class="title">Boxed Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-feed"></i>
                                    <span class="title">Sidebar Layouts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_menu_light.html" class="nav-link ">
                                            <span class="title">Light Sidebar Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_menu_hover.html" class="nav-link ">
                                            <span class="title">Hover Sidebar Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_search_1.html" class="nav-link ">
                                            <span class="title">Sidebar Search Option 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_search_2.html" class="nav-link ">
                                            <span class="title">Sidebar Search Option 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_toggler_on_sidebar.html" class="nav-link ">
                                            <span class="title">Sidebar Toggler On Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_reversed.html" class="nav-link ">
                                            <span class="title">Reversed Sidebar Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_fixed.html" class="nav-link ">
                                            <span class="title">Fixed Sidebar Layout</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_sidebar_closed.html" class="nav-link ">
                                            <span class="title">Closed Sidebar Layout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Pages</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">System</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="page_cookie_consent_1.html" class="nav-link ">
                                            <span class="title">Cookie Consent 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_cookie_consent_2.html" class="nav-link ">
                                            <span class="title">Cookie Consent 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                            <span class="title">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_404_1.html" class="nav-link ">
                                            <span class="title">404 Page 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                            <span class="title">404 Page 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                            <span class="title">404 Page 3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_500_1.html" class="nav-link ">
                                            <span class="title">500 Page 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                            <span class="title">500 Page 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->