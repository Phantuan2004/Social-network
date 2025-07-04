import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import "/resources/js/libs/uikit.min.js";
import "/resources/js/libs/script.js";

// UIkit

const app = createApp(App);

const options = {
    timeout: 2000,
};

app.use(router);
app.use(Toast, options);
app.mount("#app");
