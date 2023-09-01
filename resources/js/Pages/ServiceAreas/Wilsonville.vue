<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal';
    



</script>

<template>

    <Frontend>


        <PageBanner heading="Wilsonville Oregon <br/>Website Management and Design" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="wilsonville-heading">
            

                <div class="inline-block">
                    <Link class="btn flex items-center space-x-3" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg" style="margin-top: .1rem">Back To Homepage</span></Link>
                </div>

                <h2 id="wilsonville-heading" class="capitalize inline-block">Wilsonville, Oregon website design and services!<hr/></h2>
                <img src="/media/images/jpg/wilsonville-opt.jpg" alt="wilsonville welcome sign image">


                <p>It&#39;s great to be serving the <a href="https://www.ci.wilsonville.or.us/" target="_blank">Wilsonville area</a> with great website design and management services. What does this mean… well it means that you get a personal liaison for you website needs. Someone who you can call or email and have all your website technical stuff taken care of.</p>
                <p>This lets you focus on your business without having to learn the complicated technology you would need to learn to update and conduct routine maintenance.</p>
                <p>The website services provided by Evergreen By Design includes everything you need to get a website up and running with some really nice features.</p>
                <p>These features include things like Hosting, Content Management, Email Marketing, Professional Domain Email, and so much more!</p>
                <p>Plus, with the way these plans are structured it provides a nice one stop shop payment solution that covers all your website needs. This way you don&#39;t have to bounce from platform to platform <a href="https://www.indeed.com/career-advice/finding-a-job/what-is-website-manager" target="_blank">managing your website.</a></p>
                <p>The structure of these plans also will suit any businesses needs, from a simple informational website, to running email marketing campaigns and/or search engine marketing!</p>
                <p>Let&#39;s get to know Evergreen By Design a little better!</p>
                
            
        </section>


        <section class="space-y-10 mb-8" aria-labelledby="wilsonville-heading-2">
                

                <h2 id="wilsonville-heading-2" class="capitalize inline-block">Website services by Evergreen By Design<hr/></h2>
                <img src="/media/images/jpg/wilsonville2-opt.jpg" alt="wilsonville welcome sign image">


                <p>It&#39;s great to get a website designed and managed by Evergreen By Design because I always ensure that your website is in good health. Think of these monthly plans as full website insurance!</p>
                <p>I don&#39;t know how many clients I have gotten because someone did their website and just left them hanging. What eventually happens is, that website ends up breaking as new technology continues to roll out into the real world.</p>
                <p>Then they either have to pay for a whole new website, or pay to get their original website fixed. In the end, I have saved plenty of people from this travesty!</p>
                <p>But I wanted to do more then just save their websites, instead I want to take care of their website to ensure that things like breakage, outdated software, hosting connection issues, won&#39;t ever be a problem for my clients.</p>
                <p>That is why instead of directing people to buy hosting, domain, email marketing, SSL certs, different systems to manage their website, etc.., which ultimately made life harder and more confusing for my clients, I decided to lump all these expensive services into one lump sum and provide all the setup and integration needs for my client.</p>
                <p>This has made my client&#39;s online needs so much more manageable since they have just one simple bill and a person that they know they can call on to take care their website!</p>
                <p>Now comes the exciting part, some of the features in these great website plans!</p>
                
            
        </section>

        <section class="space-y-10" aria-labelledby="wilsonville-website-details">
                <h2 id="wilsonville-website-details" class="capitalize inline-block">Features included with website plans!<hr/></h2>
                <img src="/media/images/jpg/wilsonville3-opt.jpg" alt="wilsonville river">
                

                <p><strong class="font-light">Hosting: </strong>Can&#39;t have a website online without hosting! Hosting is a server that hosts your website files to the web. Sometimes hosting setup and domain integration can be tough. Lucky for you, you won&#39;t even have to worry about buying hosting as I will not only setup your hosting, but I cover all the hosting costs for my clients.</p>
                <p><strong class="font-light">Page Redesigns: </strong>Times change and just like with fashion styles, website design styles also change to embrace new times and technology! With Page redesigns, you can keep your website looking fresh and up-to-date as the years go on.</p>
                <p><strong class="font-light">Email Marketing: </strong>One of the true blessings of Evergreen By Design&#39;s website services is the ability to perform email marketing! Email marketing is a marketing strategy that allows you to have ongoing engagement with customers and leads. Email marketing is a great tool to use to increase your <a href="https://www.campaignmonitor.com/resources/glossary/email-marketing-conversion-rate/#:~:text=Your%20email%20marketing%20conversion%20rate,determines%20your%20return%20on%20investment." target="_blank">online conversion rates!</a></p>
                <p><strong class="font-light">Content Management: </strong>Managing your website content can be a pain. Especially if you are not very “Techie”. That is why Evergreen By Design offers FULL content management for your websites. This is great because now you don&#39;t have to worry about breaking your website by adding new content. Plus, I perform <a href="https://backlinko.com/hub/seo/seo-friendly-design" target="_blank">SEO on every piece of content</a> that goes on your website, so you know that search engines are loving it.</p>

                <p>Check out Evergreen By Design&#39;s website plans today!</p>

                <div class="flex flex-col sm:flex-row justify-start space-y-4 sm:space-y-0 sm:items-center sm:space-x-4">
                    <div class="space-x-2">
                        <button id="contact-btn-pricing" @click.prevent="modal.openModal('chat', 'Get In Touch', $event)" class="flex justify-start items-center text-xl"><span>Contact Today</span> <ChatBubbleLeftIcon class="w-5 h-5 ml-2"/></button>
                    </div>
                    <div class="flex">
                        <Link class="btn flex sm:justify-start items-center text-lg space-x-2" href="/#ebd-section-pricing"><span>View Plans</span> <DocumentCheckIcon class="w-5 h-5" /></Link>
                    </div>
                </div>
            
        </section>

        </div>

    </Frontend>
        

</template>

<style>

</style>