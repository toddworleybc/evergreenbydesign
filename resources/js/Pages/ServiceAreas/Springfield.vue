<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal';
    


</script>

<template>

    <Frontend>

        <article>

       
        <PageBanner heading="Springfield Oregon <br/> Website Design and Management Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="springfield-heading">
            

                <div class="inline-block">
                    <Link class="btn flex items-center space-x-3" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg" style="margin-top: .1rem">Back To Homepage</span></Link>
                </div>

                <h2 id="springfield-heading" class="capitalize inline-block">Website Services and Design for Springfield, Oregon!<hr/></h2>
                <img src="/media/images/jpg/springfield-opt.jpg" alt="Springfield Oregon sign">

                <p>Springfield is a beautiful and vibrant city with some of the best businesses in the state of Oregon. Evergreen By Design is glad to be apart of your community by providing business owners with great looking websites.</p>
                <p>These plans that I offer not only include your website design fee, but they also include everything you need to get your website online. The great thing about these plans is that because they include everything you need, this becomes a one stop shop for all your website services.</p>
                <p>Imagine if you will, not only having all your website costs lumped up into one manageable sum, but also to have a person that you can call or email and will take care of everything for you when it comes to your website needs.</p>
                <p>This includes Hosting, Content Management, Email Marketing, Domain, Https/SSL, and much more!</p>
                <p>If you are truly sick of tech or just don&#39;t like how your website is currently looking, then this is definitely the place for you.</p>
                <p>A lot of people end up spending too much money on all the services that I provide and still get left to manage technology that they might not understand.</p>
                <p>Worse, and this is what many people have experienced in the past, is that a lot of business owners and online entrepreneurs just don&#39;t have time to work on the <a href="https://mailchimp.com/resources/website-maintenance/#:~:text=Website%20maintenance%20is%20the%20process,and%20fixing%20any%20broken%20links." target="_blank">continued maintenance</a> that your website needs for security and functionality.</p>
                <p>Instead of stressing about all of these things while running a business or starting your online income, why not alleviate the headache and have someone who knows both website design and development to handle all the heavy lifting for you.</p>
                <p>I personally see businesses spend upwards of $2500 dollars for website designs and then have to still manage their own websites and pay for hosting, domains, email marketing, etc.</p>
                <p>Plus, they don&#39;t have a personal tech website guy to call on when their website either breaks, or they don&#39;t have the knowledge to add/change content to their website. What happens then… they pay hundreds to thousands of dollars getting these problems fixed.</p>
                <p>My plans offer full website coverage to ensure the quality, security, and professional design that your website deserves.</p>
                <p>When it comes to your website needs don&#39;t settle for someone who won&#39;t go that extra mile for you, instead get everything you need and have it all professionally managed for you in one place at a great price!</p>
            
        </section>

        <section class="space-y-10" aria-labelledby="springfield-website-details">
                <h2 id="springfield-website-details" class="capitalize inline-block">Website Management and Services Highlights<hr/></h2>
                <img src="/media/images/jpg/springfield2-opt.jpg" alt="Sprinfield Oregon River">
                
                <p><strong class="font-light">Email Marketing:</strong> Very few website service plans actually offer email marketing with content management in their services. This comes with custom email templates and free <a href="https://sendgrid.com/blog/what-is-an-smtp-server/" target="_blank">SMTP services.</a></p>
                <p><strong class="font-light">Hosting:</strong> Can&#39;t have a website without great hosting. My hosting offers unlimited bandwidth, unlimited storage, and comes with daily backups.</p>
                <p><strong class="font-light">Domain:</strong> Take your place in the online world with a domain that comes with every plan. Best part is that if you ever decide to leave you get to take your domain with you!</p>

                <p>Contact Evergreen By Design today and never have to worry about website tech again!</p>

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
        </article>
    </Frontend>
        

</template>

<style>

</style>