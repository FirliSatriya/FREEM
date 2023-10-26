<header class="bg-gray-800 flex items-center gap-14 container px-16 py-6">
  <a href="#" class="flex gap-3 justify-center items-center">
    <img src="{{ asset('favicon.png') }}" alt=""
      class="w-14 p-3 bg-gradient-to-r from-yellow-400 via-orange-400 to-red-500 rounded-xl">
    <h1 class="font-extrabold text-2xl">Freem</h1>
  </a>
  <nav>
    <ul class="font-medium flex justify-center items-center gap-5">
      <li>
        <a href="#" class="hover:underline font-bold">
          Home
        </a>
      </li>
      <li>
        <a href="#movies" class="hover:underline font-normal">
          Movies
        </a>
      </li>
      <li>
        <a href="#contact" class="hover:underline font-normal">
          Contact
        </a>
      </li>
    </ul>
  </nav>
  <div class="ml-auto">
    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
      class="flex gap-2 items-center rounded-xl bg-orange-500 p-2 hover:bg-orange-600">
      <i class="bx bx-user text-2xl"></i>
      <h1>Account</h1>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
      <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</header>
