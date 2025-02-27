<x-layout>
  <!-- Table Section -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
              <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                  Ticket Booking
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Victorias City
                </p>
              </div>
              </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 rounded">
              <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                  <!-- ID -->
                  <th scope="col" class="ps-6 py-3 text-start me-3">
                    <label for="hs-at-with-checkboxes-main" class="flex">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        ID
                      </span>
                    </label>
                  </th>

                  <!-- Movie Title -->
                  <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Movie Title
                      </span>
                    </div>
                  </th>

                  <!-- Duration -->
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Duration
                      </span>
                    </div>
                  </th>

                  <!-- Price -->
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Price
                      </span>
                    </div>
                  </th>

                  <!-- No. of Copy -->
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Release Date
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-end"></th>
                </tr>
              </thead>

              <!-- Body -->
              <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach($movies as $movie)
                <tr>
                    <!-- ID Data -->
                    <td class="size-px whitespace-nowrap">
                      <div class="ps-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">{{$movie->id}}</span>
                      </div>
                    </td>

                    <!-- Book Title & Book Cover -->
                    <td class="size-px whitespace-nowrap">
                      <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                          <!-- <img class="inline-block size-[38px] rounded-full" src="#" alt="Book Cover">  -->
                          <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$movie->title}}</span> 
                          </div>
                        </div>
                      </div>
                    </td>

                    <!-- Duration -->
                    <td class="h-px w-10 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">{{$movie->duration}}</span>
                      </div>
                    </td>

                    <!-- Price -->
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">{{$movie->price}}</span>
                      </div>
                    </td>

                    <!-- Release Date -->
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="text-xs text-gray-500 dark:text-neutral-500">{{$movie->release_date}}</span>
                      </div>
                    </td>

                    <!-- View Button -->
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <a href="/single-movie/{{$movie->movie_slug}}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                          View
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->
</x-layout>