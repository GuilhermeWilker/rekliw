<script setup>
import TaskCard from "../Components/TaskCard.vue";

defineProps({
  tasks: Array,
});
</script>

<template>
  <div class="w-full p-4">
    <p># Backend</p>
    <hr />

    <div class="prose flex items-center overflow-x-scroll p-4 py-8">
      <TaskCard :tasks="tasks" />
    </div>
  </div>
</template>
