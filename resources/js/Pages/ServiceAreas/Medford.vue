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

        
        <PageBanner heading="Medford Oregon <br/>Website Design and Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="medford-heading">
            

            <div class="inline-block">
                    <Link class="btn flex items-center space-x-3" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg" style="margin-top: .1rem">Back To Homepage</span></Link>
                </div>


                <h2 id="medford-heading" class="capitalize inline-block">Elevate Your Medford, Oregon Business with Exceptional Website Design Services<hr/></h2>
                <img src="/media/images/jpg/medford.jpg" alt="medford oregon city web design">
                <p>Are you a business owner in <a href="https://www.medfordoregon.gov/Home" target="_blank">Medford, Oregon</a>, looking to establish a strong online presence? In today's digital age, a well-designed website is not just an option; it's a necessity. Whether you're a local startup or a well-established company, having a professional website can make all the difference in attracting and retaining customers. That's where I come in with my comprehensive website design services in Medford offering everything you need to succeed online.</p>
                
            
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-hosting">
                <h2 id="medford-hosting" class="capitalize inline-block">Unlimited Bandwidth and Storage<hr/></h2>
                
                <p>First impressions matter, and slow-loading websites can turn potential customers away. With Evergreen By Design hosting services, you'll enjoy unlimited bandwidth and storage, ensuring your website loads quickly and can handle all the traffic you receive. Say goodbye to frustrating delays and hello to a seamless online experience for your visitors.</p>
            
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-content-creation">
                <h2 id="medford-content-creation" class="capitalize inline-block">Content Creation<hr/></h2>

                <p>Content is king, and I know how to <a href="https://www.conductor.com/academy/content-creation/" target="_blank">create content</a> that captivates your audience. Evergreen By Deisgn creates SEO-friendly content that not only informs but also engages your visitors. From blog posts to product descriptions, I've got your content needs covered.</p>

        </section>


        <section class="space-y-10 mb-8" aria-labelledby="medford-logo">
                <h2 id="medford-logo" class="capitalize inline-block">Logo Design<hr/></h2>

                <p>Your logo is a visual representation of your brand, and it should be memorable and instantly recognizable. I will work closely with you to create a logo that embodies your business's identity and sets you apart from the competition.</p>

        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-responsive">
                <h2 id="medford-responsive" class="capitalize inline-block">Responsive Design<hr/></h2>

                <p>In a world where people browse the web on various devices, having a responsive website is non-negotiable. My websites are designed to adapt seamlessly to different screen sizes, ensuring a consistent and user-friendly experience for all your visitors, whether they're on a smartphone, tablet, or desktop.</p>

        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-management">
                <h2 id="medford-management" class="capitalize inline-block">Ongoing Management and Updates<hr/></h2>

                <p>A website is not a one-and-done project. It requires regular updates, security maintenance, and content management. I offer ongoing management services to keep your website running smoothly, so you can focus on growing your business without worrying about technical details.</p>

        </section>


        <section class="space-y-10 mb-8" aria-labelledby="medford-support">
                <h2 id="medford-support" class="capitalize inline-block">One-on-One Support<hr/></h2>

                <p>I understand that navigating the world of web design can be overwhelming. That's why I provide personalized one-on-one support. I will be with you every step of the way, from the initial consultation to post-launch support, ensuring your satisfaction and success.</p>

        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-domain-email">
                <h2 id="medford-domain-email" class="capitalize inline-block">Domain and Email Marketing System<hr/></h2>

                <p>A professional domain name is essential for building trust with your audience. I'll help you secure the perfect domain and set up a robust <a href="https://www.forbes.com/sites/allbusiness/2020/10/26/email-marketing-still-the-most-powerful-tool-to-take-your-business-to-the-next-level/?sh=3b8c20e334bf" target="_blank">email marketing system</a>, allowing you to reach your customers directly and effectively.</p>

        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-pro-design">
                <h2 id="medford-pro-design" class="capitalize inline-block">Professional Design<hr/></h2>

                <p>Evergreen By Design doesn't just create websites; they craft digital masterpieces. Your website will not only look stunning but also reflect the essence of your brand and resonate with your target audience.</p>

        </section>

        <section class="space-y-10 mb-8" aria-labelledby="medford-more-section">
                <h2 id="medford-more-section" class="capitalize inline-block">And More<hr/></h2>
                <img src="/media/images/jpg/rogue-river.jpg" alt="medford oregon rogue river">
                <p>My commitment to excellence knows no bounds. I offer a range of additional services, from e-commerce integration to social media integration, to help you achieve your online goals.</p>
                <p>In today's competitive market, your Medford, Oregon business deserves a website that not only stands out but also delivers results. My website design services are tailored to meet your specific needs and budget, ensuring you get the most value for your investment.</p>
                <p>Don't miss out on the countless opportunities the online world has to offer. Contact Evergreen By Design today to discuss how my website design services can transform your Medford business into a digital powerhouse.</p>
                <p>With my expertise and your vision, the sky's the limit. Get started now and watch your online presence soar!</p>

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