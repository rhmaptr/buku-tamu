<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku tamu | Landing</title>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        .nav{
            @apply relative ml-10 font-semibold text-blue-900
        }
        .nav::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .nav::after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .bar{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .bar::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-3 absolute duration-200
        }
        .bar:hover::after{
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
        <div class="bg-white w-5/6 rounded-xl mt-6 ml-28 flex">
            <div class="bg-yellow-200 w-3/5 rounded-l-xl flex-col">
                <div class="bg-white h-14 rounded-tl-xl flex justify-center items-center text-xl font-semibold">Identitas Pengunjung</div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                    <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Nama Lengkap*</div>
                    <input type="text" placeholder="Masukkan Nama Lengkap" class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200"></input>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                    <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">No HP*</div>
                    <input type="text" placeholder="Masukkan Nomor HP" class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200"></input>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                    <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Email*</div>
                    <input type="text" placeholder="Masukkan Email" class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200"></input>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Instansi Tujuan*</div>
                    <select class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200">
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Bidang Tujuan*</div>
                    <select placeholder="Pilih Instansi Tujuan" class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200">
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                    <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Tanggal*</div>
                    <input type="date" class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200"></input>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center">
                    <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Lampiran*</div>
                    <input type="file" class="bg-white w-5/6 h-10 rounded-lg pl-4 text-base font-semibold border-2 border-blue-200"></input>
                </div>
                <div class="bg-white h-24 flex-col flex justify-center items-center">
                    <div class="bg-white w-52 h-5 -ml-80 text-sm font-semibold">Keperluan*</div>
                    <textarea placeholder="Tuliskan Keperluan Saat Berkunjung" name="keperluan" class="bg-white w-5/6 h-14 rounded-lg pl-4 text-base font-semibold resize border-2 border-blue-200"></textarea>
                </div>
                <div class="bg-white h-16 flex-col flex justify-center items-center rounded-bl-xl">
                <button type="submit" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-xl w-5/6 h-10 -mt-3">Kirim</button>
                </div>
            </div>
            <div class="bg-white w-2/5 rounded-r-xl flex-col flex justify-center items-center">
            <div class="bg-white w-full h-4/6 flex justify-center items-center rounded-tr-xl">
            <img src="hp.png" class="w-56 h-96">
            </div>
            <div class="bg-white w-auto h-28 rounded-br-xl">
            <p class="text-black text-center font-bold font-serif text-2xl flex-col">Atas Kunjungan anda</p>
            <p class="text-black text-center font-bold font-serif text-2xl flex-col">kami ucapkan</p>
            <p class="text-black text-center font-bold font-serif text-2xl flex-col">Terimakasih</p>
            </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-300 w-screen h-36"></div>
        <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
        <p>&copy; 2024 All Rights Reserved By Dinas Komunikasi dan Informatika Kota Tasikmalaya</p>
        </div>
        </footer>
</body>
</html>