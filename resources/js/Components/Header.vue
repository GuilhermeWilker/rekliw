<template>
  <header class="w-full py-5 px-2">
    <div v-if="freelancer">
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

      <p class="text-md font-family-righteous" v-if="!props.project">
        <small>✨ {{ __date(freelancer.created_at) }}</small>
      </p>

      <div v-if="props.project" class="flex items-center gap-2">
        <p class="text-md font-family-righteous">Projeto: {{ props.project.title }}</p>

        <button
          @click="copyProjectLink"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded-md"
        >
          <img src="/assets/imgs/link-externo.png" class="h-4 w-4" />
        </button>
      </div>
    </div>

    <div v-else class="w-36">
      <h3 class="text-6xl font-family-righteous border-b-2">
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

const props = defineProps({
  project: Object,
});

const freelancer = usePage().props.auth.user;

const fullName = computed(() => {
  return freelancer ? `${freelancer.first_name} ${freelancer.last_name}` : "";
});

const copyProjectLink = () => {
  const link = `${window.location.origin}/project/${props.project.link}`;
  console.log(link);
  if (!navigator.clipboard || !navigator.clipboard.writeText) {
    // Verifica se navigator.clipboard não está disponível ou se o método writeText não é suportado
    alert("A funcionalidade de cópia não é suportada neste navegador.");
    return;
  }

  navigator.clipboard
    .writeText(link)
    .then(() => {
      alert("Link do projeto copiado para a área de transferência!");
    })
    .catch((err) => {
      console.error(err);
      alert("Erro ao copiar link do projeto.");
    });
};
</script>
