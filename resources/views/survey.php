<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu | Survey</title>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        .nav{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .nav::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .nav:hover::after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .bar{
            @apply relative ml-10 font-semibold text-blue-900
        }
        .bar::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .bar::after{
            @apply w-[100%]
        }
    }
</style>
<body>
<div class="bg-blue-300 w-screen h-screen">
        <div class="bg-white w-screen h-12 flex rounded-b-xl">
            <div class="bg-green-400 w-28 h-12 ml-28"></div>
            <div class="flex items-center">
                <a href="#buku_tamu" class="nav">Buku Tamu</a>
                <a href="#survey" class="bar">Survey</a>
            </div>
            <div class="bg-white w-52 h-12 ml-auto flex items-center justify-center">
                <button type="submit" class=" bg-white hover:bg-blue-900 w-24 h-8 rounded-xl border-2 hover:border-white border-blue-900 hover:text-white text-blue-900 font-medium flex items-center justify-center">LogIn</button>
            </div>
        </div>
        <div class="bg-transparents w-screen h-14 mt-40 flex justify-center items-center">
            <p class="font-semibold text-2xl">Seberapa puas Anda dengan pengalaman pengguna di website kami?</p>
        </div>
        <div class="bg-transparents w-screen h-52 flex justify-center items-center">
            <div class="bg-blue-500 w-40 h-40 rounded-xl">
                <div class="bg-blue-500 w-40 h-32 rounded-xl flex items-center justify-center">
                <img src="sangat_puas.png" class=" w-40 flex items-center justify-center">
                </div>
                <div class="bg-transparents w-40 h-8 font-semibold text-lg text-center text-white">Sangat Puas</div>
            </div>
            <div class="bg-green-500 w-40 h-40 ml-5 rounded-xl">
            <div class="bg-green-500 w-40 h-32 rounded-xl flex items-center justify-center">
                <img src="puas.png" class=" w-40 flex items-center justify-center">
                </div>
                <div class="bg-transparents w-40 h-8 font-semibold text-lg text-center text-white">Puas</div>
            </div>
            <div class="bg-yellow-500 w-40 h-40 ml-5 rounded-xl">
            <div class="bg-yellow-500 w-40 h-32 rounded-xl flex items-center justify-center">
                <img src="cukup_puas.png" class=" w-40 flex items-center justify-center">
                </div>
                <div class="bg-transparents w-40 h-8 font-semibold text-lg text-center text-white">Cukup Puas</div>
            </div>
            <div class="bg-red-500 w-40 h-40 ml-5 rounded-xl">
            <div class="bg-red-500 w-40 h-32 rounded-xl flex items-center justify-center">
                <img src="tidak_puas.png" class=" w-40 flex items-center justify-center">
                </div>
                <div class="bg-transparent w-40 h-8 font-semibold text-lg text-center text-white">Tidak Puas</div>
            </div>
        </div>
        <footer class="bg-gray-800 text-white py-4 mt-28">
        <div class="container mx-auto text-center">
        <p>&copy; 2024 All Rights Reserved By Dinas Komunikasi dan Informatika Kota Tasikmalaya</p>
        </div>
        </footer>
</body>
</html>