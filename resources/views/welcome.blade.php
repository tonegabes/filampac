@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50">
        <!-- Navigation -->
        <nav class="bg-white/80 backdrop-blur-sm shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <h1 class="text-xl font-bold text-slate-900">{{ config('app.name') }}</h1>
                    </div>                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ route('filament.admin.pages.dashboard') }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('filament.admin.auth.login') }}"
                               class="text-slate-600 hover:text-slate-900 font-medium transition-colors">
                                Login
                            </a>
                            <a href="{{ route('filament.admin.auth.login') }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Entrar
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center animate-fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                        Laravel Filament 4
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Starter Kit</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-slate-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Um kit completo e poderoso para iniciar sua aplicação Laravel com Filament Admin Panel,
                        repleto de recursos pré-construídos e melhores práticas.
                    </p>                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @guest
                            <a href="{{ route('filament.admin.auth.login') }}"
                               class="btn-primary inline-flex items-center justify-center">
                                <i class="ph ph-rocket-launch mr-2"></i>
                                Começar Agora
                            </a>
                        @else
                            <a href="{{ route('filament.admin.pages.dashboard') }}"
                               class="btn-primary inline-flex items-center justify-center">
                                <i class="ph ph-house mr-2"></i>
                                Ir para Dashboard
                            </a>
                        @endguest
                        <a href="#features"
                           class="btn-secondary inline-flex items-center justify-center">
                            <i class="ph ph-list mr-2"></i>
                            Ver Recursos
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Grid -->
        <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                        Recursos Principais
                    </h2>
                    <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                        Tudo que você precisa para construir aplicações modernas e robustas
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Authentication -->
                    <div class="bg-slate-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph ph-shield-check text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Autenticação Completa</h3>
                        <p class="text-slate-600">
                            Sistema de autenticação multi-níveis com LDAP, email/senha, recuperação de senha e controle de acesso baseado em funções.
                        </p>
                    </div>

                    <!-- Admin Panel -->
                    <div class="bg-slate-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph ph-layout text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Painel Admin Filament</h3>
                        <p class="text-slate-600">
                            Interface administrativa moderna e responsiva com dashboard personalizável, gestão de usuários e sistema de permissões.
                        </p>
                    </div>

                    <!-- Developer Tools -->
                    <div class="bg-slate-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph ph-code text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Ferramentas de Dev</h3>
                        <p class="text-slate-600">
                            Laravel Debugbar, PHPStan, PHP CS Fixer, testes automatizados e ferramentas de monitoramento integradas.
                        </p>
                    </div>

                    <!-- Performance -->
                    <div class="bg-slate-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph ph-lightning text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Alta Performance</h3>
                        <p class="text-slate-600">
                            Configurações otimizadas, cache inteligente, autoloader configurado e recursos de segurança built-in.
                        </p>
                    </div>

                    <!-- Activity Logging -->
                    <div class="bg-slate-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph ph-activity text-indigo-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Log de Atividades</h3>
                        <p class="text-slate-600">
                            Sistema completo de auditoria e logging de atividades para rastreamento de ações dos usuários.
                        </p>
                    </div>

                    <!-- Modern UI -->
                    <div class="bg-slate-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph ph-palette text-pink-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Interface Moderna</h3>
                        <p class="text-slate-600">
                            Tailwind CSS, Phosphor Icons, design responsivo e componentes Blade reutilizáveis para uma experiência excepcional.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                        Stack Tecnológico
                    </h2>
                    <p class="text-xl text-slate-600">
                        Construído com as melhores tecnologias modernas
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center mx-auto mb-3">
                            <i class="ph ph-code text-red-500 text-2xl"></i>
                        </div>
                        <p class="font-semibold text-slate-900">PHP 8.2+</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center mx-auto mb-3">
                            <i class="ph ph-gear text-red-600 text-2xl"></i>
                        </div>
                        <p class="font-semibold text-slate-900">Laravel 12</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center mx-auto mb-3">
                            <i class="ph ph-layout text-orange-500 text-2xl"></i>
                        </div>
                        <p class="font-semibold text-slate-900">Filament 4</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center mx-auto mb-3">
                            <i class="ph ph-palette text-blue-500 text-2xl"></i>
                        </div>
                        <p class="font-semibold text-slate-900">Tailwind CSS</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center mx-auto mb-3">
                            <i class="ph ph-database text-green-600 text-2xl"></i>
                        </div>
                        <p class="font-semibold text-slate-900">MySQL/Postgres</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center mx-auto mb-3">
                            <i class="ph ph-cloud text-red-500 text-2xl"></i>
                        </div>
                        <p class="font-semibold text-slate-900">Redis</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Start -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8">
                    Pronto para começar?
                </h2>
                <p class="text-xl text-slate-600 mb-8">
                    Configure seu projeto em menos de 5 minutos com nossa documentação completa
                </p>

                <div class="bg-slate-900 rounded-lg p-6 text-left mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-slate-400 font-mono text-sm">Terminal</span>
                        <button onclick="copyToClipboard()" class="text-slate-400 hover:text-white transition-colors">
                            <i class="ph ph-copy"></i>
                        </button>
                    </div>
                    <pre class="text-green-400 font-mono text-sm overflow-x-auto"><code id="install-code">git clone [repository-url] meu-projeto
cd meu-projeto
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed</code></pre>
                </div>                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @guest
                        <a href="{{ route('filament.admin.auth.login') }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-colors inline-flex items-center justify-center">
                            <i class="ph ph-sign-in mr-2"></i>
                            Entrar no Sistema
                        </a>
                    @else
                        <a href="{{ route('filament.admin.pages.dashboard') }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-colors inline-flex items-center justify-center">
                            <i class="ph ph-house mr-2"></i>
                            Acessar Dashboard
                        </a>
                    @endguest
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-300 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="md:col-span-2">
                        <h3 class="text-white font-bold text-lg mb-4">{{ config('app.name') }}</h3>
                        <p class="text-slate-400 mb-4">
                            Starter kit Laravel com Filament para acelerar o desenvolvimento de suas aplicações.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Recursos</h4>
                        <ul class="space-y-2">
                            <li><span class="text-slate-400">Documentação Completa</span></li>
                            <li><span class="text-slate-400">Guia de Deploy</span></li>
                            <li><span class="text-slate-400">API Development</span></li>
                            <li><span class="text-slate-400">Docker Support</span></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Tecnologias</h4>
                        <ul class="space-y-2">
                            <li><span class="text-slate-400">Laravel 12</span></li>
                            <li><span class="text-slate-400">Filament 3</span></li>
                            <li><span class="text-slate-400">PHP 8.2+</span></li>
                            <li><span class="text-slate-400">Tailwind CSS</span></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-slate-700 mt-8 pt-8 text-center">
                    <p class="text-slate-400">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. Construído com Laravel e Filament.
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        function copyToClipboard() {
            const code = document.getElementById('install-code').textContent;
            navigator.clipboard.writeText(code).then(() => {
                // Opcional: mostrar feedback visual
                const button = event.target.closest('button');
                const icon = button.querySelector('i');
                icon.className = 'ph ph-check';
                setTimeout(() => {
                    icon.className = 'ph ph-copy';
                }, 2000);
            });
        }

        // Smooth scroll para anchors
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endsection
