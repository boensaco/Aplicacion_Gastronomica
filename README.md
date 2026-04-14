🍽️ Sistema Web para Gestión Gastronómica
📌 Descripción

Este proyecto consiste en el desarrollo de una aplicación web para la gestión de pedidos en un restaurante, permitiendo la visualización de productos, su selección mediante un carrito de compras y el manejo de información a través de una base de datos relacional.

El sistema integra diseño visual, lógica de programación y almacenamiento de datos, convirtiéndose en una solución funcional para mejorar la atención al cliente y la gestión interna.

🎯 Objetivo General

Desarrollar una aplicación web funcional que permita gestionar productos y pedidos de un restaurante mediante tecnologías web como PHP y MySQL.

🎯 Objetivos Específicos
Conectar una aplicación web con una base de datos
Mostrar productos de forma dinámica desde MySQL
Implementar un carrito de compras funcional
Gestionar pedidos mediante estructura relacional
Aplicar lógica de programación en PHP
Diseñar una interfaz amigable para el usuario
❗ Problema

Inicialmente, el sistema presentaba las siguientes limitaciones:

Productos estáticos (sin conexión a base de datos)
Botones sin funcionalidad
Ausencia de almacenamiento de datos
No existía gestión de pedidos
No había interacción real con el usuario
✅ Solución

Se desarrolló una solución completa basada en:

Conexión a base de datos MySQL
Implementación de lógica en PHP
Uso de sesiones para el carrito
Creación de un sistema dinámico de productos
Diseño de una base de datos relacional

Esto permitió transformar una interfaz estática en un sistema funcional.

📚 Marco Teórico
🔹 PHP

Lenguaje de programación del lado del servidor que permite procesar datos, manejar formularios y generar contenido dinámico.

🔹 MySQL

Sistema de gestión de bases de datos relacional utilizado para almacenar productos, usuarios y pedidos.

🔹 Modelo Relacional

Estructura que organiza los datos en tablas relacionadas mediante claves primarias y foráneas, garantizando integridad y escalabilidad.

🔹 Sesiones

Permiten mantener información del usuario durante la navegación, como el carrito de compras.

🔹 HTML + Tailwind CSS

Tecnologías utilizadas para la estructura y el diseño visual de la interfaz.

⚙️ Tecnologías Utilizadas
PHP
MySQL
HTML5
Tailwind CSS
JavaScript (básico)
XAMPP
🧩 Funcionalidades
✔ Productos dinámicos

Los productos se cargan desde la base de datos.

✔ Carrito de compras

Permite agregar productos y almacenar cantidades mediante sesiones.

✔ Botón funcional

El botón “Add to Order” envía datos al servidor.

✔ Cálculo automático

Se calcula el total de la compra dinámicamente.

✔ Gestión de base de datos

Los datos se almacenan en tablas relacionadas.

🗄️ Modelo de Base de Datos

El sistema utiliza una base de datos relacional en MySQL compuesta por las siguientes tablas:

usuarios
productos
pedidos
detalle_pedido

📸 Modelo entidad–relación:
(Aquí agregas la captura del diseñador)

📊 Diccionario de Datos
🧾 Tabla: usuarios
Campo	Tipo	Descripción
id	INT	Identificador único
nombre	VARCHAR	Nombre del usuario
correo	VARCHAR	Email
password	VARCHAR	Contraseña
rol	ENUM	Tipo de usuario
🍰 Tabla: productos
Campo	Tipo	Descripción
id	INT	Identificador
nombre	VARCHAR	Nombre del producto
descripcion	TEXT	Descripción
precio	DECIMAL	Precio
imagen	VARCHAR	Ruta de imagen
🧾 Tabla: pedidos
Campo	Tipo	Descripción
id	INT	Identificador
usuario_id	INT	Cliente
empleado_id	INT	Empleado
fecha	DATETIME	Fecha
🛒 Tabla: detalle_pedido
Campo	Tipo	Descripción
id	INT	Identificador
pedido_id	INT	Relación con pedido
producto_id	INT	Relación con producto
cantidad	INT	Cantidad
🔄 Funcionamiento del Sistema
El usuario visualiza los productos
Selecciona productos con “Add to Order”
El sistema guarda los datos en sesión (carrito)
Se actualiza la cantidad de productos
Se calcula el total automáticamente
📂 Estructura del Proyecto
/restaurante
│
├── cliente.php
├── config/
│   └── db.php
├── uploads/
└── assets/
▶️ Cómo Ejecutarlo
Instalar XAMPP
Activar Apache y MySQL
Colocar el proyecto en:
C:\xampp\htdocs\restaurante
Importar el archivo .sql en phpMyAdmin
Abrir en el navegador:
http://localhost/restaurante/cliente.php
📸 Evidencia

(Aquí agregas tus capturas)

Productos dinámicos
Carrito funcionando
Base de datos
Modelo entidad–relación
🚀 Mejoras Futuras
Sistema completo de pedidos (guardar en BD)
Eliminación de productos del carrito
Inicio de sesión de usuarios
Gestión de roles (admin, empleado, cliente)
Panel administrativo
🧾 Conclusión

Se logró transformar una página web estática en un sistema dinámico funcional, integrando base de datos, lógica de programación y diseño de interfaz.

El proyecto demuestra la aplicación práctica de tecnologías web y el uso de modelos relacionales para resolver problemas reales en la gestión gastronómica.
