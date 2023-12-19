<template>
  <AppLayout>
    <Header :project="project" />

    <section class="mt-5 overflow-y-scroll h-[70vh]">
      <ModalAddTags />

      <div class="p-4">
        <AddTaskCard />
      </div>

      <!-- categoria -->
      <div class="w-full p-4">
        <p># Backend</p>
        <hr />
        <div class="flex items-center overflow-x-scroll p-4 py-8">
          <TaskCard />
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import Header from "../../Components/Header.vue";
import ModalAddTags from "../../Components/ModalAddTags.vue";
import TaskCard from "../../Components/TaskCard.vue";
import AddTaskCard from "../../Components/AddTaskCard.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { usePage } from "@inertiajs/vue3";

defineProps({
  project: Object,
});
</script>
