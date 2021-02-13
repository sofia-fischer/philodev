<!DOCTYPE html>
<x-app-layout>

    <x-slot name="header"></x-slot>

    <div class="max-w-4xl mx-auto px-4 lg:px-8 my-8 text-center">

        <div class="flex flex-col md:flex-row">
            <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
                <div class="w-full max-w-3xl flex justify-center absolute w-20 h-20 text-opacity-20 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="py-6 text-white font-semibold text-xl mb-4">
                    Blog
                </div>

                <div class="text-bluegray-500 text-sm p-4 md:px-8">
                    Welcome to my blog. Feel free to rummage in the different articles.
                    Please keep in mind, I write about my experiences, my opinion, my take always
                    - nothing after this point might be true, nothing is meant to be a legal advice, no warranties.
                    Some content might be inspired or taken away from different papers, books or other sources
                    - if so I try to give credit to my source, but also in this concern as human I might make a mistake.

                    <br>
                    <br>
                    If you find a content mistake or missing (or wrong) source feel free to inform me.
                    Regarding spelling mistakes (if they do not change the meaning): Finders Keepers ;)

                    <br>
                    <br>
                    Have fun reading
                </div>
            </div>
        </div>

        @foreach($blogs as $blog)
            <a href="{{ route('blogShow', ['blog' => $blog['route']]) }}">
                <div class="flex flex-col md:flex-row">
                    <div
                        class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 relative py-4 w-full">
                        <div class="py-6 text-white font-semibold text-xl mb-4">
                            {{ $blog['title'] }}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-app-layout>
