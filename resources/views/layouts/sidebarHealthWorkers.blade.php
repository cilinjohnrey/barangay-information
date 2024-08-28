<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/dbHealthWorker') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardHW') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/dailyServiceRecord*') ? '' : 'collapsed' }}" data-bs-target="#checkUp-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-text"></i><span>Check Up</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="checkUp-nav" class="nav-content collapse {{ Request::is('dashboards/healthWorkerDb/dailyServiceRecord*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/dailyServiceRecord') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dailyServiceRecord') }}">
                    <i class="bi bi-circle"></i>
                    <span>Daily Service Records</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/individualClientReport') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@indiClientReport') }}">
                    <i class="bi bi-circle"></i>
                    <span>Individual Client Treatment Report</span>
                </a>
            </li>
        </ul>
    </li><!-- End Check Up Nav -->
    
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#activities-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Activities</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="activities-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/optDeworming') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@optDeworming') }}">
                  <i class="bi bi-circle"></i>
                  <span>OPT</span>
              </a>
            </li>
        
            <li>
              <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/dstb') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dstb') }}">
                <i class="bi bi-circle"></i>
                <span>DS-TB</span>
              </a>
            </li>
            <li>
              <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/familyPlanning') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@familyPlanning') }}">
                <i class="bi bi-circle"></i><span>Family Planning</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/riskAssessment') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@riskAssessment') }}">
                  <i class="bi bi-circle"></i>
                  <span>Risk Assessment</span>
              </a>
          </li>
            <li>
              <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/dengue') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dengue') }}">
                  <i class="bi bi-circle"></i>
                  <span>Dengue</span>
              </a>
            </li>
            <li>
              <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/rhu') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@rhu') }}">
                    <i class="bi bi-circle"></i><span>Referred RHU</span>
                </a>
            </li>
            <li>
                <a href="components-cards.html">
                    <i class="bi bi-circle"></i><span>Referred District</span>
                </a>
            </li>
        </ul>
    </li><!-- End Activities Nav -->
    

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/dbBrgyCap') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardCap') }}">
          <i class="bi bi-grid"></i>
          <span>Residents Medical Record</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/captainDb/dashboardCapCert') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardCapCert') }}">
          <i class="bi bi-journal-text"></i>
          <span>Immunization</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/captainDb/dashboardCapBusiness') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardCapBusiness') }}">
          <i class="bi bi-file-richtext"></i>
          <span>Prenatal/Postnatal</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/captainDb/dashboardCapClearance') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardCapClearance') }}">
          <i class="bi bi-card-list"></i>
          <span>Dessegragation of Sex & Age</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/captainDb/dashboardCapBlotter') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardCapBlotter') }}">
          <i class="bi bi-file-text"></i>
          <span>Mental Health</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/captainDb/dashboardCapPur') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@dashboardCapPur') }}">
          <i class="bi bi-geo-alt"></i>
          <span>Purok</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboards/healthWorkerDb/medicine') ? '' : 'collapsed' }}" href="{{ action('App\Http\Controllers\regValidation@medicineRecord') }}">
          <i class="bx bx-plus-medical"></i>
          <span>Medicines</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-archive"></i>
          <span>Archive</span>
        </a>
      </li>
    </ul>
  </aside><!-- End Sidebar-->
  