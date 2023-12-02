


<form action="/login" method="post" class="w-30 border-2 border-gray-200 p-4 rounded-lg">

    <p class="text-center py-3">
        <?php echo get_flash_message('message'); ?>
    </p>

    <div class="my-2">
        <label for="email" class="block font-bold text-sm pb-2">Email:</label>
        <input class="w-full p-3 text-sm border-2 text-black" name="email" type="text">
     
    </div>

    <div class="my-2">
        <label for="password" class="block font-bold text-sm pb-2">Password:</label>
        <input class="w-full p-3 text-sm border-2 text-black" name="password" type="text">
        
    </div>

    <button type="submit" class="w-full p-4 bg-gray-100 text-black">Enviar</button>
</form>