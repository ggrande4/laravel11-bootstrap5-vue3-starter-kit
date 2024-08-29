<script setup>
    import { ref, computed } from 'vue';

    const currentYear = ref(new Date().getFullYear());
    const yearStart = computed(() => currentYear.value - 4);
</script>

<template>
  <footer id="page-footer">
    <slot>
      <div class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                <div class="col-md-auto pb-2 pt-2">
                    <a href="#" class="link-dark">Privacy Policy</a> |
                    <a href="#" class="link-dark">Terms of Use</a>
                </div>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                <div class="col-md pb-2 pt-2">
                    <p class="mb-0">&copy; {{ yearStart }} - {{ currentYear }}. All Rights Reserved - Company Name</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </slot>
  </footer>
</template>
<style scoped>
    .bg-body-light {
        background-color: #f6f7f9 !important;
    }
    a.bg-body-light:hover, a.bg-body-light:focus,
    button.bg-body-light:hover,
    button.bg-body-light:focus {
        background-color: #d7dde5 !important;
    }
</style>
