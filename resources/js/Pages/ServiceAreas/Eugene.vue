<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal'; 
 
</script>

<template>

    <Frontend>

        <Head title="Eugene Oregon Website Design and Management Services">
            <meta name="description" content="Get a professional website designer and FULL website management services all here at Evergreen By Design. This includes Hosting, Domain, Content Management and more!">
             <!-- Facebook Meta Tags -->
             <meta property="og:url" content="https://www.evergreenbydesign.com/service-areas/eugene-oregon-website-design-and-management-services">
                    <meta property="og:type" content="website">
                    <meta property="og:title" content="Eugene Oregon Website Design and Management Services">
                    <meta property="og:description" content="Get a professional website designer and FULL website management services all here at Evergreen By Design. This includes Hosting, Domain, Content Management and more!">
                    <meta property="og:image" content="https://evergreenbydesign.com//media/images/jpg/eugene-opt.jpg">

                    <!-- Twitter Meta Tags -->
                    <meta name="twitter:card" content="summary_large_image">
                    <meta property="twitter:domain" content="evergreenbydesign.com">
                    <meta property="twitter:url" content="https://www.evergreenbydesign.com/service-areas/eugene-oregon-website-design-and-management-services">
                    <meta name="twitter:title" content="Eugene Oregon Website Design and Management Services">
                    <meta name="twitter:description" content="Get a professional website designer and FULL website management services all here at Evergreen By Design. This includes Hosting, Domain, Content Management and more!">
                    <meta name="twitter:image" content="https://evergreenbydesign.com/media/images/jpg/eugene-opt.jpg">

                    <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        </Head>

        <PageBanner heading="Eugene Oregon <br/> Website Design and Management Servicess" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="roseburg-heading">
            

                <Link class="btn flex items-center w-56" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg ml-3" style="margin-top: .1rem">Back To Homepage</span></Link>

                <h2 id="roseburg-heading" class="capitalize inline-block">Professional Website Design and Services for Eugene, Oregon!<hr/></h2>
                <img src="/media/images/jpg/eugene-opt.jpg" alt="Eugene welcome sign image">
                
                <p>Go Ducks! It is amazing to be offering website design and management services in one of the greatest cities in Oregon, Eugene!</p>
                <p>My services cover everything that you need to get your website up and running. No more hoping from service to service managing all your website needs.</p>
                <p>Now you have great website plans that will take care of all the costs of your website services. This includes Hosting, Domain, Email Marketing, Content Management, and so much more!</p>
                <p>With all these great services bundled in an affordable plan with FULL content management you know that your website is in good care.</p>
                <p>Imagine if you will, not having to remember renewal costs, not having to learn complicated technology. Instead, you have your own personally website liaison to fix, maintain, and update content on your website as needed. This ensures that the health of your website remains in excellent condition!</p>
                <p>With Evergreen By Design the only person you are dealing with is me, the one who built your website and knows everything about it.</p>
                <p>Here is a quick overview of some of the great features Evergreen By Design offers!</p>
                
            
        </section>

        <section class="space-y-10" aria-labelledby="eugene-website-details">
                <h2 id="eugene-website-details" class="capitalize inline-block">Great website design and services features!<hr/></h2>
                <img src="/media/images/jpg/eugene2-opt.jpg" alt="Eugene city">

                <p><strong class="font-light">Unlimited Transactional Emails:</strong> This is great for anyone who is running a shop or subscription website. <a href="https://mailchimp.com/help/about-transactional-email/#:~:text=A%20transactional%20email%20is%20an,or%20a%20password%20reset%20request." target="_blank">Transactional emails</a> are emails that send automatically after someone completes an action on your website.</p>
                <p>Example: I make a purchase on your website and a receipt is sent to my email. The great thing about unlimited transactional emails is that these use SMTP to help ensure that your emails hit inboxes and not spam!</p>
                <p><strong class="font-light">Content Management:</strong> What could be better then not having to worry about uploading content to your website! Many people who try changing their website end up breaking it and having to pay for repairs. Here, I handle all your content management needs to help ensure your website runs smoothly!</p>
                <p><strong class="font-light">Email Marketing:</strong> How many website design companies offer email marketing with their plans? Not many, and for the price of email marketing these days to actually have this included in your plan is simply remarkable! With custom template design you can really brand your emails.</p>
                <p><strong class="font-light">Integrations:</strong> One of the hardest parts of website design is integrations. There are so many third-party integrations for your website, everything from search consoles, <a href="https://adsense.google.com/start/" target="_blank">AdSense</a>, affiliate marketing, and etc. I take care of all the heavy lifting for you in this department.</p>
                <p><strong class="font-light">Domain:</strong> Can&#39;t be online if you don&#39;t have a domain giving you a place on the internet for your website. Every plan comes with a domain of your choice. If you ever decide to leave Evergreen By Design your domain goes with you.</p>
                <p>These are just some of the great features that Evergreen By Design provides people everyday to make their lives easier.</p>
                
                <div class="flex flex-col sm:flex-row justify-start space-y-4 sm:space-y-0 sm:items-center sm:space-x-4">
                    <div class="space-x-2">
                        <button id="contact-btn-pricing" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="flex justify-start items-center text-xl"><span>Contact Today</span> <ChatBubbleLeftIcon class="w-5 h-5 ml-2"/></button>
                    </div>
                    <div class="inline-block">
                        <Link class="btn flex w-36 justify-start items-center text-xl" href="/#ebd-section-pricing">View Plans <DocumentCheckIcon class="w-5 h-5 ml-2" /></Link>
                    </div>
                    
                </div>
            
        </section>

        </div>

    </Frontend>
        

</template>

<style>

</style>