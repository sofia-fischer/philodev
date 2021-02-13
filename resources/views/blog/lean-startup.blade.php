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
                <div class="flex flex-wrap justify-evenly">
                    <div class="flex text-sm border rounded-full m-2">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <div class="mx-2">
                            Management
                        </div>
                    </div>
                    <div class="flex text-sm border rounded-full m-2">
                        <div class="w-6 h-6 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="break-words">
                            For Management under uncertainty.
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
                <b>Minimal valuable Product (MVP)</b> <br>
                The first prototype should aim to only satisfy the first steps.
                For a new idea the prototype does not need to use the technology the final product should use.
                For a new feature, a faked customer video can hint first flaws in the UX.
                To get the first feedback from a customer a concierge in the background may handle what later a backend
                would do.
                <br>
                <br>
                <b>Small batch sizes and continuous deployment</b> <br>
                For quick and efficient iterations a small team with diverse roles,
                with the ability to make decisions, implement and deploy new prototypes in small cycles
                to retrieve feedback as fast as possible.
                <br>
                <br>
                <b>Create a platform for Experimentation!</b>
            </div>
        </div>

        <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
            <div class="py-6 text-white font-semibold text-xl mb-4">
                Measure
            </div>

            <div class="text-bluegray-500 text-sm p-4 md:px-8">
                <b>Use common Methodologies</b> <br>
                A-B Split can show how different customers react to small variations of the same implementations. <br>
                Cohort Analysis can show the behavior of different customer groups separated by behavior or status
                <br>
                <br>
                <b>Design Hypothesis-based Measurements</b> <br>
                Actionable - clear idea of cause and effect <br>
                Auditable - Ability to identify results <br>
                Accessible - clear and understandable reports <br>
                <br>
                <b>Don't think - just observe!</b>
            </div>
        </div>

        <div class="bg-gradient-to-b from-bluegray-800 to-bluegray-900 rounded m-4 md:m-8 py-4">
            <div class="py-6 text-white font-semibold text-xl mb-4">
                Learn
            </div>

            <div class="text-bluegray-500 text-sm p-4 md:px-8">
                <b>Questions to ask</b> <br>
                Why? Followed by why, why, why and why? And don't let 5 blames be an answer.<br>
                When did a problem occurre? <br>
                Who was involved? <br>
                What was the process? <br>
                What cen be done to avoid the problem?
                <br>
                <br>
                <b>Focus on the important</b> <br>
                Important is WHO the customer is, WHAT the customer needs, and HOW the company grows <br>
                Unimportant is everything that does not lead to validated learning <br>
                <br>
                <b>3 Engines of growth</b> <br>
                Sticky Engine - Maximise for user stay and retention<br>
                Viral Engine - Maximise for the number of new users per user<br>
                Paid Engine - Minimize the cost per acquisition<br>
                <br>
                <b>Reasons to Pivot</b> <br>
                Zoom in - We only need this feature<br>
                Zoom out - We need more feature<br>
                Customer Segment - We serve the wrong people <br>
                Customer Need - We solve the wrong problem <br>
                Technology - we need to change the used technology / operating system / Hardware<br>
                Value Capture - we are making money the wrong way <br>
                Channel - we are selling the wrong way <br>
                <br>
                <b>Learn to grow!</b>
            </div>
        </div>
    </div>

</x-app-layout>
