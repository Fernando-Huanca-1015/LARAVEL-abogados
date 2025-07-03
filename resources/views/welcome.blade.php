<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SELEGAL - Servicios Legales</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                        sans: ['Playfair Display', 'serif'],
                        },
                        colors: {
                            'elverde': '#25443b',
                            'elnegro': '#1f1f1f',
                        }
                    }
                }
            }
        </script>
        <!-- Font Awesome para iconos -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <style type="text/tailwindcss">
            @layer utilities {
                .text-shadow {
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                }
                .logo-animation {
                    animation: pulse 2s infinite;
                }
                @keyframes pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.05); }
                    100% { transform: scale(1); }
                }
                .slide-in {
                    animation: slideIn 1s ease-out;
                }
                @keyframes slideIn {
                    from { transform: translateY(50px); opacity: 0; }
                    to { transform: translateY(0); opacity: 1; }
                }
                .card-hover {
                    transition: all 0.3s ease;
                }
                .card-hover:hover {
                    transform: translateY(-8px) scale(1.03);
                    box-shadow: 0 8px 24px rgba(193, 39, 45, 0.12);
                    filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.1));
                }
            }
        </style>
    </head>
    <body class="font-sans pt-[70px] bg-gray-50">
        <!-- nav -->
        <nav class="navbar fixed top-0 w-full bg-elnegro text-white shadow-sm z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-3 ">
                    <a href="#" class="flex items-center gap-2">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-20 h-16 object-contain">
                        <div class="hidden md:block">
                            <span class="text-xl font-bold">SELEGAL</span>
                            <br>
                            <small class="text-sm text-gray-300">a tu SERVICIO</small>
                        </div>
                        <span class="md:hidden font-bold text-lg">SELEGAL</span>
                    </a>
                    <button class="navbar-toggler md:hidden text-white" type="button" id="navbarToggle">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                    <div class="hidden md:flex" id="navbarMenu">
                        <ul class="flex space-x-6">
                            <li><a href="#inicio" class="nav-link active hover:text-green-400 transition">INICIO</a></li>
                            <li><a href="#servicios" class="nav-link hover:text-green-400 transition">SERVICIOS</a></li>
                            <li><a href="#quienes" class="nav-link hover:text-green-400 transition">¿QUIÉNES SOMOS?</a></li>
                            <li><a href="#contacto" class="nav-link hover:text-green-400 transition">CONSÚLTANOS</a></li>
                        </ul>
                    </div>
                    <div>
                        @if (Route::has('login'))
                            <nav class="flex items-center justify-end gap-4">
                                @auth
                                    <a
                                        href="{{ url('/consultas') }}"
                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                    >
                                        Consultas
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                    >
                                        Iniciar Sesión
                                    </a>
                                @endauth
                            </nav>
                        @endif
                    </div>

                </div>
                <div class="hidden md:hidden py-2" id="mobileMenu">
                    <ul class="flex flex-col space-y-2">
                        <li><a href="#inicio" class="block px-3 py-2 hover:bg-gray-800 rounded">INICIO</a></li>
                        <li><a href="#servicios" class="block px-3 py-2 hover:bg-gray-800 rounded">SERVICIOS</a></li>
                        <li><a href="#quienes" class="block px-3 py-2 hover:bg-gray-800 rounded">¿QUIÉNES SOMOS?</a></li>
                        <li><a href="#contacto" class="block px-3 py-2 hover:bg-gray-800 rounded">CONSÚLTANOS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
s
        <!-- inicio -->
        <header id="inicio" class="relative flex items-center justify-center text-center min-h-[100vh] bg-gray-900 overflow-hidden">
            <div class="absolute inset-0 bg-[url('{{ asset('img/abogado.jpg') }}')] bg-cover bg-center opacity-20"></div>
            <div class="container mx-auto px-4 py-20 relative z-10">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="mx-auto w-64 h-56 object-contain logo-animation">
                <h1 class="text-4xl md:text-5xl font-bold text-white mt-6 text-shadow">SELEGAL</h1>
                <p class="text-xl text-white mt-2 text-shadow">Conciliación legal rápida, confidencial y segura</p>
                <p class="text-lg text-white mt-4 mb-8 max-w-2xl mx-auto text-shadow">Ofrecemos asesoría legal profesional, rápida y confiable para resolver tus necesidades jurídicas con eficiencia.</p>
                <a href="https://wa.me/51910507279" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 font-serif">
                    <i class="fab fa-whatsapp text-xl"></i>
                    CONSÚLTANOS
                </a>
            </div>
        </header>

        <!-- tarjetas -->
        <section id="servicios" class="py-12 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl text-center font-bold mb-4 text-green-800">MATERIAS CONCILIABLES</h2>
                <p class="text-lg text-center mb-12 font-serif">APOYO LEGAL CLARO, PROFESIONAL Y DIRECTO.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" >
                    <!-- tarjeta 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.1s">
                        <img src="{{ asset('img/pension.png') }}" class="w-full h-56 object-cover" alt="Pensión de Alimentos">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">PENSIÓN DE ALIMENTOS</h3>
                            <p class="text-gray-700 text-center font-serif">Solución de conflictos relacionados con el cumplimiento o actualización del monto de pensión para hijos menores o mayores con necesidades especiales.</p>
                        </div>
                    </div>

                    <!-- tarjeta 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.2s">
                        <img src="{{ asset('img/visitas.png') }}" class="w-full h-56 object-cover" alt="Régimen de Visitas">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">RÉGIMEN DE VISITAS</h3>
                            <p class="text-gray-700 text-center font-serif">Establecimiento o modificación del cronograma de visitas para el padre, madre u otros familiares, respetando siempre el interés superior del menor.</p>
                        </div>
                    </div>

                    <!-- tarjeta 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.3s">
                        <img src="{{ asset('img/tenencia.png') }}" class="w-full h-56 object-cover" alt="Tenencia de Hijos">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">TENENCIA DE HIJOS</h3>
                            <p class="text-gray-700 text-center font-serif">Definición de la guarda y custodia del menor en casos de separación o divorcio, garantizando un entorno adecuado para su desarrollo.</p>
                        </div>
                    </div>

                    <!-- tarjeta 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.4s">
                        <img src="{{ asset('img/gananciales.png') }}" class="w-full h-56 object-cover" alt="Liquidación de Sociedad de Gananciales">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">LIQUIDACIÓN DE SOCIEDAD DE GANANCIALES</h3>
                            <p class="text-gray-700 text-center font-serif">Repartición equitativa de bienes y obligaciones adquiridos durante la sociedad conyugal.</p>
                        </div>
                    </div>

                    <!-- tarjeta 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.5s">
                        <img src="{{ asset('img/particion.png') }}" class="w-full h-56 object-cover" alt="División y Partición de Bienes">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">DIVISIÓN Y PARTICIÓN DE BIENES</h3>
                            <p class="text-gray-700 text-center font-serif">Acuerdo entre copropietarios para distribuir bienes comunes, como inmuebles, terrenos u otros patrimonios.</p>
                        </div>
                    </div>

                    <!-- tarjeta 6 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.6s">
                        <img src="{{ asset('img/desalojo.png') }}" class="w-full h-56 object-cover" alt="Desalojo / Reivindicación">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">DESALOJO / REIVINDICACIÓN</h3>
                            <p class="text-gray-700 text-center font-serif">Acuerdos para la entrega voluntaria de inmuebles ocupados sin derecho legal, evitando procesos judiciales extensos.</p>
                        </div>
                    </div>
                    <!-- tarjeta 7 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.7s">
                        <img src="{{ asset('img/contrato.png') }}" class="w-full h-56 object-cover" alt="Incumplimiento de Contrato">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">INCUMPLIMIENTO DE CONTRATO</h3>
                            <p class="text-gray-700 text-center font-serif">Solución de conflictos por falta de cumplimiento de obligaciones contractuales en contratos civiles o comerciales.</p>
                        </div>
                    </div>
                    <!-- tarjeta 8 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover slide-in" style="animation-delay: 0.7s">
                        <img src="{{ asset('img/libre.jpg') }}" class="w-full h-56 object-cover" alt="Incumplimiento de Contrato">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-center mb-3">OTROS ASUNTOS SOBRE DERECHOS DE LIBRE DISPOSICIÓN</h3>
                            <p class="text-gray-700 text-center font-serif">Cualquier otro conflicto sobre derechos que las partes puedan ejercer libremente, como deudas, préstamos, acuerdos verbales o escritos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- parte consilta -->
        <section class="py-12 text-white bg-elverde" >
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center md:text-left">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 md:mb-0 ml-4 md:ml-8">TE ESCUCHAMOS, TE ORIENTAMOS Y RESOLVEMOS.</h3>
                </div>
                <div>
                    <a href="https://wa.me/51951016484" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 font-serif">
                        <i class="fab fa-whatsapp text-xl"></i>
                        CONSÚLTANOS
                    </a>
                </div>
                <img src="{{ asset('img/logo2.png') }}" alt="Logo 2" class="hidden md:block w-32 h-32 object-contain">
            </div>
        </section>

        <!-- quenes somos -->
        <section id="quienes" class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl text-center mb-4 font-bold">¿QUIÉNES SOMOS?</h2>
                <p class="text-lg text-center mb-12 font-serif">"Solución, equilibrio, liquidación, escucha, gananciales, acuerdos y legalidad."</p>

                <div class="grid grid-cols-2 md:grid-cols-6 gap-6 text-center">
                    <div class="p-4">
                        <i class="fas fa-lightbulb text-5xl text-black mb-3"></i>
                        <div class="font-medium">Solución</div>
                    </div>
                    <div class="p-4">
                        <i class="fas fa-balance-scale text-5xl text-black mb-3"></i>
                        <div class="font-medium">Equilibrio</div>
                    </div>
                    <div class="p-4">
                        <i class="fas fa-coins text-5xl text-black mb-3"></i>
                        <div class="font-medium">Liquidación</div>
                    </div>
                    <div class="p-4">
                        <i class="fas fa-ear-listen text-5xl text-black mb-3"></i>
                        <div class="font-medium">Escucha</div>
                    </div>
                    <div class="p-4">
                        <i class="fas fa-gem text-5xl text-black mb-3"></i>
                        <div class="font-medium">Gananciales</div>
                    </div>
                    <div class="p-4">
                        <i class="fas fa-book text-5xl text-black mb-3"></i>
                        <div class="font-medium">Legalidad</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contactos -->
        <footer id="contacto" class="py-12 bg-elnegro text-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="ml-4 md:ml-8">
                        <h5 class="text-xl font-bold mb-4">CONTÁCTANOS</h5>
                        <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Av. Moquegua Oeste 747, Of.120</p>
                        <p class="mb-2"><i class="fas fa-phone mr-2"></i> +51 910 507 279</p>
                        <p class="mb-2"><i class="fas fa-envelope mr-2"></i> ConsultariaAbogados@gmail.com</p>
                    </div>
                    <div class="md:text-right">
                        <img src="{{ asset('img/logo2.png') }}" alt="Logo 2" class="inline-block w-40 h-40 object-contain">
                    </div>
                </div>
                <hr class="border-gray-700 my-6">
                <div class="flex flex-col md:flex-row justify-between items-center ml-4 md:ml-8">
                    <span>© 2020 LEGALEX - TODOS LOS DERECHOS RESERVADOS.</span>
                    <div class="mt-4 md:mt-0 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <script>
            // Menú móvil
            document.getElementById('navbarToggle').addEventListener('click', function() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });

            // Animación del logo al hacer scroll
            window.addEventListener('scroll', function() {
                const logo = document.querySelector('.logo-animation');
                const scrollPosition = window.scrollY;

                if (scrollPosition > 100) {
                    logo.classList.remove('logo-animation');
                } else {
                    logo.classList.add('logo-animation');
                }
            });

            // Smooth scrolling para los enlaces del menú
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 70,
                            behavior: 'smooth'
                        });

                        // Cerrar menú móvil si está abierto
                        const mobileMenu = document.getElementById('mobileMenu');
                        if (!mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                        }
                    }
                });
            });

            // Efecto de aparición al hacer scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('slide-in');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.card-hover').forEach(card => {
                observer.observe(card);
            });
        </script>

    </body>
</html>
