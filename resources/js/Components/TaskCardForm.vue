<script setup>
import { onMounted, reactive, ref } from "vue";
import { router, usePage } from "@inertiajs/vue3";

onMounted(() => {
  new SimpleMDE({
    element: document.getElementById("content-task"),
    lineWrapping: true,
  });
});

defineProps({
  tags: Array,
  showModal: Function,
});

const form = reactive({
  task_title: null,
  task_content: null,
  tag: null,
  project_id: usePage().props.project.id,
});

function submit() {
  router.post("/", form);
  window.location.reload();
}
</script>

<template>
  <div class="bg-[#232323] mt-[20%] p-3 rounded-md relative mx-auto w-[80vw]">
    <form
      @submit.prevent="submit"
      method="post"
      class="w-full add_tagsForm"
      id="add_taskCardModal"
    >
      <div>
        <label for="task_title" class="block text-xs mt-1">Titulo</label>
        <input
          type="text"
          name="task_title"
          v-model="form.task_title"
          placeholder="Digite o título do seu card aqui"
          class="w-full border-1 border-zinc-700 bg-[#313131] rounded-lg outline-none my-1"
        />
      </div>

      <div>
        <label for="task_content" class="block text-xs mt-1">Conteúdo</label>
        <textarea
          class="h-[50vh] w-full border-1 border-zinc-700 bg-[#313131] rounded-lg outline-none my-1"
          name="task_content"
          placeholder="Descreva detalhadamente o conteúdo do seu task card utilizando markdown (listas, imagens, etc)..."
          v-model="form.task_content"
        ></textarea>
      </div>

      <div>
        <label for="task_tag" class="block text-xs">Tag</label>
        <select
          name="task_tag"
          v-model="form.tag"
          class="w-full border-1 border-zinc-700 bg-[#313131] rounded-lg outline-none my-1 active:none"
        >
          <option selected>Selecione uma tag</option>
          <option v-for="tag in tags" :key="index" :value="tag.tag_name">
            {{ tag.tag_name }}
          </option>
        </select>
      </div>

      <button
        type="submit"
        class="button w-fit p-12 py-1 hover:from-blue-800 hover:to-blue-600 hover:border-blue-600 my-2"
        @submit="showModal()"
      >
        criar tarefa
      </button>
    </form>
  </div>
</template>
