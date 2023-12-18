<template>
  <header class="w-full py-5 px-2">
    <nav class="flex items-center justify-between">
      <h3 class="text-3xl font-family-righteous">{{ fullName }}</h3>
      <div class="bg-[#303030] h-12 w-12 rounded-lg flex items-center justify-center">
        <a href="/logout">
          <img src="/assets/imgs/logout.png" class="h-8 w-8" alt="Ícone de log out" />
        </a>
      </div>
    </nav>

    <div v-if="project">
      <p class="text-md font-family-righteous">Projeto: {{ project.title }}</p>
    </div>
    <div v-else>
      <p class="text-md font-family-righteous">
        <small>✨ {{ time }}</small>
      </p>
    </div>
  </header>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed, defineProps } from "vue";

defineProps({
  project: Object,
});

const page = usePage();
console.log(page.props);

const freelancer = page.props.auth.user;

const fullName = computed(() => {
  return freelancer ? `${freelancer.first_name} ${freelancer.last_name}` : "";
});

let time = new Date(freelancer.created_at).toLocaleDateString();
</script>
