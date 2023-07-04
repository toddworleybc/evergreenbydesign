<script setup>
    import PageBanner from '@/Components/PageBanner.vue';
    import FrontEnd from '@/Layouts/Frontend.vue';
    import MostPopular from '@/Components/Svg/most-popular.svg';
    import { PhoneIcon, EnvelopeIcon, ChatBubbleLeftIcon, ArrowPathIcon } from '@heroicons/vue/24/outline';
    import { ref, onMounted } from 'vue';
    import { modal } from '@/Utilities/modal';
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

        <Head title="Website Pricing">
            <meta name="description" content="Evergreen By Design offers competitive pricing for your website design and management services.">
        </Head>

        <PageBanner heading="Website Services And <br/>Management Pricing" />

        <section id="intro" aria-labelledby="intro-heading" class="mt-8 mb-20">
            <div class="text-center md:text-left ebd-container">
                    <h2 id="intro-heading" class="inline-block capitalize">Get a full website design and management starting at $628<hr/></h2>
                    <p>Evergreen By Design is proud to offer peace of mind with your website. These plans are FULLY MANAGED website plans and each plan comes with everything that you need to get your website up and running.</p>
                    <p>You will not have to worry about Hosting renewals, Domain renewals, complicated website design lingo, on-page optimization and more!</p>
                    <p>Evergreen By Design has a dual pricing system. One is the price for your website design. This is a ONE-TIME fee that is due when you sign up with Evergreen By Design. The other is for your website services and management. This is a MONTHLY fee that is due every month on the date that you signed up.</p>
                    <p><strong class="font-light">Please Note* There is an estimated 3% processing fee charge when making payments.</strong></p>

                    
                    <div class="mb-10 mt-8">
                        <h3 class="mb-4">Website Design fee: ONE-TIME Payment</h3>
                        <ul>
                            <li>- Website Design: $499.00</li>
                            <li>- Ecommerce (Shop) Design: $749.00</li>
                        </ul>

                    </div>
                    
                    <div class="mb-10">
                        <h3 class="mb-4">Website Services and Management fee: Monthly Fee</h3>
                        <ul>
                            <li>- Basic Plan: $129.00</li>
                            <li>- Premium Plan: $179.00</li>
                            <li>- Gold Plan: $229.00</li>
                            <li>- Elite Plan: $279.00</li>
                        </ul>

                    </div>
                    

                    <div class="space-x-2">
                        <button id="contact-btn-pricing" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="flex mx-auto md:mx-0 justify-start items-center text-xl"><span>Contact Today</span> <ChatBubbleLeftIcon class="w-5 h-5 ml-2"/></button>
                    </div>
                </div>
        </section>

        <section id="ebd-section-pricing" class="scroll-mt-36 mt-20 mb-20">

            <div class="ebd-container space-y-24">


                <div id="package-container" class="flex flex-col lg:flex-row justify-start text-center max-w-sm sm:max-w-full mx-auto">

                    <div class="flex flex-col sm:flex-row justify-start w-full lg:w-1/2 mb-12">

                        <div id="website-design" class="ebd-pricing shadow-md flex flex-col justify-between pb-4 w-full sm:w-1/2 mb-12">

                            <div class="heading-ul">
                                <div class="ebd-ph ph-teal">
                                    <h3 class="text-3xl text-white">Basic Plan <span class="block mt-4">$499 + $129/mo</span></h3>
                                    <p class="mb-0 text-white">Ecommerce (Shop)<br/>(Unavaliable)</p>
                                </div>

                                
                                <ul>
                                    
                                    <li><strong class="font-light">Website Design</strong>
                                        <span class="block text-base my-3">
                                        Up to 5 pages <br/>
                                        SEO Friendly<br/>
                                        Website Security<br/>
                                        Mobile/Responsive Design<br/>
                                        </span>
                                    </li>
                                    
                                    <li><strong class="font-light">Includes Hosting</strong></li>
                                    <li><strong class="font-light">Includes 1 Domain</strong>
                                    </li>
                                    <li><strong class="font-light">Ongoing Maintenance</strong></li>
                                    <li><strong class="font-light">Https/SSL</strong></li>
                                    <li><strong class="font-light">Content Management</strong>
                                        <span class="block text-base my-3">
                                            3 Posts Per Month <br/>
                                            1 Custom Post Type <br/>
                                            1 Content Update Per Month
                                        </span>
                                    </li>
                                    
                                    <li><strong class="font-light">Integrations</strong>
                                        <span class="block text-base my-3">
                                            Social Media <br/>
                                            Google Analytics
                                        </span>
                                    </li>
                                </ul>

                            </div>
                            <!-- ./heading-ul  -->

                            <div class="b-link">
                                <Link :href="route('plan.details')">See Details</Link>
                            </div>
                            <!-- ./b-link  -->

                        </div>
                            <!-- #/website-design  -->

                        <!-- Premium Design  -->
                        
                            <div id="premium-p" class="ebd-pricing transform sm:scale-105 bg-white shadow-xl flex flex-col justify-between pb-4 w-full sm:w-1/2 mb-12">

                                <div class="heading-ul">
                                    <div class="ebd-ph ph-purple relative">
                                        <h3 class="text-3xl text-white">Premium Plan<span class="block mt-4">$499 + $179/mo</span></h3>
                                        <p class="text-white">Ecommerce (Shop)<br/> $749 + $179/mo</p>
                                        <MostPopular class="w-20 h-20 lg:w-16 lg:h-16 absolute -bottom-10 left-0 lg:left-0" />
                                    </div>

                                    <ul>
                                        <li><strong class="font-light">Includes Basic Plan +</strong></li>
                                        <li><strong class="font-light">Website Design</strong>
                                            <span class="block text-base my-3">
                                                Up to 7 Pages <br/>
                                                1 Landing Page <br/>
                                                1 Page Redesign Per Year
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Ecommerce Design</strong>
                                            <span class="block text-base my-3">
                                                Cart Page <br/>
                                                Shop Page <br/>
                                                Account Page <br/>
                                                Checkout Page <br/>
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Unlimited Transactional Emails</strong></li>
                                        <li><strong class="font-light">Content Management</strong>
                                            <span class="block text-base my-3">
                                                10 Posts Per Month <br/>
                                                2 Custom Post Types <br/>
                                                3 Content Updates Per Month
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Includes Email Marketing</strong>
                                            <span class="block text-base my-3">
                                                1 Weekly Emails <br/>
                                                1,500 Subscribers <br/>
                                                1 Email Template Design <br/>
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Professional Domain Email</strong>
                                            <span class="block text-base my-3">
                                                you@yourdomain.com
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Intergrations</strong>
                                            <span class="block text-base my-3">
                                                AdSense<br/>
                                                Affiliate marketing 
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./heading-ul  -->

                                <div class="b-link">
                                    <Link :href="route('plan.details')">See Details</Link>
                                </div>
                                <!-- ./b-link  -->
                                
                            </div>
                            <!-- #/premium-p  -->


                    </div>

                    
                        
                    
                    <div class="flex flex-col sm:flex-row justify-start w-full lg:w-1/2 mb-12">

                        <div id="gold-p" class="ebd-pricing shadow-md flex flex-col justify-between pb-4 w-full sm:w-1/2 mb-12">
                            
                            <div class="heading-ul">

                                <div class="ebd-ph ph-orange">
                                    <h3 class="text-3xl text-white">Gold Plan<span class="block mt-4">$499 + $229/mo</span></h3>
                                    <p class="text-white">Ecommerce (Shop)<br/> $749 + $229/mo</p>
                                </div>
                                
                                <ul>
                                    <li><strong class="font-light">Includes Premium Plan +</strong></li>
                                    <li><strong class="font-light">Website Design</strong>
                                        <span class="block text-base my-3">
                                            Up to 10 pages <br/>
                                            2 Landing Pages <br/>
                                            3 Page Redesign Per Year
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Content Management</strong>
                                        <span class="block text-base my-3">
                                            15 Posts Per Month <br/>
                                            3 Custom Post Types <br/>
                                            5 Content Updates Per Month
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Includes Email Marketing</strong>
                                        <span class="block text-base my-3">
                                            3 Weekly Emails <br/>
                                            2,500 Subscribers <br/>
                                            1 Email List Automation<br/>
                                            2 Email Template Design
                                        </span>
                                    </li>
                                </ul>

                            </div>
                            <!-- ./heading-ul  -->

                            <div class="b-link">
                                <Link :href="route('plan.details')">See Details</Link>
                            </div>
                            <!-- ./b-link  -->

                        </div>
                        <!-- #/gold-p  -->


                        <div id="elite-p" class="ebd-pricing shadow-md flex flex-col justify-between pb-4 w-full sm:w-1/2 mb-12">


                            <div class="heading-ul">
                                <div class="ebd-ph ph-green">
                                    <h3 class="text-3xl text-white">Elite Plan<span class="block mt-4">$499 + $279/mo</span></h3>
                                    <p class="text-white">Ecommerce (Shop)<br/> $749 + $279/mo</p>
                                </div>
                                <ul>
                                    <li><strong class="font-light">Includes Premium Plan +</strong></li>
                                    <li><strong class="font-light">Website Design</strong>
                                        <span class="block text-base my-3">
                                            Up to 15 pages <br/>
                                            3 Landing Pages <br/>
                                            5 Page Redesigns Per Year
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Content Management</strong>
                                        <span class="block text-base my-3">
                                            20 Posts Per Month <br/>
                                            3 Custom Post Types <br/>
                                            7 Content Updates Per Month
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Includes Email Marketing</strong>
                                        <span class="block text-base my-3">
                                            7 Weekly Emails <br/>
                                            5,000 Subscribers <br/>
                                            3 Email List Automation <br/>
                                            3 Email Template Design
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./heading-ul  -->


                            <div class="b-link">
                                <Link :href="route('plan.details')">See Details</Link>
                            </div>
                            <!-- ./b-link  -->
                            
                        </div>
                        <!-- #/training  -->

                    </div>

                    

                </div>
                <!-- #/package-container  -->


            </div>
            <!-- ./ebd-container  -->



        </section>

       


        <div class="max-w-3xl mx-auto mt-8">


            <section id="faq" aria-labelledby="faq-heading" class="mb-20">

            
                <h2 id="faq-heading" class="inline-block">FAQ <hr/></h2>

                <div class="mb-10">
                    <h3 class="mb-4">Do I get my domain if I decide to cancel?</h3>
                    <p>Yes, the domain you purchase with Evergreen By Design is yours. You can transfer it to any registrar of your choice upon canceling your plan. Evergreen By Design does NOT cover this type of transfer cost.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Can I change my plan?</h3>
                    <p>Yes, you may always upgrade your plan at any time. You may downgrade your plan after 90 days from signing up with Evergreen By Design.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Can I access my professional email?</h3>
                    <p>Yes, you will be given a link and password to access your professional email. You may change this password to anything that you want.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Can I cancel my plan?</h3>
                    <p>Yes, you can cancel your plan after 60 days of signing up with Evergreen By Design.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Do I have access to my website?</h3>
                    <p>No, you do not have access to your website as this is part of the management services that I provide. All access goes through me to ensure the quality of management for your website.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">How long does it take for changes to my website?</h3>
                    <p>I can typically make changes to your website in 1 to 3 business days. I do ask that you plan accordingly!</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">If my website breaks how long will it take to fix?</h3>
                    <p>While it is very rare it does happen from time to time. I usually can fix the website within 1 day of website breakage.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Can you market my website?</h3>
                    <p>I do not perform any marketing services, whether online or in the real world, for your business. Marketing is your responsibility. I will make sure that your content is SEO friendly.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Can you make my website first in search engine rankings?</h3>
                    <p>No, Evergreen By Design guarantees no search engine ranking position nor does Evergreen By Design control search engine rankings.</p>
                </div>

            </section>


            
            
            


        </div>
        <!-- page container  -->

        <section id="ebd-section-contact" class="contact-bg-gradient mb-0">

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
                            <button class="mt-4"
                            :disabled="form.processing">Send Message</button>
                            
                            <p v-if="formSuccess">Thank you for submitting the form!</p>
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

.ebd-pricing {
        @apply border border-slate-300 rounded-lg  overflow-hidden bg-white;
    }

    .ebd-pricing .ebd-ph {
        background-color: #0093E9;
        @apply text-lg mb-4 space-y-4;
        text-shadow: 1.8px 1.2px 5px rgba(26, 25, 25, 0.628);
    }

    .ebd-ph.ph-teal {
        background: linear-gradient(156deg, rgba(0,161,245,1) 0%, rgba(6,61,177,1) 100%);
    }

    .ebd-ph.ph-purple {
        background: linear-gradient(156deg, rgba(245,0,239,1) 0%, rgba(134,0,178,1) 100%);
    }

    .ebd-ph.ph-orange {
        background: linear-gradient(156deg, rgba(255,188,87,1) 0%, rgba(199,146,10,1) 100%);
    }

    .ebd-ph.ph-green {
        background: linear-gradient(156deg, rgba(108,222,58,1) 0%, rgba(10,201,102,1) 100%);
    }

    .ebd-pricing ul {
        @apply py-2 px-4;
    }

    .ebd-pricing ul li {
        @apply border-b border-slate-300 mb-4 pb-2;
    }

    .ebd-pricing ul li:last-child {
        @apply border-0;
    }

    .ebd-ph {
        @apply shadow-sm py-2 px-4;
    }

    .ebd-ph h3 {
        @apply border-b pb-4 border-slate-100
    }

 
</style>