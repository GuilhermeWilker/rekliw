<template>
  <AppLayout>
    <Header :project="project" />

    <section class="mt-5 overflow-y-scroll h-[100%]">
      <div v-if="$page.props.auth.user">
        <ModalAddTags />

        <!-- Add task card -->
        <div class="pl-4">
          <AddTaskCard />
        </div>
      </div>

      <!-- Categorias das Tasks -->
      <Categories />
    </section>
  </AppLayout>
</template>

<script setup>
import Header from "../../Components/Header.vue";
import ModalAddTags from "../../Components/ModalAddTags.vue";
import Categories from "@/Components/Categories.vue";
import AddTaskCard from "../../Components/AddTaskCard.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { usePage, Head } from "@inertiajs/vue3";

const { project } = usePage().props;
</script>
