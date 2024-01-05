<template>
  <AppLayout>
    <Header />

    <main class="my-3 relative pr-6 p-4">
      <!-- Reações e overview de mídias -->
      <section>
        <!-- Overview -->
        <article class="w-full h-[100%] rounded-md p-8 shadow-lg bg-neutral-100 relative">
          <!-- Slider de Progresso -->
          <div class="absolute -top-1 left-8 text-blue-500 flex items-center gap-5">
            <input
              type="range"
              id="myRange"
              min="0"
              max="100"
              :value="sliderValue"
              step="25"
              @input="udpateSliderValue"
            />
            <p class="text-blue-500 text-sm">Progresso da tarefa {{ sliderValue }}%</p>
          </div>

          <div class="flex items-center gap-2">
            <h2 class="font-family-righteous my-2 mt-5 text-xl text-gray-700">
              {{ task.task_title }}
            </h2>
          </div>

          <div class="w-full h-[1px] bg-slate-400 rounded-full" />

          <!--Conteudo-->
          <div
            class="prose p-3 h-full font-medium text-justify text-gray-800"
            v-html="task.task_content"
          />

          <!-- TagStatus -->
          <div class="flex justify-between items-center">
            <small class="text-gray-400 block my-2" v-if="!$page.props.auth.user">
              Publicado em <span class="font-bold">{{ __date(task.created_at) }}</span>
            </small>

            <FeedbackTag :feedback="reaction" />
          </div>
        </article>

        <!-- Reações -->
        <section class="flex items-center my-4 justify-end" v-if="!$page.props.auth.user">
          <div class="flex items-center gap-2">
            <FeedbackReaction
              :isActive="reaction === 'like'"
              :reactionType="1"
              @feedback="addReaction"
            >
              Aprovar
            </FeedbackReaction>

            <FeedbackReaction
              :isActive="reaction === 'dislike'"
              :reactionType="2"
              @feedback="addReaction"
            >
              Reavaliar
            </FeedbackReaction>
          </div>
        </section>
      </section>

      <hr class="my-2" />

      <!-- Comentários -->
      <article class="mt-4 h-[15em] overflow-y-scroll p-2">
        <Commments />
      </article>

      <!-- class="w-full p-3 my-4 rounded-lg bg-[#2957CD] text-center font-medium"-->

      <button
        @click="redirectBack"
        class="button py-2 px-28 my-3 hover:from-blue-800 hover:to-blue-600 hover:border-blue-600"
      >
        Voltar
      </button>
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
import { redirectBack } from "@/Composables/redirectBack.js";
import { ref } from "vue";

defineProps({
  task: Object,
  reaction: String,
});

const sliderValue = ref(0);
const udpateSliderValue = (e) => {
  sliderValue.value = e.target.value;
};

const reaction = usePage().props.task.reaction;

const addReaction = (reactionType) => {
  router.post("/reaction", {
    reaction: reactionType,
    task_id: usePage().props.task.id,
  });

  window.location.reload();
};
</script>

<style scoped>
input[type="range"] {
  height: 55px;
  appearance: none;
  width: 12em;

  background-color: transparent;

  &:focus {
    outline: none;

    &::-webkit-slider-runnable-track {
      background: #3071a9;
    }

    &::-ms-fill-lower {
      background: #3071a9;
    }

    &::-ms-fill-upper {
      background: #3071a9;
    }
  }

  &::-webkit-slider-runnable-track {
    width: 100%;
    height: 6px;
    cursor: pointer;
    box-shadow: 1px 1px 1px #000000;
    background: #3071a9;
    border-radius: 50px;
    border: 1px solid #000000;
  }

  &::-webkit-slider-thumb {
    box-shadow: 1px 1px 1px #000000;
    border: 1px solid #000000;
    height: 35px;
    width: 6px;
    border-radius: 50px;
    background: #ffffff;
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -16px;
  }

  &::-ms-thumb {
    margin-top: 1px;
    box-shadow: 1px 1px 1px #000000;
    border: 1px solid #000000;
    height: 47px;
    width: 6px;
    border-radius: 50px;
    background: #ffffff;
    cursor: pointer;
  }

  &::-moz-range-track {
    width: 100%;
    height: 7px;
    cursor: pointer;

    box-shadow: 1px 1px 1px #000000;
    background: #3071a9;
    border-radius: 50px;
    border: 1px solid #000000;
  }

  &::-moz-range-thumb {
    box-shadow: 1px 1px 1px #000000;
    border: 1px solid #000000;
    height: 47px;
    width: 6px;
    border-radius: 50px;
    background: #ffffff;
    cursor: pointer;
  }

  &::-ms-track {
    width: 100%;
    height: 7px;
    cursor: pointer;

    background: transparent;
    border-color: transparent;
    color: transparent;
  }

  &::-ms-fill-lower {
    background: #3071a9;
    border: 1px solid #000000;
    border-radius: 100px;
    box-shadow: 1px 1px 1px #000000;
  }

  &:-ms-fill-upper {
    background: #3071a9;
    border: 1px solid #000000;
    border-radius: 100px;
    box-shadow: 1px 1px 1px #000000;
  }
}
</style>
