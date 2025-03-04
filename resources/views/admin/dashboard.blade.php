<x-app-layout>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white p-5 hidden md:block">
            <h3 class="text-lg font-semibold mb-4">Admin Menu</h3>
            <ul>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Users</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Gallery</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Stats Cards -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Total Users</h3>
                    <p class="text-gray-700 text-2xl">1,230</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Photos Uploaded</h3>
                    <p class="text-gray-700 text-2xl">4,567</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Pending Approvals</h3>
                    <p class="text-gray-700 text-2xl">12</p>
                </div>
            </div>

            <!-- Table -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Recent Uploads</h3>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 p-2">NO</th>
                            <th class="border border-gray-300 p-2">Image</th>
                            <th class="border border-gray-300 p-2">Uploader</th>
                            <th class="border border-gray-300 p-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 p-2">1</td>
                            <td class="border border-gray-300 p-2">image1.jpg</td>
                            <td class="border border-gray-300 p-2">Dani</td>
                            <td class="border border-gray-300 p-2 text-green-600">Approved</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">2</td>
                            <td class="border border-gray-300 p-2">image2.jpg</td>
                            <td class="border border-gray-300 p-2">Laode</td>
                            <td class="border border-gray-300 p-2 text-yellow-600">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>