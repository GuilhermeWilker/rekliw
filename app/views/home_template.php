<header class="w-full py-5">
    <?php require 'partials/header_template.php'; ?>
</header>

<?php echo get_flash_message('error_message'); ?>
<?php echo get_flash_message('message', 'text-green-400'); ?>

<!--- Tags -->
<?php include 'partials/home/tags_partials.php'; ?>

<!-- Modal -->
<?php include 'partials/home/modal_add_tags.php'; ?>

<!-- Categorias -->
<section class="mt-5">
    <article class="my-2">
        <h3 class="text-lg">
            <span class="text-blue-500">#</span> UX/UI
        </h3>
        <hr>

        <div class="flex items-center w-full p-4 py-8 overflow-x-scroll">

            <div class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" name="" class="bottom-0 w-full">
            </div>

            <div class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" name="" class="bottom-0 w-full">
            </div>

            <div class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" name="" class="bottom-0 w-full">
            </div>

        </div>
    </article>

    <article class="my-2">
        <h3 class="text-lg">
            <span class="text-blue-500">#</span> diagramação
        </h3>
        <hr>

        <div class="flex items-center w-full p-4 py-8 overflow-x-scroll">

            <a href="/project/1" class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" name="" class="bottom-0 w-full">
            </a>

            <div class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" id="myRange" min="0" max="100">
                <span class="slider-value" id="sliderValue">50%</span>
            </div>

            <div class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" name="" class="bottom-0 w-full">
            </div>

        </div>
    </article>
</section>


<script src="/assets/js/pop-up.js"></script>

