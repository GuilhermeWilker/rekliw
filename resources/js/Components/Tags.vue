<template>
  <div
    class="flex w-fit rounded-md border border-neutral-600 bg-gradient-to-b from-neutral-900 to-neutral-600 p-4 py-1 tracking-tight text-white ring-[1.5px] ring-neutral-950 ring-offset-0 transition-all duration-500 hover:border-blue-600 hover:from-blue-800 hover:to-blue-600"
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
