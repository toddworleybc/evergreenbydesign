<script setup>
    
    import { onMounted, ref, reactive } from 'vue';
    import { modal } from '@/Utilities/modal';
    import { useForm } from '@inertiajs/vue3';
    import { EnvelopeIcon, PhoneIcon, ArrowPathIcon } from '@heroicons/vue/24/outline';


    
    const form = useForm({
        name: null,
        email: null,
        message: null,
        token: null
    });

    const sendBtn = ref(null);
    const phoneLink = ref(null);
    const formSuccess = ref(false);
    const formEl = ref(null);

    const formErrors = ref(null);


    const emit =defineEmits([
        'modal-focus-close'
    ]);



    function focusPhoneLink() {
        phoneLink.value.focus();
    }//#



    /**
     * Sets the modal last focusable element in modal for focus trap
     */
    function setLastFocusElement() {
        modal.lastFocusElement = sendBtn.value;
    }


    function sendEmail() {

        if(form.processing) return;

        if(formEl.value !== null) {
            const formData = new FormData(formEl.value);
            const reToken = formData.get("g-recaptcha-response");

            form.token = reToken;

            emailSending();
        }

    }//#


    function emailSending() {

        form.post("/sendemail", {
            preserveScroll: true,
            onSuccess: () => {
                formSuccess.value = true;
                form.reset();
            },
            onError: (error) => {
                formErrors.value = true;
                grecaptcha.reset();
                form.reset();
            }
        });

    }//#



    function addReCAPTCHA() {

        const recaptchaScript =  document.createElement("script");

        recaptchaScript.setAttribute('src', 'https://www.google.com/recaptcha/api.js');

        recaptchaScript.setAttribute('async', 'true');
        recaptchaScript.setAttribute('defer', 'true');

        document.head.append(recaptchaScript);
    }//#

    
    onMounted( () => {
        addReCAPTCHA();
        setLastFocusElement();
        focusPhoneLink();
    } );
   
 
</script>

<template>
    <div>

           

            <div id="chat-phone" class="border-b my-6">
                <div class="flex justify-start items-center mb-2 text-green-500">
                    <h3>Call Today</h3>
                    <PhoneIcon class="w-6 h-6 ml-2" />
                </div>
                
                
                    
                <p class="font-xl">Phone:&nbsp;<a style="color: rgb(57, 55, 55); border-color: rgb(57, 55, 55)" @keydown.esc="modal.closeModal($event)" aria-label="click to call" class="py-1 px-2 text-inherit focus:outline-none" href="tel:5413735563" ref="phoneLink">(541) 378.5563</a></p>
                    
            </div>

            <form ref="formEl" @submit.prevent="sendEmail" id="message-form" :disabled="form.processing">
                <div>
                    <div class="flex justify-start items-center mb-2 text-green-500">
                        <h3 id="chat-email">Email Me</h3>
                        <EnvelopeIcon class="w-6 h-6 ml-2" />
                    </div>
                
                    <div class="form-group">
                        <label for="message-name">Name</label>
                        <p v-if="form.errors.name" class="text-red-700 mt-2">{{ form.errors.name }}</p>
                        <input @keydown.esc="modal.closeModal($event)" id="message-name" placeholder="John Smith" type="text" name="email" v-model="form.name">
                    </div>

                    <div class="form-group">
                        <label for="message-email">Enter Email</label>
                        <p v-if="form.errors.email" class="text-red-700 mt-2">{{ form.errors.email }}</p>
                        <input @keydown.esc="modal.closeModal($event)" id="message-email" placeholder="johnsmith@gmail.com" type="email" name="email" v-model="form.email">
                    </div>
                    
                    <div class="form-group">
                        <label for="message-message">Message</label>
                        <p v-if="form.errors.message" class="text-red-700 mt-2">{{ form.errors.message }}</p>
                        <textarea name="message" @keydown.esc="modal.closeModal($event)" id="message-message" rows="5" placeholder="Enter Message" v-model="form.message"></textarea>
                    </div>
                </div>
                

                <div class="mt-8">
                    <p v-if="form.errors.token" class="text-red-700 mt-2">reCapatcha failed</p>
                    <div class="g-recaptcha" data-sitekey="6LcewFcmAAAAAJHuq4ieGQ1qd0fuHYddHki1eKH9"></div>
                </div>

                <div v-if="form.processing" class="mt-8 flex items-center"><span class="mr-2">Sending....</span><ArrowPathIcon class="animate-spin w-5 h-5" /></div>

                <p v-if="formSuccess">Thank you for submitting the form!</p>
                <div tabindex="0"></div>

                <p class="text-red-600" v-if="formErrors">Error Has Occured!</p>

                <button class="mt-8" :disabled="form.processing" ref="sendBtn" @keydown="emit('modal-focus-close', $event)" type="submit">Send Message</button>
 
                
            </form>
    
    </div>

 
</template>

<style>
 
</style>