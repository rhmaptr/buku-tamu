<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu | Rekap</title>
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
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .konfir::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .konfir:hover::after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .rekap{
            @apply relative ml-10 font-semibold text-blue-900
        }
        .rekap::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .rekap::after{
            @apply w-[100%]
        }
    }
</style>
<body>
    <div class="bg-gray-50 w-screen h-screen">
    <div class="bg-white w-screen h-12 flex rounded-b-xl">
            <div class="bg-green-400 w-28 h-12 ml-28"></div>
            <div class="flex items-center">
                <a href="#beranda" class="beranda">Beranda</a>
                <a href="#konfirmasi" class="konfir">Konfirmasi</a>
                <a href="#rekap" class="rekap">Rekap</a>
            </div>
    </div>
    <div class="bg-green-300 w-screen h-40 rounded-b-xl font-semibold text-2xl pl-28 pt-9 shadow-lg">Rekap Data Pengunjung</div>
    <div class="bg-gray-50 w-screen h-screen flex items-center justify-center flex-col">
            <div class="bg-white w-5/6 h-full rounded-xl shadow-xl flex-col -mt-32">
                <div class="bg-transparent w-full h-7 text-lg font-semibold pl-6 mt-6">Rekap Pengunjung</div>
                <div class="bg-transparent w-full h-5 text-base pl-6 font-medium">Pengunjung Harian</div>
                <div class="bg-transparent w-full h-10 mt-4 flex">
                    <input type="date" class="w-52 h-10 rounded-lg border-2 border-gray-200 ml-6 font-semibold pl-3"></input>
                    <select class="w-52 h-10 rounded-lg border-2 border-gray-200 ml-4 font-semibold pl-3" name="" id="">
                        <option value="">pilih organisasi</option>
                        <option value=""></option>
                    </select>
                    <button class="bg-blue-400 w-20 h-10 flex items-center justify-center text-base rounded-lg ml-6 font-bold text-white hover:bg-blue-600">Cari</button>
                </div>
                    <div class="bg-blue-400 w-full h-12 rounded-lg flex items-center shadow-lg mt-6">
                        <div class="bg-orange-400 w-5/6 h-12 ml-6"></div>
                    </div>
                    <div class="bg-purple-400 w-full h-4/6 flex-col items-center "></div>
            </div>
    </div>
    <footer class="bg-gray-800 text-white py-4 mt-">
        <div class="container mx-auto text-center">
        <p>&copy; 2024 All Rights Reserved By Dinas Komunikasi dan Informatika Kota Tasikmalaya</p>
        </div>
        </footer>
</body>
</html>