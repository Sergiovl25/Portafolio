<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f9004d" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:title" content="Sv-Arts" />
    <meta property="og:url" content="https://www.svartds.com.mx/" />
    <meta property="og:image" content="img/logo.png" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Sv-Art</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    <link rel="stylesheet" href="{{asset('css/spinner.css')}}">
</head>

<body class="bg-jdblack font-poppins">
    <header>
        <nav class="fixed z-20 top-0 left-0 right-0 bg-jdwhite backdrop-blur-sm blur-[4px] filter-none py-2 shadow-sm">
            <div class="mx-auto flex justify-between items-center px-6 md:px-9 lg:px-16">
                <a class="text-jdred uppercase font-bold text-xl flex justify-center items-center" href="index.html">
                    <picture>
                        <source loading="lazy" srcset="img/logo.png" type="image/webp">
                        <img width="250" height="250" loading="lazy" src="{{asset('img/logo.png')}}" alt="Logotipo" class="h-8 w-8 rounded-full">
                    </picture>
                    <p>Sv-Art<span class="text-white lowercase font-light"></span></p>
                </a>
                <ul class="relative hidden md:flex space-x-6">
                    <li><a class="nav-link transition-{color} duration-300 ease-in" href="#home">Inicio</a></li>
                    <li><a class="nav-link transition-{color} duration-300 ease-in" href="#sobremi">Sobre Mí</a></li>
                    <li><a class="nav-link transition-{color} duration-300 ease-in" href="#services">Servicios</a></li>
                    <li><a class="nav-link transition-{color} duration-300 ease-in" href="#portfolio">Portafolio</a>
                    </li>
                    <!--<li><a class="nav-link transition-{color} duration-300 ease-in" href="#blog">Blog</a></li>-->
                    <li><a class="nav-link transition-{color} duration-300 ease-in" href="#contact">Contacto</a></li>
                </ul>

                <!-- Mobile menu icon -->
                <button id="mobile-icon" class="md:hidden flex">
                    <i class="fa-solid fa-bars text-white" id="bars"></i>
                </button>
                <!-- Mobile menu icon end-->

            </div>

            <!-- Mobile menu -->
            <div class="md:hidden flex justify-center w-72">
                <div id="mobile-menu" class="mobile-menu absolute top-[48px] w-72 z-40">
                    <ul class="bg-jdblack shadow-lg leading-9 font-bold h-screen py-7">
                        <li class="font-thin transition-{color} duration-300 ease-in text-gray-400 hover:text-gray-600 pl-4">
                            <a href="#home" class="block pl-7 py-2.5 uppercase">Inicio</a>
                        </li>
                        <li class="font-thin transition-{color} duration-300 ease-in text-gray-400 hover:text-gray-600 pl-4">
                            <a href="#services" class="block pl-7 py-2.5 uppercase">Sobre Mí</a>
                        </li>
                        <li class="font-thin transition-{color} duration-300 ease-in text-gray-400 hover:text-gray-600 pl-4">
                            <a href="#services" class="block pl-7 py-2.5 uppercase">Servicios</a>
                        </li>
                        <li class="font-thin transition-{color} duration-300 ease-in text-gray-400 hover:text-gray-600 pl-4">
                            <a href="#portfolio" class="block pl-7 py-2.5 uppercase">Portafolio</a>
                        </li>
                        <li class="font-thin transition-{color} duration-300 ease-in text-gray-400 hover:text-gray-600 pl-4">
                            <a href="#contact" class="block pl-7 py-2.5 uppercase">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Mobile menu end-->
        </nav> <!-- Nav end-->
    </header> <!-- Header end-->
    <main class="mx-auto px-5 md:px-9 lg:px-16 xl:px-36 2xl:px-52">
        <section id="home" class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 lg:gap-20 items-center pt-24 xl:pt-32 2xl:pt-44">
            <div class="order-1 mt-10 md:mt-0">
                <div class="border-l-4 border-jdred relative">
                    <div class="pl-3 5">
                        <span class="text-jdred font-semibold text-lg"> Hola 👋, mi nombre es </span>
                        <h2 class="text-white text-3xl lg:text-4xl xl:text-5xl font-bold">Sergio Pat</h2>
                        <p class="text-gray-400 2xl:text-xl leading-relaxed">Soy un Ing. Industrial y desarrollador web</p>
                    </div>
                </div>
                <div class="mt-12 flex">

                    <span class="relative inline-flex">
                        <button download="" type="button" class="inline-flex items-center px-3 font-semibold leading-6 text-sm shadow rounded-md transition ease-in-out duration-150 text-white bg-zinc-900 hover:bg-opacity-50">
                            <i class="fas fa-download mr-2"></i>
                            Descargar Cv
                        </button>
                        <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-jdred opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-jdred"></span>
                        </span>
                    </span>

                    <a role="button" target="_blank" aria-label="github" href="https://github.com/Sergiovl25" class="flex items-center justify-center ml-2 w-9 h-9 rounded-md transition ease-in-out duration-150 text-white bg-zinc-900 hover:bg-opacity-50">
                        <i class="fab fa-github text-lg"></i>
                    </a>
                    <a role="button" target="_blank" aria-label="codepen" href="#" class="flex items-center justify-center ml-2 w-9 h-9 rounded-md transition ease-in-out duration-150 text-white bg-zinc-900 hover:bg-opacity-50">
                        <i class="fab fa-codepen text-lg"></i>
                    </a>
                </div>
            </div>


            <div class="relative order-2">
                <div class="bg-slate-800 flex-none border-b border-slate-500/30">
                    <div class="flex items-center h-8 space-x-1.5 px-3">
                        <div class="w-2.5 h-2.5 bg-pink-600 rounded-full"></div>
                        <div class="w-2.5 h-2.5 bg-yellow-600 rounded-full"></div>
                        <div class="w-2.5 h-2.5 bg-green-600 rounded-full"></div>
                    </div>
                </div>
                <div class="relative">
                    <pre class="font-light block bg-slate-800 text-jdred py-2 overflow-x-auto">
    const data = {
        <span class="text-teal-400">Correo:</span> <span class="text-amber-400">"sergiopat@svartds.com.mx"</span>,
        <span class="text-teal-400">Fecha de Nacimiento:</span> <span class="text-amber-400">"Noviembre, 1994"</span>,
        <span class="text-teal-400">Numero:</span> <span class="text-amber-400">"+52 983 254 3599"</span>,
        <span class="text-teal-400">Ubicacion:</span> <span class="text-amber-400">"Yucatán"</span>,
        };
</pre>
                </div>
                <ul class="">
                    <li class="animate-floating flex items-center justify-center absolute right-14" title="react"><img width="250" height="250" src="{{asset('img/html.svg')}}" alt="react logo" loading="lazy" class="h-9 w-9">
                    </li>
                    <li class="animate-floating flex items-center justify-center absolute left-14" title="react"><img width="250" height="250" src="{{asset('img/sass.svg')}}" alt="react logo" loading="lazy" class="h-9 w-9">
                    </li>
                    <li class="flex items-center justify-center absolute right-0 top-0 animate-floating2" title="sass"><img width="250" height="250" src="{{asset('img/css.svg')}}" alt="sass logo" loading="lazy" class="h-9 w-9">
                    </li>
                    <li class="flex items-center justify-center absolute left-0 -top-8 animate-floating" title="tailwind"><img width="250" height="250" src="{{asset('img/js.svg')}}" alt="tailwind logo" loading="lazy" class="h-9 w-9">
                    </li>
                </ul>
            </div>
        </section>

        <section id="sobremi" class="relative py-10 md:py-14 lg:py-16">
            <div class="flex w-full min-h-screen justify-center items-center">
                <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 bg-zinc-900 w-full max-w-4xl p-8 sm:p-12 rounded-xl shadow-lg text-white overflow-hidden">
                    <div class="flex flex-col space-y-8 justify-evenly">
                        <div class="inline-block relative mb-4 bg-gradient-to-r from-rose-900 shadow-2xl shadow-pink-500/30 rounded-md py-1 px-3">
                            <h1 class="pl-2 font-semibold uppercase text-xl">Sobre Mí</h1>
                        </div>
                        <div>
                            <p class="pt-2 text-indigo-100 text-sm">Soy un ing. industrial apasionado por la tecnologia, el diseño y la innovacion. Actuamente me encuentro aprendiendo desarrollo web. Doy mantenimiento preventivo y corerectivo a equipos de computo y celulares<br>
                                <br>Soy un persona ordenada, entusiasta, responsable, puntual, ordena y con muchas ganas de aportar mis ideas y aprender de los demas, manejo metodologia scrum. He trabajado bajo presion, me adapto a las situaciones cambiantes en cada empresa y he sido comprometido con cada una de ellas en lo laboral y social
                            </p>
                        </div>
                        <div class="flex flex-col space-y-6">
                            <div class="inline-flex space-x-2 items-center">
                                <i class="text-jdred fa-solid fa-location-dot"></i>
                                <span>Merida, Yucatán</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="relative py-10 md:py-14 lg:py-16">
            <div class="flex flex items-center justify-center mt-12">
                <div class="inline-block relative mb-4 bg-gradient-to-r from-rose-900 shadow-2xl shadow-pink-500/30 rounded-md py-1 px-3">
                    <h1 class="pl-2 font-semibold uppercase text-xl relative text-white">Servicios</h1>
                </div>
            </div>
            <ol class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
                <li class="flex">
                    <img class="h-11 w-11 flex-none overflow-visible" loading="lazy" width="200" height="300" src="{{asset('img/services/icon-web.svg')}}" alt="icon services">
                    <div class="ml-6">
                        <h2 class="flex items-center text-sm font-semibold leading-6"><span class="text-white">01</span><span class="ml-2 h-4 w-px bg-slate-300"></span><span class="ml-2 text-white">Diseño web</span></h2>
                        <p class="mt-2 text-sm leading-7 text-gray-400">Te ayudamos con el diseño de tu pagina web, tu lo imaginas y nosotros lo hacemos realidad.</p>
                    </div>
                </li>
                <li class="flex">
                    <img class="h-11 w-11 flex-none overflow-visible" loading="lazy" width="200" height="300" src="{{asset('img/services/icon-dev.svg')}}" alt="icon services">
                    <div class="ml-6">
                        <h2 class="flex items-center text-sm font-semibold leading-6"><span class="text-white">02</span><span class="ml-2 h-4 w-px bg-slate-300"></span><span class="ml-2 text-white">Desarrollo web</span></h2>
                        <p class="mt-2 text-sm leading-7 text-gray-400">Tienes una idea de negocio, quieres vender en linea o quieres tener tu blog, contactanos y nosotros realizamos el desarrollo web.</p>
                    </div>
                </li>
                <!--<li class="flex">
                    <img class="h-11 w-11 flex-none overflow-visible" loading="lazy" width="200" height="300" src="img/services/icon-mobile.svg" alt="icon services">
                    <div class="ml-6">
                        <h2 class="flex items-center text-sm font-semibold leading-6"><span class="text-white">03</span><span class="ml-2 h-4 w-px bg-slate-300"></span><span class="ml-2 text-white">Aplicaciones movil</span></h2>
                        <p class="mt-2 text-sm leading-7 text-gray-400">Quieres tener tu propia aplicacion movil, contactanos y nosotros nos encargamos de hacerlo realidad.</p>
                    </div>
                </li>-->
                <li class="flex">
                    <img class="h-11 w-11 flex-none overflow-visible" loading="lazy" width="200" height="300" src="{{asset('img/services/icon-rocket.svg')}}" alt="icon services">
                    <div class="ml-6">
                        <h2 class="flex items-center text-sm font-semibold leading-6"><span class="text-white">04</span><span class="ml-2 h-4 w-px bg-slate-300"></span><span class="ml-2 text-white">Reparación de equipo de computo y celulares</span></h2>
                        <p class="mt-2 text-sm leading-7 text-gray-400">Realizamos reparacion de equipo de computo y celulares, cambio de pantallas de celulares, reparacion de centros de carga para celulares, ensamble de pc y más.</p>
                    </div>
                </li>
                <li class="flex">
                    <img class="h-11 w-11 flex-none overflow-visible" loading="lazy" width="200" height="300" src="{{asset('img/services/icon-note.svg')}}" alt="icon services">
                    <div class="ml-6">
                        <h2 class="flex items-center text-sm font-semibold leading-6"><span class="text-white">05</span><span class="ml-2 h-4 w-px bg-slate-300"></span><span class="ml-2 text-white">Asesorias</span></h2>
                        <p class="mt-2 text-sm leading-7 text-gray-400">Necesitas aprender sobre Excel, o quieres aprender a realizar una pagina web sencilla, aqui aprenderas sobre eso y mucho más.</p>
                    </div>
                </li>
                <li class="flex">
                    <img class="h-11 w-11 flex-none overflow-visible" loading="lazy" width="200" height="300" src="{{asset('img/services/icon-bubbles.svg')}}" alt="icon services">
                    <div class="ml-6">
                        <h2 class="flex items-center text-sm font-semibold leading-6"><span class="text-white">06</span><span class="ml-2 h-4 w-px bg-slate-300"></span><span class="ml-2 text-white">Soporte</span></h2>
                        <p class="mt-2 text-sm leading-7 text-gray-400">Tendras soporte tecnico en tu pagina web, aun despues de que ya este en linea, tines algun problema de optimizacion, nosotros te ayudamos.</p>
                    </div>
                </li>
            </ol>
        </section>


        <section id="portfolio" class="relative py-10 md:py-14 lg:py-16">
            <div class="flex flex items-center justify-center mt-12">
                <div class="inline-block relative mb-4 bg-gradient-to-r from-rose-900 shadow-2xl shadow-pink-500/30 rounded-md py-1 px-3">
                    <h1 class="pl-2 font-semibold uppercase text-xl relative text-white text-center">Portafolio <br><span>Proyectos realizados en Html y Css</span></h1>
                </div>
            </div>

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/proyecto1')}}.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto2')}}.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto3')}}.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto4')}}.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto8')}}.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto10.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto11.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto12.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto13.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto14.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/proyecto15.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--<a class="text-sm border border-jdred w-max block mx-auto mt-16 xl:mt-10 py-2 px-3 text-jdred rounded-full"
                role="button" href="#">
                <i class="fab fa-github mr-2"></i><span>Ver mas en Github</span>
            </a>-->
        </section>
        <section id="portfolio" class="relative py-10 md:py-14 lg:py-16">
            <div class="flex flex items-center justify-center mt-12">
                <div class="inline-block relative mb-4 bg-gradient-to-r from-rose-900 shadow-2xl shadow-pink-500/30 rounded-md py-1 px-3">
                    <h1 class="pl-2 font-semibold uppercase text-xl relative text-white text-center">Portafolio <br><span>Proyectos realizados con Php y MySql</span></h1>
                </div>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/proyecto6.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                        <img src="{{asset('img/proyecto9.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--<a class="text-sm border border-jdred w-max block mx-auto mt-16 xl:mt-10 py-2 px-3 text-jdred rounded-full"
                role="button" href="#">
                <i class="fab fa-github mr-2"></i><span>Ver mas en Github</span>
            </a>-->
        </section>
        <section id="portfolio" class="relative py-10 md:py-14 lg:py-16">
            <div class="flex flex items-center justify-center mt-12">
                <div class="inline-block relative mb-4 bg-gradient-to-r from-rose-900 shadow-2xl shadow-pink-500/30 rounded-md py-1 px-3">
                    <h1 class="pl-2 font-semibold uppercase text-xl relative text-white text-center">Portafolio <br><span>Proyectos realizados con Php y MySql</span></h1>
                </div>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/proyecto5.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--<a class="text-sm border border-jdred w-max block mx-auto mt-16 xl:mt-10 py-2 px-3 text-jdred rounded-full"
                role="button" href="#">
                <i class="fab fa-github mr-2"></i><span>Ver mas en Github</span>
            </a>-->
        </section>
        <section id="contact" class="relative py-10 md:py-14 lg:py-16">
            <div class="flex flex items-center justify-center mt-12">
                <section>
                    <div class="inline-block relative mb-4 bg-gradient-to-r from-rose-900 shadow-2xl shadow-pink-500/30 rounded-md py-1 px-3">
                        <h1 class="pl-2 font-semibold uppercase text-xl relative text-white">Contáctanos</h1>
                    </div>
                </section>
            </div>
            <div class="flex w-full min-h-screen justify-center items-center">
                <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 bg-zinc-900 w-full max-w-4xl p-8 sm:p-12 rounded-xl shadow-lg text-white overflow-hidden">
                    <div class="flex flex-col space-y-8 justify-evenly">
                        <div>
                            <p class="pt-2 text-indigo-100 text-sm">Lo imaginas, nosotros lo creamos, paginas web 100% personalizadas, creacion de blogs, incluye Hosting, Cotiza tu pagina web con nosotros</p>
                        </div>
                        <div class="flex flex-col space-y-6">
                            <div class="inline-flex space-x-2 items-center">
                                <i class="text-jdred fa-solid fa-phone"></i>
                                <span>+52 983 254 3599</span>
                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <i class="text-jdred fa-solid fa-envelope"></i>
                                <span>sergiopat@svartds.com.mx</span>
                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <i class="text-jdred fa-solid fa-location-dot"></i>
                                <span>Merida, Yucatán</span>
                            </div>
                        </div>
                        <form action="" class="formulario">
                            <fieldset>
                                <legend class="legend">Contactanos llenando los campos</legend>
                                <div class="contenedor-campos">
                                    <div class="campo">
                                        <label for="">Nombre:</label>
                                        <input type="text" class="input-text" placeholder="Nombre">
                                    </div>
                                    <div class="campo">
                                        <label for="">Telefono:</label>
                                        <input type="text" class="input-text" placeholder="Telefono">
                                    </div>
                                    <div class="campo">
                                        <label for="">Email:</label>
                                        <input type="text" class="input-text" placeholder="Email">
                                    </div>
                                    <div class="campo">
                                        <label for="">Mensaje:</label>
                                        <textarea name="" id="" cols="30" rows="10" class="input-text" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="alinear-derecha flex">
                                    <input type="text" class="boton w-sm-100" type="submit" value="Enviar">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="flex justify-center relative py-5 bg-zinc-900 bg-opacity-70"><a class="flex items-center justify-center rounded-full mx-auto absolute -top-5 w-10 h-10 border-2 bg-zinc-900 border-jdblack text-white" role="button" href="#home" aria-label="Go to top"><i class="fa fa-arrow-up"></i></a>
        <div>
            <ul class="flex mt-5 w-max mx-auto">
                <li class="group transition ease-in-out duration-150 w-9 h-9 text-sm border border-jdred rounded-full flex items-center justify-center mr-3 hover:bg-jdred">
                    <a aria-label="Send Mail" href="mailto:sergiopat@svartds.com.mx" class="text-jdred group-hover:text-white"><i class="far fa-envelope"></i></a>
                </li>
                <li class="group transition ease-in-out duration-150 w-9 h-9 text-sm border border-jdred rounded-full flex items-center justify-center mr-3 last:mr-0 hover:bg-jdred">
                    <a class="text-jdred group-hover:text-white" href="#" aria-label="facebook-f logo"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="group transition ease-in-out duration-150 w-9 h-9 text-sm border border-jdred rounded-full flex items-center justify-center mr-3 last:mr-0 hover:bg-jdred">
                    <a class="text-jdred group-hover:text-white" href="#" aria-label="twitter logo"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="group transition ease-in-out duration-150 w-9 h-9 text-sm border border-jdred rounded-full flex items-center justify-center mr-3 last:mr-0 hover:bg-jdred">
                    <a class="text-jdred group-hover:text-white" href="#" aria-label="instagram logo"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="group transition ease-in-out duration-150 w-9 h-9 text-sm border border-jdred rounded-full flex items-center justify-center mr-3 last:mr-0 hover:bg-jdred">
                    <a class="text-jdred group-hover:text-white" href="" aria-label="linkedin-in logo"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
            <p class="px-2 text-center text-gray-500 text-sm mt-5">
                <a href="#" class="text-slate-500 hover:text-slate-800" target="_blank">Sergio Pat </a><i class="text-red-400"></i> © 2023 Todos los derechos reservados
            </p>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/whatsapp.js" id="whatsapp"></script>
    <script src="js/app.js"></script>
    <script src="js/mail.js"></script>
</body>

</html>