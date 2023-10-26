<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
  <title>Freem</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  {{-- Box icon --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-900 text-gray-800 font-sans">
  <!-- Container -->
  <main class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
    <!-- Login component -->
    <section class="flex shadow-md">
      <!-- Login form -->
      <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white"
        style="width: 24rem; height: 32rem;">
        <div class="w-72">
          <!-- Heading -->
          <h1 class="text-xl font-semibold">Register</h1>
          <small class="text-gray-400">Welcome! Please Register your details</small>

          <!-- Form -->
          <form class="mt-4">
            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Username</label>
              <input type="text" placeholder="Enter your username"
                class="block w-full rounded-md border border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-1 focus:ring-yellow-400 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Email</label>
              <input type="email" placeholder="Enter your email"
                class="block w-full rounded-md border border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-1 focus:ring-yellow-400 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Password</label>
              <input type="password" placeholder="*****"
                class="block w-full rounded-md border border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-1 focus:ring-yellow-400 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Confirm Password</label>
              <input type="password" placeholder="*****"
                class="block w-full rounded-md border border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-1 focus:ring-yellow-400 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <button
                class="mb-1.5 block w-full text-center text-white bg-yellow-400 hover:bg-yellow-500 px-2 py-1.5 rounded-md">
                Register
              </button>
            </div>
          </form>

          <!-- Footer -->
          <div class="text-center">
            <span class="text-xs text-gray-400 font-semibold">Already have account?</span>
            <a href="/login" class="text-xs font-semibold text-yellow-400">Sign in</a>
          </div>
        </div>
      </div>

      <!-- Login banner -->
      <div class="flex flex-wrap content-center justify-center rounded-r-md"
        style="width: 24rem; height: 32rem;">
        <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md"
          src="{{ asset('images/favorite/f3.jpg') }}">
      </div>

    </section>
  </main>
</body>

</html>
