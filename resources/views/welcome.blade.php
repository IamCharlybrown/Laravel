<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liga de Superhéroes</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=bangers:400|nunito:400,600,700" rel="stylesheet" />
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #1a1a2e;
                background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234b5563' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
                color: #fff;
                overflow-x: hidden;
            }
            
            .hero-title {
                font-family: 'Bangers', cursive;
                letter-spacing: 2px;
                text-shadow: 3px 3px 0 #ff0000, 6px 6px 0 #000000;
            }
            
            .comic-border {
                border: 3px solid #000;
                box-shadow: 0 0 0 3px #fff, 0 0 0 6px #000;
            }
            
            .hero-button {
                transition: all 0.3s;
                transform-origin: center;
            }
            
            .hero-button:hover {
                transform: scale(1.05) rotate(-2deg);
            }
            
            .stars {
                position: absolute;
                width: 3px;
                height: 3px;
                background: white;
                border-radius: 50%;
                box-shadow: 0 0 10px #fff, 0 0 20px #fff;
                animation: twinkle 4s infinite;
            }
            
            @keyframes twinkle {
                0% { opacity: 0.2; }
                50% { opacity: 1; }
                100% { opacity: 0.2; }
            }
            
            .hero-badge {
                position: absolute;
                top: -20px;
                right: -20px;
                width: 80px;
                height: 80px;
                background: #FFD700;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                transform: rotate(15deg);
                box-shadow: 0 0 0 4px #000;
            }
            
            .city-silhouette {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 150px;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 150'%3E%3Cpath d='M0,150 L0,110 L30,110 L30,80 L60,80 L60,40 L80,40 L80,100 L100,100 L100,60 L120,60 L120,80 L140,80 L140,50 L160,50 L160,70 L180,70 L180,40 L200,40 L200,90 L220,90 L220,60 L240,60 L240,30 L270,30 L270,70 L290,70 L290,40 L310,40 L310,80 L330,80 L330,110 L360,110 L360,70 L380,70 L380,40 L400,40 L400,60 L420,60 L420,20 L440,20 L440,90 L460,90 L460,40 L480,40 L480,70 L500,70 L500,30 L520,30 L520,60 L540,60 L540,100 L560,100 L560,50 L580,50 L580,80 L600,80 L600,30 L620,30 L620,70 L640,70 L640,100 L660,100 L660,60 L680,60 L680,40 L700,40 L700,90 L720,90 L720,50 L740,50 L740,80 L760,80 L760,40 L780,40 L780,30 L800,30 L800,60 L820,60 L820,100 L840,100 L840,70 L860,70 L860,50 L880,50 L880,90 L900,90 L900,110 L920,110 L920,80 L940,80 L940,100 L960,100 L960,60 L980,60 L980,40 L1000,40 L1000,150 Z' fill='%23111827'/%3E%3C/svg%3E");
                background-repeat: repeat-x;
                background-size: 1000px 150px;
                z-index: -1;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- Estrellas decorativas -->
        <div id="stars-container"></div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const starsContainer = document.getElementById('stars-container');
                for (let i = 0; i < 50; i++) {
                    const star = document.createElement('div');
                    star.className = 'stars';
                    star.style.left = `${Math.random() * 100}vw`;
                    star.style.top = `${Math.random() * 60}vh`;
                    star.style.animationDelay = `${Math.random() * 4}s`;
                    starsContainer.appendChild(star);
                }
            });
        </script>
        
        <!-- Silueta de la ciudad -->
        <div class="city-silhouette"></div>
        
        <!-- Contenido principal -->
        <div class="relative min-h-screen flex flex-col items-center justify-center px-4">
            <div class="absolute top-6 right-6 flex space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hero-button bg-yellow-500 text-black font-bold py-2 px-6 rounded-lg comic-border flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Base Secreta
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hero-button bg-blue-600 text-white font-bold py-2 px-6 rounded-lg comic-border flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hero-button bg-red-600 text-white font-bold py-2 px-6 rounded-lg comic-border flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                Registro de Héroes
                            </a>
                        @endif
                    @endauth
                @endif
            </div>

            <div class="max-w-3xl w-full mx-auto bg-gradient-to-br from-blue-900 to-purple-900 p-1 rounded-2xl relative overflow-hidden comic-border">
                <div class="hero-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="bg-gradient-to-br from-blue-800 to-purple-800 p-8 rounded-2xl">
                    <div class="text-center mb-12">
                        <h1 class="hero-title text-6xl mb-4 text-yellow-400">LIGA DE SUPERHÉROES</h1>
                        <p class="text-xl text-blue-200">¡Únete a la elite de los protectores del mundo!</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-blue-900 p-6 rounded-xl comic-border">
                            <h2 class="text-2xl font-bold text-yellow-400 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Poderes Especiales
                            </h2>
                            <ul class="space-y-2 text-white">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Acceso a misiones exclusivas
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Trajes personalizados
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Centro de entrenamiento avanzado
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-red-900 p-6 rounded-xl comic-border">
                            <h2 class="text-2xl font-bold text-yellow-400 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Equipo de Élite
                            </h2>
                            <ul class="space-y-2 text-white">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Colabora con los mejores héroes
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Sistema de mentores
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Red de comunicación mundial
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('register') }}" class="hero-button inline-block bg-yellow-500 text-black text-xl font-bold py-3 px-8 rounded-lg comic-border transform transition hover:scale-105">
                            ¡ÚNETE AHORA!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>