<script setup>
import TaskCard from "../Components/TaskCard.vue";
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const tasks = usePage().props.tasks;

const tasksCategories = computed(() => {
  const categorized = {};

  tasks.forEach((task) => {
    if (!categorized[task.tag]) {
      categorized[task.tag] = [];
    }

    categorized[task.tag].push(task);
  });

  return Object.keys(categorized).map((tag) => ({
    tag,
    tasks: categorized[tag],
  }));
});
</script>

<template>
  <div class="w-full pl-1">
    <template v-for="category in tasksCategories">
      <p>
        <span class="text-[#3B82F6] font-bold text-lg">#</span>
        {{ category.tag }}
      </p>
      <hr />

      <div class="prose flex items-center overflow-x-scroll p-2 py-8">
        <TaskCard :tasks="category.tasks" :key="category.tag" />
      </div>
    </template>
  </div>
</template>
