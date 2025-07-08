import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import "/resources/js/libs/uikit.min.js";
import "/resources/js/libs/script.js";

const app = createApp(App);

// Time out for toast notifications
const options = {
    timeout: 2000,
};

app.use(router);
app.use(Toast, options);
app.mount("#app");
