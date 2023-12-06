
<div class="flex items-center justify-center my-[45px]">
    <a href="/">
        <img src="/assets/imgs/rekliw_logo.png" alt="Rekliw logo">
    </a>
</div>

<form action="/user/store" method="post">
<p class="text-center py-3">
        <?php echo get_flash_message('message'); ?>
    </p>

    <div class="my-2">
        <label for="name" class="block text-sm text-gray-500 font-medium py-3">Nome:</label>
        <input class="w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none" name="name" type="text">
        <?php echo get_flash_message('name'); ?>
    </div>

    <div class="my-2">
        <label for="email" class="block text-sm text-gray-500 font-medium py-3">Email:</label>
        <input class="w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none" name="email" type="text">
        <?php echo get_flash_message('email'); ?>
    </div>

    <div class="my-2">
        <label for="password" class="block text-sm text-gray-500 font-medium py-3">Password:</label>
        <input class="w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none" name="password" type="password">
        <?php echo get_flash_message('password'); ?>
    </div>

    <p class="my-2 text-gray-300 text-sm">
        Já possui conta? 
        <a href="/login" class="underline"> clique aqui para fazer seu login!</a>
    </p>

    <button type="submit" class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-6 font-bold hover:bg-[#3768E5]">Enviar</button>
</form>