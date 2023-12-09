<header class="w-full py-5 px-2">
    <?php require 'partials/header_template.php'; ?>
</header>

<?php echo get_flash_message('error_message'); ?>
<?php echo get_flash_message('message', 'text-green-400'); ?>

<!-- Projetos -->
<section class="mt-5 overflow-y-scroll h-[50vh]">

    <button 
        class="p-2 text-center text-sm border-2 border-white rounded-md w-1/2 bg-[#363636] ml-5 mb-4"
        id="add_projectButton" onclick="showProjectModal()">
        Novo projeto 📑
    </button>

    <!-- modal -->
    <?php echo include 'partials/project/modal_add_projects.php'; ?>

    <!-- Projeto -->
    <article class="my-2">
        <?php foreach ($projects as $project) { ?>
            <div class="w-[90%] hover:w-[100%] transition-all mx-auto bg-[#363636] hover:bg-[#364262] rounded-lg p-5 my-2">
                <h3 class="text-2xl font-bold my-1">
                    <a href="/project/<?php echo $project->id; ?>">
                        <?php echo $project->title; ?>
                    </a>
                </h3>

                <p class="text-sm">
                    Lorem ipsum dolor sit.
                </p>
            </div>
        <?php } ?>
    </article>
</section>

<script src="assets/js/pop-up.js"></script>