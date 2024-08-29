import { defineStore } from "pinia";

// Config Pinia Store
export const useConfigStore = defineStore({
  id: "config",
  state: () => ({
    // Default layout options
    layout: {
      header: true,
      sidebar: true,
      footer: true,
    },
  }),
  getters: {
    hasSidebar: (state) => state.layout.sidebar,
    hasFooter: (state) => state.layout.footer,
    hasHeader: (state) => state.layout.header,
  },
  actions: {
    setLayout(payload) {
      this.layout.header = payload.header;
      this.layout.sidebar = payload.sidebar;
      this.layout.footer = payload.footer;
    }
  },
});
