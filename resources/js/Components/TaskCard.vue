<script setup>
import { ref } from "vue";

const sliderValue = ref(25);
const udpateSliderValue = (e) => {
  sliderValue.value = e.target.value;
};

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
    <Link :href="`/card/${task.id}`" class="no-underline">
      <h2 class="-mb-2 -mt-1 pt-3 font-bold text-[17px]">{{ task.task_title }}</h2>

      <div class="my-1 overflow-y-hidden h-[7em]">
        <p class="text-gray-500 text-xs" v-html="task.task_content"></p>
      </div>

      <input
        type="range"
        id="myRange"
        min="0"
        max="100"
        :value="sliderValue"
        step="25"
        disabled
        @input="udpateSliderValue"
      />
      <span class="slider-value" id="sliderValue">{{ sliderValue }}%</span>
    </Link>
  </div>
</template>

<style scoped>
.card {
  min-height: 14em;
  max-height: 14em;
  max-width: 11em;
  min-width: 11em;

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
