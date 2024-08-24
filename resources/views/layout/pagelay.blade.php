<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <header>
        <div class="navbar flex w-full justify-between">
            <div>
                <div class="flex">
                    <div class="ml-16">
                        <img src="/gambar/logo md.png" class="w-[40px] h-[40px] mt-5">
                    </div>
                    <div class="my-6">
                        <h1 class="font-bold">Mikaela Dayu</h1>
                    </div>
                </div>
            </div>
            <div class="flex justify-center my-6">
                <a href="" class="font-bold">Home</a>
                <a href="" class="font-bold px-16">Portofolio</a>
                <a href="" class="font-bold">Gallery</a>
            </div>
            <div>
                <div class="mr-8 my-6">
                    <button type="button"
                        class="text-white bg-cl-pink font-bold rounded-full text-sm px-8 py-2 text-center me-2 mb-2">Contact
                        Me!</button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="relative w-full h-full">
            <div class="absolute inset-0 bg-center bg-cover bg-no-repeat mx-[30%] w-[500px] h-[500px]"
                style="background-image: url('/gambar/background logo.png'); z-index: -1;">
                <!-- Background di bawah -->
            </div>
            <div class="relative z-10">
                <!-- Konten di atas background -->
                @yield('konten')
            </div>
        </div>
    </main>
</body>

</html>
