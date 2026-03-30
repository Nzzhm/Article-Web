<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
      
    
    {{-- <article class="py-8 max-w-3xl">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base mb-4">
          By
        <a href="/authors/{{ $post->author->id }}" class="text-gray-500 hover:underline">{{ $post->author->name }}</a> 
        In
        <a href="/categories/{{ $post->category->slug }}" class="text-gray-500 hover:underline">{{ $post->category->name }}</a> 
        | {{ $post->created_at->diffForHumans() }}
      </div>
      <p class="mb-4 font-light">{{ $post['body'] }}</p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to blog</a>
    </article> --}}

    <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/posts" class="text-sm font-medium hover:underline text-blue-600">&laquo; Back to all post</a>
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/authors/{{ $post->author->id }}" rel="author" class="text-xl font-bold text-gray-900">{{ $post->author->name }}</a>
                          <p class="mb-2 text-base text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                          <a href="/categories/{{ $post->category->slug }}">
                  <span class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                      {{ $post->category->name }}
                  </span>
                  </a>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">{{ $post->title }}</h1>
          </header>
          <p>{{ $post->body }}</p>
          </article>
          </div>
          </main>
    
</x-layout>