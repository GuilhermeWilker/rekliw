<template>
  <section>
    <div class="flex items-center gap-2" v-if="!$page.props.auth.user">
      <div class="w-full h-14 border-b-[1px] border-b-neutral-700 bg-neutral-800">
        <textarea
          class="w-full h-full bg-neutral-800 border-none text-md p-3 rounded-md text-white resize-none"
          placeholder="Adicionar comentário..."
          v-model="commentContent"
        >
        </textarea>
      </div>

      <button
        class="button p-1 px-2 text-md hover:from-blue-800 hover:to-blue-600 hover:border-blue-600"
        @click="comment"
      >
        enviar
      </button>
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
