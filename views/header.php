<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Restaurante Delicioso</title>
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="shortcut icon" href="../assets/images/logo_restaurant.png">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

  <!-- ...existing code... -->
  <style>
    #loginOptions {
      display: flex;
      flex-direction: column;
      align-items: stretch;
      gap: 15px;
      background: transparent;
      box-shadow: none;
      padding: 0;
    }
    .login-bubble {
      background: #fff;
      border-radius: 25px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.10);
      padding: 15px 25px;
      margin: 0;
      text-align: center;
      color: #333;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.2s, color 0.2s;
      border: 1px solid #eee;
      display: block;
    }
    .login-bubble:hover {
      background: #FAC32D;
      color: #fff;
      border-color: #FAC32D;
    }
  </style>

</head>
<body>

  <!-- Cabecera superior -->
  <div class="header-bar">
    <div class="logo-left">
      <img class="logo-img" src="assets/images/logo_restaurant.png" alt="Logo Restaurante">
      <h3 class="logo-text">Restaurante Delicioso</h3>
    </div>
   <div class="user-login">
   <div class="dropdown" style="position: relative;">
    <h4 class="dropbtn" id="loginBtn" style="cursor:pointer;">Iniciar Sesión</h4>
    <div class="dropdown-content" id="loginOptions" style="display:none; position:absolute; background:transparent; min-width:200px; z-index:10; flex-direction:column; gap:15px;">
      <a href="/views/login_usuario.php" class="login-bubble">Iniciar como Usuario</a>
      <a href="/views/login_admin.php" class="login-bubble">Iniciar como Admin</a>
    </div>
   </div>
   <img class="avatar" src="https://i.pravatar.cc/100" alt="Avatar">
    </div>

    <!-- Modal de opciones de inicio de sesión -->
   <div id="loginModal" style="display:none;">
    <div class="modal-bg"></div>
    <div class="modal-content">
    <a href="/views/login_usuario.php" class="login-bubble">Iniciar como Usuario</a>
    <a href="/views/login_admin.php" class="login-bubble">Iniciar como Admin</a>
   </div>
   </div>

</div>

  <!-- Menú de navegación -->
  <nav id="menu">
    <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="/views/platos.php">Platos Típicos</a></li>
      <li><div class="reservas-opciones"></li>
      <li><a href="/views/historial_reservas.php" class="reserva-link">Historial de Reservas</a></li>
      <li><a href="/views/reporte_reserva.php" class="reserva-link">Reporte de Reserva</a></li>
      <li></div></li>
      <li><a href="#">Menú</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Galería</a></li>
      <li><a href="#">Opiniones</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>

  <!-- Banner principal -->
  <section class="hero">
    <div class="hero-content">
      <h1>Bienvenido a Restaurante Delicioso</h1>
      <p>
        Descubre una experiencia gastronómica inolvidable.<br><br>
        Sabores únicos, ambiente acogedor y atención de calidad.<br><br>
        ¡Reserva tu mesa ahora!
      </p>
      <a href="reserva.html" class="btn-reservar">Hacer Reserva</a>
    </div>
  </section>

  <!-- Sección informativa -->
  <section class="info">
    <h2>¿Por qué elegirnos?</h2>
    <p>
      Contamos con chefs reconocidos, ingredientes frescos y una carta pensada para todos los gustos.<br><br>
      Nuestro restaurante combina tradición, modernidad y pasión por la cocina.<br><br>
      Ven a vivir una experiencia culinaria inolvidable.
    </p>
  </section>

  <!-- Pie de página -->
  <footer>
    <p>&copy; 2025 Restaurante Delicioso. Todos los derechos reservados.</p>
  </footer>


<script>
document.getElementById('loginBtn').onclick = function(e) {
  e.stopPropagation();
  document.getElementById('loginModal').style.display = 'flex';
};
document.addEventListener('click', function(e) {
  var modal = document.getElementById('loginModal');
  if (modal.style.display === 'flex' && !modal.contains(e.target)) {
    modal.style.display = 'none';
  }
});
document.querySelector('#loginModal .modal-bg').onclick = function() {
  document.getElementById('loginModal').style.display = 'none';
};
</script>

</body>
</html>
