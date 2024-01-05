<script setup>
import { ref } from "vue";

defineProps({
  tasks: Array,
});
</script>

<template>
  <div
    v-for="task in tasks"
    :key="task.id"
    class="card text-black relative drop-shadow-md hover:z-10"
  >
    <Link :href="`/card/${task.id}`" class="underline">
      <h2 class="-mb-2 -mt-1 pt-3 font-bold text-[17px]">{{ task.task_title }}</h2>
    </Link>

    <div class="my-1 overflow-y-hidden h-[7em]">
      <p class="text-gray-500 text-xs" v-html="task.task_content"></p>
    </div>

    <input
      type="range"
      id="myRange"
      min="0"
      max="100"
      :value="task.task_progress"
      step="25"
      disabled
    />
    <span class="slider-value" id="sliderValue">{{ task.task_progress }}%</span>
  </div>
</template>

<style scoped>
.card {
  min-height: 14em;
  max-height: 14em;
  max-width: 11em;
  min-width: 11em;

  border: 1.5px solid #ccc;
  border-radius: 1em;
  padding: 1em;

  background-color: #fff;
  cursor: pointer;
  transition: ease-in-out 0.1s;
  transform: rotate(-6deg);

  &:hover {
    transform: rotate(0deg);
  }
}
</style>
