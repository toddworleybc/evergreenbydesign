<script setup>

import Logo from '@/Components/Svg/ebd-logo-rounded.svg';
import NavMain from './NavMain.vue';
import { modal } from '@/Utilities/modal';
import menu from '@/Utilities/menu';
import { Link, usePage } from '@inertiajs/vue3';
import { ref, onMounted, watch, onUpdated } from 'vue';
import { XCircleIcon } from '@heroicons/vue/24/outline';


const promoBar = ref('promo-bar');
const $page = usePage();


// controls whether the header should shown or not
const showHeader = ref(false);


// close/open header when modal is open
watch( modal, () => {
    setTimeout( () => {
        showHeader.value = modal.open || !showHeaderScrollPos() ? false : true;
    }, 300 );
    
} );//#


// show header if menu is open
watch( () => menu.open, navOpen => {
    if(navOpen) {
        closePromo();
        showHeader.value = true;
    } else {
       
        if(!showHeaderScrollPos())  showHeader.value = false;
        
    }
} );//#


/**
 * if nav button is focused show header. Also checks if screen pos or menu is open. 
 */

watch( () => menu.navBtnFocus, navBtnIsFocused => {
    if(showHeaderScrollPos() || menu.open) return;
    showHeader.value = navBtnIsFocused;
} );



/**
 * Checks if scroll position is greater than 25px
 * @return Boolean
 */ 
function showHeaderScrollPos() {

    const scrollPos = 25;

    return window.scrollY < scrollPos ? false : true;

}//


/**
 * hide the header on logo tab+shift unless header is past scroll pos 25px
 */
function hideHeaderOnLogoBlur(e) {

    if(e.key === 'Tab' && e.shiftKey && !showHeaderScrollPos()) {
        showHeader.value = false;
    }

}//



/**
 * Controls the toggle of the header based on scroll position
 * set scrollPos to the postion you want to show the menu
 */
function headerToggle() {
    
    window.onscroll = () => {
        showHeader.value = showHeaderScrollPos();
    }

}//#


function closePromo() {
    promoBar.value.classList.add('hidden');
}

function promoBarLoad() {
    const barDelay = $page.component === "Home" ? 4200 : 1000;
    setTimeout( () => {
        if($page.component !== "Promo") {
            if($page.component !== "ThankYou") {
                if(!menu.open) 
                promoBar.value.classList.remove('hidden');
            }
        }
        
    }, barDelay );
}


onMounted(() => {
    headerToggle();
    promoBarLoad();
});
 
</script>

<template>

    <div>
       
        <header id="primary-header" class="block shadow-md bg-gradient-to-tl from-emerald-500 to-emerald-600 w-full py-2 px-5 fixed transform transition-all z-50" :class="[showHeader ? 'translate-y-0' : '-translate-y-full']">
            <div class="flex justify-between items-center">
                <Link @focus="showHeader = true" @keydown="hideHeaderOnLogoBlur" :href="route('home')" aria-label="Logo" style="border-bottom: none;">
                    <Logo class="w-12 shadow-md rounded-full" />
                </Link>
               
                <NavMain />
            </div>

            <!-- promo  -->
            <div ref="promoBar" class="fixed bg-yellow-300 py-2 px-1 bottom-0 left-0 right-0 transform translate-y-full text-center hidden">
               
               <XCircleIcon @click.prevent="closePromo" class="w-6 hidden sm:block h-6 stroke-red-600 fill-red-200 absolute right-2 top-1/2 transform -translate-y-1/2 hover:scale-95 transition-all hover:stroke-gray-600 hover:cursor-pointer active:scale-90 active:fill-gray-500 active:stroke-gray-400"/>
               <a class="capitalize" :href="route('promo')">LIMITED TIME OFFER - 30% off website design</a> 
          
           
            </div>
        </header>
        
    </div>
 
</template>

<style>


 
</style>