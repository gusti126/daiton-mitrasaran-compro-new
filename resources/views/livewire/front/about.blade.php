<div class="md:bg-imgAbout bg-cover bg-right-bottom">
    @section('title')
        About Us
    @endsection
    <div>
        @include('includes.navbar')
    </div>
    <div class="
    text-blue-800 font-medium text-3xl mt-2 mb-4 px-4 md:px-20 ">
        Dedicated Teams. <br>
        For Your Dedicated Dreams.
    </div>
    <div class=" md:px-20 px-4">
        <img src=" {{ asset('gambar/Rectangle 30.png') }}" alt="">
    </div>
    <div class="md:px-32 px-4 -mt-14">
        <div class="grid grid-flow-row grid-cols-3">
            <div class="p-4 col-span-3 md:col-span-1  bg-yellow-200">
                <div class="text-lg font-medium">
                    Why We Do This
                </div>
                <div class="">A few months ago we designed and developed a website for Storetasker. With the website
                    redesign,
                    we did their branding, visual language, and overall website structure.
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="
                    md:px-20 px-4 mt-6 md">
                    <div class="grid grid-flow-row grid-cols-6 md:grid-cols-12 gap-6 md:gap-14">
                        <div class="col-span-6">
                            <div class="text-3xl font-medium md:mt-20">
                                Daiton Mitrasarana
                            </div>
                            <div class="mt-4 text-xl text-gray-700 ">
                                kita adalah konsultan dan training provieder yang berdiri tahunn 2004 dan sejak tahun
                                2004 sudah mengadakan lebih dari ribuan kali training, seminar dan pelatihan.
                            </div>
                        </div>
                        <div class="col-span-6">
                            <img src="{{ asset('gambar/Group 48.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:px-20 mt-10 md:mt-20">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=cipta aneka air&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://www.fnfgo.com/">FNF Mods</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_iframe {
                            height: 400px !important;
                        }

                    </style>
                </div>
            </div>
        </div>

        <div class="md:px-20 px-6 mt-10">
            <div class="text-2xl text-blue-800 font-semibold">Program</div>
            <div class="text-gray-600">
                We help pre-seed entrepreneurs and teams build get to traction and funding by establishing a critical
                support network of local startup experts that are invested in their success, and by providing a
                structured and challenging business-building process that has helped our alumni raise over $1 billion.
                Leaders of the world’s fastest-growing startups have used the Founder Institute to raise funding,
                building a co-founding team, get into seed-accelerators, generate traction, recruit a team, build a
                product, transition from employee to entrepreneur, and more. <br>

                Learn more about our pre-seed startup accelerator program.
            </div>
        </div>
        <div class="md:px-20 px-6 mt-10">
            <div class="grid grid-flow-row grid-cols-6 md:grid-cols-12 gap-10">
                <div class="col-span-6">
                    <img src="{{ asset('gambar/Group 47.png') }}" alt="">
                </div>
                <div class="col-span-6">
                    <div class="text-3xl md:mt-14 font-semibold text-blue-700">Are You Ready To <br>
                        Transform Your Life</div>
                    <div class="text-gray-600 text-2xl mt-6 md:mt-8">
                        Local Leaders or Founder Institute Chapters across the globe... please bare with us as the full
                        team
                        display technology is under maintenaince.
                    </div>
                </div>
            </div>
        </div>
