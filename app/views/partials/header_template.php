
<div class="flex items-center justify-between">
    <h3 class="text-3xl font-family-righteous">
        <?php if (is_logged()) { ?>
            <?php echo user()->name; ?>
        <?php } else {?>
        Whatever
        <?php } ?>
    </h3>
    <div class="bg-white h-10 w-10 rounded-lg"></div>
</div>

<div>
    <p class="text-md font-family-righteous">Projeto: Monalisa INC.</p>
</div>

<div class="mt-5">
    <p class="p-2 text-center text-sm border-2 border-white rounded-md w-1/2 bg-[#363636]">
        🧑‍🚀 2.596 Clientes
    </p>
</div>
