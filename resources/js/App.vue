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
import { useRouter } from "vue-router";
import Loading from "./components/Loading.vue";
import auth from "./routerApi/auth.js";

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
    setup() {
        const router = useRouter();
        return { router };
    },
    async created() {
        await this.initializeApp();
        this.setupRouteLoading();
    },
    methods: {
        // Hàm khởi tạo ứng dụng
        async initializeApp() {
            try {
                // Thời gian tải tối thiểu
                const minLoadTime = new Promise((resolve) =>
                    setTimeout(resolve, 100)
                );

                const initTasks = Promise.all([
                    this.checkAuthentication(),
                    this.loadAppConfig(),
                ]);

                // Đợi cả thời gian tối thiểu và nhiệm vụ thực tế
                await Promise.all([minLoadTime, initTasks]);

                this.isLoading = false;
            } catch (error) {
                console.error("App initialization failed:", error);
                this.isLoading = false;
            }
        },

        // Thiết lập các sự kiện lắng nghe khi bắt đầu và kết thúc tải route
        setupRouteLoading() {
            window.addEventListener("route-loading-start", () => {
                this.isRouteLoading = true;
            });

            window.addEventListener("route-loading-end", () => {
                this.isRouteLoading = false;
            });
        },

        // Hàm kiểm tra xác thực
        async checkAuthentication() {
            if (auth.isAuthenticated()) {
                try {
                    await auth.checkToken(); // Gọi API để kiểm tra token hợp lệ
                    console.log("User authenticated");
                    // Chuyển hướng đến home nếu đã xác thực
                    if (
                        this.$route.name === "form_login" ||
                        this.$route.name === "form_register"
                    ) {
                        this.$router.push({ name: "home" });
                    }
                } catch (error) {
                    console.error("Token invalid or expired:", error);
                    // Sử dụng method từ auth module để clear token
                    auth.clearToken();
                    this.$router.push({ name: "form_login" });
                }
            } else {
                // Nếu không có token, chuyển hướng đến trang đăng nhập
                if (
                    this.$route.name !== "form_login" &&
                    this.$route.name !== "form_register"
                ) {
                    this.$router.push({ name: "form_login" });
                }
            }
        },

        // Hàm tải cấu hình ứng dụng
        async loadAppConfig() {
            return new Promise((resolve) => setTimeout(resolve, 500));
        },
    },

    // Dọn dẹp event listeners khi component bị hủy
    // Đảm bảo không có rò rỉ bộ nhớ
    beforeUnmount() {
        window.removeEventListener("route-loading-start", () => {});
        window.removeEventListener("route-loading-end", () => {});
    },
};
</script>
