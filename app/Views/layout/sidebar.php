<div class="sidebar">
      <div class="sidebar-header">
        <div>
          <a href="<?= site_url('/dashboard'); ?>" class="sidebar-logo"><span>cassie</span></a>
          <small class="sidebar-logo-headline">Responsive Dashboard Template</small>
        </div>
      </div><!-- sidebar-header -->
      <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
          <li class="nav-label"><label class="content-label">Template Pages</label></li>
          <li class="nav-item show">
            <a href="<?= site_url('/dashboard'); ?>" class="nav-link <?= set_active('dashboard'); ?>"><i data-feather="box"></i> Dashboard</a>
          </li>

          <li class="nav-item">
            <a href="<?= site_url('/ktam_list'); ?>" class="nav-link <?= set_active('ktam_list'); ?>"><i data-feather="user"></i> List KTAM</a>
          </li>

          <li class="nav-item">
            <a href="<?= site_url('/logout'); ?>" class="nav-link"><i data-feather="layout"></i> Logout</a>
          </li>
        </ul>

        <hr class="mg-t-30 mg-b-25">

        <ul class="nav nav-sidebar">
          <li class="nav-item"><a href="themes.html" class="nav-link"><i data-feather="aperture"></i> Themes</a></li>
          <li class="nav-item"><a href="docs.html" class="nav-link"><i data-feather="help-circle"></i> Documentation</a></li>
        </ul>


      </div><!-- sidebar-body -->
    </div><!-- sidebar -->