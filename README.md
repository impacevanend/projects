# Proyectos PHP

Este repositorio contiene un conjunto de proyectos desarrollados en PHP, organizados en diferentes módulos y vistas. Aquí se detalla cómo funciona el proyecto, cómo configurarlo, y cómo empezar a trabajar con él.

## Tabla de Contenidos

- [Descripción](#descripción)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Instalación](#instalación)
- [Uso](#uso)
- [Contribuir](#contribuir)
- [Licencia](#licencia)
- [Contacto](#contacto)

## Descripción

Este proyecto es un ejemplo de aplicación en PHP que permite la creación, visualización y actualización de notas. Utiliza una arquitectura sencilla con un enfoque en la separación de responsabilidades a través del uso de modelos, vistas y controladores.

## Estructura del Proyecto

La estructura del proyecto es la siguiente:

poryectos_php/
│
├── src/
│ ├── lib/
│ │ └── Database.php # Maneja la conexión a la base de datos.
│ ├── models/
│ │ └── Note.php # Modelo que representa las notas y las operaciones sobre ellas.
│ └── views/
│ ├── create.php # Vista para la creación de nuevas notas.
│ ├── home.php # Vista principal que muestra todas las notas.
│ └── view.php # Vista para la visualización de una nota específica.
│
├── .env # Archivo de configuración de entorno.
├── .gitignore # Archivos y carpetas ignorados por git.
├── composer.json # Dependencias y configuración de Composer.
├── composer.lock # Archivo de bloqueo de Composer.
├── index.php # Punto de entrada principal del proyecto.
└── schema.sql # Esquema de la base de datos.

## Instalación

### Requisitos

- PHP 7.4 o superior
- Composer

### Pasos de Instalación

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/impacevanend/projects.git
   cd projects
Instala las dependencias:

Ejecuta el siguiente comando para instalar las dependencias del proyecto:

bash
Copiar código
composer install
Configura el archivo .env:

Copia el archivo .env.example a .env y ajusta los valores según tu entorno:

bash
Copiar código
cp .env.example .env
Edita el archivo .env para agregar tus credenciales de base de datos.

Importa la base de datos:

Utiliza el archivo schema.sql para crear la estructura de la base de datos:

sql
Copiar código
mysql -u your_user -p your_password your_database < schema.sql
Ejecuta el proyecto:

Puedes utilizar el servidor embebido de PHP para ejecutar el proyecto:

bash
Copiar código
php -S localhost:8000
Accede al proyecto a través de http://localhost:8000 en tu navegador.

Uso
Crear una nota:
Visita http://localhost:8000/?view=create para crear una nueva nota.
Ver todas las notas:
Visita http://localhost:8000/?view=home para ver todas las notas creadas.
Ver una nota específica:
Haz clic en una nota desde la vista principal para ver sus detalles.

Contacto
Si tienes alguna pregunta o sugerencia, no dudes en contactarme:

GitHub: https://github.com/impacevanend
