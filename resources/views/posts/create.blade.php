@extends('layouts.app')

@section('titulo')
Publicaciones
@endsection
@section('contenido')
@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
<div class="md:flex md:items-center">
  
    <div class="md:w-1/2 px-10">
        <form action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
        @csrf
        </form>
    </div>
    <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-lg mt-10 md:mt-0">
        <form action={{"register"}} method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="tiutlo" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="border-2 border-gray-300 p-2 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}" />
                @error('titulo')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                    Descripción
                </label>
                <textarea id="descripcion" name="descripcion" placeholder="Descripción" class="border-2 border-gray-300 p-2 w-full rounded-lg @error('name') border-red-500 @enderror">{{old('name')}}</textarea>
                @error('titulo')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <input type="submit" value="Publicar" class="bg-blue-500 hover:bg-blue-700 text-white uppercase transition-colors font-bold py-2 px-4 rounded-lg cursor-pointer w-full" />
        </form>
    </div>

</div>
@endsection