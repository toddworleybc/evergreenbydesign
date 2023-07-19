<script setup>
    import PageBanner from '@/Components/PageBanner.vue';
    import FrontEnd from '@/Layouts/Frontend.vue';
    import ComputerImg from '@/Components/Svg/computer-green-screen.svg';
    import { PhoneIcon, EnvelopeIcon, ArrowPathIcon } from '@heroicons/vue/24/outline';
    import { ref, onMounted } from 'vue';
    import { useForm, Link, Head } from '@inertiajs/vue3';


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

        <Head title="Contact">
            <meta name="description" content="Contact your next website designer here today! Not only does Evergreen By Design provide professional website design, but you also receive hosting, domain, content management and email marketing.">
        </Head>

        <PageBanner heading="Contact <br/> Evergreen By Design" />



        <div class="ebd-container mt-8">

            <section class="mb-0">
                <h2 class="mt-20 mb-10 inline-block text-center md:text-left">Get In Touch With Evergreen By Design Today<hr/></h2>
                <p>Evergreen By Design is a website design and management business that is proud to serve the cities of Oregon with some of the best in website design and management services.</p>
                <p>Local to Roseburg, I love the Pacific Northwest. From the beautiful forests to the gorgeous oceans. Being able to design websites for businesses and online entrepreneurs in this great state has been a true blessing.</p>
                <p>If you want top quality website design and to have all your website services bundled into one nice fee then contact Evergreen By Design today.</p>
                <p class="text-2xl">Phone: <a style="font-size: 1.4rem" href="tel:+15413785563">(541) 378.5563</a></p>
                <p class="text-2xl">Email: <a style="font-size: 1.4rem" href="mailto:todd@evergreenbydesign.com">todd@evergreenbydesign.com</a></p>
                <p class="text-2xl">Hours: Mon-Fri 9:00 AM to 4:00 PM</p>
                <p class="text-2xl">Location: Roseburg, Oregon</p>
            </section>


            <section id="ebd-section-contact" class="contact-bg-gradient">

                <div class="ebd-container flex flex-col md:flex-row justify-start items-start shadow-lg border rounded w-full mx-auto">

                    <div class="form-header md:w-1/3 self-stretch bg-gradient-to-b from-white via-teal-100 to-green-400">
                        <div class="py-4">

                            <div class="flex justify-center">
                                <h2 class="inline-block pb-4 w-3/4 text-center text-4xl">Get In Touch <hr/></h2>
                            </div>
                            

                            <div class="mb-8">

                                <div class="flex justify-center items-center mb-4 text-green-500">
                                    <h3 class="border-none mb-0 pb-0 text-3xl" style="padding-bottom: 0px;">Call Today</h3>
                                    <PhoneIcon class="w-8 h-8 ml-2 mt-1 stroke-slate-700" />
                                </div>

                                <p class="font-xl text-center text-2xl">Phone:&nbsp;<br/><a aria-label="click to call" class="py-1 px-2" style="font-size: 1.5rem; line-height: 2rem; color: rgb(74, 72, 72); border-color: rgb(74, 72, 72)" href="tel:5413735563">(541) 378.5563</a></p>
                                <p class="text-center">Mon-Fri 9am-4pm</p>
                                
                            </div>

                        </div>
                        <!-- ./contact-heading  -->

                    </div>
                    <!-- ./form-header  -->
                    

                    <div class="form-container bg-white w-full flex-1 py-4 px-4 mt-8 md:mt-0 md:px-10">

                        <form ref="formEl" @submit.prevent="sendEmail">
                        
                            <div>
                                <div class="flex justify-start items-center mb-4 text-green-500">
                                    <h3 id="chat-email" class="text-2xl">Email Me</h3>
                                    <EnvelopeIcon class="w-6 h-6 ml-2" />
                                </div>
                                <label for="name">Name</label>
                                <p v-if="form.errors.name" class="text-red-700 mt-2">{{ form.errors.name }}</p>
                                <input v-model="form.name" placeholder="John Smith" type="text" id="name">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <p v-if="form.errors.email" class="text-red-700 mt-2">{{ form.errors.email }}</p>
                                <input v-model="form.email" type="email" placeholder="johnsmith@gmail.com" name="email" id="email">
                            </div>
                            <div>
                                <label for="message">Message</label>
                                <p v-if="form.errors.message" class="text-red-700 mt-2">{{ form.errors.message }}</p>
                                <textarea v-model="form.message" placeholder="Enter Message" name="message" id="message" cols="30" rows="4"></textarea>
                            </div>

                            <div class="mt-8 overflow-hidden">
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


                    </div>
                    <!-- ./ebd-container  -->

                    </section>


        </div>
        <!-- page container  -->


    </FrontEnd>

 </div>
</template>

<style>

 
</style>