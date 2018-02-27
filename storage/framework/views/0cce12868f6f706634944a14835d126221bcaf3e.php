<nav class="navbar navbar-toggleable-md navbar-light navbar-expand-lg bg-faded navbar-static-top"  style="background: linear-gradient(to bottom, #99ff66 0%, #ECF0FF 100%);">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Panel d'administració</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inici <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Productes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuaris
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background: linear-gradient(to bottom, #99ff66 0%, #ECF0FF 100%);">
          <a class="dropdown-item" href="<?php echo e(route('users.index')); ?>">Llistat d'usuaris</a>
          <a class="dropdown-item" href="<?php echo e(url('admin/users/searchform')); ?>">Cercar un usuari</a>
          <a class="dropdown-item" href="<?php echo e(route('users.create')); ?>">Crear usuari nou</a>
        </div>
      </li>
    </ul>
  </div>
</nav>