<style>
    #modalPoliticasDev #modalTerminosCondiciones {
        height: 70vh;
        /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
        overflow-y: auto;
        /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
    }
</style>
        

<footer class="py-4 px-[5%] md:px-[8%] pt-[calc(45px)] bg-[#54340E] bg-cover text-white relative" style="background-image:url({{asset('images/img/texturafooter.png')}})">
    
    <img src="{{asset('images/img/leftpollo.png')}}" alt="" class="absolute bottom-0 left-0 object-cover object-center w-auto hidden md:flex" />
    <img src="{{asset('images/img/rightpollo.png')}}" alt="" class="absolute bottom-0 right-0 object-cover object-center w-auto hidden md:flex"/>

    <section class="flex flex-row items-center justify-center">
        <div class="flex flex-col gap-4 items-center justify-center pb-10">
          <a href="{{ route('index') }}">  
            <img src="{{ asset('images/img/logofooterpolleria.svg') }}" alt="Polleria Huaylish" class="h-28" />
          </a>
          <p class="text-base max-w-md text-center line-clamp-2 font-latoregular">
            asdasdasdasdasdasdasdas
          </p>
          <a href="{{route('nosotros')}}" class="text-white bg-[#F07407] w-auto px-6 py-1.5 rounded-lg font-latoregular font-semibold tracking-wide">
              Nosotros
          </a>
        </div>
    </section>

    <hr className="my-2" />

    <div
        class="flex flex-col items-start gap-3 md:flex-row md:justify-between md:items-center w-full px-[5%]vvvvvv py-5 bg-cover"
        style="background-image:url({{asset('images/img/footerbarra.png')}})">
        <a href="#" target="_blank" class="text-white font-latoregular text-sm text-center">Copyright &copy; 2024 Huaillys brasas y parrillas.
            Reservados todos los derechos</a>
       
        <div class="flex justify-start items-center gap-5 mx-auto sm:mx-0">
            <div class="flex flex-row gap-5">
                @if ($general[0]->facebook)
                    <a href="{{ $general[0]->facebook }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal">
                        {{-- <img class="w-6" src="{{ asset('images/img/fb.png') }}" alt="facebook" /> --}}
                        <i class="text-2xl text-white fa-brands fa-facebook"></i>
                    </a>
                @endif
                @if ($general[0]->instagram)
                    <a href="{{ $general[0]->instagram }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        {{-- <img class="w-6" src="{{ asset('images/img/insta.png') }}" alt="instagram" /> --}}
                        <i class="text-2xl text-white fa-brands fa-instagram"></i>
                    </a>
                @endif
                @if ($general[0]->twitter)
                    <a href="{{ $general[0]->twitter }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                         {{-- <img class="w-6" src="{{ asset('images/img/twit.png') }}" alt="twitter" /> --}}
                         <i class="text-2xl text-white fa-brands fa-twitter"></i>
                    </a>
                @endif
                @if ($general[0]->linkedin)
                    <a href="{{ $general[0]->linkedin }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        {{-- <img class="w-6" src="{{ asset('images/img/linked.png') }}" alt="linkedin" /> --}}
                        <i class="text-2xl text-white fa-brands fa-linkedin"></i>
                    </a>
                @endif
                @if ($general[0]->tiktok)
                    <a href="{{ $general[0]->tiktok }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        {{-- <img class="w-6" src="{{ asset('images/img/tik-tok.png') }}" alt="tiktok" /> --}}
                        <i class="text-2xl text-white fa-brands fa-tiktok"></i>
                       
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div id="modalTerminosCondiciones" class="modal" style="max-width: 900px !important;width: 100% !important;  ">
        <!-- Modal body -->
        <div class="p-4 ">
            <h1 class="font-boldDisplay">Terminos y condiciones</h1>
            <p class="font-Inter_Regular p-2 prose">{!! $terminos->content ?? '' !!}</p>
        </div>
    </div>

    <div id="modalPoliticasDev" class="modal" style="max-width: 900px !important; width: 100% !important;  ">
        <!-- Modal body -->
        <div class="p-4 ">
            <h1 class="font-boldDisplay text-2xl">Politicas de privacidad</h1>
            <p class="font-Inter_Regular p-2">{!! $politicDev->content ?? '' !!}</p>
        </div>
    </div>

</footer>

<script>
    $(document).ready(function() {
        $(document).on('click', '#linkTerminos', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkPoliticas', function() {
            $('#modalPoliticasDev').modal({
                show: true,
                fadeDuration: 400,
            })
        });
    });
</script>
