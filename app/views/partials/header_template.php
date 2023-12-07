
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
    <p class="text-md font-family-righteous">Projeto: Monalisa INC.</p>
    <?php } ?>
    <p class="text-md font-family-righteous">
    Fullstack | UX/UI Designer
    </p>
</div>
