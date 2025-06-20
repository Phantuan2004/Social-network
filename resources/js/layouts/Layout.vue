<template>
    <div id="wrapper">
        <Header />
        <Sidebar />
        <div>
            <router-view />
        </div>
    </div>
    <ChatBox v-if="$route.meta.showChat" />
</template>

<script setup>
import { useRoute } from "vue-router";
import Header from "../components/Header.vue";
import Sidebar from "../components/Sidebar.vue";
import ChatBox from "../components/ChatBox.vue";

const route = useRoute();
</script>

<style lang="css" scoped></style>
