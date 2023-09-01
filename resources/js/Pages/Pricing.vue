<script setup>
    import PageBanner from '@/Components/PageBanner.vue';
    import FrontEnd from '@/Layouts/Frontend.vue';
    import MostPopular from '@/Components/Svg/most-popular.svg';
    import { PhoneIcon, EnvelopeIcon, ChatBubbleLeftIcon, ArrowPathIcon, BookOpenIcon } from '@heroicons/vue/24/outline';
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

        <PageBanner heading="Website Services And <br/>Management Pricing" />

        <section id="intro" aria-labelledby="intro-heading" class="mt-14 mb-20">
            <div class="text-center ebd-container px-4 lg:px-12">
                    <h2 id="intro-heading" class="inline-block capitalize" style="line-height: 1.4">Unlock Complete Website Design and Management Services<br/> <small>- Starting At $628.00 -</small><hr/></h2>
                    <p class="ebd-leading-text">Evergreen By Design takes pride in offering you peace of mind when it comes to your website. My plans are all-inclusive and fully managed, providing everything necessary to launch and maintain your website with ease. You can say goodbye to concerns about renewing hosting and domains, deciphering complex website design jargon, and managing on-page optimization<br/> – I handle it all for you!</p>
                    <p class="my-12 ebd-leading-text">At Evergreen By Design, my pricing is divided into two components. Firstly, there's the one-time fee for your website design. The second component encompasses your continuous website services and management, requiring a monthly fee due on the date of your sign-up!</p>
                    <p class="text-center mb-12"><strong class="font-light">Please Note* <br/>There is an estimated 3% processing fee charge when making payments.</strong></p>

                    <div class="flex flex-col items-center md:flex-row justify-around  space-x-4">

                        <div class="ebd-card mb-10 sm:w-4/5 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                            <h3 class="mb-4 text-2xl">Website / Ecommerce Design <br/> <small>one-time payment</small> <hr/></h3>
                            <ul class="text-xl">
                                <li class="mb-2">Website Design:<br/> $499.00</li>
                                <li class="mb-2">Ecommerce Design:<br/> $749.00</li>
                            </ul>

                        </div>
                    
                        <div class="ebd-card mb-10 sm:w-4/5 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                            <h3 class="mb-4 text-2xl">Website Management Services <br/><small>monthly fee</small> <hr/></h3>
                            <ul class="text-xl">
                                <div class="flex flex-col sm:flex-row items-center justify-around">
                                    <div>
                                        <li class="mb-2">Basic Plan:<br/> $129.00</li>
                                        <li class="mb-2">Premium Plan:<br/> $179.00</li>
                                    </div>
                                    <div>
                                        <li class="mb-2">Gold Plan:<br/> $229.00</li>
                                        <li class="mb-2">Elite Plan:<br/> $279.00</li>
                                    </div>
                                </div>
                                
                                
                            </ul>

                        </div>
                       
                    </div>
                    
                    

                    <div class="flex flex-wrap justify-around sm:justify-center sm:space-x-2 mt-10">
                        <div class="space-x-2 mb-10">
                            <button id="contact-btn-pricing" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="flex mx-auto justify-start items-center text-xl"><span>Contact Today</span> <ChatBubbleLeftIcon class="w-5 h-5 ml-2"/></button>
                        </div>
                        <div class="space-x-2">
                            <a href="/media/docs/welcome-packet-evergreen-by-design.pdf" class="btn flex mx-auto justify-start items-center text-xl" download><span>Welcome Packet</span> <BookOpenIcon class="w-5 h-5 ml-2"/></a>
                        </div>
                    </div>
                    <hr class="w-1/3 mx-auto"/>
                </div>
        </section>

        <section id="ebd-section-pricing" class="scroll-mt-36 mt-20 mb-20">

            <div class="ebd-container space-y-24">


                <div id="package-container" class="flex flex-col lg:flex-row justify-start text-center max-w-sm sm:max-w-full mx-auto">

                    <div class="flex flex-col sm:flex-row justify-start w-full lg:w-1/2">

                        <div id="website-design" class="ebd-pricing shadow-md flex flex-col justify-between pb-4 w-full sm:w-1/2 mb-12">

                            <div class="heading-ul">
                                <div class="ebd-ph ph-teal">
                                    <h3 class="text-3xl text-white">Basic Plan <span class="block mt-4">$499 + $129/mo</span></h3>
                                    <p class="mb-0 text-white">Ecommerce (Shop)<br/>(Unavaliable)</p>
                                </div>

                                
                                <ul>
                                    
                                    <li><strong class="font-light">Website Design</strong>
                                        <span class="block text-base my-3">
                                        Logo Design<br/>
                                        SEO Friendly<br/>
                                        Up to 5 pages <br/>
                                        Website Security<br/>
                                        Mobile/Responsive Design<br/>
                                        Complete Content Creation<br/>
                                        
                                        </span>
                                    </li>
                                    
                                    <li><strong class="font-light">Full Website Hosting</strong>
                                        <span class="block text-base my-3">
                                            Nightly Backups<br/>
                                            Built-in Caching<br/>
                                            Unlimited Storage <br/>
                                            Unlimited Bandwidth<br/>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">1 Top-Level Domain</strong>
                                        <span class="italic mt-2 text-sm"><br/>(.com, .net, .org, etc...)</span>
                                    </li>
                                    <li><strong class="font-light">Ongoing Maintenance</strong>
                                        <span class="block text-base my-3">
                                            Website Fixes<br/>
                                            Weekly Updates<br/>
                                            Backups and Restores<br/>
                                            Performance Optimization<br/>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Personal Support</strong>
                                        <span class="block text-base my-3">
                                            Via Phone or Email<br/>
                                            One-on-One Video Support<br/>
                                        </span>
                                    </li>
                                    
                                    <li><strong class="font-light">Content Creation</strong>
                                        <span class="block text-base my-3">
                                            1 Unique Post Per Month<br/>
                                            1 Content Update Per Month<br/>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Content Management</strong>
                                        <span class="block text-base my-3">
                                            3 Posts Per Month <br/>
                                            1 Update Per Month<br/>
                                            1 Custom Post Type <br/>
                                            
                                        </span>
                                    </li>
                                    
                                    <li><strong class="font-light">Integrations</strong>
                                        <span class="block text-base my-3">
                                            AdSense<br/>
                                            Social Media <br/>
                                            Facebook Pixel<br/>
                                            Google Analytics<br/>
                                            Affiliate marketing<br/>
                                            Search Engine Console<br/>
                                            <span class="italic mt-2 text-sm">(And Many Others)</span>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">FREE HTTPS/SSL</strong></li>
                                </ul>

                            </div>
                            <!-- ./heading-ul  -->

                            <div class="b-link">
                                <Link :href="route('plan.details')+'#basic-plan'">See Details</Link>
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
                                        <MostPopular class="w-20 h-20 lg:w-16 lg:h-16 absolute -bottom-10 left-0" />
                                    </div>

                                    <ul>
                                        <li><strong class="font-light">Includes Basic Plan +</strong></li>
                                        <li><strong class="font-light">Website Design</strong>
                                            <span class="block text-base my-3">
                                                Up to 7 pages<br/>
                                                1 Landing Page<br/>
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
                                        <li><strong class="font-light">Content Management</strong>
                                            <span class="block text-base my-3">
                                                10 Posts Per Month <br/>
                                                2 Custom Post Type <br/>
                                                3 Updates Per Month
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Includes Email Marketing System</strong>
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
                                        <li><strong class="font-light">Content Creation</strong>
                                            <span class="block text-base my-3">
                                                2 Unique Posts Per Month<br/>
                                                2 Content Update Per Month<br/>
                                            </span>
                                        </li>
                                        <li><strong class="font-light">Unlimited Transactional Emails</strong></li>
                                        <li><strong class="font-light">Branding Removal</strong></li>
                                    </ul>
                                </div>
                                <!-- ./heading-ul  -->

                                <div class="b-link">
                                    <Link :href="route('plan.details')+'#premium-plan'">See Details</Link>
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
                                            5 Updates Per Month
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Includes Email Marketing System</strong>
                                        <span class="block text-base my-3">
                                            3 Weekly Emails <br/>
                                            2,500 Subscribers <br/>
                                            1 Email List Automation<br/>
                                            2 Email Template Design
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Content Creation</strong>
                                        <span class="block text-base my-3">
                                            3 unique post<br/>
                                            3 content update<br/>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Specialty  Self-Management Systems</strong>
                                        <span class="block text-base my-3">
                                            Shop Self-Management<br/>
                                            Event Postings<br/>
                                            Membership Websites<br/>Online Booking<br/>
                                            Email Marketing Self-Management<br/>
                                            Single-User Access<br/>
                                        </span>
                                        <span class="italic mt-2 text-sm">(Note* These are just a few of the Specialty systems available. If you are looking for something specific please contact me)</span>
                                    </li>
                                </ul>

                            </div>
                            <!-- ./heading-ul  -->

                            <div class="b-link">
                                <Link :href="route('plan.details')+'#gold-plan'">See Details</Link>
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
                                    <li><strong class="font-light">Includes Gold Plan +</strong></li>
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
                                            5 Custom Post Types <br/>
                                            7 Content Creations/Updating Per Month
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Includes Email Marketing System</strong>
                                        <span class="block text-base my-3">
                                            7 Weekly Emails <br/>
                                            5,000 Subscribers <br/>
                                            3 Email List Automation <br/>
                                            3 Email Template Design
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Content Creation</strong>
                                        <span class="block text-base my-3">
                                            4 unique post<br/>
                                            4 content update<br/>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">Specialty  Self-Management Systems</strong>
                                        <span class="block text-base my-3">
                                            All Post Access <br/>
                                            Multi-User Access<br/>
                                        </span>
                                    </li>
                                    <li><strong class="font-light">One-On-One Training</strong>
                                        <span class="block text-base my-3">
                                            Get One-On-One Zoom Video Training To Learn How To Use Your Specialty System.
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./heading-ul  -->


                            <div class="b-link">
                                <Link :href="route('plan.details')+'#elite-plan'">See Details</Link>
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


            <section id="faq" aria-labelledby="faq-heading" class="mb-20 scroll-mt-20">

            
                <h2 id="faq-heading" class="inline-block">FAQ <hr/></h2>

                <div class="mb-10">
                    <h3 class="mb-4">Do I get my domain if I decide to cancel?</h3>
                    <p>Yes, the domain you purchase with Evergreen By Design is yours. You can transfer it to any registrar of your choice upon canceling your plan. Evergreen By Design does NOT cover this type of transfer cost.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Can I use my Logo design for my business?</h3>
                    <p>Yes, your logo design is 100% yours. You can even copyright or trademark it under your business name.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">What if I already have a domain?</h3>
                    <p>No problem! You can either keep the domain in your registrar or transer it to my registrar and Evergreen By Design will take on future payments.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-4">Do you really create content?</h3>
                    <p>Yes, I create content for your website. You can even have blog post create for your website as well. You can also review and alter any content that is created for your website.</p>
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
                    <p>For the most part no, that is the nice thing about a full managed website, I do all the work. But, sometimes you need control on the fly and Evergreen By Design does this with Specialty Systems. A Gold plan or above comes with a Specialty Self-Management System. This give you access to that part of the website for your own personal control. The Elite plan comes with personal one-on-one training for your Specialty System.</p>
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


    </FrontEnd>

 </div>
</template>

<style>

.ebd-pricing {
        @apply border border-slate-300 rounded-lg  overflow-hidden bg-white;
    }

    .ebd-leading-text {
        @apply text-lg md:text-xl;
        line-height: 1.85;
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