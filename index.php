<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moez Missaoui - Développeur Web Full-Stack PHP</title>
    <meta name="description" content="Moez Missaoui, développeur web full-stack spécialisé en PHP, Laravel, CodeIgniter, WordPress et NestJS. Expert en DevOps et passionné par le Machine Learning.">
    <meta name="keywords" content="Moez Missaoui, développeur PHP, Laravel, CodeIgniter, WordPress, NestJS, DevOps, Machine Learning, développeur full-stack">
    <meta name="author" content="Moez Missaoui">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Moez Missaoui - Développeur Web Full-Stack PHP">
    <meta property="og:description" content="Développeur web full-stack spécialisé en PHP avec plus de 7 ans d'expérience. Expert en Laravel, CodeIgniter, WordPress et NestJS.">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Moez Missaoui - Développeur Web Full-Stack PHP">
    <meta property="twitter:description" content="Développeur web full-stack spécialisé en PHP avec plus de 7 ans d'expérience.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.svg">
    <link rel="apple-touch-icon" href="favicon.svg">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#F59E0B'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'float': 'float 3s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3B82F6, #1E40AF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .skill-item {
            transition: all 0.3s ease;
        }
        .skill-item:hover {
            transform: translateX(10px);
            color: #3B82F6;
        }
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .typing-effect {
            border-right: 3px solid #3B82F6;
            white-space: nowrap;
            animation: blink-caret 0.75s step-end infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .typing-effect.visible {
            opacity: 1;
        }
        
        /* Go to Top Button */
        #goToTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3B82F6, #1E40AF);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        #goToTopBtn.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        #goToTopBtn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(59, 130, 246, 0.4);
        }
        
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #3B82F6 }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-transparent fixed w-full top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-white nav-text">Moez Missaoui</h1>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-white nav-text hover:text-blue-300 transition duration-300">À propos</a>
                    <a href="#skills" class="text-white nav-text hover:text-blue-300 transition duration-300">Compétences</a>
                    <a href="#contact" class="text-white nav-text hover:text-blue-300 transition duration-300">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-white nav-text hover:text-blue-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-primary">À propos</a>
                <a href="#skills" class="block px-3 py-2 text-gray-700 hover:text-primary">Compétences</a>
                <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-primary">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-16 bg-gradient-to-br from-primary via-secondary to-purple-900 text-white relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full animate-float"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-accent rounded-full animate-bounce-slow"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-40 right-1/3 w-8 h-8 bg-accent rounded-full animate-float"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="text-center">
                <div class="mb-8 animate-fade-in">
                    <div class="w-40 h-40 mx-auto bg-gradient-to-br from-white to-gray-200 rounded-full flex items-center justify-center mb-8 shadow-2xl animate-float">
                        <i class="fas fa-code text-5xl gradient-text"></i>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-slide-up">
                        <span class="gradient-text bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                            Moez Missaoui
                        </span>
                    </h1>
                    <div class="text-2xl md:text-3xl mb-8 text-blue-100 font-light">
                        <span class="typing-effect inline-block">Développeur Web Full-Stack PHP</span>
                    </div>
                    <p class="text-lg md:text-xl mb-10 text-blue-100 max-w-3xl mx-auto leading-relaxed animate-fade-in">
                        Passionné et expérimenté avec plus de 7 ans dans le développement d'applications web robustes et évolutives. 
                        <span class="text-accent font-semibold">Créateur d'expériences digitales exceptionnelles.</span>
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6 mb-10 animate-slide-up">
                    <a href="https://www.linkedin.com/in/moez-missaoui/" target="_blank" rel="noopener noreferrer" 
                       class="glass-effect text-white px-8 py-4 rounded-xl hover:bg-white hover:text-primary transition-all duration-300 flex items-center transform hover:scale-105 shadow-lg">
                        <i class="fab fa-linkedin mr-3 text-xl"></i> 
                        <span class="font-semibold">LinkedIn</span>
                    </a>
                    <a href="https://github.com/MoezMissaoui" target="_blank" rel="noopener noreferrer" 
                       class="bg-gray-900 bg-opacity-80 text-white px-8 py-4 rounded-xl hover:bg-gray-800 transition-all duration-300 flex items-center transform hover:scale-105 shadow-lg">
                        <i class="fab fa-github mr-3 text-xl"></i> 
                        <span class="font-semibold">GitHub</span>
                    </a>
                </div>
                <a href="#contact" class="inline-block bg-gradient-to-r from-accent to-yellow-500 text-white px-10 py-4 rounded-xl hover:from-yellow-500 hover:to-accent transition-all duration-300 font-bold text-lg transform hover:scale-105 shadow-xl animate-pulse-slow">
                    <i class="fas fa-envelope mr-2"></i>
                    Me contacter
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white opacity-70 hover:opacity-100 transition-opacity">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gradient-to-br from-gray-50 to-white relative">
        <!-- Background decoration -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 right-10 w-32 h-32 bg-primary rounded-full"></div>
            <div class="absolute bottom-10 left-10 w-24 h-24 bg-accent rounded-full"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    <span class="gradient-text">À propos de moi</span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Découvrez mon parcours et ma passion pour le développement web
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="animate-slide-up">
                    <div class="bg-gradient-to-br from-primary via-secondary to-purple-600 p-10 rounded-2xl text-white shadow-2xl transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                        <!-- Decorative elements -->
                        <div class="absolute top-0 right-0 w-20 h-20 bg-white opacity-10 rounded-full -translate-y-10 translate-x-10"></div>
                        <div class="absolute bottom-0 left-0 w-16 h-16 bg-accent opacity-20 rounded-full translate-y-8 -translate-x-8"></div>
                        
                        <div class="relative z-10">
                            <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mb-6 animate-float">
                                <i class="fas fa-user-tie text-3xl text-white"></i>
                            </div>
                            <h3 class="text-3xl font-bold mb-6">Développeur Full-Stack</h3>
                            <p class="text-blue-100 text-lg leading-relaxed">
                                Spécialisé en PHP avec une expertise approfondie dans l'écosystème PHP moderne. 
                                <span class="text-accent font-semibold">7+ années d'expérience</span> dans la création 
                                d'applications web performantes et scalables.
                            </p>
                            
                            <!-- Stats -->
                            <div class="grid grid-cols-2 gap-4 mt-8">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-accent">7+</div>
                                    <div class="text-sm text-blue-200">Années d'expérience</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-accent">50+</div>
                                    <div class="text-sm text-blue-200">Projets réalisés</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-8 animate-fade-in">
                    <div class="flex items-start space-x-6 group">
                        <div class="bg-gradient-to-br from-primary to-secondary text-white p-4 rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-code text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-gray-900 mb-2 group-hover:text-primary transition-colors">Expertise Technique</h4>
                            <p class="text-gray-600 leading-relaxed">
                                PHP est mon langage principal, et j'adore l'écosystème qui l'entoure. 
                                Maîtrise complète des frameworks modernes et des meilleures pratiques.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6 group">
                        <div class="bg-gradient-to-br from-accent to-yellow-500 text-white p-4 rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-gray-900 mb-2 group-hover:text-primary transition-colors">Approche Full-Stack</h4>
                            <p class="text-gray-600 leading-relaxed">
                                Je construis et déploie des applications complètes en utilisant une approche full-stack, 
                                de la configuration serveur à l'implémentation front-end moderne.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6 group">
                        <div class="bg-gradient-to-br from-purple-500 to-pink-500 text-white p-4 rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-brain text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-gray-900 mb-2 group-hover:text-primary transition-colors">Machine Learning</h4>
                            <p class="text-gray-600 leading-relaxed">
                                Exploration active du Machine Learning avec focus sur la Régression, 
                                Classification et Réseaux de Neurones. Intégration d'IA dans les applications web.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6 group">
                        <div class="bg-gradient-to-br from-green-500 to-teal-500 text-white p-4 rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-handshake text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-gray-900 mb-2 group-hover:text-primary transition-colors">Collaboration</h4>
                            <p class="text-gray-600 leading-relaxed">
                                Passionné par les projets open-source impactants, particulièrement 
                                ceux utilisant PHP, Laravel, NestJS ou intégrant des solutions d'IA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-40 h-40 bg-primary rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-20 w-32 h-32 bg-accent rounded-full animate-float"></div>
            <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-secondary rounded-full animate-bounce-slow"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 animate-fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-white via-blue-200 to-accent bg-clip-text text-transparent">
                        Mes Compétences
                    </span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-primary via-accent to-secondary mx-auto mb-6"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Un arsenal technologique moderne pour créer des solutions innovantes
                </p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Core Expertise -->
                <div class="group card-hover">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl shadow-2xl border border-gray-700 relative overflow-hidden">
                        <!-- Glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10">
                            <div class="text-center mb-8">
                                <div class="bg-gradient-to-br from-primary to-secondary text-white p-6 rounded-2xl w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-lg animate-float">
                                    <i class="fas fa-code text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">Expertise Principale</h3>
                                <div class="w-16 h-0.5 bg-primary mx-auto"></div>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-blue-600 p-2 rounded-lg">
                                        <i class="fab fa-php text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">PHP</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-full h-full bg-gradient-to-r from-primary to-secondary animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-red-600 p-2 rounded-lg">
                                        <i class="fas fa-layer-group text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Laravel</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-5/6 h-full bg-gradient-to-r from-red-500 to-red-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-orange-600 p-2 rounded-lg">
                                        <i class="fas fa-fire text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">CodeIgniter</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-4/5 h-full bg-gradient-to-r from-orange-500 to-orange-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-blue-800 p-2 rounded-lg">
                                        <i class="fab fa-wordpress text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">WordPress</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-3/4 h-full bg-gradient-to-r from-blue-500 to-blue-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-green-600 p-2 rounded-lg">
                                        <i class="fab fa-node-js text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">NestJS</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-2/3 h-full bg-gradient-to-r from-green-500 to-green-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DevOps & Tools -->
                <div class="group card-hover">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl shadow-2xl border border-gray-700 relative overflow-hidden">
                        <!-- Glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10">
                            <div class="text-center mb-8">
                                <div class="bg-gradient-to-br from-accent to-yellow-500 text-white p-6 rounded-2xl w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-lg animate-float">
                                    <i class="fas fa-tools text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">DevOps & Outils</h3>
                                <div class="w-16 h-0.5 bg-accent mx-auto"></div>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-blue-500 p-2 rounded-lg">
                                        <i class="fab fa-docker text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Docker</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-5/6 h-full bg-gradient-to-r from-blue-400 to-blue-500 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-orange-500 p-2 rounded-lg">
                                        <i class="fab fa-gitlab text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">GitLab CI/CD</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-3/4 h-full bg-gradient-to-r from-orange-400 to-orange-500 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-orange-500 p-2 rounded-lg">
                                        <i class="fab fa-gitlab text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">GitLab Runner</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-3/4 h-full bg-gradient-to-r from-orange-400 to-orange-500 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-purple-600 p-2 rounded-lg">
                                        <i class="fas fa-server text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Vagrant</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-2/3 h-full bg-gradient-to-r from-purple-500 to-purple-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-gray-600 p-2 rounded-lg">
                                        <i class="fab fa-git-alt text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Git</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-full h-full bg-gradient-to-r from-gray-400 to-gray-500 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exploring & Learning -->
                <div class="group card-hover">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl shadow-2xl border border-gray-700 relative overflow-hidden">
                        <!-- Glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10">
                            <div class="text-center mb-8">
                                <div class="bg-gradient-to-br from-purple-500 to-pink-500 text-white p-6 rounded-2xl w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-lg animate-float">
                                    <i class="fas fa-lightbulb text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">En Exploration</h3>
                                <div class="w-16 h-0.5 bg-purple-500 mx-auto"></div>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-pink-600 p-2 rounded-lg">
                                        <i class="fas fa-brain text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Machine Learning</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-1/2 h-full bg-gradient-to-r from-pink-500 to-pink-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-indigo-600 p-2 rounded-lg">
                                        <i class="fas fa-chart-line text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Régression & Classification</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-2/5 h-full bg-gradient-to-r from-indigo-500 to-indigo-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-teal-600 p-2 rounded-lg">
                                        <i class="fas fa-network-wired text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Réseaux de Neurones</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-1/3 h-full bg-gradient-to-r from-teal-500 to-teal-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-emerald-600 p-2 rounded-lg">
                                        <i class="fas fa-robot text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Ollama (LLM local)</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-2/5 h-full bg-gradient-to-r from-emerald-500 to-emerald-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                    <div class="bg-emerald-600 p-2 rounded-lg">
                                        <i class="fas fa-robot text-white text-lg"></i>
                                    </div>
                                    <span class="text-gray-200 font-medium">Hugging Face</span>
                                    <div class="ml-auto">
                                        <div class="w-16 h-2 bg-gray-600 rounded-full overflow-hidden">
                                            <div class="w-2/5 h-full bg-gradient-to-r from-emerald-500 to-emerald-600 animate-pulse"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        <!-- Background decorations -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-32 h-32 bg-primary rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-10 right-10 w-24 h-24 bg-accent rounded-full animate-float"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-secondary rounded-full animate-bounce-slow"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 animate-fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-gray-900 via-primary to-accent bg-clip-text text-transparent">
                        Contactez-moi
                    </span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-primary via-accent to-secondary mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Vous avez un projet en tête ? N'hésitez pas à me contacter pour discuter de Laravel, CodeIgniter, WordPress, NestJS, Docker, CI/CD, ou de mon parcours en ML !
                </p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Email -->
                <div class="group text-center animate-slide-up">
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 relative overflow-hidden">
                        <!-- Hover glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10">
                            <div class="bg-gradient-to-br from-primary to-blue-600 text-white p-6 rounded-2xl w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-envelope text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Email</h3>
                            <div class="w-16 h-0.5 bg-primary mx-auto mb-4"></div>
                            <a href="mailto:missaouimoez17@gmail.com" class="inline-block bg-gradient-to-r from-primary to-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Envoyer un email
                            </a>
                            <p class="text-gray-500 mt-3 text-sm">missaouimoez17@gmail.com</p>
                        </div>
                    </div>
                </div>
                
                <!-- LinkedIn -->
                <div class="group text-center animate-slide-up" style="animation-delay: 0.2s;">
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 relative overflow-hidden">
                        <!-- Hover glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10">
                            <div class="bg-gradient-to-br from-blue-600 to-blue-700 text-white p-6 rounded-2xl w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-linkedin text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">LinkedIn</h3>
                            <div class="w-16 h-0.5 bg-blue-600 mx-auto mb-4"></div>
                            <a href="https://www.linkedin.com/in/moez-missaoui/" target="_blank" rel="noopener noreferrer" class="inline-block bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-linkedin mr-2"></i>
                                Voir le profil
                            </a>
                            <p class="text-gray-500 mt-3 text-sm">Réseau professionnel</p>
                        </div>
                    </div>
                </div>
                
                <!-- GitHub -->
                <div class="group text-center animate-slide-up" style="animation-delay: 0.4s;">
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 relative overflow-hidden">
                        <!-- Hover glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-gray-800/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10">
                            <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white p-6 rounded-2xl w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-github text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">GitHub</h3>
                            <div class="w-16 h-0.5 bg-gray-800 mx-auto mb-4"></div>
                            <a href="https://github.com/MoezMissaoui" target="_blank" rel="noopener noreferrer" class="inline-block bg-gradient-to-r from-gray-800 to-gray-900 text-white px-6 py-3 rounded-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-github mr-2"></i>
                                Voir les projets
                            </a>
                            <p class="text-gray-500 mt-3 text-sm">Code & projets</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Call to action -->
            <div class="text-center mt-16 animate-fade-in">
                <div class="bg-gradient-to-r from-primary via-accent to-secondary p-8 rounded-2xl shadow-2xl max-w-4xl mx-auto">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">
                        Prêt à démarrer votre projet ?
                    </h3>
                    <p class="text-blue-100 text-lg mb-6 max-w-2xl mx-auto">
                        Transformons vos idées en solutions digitales innovantes. Contactez-moi dès aujourd'hui pour discuter de votre projet.
                    </p>
                    <a href="mailto:missaouimoez17@gmail.com" class="inline-block bg-white text-primary px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                        <i class="fas fa-rocket mr-2"></i>
                        Commençons maintenant
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white py-16 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 bg-primary rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-10 right-10 w-24 h-24 bg-accent rounded-full animate-float"></div>
            <div class="absolute top-1/2 left-1/2 w-20 h-20 bg-secondary rounded-full animate-bounce-slow"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <!-- Name with gradient -->
                <h3 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-white via-blue-200 to-accent bg-clip-text text-transparent">
                        Moez Missaoui
                    </span>
                </h3>
                
                <!-- Subtitle -->
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Développeur Full-Stack passionné par l'innovation technologique et l'exploration de nouvelles solutions
                </p>
                
                <!-- Social links with modern design -->
                <div class="flex justify-center space-x-8 mb-12">
                    <a href="mailto:missaouimoez17@gmail.com" class="group">
                        <div class="bg-gradient-to-br from-primary to-blue-600 p-4 rounded-2xl shadow-lg group-hover:scale-110 group-hover:shadow-2xl transition-all duration-300">
                            <i class="fas fa-envelope text-2xl text-white"></i>
                        </div>
                        <span class="block mt-2 text-sm text-gray-400 group-hover:text-white transition-colors">Email</span>
                    </a>
                    
                    <a href="https://www.linkedin.com/in/moez-missaoui/" target="_blank" rel="noopener noreferrer" class="group">
                        <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 rounded-2xl shadow-lg group-hover:scale-110 group-hover:shadow-2xl transition-all duration-300">
                            <i class="fab fa-linkedin text-2xl text-white"></i>
                        </div>
                        <span class="block mt-2 text-sm text-gray-400 group-hover:text-white transition-colors">LinkedIn</span>
                    </a>
                    
                    <a href="https://github.com/MoezMissaoui" target="_blank" rel="noopener noreferrer" class="group">
                        <div class="bg-gradient-to-br from-gray-700 to-gray-800 p-4 rounded-2xl shadow-lg group-hover:scale-110 group-hover:shadow-2xl transition-all duration-300">
                            <i class="fab fa-github text-2xl text-white"></i>
                        </div>
                        <span class="block mt-2 text-sm text-gray-400 group-hover:text-white transition-colors">GitHub</span>
                    </a>
                </div>
                
                <!-- Skills showcase -->
                <div class="mb-12">
                    <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
                        <span class="bg-gradient-to-r from-primary/20 to-primary/30 text-primary-light px-4 py-2 rounded-full text-sm font-medium border border-primary/30">
                            PHP
                        </span>
                        <span class="bg-gradient-to-r from-red-500/20 to-red-600/30 text-red-300 px-4 py-2 rounded-full text-sm font-medium border border-red-500/30">
                            Laravel
                        </span>
                        <span class="bg-gradient-to-r from-blue-500/20 to-blue-600/30 text-blue-300 px-4 py-2 rounded-full text-sm font-medium border border-blue-500/30">
                            Docker
                        </span>
                        <span class="bg-gradient-to-r from-green-500/20 to-green-600/30 text-green-300 px-4 py-2 rounded-full text-sm font-medium border border-green-500/30">
                            NestJS
                        </span>
                        <span class="bg-gradient-to-r from-purple-500/20 to-purple-600/30 text-purple-300 px-4 py-2 rounded-full text-sm font-medium border border-purple-500/30">
                            Machine Learning
                        </span>
                        <span class="bg-gradient-to-r from-orange-500/20 to-orange-600/30 text-orange-300 px-4 py-2 rounded-full text-sm font-medium border border-orange-500/30">
                            CI/CD
                        </span>
                    </div>
                </div>
                
                <!-- Divider with gradient -->
                <div class="w-full h-px bg-gradient-to-r from-transparent via-gray-600 to-transparent mb-8"></div>
                
                <!-- Copyright with modern styling -->
                <div class="flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">
                    <p class="mb-4 md:mb-0">
                        &copy; <?= date("Y") ?> Moez Missaoui. Tous droits réservés.
                    </p>
                    <p class="flex items-center">
                        <span class="mr-2">Fait avec</span>
                        <i class="fas fa-heart text-red-500 animate-pulse mx-1"></i>
                        <span class="ml-2">et beaucoup de café ☕</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    // Add staggered animation for child elements
                    const children = entry.target.querySelectorAll('.animate-slide-up');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.style.opacity = '1';
                            child.style.transform = 'translateY(0)';
                        }, index * 200);
                    });
                }
            });
        }, observerOptions);
        
        // Observe sections for animations
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Typing effect for hero title
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }
        
        // Initialize typing effect
        window.addEventListener('load', () => {
            const titleElement = document.querySelector('.typing-effect');
            if (titleElement) {
                const originalText = titleElement.textContent;
                setTimeout(() => {
                    titleElement.classList.add('visible');
                    typeWriter(titleElement, originalText, 150);
                }, 1000);
            }
        });

        // Parallax effect for background elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-element');
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });

        // Enhanced navigation scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            const navTexts = document.querySelectorAll('.nav-text');
            
            if (window.scrollY > 100) {
                nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-lg');
                nav.classList.remove('bg-transparent');
                
                // Change text colors to dark
                navTexts.forEach(text => {
                    text.classList.remove('text-white');
                    text.classList.add('text-gray-700');
                });
            } else {
                nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-lg');
                nav.classList.add('bg-transparent');
                
                // Change text colors to white
                navTexts.forEach(text => {
                    text.classList.remove('text-gray-700');
                    text.classList.add('text-white');
                });
            }
        });

        // Card hover effects
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
                this.style.transition = 'all 0.3s ease';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Skill items hover effects
        document.querySelectorAll('.skill-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(10px)';
                this.style.transition = 'all 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });



        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
            
            // Initialize all animations
            setTimeout(() => {
                document.querySelectorAll('.animate-slide-up').forEach((el, index) => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(30px)';
                    el.style.transition = 'all 0.6s ease';
                    
                    // Animate elements to visible state
                    setTimeout(() => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }, index * 200 + 300);
                });
            }, 100);
        });

        // Go to Top Button functionality
        document.addEventListener('DOMContentLoaded', () => {
            const goToTopBtn = document.getElementById('goToTopBtn');
            
            if (goToTopBtn) {
                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > 200) {
                        goToTopBtn.classList.add('show');
                    } else {
                        goToTopBtn.classList.remove('show');
                    }
                });
                
                goToTopBtn.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
    
    <!-- Go to Top Button -->
    <button id="goToTopBtn" title="Retour en haut">
        <i class="fas fa-chevron-up"></i>
    </button>
</body>
</html>