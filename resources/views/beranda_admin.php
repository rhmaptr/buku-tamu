<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu | Beranda</title>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        .beranda{
            @apply relative ml-10 font-semibold text-blue-900
        }
        .beranda::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .beranda::after{
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
    <div class="bg-gray-50 w-screen h-screen overflow-y-auto no-scrollbar">
    <div class="bg-white w-screen h-12 flex rounded-b-xl">
            <div class="bg-green-400 w-28 h-12 ml-28"></div>
            <div class="flex items-center">
                <a href="{{ route('beranda_admin') }}" class="beranda">Beranda</a>
                <a href="{{ route(belum_konfirmasi) }}" class="konfir">Konfirmasi</a>
                <a href="{{ route('rekap') }}" class="rekap">Rekap</a>
            </div>
    </div>
    <div class="bg-green-300 w-screen h-40 rounded-b-xl font-semibold text-2xl pl-28 pt-9 shadow-lg">Beranda</div>
    <div class="bg-transparent w-screen h-40 -mt-20 flex items-center justify-center">
    <div class="bg-white w-64 h-32 rounded-xl flex shadow-xl border-l-8 border-blue-500 flex-col ">
        <div class="bg-white w-16 h-12 flex items-center justify-center ">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="#000000" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path></svg>
        </div>
    <div>
        <div class="bg-white rounded-lg ">
            <p id="date" class="text-xl text-black font-semibold ml-4"></p>
            <p id="time" class="text-base font-bold text-gray-400 ml-4"></p>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();
            const formattedDate = `${day}-${month}-${year}`;
            
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const formattedTime = `${hours}:${minutes}:${seconds}`;
            
            document.getElementById('date').textContent = formattedDate;
            document.getElementById('time').textContent = formattedTime;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
    </div>
    <div class="bg-white w-64 h-32 rounded-xl flex shadow-xl ml-10 border-l-8 border-red-600 flex-col">
        <div class="bg-white w-16 h-12 flex items-center justify-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
        </div>
        <div class="bg-white w-full h-6 font-semibold text-xl pl-4 line-clamp-1">12345</div>
        <div class="bg-white w-full h-5 font-semibold text-base pl-4 text-gray-400">Pengunjung Tahun Ini</div>
    </div>
    <div class="bg-white w-64 h-32 rounded-xl flex shadow-xl ml-10 border-l-8 border-yellow-500 flex-col">
        <div class="bg-white w-16 h-12 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="#000000" viewBox="0 0 256 256"><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>
        </div>
        <div class="bg-white w-full h-6 font-semibold text-xl pl-4 line-clamp-1">312</div>
        <div class="bg-white w-full h-5 font-semibold text-base pl-4 text-gray-400">Pengunjung Hari Ini</div>
    </div>
    <div class="bg-white w-64 h-32 rounded-xl flex shadow-xl ml-8 border-l-8 border-green-500 flex-col">
        <div class="bg-white w-16 h-12 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="#000000" viewBox="0 0 256 256"><path d="M200,112a8,8,0,0,1-8,8H152a8,8,0,0,1,0-16h40A8,8,0,0,1,200,112Zm-8,24H152a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm40-80V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM216,200V56H40V200H216Zm-80.26-34a8,8,0,1,1-15.5,4c-2.63-10.26-13.06-18-24.25-18s-21.61,7.74-24.25,18a8,8,0,1,1-15.5-4,39.84,39.84,0,0,1,17.19-23.34,32,32,0,1,1,45.12,0A39.76,39.76,0,0,1,135.75,166ZM96,136a16,16,0,1,0-16-16A16,16,0,0,0,96,136Z"></path></svg>
        </div>
        <div class="bg-white w-full h-6 font-semibold text-xl pl-4 line-clamp-1">25</div>
        <div class="bg-white w-full h-5 font-semibold text-base pl-4 text-gray-400">Kunjungan Hari Ini</div>
    </div>
    </div>
    <div class="bg-white w-5/6 h-5/6 ml-28 rounded-xl flex-col pt-2 shadow-lg">
        <div class="bg-white w-64 h-7 mt-3 ml-10 font-semibold text-xl ">Grafik Kunjungan Bulanan</div>
        <div class="bg-white w-40 h-6 ml-10 font-medium text-base">Pengunjung Bulanan</div>
        <div class="bg-transparent flex">
            <select placeholder="2024" class="bg-white w-52 h-10 ml-10 mt-5 rounded-lg pl-4 text-base font-semibold border-2 border-gray-200">
                    <option>Tahun 2024</option>
                    <option>Tahun 2025</option>
                    <option>Tahun 2026</option>
            </select>
            <select placeholder="Pilih Organisasi" class="bg-white w-52 h-10 ml-5 mt-5 rounded-lg pl-4 text-base font-semibold border-2 border-gray-200">
                    <option>Organisasi</option>
                    <option></option>
            </select>
            <div class="bg-blue-300 w-20 h-10 flex items-center justify-center font-semibold rounded-lg ml-5 mt-5 hover:bg-blue-500 hover:font-bold hover:text-white text-white cursor-pointer">Cari</div>
        </div>
    </div>
        <footer class="bg-gray-800 text-white py-4 mt-20">
        <div class="container mx-auto text-center">
        <p>&copy; 2024 All Rights Reserved By Dinas Komunikasi dan Informatika Kota Tasikmalaya</p>
        </div>
        </footer>
</body>
</html>