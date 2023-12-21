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
  <div class="bg-[#eaeaec] mt-[20%] p-3 rounded-md relative mx-auto w-[80vw]">
    <form
      @submit.prevent="submit"
      method="post"
      class="w-full add_tagsForm"
      id="add_taskCardModal"
    >
      <div>
        <label for="task_title" class="block text-xs text-black">Titulo</label>
        <input
          type="text"
          name="task_title"
          v-model="form.task_title"
          placeholder="Digite o título do seu card aqui"
          class="w-full text-black border-2 border-[#D9D9D9] rounded-sm outline-none my-1"
        />
      </div>

      <div>
        <label for="task_content" class="block text-xs text-black">Conteúdo</label>
        <textarea
          class="w-full h-[50vh] p-2 border-2 border-[#D9D9D9] rounded-sm bg-white outline-none text-black"
          name="task_content"
          placeholder="Descreva detalhadamente o conteúdo do seu task card utilizando markdown (listas, imagens, etc)..."
          v-model="form.task_content"
        ></textarea>
      </div>

      <div>
        <label for="task_tag" class="block text-xs text-black">Tag</label>
        <select name="task_tag" v-model="form.tag" class="w-full rounded-md text-black">
          <option disabled selected>Selecione uma tag</option>
          <option v-for="tag in tags" :key="index" :value="tag.tag_name">
            {{ tag.tag_name }}
          </option>
        </select>
      </div>

      <button
        type="submit"
        class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-2 font-bold hover:bg-[#3768E5]"
        @submit="showModal()"
      >
        criar tarefa
      </button>
    </form>
  </div>
</template>
