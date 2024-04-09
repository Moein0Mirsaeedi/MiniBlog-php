<?php 
require("./function.php");

$setting = get_data("setting");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mini blog - Category</title>
    <script src="<?= asset("js/cdn.tailwindcss.com_3.3.2") ?>"></script>
    <link rel="stylesheet" href="<?= asset("css/style.css") ?>" />
  </head>
  <body>
    <!-- Menu -->
    <?php require("./parts/menu.php"); ?>

    <!-- Categoty title -->
    <div class="bg-gray-100 py-20 px-6 sm:px-20 lg:px-32">
      <p class="text-md text-gray-500">Category</p>
      <h2 class="text-4xl mt-2">Sports</h2>
      <p class="text-gray-500 mt-4 sm:w-1/2">
        Category description here.. Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Aliquam error eius quo, officiis non maxime quos
        reiciendis perferendis doloremque maiores!
      </p>
    </div>

    <!-- Category posts -->
    <div class="container lg:px-28 mx-auto pb-20">
      <div class="w-100 xl:grid xl:grid-cols-3 xl:grid-rows-3 xl:gap-5">
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/6.jpg") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/1.webp") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/2.webp") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>

        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/1.webp") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/4.webp") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/6.jpg") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/1.webp") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/4.webp") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/6.jpg") ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                The AI magically removes moving objects from videos.
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md">Carrol Atkinson</span> -
                  July 19, 2019</span
                >
              </div>
              <p class="mt-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                sunt tempora dolor laudantium sed optio, explicabo ad deleniti
                impedit facilis fugit recusandae! Illo, aliquid, dicta beatae
                quia porro id est.

                <a class="block mt-6 font-light text-xl text-blue-500" href="#"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
      </div>
      <div class="w-100 h-px bg-gray-400 my-6 lg:my-12"></div>
      <div class="w-100 flex justify-center">
        <a
          class="w-8 h-8 text-sm lg:w-12 lg:h-12 lg:text-lg bg-white border-blue-500 border-2 text-blue-500 p-2 rounded-full flex justify-center items-center mr-2"
          href="#"
          >1</a
        >
        <a
          class="w-8 h-8 text-sm lg:w-12 lg:h-12 lg:text-lg bg-blue-500 text-white p-2 rounded-full flex justify-center items-center mr-2"
          href="#"
          >2</a
        >
        <a
          class="w-8 h-8 text-sm lg:w-12 lg:h-12 lg:text-lg bg-blue-500 text-white p-2 rounded-full flex justify-center items-center mr-2"
          href="#"
          >3</a
        >
        <a
          class="w-8 h-8 text-sm lg:w-12 lg:h-12 lg:text-lg bg-blue-500 text-white p-2 rounded-full flex justify-center items-center mr-2"
          href="#"
          >4</a
        >
        <a
          class="w-8 h-8 text-sm lg:w-12 lg:h-12 lg:text-lg bg-blue-500 text-white p-2 rounded-full flex justify-center items-center mr-2"
          href="#"
          >...</a
        >
        <a
          class="w-8 h-8 text-sm lg:w-12 lg:h-12 lg:text-lg bg-blue-500 text-white p-2 rounded-full flex justify-center items-center mr-2"
          href="#"
          >36</a
        >
      </div>
    </div>

    <!-- Footer -->
    <?php require("./parts/footer.php"); ?>

    <!-- Scripts -->
    <script src="assets/js/scripts.js"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>