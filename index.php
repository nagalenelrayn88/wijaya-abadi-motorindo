
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wijaya Abadi Motorindo membantu Anda menemukan Honda BeAT dan Honda BeAT Street. Hubungi dealer untuk informasi harga dan promo terbaru.">
    <title>Wijaya Abadi Motorindo | Dealer Motor Honda</title>
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>

<body class="bg-neutral-950 text-white antialiased">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-neutral-950/95">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

            <a href="#beranda" class="flex items-center gap-3 leading-tight">
                <img
                    src="assets/images/images-removebg-preview (1).png"
                    alt="Logo Wijaya Abadi Motorindo"
                    style="width: 52px; height: 52px; object-fit: contain; flex-shrink: 0;"
                >

                <span>
                    <span class="block text-lg font-black tracking-widest text-amber-400">
                        WIJAYA ABADI
                    </span>
                    <span class="text-xs tracking-[0.35em] text-neutral-400">
                        MOTORINDO
                    </span>
                </span>
            </a>

            <!-- MENU HAMBURGER -->
            <details class="relative">
                <summary
                    aria-label="Buka menu navigasi"
                    class="flex h-11 w-11 cursor-pointer list-none flex-col items-center justify-center gap-1.5 rounded-lg border border-white/15 hover:border-amber-400 [&::-webkit-details-marker]:hidden"
                >
                    <span class="h-0.5 w-5 rounded bg-amber-400"></span>
                    <span class="h-0.5 w-5 rounded bg-amber-400"></span>
                    <span class="h-0.5 w-5 rounded bg-amber-400"></span>
                </summary>

                <nav class="absolute right-0 top-14 w-60 rounded-xl border border-white/10 bg-neutral-900 p-2 shadow-2xl">
                    <a href="#beranda" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">
                        Beranda
                    </a>
                    <a href="#tentang-kami" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">
                        Tentang Kami
                    </a>
                    <a href="#daftar-harga" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">
                        Daftar Harga
                    </a>
                    <a href="#promo-spesial" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">
                        Promo Spesial
                    </a>
                    <a href="#lokasi-dealer" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">
                        Lokasi Dealer
                    </a>
                </nav>
            </details>

        </div>
    </header>

    <main>

        <!-- HERO -->
        <section id="beranda" class="relative scroll-mt-24 overflow-hidden border-b border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-amber-500/10 via-neutral-950 to-neutral-950"></div>

            <div class="relative mx-auto grid min-h-[580px] max-w-7xl items-center gap-12 px-5 py-20 lg:grid-cols-2 lg:px-8 lg:py-28">

                <div>
                    <p class="mb-5 text-xs font-bold tracking-[0.3em] text-amber-400">
                        DEALER MOTOR HONDA
                    </p>

                    <h1 class="max-w-2xl text-4xl font-black leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                        Perjalanan Anda,
                        <span class="text-amber-400">Pilihan Kami.</span>
                    </h1>

                    <p class="mt-6 max-w-lg leading-7 text-neutral-400">
                        Temukan motor Honda yang sesuai dengan kebutuhan Anda.
                        Pilih Honda BeAT atau BeAT Street dan hubungi kami
                        untuk informasi harga serta promo terbaru.
                    </p>

                    <div class="mt-9 flex flex-wrap gap-4">
                        <a
                            href="#daftar-harga"
                            class="rounded-lg bg-amber-400 px-6 py-3.5 text-sm font-bold text-neutral-950 transition hover:bg-amber-300"
                        >
                            Jelajahi Motor →
                        </a>

                        <a
                            href="#tentang-kami"
                            class="rounded-lg border border-white/15 px-6 py-3.5 text-sm font-semibold transition hover:border-amber-400"
                        >
                            Tentang Dealer
                        </a>
                    </div>
                </div>

                <!-- SLIDER POSTER -->
                <div class="relative min-h-64 overflow-hidden rounded-3xl border border-white/10 bg-neutral-900 sm:min-h-80 lg:min-h-[420px]">

                    <!-- POSTER 1 -->
                    <div class="poster-slide absolute inset-0">
                        <img
                            src="assets/images/WhatsApp Image 2026-10-13 at 10.47.33.jpeg"
                            alt="Poster promosi motor Honda"
                            class="h-full w-full object-cover"
                        >
                    </div>

                    <!-- POSTER 2 -->
                    <div class="poster-slide absolute inset-0 hidden">
                        <img
                            src="assets/images/poster-2.jpg"
                            alt="Poster promosi dealer Honda"
                            class="h-full w-full object-cover"
                        >
                    </div>

                    <!-- TOMBOL SEBELUMNYA -->
                    <button
                        type="button"
                        onclick="changePoster(-1)"
                        aria-label="Poster sebelumnya"
                        class="absolute left-3 top-1/2 z-10 -translate-y-1/2 rounded-full border border-white/20 bg-black/60 px-4 py-3 text-white transition hover:bg-amber-400 hover:text-black"
                    >
                        &#10094;
                    </button>

                    <!-- TOMBOL BERIKUTNYA -->
                    <button
                        type="button"
                        onclick="changePoster(1)"
                        aria-label="Poster berikutnya"
                        class="absolute right-3 top-1/2 z-10 -translate-y-1/2 rounded-full border border-white/20 bg-black/60 px-4 py-3 text-white transition hover:bg-amber-400 hover:text-black"
                    >
                        &#10095;
                    </button>

                    <!-- INDIKATOR SLIDE -->
                    <div class="absolute bottom-4 left-0 right-0 z-10 flex justify-center gap-2">
                        <button
                            type="button"
                            onclick="showPoster(0)"
                            aria-label="Tampilkan poster 1"
                            class="poster-dot h-2.5 w-2.5 rounded-full bg-amber-400"
                        ></button>

                        <button
                            type="button"
                            onclick="showPoster(1)"
                            aria-label="Tampilkan poster 2"
                            class="poster-dot h-2.5 w-2.5 rounded-full bg-white/50"
                        ></button>
                    </div>

                </div>
            </div>
        </section>

        <!-- BANNER PROMOSI TAMBAHAN -->
        <section class="border-b border-white/10 bg-neutral-900/60">
            <div class="mx-auto max-w-7xl px-5 py-8 lg:px-8">

                <a
                    href="#promo-spesial"
                    class="group relative block overflow-hidden rounded-2xl border border-amber-400/20"
                >
                    <img
                        src="assets/images/banner-program-sales-genio-1-02082021-094721.png"
                        alt="Banner promo spesial Wijaya Abadi Motorindo"
                        class="h-44 w-full object-cover transition duration-500 group-hover:scale-[1.02] sm:h-56 lg:h-64"
                    >

                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>

                    <div class="absolute inset-y-0 left-0 flex max-w-xl flex-col justify-center p-5 sm:p-8 lg:p-10">
                        <p class="text-xs font-bold tracking-[0.25em] text-amber-400">
                            PROMO SPESIAL
                        </p>

                        <h2 class="mt-2 text-2xl font-black sm:text-3xl lg:text-4xl">
                            Waktunya Punya Motor Impian!
                        </h2>

                        <p class="mt-3 text-sm text-neutral-200 sm:text-base">
                            Hubungi kami untuk informasi harga dan penawaran terbaru.
                        </p>

                        <span class="mt-4 inline-flex w-fit items-center gap-2 text-sm font-bold text-amber-400">
                            Lihat Promo <span>→</span>
                        </span>
                    </div>
                </a>

            </div>
        </section>

        <!-- TENTANG KAMI -->
        <section
            id="tentang-kami"
            class="mx-auto max-w-7xl scroll-mt-24 px-5 py-20 lg:px-8"
        >
            <p class="text-xs font-bold tracking-[0.25em] text-amber-400">
                TENTANG KAMI
            </p>

            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                Melayani kebutuhan motor Anda.
            </h2>

            <p class="mt-5 max-w-2xl leading-7 text-neutral-400">
                Wijaya Abadi Motorindo hadir untuk membantu Anda menemukan
                motor Honda sesuai kebutuhan dan anggaran. Dapatkan informasi
                mengenai pilihan motor, harga, dan penawaran yang tersedia
                dengan menghubungi dealer kami.
            </p>
        </section>

        <!-- KATALOG HONDA BEAT -->
        <section
            id="daftar-harga"
            class="scroll-mt-24 border-y border-white/10 bg-neutral-900/60"
        >
            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8">

                <p class="text-xs font-bold tracking-[0.25em] text-amber-400">
                    KATALOG MOTOR
                </p>

                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Pilihan Motor Honda
                </h2>

                <p class="mt-4 max-w-2xl leading-7 text-neutral-400">
                    Temukan Honda BeAT dan Honda BeAT Street yang sesuai
                    dengan gaya berkendara Anda.
                </p>

                <!-- GRID PRODUK -->
                <div class="mt-10 grid gap-6 sm:grid-cols-2">

                    <!-- PRODUK 1: HONDA BEAT -->
                    <article class="group overflow-hidden rounded-2xl border border-white/10 bg-neutral-950 transition duration-300 hover:-translate-y-1 hover:border-amber-400/50">

                        <div class="flex h-64 items-center justify-center overflow-hidden bg-neutral-900 p-6 sm:h-72">
                            <img
                                src="assets/images/images (3).jpg"
                                alt="Motor Honda BeAT"
                                loading="lazy"
                                class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >

                            <div class="hidden h-full w-full flex-col items-center justify-center text-center">
                                <span class="text-6xl"></span>
                                <p class="mt-3 text-sm text-neutral-500">
                                 
                                </p>
                                <p class="mt-1 text-xs text-neutral-600">
                                    Tambahkan file honda-beat.png
                                </p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs font-bold tracking-widest text-amber-400">
                                HONDA BEAT SERIES
                            </p>

                            <h3 class="mt-2 text-2xl font-black">
                                Honda BeAT
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-neutral-400">
                                Motor untuk menunjang mobilitas sehari-hari
                                dengan desain praktis dan gaya modern.
                            </p>

                            <div class="mt-6 flex flex-wrap items-center justify-between gap-4 border-t border-white/10 pt-5">
                                <div>
                                    <p class="text-xs text-neutral-500">
                                        Informasi harga
                                    </p>
                                    <p class="mt-1 font-bold text-amber-400">
                                        Hubungi Dealer
                                    </p>
                                </div>

                                <a
                                    href="#lokasi-dealer"
                                    class="rounded-lg bg-amber-400 px-5 py-3 text-sm font-bold text-neutral-950 transition hover:bg-amber-300"
                                >
                                    Lihat Detail →
                                </a>
                            </div>
                        </div>

                    </article>

                    <!-- PRODUK 2: HONDA BEAT STREET -->
                    <article class="group overflow-hidden rounded-2xl border border-white/10 bg-neutral-950 transition duration-300 hover:-translate-y-1 hover:border-amber-400/50">

                        <div class="flex h-64 items-center justify-center overflow-hidden bg-neutral-900 p-6 sm:h-72">
                            <img
                                src="assets/images/images (4).jpg"
                                alt="Motor Honda BeAT Street"
                                loading="lazy"
                                class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >

                            <div class="hidden h-full w-full flex-col items-center justify-center text-center">
                                <span class="text-6xl"></span>
                                <p class="mt-3 text-sm text-neutral-500">
                                 
                                </p>
                                <p class="mt-1 text-xs text-neutral-600">
                                    Tambahkan file honda-beat-street.png
                                </p>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs font-bold tracking-widest text-amber-400">
                                HONDA BEAT SERIES
                            </p>

                            <h3 class="mt-2 text-2xl font-black">
                                Honda BeAT Street
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-neutral-400">
                                Pilihan motor dengan karakter bergaya street
                                untuk Anda yang menyukai tampilan lebih ekspresif.
                            </p>

                            <div class="mt-6 flex flex-wrap items-center justify-between gap-4 border-t border-white/10 pt-5">
                                <div>
                                    <p class="text-xs text-neutral-500">
                                        Informasi harga
                                    </p>
                                    <p class="mt-1 font-bold text-amber-400">
                                        Hubungi Dealer
                                    </p>
                                </div>

                                <a
                                    href="#lokasi-dealer"
                                    class="rounded-lg bg-amber-400 px-5 py-3 text-sm font-bold text-neutral-950 transition hover:bg-amber-300"
                                >
                                    Lihat Detail →
                                </a>
                            </div>
                        </div>

                    </article>

                </div>
            </div>
        </section>

        <!-- PROMO -->
        <section
            id="promo-spesial"
            class="mx-auto max-w-7xl scroll-mt-24 px-5 py-20 lg:px-8"
        >
            <div class="rounded-2xl border border-amber-400/20 bg-gradient-to-r from-amber-400/10 to-neutral-900 p-8 sm:p-12">

                <p class="text-xs font-bold tracking-[0.25em] text-amber-400">
                    PROMO SPESIAL
                </p>

                <h2 class="mt-3 text-3xl font-bold">
                    Penawaran menarik menanti Anda.
                </h2>

                <p class="mt-4 max-w-xl leading-7 text-neutral-400">
                    Ingin mengetahui harga Honda BeAT atau BeAT Street?
                    Hubungi dealer kami untuk mendapatkan informasi promo,
                    harga, dan persyaratan pembelian yang tersedia.
                </p>

                <a
                    href="#lokasi-dealer"
                    class="mt-7 inline-flex rounded-lg bg-amber-400 px-6 py-3.5 text-sm font-bold text-neutral-950 transition hover:bg-amber-300"
                >
                    Hubungi Dealer →
                </a>

            </div>
        </section>

        <!-- LOKASI DEALER -->
        <section
            id="lokasi-dealer"
            class="scroll-mt-24 border-t border-white/10 bg-neutral-900/60"
        >
            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8">

                <p class="text-xs font-bold tracking-[0.25em] text-amber-400">
                    HUBUNGI KAMI
                </p>

                <h2 class="mt-3 text-3xl font-bold">
                    Kunjungi dealer kami.
                </h2>

                <p class="mt-4 max-w-xl leading-7 text-neutral-400">
                    Tertarik dengan Honda BeAT atau Honda BeAT Street?
                    Hubungi Wijaya Abadi Motorindo untuk informasi lebih lanjut
                    mengenai harga, ketersediaan motor, dan promo.
                </p>

                <!--
                    Ganti informasi di bawah dengan alamat,
                    nomor WhatsApp, dan jam operasional dealer yang benar.
                -->
                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="rounded-xl border border-white/10 bg-neutral-950 p-5">
                        <p class="text-sm font-bold text-amber-400">
                            Alamat Dealer
                        </p>
                        <p class="mt-2 text-sm leading-6 text-neutral-400">
                            Tambahkan alamat lengkap dealer Anda di sini.
                        </p>
                    </div>

                    <div class="rounded-xl border border-white/10 bg-neutral-950 p-5">
                        <p class="text-sm font-bold text-amber-400">
                            Kontak
                        </p>
                        <p class="mt-2 text-sm leading-6 text-neutral-400">
                            Tambahkan nomor telepon atau WhatsApp dealer Anda.
                        </p>
                    </div>

                    <div class="rounded-xl border border-white/10 bg-neutral-950 p-5">
                        <p class="text-sm font-bold text-amber-400">
                            Jam Operasional
                        </p>
                        <p class="mt-2 text-sm leading-6 text-neutral-400">
                            Tambahkan jadwal operasional dealer Anda.
                        </p>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-white/10 px-5 py-7 text-center text-sm text-neutral-500">
        © 2026 Wijaya Abadi Motorindo. Hak cipta dilindungi.
    </footer>

    <!-- JAVASCRIPT SLIDER -->
    <script>
        const posters = document.querySelectorAll(".poster-slide");
        const dots = document.querySelectorAll(".poster-dot");

        let currentPoster = 0;
        let posterTimer;

        function showPoster(index) {
            if (posters.length === 0) return;

            currentPoster = (index + posters.length) % posters.length;

            posters.forEach((poster, i) => {
                poster.classList.toggle("hidden", i !== currentPoster);
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle("bg-amber-400", i === currentPoster);
                dot.classList.toggle("bg-white/50", i !== currentPoster);
            });

            restartPosterTimer();
        }

        function changePoster(direction) {
            showPoster(currentPoster + direction);
        }

        function restartPosterTimer() {
            clearInterval(posterTimer);

            if (posters.length > 1) {
                posterTimer = setInterval(() => {
                    showPoster(currentPoster + 1);
                }, 5000);
            }
        }

        if (posters.length > 0) {
            showPoster(0);
        }
    </script>

</body>
</html>
