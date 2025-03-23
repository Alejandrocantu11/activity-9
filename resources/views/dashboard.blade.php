@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-3xl font-bold mb-4">Bienvenido al Dashboard</h1>
    <p class="text-gray-700">Hola, <strong>{{ Auth::user()->name }}</strong>. Has iniciado sesión correctamente.</p>
    <p class="mt-4">Desde aquí puedes acceder a tu perfil, cerrar sesión, o explorar funcionalidades privadas del sistema.</p>
</div>
@endsection
