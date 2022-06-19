<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="/advisor/admin/index.php">
        <i class="bi bi-grid"></i>
        <span>Home page</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#track" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Tracks</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="track" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/advisor/admin/track/add.php">
            <i class="bi bi-circle"></i><span>Add</span>
          </a>
        </li>
        <li>
          <a href="/advisor/admin/track/list.php">
            <i class="bi bi-circle"></i><span>List</span>
          </a>
        </li>
      </ul>
    </li><!-- End travel Adency Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#levels" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>level</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="levels" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/advisor/admin/levels/add.php">
            <i class="bi bi-circle"></i><span>add</span>
          </a>
        </li>
        <li>
          <a href="/advisor/admin/levels/list.php">
            <i class="bi bi-circle"></i><span>List</span>
          </a>
        </li>
      </ul>
    </li><!-- End travel Adency Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#courses" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="courses" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/advisor/admin/courses/add.php">
            <i class="bi bi-circle"></i><span>add</span>
          </a>
        </li>
        <li>
          <a href="/advisor/admin/courses/list.php">
            <i class="bi bi-circle"></i><span>List</span>
          </a>
        </li>
      </ul>
    </li><!-- End travel Adency Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#rating" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>rating</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="rating" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/advisor/admin/rating/list.php">
            <i class="bi bi-circle"></i><span>List rating</span>
          </a>
        </li>
      </ul>
    </li><!-- End travel Adency Nav -->

    <?php if ($_SESSION['role'] == 0) : ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admin" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="admin" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/advisor/admin/admins/add.php">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="/advisor/admin/admins/list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
        </ul>
      </li><!-- End travel Adency Nav -->
    <?php endif; ?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#students" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>students</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="students" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/advisor/admin/students/list.php">
            <i class="bi bi-circle"></i><span>list</span>
          </a>
        </li>
      </ul>
    </li><!-- End travel Adency Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" href="/advisor/admin/pages-contact.php">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" href="/advisor/admin/users-profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->


  </ul>

</aside><!-- End Sidebar-->