# Portafolio — Eduard Camilo Sánchez García

Portafolio profesional desarrollado con **Laravel 11**, **TailwindCSS** y **Alpine.js**. Diseñado para presentar mi perfil como **Ingeniero de Sistemas / Desarrollador Backend & Full Stack**, mis estudios, experiencia, certificaciones, proyectos y herramientas de IA con las que trabajo.



---

## 🧭 Tabla de contenido

- [Stack](#-stack)
- [Estructura del proyecto](#-estructura-del-proyecto)
- [Requisitos](#-requisitos)
- [Instalación](#-instalación)
- [Comandos útiles](#-comandos-útiles)
- [Secciones del portafolio](#-secciones-del-portafolio)
- [Roadmap](#-roadmap)
- [Licencia](#-licencia)

---

## 🛠 Stack

- **Backend:** Laravel 11 (PHP 8.2+)
- **Frontend:** Blade + TailwindCSS 3 + Alpine.js
- **Build:** Vite
- **BD:** MySQL 8 (configurable por `.env`)
- **Despliegue sugerido:** HostGator / VPS / Forge

---

## 📂 Estructura del proyecto

```
portafolio/
├── app/
│   ├── Http/Controllers/        # Controladores (PortfolioController, ProjectController...)
│   ├── Models/                  # Modelos Eloquent (Project, Certification, Skill...)
│   └── Providers/
├── bootstrap/
├── config/                      # Configuración de Laravel
├── database/
│   ├── migrations/              # Estructura de tablas
│   ├── seeders/                 # Datos iniciales (proyectos, skills, certificaciones)
│   └── factories/
├── public/                      # Punto de entrada (index.php) + assets compilados
│   └── images/
│       ├── projects/            # Capturas de TIMI, Cuponex, ELSO, DeUna...
│       └── certifications/      # Imágenes de certificados
├── resources/
│   ├── views/
│   │   ├── layouts/app.blade.php
│   │   ├── partials/            # navbar, footer, hero, about, etc.
│   │   ├── home.blade.php
│   │   ├── projects.blade.php
│   │   └── contact.blade.php
│   ├── css/app.css              # Tailwind + estilos custom
│   └── js/app.js                # Alpine + animaciones
├── routes/
│   └── web.php                  # Rutas públicas
├── storage/
├── tests/
├── .env.example
├── .gitignore
├── composer.json
├── package.json
├── tailwind.config.js
├── postcss.config.js
├── vite.config.js
└── README.md
```

---

## 📋 Requisitos

- PHP **>= 8.2**
- Composer **>= 2.5**
- Node.js **>= 18** y npm
- MySQL **>= 8** (o MariaDB compatible)

---

## 🚀 Instalación

```bash
# 1. Clonar el repositorio
git clone https://github.com/EduardDeUnaGlobal/portafolio.git
cd portafolio

# 2. Instalar dependencias PHP
composer install

# 3. Instalar dependencias JS
npm install

# 4. Configurar entorno
cp .env.example .env
php artisan key:generate

# 5. Configurar la BD en .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD)
php artisan migrate --seed

# 6. Compilar assets en modo desarrollo
npm run dev

# 7. (En otra terminal) Servidor de Laravel
php artisan serve
```

Abrir [http://localhost:8000](http://localhost:8000).

> 💡 En **Windows / PowerShell** los comandos se ejecutan por separado (sin `&&`).

---

## ⚡ Comandos útiles

```bash
# Desarrollo
php artisan serve
npm run dev

# Producción
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Base de datos
php artisan migrate:fresh --seed
```

---

## 🧩 Secciones del portafolio

1. **Hero / Inicio** — Presentación con tu nombre, rol y CTA.
2. **Sobre mí** — Resumen profesional y propuesta de valor.
3. **Estudios** — Fundación Universitaria Los Libertadores (2025) y formación complementaria.
4. **Experiencia** — Steps Consulting Corp (actual), CMS (2021–2024), proyectos académicos.
5. **Proyectos** — TIMI, Cuponex, ELSO.club, DeUna Marketing, TiMi Isabela, UniTutor, etc.
6. **Habilidades** — PHP/Laravel, Flutter, MySQL, Firebase, Stripe, Google Play, etc.
7. **Certificaciones** — Diplomas y cursos relevantes.
8. **Herramientas de IA** — Claude (Claude Code), ChatGPT, Copilot y flujos en los que las uso.
9. **Contacto** — Formulario + redes (GitHub, LinkedIn, correo).

---

## 🗺 Roadmap

- [x] Estructura base del repositorio
- [x] Landing page con todas las secciones
- [ ] CRUD de proyectos desde panel admin
- [ ] Blog técnico (artículos sobre Laravel, Flutter, IA)
- [ ] Modo claro / oscuro con toggle
- [ ] Internacionalización ES / EN
- [ ] Integración con la API de GitHub para mostrar repos en tiempo real
- [ ] Despliegue en dominio propio

---

## 📜 Licencia

Código bajo licencia **MIT**. Contenido (textos, imágenes, certificaciones) © Eduard Camilo Sánchez García.

---

### 📬 Contacto

- GitHub: [EduardDeUnaGlobal](https://github.com/EduardDeUnaGlobal)
- Portafolio web: [eduarddeunaglobal.github.io](https://eduarddeunaglobal.github.io)
- Ubicación: Colombia 🇨🇴 (remoto)
