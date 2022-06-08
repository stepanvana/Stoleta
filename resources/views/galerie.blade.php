@extends('layouts.app')

@section('title', 'Informace - Hostinec Stoletá')

@section('content')
    <div class="container" style="min-height: 100vh;">
        <h1 class="text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-16">
            Fotogalerie 
        </h1>
        <vue-picture-swipe :items="[
                                        {src: '/storage/uploads/DSC_2137.jpg',thumbnail: '/storage/uploads/DSC_2137.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2144.jpg',thumbnail: '/storage/uploads/DSC_2144.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2148.jpg',thumbnail: '/storage/uploads/DSC_2148.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2151.jpg',thumbnail: '/storage/uploads/DSC_2151.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2231.jpg',thumbnail: '/storage/uploads/DSC_2231.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2247.jpg',thumbnail: '/storage/uploads/DSC_2247.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2281.jpg',thumbnail: '/storage/uploads/DSC_2281.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2318.jpg',thumbnail: '/storage/uploads/DSC_2318.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2329.jpg',thumbnail: '/storage/uploads/DSC_2329.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2340.jpg',thumbnail: '/storage/uploads/DSC_2340.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2350.jpg',thumbnail: '/storage/uploads/DSC_2350.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2380.jpg',thumbnail: '/storage/uploads/DSC_2380.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2386.jpg',thumbnail: '/storage/uploads/DSC_2386.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2396.jpg',thumbnail: '/storage/uploads/DSC_2396.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2422.jpg',thumbnail: '/storage/uploads/DSC_2422.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2443.jpg',thumbnail: '/storage/uploads/DSC_2443.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/DSC_2513.jpg',thumbnail: '/storage/uploads/DSC_2513.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6448.jpg',thumbnail: '/storage/uploads/IMG_6448.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6450.jpg',thumbnail: '/storage/uploads/IMG_6450.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6486.jpg',thumbnail: '/storage/uploads/IMG_6486.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6490.jpg',thumbnail: '/storage/uploads/IMG_6490.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6604.jpg',thumbnail: '/storage/uploads/IMG_6604.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6636.jpg',thumbnail: '/storage/uploads/IMG_6636.jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6654 (1).jpg',thumbnail: '/storage/uploads/IMG_6654 (1).jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6689 (1).jpg',thumbnail: '/storage/uploads/IMG_6689 (1).jpg',w: 1200,h: 900},
                                        {src: '/storage/uploads/IMG_6725 (1).jpg',thumbnail: '/storage/uploads/IMG_6725 (1).jpg',w: 1200,h: 900}
                                    ]">
        </vue-picture-swipe>
    </div>
@endsection