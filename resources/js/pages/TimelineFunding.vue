<template>
    <main
        id="site__main"
        class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]"
    >
        <div class="max-w-[1065px] mx-auto">
            <!-- cover  -->
            <div
                class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2"
            >
                <!-- cover -->
                <div class="relative overflow-hidden lg:h-60 h-44 w-full">
                    <img
                        src="/public/images/group/group-cover.jpg"
                        alt=""
                        class="h-full w-full object-cover inset-0"
                    />

                    <!-- overly -->
                    <div
                        class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"
                    ></div>
                </div>

                <div class="lg:p-5 p-3 lg:px-10 pb-8">
                    <div class="flex flex-col justify-center -mt-20">
                        <div class="relative h-20 w-20 mb-4 z-10">
                            <div
                                class="relative overflow-hidden rounded-full md:border-[2px] border-gray-100 shrink-0 dark:border-slate-900 shadow"
                            >
                                <img
                                    src="/public/images/group/group-avature.jpg"
                                    alt=""
                                    class="h-full w-full object-cover inset-0"
                                />
                            </div>
                        </div>

                        <div
                            class="flex lg:items-end justify-between max-md:flex-col lg:pb-3"
                        >
                            <div>
                                <h3
                                    class="md:text-2xl text-base md:font-semibold font-medium text-black dark:text-white"
                                >
                                    Racing To End Duchenne
                                </h3>
                                <div
                                    class="font-normal text-gray-500 mt-2 text-sm dark:text-white/70"
                                >
                                    Fundraiser for
                                    <a
                                        href="#"
                                        class="font-normal text-gray-800 hover:text-blue-600 dark:text-white"
                                    >
                                        Parent Project Muscular Dystrophy</a
                                    >
                                    by
                                    <a
                                        href="#"
                                        class="font-medium text-gray-800 hover:text-blue-600 dark:text-white"
                                    >
                                        Jennifer Miller Tullio</a
                                    >
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-4 lg:mt-1 mt-4 max-md:w-full"
                            >
                                <button
                                    class="button bg-primary text-white text-sm py-2 !px-6 shadow max-md:flex-1"
                                >
                                    Donate
                                </button>
                                <button
                                    type="button"
                                    class="button bg-secondery text-sm py-2 !px-6 max-md:flex-1"
                                >
                                    Share
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col"
                id="js-oversized"
            >
                <div class="flex-1 space-y-4">
                    <div class="box p-5 px-6 relative">
                        <h3
                            class="font-semibold text-lg text-black dark:text-white"
                        >
                            Goal
                        </h3>

                        <div class="mt-3">
                            <div class="text-blue-500 font-normal mb-2.5">
                                <span> 2,429</span> <span> of</span>
                                <span> 32,000</span> Raised
                            </div>
                            <div
                                class="bg-gray-100 rounded-2xl h-2 w-full relative overflow-hidden"
                            >
                                <div class="bg-blue-600 w-2/3 h-full"></div>
                            </div>
                        </div>

                        <h3 class="text-sm mt-5">
                            Raised by 98 people in 719 days
                        </h3>

                        <p class="card-list-text hidden">620 Donated</p>
                    </div>

                    <div class="box p-5 px-6 relative">
                        <h3
                            class="font-semibold text-lg text-black dark:text-white"
                        >
                            About
                        </h3>

                        <div
                            class="space-y-4 leading-7 tracking-wide mt-4 text-black text-sm dark:text-white"
                        >
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat
                                volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat
                                volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat
                            </p>
                        </div>
                    </div>

                    <!-- comments -->
                    <div class="box p-5 px-6 relative">
                        <h3
                            class="font-semibold text-lg text-black dark:text-white"
                        >
                            Discussions
                        </h3>

                        <div
                            class="text-sm font-normal space-y-4 relative mt-4"
                        >
                            <div class="flex items-start gap-3 relative">
                                <a href="timeline.html">
                                    <img
                                        src="/public/images/avatars/avatar-3.jpg"
                                        alt=""
                                        class="w-6 h-6 mt-1 rounded-full"
                                    />
                                </a>
                                <div class="flex-1">
                                    <a
                                        href="timeline.html"
                                        class="text-black font-medium inline-block dark:text-white"
                                    >
                                        Monroe Parker
                                    </a>
                                    <p class="mt-0.5">
                                        What a beautiful photo! I love it. 😍
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 relative">
                                <a href="timeline.html">
                                    <img
                                        src="/public/images/avatars/avatar-2.jpg"
                                        alt=""
                                        class="w-6 h-6 mt-1 rounded-full"
                                    />
                                </a>
                                <div class="flex-1">
                                    <a
                                        href="timeline.html"
                                        class="text-black font-medium inline-block dark:text-white"
                                    >
                                        John Michael
                                    </a>
                                    <p class="mt-0.5">
                                        You captured the moment.😎
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 relative">
                                <a href="timeline.html">
                                    <img
                                        src="/public/images/avatars/avatar-5.jpg"
                                        alt=""
                                        class="w-6 h-6 mt-1 rounded-full"
                                    />
                                </a>
                                <div class="flex-1">
                                    <a
                                        href="timeline.html"
                                        class="text-black font-medium inline-block dark:text-white"
                                    >
                                        James Lewis
                                    </a>
                                    <p class="mt-0.5">
                                        What a beautiful photo! I love it. 😍
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 relative">
                                <a href="timeline.html">
                                    <img
                                        src="/public/images/avatars/avatar-4.jpg"
                                        alt=""
                                        class="w-6 h-6 mt-1 rounded-full"
                                    />
                                </a>
                                <div class="flex-1">
                                    <a
                                        href="timeline.html"
                                        class="text-black font-medium inline-block dark:text-white"
                                    >
                                        Martin Gray
                                    </a>
                                    <p class="mt-0.5">
                                        You captured the moment.😎
                                    </p>
                                </div>
                            </div>
                            <div>
                                <button
                                    type="button"
                                    class="flex items-center gap-1.5 text-blue-500 hover:text-blue-500 my-5"
                                >
                                    <ion-icon
                                        name="chevron-down-outline"
                                        class="ml-auto duration-200 group-aria-expanded:rotate-180"
                                    ></ion-icon>
                                    More Comment
                                </button>
                            </div>
                        </div>

                        <!-- add comment -->
                        <div
                            class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 -m-6 mt-0 bg-secondery/60 dark:border-slate-700/40"
                        >
                            <img
                                src="/public/images/avatars/avatar-7.jpg"
                                alt=""
                                class="w-6 h-6 rounded-full"
                            />

                            <div class="flex-1 relative overflow-hidden h-10">
                                <textarea
                                    placeholder="Add Comment...."
                                    rows="1"
                                    class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"
                                ></textarea>

                                <div
                                    class="!top-2 pr-2"
                                    uk-drop="pos: bottom-right; mode: click"
                                >
                                    <div
                                        class="flex items-center gap-2"
                                        uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                            class="w-6 h-6 fill-sky-600"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            class="w-5 h-5 fill-pink-600"
                                        >
                                            <path
                                                d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"
                            >
                                Replay
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:w-[400px]">
                    <div
                        class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                        uk-sticky="media: 1024; end: #js-oversized; offset: 80"
                    >
                        <div class="box p-5 px-6 pr-0">
                            <h3
                                class="font-semibold text-lg text-black dark:text-white"
                            >
                                Fundraiser Progress
                            </h3>

                            <div class="grid grid-cols-3 gap-2 text-sm mt-4">
                                <div>
                                    <h3
                                        class="sm:text-xl sm:font-semibold mt-1 text-black dark:text-white text-base font-normal"
                                    >
                                        162
                                    </h3>
                                    <p class="mt-0.5">Donated</p>
                                </div>
                                <div>
                                    <h3
                                        class="sm:text-xl sm:font-semibold mt-1 text-black dark:text-white text-base font-normal"
                                    >
                                        4,6K
                                    </h3>
                                    <p class="mt-0.5">Invited</p>
                                </div>
                                <div>
                                    <h3
                                        class="sm:text-xl sm:font-semibold mt-1 text-black dark:text-white text-base font-normal"
                                    >
                                        1,4K
                                    </h3>
                                    <p class="mt-0.5">Shared</p>
                                </div>
                            </div>
                        </div>

                        <div class="box p-5 px-6">
                            <div
                                class="flex items-baseline justify-between text-black dark:text-white"
                            >
                                <h3 class="font-bold text-base">
                                    Invite friends
                                </h3>
                                <a href="#" class="text-sm text-blue-500"
                                    >See all</a
                                >
                            </div>

                            <div class="side-list">
                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img
                                            src="/public/images/avatars/avatar-3.jpg"
                                            alt=""
                                            class="side-list-image rounded-full"
                                        />
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            ><h4 class="side-list-title">
                                                Monroe Parker
                                            </h4></a
                                        >
                                        <div class="side-list-info">Turkey</div>
                                    </div>
                                    <button class="button border">
                                        Invite
                                    </button>
                                </div>

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img
                                            src="/public/images/avatars/avatar-4.jpg"
                                            alt=""
                                            class="side-list-image rounded-full"
                                        />
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            ><h4 class="side-list-title">
                                                Martin Gray
                                            </h4></a
                                        >
                                        <div class="side-list-info">Dubai</div>
                                    </div>
                                    <button class="button border">
                                        Invite
                                    </button>
                                </div>

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img
                                            src="/public/images/avatars/avatar-5.jpg"
                                            alt=""
                                            class="side-list-image rounded-full"
                                        />
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            ><h4 class="side-list-title">
                                                James Lewis
                                            </h4></a
                                        >
                                        <div class="side-list-info">London</div>
                                    </div>
                                    <button class="button border">
                                        Invite
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="box p-5 px-6 space-y-4">
                            <h3 class="font-bold text-base text-black">
                                Created by
                            </h3>

                            <div class="side-list-item">
                                <a href="timeline.html">
                                    <img
                                        src="/public/images/avatars/avatar-7.jpg"
                                        alt=""
                                        class="side-list-image rounded-full"
                                    />
                                </a>
                                <div class="flex-1">
                                    <a href="timeline.html"
                                        ><h4 class="side-list-title">
                                            Maria Gray
                                        </h4></a
                                    >
                                    <div class="side-list-info">Turkey</div>
                                </div>
                            </div>

                            <ul
                                class="text-gray-600 space-y-4 text-sm dark:text-white/80"
                            >
                                <li class="flex items-center gap-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                                        ></path>
                                    </svg>
                                    <div>
                                        <span
                                            class="font-semibold text-black dark:text-white"
                                        >
                                            3,240
                                        </span>
                                        friends
                                    </div>
                                </li>
                                <li class="flex items-center gap-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"
                                        ></path>
                                    </svg>
                                    <div>
                                        on Socialite since
                                        <span
                                            class="font-semibold text-black dark:text-white"
                                        >
                                            2014</span
                                        >
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="box p-5 px-6">
                            <div
                                class="flex items-baseline justify-between text-black dark:text-white"
                            >
                                <h3 class="font-bold text-base">
                                    Related funds
                                </h3>
                                <a href="#" class="text-sm text-blue-500"
                                    >See all</a
                                >
                            </div>

                            <div>
                                <div class="flex space-x-5 mt-5">
                                    <div
                                        class="w-28 max-h-ful l h-20 flex-shrink-0 rounded-lg relative"
                                    >
                                        <img
                                            src="/public/images/funding/funder-3.jpg"
                                            class="absolute w-full h-full inset-0 rounded-lg object-cover"
                                            alt=""
                                        />
                                    </div>
                                    <div class="flex-1">
                                        <a
                                            href="timeline-group.html"
                                            class="font-medium capitalize line-clamp-2 text-black text-sm dark:text-white"
                                        >
                                            Naveen's Boston Marathon Charles
                                            River Marathon
                                        </a>

                                        <div
                                            class="flex items-center gap-2 mt-1.5"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                                class="text-yellow-500 w-5"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                    clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                            <p class="text-xs text-gray-500">
                                                421 People donated
                                            </p>
                                        </div>

                                        <div
                                            class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden mt-3 .5"
                                        >
                                            <div
                                                class="bg-blue-600 w-1/3 h-full"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
