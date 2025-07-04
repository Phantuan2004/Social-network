<template>
    <div>
        <Loading v-if="isLoading || isRouteLoading" />
        <div v-else>
            <Suspense>
                <template #default>
                    <router-view />
                </template>
                <template #fallback>
                    <Loading />
                </template>
            </Suspense>
        </div>
    </div>
</template>

<script>
import Loading from "./components/Loading.vue";

export default {
    name: "App",
    components: {
        Loading,
    },
    data() {
        return {
            isLoading: true,
            isRouteLoading: false,
        };
    },
    async created() {
        await this.initializeApp();
        this.setupRouteLoading();
    },
    methods: {
        async initializeApp() {
            try {
                // Thời gian tải tối thiểu
                const minLoadTime = new Promise((resolve) =>
                    setTimeout(resolve, 1000)
                );

                const initTasks = Promise.all([
                    this.checkAuthentication(),
                    this.loadAppConfig(),
                ]);

                //Đợi cả thời gian tối thiểu và nhiệm vụ thực tế
                await Promise.all([minLoadTime, initTasks]);

                this.isLoading = false;
            } catch (error) {
                console.error("App initialization failed:", error);
                this.isLoading = false;
            }
        },

        setupRouteLoading() {
            // Lắng nghe route loading events
            window.addEventListener("route-loading-start", () => {
                this.isRouteLoading = true;
            });

            window.addEventListener("route-loading-end", () => {
                this.isRouteLoading = false;
            });
        },

        async checkAuthentication() {
            const token = localStorage.getItem("token");
            if (token) {
                // Xác thực mã thông báo với API
                console.log("User authenticated");
            }
        },

        async loadAppConfig() {
            // Tải cấu hình ứng dụng
            return new Promise((resolve) => setTimeout(resolve, 500));
        },
    },
    beforeUnmount() {
        // Cleanup event listeners
        window.removeEventListener("route-loading-start", () => {});
        window.removeEventListener("route-loading-end", () => {});
    },
};
</script>
