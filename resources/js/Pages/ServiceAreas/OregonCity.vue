<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal'; 
 
</script>

<template>

    <Frontend>

        <Head title="Oregon City Website Design and Management Services">
            <meta name="description" content="Professional website design for Oregon City. This includes Website Management and Services like Hosting, Domain, Email Marketing, Ongoing Maintenance and more!">
        </Head>

        <PageBanner heading="Oregon City <br/> Website Design and Management Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="oregoncity-heading">
            

                <Link class="btn flex items-center w-56" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg ml-3" style="margin-top: .1rem">Back To Homepage</span></Link>

                <h2 id="oregoncity-heading" class="capitalize inline-block">Website Design and Management for Oregon City<hr/></h2>
                <img src="/media/images/jpg/oregoncity-opt.jpg" alt="Beaverton welcome image">

                <p>Evergreen By Design in honored to provide website design and management to <a href="https://www.orcity.org/" target="_blank">Oregon City</a></p>
                <p>What could be more wonderful than promoting your business online today. With Evergreen By Design you get a great website design and services to cover all your monthly website fees. This is your one stop shop for all your online needs!</p>
                <p>Most people now in days look online for any and all business. Without a website you are missing out on some great client conversion and revenue for your business.</p>
                <p>If you are an online entrepreneur than you definitely need a primo website to attract visitors and promote your own online sales and ad revenue.</p>
                <p>With Evergreen By Design, you not only get a great looking website, but you also receive Ongoing Maintenance, Hosting, Domain, HTTP/SSL, Email Marketing, Unlimited Transactional Emails, Content Management, and so much more!</p>
                <p>If you went and added all these services up you would end up with a hefty bill. Plus, you would be forced to figure out all the complicated technology that website management has to offer.</p>
                <p>Needless to say, that it would be much simpler just to have someone who knows the concepts of <a href="https://careerfoundry.com/en/blog/ux-design/what-does-a-ux-designer-actually-do/#:~:text=UX%20design%20focuses%20on%20the,research%2C%20design%2C%20and%20technology." target="_blank">UX (user experience) design</a> and SEO to manage your content for you!</p>
                <p>Think of me as your personal liaison between your website (and complicated technology) and you. This gives you more time to focus on your business/entrepreneur goals and leaves the heavy lifting to me.</p>
                <p>Evergreen By Design offers these great features for your website.</p>
                
                
                
            
        </section>

        <section class="space-y-10" aria-labelledby="oregoncity-website-details">
                <h2 id="oregoncity-website-details" class="capitalize inline-block">Website design features and services<hr/></h2>
                <img src="/media/images/jpg/oregoncity2-opt.jpg" alt="Beaverton city">

                <p><strong class="font-light">Hosting:</strong> Is a service that actually gets your website online. With Evergreen By Design, you don&#39;t have to worry about bandwidth or storage as you have unlimited usage of both. Plus, with daily backups of your files and database you can sleep easy.</p>
                <p><strong class="font-light">Content Management:</strong> The backbone of any good website is the ability to update the content on your website when you need to. Yet, sometimes this can be more of a challenge then people realize as they try to update their own content and have their website&#39;s break. With Evergreen By Design I will update all your content for you and make sure it remains Mobile and <a href="https://www.getresponse.com/blog/tips-and-tools-to-write-seo-friendly-content" target="_blank">SEO friendly.</a></p>
                <p><strong class="font-light">Unlimited Transactional Emails:</strong> This is great for Ecommerce (shop) users and Subscribers as these emails are based on a person&#39;s actions online. You can send automated receipts, up sales for subscribers, and much more!</p>
                <p>Great website companies come with great website features and Evergreen By Design does not hold back any punches when it comes to the quality of your website design or services.</p>
                <p>Enjoy a one stop shop when it comes to your website needs with Evergreen By Design!</p>
                
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