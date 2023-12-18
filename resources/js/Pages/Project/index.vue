<template>
  <AppLayout>
    <Header :project="project" />

    <section class="mt-5 overflow-y-scroll h-[50vh]">
      <h2>{{ project.title }}</h2>

      <ModalAddTags />
    </section>
  </AppLayout>
</template>

<script setup>
import Header from "../../Components/Header.vue";
import ModalAddTags from "../../Components/ModalAddTags.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { usePage } from "@inertiajs/vue3";
import { defineProps } from "vue";

defineProps({
  project: Object,
});
</script>
