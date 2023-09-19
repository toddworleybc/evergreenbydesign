<script setup>
 
    import FrontEnd from '@/Layouts/Frontend.vue';
    import { Link, Head, useForm } from '@inertiajs/vue3';
    import { PhoneIcon, EnvelopeIcon, ArrowPathIcon } from '@heroicons/vue/24/outline';
    import { ref, onMounted } from 'vue';


    const formSuccess = ref(false);
    const formEl = ref(null);
    const formErrors = ref(null);

    const form = useForm({
        name: null,
        email: null,
        message: null,
        token: null
    });


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
        })

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
    } );




</script>

<template>
    <div>
        <FrontEnd>
            <div class="flex items-center justify-center bg-ty-img pt-0 pb-16 md:pt-12 md:pb-12">
            <div class="bg-white/90 w-full md:w-4/6 shadow-lg rounded">
                    
                <section class="mb-0 p-0 h-5/6 overflow-hidden pb-8 bg-white">
                        <div class="bg-gradient-to-tl from-green-800 to-green-700 py-6 text-white ebd-promo-heading">
                            <h1 class="text-center text-4xl lg:text-5xl mb-4 px-2 lg:px-0 leading-relaxed">30% OFF Website Design</h1>
                            <p class="text-center text-6xl">ONLY $479</p>
                            <p class="text-center text-6xl">Limited Time Offer</p>
                            <p class="text-center text-3xl">Save $150 </p>
                        </div>
                        
                        
                    <div class="form-container bg-white w-full py-4 px-4 md:px-10">
                        <div class="py-10 text-center">
                            <p class="text-xl mb-4">30% discount on website designs and e-commerce designs is available for a limited time only.<br/> Don't miss out on this incredible opportunity!</p>
                            <p class="text-lg">Ready to start your website services or have questions? <br/>Just fill out the form below or call.</p>
                            <p><a href="tel:5143785563">Phone: (541) 378.5563</a></p>
                            <hr/>
                        </div>
                        
                        
                        <form ref="formEl" @submit.prevent="sendEmail">
                            
                            <div>
                                <div class="flex justify-start items-center mb-4 text-green-500">
                                    <h3 id="chat-email" class="text-2xl">Message Today</h3>
                                    <EnvelopeIcon class="w-6 h-6 ml-2" />
                                </div>
                                <label for="name">Name</label>
                                <p v-if="form.errors.name" class="text-red-700 mt-2">{{ form.errors.name }}</p>
                                <input v-model="form.name" placeholder="John Smith" type="text" id="name">
                            </div>
                            <div class="mt-10">
                                <label for="email">Email</label>
                                <p v-if="form.errors.email" class="text-red-700 mt-2">{{ form.errors.email }}</p>
                                <input v-model="form.email" type="email" placeholder="johnsmith@gmail.com" name="email" id="email">
                            </div>
                            <div class="mt-10">
                                <label for="message">Tell me about the website you want and/or your online needs</label>
                                <p v-if="form.errors.message" class="text-red-700 mt-2">{{ form.errors.message }}</p>
                                <textarea v-model="form.message" placeholder="Enter Message" name="message" id="message" cols="30" rows="4"></textarea>
                            </div>

                            <div class="mt-8 overflow-x-auto sm:overflow-hidden">
                                <p v-if="form.errors.token" class="text-red-700 mt-2">reCapatcha failed</p>
                                <div class="g-recaptcha" data-sitekey="6LcewFcmAAAAAJHuq4ieGQ1qd0fuHYddHki1eKH9"></div>
                            </div>

                            <div class="mt-8">
                                <p class="text-red-600" v-if="formErrors">Error Has Occured!</p>
                                <div v-if="form.processing" class="mt-8 flex items-center"><span class="mr-2">Sending....</span><ArrowPathIcon class="animate-spin w-5 h-5" /></div>
                                <p v-if="formSuccess">Thank you for submitting the form!</p>
                                <button class="mt-4"
                                :disabled="form.processing">Send Message</button> 

                            </div>


                        </form>



                        </div>
                        <!-- ./form-container  -->
                    </section>
                </div>
                
            </div>
            
        </FrontEnd>
    </div>
</template>

<style>
    .bg-ty-img {
        background: linear-gradient(to top, rgba(255, 255, 255, 0.537), rgba(255, 255, 255, 0.42)), url('/media/images/jpg/landscape.jpg') no-repeat center center;
        background-size: cover;
    }

    .ebd-promo-heading h1,
    .ebd-promo-heading p {
        color: #ffffff;
        text-shadow: rgb(59, 58, 58) 1px 1px 20px;
    }



</style>