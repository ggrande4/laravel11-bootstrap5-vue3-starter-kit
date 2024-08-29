<script setup>
import { computed, onMounted } from "vue";
import { useConfigStore } from "@/stores/config";

const store = useConfigStore();
const headerClass = computed(() => {
    return {
        "bg-primary pb-3": !store.hasSidebar,
        "bg-white": store.hasSidebar,
    };
});

</script>
<template>
  <header id="page-header" :class="headerClass">
    <slot>
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="d-none d-md-inline-block">
                  <div class="input-group input-group-sm">
                      <input
                          type="text"
                          class="form-control form-control-alt"
                          placeholder="Search.."
                          id="page-header-search-input"
                          name="page-header-search-input"
                      />
                      <span class="input-group-text border-0">
                    <i class="fa fa-fw fa-search"></i>
                  </span>
                  </div>
              </div>
          </div>

          <div class="d-flex align-items-center">
              <slot name="user-profile">
                  <p>Giacomo Grande</p>
              </slot>
          </div>
      </div>
    </slot>
  </header>
</template>
<style scoped>
    .bg-white {
        background-color: #fff !important;
    }
    a.bg-white:hover, a.bg-white:focus,
    button.bg-white:hover,
    button.bg-white:focus {
        background-color: #e6e6e6 !important;
    }
</style>
