  <!-- partial:../../partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SERVER_URL; ?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">INICIO</span>
            </a>
          </li>
          <li class="nav-item nav-category">Usuario</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Usuario</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo SERVER_URL; ?>admin/lista-client">Lista Administradores</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo SERVER_URL; ?>admin/lista-usuario">Lista Usuario</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo SERVER_URL; ?>admin/lista-client">Lista Bibliotecario</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item nav-category">Inventario Libross</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Libro</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo SERVER_URL; ?>usuario/libro-add">Agrega Libro</a></li>
              </ul>
            </div>
          </li>
          
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
        
        </ul>
      </nav>
      <!-- partial -->