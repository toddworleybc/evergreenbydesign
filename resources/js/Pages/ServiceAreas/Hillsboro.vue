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

            <PageBanner heading="Hillsboro, OR</br> Website Design and Services " />

            <div class="max-w-3xl mx-auto mt-8">

                <section class="space-y-10 mb-8" aria-labelledby="hillsboro-heading">
                    
                        <div class="inline-block">
                            <Link class="btn flex items-center space-x-3" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg" style="margin-top: .1rem">Back To Homepage</span></Link>
                        </div>
                        

                        <h2 id="hillsboro-heading" class="capitalize inline-block">Website design and managment services for Hillsboro, Oregon<hr/></h2>
                        <img src="/media/images/jpg/hillsboro-sign.jpg" alt="Hillsboro welcome image for website design and services">
                        
                        

                        <p>
                            Are you a <a href="https://www.hillsboroohio.net/egov/apps/document/center.egov?view=item&id=1035" target="_blank">Hillsboro, Oregon business owner</a> eager to propel your venture into the digital age? If so, Evergreen By Design is your trusted ally on this exciting journey. As a sole proprietor, I specialize in crafting unparalleled website design solutions tailored to your unique needs. Explore my range of services, including hosting with unlimited bandwidth and storage, content creation, logo design, responsive web design, ongoing management, one-on-one support, domain acquisition, email marketing systems, and more, and let's begin your digital transformation.
                        </p>




                        <p>First, lets talk about your website design. This is a highly professional website design that takes your business to the next level. I include SEO, Mobile Responsiveness, Security, and a whole lot more!</p>
                        <p>A great website design not only gives your users that great “Curb Side Appeal” but it also focuses on UX or user experience to enhance your website. The outcome, <a href="https://www.wordstream.com/conversion#:~:text=A%20conversion%20occurs%20when%20a,is%20called%20your%20conversion%20rate." target="_blank">better conversions</a>, better sales, more engagement!</p>
                        <p>If your website does not accommodate the user and does not have the appeal that your website was professionally designed, then you are losing money!</p>
                        <p>Let&#39;s focus now on the benefits of the website service plans that come with Evergreen By Design.</p>
                        
                    
                </section>

                <section class="space-y-10" aria-labelledby="hillsboro-hosting">
                        <h2 id="hillsboro-hosting" class="capitalize inline-block">Unlimited Hosting: A Solid Digital Foundation!<hr/></h2>
                        
                        <p>Every successful online venture begins with a rock-solid foundation. My hosting services provide you with unlimited bandwidth and storage, ensuring your website can seamlessly handle traffic surges. Say goodbye to lagging load times and welcome a smooth, uninterrupted user experience.</p>

                </section>

                <section class="space-y-10" aria-labelledby="hillsboro-content-creation">
                        <h2 id="hillsboro-content-creation" class="capitalize inline-block">Content Creation: Weaving Your Digital Story!<hr/></h2>
                        
                        <p>Compelling content is the lifeblood of your website. I specialize in crafting engaging, SEO-friendly content that not only captivates your audience but also drives organic traffic. Whether it's informative blog posts, persuasive product descriptions, or captivating landing pages, I've got your content needs covered.</p>

                </section>


                <section class="space-y-10" aria-labelledby="hillsboro-logo">
                        <h2 id="hillsboro-logo" class="capitalize inline-block">Logo Design: Your Visual Identity, My Expertise<hr/></h2>
                        
                        <p>Your logo is the face of your brand. I work closely with you to design a logo that encapsulates your brand's essence and leaves a lasting impression on your visitors.</p>

                </section>

                <section class="space-y-10" aria-labelledby="hillsboro-responsive">
                        <h2 id="hillsboro-responsive" class="capitalize inline-block">Responsive Design: Engaging Users Across All Devices<hr/></h2>
                        
                        <p>In today's multi-device world, a responsive design is non-negotiable. My websites are meticulously designed to function flawlessly on all screens, from desktops to tablets and smartphones.</p>

                </section>

                <section class="space-y-10" aria-labelledby="hillsboro-management">
                        <h2 id="hillsboro-management" class="capitalize inline-block">Ongoing Management and Updates: Your Digital Peace of Mind<hr/></h2>
                        
                        <p>The digital landscape evolves rapidly, but you have a business to run. I take care of your website's security, updates, and alignment with industry trends so you can focus on your core operations.</p>

                </section>


                <section class="space-y-10" aria-labelledby="hillsboro-support">
                        <h2 id="hillsboro-support" class="capitalize inline-block">One-on-One Support: Your Success is My Priority<hr/></h2>
                        
                        <p>Navigating the digital realm can be daunting. I offer personalized one-on-one support to guide you through the process, answer your questions, and ensure your satisfaction at every step.</p>

                </section>

                <section class="space-y-10" aria-labelledby="hillsboro-domain-email">
                        <h2 id="hillsboro-domain-email" class="capitalize inline-block">Domains and Email Marketing: Elevate Your Digital Presence<hr/></h2>
                        
                        <p>A professional domain is your digital address. I assist you in securing a domain name that resonates with your brand. Furthermore, my integrated email marketing system empowers you to connect with your audience through targeted email campaigns, increasing engagement and conversions.</p>

                </section>

                <section class="space-y-10" aria-labelledby="hillsboro-experience">
                        <h2 id="hillsboro-experience" class="capitalize inline-block">Experience the Evergreen Difference<hr/></h2>
                        
                        <p>Evergreen By Design isn't just a service; it's a partnership. With a profound understanding of Hillsboro's local market, I comprehend the unique challenges you face and am committed to helping your business flourish online.</p>

                </section>


                <section class="space-y-10" aria-labelledby="hillsboro-conclusion">
                        <h2 id="hillsboro-conclusion" class="capitalize inline-block">Conclusion: Your Digital Success Starts Here<hr/></h2>
                        <img src="/media/images/jpg/hillsboro-city-sign-opt.jpg" alt="Overview of hillsboro for website design services">
                        <p>Your online presence is your business's face to the world. It's time to make it shine. Partner with Evergreen By Design and embark on a journey to elevate your brand, captivate your audience, and achieve digital success. Contact me today, and together, we'll ensure Hillsboro, Oregon, stands out brilliantly in the vast digital landscape. Your digital success story begins here, with Evergreen By Design.</p>


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

section {
    @apply mb-2;
}

</style>