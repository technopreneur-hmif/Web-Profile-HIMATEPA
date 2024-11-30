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
      <x-hero title="SELAMAT DATANG" description="Website Resmi Himpunan Mahasiswa Ganasarkara Institut Teknologi Sumatera" />
      {{-- WHO ARE WE --}}
      <div class="font-segoeBold text-[40px] font-black text-[#EDE5CE] h-[512px] px-[87px]">
        <h1>WHO ARE WE ?</h1>
        <div class="mt-[43px] flex gap-[94px] font-nunito">
          <div class="w-[546px] h-[405px] bg-slate-500 ring-2  ring-[#C9A840] rounded-[8px] "></div>
          <div class="">
            <h2 class="mt-[54px] text-[#EDE5CE]  text-[39px] font-black ">
              We Are Himatepa ITERA
            </h2>
            <p class="mt-[24px] text-[20px] text-[#BFB9A5] font-normal max-w-[827px] text-justify">
              Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
              massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
              sapien fringilla, mattis ligula consectetur, ultrices mauris.
              Maecenas vitae mattis tellus. Nullam quis imperdiet augue.
              Vestibulum auctor ornare leo, non suscipit magna interdum eu.
              Curabitur pellentesque nibh nibh, at maximus ante fermentum
              sit amet.
            </p>
            <button class="mt-[24px] text-[13px] px-[32px] py-[8px] text-[#181818] font-bold bg-[#C9A840] rounded-full flex justify-center items-center">
              Learn More
            </button>
          </div>

          <div class="bg-gradient-to-b from-[#C9A840] to-[#EDE5CE] "></div>
        </div>
      </div>
      {{-- OUR PRODUCT --}}
      <div class="mt-[80px] w-full h-[838px] py-[36px] flex flex-col  items-center gap-[40px] bg-gradient-to-b from-[#C9A840] from-15%  to-[#63531F]/0 to-100%">
        <div class="flex gap-4 font-nunito">
          <div class="bg-fast-food w-[48px] h-[48px]"></div>
          <h1 class="text-[39px] font-black font-segoeBold text-[#181818]">
            OUR PRODUCTS
          </h1>
        </div>
        <div class="py-[16px] flex gap-[108px]">
          <div class="flex flex-col gap-[32px] justify-center items-center font-nunito">
            <div class="w-[375px] h-[375px] rounded-full bg-slate-500 ring-4 ring-[#181818] "></div>
            <div class="text-center">
              <h1 class="text-[25px] font-bold text-[#EDE5CE]">
                KUE SUS
              </h1>
              <p class="text-[16px] font-medium text-[#959181]">
                Lorem ipsum dolor sit amet consectetur{" "}
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-[32px] justify-center items-center font-nunito">
            <div class="w-[375px] h-[375px] rounded-full bg-slate-500 ring-4 ring-[#181818] "></div>
            <div class="text-center">
              <h1 class="text-[25px] font-bold text-[#EDE5CE]">
                KUE SUS
              </h1>
              <p class="text-[16px] font-medium text-[#959181]">
                Lorem ipsum dolor sit amet consectetur{" "}
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-[32px] justify-center items-center font-nunito">
            <div class="w-[375px] h-[375px] rounded-full bg-slate-500 ring-4 ring-[#181818] "></div>
            <div class="text-center">
              <h1 class="text-[25px] font-bold text-[#EDE5CE]">
                KUE SUS
              </h1>
              <p class="text-[16px] font-medium text-[#959181]">
                Lorem ipsum dolor sit amet consectetur{" "}
              </p>
            </div>
          </div>
        </div>
        <div class="flex justify-center flex-col items-center">
          <h1 class="font-nunito font-black text-[#EDE5CE] text-[31px]">
            See More
          </h1>
          <div class="bg-see-more w-[48px] h-[48px]"></div>
        </div>
      </div>
      {{-- Section Article --}}
      <div class="bg-[#63531F]/0 py-[80px] font-nunito px-[87px]">
        <div class="flex justify-between items-center">
          <div class="flex gap-[16px] ">
            <div></div>
            <h1 class="font-segoeBold text-[39px] text-[#EDE5CE]">
              ARTICLES
            </h1>
          </div>
          <div class="flex gap-2 text-[25px] text-[#A5A5A5] font-semibold">
            <h2>See All</h2>
            <span>-></span>
          </div>
        </div>
        <div class="mt-[43px] py-[24px] flex justify-between">
          <div class="flex flex-col gap-[20px] w-[374px] px-[8px] justify-center">
            <div class="w-[358px] h-[224px] bg-slate-500 ring-2 ring-[#C9A840] rounded-[8px]"></div>
            <div class="flex items-between justify-between">
              <h3 class="bg-[#BFB9A5]/30 text-[#C9A840] px-2 py-1 text-[13px] font-black rounded-full">
                Divisi Pubdok
              </h3>
              <h3 class="text-[13px] text-[#C9A840]">
                24 Oktober 2024
              </h3>
            </div>
            <div class="flex flex-col gap-2">
              <h2 class="text-[#EDE5CE] font-segoeBold font-black">
                HIMATEPA Goest To School
              </h2>
              <p class="text-[16px] text-[#BFB9A5] text-justify">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis...
              </p>
            </div>
            <button class="rounded-full font-bold bg-[#C9A840] text-[#181818] px-[32px] py-[8px] w-full text-[13px]">
              Learn More
            </button>
          </div>
          <div class="flex flex-col gap-[20px] w-[374px] px-[8px] justify-center">
            <div class="w-[358px] h-[224px] bg-slate-500 ring-2 ring-[#C9A840] rounded-[8px]"></div>
            <div class="flex items-between justify-between">
              <h3 class="bg-[#BFB9A5]/30 text-[#C9A840] px-2 py-1 text-[13px] font-black rounded-full">
                Divisi Pubdok
              </h3>
              <h3 class="text-[13px] text-[#C9A840]">
                24 Oktober 2024
              </h3>
            </div>
            <div class="flex flex-col gap-2">
              <h2 class="text-[#EDE5CE] font-segoeBold font-black">
                HIMATEPA Goest To School
              </h2>
              <p class="text-[16px] text-[#BFB9A5] text-justify">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis...
              </p>
            </div>
            <button class="rounded-full font-bold bg-[#C9A840] text-[#181818] px-[32px] py-[8px] w-full text-[13px]">
              Learn More
            </button>
          </div>
          <div class="flex flex-col gap-[20px] w-[374px] px-[8px] justify-center">
            <div class="w-[358px] h-[224px] bg-slate-500 ring-2 ring-[#C9A840] rounded-[8px]"></div>
            <div class="flex items-between justify-between">
              <h3 class="bg-[#BFB9A5]/30 text-[#C9A840] px-2 py-1 text-[13px] font-black rounded-full">
                Divisi Pubdok
              </h3>
              <h3 class="text-[13px] text-[#C9A840]">
                24 Oktober 2024
              </h3>
            </div>
            <div class="flex flex-col gap-2">
              <h2 class="text-[#EDE5CE] font-segoeBold font-black">
                HIMATEPA Goest To School
              </h2>
              <p class="text-[16px] text-[#BFB9A5] text-justify">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis...
              </p>
            </div>
            <button class="rounded-full font-bold bg-[#C9A840] text-[#181818] px-[32px] py-[8px] w-full text-[13px]">
              Learn More
            </button>
          </div>
        </div>
      </div>
      <div class="bg-[#63531F]/0 py-[80px] font-nunito px-[87px]">
        <div class="flex justify-between items-center">
          <div class="flex gap-[16px] ">
            <div></div>
            <h1 class="font-segoeBold text-[39px] text-[#EDE5CE]">
              BEASISWA
            </h1>
          </div>
          <div class="flex gap-2 text-[25px] text-[#A5A5A5] font-semibold">
            <h2>See All</h2>
            <span>-></span>
          </div>
        </div>
        <div class="mt-[43px] py-[24px] flex justify-between">
          <div class="flex flex-col gap-[20px] w-[374px] px-[8px] justify-center">
            <div class="w-[358px] h-[224px] bg-slate-500 ring-2 ring-[#C9A840] rounded-[8px]"></div>
            <div class="flex items-between justify-between">
              <h3 class="bg-[#BFB9A5]/30 text-[#C9A840] px-2 py-1 text-[13px] font-black rounded-full">
                Divisi Pubdok
              </h3>
              <h3 class="text-[13px] text-[#C9A840]">
                24 Oktober 2024
              </h3>
            </div>
            <div class="flex flex-col gap-2">
              <h2 class="text-[#EDE5CE] font-segoeBold font-black">
                HIMATEPA Goest To School
              </h2>
              <p class="text-[16px] text-[#BFB9A5] text-justify">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis...
              </p>
            </div>
            <button class="rounded-full font-bold bg-[#C9A840] text-[#181818] px-[32px] py-[8px] w-full text-[13px]">
              Learn More
            </button>
          </div>
          <div class="flex flex-col gap-[20px] w-[374px] px-[8px] justify-center">
            <div class="w-[358px] h-[224px] bg-slate-500 ring-2 ring-[#C9A840] rounded-[8px]"></div>
            <div class="flex items-between justify-between">
              <h3 class="bg-[#BFB9A5]/30 text-[#C9A840] px-2 py-1 text-[13px] font-black rounded-full">
                Divisi Pubdok
              </h3>
              <h3 class="text-[13px] text-[#C9A840]">
                24 Oktober 2024
              </h3>
            </div>
            <div class="flex flex-col gap-2">
              <h2 class="text-[#EDE5CE] font-segoeBold font-black">
                HIMATEPA Goest To School
              </h2>
              <p class="text-[16px] text-[#BFB9A5] text-justify">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis...
              </p>
            </div>
            <button class="rounded-full font-bold bg-[#C9A840] text-[#181818] px-[32px] py-[8px] w-full text-[13px]">
              Learn More
            </button>
          </div>
          <div class="flex flex-col gap-[20px] w-[374px] px-[8px] justify-center">
            <div class="w-[358px] h-[224px] bg-slate-500 ring-2 ring-[#C9A840] rounded-[8px]"></div>
            <div class="flex items-between justify-between">
              <h3 class="bg-[#BFB9A5]/30 text-[#C9A840] px-2 py-1 text-[13px] font-black rounded-full">
                Divisi Pubdok
              </h3>
              <h3 class="text-[13px] text-[#C9A840]">
                24 Oktober 2024
              </h3>
            </div>
            <div class="flex flex-col gap-2">
              <h2 class="text-[#EDE5CE] font-segoeBold font-black">
                HIMATEPA Goest To School
              </h2>
              <p class="text-[16px] text-[#BFB9A5] text-justify">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis...
              </p>
            </div>
            <button class="rounded-full font-bold bg-[#C9A840] text-[#181818] px-[32px] py-[8px] w-full text-[13px]">
              Learn More
            </button>
          </div>
        </div>
      </div>
      <x-footer/>
    </div>
</body>
</html>
