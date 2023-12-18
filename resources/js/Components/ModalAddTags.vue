<script setup>
import { ref, reactive } from "vue";
import { router, usePage } from "@inertiajs/vue3";

const tags = usePage().props.tags;
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
};
</script>

<template>
  <div>
    <div class="flex items-center w-full overflow-x-auto gap-5 py-2 mb-1">
      <button
        class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[100px] p-2"
        @click="showModal"
      >
        adicionar +
      </button>

      <div
        class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[120px] p-2"
        v-for="tag in tags"
        :key="tag.id"
      >
        <span class="text-md font-bold text-blue-500">#</span>
        {{ tag.tag_name }}
      </div>
    </div>

    <div id="tagModal" class="modal" :style="{ display: isModalOpen ? 'block' : 'none' }">
      <span
        class="text-gray-200 text-3xl font-bold float-right cursor-pointer"
        @click="showModal"
      >
        &times;
      </span>
      <div class="bg-[#292929] mt-[50%] p-3 w-80 rounded-md relative mx-auto">
        <form action="/tag" @submit.prevent="submit" class="add_tagsForm">
          <input type="hidden" name="project_id" :value="$page.props.project.id" />

          <input
            type="text"
            name="tag_name"
            v-model="form.tag_name"
            class="block w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none"
            placeholder="Tagname"
          />

          <button
            type="submit"
            class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-2 font-bold hover:bg-[#3768E5]"
            @click="showModal"
          >
            criar tag
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
