<script setup>
import TaskCardForm from "../Components/TaskCardForm.vue";
import { ref, onMounted } from "vue";
import { usePage } from "@inertiajs/vue3";

const tags = usePage().props.tags;
const isModalOpen = ref(false);

const showModal = () => {
  isModalOpen.value = !isModalOpen.value;
};
</script>

<template>
  <div class="py-3">
    <div
      v-if="$page.props.auth.user.id === $page.props.project.user_id"
      class="card-add text-black relative drop-shadow-md hover:z-10 flex items-center justify-center"
      @click="showModal"
    >
      <div
        class="card-icon bg-white flex items-center justify-center text-sm hover:text-md"
      >
        +
      </div>
      <small class="text-white top-2 absolute">adicionar</small>
      <small class="text-white bottom-2 absolute">task 📜</small>
    </div>

    <!-- modal -->
    <div
      id="taskCardModal"
      class="modal"
      :style="{ display: isModalOpen ? 'block' : 'none' }"
    >
      <span
        @click="showModal"
        class="text-gray-200 text-3xl font-bold float-right cursor-pointer"
      >
        &times;
      </span>

      <TaskCardForm :tags="tags" :showModal="showModal" />
    </div>
  </div>
</template>
