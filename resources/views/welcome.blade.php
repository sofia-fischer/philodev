<!DOCTYPE html>
<x-app-layout>

    <x-slot name="header"></x-slot>

    <div class="max-w-4xl mx-auto px-4 lg:px-8 my-8 text-center">

        <div class="flex flex-col md:flex-row">
            <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
                <div class="w-full max-w-3xl flex justify-center absolute w-20 h-20 text-opacity-20 text-blue-500">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="py-6 text-white font-semibold text-xl mb-4">
                    Philodev
                </div>

                <div class="text-bluegray-500 text-sm p-4 md:px-8">
                    A <b>Philodev</b> (/ˈfɪlədɪˈv/) is a lover of the process of
                    designing, implementing, testing, and improving
                    involved in creating and maintaining advancement opportunities.
                    The term is a neologism from Greek philos (φίλος; "beloved", "loving", as in philosophy - the love
                    of
                    knowledge)
                    and from English development (as the process of growth in the context personal achievements or
                    software
                    development).
                </div>
            </div>
        </div>

        <div class="bg-fixed bg-no-repeat bg-left-0 lg:bg-left-center my-10"
             style="background-image:url({{ asset('storage/background.jpg') }}); background-size: 30rem">
            <div class="h-72 bg-gradient-to-b from-black via-transparent to-black">

            </div>
        </div>

        <div class="flex flex-col md:flex-row">
            <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 relative py-4 w-full">
                <div class="w-full flex justify-center absolute w-20 h-20 text-opacity-20 text-blue-500">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
                <div class="py-6 text-white font-semibold text-xl mb-4">
                    Skills
                </div>

                <div class="flex-wrap flex text-xs text-bluegray-300 justify-evenly">
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            PHP
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            Laravel
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            JavaScript
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            Angular
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            HTML / CSS
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            Analytics
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            Dev Ops
                        </div>
                    </div>
                    <div class="flex rounded-full m-1 bg-bluegray-400 bg-opacity-25 items-center">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <div class="mr-2">
                            Gamification
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 relative py-4 w-full">
                <div class="w-full flex justify-center absolute w-20 h-20 text-opacity-20 text-blue-500">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <div class="py-6 text-white font-semibold text-xl mb-4">
                    Software
                </div>

                <div class="text-bluegray-500 text-sm p-4 md:px-8  ">
                    If this Side does not satisfy your curiosity, have a look at
                    my
                    <a href="https://github.com/sofia-fischer" class="text-blue-500">GitHub</a>
                    or another private project
                    <a href="http://round-robin.philodev.one/" class="text-blue-500">Round Robin</a>
                </div>
            </div>

            <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 relative py-4 w-full">
                <div class="w-full flex justify-center absolute w-20 h-20 text-opacity-20 text-blue-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <div class="py-6 text-white font-semibold text-xl mb-4">
                    Blog
                </div>

                <div class="text-bluegray-500 text-sm p-4 ">
                    The capacity to learn is gift; the ability to learn is a skill; the motivation to learn is a choice <br> <br>

                    <a href="{{ route('blogIndex') }}" class="text-blue-500">Learn more </a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
