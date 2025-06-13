@include('template.header')

<div class="lg:max-w-[1200px] mx-auto pt-40 flex flex-col gap-[12rem]">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 flex justify-center items-center">
            <div>
                <h1 class="font-[Source_Sans_3] font-bold text-5xl text-warna-02">Vibiadhi Swasti Pradana, B.Com,
                    MTIM<br />
                    <span class="text-warna-04"> HIPMI Pulau Seribu</span>
                </h1>
                <div class="">Visioner. Synergy. Profesional.</div>
                <div class="">#SatuVisiSeribuSolusi</div>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center items-center">
            <img src="{{ asset('storage/vibi-1.png') }}" alt="foto vibi" class="max-h-[500px] object-fit ">
        </div>

    </div>

    <div class=" grid grid-cols-1 md:grid-cols-2 gap-8 p-6 rounded-2xl bg-white shadow-lg">
        <div class="w-full max-h-[300px] object-cover rounded-xl  shadow overflow-hidden group">
            <img src="{{ asset('storage/pulau-seribu.jpg') }}" alt="pulau seribu"
                class="group-hover:scale-105 duration-300 ease-in-out">
        </div>
        <div class="">
            <p class="font-bold text-amber-800 text-2xl mb-2">Kepulauan Seribu</p>
            <p class="text-justify text-slate-500"> bukan sekadar gugusan pulau yang indah di utara Jakarta, tapi juga
                simbol dari potensi
                besar yang tersimpan dalam semangat muda dan peluang ekonomi yang menjanjikan. Di balik panorama alamnya
                yang memikat, tersimpan energi kreatif dari generasi muda yang siap membangun. Namun, sebesar ini tidak
                akan
                berkembang maksimal tanpa kepemimpinan yang kuat, strategi yang jelas, dan
                sinergi nyata antar pelaku usaha muda. Kini saatnya Pulau Seribu bersinar, dipimpin oleh
                generasi yang berani, cerdas, dan siap membawa perubahan.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex items-center justify-center">
            <img src="{{ asset('storage/vibi-2.png') }}" alt="foto vibi" class="max-h-[500px] object-cover">
        </div>
        <div class="flex items-center justify-center">
            <div class="flex flex-col">
                <p class="text-slate-500">Saya, </p>
                <p class="font-bold text-3xl text-amber-600 mb-2">Vibiadhi Swasti Pradana,</p>
                <p class="text-slate-500 mb-4">hadir mencalonkan diri sebagai <span
                        class="bg-slate-200 p-2 rounded font-semibold text-slate-600">Ketua Umum HIPMI Pulau
                        Seribu</span>
                    dengan
                    semangat
                    membawa perubahan yang nyata. Bukan sekadar hadir untuk mengisi posisi—tapi untuk menggerakkan visi
                    bersama yang lebih progresif, inklusif, dan profesional.</p>
                <button type="button" onclick="toggleHeart(this)"
                    class="bg-gradient-to-r from-warna-02 to-warna-05 py-2 px-4 rounded mr-auto font-bold text-white flex items-center gap-2 pointer-event">
                    <span class="heart-icon" data-liked="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </span> Dukung Saya
                </button>

            </div>
        </div>
    </div>

    <div class="">
        <div
            class="mb-4 bg-white border-2 border-warna-02 shadow-lg rounded-2xl p-4 group hover:-translate-y-2 duration-300 ease-in-out">
            Dengan landasan nilai Visioner, Synergy, dan Profesional, saya ingin menjadikan HIPMI sebagai rumah besar
            bagi seluruh pengusaha muda Pulau Seribu—tempat kita bertumbuh, bersinergi, dan menciptakan solusi bersama.
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white shadow-lg rounded-2xl p-4 group hover:-translate-y-2 duration-300 ease-in-out">
                <p class="font-bold text-amber-800 text-2xl mb-2">Visioner</p>
                <p class="text-justify text-slate-500">Kita butuh arah yang jelas, bukan sekadar bertahan. Saya akan
                    memimpin HIPMI dengan pandangan jauh
                    ke depan, menyusun strategi yang relevan dengan perkembangan zaman, serta mendorong inovasi di
                    setiap lini.</p>
            </div>
            <div class="bg-white shadow-lg rounded-2xl p-4 group hover:-translate-y-2 duration-300 ease-in-out">
                <p class="font-bold text-amber-800 text-2xl mb-2">Synergy</p>
                <p class="text-justify text-slate-500">Saya percaya kekuatan sejati ada pada kolaborasi. Kita akan
                    membangun ekosistem HIPMI yang saling
                    menguatkan—baik antar anggota, antar sektor usaha, maupun dengan komunitas lokal dan mitra strategis
                    lainnya.</p>
            </div>
            <div class="bg-white shadow-lg rounded-2xl p-4 group hover:-translate-y-2 duration-300 ease-in-out">
                <p class="font-bold text-amber-800 text-2xl mb-2">Profesional</p>
                <p class="text-justify text-slate-500">Etika, kedisiplinan, dan orientasi hasil akan menjadi prinsip
                    kerja HIPMI di bawah kepemimpinan
                    saya. Kita akan bergerak secara terukur, transparan, dan berdampak.</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex justify-center flex-col text-left">
            <p class="font-bold text-amber-800 text-2xl mb-2">Inilah saatnya</p>
            <p class="text-slate-500">
                kita menyatukan visi. Dari Pulau Seribu, untuk masa depan yang lebih tangguh dan terarah.
                Mari kita bangun HIPMI Pulau Seribu yang lebih aktif, terbuka, dan siap menjadi motor penggerak ekonomi
                muda.
            </p>
        </div>
        <div class="flex items-center justify-center">
            <img src="{{ asset('storage/pulau-seribu-2.png') }}" alt="foto vibi" class="max-h-[400px] object-cover">
        </div>
    </div>

    <div class="">
        <div>
            <p class="font-semibold text-neutral-500">Bersama VSP, kita ciptakan</p>
            <p class="text-4xl md:text-8xl font-bold text-neutral-300 hover:text-neutral-700">#SatuVisiSeribuSolusi.</p>
        </div>
    </div>
</div>
@include('template.footer')
