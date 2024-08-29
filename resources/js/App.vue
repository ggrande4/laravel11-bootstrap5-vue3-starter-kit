<template>
  <RouterView />
</template>

<script setup>
import { useAuthStore } from '@/stores/auth';

const authStore = useAuthStore();

// invoke checkAuth method to check if the user is authenticated
authStore.checkAuth();

</script>

<style lang="scss">
    @import "@/assets/scss/main";
</style>
