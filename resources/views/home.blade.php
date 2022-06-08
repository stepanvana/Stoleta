@extends('layouts.app')

@section('content')
    <div class="container" style="min-height: 100vh;">
        <div>
            <h1 class="text-4xl font-thin uppercase text-center py-16 pb-2">
                Denní menu 
            </h1>
        </div>
        <div class="grid grid-cols-2 gap-4 py-16 m-5">
            <div class="m-5">
                <h1 class="text-sm font-normal uppercase text-center pb-2">
                    Aktuální nahrané denní menu 
                </h1>
                <p class="text-center text-base font-thin text-gray-600">
                    {{ __('messages.' . now()->format('l')) }} {{ now()->format('d.m.') }}
                </p>
                <img src="/storage/uploads/denni_menu.jpg?{{ now() }}" alt="Denní menu {{ now()->format('d.m.Y') }}" class="m-auto" width="100%">
                
                <h1 class="text-sm font-normal uppercase text-center pb-2">
                    Aktuální nahrané speciální menu 
                </h1>
                <img src="/storage/uploads/special_menu.jpg?{{ now() }}" alt="Speciální menu {{ now()->format('d.m.Y') }}" class="m-auto" width="100%">
            </div>
            <div class="m-5">
                <h1 class="text-sm font-normal uppercase text-left pb-8">
                    Pomocí formuláře níže nahrajte nové denní menu
                </h1>            
                <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data" class="text-left p-6">
                    @csrf
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group d-flex flex-column py-2">
                            <label for="denni_menu">Pole pro denní menu</label>
                            <input type="file" name="denni_menu" id="denni_menu">
                            {{ $errors->first('image') }}    
                        </div>
                        <div class="form-group d-flex flex-column py-2">
                            <label for="special_menu">Pole pro speciální menu</label>
                            <input type="file" name="special_menu" id="special_menu">
                            {{ $errors->first('image') }}        
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="bg-brown hover:shadow-xl text-white font-thin py-2 sm:py-4 px-4 sm:px-6 text-xs sm:text-base mt-8 mb-16 uppercase">
                            Nahrát nové menu
                        </button>
                    </div>
                </form>   
            </div>
        </div>
        <div class="text-right">
            <button class="bg-brown hover:shadow-xl text-white font-thin py-2 sm:py-4 px-4 sm:px-6 text-xs sm:text-base mt-8 mb-16 uppercase">
                <a  class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Odhlásit se
                </a>    
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@endsection
