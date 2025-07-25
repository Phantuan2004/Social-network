import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    server: {
        host: "0.0.0.0",
        port: 5173,
        hmr: {
            host: "localhost",
            port: 5173,
        },
        watch: {
            usePolling: true,
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue({
            template: {
                compilerOptions: {
                    isCustomElement: (tag) =>
                        tag.startsWith("ion-") || tag.startsWith("ion-icon"),
                },
            },
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/js",
            "@css": "/resources/css",
        },
    },
});
