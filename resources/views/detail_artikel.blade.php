<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    @vite('resources/css/app.css')
</head>
<body id="home">
    <div class="relative bg-[#060606]">
      <x-navbar/>
      {{-- HERO --}}
      <div class="relative h-[937px] w-full overflow-x-hidden -mt-[112px] bg-[#060606]">
        <div class="absolute bg-hero-dashboard h-[937px]  inset-0  bg-cover bg-center "></div>
        <div class="absolute inset-0 h-[937px] w-full bg-gradient-to-b from-[#000000]/0 from-10%  to-[#181818] to-95%"></div>
        <div class="absolute inset-0 bg-black bg-opacity-75 h-[937px] "></div>
        <div class="relative font-nunito py-[192px] px-[243px]">
          <div class="relative">
            <div class="relative flex justify-center mb-[24px]">
                <div class="bg-[#C9A840] py-1 px-4 rounded-full text-[#1F1F1D] font-bold text-[13px]">
                    Divisi Kajitek
                </div>
                <div class="py-1 px-4 rounded-full text-[#BFB9A5] font-semibold text-[13px]">
                    21 November 2024
                </div>
            </div>
            <h1 class="text-center text-[61px] text-[#EDE5CE] font-semibold font-nunito uppercase px-[209px] mb-[56px]">Teknologi pangan terbaru</h1>
            <div class="w-full h-[416px] bg-slate-500 rounded-[8px] mb-[56px]"></div>
            <div class="flex flex-col font-nunito text-[#EDE5CE] gap-[20px]">
                <h1 class="font-bold text-[39px]">Lorem impsum dolor sit</h1>
                <p class="font-reguler text-[16px] text-justify">
                    Lorem ipsum dolor sit amet consectetur. Faucibus nisi volutpat nibh etiam justo rutrum tincidunt sed. Vel commodo eget maecenas elit odio eget sapien enim. Magna non vitae morbi et integer volutpat facilisis. Justo eget nulla sed scelerisque nisi suspendisse. Congue eu posuere orci a placerat nibh vel. Dictumst rhoncus pellentesque at justo. Accumsan enim urna aenean velit. A quam aliquet in dictumst cursus sit ultricies. Ac ac vel amet porttitor potenti interdum maecenas cursus. Sagittis pellentesque dictum elementum risus sit non sit. Gravida interdum consectetur orci libero ullamcorper ut in. Sem elit enim commodo sed ac amet elementum nulla fringilla.
                </p>
                <ol class="list-decimal flex flex-col gap-[20px]">
                    <div class="ml-[28px] flex flex-col gap-[20px]">
                        <li class="text-[20px] font-bold">
                            Rhoncus enim duis
                        </li>
                        <p class="text-[16px] text-justify">
                            Rhoncus enim duis a est at mi ut elit elit. Tincidunt vitae quisque facilisis elit. Ultricies ac velit mi auctor lectus mi viverra rhoncus cursus. Feugiat viverra vitae erat duis leo imperdiet nullam. Lacus in orci ullamcorper elementum. Mauris sed volutpat urna sit augue arcu fermentum enim. Convallis volutpat sed nam amet sagittis. Tristique pellentesque eget pretium nulla et viverra. Tempus at quis pretium dui. In fermentum ultrices eget arcu vel faucibus leo ac. Faucibus dignissim sit id nunc. Phasellus semper risus malesuada tellus. Odio feugiat vitae at fringilla.
                        </p>
                    </div>
                    <div class="ml-[28px] flex flex-col gap-[20px]">
                        <li class="text-[20px] font-bold">
                            Rhoncus enim duis
                        </li>
                        <p class="text-[16px] text-justify">
                            Rhoncus enim duis a est at mi ut elit elit. Tincidunt vitae quisque facilisis elit. Ultricies ac velit mi auctor lectus mi viverra rhoncus cursus. Feugiat viverra vitae erat duis leo imperdiet nullam. Lacus in orci ullamcorper elementum. Mauris sed volutpat urna sit augue arcu fermentum enim. Convallis volutpat sed nam amet sagittis. Tristique pellentesque eget pretium nulla et viverra. Tempus at quis pretium dui. In fermentum ultrices eget arcu vel faucibus leo ac. Faucibus dignissim sit id nunc. Phasellus semper risus malesuada tellus. Odio feugiat vitae at fringilla.
                        </p>
                    </div>
                    <div class="ml-[28px] flex flex-col gap-[20px]">
                        <li class="text-[20px] font-bold">
                            Rhoncus enim duis
                        </li>
                        <p class="text-[16px] text-justify">
                            Rhoncus enim duis a est at mi ut elit elit. Tincidunt vitae quisque facilisis elit. Ultricies ac velit mi auctor lectus mi viverra rhoncus cursus. Feugiat viverra vitae erat duis leo imperdiet nullam. Lacus in orci ullamcorper elementum. Mauris sed volutpat urna sit augue arcu fermentum enim. Convallis volutpat sed nam amet sagittis. Tristique pellentesque eget pretium nulla et viverra. Tempus at quis pretium dui. In fermentum ultrices eget arcu vel faucibus leo ac. Faucibus dignissim sit id nunc. Phasellus semper risus malesuada tellus. Odio feugiat vitae at fringilla.
                        </p>
                    </div>
                </ol>
            </div>
          </div>
        </div>
        <x-footer class="relative"/>
      </div>
    </div>
</body>
</html>
