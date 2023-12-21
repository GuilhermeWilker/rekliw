<script setup>
import TaskCard from "../Components/TaskCard.vue";

defineProps({
  tasks: Array,
});
</script>

<template>
  <div class="w-full pl-1">
    <p># Backend</p>
    <hr />

    <div class="prose flex items-center overflow-x-scroll p-2 py-8">
      <TaskCard :tasks="tasks" />
    </div>
  </div>
</template>
