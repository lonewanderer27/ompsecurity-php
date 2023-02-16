<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center"
       href="/">
      <img src='<?php echo get_template_directory_uri() . "/assets/icons/icon.png" ?>'
           alt="OMP Logo"
           width="60"
           height="auto"
           class="d-inline-block align-text-top" />
      <span class="mx-3">OMP</span>
    </a>
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar"
            aria-controls="#navbar"
            aria-expanded="false"
            aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon btn-close-white"></span>
    </button>

    <div class="collapse navbar-collapse"
         id="navbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo (is_front_page()) ? 'active' : '' ?>"
             aria-current="page"
             href="/">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (is_home()) ? 'active' : '' ?>"
             aria-current="page"
             href="/announcements">
            Announcements
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class='
            nav-link dropdown-toggle 
            <?php echo (is_page("personnel") or is_page("values") or is_page("service-delivery-and-operations")) ? "active" : "" ?>
          '
             aria-current="page"
             data-bs-toggle="dropdown">
            Company
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item <?php echo (is_page("personnel")) ? 'active' : '' ?>"
                 href="/personnel">Personnel</a>
            </li>
            <li>
              <a class="dropdown-item <?php echo (is_page("values")) ? 'active' : '' ?>"
                 href="/values">Mission Vision</a>
            </li>
            <li>
              <a class="dropdown-item <?php echo (is_page("service-delivery-and-operations")) ? 'active' : '' ?>"
                 href="/service-delivery-and-operations">Service
                Delivery and Operations</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (is_page("our-guards")) ? 'active' : '' ?>"
             aria-current="page"
             href="/our-guards">
            Our Guards
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (is_page("hiring")) ? 'active' : '' ?>"
             aria-current="page"
             href="/hiring">
            Hiring
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (is_page("contact")) ? 'active' : '' ?>"
             aria-current="page"
             href="/contact">
            Contact
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>