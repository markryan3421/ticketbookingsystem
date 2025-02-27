<x-layout>
  <!-- Profile -->
  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-2xl bg-white dark:bg-neutral-800 p-6 rounded-lg shadow-md">
      
    <!-- Back Button -->
    <p><small><strong><a href="/homepage">&laquo; Back</a></strong></small></p>    

      <!-- Edit Button -->
      <a class="ms-3 mx-2 p-2 inline-flex text-green-600 hover:text-green-800 transition" href="/single-movie/{{$movie->movie_slug}}/edit">
        <div class="hs-tooltip [--trigger:hover] inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
              <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
              <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
            </svg>
            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" role="tooltip">
              Edit
            </span>
        </div>
      </a>
    
    <!-- Delete Button -->
    <div class="hs-tooltip [--trigger:hover] inline-block relative">
        <form class="delete-post-form d-inline" action="/single-movie/{{$movie->movie_slug}}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="p-2 mx-2 inline-flex text-red-600 hover:text-red-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                </svg>
            </button>
            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" role="tooltip">
                Delete
            </span>
        </form>
    </div>



    <!-- movie Cover -->
    <div class="flex items-center gap-x-3">
      <div class="grow">
        <h1 class="text-lg font-medium text-gray-800 dark:text-neutral-200">
          {{$movie->title}}
        </h1>
      </div>
    </div>
    <!-- End Profile -->

    <div class="mt-8">
      <!-- List -->
      <div class="space-y-3">

        <!-- ID -->
        <dl class="flex flex-col sm:flex-row gap-1">
          <dt class="min-w-60">
            <span class="block text-sm text-gray-500 dark:text-neutral-500">ID: </span>
          </dt>
          <dd>
            <ul>
              <li class="ms-2 mb-2 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                {{$movie->id}}
              </li>
            </ul>
          </dd>
        </dl>

        <!-- movie Title -->
        <dl class="flex flex-col sm:flex-row gap-1">
          <dt class="min-w-60">
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Movie Title: </span>
          </dt>
          <dd>
            <ul>
              <li class="ms-2 mb-2 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                {{$movie->title}}
              </li>
            </ul>
          </dd>
        </dl>

        <!-- Movie Duration -->
        <dl class="flex flex-col sm:flex-row gap-1">
          <dt class="min-w-60">
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Movie Duration: </span>
          </dt>
          <dd>
            <ul>
              <li class="ms-2 mb-2 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                {{$movie->duration}}
              </li>
            </ul>
          </dd>
        </dl>

        <!-- Movie Price -->
        <dl class="flex flex-col sm:flex-row gap-1">
          <dt class="min-w-60">
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Movie Price: </span>
          </dt>
          <dd>
            <ul>
              <li class="ms-2 mb-2 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                {{$movie->price}}
              </li>
            </ul>
          </dd>
        </dl>

        <!-- Release Date -->
        <dl class="flex flex-col sm:flex-row gap-1">
          <dt class="min-w-60">
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Date Published: </span>
          </dt>
          <dd>
            <ul>
              <li class="ms-2 mb-2 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
              {{$movie->release_date}}
              </li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- End List -->
    </div>
    </div>
  </div>
</x-layout>