<script setup>
import { onMounted } from "vue";

onMounted(() => {
  new SimpleMDE({
    element: document.getElementById("content-task"),
    lineWrapping: true,
  });
});

defineProps({
  tags: Array,
});
</script>

<template>
  <div class="bg-[#eaeaec] mt-[20%] p-3 w-80 rounded-md relative mx-auto">
    <form action="" method="post" class="w-full add_tagsForm" id="add_taskCardModal">
      <textarea
        class="w-[50em] p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#eaeaec] outline-none text-black"
        id="content-task"
        name="content"
      ></textarea>

      <select name="" class="w-full rounded-md text-black">
        <option v-for="tag in tags" :key="index" :value="tag.tag_name">
          {{ tag.tag_name }}
        </option>
      </select>

      <button
        type="submit"
        class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-2 font-bold hover:bg-[#3768E5]"
      >
        criar tarefa
      </button>
    </form>
  </div>
</template>
