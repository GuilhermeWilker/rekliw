<template>
  <section>
    <div class="flex items-center gap-2">
      <textarea
        class="w-full h-[100%] bg-[#292929] text-sm p-3 rounded-md shadow-lg text-white resize-y"
        placeholder="Adicionar comentário..."
        v-model="commentContent"
      >
      </textarea>

      <button class="p-1 border-b-2 border-b-white text-lg" @click="comment">➡️</button>
    </div>

    <div class="flex items-center gap-2 my-3">
      <p class="text-sm">comentários</p>
      <div
        class="h-4 w-4 rounded-full mb-4 bg-red-600 p-2 text-xs flex justify-center items-center"
      >
        {{ comments.length }}
      </div>
    </div>

    <div v-for="comment in comments" :key="comments.id">
      <p
        class="w-full h-[100%] my-2 bg-white text-black rounded-md p-3 text-sm shadow-lg"
      >
        {{ comment.content }}

        <small class="block text-right font-bold text-gray-500 text-xs">
          postado: {{ new Date().toLocaleString() }}
        </small>
      </p>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";
import { router, usePage } from "@inertiajs/vue3";

const comments = usePage().props.comments;
const commentContent = ref("");

const comment = (e) => {
  if (commentContent.value == "" || null) {
    alert("Por favor, preencha seu comentário antes de enviar");
    return;
  }

  router.post("/comment", {
    content: commentContent.value.trim(),
    task_id: usePage().props.task.id,
  });

  window.location.reload();
};
</script>

<style scoped></style>
