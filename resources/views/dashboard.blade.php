<x-app-layout>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white p-5 hidden md:block">
            <h3 class="text-lg font-semibold mb-4">User Menu</h3>
            <ul>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-blue-700 rounded">Home</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-blue-700 rounded">Gallery</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-blue-700 rounded">My Downloads</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-blue-700 rounded">Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Welcome Card -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Welcome, User!</h3>
                    <p class="text-gray-700">Explore and download amazing photos.</p>
                </div>
                
                <!-- Subscription Status -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Subscription</h3>
                    <p class="text-gray-700">Active - Premium Plan</p>
                </div>
            </div>

            <!-- Gallery Preview -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Latest Photos</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-gray-300 h-32 flex items-center justify-center rounded-lg">Image 1</div>
                    <div class="bg-gray-300 h-32 flex items-center justify-center rounded-lg">Image 2</div>
                    <div class="bg-gray-300 h-32 flex items-center justify-center rounded-lg">Image 3</div>
                    <div class="bg-gray-300 h-32 flex items-center justify-center rounded-lg">Image 4</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
