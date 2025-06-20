<template>
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
 

            <div class="max-w-2xl mx-auto">

                <!-- heading title -->
                <div class="page__heading pb-8">
                    <a href="#" class="text-blue-500 text-sm">
                        <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon> Back
                    </a>
                    <h1 class="font-bold text-xl"> Components </h1>
                </div>

                <!--  navigation -->
                <div class="bg-white rounded-xl shadow dark:bg-dark2" uk-sticky="offset:60; cls-inactive:rounded-xl; cls-active: rounded-b-xl z-50">

                    <div class="relative" tabindex="-1" uk-slider="finite: true;sets: true">

                        <div class="p-3 overflow-hidden uk-slider-container">
            
                            <ul class="uk-slider-items w-[calc(100%+10px)] capitalize text-sm font-medium" uk-switcher="connect: #comp_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">accordion</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">alert</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">Countdown</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">drop</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">dropdown</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">modal</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">lightbox</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">scrollspy</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">slider</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">slideshow</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">tabs</a> </li>
                                <li class="w-auto pr-2"> <a href="#" class="inline-block px-4 py-2 rounded-lg aria-expanded:bg-sky-100/70 aria-expanded:text-sky-600 aria-expanded:dark:bg-slate-700/60 aria-expanded:dark:text-white">tooltip</a> </li>
                            </ul>
                        
                        </div>
                                
                        <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-12 p-2.5 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                        <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-12 p-2.5 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="next">  <ion-icon name="chevron-forward" class="text-2xl"></ion-icon> </a>
                    
                    </div>

                </div>

                <!--  contents -->
                <div class="uk-switcher mt-6 mb-20" id="comp_tab">
                    
                  
                    <!-- accordion -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Accordion </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-slate-700/80"> Code </button> 
                            </div>
    
                            <div class="uk-switcher bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <!-- Preview -->
                                        <ul class="relative space-y-3" uk-accordion="active: 0">
                                            <li class="uk-open">
                                                <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                    Item title One
                                                    <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                    Item title two
                                                    <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                    Item title three
                                                    <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                                </div>
                                            </li>
                                        </ul> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                <!-- html code -->
                                <div class="relative uk-transition-toggle">

                                    <div class="w-full overflow-y-auto lg:h-80 code-editor -mb-8">
                                    
                                        <pre id="accordion_1" class="brush: html">
                                        
                                            <ul class="relative space-y-3" uk-accordion="active: 0">
                                                <li class="uk-open">
                                                    <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                        Item title One
                                                        <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                        Item title two
                                                        <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                        Item title three
                                                        <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                                    </div>
                                                </li>
                                            </ul> 
    
                                        </pre>
    
                                    </div>

                                    <div class="absolute z-40 bottom-11 right-3 bg-white/10 text-white rounded-full uk-transition-slide-bottom-small backdrop-blur px-2.5 py-1.5 font-semibold text-sm">
                                        <div class="relative z-10 overflow-hidden ease-linear duration-500 flex items-center gap-1 group pr-1">
                                            <input onclick="selectElementContents( document.getElementById('accordion_1') );" type="button" class="absolute inset-0 z-10 w-full h-full cursor-pointer">
                                            <svg class="group-aria-expanded:-translate-y-6 w-5 h-5 text-white hover:text-white transition-all" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Copy
                                        </div>
                                        <div class="!top-[5px] " uk-drop="animation: uk-animation-slide-bottom-small;mode:click"> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> </div>
                                    </div>

                                </div>

                            </div>
    
                        </div>
 

                        <!-- multiple -->
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Multiple </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-slate-700/80"> Code </button> 
                            </div>
    
                            <div class="uk-switcher bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <!-- Preview -->
                                        <ul class="relative space-y-3" uk-accordion="active: 0; multiple: true">
                                            <li class="uk-open">
                                                <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                    Item title One
                                                    <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                    Item title two
                                                    <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                    Item title three
                                                    <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                                </div>
                                            </li>
                                        </ul> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                <!-- html code -->
                                <div class="relative uk-transition-toggle">

                                    <div class="w-full overflow-y-auto lg:h-80 code-editor -mb-8">
                                    
                                        <pre id="accordion_1" class="brush: html">
                                        
                                            <ul class="relative space-y-3" uk-accordion="active: 0; multiple: true"">
                                                <li class="uk-open">
                                                    <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                        Item title One
                                                        <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                        Item title two
                                                        <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                                                        Item title three
                                                        <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="p-2 dark:text-white/80 uk-accordion-content">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                                    </div>
                                                </li>
                                            </ul> 
    
                                        </pre>
    
                                    </div>

                                    <div class="absolute z-40 bottom-11 right-3 bg-white/10 text-white rounded-full uk-transition-slide-bottom-small backdrop-blur px-2.5 py-1.5 font-semibold text-sm">
                                        <div class="relative z-10 overflow-hidden ease-linear duration-500 flex items-center gap-1 group pr-1">
                                            <input onclick="selectElementContents( document.getElementById('accordion_1') );" type="button" class="absolute inset-0 z-10 w-full h-full cursor-pointer">
                                            <svg class="group-aria-expanded:-translate-y-6 w-5 h-5 text-white hover:text-white transition-all" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Copy
                                        </div>
                                        <div class="!top-[5px] " uk-drop="animation: uk-animation-slide-bottom-small;mode:click"> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> </div>
                                    </div>

                                </div>

                            </div>
    
                        </div>

                        
                        <!-- Navs -->
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Navs </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-slate-700/80"> Code </button> 
                            </div>
    
                            <div class="uk-switcher bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <nav class="w-64 mx-auto p-4 bg-white shadow-md rounded-lg dark:bg-slate-600"> 
                                            <ul class="space-y-0 text-sm !text-black font-medium dark:text-white" uk-nav="multiple: true">
                                                <li><a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md"> <ion-icon name="grid"></ion-icon> Home </a></li>
                                                <li><a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md"> <ion-icon name="people"></ion-icon> Downloads </a></li>
                                                <li class="uk-parent">
                                                    <a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md group"> 
                                                        Parent 
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-aria-expanded:rotate-180 duration-200 ml-auto">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                        </svg> 
                                                    </a>
                                                    <ul class="pl-4 my-1 space-y-0 text-sm">
                                                        <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                        <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                        <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                    </ul>
                                                </li> 
                                                <li class="uk-parent">
                                                    <a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md group"> 
                                                        Parent 
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-aria-expanded:rotate-180 duration-200 ml-auto">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                        </svg> 
                                                    </a>
                                                    <ul class="pl-4 my-1 space-y-0 text-sm">
                                                        <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                        <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                        <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </nav>
                                        
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                <!-- html code -->
                                <div class="relative uk-transition-toggle">

                                    <div class="w-full overflow-y-auto lg:h-80 code-editor -mb-8">
                                    
                                        <pre id="html_1" class="brush: html">
                                        
                                            <nav class="w-64 mx-auto p-4 bg-white shadow-md rounded-lg dark:bg-slate-600"> 
                                                <ul class="space-y-0 text-sm !text-black font-medium dark:text-white" uk-nav="multiple: true">
                                                    <li><a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md"> <ion-icon name="grid"></ion-icon> Home </a></li>
                                                    <li><a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md"> <ion-icon name="people"></ion-icon> Downloads </a></li>
                                                    <li class="uk-parent">
                                                        <a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md group"> 
                                                            Parent 
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-aria-expanded:rotate-180 duration-200 ml-auto">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                            </svg> 
                                                        </a>
                                                        <ul class="pl-4 my-1 space-y-0 text-sm">
                                                            <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                            <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                            <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                        </ul>
                                                    </li> 
                                                    <li class="uk-parent">
                                                        <a href="#" class="flex items-center gap-1.5 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 rounded-md group"> 
                                                            Parent 
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-aria-expanded:rotate-180 duration-200 ml-auto">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                            </svg> 
                                                        </a>
                                                        <ul class="pl-4 my-1 space-y-0 text-sm">
                                                            <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                            <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                            <li><a href="#" class="hover:bg-gray-100 dark:hover:bg-slate-700 block px-2 py-1.5 rounded-md">Sub item</a></li>
                                                        </ul>
                                                    </li> 
                                                </ul>
                                            </nav> 
    
                                        </pre>
    
                                    </div>

                                    <div class="absolute z-40 bottom-11 right-3 bg-white/10 text-white rounded-full uk-transition-slide-bottom-small backdrop-blur px-2.5 py-1.5 font-semibold text-sm">
                                        <div class="relative z-10 overflow-hidden ease-linear duration-500 flex items-center gap-1 group pr-1">
                                            <input onclick="selectElementContents( document.getElementById('html_1') );" type="button" class="absolute inset-0 z-10 w-full h-full cursor-pointer">
                                            <svg class="group-aria-expanded:-translate-y-6 w-5 h-5 text-white hover:text-white transition-all" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Copy
                                        </div>
                                        <div class="!top-[5px] " uk-drop="animation: uk-animation-slide-bottom-small;mode:click"> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> </div>
                                    </div>

                                </div>

                            </div>
    
                        </div>

                    </div>
 

                    <!-- alert -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Alert </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md  bg-white  shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>


                            <div class=" bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20 py-10 px-6">
        
                                        <div class="space-y-4">
                                        
                                            <div uk-alert>
                                                <div class="p-2 border bg-green-50 border-green-500/30 rounded-xl dark:bg-slate-700">
                                                    <div class="inline- flex items-center justify-between gap-6">
                                  
                                                        <!-- icon -->
                                                        <div class="p-1 text-white bg-green-500 shadow rounded-xl shadow-green-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                  
                                                        <!-- text -->
                                                        <div class="text-base font-semibold text-green-700"> Successfull taost </div>
                                  
                                                        <!-- icon close -->
                                                        <button type="button" class="flex p-1 text-gray-600 rounded-lg hover:bg-black/5 ml-auto uk-alert-close">
                                                            <ion-icon name="close" class="text-xl"></ion-icon>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div uk-alert>
                                                <div class="p-2 border bg-blue-50 border-blue-500/30 rounded-xl dark:bg-slate-700">
                                                    <div class="flex items-center justify-between gap-6">
                                  
                                                        <!-- icon -->
                                                        <div class="p-1 text-white bg-blue-500 shadow rounded-xl shadow-blue-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                  
                                                        <div class="text-base font-semibold text-blue-700"> Successfull taost </div>
                                  
                                                        <!-- icon close -->
                                                        <button type="button" class="flex p-1 text-gray-600 rounded-lg hover:bg-black/5 ml-auto uk-alert-close">
                                                            <ion-icon name="close" class="text-xl"></ion-icon>
                                                        </button>
                                  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div uk-alert>
                                                <div class="p-2 border bg-yellow-50 border-yellow-500/30 rounded-xl dark:bg-slate-700">
                                                    <div class="flex items-center justify-between gap-6">
                                                        
                                                        <!-- icon -->
                                                        <div class="p-1 text-white bg-yellow-500 shadow rounded-xl shadow-yellow-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                      
                                                        <!-- text -->
                                                        <div class="text-base font-semibold text-yellow-700"> Warning taost </div>
                                                        
                                                        <!-- icon close -->
                                                        <button type="button" class="flex p-1 text-gray-600 rounded-lg hover:bg-black/5 ml-auto uk-alert-close">
                                                            <ion-icon name="close" class="text-xl"></ion-icon>
                                                        </button>
                                  
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>

                            </div>
    
                        </div>
 

                    </div> 


                    <!-- countdown -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Countdown </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20 py-10 flex justify-center">
        
                                        <!-- Preview -->
                                        <div    uk-countdown="date: 2023-07-30T08:36:57+00:00"
                                                class="flex items-center gap-2 text-4xl font-semibold text-gray-800 dark:text-white">
                                
                                            <div class="uk-countdown-days"></div>:
                                            <div class="uk-countdown-hours"></div>:
                                            <div class="uk-countdown-minutes"></div>:
                                            <div class="uk-countdown-seconds"></div>
                                
                                        </div> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                               

                            </div>
    
                        </div>
 

                    </div>


                    <!-- drop -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Drop </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="pt-6 pb-28 flex justify-center">
 
                                            <button class="flex items-center px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700 group" type="button">Click me  <ion-icon name="chevron-down-outline" class="ml-2 text-lg duration-200 group-aria-expanded:rotate-180"></ion-icon> </button>

                                            <div    class="p-4 bg-white rounded-lg shadow-md w-60 dark:bg-slate-700"
                                                    uk-drop="offset:10;pos: bottom-right ; animation: uk-animation-slide-bottom-small">
                                                                                    
                                                    <p class="text-gray-500 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit   </p>
                                            </div>

                                        </div>
                                                                    
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
             
                            </div>
    
                        </div>
 
                        <!-- Positions -->
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Positions </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="max-w-[560px] flex flex-col justify-between outline-dashed outline-2 outline-offset-[7px] rounded-md outline-pink-400 h-72 dark:text-white">

                                            <div class="flex justify-between">
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: bottom-left; offset:10; animation: uk-animation-slide-bottom-small" class="p-4 bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor   </div>
                                                </div>
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: bottom-center; offset:10; animation: uk-animation-slide-bottom-small" class="p-4 text-center bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div>
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: bottom-right; offset:10; animation: uk-animation-slide-bottom-small" class="p-4 text-right bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: right-center; offset:10; animation: uk-animation-slide-right-small" class="p-4 bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div> 
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: left-center;offset:10; animation: uk-animation-slide-left-small" class="p-4 bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: top-left; offset:10; animation: uk-animation-slide-top-small" class="p-4 text-left bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div>
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: top-center; offset:10; animation: uk-animation-slide-top-small" class="p-4 text-center bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div>
                                                <div>
                                                    <button class="px-4 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div uk-drop="pos: top-right; offset:10; animation: uk-animation-slide-top-small" class="p-4 text-right bg-white rounded-lg shadow-md w-60 dark:bg-slate-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  .</div>
                                                </div>
                                            </div>
                            
                                        </div>
                                                                    
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
             
                            </div>
    
                        </div>

                    </div>

                    
                    <!-- dropdown -->
                    <div class="space-y-8">

                        <!-- basic -->

                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Dropdown </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-white shadow rounded-md p-0.5 font-medium text-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="flex justify-center mb-44">
                                            <button class="flex items-center px-3 py-2 text-sm bg-white rounded-md shadow dark:text-white dark:bg-slate-700 group" type="button">
                                                Click me  <ion-icon name="chevron-down-outline" class="ml-2 text-lg duration-200 group-aria-expanded:rotate-180"></ion-icon> 
                                            </button>
                                
                                            <div  uk-dropdown="offset:10;pos: bottom-right ; animation: uk-animation-slide-bottom-small"> 
                                                <nav>
                                                    <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                    <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                    <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                     <hr>
                                                    <a href="#" class="text-red-400 hover:!bg-red-50"> <ion-icon class="text-xl" name="log-out-outline"></ion-icon>  Sing out </a>  
                                                </nav>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                             

                            </div>
    
                        </div>
 

                        <!-- Positions -->

                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Positions </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-100 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="max-w-[560px] flex flex-col justify-between outline-dashed outline-2 outline-offset-[7px] rounded-md outline-pink-400 h-72 dark:text-white">
                                            <div class="flex justify-between">
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: bottom-left;offset:10; animation: uk-animation-slide-bottom-small"> 
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: bottom-center; offset:10; animation: uk-animation-slide-bottom-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: bottom-right; offset:10; animation: uk-animation-slide-bottom-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: right-center; offset:10; animation: uk-animation-slide-right-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div> 
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: left-center; offset:10; animation: uk-animation-slide-left-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: top-left ; animation: uk-animation-slide-top-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: top-center; animation: uk-animation-slide-top-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="px-3 py-2 text-sm bg-white shadow rounded-md dark:text-white dark:bg-slate-700" type="button">Hover</button>
                                                    <div    uk-dropdown="pos: top-right; animation: uk-animation-slide-top-small">
                                                        <nav>
                                                            <a href="#"> <ion-icon class="text-xl" name="person-outline"></ion-icon>  Profile </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="mail-outline"></ion-icon>  Messages </a>  
                                                            <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Billing </a>  
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
             

                            </div>
    
                        </div>


                    </div>

                    
                    <!-- modal -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Modal</h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20 flex justify-center py-10">
        

                                        <button uk-toggle="target: #modal" class="px-4 py-2 mb-3 text-sm bg-white shadow rounded-md dark:text-white dark:bg-gray-700" type="button"> Click </button>
                                         
                                        <!-- This is the modal 11-->
                                        <div class="lg:p-20 p-10" id="modal" uk-modal>

                                            <div class="uk-modal-dialog tt relative mx-auto bg-white rounded-lg shadow-xl w-[400px]">

                                                <div class="p-6">
                                                    <h2 class="text-xl font-semibold">Headline</h2>
                                                </div>

                                                <div class="p-6 py-0">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing e ab  eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                
                                                </div>                                           
                                                
                                                <div class="flex justify-end p-6 text-sm font-medium">
                                                    <button class="px-4 py-1.5 rounded-md uk-modal-close" type="button">Cancel</button>
                                                    <button class="px-5 py-1.5 bg-gray-100 rounded-md uk-modal-close" type="button">Save</button>
                                                </div> 
                                        
                                                 <!-- close button -->
                                                <button type="button"  class="bg-white rounded-full p-2 absolute right-0 top-0 m-3 dark:bg-slate-600 uk-modal-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            
                                            </div>

                                        </div>

                                         
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
             

                            </div>
    
                        </div>
 

                        <!-- modal scrolling -->
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Scrolling </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20 flex justify-center py-10">
        
                                            
                                        <button uk-toggle="target: #scrolling" class="px-4 py-2 mb-3 text-sm bg-white shadow rounded-md dark:text-white dark:bg-gray-700" type="button"> Click </button>
                                        
                                        <!-- model scrolling -->
                                        <div class="lg:p-20 p-10" id="scrolling" uk-modal>
                                    
                                            <div class="relative mx-auto bg-white  rounded-lg shadow-xl uk-modal-dialog w-[400px]">
                                    
                                                <div class="px-6 py-4 border-b">
                                                    <h2 class="text-xl font-semibold">Headline</h2>
                                                </div>
                                                
                                                <div class="p-6 overflow-y-auto h-96" uk-overflow-auto>
                                    
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                                </div>
                                    
                                                <div class="flex justify-end p-6 text-sm font-medium px-6 py-4 border-t">
                                                    <button class="px-4 py-1.5 rounded-md uk-modal-close" type="button">Cancel</button>
                                                    <button class="px-5 py-1.5 bg-gray-100 rounded-md uk-modal-close" type="button">Save</button>
                                                </div>
                                    
                                                <!-- close button -->
                                                <button type="button"  class="bg-white rounded-full p-2 absolute right-0 top-0 m-3 dark:bg-slate-600 uk-modal-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            
                                            </div>
                                
                                        </div>


                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                

                            </div>
    
                        </div>


                    </div>

                    
                    <!-- lightbox -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Lightbox </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="relative z-20 flex justify-center py-10">
        
                                            <div uk-lightbox="">
                                                <a  href="/public/images/demos/photo3.jpg"  
                                                    class="px-4 py-2 mb-3 text-sm bg-white shadow rounded-md dark:text-white dark:bg-gray-700"
                                                    data-caption="Caption"> 

                                                    Open Lightbox
                                                </a>
                                            </div>

                                        </div>
                                            
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                 
                            </div>
    
                        </div>
 
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Multiple </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
                                        
                                        <div class="grid sm:grid-cols-2 gap-10" uk-lightbox="">
                                          <div>
                                              <a class="uk-inline" href="/public/images/demos/photo3.jpg" data-caption="Caption 1">
                                                  <img src="/public/images/demos/photo3.jpg" alt="" class="shadow rounded-md w-full h-full object-cover">
                                              </a>
                                          </div>
                                          <div>
                                              <a class="uk-inline" href="/public/images/demos/photo4.jpg" data-caption="Caption 2">
                                                  <img src="/public/images/demos/photo4.jpg" alt="" class="shadow rounded-md w-full h-full object-cover">
                                              </a>
                                          </div> 
                                        </div> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                               

                            </div>
    
                        </div>


                    </div>
 
                    
                    <!-- scrollspy -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Basic </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        

                                        <div class="grid gap-5 md:grid-cols-2 dark:text-white">
                                            <div class="p-5 bg-white shadow rounded-md dark:bg-slate-700" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                                                <h3 class="mb-2 text-base font-semibold">Left</h3>
                                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="p-5 bg-white shadow rounded-md dark:bg-slate-700" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                                                <h3 class="mb-2 text-base font-semibold">Right</h3>
                                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                         
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
             

                            </div>
    
                        </div>
 
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Groups </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class=" relative">

                                    <div class="relative z-20 p-10 max-h-80 overflow-y-auto">
        

                                        <div    class="space-y-3 text-sm font-semibold dark:text-white"  
                                                uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                        
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-1.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div> 
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-3.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div>
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-4.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div>
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-5.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div>
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-1.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div> 
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-3.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div>
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-4.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div>
                                            <div class="flex items-center gap-3 p-4 bg-white shadow rounded-md dark:bg-slate-700">
                                                <img src="/public/images/avatars/avatar-5.jpg" alt="" class="w-12 h-12 rounded-full shadow">
                                                <div class="flex-1"> Johm smith <span class="block text-xs font-medium dark:text-white/70"> Desinger</span></div> 
                                                <a href="#" class="px-3 py-1 text-sm bg-gray-200 rounded-full dark:bg-slate-600"> Message</a>
                                            </div>
                            
                                        </div>
                                         
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                 

                            </div>
    
                        </div>
  
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4">  Per Target </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        

                                        <div class="grid gap-5 md:grid-cols-2 dark:text-white" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 400; repeat:true">
                                            <div class="p-5 bg-white shadow rounded-md dark:bg-slate-700" uk-scrollspy-class="uk-animation-slide-top">
                                                <h3 class="mb-2 text-base font-semibold">Top</h3>
                                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="p-5 bg-white shadow rounded-md dark:bg-slate-700" uk-scrollspy-class="uk-animation-slide-right">
                                                <h3 class="mb-2 text-base font-semibold">Right</h3>
                                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="p-5 bg-white shadow rounded-md dark:bg-slate-700" uk-scrollspy-class="uk-animation-slide-left">
                                                <h3 class="mb-2 text-base font-semibold">Left</h3>
                                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="p-5 bg-white shadow rounded-md dark:bg-slate-700" uk-scrollspy-class="uk-animation-slide-bottom">
                                                <h3 class="mb-2 text-base font-semibold">Bottom</h3>
                                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                         
                                        
                                        <div class="max-md:hidden absolute h-0.5 -translate-x-1/2 w-96 bg-gradient-to-r via-pink-300 from-transparent to-transparent top-1/2 left-1/2"></div>
                                        <div class="max-md:hidden absolute h-0.5 rotate-90 -translate-x-1/2 w-60 bg-gradient-to-r via-pink-300 from-transparent to-transparent top-1/2 left-1/2"></div>

                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                                

                            </div>
    
                        </div>

                    </div>

                    
                    <!-- slider -->
                    <div class="space-y-8">

                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Navigation In</h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
                                        
                                        <!-- Preview -->
                                        <div class="relative" tabindex="0" uk-slider="finite: true; autoplay: true">
            
                                            <ul class="-ml-2 uk-slider-items grid-small">
                                                <li class="w-1/4">
                                                    <img src="/public/images/demos/slider1.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                </li> 
                                                <li class="w-1/4">
                                                    <img src="/public/images/demos/slider2.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                </li>
                                                <li class="w-1/4">
                                                    <img src="/public/images/demos/slider3.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                </li>
                                                <li class="w-1/4">
                                                    <img src="/public/images/demos/slider4.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                </li> 
                                                <li class="w-1/4">
                                                    <img src="/public/images/demos/slider2.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                </li>
                                            </ul>
                                         
                                            <!-- dotnav -->
                                            <ul class="flex justify-center my-5 uk-dotnav uk-slider-nav gap-2.5"></ul>
                                            
                                            <!-- navigation -->
                                            <a class="absolute -translate-y-1/2 bg-white rounded-full top-1/2 left-2 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></a>
                                            <a class="absolute right-2 -translate-y-1/2 bg-white rounded-full top-1/2 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>

                                        </div>

                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                             

                            </div>
    
                        </div>
                        
                        
                        <!-- slider navigation out -->
                        
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Navigation out</h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
                                        
                                        <!-- Preview -->
                                        <div class="relative" tabindex="0" uk-slider="finite: true; autoplay: true">

                                            <div class="overflow-hidden uk-slider-container">
                                               
                                                <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">
                                                    <li class="w-1/4 pr-2">
                                                        <img src="/public/images/demos/photo1.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                    </li> 
                                                    <li class="w-1/4 pr-2">
                                                        <img src="/public/images/demos/slider2.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                    </li>
                                                    <li class="w-1/4 pr-2">
                                                        <img src="/public/images/demos/slider3.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                    </li>
                                                    <li class="w-1/4 pr-2">
                                                        <img src="/public/images/demos/slider4.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                    </li> 
                                                    <li class="w-1/4 pr-2">
                                                        <img src="/public/images/demos/slider2.jpg" class="rounded-md w-full h-full object-cover" alt="">
                                                    </li>
                                                </ul>
                            
                                            </div>
                                            
                                            <!-- dotnav -->
                                            <ul class="flex justify-center my-5 uk-dotnav uk-slider-nav gap-2.5"></ul>


                                            <!-- navigation -->
                                            <a class="absolute -translate-y-1/2 bg-white rounded-full top-1/2 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></a>
                                            <a class="absolute -right-4 -translate-y-1/2 bg-white rounded-full top-1/2 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                                            
                                        </div>

                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                            

                            </div>
    
                        </div>

                    </div>
 

                    <!-- slideshow -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Basic </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="relative uk-visible-toggle" tabindex="-1" uk-slideshow="finite: true; autoplay: true">

                                            <ul class="uk-slideshow-items"> 
                                                <li class="w-full overflow-hidden rounded-md">
                                                    <img src="/public/images/demos/photo1.jpg" alt="" uk-cover>
                                                </li>
                                                <li class="w-full overflow-hidden rounded-md">
                                                    <img src="/public/images/demos/photo2.jpg" alt="" uk-cover>
                                                </li>
                                                <li class="w-full overflow-hidden rounded-md">
                                                    <img src="/public/images/demos/photo3.jpg" alt="" uk-cover>
                                                </li>
                                            </ul>
                            
                                            <!-- dotnav -->
                                            <ul class="flex justify-center my-5 uk-dotnav uk-slideshow-nav gap-2.5"></ul>
                            
                                            <!-- navigation -->
                                            <a class="absolute -translate-y-1/2 bg-white rounded-full top-1/2 left-2 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slideshow-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></a>
                                            <a class="absolute right-2 -translate-y-1/2 bg-white rounded-full top-1/2 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slideshow-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                                              

                                        </div> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                              

                            </div>
    
                        </div>
 
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> min-height </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="relative" tabindex="-1" uk-slideshow="animation: push;min-height: 300; max-height: 400">

                                            <ul class="uk-slideshow-items"> 
                                                <li class="w-full overflow-hidden rounded-md">
                                                    <img src="/public/images/demos/photo1.jpg" alt="" class="rounded-md w-full h-full object-cover">
                                                </li>
                                                <li class="w-full overflow-hidden rounded-md">
                                                    <img src="/public/images/demos/photo2.jpg" alt="" class="rounded-md w-full h-full object-cover">
                                                </li>
                                                <li class="w-full overflow-hidden rounded-md">
                                                    <img src="/public/images/demos/photo3.jpg" alt="" class="rounded-md w-full h-full object-cover">
                                                </li>
                                            </ul>
                                
                                            <!-- dotnav -->
                                            <ul class="flex justify-center my-5 uk-dotnav uk-slideshow-nav gap-2.5"></ul>
                                            
                                            <!-- navigation -->
                                            <a class="absolute -translate-y-1/2 bg-white rounded-full top-1/2 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slideshow-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></a>
                                            <a class="absolute -right-4 -translate-y-1/2 bg-white rounded-full top-1/2 grid w-9 h-9 place-items-center shadow dark:bg-dark3" href="#" uk-slideshow-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                                            
                                        </div> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
             

                            </div>
    
                        </div>

                    </div>
                    

                    <!-- tabs -->
                    <div class="space-y-8">
 
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Basic </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20">
        
                                        <div class="box">
                                            
                                            <nav class="nav__underline px-3.5">
                            
                                                <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                                               
                                                    <li class="uk-active"> <a href="#" aria-expanded="true"> Suggestions  </a> </li>
                                                    <li > <a href="#" aria-expanded="false"> Newest </a> </li>
                                                    <li > <a href="#" aria-expanded="false"> My My products </a> </li>
                        
                                                </ul> 
                            
                                            </nav>

                                            <div id="group-tabs" class="uk-switcher text-sm">

                                                <div>

                                                    <div class="p-4 space-y-2">
                                                        <p class="font-normal leading-relaxed"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
                                                        <p class="font-normal leading-relaxed"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                                    </div>

                                                </div>
                                                <div>

                                                    <div class="p-4 space-y-2">
                                                        <p class="font-normal leading-relaxed"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
                                                        <p class="font-normal leading-relaxed"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                                    </div>

                                                </div>
                                                <div>

                                                    <div class="p-4 space-y-2">
                                                        <p class="font-normal leading-relaxed"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
                                                        <p class="font-normal leading-relaxed"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                                    </div>

                                                </div>


                                            </div>

                                        </div> 


                                        
                                        

                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                             

                            </div>
    
                        </div>
    

                    </div>

                    <!-- tooltip -->
                    <div class="space-y-8">


                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Basic </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20 flex justify-center py-6">
        
                                        <button uk-tooltip="Hello World" 
                                                class="px-4 py-2 mb-3 text-sm bg-white shadow rounded-md dark:text-white dark:bg-gray-700"
                                                type="button">
                                                Hover
                                        </button>
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

                                </div>
            
                              

                            </div>
    
                        </div>
  
                        <div class="relative bg-white border border-slate-200 p-1 rounded-xl shadow-sm overflow-hidden dark:border1 dark:bg-dark2">
    
                            <h4 class="text-lg font-medium text-black dark:text-white absolute top-4 left-4"> Positions </h4>

                            <!-- button tab -->
                            <div class="inline-flex my-2 bg-slate-50 rounded-md p-0.5 font-medium text-sm shadow-sm absolute top-1.5 right-3 dark:bg-slate-700/40"  uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small ;toggle: > *">
                                <button type="button" class="px-4 py-1.5 rounded-md bg-white shadow aria-expanded:dark:bg-slate-700/80"> Preview </button>
                                <button type="button" class="px-4 py-1.5 rounded-md" onclick="UIkit.notification({ 
                                    message: ' <div class=\'flex gap-5 items-center\'> <div class=\'rounded-full bg-slate-200 p-1.5 inline-flex ring ring-slate-100 ring-offset-1\'> <ion-icon name=\'code-slash-outline\' class=\'text-xl text-slate-600 drop-shadow-md\'></ion-icon> </div> <div class=\'flex-1\'> Once you purchase, you will have full access to all the features. </div> </div> ' ,
                                    pos: 'bottom-right', 
                                    timeout: '3000' })"> Code 
                                </button> 
                            </div>
    
                            <div class="bg-slate-50 rounded-lg border border-gray-100 overflow-hidden mt-[60px] dark:border1 dark:bg-dark1">
            
                                <!-- Preview -->
                                <div class="p-10 relative">

                                    <div class="relative z-20 flex justify-center py-6">
        
                                        <div class="max-w-[480px] my-5 border-spacing-4 border-2 border-dashed border-pink-400 dark:border-gray-600 p-[5px] rounded-xl">
                                            <div class="flex flex-wrap font-semibold capitalize gap-y-3 mr-[-10px] text-sm dark:text-white">
                                                <div uk-tooltip="title: Hello World; offset:10; pos: top-left"     class="w-[calc(33.333%-10px)] mr-2.5 py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-left"> Top Left</div>
                                                <div uk-tooltip="title: Hello World; offset:10; pos: top-center"   class="w-[calc(33.333%-10px)] mr-2.5 py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-center"> Top Center</div>
                                                <div uk-tooltip="title: Hello World; offset:10; pos: top-right"    class="w-[calc(33.333%-10px)] mr-2.5 py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-right"> Top Right</div>
                            
                                                <div uk-tooltip="title: Hello World; offset:10; pos: left"         class="w-[calc(50%-10px)] mr-2.5  py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-left"> Left</div>
                                                <div uk-tooltip="title: Hello World; offset:10; pos: right"        class="w-[calc(50%-10px)] mr-2.5  py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-right"> Right </div>
                                                
                                                <div uk-tooltip="title: Hello World; offset:10; pos: bottom-left"   class="w-[calc(33.333%-10px)] mr-2.5 py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-left"> bottom Left</div>
                                                <div uk-tooltip="title: Hello World; offset:10; pos: bottom"       class="w-[calc(33.333%-10px)] mr-2.5 py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-center"> bottom Center</div>
                                                <div uk-tooltip="title: Hello World; offset:10; pos: bottom-right" class="w-[calc(33.333%-10px)] mr-2.5 py-3.5 px-4 cursor-pointer rounded-lg bg-white shadow dark:bg-gray-700 text-right"> bottom Right</div>
                                            </div>
                                        </div> 
                                        
                                    </div>

                                    <img src="/public/images/demos/beams.jpg" alt="" class="dark:hidden absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2 w-[1200px]">
                                    <div class="absolute z-10 inset-0 bg-[url(../images/demos/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div> 

                                    <div class="hidden dark:inline w-full z-0 h-full absolute inset-0 bg-gradient-to-tr from-slate-900 to-slate-900 via-slate-800/70 via-60%"></div>

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

<style lang="css" scoped>
.syntaxhighlighter .gutter,
.syntaxhighlighter .toolbar {
    display: none !important ;
}
.uk-notification {
    position: fixed;
    top: 10px;
    left: 15px;
    z-index: 1040;
    box-sizing: border-box;
    width: 350px;
}

.uk-notification-top-right,
.uk-notification-bottom-right {
    left: auto;
    right: 15px;
}
.uk-notification-top-center,
.uk-notification-bottom-center {
    left: 50%;
    margin-left: -175px;
}
.uk-notification-bottom-left,
.uk-notification-bottom-right,
.uk-notification-bottom-center {
    top: auto;
    bottom: 15px;
}

@media (max-width: 639px) {
    .uk-notification {
        left: 15px;
        right: 15px;
        width: auto;
        margin: 0;
    }
}
.uk-notification-message {
    position: relative;
    padding: 15px;
    padding-right: 40px;
    background-color: #fff;
    color: #3a3939;
    font-size: 0.95rem;
    border-radius: 5px;
    line-height: 1.5;
    cursor: pointer;
    border-radius: 8px;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
}
.dark .uk-notification-message {
    background-color: #334155;
    color: white;
}

* + .uk-notification-message {
    margin-top: 10px;
}

/* Close * Adopts `uk-close` */
.uk-notification-close {
    display: none;
    position: absolute;
    top: 20px;
    right: 15px;
}
.uk-notification-message:hover .uk-notification-close {
    display: block;
}
</style>
