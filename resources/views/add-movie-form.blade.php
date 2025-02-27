<x-layout>
  <!-- Card Section -->
  <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto">
    <a class="mb-2 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none" href="/homepage">
      < Back
    </a>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-800">
      <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
          Ticket Booking System
        </h2>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
          Add a Movie
        </p>
      </div>

      <form action="/add-movie-form" method="POST">
        @csrf
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

          <!-- 1 Movie Title -->
          <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Movie Title
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input id="af-account-full-name" name="title" type="text" placeholder="Your movie title..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
          </div>

          <!-- 2 Duration -->
          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Duration
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="space-y-2">
              <select id="category_id" name="duration" required class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option selected>Select a duration</option>
                  <option value="1">1 Hour</option>
                  <option value="1.5">1 Hour 30 Minutes</option>
                  <option value="2">2 Hour</option>
                  <option value="2.5">2 Hour 30 Minutes</option>
                  <option value="3">3 Hour</option>
              </select>
            </div>
          </div>

          <!-- 3 Movie  Price -->
          <div class="sm:col-span-3">
            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Movie  Price
            </label>
          </div>
          <div class="sm:col-span-9">
            <input id="af-account-email" type="text" name="price"  placeholder="The movie price..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          </div>

          <!-- 4 Release Date -->
          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Release Date
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="space-y-2">
              <input type="date" name="release_date" placeholder="Date of publication..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
          </div>
        </div>
        <!-- End of Form -->

        <div class="mt-5 flex justify-end gap-x-2">
          <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
            Save  
          </button>
        </div>
      </form>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->
</x-layout>