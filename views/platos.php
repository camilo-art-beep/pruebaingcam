<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos Típicos Colombianos - Restaurante Delicioso</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/images/logo_restaurant.png" type="image/png">
</head>
<body>
    <!-- Header Bar -->
    <div class="header-bar">
        <div class="logo-left">
            <img src="../assets/images/logo_restaurant.png" alt="Logo" class="logo-img">
            <h1 class="logo-text">Restaurante Delicioso</h1>
        </div>
        <div class="user-login">
            <img src="https://i.pravatar.cc/100" alt="Usuario" class="avatar">
            <span>Bienvenido</span>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div id="menu">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="platos.php" class="active">Platos Típicos</a></li>
                <li><a href="#menu">Menú</a></li>
                <li><a href="#reservas">Reservas</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Platos Típicos Colombianos</h1>
            <p>Descubre los sabores auténticos de Colombia con nuestros platos tradicionales, preparados con ingredientes frescos y recetas ancestrales que han pasado de generación en generación.</p>
            <a href="#platos" class="btn-reservar">Ver Nuestros Platos</a>
        </div>
    </div>

    <!-- Platos Típicos Section -->
    <div class="container" style="padding: 60px 20px;">
        <div class="info">
            <h2>Nuestros Platos Estrella</h2>
            <p>Cada plato cuenta una historia de tradición, cultura y sabor. Preparados con amor y los mejores ingredientes colombianos.</p>
        </div>

        <div id="platos" class="productos" style="margin-top: 40px;">
            <!-- Bandeja Paisa -->
            <div class="product">
                <img src="../assets/images/bandeja.png" alt="Bandeja Paisa">
                <h2>Bandeja Paisa</h2>
                <p>El plato más emblemático de Antioquia. Incluye frijoles, arroz, carne molida, chicharrón, chorizo, morcilla, huevo frito, patacón, arepa y aguacate. Una explosión de sabores en un solo plato.</p>
                <div class="precio">$28.000 COP</div>
                <button class="Bt1" style="margin-top: 15px;">Ordenar Ahora</button>
            </div>

            <!-- Ajiaco Santafereño -->
            <div class="product">
                <img src="../assets/images/ajiaco.png" alt="Ajiaco Santafereño">
                <h2>Ajiaco Santafereño</h2>
                <p>La sopa más tradicional de Bogotá. Preparada con tres tipos de papa, pollo desmechado, mazorca, guascas y alcaparras. Servida con crema de leche, aguacate y arroz blanco.</p>
                <div class="precio">$22.000 COP</div>
                <button class="Bt1" style="margin-top: 15px;">Ordenar Ahora</button>
            </div>

            <!-- Sancocho Trifásico -->
            <div class="product">
                <img src="../assets/images/sancocho.png" alt="Sancocho Trifásico">
                <h2>Sancocho Trifásico</h2>
                <p>El sancocho del Valle del Cauca con tres carnes: res, cerdo y pollo. Acompañado de plátano, yuca, mazorca, cilantro cimarrón y el toque especial de nuestros chefs.</p>
                <div class="precio">$25.000 COP</div>
                <button class="Bt1" style="margin-top: 15px;">Ordenar Ahora</button>
            </div>
        </div>

        <!-- Información adicional -->
        <div class="info" style="margin-top: 60px; background: linear-gradient(135deg, #FAC32D 0%, #FF7A7A 100%); color: white; border-radius: 15px; padding: 40px;">
            <h3 style="color: white; margin-bottom: 20px;">¿Por qué elegir nuestros platos típicos?</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; text-align: left;">
                <div>
                    <h4 style="color: white; margin-bottom: 10px;">🌿 Ingredientes Frescos</h4>
                    <p style="color: white; opacity: 0.9;">Seleccionamos los mejores ingredientes de productores locales colombianos.</p>
                </div>
                <div>
                    <h4 style="color: white; margin-bottom: 10px;">👨‍🍳 Recetas Auténticas</h4>
                    <p style="color: white; opacity: 0.9;">Nuestros chefs siguen recetas tradicionales transmitidas por generaciones.</p>
                </div>
                <div>
                    <h4 style="color: white; margin-bottom: 10px;">Con Sabor Colombiano</h4>
                    <p style="color: white; opacity: 0.9;">Cada bocado te transporta a las diferentes regiones de Colombia.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Restaurante Delicioso - Sabores Auténticos de Colombia</p>
    </footer>
</body>
</html>