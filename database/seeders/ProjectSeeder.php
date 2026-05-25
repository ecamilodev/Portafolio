<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'slug' => 'timi',
                'name' => 'TIMI',
                'tagline' => 'Plataforma de ride-sharing para Puerto Rico.',
                'description' => 'App móvil (Flutter) y backend (Laravel) con autenticación Firebase, Google Places, pagos con Stripe Connect.',
                'stack' => ['Flutter', 'Laravel', 'Firebase', 'Stripe', 'Google Maps'],
                'role' => 'Backend & Mobile Developer',
                'year' => '2024 – Presente',
                'accent' => 'azure',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'slug' => 'cuponex',
                'name' => 'Cuponex',
                'tagline' => 'Plataforma de cupones y promociones.',
                'description' => 'Sistema de gestión administrativa de carruseles, productos y campañas.',
                'stack' => ['Laravel', 'MySQL', 'Blade', 'TailwindCSS'],
                'role' => 'Full Stack Developer',
                'year' => '2025',
                'accent' => 'violet',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'slug' => 'elso-club',
                'name' => 'ELSO.club',
                'tagline' => 'Comunidad educativa con cursos y webinars.',
                'description' => 'Sitio WordPress con LearnDash, BuddyPress, Stripe y Vimeo.',
                'stack' => ['WordPress', 'LearnDash', 'Stripe'],
                'role' => 'Developer & Security Auditor',
                'year' => '2024 – Presente',
                'accent' => 'azure',
                'order' => 3,
            ],
            [
                'slug' => 'deuna-marketing',
                'name' => 'DeUna Marketing',
                'tagline' => 'CRM y gestión de campañas.',
                'description' => 'Aplicación Laravel con plantillas HTML de correos transaccionales y auditoría de seguridad.',
                'stack' => ['Laravel', 'Livewire', 'MySQL'],
                'role' => 'Backend Developer & Auditor',
                'year' => '2024 – Presente',
                'accent' => 'violet',
                'order' => 4,
            ],
            [
                'slug' => 'timi-isabela',
                'name' => 'TiMi Isabela',
                'tagline' => 'Sitio institucional + registro de comercios.',
                'description' => 'WordPress + Divi con formularios integrados vía Google Forms.',
                'stack' => ['WordPress', 'Divi', 'Google Forms'],
                'role' => 'Web Developer',
                'year' => '2024',
                'accent' => 'azure',
                'order' => 5,
            ],
            [
                'slug' => 'unitutor',
                'name' => 'UniTutor',
                'tagline' => 'Proyecto de grado — plataforma de tutorías.',
                'description' => 'Java + MySQL bajo metodología Scrum con el equipo "Los Juniors".',
                'stack' => ['Java', 'MySQL', 'Scrum'],
                'role' => 'Full Stack Developer',
                'year' => '2025',
                'accent' => 'violet',
                'order' => 6,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(['slug' => $project['slug']], $project);
        }
    }
}
