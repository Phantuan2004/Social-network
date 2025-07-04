import { createRouter, createWebHistory } from "vue-router";
import Layout from "../layouts/Layout.vue";

const routes = [
    {
        path: "/",
        redirect: "/auth-login",
    },

    {
        path: "/auth-login",
        name: "form_login",
        component: () => import("../pages/FormLogin.vue"),
        meta: { showChat: false, requiresGuest: true },
    },

    {
        path: "/auth-register",
        name: "form_register",
        component: () => import("../pages/FormRegister.vue"),
        meta: { showChat: false, requiresGuest: true },
    },

    {
        path: "/",
        component: Layout,
        children: [
            {
                path: "home",
                name: "home",
                component: () => import("../pages/Home.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                    requiresAuth: true,
                },
            },

            {
                path: "messages",
                name: "messages",
                component: () => import("../pages/Message.vue"),
                meta: {
                    showChat: false,
                    showLoading: true,
                },
            },

            {
                path: "video",
                name: "video",
                component: () => import("../pages/Video.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "event",
                name: "event",
                component: () => import("../pages/Event.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "pages",
                name: "pages",
                component: () => import("../pages/Pages.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "groups",
                name: "groups",
                component: () => import("../pages/Groups.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "market",
                name: "market",
                component: () => import("../pages/Market.vue"),
                meta: { showChat: false, showLoading: true },
            },

            {
                path: "blog",
                name: "blog",
                component: () => import("../pages/Blog.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "blog-read",
                name: "blog_read",
                component: () => import("../pages/BlogRead.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "games",
                name: "games",
                component: () => import("../pages/Games.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "funding",
                name: "funding",
                component: () => import("../pages/Funding.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "components",
                name: "components",
                component: () => import("../pages/Components.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "product-view",
                name: "product_view",
                component: () => import("../pages/ProductView.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "settings",
                name: "settings",
                component: () => import("../pages/Settings.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "timeline",
                name: "timeline",
                component: () => import("../pages/Timeline.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "timeline-event",
                name: "timeline_event",
                component: () => import("../pages/TimelineEvent.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "timeline-funding",
                name: "timeline_funding",
                component: () => import("../pages/TimelineFunding.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "timeline-page",
                name: "timeline_page",
                component: () => import("../pages/TimelinePage.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "update",
                name: "update",
                component: () => import("../pages/Update.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "video",
                name: "video",
                component: () => import("../pages/Video.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },

            {
                path: "video-watch",
                name: "video_watch",
                component: () => import("../pages/VideoWatch.vue"),
                meta: {
                    showChat: true,
                    showLoading: true,
                },
            },
        ],
    },

    {
        path: "/:pathMatch(.*)*",
        name: "NotFound",
        component: () => import("../components/NotFound.vue"),
        meta: { showChat: false },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

let isNavigating = false;

// Loading guard
router.beforeEach((to, from, next) => {
    if (to.meta.showLoading) {
        isNavigating = true;
        window.dispatchEvent(new CustomEvent("route-loading-start"));
    }
    next();
});

router.afterEach((to, from) => {
    if (to.meta.showLoading) {
        setTimeout(() => {
            isNavigating = false;
            window.dispatchEvent(new CustomEvent("route-loading-end"));
        }, 500);
    }
});

export default router;
