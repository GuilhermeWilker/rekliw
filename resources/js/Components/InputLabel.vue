<script setup>
defineProps({
  value: {
    type: String,
  },
});
</script>

<template>
  <label class="block text-sm text-gray-500 font-medium py-1">
    <span v-if="value">{{ value }}</span>
    <span v-else><slot /></span>
  </label>
</template>
