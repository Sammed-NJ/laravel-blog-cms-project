    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#manage-posts" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Manage Posts</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="manage-posts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>All Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('post.create') }}">
                            <i class="bi bi-circle"></i><span>Wrtie Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Deleted Post</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End User Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#manage-bloggers" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Manage Bloggers</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="manage-bloggers" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>All Bloggers</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>All Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Deleted Bloggers</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Deleted Posts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Post Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#manage-user" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Manage Users</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="manage-user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>All Subscriptions</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Delete Subscriptions</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End User Nav -->


        </ul>

    </aside><!-- End Sidebar-->
