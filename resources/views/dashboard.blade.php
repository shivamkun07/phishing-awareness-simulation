<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Phishing Awareness Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    👋 Welcome, <strong>{{ Auth::user()->name }}</strong>  
                    <br>
                    This dashboard helps you learn and identify phishing attacks.
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-blue-600 text-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Phishing Emails Seen</h3>
                    <p class="text-3xl mt-2">12</p>
                </div>

                <div class="bg-green-600 text-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Correct Identifications</h3>
                    <p class="text-3xl mt-2">9</p>
                </div>

                <div class="bg-red-600 text-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Mistakes Made</h3>
                    <p class="text-3xl mt-2">3</p>
                </div>

            </div>

            <!-- Awareness Message -->
            <div class="bg-yellow-100 dark:bg-yellow-900 mt-8 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-2">⚠️ Awareness Tip</h3>
                <p>
                    Never click suspicious links or share your password.
                    Always verify the sender before taking action.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
