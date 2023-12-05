<h1>Whatever 2</h1>

<form action="/user/store" method="post">
<p class="text-center py-3">
        <?php echo get_flash_message('message'); ?>
    </p>

    <div class="my-2">
        <label for="name" class="block font-bold text-sm pb-2">Nome:</label>
        <input class="w-full p-3 text-sm border-2 text-black" name="name" type="text">
        <?php echo get_flash_message('name'); ?>
    </div>

    <div class="my-2">
        <label for="email" class="block font-bold text-sm pb-2">Email:</label>
        <input class="w-full p-3 text-sm border-2 text-black" name="email" type="text">
        <?php echo get_flash_message('email'); ?>
    </div>

    <div class="my-2">
        <label for="password" class="block font-bold text-sm pb-2">Password:</label>
        <input class="w-full p-3 text-sm border-2 text-black" name="password" type="password">
        <?php echo get_flash_message('password'); ?>
    </div>

    <button type="submit" class="w-full p-4 bg-gray-200 text-black my-3">Enviar</button>
</form>