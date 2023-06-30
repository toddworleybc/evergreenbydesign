<script setup>
import { Link } from '@inertiajs/vue3';
import menu from '@/Utilities/menu';
import { reactive, onMounted, watch } from 'vue';
import { HomeIcon, DocumentMagnifyingGlassIcon, GlobeAltIcon, DocumentTextIcon, CurrencyDollarIcon, PhoneIcon } from '@heroicons/vue/24/outline';


// REFS==========================//


// add menu links here to appear on the navigation
// const menuLinks = reactive({
//     'Home': [route('home'), ],
//     'Plan Details': route('plan.details'),
//     'About': route('about'),
// });






// FUNCTIONS ==============//

/**
 * Watches for menu open and sets focus where it needs to go
 */

watch(() =>  menu.open, navOpen => {

    const navBtn = $el("#nav-btn");


    if(navOpen) {
        navListFocus(true);
        const firstLink = $el('#nav-link-0');
        navBtn.setAttribute("aria-expanded", 'true');
        // firstLink.focus();
    }


    if(!navOpen) {
        navListFocus(false);
        const navBtn = $el('#nav-btn');
        navBtn.removeAttribute("aria-expanded");
        navBtn.focus();
    }


} );

/**
 * Sets if the links can be focused when the menu is closed or open
 * 
 * @param {boolean} linkFocus 
 */

function navListFocus(linkFocus = false) {
    const navList = $el(".nav-link", true);

    if(!linkFocus) {

        // remove nav link focus until menu is open
        for (const link of navList) {

            link.setAttribute('tabindex', '-1');

        }

    }// link focus

    if(linkFocus) {

        for (const link of navList) {
            link.setAttribute('tabindex', "0");
        }

    }
    
}//#

/**
 * Adds nav focus events to navigation
 */

function navFocusEvents() {


    const navList = $el(".nav-link", true);
    const firstLink = navList[0];
    const lastLink = navList[navList.length - 1];


    
    firstLink.addEventListener('keydown', e => {
        
        if(e.key === 'Tab' && e.shiftKey) {
            e.preventDefault();
            lastLink.focus();
        }
    });

    lastLink.addEventListener( 'keydown', e => {
        
        if(e.key === "Tab" && !e.shiftKey) {
            e.preventDefault();
            firstLink.focus();
        } 
    } );

}//#

/**
 * Controls the focus and blur event for the nav btn
 * @param {event} e: focus|blur 
 */

function navBtnFocus(e) {
    if(e.type === 'focus') {
        menu.navBtnFocus = true;
    }

    if(e.type === 'blur') {
        menu.navBtnFocus = false;
    }
}//#


/**
 * Toggles the menu btn apperance to match menu state
 * @param {event} e 
 */
 function menuToggleBtn(e) {
    const firstLink = $el('.nav-link');
   
     if(e.code === 'Enter') firstLink.focus();
     menu.open = menu.open ? false : true;
}//#


onMounted( () => {
    navFocusEvents();
    navListFocus();
    menu.open = false;
} );


</script>

<template>
    <div>
            <div id="nav-btn" aria-haspopup="true" aria-controls="dropdown-menu" @blur="navBtnFocus" @focus="navBtnFocus" @click.prevent="menuToggleBtn" @keydown.enter.prevent="menuToggleBtn" class="block w-10 h-10 drop-shadow-md shadow-gray-300 rounded-full bg-green-400 hover:bg-green-300  active:bg-green-500 focus:border-2 focus:border-teal-600 relative transition-all cursor-pointer active:scale-90 active:shadow-sm active:shadow-gray-800 focus-styling" tabindex="0">
                    
                    <div class="border-b-2 border-white absolute w-3/5 left-1/2 transform -translate-x-1/2 transition-all mt-line" :class="[menu.open ? 'mt-line-open' : 'mt-line-closed']"></div>
    
                    <div class="border-b-2 border-white absolute top-1/2 w-3/5 left-1/2  transform -translate-x-1/2 transition-all mm-line" :class="[menu.open ? 'mm-line-open' : 'mm-line-closed']"></div>
                    
                    <div class="border-b-2 border-white absolute w-3/5 left-1/2 transform -translate-x-1/2 transition-all mb-line" :class="[menu.open ? 'mb-line-open' : 'mb-line-closed']"></div>   
            </div>
            <!-- #nav-btn  -->

        
        <div id="dropdown-container" class="fixed mt-3 right-0 w-72 transform transition-all" :class="menu.open ? 'translate-x-0' : 'translate-x-full'">

            <!-- @transitionend="removeHeightFromDropMenuContainer"  -->
            <nav id="dropdown-menu" class="w-full max-h-screen overflow-y-auto">
                
                <div id="dropdown-menu" class="shadow-md bg-gradient-to-b from-green-300 via-green-200 to-green-300 rounded-b-sm">
                    <ul role="menu" class="nav-list py-10 space-y-6">



                        <li role="none" class="text-xl group mb-2 bg-green-800 hover:bg-green-400 transition-all w-56 transform scale-100 active:scale-95 nav-item">
                            
                            <Link role="menuitem" @keydown.esc.prevent="menu.open = false"  class="nav-link nav-link-shadow font-xl group-hover:text-gray-800 text-white w-full h-full py-3 px-8 flex justify-between items-center" style="border-bottom: 0" :href="route('home')" ><span class="text-xl">Home</span> <HomeIcon class="w-5 h-5 ml-2 inline"/></Link>
                            
                        </li>

                        


                        <li role="none" class="text-xl group mb-2 bg-green-800 hover:bg-green-400 transition-all w-56 transform scale-100 active:scale-95 nav-item">
                            
                            <Link role="menuitem" @keydown.esc.prevent="menu.open = false"  class="nav-link nav-link-shadow font-xl group-hover:text-gray-800 text-white w-full h-full py-3 px-8 flex justify-between items-center" style="border-bottom: 0" :href="route('plan.details')" ><span class="text-xl">Plan Details</span> <DocumentMagnifyingGlassIcon class="w-10 h-10 ml-2 inline"/></Link>
                            
                        </li>


                        <li role="none" class="text-xl group mb-2 bg-green-800 hover:bg-green-400 transition-all w-56 transform scale-100 active:scale-95 nav-item">
                            
                            <Link role="menuitem" @keydown.esc.prevent="menu.open = false"  class="nav-link nav-link-shadow font-xl group-hover:text-gray-800 text-white w-full h-full py-3 px-8 flex justify-between items-center" style="border-bottom: 0" :href="route('about')" ><span class="text-xl">About Evergreen</span> <GlobeAltIcon class="w-7 h-7 ml-2 inline"/></Link>
                            
                        </li>

                        <li role="none" class="text-xl group mb-2 bg-green-800 hover:bg-green-400 transition-all w-56 transform scale-100 active:scale-95 nav-item">
                            
                            <Link role="menuitem" @keydown.esc.prevent="menu.open = false"  class="nav-link nav-link-shadow font-xl group-hover:text-gray-800 text-white w-full h-full py-3 px-8 flex justify-between items-center" style="border-bottom: 0" :href="route('pricing')" ><span class="text-xl">Pricing</span> <CurrencyDollarIcon class="w-7 h-7 ml-2 inline"/></Link>
                            
                        </li>

                        <li role="none" class="text-xl group mb-2 bg-green-800 hover:bg-green-400 transition-all w-56 transform scale-100 active:scale-95 nav-item">
                            
                            <Link role="menuitem" @keydown.esc.prevent="menu.open = false"  class="nav-link nav-link-shadow font-xl group-hover:text-gray-800 text-white w-full h-full py-3 px-8 flex justify-between items-center" style="border-bottom: 0" :href="route('contact')" ><span class="text-xl">Contact</span> <PhoneIcon class="w-6 h-6 ml-2 inline"/></Link>
                            
                        </li>


                        <li role="none" class="text-xl group mb-2 bg-green-800 hover:bg-green-400 transition-all w-56 transform scale-100 active:scale-95 nav-item">
                            
                            <Link role="menuitem" @keydown.esc.prevent="menu.open = false"  class="nav-link nav-link-shadow font-xl group-hover:text-gray-800 text-white w-full h-full py-3 px-8 flex justify-between items-center" style="border-bottom: 0" :href="route('terms.services')" ><span class="text-xl">Terms of Services</span> <DocumentTextIcon class="w-9 h-9 ml-2 inline"/></Link>
                            
                        </li>

                        
                        

                    </ul>
                </div>

            </nav>
            <!-- #dropdown-menu  -->
        </div>
            <!-- #dropdown-container  -->

    </div>
 
</template>

<style>


/* top line  */
.mt-line-closed {
    @apply top-1/3;
}

.mt-line-open {
    @apply -rotate-45 top-1/2;
}

/* middle line  */
.mm-line-open {
    @apply opacity-0;
}

.mm-line-closed {
    @apply opacity-100;
}

/* bottom line  */
.mb-line-closed {
    @apply top-2/3;
}

.mb-line-open {
    @apply rotate-45 top-1/2;
}

.nav-link:link {
    @apply text-inherit;
}
 
</style>