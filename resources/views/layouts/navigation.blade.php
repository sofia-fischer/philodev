<nav x-data="{ open: false }" class="bg-gradient-to-bl from-bluegray-800 to-transparent text-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="">
                <a href="{{ route('home') }}">
                    <div class="h-8 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800">
                            <style>tspan {
                                    white-space: pre
                                }</style>
                            <path fill="#ffffff"
                                  d="M26.08 385.21L159.46 313.09L174.23 342.2L56.49 404.33L174.23 467.32L159.46 496L26.08 423.44L26.08 385.21ZM259.82 244.88Q282.84 244.88 298.92 254.44Q314.99 263.56 323.25 278.77Q331.5 293.98 331.5 311.79Q331.5 327.86 326.72 339.16Q321.95 350.45 315.43 358.27Q308.91 365.66 297.62 375.22Q281.98 388.69 274.16 399.98Q266.77 410.84 266.77 429.52L266.77 449.51L230.28 449.51L230.28 427.35Q230.28 409.54 235.05 396.94Q239.83 384.34 246.78 376.96Q253.74 369.14 265.03 359.14Q279.37 346.98 285.89 337.42Q292.84 327.86 292.84 311.79Q292.84 294.84 283.28 285.72Q274.16 276.16 257.65 276.16Q243.74 276.16 232.01 283.11Q220.72 290.06 208.55 305.71L185.09 287.46Q214.2 244.88 259.82 244.88ZM249.39 496.87Q261.99 496.87 269.81 505.55Q277.63 513.81 277.63 525.54Q277.63 537.27 269.81 545.96Q261.99 554.21 249.39 554.21Q237.23 554.21 229.41 545.96Q221.59 537.27 221.59 525.54Q221.59 513.81 229.41 505.55Q237.23 496.87 249.39 496.87ZM625.63 342.2L640.4 313.09L773.78 385.21L773.78 423.44L640.4 496L625.63 467.32L743.37 404.33L625.63 342.2Z"/>
                            <path fill="#333374"
                                  d="M587.83 354.36Q587.83 415.19 564.81 443.86Q542.21 472.1 492.69 475.58L492.69 558.56L456.63 563.34L456.63 475.58Q409.27 472.54 387.11 445.6Q365.39 418.23 365.39 365.23Q365.39 332.64 371.04 303.1Q377.12 273.56 386.68 241.84L423.17 241.84Q414.05 272.69 408.4 301.8Q403.19 330.9 403.19 364.36Q403.19 406.5 415.79 425.18Q428.39 443.43 456.63 446.9L456.63 314.83Q456.63 278.33 473.14 257.92Q490.08 237.06 520.06 237.06Q553.51 237.06 570.45 264Q587.83 290.5 587.83 354.36ZM492.69 446.9Q514.41 444.73 526.57 435.61Q539.17 426.05 544.39 406.93Q550.03 387.82 550.03 355.23Q550.03 320.04 546.56 300.93Q543.52 281.81 537 274.42Q530.92 267.04 520.06 267.04Q506.59 267.04 499.64 277.47Q492.69 287.89 492.69 316.57L492.69 446.9Z"/>
                        </svg>
                    </div>
                </a>
            </div>

            <div class=" pt-4">
                <button id="footer-contact-trigger" class="text-blue-600">
                    Contact
                </button>
            </div>
        </div>
    </div>

    <style>
        .is-visible {
            visibility: visible;
            pointer-events: auto;
        }
    </style>

    <div class="bg-black opacity-50 w-screen h-screen absolute invisible left-0 top-0" id="footer-contact-cover"></div>
    <div
        class="bg-white text-small invisible rounded-lg shadow-lg max-w-xl top-32 w-full left-0 right-0 mx-auto p-4 text-center absolute overflow-y-scroll"
        style="z-index: 99"
        id="footer-contact-modal">
        <h2 class="text-center text-bluegray-600 pb-2">
            Contact
        </h2>

        <div class="text-bluegray-800">
            Sofia Fischer
            <br>
            <a href="mailto:sofia.k.christ@gmail.com" class="text-blue-600">sofia.k.christ@gmail.com</a>
            <br><br>
        </div>
    </div>

    <script>
        document.getElementById('footer-contact-trigger').addEventListener('click', function () {
            document.getElementById('footer-contact-cover').classList.add('is-visible');
            document.getElementById('footer-contact-modal').classList.add('is-visible');
        });

        document.getElementById('footer-contact-cover').addEventListener('click', function () {
            document.getElementById('footer-contact-cover').classList.remove('is-visible');
            document.getElementById('footer-contact-modal').classList.remove('is-visible');
        });

    </script>

</nav>
