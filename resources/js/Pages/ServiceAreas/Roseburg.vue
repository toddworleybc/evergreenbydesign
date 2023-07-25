<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal'; 
    


  

 
</script>

<template>

    <Frontend>

        <Head title="Roseburg Oregon Website Design and Management Services">
            <meta name="description" content="Roseburg Oregon Website Design and Management Services. Locally owned is a top website designer business providing you with the best in website services!">
        </Head>

        <PageBanner heading="Roseburg Oregon <br/> Website Design and Management Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="roseburg-heading">
            

                <div class="inline-block">
                    <Link class="btn flex items-center space-x-3" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg" style="margin-top: .1rem">Back To Homepage</span></Link>
                </div>

                <h2 id="roseburg-heading" class="capitalize inline-block">Need a websiter designer and services local to Roseburg, Oregon!<hr/></h2>
                <img src="/media/images/jpg/roseburg-opt.jpg" alt="Roseburg welcome sign image">
                <p>Evergreen By Design is proud to serve the Roseburg area with the best in professional website design and management services. These website services include everything you need to get your website up and running.</p>
                <p>This truly is an all-in-one plan that will give you a website to fit your online needs. I even have plans that include complete Email Marketing and Specialty Self-Management Systems.</p>
                <p>Working in <a href="https://www.cityofroseburg.org/" target="_blank">Roseburg</a> has been a true blessing of mine. The community and businesses here are just wonderful. Thought-out my years of working here I have not only taught a lot of businesses about website development, but I have learned a lot from other businesses as well.</p>
                <p>I thank every business that I have helped and I look forward to working with more businesses in the future.</p>
                <p>Let&#39;s check out some of the features your website services plans come with.</p>
            
        </section>

        <section class="space-y-10" aria-labelledby="roseburg-website-details">
                <h2 id="roseburg-website-details" class="capitalize inline-block">Website Services Plan Perks<hr/></h2>
                <img src="/media/images/jpg/roseburg2-opt.jpg" alt="Roseburg street fall image">
                <p><strong class="font-light">Hosting:</strong> Every plan has FREE <a href="https://www.hostinger.com/tutorials/what-is-web-hosting/" target="_blank">hosting</a> included. This also included daily backups and hosting management.</p>
                <p><strong class="font-light">Domain:</strong> Hey, everyone needs a space in the online world and a Domain is how you claim you plot of land in that world.</p>
                <p><strong class="font-light">Content Management:</strong> Dealing with website design and technology is a headache! Especially if you are running a business. What makes life easiest is when you can just email or call someone and have that person handle uploading/changing content on your website. That way, everything looks right and is SEO friendly!</p>
                <p><strong class="font-light">Ongoing Maintenance:</strong> What good is a website if it breaks on you in half a year. Websites need updating and constant maintenance to not only ensure that your website doesn&#39;t break but for security reasons as well.</p>
                <p><strong class="font-light">Email Marketing:</strong> Here&#39;s a service that other website companies just don&#39;t offer. Your own email marketing service. With custom templates and email marketing management this is a premium feature that everyone loves.</p>
                <p><strong class="font-light">Unlimited Transactional Emails</strong> This is great for Ecommerce (shop) websites and <a href="https://www.uscreen.tv/blog/subscription-websites/" target="_blank">Subscription websites</a> as these are emails that are automated after an action has been performed on your website.</p>
                <p><strong class="font-light">Responsive Website Design:</strong> While this should be on every website designer mind, I don&#39;t know how many websites I have visited where they just don&#39;t work well on a mobile device. Lucky for you, I pride myself on making every website look good on both desktop and mobile devices!</p>
                <p><strong class="font-light">Professional Email Domain:</strong> With a website comes the opportunity to have a personal domain email <span class="italic">(you@yourdomain.com).</span></p>
                <p>These are just some of the great features that you get with Evergreen By Design. Best of all, since I am local, I can come and meet you where ever you are in Roseburg and the surrounding areas.</p>
                <p>Call Today: <a href="tel:5413785563">(541) 378.5563</a></p>

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