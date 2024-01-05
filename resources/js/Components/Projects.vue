<template>
  <article class="my-2">
    <div
      v-for="project in projects"
      :key="project.id"
      class="w-[90%] hover:w-[100%] transition-all mx-auto bg-zinc-800 border border-neutral-500 hover:bg-zinc-700 rounded-lg p-5 my-2 flex items-center gap-3"
    >
      <div
        class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center font-bold text-blue-500"
      >
        {{ project.title.charAt(0) }}
      </div>
      <h3 class="text-2xl font-bold my-1">
        <Link :href="`/project/${project.link}`"> {{ project.title }} </Link>
      </h3>
    </div>
  </article>
</template>

<script setup>
import { defineProps, ref, onMounted } from "vue";

defineProps({
  projects: Array,
});

const a = "Samapa";
console.log(a.charAt(a));
</script>

<style lang="scss" scoped></style>
