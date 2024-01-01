<script setup>
import { ref, reactive } from "vue";
import { router, usePage } from "@inertiajs/vue3";

const isModalOpen = ref(false);

const showModal = () => {
  isModalOpen.value = !isModalOpen.value;
};

const form = reactive({
  title: null,
  user_id: usePage().props.auth.user.id,
});

const submit = () => {
  router.post("/project", form);
  window.location.reload();
};
</script>

<template>
  <div>
    <button class="ml-5 mb-4 button p-2 px-3" id="add_projectButton" @click="showModal">
      Novo projeto 📑
    </button>

    <div
      id="projectModal"
      class="modal"
      :style="{ display: isModalOpen ? 'block' : 'none' }"
    >
      <span
        class="text-gray-200 text-3xl font-bold float-right cursor-pointer"
        @click="showModal"
      >
        &times;
      </span>
      <div class="bg-[#292929] mt-[50%] p-3 w-80 rounded-md relative mx-auto">
        <form action="/project" @submit.prevent="submit" class="add_tagsForm">
          <label for="title" class="block text-xs text-white my-2 font-medium">
            Digite o título do seu projeto</label
          >
          <input
            type="text"
            name="title"
            v-model="form.title"
            class="w-full border-1 border-zinc-700 bg-[#313131] rounded-lg outline-none my-1"
            placeholder="Ex.: projeto 01"
          />

          <button type="submit" class="button p-1 px-14 my-2" @click="showModal">
            criar projeto
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
