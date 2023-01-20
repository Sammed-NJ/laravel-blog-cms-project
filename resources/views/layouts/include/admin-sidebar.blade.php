  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="{{ route('dashboard') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="posts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('posts.table') }}">
                          <i class="bi bi-circle"></i><span>View Posts</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('posts.create') }}">
                          <i class="bi bi-circle"></i><span>Create a Post</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Posts Nav -->
          {{-- <li class="nav-heading">Pages</li> --}}

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('users.table') }}">
                  <i class="bi bi-person"></i>
                  <span>View Users</span>
              </a>
          </li><!-- End Users Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="pages-contact.html">
                  <i class="bi bi-envelope"></i>
                  <span>Contact</span>
              </a>
          </li><!-- End Contact Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="pages-login.html">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Logout</span>
              </a>
          </li><!-- End Logout Page Nav -->


      </ul>

  </aside><!-- End Sidebar-->
