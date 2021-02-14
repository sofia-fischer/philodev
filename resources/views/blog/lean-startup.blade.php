<!DOCTYPE html>
<x-app-layout>

    <x-slot name="header">
        <div class="text-white text-xl text-center font-semibold">
            The Lean Startup
        </div>
        <div class="text-center text-blue-500">
            Book Take Away of "The Lean Startup" by Eric Ries
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 lg:px-8 my-8 text-center">

        <div class="flex flex-col md:flex-row text-bluegray-200">
            <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
                <div class="w-full max-w-3xl flex justify-center absolute w-20 h-20 text-opacity-20 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="py-6 text-white font-semibold text-xl mb-4">
                    LEAN
                </div>

                <div class="text-bluegray-200 text-sm p-4 md:px-8">
                    A Methodology focused on validated learning -
                    if we take a wrong road, we have LEAN provides the tools to realise that the current direction has
                    flaws, as well as the agility to change towards a new direction.
                </div>
                <div class="flex flex-wrap justify-evenly text-bluegray-400">
                    <div class="flex text-sm rounded-full m-2 bg-bluegray-400 bg-opacity-25">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <div class="mx-2">
                            Management
                        </div>
                    </div>
                    <div class="flex text-sm rounded-full m-2 bg-bluegray-400 bg-opacity-25">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="mx-2">
                            For Management under uncertainty
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <pre class="text-left text-white text-xs md:text-sm w-full mx-auto max-w-sm overflow-x-scroll md:max-w-lg">
while (true) {
    <span class="text-blue-700">$newTest</span> <span class="text-pink-600">=</span> $this<span
                class="text-pink-600">-></span><span class="text-green-400">build</span>(<span class="text-indigo-600">$newIdea</span>);

    <span class="text-purple-600">$measurements</span> <span class="text-pink-600">=</span> $this<span
                class="text-pink-600">-></span><span class="text-green-400">measure</span>(<span class="text-blue-700">$newTest</span>);

    <span class="text-indigo-600">$newIdea</span> <span class="text-pink-600">=</span> $this<span class="text-pink-600">-></span><span
                class="text-green-400">evaluate</span>(<span class="text-purple-600">$measurements</span>);
}
        </pre>

        <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
            <div class="py-6 text-white font-semibold text-xl mb-4">
                Build
            </div>

            <div class="text-bluegray-500 text-sm p-4 md:px-8">
                <b class="text-white">Minimal valuable Product (MVP)</b> <br>
                The first prototype should aim to only satisfy the first steps.
                For a new idea the prototype does not need to use the technology the final product should use.
                For a new feature, a faked customer video can hint first flaws in the UX.
                To get the first feedback from a customer a concierge in the background may handle what later a backend
                would do.
                <br>
                <br>
                <b class="text-white">Small batch sizes and continuous deployment</b> <br>
                For quick and efficient iterations a small team with diverse roles,
                with the ability to make decisions, implement and deploy new prototypes in small cycles
                to retrieve feedback as fast as possible.
                <br>
                <br>
                <b class="text-white">Create a platform for Experimentation!</b>
            </div>
        </div>

        <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
            <div class="py-6 text-white font-semibold text-xl mb-4">
                Measure
            </div>

            <div class="text-bluegray-500 text-sm p-4 md:px-8">
                <b class="text-white">Use common Methodologies</b> <br>
                A-B Split can show how different customers react to small variations of the same implementations. <br>
                Cohort Analysis can show the behavior of different customer groups separated by behavior or status
                <br>
                <br>
                <b class="text-white">Design a good Hypothesis</b>
                <div class="flex justify-evenly flex-wrap my-4">
                    <div>
                        <h4 class="text-bluegray-200">Actionable</h4>
                        <p class="text-center">
                            clear idea of cause and effect
                        </p>
                    </div>
                    <div>
                        <h4 class="text-bluegray-200">Auditable</h4>
                        <p class="text-center">
                            Ability to measure results
                        </p>
                    </div>
                    <div>
                        <h4 class="text-bluegray-200">Actionable</h4>
                        <p class="text-center">
                            clear and understandable reports
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col sm:flex-row bg-white rounded p-2 space-x-0 sm:space-x-2 bg-opacity-25 text-white my-6">
                    <div class="flex justify-center items-baseline m-auto sm:m-2 w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <div class="flex-grow text-center  md:text-sm">
                        <b>
                            Researcher Bias
                        </b>
                        When researchers selectively notice evidence that supports their hypothesis or expectations.
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 text-bluegray-500 text-sm rounded m-4 md:m-8 p-4 md:p-8">
            <div class="py-6 text-white font-semibold text-xl mb-4">
                Evaluate
            </div>

            <b class="text-white">Questions to ask</b> <br>
            Why? Followed by why, why, why and why? And don't let 5 blames be an answer.<br>
            When did a problem occurre? <br>
            Who was involved? <br>
            What was the process? <br>
            What cen be done to avoid the problem?
            <br>
            <br>

            <b class="text-white">3 Engines of growth</b> <br>
            <b>Sticky Engine</b>: Maximise for user stay and retention<br>
            <b>Viral Engine</b>: Maximise for the number of new users per user<br>
            <b>Paid Engine</b>: Minimize the cost per acquisition<br>
            <br>

            <b class="text-white">Reasons to Pivot</b>
            <div class="grid grid-cols-3 my-4">
                <div class="py-2">
                    Focus on less features
                </div>
                <div class="h-6 w-6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                    </svg>
                </div>
                <div class="py-2">
                    More feature
                </div>
                <div class="py-2">
                    Serve the wrong people
                </div>
                <div class="h-6 w-6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <div class="py-2">
                    Solve the wrong problem
                </div>
                <div class="py-2">
                    Wrong channel or platform
                </div>
                <div class="h-6 w-6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <div class="py-2">
                    Wrong software technology
                </div>
                <div class="py-2">
                    Advertising in the wrong direction
                </div>
                <div class="h-6 w-6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="py-2">
                    Making money the wrong way
                </div>
            </div>

            <div
                class="flex flex-col sm:flex-row bg-white rounded p-2 space-x-0 sm:space-x-2 bg-opacity-25 text-white my-6">
                <div class="flex justify-center items-baseline m-auto sm:m-2 w-6 h-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <div class="flex-grow text-center  md:text-sm">
                    Important is WHO the customer is, WHAT the customer needs, and HOW the company grows <br>
                    Unimportant is everything that does not lead to validated learning
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
