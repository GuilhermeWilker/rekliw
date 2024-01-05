<template>
  <small
    v-if="feedback !== 'like' && feedback !== 'dislike'"
    :class="getFeedbackClass(feedback)"
    class="text-white p-2 px-3 rounded-md text-sm absolute right-3 top-[-1.7em]"
  >
    {{ getFeedbackText(feedback) }}
  </small>
  <small
    v-else
    :class="getFeedbackClass(feedback)"
    class="text-white p-2 px-3 rounded-md text-sm absolute right-3 top-[-1.7em]"
  >
    {{ getFeedbackText(feedback) }}
  </small>
</template>

<script setup>
defineProps({
  feedback: String,
});

const feedbackMap = {
  null: {
    text: "Aguardando feedback",
    color: "bg-yellow-500",
  },
  like: {
    text: "Aprovado",
    color: "bg-green-600",
  },
  dislike: {
    text: "Requer re-avaliação",
    color: "bg-red-600",
  },
};

const getFeedbackText = (feedback) => {
  return feedbackMap[feedback]?.text || "Aguardando feedback";
};

const getFeedbackClass = (feedback) => {
  return feedbackMap[feedback]?.color || "bg-yellow-500";
};
</script>
