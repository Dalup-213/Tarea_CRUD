@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4 text-center">Registrar Estudiante</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block font-medium mb-1">Nombre</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2 focus:ring focus:ring-purple-300" required>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1">Correo</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2 focus:ring focus:ring-purple-300" required>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1">Carrera</label>
            <select name="career_id" class="w-full border rounded p-2" required>
                <option value="">Seleccione una carrera</option>
                @foreach($careers as $career)
                    <option value="{{ $career->id }}">{{ $career->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Semestre</label>
            <input type="number" name="semester" min="1" max="12" class="w-full border rounded p-2" required>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('students.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Volver</a>
            <button type="submit" class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">Guardar</button>
        </div>
    </form>
</div>
@endsection
