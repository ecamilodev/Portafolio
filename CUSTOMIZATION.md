# 🎨 Guía de personalización

Esta guía resume los archivos que vas a tocar primero cuando descargues el repo y empieces a desarrollar tu portafolio a profundidad.

---

## 1. Contenido (textos, proyectos, datos personales)

📄 **`app/Http/Controllers/PortfolioController.php`** — Aquí están **todos los datos** que se muestran en la web:

| Método | Qué contiene |
|---|---|
| `profileData()` | Nombre, rol, ubicación, resumen, email, GitHub, LinkedIn |
| `projectsData()` | Lista de proyectos (TIMI, Cuponex, ELSO, etc.) |
| `skillsData()` | Tus habilidades agrupadas |
| `educationData()` | Estudios |
| `experienceData()` | Experiencia laboral |
| `certificationsData()` | Certificaciones |
| `aiToolsData()` | Herramientas de IA que usas |

> 💡 Más adelante, cuando quieras un panel admin, los moverás a la base de datos (ya tienes la migración `projects` y el seeder listos).

---

## 2. Paleta y diseño

📄 **`tailwind.config.js`** — Cambia los colores:

```js
colors: {
    ink: { ... },     // Negros y grises oscuros (fondo)
    fog: { ... },     // Grises claros (textos)
    azure: { ... },   // Acento azul
    violet: { ... },  // Acento morado
}
```

📄 **`resources/css/app.css`** — Componentes reutilizables (botones, cards, chips, etc.).

📄 **Fuentes:** Space Grotesk + Inter + JetBrains Mono. Se importan desde Google Fonts al inicio del CSS.

---

## 3. Imágenes

Coloca tus imágenes en:

- `public/images/projects/` — Capturas de cada proyecto
- `public/images/certifications/` — Imágenes de tus certificados
- `public/images/avatar.jpg` — Tu foto (opcional)

Luego referéncialas en Blade así:

```blade
<img src="{{ asset('images/projects/timi.png') }}" alt="TIMI">
```

---

## 4. Secciones (Blade)

📄 **`resources/views/home.blade.php`** — Página principal con todas las secciones.
📄 **`resources/views/partials/navbar.blade.php`** — Menú superior.
📄 **`resources/views/partials/footer.blade.php`** — Pie con redes sociales.

Cada sección tiene un comentario tipo `═══` que la separa: Hero, Sobre mí, Experiencia, Estudios, Proyectos, Skills, Certificaciones, IA, Contacto.

---

## 5. Variables de entorno

📄 **`.env`** (créalo desde `.env.example`):

```env
APP_NAME="Portafolio - Camilo Sánchez"
CONTACT_EMAIL=tu@email.com
GITHUB_URL=https://github.com/EduardDeUnaGlobal
LINKEDIN_URL=https://www.linkedin.com/in/...
```

---

## 6. Próximos pasos sugeridos

1. **Panel admin** — Crear CRUD de proyectos con Laravel Breeze / Filament.
2. **Blog técnico** — Sección `/blog` con artículos en Markdown.
3. **Modo claro/oscuro** — Toggle con Alpine (`x-data="{ dark: true }"`).
4. **Multi-idioma** — `lang/es/` y `lang/en/` con `@lang('home.hero_title')`.
5. **API de GitHub** — Mostrar repos en tiempo real con `Http::get('https://api.github.com/users/EduardDeUnaGlobal/repos')`.
6. **Despliegue** — HostGator (subdominio), Railway, Vercel + Forge, o tu propio VPS.

---

## 7. Subir a GitHub

```bash
cd portafolio
git init
git add .
git commit -m "feat: estructura inicial del portafolio"
git branch -M main
git remote add origin https://github.com/EduardDeUnaGlobal/portafolio.git
git push -u origin main
```

> ⚠️ Verifica que `.env` esté en `.gitignore` (ya está incluido por defecto).
