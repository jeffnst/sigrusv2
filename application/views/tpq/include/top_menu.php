
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo" style="background-color: rgb(9, 154, 88)">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><i class="fa fa-home"></i></span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" ><b><?=DEFAULT_SITE_NAME?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li><a style="margin-top:-3px" href=""><b>
            TPQ <?= $tpq_data['name'].' - '. $tpq_data['alias'];?>
          </b></a></li>
          <li>
            <a href="#" onclick="logoutModal()" ><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
