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
                Contanct
            </button>
        </a>

        <div class="flex-grow"></div>

        <div class="self-center md:self-end">
            <a href="#skills">
                <div class="text-pink-600 p-10 flex">
                    <div class="px-6">Skills</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="h-screen text-white p-10 font-mono flex flex-col" id="skills">
        <div class="flex-grow"></div>
        <div class=" flex items-center flex-col md:flex-row justify-evenly ">

            <div class="rounded-lg shadow-xl bg-bluegray-900 w-full max-w-md">
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
                    <span class="text-gray-500">
                    (/ˈfɪlədɪˈv/) is a lover of the process of
                    designing, implementing, testing, and maintaining advancement opportunities.
                    The term is a neologism from Greek philos (φίλος; "loving", as in philosophy)
                    and from English development.
                </span>
                </div>
            </div>

            <div class="w-full max-w-md py-10">
                <img src="{{ asset('storage/skills.png') }}">
            </div>
        </div>

        <div class="flex-grow"></div>

        <div class="self-center md:self-end">
            <a href="#projects">
                <div class="text-pink-600 p-10 flex">
                    <div class="px-6">Projects</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="h-screen text-white p-10 flex flex-col" id="skills">
        <div class="flex-grow"></div>
        <div class="flex flex-wrap justify-evenly h-screen items-center" id="projects">
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg m-4 w-50 h-50 overflow-hidden">
                <a href="http://round-robin.philodev.one/">
                    <svg viewBox="0 0 400 174" preserveAspectRatio="none" class="w-30 h-20">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2, 44)" fill="#151E2D" fill-rule="nonzero">
                                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.2"></path>
                                <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.3"></path>
                                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.4"></path>
                            </g>
                            <g transform="translate(-4, 76)" fill="#151E2D" fill-rule="nonzero">
                                <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                            </g>
                        </g>
                    </svg>

                    <div class="text-center mx-auto p-5 bg-gray-900 text-lg font-semibold ">Round Robin</div>
                </a>
            </div>
        </div>

        <div class="flex-grow"></div>

        <div class="self-center md:self-end">
            <a href="#contact">
                <div class="text-pink-600 pr-10 flex">
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
            <h3 class="">Sofia Fischer</h3>
            <h3 class="">Munich, Germany</h3>
            <br>
            <h3 class="text-pink-600">
                <a href="mailto:sofia@philodev.com">sofia@philodev.com</a>
            </h3>
        </div>

        <div class="w-full max-w-md">
            <div class="bg-fixed bg-no-repeat hidden md:block"
                 style="background-image:url({{ asset('storage/background.jpg') }}); background-size: 25rem; background-position-x: right">
                <div class="h-64 bg-gradient-to-b from-black via-transparent to-black mx-auto"></div>
            </div>
            <div class="bg-fixed bg-no-repeat block md:hidden"
                 style="background-image:url({{ asset('storage/background.jpg') }}); background-size: 25rem; background-position: center">
                <div class="h-64 bg-gradient-to-b from-black via-transparent to-black mx-auto"></div>
            </div>
        </div>
    </div>

</x-app-layout>
