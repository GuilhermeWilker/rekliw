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
<?php include VIEWS.'partials/tags_partials.php'; ?>

<!-- Modal -->
<?php include VIEWS.'partials/modal_add_tags.php'; ?>
<?php include VIEWS.'partials/modal_add_task_card.php'; ?>

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
        <?php include VIEWS.'partials/task_cards.php'; ?>
      
        </div>
    </article>
</section>

<script>
var simplemde = new SimpleMDE({ 
    element: document.getElementById("content-task"),
    lineWrapping: true,
});
</script>
<script src="/assets/js/pop-up.js"></script>
<script src="/assets/js/card.js"></script>


