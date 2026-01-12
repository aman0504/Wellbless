<div>
<div class="min-h-screen bg-gray-100 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Categories Management</h1>
            <p class="mt-1 text-sm text-gray-600">Create and manage your categories</p>
        </div>

        <!-- Add Category -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-10 border border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Add New Category</h2>

            <div class="flex flex-col sm:flex-row gap-4 sm:items-end">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Category Name
                    </label>
                    <input
                        type="text"
                        wire:model="name"
                        placeholder="Enter category name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                    />
                </div>

                <button
                    wire:click="create"
                    class="px-6 py-2.5 bg-blue-600 text-white font-medium rounded-lg
                           hover:bg-blue-700 transition"
                >
                    Add Category
                </button>
            </div>
        </div>

        <!-- Categories Table -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>

    </div>
</div>

</div>

