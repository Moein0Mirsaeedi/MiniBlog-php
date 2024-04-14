<?php 
require("./function.php");

$setting = get_data("setting");
$post = get_data("post");
$postP = get_post_order_by_view($post);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mini blog - Post</title>
    <script src="<?= asset("js/cdn.tailwindcss.com_3.3.2") ?>"></script>
    <link rel="stylesheet" href="<?= asset("css/style.css") ?>" />
    <link rel="stylesheet" href="<?= asset("css/single.css") ?>" />
  </head>
  <body>
    <!-- Menu -->
    <?php require("./parts/menu.php"); ?>


    <!-- intro -->
    <div
      class=" w-full h-screen bg-[url('<?= asset("images/1.webp") ?>')] bg-cover bg-center bg-brightness relative"
    >
      <div
        class="container mx-auto h-full flex justify-center items-center flex-col relative z-10"
      >
        <h1
          class="text-center text-white text-4xl md:text-7xl lg:text-8xl lg:px-40"
        >
          The AI magically removes moving objects from videos.
        </h1>
        <div class="flex mt-6 items-center">
          <img class="w-8 h-8 rounded-full" src="<?= asset("images/5.jpg") ?>" alt="" />
          <span class="ml-4 font-light text-white text-sm"
            >By <span class="font-normal text-md">Carrol Atkinson</span> - July
            19, 2019</span
          >
        </div>
      </div>
    </div>

    <!-- Post section -->
    <div class="container mx-auto flex flex-col justify-center gap-5 p-4 lg:flex-row">
      <section class="w-full lg:w-3/6 px-4 pt-8">
        <p class="text-gray-500">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur
          eaque cupiditate optio animi expedita sed voluptatum cumque ducimus
          officiis placeat accusantium adipisci laborum ex qui officia facilis
          at nulla, unde ipsa distinctio voluptas exercitationem a blanditiis
          incidunt. Quia quo expedita blanditiis incidunt labore, praesentium
          sapiente sequi rem repudiandae ipsam sunt eum, eius consequatur
          perspiciatis animi sint temporibus repellat laborum. <br /><br />
          Rem accusamus eos laudantium hic ex vero commodi velit, non blanditiis
          voluptate nisi in perferendis, nam sed. Magnam at obcaecati excepturi,
          distinctio fugiat laboriosam veniam quo totam saepe repellat similique
          ullam accusantium est ratione harum exercitationem quis maiores, a
          perspiciatis ea nam consectetur voluptatem ad? Ab sequi quod nesciunt
          veritatis dolorum repellat ipsum. <br /><br />
          Vero amet cumque odit possimus excepturi velit quam perferendis
          corporis eius itaque quasi, molestiae delectus! Exercitationem
          doloremque, sed necessitatibus ad quae sint:
          <br /><br />
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur
          eaque cupiditate optio animi expedita sed voluptatum cumque ducimus
          officiis placeat accusantium adipisci laborum ex qui officia facilis
          at nulla, unde ipsa distinctio voluptas exercitationem a blanditiis
          incidunt. Quia quo expedita blanditiis incidunt labore, praesentium
          sapiente sequi rem repudiandae ipsam sunt eum, eius consequatur
          perspiciatis animi sint temporibus repellat laborum. <br /><br />
          Rem accusamus eos laudantium hic ex vero commodi velit, non blanditiis
          voluptate nisi in perferendis, nam sed. Magnam at obcaecati excepturi,
          distinctio fugiat laboriosam veniam quo totam saepe repellat similique
          ullam accusantium est ratione harum exercitationem quis maiores, a
          perspiciatis ea nam consectetur voluptatem ad? Ab sequi quod nesciunt
          veritatis dolorum repellat ipsum. <br /><br />
          Vero amet cumque odit possimus excepturi velit quam perferendis
          corporis eius itaque quasi, molestiae delectus! Exercitationem
          doloremque, sed necessitatibus ad quae sint:
          <br />

          <img src="<?= asset("images/1.webp") ?>" class="w-full rounded-md" alt="" />
          <br />
          <img src="<?= asset("images/2.webp") ?>" class="w-full rounded-md" alt="" />
          <br />
          <img src="<?= asset("images/3.webp") ?>" class="w-full rounded-md" alt="" />

          <br />
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero nulla
          corporis inventore similique consectetur consequatur ad quis officiis
          soluta ut ea dolore nisi mollitia minus dolor, eius in labore expedita
          natus officia iusto possimus id! Voluptas at itaque aperiam quibusdam,
          natus architecto voluptate quisquam. Incidunt repellendus voluptas
          vero numquam ullam corrupti cum, eius fugiat blanditiis reprehenderit
          repellat temporibus ex obcaecati, quae qui! Totam, eius. <br /><br />
          Quod accusamus ab veritatis repellendus blanditiis id, excepturi
          aliquam ullam, iste illum rem ad nemo quam quidem! Numquam quisquam,
          beatae dolore laborum a molestias dolor quaerat sit iste laudantium
          voluptates? Soluta quaerat vero dignissimos possimus accusantium odio
          architecto nostrum aspernatur dicta non reiciendis rerum sint, quae
          dolore, odit, quia fugiat corrupti? Consequuntur ipsa incidunt
          laboriosam. <br /><br />
          Voluptates, cum quasi eaque, aut ex beatae eveniet doloremque itaque,
          natus cumque et? Eum dolore eos sapiente saepe voluptates laudantium
          expedita, vel similique corrupti quia soluta dolor voluptate alias
          doloremque consectetur recusandae a, ipsa, hic autem. Suscipit ullam
          aperiam est numquam error, doloribus nobis a quaerat dicta asperiores
          vel quo necessitatibus, tempora velit magnam blanditiis iste magni
          assumenda reprehenderit minima. Ipsa dignissimos recusandae velit
          provident, quidem vel. Facilis rem dolor in culpa commodi.
          <br /><br />
          Ducimus perferendis ab ratione non repudiandae molestiae magni!
        </p>
        <div class="w-full mt-24">
          <h2 class="text-3xl">5 Comments</h2>
          <ul class="w-100 mt-10">
            <li class="mt-12">
              <div>
                <div class="flex gap-5">
                  <img
                    src="<?= asset("images/6.jpg") ?>"
                    class="w-12 h-12 rounded-full"
                    alt="6"
                  />
                  <span>
                    <span class="text-xl">Jean Doe </span>
                    <br />
                    <span
                      class="text-sm text-gray-400 tracking-widest text-light"
                      >JANUARY 9, 2018 AT 2:21PM
                    </span>
                    <p class="text-light text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Rerum non labore, expedita quasi harum aut? Harum vel a,
                      libero natus sequi vitae. Atque commodi nemo inventore
                      quaerat. Quibusdam, dolorem itaque?
                    </p>
                    <button class="mt-2 bg-gray-200 text-light py-1 px-2">
                      REPLY
                    </button>
                  </span>
                </div>
              </div>
            </li>
            <li class="mt-12">
              <div>
                <div class="flex gap-5">
                  <img
                    src="<?= asset("images/6.jpg") ?>"
                    class="w-12 h-12 rounded-full"
                    alt="6"
                  />
                  <span>
                    <span class="text-xl">Jean Doe </span>
                    <br />
                    <span
                      class="text-sm text-gray-400 tracking-widest text-light"
                      >JANUARY 9, 2018 AT 2:21PM
                    </span>
                    <p class="text-light text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Rerum non labore, expedita quasi harum aut? Harum vel a,
                      libero natus sequi vitae. Atque commodi nemo inventore
                      quaerat. Quibusdam, dolorem itaque?
                    </p>
                    <button class="mt-2 bg-gray-200 text-light py-1 px-2">
                      REPLY
                    </button>
                  </span>
                </div>
              </div>
              <ul class="w-100 mt-10 pl-10">
                <li class="mt-12">
                  <div>
                    <div class="flex gap-5">
                      <img
                        src="<?= asset("images/6.jpg") ?>"
                        class="w-12 h-12 rounded-full"
                        alt="6"
                      />
                      <span>
                        <span class="text-xl">Jean Doe </span>
                        <br />
                        <span
                          class="text-sm text-gray-400 tracking-widest text-light"
                          >JANUARY 9, 2018 AT 2:21PM
                        </span>
                        <p class="text-light text-gray-500">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Rerum non labore, expedita quasi harum aut?
                          Harum vel a, libero natus sequi vitae. Atque commodi
                          nemo inventore quaerat. Quibusdam, dolorem itaque?
                        </p>
                        <button class="mt-2 bg-gray-200 text-light py-1 px-2">
                          REPLY
                        </button>
                      </span>
                    </div>
                  </div>
                  <ul class="w-100 mt-10 pl-10">
                    <li class="mt-12">
                      <div>
                        <div class="flex gap-5">
                          <img
                            src="<?= asset("images/6.jpg") ?>"
                            class="w-12 h-12 rounded-full"
                            alt="6"
                          />
                          <span>
                            <span class="text-xl">Jean Doe </span>
                            <br />
                            <span
                              class="text-sm text-gray-400 tracking-widest text-light"
                              >JANUARY 9, 2018 AT 2:21PM
                            </span>
                            <p class="text-light text-gray-500">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Rerum non labore, expedita quasi harum aut?
                              Harum vel a, libero natus sequi vitae. Atque
                              commodi nemo inventore quaerat. Quibusdam, dolorem
                              itaque?
                            </p>
                            <button
                              class="mt-2 bg-gray-200 text-light py-1 px-2"
                            >
                              REPLY
                            </button>
                          </span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="mt-12">
              <div>
                <div class="flex gap-5">
                  <img
                    src="<?= asset("images/6.jpg") ?>"
                    class="w-12 h-12 rounded-full"
                    alt="6"
                  />
                  <span>
                    <span class="text-xl">Jean Doe </span>
                    <br />
                    <span
                      class="text-sm text-gray-400 tracking-widest text-light"
                      >JANUARY 9, 2018 AT 2:21PM
                    </span>
                    <p class="text-light text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Rerum non labore, expedita quasi harum aut? Harum vel a,
                      libero natus sequi vitae. Atque commodi nemo inventore
                      quaerat. Quibusdam, dolorem itaque?
                    </p>
                    <button class="mt-2 bg-gray-200 text-light py-1 px-2">
                      REPLY
                    </button>
                  </span>
                </div>
              </div>
            </li>
          </ul>

          <div class="w-full mt-20 bg-gray-50 py-8">
            <h2 class="text-3xl">Leave a comment</h2>
            <form action="#" class="p-5">
              <label class="text-gray-500" for="">Name: </label><br />
              <input
                type="text"
                class="border-2 border-gray-400 w-full h-10 px-2"
              />
              <br /><br />
              <label class="text-gray-500" for="">Email: </label><br />
              <input
                type="email"
                class="border-2 border-gray-400 w-full h-10 px-2"
              />
              <br /><br />
              <label class="text-gray-500" for="">Message: </label><br />
              <textarea
                class="border-2 border-gray-400 w-full px-2"
                cols="30"
                rows="10"
              ></textarea>
              <br /><br />
              <input
                type="submit"
                class="form-input relative -mt-1 sm:mt-0 sm:-ml-1 bg-blue-500 text-white border-2 border-blue-500 hover:bg-white hover:text-blue-500 cursor-pointer transition px-4 py-1.5"
                value="Post comment"
              />
            </form>
          </div>
        </div>
      </section>
      <section class="w-full lg:w-2/6 bg-gray-50 mt-6 lg:mt-0 pt-8 px-4 pb-12">
        <div class="w-full flex flex-col items-center justify-center px-12">
          <img
            src="<?= asset("images/5.jpg") ?>"
            class="rounded-full w-40 h-40"
            alt=""
          />
          <h2 class="text-3xl mt-5">Craig David</h2>
          <p class="text-center text-gray-500 mt-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Exercitationem facilis sunt repellendus excepturi beatae porro
            debitis voluptate nulla quo veniam fuga sit molestias minus.
          </p>
          <button
            type="submit"
            class="mt-5 relative bg-blue-500 text-white border-2 border-blue-500 hover:bg-white hover:text-blue-500 cursor-pointer transition px-4 py-1.5"
          >
            Read my bio
          </button>
        </div>
        <div class="w-full flex flex-col mt-28">
          <h2 class="text-xl">Popular Posts</h2>
          <br />
          <hr />
          <?php foreach($postP as $post): ?>
            <div
            class="flex justify-center items-center gap-5 h-20 mt-12 lg:mt-20 xl:mt-12"
            >
            <img src="<?= asset("images/" . $post["image"]) ?>" class="w-40 h-full" alt="6" />
            <span>
              <span class="text-sm lg:text-sm xl:text-lg">
                <?= substr($post["title"], 0, 25) . "..." ?></span
                >
                <br />
                <span class="text-2xs text-gray-400 tracking-widest text-light"
                ><?= date("Y M d", strtotime($post["date_published"])) ?>
              </span>
              <br>
              <span class="-top-2 text-2xs text-gray-400 tracking-widest text-light relative"
                ><?= $post["view"] . " view" ?>
              </span>
            </span>
          </div>
          <?php endforeach ?>
          
        </div>

        <div class="w-full flex flex-col mt-28">
          <h2 class="text-xl">Categories</h2>
          <br />
          <hr />
          <div class="flex justify-between items-center gap-5 h-20 -my-4">
            <span><a href="category.php" class="text-blue-500">Food</a></span>
            <span>(12)</span>
          </div>
          <hr />
          <div class="flex justify-between items-center gap-5 h-20 -my-4">
            <span
              ><a href="category.php" class="text-blue-500">Travel</a></span
            >
            <span>(22)</span>
          </div>
          <hr />

          <div class="flex justify-between items-center gap-5 h-20 -my-4">
            <span><a href="category.php" class="text-blue-500">Sport</a></span>
            <span>(49)</span>
          </div>
          <hr />

          <div class="flex justify-between items-center gap-5 h-20 -my-4">
            <span
              ><a href="category.php" class="text-blue-500">Lifestyle</a></span
            >
            <span>(36)</span>
          </div>
          <hr />

          <div class="flex justify-between items-center gap-5 h-20 -my-4">
            <span
              ><a href="category.php" class="text-blue-500">Business</a></span
            >
            <span>(89)</span>
          </div>
          <hr />
        </div>

        <div class="w-full flex flex-col mt-28">
          <h2 class="text-xl">Tags</h2>
          <br />
          <hr />
          <div class="flex flex-wrap gap-1 h-20">
            <span class="bg-gray-100 py-1 px-2">Sport</span>
            <span class="bg-gray-100 py-1 px-2">Travel</span>
            <span class="bg-gray-100 py-1 px-2">Business</span>
            <span class="bg-gray-100 py-1 px-2">Lifestyle</span>
            <span class="bg-gray-100 py-1 px-2">Cookies</span>
            <span class="bg-gray-100 py-1 px-2">Programming</span>
            <span class="bg-gray-100 py-1 px-2">Blog</span>
            <span class="bg-gray-100 py-1 px-2">Advertise</span>
            <span class="bg-gray-100 py-1 px-2">Freelancing</span>
            <span class="bg-gray-100 py-1 px-2">Food</span>
          </div>
        </div>
      </section>
    </div>

    <!-- Favorite -->
    <div class="container py-6 bg-gray-50 mx-auto xl:h-screen xl:px-28">
      <h2 class="text-5xl ml-3 mb-6">More Related Posts</h2>
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
