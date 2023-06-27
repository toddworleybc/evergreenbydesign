<script setup>
    import HeroImageMobile from '@/Components/Svg/ebd-mobile-header.svg';
    import HeroImageDesktop from '@/Components/Svg/ebd-header.svg';
    import { onMounted, onBeforeMount, shallowRef, ref } from 'vue';
    import { gsap } from 'gsap';
    import { modal } from '@/Utilities/modal';



   // PROPS/EMITS / ===============================//

   /**
    * The size of the browser display
    */
   const HeroDeviceDisplay = shallowRef(null);
  
  
/**
 * On window resize reattach hero button event listeners
 */

   function HeroImageResposiveBrowserResize() {
        window.onresize = () => {
            HeroImageSet();
            setTimeout(attachSvgBtnEventListeners, 1000);
        }
   }//#

   /**
    * Set hero image based on the width of the screen
    */
   function HeroImageSet() {
        HeroDeviceDisplay.value = window.innerWidth < 768 ? HeroImageMobile : HeroImageDesktop;
   }//#



   


    // SVG FUNCTIONS /===================//

   /**
    * Adds event listeners to hero svg btn
    */

    function attachSvgBtnEventListeners() {

            const btnEl = $el("#svg-hero-btn"),
                  bodyEl = $el('body'),
                  btnPathStyles = $el("#svg-hero-btn path:first-child");
           
                  if(!btnEl) return;

// Set button back to normal on body click
            bodyEl.onclick = () => {
               
                gsap.to(btnPathStyles, {
                    fill: "#008000",
                    duration: .3,
                });
                gsap.to( btnEl, {
                    duration: .3,
                    transformOrigin: "center center",
                    scale: 1,
                    filter:" drop-shadow(2px 2px 3px #6e6e72)"
                } );

            }// body on click


//  ON HOVER =========/
            btnEl.onmouseenter = () => {
                gsap.to(btnPathStyles, {
                    fill: "#0c561f"
                });
                gsap.to( btnEl, {
                    duration: .3,
                    transformOrigin: "center center",
                    scale: .95,
                    filter: "drop-shadow(1.5px 1.5px 1.5px #615f5f)"
                } );
            }//mouseover

// ON HOVER LEAVE ================/
            btnEl.onmouseleave = () => {
                gsap.to(btnPathStyles, {
                    fill: "#008000",
                    duration: .3,
                });
                gsap.to( btnEl, {
                    duration: .3,
                    transformOrigin: "center center",
                    scale: 1,
                    filter:" drop-shadow(2px 2px 3px #6e6e72)"
                } );
            }//mouseleave


    // when button is focused you can press enter to pop up modal
            btnEl.onkeydown = function(e) {
               if(e.code === 'Enter' && e.which === 13) {
                    modal.openModal('chat', 'message', e);
               }
            }//#


// CLICK DOWN ============/
            btnEl.onclick = function(e) {

                
                
            // BUTTON CLICK EVENT =======!!!!!!
                modal.openModal('chat', 'Get In Touch', e);
        

                gsap.to(btnPathStyles, {
                    fill: "#129451",
                    duration: .2,
                });
                

                gsap.to( btnEl, {
                    duration: .2,
                    transformOrigin: "center center",
                    scale: .9,
                    filter:" drop-shadow(1px 1px 1px black)"
                } );

            }// click down




// CLICK UP ===========/
            btnEl.onmouseup = () => {
                gsap.to(btnPathStyles, {
                    fill: "#0c561f",
                    duration: .2,
                });


                gsap.to( btnEl, {
                    duration: .3,
                    transformOrigin: "center center",
                    scale: .95,
                    filter: "drop-shadow(1.5px 1.5px 1.5px #615f5f)"
                } );


            }//# click up


        }//#attachSvgBtnEventListeners


        /**
         * Get the trees in the svg images
         * @return array | all tree elements in svgs
         */


        function getTrees() {

            const trees = $el('.svg-hero-trees', true);

            return trees;

        }//#



        /**
         * Grow trees on the screen after 1.5 sec load time
         */

         function animateTreesAndBtn() {
            
            const tl = gsap.timeline({delay: .3});

            tl.fromTo( '.svg-computer-trees', 
                {
                    scale: 0,
                    height: 0,
                    transformOrigin: 'bottom center'
                },
                {
                    scale: 1,
                    height: "auto",
                    duration: .5,
                    stagger: .1,
                    ease: "back"
                    
                }
            );

            
        if(window.innerWidth < 768) return;
            tl.fromTo( '.svg-hero-trees', 
                {
                    scale: 0,
                    height: 0,
                    transformOrigin: 'bottom center'
                },
                {
                    scale: 1,
                    height: "auto",
                    duration: .5,
                    stagger: .1,
                    ease: "back"
                    
                }
            );

            tl.fromTo('#svg-hero-btn',
                {
                    y: "50%",
                    opacity: 0
                },
                {

                    y: "0",
                    opacity: 1,
                    duration: .5,
                    ease: "power2"
                }
            );


         }//Grow Trees


         



    //#SVG ========================//


    onBeforeMount( () => {
        HeroImageSet();
        HeroImageResposiveBrowserResize();
   } );
    


    onMounted( () => {
        attachSvgBtnEventListeners();
        animateTreesAndBtn();
    } );
 
</script>

<template>
    <div>
      
        <section class="hero-banner w-full h-full shadow-gray-600 p-0 m-0">

            <component :is="HeroDeviceDisplay"></component>
            
        </section>
             
    </div>
</template>

<style>

#svg-hero-btn {
    cursor: pointer;
    filter: drop-shadow(2px 2px 3px #6e6e72);
    color: #040404
}
 
</style>