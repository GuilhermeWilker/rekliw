<script setup>
import Tags from "./Tags.vue";
import { ref, reactive } from "vue";
import { router, usePage } from "@inertiajs/vue3";

const isModalOpen = ref(false);

const showModal = () => {
  isModalOpen.value = !isModalOpen.value;
};

const form = reactive({
  tag_name: null,
  project_id: usePage().props.project.id,
});

const submit = () => {
  router.post("/tag", form);
  window.location.reload();
};
</script>

<template>
  <div>
    <div class="flex items-center w-full overflow-x-auto gap-5 py-2 mb-1">
      <button
        v-if="$page.props.auth.user.id === $page.props.project.user_id"
        class="button p-1 px-3"
        @click="showModal"
      >
        adicionar +
      </button>

      <Tags />
    </div>

    <div id="tagModal" class="modal" :style="{ display: isModalOpen ? 'block' : 'none' }">
      <span
        class="text-gray-200 text-3xl font-bold float-right cursor-pointer"
        @click="showModal"
      >
        &times;
      </span>
      <div class="bg-[#232323] mt-[50%] p-3 w-80 rounded-md relative mx-auto">
        <form action="/tag" @submit.prevent="submit" class="add_tagsForm">
          <legend class="text-sm my-1 pl-1 text-neutral-400">Digite o nome da tag</legend>
          <input type="hidden" name="project_id" :value="$page.props.project.id" />

          <input
            type="text"
            name="tag_name"
            v-model="form.tag_name"
            class="block w-full rounded-md p-2 border-1 border-neutral-500 bg-neutral-800 outline-none"
          />

          <button
            type="submit"
            class="button w-fit p-12 py-1 hover:from-blue-800 hover:to-blue-600 hover:border-blue-600 my-2"
            @click="showModal"
          >
            criar tag
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
