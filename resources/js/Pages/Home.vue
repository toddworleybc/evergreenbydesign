<script setup>
    import Frontend from '@/Layouts/Frontend.vue';
    import { Link, useForm, Head } from '@inertiajs/vue3';
    import HeroBanner from '@/Components/HeroBanner.vue';
    import ComputerImg from '@/Components/Svg/computer-green-screen.svg';
    import OwlImg from '@/Components/Svg/owl.svg';
    import MostPopular from '@/Components/Svg/most-popular.svg';
    import WorkImg from '@/Components/Svg/work.svg';
    import { modal } from '@/Utilities/modal';
    import { ref, onMounted } from 'vue';
    import { CircleStackIcon, EnvelopeOpenIcon, PhotoIcon, RectangleGroupIcon, UserGroupIcon, WrenchScrewdriverIcon, ChatBubbleLeftIcon, ArrowPathIcon, EnvelopeIcon, PhoneIcon } from '@heroicons/vue/24/outline';
    



    
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
            onError() {
                grecaptcha.reset();
                
                formErrors.value = true;
               
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
        <Frontend>

            <Head title="Evergreen By Design">
                <meta name="description" content="Evergreen By design provides both website design and FULL ongoing website management. Get your website services started today!">
                <meta name="keywords" content="evergreen by design website design and management, website design roseburg oregon, website management roseburg oregon, website services roseburg oregon, website design, website management,full website management, website services, website designer">
            </Head>

            <HeroBanner />
        
                <section id="ebd-section-intro" class="mt-40 md:pt-0" aria-labelledby="ebd-intro-heading">
                    
                    <div class="ebd-container">

                        <div class="md:flex md:justify-between">
                        
                            <div class="w-full md:w-8/12 space-y-5 md:mr-10 text-center md:text-left">
                                <h2 id="ebd-intro-heading" class="inline-block">A Little Bit About Evergreen By Design Websites<hr/></h2> 
                                
                                <p>Here at Evergreen By Design I provide <strong class="font-light">COMPLETE WEBSITE MANAGEMENT & SERVICES</strong> where the only tech you will have to use is an email and/or phone.</p>
                                <p>My website services offer everything you need to get your website up and running. This includes professional website design, hosting, domain, email marketing, and more…</p>
                                <p>The plans below also include content management and uploading, including sending weekly emails, products, events, and more…</p>
                                
                                <p>To put it simply, I do it all for you! With Evergreen By Design you got someone in your corner when it comes to your website needs!</p>
                                
                            </div>

                            <div class="hidden md:block md:show md:w-4/12">
                                <ComputerImg class="w-full shadow-lg" />
                            </div>
                        </div>
                        <div class="text-center md:text-left">
                            <Link class="btn mt-8 inline-block" :href="route('about')">Learn More</Link>
                        </div>
                        
                        <div class="pt-20">
                            <img class="w-full" :src="`${route('home')}/media/images/png/castle2.png`" alt="">
                        </div>

                    </div>
                    <!-- ./ebd-container  -->
                </section>

                

                <section id="ebd-section-pricing" class="scroll-mt-36">

                    <div class="ebd-container space-y-24">

                        <div class="text-center md:text-left">
                            <h2 class="inline-block">Get Your Website For ONLY $628<hr/></h2>
                            <p>Below are the plans offered by Evergreen By Design. These plans represent two categories:</p> <p><strong class="font-light">Website Design $499 (Shop $749) + Website Management (cost per month).</strong></p><p>Simply choose the plan that fits your needs then call or email me to get services started. Just that simple!</p>
                            
                            <p><strong class="font-light">Please Note* There is an estimated 3% processing fee charge when making payments.</strong></p>

                            <div class="space-x-2">
                                <button id="contact-btn-pricing" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="flex mx-auto md:mx-0 justify-start items-center text-xl"><span>Contact Today</span> <ChatBubbleLeftIcon class="w-5 h-5 ml-2"/></button>
                            </div>
                        </div>
                    
                    

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
                                                <li><strong class="font-light">Unlimited Transactional Emails</strong></li>
                                                <li><strong class="font-light">Content Management</strong>
                                                    <span class="block text-base my-3">
                                                        10 Posts Per Month <br/>
                                                        2 Custom Post Type <br/>
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
                                                    5 Custom Post Types <br/>
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

              

                <section id="ebd-section-services" aria-labelledby="ebd-services-heading" class="pb-10 px-0">

                    <div class="ebd-container">

                    

                        <div class="flex space-y-8 flex-col md:flex-row justify-between  items-center px-6 md:px-4">
                            <div class="text-center md:text-left">
                                <h2 id="ebd-services-heading" class="capitalize inline-block">All your website services in one place<hr/></h2>
                                <p>Tired of having to hop between different services or dealing with technology that you might not understand when it comes to website design and management? Well, your worries are over!</p>
                                <p>Evergreen By Design takes all the tech work out of website design and management!</p>
                                <Link :href="route('plan.details')" class="text-xl btn">View All Services</Link>
                            </div>
                            <WorkImg class="w-4/6 md:w-4/6" />
                            
                        </div>
                        
                        <div class="mt-12 pt-6 ebd-background-cards">

                            <div class="ebd-card-container items-center flex flex-col md:items-stretch md:flex-row md:justify-around lg:justify-between flex-wrap py-4 md:py-12 px-1 md:px-4">

                            
                                <div class="ebd-card w-10/12 md:w-80 mb-12 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                                    <CircleStackIcon class="w-12 h-12 mx-auto mb-4" />
                                    <h3 class="text-2xl">Hosting<hr/></h3>
                                    <p>Hosting service is included with your plan. This also includes complete hosting management and even daily backups of your server!</p>
                                    <!-- <button>Learn More</button> -->
                                </div>

                                <div class="ebd-card w-10/12 md:w-80 mb-12 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                                    <RectangleGroupIcon class="w-12 h-12 mx-auto mb-4" />
                                    <h3 class="text-2xl">Website Design<hr/></h3>
                                    <p>Your online presence starts with a great looking website! I not only design your website, but I make sure it is mobile and SEO friendly.</p>
                                </div>


                                <div class="ebd-card w-10/12 md:w-80 mb-12 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                                    <UserGroupIcon class="w-12 h-12 mx-auto mb-4" />
                                    <h3 class="text-2xl">Content Management<hr/></h3>
                                    <p>This is really the great thing about these plans. The fact that you can make changes on your website without having to learn complicated technology!</p>
                                </div>


                                <div class="ebd-card w-10/12 md:w-80 mb-12 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                                    <WrenchScrewdriverIcon class="w-12 h-12 mx-auto mb-4" />
                                    <h3 class="text-2xl">Ongoing Maintenance<hr/></h3>
                                    <p>Your website is precious and sometimes things change in the tech world. If your website does not receive regular maintenance then it not only becomes vulnerable to attacks, but your entire website can break!</p>
                                </div>


                                <div class="ebd-card w-10/12 md:w-80 mb-12 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                                    <PhotoIcon class="w-12 h-12 mx-auto mb-4" />
                                    <h3 class="text-2xl">Unlimited Transactional Emails<hr/></h3>
                                    <p>This is great for anyone who is running a shop and all emails are sent through an SMTP service. To put it simple, this insures that your emails go to the inbox and not the spam folder!</p>
                                </div>

                                <div class="ebd-card w-10/12 md:w-80 mb-12 bg-green-50 text-center py-6 px-4 rounded shadow-lg">
                                    <EnvelopeOpenIcon class="w-12 h-12 mx-auto mb-4" />
                                    <h3 class="text-2xl">Email Marketing<hr/></h3>
                                    <p>The backbone of any website is maintaining contact with people who visit your website. Collecting subscribers and keeping in touch with them promotes your website and sales</p>
                                </div>   
                            </div>
                            <!-- ./ebd-card-container -->
                        </div>
                        <!-- ./ebd-card-divider -->


                    </div>
                    <!-- ./ebd-container  -->
                  
                </section>

                <section id="ebd-section-inspiration" class="relative">
                    <div class="absolute -top-0 right-2 -translate-y-1/2">
                        <OwlImg class="w-60" />
                    </div>
                    <div class="ebd-container">
                        <h2 class="text-6xl py-24 text-white inspiration-heading text-center capitalize">Get the website design and management that your business needs to succeed in todays world!</h2>
                    </div>
                </section>


                <section id="ebd-section-experience" class="text-center md:text-left relative expertise-bg py-24" aria-labelledby="ebd-experience-heading">


                    <div class="ebd-container bg-white bg-opacity-90 shadow py-6 px-8 rounded">

                        <h2 id="ebd-experience-heading" class="capitalize inline-block mb-4">The experience and expertise you get with Evergreen By Design<hr/></h2>
                        <p class="text-xl mb-12">I have been building websites and developing web technologies for over 7 years. Below are the technologies I have used to help build websites and develop web based systems for organizations. Let me help you build the online presence you deserve! &#128522;</p>
                        
                        <div class="flex flex-col md:flex-row xl:justify-start flex-wrap ols-container">
                            <div class="order-2 mb-10 lg:border-r-2 md:pr-10 md:mr-10">
                                <h3 class="mb-4">Web Design</h3>
                                <ul class="list-none">
                                    <li>UX/UI</li>
                                    <li>Photoshop</li>
                                    <li>Graphic Design</li>
                                    <li>Frontend and Backend Design</li>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                </ul>
                            </div>

                            <div class="order-3 lg:order-3">
                                <h3 class="mb-4">Web Technologies</h3>
                                <ul class="list-none">
                                    <div class="flex flex-col sm:flex-row sm:justify-between sm:space-x-6">

                                        <div>
                                            <li>Javascript</li>
                                            <li>PHP</li>
                                            <li>XML</li>
                                            <li>Sass</li>
                                            <li>JSON</li>
                                            <li>VueJs</li>
                                        </div>
                                        <div>
                                            <li>Laravel</li>
                                            <li>Git</li>
                                            <li>Ubuntu</li>
                                            <li>NodeJS</li>
                                            <li>Tailwind Css</li>
                                            <li>Bootstrap</li>
                                        </div>
                                        <div>
                                            <li>Nginx (server)</li>
                                            <li>InertiaJs</li>
                                            <li>Linux</li>
                                            <li>Composer (php)</li>
                                            <li>Apache (server)</li>
                                            <li>MySQL (database)</li>
                                        </div>
                                        <div>
                                            <li>ViteJs</li>
                                            <li>Materialize Css</li>
                                            <li>jQuery (used for systems only)</li>
                                            <li>Wordpress Development</li>
                                        </div>
                                        


                                    </div>
                                    <!-- ul list flex  -->
                                    
                                </ul>
                            </div>
                        
                        </div>
                        <!-- ols-container -->




                    </div>
                    <!-- ./ebd-container  -->
                    
                    
                </section>

                

                <section id="ebd-section-testimonials">
                    <div class="ebd-container">
                        <h2 class="inline-block mb-24">What They Say About Evergreen By Design <hr/></h2>

                        <div class="tesimonial-container">

                            <div class="testimonial-individual bg-green-300 bg-opacity-90 mb-32">

                                <div class="testimonial-info bg-white w-11/12 rounded shadow-xl -translate-y-8 flex flex-col md:flex-row items-center py-6 px-8 ml-4 border border-gray-200">
                                    <div class="testimonial-image rounded-full overflow-hidden border border-yellow-400 shadow shadow-yellow-300 mb-6">
                                        <img class="w-36" src="/media/images/jpg/Miriam L.jpg" alt="">
                                    </div>
                                    <div class="testimonial-text w-5/6 md:w-2/3 ml-5">
                                        <h4 class="mb-2">Miriam L.</h4>
                                        <p>I was struggling with the tech in my Wordpress website till I was lucky enough to meet Todd. He's an awesome & gifted web designer that goes the extra mile to not only make sure that everything runs smoothly, but also makes it beautiful! I highly recommend Todd and Evergreen by Design to anyone who needs a talented designer.</p>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!-- //====/ -->


                            <div class="testimonial-individual bg-purple-300 bg-opacity-90 mb-32">

                                <div class="testimonial-info bg-white w-11/12 rounded shadow-xl -translate-y-8 flex flex-col md:flex-row items-center py-6 px-8 ml-4 border border-gray-200">
                                    <div class="testimonial-image rounded-full overflow-hidden border border-yellow-400 shadow shadow-yellow-300 mb-6">
                                        <img class="w-36" src="/media/images/jpg/Kelly H.jpg" alt="">
                                    </div>
                                    <div class="testimonial-text w-5/6 md:w-2/3 ml-5">
                                        <h4 class="mb-2">Kelly H.</h4>
                                        <p>I would highly recommend Evergreen By Design for all of your web-design needs. Todd is highly efficient and more importantly, he cares. My favorite thing about Todd is that he answers my questions and explains things in a respectful way that I can understand. (I like to know how things work). If by chance I ask a random question and he doesn't know right away, he is humble enough to say, "I'll find out and get back to you." And then, he does. He works hard to satisfy and is gifted at what he does.
                                        </p>
                                    </div>
                                </div>


                                </div>
                                <!-- //====/ -->


                                <div class="testimonial-individual bg-teal-300 bg-opacity-90 mb-32">

                                    <div class="testimonial-info bg-white w-11/12 rounded shadow-xl -translate-y-8 flex flex-col md:flex-row items-center py-6 px-8 ml-4 border border-gray-200">
                                        <div class="testimonial-image rounded-full overflow-hidden border border-yellow-400 shadow shadow-yellow-300 mb-6">
                                            <img class="w-36" src="/media/images/jpg/Heather R.png" alt="">
                                        </div>
                                        <div class="testimonial-text w-5/6 md:w-2/3 ml-5">
                                            <h4 class="mb-2">Heather R.</h4>
                                                <p>Todd does such a great job on our company website.  He is very efficient and detailed. He answered all our questions and he explained everything thoroughly and simply.  

                                                He was even willing to come into our office and do a quick fix on our other website that I was unable to figure out myself.

                                                I would highly recommend Evergreen By Design.
                                                </p>
                                        </div>
                                    </div>


                                </div>
                                <!-- //====/ -->


                        </div>

                    </div>
                    
                </section>

                <section id="ebd-section-portfolio" class="px-0 mb-0">

                    <div class="flex justify-center mb-20">
                        <h2 class="inline-block">Here Is Some Of My Work <hr/></h2>
                    </div>

                    <div class="py-8 portfolio-bg">

                    

                        <div class="ebd-container">


                                <div class="flex flex-col items-center md:flex-row flex-wrap justify-around md:space-x-10">

                                <div class="w-5/6 md:w-5/12 mb-10 shadow-md border border-gray-200 py-4 px-8 rounded space-y-10 bg-white">
                                    <h3>JustDuctless</h3>
                                    <a href="https://justductless.com/" target="_blank">justductless.com</a>
                                    <img class="w-full" :src="`${route('home')}/media/images/jpg/Justductless.jpg`" alt="">
                                </div>

                                <div class="w-5/6 md:w-5/12 mb-10 shadow-md border border-gray-200 py-4 px-8 rounded space-y-10 bg-white">
                                    <h3>Statewide Exhaust</h3>
                                    <a href="Https://statewideexhaustservices.com/" target="_blank">statewideexhaustservices.com</a>
                                    <img class="w-full" :src="`${route('home')}/media/images/jpg/statewideexhaust.jpg`" alt="">
                                </div>




                                <div class="w-5/6 md:w-5/12 mb-10 shadow-md border border-gray-200 py-4 px-8 rounded space-y-10 bg-white">
                                    <h3>Double K Cleaning</h3>
                                    <a href="https://www.doublekkleaning.com/" target="_blank">doublekcleaning.com</a>
                                    <img class="w-full" :src="`${route('home')}/media/images/jpg/double-k-cleaning.jpg`" alt="">
                                </div>
                                </div>
                                <!-- ./flex  -->

                                <div class="flex flex-col md:flex-row flex-wrap justify-around items-center md:space-x-10">

                                <div class="w-5/6 md:w-5/12 mb-10 shadow-md border border-gray-200 py-4 px-8 rounded space-y-10 bg-white">
                                    <h3>Lines of Expression</h3>
                                    <a href="https://linesofexpression.com/" target="_blank">linesofexpression.com</a>
                                    <img class="w-full" :src="`${route('home')}/media/images/jpg/linesofexpression.jpg`" alt="">
                                </div>


                               


                                <div class="w-5/6 md:w-5/12 mb-10 shadow-md border border-gray-200 py-4 px-8 rounded space-y-10 bg-white">
                                    <h3>Nicc's Direct Primary Care</h3>
                                    <a href="https://www.niccdpc.com/" target="_blank">niccdpc.com/</a>
                                    <img class="w-full" :src="`${route('home')}/media/images/jpg/Niccs-Rogers-Website.jpg`" alt="">
                                </div>

                                </div>
                                <!-- ./flex  -->
                            
                        </div>
                        <!-- ./ebd-container  -->

                    </div>
                </section>

              

                <section id="ebd-section-contact" class="contact-bg-gradient mt-20 mb-0">

                    <div class="ebd-container flex flex-col md:flex-row justify-start items-start shadow-lg border rounded md:w-5/6 mx-auto">

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
            
        </Frontend>
    </div>
</template>

<style>

    .contact-heading {
        @apply text-lg mb-4 space-y-4;
        text-shadow: 1.8px 1.2px 5px rgba(26, 25, 25, 0.628);
    }

    #ebd-section-testimonials {
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.816), rgba(255, 255, 255, 0.641)), url('/media/images/svg/forest.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;


    }
    
    .expertise-bg {
        background-image: url('/media/images/svg/lines-3.svg');
        background-repeat: no-repeat;
        background-position: top center;
        background-size: cover;
    }

    #ebd-section-inspiration {
        background-image: linear-gradient(to bottom, rgba(72, 112, 32, 0.616), rgba(22, 104, 22, 0.565)), url('/media/images/jpg/landscape.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .inspiration-heading {
        text-shadow: 2px 2px 20px black;
        line-height: 1.1;
    }

    #ebd-section-services {
        background-image: url('/media/images/svg/lines-blue.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }


    .portfolio-bg {
        background-image: linear-gradient(to bottom right, #ffffffac, #ffffff77), url('/media/images/svg/lines.svg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }



    /* .experience-bg {
        background-image: linear-gradient(225deg, rgba(255, 255, 255, 0.588), rgba(0, 128, 0, 0.392)), url('/media/images/svg/forest.svg');
        background-size: cover;
    } */



    /* USE AS PAGE BANNER  */

    

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



    /* th {
        @apply px-4 py-4;
    }

    td {
        @apply px-4 py-2
    }

    td .t-icon-green {
        @apply w-6 h-6 stroke-green-500 mx-auto;
    }

    td .t-icon-red {
        @apply w-6 h-6 stroke-red-500 mx-auto;
    }

    th, td {
        @apply border border-slate-300;
    }

    th a, td a {
        @apply font-light;
    } */
 
</style>