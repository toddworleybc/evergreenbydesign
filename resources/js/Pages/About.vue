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

        <Head title="About">
            <meta name="description" content="Evergreen By Design provides all your website design and service needs including hosting, domains, email marketing, and more. Learn all about Evergreen By Designs website services today!">
        </Head>

        <PageBanner heading="About <br/> Evergreen By Design" />



        <div class="max-w-3xl mx-auto mt-8">

            <section class="mb-0">

                
                <h2 class="inline-block mb-0">Welcome To Evergreen By Design<hr/></h2>
                <ComputerImg class="w-72 mb-6" />
                
                <p>My name is Todd, and I am the owner Evergreen By Design. I created this business to help people with all their website design needs and management.</p>
                <p>My goal is to take all the stress out of having to design and manage a website. Instead, you now have a person who can handle all your website needs and is just a phone call or email away.</p>
                <p>Yes, that is right. You will have a direct line to me, not a service agent or a random technician, you will not be directed to some call center in India.</p>
                <p>You get direct contact with me, the one who setup, designed, and knows everything about your website.</p>

            </section>


            <section class="mb-0">

                <h2 class="inline-block mb-0">A Little History<hr/></h2>
                <img src="/media/images/svg/history.svg" class="w-96 my-6" alt="">
                <p>I actually started off in the web world as a blogger. I ran affiliate products on my website and offered blog coaching and website setup as part of my services.</p>
                <p>What I started to notice was more people were interested in my expertise as a website designer than a blog coach. Which was great because I really wasn&#39;t too fond of the blog coaching myself. I did however, love the website design aspect.</p>
                <p>The only problem was I had little expertise at the time when it came to coding or anything of that nature and my website design skills were based on the limitations of the CMS (content management system) that I was using.</p>
                <p>I knew though that if I wanted to get serious about website design, I had to improve my skills.</p>
                <p>So, I decided to take a HTML/CSS coding course. From there, my joy in designing websites turned into love for coding and learning how to build them from scratch.</p>
                <p>I quickly became obsessed with learning many other programing languages and going beyond that of a website designer to a website developer!</p>
                <p>I got my new business up and running and started designing websites for clients. The only problem was that I had to direct my clients on how to buy hosting, domain, email marketing etc.</p>
                <p>My clients were thrilled about the website design part, but they weren’t thrilled about having to buy all these third-party systems and learning how to use them.</p>
                <p>This ended up become a nightmare not just for my clients but for me as well who always tries to go above and beyond to help people.</p>
                <p>So, I closed up shop for a little while and regrouped and formulated a plan to make sure that my clients were always taken care of.</p>

            </section>




            <section>

                <h2 class="inline-block">Present Day <hr/></h2>
                <img src="" alt="">
                <p>Now I take care of everything you need to get your website online!</p>
                <p> I have sat down and tailored each plan to fit anyone&#39;s needs, whether that be small businesses who only need a basic plan to create an online presence or to a shop owner looking to sell online with unlimited transactional emails and email marketing!</p>
                <p>Plus, you have my continued management and service for your website for as long as you are with Evergreen By Design.</p>

                <div class="flex space-x-2">
                    <Link class="btn" :href="route('home')+'/#ebd-section-pricing'">View Pricing</Link>
                    <Link class="btn" :href="route('plan.details')">See Plan Details</Link>
                </div>
                

            </section>

        </div>
        <!-- page container  -->

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

    </FrontEnd>

 </div>
</template>

<style>

.contact-heading {
        @apply text-lg mb-4 space-y-4;
        text-shadow: 1.8px 1.2px 5px rgba(26, 25, 25, 0.628);
    }
 
</style>