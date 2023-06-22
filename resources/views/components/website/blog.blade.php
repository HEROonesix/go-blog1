<section class="pt-16 md:pt-28" id="jejak-digital">
    <div class="w-full mx-auto">
        <div class="text-center mb-5">
            <h1 class="text-utama text-3xl md:text-5xl font-semibold">Blog</h1>
            <h4 class="text-gray-400 text-sm md:text-xl mt-2">Fiqri Andra, S.Sos., MM.</h4>
        </div>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($data as $item)
                        <div
                            class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                            <a href="#">
                                <img class="rounded-t-lg w-full" src="{{ asset('storage/' . $item->gambar) }}"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                </a>
                                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">
                                    {{ $item->judul }}</h2>
                                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">{{ $item->sumber }}
                                </p>
                                <a href="{{ $item->tautan }}"
                                    class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                                    more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 splide">
            <div class="splide__track">
                <div class="splide__list">
                </div>
            </div>
        </div>


    </div>
</section>
