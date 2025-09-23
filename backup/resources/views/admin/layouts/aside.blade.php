<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active" data-item="dashboard">
                <a class="nav-item-hold" href="{{ route('admin.home') }}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="tags">
                <a class="nav-item-hold" href="{{ route('admin.tags.show') }}">
                    <i class="nav-icon i-Tag-3"></i>
                    <span class="nav-text">Tags</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="blogs">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Newspaper"></i>
                    <span class="nav-text">Blogs</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item " data-item="groups">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Conference"></i>
                    <spanadmin.messages.show class="nav-text">Groups</spanadmin.messages.show>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="messages">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Inbox-Into"></i>
                    <span class="nav-text">Messages</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="jobs">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Management"></i>
                    <span class="nav-text">Jobs</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="settings">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Data-Settings"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{ asset('design/admin/dist-assets/images/logo-text.png') }}" alt="">
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Dashboard</h6>
                <p>Tharawat admin panel</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.home') }}">
                        <i class="nav-icon i-Home1"></i>
                        <span class="item-name">Home</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="tags">
            <header>
                <h6>Tags for Blogs</h6>
                <p>Tharawat latest news categories</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.tags.show') }}">
                        <i class="nav-icon i-Files"></i>
                        <span class="item-name">Show all</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tags.create') }}">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">add new</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="blogs">
            <header>
                <h6>Blogs</h6>
                <p>Tharawat latest news</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.blogs.show') }}">
                        <i class="nav-icon i-Files"></i>
                        <span class="item-name">Show all</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blogs.create') }}">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">add new</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="groups">
            <header>
                <h6>Groups</h6>
                <p>Tharawat Groups</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.groups.show') }}">
                        <i class="nav-icon i-Files"></i>
                        <span class="item-name">Show all</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.groups.create') }}">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">add new</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="messages">
            <header>
                <h6>Messages</h6>
                <p>Inbox</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.messages.show') }}">
                        <i class="nav-icon i-Inbox-Into"></i>
                        <span class="item-name">inbox</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="submenu-area" data-parent="jobs">
            <header>
                <h6>Applications</h6>
                <p>Control all CVs</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.jobs.show') }}">
                        <i class="nav-icon i-Inbox-Into"></i>
                        <span class="item-name">applications</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="settings">
            <header>
                <h6>Settings</h6>
                <p>Control Tharawat Website</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('admin.settings.edit') }}">
                        <i class="nav-icon i-File-Edit"></i>
                        <span class="item-name">Edit Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
