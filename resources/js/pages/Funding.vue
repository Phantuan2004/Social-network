<template>
    <main
        id="site__main"
        class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]"
    >
        <div
            class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto"
            id="js-oversized"
        >
            <div class="flex-1">
                <div class="page-heading">
                    <h1 class="page-title">Fundings</h1>

                    <nav class="nav__underline">
                        <ul
                            uk-tab
                            class="group"
                            uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"
                        >
                            <li><a href="#"> Browse Funding </a></li>
                            <li><a href="#"> My Funding </a></li>
                        </ul>
                    </nav>
                </div>

                <!-- tab 1 -->
                <nav
                    class="border-b mb-8 hidden"
                    u
                    k-sticky="cls-active: bg-sky-50/80 z-30 backdrop-blur-lg px-4 ; offset: 64; animation: uk-animation-slide-top"
                >
                    <ul
                        uk-tab
                        class="flex gap-7 text-sm text-center text-gray-600 capitalize font-semibold -mb-px dark:text-white/80"
                        uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"
                    >
                        <li><a href="#"> Suggestions </a></li>
                        <li><a href="#"> Popular </a></li>
                        <li><a href="#"> My groups </a></li>
                    </ul>
                </nav>

                <!-- founder card slider -->
                <div tabindex="-1" uk-slider="finite:true">
                    <div class="uk-slider-container pb-1">
                        <ul class="uk-slider-items grid-small">
                            <li class="sm:w-1/3 w-1/2">
                                <div class="card">
                                    <a href="timeline-funding.html">
                                        <div class="card-media h-32">
                                            <img
                                                src="/public/images/funding/funder-4.jpg"
                                                alt=""
                                            />
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="timeline-funding.html">
                                            <h4
                                                class="card-title text-sm line-clamp-2"
                                            >
                                                John's fundraiser for Hug It
                                                Forward.
                                            </h4>
                                        </a>
                                        <div
                                            class="text-blue-500 font-medium text-xs mt-3"
                                        >
                                            <span> 2,429</span>
                                            <span> of</span>
                                            <span> 32,000</span> Raised
                                        </div>
                                    </div>
                                    <div
                                        class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                    >
                                        <div
                                            class="bg-blue-600 w-1/3 h-full"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                            <li class="sm:w-1/3 w-1/2">
                                <div class="card">
                                    <a href="timeline-funding.html">
                                        <div class="card-media h-32">
                                            <img
                                                src="/public/images/funding/funder-2.jpg"
                                                alt=""
                                            />
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="timeline-funding.html">
                                            <h4
                                                class="card-title text-sm line-clamp-2"
                                            >
                                                Naveen's Boston Marathon &
                                                Charles River Marathon
                                            </h4>
                                        </a>
                                        <div
                                            class="text-blue-500 font-medium text-xs mt-3"
                                        >
                                            <span> 2,429</span>
                                            <span> of</span>
                                            <span> 32,000</span> Raised
                                        </div>
                                    </div>
                                    <div
                                        class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                    >
                                        <div
                                            class="bg-blue-600 w-1/3 h-full"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                            <li class="sm:w-1/3 w-1/2">
                                <div class="card">
                                    <a href="timeline-funding.html">
                                        <div class="card-media h-32">
                                            <img
                                                src="/public/images/funding/funder-3.jpg"
                                                alt=""
                                            />
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="timeline-funding.html">
                                            <h4
                                                class="card-title text-sm line-clamp-2"
                                            >
                                                Striding for a Cure for Cystic
                                                Fibrosis
                                            </h4>
                                        </a>
                                        <div
                                            class="text-blue-500 font-medium text-xs mt-3"
                                        >
                                            <span> 2,429</span>
                                            <span> of</span>
                                            <span> 32,000</span> Raised
                                        </div>
                                    </div>
                                    <div
                                        class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                    >
                                        <div
                                            class="bg-blue-600 w-1/3 h-full"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                            <li class="sm:w-1/3 w-1/2">
                                <div class="card">
                                    <a href="timeline-funding.html">
                                        <div class="card-media h-32">
                                            <img
                                                src="/public/images/funding/funder-4.jpg"
                                                alt=""
                                            />
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="timeline-funding.html">
                                            <h4
                                                class="card-title text-sm line-clamp-2"
                                            >
                                                John's fundraiser for Hug It
                                                Forward.
                                            </h4>
                                        </a>
                                        <div
                                            class="text-blue-500 font-medium text-xs mt-3"
                                        >
                                            <span> 2,429</span>
                                            <span> of</span>
                                            <span> 32,000</span> Raised
                                        </div>
                                    </div>
                                    <div
                                        class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                    >
                                        <div
                                            class="bg-blue-600 w-1/3 h-full"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- slide nav icons -->
                    <a
                        class="nav-prev !top-24"
                        href="#"
                        uk-slider-item="previous"
                    >
                        <ion-icon
                            name="chevron-back"
                            class="text-2xl"
                        ></ion-icon>
                    </a>
                    <a class="nav-next !top-24" href="#" uk-slider-item="next">
                        <ion-icon
                            name="chevron-forward"
                            class="text-2xl"
                        ></ion-icon
                    ></a>
                </div>

                <!-- sub heading -->
                <div
                    class="flex items-center justify-between text-black dark:text-white py-3 mt-10"
                >
                    <h3 class="text-xl font-semibold">
                        Your Friends also following
                    </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>

                <!-- card list founder -->
                <div class="box p-5 mt-6">
                    <div class="card-list">
                        <a href="timeline-funding.html">
                            <div class="card-list-media sm:w-56 sm:h-full">
                                <img
                                    src="/public/images/funding/funder-2.jpg"
                                    alt=""
                                />
                            </div>
                        </a>
                        <div class="card-list-body">
                            <a href="timeline-funding.html">
                                <h3 class="card-list-title">
                                    Naveen's Boston Marathon & Charles River
                                    Marathon
                                </h3>
                            </a>
                            <div class="card-list-text">
                                <p>
                                    consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad minim veniam,
                                </p>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="text-blue-500 font-medium text-sm mb-2"
                                >
                                    <span> 2,429</span> <span> of</span>
                                    <span> 32,000</span> Raised
                                </div>
                                <div
                                    class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                >
                                    <div class="bg-blue-600 w-1/3 h-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="card-list-divider" />

                    <div class="card-list">
                        <a href="timeline-funding.html">
                            <div class="card-list-media sm:w-56 sm:h-full">
                                <img
                                    src="/public/images/funding/funder-3.jpg"
                                    alt=""
                                />
                            </div>
                        </a>
                        <div class="card-list-body">
                            <a href="timeline-funding.html">
                                <h3 class="card-list-title">
                                    Striding for a Cure for Cystic Fibrosis
                                </h3>
                            </a>
                            <div class="card-list-text">
                                <p>
                                    consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad minim veniam,
                                </p>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="text-blue-500 font-medium text-sm mb-2"
                                >
                                    <span> 2,429</span> <span> of</span>
                                    <span> 32,000</span> Raised
                                </div>
                                <div
                                    class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                >
                                    <div class="bg-blue-600 w-1/3 h-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="card-list-divider" />

                    <div class="card-list">
                        <a href="timeline-funding.html">
                            <div class="card-list-media sm:w-56 sm:h-full">
                                <img
                                    src="/public/images/funding/funder-4.jpg"
                                    alt=""
                                />
                            </div>
                        </a>
                        <div class="card-list-body">
                            <a href="timeline-funding.html">
                                <h3 class="card-list-title">
                                    John's fundraiser for Hug It Forward.
                                </h3>
                            </a>
                            <div class="card-list-text">
                                <p>
                                    consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad minim veniam,
                                </p>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="text-blue-500 font-medium text-sm mb-2"
                                >
                                    <span> 2,429</span> <span> of</span>
                                    <span> 32,000</span> Raised
                                </div>
                                <div
                                    class="bg-secondery rounded-2xl h-1 w-full relative overflow-hidden"
                                >
                                    <div class="bg-blue-600 w-1/3 h-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center my-6">
                    <button
                        type="button"
                        class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2"
                    >
                        Load more...
                    </button>
                </div>
            </div>

            <!-- sidebar -->
            <div class="2xl:w-[380px] lg:w-[330px] w-full">
                <div
                    class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80;bottom:true"
                >
                    <div class="box overflow-hidden">
                        <div class="w-full h-24 relative">
                            <img
                                src="/public/images/funding/funder-1.png"
                                alt=""
                                class="w-full h-full absolute object-cover"
                            />
                        </div>

                        <div class="p-5">
                            <h3 class="font-bold text-base">
                                Create a fundraiser
                            </h3>

                            <p class="text-sm mt-1">
                                Fundraisers provide a simple way to stand with
                                your friends, family, and the causes that hold
                                significance for you such as:
                            </p>

                            <div class="mt-4 text-sm font-medium space-y-2">
                                <div class="flex items-center gap-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                            clip-rule="evenodd"
                                        ></path>
                                        <path
                                            d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z"
                                        ></path>
                                    </svg>
                                    Medical
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z"
                                        />
                                        <path
                                            d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z"
                                        />
                                        <path
                                            d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z"
                                        />
                                    </svg>
                                    Education
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"
                                        />
                                    </svg>
                                    Nunprofits and more
                                </div>
                            </div>

                            <a
                                href="#"
                                class="text-center text-sm text-blue-500"
                            >
                                <div
                                    class="flex items-center justify-center gap-2 mt-3"
                                >
                                    Raise Money
                                    <ion-icon
                                        name="arrow-forward-outline"
                                        class="flex"
                                    ></ion-icon>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Groups You Manage  -->
                    <div
                        class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2"
                    >
                        <h3 class="font-semibold text-base">
                            We're here to help
                        </h3>
                        <p class="text-sm mt-1">
                            Answers to common questions about fundraisers
                        </p>

                        <ul
                            class="relative space-y-2.5 text-sm mt-3"
                            uk-accordion="active: 0"
                        >
                            <li class="rounded-md bg-secondery">
                                <a
                                    class="flex items-center justify-between p-3 py-2 font-semibold group text-black dark:text-white uk-accordion-title"
                                    href="#"
                                >
                                    Who can create fundraiser?
                                    <ion-icon
                                        name="chevron-down-outline"
                                        class="duration-200 -mr-0.5 text-base group-aria-expanded:rotate-180"
                                    ></ion-icon>
                                </a>
                                <div
                                    class="p-3 pt-0 dark:text-white/80 uk-accordion-content"
                                >
                                    <p>
                                        Anyone who is passionate about a cause
                                        can create a fundraiser. This includes
                                        individuals, groups, and organizations
                                    </p>
                                    <a
                                        href="#"
                                        class="block font-medium mt-3 text-blue-600"
                                    >
                                        See full article</a
                                    >
                                </div>
                            </li>
                            <li class="rounded-md bg-secondery">
                                <a
                                    class="flex items-center justify-between p-3 py-2 font-semibold group text-black dark:text-white uk-accordion-title"
                                    href="#"
                                >
                                    How do taxes work?
                                    <ion-icon
                                        name="chevron-down-outline"
                                        class="duration-200 -mr-0.5 text-base group-aria-expanded:rotate-180"
                                    ></ion-icon>
                                </a>
                                <div
                                    class="p-3 pt-0 dark:text-white/80 uk-accordion-content"
                                >
                                    <p>
                                        There is no fee to start or manage your
                                        fundraiser. The transaction fee covers
                                        the costs of credit and debit charges,
                                        safely delivering donations,
                                    </p>
                                    <a
                                        href="#"
                                        class="block font-medium mt-3 text-blue-600"
                                    >
                                        See full article</a
                                    >
                                </div>
                            </li>
                            <li class="rounded-md bg-secondery">
                                <a
                                    class="flex items-center justify-between p-3 py-2 font-semibold group text-black dark:text-white uk-accordion-title"
                                    href="#"
                                >
                                    How do fees work?
                                    <ion-icon
                                        name="chevron-down-outline"
                                        class="duration-200 -mr-0.5 text-base group-aria-expanded:rotate-180"
                                    ></ion-icon>
                                </a>
                                <div
                                    class="p-3 pt-0 dark:text-white/80 uk-accordion-content"
                                >
                                    <p>
                                        Fundraising tax laws define donations as
                                        gifts, which recipients do not have to
                                        report on their tax returns.
                                    </p>
                                    <a
                                        href="#"
                                        class="block font-medium mt-3 text-blue-600"
                                    >
                                        See full article</a
                                    >
                                </div>
                            </li>
                        </ul>
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
