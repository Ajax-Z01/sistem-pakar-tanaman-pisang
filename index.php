<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Sistem Pakar Tanaman Pisang</title>
</head>

<body class="bg-green-300">
    <div class="mx-auto w-screen">
        <div class="flex flex-col items-center justify-center h-screen">
            <div class="w-screen text-center">
                <h1 class="h-1/4 pb-20 lg:text-6xl md:text-4xl sm:text-3xl text-xl text-green-900 font-semibold font-serif">Sistem Pakar Tanaman Pisang</h1>
                <div class="">
                    <div class="flex flex-row">
                        <div class="w-screen">
                            <button id="start" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900 mt-12">Mulai</button>
                        </div>
                    </div>
                </div>
                <div id="gejala1" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl text-lg font-medium">Garis-garis coklat kehitaman paralel pada helaian daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no1" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes1" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala2" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak memanjang berukuran 2 x 20 mm paralel pada helaian daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no2" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes2" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala3" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak tersusun segaris searah dengan ibu tulang daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no3" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes3" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala4" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak daun berbentuk oval atau memanjang dan terdapat lingkaran berwarna kuning pada pinggiran bercak</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no4" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes4" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala5" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun mengering pada sebagian atau seluruh helaian daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no5" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes5" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala6" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Buah tidak berkembang dan mengalami pematangan lebih cepat</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no6" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes6" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala7" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak berwarna kuning sampai coklat pucat berbentuk belah ketupat atau berbentuk seperti mata</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no7" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes7" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala8" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak dengan pusat lingkaran nekrosis berwarna abu-abu</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no8" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes8" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala9" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">terdapat Bercak di pinggiran daun dan berkembang menuju ke ibu tulang daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no9" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes9" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala10" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun menguning dan mengering</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no10" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes10" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala11" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak berwarna hitam dengan 4 sudut sehingga berbentuk silang</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no11" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes11" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala12" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak memanjang searah dengan tulang daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no12" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes12" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala13" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Bercak menyebar secara acak</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no13" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes13" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala14" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak bersilang berukuran sampai dengan 6 cm</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no14" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes14" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala15" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun mengering tetapi helaian daun tidak patah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no15" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes15" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala16" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun menguning di mulai dari tepi daun dan dari daun-daun yang tua</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no16" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes16" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala17" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Helaian daun mengering dan menggantung karena pangkal tangkai daunnya patah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no17" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes17" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala18" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Batang semu terbelah atau pecah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no18" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes18" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala19" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terjadi perubahan warna jaringan pembuluh menjadi coklat pada batang semu</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no19" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes19" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala20" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat necrosis berwarna coklat sampai hitam melingkari bonggol</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no20" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes20" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala21" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Bunga (jantung) membusuk dan mengering</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no21" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes21" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala22" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daging buah busuk dan berlendir merah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no22" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes22" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala23" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Buah membusuk dan mengering</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no23" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes23" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala24" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun menguning pada seluruh helaian daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no24" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes24" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala25" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat perubahan warna coklat-kemerahan pada empulur dan tangkai tandan</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no25" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes25" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala26" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Bonggol busuk dan berbau tidak sedap</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no26" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes26" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala27" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun mengecil dan berdiri tegak</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no27" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes27" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala28" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Daun pucat</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no28" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes28" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala29" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Ruas daun memendek</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no29" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes29" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala30" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat bercak atau garis berwarna hijau gelap pada ibu tulang daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no30" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes30" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala31" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman berukuran kecil</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no31" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes31" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala32" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman tumbuh merana</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no32" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes32" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala33" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Pertumbuhan buah tidak normal</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no33" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes33" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala34" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Perakaran tidak tumbuh normal: akar serabut tidak tumbuh dan ujung akar membusuk</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no34" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes34" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala35" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat lubang seperti terowongan pada bonggol</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no35" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes35" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala36" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat larva serangga berwarna putih kekuningan atau kumbang dewasa berwarna coklat kehitaman pada lubang terowongan di bonggol</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no36" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes36" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala39" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Beberapa helaian daun mengering karena pelepahnya dimakan serangga</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no39" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes39" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala40" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Batang semu berlubang dan mengeluarkan lendir berwarna bening</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no40" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes40" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala41" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat larva serangga berwarna putih kekuningan atau kumbang dewasa berwarna hitam mengkilat pada lubang di batang semu</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no41" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes41" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala42" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Lembaran daun robek dan menggulung</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no42" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes42" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala43" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Gulungan daun mengering</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no43" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes43" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala44" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat ulat berwarna putih kehijauan berbedak di dalam gulungan daun</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no44" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes44" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala45" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Kulit buah berkudis atau burik</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no45" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes45" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala46" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat kotoran pada sela-sela jari buah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no46" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes46" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala47" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat ulat berwarna coklat gelap di sela-sela jari buah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no47" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes47" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala48" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Terdapat ulat berwarna abu-abu orange di sela-sela seludang bunga</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no48" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes48" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala51" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman rebah</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no51" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes51" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala52" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Perakaran tidak tumbuh normal: akar serabut tidak tumbuh dan ujung akar membusuk</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no52" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes52" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="gejala53" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Gejala</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Nekrosis pada akar dan terdapat garis memanjang berwarna hitam di sepanjang perakaran</p>
                    <div class="flex flex-row">
                        <div class="basis-1/2">
                            <button id="no53" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Tidak</button>
                        </div>
                        <div class="basis-1/2">
                            <button id="yes53" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Ya</button>
                        </div>
                    </div>
                </div>
                <div id="hasil" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Jawaban anda sedang diproses...</p>
                    <!-- <a href="result.php"></a> -->
                    <button id="lihatHasil" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Hasil</button>
                </div>
                <div id="hasil1" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda memiliki Penyakit Bercak Daun Sigatoka</p>
                    <button id="lihatsolusi1" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil2" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda memiliki Penyakit Bercak Daun Cordona</p>
                    <button id="lihatsolusi2" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil3" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda memiliki Penyakit Bercak Bersilang</p>
                    <button id="lihatsolusi3" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil4" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda memiliki Penyakit Layu Fusarium</p>
                    <button id="lihatsolusi4" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil5" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda memiliki Penyakit Darah</p>
                    <button id="lihatsolusi5" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil6" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda memiliki Penyakit Kerdil Pisang</p>
                    <button id="lihatsolusi6" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil7" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda diserang Hama Penggerek Bonggol Pisang</p>
                    <button id="lihatsolusi7" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil8" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda diserang Hama Penggerek Batang Pisang</p>
                    <button id="lihatsolusi8" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil9" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda diserang Hama Penggulung Daun Pisang</p>
                    <button id="lihatsolusi9" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil10" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda diserang Hama Kudis Buah</p>
                    <button id="lihatsolusi10" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil11" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda diserang Hama Serangan Nematode</p>
                    <button id="lihatsolusi11" class="w-1/2 lg:h-16 md:h-12 sm:h-8 lg:text-3xl md:text-2xl sm:text-xl bg-green-900 text-white text-2xl rounded-full border-2 border-black hover:text-black hover:bg-green-600 hover:border-green-900">Lihat Solusi</button>
                </div>
                <div id="hasil12" class="hidden">
                    <p class="mb-10 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Hasil</p>
                    <p class="mb-20 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Tanaman anda Sehat dan tidak berpenyakit</p>
                </div>
                <div id="solusi1" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Bercak Daun Sigatoka</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-40 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Mengatur jarak tanam jangan terlalu rapat untuk mengurangi kelembaban
                        </li>
                        <li class="mb-4">
                            Memangkas daun-daun yang terserang kemudian memusnahkannya
                        </li>
                        <li class="mb-4">
                            Penyemprotan fungisida sistemik berbahan aktif Benzimidazole dan Dithiocarbamate
                        </li>
                    </ul>
                </div>
                <div id="solusi1" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Bercak Daun Sigatoka</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-40 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Mengatur jarak tanam jangan terlalu rapat untuk mengurangi kelembaban
                        </li>
                        <li class="mb-4">
                            Memangkas daun-daun yang terserang kemudian memusnahkannya
                        </li>
                        <li class="mb-4">
                            Penyemprotan fungisida sistemik berbahan aktif Benzimidazole dan Dithiocarbamate
                        </li>
                    </ul>
                </div>
                <div id="solusi2" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Bercak Daun Cordona</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-40 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Gunakan varietas tanguh jika tersedia di daerah anda
                        </li>
                        <li class="mb-4">
                            Atur jarak tanam yang tepat unutk menghindari naungan dan kontak daun
                        </li>
                        <li class="mb-4">
                            Pastikan bahwa perkebunan baru berada pada jarak yang cukup dari perkebunan yang sakit
                        </li>
                        <li class="mb-4">
                            Hindari irigasi pancur unutk meminimalkan kelebaban relative dan gunakan irigasi tetes
                        </li>
                        <li class="mb-4">
                            Gunakan pemupukan berimbang dan hindari penggunaan berlebihan
                        </li>
                        <li class="mb-4">
                            Buang dan bakar daun yang terinfeksi
                        </li>
                        <li class="mb-4">
                            Terapkan sanitasi lahan dengan membuang daun menggantung yang sudah kering
                        </li>
                    </ul>
                </div>
                <div id="solusi3" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Bercak Bersilang</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-52 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Gunakan varietas tanguh jika tersedia di daerah anda
                        </li>
                        <li class="mb-4">
                            Pastikan bahwa perkebunan baru berada pada jarak yang cukup dari perkebunan yang sakit
                        </li>
                        <li class="mb-4">
                            Buang dan bakar daun yang terinfeksi
                        </li>
                        <li class="mb-4">
                            Terapkan sanitasi lahan dengan membuang darun menggantung yag sudah kering
                        </li>
                    </ul>
                </div>
                <div id="solusi4" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Layu Fusarium</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-60 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Menyemprotkan pestisida setiap dua kali seminggu
                        </li>
                        <li class="mb-4">
                            Mengganti media tanaman yang sudah layu
                        </li>
                    </ul>
                </div>
                <div id="solusi5" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Darah</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-80 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Menanam bibit yang sehat
                        </li>
                        <li class="mb-4">
                            Membongkar kemudian membakar tanaman yang terserang
                        </li>
                        <li class="mb-4">
                            Penyemprotan bakterisida
                        </li>
                    </ul>
                </div>
                <div id="solusi6" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang memiliki Penyakit Kerdil Pisang</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-60 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Menanam bibit yang terbebas dari virus,
                        </li>
                        <li class="mb-4">
                            Membongkar tanaman yang terserang kemudian membakarnya serta melakukan penyemprotan insektisida untuk mengendalikan vektor hama.
                        </li>
                    </ul>
                </div>
                <div id="solusi7" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang diserang Hama Penggerek Bonggol Pisang</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-40 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Jangan mengangkut bahan penanaman pisang antar berbagai daerah
                        </li>
                        <li class="mb-4">
                            Gunakan bahan tanam dari sumber bersertifikat
                        </li>
                        <li class="mb-4">
                            Gunakan varietas tahan hama jika tersedia
                        </li>
                        <li class="mb-4">
                            Rangsang predator serangga yang menguntungkan seperti semut dan kumbang
                        </li>
                        <li class="mb-4">
                            Rotasi tanaman dianjurkan di lahan yang terinfeksi hama ini
                        </li>
                    </ul>
                </div>
                <div id="solusi8" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang diserang Hama Penggerek Batang Pisang</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-40 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Jangan mengangkut bahan penanaman pisang antar berbagai daerah
                        </li>
                        <li class="mb-4">
                            Gunakan bahan tanam dari sumber bersertifikat
                        </li>
                        <li class="mb-4">
                            Gunakan varietas tahan hama jika tersedia
                        </li>
                        <li class="mb-4">
                            Rangsang predator serangga yang menguntungkan seperti semut dan kumbang
                        </li>
                        <li class="mb-4">
                            Rotasi tanaman dianjurkan di lahan yang terinfeksi hama ini
                        </li>
                    </ul>
                </div>
                <div id="solusi9" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang diserang Hama Penggulung Daun Pisang</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-40 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Pantau lahan unutk mencari tanda tanda hama
                        </li>
                        <li class="mb-4">
                            Manfaatkan perangkap cahaya atau perangkap beroerekat unutk menarik dan mengumpulkan serangga dewasa
                        </li>
                        <li class="mb-4">
                            Singkirkan gulma berumput dari lahan dan sekelilingnya
                        </li>
                        <li class="mb-4">
                            Kendalikan penggunaan insektisida sehingga pemangsa dapat mengendalikan populasi penggulung daun
                        </li>
                    </ul>
                </div>
                <div id="solusi10" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang diserang Hama Kudis Buah</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-60 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Pilih varietas yang tangguh , jika tersedia
                        </li>
                        <li class="mb-4">
                            Periksa tandan yang baru muncul unutk mengetahui adanya kerusakan dan atau larva
                        </li>
                        <li class="mb-4">
                            Berikan perhatian khusus pada pangkal tangkai tandan dan periksa keberadaan getah bening seperti jeli
                        </li>
                    </ul>
                </div>
                <div id="solusi11" class="hidden">
                    <p class="mb-8 lg:text-5xl md:text-3xl sm:text-2xl text-xl font-medium">Solusi</p>
                    <p class="mb-12 mx-10 lg:text-4xl md:text-2xl sm:text-xl font-medium">Solusi untuk tanaman anda yang diserang Hama Serangan Nematode</p>
                    <ul class="list-disc list-outside mb-8 lg:mx-52 md:mx-32 mx-20 lg:text-3xl md:text-xl sm:text-lg font-medium text-left">
                        <li class="mb-4">
                            Tumpang sarikan lahan dengan bunga marigold atau calendula atau menanam bunga diantara tanaman juga mengurangi populasi
                        </li>
                        <li class="mb-4">
                            Bajak lahan dan biarkan tanaha terkena radaisi matahari (solarisasi)
                        </li>
                        <li class="mb-4">
                            Dalam kasus serangga yang berat , pertimbangkan membiarkan tanah kososng (bera) selama beberapa bulan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="counter.js"></script>
</body>

</html>