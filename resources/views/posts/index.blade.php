<x-layout>
    <x-slot:title>
       Public Blog
        </x-slot>

          @component('dashboard.sidebar')

        @endcomponent
        @component('dashboard.navbar')

        @endcomponent

       
<main class="px-4 py-6 sm:px-6 lg:px-8">
    
            
               
                <div class="flex items-center justify-center  mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class=" w-full p-4 sm:rounded-lg">
                        @if ($posts->count() > 0)
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-50 bg-gray-700 uppercase rounded dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Content
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ Str::limit($post->title, 30) }}...
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ Str::limit($post->content, 50) }}...
                                            </td>
                                            <td class="px-6 py-4">
                                                @if ($post->image)
                                                    <img src="{{ asset('images/' . $post->image) }}" alt="Post Image"
                                                        class="w-16 h-16 object-cover rounded">
                                                @else
                                                    <span class="text-gray-500">No Image</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $post->category ? $post->category->name : 'Uncategorized' }}
                                            </td>
                                            <td class="px-6 py-4 flex gap-2">
                                                <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-white font-medium bg-red-500 px-4 py-2 rounded">Delete</button>
                                                </form>
                                                <a href="{{ route('posts.edit.get', $post->id) }}"
                                                    class="font-medium text-white bg-green-500 px-4 py-2 rounded">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @else
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                No posts available.
                            </div>
                        @endif
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                </div>
           
        
                

</main>
    </div>
</div>
   
 </x-layout>
