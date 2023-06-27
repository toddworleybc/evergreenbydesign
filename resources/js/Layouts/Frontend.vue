<script setup>

    import Header from '@/Components/Header.vue';
    import { Head } from '@inertiajs/vue3';
    import { modal }   from '@/Utilities/modal';
    import menu from '@/Utilities/menu';
    import { ChatBubbleLeftIcon, ArrowUpIcon } from '@heroicons/vue/24/outline';
    import Modal from '@/Components/Modal.vue';
    import { ref, watch, onMounted } from 'vue';


// controls the background overlay for the body
    const bodyOverlay = ref(false);
    const footerCreditsYear = ref(null);
    const callTodayFixed = ref(null);
    const footerEl = ref(null);
    

// PROPS =========================//
    




// WATCHERS ==========================//
    
    // watch body overlay for changes and add or remove body-noscroll class
    watch( bodyOverlay, data => {
      
        const bodyEl = $el("body");

        data ? bodyEl.classList.add('body-noscroll') : bodyEl.classList.remove('body-noscroll');

    } );//#

    /**
     * Watches modal changes and opens overlay if modal is open
     */
    watch( modal, () => { 
        bodyOverlay.value = modal.open;
    } );//#

    /**
     * Watches menu changes and if open opens the body overlay
     */
    watch( () => menu.open, () => {
         bodyOverlay.value = menu.open;
    } );//#


//  FUNCTIONS ========================/

  

    /**
     * Controls back to top btn
     */
    function backToTop() {
        window.scrollTo(0, 0);
    }//#



    function removeNoScrollFromBody() {
        const bodyEl = $el("body");

        bodyEl.classList.remove('body-noscroll');

    }//#


// close overlay and other things opened with overlay
    function closeOverlay() {
        if(menu.open) menu.open = false;
        if(modal.open) modal.closeModal();
        bodyOverlay.value = false;
    }//#


    function showBtn(btn) {
        if(btn.classList.contains('opacity-0')) {
            btn.classList.remove('opacity-0');
            btn.classList.add('opacity-1');
            btn.setAttribute("tabindex", "0");
        }

    }//#


    function showBothBtns() {
       const bottomBtns = $el('.bottom-btns', true);

        for (const btn of bottomBtns) showBtn(btn);


    }//#

    function hideBtn(btn) {

        if(btn.classList.contains('opacity-1')) {

            btn.classList.remove('opacity-1');
            btn.classList.add('opacity-0');
            btn.setAttribute("tabindex", "-1");

        }


    }//#

    /**
     * Show Btns if screen is past scroll is beyond 25 pixels
     */

    function showBottomIcons() {
        const scrollPos = 25,
              bottomBtns = $el('.bottom-btns', true);

            if(footerEl.value !== null) {
                
                const footerPos = footerEl.value.offsetTop - window.outerHeight;


                // bottom of the screen phone number
              window.scrollY > footerPos ?
                callTodayFixed.value.style = "display: none;" :
                callTodayFixed.value.style = "display: block";

            }
              



    // hide buttons
        if(window.scrollY < scrollPos) {

            for (const btn of bottomBtns) hideBtn(btn);

        } else {
            
            for (const btn of bottomBtns) showBtn(btn);

        }


    }//#




    onMounted(() => {
        window.addEventListener('scroll', showBottomIcons);
        modal.closeModal();
        footerCreditsYear.value = new Date().getFullYear();
        removeNoScrollFromBody();
    });

 
</script>

<template>
    <div>
       
        <Head>
            <link rel="stylesheet" href="css/ebd-fonts.css" />
            <link rel="icon" type="image/svg" href="media/images/svg/ebd-logo-rounded.svg">
        </Head>
        <div>
            <div @click.prevent="closeOverlay" class="fixed w-full h-screen bg-slate-900 transition-all backdrop-blur-sm z-20" :class="[bodyOverlay ? 'bg-opacity-70 block' : 'bg-opacity-0 hidden']"></div>

            <Header />
        
            <main>
                <slot />
            </main>
            <footer ref="footerEl" class="py-4 px-8 bg-green-900 text-white text-center">
                All Rights Reserved &copy; Evergreen By Design {{ footerCreditsYear }}<br/><span>Made with &#9829 from the Pacific Northwest</span>
                <div><a :href="route('website.terms')" class="mr-4">Terms Of Use</a><a :href="route('privacy')">Privacy</a></div>
            </footer>

            <button  @click.prevent="backToTop" @focus="showBothBtns" class="z-10 fixed left-2 bottom-2 rounded-full px-2 py-2 opacity-0 transition-opacity bottom-btns"><ArrowUpIcon class="w-5 h-5" /><span class="sr-only">Back to top</span></button>

           

            <a ref="callTodayFixed" class="group fixed bottom-0 text-center right-0 md:right-1/2 transform md:translate-x-1/2 py-2 bg-green-300 z-10 rounded-lg btn opacity-0 transition-opacity bottom-btns border-none" href="tel:5413785563">
                <span class="text-white group-hover:text-gray-600">Call Today: (541) 378.5563</span>
            </a>

            <button  @focus="showBothBtns" id="chat-btn-bottom" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="z-10 hidden md:block fixed right-2 bottom-2 rounded-full px-2 py-2 opacity-0 transition-opacity bottom-btns"><ChatBubbleLeftIcon class="w-6 h-6" /><span class="sr-only">Click to message</span></button>

            <Modal v-if="modal.open" :type="modal.type"  />
        </div>

    </div>
    
</template>


<style>

html {
    scroll-behavior: smooth;
}



.ebd-container {
    max-width: 1200px;
    margin: 0 auto;
}

.pg-container {
    max-width: 1200px;
    margin: 0 auto;
}

.body-noscroll {
    overflow: hidden;
}

.btn,
button,
button[type='submit'] {
    @apply bg-green-600 hover:bg-green-300 text-white hover:text-gray-600 shadow-md border-yellow-300 transform scale-100 active:scale-90 active:shadow-sm rounded py-1 px-4 transition-all border-2 cursor-pointer;
}

.btn:disabled,
.btn-svg:disabled,
button:disabled,
button[type='submit']:disabled {
    @apply bg-slate-300 active:scale-100;
}

.btn:focus,
.btn-svg:focus,
.svg-hero-btn:focus,
.focus-styling:focus,
button:focus,
button[type='submit']:focus {
    @apply outline-2 outline-blue-500;
}

.btn-svg {
    @apply py-0 px-0 rounded-full;
}



/* Headings Fonts  */
.ebd-font-heading,
h1,
h2,
h3,
h4,
h5,
h5,
h6,
strong {
    font-family: Oswald, 'Tahoma';
    @apply text-gray-700;
}

h1 {
    @apply text-4xl;
}

h2 {
    @apply text-3xl;
}

h3 {
    @apply text-xl;
}


/* Text Fonts */
    .ebd-font-text,
    a:link,
    p,
    header,
    main,
    footer,
    label {
        font-family: SourceSansPro, 'Arial';
        @apply text-lg text-gray-700
    }

    p {
        @apply mb-4;
    }


/* Link Anchors */
a,
a:link {
    @apply border-b border-blue-800 text-blue-800;
    transition: all .2s ease-in;
    margin-bottom: -1px;
}


a:hover {
    border-bottom: 1px solid rgba(0, 0, 255, 0);
    color: rgb(20, 140, 20);
}



a:focus {
    outline: 2px solid blue;
}


/* Layout Elements */

hr {
    height: 4px;
    border: 1px solid yellow;
    @apply mb-4 mt-4 bg-green-500;
}

section {
    @apply mb-40 py-4 md:py-12 px-6 md:px-4;
}


/* Forms  */

input,
textarea {
    @apply rounded block border-gray-400 w-full mb-4;
}


</style>

