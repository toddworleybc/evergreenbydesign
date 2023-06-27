<script setup>

import Logo from '@/Components/Svg/ebd-logo-rounded.svg';
import NavMain from './NavMain.vue';
import { modal } from '@/Utilities/modal';
import menu from '@/Utilities/menu';
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, watch, onUpdated } from 'vue';





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





onMounted(() => {
    headerToggle();
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
        
        </header>
    </div>
 
</template>

<style>


 
</style>