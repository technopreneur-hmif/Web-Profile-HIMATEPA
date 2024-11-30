<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tentang</title>
    @vite('resources/css/app.css')
</head>
<body >
    <div class="relative bg-[#060606]">
        <x-navbar/>
        <div class="relative h-full w-full -mt-[112px]  px-[82px] py-[209px] ">
            <div class="flex flex-col gap-[16px] ">
                <div class="w-full flex gap-[16px] justify-center">
                    <div class="relative bg-tentang bg-slate-500 w-[70%] h-[616px] flex items-end rounded-[8px] p-[32px]"> 
                        {{-- <div class="w-full h-[616px] absolute inset-0 bg-gradient-to-tr from-[#1f1f1f]/95% from-50% to-[#1f1f1f] to-100%"></div> --}}
                        <div class="absolute inset-0 h-[616px] w-full bg-gradient-to-bl from-[#000000]/0 from-[#1f1f1f]/95% from-0% to-[#181818] to-100% rounded-[8px]"></div>

                        <div class="relative w-[95%] flex gap-2 flex-col ">
                            <h1 class="font-segoeBold font-black text-[61px] text-[#EDE5CE]">APA ITU HIMATEPA</h1>
                            <P class="font-medium text-[16px] text-[#A5A5A5] text-justify font-nunito">Lorem ipsum dolor sit amet consectetur. Enim justo elit neque dignissim mauris habitant bibendum ac accumsan. Mi sociis ac gravida duis aliquam in sed. Tempor ac cursus scelerisque ac nisi nec nunc. Diam scelerisque eget pharetra cursus aliquam varius nunc maecenas. Amet diam viverra sed nisi turpis sit senectus cras placerat. Egestas quis dui iaculis aliquam nullam rhoncus.</P>
                        </div>
                    </div>
                    <div class="relative flex flex-col gap-[16px] w-[30%]">
                        <div class="relative h-[50%] p-4 w-full flex items-end rounded-[8px] bg-slate-500">
                            <div class="absolute inset-0 h-full w-full bg-gradient-to-bl from-[#000000]/0 from-[#1f1f1f]/95% from-0% to-[#181818] to-100% rounded-[8px]"></div>
                            <div class="relative flex flex-col gap-2">
                                <h1 class="font-segoeBold font-black text-[25px] text-[#EDE5CE]">PEMBINA HIMATEPA</h1>
                                <h2 class="font-medium text-[16px] text-[#A5A5A5] font-nunito">Zada Agna Talitha, S. TP., M. Si</h2>
                            </div>
                        </div>
                        <div class="relative h-[50%] p-4 w-full flex items-end rounded-[8px] bg-slate-500">
                            <div class="absolute inset-0 h-full w-full bg-gradient-to-bl from-[#000000]/0  from-0% to-[#181818] to-100% rounded-[8px]"></div>
                            <div class="relative flex flex-col gap-2">
                                <h1 class="font-segoeBold font-black text-[25px] text-[#EDE5CE]">TAHUN BERDIRI</h1>
                                <h2 class="font-medium text-[16px] text-[#A5A5A5] font-nunito">22 Januari 2020</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex h-[454px] gap-[16px] justify-center">
                    <div class="relative w-[50%] bg-slate-500  flex items-end rounded-[8px] p-[32px]">
                        <div class="absolute inset-0 h-full w-full bg-gradient-to-bl from-[#000000]/0 from-[#1f1f1f]/95% from-0% to-[#181818] to-100% rounded-[8px]"></div>
                        <div class="relative w-[95%] flex gap-2 flex-col">
                            <h1 class="font-segoeBold font-black text-[61px] text-[#EDE5CE]">VISI</h1>
                            <P class="font-medium text-[16px] text-[#A5A5A5] text-justify font-nunito">
                                Mewujudkan HIMATEPA sebagai wadah bagi mahasiswa teknologi pangan guna meningkatkan sifat profesionalitas, kritis, aktif, prestatif, serta menjunjung tinggi kontributif untuk meningkatkan keilmuan di bidang teknologi pangan dan pengembangan pangan lokal untuk mendukung pembangunan Sumatera dan Indonesia
                            </P>
                        </div>
                    </div>
                    <div class="relative w-[50%] bg-slate-500  flex items-end rounded-[8px] p-[32px]">
                        <div class="absolute inset-0 h-full w-full bg-gradient-to-bl from-[#000000]/0 from-[#1f1f1f]/95% from-0% to-[#181818] to-100% rounded-[8px]"></div>
                        <div class="relative w-[95%] flex gap-2 flex-col">
                            <h1 class="font-segoeBold font-black text-[61px] text-[#EDE5CE]">MISI</h1>
                            <P class="font-medium text-[16px] text-[#A5A5A5] text-justify font-nunito">
                                Mengembangkan akhlak dan kepribadian mahasiswa teknologi pangan ITERA yang berlandaskan iman dan ketaqwaanya.
                            </P>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <x-footer/>
    </div>
</body>
</html>
