<x-layout>
    <x-slot:title>
       Public Blog
        </x-slot>

          @component('dashboard.sidebar')

        @endcomponent
        @component('dashboard.navbar')

        @endcomponent      
<main class="px-4 py-6 sm:px-6 lg:px-8">
<div class="mb-6">
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="grid  gap-4 mb-4">
        <div class="flex items-center justify-center  rounded-sm bg-gray-50 dark:bg-gray-800">
        <div class="text-2xl text-green-600 dark:text-green-600">
        <h1 class="text-xl font-bold mb-4">Create Category</h1>
        <form method="POST" action="{{  route('categories.create.post') }}">
             @csrf
             <input type="text" name="name" value="{{ old('name') }}"
              placeholder="Category name" class="w-full p-2 border rounded mb-4">
             <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
               Create
              </button>
        </form>
         </div>
         </div>

        </div>             
    </div>
</div>
</main>
</div>
</div>
   
 </x-layout>
        


