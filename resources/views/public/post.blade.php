@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Post')
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)
@section('css_importados')

@stop


@section('content')
    <main>
        <section class="w-full px-[5%] xl:px-[8%] py-10 lg:py-16 flex flex-col" data-aos="fade-up" data-aos-offset="150">
            
            <div class="flex flex-col gap-5">
                
                <h2 class="text-[#54340E] font-bignoodle text-4xl xl:text-5xl 2xl:text-6xl text-center max-w-2xl 2xl:max-w-3xl mx-auto">
                    {{$post->title}} nec placerat sapien felis vitae dui. nec placerat sapien felis vitae dui.
                </h2>

                <p class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E] text-center">Publicado: {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F, Y') }}</p>


                @if($post->url_video)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <iframe width="100%" height="600px" src="https://www.youtube.com/embed/{{ $post->url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endif
               
                <div class="font-latoregular text-base md:text-lg 2xl:text-xl text-[#54340E] py-4">
                    {!!$post->description!!}
                </div>

                @if($post->url_image)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover hidden md:block rounded-xl" />
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover block md:hidden rounded-xl" />
                    </div>
                @endif
            </div>

            
            
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
