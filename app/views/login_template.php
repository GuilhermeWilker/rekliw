
<div class="flex items-center justify-center my-[45px]">
    <a href="/">
        <img src="/assets/imgs/rekliw_logo.png" alt="Rekliw logo">
    </a>
</div>

<form action="/login" method="post"> 

    <div>
        <label for="email" class="block text-sm text-gray-500 font-medium py-3">Email</label>
        <input type="email" name="email" class="w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none">
    </div>

    <div>
        <label for="password" class="block text-sm text-gray-500 font-medium py-3">Senha</label>
        <input type="passoword" name="password" class="w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none mb-1">
        <?php echo get_flash_message('message'); ?>
    </div>

    <p class="my-2 text-gray-300 text-sm">
        Não possui conta? 
        <a href="/register" class="underline"> faça seu cadastro clicando aqui!</a>
    </p>
    

    <button type="submit" class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-6 font-bold hover:bg-[#3768E5]">Login</button>
</form>