<template>
    <main
        id="site__main"
        class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]"
    >
        <div class="max-w-4xl mx-auto max-lg:px-4">
            <div class="lg:py-20 py-12">
                <div class="text-center">
                    <ion-icon
                        name="sparkles-sharp"
                        class="text-5xl mb-6 text-sky-500 opacity-70 rotate-12"
                    ></ion-icon>
                    <h1
                        class="lg:text-5xl lg:font-bold md:text-3xl text-xl font-semibold bg-gradient-to-tr from-indigo-500 to-sky-400 bg-clip-text !text-transparent leading-relaxed"
                    >
                        With Socialite Premium
                    </h1>
                    <p class="text-sm text-gray-500 mt-2 dark:text-white/80">
                        Exclusive features and benefits on Socialite are
                        accessible to you.
                    </p>
                </div>

                <!-- pricing lebel with slider -->
                <div
                    class="relative lg:mt-12 mt-8 max-w-2xl mx-auto"
                    tabindex="-1"
                    uk-slider="finite: true"
                >
                    <div class="overflow-hidden uk-slider-container py-2">
                        <ul class="-ml-2 uk-slider-items w-[calc(100%+10px)]">
                            <li class="lg:w-1/3 w-1/2 pr-[10px]">
                                <label for="weekly">
                                    <input
                                        type="radio"
                                        name="radio-membership"
                                        id="weekly"
                                        class="peer appearance-none hidden"
                                        checked
                                    />
                                    <div
                                        class="relative p-4 bg-white shadow -sm rounded-xl cursor-pointer peer-checked:[&_.active]:block dark:bg-dark3"
                                    >
                                        <div class="mb-4 text-sm">Weekly</div>
                                        <h2
                                            class="text-3xl font-bold text-black relative px-2 dark:text-white"
                                        >
                                            <span
                                                class="text-sm absolute top-1.5 -left-1 font-normal text-gray-700"
                                                >$</span
                                            >
                                            12.99
                                        </h2>
                                        <ion-icon
                                            name="checkmark-circle"
                                            class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                                        ></ion-icon>
                                    </div>
                                </label>
                            </li>
                            <li class="lg:w-1/3 w-1/2 pr-[10px]">
                                <label for="monthly">
                                    <input
                                        type="radio"
                                        name="radio-membership"
                                        id="monthly"
                                        class="peer appearance-none hidden"
                                    />
                                    <div
                                        class="relative p-4 bg-white shadow -sm rounded-xl cursor-pointer peer-checked:[&_.active]:block dark:bg-dark3 ring ring-blue-600 ring-offset-2 dark:ring-offset-slate-900"
                                    >
                                        <div class="mb-4 text-sm">Monthly</div>
                                        <h2
                                            class="text-3xl font-bold text-black relative px-2 dark:text-white"
                                        >
                                            <span
                                                class="text-xs absolute top-1.5 -left-1 font-normal text-gray-400"
                                                >$</span
                                            >
                                            32.99
                                        </h2>
                                        <ion-icon
                                            name="checkmark-circle"
                                            class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                                        ></ion-icon>
                                    </div>
                                </label>
                            </li>
                            <li class="lg:w-1/3 w-1/2 pr-[10px]">
                                <label for="yearly">
                                    <input
                                        type="radio"
                                        name="radio-membership"
                                        id="yearly"
                                        class="peer appearance-none hidden"
                                    />
                                    <div
                                        class="relative p-4 bg-white shadow -sm rounded-xl cursor-pointer peer-checked:[&_.active]:block dark:bg-dark3"
                                    >
                                        <div class="mb-4 text-sm">Yearly</div>
                                        <h2
                                            class="text-3xl font-bold text-black relative px-2 dark:text-white"
                                        >
                                            <span
                                                class="text-xs absolute top-1.5 -left-1 font-normal text-gray-400"
                                                >$</span
                                            >
                                            62.99
                                        </h2>
                                        <ion-icon
                                            name="checkmark-circle"
                                            class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                                        ></ion-icon>
                                    </div>
                                </label>
                            </li>
                            <li class="lg:w-1/3 w-1/2 pr-[10px]">
                                <label for="forever">
                                    <input
                                        type="radio"
                                        name="radio-membership"
                                        id="forever"
                                        class="peer appearance-none hidden"
                                    />
                                    <div
                                        class="relative p-4 bg-white shadow -sm rounded-xl cursor-pointer peer-checked:[&_.active]:block dark:bg-dark3"
                                    >
                                        <div class="mb-4 text-sm">Forever</div>
                                        <h2
                                            class="text-3xl font-bold text-black relative px-2 dark:text-white"
                                        >
                                            <span
                                                class="text-sm absolute top-1.5 -left-1 font-normal text-gray-700"
                                                >$</span
                                            >
                                            92.99
                                        </h2>
                                        <ion-icon
                                            name="checkmark-circle"
                                            class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                                        ></ion-icon>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- slide nav -->
                    <ul
                        class="flex flex-wrap justify-center my-7 uk-dotnav uk-slider-nav gap-2.5"
                    ></ul>

                    <a
                        class="hidden absolute -translate-y-1/2 bg-white rounded-full top-1/2 -left-4 flex w-8 h-8 p-2.5 place-items-center"
                        href="#"
                        uk-slidenav-previous
                        uk-slider-item="previous"
                    ></a>
                    <a
                        class="hidden absolute -right-4 -translate-y-1/2 bg-white rounded-full top-1/2 flex w-8 h-8 p-2.5 place-items-center"
                        href="#"
                        uk-slidenav-next
                        uk-slider-item="next"
                    ></a>
                </div>

                <!-- pricing lebel with out slider ( remove the hidden class)-->
                <div
                    class="grid md:grid-cols-3 grid-cols-2 gap-5 max-w-2xl mx-auto mt-10 hidden"
                >
                    <label for="monthly">
                        <input
                            type="radio"
                            name="radio"
                            id="monthly"
                            class="peer appearance-none hidden"
                            checked
                        />
                        <div
                            class="relative p-4 bg-white shadow-sm rounded-xl cursor-pointer peer-checked:[&_.active]:block"
                        >
                            <div class="mb-4 text-sm">Monthly</div>
                            <h2
                                class="text-3xl font-bold text-black relative px-2"
                            >
                                <span
                                    class="text-sm absolute top-1.5 -left-1 font-normal text-gray-700"
                                    >$</span
                                >
                                12.99
                            </h2>
                            <ion-icon
                                name="checkmark-circle"
                                class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                            ></ion-icon>
                        </div>
                    </label>
                    <label for="yearly">
                        <input
                            type="radio"
                            name="radio"
                            id="yearly"
                            class="peer appearance-none hidden"
                        />
                        <div
                            class="relative p-4 bg-white shadow-sm rounded-xl cursor-pointer peer-checked:[&_.active]:block"
                        >
                            <div class="mb-4 text-sm">Yearly</div>
                            <h2
                                class="text-3xl font-bold text-black relative px-2"
                            >
                                <span
                                    class="text-sm absolute top-1.5 -left-1 font-normal text-gray-700"
                                    >$</span
                                >
                                32.99
                            </h2>
                            <ion-icon
                                name="checkmark-circle"
                                class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                            ></ion-icon>
                        </div>
                    </label>
                    <label for="forever">
                        <input
                            type="radio"
                            name="radio"
                            id="forever"
                            class="peer appearance-none hidden"
                        />
                        <div
                            class="relative p-4 bg-white shadow-sm rounded-xl cursor-pointer peer-checked:[&_.active]:block"
                        >
                            <div class="mb-4 text-sm">Forever</div>
                            <h2
                                class="text-3xl font-bold text-black relative px-2"
                            >
                                <span
                                    class="text-sm absolute top-1.5 -left-1 font-normal text-gray-700"
                                    >$</span
                                >
                                92.99
                            </h2>
                            <ion-icon
                                name="checkmark-circle"
                                class="hidden active absolute top-0 right-0 m-4 text-2xl text-blue-600 uk-animation-scale-up"
                            ></ion-icon>
                        </div>
                    </label>
                </div>

                <div
                    class="md:p-8 p-5 bg-white shadow-sm rounded-xl mt-16 dark:bg-dark3"
                >
                    <h1
                        class="text-base font-medium text-black dark:text-white"
                    >
                        Why Choose Premium Membership
                    </h1>

                    <div
                        class="text-sm text-gray-500 grid md:grid-cols-2 grid-cols-3 gap-10 mt-8 dark:text-white/80"
                    >
                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="camera"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-sky-100 text-sky-500 dark:bg-sky-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Stories
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Post moments your everyday life that
                                    disappear after 24 hours
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="image"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-teal-100 text-teal-500 dark:bg-teal-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Images
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    You can upload Unlimited photes and share
                                    with your friends
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="chatbox"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-orange-100 text-orange-500 dark:bg-orange-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Messages
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Send photos, videos, and messages privately
                                    to your friends or groups
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="videocam"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-pink-100 text-pink-500 dark:bg-pink-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Shorts
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Create and share short, entertaining videos
                                    with music, filters, and effects
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="compass"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-purple-100 text-purple-500 dark:bg-purple-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Explore
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Discover content and creators based on their
                                    interests
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="bookmark"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-green-100 text-green-500 dark:bg-green-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Bookmark
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Create collections of saved posts based on
                                    themes, topics, or categories.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="shield"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-red-100 text-red-500 dark:bg-red-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Privacy
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Make your account visible only to people who
                                    follow you
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 max-md:items-center max-md:flex-col"
                        >
                            <ion-icon
                                name="cart"
                                class="flex shrink-0 p-2 text-2xl rounded-full bg-sky-100 text-sky-500 dark:bg-sky-500/20"
                            ></ion-icon>
                            <div>
                                <h5
                                    class="text-black text-base font-medium dark:text-white"
                                >
                                    Shopping
                                </h5>
                                <p class="mt-1 max-md:hidden">
                                    Browse and buy products from your favorite
                                    brands and creators
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-10 flex justify-between">
                    <p
                        class="max-w-xl mx-auto text-center text-sm text-gray-500dark:text-white/80"
                    >
                        Socialite Premium is the ultimate way to enhance your
                        Socialite experience and connect with your passions. Try
                        it free for 30 days and cancel anytime.
                    </p>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
