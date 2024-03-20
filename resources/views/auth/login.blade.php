@extends('layouts.app')

@section('titulo')
Inicia sesión
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/login.jpg')}}" alt="Imagen registro de usuarios">
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
        <form action={{'login'}} method="POST">
            @csrf
            @if(session('mensaje'))
            <span class="text-red-500 text-xs">{{session('mensaje')}}</span>
            @endif
          <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Correo electronico
                </label>
                <input id="email" name="email" type="email" placeholder="Ingresa tu Correo Electronico" class="border-2 border-gray-300 p-2 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}" />
                @error('email')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña
                </label>
                <input id="password" name="password" type="password" placeholder="Ingresa tu Contraseña" class="border-2 border-gray-300 p-2 w-full rounded-lg  @error('password') border-red-500 @enderror" />
                @error('password')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember" class="mr-2" />
                    <label for="remember" class="text-gray-500 text-sm">Recuerdame</label>
                </div>
            </div>
            <input type="submit" value="Iniciar Sesión" class="bg-blue-500 hover:bg-blue-700 text-white uppercase transition-colors font-bold py-2 px-4 rounded-lg cursor-pointer w-full" />
        </form>
    </div>
</div>
@endsection