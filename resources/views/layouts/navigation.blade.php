<nav x-data="{ open: false }" class="bg-gradient-to-br from-bluegray-800 to-transparent text-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 pt-4">
            <!-- Logo -->
            <div class="">
                <a href="{{ route('home') }}">Philodev</a>
            </div>

            <div>
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
