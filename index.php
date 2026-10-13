
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijaya Abadi Motorindo | Dealer Kendaraan</title>
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>
<body class="bg-neutral-950 text-white antialiased">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-neutral-950/95">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">
            <a href="#beranda" class="leading-tight">
                <span class="block text-lg font-black tracking-widest text-amber-400">
                    WIJAYA ABADI
                </span>
                <span class="text-xs tracking-[0.35em] text-neutral-400">
                    MOTORINDO
                </span>
            </a>

            <details class="relative">
                <summary class="flex h-11 w-11 cursor-pointer list-none flex-col items-center justify-center gap-1.5 rounded-lg border border-white/15 hover:border-amber-400 [&::-webkit-details-marker]:hidden">
                    <span class="h-0.5 w-5 rounded bg-amber-400"></span>
                    <span class="h-0.5 w-5 rounded bg-amber-400"></span>
                    <span class="h-0.5 w-5 rounded bg-amber-400"></span>
                </summary>

                <nav class="absolute right-0 top-14 w-60 rounded-xl border border-white/10 bg-neutral-900 p-2 shadow-2xl">
                    <a href="#beranda" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">Beranda</a>
                    <a href="#tentang-kami" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">Tentang Kami</a>
                    <a href="#daftar-harga" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">Daftar Harga</a>
                    <a href="#promo-spesial" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">Promo Spesial</a>
                    <a href="#lokasi-dealer" class="block rounded-lg px-4 py-3 text-sm hover:bg-white/5 hover:text-amber-400">Lokasi Dealer</a>
                </nav>
            </details>
        </div>
    </header>

    <main>
        <!-- HERO -->
        <section id="beranda" class="relative overflow-hidden border-b border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-amber-500/10 via-neutral-950 to-neutral-950"></div>

            <div class="relative mx-auto grid min-h-[580px] max-w-7xl items-center gap-12 px-5 py-20 lg:grid-cols-2 lg:px-8 lg:py-28">
                <div>
                    <p class="mb-5 text-xs font-bold tracking-[0.3em] text-amber-400">
                        TEMUKAN KENDARAAN PILIHAN ANDA
                    </p>

                    <h1 class="max-w-2xl text-4xl font-black leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                        Perjalanan Anda,
                        <span class="text-amber-400">Pilihan Kami.</span>
                    </h1>

                    <p class="mt-6 max-w-lg leading-7 text-neutral-400">
                        Temukan kendaraan yang sesuai dengan kebutuhan Anda
                        melalui pelayanan yang profesional dan informasi yang jelas.
                    </p>

                    <div class="mt-9 flex flex-wrap gap-4">
                        <a href="#daftar-harga" class="rounded-lg bg-amber-400 px-6 py-3.5 text-sm font-bold text-neutral-950 transition hover:bg-amber-300">
                            Jelajahi Kendaraan →
                        </a>
                        <a href="#tentang-kami" class="rounded-lg border border-white/15 px-6 py-3.5 text-sm font-semibold transition hover:border-amber-400">
                            Tentang Dealer
                        </a>
                    </div>
                </div>

                <div class="flex min-h-64 items-center justify-center rounded-3xl border border-white/10 bg-gradient-to-br from-neutral-800 to-neutral-950 p-8 sm:min-h-80">
                    <div class="text-center">
                        <div class="text-6xl text-amber-400/80">✦</div>
                        <p class="mt-5 text-xl font-bold tracking-widest">YOUR NEXT JOURNEY</p>
                        <p class="mt-2 text-sm text-neutral-500">Temukan kendaraan impian Anda</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TENTANG KAMI -->
        <section id="tentang-kami" class="mx-auto max-w-7xl scroll-mt-24 px-5 py-20 lg:px-8">
            <p class="text-xs font-bold tracking-[0.25em] text-amber-400">TENTANG KAMI</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Melayani kebutuhan kendaraan Anda.</h2>
            <p class="mt-5 max-w-2xl leading-7 text-neutral-400">
                Wijaya Abadi Motorindo hadir untuk membantu Anda menemukan
                kendaraan sesuai kebutuhan dan anggaran. Informasi produk,
                harga, serta penawaran akan kami sajikan dengan jelas.
            </p>
        </section>

        <!-- DAFTAR HARGA -->
        <section id="daftar-harga" class="scroll-mt-24 border-y border-white/10 bg-neutral-900/60">
            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8">
                <p class="text-xs font-bold tracking-[0.25em] text-amber-400">KATALOG</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Daftar Kendaraan</h2>
                <p class="mt-4 text-neutral-400">Pilihan kendaraan untuk perjalanan Anda.</p>

                <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-white/10 bg-neutral-950 p-6 transition hover:border-amber-400/50">
                        <div class="flex h-36 items-center justify-center rounded-xl bg-neutral-900 text-5xl">🚗</div>
                        <p class="mt-5 text-xs font-bold tracking-widest text-amber-400">KENDARAAN RODA EMPAT</p>
                        <h3 class="mt-2 text-xl font-bold">Mobil</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-400">Lihat pilihan mobil untuk kebutuhan harian maupun keluarga.</p>
                        <p class="mt-5 text-sm text-neutral-500">Harga: hubungi dealer</p>
                    </article>

                    <article class="rounded-2xl border border-white/10 bg-neutral-950 p-6 transition hover:border-amber-400/50">
                        <div class="flex h-36 items-center justify-center rounded-xl bg-neutral-900 text-5xl">🏍️</div>
                        <p class="mt-5 text-xs font-bold tracking-widest text-amber-400">KENDARAAN RODA DUA</p>
                        <h3 class="mt-2 text-xl font-bold">Motor</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-400">Temukan pilihan motor untuk mobilitas sehari-hari.</p>
                        <p class="mt-5 text-sm text-neutral-500">Harga: hubungi dealer</p>
                    </article>

                    <article class="rounded-2xl border border-dashed border-white/15 bg-neutral-950/50 p-6">
                        <div class="flex h-36 items-center justify-center rounded-xl bg-neutral-900 text-4xl text-amber-400">+</div>
                        <h3 class="mt-5 text-xl font-bold">Pilihan Lainnya</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-400">Katalog kendaraan lainnya akan ditambahkan di sini.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- PROMO -->
        <section id="promo-spesial" class="scroll-mt-24 mx-auto max-w-7xl px-5 py-20 lg:px-8">
            <div class="rounded-2xl border border-amber-400/20 bg-gradient-to-r from-amber-400/10 to-neutral-900 p-8 sm:p-12">
                <p class="text-xs font-bold tracking-[0.25em] text-amber-400">PROMO SPESIAL</p>
                <h2 class="mt-3 text-3xl font-bold">Penawaran menarik menanti Anda.</h2>
                <p class="mt-4 max-w-xl leading-7 text-neutral-400">
                    Hubungi dealer untuk mengetahui promo dan persyaratan
                    pembelian kendaraan yang tersedia.
                </p>
            </div>
        </section>

        <!-- LOKASI -->
        <section id="lokasi-dealer" class="scroll-mt-24 border-t border-white/10 bg-neutral-900/60">
            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8">
                <p class="text-xs font-bold tracking-[0.25em] text-amber-400">HUBUNGI KAMI</p>
                <h2 class="mt-3 text-3xl font-bold">Kunjungi dealer kami.</h2>
                <p class="mt-4 max-w-xl leading-7 text-neutral-400">
                    Informasi alamat, jam operasional, dan kontak dealer akan
                    ditampilkan di bagian ini.
                </p>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/10 px-5 py-7 text-center text-sm text-neutral-500">
        © 2026 Wijaya Abadi Motorindo. Hak cipta dilindungi.
    </footer>

</body>
</html>
