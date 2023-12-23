<template>
  <header class="w-full py-5 px-2">
    <nav class="flex items-center justify-between">
      <Link href="/">
        <h3 class="text-3xl font-family-righteous">{{ fullName }}</h3>
      </Link>

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
        <small>✨ {{ __date(freelancer.created_at) }}</small>
      </p>
    </div>
  </header>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import { __date } from "@/Composables/useDateFormat.js";

defineProps({
  project: Object,
});

const freelancer = usePage().props.auth.user;

const fullName = computed(() => {
  return freelancer ? `${freelancer.first_name} ${freelancer.last_name}` : "";
});
</script>
