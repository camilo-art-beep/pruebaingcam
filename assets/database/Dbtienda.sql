-- Create on 20250903
-- Database: dbtienda

CREATE DATABASE IF NOT EXISTS dbtienda DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE dbtienda;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

-- --------------------
-- PARAMETRIC TABLES
-- --------------------

-- 02 Table generos
CREATE TABLE IF NOT EXISTS generos (
  id_genero tinyint NOT NULL AUTO_INCREMENT,
  nombre_genero VARCHAR(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id_genero)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- --------------------------
-- TABLES WITH FOREING KEYS
-- --------------------------

-- 03 Table usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  id_usuario VARCHAR(12) COLLATE utf8_unicode_ci NOT NULL,
  nombre_usuario VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  email_usuario VARCHAR(80) COLLATE utf8_unicode_ci NOT NULL,
  clave_usuario VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL,
  direccion_usuario VARCHAR(80) COLLATE utf8_unicode_ci NOT NULL,
  telefono_usuario VARCHAR(15) COLLATE utf8_unicode_ci NOT NULL,
  id_genero_usuario tinyint NOT NULL,
  PRIMARY KEY (id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

ALTER TABLE usuarios
  ADD KEY (id_genero_usuario),
  ADD CONSTRAINT fk_usuarios_generos FOREIGN KEY (id_genero_usuario) REFERENCES generos (id_genero)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

-- 04 Table marcas
CREATE TABLE IF NOT EXISTS marcas (
  id_marca tinyint NOT NULL AUTO_INCREMENT,
  nombre_marca VARCHAR(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id_marca)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- 05 Table productos
CREATE TABLE IF NOT EXISTS productos (
  id_producto int NOT NULL AUTO_INCREMENT,
  nombre_producto VARCHAR(30) COLLATE utf8_unicode_ci NOT NULL,
  descripcion_producto VARCHAR(80) COLLATE utf8_unicode_ci NOT NULL,
  valor_producto int NOT NULL,
  cantidad_producto int NOT NULL,
  id_marca_producto tinyint NOT NULL,
  PRIMARY KEY (id_producto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

ALTER TABLE productos
  ADD KEY (id_marca_producto),
  ADD CONSTRAINT fk_marcas_productos FOREIGN KEY (id_marca_producto) REFERENCES marcas (id_marca)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

-- 06 Table imagenes
CREATE TABLE IF NOT EXISTS imagenes (
  nombre_imagen VARCHAR(80) COLLATE utf8_unicode_ci NOT NULL,
  id_producto_imagen int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

ALTER TABLE imagenes
  ADD KEY (id_producto_imagen),
  ADD CONSTRAINT fk_productos_imagenes FOREIGN KEY (id_producto_imagen) REFERENCES productos (id_producto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;
