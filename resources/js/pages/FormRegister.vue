<template>
    <div class="sm:flex">
        <div
            class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10"
        >
            <div
                class="w-full lg:max-w-sm mx-auto space-y-10"
                uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
            >
                <!-- logo image-->
                <a href="#">
                    <img
                        src="/public/images/logo.png"
                        class="w-28 absolute top-10 left-10 dark:hidden"
                        alt=""
                /></a>
                <a href="#">
                    <img
                        src="/public/images/logo-light.png"
                        class="w-28 absolute top-10 left-10 hidden dark:!block"
                        alt=""
                /></a>

                <!-- logo icon optional -->
                <div class="hidden">
                    <img
                        class="w-12"
                        src="/public/images/logo-icon.png"
                        alt="Socialite html template"
                    />
                </div>

                <!-- title -->
                <div>
                    <h2 class="text-2xl font-semibold mb-1.5">
                        Sign up to get started
                    </h2>
                    <p class="text-sm text-gray-700 font-normal">
                        If you already have an account,
                        <router-link
                            :to="{ name: 'form_login' }"
                            class="text-blue-700"
                            >Login here!</router-link
                        >
                    </p>
                </div>

                <!-- form -->
                <form
                    method="#"
                    action="#"
                    class="space-y-7 text-sm text-black font-medium dark:text-white"
                    uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
                >
                    <div class="grid grid-cols-2 gap-4 gap-y-7">
                        <!-- first name -->
                        <div>
                            <label for="email" class="">First name</label>
                            <div class="mt-2.5">
                                <input
                                    id="text"
                                    name="text"
                                    type="text"
                                    autofocus=""
                                    placeholder="First name"
                                    required=""
                                    class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                                />
                            </div>
                        </div>

                        <!-- Last name -->
                        <div>
                            <label for="email" class="">Last name</label>
                            <div class="mt-2.5">
                                <input
                                    id="text"
                                    name="text"
                                    type="text"
                                    placeholder="Last name"
                                    required=""
                                    class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                                />
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-span-2">
                            <label for="email" class="">Email address</label>
                            <div class="mt-2.5">
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="Email"
                                    required=""
                                    class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                                />
                            </div>
                        </div>

                        <!-- password -->
                        <div>
                            <label for="email" class="">Password</label>
                            <div class="mt-2.5">
                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    placeholder="***"
                                    class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                                />
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="email" class="">Confirm Password</label>
                            <div class="mt-2.5">
                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    placeholder="***"
                                    class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                                />
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label
                                class="inline-flex items-center"
                                id="rememberme"
                            >
                                <input
                                    type="checkbox"
                                    id="accept-terms"
                                    class="!rounded-md accent-red-800"
                                />
                                <span class="ml-2"
                                    >you agree to our
                                    <a
                                        href="#"
                                        class="text-blue-700 hover:underline"
                                        >terms of use
                                    </a>
                                </span>
                            </label>
                        </div>

                        <!-- submit button -->
                        <div class="col-span-2">
                            <button
                                type="submit"
                                class="button bg-primary text-white w-full"
                            >
                                Get Started
                            </button>
                        </div>
                    </div>

                    <div class="text-center flex items-center gap-6">
                        <hr
                            class="flex-1 border-slate-200 dark:border-slate-800"
                        />
                        Or continue with
                        <hr
                            class="flex-1 border-slate-200 dark:border-slate-800"
                        />
                    </div>

                    <!-- social login -->
                    <div
                        class="flex gap-2"
                        uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 400 ;repeat: true"
                    >
                        <a
                            href="#"
                            class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm"
                        >
                            <ion-icon
                                name="logo-facebook"
                                class="text-lg"
                            ></ion-icon>
                            facebook
                        </a>
                        <a
                            href="#"
                            class="button flex-1 flex items-center gap-2 bg-sky-600 text-white text-sm"
                        >
                            <ion-icon name="logo-twitter"></ion-icon> twitter
                        </a>
                        <a
                            href="#"
                            class="button flex-1 flex items-center gap-2 bg-black text-white text-sm"
                        >
                            <ion-icon name="logo-github"></ion-icon> github
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- image slider -->
        <div class="flex-1 relative bg-primary max-md:hidden">
            <div
                class="relative w-full h-full"
                tabindex="-1"
                uk-slideshow="animation: slide; autoplay: true"
            >
                <ul class="uk-slideshow-items w-full h-full">
                    <li class="w-full">
                        <img
                            src="/public/images/post/img-3.jpg"
                            alt=""
                            class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"
                        />
                        <div
                            class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10"
                        >
                            <div
                                class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"
                                uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
                            >
                                <img
                                    class="w-12"
                                    src="/public/images/logo-icon.png"
                                    alt="Socialite html template"
                                />
                                <h4
                                    class="!text-white text-2xl font-semibold mt-7"
                                    uk-slideshow-parallax="y: 600,0,0"
                                >
                                    Connect With Friends
                                </h4>
                                <p
                                    class="!text-white text-lg mt-7 leading-8"
                                    uk-slideshow-parallax="y: 800,0,0;"
                                >
                                    This phrase is more casual and playful. It
                                    suggests that you are keeping your friends
                                    updated on what’s happening in your life.
                                </p>
                            </div>
                        </div>
                        <div
                            class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"
                        ></div>
                    </li>
                    <li class="w-full">
                        <img
                            src="/public/images/post/img-2.jpg"
                            alt=""
                            class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"
                        />
                        <div
                            class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10"
                        >
                            <div
                                class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"
                                uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
                            >
                                <img
                                    class="w-12"
                                    src="/public/images/logo-icon.png"
                                    alt="Socialite html template"
                                />
                                <h4
                                    class="!text-white text-2xl font-semibold mt-7"
                                    uk-slideshow-parallax="y: 800,0,0"
                                >
                                    Connect With Friends
                                </h4>
                                <p
                                    class="!text-white text-lg mt-7 leading-8"
                                    uk-slideshow-parallax="y: 800,0,0;"
                                >
                                    This phrase is more casual and playful. It
                                    suggests that you are keeping your friends
                                    updated on what’s happening in your life.
                                </p>
                            </div>
                        </div>
                        <div
                            class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"
                        ></div>
                    </li>
                </ul>

                <!-- slide nav -->
                <div class="flex justify-center">
                    <ul
                        class="inline-flex flex-wrap justify-center absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav"
                    ></ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
// Dark model toggle script
if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

localStorage.theme = "light";

localStorage.theme = "dark";

localStorage.removeItem("theme");
</script>

<style lang="scss" scoped></style>
