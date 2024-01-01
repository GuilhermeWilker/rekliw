<template>
  <header class="w-full py-5 px-2">
    <div v-if="freelancer">
      <nav class="flex items-center justify-between">
        <Link href="/">
          <h3 class="text-3xl font-family-righteous">{{ fullName }}</h3>
        </Link>

        <div class="h-12 w-12 button">
          <a href="/logout">
            <img src="/assets/imgs/logout.png" class="h-8 w-8" alt="Ícone de log out" />
          </a>
        </div>
      </nav>

      <p class="text-md font-family-righteous" v-if="!props.project">
        <small>✨ {{ __date(freelancer.created_at) }}</small>
      </p>

      <div v-if="props.project" class="flex items-center gap-2">
        <p class="text-md font-family-righteous">Projeto: {{ props.project.title }}</p>

        <button
          v-if="freelancer.id === props.project.user_id"
          @click="copyProjectLink"
          class="flex w-fit rounded-md border border-blue-600 bg-gradient-to-b from-blue-900 to-blue-600 p-2 tracking-tight text-white ring-[1.5px] ring-blue-950 ring-offset-0 transition-all duration-500 hover:border-blue-600 hover:from-blue-800 hover:to-blue-600"
        >
          <img src="/assets/imgs/link-externo.png" class="h-4 w-4" />
        </button>
      </div>
    </div>

    <div v-else class="w-36">
      <h3 @click="redirectBack" class="text-6xl font-family-righteous border-b-2">
        R<span class="text-blue-500">'</span>ekliw
      </h3>

      <p v-if="project" class="text-md font-family-righteous my-2">
        Projeto: {{ props.project.title }}
      </p>
    </div>
  </header>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import { __date } from "@/Composables/useDateFormat.js";
import { redirectBack } from "@/Composables/redirectBack.js";

const props = defineProps({
  project: Object,
});

const freelancer = usePage().props.auth.user;

const fullName = computed(() => {
  return freelancer ? `${freelancer.first_name} ${freelancer.last_name}` : "";
});

const copyProjectLink = (e) => {
  const link = `${window.location.href}`;
  navigator.clipboard.writeText(link);
};
</script>
