import { reactive } from "vue";
import { gsap } from "gsap";



export const modal = reactive({
    open: false,
    type: null,
    heading: null,
    modalOpenEvent: null,
    lastFocusElement: null,
    modalOpenedFromId: null,
    /**
     * close modal
     * 
     * @param {event|empty} e : pass the event for focus control back to main button
     */
    closeModal: function(e = "") {
        this.open = false;
        this.type = null;
        this.heading = null;
        this.modalOpenEvent = null;

        if(e.key === "Escape" && this.modalOpenedFromId) {

            $el(`#${this.modalOpenedFromId}`).focus();
            

        }
            
        this.modalOpenedFromId = null;
    },
    /**
     * Opens the Modal
     * 
     * @param {string} type: modal template type
     * @param {string} heading: heading for modal  
     */
    openModal: function(type, heading, event = null) {
        this.open = true;
        this.type = type;
        this.heading = heading;
      
        if(event !== null) {
            this.modalOpenEvent = event;
            this.modalOpenedFromId = event.target.getAttribute('id');
        }
        
    },
    /**
     * Controls blur on last focusable element in modal 
     * 
     * @param {event} event: check for tab+shift event for focus trap inside modal 
     */
    focusLastElement: function(event) {
        if(event.key === 'Tab' && event.shiftKey && this.lastFocusElement !== null) {

            event.preventDefault();
            this.lastFocusElement.focus();

        }
    },
    /**
     * Loads the modals popup animation
     * 
     * @param {DomElement} modal 
     */
    loadAnimation: function(modal) {
        gsap.fromTo(modal, 
            {
                scale: .7
            },
            {
                scale: 1,
                duration: .7,
                ease: 'back',
                delay: .3
            });
    }
})