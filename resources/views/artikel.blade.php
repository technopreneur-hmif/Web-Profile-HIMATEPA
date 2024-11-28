<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>


<body class="bg-[#181818] text-white font-sans">
    <div class="container mx-auto px-6 py-12">
        <!-- Search Bar -->
        <div class="relative mb-12">
            <!-- Ikon di Kiri -->
            <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.66667 17.3333C6.24445 17.3333 4.19467 16.4942 2.51733 14.816C0.840001 13.1378 0.000889594 11.088 7.05467e-07 8.66667C-0.000888183 6.24533 0.838223 4.19556 2.51733 2.51733C4.19645 0.839111 6.24622 0 8.66667 0C11.0871 0 13.1373 0.839111 14.8173 2.51733C16.4973 4.19556 17.336 6.24533 17.3333 8.66667C17.3333 9.64444 17.1778 10.5667 16.8667 11.4333C16.5556 12.3 16.1333 13.0667 15.6 13.7333L23.0667 21.2C23.3111 21.4444 23.4333 21.7556 23.4333 22.1333C23.4333 22.5111 23.3111 22.8222 23.0667 23.0667C22.8222 23.3111 22.5111 23.4333 22.1333 23.4333C21.7556 23.4333 21.4444 23.3111 21.2 23.0667L13.7333 15.6C13.0667 16.1333 12.3 16.5556 11.4333 16.8667C10.5667 17.1778 9.64445 17.3333 8.66667 17.3333ZM8.66667 14.6667C10.3333 14.6667 11.7502 14.0836 12.9173 12.9173C14.0844 11.7511 14.6676 10.3342 14.6667 8.66667C14.6658 6.99911 14.0827 5.58267 12.9173 4.41733C11.752 3.252 10.3351 2.66844 8.66667 2.66667C6.99822 2.66489 5.58178 3.24844 4.41733 4.41733C3.25289 5.58622 2.66933 7.00267 2.66667 8.66667C2.664 10.3307 3.24756 11.7476 4.41733 12.9173C5.58711 14.0871 7.00356 14.6702 8.66667 14.6667Z" fill="white"/>
                    </svg>
            </span>

            <!-- Input Field -->
            <input type="text" placeholder="Cari Artikel Yang anda Inginkan..."
                   class="w-full pl-12 pr-[90px] h-[54px] rounded-full bg-[#1F1F1F] border-2 border-yellow-500 text-white focus:outline-none focus:border-yellow-600">

            <!-- Tombol Cari -->
            <button class="absolute top-1/2 -translate-y-1/2 right-2 w-[80px] h-[38px] bg-yellow-500 hover:bg-yellow-600 text-[#4D4214] text-[16px] font-bold rounded-full">
                Cari
            </button>
        </div>


        <!-- Articles Grid -->
        <div class="flex justify-center min-h-screen">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article Card -->
                <div class="p-6 rounded-lg w-[374px] h-[471px]">
                    <img src="https://via.placeholder.com/400x200" alt="Article" class="rounded-lg border-2 border-yellow-500 mb-4">
                    <div class="flex items-center justify-between text-[#C9A840] text-[13px] mb-2">
                        <span class="font-bold">Divisi Pubdok</span>
                        <span>24 Oktober 2024</span>
                    </div>
                    <h3 class="text-[20px] text-[#EDE5CE] font-bold mb-2">HIMATEPA Goes To School</h3>
                    <p class="text-[#BFB9A5] text-[16px] text-sm mb-4">
                        Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Ut Et Massa Mi. Aliquam In Hendrerit Urna.
                    </p>
                    <button class="px-6 py-2 bg-[#C9A840] hover:bg-yellow-600 text-black font-semibold rounded-full">Learn More</button>
                </div>

                <!-- Article Card -->
                <div class="p-6 rounded-lg w-[374px] h-[471px]">
                    <img src="https://via.placeholder.com/400x200" alt="Article" class="rounded-lg border-2 border-yellow-500 mb-4">
                    <div class="flex items-center justify-between text-[#C9A840] text-[13px] mb-2">
                        <span class="font-bold">Divisi Pubdok</span>
                        <span>24 Oktober 2024</span>
                    </div>
                    <h3 class="text-[20px] text-[#EDE5CE] font-bold mb-2">HIMATEPA Goes To School</h3>
                    <p class="text-[#BFB9A5] text-[16px] text-sm mb-4">
                        Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Ut Et Massa Mi. Aliquam In Hendrerit Urna.
                    </p>
                    <button class="px-6 py-2 bg-[#C9A840] hover:bg-yellow-600 text-black font-semibold rounded-full">Learn More</button>
                </div>

                <!-- Article Card -->
                <div class="p-6 rounded-lg w-[374px] h-[471px]">
                    <img src="https://via.placeholder.com/400x200" alt="Article" class="rounded-lg border-2 border-yellow-500 mb-4">
                    <div class="flex items-center justify-between text-[#C9A840] text-[13px] mb-2">
                        <span class="font-bold">Divisi Pubdok</span>
                        <span>24 Oktober 2024</span>
                    </div>
                    <h3 class="text-[20px] text-[#EDE5CE] font-bold mb-2">HIMATEPA Goes To School</h3>
                    <p class="text-[#BFB9A5] text-[16px] text-sm mb-4">
                        Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Ut Et Massa Mi. Aliquam In Hendrerit Urna.
                    </p>
                    <button class="px-6 py-2 bg-[#C9A840] hover:bg-yellow-600 text-black font-semibold rounded-full">Learn More</button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
