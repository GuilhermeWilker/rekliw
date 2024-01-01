<template>
  <article class="my-2">
    <div
      v-for="project in projects"
      :key="project.id"
      class="w-[90%] hover:w-[100%] transition-all mx-auto bg-zinc-800 border border-neutral-500 hover:bg-zinc-700 rounded-lg p-5 my-2"
    >
      <h3 class="text-2xl font-bold my-1">
        <Link :href="`/project/${project.link}`"> {{ project.title }} </Link>
      </h3>

      <p class="text-sm font-extralight italic">
        "{{ prhase.text }}" By {{ prhase.author }}
      </p>
    </div>
  </article>
</template>

<script setup>
import { defineProps, ref, onMounted } from "vue";

defineProps({
  projects: Array,
});

const prhase_api = "https://type.fit/api/quotes";

const prhase = ref("");

const getPhrase = async () => {
  const res = await fetch(prhase_api);
  const data = await res.json();

  const randomQuote = Math.floor(Math.random() * data.length);
  prhase.value = data[randomQuote];
};

console.log(prhase.value);

onMounted(() => {
  getPhrase();
});
</script>

<style lang="scss" scoped></style>
