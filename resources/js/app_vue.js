import { createApp, onMounted } from "vue";
import { createPinia } from "pinia";
import App from "./App.vue";

import router from "./router";

// Bootstrap framework
import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

const appElement = document.querySelector('#app');

if (appElement) {
  const app = createApp(App);

  app.use(createPinia());
  app.use(router);

  setTimeout(() => {
    app.mount("#app");
  }, 500);
}





