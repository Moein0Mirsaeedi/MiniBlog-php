    <!-- Menu -->
    <nav class="w-full fixed z-30 bg-white mx-auto shadow-md w-full flex justify-between items-center px-4 py-1.5 lg:py-3 z-10">
      <h2 class="text-2xl"><?= $setting["title"] ?></h2>
      <form action="search.php" method="GET">
        <input type="text" name="search" placeholder="search your word" style="border: gray 2px solid; border-radius:20px; padding: 2px 7px">
        <input type="submit" value="search" style="border: 2px solid black; border-radius: 20px; padding: 2px 7px; cursor:pointer">
      </form>
      <div
        id="toggleOpen"
        class="cursor-pointer flex flex-col w-6 h-3.5 justify-between box-content border-2 border-transparent hover:border-sky-400 transition p-1 rounded lg:hidden"
      >
        <span class="w-full h-0.5 bg-gray-800 rounded"></span>
        <span class="w-full h-0.5 bg-gray-800 rounded"></span>
        <span class="w-full h-0.5 bg-gray-800 rounded"></span>
      </div>

      <ul class="hidden lg:inline-flex">
        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="index.php">Home</a>
        </li>
        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="category.php"
            >Politics</a
          >
        </li>
        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="category.php">Tech</a>
        </li>
        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="category.php"
            >Entertainment</a
          >
        </li>
        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="category.php"
            >Travel</a
          >
        </li>
        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="category.php"
            >Sports</a
          >
        </li>

        <li class="text-lg mr-6">
          <a class="hover:text-sky-400 transition" href="dashboard.html"
            >Dashboard</a
          >
        </li>
      </ul>
    </nav>

    <!-- Menu on mobile -->
    <div id="menuOnMobile" class="h-full w-full flex flex-col bg-gray-100 fixed hidden transition z-30 top-0">
      <div
        class="bg-white shadow-md w-full flex justify-between items-center px-4 py-1.5"
      >
        <h2 class="text-2xl">Mini Blog</h2>
        <div
          id="toggleClose"
          class="cursor-pointer flex flex-col w-3.5 h-3.5 justify-center items-center relative box-content border-2 border-transparent hover:border-sky-400 transition p-1 rounded"
        >
          <span
            class="w-full h-0.5 bg-gray-800 rounded rotate-45 absolute"
          ></span>
          <span
            class="w-full h-0.5 bg-gray-800 rounded -rotate-45 absolute"
          ></span>
        </div>
      </div>
      <div class="w-full px-6 py-6">
        <ul>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="index.php"
              >Home</a
            >
          </li>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="category.php"
              >Politics</a
            >
          </li>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="category.php"
              >Tech</a
            >
          </li>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="category.php"
              >Entertainment</a
            >
          </li>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="category.php"
              >Travel</a
            >
          </li>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="category.php"
              >Sports</a
            >
          </li>
          <li class="mt-2 text-lg">
            <a
              class="hover:text-sky-400 transition menu-items"
              href="dashboard.html"
              >Dashboard</a
            >
          </li>
        </ul>
      </div>
    </div>