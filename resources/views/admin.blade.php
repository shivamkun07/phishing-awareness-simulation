<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind via Vite (already in Laravel) --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white px-6 py-4 flex justify-between">
        <h1 class="text-xl font-semibold">Admin Panel</h1>
        <div>
            <span class="mr-4">{{ auth()->user()->name }}</span>
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button class="text-red-400 hover:text-red-600">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
            <p class="text-3xl font-bold mt-2">{{ \App\Models\User::count() }}</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-lg font-semibold text-gray-700">Admins</h2>
            <p class="text-3xl font-bold mt-2">
                {{ \App\Models\User::where('is_admin',1)->count() }}
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-lg font-semibold text-gray-700">Normal Users</h2>

