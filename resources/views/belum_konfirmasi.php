<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu | Konfirmasi</title>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        .beranda{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .beranda::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .beranda:hover::after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .konfir{
            @apply relative ml-10 font-semibold text-blue-900
        }
        .konfir::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .konfir::after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .rekap{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .rekap::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .rekap:hover::after{
            @apply w-[100%]
        }
    }
</style>
<body>
    <div class="bg-gray-50 w-screen h-screen">
    <div class="bg-white w-screen h-12 flex rounded-b-xl">
            <div class="bg-green-400 w-28 h-12 ml-28"></div>
            <div class="flex items-center">
                <a href='/beranda_admin.php' class="beranda">Beranda</a>
                <a href="#konfirmasi" class="konfir">Konfirmasi</a>
                <a href="#rekap" class="rekap">Rekap</a>
            </div>
    </div>
        <div class="bg-green-300 w-screen h-40 rounded-b-xl font-semibold text-2xl pl-28 pt-9 shadow-lg">Konfirmasi Data Pengunjung</div>
        <div class="bg-transparent w-screen h-40 -mt-20 flex items-center justify-center">
            <div class="bg-white w-1/3 h-32 rounded-xl flex items-center border-4 border-blue-600 shadow-xl">
                <div class="bg-white w-1/3 h-28 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#004fe9" viewBox="0 0 256 256"><path d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64ZM69.61,53.08C85.07,44.65,105.81,40,128,40s42.93,4.65,58.39,13.08C200.12,60.57,208,70.38,208,80s-7.88,19.43-21.61,26.92C170.93,115.35,150.19,120,128,120s-42.93-4.65-58.39-13.08C55.88,99.43,48,89.62,48,80S55.88,60.57,69.61,53.08ZM186.39,202.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z"></path></svg>
                </div>
                <div class="bg-white w-full h-28 flex items-center justify-center flex-col">
                    <div class="bg-white w-full h-8 text-lg font-semibold pl-2 pt-1">Data Yang Belum Di Konfirmasi</div>
                    <div class="bg-white w-full">
                        <div class="bg-white w-80 text-lg font-semibold pl-2 pt-1 line-clamp-1">0000</div>
                    </div>
                </div>
            </div>
            <div class="bg-white w-1/3 h-32 ml-60 rounded-xl flex items-center justify-center shadow-xl border-4 border-white hover:border-green-400">
            <div class="bg-white w-1/3 h-28 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#29e17c" viewBox="0 0 256 256"><path d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64ZM69.61,53.08C85.07,44.65,105.81,40,128,40s42.93,4.65,58.39,13.08C200.12,60.57,208,70.38,208,80s-7.88,19.43-21.61,26.92C170.93,115.35,150.19,120,128,120s-42.93-4.65-58.39-13.08C55.88,99.43,48,89.62,48,80S55.88,60.57,69.61,53.08ZM186.39,202.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z"></path></svg>
                </div>
                <div class="bg-white w-full h-28 flex items-center justify-center flex-col">
                <div class="bg-white w-full h-8 text-lg font-semibold pl-2 pt-1">Data Yang Sudah Di Konfirmasi</div>
                <div class="bg-white w-full">
                        <div class="bg-white w-80 text-lg font-semibold pl-2 pt-1 line-clamp-1">0000</div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="bg-gray-50 w-screen h-10">
            <div class="bg-gray-50 w-1/3 h-10 ml-28 flex items-center justify-center">
                <input type="text" placeholder="Telusuri..." class="w-96 h-10 rounded-l-lg pl-4 text-base font-medium border-2 border-gray-100 shadow-lg -ml-8"></input>
                <div class="bg-yellow-500 w-12 h-10 rounded-r-lg flex items-center justify-center"></div>
            </div>
        </div>
        <div class="bg-gray-50 w-screen h-screen">
        <div class="bg-blue-400 w-5/6 h-12 rounded-lg flex items-center shadow-lg ml-28 mt-8">
                    <div class="ml-14 text-base font-semibold">No</div>
                    <div class="ml-28 text-base font-semibold">Nama</div>
                    <div class="ml-40 text-base font-semibold">No.HP</div>
                    <div class="ml-40 text-base font-semibold">Instansi</div>
                    <div class="ml-36 text-base font-semibold">Bidang</div>
                    <div class="ml-44 text-base font-semibold">Aksi</div>
                </div>
            <div class="bg-transparent w-5/6 h-5/6 ml-28 mt-4 flex-col overflow-y-auto border-2 border-blue-300 rounded-xl">
                <div class="bg-white w-full h-12 rounded-lg flex mt-4 shadow-lg">
                    <div class="bg-white w-16 h-12 ml-8 text-base font-semibold flex items-center justify-center line-clamp-1">1</div>
                    <div class="bg-white w-48 h-12 ml-4 text-base font-semibold flex items-center justify-center line-clamp-1">rahma</div>
                    <div class="bg-white w-48 h-12 ml-4 text-base font-semibold flex items-center justify-center line-clamp-1">085324505152</div>
                    <div class="bg-white w-48 h-12 ml-4 text-base font-semibold flex items-center justify-center line-clamp-1">kominfo</div>
                    <div class="bg-white w-48 h-12 ml-4 text-base font-semibold flex items-center justify-center line-clamp-1">informatika</div>
                    <div class="bg-white w-48 h-12 ml-4 text-base font-semibold flex items-center justify-center">
                        <button class="bg-blue-300 w-32 h-8 rounded-lg text-white text-base font-semibold flex items-center justify-center hover:bg-blue-700">Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-gray-800 text-white py-4 mt-96">
        <div class="container mx-auto text-center">
        <p>&copy; 2024 All Rights Reserved By Dinas Komunikasi dan Informatika Kota Tasikmalaya</p>
        </div>
        </footer>
</body>
</html>