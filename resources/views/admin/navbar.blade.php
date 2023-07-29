<nav class="sidebar sidebar-offcanvas" id="sidebar">

  <ul class="nav">

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/admin_notice') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Notice</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Academic</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_routine') }}">Class routine</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_syllabus') }}">Syllabus</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_exam') }}">Exam Routine</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_calender') }}">Academic Calender</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Administra</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_governing') }}">Governing body details</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_school') }}">School Documents</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_staffs') }}">Staffs Documents</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/admin_result') }}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Result</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/admin_job') }}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Job & Vacancies</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/admin_contact') }}">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">Contact us</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/admin_gallary') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-image"></i>
        </span>
        <span class="menu-title">Gallary</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_carousel') }}">Carousel</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_home_paragraph') }}">Home paragraph</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/admin_footer_paragraph') }}">Footer paragraph</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>