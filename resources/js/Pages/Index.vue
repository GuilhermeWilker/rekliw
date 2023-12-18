<template>
  <AppLayout>
    <Header />

    <section class="mt-5 overflow-y-scroll h-[50vh]">
      <!-- modal -->
      <ModalAddProjects />

      <!-- Projeto -->
      <Projects :projects="projects" />
    </section>
  </AppLayout>
</template>

<script setup>
import Header from "../Components/Header.vue";
import Projects from "@/Components/Projects.vue";
import AppLayout from "../Layouts/AppLayout.vue";
import ModalAddProjects from "@/Components/ModalAddProjects.vue";

import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const { projects } = usePage().props;
</script>
