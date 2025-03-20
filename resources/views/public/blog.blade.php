@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Blog')
@section('css_importados')

@stop


@section('content')
    <main>

        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] xl:px-[8%] mx-auto py-10 bg-[#FBFBFB]">
                    <div class="grid grid-cols-1 gap-1">
                       
                            <div class="flex flex-col justify-center">
                                <h2  class="text-[#54340E] font-bignoodle text-4xl xl:text-5xl 2xl:text-7xl max-w-md 2xl:max-w-lg">Historias de wayquicha</h2>
                            </div>
                             
                            <div class="flex flex-col justify-center">
                                <p class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E]">
                                    Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.
                                </p>
                            </div>
                     
                    </div>
            </div>
        </section>

        @if (is_null($lastpost))
        @else
            <section>
                <div class="flex flex-col w-full px-[5%] xl:px-[8%] py-0">
                    <a href="{{ route('detalleBlog', $lastpost->id) }}">
                        <div class="flex flex-col w-full relative rounded-xl overflow-hidden">
                            <img src="{{ asset($lastpost->url_image . $lastpost->name_image) }}" alt="imagen" class="w-full h-[300px] sm:h-[350px] md:h-[370px] lg:h-[400px] 2xl:h-[600px] object-cover rounded-xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-black/20"></div>
                            <div class="flex flex-wrap justify-between absolute items-end bottom-0 w-full p-6">
                                <div class="flex flex-col gap-2 max-w-2xl">
                                    <h2  class="text-white font-bignoodle text-3xl xl:text-4xl 2xl:text-5xl max-w-md 2xl:max-w-lg">{{ $lastpost->title }}</h2>
                                    <p class="font-latoregular text-base md:text-lg 2xl:text-xl text-white line-clamp-3">
                                        {{ Str::limit($lastpost->extract, 250) }}
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="font-latoregular text-base md:text-lg 2xl:text-xl text-white line-clamp-3">
                                        Publicado {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </a>
                </div>
            </section>
        @endif

        <section class="w-full px-[5%] xl:px-[8%] py-10 lg:py-16 flex flex-col gap-10 pb-20">
            <div class="flex flex-col sm:flex-row md:justify-between md:items-start gap-12">

                <div class="sm:basis-1/6 flex flex-col justify-start gap-5 min-w-[200px]" data-aos="fade-up" data-aos-duration="150">
                    <h3 class="text-[#54340E] font-bignoodle text-3xl xl:text-4xl 2xl:text-5xl">Categorias</h3>
                    <div class="flex flex-col gap-3">
                        <a href="{{ route('blog', 0) }}"
                            class="text-text18 py-3 px-4 rounded-lg  font-latoregular {{ $filtro == 0 ? 'bg-[#54340E] text-white font-medium' : 'text-[#54340E] bg-[#E6E4E5] bg-opacity-40 ' }} ">Todas</a>
                        @foreach ($categorias as $item)
                            <a href="{{ route('blog', $item->id) }}"
                                class="text-[#54340E] font-normal text-text16 py-3 px-4 rounded-lg font-latoregular 
                                @if ($filtro == 0) bg-[#E6E4E5] bg-opacity-40  @else {{ $item->id == $filtro ? 'bg-[#54340E]  text-white font-medium' : 'bg-[#E6E4E5] bg-opacity-40 text-[#54340E] font-normal' }} @endif">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="sm:basis-5/6 flex flex-col gap-10">
                    @if ($posts->isEmpty())
                    @else
                        <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-x-5 gap-y-10">
                            @foreach ($posts as $post)
                                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset($post->url_image . $post->name_image) }}" alt="blog"
                                            class="w-full h-[300px] object-cover rounded-xl hidden md:block">
                                        <img src="{{ asset($post->url_image . $post->name_image) }}" alt="blog"
                                            class="w-full h-[220px] object-cover rounded-xl block md:hidden">
                                    </div>

                                    <div class="flex flex-wrap md:justify-start items-center gap-2 md:gap-5">
                                        <p
                                            class="text-white font-latoregular text-text14 bg-[#54340E] py-2 px-4 rounded-lg text-center w-auto">
                                            {{ $post->categories->name }}</p>
                                        <p class="text-[#54340E] font-latoregular text-base xl:text-base 2xl:text-xl">Publicado
                                            {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}</p>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-[#54340E] font-latobold text-xl xl:text-2xl 2xl:text-3xl">
                                            {{ $post->title }}</h2>
                                        <p class="text-[#54340E] font-latoregular text-base xl:text-base 2xl:text-xl line-clamp-2">
                                            {{ Str::limit($post->extract, 250) }}
                                        </p>
                                    </div>

                                    <div>
                                        <a href="{{ route('detalleBlog', $post->id) }}"
                                            class="text-white font-roboto font-normal bg-[#54340E] flex flex-row text-text16 py-2 px-3  justify-center items-center rounded-lg">
                                            <span>Leer más</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
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
                        <h2 class="text-[#54340E] font-bignoodle text-5xl z-10 text-center">Suscríbete a nuestro blog</h2>
                        <p class="text-[#54340E] text-base font-latoregular w-full leading-tight text-center z-10">
                            Sea el primero en conocer los lanzamientos y las novedades y perspectivas de la industria.
                        </p>
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
                            <p class="text-[#54340E] text-sm font-latoregular w-full leading-tight text-center z-10">
                                Nos preocupamos por tus datos en nuestra política de privacidad
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>


@section('scripts_importados')


@stop

@stop
