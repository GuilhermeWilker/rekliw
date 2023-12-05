<header class="w-full p-5">
        <?php require 'partials/header_template.php'; ?>
</header>

<?php

$tags = [
    'UI/UX',
    'backend',
    'diagramação',
];

        ?>


<!--- tags -->
<div class="flex items-center w-full overflow-x-auto gap-5 py-2 mb-1">
    <button class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[100px] p-2">
        adicionar +
    </button>
    
    <?php foreach ($tags as $tag) { ?>
    <div class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[120px] p-2">
        <span class="text-md font-bold">#</span> <?php echo $tag; ?>
    </div>
    <?php }?>
</div>


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

<!--
<ul>
<?php foreach ($users as $user) { ?>
    <li class='p-3 my-2 border-2 border-gray-200 rounded-sm'>
        <?php echo $user->name; ?> | 
        <a href="/user/<?php echo $user->id; ?>" 
        class="text-sm hover:font-bold">
            detalhes
        </a>
    </li>
<?php } ?>
</ul>
-->
