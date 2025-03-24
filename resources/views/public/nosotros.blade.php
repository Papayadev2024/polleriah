@extends('components.public.matrix', ['pagina'=>'nosotros'])
@section('titulo', 'Nosotros')
@section('css_importados')
    <style>
        .swiper-button-next {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_43.svg') }})
        }

        .swiper-button-next:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .swiper-button-prev {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_44.svg') }})
        }

        .swiper-button-prev:hover {
            background-color: #FF5E14;
            opacity: 1;
        }
    </style>
@stop


@section('content')
    <main>


       <section>
            <div class="flex flex-col gap-10 w-full px-[5%] xl:px-[8%] mx-auto py-10 lg:py-20 bg-[#FBFBFB]">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10">
                       
                            <div class="flex flex-col justify-center gap-5 rounded-xl">
                                @if ($textosnosotros->title1section)
                                    <h2  class="text-[#54340E] font-bignoodle text-5xl xl:text-6xl 2xl:text-7xl max-w-md 2xl:max-w-lg">{{$textosnosotros->title1section}}</h2>
                                @endif
                            </div>
                             
                            <div class="flex flex-col items-center justify-center">
                                
                                @if ($textosnosotros->description1section)
                                    <p class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E]">
                                        {{$textosnosotros->description1section}}
                                    </p>
                                @endif
                            </div>
                     
                </div>
            </div>
        </section>


        <section class="relative" >
            <div class="px-[5%] xl:px-[8%] py-5 w-full flex flex-col">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8 py-5">
                    @foreach ([0, 1, 2, 3] as $index)
                        @if ($index < 3)
                            <div class="flex flex-col items-start justify-center w-full z-10 bg-[#F1EBE3] p-6 rounded-3xl">
                                <div class="flex flex-row gap-2 items-center justify-start">
                                    <img
                                        class="max-w-12"
                                        src="{{ $index === 0 ? asset('images/img/grill.svg') : ($index === 1 ? asset('images/img/headset.svg') : asset('images/img/familia.svg')) }}"
                                        alt="Ícono {{ $index + 1 }}"
                                    />
                                    <p class="text-[#F07407] text-3xl xlg:text-4xl font-bignoodle w-full">
                                        {{ $benefit[$index]->titulo ?? 'Ingrese texto' }}
                                    </p>
                                </div>
                                <div class="pt-1">
                                    <p class="text-[#54340E]  text-base xlg:text-lg 2xl:text-xl font-latoregular w-full leading-tight">
                                        {{ $benefit[$index]->descripcion ?? 'Ingrese texto' }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>  
        </section>


        <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">
            <div class="flex flex-col justify-center gap-3 w-full items-center">
                @if ($textosnosotros->title2section)
                    <h2 class="text-[#54340E] font-bignoodle text-5xl">{{$textosnosotros->title2section}}</h2>
                @endif

                @if ($textosnosotros->description2section)
                    <p class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E]">
                       {{$textosnosotros->description2section}}
                    </p>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">

                <div class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E] flex flex-col gap-4">
                    @if ($textosnosotros->description3section)
                        {!!$textosnosotros->description3section!!}
                    @endif
                </div>

                <div class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E] flex flex-col gap-4">
                    @if ($textosnosotros->description4section)
                        {!!$textosnosotros->description4section!!}
                    @endif
                </div>
            </div>
        </section>



        <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] pb-10 lg:pb-16 bg-[#F1EBE3] gap-12 relative">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 content-between">
                
                <div class="w-full row-span-2">
                    <img class="h-96 md:h-[550px] xl:h-full w-full object-contain  object-center relative" src="{{asset('images/img/polleria_1.png')}}"
                    onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>

                <div class="w-full">
                    <img class="h-60 md:h-[350px] xl:h-full w-full object-contain  object-center relative" src="{{asset('images/img/polleria_2.png')}}"
                    onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>

                <div class="w-full">
                    <img class="h-60 md:h-[350px] xl:h-full w-full object-contain  object-center relative" src="{{asset('images/img/polleria_2.png')}}"
                    onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>

            </div>
        </section>



        <section class="bg-[#54340E] bg-cover bg-opacity-100 relative flex flex-col gap-2">
            <div 
                class="bg-cover bg-center w-full" 
                style="background-image: url({{asset('images/img/2textura.png')}});" 
            >
                <div class="w-full h-full absolute opacity-70 bg-white"></div>

                <form id="footerBlog_Catalogo">
                    @csrf
                    <div class="flex flex-col gap-2 justify-center items-center py-10 lg:py-16 px-[5%]">
                        @if ($textosnosotros->title5section)
                            <h2 class="text-[#54340E] font-bignoodle text-5xl z-10 text-center">{{$textosnosotros->title5section}}</h2>
                        @endif

                        @if ($textosnosotros->description5section)
                            <p class="text-[#54340E] text-base font-latoregular w-full leading-tight text-center z-10">
                                {{$textosnosotros->description5section}}
                            </p>
                        @endif
                       
                        <div class="z-10 mt-8 flex flex-col gap-2">
                            <div class="md:space-x-2 bg-white px-5 py-3 rounded-xl overflow-hidden min-w-[250px] w-full flex flex-col md:flex-row gap-3">
                                <input type="email" name="email" id="emailFooter2" required
                                    class="text-[#54340E] min-w-[300px] font-latoregular ring-0 border-0 focus:ring-0 focus:border-0 border-transparent ring-transparent" 
                                    placeholder="Introduce tu email"
                                />
                                <input type="hidden" id="nameFooter" name="full_name" value="Usuario suscrito" />
                                
                                <button type="submit" class="text-white bg-[#F07407] w-full px-3 py-2 rounded-lg font-latoregular">
                                    Suscribir
                                </button>
                            </div>
                            @if ($textosnosotros->footer5section)
                                <p class="text-[#54340E] text-sm font-latoregular w-full leading-tight text-center z-10">
                                    {{$textosnosotros->footer5section}}
                                </p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </section>


        

        {{-- <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20 bg-[#FBFBFB]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10">
                            
                            <div class="flex flex-col items-start justify-center order-2 lg:order-1 gap-0 lg:gap-5">
                                <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                    {{$textosnosotros->title3section ?? "Ingrese un texto"}}</h2>    
                                <img class="h-[350px] md:h-[400px] object-contain object-left lg:h-[450px] w-full"  src="{{asset('images/img/oficinacadmo.png')}}" />
                            </div>
                     
                            <div class="flex flex-col justify-center gap-8 xl:gap-16 order-1 lg:order-2">
                                <div class="flex flex-col gap-3">
                                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                        {{$textosnosotros->title3secondsection ?? "Ingrese un texto"}}</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-28 rounded-full -mt-4"> </div>   
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        {{$textosnosotros->description3secondsection ?? "Ingrese un texto"}}
                                    </p>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                        {{$textosnosotros->title4section ?? "Ingrese un texto"}}</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-28 rounded-full -mt-4"> </div>   
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        {{$textosnosotros->description4section ?? "Ingrese un texto"}}
                                    </p>
                                </div>
                            </div>
                             
                           
                    </div>
            </div>
        </section> --}}
    
       
        {{-- @if ($benefit->isEmpty())
        @else
            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pt-20 pb-10 lg:pb-20 bg-[#F5F7F9]">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        @foreach ($benefit as $beneficios)
                            <div class="flex flex-col gap-5 bg-[#F5F7F9] p-4 rounded-xl">
                                <div class="flex justify-start items-center">
                                    <img class="h-10 w-10 object-contain" src="{{ asset($beneficios->icono) }}"
                                        alt="{{ $beneficios->titulo }}">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h2 class="leading-none font-gotham_medium text-4xl text-[#0181AA] ">
                                        {{ $beneficios->titulo }}</h2>
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        {{ $beneficios->descripcion }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif --}}
       
    
    </main>

@section('scripts_importados')

    <script>
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                }
            },

        });

         var swiper = new Swiper(".clientes", {
            slidesPerView: 6,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 3,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 6,
                    centeredSlides: false,
                },
            },
        });
    </script>
@stop

@stop
