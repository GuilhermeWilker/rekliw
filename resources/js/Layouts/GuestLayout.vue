<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <div
    class="h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-[#232323] p-4"
  >
    <div>
      <Link href="/">
        <img src="/assets/imgs/rekliw_logo.png" alt="" />
      </Link>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
      <slot />
    </div>
  </div>
</template>
