<script setup>

    import Chat from '@/Components/ModalTemplates/Chat.vue';
    import { XMarkIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal';
    import { onMounted, ref } from 'vue';


    const modalCloseBtn = ref(null);
    const screenHeight = ref(null);



/**
 * FOCUS CLOSE BTN ON Leave
 */
    function focusModalClose(e) {
        
        if(modalCloseBtn === null) return;

        if(e.key === "Tab" && !e.shiftKey) {
            e.preventDefault();
            
            modalCloseBtn.value.focus();
        } 

    }//#






onMounted(() => {
    // modal.loadAnimation($el('#modal'));
    screenHeight.value = window.innerHeight - 20;
});



/**
 * Get the modal component based on props.type
 */

function modalType() {


    switch(modal.type) {

        case 'chat':
            return Chat;

    }//#


}//#


 
</script>

<template>
    <div>
        

        <div id="modal" role="dialog" aria-labelledby="modal-heading" class="w-5/6 md:w-1/2 fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-50 shadow-2xl shadow-gray-600">
             <div id="modal-overflow" class="overflow-auto" :style="`max-height: ${screenHeight}px`">

                <div class="bg-white py-10 px-8 rounded">
                    
                    <div class="flex justify-between items-center">
                        <h2 id="modal-heading" class="capitalize">{{ modal.heading }}</h2>
                        
                        <button id="modal-close-btn" ref="modalCloseBtn" class="btn-svg" @keydown="modal.focusLastElement($event)" @keyup.esc.prevent="modal.closeModal($event)" @click.prevent="modal.closeModal()"><XMarkIcon class="w-6 h-6" /><span class="sr-only">close message</span></button>
                    </div>
                    <hr>
                    <!-- promo  -->
                    <div ref="promoBar" class="bg-yellow-300 py-2 px-14 text-center inline-block mx-auto w-full">
                                
                                <a class="capitalize" :href="route('promo')"><span class="text-xl">LIMITED TIME OFFER - 30% off website design</span></a> 
                            
                            </div>
                    
                    
                    <component :is="modalType()" ref="modalCloseFocus" @modal-focus-close="focusModalClose"></component>
                        
                </div>

            </div>
            <!-- #/modal-overflow -->

                
        </div>

        
    </div>
</template>

<style>

    /* Hide scrollbar for Chrome, Safari and Opera */
    #modal-overflow::-webkit-scrollbar {
    display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    #modal-overflow {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
    }
   
</style>