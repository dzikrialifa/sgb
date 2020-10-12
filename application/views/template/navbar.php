    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h5 class="text-primary pr-5">
          <?php if($this->uri->segment(2) == "index"):?>
          Halaman beranda admin
          <?php elseif($this->uri->segment(2) == "Profilpanti"):?>
          Halaman Profil Panti
          <?php elseif($this->uri->segment(2) == "Lokasi"):?>
          Halaman Lokasi
          <?php elseif($this->uri->segment(2) == "kritiksaran"):?>
          Halaman Kritik & Saran
          <?php endif;?>
          </h5>

        </nav>
        <!-- End of Topbar -->