@section('title', 'Home')
@extends('components.layout-basic')
@section('content')

    <!-- Hero Image Full Width, Fully Responsive -->
    <!-- ganti lg:max-h-[700px] jika di 27" 1920x1080 -->
    <section class="w-full relative aspect-[16/7] overflow-hidden bg-white max-h-[400px] lg:max-h-[500px]">
        <img src="/storage/images/final.jpg" alt=""
            class="absolute inset-0 w-full h-full object-cover filter blur-lg scale-110 ">
        <img src="/storage/images/final.jpg" alt="Pengajuan Skripsi" class="relative w-full h-full object-contain">
    </section>

    <!-- Hero Text Below Image -->
    <section class="bg-[#f6f6f6] py-5 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-[20px] sm:text-2xl md:text-4xl font-extrabold text-gray-800">
                Pendaftaran Berkas
                <span
                    class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-[#183661]">
                    <span class="relative text-white dark:text-white-950">Skripsi</span>
                </span>
                Online
            </h1>
            <p class="mt-4 text-[10px] sm:text-sm md:text-lg text-gray-600">
                Unduh persyaratan skripsi dengan mudah, unggah berkas Anda secara praktis, dan pantau proses pendaftaran
                skripsi dalam satu platform.
            </p>
            <a href=""
                class="mt-8 inline-flex items-center justify-center bg-gradient-to-r from-[#3D7DDB] to-[#2A5DB7] text-white font-semibold rounded-lg shadow-lg
          hover:from-[#2A5DB7] hover:to-[#1A4B97] hover:shadow-xl active:shadow-md
          transform hover:scale-105 active:scale-95 focus:scale-105 transition-all duration-300 ease-in-out
          text-sm sm:text-base md:text-lg
          py-3 px-6 sm:py-3.5 sm:px-8 md:py-4 md:px-10 group">
            Ajukan Sekarang
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2 transform transition-transform duration-300 group-hover:translate-x-2 group-active:translate-x-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>

</section>

    <section class="w-full relative overflow-hidden bg-white">
    <img src="/storage/images/panduan1.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover filter blur-lg scale-110">
    <img src="/storage/images/panduan1.jpg" alt="Pengajuan Skripsi"
        class="relative w-full h-auto object-contain">
</section>

  





    <!-- Call To Action Section -->
    <section class="py-5 bg-[#183661] text-white text-center px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Memulai Perjalanan Skripsi Anda?</h2>
            <p class="text-lg mb-8">Mulai pengajuan sekarang dan nikmati kemudahan proses pendaftaran berkas skripsi Anda
                bersama kami.</p>
            <a href=""
                class="inline-block bg-white text-[#183661] font-semibold py-3 px-8 rounded-full hover:bg-gray-100 transition">
                Daftar Sekarang
            </a>
        </div>
    </section>
@endsection
