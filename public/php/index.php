<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>OCEANINSIGHTS - Beranda</title>
</head>

<body class="font-utama bg-sky-50 scroll-smooth">
    <!-- header start -->
    <?php include('../inc/inc-header.php')?>
    <!-- header end -->

    <!-- hero start -->
    <section id="home" class="pt-0">
        <div class=" hidden w-full h-[50vh] bg-Dark-600 lg:block" autoplay ></div>
        <div class="container ">
            <div class="w-full h-[350px] bg-slate-300 bg-cover lg:h-[40vh] lg:w-[1200px] lg:mx-auto lg:z-10 lg:translate-x-1 lg:-mt-[21vh] lg:rounded-md lg:object-cover lg:shadow-2xl" style="background-image: url(img/hero/ubur2.jpg);">
                <div class="flex bg-Dark-900 bg-opacity-20 h-full lg:rounded-md ">
                    <div class="w-full my-[150px] text-center  lg:text-center lg:pt-10 lg:my-auto">
                        <h1 class="text-4xl font-bold text-sky-300 mb-[10px] lg:text-6xl lg:mb-4">OCEAN<span class="text-Primary-400">INSIGHTS</span></h1>
                        <p class="text-sm text-sky-200 mb-[20px] lg:text-lg lg:mb-[80px]">Come explore the fascinating charms of marine life. Discover the unexpected beauty <span class="block lg:block ">in every corner of the vast marine ecosystem.</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- misi start -->
    <section>
        <div class="w-full h-[180px] bg-sky-100 lg:h-[200px] lg:shadow-md">
            <div class="flex-col lg:flex-none">
                <div class="text-center font-semibold text-Dark-400 pt-8 lg:mt-14 lg:my-5 lg:text-lg">Our Vision</div>
                <h2 class="text-center font-base text-sm mt-4  text-Dark-500 lg:my-auto lg:text-lg">Reliable Information on Marine Ecosystem Exploration and Efforts to <span class="block text-[#010101] font-semibold text-base mx-12 lg:py-1 lg:px-2 bg-opacity-50 lg:mx-[400px] lg:text-Dark-600 lg:hover:text-[#010101] rounded-md lg:text-xl hover:bg-sky-100 hover:bg-opacity-50 ">Preservation of Marine Resources</span></h2>
            </div>
        </div>
    </section>
    <!-- misi end -->

    <!-- topik start -->
    <!-- mobile -->
    <section>
        <div class="container lg:hidden">
            <div class="grid grid-rows-4 gap-[4px] px-3 ">
                <a href="#" class="h-15 aspect-[2/1]">
                    <div class="w-full h-full bg-black bg-[url('img/hero/11.jpeg')] bg-cover bg-center">
                        <div class="w-full h-full bg-slate-900 bg-opacity-40 grid grid-rows-3">
                            <h1 class="text-sm font-semibold text-white-100  uppercase px-4 row-start-3 ">ekosistem laut</h1>
                        </div>
                    </div>
                </a>
                <a href="#" class="h-15 aspect-[2/1]">
                    <div class="w-full h-full bg-black bg-[url('img/hero/13.jpeg')] bg-cover">
                        <div class="w-full h-full bg-slate-900 bg-opacity-50 grid grid-rows-3">
                            <h1 class="text-sm font-semibold text-white-100  uppercase px-4 row-start-3 ">zona laut</h1>
                        </div>
                    </div>
                </a>
                <a href="#" class="h-15 aspect-[2/1]">
                    <div class="w-full h-full bg-black bg-[url('img/hero/6.jpeg')] bg-cover bg-center">
                        <div class="w-full h-full bg-slate-900 bg-opacity-50 grid grid-rows-3">
                            <h1 class="text-sm font-semibold text-white-100  uppercase px-4 row-start-3 ">pemberdayaan masyarakat</h1>
                        </div>
                    </div>
                </a>
                <a href="#" class="h-15 aspect-[2/1]">
                    <div class="w-full h-full bg-black bg-[url('img/hero/7.jpg')] bg-cover bg-bottom">
                        <div class="w-full h-full bg-slate-900 bg-opacity-50 grid grid-rows-3">
                            <h1 class="text-sm font-semibold text-white-100  uppercase px-4 row-start-3 ">pemberdayaan ekosistem laut</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- dekstop -->
    <section id="topik" class="container hidden lg:block">
        <h1 class="text-2xl font-semibold pt-24 text-center pb-16 text-Dark-400">Topic</h1>
        <div class="flex flex-wrap gap-10 justify-center">
            <div class="relative cursor-pointer transition-all duration-500 hover:translate-y-2 flex w-80 flex-col rounded-xl bg-sky-100 bg-clip-border text-Dark-400 shadow-sm shadow-Dark-200">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-md bg-blue-gray-500 bg-clip-border text-white shadow-md shadow-Dark-200 bg-[url('img/topik/ekosistem.jpg')] bg-cover">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-bold leading-snug tracking-normal text-Dark-800 antialiased">
                    Ekosistem Laut
                    </h5>
                    <p>Ekosistem laut merupakan kompleksitas kehidupan di dalam air, melibatkan interaksi...</p>
                </div>
                <div class="p-6 pt-0">
                    <a href="ekosistem.php">
                        <button class="overflow-hidden relative w-32 m-auto h-10 bg-sky-100 shadow-sm shadow-Dark-200  border-none rounded-md text-xl font-bold cursor-pointer z-10 group ">
                                <span class="text-base text-md text-Dark-800">Read more</span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-800 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                            <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-8 z-10 text-base text-md text-sky-100">Explore!</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="relative cursor-pointer transition-all duration-500 hover:translate-y-2 flex w-80 flex-col rounded-xl bg-sky-100 bg-clip-border text-Dark-400 shadow-sm shadow-Dark-200">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-md bg-blue-gray-500 bg-clip-border text-white shadow-md shadow-Dark-200 bg-[url('img/topik/zona.jpg')] bg-cover">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-bold leading-snug tracking-normal text-Dark-800 antialiased">
                    Zona Laut
                    </h5>
                    <p>Zona laut adalah wilayah kaya biodiversitas yang dibagi menjadi beberapa...</p>
                </div>
                <div class="p-6 pt-0">
                    <a href="../php/zona.php">
                        <button class="overflow-hidden relative w-32 m-auto h-10 bg-sky-100 shadow-sm shadow-Dark-200  border-none rounded-md text-xl font-bold cursor-pointer z-10 group ">
                                <span class="text-base text-md text-Dark-800">Read more</span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-800 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                            <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-8 z-10 text-base text-md text-sky-100">Explore!</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="relative cursor-pointer transition-all duration-500 hover:translate-y-2 flex w-80 flex-col rounded-xl bg-sky-100 bg-clip-border text-Dark-400 shadow-sm shadow-Dark-200">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-md bg-blue-gray-500 bg-clip-border text-white shadow-md shadow-Dark-200 bg-[url('img/topik/biota.jpg')] bg-cover bg-center">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-bold leading-snug tracking-normal text-Dark-800 antialiased">
                    Bioma Laut
                    </h5>
                    <p>Bioma laut adalah ekosistem besar yang mencakup perairan laut di seluruh dunia...</p>
                </div>
                <div class="p-6 pt-0">
                    <a href="../php/bioma.php">
                        <button class="overflow-hidden relative w-32 m-auto h-10 bg-sky-100 shadow-sm shadow-Dark-200  border-none rounded-md text-xl font-bold cursor-pointer z-10 group ">
                                <span class="text-base text-md text-Dark-800">Read more</span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-800 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                            <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-8 z-10 text-base text-md text-sky-100">Explore!</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="my-10 cursor-pointer transition duration-500 hover:translate-y-2 relative flex w-80 flex-col rounded-xl bg-sky-100 bg-clip-border text-Dark-400 shadow-sm shadow-Dark-200">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-md bg-blue-gray-500 bg-clip-border text-white shadow-md shadow-Dark-200 bg-[url('img/topik/polusi.jpg')] bg-cover bg-center">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-bold leading-snug tracking-normal text-Dark-800 antialiased">
                    Pencemaran Laut
                    </h5>
                    <p>Pencemaran laut adalah masalah serius yang terjadi ketika zat-zat berbahaya, limbah, atau polutan lainnya...</p>
                </div>
                <div class="p-6 pt-0">
                    <a href="../php/polusi.php">
                        <button class="overflow-hidden relative w-32 m-auto h-10 bg-sky-100 shadow-sm shadow-Dark-200  border-none rounded-md text-xl font-bold cursor-pointer z-10 group ">
                                <span class="text-base text-md text-Dark-800">Read more</span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-800 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                            <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-8 z-10 text-base text-md text-sky-100">Explore!</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="my-10 cursor-pointer transition duration-500 hover:translate-y-2 relative flex w-80 flex-col rounded-xl bg-sky-100 bg-clip-border text-Dark-400 shadow-sm shadow-Dark-200">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-md bg-blue-gray-500 bg-clip-border text-white shadow-md shadow-Dark-200 bg-[url('img/topik/konservasi1.jpg')] bg-cover bg-center">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-bold leading-snug tracking-normal text-Dark-800 antialiased">
                    Konservasi Laut
                    </h5>
                    <p>Konservasi laut adalah upaya untuk melindungi, memelihara, dan merestorasi ekosistem laut serta keanekaragaman hayati...</p>
                </div>
                <div class="p-6 pt-0">
                    <a href="#">
                        <button class="overflow-hidden relative w-32 m-auto h-10 bg-sky-100 shadow-sm shadow-Dark-200  border-none rounded-md text-xl font-bold cursor-pointer z-10 group ">
                                <span class="text-base text-md text-Dark-800">Read more</span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-800 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                            <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-8 z-10 text-base text-md text-sky-100">Explore!</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="my-10 cursor-pointer transition duration-500 hover:translate-y-2 relative flex w-80 flex-col rounded-xl bg-sky-100 bg-clip-border text-Dark-400 shadow-sm shadow-Dark-200">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-md bg-blue-gray-500 bg-clip-border text-white shadow-md shadow-Dark-200 bg-[url('img/topik/sdgs.jpg')] bg-cover bg-center">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-bold leading-snug tracking-normal text-Dark-800 antialiased">
                    Sustainable Development Goals
                    </h5>
                    <p>Tujuan 14 TPB adalah melestarikan dan memanfaatkan secara berkelanjutan sumber daya kelautan ...</p>
                </div>
                <div class="p-6 pt-0">
                    <a href="#">
                        <button class="overflow-hidden relative w-32 m-auto h-10 bg-sky-100 shadow-sm shadow-Dark-200  border-none rounded-md text-xl font-bold cursor-pointer z-10 group ">
                                <span class="text-base text-md text-Dark-800">Read more</span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                            <span class="absolute w-36 h-32 -top-8 -left-2 bg-Dark-800 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                            <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-8 z-10 text-base text-md text-sky-100">Explore!</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- topik end -->
    
    <!-- discover start -->
    <!-- mobile -->
    <section class="lg:hidden pt-12">
        <div class="container">
            <div class="flex flex-wrap px-3 pb-12 gap-[10px] bg-Dark-600">
                <h1 class="text-lg font-semibold mx-auto uppercase text-center text-Primary-400 py-6">jelajahi pesona <span class="block text-sky-50">laut Indonesia</span></h1>
                <div class="w-full aspect-video bg-black">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/XW5Op06q2yA?si=Ko_9svBKED1xrs9H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="w-full aspect-video bg-black">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/PL5HxA01Fz4?si=KLwdnqk7AyrX9Eg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="w-full aspect-video bg-black">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/dEnplvG7jEE?si=R70v-qNEdf3nYjWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- dekstop -->
    <section id="eksplorasi" class="hidden lg:block pt-24">
        <div class="container bg-Dark-600 pt-14">
            <div class="grid grid-rows">
                <div class="mx-auto">
                    <div class="w-[1010px] h-[200px] ">
                        <h1 class="text-6xl font-bold text-left text-Primary-400 tracking-[3px] leading-relaxed">Discover the Sea
                            <span class="block text-right text-[#85F2F3]">In a New Way</span>
                        </h1>
                    </div>
                </div>
                <div class="grid grid-cols-2 mx-auto gap-[10px] pt-10 pb-12">
                    <div class="w-[500px] h-[300px] rounded-md overflow-hidden ">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/PL5HxA01Fz4?si=KLwdnqk7AyrX9Eg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="w-[500px] h-[300px] rounded-md overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/XW5Op06q2yA?si=Ko_9svBKED1xrs9H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="w-[500px] h-[300px] rounded-md overflow-hidden ">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/JF6iI-nBV9g?si=yjFTZyq4CVthqF1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="w-[500px] h-[300px] rounded-md overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/dEnplvG7jEE?si=R70v-qNEdf3nYjWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discover end -->

    <!-- artikel start -->
    <!-- mobile -->
    <section class="lg:hidden">
        <div class="container">
            <h1 class="text-base font-semibold text-center py-8">Artikel Terkait</h1>
            <div class="flex flex-wrap">
                <div class="bg-sky-50 rounded-lg overflow-hidden mx-auto w-[350px] aspect-square flex flex-wrap shadow-md mb-10">
                    <div class="w-full h-[50%] bg-center bg-[url('img/hero/8.jpg')]"></div>
                    <div class="w-full h-[50%] grid grid-rows-4">
                        <h1 class="mx-6 text-black row-start-2 text-lg font-bold">Semua Tentang Lautan</h1>
                        <a href="https://education.nationalgeographic.org/resource/all-about-the-ocean/" class="mx-6 text-blue-500 row-start-4 ">Selengkapnya</a>
                    </div>
                </div>
                <div class="bg-sky-50 rounded-lg overflow-hidden mx-auto w-[350px] aspect-square flex flex-wrap shadow-md mb-10">
                    <div class="w-full h-[50%] bg-center bg-[url('img/hero/8.jpg')]"></div>
                    <div class="w-full h-[50%] grid grid-rows-4">
                        <h1 class="mx-6 text-black row-start-2 text-lg font-bold">Semua Tentang Lautan</h1>
                        <a href="https://education.nationalgeographic.org/resource/all-about-the-ocean/" class="mx-6 text-blue-500 row-start-4 ">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- dekstop -->
    <section id="artikel">
        <div class="container py-24 hidden lg:block ">
            <div class="flex flex-col justify-center">
                <h1 class=" text-2xl font-semibold mx-auto pb-8 text-Dark-400">Article</h1>
                <div class="grid grid-cols-3 max-w-[1200px] mx-auto gap-6 ">
                    <a href="https://education.nationalgeographic.org/resource/all-about-the-ocean/" class="h-[400px] w-[295px] bg-sky-50 grid grid-rows-2 shadow-md rounded-md overflow-hidden transition-all duration-700  hover:translate-y-2 cursor-pointer">
                        <!-- <div class="bg-[url('img/hero/8.jpg')] bg-cover"></div> -->
                        <div class="bg-[url('img/hero/8.jpg')] bg-cover"></div>
                        <div class="flex flex-wrap">
                            <p></p>
                            <h1 class="w-full text-xl font-bold mx-4 my-6">Tentang Laut: Lautan mencakup 70 persen permukaan bumi</h1>
                            <button class="relative py-0 mb-3 px-3 mx-4 text-Dark-800 before:text-Dark-800 text-base font-bold rounded-md overflow-hidden bg-white transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-sky-300 before:to-sky-50 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-md hover:before:left-0">
                            <p class="text-base font-normal">Read more</p>
                            </button>
                        </div>
                    </a>
                    <a href="https://setkab.go.id/stop-pencemaran-laut-indonesia/" class="h-[400px] w-[295px] bg-sky-50 grid grid-rows-2 shadow-md rounded-md overflow-hidden transition-all duration-700  hover:translate-y-2 cursor-pointer">
                        <!-- <div class="bg-[url('img/hero/8.jpg')] bg-cover"></div> -->
                        <div class="bg-[url('img/topik/pencemaran.jpg')] bg-cover"></div>
                        <div class="flex flex-wrap">
                            <p></p>
                            <h1 class="w-full text-xl font-bold mx-4 my-6">STOP!!! Pencemaran Laut</h1>
                            <button class="relative py-0 mb-3 px-3 mx-4 text-Dark-800 before:text-Dark-800 text-base font-bold rounded-md overflow-hidden bg-white transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-sky-300 before:to-sky-50 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-md hover:before:left-0">
                            <p class="text-base font-normal">Read more</p>
                            </button>
                        </div>
                    </a>
                    <a href="https://education.nationalgeographic.org/resource/conservation-encyclopedic/" class="h-[400px] w-[295px] bg-sky-50 grid grid-rows-2 shadow-md rounded-md overflow-hidden transition-all duration-700  hover:translate-y-2 cursor-pointer">
                        <!-- <div class="bg-[url('img/hero/8.jpg')] bg-cover"></div> -->
                        <div class="bg-[url('img/topik/konservasi.jpg')] bg-cover"></div>
                        <div class="flex flex-wrap">
                            <p></p>
                            <h1 class="w-full text-xl font-bold mx-4 my-6">Konservasi: Melestarikan Tanah dan Kehidupan</h1>
                            <button class="relative py-0 mb-3 px-3 mx-4 text-Dark-800 before:text-Dark-800 text-base font-bold rounded-md overflow-hidden bg-white transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-sky-300 before:to-sky-50 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-md hover:before:left-0">
                            <p class="text-base font-normal">Read more</p>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- artikel end -->

    <!-- footer start -->
    <?php include('../inc/inc-footer.php')?>
    <!-- footer end -->
    <script src="../js/script.js"></script>
</body>
</html>