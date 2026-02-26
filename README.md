# 🍳 Cocina Yeya - Tienda en Línea

Sistema de tienda en línea para productos de cocina desarrollado con Laravel y Tailwind CSS.

---

## 📋 Proyecto VII - Equipo

- **Paola Monserrat Espinosa Sandoval** - Product Owner
- **Juan Javier Manzo Luna** - Scrum Master
- **Héctor Abraham Macías Nuño** - Developer
- **Víctor Hugo Ahumada Villa** - Developer

---

## 🚀 Requisitos

- PHP 8.1 o superior
- Composer
- MySQL o MariaDB
- Node.js y NPM
- XAMPP (opcional)

---

## 📦 Instalación

1. **Clonar repositorio**
git clone https://github.com/juanmanzo7146/ProyectoVII.git
cd ProyectoVII

2. **Instalar dependencias**
composer install
npm install

3. **Configurar archivo de entorno**
cp .env.example .env
php artisan key:generate
El archivo .env no se incluye en el repositorio por seguridad.

4. **Configurar base de datos en .env**
DB_DATABASE=cocina_yeya
DB_USERNAME=root
DB_PASSWORD=

5. **Crear base de datos**
CREATE DATABASE cocina_yeya;

6. **Migrar y sembrar datos**
php artisan migrate --seed

7. **Compilar assets**
npm run dev

8. **Levantar servidor**
php artisan serve

9. **Abrir navegador**
http://localhost:8000

## Credenciales de prueba
Estas credenciales son únicamente para entorno de desarrollo.

Admin: yeya@cocina.com
 / cocina123

Cliente: cliente@test.com
 / cliente123

 ## Estructura del proyecto
 ProyectoVII/
├── app/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── css/
│   └── views/
├── routes/
└── ...
