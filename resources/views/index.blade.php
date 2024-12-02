<x-layout>
    <x-slot:heading> </x-slot:heading>
    <!-- Hero Banner -->
    <div class="flex justify-center items-center w-full h-full backdrop-brightness-50">
        <div class="container px-32">
            <p class="text-white text-2xl font-serif subpixel-antialiased drop-shadow-md">Welcome to</p>
            <h1 class="font-bold text-7xl font-serif text-decoration-line: text-yellow-400 my-3 subpixel-antialiased drop-shadow-lg">
                FEU Institute of Technology:<br>Capstone Project Repository
            </h1>
            <p class="text-white text-2xl font-serif text-justify subpixel-antialiased drop-shadow-md">
                A centralized platform designed to highlight and preserve the different capstone projects of FEU Tech students.
                Explore a diverse collection of innovative solutions that reflect creativity, technical expertise, and real-world impact.
            </p>
        </div>
    </div>
    <!-- Explore Projects -->
    <div class="flex justify-center items-center w-full h-full bg-gradient-to-r from-green-800 to-yellow-700">
        <div class="container px-32">
            <h1 class="font-bold text-8xl font-serif text-decoration-line: text-yellow-400 my-3 subpixel-antialiased drop-shadow-lg">
                Capstone Projects
            </h1>
            <p class="text-white text-2xl font-serif text-justify subpixel-antialiased drop-shadow-md">
                Discover a showcase of exceptional capstone projects from FEU Tech's brightest minds.
                Dive into creativity,<br> technology, and ingenuity all in one place.
            </p>
            <button class="p-5 my-5 rounded-lg bg-black hover:bg-yellow-400 hover:text-black duration-300 font-bold text-yellow-400" type="button">
                <a href="/projects">Explore Projects</a>
            </button>
        </div>
    </div>
    <!-- About Section -->
    <div class="flex justify-center items-center w-full h-full bg-[url('/img/about2.png')] bg-cover bg-fixed">
        <div class="container p-28 backdrop-brightness-50 backdrop-blur-sm rounded-2xl">
            <h1 class="font-bold text-7xl font-serif text-decoration-line: text-yellow-400 mb-5 subpixel-antialiased drop-shadow-lg">
                About
            </h1>
            <p class="text-white text-2xl font-serif text-justify subpixel-antialiased drop-shadow-md">
                The FEU Tech Capstone Repository is a digital platform dedicated to showcasing the innovative and advanced projects created by the talented students of FEU Tech.
                It serves as a hub for collaboration, inspiration, and academic excellence, offering access to a diverse range of capstone projects from various disciplines.
                <br><br>
                This repository allows users to explore projects with comprehensive details, including documentation, posters, and teaser materials.
                It also features enhanced search and filtering options, making it easy to find projects based on title, advisor, tags, or other criteria.
                Additionally, users can engage with the projects by rating and providing feedback, contributing to continuous learning and improvement.
                <br><br>
                The platform provides insightful statistics about project views and downloads, allowing users to track the impact of each project.
                The mission of the repository is to celebrate student innovation, promote collaboration among students, faculty, and industry stakeholders,
                and serve as a valuable resource for future researchers and developers. By fostering a culture of innovation, the FEU Tech Capstone Repository
                highlights the potential of every student and contributes to the advancement of technology and research.
            </p>
        </div>
    </div>
    <!-- Footer -->
    <div class="w-full h-1/5 bg-black text-white py-8">
        <div class="flex flex-col justify-center items-center w-full bg-black text-white py-6">
            <p class="text-lg font-bold mb-4">FEU Institute of Technology Capstone Repository</p>
            <div class="flex space-x-6">
                <a href="/" class="hover:text-yellow-400">Home</a>
                <a href="/projects" class="hover:text-yellow-400">Projects</a>
                <a href="/statistics" class="hover:text-yellow-400">Statistics</a>
                <a href="/contact" class="hover:text-yellow-400">Contact</a>
            </div>
            <p class="mt-4 text-sm text-gray-400">© 2024 FEU Institute of Technology. All Rights Reserved.</p>
        </div>
    </div>
</x-layout>