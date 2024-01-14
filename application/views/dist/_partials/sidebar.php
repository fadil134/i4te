<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">East the Beast</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">ETB</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-line"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">General Dashboard</a></li>
                <!--
                <li class="<?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index">Ecommerce Dashboard</a></li>
                -->
              </ul>
            </li>
            <li class="menu-header">Gangguan Massal</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'gamas' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-upload"></i></i></i> <span>Gamas</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'gamas' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/gamas">Form Gamas</a></li>
              </ul>
            </li>
            <!--pages-->
            <!--
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>dist/auth_forgot_password">Forgot Password</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_login">Login</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_register">Register</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_reset_password">Reset Password</a></li> 
              </ul>
            </li>
            -->
          </ul>
        </aside>
      </div>
