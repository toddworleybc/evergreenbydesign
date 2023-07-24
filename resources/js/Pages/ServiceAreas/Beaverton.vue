<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal';
 
</script>

<template>

    <Frontend>

        <Head title="Beaverton Oregon | Website Design and Management Services">
            <meta name="description" content="Evergreen By Design provides great website design and services for the area of Beaverton Oregon. This also includes, Hosting, Email Marketing, Content Management!">
        </Head>

        <PageBanner heading="Beaverton Oregon <br/> Website Design and Management Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="beaverton-heading">
            
                <div class="w-56">
                    <Link class="btn flex items-center" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg ml-3" style="margin-top: .1rem">Back To Homepage</span></Link>
                </div>
                

                <h2 id="beaverton-heading" class="capitalize inline-block">Website design and managment services for Beaverton, Oregon<hr/></h2>
                <img src="/media/images/jpg/beaverton-opt.jpg" alt="Beaverton welcome image">
                
                <p>Here is one of the greatest suburbs of Portland, <a href="https://www.beavertonoregon.gov/" target="_blank">Beaverton Oregon</a>. Evergreen By Design is happy to serve business owners and entrepreneurs with the best in website design and services.</p>
                <p>First, lets talk about your website design. This is a highly professional website design that takes your business to the next level. I include SEO, Mobile Responsiveness, Security, and a whole lot more!</p>
                <p>A great website design not only gives your users that great “Curb Side Appeal” but it also focuses on UX or user experience to enhance your website. The outcome, <a href="https://www.wordstream.com/conversion#:~:text=A%20conversion%20occurs%20when%20a,is%20called%20your%20conversion%20rate." target="_blank">better conversions</a>, better sales, more engagement!</p>
                <p>If your website does not accommodate the user and does not have the appeal that your website was professionally designed, then you are losing money!</p>
                <p>Let&#39;s focus now on the benefits of the website service plans that come with Evergreen By Design.</p>
                
            
        </section>

        <section class="space-y-10" aria-labelledby="beaverton-website-details">
                <h2 id="beaverton-website-details" class="capitalize inline-block">The great features that Evergreen By Design offers!<hr/></h2>
                <img src="/media/images/jpg/beaverton2-opt.jpg" alt="Beaverton city">

                <p><strong class="font-light">Email Marketing:</strong> Here is a service that is offered by very few website companies! Why? Cause email marketing is not cheap! Just look at some of the most pristine email marketing services out there. Aweber, MailChimp, ActiveCampaign , etc.. they all charge a hefty fee for email marketing.</p>
                <p>Evergreen By Design actually provides <a href="https://optinmonster.com/beginners-guide-to-email-marketing/" target="_blank">email marketing</a> and content management. This includes custom template designs so that your business is well branded. You also receive SMTP which will cover all your transactional emails!</p>
                <p><strong class="font-light">Content Management:</strong> Your email marketing is not the only section of your website that has content management. I will handle ALL your content management need for your website. This is great because this ensures that everything and anything done on your website is done right! Plus, you don&#39;t have to learn complicated technology to make the changes to your website! That is what I call a win win!</p>
                <p><strong class="font-light">Professional Domain Email:</strong> With a Premium plan and above you get a free Professional email domain. This will help with email sending and client relations as this email represents an established business!</p>
                <p><strong class="font-light">Integrations:</strong> One of the most confusing parts of website creation is how to integrate different third-party platforms into your website. Well, lucky for you if you choose Evergreen By Design you don&#39;t have to worry about that. I will handle all website integrations while you maintain full control of those accounts. This can be Google Analytics, Affiliate Marketing, <a href="https://www.facebook.com/business/help/742478679120153?id=1205376682832142" target="_blank">Facebook Pixel</a>, and many more!</p>
                <p><strong class="font-light"></strong></p>
                <p>Hands down this is one of the best website service businesses out there! With even more features not mentioned here you get the best of the best when it comes to your website needs.</p>
                
                <div class="flex flex-col sm:flex-row justify-start space-y-4 sm:space-y-0 sm:items-center sm:space-x-4">
                    <div class="space-x-2">
                        <button id="contact-btn-pricing" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="flex justify-start items-center text-xl"><span>Contact Today</span> <ChatBubbleLeftIcon class="w-5 h-5 ml-2"/></button>
                    </div>
                    <div class="inline-block w-36">
                        <Link class="btn flex justify-start items-center text-xl" href="/#ebd-section-pricing">View Plans <DocumentCheckIcon class="w-5 h-5 ml-2" /></Link>
                    </div>
                    
                </div>
            
        </section>

        </div>

    </Frontend>
        

</template>

<style>

</style>