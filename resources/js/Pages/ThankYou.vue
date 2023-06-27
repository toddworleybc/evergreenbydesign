<script setup>
 
    import FrontEnd from '@/Layouts/Frontend.vue';
    import PageBanner from '@/Components/PageBanner.vue';
    import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div>
        <FrontEnd>
            <div class="h-screen flex items-center justify-center bg-ty-img">
                <div class="text-center bg-white/90 w-4/6 py-12 shadow-lg rounded">
                    <h1>Thank you for submitting your website inquiry.</h1>
                    <section class="mb-0">
                        <p class="text-3xl">Please give me 1 business day to respond.</p><p class="text-xl">In the meantime, I have sent a welcome packet to your email. <br/>This packet will give you a jumpstart on learning more about how Evergreen By Design works!</p>
                        <div class="mt-10">
                            <Link :href="route('home')" class="btn">Back To Home</Link>
                        </div>
                    </section>
                </div>
                
            </div>
            
        </FrontEnd>
    </div>
</template>

<style>
    .bg-ty-img {
        background: linear-gradient(to top, rgba(255, 255, 255, 0.537), rgba(255, 255, 255, 0.42)), url('/media/images/jpg/landscape.jpg') no-repeat center center;
    }


</style>