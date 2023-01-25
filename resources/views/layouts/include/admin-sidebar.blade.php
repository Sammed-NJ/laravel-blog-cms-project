  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="{{ route('dashboard') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          {{-- ** VIEW OWN POST --}}

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#own-posts-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>My Post</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="own-posts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('posts.table') }}">
                          <i class="bi bi-circle"></i><span>All Posts</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('posts.create') }}">
                          <i class="bi bi-circle"></i><span>Write a Post</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Own Posts Nav -->


          {{-- ** VIEW USER & POST --}}

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#user-posts-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>User Data</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="user-posts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('posts.table') }}">
                          {{-- <a href="#"> --}}
                          <i class="bi bi-circle"></i><span>Posts</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('users.table') }}">
                          {{-- <a href="#"> --}}
                          <i class="bi bi-circle"></i><span>Users</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Posts Nav -->

          {{-- ** VIEW ROLES & PERMISSIONS --}}

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#roles-and-permissions-nav" data-bs-toggle="collapse"
                  href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Roles and Permissions</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="roles-and-permissions-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="">
                          <i class="bi bi-circle"></i><span>Roles</span>
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="bi bi-circle"></i><span>Permissions</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Roles and Permissions Nav -->


          <li class="nav-heading">Pages</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('user', Auth::user()->id) }}">
                  <i class="bi bi-person"></i>
                  <span>Manage Account</span>
              </a>
          </li><!-- End Manage Account Page Nav -->


          <li class="nav-item">
              <a class="nav-link collapsed" href="pages-login.html">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Logout</span>
              </a>
          </li><!-- End Logout Page Nav -->


      </ul>

  </aside><!-- End Sidebar-->
