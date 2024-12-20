<?php 
require("./function.php");

$setting = get_data("setting");
$posts = get_data("post");
$lastPost = orderPostByDate($posts);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $setting["title"] ?> - Home</title>
    <script src="<?= asset("js/cdn.tailwindcss.com_3.3.2") ?>"></script>
    <link rel="stylesheet" href="<?= asset("css/style.css") ?>" />
    <link rel="stylesheet" href="<?= asset("css/home.css") ?>" />
  </head>
  <body>
    <!-- Menu -->
    <?php require("./parts/menu.php"); ?>

    <!-- Intro -->
    <div class="bg-gray-50 container mx-auto pt-12 md:pt-0 md:h-screen md:flex md:flex-col md:justify-center lg:px-28 2xl:px-40">
      <div
        class="md:grid md:grid-cols-2 md:grid-rows-2 md:gap-5 lg:grid-cols-3"
      >
        <a
          href="single.php"
          class="w-full h-36 lg:h-60 overflow-hidden flex items-center mt-2 relative rounded sm:h-44 sm:mt-12 md:mt-0 md:h-68 bg-[url('<?= asset("images/1.webp") ?>')] bg-cover bg-center"
        >
          <div
            class="absolute text-white bottom-0 w-full bg-gray-900 opacity-75 p-2"
          >
            <h2 class="text-md">traning course HTML and CSS for all</h2>
            <span class="text-xs text-gray-400">2023 May 13</span>
          </div>
        </a>
        <a
          href="single.php"
          class="w-full h-36 lg:h-60 overflow-hidden items-center mt-4 relative rounded sm:h-44 sm:mt-12 md:mt-0 md:h-68 lg:h-full lg:row-span-2 lg:justify-center hidden lg:flex bg-[url('<?= asset("images/5.jpg") ?>')] bg-cover bg-center"
        >
          <div
            class="absolute text-white bottom-0 w-full bg-gray-900 opacity-75 p-2"
          >
            <h2 class="text-md">traning course HTML and CSS for all</h2>
            <span class="text-xs text-gray-400">2023 May 13</span>
          </div>
        </a>
        <a
          href="single.php"
          class="w-full h-36 lg:h-60 overflow-hidden flex items-center mt-4 relative rounded sm:h-44 sm:mt-12 md:mt-0 md:h-68 bg-[url('<?= asset("images/2.webp") ?>')] bg-cover bg-center"
        >
          <div
            class="absolute text-white bottom-0 w-full bg-gray-900 opacity-75 p-2"
          >
            <h2 class="text-md">traning course HTML and CSS for all</h2>
            <span class="text-xs text-gray-400">2023 May 13</span>
          </div>
        </a>
        <a
          href="single.php"
          class="w-full h-36 lg:h-60 overflow-hidden flex items-center mt-4 relative rounded sm:h-44 sm:mt-12 md:mt-0 md:h-68 bg-[url('<?= asset("images/3.webp") ?>')] bg-cover bg-center"
        >
          <div
            class="absolute text-white bottom-0 w-full bg-gray-900 opacity-75 p-2"
          >
            <h2 class="text-md">traning course HTML and CSS for all</h2>
            <span class="text-xs text-gray-400">2023 May 13</span>
          </div>
        </a>
        <a
          href="single.php"
          class="w-full h-36 lg:h-60 overflow-hidden items-center mt-4 relative rounded sm:h-44 sm:mt-12 md:mt-0 md:h-68 flex bg-[url('<?= asset("images/4.webp") ?>')] bg-cover bg-center"
        >
          <div
            class="absolute text-white bottom-0 w-full bg-gray-900 opacity-75 p-2"
          >
            <h2 class="text-md">traning course HTML and CSS for all</h2>
            <span class="text-xs text-gray-400">2023 May 13</span>
          </div>
        </a>
      </div>
    </div>

    <!-- Recent -->
    <div class="container lg:px-28 mt-28 mx-auto pb-20">
      <h2 class="text-5xl ml-3 -mb-10">Recent</h2>
      <div class="w-100 xl:grid xl:grid-cols-3 xl:grid-rows-3 xl:gap-5">

      <?php foreach($lastPost as $post1): ?>
        <div class="w-100 mt-16 lg:shadow-xl lg:p-3 rounded-md">
          <a href="single.php?post=<?= $post1['id'] ?>">
            <div
              class="w-100 h-60 flex items-center overflow-hidden rounded-md shadow-lg lg:shadow-none"
            >
              <img class="w-100" src="<?= asset("images/" . $post1["image"]) ?>" alt="1" />
            </div>
            <div class="w-100 px-8 lg:px-0 mt-8">
              <h3 class="text-xl font-medium">
                <?= $post1["title"] ?>
              </h3>
              <div class="flex mt-6 items-center">
                <img
                  class="w-8 h-8 rounded-full"
                  src="<?= asset("images/5.jpg") ?>"
                  alt=""
                />
                <span class="ml-4 font-light text-sm"
                  >By <span class="font-normal text-md"><?= $post1["author"] ?></span> -
                  <?= date("Y M d", strtotime($post1["date_published"])) ?></span
                >
              </div>
              <p class="mt-6">
              <?= substr($post1["content"], 0, 250) . "..." ?>

                <a
                  class="block mt-6 font-light text-xl text-blue-500"
                  href="single.php"
                  >Read More</a
                >
              </p>
            </div>
          </a>
        </div>
        <?php endforeach ?>

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

    <!-- Favorite -->
    <div class="container py-6 bg-gray-50 mx-auto xl:h-screen xl:px-28">
      <h2 class="text-5xl ml-3 mb-6">Favorite</h2>
      <div class="xl:grid xl:grid-cols-2 xl:grid-rows-1 xl:gap-3 h-5/6">
        <div
          class="w-100 xl:mt-0 overflow-hidden rounded-md xl:grid-rows-2 xl:col-start-2 xl:col-end-3 xl:h-100"
        >
          <a href="single.php">
            <div
              class="w-100 h-96 xl:h-full bg-[url('<?= asset("images/4.webp") ?>')] bg-cover bg-center relative"
            >
              <div
                class="absolute bg-shadow-custom flex flex-col justify-end px-4 py-4"
              >
                <h2 class="text-white text-3xl mb-4 tracking-wide">
                  The 20 Biggest Fintech Companies In America 2019
                </h2>
                <span class="text-gray-400">February 12, 2019</span>
              </div>
            </div>
          </a>
        </div>

        <div
          class="xl:col-start-1 xl:col-end-2 xl:row-start-1 xl:row-end-2 xl:h-100 xl:grid xl:grid-rows-2 xl:gap-5"
        >
          <div
            class="w-100 h-56 xl:h-full mt-6 xl:mt-0 overflow-hidden rounded-md"
          >
            <a href="single.php">
              <div
                class="w-100 h-full bg-[url('<?= asset("images/3.webp") ?>')] bg-cover bg-center relative"
              >
                <div
                  class="absolute bg-shadow-custom flex flex-col justify-end px-4 py-4"
                >
                  <h2 class="text-white text-xl mb-2 tracking-wide">
                    The 20 Biggest Fintech Companies In America 2019
                  </h2>
                  <span class="text-gray-400 text-xs">February 12, 2019</span>
                </div>
              </div>
            </a>
          </div>
          <div class="xl:grid xl:grid-cols-2 xl:gap-5">
            <a href="single.php">
              <div
                class="w-100 h-56 xl:h-full mt-6 xl:mt-0 overflow-hidden rounded-md"
              >
                <div
                  class="w-100 h-full bg-[url('<?= asset("images/1.webp") ?>')] bg-cover bg-center relative"
                >
                  <div
                    class="absolute bg-shadow-custom flex flex-col justify-end px-4 py-4"
                  >
                    <h2 class="text-white text-xl mb-2 tracking-wide">
                      The 20 Biggest Fintech Companies In America 2019
                    </h2>
                    <span class="text-gray-400 text-xs">February 12, 2019</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="single.php">
              <div
                class="w-100 h-56 xl:h-full mt-6 xl:mt-0 overflow-hidden rounded-md"
              >
                <div
                  class="w-100 h-full bg-[url('<?= asset("images/2.webp") ?>')] bg-cover bg-center relative"
                >
                  <div
                    class="absolute bg-shadow-custom flex flex-col justify-end px-4 py-4"
                  >
                    <h2 class="text-white text-xl mb-2 tracking-wide">
                      The 20 Biggest Fintech Companies In America 2019
                    </h2>
                    <span class="text-gray-400 text-xs">February 12, 2019</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Subscribe  -->
    <?php require("./parts/subscribe.php"); ?>


    <!-- Footer -->
    <?php require("./parts/footer.php"); ?>


    <!-- Scripts -->
    <script src="assets/js/scripts.js"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
