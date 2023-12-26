<template>
  <div
    class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[120px] p-2"
    v-for="tag in tags"
    :key="tag.id"
  >
    <span class="text-md font-bold text-blue-500">#</span>
    {{ tag.tag_name }}
  </div>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
const tags = usePage().props.tags;
</script>

<style scoped></style>
