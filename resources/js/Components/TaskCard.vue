<script setup>
import { ref } from "vue";

const sliderValue = ref(0);
const udpateSliderValue = (e) => {
  sliderValue.value = e.target.value;
};
</script>

<template>
  <div class="card text-black relative drop-shadow-md hover:z-10">
    <h2 class="font-bold text-[17px]">Integração com API Banco do Brasil</h2>

    <p class="my-3 text-gray-300 text-sm text-justify">
      Lorem ipsum, dolor sit adipisci esse nemo unde inventore quisquam et est animi....
    </p>

    <input
      type="range"
      id="myRange"
      min="0"
      max="100"
      :value="sliderValue"
      step="25"
      @input="udpateSliderValue"
    />
    <span class="slider-value" id="sliderValue">{{ sliderValue }}%</span>
  </div>
</template>
