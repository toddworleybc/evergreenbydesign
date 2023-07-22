<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal'; 
 
</script>

<template>

    <Frontend>

        <Head title="Website Services and Design | Newberg Oregon">
            <meta name="description" content="Website Services and design now available in Newberg, Oregon. Hire a professional website designer and get services that include Hosting, Email marketing...">
        </Head>

        <PageBanner heading="Newberg Oregon <br/> Website Services and Design" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="newberg-heading">
            

                <Link class="btn flex items-center w-56" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg ml-3" style="margin-top: .1rem">Back To Homepage</span></Link>

                <h2 id="newberg-heading" class="capitalize inline-block">Professional Website Design and Services Newberg, Oregon<hr/></h2>
                <img src="/media/images/jpg/newberg-opt.jpg" alt="Newberg welcome sign">
                
              <p>The best in website design and management services is now being offered in the city of <a href="https://www.newbergoregon.gov/" target="_blank">Newberg, Oregon</a>! This is your one-stop shop for all your website needs! Evergreen By Design&#39;s plans include everything from Hosting to Content Management. To put it simply, I do it all for you so you don&#39;t have to learn complicated tech or have “mishaps” happen with your website that you can&#39;t fix.</p>
              <p>With Evergreen By Design, you not only get a great website design for that online “Curb Side Appeal” but you also get a person that you can contact to handle all your website needs.</p>
              <p>No more worrying about renewing hosing, SSL certs, domains, email marketing, etc.... all of these are included with my ongoing website services wrapped in a nice tidy monthly plan.</p>
              <p>Need and Ecommerce website? No problem! Evergreen By Design goes above and beyond when it comes to your online shop by providing you with FREE <a href="https://www.omnisend.com/blog/transactional-email/" target="_blank">unlimited transactional emails</a> with an email marketing plan. This insures receipts and up sales land in peoples&#39; inboxes and not SPAM!</p>
              <p>The great thing is that these website plans are packed with even more great services. Let&#39;s check it out!</p>
                
            
        </section>

        <section class="space-y-10" aria-labelledby="newberg-website-details">
                <h2 id="newberg-website-details" class="capitalize inline-block">Evergreen By Design&#39;s Website Design Services<hr/></h2>
                <img src="/media/images/jpg/newberg2-opt.jpg" alt="Newberg city">

                <p><strong class="font-light">Content Management: </strong>One of the biggest features of my services is content management! Many times, people get a website done and are left on their own. What tends to happen is that person goes and tries to update content on their website. A lot of times they either create a broken website or they ruin their SEO or website design.</p>
                <p>I can&#39;t count how many times I have been called to fix others mistakes on their websites. Now, you don&#39;t have to worry about any of that as I handle all your website content changes!</p>
                <p>This saves you time because you don&#39;t have to <a href="https://matchlessweb.com/4-risks-building-your-own-website/" target="_blank">risk breaking your website</a> as you spend hours trying to figure out how to change content on your website.</p>
                <p>This has been an all-star service that I have provided business with for years now! The ability to call or send the content you want changed on your website in an email has saved my clients time, frustration, and tech agony!</p>
                <p><strong class="font-light">Email Marketing: </strong>What is better than getting a person to handle all your website needs? How about a person who can handle your email marketing needs as well. Evergreen By Design provides FREE email marketing where you can collect subscribers, run email marketing campaigns, and get custom email templates to give your business a professional look!</p>
                <p><strong class="font-light">Page Redesigns: </strong>Hey, times change and just like the fashion world the style of websites change as well. With page redesigns you get to have pages redesigned on your website to keep it fresh for the modern world.</p>
                <p>Learn more about the great services Evergreen By Design has to offer by clicking the “View Plans” button below!</p>
                
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