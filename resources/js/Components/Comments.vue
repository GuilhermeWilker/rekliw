<template>
  <section>
    <div v-if="!$page.props.auth.user">
      <div class="w-full h-18">
        <textarea
          class="w-full h-full bg-neutral-800 border border-neutral-600 text-md p-3 rounded-md text-white resize-none"
          placeholder="Adicionar comentário..."
          v-model="commentContent"
        >
        </textarea>
      </div>

      <button
        class="button w-full p-1 text-md hover:from-blue-800 hover:to-blue-600 hover:border-blue-600"
        @click="comment"
      >
        enviar
      </button>
    </div>

    <div class="flex items-center gap-2 mt-4">
      <p class="text-sm">comentários</p>
      <div
        class="h-4 w-4 rounded-full mb-4 bg-red-600 p-2 text-xs flex justify-center items-center"
      >
        {{ comments.length }}
      </div>
    </div>

    <div v-for="comment in comments" :key="comments.id">
      <div
        class="w-full h-[100%] my-2 bg-neutral-800 border border-neutral-600 text-neutral-400 rounded-md p-3 text-sm shadow-md relative"
      >
        <div class="flex items-center gap-4 p-3">
          <div
            class="w-12 h-12 bg-neutral-800 border boder-neutral-600 rounded-full flex items-center justify-center text-lg absolute left-2 top-3"
          >
            🧑‍🚀
          </div>
          <p class="ml-12">
            {{ comment.content }}
          </p>
        </div>
      </div>
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
