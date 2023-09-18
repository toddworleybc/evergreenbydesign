<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    import PageBanner from '@/Components/PageBanner.vue';
    import Frontend from '@/Layouts/Frontend.vue';
    import { ArrowUturnLeftIcon, ChatBubbleLeftIcon, DocumentCheckIcon, LightBulbIcon } from '@heroicons/vue/24/outline';
    import { modal } from '@/Utilities/modal'; 
 
</script>

<template>

    <Frontend>

        <article>

        
        <PageBanner heading="Hayesville, Oregon <br/> Website Design and Management Services" />

        <div class="max-w-3xl mx-auto mt-8">
        <section class="space-y-10 mb-8" aria-labelledby="hayesville-heading">
            

            <div class="inline-block">
                    <Link class="btn flex items-center space-x-3" :href="route('home')"><ArrowUturnLeftIcon class="w-5 h-5" /><span class="text-lg" style="margin-top: .1rem">Back To Homepage</span></Link>
                </div>


                <h2 id="hayesville-heading" class="capitalize inline-block">Tap into Hayesville's Online Potential with Evergreen By Design: Where Your Website Dreams Become Affordable Reality!<hr/></h2>
                <img src="/media/images/jpg/hayesville.jpg" alt="website design hayesville oregon">
                <p>In the heart of Hayesville, Oregon, there's a growing need for businesses to establish a powerful online presence. Whether you're a local entrepreneur, a small business owner, or a passionate blogger, the key to standing out in the digital realm is a well-designed website. Welcome to Evergreen By Design, where your online dreams meet reality! I'm here to guide you through my comprehensive website design services, where excellence meets affordability.</p>
                
                
            
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="hayesville-hosting">
                <h2 id="hayesville-hosting" class="capitalize inline-block">Chapter 1: The Foundation of Your Digital Presence<hr/></h2>
                
                <p>Your website is the digital front door to your Hayesville venture. At Evergreen By Design, I understand that every business is unique, and I'm committed to crafting tailor-made websites to suit your specific needs. Here's what Evergreen By Design brings to the table:</p>
                <ol class="list-decimal ml-8 space-y-6">
                    <li><strong class="font-light">Hosting with Unlimited Bandwidth and Storage:</strong> I offer robust hosting solutions that ensure your website runs smoothly, even during traffic spikes. With unlimited bandwidth and storage, your website can grow without limitations.</li>
                    <li><strong class="font-light">Responsive Design:</strong> In an age where smartphones and tablets dominate, your website must adapt to various screen sizes. My responsive designs guarantee that your site looks and functions flawlessly on all devices.</li>
                </ol>
            
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="hayesville-content-creation">
                <h2 id="hayesville-content-creation" class="capitalize inline-block">Chapter 2: Creating an Engaging Online Identity<hr/></h2>

                <p>Your website is the digital front door to your Hayesville venture. At Evergreen By Design, I understand that every business is unique, and I'm committed to crafting tailor-made websites to suit your specific needs. Here's what Evergreen By Design brings to the table:</p>
                <ol class="list-decimal ml-8 space-y-6">
                    <li><strong class="font-light">Content Creation:</strong> Content is king! I specialize in crafting engaging, SEO-friendly content that resonates with your target audience, helping you rank higher on search engines and keeping visitors engaged.</li>
                    <li><strong class="font-light">Logo Design:</strong> Your logo is your brand's visual cornerstone. I will create a unique and eye-catching logo that captures your brand's essence.</li>
                </ol>

        </section>


        <section class="space-y-10 mb-8" aria-labelledby="hayesville-support">
                <h2 id="hayesville-support" class="capitalize inline-block">Chapter 3: Ongoing Management and Support<hr/></h2>

                <p>Building a website is just the beginning. Maintenance and updates are crucial for a seamless online experience. Here's how Evergreen By Design got your back:</p>
                <ol class="list-decimal ml-8 space-y-6">
                    <li><strong class="font-light">Ongoing Management and Updates:</strong>  Evergreen By Design offers hassle-free website management and updates. I ensure your website stays current, secure, and optimized for peak performance.</li>
                    <li><strong class="font-light">One-on-One Support:</strong> You're not alone on this digital journey. With Evergreen By Design, you'll have direct access to my expertise. Whenever you have questions or need assistance, I'm just a call or email away.</li>
                </ol>

        </section>

        <section class="space-y-10 mb-8" aria-labelledby="hayesville-domain-email">
                <h2 id="hayesville-domain-email" class="capitalize inline-block">Chapter 4: Domains and Email Marketing<hr/></h2>

                <p>Your online presence extends beyond your website. Evergreen By Design offers a comprehensive package to cover all your digital needs:</p>
                <ol class="list-decimal ml-8 space-y-6">
                    <li><strong class="font-light">Domain Services:</strong>  I'll help you secure the perfect domain name that aligns with your brand, making it easy for customers to find you online.</li>
                    <li><strong class="font-light">Email Marketing System:</strong> Stay connected with your audience through effective email marketing campaigns. I'll set up and manage your email marketing system to help you engage, nurture, and convert leads.</li>
                </ol>
        </section>

        <section class="space-y-10 mb-8" aria-labelledby="hayesville-ex-mile">
                <h2 id="hayesville-ex-mile" class="capitalize inline-block">Chapter 5: Going the Extra Mile<hr/></h2>

                <p>At Evergreen By Design, I believe in delivering more than just services. I'm committed to going the extra mile for Hayesville clients:</p>
                <ol class="list-decimal ml-8 space-y-6">
                    <li><strong class="font-light">Professionalism:</strong>  As a one-person team, I'm dedicated to providing personalized and professional service. Your success is my success, and I take great pride in helping Hayesville businesses thrive online.</li>
                    <li><strong class="font-light">And More:</strong> Beyond the core services mentioned, I offer a range of additional features, including e-commerce solutions, social media integration, and analytics to help you track your online progress.</li>
                </ol>

        </section>


 

        <section class="space-y-10 mb-8" aria-labelledby="hayesville-conclusion">
                <h2 id="hayesville-conclusion" class="capitalize inline-block">Conclusion<hr/></h2>
                <img src="/media/images/jpg/hayesville-school.jpg" alt="hayesville school website design">

                <p>Your journey to digital success in Hayesville, Oregon, begins with Evergreen By Design. I'm not just another website design service; I'm your dedicated partner in building and growing your online presence. With unlimited bandwidth and storage, content creation, logo design, responsive design, ongoing management and updates, one-on-one support, domain services, email marketing, and a commitment to professionalism, I'm here to transform your online vision into reality.</p>

                <p>Let's embark on this exciting journey together. Contact Evergreen By Design today, and let's create a website that will make Hayesville proud!</p>

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