<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">MultiTools</h1>
        <ul class="hidden md:flex gap-6 text-gray-700 font-medium">
            <li><a href="../index.php" class="hover:text-blue-600">Home</a></li>
            <li><a href="#" class="hover:text-blue-600">Tools</a></li>
            <li><a href="#" class="hover:text-blue-600">About</a></li>
            <li><a href="#" class="hover:text-blue-600">Contact</a></li>
        </ul>
        <button class="md:hidden text-gray-700 text-2xl">&#9776;</button>
        </div>
    </nav>

    <h2 class="mt-20 text-2xl font-bold mb-6 text-gray-800 text-center">Convert Youtube Videos to MP3</h2>

    <div class="flex justify-center items-center p-5 m-5">
        <form class="flex flex-col gap-11">

            <div class="mb-4 w-[40em]">
                <label for="email" class="block text-center text-gray-700 mb-2 font-medium">Youtube Link</label>
                <input type="text" id="input" placeholder="Youtube.com" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
            </div>
            <div class="flex justify-center">
                <button id="submit" type="submit" class="w-[30%] bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600 transition">
                    Convert
                </button>
            </div>
        </form>
    </div>
    <div class="flex justify-center">
        <div class="bg-gray-200 shadow w-[95%] h-[2px]"></div>
    </div>

    <section id="tools" class="py-16">
    <div class="max-w-7xl mx-auto px-6">
      <h3 class="text-3xl font-bold mb-10 text-center">More Tools</h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">
            <img class="w-12" src="../images/mp3.png" alt="mp3 icon">
          </div>
          <h4 class="text-xl font-semibold mb-2">Youtube To Mp3</h4>
          <p class="text-gray-600 mb-4">Convert Any Youtube Video To Mp3.</p>
          <a href="./pages/mp3.php" class="text-blue-600 font-medium hover:underline">Use →</a>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">📹</div>
          <h4 class="text-xl font-semibold mb-2">Youtube Video Downloader</h4>
          <p class="text-gray-600 mb-4">Convert Any Youtube Video To Mp4.</p>
          <a href="#" class="text-blue-600 font-medium hover:underline">Use →</a>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">🖼️</div>
          <h4 class="text-xl font-semibold mb-2">Coming soon</h4>
        <!--  <p class="text-gray-600 mb-4">Resize and optimize images fast.</p>
          <a href="#" class="text-blue-600 font-medium hover:underline">Use Tool →</a>
        -->
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">🔢</div>
          <h4 class="text-xl font-semibold mb-2">Coming soon</h4>
        <!--  <p class="text-gray-600 mb-4">Convert units for length, weight, etc.</p>
          <a href="#" class="text-blue-600 font-medium hover:underline">Use Tool →</a>
        -->
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">🔐</div>
          <h4 class="text-xl font-semibold mb-2">Coming soon</h4>
        <!--  <p class="text-gray-600 mb-4">Create strong random passwords.</p>
          <a href="#" class="text-blue-600 font-medium hover:underline">Use Tool →</a>
        -->  
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">🌐</div>
          <h4 class="text-xl font-semibold mb-2">Coming soon</h4>
        <!--  <p class="text-gray-600 mb-4">Shorten long URLs instantly.</p>
          <a href="#" class="text-blue-600 font-medium hover:underline">Use Tool →</a>
        -->
        </div>

      </div>
    </div>
  </section>
    <footer class="bg-gray-900 text-gray-300 py-8 mt-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="mb-2">© 2025 MultiTools – All Rights Reserved.</p>
        </div>
  </footer>
  <script>
    const submit = document.getElementById('submit');
    const input = document.getElementById('input');
    submit.addEventListener('click', (e)=> {
        e.preventDefault();
        console.log(input.value);
    })
  </script>
</body>
</html>