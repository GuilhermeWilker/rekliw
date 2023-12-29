<template>
  <div>
    <button
      class="up w-fit rounded-xl border-2 border-blue-800 bg-blue-600 hover:bg-blue-700 px-4 py-1 text-md font-medium text-white"
      :class="{
        'up-active bg-blue-700': isActive,
      }"
      @click="($event) => $emit('feedback', reactionType)"
    >
      <slot />
    </button>
  </div>
</template>

<script setup>
defineProps({
  isActive: Boolean,
  reactionType: Number,
});

defineEmits(["feedback"]);
</script>
