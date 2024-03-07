<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Colibrì | Eccellenza con Shopify</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="shortcut icon" type="image/svg+xml" href="data:image/svg+xml,{{ base64_encode('<svg id="uuid-07c02fee-9852-4765-bd29-32353791107d" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 75.48 75.23">
    <defs>
        <linearGradient id="uuid-8a42bbf8-3b15-45ed-a35a-b2c4e4d33d13" data-name="Sfumatura senza nome 3" x1="42.32" y1="57.25" x2="75.47" y2="57.25" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#72c3b1"/>
        <stop offset=".2" stop-color="#70c3b5"/>
        <stop offset=".43" stop-color="#67c1be"/>
        <stop offset=".67" stop-color="#59b8c9"/>
        <stop offset=".91" stop-color="#51a8d2"/>
        <stop offset="1" stop-color="#4ea0d5"/>
        </linearGradient>
        <linearGradient id="uuid-d4329d95-9cc1-4ecf-a7b3-47cd04a7a2ab" data-name="Sfumatura senza nome 3" x1="0" y1="24.86" x2="75.48" y2="24.86" xlink:href="#uuid-8a42bbf8-3b15-45ed-a35a-b2c4e4d33d13"/>
        </defs>
        <g id="uuid-75f22c10-7830-4b8f-aaa4-662fb98a4a15" data-name="Livello 1">
            <g>
                <path d="M50.03,49.91c-1.9,1.9-4.12,3.25-6.48,4.08.99,7.07.58,14.3-1.23,21.24,18.18-2.2,32.4-17.36,33.14-35.95h-20.51c-.32,3.86-1.95,7.64-4.93,10.63Z" fill="url(#uuid-8a42bbf8-3b15-45ed-a35a-b2c4e4d33d13)" stroke-width="0"/>
                <path d="M42.68,33.12c-2.66-2.66-6.86-2.67-9.51-.02-2.68,2.67-2.69,6.91-.04,9.57,2.65,2.65,6.9,2.64,9.57-.03,2.64-2.64,2.64-6.86-.02-9.51Z" fill="#1a1a1a" stroke-width="0"/>
                <path d="M37.76,0C16.94,0,0,16.94,0,37.76c0,4.18.69,8.2,1.95,11.96h0l23.6-23.6s.1-.08.15-.12c.07-.08.13-.16.21-.23,6.7-6.69,17.35-6.67,24.07.06,3,3,4.64,6.78,4.97,10.65h20.52C74.8,16.25,58.15,0,37.76,0Z" fill="url(#uuid-d4329d95-9cc1-4ecf-a7b3-47cd04a7a2ab)" stroke-width="0"/>
            </g>
        </g>
        </svg>
        ') }}" >

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

    <div class="bg-white">

        <x-header />


        <main class="isolate">
            <!-- Hero section -->
            <x-sections.hero />

            <!-- Logo cloud -->
            <x-sections.logo-cloud />

            <!-- Feature section -->


            <!-- Testimonial section -->
            <x-sections.testimonial />

            <x-sections.gruppo />


            <!-- CTA section -->
            <div class="relative -z-10 mt-32 px-6 lg:px-8">
                <div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 transform-gpu justify-center overflow-hidden blur-3xl sm:bottom-0 sm:right-[calc(50%-6rem)] sm:top-auto sm:translate-y-0 sm:transform-gpu sm:justify-end" aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-25" style="clip-path: polygon(73.6% 48.6%, 91.7% 88.5%, 100% 53.9%, 97.4% 18.1%, 92.5% 15.4%, 75.7% 36.3%, 55.3% 52.8%, 46.5% 50.9%, 45% 37.4%, 50.3% 13.1%, 21.3% 36.2%, 0.1% 0.1%, 5.4% 49.1%, 21.4% 36.4%, 58.9% 100%, 73.6% 48.6%)"></div>
                </div>
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Lorem ipsum<br>dolor sit amet</h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="absolute left-1/2 right-0 top-full -z-10 hidden -translate-y-1/2 transform-gpu overflow-hidden blur-3xl sm:block" aria-hidden="true">
                    <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <div class="mx-auto mt-32 max-w-7xl px-6 lg:px-8">
            <footer aria-labelledby="footer-heading" class="relative border-t border-gray-900/10 py-24 sm:mt-56 sm:py-32">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <img class="h-7" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Company name">
                    <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Hosting</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Data Services</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Uptime Monitoring</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Enterprise Services</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">API Reference</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    </body>
</html>
