<template>
  <AppLayout>
    <section class="my-3 relative pr-3">
      <!-- Reações e overview de mídias -->
      <article class="mt-4">
        <article class="w-full h-[100%] rounded-md p-4 shadow-lg bg-gray-100">
          <div class="flex items-center gap-2">
            <h2 class="font-family-righteous my-2 text-xl text-gray-700">
              {{ task.task_title }}
            </h2>

            <small class="text-white p-1 px-3 bg-blue-600 rounded-md text-xs">
              #{{ task.tag }}
            </small>
          </div>

          <div class="w-full h-[1px] bg-slate-400 rounded-full" />

          <!--Conteudo-->
          <div
            class="prose p-3 h-full font-medium text-justify text-gray-800"
            v-html="task.task_content"
          ></div>
        </article>

        <div class="flex items-center my-4 justify-between">
          <small class="text-gray-300 block my-2"> Publicado em 11/12/2023 </small>

          <div class="flex items-center gap-2">
            <button class="reaction-button p-1 px-5 text-black">like</button>
            <button class="reaction-button p-1 px-5 bg-[#2957CD] text-white">
              dislike
            </button>
          </div>
        </div>
      </article>

      <hr />

      <!-- Comentários -->
      <article class="mt-4 h-[15em] overflow-y-scroll p-2">
        <!-- Comentários -->
        <div class="w-full bg-white text-black text-sm p-3 comment my-2 mx-auto">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus
        </div>
      </article>

      <!---->
      <div class="flex items-center justify-between bottom-2 my-3 gap-5">
        <Link
          :href="`/project/${task.project_id}`"
          class="w-[50%] p-3 rounded-lg bg-white font-medium text-black text-center"
        >
          Voltar
        </Link>
        <button class="w-[50%] p-3 rounded-lg bg-[#2957CD] font-medium">Comentar</button>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import { usePage } from "@inertiajs/vue3";

defineProps({
  task: Object,
});
</script>
