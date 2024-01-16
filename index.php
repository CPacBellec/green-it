<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="styles.css">
<section id="hero" class="bg-slate-500 p-8">
    <div class="p-8">
        <h1 class="text-white text-3xl font-bold">UnderCity</h1>
    </div>
    <div class="p-8">
        <h2 class="text-white text-2xl font-bold mb-10">Lorem ipsum.</h2>
        <p class="text-white text-xl mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error beatae quibusdam sit odit dolores laboriosam quo minima. Fugit ad dicta praesentium eum ipsa similique aperiam deleniti placeat laborum perferendis!</p>
    </div>
</section>
<section id="bg-YT" class="p-8">
    <div class="block">
        <div class="flex items-center justify-center">
            <a class="w-1/4 h-1/8" href="https://www.youtube.com/embed/eogkyCnQQzM?list=TLGGGjjnOcqPZkExNjAxMjAyNA" target="_blank" rel="noopener noreferrer">
                <img class=" h-1/4" src="https://img.youtube.com/vi/eogkyCnQQzM/maxresdefault.jpg" alt="Music makes you concentrate on study in the evening">
            </a>
        </div>
    </div>
</section>
<section id="partenaire" class="bg-slate-800">
<div class="p-8">
        <h2 class="text-white text-center text-2xl font-bold">Nos partenaires</h2>
    </div>
    <div class="p-8">
        <p class="text-white text-center text-xl mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error beatae quibusdam sit odit dolores laboriosam quo minima. Fugit ad dicta praesentium eum ipsa similique aperiam deleniti placeat laborum perferendis!</p>
        <div class="flex justify-center items-center">
            <img class="w-1/3" src="./assets/64063.jpg" alt="Logos partenaires">
        </div>  
    </div>
</section>
<section id="" class="p-8 bg-slate-500">
    <h2 class="text-center text-white font-bold text-2xl">Fonctionnement</h2>
    <div class="p-8">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/undraw_art_re_vj2w.svg" class="absolute block w-1/4 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <p class="text-center text-white text-lg font-bold">Lorem ipsum</p>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/undraw_explore_re_8l4v.svg" class="absolute block w-1/4 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <p class="text-center text-white text-lg font-bold">Lorem ipsum</p>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/undraw_nature_m5ll.svg" class="absolute block w-1/4 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <p class="text-center text-white text-lg font-bold">Lorem ipsum</p>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/undraw_winter_road_mcqj.svg" class="absolute block w-1/4 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <p class="text-center text-white text-lg font-bold">Lorem ipsum</p>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./assets/undraw_nature_on_screen_xkli.svg" class="absolute block w-1/4 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <p class="text-center text-white text-lg font-bold">Lorem ipsum</p>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</section>
<section id="social" class="bg-slate-800 p-8">
    <div class="p-8">
        <h2 class="text-white text-center font-bold text-2xl mb-8">Réseaux sociaux</h2>
        <p class="text-white mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur incidunt, ipsam consequatur laborum quod recusandae asperiores consequuntur soluta rerum omnis numquam ullam natus itaque deleniti eius maiores impedit, ab obcaecati!</p>
        <div class="flex justify-evenly items-center p-8">
            <a href="https://twitter.com">
                <img class="w-20" src="./assets/square-twitter.svg" alt="twitter logo">
            </a>
            <a href="https://instagram.com">
                <img class="w-20" src="./assets/square-instagram.svg" alt="instagram logo">
            </a>
            <a href="https://linkedin.com">
                <img class="w-20" src="./assets/linkedin.svg" alt="linkedin logo">
            </a>
            
            
        </div>

    </div>
</section>


<?php
include_once 'footer.php';
?>