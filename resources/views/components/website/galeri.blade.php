<section class="pt-16 md:pt-28" id="publikasi">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-5">
            <h1 class="text-utama text-3xl md:text-5xl font-semibold">Gallery</h1>
            <h4 class="text-gray-400 text-sm md:text-xl mt-2">Fiqri Andra, S.Sos., MM.</h4>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($data as $item)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $item->gambar) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>
