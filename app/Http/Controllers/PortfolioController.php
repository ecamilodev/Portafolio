<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Página principal del portafolio.
     */
    public function index()
    {
        $profile = $this->profileData();
        $projects = $this->projectsData();
        $skills = $this->skillsData();
        $education = $this->educationData();
        $experience = $this->experienceData();
        $certifications = $this->certificationsData();
        $aiTools = $this->aiToolsData();

        return view('home', compact(
            'profile',
            'projects',
            'skills',
            'education',
            'experience',
            'certifications',
            'aiTools'
        ));
    }

    /**
     * Listado completo de proyectos.
     */
    public function projects()
    {
        $projects = $this->projectsData();

        return view('projects', compact('projects'));
    }

    /**
     * Detalle de un proyecto por slug.
     */
    public function showProject(string $slug)
    {
        $project = collect($this->projectsData())->firstWhere('slug', $slug);

        abort_if(! $project, 404);

        return view('project-detail', compact('project'));
    }

    /**
     * Página de contacto.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Procesar el formulario de contacto.
     */
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:160',
            'message' => 'required|string|max:2000',
        ]);

        // TODO: enviar email / guardar en BD cuando definamos el flujo.
        // Mail::to(config('mail.contact_to'))->send(new ContactMessage($validated));

        return back()->with('success', '¡Gracias! Tu mensaje fue enviado correctamente.');
    }

    /* ------------------------------------------------------------------
     |  Datos del portafolio (se mueven a BD en una iteración posterior).
     * ------------------------------------------------------------------*/

    private function profileData(): array
    {
        return [
            'name' => 'Eduard Camilo Sánchez García',
            'short_name' => 'Camilo Sánchez',
            'role' => 'Ingeniero de Sistemas · Desarrollador Backend & Full Stack',
            'location' => 'Colombia (remoto)',
            'summary' => 'Desarrollo soluciones digitales end-to-end: APIs robustas en Laravel, '
                .'apps móviles con Flutter y experiencias web limpias. Actualmente trabajo en '
                .'Steps Consulting Corp (Puerto Rico) liderando módulos de la plataforma de '
                .'ride-sharing TIMI y participando en proyectos como Cuponex, ELSO.club y DeUna Marketing.',
            'email' => env('CONTACT_EMAIL', 'ecsanchezg@example.com'),
            'github' => env('GITHUB_URL', 'https://github.com/EduardDeUnaGlobal'),
            'linkedin' => env('LINKEDIN_URL', '#'),
        ];
    }

    private function projectsData(): array
    {
        return [
            [
                'slug' => 'timi',
                'name' => 'TIMI',
                'tagline' => 'Plataforma de ride-sharing para Puerto Rico.',
                'description' => 'App móvil (Flutter) y backend (Laravel) con autenticación '
                    .'Firebase, Google Places, pagos con Stripe Connect (authorize/capture), '
                    .'publicación en Google Play y cumplimiento legal (Ley 109 PR).',
                'stack' => ['Flutter', 'Laravel', 'Firebase', 'Stripe', 'Google Maps'],
                'role' => 'Backend & Mobile Developer',
                'year' => '2024 – Presente',
                'accent' => 'azure',
            ],
            [
                'slug' => 'cuponex',
                'name' => 'Cuponex',
                'tagline' => 'Plataforma de cupones y promociones.',
                'description' => 'Sistema de gestión administrativa de carruseles, productos y '
                    .'campañas. CRUD completo, panel admin y frontend dinámico.',
                'stack' => ['Laravel', 'MySQL', 'Blade', 'TailwindCSS'],
                'role' => 'Full Stack Developer',
                'year' => '2025',
                'accent' => 'violet',
            ],
            [
                'slug' => 'elso-club',
                'name' => 'ELSO.club',
                'tagline' => 'Comunidad educativa con cursos y webinars.',
                'description' => 'Sitio WordPress con LearnDash, BuddyPress, Stripe y Vimeo. '
                    .'Auditoría de seguridad y estrategia de despliegue de webinars en YouTube Live / Zoom.',
                'stack' => ['WordPress', 'LearnDash', 'Stripe', 'BuddyPress'],
                'role' => 'Developer & Security Auditor',
                'year' => '2024 – Presente',
                'accent' => 'azure',
            ],
            [
                'slug' => 'deuna-marketing',
                'name' => 'DeUna Marketing',
                'tagline' => 'CRM y gestión de campañas.',
                'description' => 'Aplicación Laravel con plantillas HTML de correos transaccionales, '
                    .'flujos de planes y auditoría de seguridad (Livewire, Saloon).',
                'stack' => ['Laravel', 'Livewire', 'MySQL', 'HTML Emails'],
                'role' => 'Backend Developer & Auditor',
                'year' => '2024 – Presente',
                'accent' => 'violet',
            ],
            [
                'slug' => 'timi-isabela',
                'name' => 'TiMi Isabela',
                'tagline' => 'Sitio institucional + registro de comercios.',
                'description' => 'WordPress + Divi con formularios integrados vía Google Forms, '
                    .'sincronización de reseñas y tipografías personalizadas.',
                'stack' => ['WordPress', 'Divi', 'Google Forms', 'Google Sheets'],
                'role' => 'Web Developer',
                'year' => '2024',
                'accent' => 'azure',
            ],
            [
                'slug' => 'unitutor',
                'name' => 'UniTutor',
                'tagline' => 'Proyecto de grado — plataforma de tutorías.',
                'description' => 'Sistema desarrollado en Java + MySQL bajo metodología Scrum '
                    .'con el equipo "Los Juniors". Documentación completa en GitLab Wiki.',
                'stack' => ['Java', 'MySQL', 'Scrum'],
                'role' => 'Full Stack Developer',
                'year' => '2025',
                'accent' => 'violet',
            ],
        ];
    }

    private function skillsData(): array
    {
        return [
            'Backend' => ['PHP', 'Laravel', 'MySQL', 'REST APIs', 'Stripe', 'Firebase Admin'],
            'Mobile' => ['Flutter', 'Dart', 'Firebase Auth', 'Google Maps', 'Play Console'],
            'Frontend' => ['HTML5', 'CSS3', 'TailwindCSS', 'JavaScript', 'Blade', 'Alpine.js'],
            'DevOps & Tools' => ['Git', 'GitHub', 'VS Code', 'Claude Code', 'HostGator', 'Linux básico'],
            'Otros' => ['Scrum', 'Documentación técnica', 'Auditoría de seguridad', 'WordPress'],
        ];
    }

    private function educationData(): array
    {
        return [
            [
                'title' => 'Ingeniería de Sistemas',
                'institution' => 'Fundación Universitaria Los Libertadores',
                'period' => '— 2025',
                'description' => 'Proyecto de grado: UniTutor (plataforma de tutorías académicas).',
            ],
            [
                'title' => 'Formación complementaria',
                'institution' => 'Cursos y certificaciones',
                'period' => 'Continuo',
                'description' => 'Laravel, Flutter, seguridad web, despliegue en producción, IA aplicada al desarrollo.',
            ],
        ];
    }

    private function experienceData(): array
    {
        return [
            [
                'role' => 'Backend & Full Stack Developer',
                'company' => 'Steps Consulting Corp',
                'location' => 'Puerto Rico (remoto desde Colombia)',
                'period' => '2024 – Presente',
                'highlights' => [
                    'Desarrollo de la plataforma de ride-sharing TIMI (Flutter + Laravel).',
                    'Integración de pagos con Stripe Connect (authorize/capture, split 25/75).',
                    'Publicación en Google Play, gestión de keystores y Firebase Auth.',
                    'Auditorías de seguridad en proyectos Laravel y WordPress.',
                ],
            ],
            [
                'role' => 'Soporte IT',
                'company' => 'CMS',
                'location' => 'Colombia',
                'period' => '2021 – 2024',
                'highlights' => [
                    'Soporte técnico a usuarios y administración básica de infraestructura.',
                    'Documentación de procesos y atención de incidentes.',
                ],
            ],
        ];
    }

    private function certificationsData(): array
    {
        return [
            ['name' => 'Ingeniería de Sistemas', 'issuer' => 'Fundación Universitaria Los Libertadores', 'year' => '2025'],
            ['name' => 'Laravel — Desarrollo backend', 'issuer' => 'Formación continua', 'year' => '2024'],
            ['name' => 'Flutter & Firebase', 'issuer' => 'Formación continua', 'year' => '2024'],
            ['name' => 'Stripe Connect Integration', 'issuer' => 'Documentación oficial + práctica', 'year' => '2025'],
        ];
    }

    private function aiToolsData(): array
    {
        return [
            [
                'name' => 'Claude (Claude Code)',
                'use' => 'Asistente principal para desarrollo: refactor, generación de migraciones, debugging en Laravel y Flutter, y revisión de código en VS Code.',
            ],
            [
                'name' => 'ChatGPT',
                'use' => 'Brainstorming de arquitectura, redacción de documentación y comparativas técnicas.',
            ],
            [
                'name' => 'GitHub Copilot',
                'use' => 'Autocompletado contextual durante el desarrollo diario.',
            ],
        ];
    }
}
