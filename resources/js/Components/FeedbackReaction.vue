<template>
  <div>
    <button
      class="reaction-button p-1 px-5 text-black hover:bg-blue-500 hover:text-white"
      :class="{
        'bg-[#2957CD] text-white': isActive,
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
