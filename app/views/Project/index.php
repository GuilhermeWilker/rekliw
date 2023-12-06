<section class="my-3 relative">
<!-- Reações e overview de mídias -->
<article class="mt-4">
    <h2 class="font-family-righteous my-2 text-xl">Integração com API Banco do Brasil</h2>

    <!--Conteudo-->
    <div class="overview-img p-3 text-black h-full font-medium text-justify text-gray-700">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium voluptatum facilis autem voluptatem minima hic veritatis nostrum laborum a enim, aperiam nemo doloremque ab aliquam accusantium illum sint nisi sit excepturi nihil ex quasi, exercitationem eius. Eius, ipsum vero. <br> <br>

        <img src="https://thumbs.dreamstime.com/b/illustration-hand-draw-doodles-sketch-personal-computer-set-70837340.jpg" alt="">

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium voluptatum facilis autem voluptatem minima hic veritatis nostrum laborum a enim, aperiam nemo doloremque ab aliquam accusantium illum sint nisi sit excepturi nihil ex quasi, exercitationem eius. Eius, ipsum vero. <br> <br>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium voluptatum facilis autem voluptatem minima hic veritatis nostrum laborum a enim, aperiam nemo doloremque ab aliquam accusantium illum sint nisi sit excepturi nihil ex quasi, exercitationem eius. Eius, ipsum vero. <br> <br>
    </div>

    <div class="flex items-center my-4 justify-between">
        <small class="text-gray-300 block my-2">
            Publicado em   <?php $hoje = date('d/m/Y');
            echo $hoje;
            ?>
        </small>

        <div class="flex items-center gap-2">
            <button class="reaction-button p-1 px-5 text-black">like</button>
            <button class="reaction-button p-1 px-5 bg-[#2957CD] text-white">dislike</button>
        </div>
    </div>
   
</article>


<hr>

<!-- Comentários -->
<article class="mt-4 h-[15em] overflow-y-scroll p-2">
    <!-- Comentários -->
    <div class="w-full  bg-white text-black text-sm p-3 comment my-2 mx-auto">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus 
    </div>
</article>


<!---->
<div class="flex items-center justify-between bottom-2 my-3 gap-5">
    <a href="/" class="w-[50%] p-3 rounded-lg bg-white font-medium text-black text-center">
        Voltar
    </a>
    <button class="w-[50%] p-3 rounded-lg bg-[#2957CD] font-medium">
        Comentar
    </button>
</div>
</section>