<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariel Vilchez | Portafolio Profesional</title>
    <!-- Tailwind CSS desde CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Fuente Inter de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="bg-slate-950 text-slate-100 font-sans selection:bg-indigo-500 selection:text-white antialiased">

    <!-- Toast Notification para descarga de CV -->
    <div id="cv-toast"
        class="hidden fixed bottom-6 right-6 z-50 bg-indigo-600 text-white px-5 py-3 rounded-xl shadow-2xl flex items-center gap-3 animate-bounce">
        <svg class="w-5 h-5 text-indigo-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <polyline points="22 4 12 14.01 9 11.01" />
        </svg>
        <span>¡Descargando el Currículum Vitae (PDF)!</span>
    </div>

    <!-- NAVEGACIÓN PRINCIPAL -->
    <header class="sticky top-0 z-40 backdrop-blur-md bg-slate-950/80 border-b border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                <div class="hidden w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-transform">
                    AV
                </div>
                <div>
									<span class="font-bold text-lg tracking-tight block leading-none text-white">Ariel Vilchez</span>
									<span class="hidden text-xs text-indigo-400 font-medium tracking-wider">PORTFOLIO</span>
                </div>
            </a>

            <!-- Enlaces Desktop -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#sobre-mi" class="hover:text-indigo-400 transition-colors">Sobre Mí</a>
                <a href="#experiencia" class="hover:text-indigo-400 transition-colors">Experiencia</a>
                <a href="#portafolio" class="hidden hover:text-indigo-400 transition-colors">Portafolio</a>
                <a href="#habilidades" class="hidden hover:text-indigo-400 transition-colors">Habilidades</a>
                <a href="#testimonios" class="hidden hover:text-indigo-400 transition-colors">Testimonios</a>
                <a href="#contacto" class="hidden hover:text-indigo-400 transition-colors">Contacto</a>
            </nav>

            <!-- Acciones CTA -->
            <div class="hidden md:flex items-center gap-4">
                <button onclick="triggerCVDownload()" class="hidden flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white px-4 py-2.5 rounded-xl text-sm font-semibold shadow-md shadow-indigo-600/20 transition-all hover:shadow-indigo-600/40 active:scale-95">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" x2="12" y1="15" y2="3" />
                    </svg>
                    <span>Descargar CV</span>
                </button>
            </div>

            <!-- Botón Menú Móvil -->
            <button id="mobile-menu-btn"
                class="md:hidden p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-900">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
            </button>
        </div>

        <!-- Menú Desplegable Móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-b border-slate-800 px-4 pt-2 pb-6 space-y-3">
            <a href="#sobre-mi" onclick="toggleMobileMenu()" class="block py-2 text-slate-300 hover:text-indigo-400">Sobre Mí</a>
            <a href="#experiencia" onclick="toggleMobileMenu()" class="block py-2 text-slate-300 hover:text-indigo-400">Experiencia</a>
            <a href="#portafolio" onclick="toggleMobileMenu()" class="hidden block py-2 text-slate-300 hover:text-indigo-400">Portafolio</a>
            <a href="#habilidades" onclick="toggleMobileMenu()" class="hidden block py-2 text-slate-300 hover:text-indigo-400">Habilidades</a>
            <a href="#contacto" onclick="toggleMobileMenu()" class="hidden block py-2 text-slate-300 hover:text-indigo-400">Contacto</a>

            
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="sobre-mi" class="relative py-20 lg:py-28 overflow-hidden">
        <div
            class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-indigo-600/15 rounded-full blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute bottom-10 right-10 w-[300px] h-[300px] bg-purple-600/10 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Texto Hero -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-medium">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span>Disponible para nuevas oportunidades laborales</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                        Hola, soy <span
                            class="bg-gradient-to-r from-indigo-400 via-purple-300 to-pink-400 bg-clip-text text-transparent">Ariel
                            Vilchez</span>
                    </h1>

                    <h2 class="text-xl sm:text-2xl text-slate-300 font-medium">
                        Senior Full-Stack <!-- Software Engineer & UI Specialist -->
                    </h2>

                    <p class="text-slate-400 text-base sm:text-lg max-w-2xl leading-relaxed mx-auto lg:mx-0">
                        Transformando desafíos corporativos en productos digitales escalables y de alto impacto. Más de
                        7 años diseñando e implementando arquitecturas web avanzadas y experiencias digitales para
                        empresas.
                    </p>

                    <div class="flex items-center justify-center lg:justify-start gap-2 text-slate-400 text-sm">
                        <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span>Bogota, Colombia (Disponible para trabajo Remoto / Presencial)</span>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <a href="#contacto"
                            class="hidden bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-3.5 rounded-xl font-semibold shadow-lg shadow-indigo-600/25 transition-all flex items-center gap-2">
                            <span>Contactar Conmigo</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                        <a href="#portafolio"
                            class="bg-slate-900 hover:bg-slate-800 text-slate-200 border border-slate-700/80 px-6 py-3.5 rounded-xl font-semibold transition-all flex items-center gap-2">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <polyline points="16 18 22 12 16 6" />
                                <polyline points="8 6 2 12 8 18" />
                            </svg>
                            <span>Ver Trabajos</span>
                        </a>
                    </div>

                    <!-- Social Icons -->
                    <div class="pt-2 flex items-center justify-center lg:justify-start gap-4 text-slate-400">
                        <a href="https://github.com/arvg" target="_blank"
                            class="p-2.5 bg-slate-900 rounded-lg border border-slate-800 hover:text-white hover:border-indigo-500 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                                <path d="M9 18c-4.51 2-5-2-7-2" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/ariel-vilchez" target="_blank" class="p-2.5 bg-slate-900 rounded-lg border border-slate-800 hover:text-white hover:border-indigo-500 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
															<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
															<rect width="4" height="12" x="2" y="9" />
															<circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                        <a href="mailto:arvg767@gmail.com" class="p-2.5 bg-slate-900 rounded-lg border border-slate-800 hover:text-white hover:border-indigo-500 transition-all">
													<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
														<rect width="20" height="16" x="2" y="4" rx="2" />
														<path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
													</svg>
                        </a>
                    </div>
                </div>

                <!-- Tarjeta Visual Avatar -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative group w-full max-w-md">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-3xl blur opacity-30 group-hover:opacity-60 transition duration-500">
                        </div>
                        <div class="relative bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 space-y-6">
                            <div
                                class="relative aspect-square w-full rounded-2xl overflow-hidden bg-slate-800 border border-slate-700">
                                <img src="{{ asset('img/arvg.png') }}" alt="Ariel Vilchez" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
                                <div class="hidden absolute bottom-3 left-3 right-3 bg-slate-950/80 backdrop-blur-md border border-slate-700/50 p-3 rounded-xl flex items-center justify-between">
                                    <div class="flex items-center gap-2">
																			<svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
																					<path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z" />
																			</svg>
																			<span class="text-xs font-semibold text-slate-200">Calidad &amp; Rendimiento</span>
                                    </div>
                                    <span
                                        class="text-[10px] bg-indigo-500/20 text-indigo-300 font-mono px-2 py-0.5 rounded">v3.5.0</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-3 pt-2">
                                <div class="bg-slate-950/60 border border-slate-800/80 p-3 rounded-xl text-center">
                                    <div class="text-xl sm:text-2xl font-bold text-white bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                                        7+</div>
                                    <div class="text-[11px] text-slate-400 mt-0.5 font-medium">Años Experiencia</div>
                                </div>
                                <div class="bg-slate-950/60 border border-slate-800/80 p-3 rounded-xl text-center">
																	<div class="text-xl sm:text-2xl font-bold text-white bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent"> 10+</div>
																	<div class="text-[11px] text-slate-400 mt-0.5 font-medium">Proyectos Entregados</div>
                                </div>
                                <div class="hidden bg-slate-950/60 border border-slate-800/80 p-3 rounded-xl text-center">
                                    <div class="text-xl sm:text-2xl font-bold text-white bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">12</div>
                                    <div class="text-[11px] text-slate-400 mt-0.5 font-medium">Empresas e Hitos</div>
                                </div>
                                <div class="hidden bg-slate-950/60 border border-slate-800/80 p-3 rounded-xl text-center">
                                    <div class="text-xl sm:text-2xl font-bold text-white bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">99%</div>
                                    <div class="text-[11px] text-slate-400 mt-0.5 font-medium">Satisfacción</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- LOGOS DE EMPRESAS -->
    <section class="hidden py-12 bg-slate-900/40 border-y border-slate-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-xs font-semibold uppercase tracking-widest text-slate-400 mb-8">
                Empresas y Organizaciones que han confiado en mi trabajo
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center">

                <div class="bg-slate-950/40 border border-slate-800/80 rounded-xl p-4 flex flex-col items-center justify-center text-center hover:border-indigo-500/50 transition-colors group">
                    <span class="font-extrabold tracking-wider text-slate-300 group-hover:text-white text-lg font-mono">TECHCORP</span>
                    <span class="text-xs text-slate-400 mt-1">Lead Frontend Architect</span>
                    <span class="text-[10px] text-indigo-400 font-mono mt-0.5">2023 - Presente</span>
                </div>


            </div>
        </div>
    </section>

    <!-- SECCIÓN EXPERIENCIA -->
    <section id="experiencia" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold tracking-widest text-indigo-400 uppercase">Trayectoria Laboral</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Experiencia Profesional</p>
            <p class="text-slate-400 mt-3 text-base">
                Historial de roles clave en distintas organizaciones liderando proyectos técnicos de alto rendimiento.
            </p>
        </div>

        <div class="relative border-l-2 border-slate-800 ml-4 md:ml-32 space-y-12">

            <!-- Experiencia 1 -->
            <div class="relative pl-6 md:pl-10 group">
							<div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-slate-950 border-2 border-indigo-500 group-hover:bg-indigo-500 group-hover:scale-125 transition-all">
							</div>
							<div class="md:absolute md:-left-36 md:top-1 md:w-28 text-left md:text-right text-xs font-mono font-semibold text-indigo-400 mb-2 md:mb-0"> 2020 — Pres.
							</div>
							<div class="bg-slate-900 border border-slate-800/90 rounded-2xl p-6 hover:border-slate-700 transition-all shadow-lg">
									<div class="flex flex-wrap items-center justify-between gap-2 mb-2">
											<h3 class="text-xl font-bold text-white">Soluciones TEC Péru</h3>
											<span
													class="text-xs bg-slate-800 text-slate-300 px-3 py-1 rounded-full border border-slate-700">Péru / Remoto</span>
									</div>
									<h4 class="text-sm font-semibold text-indigo-300 mb-3">Analista de sistemas</h4>
									<p class="text-slate-300 text-sm leading-relaxed mb-4">Programador full-stack encargado de desarrollar y mantener aplicaciones web utilizando tecnologías modernas en los diferentes ERP de la empresa.</p>

									<div class="hidden space-y-2 mb-5">
											<p class="text-xs font-semibold uppercase text-slate-400 tracking-wider">Logros destacados:</p>
											<ul class="space-y-1.5">
													<li class="text-xs text-slate-300 flex items-start gap-2">
															<svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
																	stroke-width="2" viewBox="0 0 24 24">
																	<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
																	<polyline points="22 4 12 14.01 9 11.01" />
															</svg>
															<span>Migración de arquitectura monolítica a micro-frontends basados en Next.js y
																	TypeScript.</span>
													</li>
													<li class="text-xs text-slate-300 flex items-start gap-2">
															<svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
																	stroke-width="2" viewBox="0 0 24 24">
																	<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
																	<polyline points="22 4 12 14.01 9 11.01" />
															</svg>
															<span>Creación del Design System corporativo utilizado por más de 40
																	desarrolladores.</span>
													</li>
											</ul>
									</div>

									<div class="flex flex-wrap gap-2 pt-2 border-t border-slate-800/80">
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">PHP</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Jquery</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Boostrap</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Codeigniter</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Laravel</span>
									</div>
							</div>
            </div>

						<!-- Experiencia 2 -->
						<div class="relative pl-6 md:pl-10 group">
							<div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-slate-950 border-2 border-indigo-500 group-hover:bg-indigo-500 group-hover:scale-125 transition-all">
							</div>
							<div class="md:absolute md:-left-36 md:top-1 md:w-28 text-left md:text-right text-xs font-mono font-semibold text-indigo-400 mb-2 md:mb-0"> 2019 — 2020.
							</div>
							<div class="bg-slate-900 border border-slate-800/90 rounded-2xl p-6 hover:border-slate-700 transition-all shadow-lg">
									<div class="flex flex-wrap items-center justify-between gap-2 mb-2">
											<h3 class="text-xl font-bold text-white">Ferreteria Kong</h3>
											<span class="text-xs bg-slate-800 text-slate-300 px-3 py-1 rounded-full border border-slate-700">Péru / Presencial</span>
									</div>
									<h4 class="text-sm font-semibold text-indigo-300 mb-3">Analista de sistemas</h4>
									<p class="text-slate-300 text-sm leading-relaxed mb-4">Programador full-stack encargado de desarrollar y mantener un sistema ERP que tiene la empresa.</p>

									<div class="hidden space-y-2 mb-5">
											<p class="text-xs font-semibold uppercase text-slate-400 tracking-wider">Logros destacados:</p>
											<ul class="space-y-1.5">
													<li class="text-xs text-slate-300 flex items-start gap-2">
															<svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
																	stroke-width="2" viewBox="0 0 24 24">
																	<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
																	<polyline points="22 4 12 14.01 9 11.01" />
															</svg>
															<span>Migración de arquitectura monolítica a micro-frontends basados en Next.js y
																	TypeScript.</span>
													</li>
													<li class="text-xs text-slate-300 flex items-start gap-2">
															<svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
																	stroke-width="2" viewBox="0 0 24 24">
																	<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
																	<polyline points="22 4 12 14.01 9 11.01" />
															</svg>
															<span>Creación del Design System corporativo utilizado por más de 40
																	desarrolladores.</span>
													</li>
											</ul>
									</div>

									<div class="flex flex-wrap gap-2 pt-2 border-t border-slate-800/80">
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">PHP</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Jquery</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Boostrap</span>
										<span class="text-[11px] font-mono bg-slate-950 text-indigo-300 px-2.5 py-1 rounded-md border border-slate-800">Codeigniter</span>
									</div>
							</div>
            </div>

        </div>
    </section>

    <!-- SECCIÓN PORTAFOLIO -->
    <section id="portafolio" class="hidden py-20 bg-slate-900/30 border-t border-slate-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-xs font-bold tracking-widest text-indigo-400 uppercase">Trabajos Realizados</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Portafolio de Proyectos</p>
                <p class="text-slate-400 mt-3 text-base">
                    Una selección de soluciones reales creadas para empresas e iniciativas innovadoras.
                </p>
            </div>

            <!-- Filtros de Categoría -->
            <div class="hidden flex flex-wrap justify-center gap-2 mb-12">
                <button onclick="filterProjects('Todos')"
                    class="filter-btn active px-4 py-2 rounded-xl text-sm font-medium transition-all bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">Todos</button>
                <button onclick="filterProjects('Desarrollo Web')"
                    class="filter-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900 text-slate-400 hover:text-white border border-slate-800">Desarrollo
                    Web</button>
                <button onclick="filterProjects('Apps Móviles')"
                    class="filter-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900 text-slate-400 hover:text-white border border-slate-800">Apps
                    Móviles</button>
                <button onclick="filterProjects('UI/UX')"
                    class="filter-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900 text-slate-400 hover:text-white border border-slate-800">UI/UX</button>
                <button onclick="filterProjects('Cloud & Data')"
                    class="filter-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900 text-slate-400 hover:text-white border border-slate-800">Cloud
                    &amp; Data</button>
            </div>

            <!-- Grid Proyectos -->
            <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Se puebla con JavaScript dinámicamente -->
            </div>
        </div>
    </section>

    <!-- MODAL DE DETALLES DEL PROYECTO -->
    <div id="project-modal"
        class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
        <div
            class="bg-slate-900 border border-slate-800 w-full max-w-3xl rounded-3xl overflow-hidden shadow-2xl relative max-h-[90vh] flex flex-col">
            <div class="p-6 border-b border-slate-800 flex items-center justify-between">
                <div>
                    <span id="modal-company" class="text-xs font-mono text-indigo-400 font-semibold">Empresa</span>
                    <h3 id="modal-title" class="text-2xl font-bold text-white">Título del Proyecto</h3>
                </div>
                <button onclick="closeModal()"
                    class="p-2 bg-slate-800 text-slate-400 hover:text-white rounded-full transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-6 overflow-y-auto space-y-6">
                <img id="modal-image" src="" alt=""
                    class="w-full h-64 object-cover rounded-2xl border border-slate-800">
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-400 mb-2">Descripción General
                    </h4>
                    <p id="modal-description" class="text-slate-300 text-sm leading-relaxed"></p>
                </div>
                <div class="bg-emerald-500/10 border border-emerald-500/20 p-4 rounded-xl">
                    <h4 class="text-xs font-bold uppercase text-emerald-400 tracking-wider mb-1">Impacto &amp;
                        Resultados Clave</h4>
                    <p id="modal-metrics" class="text-sm font-semibold text-emerald-300"></p>
                </div>
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-400 mb-3">Stack Tecnológico
                    </h4>
                    <div id="modal-tags" class="flex flex-wrap gap-2"></div>
                </div>
            </div>
            <div class="p-6 border-t border-slate-800 bg-slate-950 flex items-center justify-between">
                <span class="text-xs text-slate-500">Demo disponible bajo solicitud previa</span>
                <button onclick="closeModal()"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2.5 rounded-xl font-semibold text-sm shadow-md">Cerrar
                    Ventana</button>
            </div>
        </div>
    </div>

    <!-- HABILIDADES TÉCNICAS -->
    <section id="habilidades" class="hidden py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold tracking-widest text-indigo-400 uppercase">Dominio Técnico</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Habilidades &amp; Especialidades</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all shadow-md">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-3 bg-indigo-600/10 border border-indigo-500/20 text-indigo-400 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">Frontend Ecosystem</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">React.js</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Next.js</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">TypeScript</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Tailwind
                        CSS</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Vue.js</span>
                </div>
            </div>

            <div
                class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all shadow-md">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-3 bg-indigo-600/10 border border-indigo-500/20 text-indigo-400 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect width="20" height="14" x="2" y="6" rx="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">Backend &amp; Cloud</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Node.js</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Express</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">PostgreSQL</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">AWS</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Docker</span>
                </div>
            </div>

            <div
                class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all shadow-md">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-3 bg-indigo-600/10 border border-indigo-500/20 text-indigo-400 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">Diseño &amp; Herramientas</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">UI/UX
                        Design</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Figma</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Design
                        Systems</span>
                    <span
                        class="bg-slate-950 border border-slate-800 px-3 py-2 rounded-xl text-xs font-medium text-slate-300">Jest
                        / Cypress</span>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section id="testimonios" class="hidden py-20 bg-slate-900/40 border-t border-slate-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-bold tracking-widest text-indigo-400 uppercase">Referencias</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Lo que dicen sobre mí</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 space-y-6 shadow-xl">
                    <p class="text-slate-300 text-sm sm:text-base italic leading-relaxed">
                        "Alex no solo posee un nivel técnico excepcional en desarrollo frontend, sino que entiende a la
                        perfección los objetivos de negocio detrás de cada funcionalidad. Fue pieza clave en la
                        reestructuración de nuestra plataforma."
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-slate-800">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80"
                            alt="Elena Rostova" class="w-12 h-12 rounded-full object-cover border border-slate-700">
                        <div>
                            <h4 class="text-white font-bold text-sm">Elena Rostova</h4>
                            <p class="text-slate-400 text-xs">VP of Product en TechCorp Global</p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 space-y-6 shadow-xl">
                    <p class="text-slate-300 text-sm sm:text-base italic leading-relaxed">
                        "Rápido, perfeccionista y gran comunicador. En FintechX logró llevar la estabilidad de nuestra
                        aplicación móvil al siguiente nivel en tiempo récord."
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-slate-800">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80"
                            alt="Carlos Mendoza" class="w-12 h-12 rounded-full object-cover border border-slate-700">
                        <div>
                            <h4 class="text-white font-bold text-sm">Carlos Mendoza</h4>
                            <p class="text-slate-400 text-xs">CTO en FintechX Financial</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULARIO DE CONTACTO -->
    <section id="contacto" class="hidden py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div class="lg:col-span-5 space-y-6">
                <h2 class="text-xs font-bold tracking-widest text-indigo-400 uppercase">Contacto Directo</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-white">¿Hablamos sobre tu próximo equipo o proyecto?
                </p>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Estoy en búsqueda activa de nuevos retos profesionales. Si tienes una propuesta de empleo o
                    necesitas un consultor técnico, envíame un mensaje.
                </p>
                <div class="space-y-4 pt-4">
                    <div class="flex items-center gap-4 p-4 bg-slate-900 border border-slate-800 rounded-2xl">
                        <div class="p-3 bg-indigo-600/10 text-indigo-400 rounded-xl border border-indigo-500/20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Email Profesional</p>
                            <p class="text-white text-sm font-semibold">contacto@alexvance.dev</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl">
                <form id="contact-form" onsubmit="handleFormSubmit(event)" class="space-y-5">
                    <h3 class="text-xl font-bold text-white mb-4">Enviar un mensaje</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1.5 uppercase">Tu Nombre
                                *</label>
                            <input type="text" required placeholder="Ej. María García"
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1.5 uppercase">Tu Correo
                                *</label>
                            <input type="email" required placeholder="maria@empresa.com"
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5 uppercase">Mensaje *</label>
                        <textarea required rows="4" placeholder="Escribe aquí los detalles..."
                            class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-semibold py-3.5 rounded-xl shadow-lg shadow-indigo-600/25 transition-all">
                        Enviar Mensaje
                    </button>
                </form>
                <div id="form-success" class="hidden text-center py-12 space-y-4">
                    <div
                        class="w-16 h-16 bg-emerald-500/20 text-emerald-400 rounded-full flex items-center justify-center mx-auto border border-emerald-500/30">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">¡Mensaje Enviado con Éxito!</h3>
                    <p class="text-slate-400 text-sm max-w-md mx-auto">Responderé a tu solicitud en un plazo máximo de
                        24 horas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-slate-800/80 bg-slate-950 py-10">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <div
                    class="w-7 h-7 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-xs">
                    AV</div>
                <span class="text-sm font-semibold text-slate-300">Ariel Vilchez — Portafolio Profesional</span>
            </div>
            <p class="text-xs text-slate-500">© 2026 Ariel Vilchez. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- LOGICA JAVASCRIPT -->
    <script>
        // --- DATOS DE PROYECTOS ---
        const projects = [
            {
                id: 1,
                title: "Plataforma SaaS Analytics B2B",
                company: "TechCorp Global",
                category: "Desarrollo Web",
                summary: "Dashboard analítico en tiempo real para visualización de métricas financieras de grandes empresas.",
                description: "Desarrollo integral de una plataforma SaaS que procesa millones de eventos diarios y los muestra mediante gráficos interactivos y alertas automatizadas.",
                image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80",
                tags: ["React", "TypeScript", "Tailwind CSS", "Chart.js"],
                metrics: "Incrementó la conversión de clientes corporativos en un 35%"
            },
            {
                id: 2,
                title: "Banca Móvil & Wallet Digital",
                company: "FintechX Financial",
                category: "Apps Móviles",
                summary: "Aplicación multiplataforma para gestión de activos digitales, transferencia entre divisas y microcréditos.",
                description: "App nativa híbrida enfocado en simplicidad de uso, autenticación biométrica y operaciones financieras instantáneas.",
                image: "https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80",
                tags: ["React Native", "Node.js", "PostgreSQL", "Biometrics"],
                metrics: "+100k descargas en los primeros 6 meses"
            },
            {
                id: 3,
                title: "Sistema de Diseño Enterprise",
                company: "TechCorp Global",
                category: "UI/UX",
                summary: "Biblioteca de componentes accesibles (WCAG AAA) y escalables para múltiples productos web.",
                description: "Ecosistema completo de diseño y código que unificó la identidad de marca de 5 productos de la compañía.",
                image: "https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=800&q=80",
                tags: ["Storybook", "Tailwind CSS", "Figma", "Design Tokens"],
                metrics: "Aceleró la velocidad de desarrollo en un 50%"
            },
            {
                id: 4,
                title: "Motor de Búsqueda impulsado por IA",
                company: "Innovate AI Labs",
                category: "Cloud & Data",
                summary: "Buscador semántico avanzado para documentos corporativos con respuestas generativas instantáneas.",
                description: "Integración de modelos LLM con arquitecturas en la nube para análisis automático de contratos y reportes PDF.",
                image: "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=800&q=80",
                tags: ["Python", "FastAPI", "React", "Vector Database"],
                metrics: "Redujo el tiempo de búsqueda de documentos de 15min a 3s"
            }
        ];

        // RENDERIZAR PROYECTOS
        function renderProjects(filter = 'Todos') {
            const grid = document.getElementById('projects-grid');
            grid.innerHTML = '';

            const filtered = filter === 'Todos' ? projects : projects.filter(p => p.category === filter);

            filtered.forEach(project => {
                const card = document.createElement('div');
                card.className = "bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition-all duration-300 flex flex-col group shadow-lg";
                card.innerHTML = `
                    <div class="relative aspect-video overflow-hidden bg-slate-800">
                        <img src="${project.image}" alt="${project.title}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-3 left-3 bg-slate-950/80 backdrop-blur-md px-3 py-1 rounded-full border border-slate-700 text-xs font-medium text-indigo-300">
                            ${project.company}
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <span class="text-[11px] font-mono font-semibold text-indigo-400 uppercase tracking-wider block mb-1">${project.category}</span>
                            <h3 class="text-xl font-bold text-white group-hover:text-indigo-300 transition-colors">${project.title}</h3>
                            <p class="text-slate-400 text-sm mt-2 line-clamp-2">${project.summary}</p>
                        </div>
                        <div class="bg-emerald-500/10 border border-emerald-500/20 p-2.5 rounded-xl flex items-center gap-2 text-xs font-medium text-emerald-400">
                            <span>✨ ${project.metrics}</span>
                        </div>
                        <button onclick="openModal(${project.id})" class="w-full text-center text-xs font-semibold text-indigo-400 hover:text-indigo-300 py-2 bg-slate-950 hover:bg-slate-800 rounded-xl border border-slate-800 transition-all">
                            Ver Detalles Completos
                        </button>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // FILTRADO DE PROYECTOS
        function filterProjects(cat) {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.className = "filter-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900 text-slate-400 hover:text-white border border-slate-800";
            });
            event.target.className = "filter-btn active px-4 py-2 rounded-xl text-sm font-medium transition-all bg-indigo-600 text-white shadow-lg shadow-indigo-600/30";
            renderProjects(cat);
        }

        // MANEJO DE MODAL
        function openModal(id) {
            const project = projects.find(p => p.id === id);
            if (!project) return;

            document.getElementById('modal-title').innerText = project.title;
            document.getElementById('modal-company').innerText = project.company;
            document.getElementById('modal-description').innerText = project.description;
            document.getElementById('modal-metrics').innerText = project.metrics;
            document.getElementById('modal-image').src = project.image;

            const tagsContainer = document.getElementById('modal-tags');
            tagsContainer.innerHTML = '';
            project.tags.forEach(t => {
                const tagSpan = document.createElement('span');
                tagSpan.className = "text-xs font-mono bg-slate-950 text-indigo-300 px-3 py-1 rounded-lg border border-slate-800";
                tagSpan.innerText = t;
                tagsContainer.appendChild(tagSpan);
            });

            document.getElementById('project-modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('project-modal').classList.add('hidden');
        }

        // DESCARGA CV SIMULADA
        function triggerCVDownload() {
            const toast = document.getElementById('cv-toast');
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 4000);
        }

        // MENÚ MÓVIL
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        document.getElementById('mobile-menu-btn').addEventListener('click', toggleMobileMenu);

        // FORMULARIO DE CONTACTO
        function handleFormSubmit(e) {
            e.preventDefault();
            document.getElementById('contact-form').classList.add('hidden');
            document.getElementById('form-success').classList.remove('hidden');
        }

        // Inicializar proyectos al cargar
        renderProjects();
    </script>
</body>

</html>