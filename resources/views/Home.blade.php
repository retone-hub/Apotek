@extends('components.layout-basic')
@section('title', 'Beranda')

@section('content')
<div class="flex justify-center bg-gray-200 min-h-screen">
    <div class="bg-gray-50 w-full max-w-md min-h-screen relative pb-20 shadow-xl overflow-hidden font-sans">
        
        <header class="sticky top-0 bg-white p-4 flex items-center gap-3 z-50 border-b border-gray-100">
            <div class="flex-1 relative">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" placeholder="Cari herbal, suplemen..." class="w-full bg-gray-100 rounded-full py-2 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-all">
            </div>
            <button class="relative text-gray-600 hover:text-emerald-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center">2</span>
            </button>
        </header>

        <main class="overflow-y-auto">
            
            <div class="p-4">
                <div class="bg-gradient-to-r from-emerald-600 to-teal-400 rounded-2xl p-5 text-white shadow-md relative overflow-hidden h-40 flex flex-col justify-center">
                    <div class="relative z-10">
                        <span class="bg-emerald-800 bg-opacity-30 px-2 py-1 rounded text-[10px] font-bold tracking-wider uppercase mb-2 inline-block">Terbaik Dari Alam</span>
                        <h2 class="text-xl font-bold mb-1">Perawatan Herbal Organik</h2>
                        <p class="text-sm text-emerald-50 mb-3">Diskon 20% untuk suplemen alami.</p>
                        <button class="bg-white text-emerald-700 px-4 py-1.5 rounded-full text-xs font-bold hover:bg-gray-100 transition-colors shadow-sm w-max">Beli Sekarang</button>
                    </div>
                    <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-white bg-opacity-10 rounded-full"></div>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-y-6 px-4 py-2 text-center">
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 group-hover:bg-emerald-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Ekstrak</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 group-hover:bg-emerald-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Suplemen</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 group-hover:bg-emerald-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Minyak Esensial</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 group-hover:bg-emerald-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Teh Herbal</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-orange-50 rounded-full flex items-center justify-center text-orange-500 group-hover:bg-orange-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Anti-Penuaan</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-500 group-hover:bg-blue-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Imunitas</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-purple-50 rounded-full flex items-center justify-center text-purple-500 group-hover:bg-purple-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Tidur Nyenyak</span>
                </div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 group-hover:bg-gray-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </div>
                    <span class="text-[11px] font-medium text-gray-700">Lihat Semua</span>
                </div>
            </div>

            <div class="px-4 mt-4">
                <div class="bg-teal-50 border border-teal-100 rounded-lg p-3 flex items-center gap-3">
                    <div class="bg-teal-500 text-white rounded-md p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-teal-800">Gratis Ongkir!</p>
                        <p class="text-[11px] text-teal-600">Untuk pesanan di atas Rp 50.000</p>
                    </div>
                </div>
            </div>

            <div class="p-4 mt-2">
                <div class="flex justify-between items-end mb-4">
                    <div>
                        <h2 class="text-lg font-bold text-gray-800">Rekomendasi untukmu</h2>
                        <p class="text-xs text-gray-500">Berdasarkan kebutuhan alamimu</p>
                    </div>
                    <a href="#" class="text-emerald-600 text-sm font-semibold hover:underline">Lihat semua</a>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden relative group">
                        <div class="absolute top-2 left-2 bg-orange-500 text-white text-[10px] font-bold px-2 py-0.5 rounded z-10">-15%</div>
                        <div class="h-32 bg-gray-100 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1596464718420-94268e0d5e89?w=400&q=80" alt="Ekstrak Ginseng" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-3">
                            <h3 class="text-xs font-semibold text-gray-800 mb-1 line-clamp-2 leading-tight h-8">Ekstrak Akar Ginseng Merah Premium</h3>
                            <div class="flex items-center gap-1 mb-2">
                                <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="text-[10px] text-gray-500">4.9 (120)</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <p class="text-[10px] text-gray-400 line-through">Rp 350.000</p>
                                    <p class="text-sm text-emerald-600 font-bold">Rp 299.000</p>
                                </div>
                                <button class="bg-emerald-50 text-emerald-600 p-1.5 rounded-md hover:bg-emerald-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden relative group">
                        <div class="h-32 bg-gray-100 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=400&q=80" alt="Teh Chamomile" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-3">
                            <h3 class="text-xs font-semibold text-gray-800 mb-1 line-clamp-2 leading-tight h-8">Kotak Teh Chamomile Organik</h3>
                            <div class="flex items-center gap-1 mb-2">
                                <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="text-[10px] text-gray-500">4.8 (85)</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <p class="text-sm text-emerald-600 font-bold">Rp 150.000</p>
                                </div>
                                <button class="bg-emerald-50 text-emerald-600 p-1.5 rounded-md hover:bg-emerald-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                     <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden relative group">
                        <div class="h-32 bg-gray-100 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1608528577891-eb0559ec3474?w=400&q=80" alt="Minyak Kayu Putih" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-3">
                            <h3 class="text-xs font-semibold text-gray-800 mb-1 line-clamp-2 leading-tight h-8">Minyak Esensial Kayu Putih Murni 15ml</h3>
                            <div class="flex items-center gap-1 mb-2">
                                <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="text-[10px] text-gray-500">5.0 (204)</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <p class="text-sm text-emerald-600 font-bold">Rp 210.000</p>
                                </div>
                                <button class="bg-emerald-50 text-emerald-600 p-1.5 rounded-md hover:bg-emerald-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="h-6"></div>
        </main>

        <nav class="absolute bottom-0 w-full bg-white border-t border-gray-200 flex justify-around items-center pt-3 pb-6 px-2 z-50">
            <a href="#" class="flex flex-col items-center gap-1 text-emerald-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                <span class="text-[10px] font-medium">Beranda</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-1 text-gray-400 hover:text-emerald-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="text-[10px] font-medium">Produk</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-1 text-gray-400 hover:text-emerald-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <span class="text-[10px] font-medium">Artikel</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-1 text-gray-400 hover:text-emerald-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span class="text-[10px] font-medium">Akun</span>
            </a>
        </nav>

    </div>
</div>
@endsection