<!DOCTYPE html>
<x-app-layout>

    {{--  Welcome  --}}
    <div class="h-screen text-white md:ml-20 lg:ml-40 flex flex-col p-10 font-mono ">
        <div class="flex-grow"></div>

        <h1 class="text-xl md:text-3xl whitespace-pre-line max-w-min min-w-max ">
            <div class="w-30">
                Hei, hei, <br>
                I am <span class="text-pink-600">Sofia</span>, <br>
            </div>
            <div class="flex whitespace-nowrap">
                <div class="text-box text-pink-600">
                    <h2 id="result"></h2>
                </div>
                <span class="cursor"></span>
            </div>

            <style>
                .text-box {
                    animation: width 25s infinite ease;
                    overflow: hidden;
                    width: 100%;
                }

                #result::after {
                    content: "Full Stack Code Wizzard";
                    animation: content 25s infinite ease;
                }

                span.cursor {
                    height: 30px;
                    width: 10px;
                    background: white;
                    display: block;
                    animation: flicker 1s infinite ease;
                }

                @keyframes flicker {
                    0% {
                        opacity: 0;
                    }
                    50% {
                        opacity: 1;
                    }
                    100% {
                        opacity: 0;
                    }
                }

                @keyframes content {
                    0%, 33% {
                        content: "Full Stack Code Wizzard";
                    }
                    34%, 66% {
                        content: "Agile Enthusiast";
                    }
                    67%, 100% {
                        content: "App Artisan";
                    }
                }

                @keyframes width {
                    0%, 10% {
                        width: 0;
                    }
                    20%, 25% {
                        width: 100%;
                    }
                    33%, 45% {
                        width: 0;
                    }
                    50%, 55% {
                        width: 100%;
                    }
                    66%, 75% {
                        width: 0;
                    }
                    85%, 90% {
                        width: 100%;
                    }
                    100% {
                        width: 0%;
                    }
                }
            </style>
        </h1>
        <a href="mailto:sofia@philodev.com">
            <button class="bg-pink-600 font-bold text-center px-6 py-2 rounded">
                Contact
            </button>
        </a>

        <div class="flex-grow"></div>

        <div class="self-center md:self-end">
            <a href="#skills" aria-label="skills">
                <div class="text-pink-600 p-10 flex">
                    <div class="px-6">Skills</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="text-white p-10 font-mono flex flex-col" id="skills">
        <div class=" flex items-center flex-col md:flex-row justify-evenly ">

            <div class="rounded-lg shadow-xl bg-bluegray-900 w-full max-w-md m-4">
                <div class="border-b border-gray-800 px-2 py-3 flex items-center">
                    <div class="inline-block w-3 h-3 mr-1 rounded-full bg-red-500"></div>
                    <div class="inline-block w-3 h-3 mr-1 rounded-full bg-yellow-300"></div>
                    <div class="inline-block w-3 h-3 mr-1 rounded-full bg-green-400"></div>
                    <div class="mx-auto">Philosophy</div>
                </div>
                <div class="p-4 text-sm">
                <span class="text-pink-600 font-semibold text-md">
                    Philodev
                </span>
                    <span class="text-gray-300">
                    (/ˈfɪlədɪˈv/) is a lover of the process of
                    designing, implementing, testing, and maintaining advancement opportunities.
                    The term is a neologism from Greek philos (φίλος; "loving", as in philosophy)
                    and from English development.
                </span>
                </div>
            </div>

            <div class="w-full max-w-md py-10 border-l-4 border-pink-600 pl-4 text-sm my-4">
                <div class="py-2">
                    <h1 class="text-pink-600 font-semibold text-lg">Education</h1>
                    <p class="pb-4">
                        <b>Informatics M. Sc.</b> and <b>Information Systems B. Sc.</b>, Technische Universität München,
                                                  Germany
                    </p>
                </div>
                <div class="py-2">
                    <h1 class="text-pink-600 font-semibold text-lg">Experience</h1>
                    <p class="pb-4">
                        <b>PHP / Laravel</b> Including experience with
                                             RESTfull APIs, common Patterns, Eloquent, Livewire, Blade, SQL, Testing,
                                             Deployment.
                    </p>
                    <p class="pb-4">
                        <b>HTML, JS / Angular</b> Ionic, TypeScript, Tailwind, HTML, CSS, Bootstrap.
                    </p>
                    <p class="pb-4">
                        <b>Dart / Flutter</b> Development for IOS, Android and native OSX
                    </p>
                    <p class="pb-4">
                        <b>Additionally</b> Docker, Git, Linux Apache, Time Series DB, IEEE 7000, Agile Development
                    </p>
                </div>
                <div class="py-2">
                    <h1 class="text-pink-600 font-semibold text-lg">Work Experience</h1>
                    <p class="pb-4">
                        First Development Job in 2015, first Laravel focused Job 2018, Freelancer since 2021
                    </p>
                </div>
            </div>
        </div>

        <div class="flex-grow"></div>

        <div class="self-center md:self-end">
            <a href="#projects" aria-label="projects">
                <div class="text-pink-600 p-10 flex">
                    <div class="px-6">Projects</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="text-white p-10 flex flex-col font-mono" id="skills">
        <div class="flex flex-wrap justify-evenly items-center pt-16" id="projects">
            <div class=" rounded-lg m-4 overflow-hidden md:flex">
                <a href="http://round-robin.philodev.one/">
                    <div style="background-image: url(https://www.round-robin.philodev.one/storage/images/round_robin_logo_white.png)"
                        class="w-36 h-24 bg-cover bg-center"></div>
                </a>

                <div class="p-4">
                    <a href="http://round-robin.philodev.one/">
                        <h1 class="text-pink-600 font-semibold text-lg">Round Robin</h1>
                        <p class="pb-4">
                            <b>Private Project</b> Platform for round based games originated in the Corona Pandemic
                                                   to compensate for the missed board game evenings.
                        </p>
                    </a>
                    <p class="pb-4">
                        <b>Laravel</b> Utilising Livewire for Websockets and Event Handling.
                    </p>
                    <p class="pb-4">
                        <a href="https://github.com/sofia-fischer/round-robin" class="text-pink-600 font-semibold">
                            The Code can be viewed on Github
                        </a>
                    </p>
                </div>
            </div>

            <div class=" rounded-lg m-4 overflow-hidden md:flex">
                <a href="https://codyo.app/">
                    <div style="background-image: url(https://codyo.app/wp-content/uploads/2020/01/codyo-app-logo.svg)"
                        class="w-36 h-20 bg-cover bg-center"></div>
                </a>

                <div class="p-4">
                    <a href="https://codyo.app/">
                        <h1 class="text-pink-600 font-semibold text-lg">Codyo</h1>
                        <p class="pb-4">
                            <b>Customer Project</b> Personal and Business Carbon Footprint Tracker, featuring a
                                                    Community Feed, Gamifcated CO2 Emission Tracker and Company wide
                                                    Analytics.
                        </p>
                    </a>
                </div>
            </div>

            <p class="text-pink-600">Also a personal interest that I want to spread</p>
            <div class=" rounded-lg m-4 overflow-hidden md:flex">
                <a href="https://standards.ieee.org/initiatives/artificial-intelligence-systems/" target="_blank">
                    <div class="w-36 h-20 pt-8">
                        <img src="https://engagestandards.ieee.org/rs/211-FYL-955/images/ieee-ai-ethics-support-badge.png"
                            alt="A Champion for IEEE AI Ethics" width="190px">
                    </div>
                </a>

                <div class="p-4">
                    <a href="https://standards.ieee.org/ieee/7000/6781/">
                        <h1 class="text-pink-600 font-semibold text-lg">Ethical Programming IEEE 7000</h1>
                        <p class="pb-4">
                            <b>Personal interest</b> IEEE Standards Project for Model Process for Addressing Ethical
                                                     Concerns During System Design outlines an approach for identifying
                                                     and analyzing potential ethical issues in a system or software
                                                     program from the onset of the effort.
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="self-center md:self-end">
            <a href="#contact" aria-label="contact">
                <div class="text-pink-600 pr-10 pt-10 flex">
                    <div class="px-6">Contact</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="h-screen text-white p-10 flex items-center flex-col md:flex-row items-center justify-evenly font-mono" id="contact">
        <div class="text-white w-full max-w-md">
            <h1 class="text-xl text-pink-600">Contact</h1>
            <h2 class="">Sofia Fischer</h2>
            <h3 class="">Munich, Germany</h3>
            <br>
            <h3 class="text-pink-600">
                <a href="mailto:sofia@philodev.com">sofia@philodev.com</a>
            </h3>
        </div>

        <div class="w-full max-w-md">
            <div class="bg-fixed bg-no-repeat hidden md:block"
                style="background-image:url({{ asset('storage/images/background.jpeg') }});
                    background-size: 25rem; background-position-x: right; background-position-y: bottom">
                <div class="h-64 bg-gradient-to-b from-black via-transparent to-black mx-auto"></div>
            </div>
            <div class="bg-fixed bg-no-repeat block md:hidden"
                style="background-image:url({{ asset('storage/images/background.jpeg') }}); background-size: 25rem;
                    background-position-x: center; background-position-y: bottom">
                <div class="h-64 bg-gradient-to-b from-black via-transparent to-black mx-auto"></div>
            </div>
        </div>
    </div>

</x-app-layout>
