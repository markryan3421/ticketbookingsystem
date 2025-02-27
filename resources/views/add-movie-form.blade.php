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
          Student Enrollment Form
        </h2>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
          Manage student's information
        </p>
      </div>

      <form action="/add-book-form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

          <!-- Book Cover -->
          <div class="sm:col-span-3">
            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Book Cover
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="flex items-center gap-5">
              <img class="inline-block size-16 rounded-full ring-2 ring-white dark:ring-neutral-900" src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">
              <div class="flex gap-x-2">
                <div>
                  <input type="file" name="book_cover" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                </div>
              </div>
            </div>
          </div>
          <!-- End Avatar -->

          <!-- 1 Book Title -->
          <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Book Title
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input id="af-account-full-name" name="book_title" type="text" placeholder="Your book title..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
          </div>

          <!-- 2 Category -->
          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Category
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="space-y-2">
              <select id="category_id" name="book_category" required class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option selected>Select a category</option>
                @foreach ($bookcategories as $category)
                  <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <!-- 3 Book Author -->
          <div class="sm:col-span-3">
            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Book Author
            </label>
          </div>
          <div class="sm:col-span-9">
            <input id="af-account-email" type="text" name="book_author"  placeholder="The book's author..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          </div>

          <!-- 4 Book Description -->
          <div class="sm:col-span-3">
            <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Book Description
            </label>
          </div>
          <div class="sm:col-span-9">
            <textarea id="af-account-bio" name="book_description" placeholder="The book's description..." class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6"></textarea>
          </div>

          <!-- 5 No. of Copy -->
          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              No. of Copy
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="space-y-2">
              <input type="number" name="number_of_copy" placeholder="Number of copy..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
          </div>

          <!-- 6 Publication Date -->
          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Publication Date
            </label>
          </div>
          <div class="sm:col-span-9">
            <div class="space-y-2">
              <input type="date" name="publication_date" placeholder="Date of publication..." class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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