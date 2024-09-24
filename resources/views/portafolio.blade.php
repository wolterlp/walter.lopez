<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Wolterlp</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body>
        <header>
            <div class="grid-container-titulo">
                <div class="grid-container-menu">
                    <!-- Selector de idioma -->
                    <div id="language-switcher" class="menu-section">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <svg height="25px" width="25px" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802"></path>
                                </svg>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ url('/?lang=en') }}">{{ __('English') }}</a>
                                <a href="{{ url('/?lang=es') }}">{{ __('Spanish') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Switch de tema -->
                    <div id="color-switcher" class="menu-section">
                        <button data-color="light">
                            <svg height="28px" width="28px" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                            </svg>
                        </button>
                        <button data-color="dark">
                            <svg height="23px" width="23px" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="titulo">
                <h1 class="typing-effect">Walter Restrepo López</h1>
                <h2 class="typing-effecto-two">{{ __('Full Stack Developer') }}</h2>
            </div>
            <div class="titulo-item item1">  
                <nav>
                    <ul>
                        <li><a href="#about" class="nav-link" >{{ __('About') }}</a></li>
                        <li><a href="#projects" class="nav-link" >{{ __('Projects') }}</a></li>
                        <li><a href="#contact" class="nav-link" >{{ __('Contact') }}</a></li>
                        <li><a href="#cv" class="nav-link" >{{ __('Curriculum Vitae') }}</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="container">
                <div>
                    <nav class="menu flotante">    
                        <ul class="iconos">
                            <li>
                                <a href="https://wa.me/573147736181" target="_blank">

                                    <svg height="28px" width="28px" fill="none" stroke-width="1.5" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24">
                                        <path d="M19.077,4.928c-2.082-2.083-4.922-3.134-7.904-2.894C7.164,2.356,3.65,5.144,2.474,8.99 c-0.84,2.748-0.487,5.617,0.881,7.987L2.059,21.28c-0.124,0.413,0.253,0.802,0.67,0.691l4.504-1.207 c1.459,0.796,3.101,1.215,4.773,1.216h0.004c4.195,0,8.071-2.566,9.412-6.541C22.728,11.563,21.762,7.616,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767 c-0.125-0.167-1.019-1.353-1.019-2.581S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006 c0.178,0.007,0.375,0.016,0.562,0.431c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416 c-0.125,0.146-0.262,0.325-0.374,0.437c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728 c0.954,0.85,1.757,1.113,2.007,1.239c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978 s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812c0.25,0.125,0.416,0.187,0.478,0.291 C17.106,14.471,17.106,14.971,16.898,15.554z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/wolterlp" target="_blank">
                                    <svg height="28px" width="28px" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 0a12 12 0 00-3.79 23.39c.6.11.82-.26.82-.58 0-.29-.01-1.27-.02-2.3-3.34.73-4.05-1.61-4.05-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.1-.75.09-.74.09-.74 1.22.08 1.87 1.26 1.87 1.26 1.08 1.85 2.83 1.32 3.51 1.01.11-.78.42-1.32.76-1.63-2.67-.3-5.48-1.34-5.48-5.94 0-1.31.47-2.39 1.24-3.24-.12-.3-.54-1.52.11-3.16 0 0 1.01-.32 3.3 1.23a11.55 11.55 0 013-.4c1.02.01 2.04.14 3 .4 2.29-1.55 3.3-1.23 3.3-1.23.65 1.64.23 2.86.11 3.16.77.85 1.24 1.93 1.24 3.24 0 4.61-2.81 5.64-5.48 5.94.43.37.82 1.1.82 2.22 0 1.6-.02 2.88-.02 3.27 0 .32.22.69.83.57A12 12 0 0012 0z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/wolterlp?utm_source=qr&igsh=cXEwNXMwNzU4Ymp5" target="_blank">
                                    <svg  width="30" height="30" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                                        <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/walter-restrepo-l%C3%B3pez-800789249/" target="_blank">
                                    <svg height="28px" width="28px" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                        <path d="M36.5,6h-25C8.468,6,6,8.468,6,11.5v25c0,3.032,2.468,5.5,5.5,5.5h25c3.032,0,5.5-2.468,5.5-5.5v-25	C42,8.468,39.532,6,36.5,6z M18,34c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1V21c0-0.553,0.447-1,1-1h3c0.553,0,1,0.447,1,1V34z M15.5,18c-1.381,0-2.5-1.119-2.5-2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5C18,16.881,16.881,18,15.5,18z M35,34	c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1v-7.5c0-1.379-1.121-2.5-2.5-2.5S25,25.121,25,26.5V34c0,0.553-0.447,1-1,1h-3	c-0.553,0-1-0.447-1-1V21c0-0.553,0.447-1,1-1h3c0.553,0,1,0.447,1,1v0.541C26.063,20.586,27.462,20,29,20c3.309,0,6,2.691,6,6V34z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <!--a href="/path/to/your/file" download-->
                                <a href="https://www.linkedin.com/in/walter-restrepo-l%C3%B3pez-800789249/" target="_blank">
                                    <svg  height="28px" width="28px" fill="none" stroke-width="2" stroke="currentColor"  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                                        <path d="M 30.398438 2 L 7 2 L 7 48 L 43 48 L 43 14.601563 Z M 15 28 L 31 28 L 31 30 L 15 30 Z M 35 36 L 15 36 L 15 34 L 35 34 Z M 35 24 L 15 24 L 15 22 L 35 22 Z M 30 15 L 30 4.398438 L 40.601563 15 Z"></path>
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            <div class="grid-container2">
                <div class="col1"><!-- Tecnologías -->
                    <div class="subgrid2"> 
                        <div class="subcol" style="display: flex; justify-content: center; ">
                            <section id="card-stack">
                                <div class="card poker-card" id="card1">
                                    <p>&#9824; Poker 1</p> <!-- Picas -->
                                </div>
                                <div class="card poker-card" id="card2">
                                    <p>&#9829; Poker 2</p> <!-- Corazones -->
                                </div>
                                <div class="card photo-card" id="card-photo">
                                    <img src="{{ asset('storage/fotow.jpeg') }}" alt="Foto" class="photo">


                                </div>
                            </section>
                        </div>
                        <div class="subcol">
                            <section id="about">
                                <h2>{{ __('About Me') }}</h2>
                                <p style="text-align: left;"> {{ __(' Web developer with solid experience in both frontend and backend. Expert in building fast, secure, and scalable web applications using modern technologies such as ') }}
                                    <strong>PHP</strong>, 
                                    <strong>Laravel</strong>{{ __(' and efficient design tools such as') }} 
                                    <strong>Tailwind CSS</strong>. {{ __('Proficient in managing and optimizing databases such as') }} 
                                    <strong>MySQL</strong>, 
                                    <strong>PostgreSQL</strong>, {{ __('and') }} 
                                    <strong>Oracle</strong>, {{ __('ensuring high performance and availability. I also have advanced skills in data analysis and artificial intelligence development using') }} 
                                    <strong>Python</strong>, 
                                    <strong>Anaconda</strong>, {{ __('and') }} 
                                    <strong>Keras</strong> ({{ __('neural networks') }}). {{ __('My focus is on providing technology solutions that optimize user experience and improve operational efficiency for large-scale businesses.') }}
                                </p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col1"><!-- Tecnologías -->
                    <section id="Tecnologias">
                        <div class="subgrid1">
                            <div class="subcol">
                                <h2>{{ __('Key Technologies') }}</h2>
                            </div>
                        </div>
                        <div class="subgrid4">
                            <div class="subcol">
                                <h3>{{ __('Frontend') }}</h3>
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>JavaScript</li>
                                    <li>Angular</li>
                                    <li>Tailwind CSS</li>
                                    <li>jQuery</li>
                                </ul>
                            </div>
                            <div class="subcol">
                                <h3>{{ __('Backend') }}</h3>
                                <ul>
                                    <li>PHP (Laravel, Symfony)</li>
                                    <li>Web Services</li>
                                    <li>MySQL</li>
                                    <li>PostgreSQL</li>
                                    <li>Oracle</li>
                                </ul>
                            </div>
                            <div class="subcol">
                                <h3>{{ __('AI Data Analysis') }}</h3>
                                <ul>
                                    <li>Python</li>
                                    <li>Anaconda</li>
                                    <li>Pandas</li>
                                    <li>Scikit-learn</li>
                                    <li>Keras</li>
                                </ul>
                            </div>
                            <div class="subcol">
                                <h3>{{ __('Other') }}</h3>
                                <ul>
                                    <li>Git</li>
                                    <li>Pentaho</li>
                                    <li>REST APIs</li>
                                    <li>Linux</li>
                                    <li>Windows</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col2"><!-- Experiencia -->
                    <section id="Experiencia">
                        <div class="subgrid1">
                            <div class="subcol">
                                <h2>{{ __('Professional Experience') }}</h2>
                            </div>
                        </div>

                        <div class="subgrid2">
                            <div class="subcol">
                                <h3>{{ __('Freelancer Experience') }}</h3>
                                <h4>{{ __('Enterprise Web Application Development') }}</h4>
                                <p><strong>{{ __('August 2019 - Present') }}</strong></p>
                                <p><strong>{{ __('Activities') }}:</strong></p>
                                <ul>
                                    <li>{{ __('Design and development of custom enterprise applications using Laravel, integrating sales modules, inventories and automated reporting systems, Implementation of RESTful APIs and scalable architectures.') }}</li>
                                </ul>
                                <p><strong>{{ __('Technologies') }}:</strong></p>
                                <ul class="tecno">
                                    <li>Laravel</li>
                                    <li>MySQL</li>
                                    <li>PostgreSQL</li>
                                    <li>RESTful APIs</li>
                                </ul>
                            </div>

                            <div class="subcol">
                                <h3>Watari</h3>
                                <h4>{{ __('Web Administrator and Developer') }}</h4>
                                <p><strong>{{ __('August 2019 - February 2024') }}</strong></p>
                                <p><strong>{{ __('Activities') }}:</strong></p>
                                <ul>
                                    <li>{{ __('Development of software solutions for programming and performance evaluation, Optimization of financial and operational systems using accounting and inventory control software.') }}</li>
                                </ul>
                                <p><strong>{{ __('Technologies') }}:</strong></p>
                                <ul class="tecno">
                                    <li>PHP</li>
                                    <li>MySQL</li>
                                    <li>Laravel</li>
                                </ul>
                            </div>
                        </div>

                        <div class="subgrid2">
                            <div class="subcol">
                                <h3>Iteria Forward Thinking</h3>
                                <h4>{{ __('Web Consultant and Programmer') }}</h4>
                                <p><strong>{{ __('August 2017 - July 2019') }}</strong></p>
                                <p><strong>{{ __('Activities') }}:</strong></p>
                                <ul>
                                    <li>{{ __('Development of web applications using Laravel, PHP (MVC), JavaScript and jQuery, Programming in Oracle and use of Pentaho for data analysis.') }}</li>
                                </ul>
                                <p><strong>{{ __('Technologies') }}:</strong></p>
                                <ul class="tecno">
                                    <li>Laravel</li>
                                    <li>PHP (MVC)</li>
                                    <li>JavaScript</li>
                                    <li>Pentaho</li>
                                </ul>
                            </div>

                            <div class="subcol">
                                <h3>Inverceramicas</h3>
                                <h4>{{ __('Systems Administrator') }}</h4>
                                <p><strong>{{ __('January 2017 - August 2017') }}</strong></p>
                                <p><strong>{{ __('Activities') }}</strong></p>
                                <ul>
                                    <li>{{ __('Maintenance and optimization of operating systems and servers, Management of user accounts and computer security.') }}</li>
                                </ul>
                                <p><strong>{{ __('Technologies') }}:</strong></p>
                                <ul class="tecno">
                                    <li>{{ __('Servers') }}</li>
                                    <li>{{ __('Computer security') }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="subgrid2">
                            <div class="subcol">
                                <h3>Secretaría de Tránsito y Transporte de Florida</h3>
                                <h4>{{ __('Web Programmer') }}</h4>
                                <p><strong>{{ __('April 2016 - October 2016') }}</strong></p>
                                <p><strong>{{ __('Activities') }}:</strong></p>
                                <ul>
                                    <li>{{ __('MySQL and PostgreSQL database development, Laravel application programming and frontend development with HTML, JavaScript, jQuery and Tailwind CSS.') }}</li>
                                </ul>
                                <p><strong>{{ __('Technologies') }}:</strong></p>
                                <ul class="tecno">
                                    <li>Laravel</li>
                                    <li>MySQL</li>
                                    <li>PostgreSQL</li>
                                    <li>Tailwind CSS</li>
                                </ul>
                            </div>

                            <div class="subcol">
                                <h3>Mercapava S.A.</h3>
                                <h4>{{ __('Technology Assistant') }}</h4>
                                <p><strong>{{ __('April 2012 - March 2014') }}</strong></p>
                                <p><strong>{{ __('Activities') }}:</strong></p>
                                <ul>
                                    <li>{{ __('Hardware maintenance and technical support, Information management and report generation for system optimization.') }}</li>
                                </ul>
                                <p><strong>{{ __('Technologies') }}:</strong></p>
                                <ul class="tecno">
                                    <li>{{ __('Technical Support') }}</li>
                                    <li>{{ __('Information Management') }}</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            
                <div class="col2"><!-- Contact -->
                    <section id="contact">
                        <div class="subgrid1">
                            <div class="subcol">
                                <h2>{{ __('Contact') }}</h2>
                            </div>
                        <div class="subgrid2">
                            <div class="subcol">
                                <a href="https://wa.me/573147736181" target="_blank" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                                    <svg height="28px" width="28px" fill="none" stroke-width="1.5" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="margin-right: 8px;">
                                        <path d="M19.077,4.928c-2.082-2.083-4.922-3.134-7.904-2.894C7.164,2.356,3.65,5.144,2.474,8.99 c-0.84,2.748-0.487,5.617,0.881,7.987L2.059,21.28c-0.124,0.413,0.253,0.802,0.67,0.691l4.504-1.207 c1.459,0.796,3.101,1.215,4.773,1.216h0.004c4.195,0,8.071-2.566,9.412-6.541C22.728,11.563,21.762,7.616,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767 c-0.125-0.167-1.019-1.353-1.019-2.581S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006 c0.178,0.007,0.375,0.016,0.562,0.431c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416 c-0.125,0.146-0.262,0.325-0.374,0.437c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728 c0.954,0.85,1.757,1.113,2.007,1.239c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978 s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812c0.25,0.125,0.416,0.187,0.478,0.291 C17.106,14.471,17.106,14.971,16.898,15.554z"></path>
                                    </svg>
                                    <strong>{{ __('Phone:') }}</strong> +57 3147736181
                                </a>
                            </div>
                            <div class="subcol">      
                                <a>           
                                    <svg height="28px" width="28px" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
                                    </svg>
                                    <strong>{{ __('Email: ') }} </strong> 
                                        {{ __('Walter81w@hotmail.es') }} 
                                </a>   
                            </div>
                        </div>
                    </section>
                </div>   
            </div>  
        </main>
    <footer>
        <div class="footer-content">
            <!-- Aquí va el contenido del footer -->
            <p>{{ __('Copyright © 2024') }}</p>
        </div>
    </footer>
    </body>
</html>

