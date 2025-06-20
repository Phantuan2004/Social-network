import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

import "/resources/js/libs/uikit.min.js";
import "/resources/js/libs/script.js";

// UIkit

const app = createApp(App);
app.use(router);
app.mount("#app");
