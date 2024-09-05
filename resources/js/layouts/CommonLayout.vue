<script setup>
import { computed, onMounted } from "vue";
import { useConfigStore } from "@/stores/config";
import { useAuthStore } from '@/stores/auth';

// Import layout fragments
import PageHeader from "@/layouts/fragments/PageHeader.vue";
import LeftSidebar from "@/layouts/fragments/LeftSidebar.vue";
import PageFooter from "@/layouts/fragments/PageFooter.vue";

const store = useConfigStore();
const authStore = useAuthStore();

authStore.checkAuth();

const classContainer = computed(() => {
    return {
        "sidebar-o": authStore.isAuthenticated,
        "sidebar-dark":true,
        "page-header-fixed":true,
    };
});

</script>

<template>
  <div id="page-container" :class="classContainer">

    <LeftSidebar v-if="store.layout.sidebar">
      <template #content>
        <slot name="sidebar-content"></slot>
      </template>

      <slot name="sidebar"></slot>
    </LeftSidebar>

    <PageHeader v-if="store.layout.header">
      <template #user-profile>
        <slot name="header-content-right"></slot>
      </template>
      <slot name="header"></slot>
    </PageHeader>

    <div id="main-container">
      <RouterView />
    </div>

    <PageFooter v-if="store.layout.footer">
      <slot name="footer"></slot>
    </PageFooter>
  </div>
</template>
