<header class="w-full py-5">
    
<div class="flex items-center justify-between">
    <h3 class="text-3xl font-family-righteous">
        <?php if (is_logged()) { ?>
            <?php echo user()->first_name; ?>
        <?php } else {?>
        Whatever
        <?php } ?>
    </h3>
    <div class="bg-[#303030] h-12 w-12 rounded-lg flex items-center justify-center">
        <a href="/logout">
            <img src="/assets/imgs/logout.png" class="h-8 w-8" alt="Ícone de log out">
        </a>
    </div>
</div>

<div>
    <?php if (isset($project)) { ?>
    <p class="text-md font-family-righteous">Projeto: <?php echo $project->title; ?>.</p>
    <?php } else { ?>
    <p class="text-md font-family-righteous">
    Fullstack | UX/UI Designer
    </p>
    <?php } ?>
</div>

</header>

<?php echo get_flash_message('error_message'); ?>
<?php echo get_flash_message('message', 'text-green-400'); ?>

<!--- Tags -->
<?php include VIEWS.'partials/home/tags_partials.php'; ?>

<!-- Modal -->
<?php include VIEWS.'partials/home/modal_add_tags.php'; ?>

<!-- Categorias -->
<section class="mt-5">
        <!-- Categoria container -->
    <article class="my-2">
        <h3 class="text-lg">
            <span class="text-blue-500">#</span> UX/UI
        </h3>
        <hr>

        <!-- Cards Container-->
        <div class="flex items-center w-full p-4 py-8 overflow-x-scroll">

        <!-- Card -->
        <div class="card text-black relative drop-shadow-md hover:z-10">
                <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

                <p class="my-3 text-gray-300 text-sm text-justify">
                    Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
                </p>

                <input type="range" id="myRange" min="0" max="100" value="0" step="25">
                <span class="slider-value" id="sliderValue">%</span>
            </div>
        </div>
    </article>
</section>


<script src="/assets/js/pop-up.js"></script>
<script src="/assets/js/card.js"></script>

