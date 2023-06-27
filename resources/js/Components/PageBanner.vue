<script setup>

    const props = defineProps({
        heading: String
    });
 
</script>

<template>
 <div>
    <h1 v-html="props.heading" class="py-24 px-4 text-5xl lg:text-6xl text-center text-white pg-banner-deer leading-loose lg:leading-loose"></h1>
 </div>
</template>

<style>

    .pg-banner-deer {
        background-image: linear-gradient(225deg, rgba(19, 146, 47, 0.797), rgba(0, 128, 0, 0.567)), url('/media/images/svg/deer.svg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        text-shadow: 1px 1px 10px black;
    }


 
</style>