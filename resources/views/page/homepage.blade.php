@extends('layout.pagelay')

@section('konten')
    <div class="flex w-full justify-between">
        <div class="w-[60%] ml-16 mt-24">
            <h1 class="font-bold text-3xl">Hello My Friends</h1>
            <h1 class="font-bold text-3xl">Welcome to My World.</h1>
            <h3 class="w-[500px] pt-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum et odio at
                porttitor. Fusce feugiat id elit vel laoreet.</h3>
            <div class="my-6">
                <button type="button"
                    class="text-white bg-cl-pink font-bold rounded-full text-sm px-14 py-2 text-center me-2 mb-2">Contact
                    Me!</button>
            </div>
        </div>
        <div class="w-[40%] mb-24">
            <img src="/gambar/homepage dayu.png" class="w-[430px] h-[510px] ml-20">
        </div>
    </div>
    <div class="relative w-full h-full">
        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat w-full"
            style="background-image: url('/gambar/background about.png'); z-index: -1;">
            <!-- Background di bawah -->
        </div>
        <div class="relative z-10">
            <!-- Konten di atas background -->
            <div class="flex w-full justify-between py-12">
                <div class="w-[40%] ml-16">
                    <div>
                        <img src="/gambar/aboutme dayu.jpg" class="w-[400px] h-[510px]">
                    </div>
                </div>
                <div class="w-[65%] mt-16 px-10">
                    <h1 class="font-bold text-3xl">About Me</h1>
                    <p class="w-[800px] pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quos saepe
                        facere incidunt, corrupti illo iusto corporis magnam non. Rem est sit rerum modi aliquam tempore
                        facilis, iste accusamus non architecto voluptate a? Modi reprehenderit est non a dolorum, sint iusto
                        quidem necessitatibus omnis et, sapiente obcaecati suscipit, numquam facere. Voluptatibus tempora
                        distinctio minus itaque non illum aut culpa quibusdam perferendis nobis eligendi, rem totam nulla
                        obcaecati odio! Officia praesentium dignissimos eaque cumque impedit tempora magnam quod delectus
                        numquam quis minima, deserunt, unde laudantium fuga reprehenderit molestiae, recusandae quidem nisi
                        est perspiciatis corporis. Possimus, accusamus eius iure expedita at assumenda!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Konten di atas background -->
    <div class="py-5">
        <h1 class="text-3xl font-bold text-center">My Skills</h1>
        <div class="flex w-full justify-between py-10">
            <div
                class="max-w-sm h-[480px] p-6 bg-white border border-cl-pink rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col items-center mx-16">
                <img src="/gambar/Modelling_card.png" class="w-[150px] h-[150px] mb-5">
                <h1 class="mb-3 text-3xl font-bold tracking-tight text-cl-purplePale text-center">Modelling</h1>
                <p class="font-normal text-gray-700 text-center">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
            <div
                class="max-w-sm h-[480px] p-6 bg-white border border-cl-pink rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col items-center mx-16">
                <img src="/gambar/Mc_card.png" class="w-[150px] h-[150px] mb-5">
                <h1 class="mb-3 text-3xl font-bold tracking-tight text-cl-purplePale text-center">Public Speaking</h1>
                <p class="font-normal text-gray-700 text-center">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
            <div
                class="max-w-sm h-[480px] p-6 bg-white border border-cl-pink rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col items-center mx-16">
                <img src="/gambar/dance_card.png" class="w-[150px] h-[150px] mb-5">
                <h1 class="mb-3 text-3xl font-bold tracking-tight text-cl-purplePale text-center">Dance</h1>
                <p class="font-normal text-gray-700 text-center">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>
    </div>
    <div class="relative w-full h-full">
        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat w-full"
            style="background-image: url('/gambar/portofolio bg.png'); z-index: -1;">
        </div>
        <div class="relative z-10">
            <div class="flex w-full justify-between">
                <div class="w-[30%] ml-16 mt-52">
                    <h1 class="font-bold text-3xl">Discover All My</h1>
                    <h1 class="font-bold text-3xl">Achievements Here!</h1>
                    <h3 class="w-[500px] pt-3"> Explore my journey and see how each step has brought me closer to my dreams.
                    </h3>
                    <div class="my-6">
                        <button type="button"
                            class="text-white bg-cl-pink font-bold rounded-full text-sm px-14 py-2 text-center me-2 mb-2">Click
                            Here!</button>
                    </div>
                </div>
                <div class="flex w-[50%] py-24">
                    <img src="/gambar/port1.png" class="w-[150px] h-[500px] ml-16">
                    <img src="/gambar/port2.png" class="w-[150px] h-[500px] mx-10">
                    <img src="/gambar/port3.png" class="w-[150px] h-[500px]">
                </div>
            </div>
        </div>
    </div>
    <div class="relative w-full h-full">
        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat w-full"
            style="background-image: url('/gambar/Union.png'); z-index: -1;">
        </div>
        <div class="relative z-10">
            <div class="flex w-full justify-between">
                <div class="w-[50%] pt-12">
                    <img src="/gambar/uta.png" class="w-[400px] h-[510px] ml-16">
                </div>
                <div class="w-[50%] pt-36">
                    <h1 class="text-3xl font-bold ml-16">Contact Me for</h1>
                    <h1 class="text-3xl font-bold ml-16">Work or Collaboration</h1>
                    <img src="/gambar/Contact.png" class="w-[300px] h-[300px] ml-16 mt-5">
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-cl-pink pt-5 pb-5 flex items-center justify-center">
        <h1 class="text-white font-medium text-center">© Fadel Muhammad, 25 Agustus 2024.</h1>
    </div>
@endsection
