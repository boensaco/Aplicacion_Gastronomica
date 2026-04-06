# 🍽️ Sistema Web para Restaurante

## 📌 Descripción

Este proyecto es una aplicación web básica para gestionar pedidos en un restaurante.

Permite visualizar productos desde una base de datos y agregarlos a un carrito de compras de forma dinámica.

---

## 🎯 Objetivo General

Desarrollar una aplicación web funcional que permita gestionar productos y pedidos de un restaurante mediante el uso de PHP y MySQL.

---

## 🎯 Objetivos Específicos

* Conectar una página web con una base de datos
* Mostrar productos de forma dinámica
* Implementar un carrito de compras
* Permitir la interacción del usuario con el sistema
* Aplicar lógica de programación en PHP

---

## ❗ Problema

Al inicio, el sistema solo tenía diseño visual:

* Los productos eran estáticos
* Los botones no funcionaban
* No existía base de datos
* No se podían guardar pedidos

---

## ✅ Solución

Se transformó el sistema en una aplicación funcional mediante:

* Conexión a base de datos MySQL
* Uso de PHP para lógica del sistema
* Implementación de sesiones
* Creación de un carrito de compras dinámico

---

## 📚 Marco Teórico

### 🔹 PHP

Lenguaje de programación del lado del servidor que permite procesar datos y generar contenido dinámico en páginas web.

### 🔹 MySQL

Sistema de gestión de bases de datos que permite almacenar información como productos, precios e imágenes.

### 🔹 Sesiones

Mecanismo que permite guardar información del usuario mientras navega en la aplicación (por ejemplo, el carrito).

### 🔹 HTML + Tailwind CSS

Se utilizan para estructurar y diseñar la interfaz visual del sistema.

---

## ⚙️ Tecnologías Utilizadas

* PHP
* MySQL
* HTML5
* Tailwind CSS
* XAMPP

---

## 🧩 Funcionalidades

### ✔ Productos dinámicos

Los productos se cargan desde la base de datos.

### ✔ Botón funcional

El botón “Add to Order” ahora envía información al servidor.

### ✔ Carrito de compras

Se almacenan los productos seleccionados por el usuario.

### ✔ Cálculo automático

Se calcula el total según los productos agregados.

---

## 🔄 Funcionamiento

1. El usuario ve los productos
2. Hace clic en “Add to Order”
3. El sistema guarda el producto en el carrito
4. Se actualiza la cantidad
5. Se calcula el total automáticamente

---

## 📂 Estructura

```
/restaurante
│
├── cliente.php
├── config/
│   └── db.php
└── assets/
```

---

## ▶️ Cómo Ejecutarlo

1. Instalar XAMPP
2. Activar Apache y MySQL
3. Colocar el proyecto en:

```
C:\xampp\htdocs\restaurante
```

4. Crear la base de datos
5. Abrir en el navegador:

```
http://localhost/restaurante/cliente.php
```

---

## 📸 Evidencia

*(Aquí agregas tus imágenes)*

* Productos dinámicos
* Botón funcionando
* Carrito en uso
* Base de datos

---

## 🚀 Mejoras Futuras

* Eliminar productos del carrito
* Vaciar carrito
* Sistema de pedidos completo
* Inicio de sesión de usuarios

---

## 🧾 Conclusión

Se logró convertir una página estática en una aplicación funcional.

El proyecto demuestra cómo integrar diseño, base de datos y lógica de programación para crear un sistema interactivo.

---
