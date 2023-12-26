<template>
  <AppLayout>
    <Header />

    <main class="my-3 relative pr-6 p-4">
      <!-- Reações e overview de mídias -->
      <section>
        <!-- Overview -->
        <article class="w-full h-[100%] rounded-md p-8 shadow-lg bg-gray-100 relative">
          <div class="flex items-center gap-2">
            <h2 class="font-family-righteous my-2 text-xl text-gray-700">
              {{ task.task_title }}
            </h2>
          </div>

          <div class="w-full h-[1px] bg-slate-400 rounded-full" />

          <!--Conteudo-->
          <div
            class="prose p-3 h-full font-medium text-justify text-gray-800"
            v-html="task.task_content"
          ></div>

          <div class="flex justify-between items-center">
            <small class="text-gray-400 block my-2">
              Publicado em <span class="font-bold">{{ __date(task.created_at) }}</span>
            </small>

            <FeedbackTag :feedback="reaction" />
          </div>
        </article>

        <!-- Reações -->
        <div class="flex items-center my-4 justify-end">
          <div class="flex items-center gap-2">
            <FeedbackReaction
              :reaction="reaction"
              :reactionType="1"
              @feedback="addReaction"
            >
              like
            </FeedbackReaction>

            <FeedbackReaction
              :reaction="reaction"
              :reactionType="2"
              @feedback="addReaction"
            >
              dislike
            </FeedbackReaction>
          </div>
        </div>
      </section>

      <hr />

      <!-- Comentários -->
      <article class="mt-4 h-[15em] overflow-y-scroll p-2">
        <Commments />
      </article>

      <!---->

      <Link
        as="button"
        :href="`/project/${task.project_id}`"
        class="w-full p-3 rounded-lg bg-[#2957CD] text-center font-medium"
      >
        Voltar
      </Link>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import Header from "@/Components/Header.vue";
import FeedbackTag from "@/Components/FeedbackTag.vue";
import Commments from "@/Components/Comments.vue";
import FeedbackReaction from "@/Components/FeedbackReaction.vue";
import { router, usePage } from "@inertiajs/vue3";
import { __date } from "@/Composables/useDateFormat.js";

defineProps({
  task: Object,
  reaction: String,
});

const reaction = usePage().props.task.reaction;

const addReaction = (reactionType) => {
  router.post("/reaction", {
    reaction: reactionType,
    task_id: usePage().props.task.id,
  });

  window.location.reload();
};
</script>
