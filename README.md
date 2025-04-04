# Laravel API - Daniel Castellanos

##  Requisitos

Antes de comenzar, asegúrate de tener instalado:

- PHP >= 8.1
- Composer
- MySQL

##  Instalación

Sigue estos pasos para correr el proyecto en tu máquina local:

### . Clona el repositorio

```bash
git clone https://github.com/DanielCasteDev/backend_cafira.git
cd tu-proyecto
```

### 2. Instala dependencias de PHP

```bash
composer install
```

### 3. Crea tu base de datos mysql

```bash
CREATE DATABASE agenda_telefonica;
```

### 4. Configura las variables de entorno

Copia el archivo `.env.example` y renómbralo como `.env`:

```bash
cp .env.example .env
```

Edita el archivo `.env` con la configuración de tu base de datos MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=agenda_telefonica
DB_USERNAME=root
DB_PASSWORD=
```


### 5. Ejecuta las migraciones (si existen)

```bash
php artisan migrate
```

### 6. Inicia el servidor

```bash
php artisan serve
```

Luego visita: [http://localhost:8000](http://localhost:8000)

## 📡 Rutas de la API

Todas las rutas se encuentran definidas en:

```
routes/api.php
```

Por defecto, estas rutas se acceden con el prefijo `/api`, por ejemplo:

```
GET http://localhost:8000/api/contactos

```