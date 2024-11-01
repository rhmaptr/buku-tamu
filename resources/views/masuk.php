<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu | Masuk</title>
</head>
<body>
    <div class="bg-blue-300 w-screen h-screen flex items-center justify-center">
        <div class="bg-white w-3/5 h-3/4 rounded-xl flex">
            <div class="bg-white w-1/2 h-auto rounded-tl-xl rounded-bl-xl flex-col">
                <div class="bg-green-300 w-full mt-12 h-10 flex items-center justify-center">LOGO</div>
                <div class="bg-white w-full h-20 mt-8 flex-col">
                    <div class="bg-white w-36 h-6 ml-16 font-medium">Nama Pengguna</div>
                    <input type="text" class=" w-80 h-12 ml-12 rounded-lg border-2 border-blue-200 pl-4 font-medium" placeholder="Masukan Nama Pengguna"></input>
                </div>
                <div class="bg-white w-full h-20">
                <div class="bg-white w-36 h-6 ml-16 font-medium">Kata Sandi</div>
                <input type="text" class=" w-80 h-12 ml-12 rounded-lg border-2 border-blue-200 pl-4 font-medium" placeholder="Masukan Kata Sandi"></input>
                </div>
                <div class="bg-white w-full h-20">
                <div class="bg-white w-36 h-6 ml-16 font-medium">Instansi</div>
                <select class=" w-80 h-12 ml-12 rounded-lg border-2 border-blue-200 pl-4 font-medium" placeholder="Masukan Nama Pengguna">
                    <option></option>
                    <option></option>
                </select>
                </div>
                <div class="bg-white w-full h-14 mt-4">
                    <button type="submit" class=" bg-blue-500 w-80 h-10 rounded-lg ml-12 flex items-center justify-center font-semibold hover:bg-blue-900 text-white">Masuk</button>
                </div>
            </div>
            <div class="bg-white w-1/2 h-auto rounded-tr-xl rounded-br-xl flex items-center justify-center">
                <img src="tablet.svg" class=" w-96 flex items-center justify-center">
            </div>
        </div>
    </div>
</body>
</html>