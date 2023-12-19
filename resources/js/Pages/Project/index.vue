<template>
  <AppLayout>
    <Header :project="project" />

    <section class="mt-5 overflow-y-scroll h-[70vh]">
      <ModalAddTags />

      <!-- Add task card -->
      <div class="p-4">
        <AddTaskCard />
      </div>

      <!-- categoria -->
      <Categories :tasks="tasks" />
    </section>
  </AppLayout>
</template>

<script setup>
import Header from "../../Components/Header.vue";
import ModalAddTags from "../../Components/ModalAddTags.vue";
import Categories from "@/Components/Categories.vue";
import AddTaskCard from "../../Components/AddTaskCard.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { usePage } from "@inertiajs/vue3";

const tasks = usePage().props.tasks;

defineProps({
  projects: Object,
});
</script>
