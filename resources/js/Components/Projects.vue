<template>
  <article class="my-2">
    <div
      v-for="project in projects"
      :key="project.id"
      class="w-[90%] hover:w-[100%] transition-all mx-auto bg-[#363636] hover:bg-[#364262] rounded-lg p-5 my-2"
    >
      <h3 class="text-2xl font-bold my-1">
        <Link :href="`/project/${project.id}`"> {{ project.title }} </Link>
      </h3>

      <p class="text-sm">Lorem ipsum dolor sit.</p>
    </div>
    <!-- {% endfor %} -->
  </article>
</template>

<script setup>
import { defineProps } from "vue";

defineProps({
  projects: Array,
});
</script>

<style lang="scss" scoped></style>
