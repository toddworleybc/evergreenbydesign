<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal'; 
 
</script>

<template>

    <Frontend>

        <Head title="Website Design and Services | Keizer Oregon">
            <meta name="description" content="Affordable website design and management services for Keizer Oregon including, Website Hosting, Content Management, Email Marketing, Ongoing Maintenance...">
        </Head>

        <PageBanner heading="Keizer Oregon <br/>Website Design and Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="keizer-heading">
            

                <Link class="btn flex items-center w-56" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg ml-3" style="margin-top: .1rem">Back To Homepage</span></Link>

                <h2 id="keizer-heading" class="capitalize inline-block">Keizer Oregon Website Design and Management Service.<hr/></h2>
                <img src="/media/images/jpg/keizer-opt.jpg" alt="keizer city">
                
                <p>Evergreen By Design is proud to be building websites and providing ongoing services for the businesses of <a href="https://www.keizer.org/" target="_blank">Keizer, Oregon.</a></p>
                <p>Here at Evergreen By Design you get the best of all worlds when it comes to your online needs. I provide both website design and ongoing maintenance. Plus, all plans come with FREE website hosting, security, domain, HTTPS/SSL, Integrations, Content Management, and more!</p>
                <p>Premium plans and above also include a FREE <a href="https://www.brevo.com/blog/what-is-email-marketing/" target="_blank">email marketing system!</a> This comes with custom templates, unlimited transactional emails, and email content management.</p>
                <p>Plus, with the addition of custom post types you can really take control of your website, without having to learn difficult technology!</p>
                <p>Evergreen By Design offers great website plans that manages all your website service needs.</p>
                <p>Here is a little bit about website design!</p>
                
            
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="keizer-creating-website">
                <h2 id="keizer-creating-website" class="capitalize inline-block">Creating Great Websites Designs!<hr/></h2>
                <img src="/media/images/jpg/keizer2-opt.jpg" alt="willamette river">

                <p>When it comes to your website you want a great design that not only looks attractive but also can convert. There are a lot of different concepts that go behind what makes a website great.</p>
                <p>One of the hardest things for people to understand is that website design needs to focus on UX (user experience) above all.</p>
                <p>I know that you have been on many websites where things don&#39;t work correctly or their website doesn&#39;t look right. These are people who tried to do their website without the knowledge on how to. The end result… they created a poor user experience which in turn hurts conversion rates and ultimately sales for your business.</p>
                <p>Even worse, I have seen people pay for so much stuff they didn&#39;t need for their website just because they didn&#39;t understand how the technology works and companies are really good and upselling you products.</p>
                <p>This is where Evergreen By Design comes to the rescue! With everything you need for your website bundled into a nice plan, including my personal ongoing website support, you know your website is in good hands.</p>
                <p>Plus, it is nice just to be able to call someone to fix your website problem instead of having to learn complicated technology to get it done. This truly is the best of the best when it comes to your website design and services.</p>
                <p>Let&#39;s take a look at some of the great features Evergreen By Design has to offer!</p>
                
            
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="keizer-features">
                <h2 id="keizer-features" class="capitalize inline-block">Website Service Features<hr/></h2>
                <img src="/media/images/jpg/keizer3-opt.jpg" alt="willamette river">

                <p><strong class="font-light">Email Marketing:</strong> I was very happy to be able to provide this service for my clients. Not only to give you the ability to collect subscribers and send promotional emails, but also to provide you with custom template designs and unlimited transactional emails!</p>
                <p><strong class="font-light">Ongoing Maintenance and Services:</strong> I know that I have delt with a lot of customers that have been just left hanging after their website was finished. What tends to happen is that their website eventually breaks! Whether that be from lack of maintenance and updating, to trying to figure out how to update content on their website.</p>
                <p>This is where Evergreen By Design comes into play. Instead of having to hire yet another person to fix it for you, often charging hundreds if not thousands of dollars to get back what you already had, I manage all your <a href="https://mailchimp.com/resources/website-maintenance/#:~:text=Website%20maintenance%20is%20the%20process,and%20fixing%20any%20broken%20links." target="_blank">website maintenance</a> and services! Call it worry free website insurance!</p>
                <p><strong class="font-light">Content Management:</strong>  Beyond just doing maintenance and updating on your website I also manage your content for you. This really is the great thing about Evergreen By Design because it saves you a ton of time and heartache when it comes to updating your website.</p>
                <p>Many times, when updating content on your website you may not realize that part of your website was designed for the width, height, or for clarity of said content.</p>
                <p>When people tend to add their own content, they don&#39;t take into consideration, image size, text size, set width vs relational width, and so much more! Especially when it comes to your static pages. You also have to consider SEO when altering page content and making sure you don&#39;t lose your page ranking in the SERP (search engine results page).</p>
                <p>These are just a couple of the great services that Evergreen By Design offers.</p>

        </section>


        <section class="space-y-10" aria-labelledby="keizer-end">
                <h2 id="keizer-end" class="capitalize inline-block">Check out upfront website service pricing<hr/></h2>
               
                <p>Compared to a lot of website designers and companies out there, Evergreen By Design gives you upfront pricing on all plans and designs. Check out these great plans and find the one that fits your needs the best!</p>

                

                
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