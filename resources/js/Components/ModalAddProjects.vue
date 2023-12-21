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
    <button
      class="p-2 text-center text-sm border-2 border-white rounded-md w-1/2 bg-[#363636] ml-5 mb-4"
      id="add_projectButton"
      @click="showModal"
    >
      Novo projeto 📑
    </button>

    <div
      id="projectModal"
      class="modal"
      :style="{ display: isModalOpen ? 'block' : 'none' }"
    >
      <div class="bg-[#292929] mt-[50%] p-3 w-80 rounded-md relative mx-auto">
        <span
          class="text-gray-200 text-3xl font-bold float-right cursor-pointer"
          @click="showModal"
        >
          &times;
        </span>
        <form action="/project" @submit.prevent="submit" class="add_tagsForm">
          <input
            type="text"
            name="title"
            v-model="form.title"
            class="block w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none"
            placeholder="Título do seu projeto"
          />

          <button
            type="submit"
            class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-2 font-bold hover:bg-[#3768E5]"
            @click="showModal"
          >
            criar projeto
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
