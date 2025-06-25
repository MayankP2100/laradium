<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="flex justify-center flex-wrap gap-y-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="me-2">
                            <a
                                href="#"
                                class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page"
                            >
                                All
                            </a>
                        </li>
                        @foreach($categories as $category)
                            <li class="me-2">
                                <a
                                    href="#"
                                    class="inline-block px-4 py-3 text-white bg-gray-600 rounded-lg active:bg-blue-600"
                                    aria-current="page"
                                >
                                    {{$category->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 space-y-12">
                @forelse($posts as $post)
                    <div
                        class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex">
                            <div class="p-5 flex-wrap w-4/5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{$post->title}}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{$post->content}}
                                </p>
                                <a href="{{$post->slug}}"
                                   class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="flex-1">
                                <img
                                    class="rounded-r-lg size-full object-cover border"
                                    src="{{$post->images}}"
                                    alt="post thumbnail"
                                />
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No posts found.</p>
                @endforelse
            </div>
        </div>
        <div class="py-16">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>
