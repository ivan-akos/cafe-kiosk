<script setup>
import {defineProps, computed, ref} from "vue";
const props = defineProps(['background'])

// const imgUrl = new URL(props.background, import.meta.url).href

const computedUrl = computed(() => {
    let imgUrl = new URL(props.background, import.meta.url).href
    return `url(${imgUrl})`;
});

</script>

<template>
    <div>
        <div  class="mt-2  custom-background-image transition bg-black bg-opacity-30" 
              active-class="">
            <div class="px-6 flex transition text-xl bg-gradient-to-r hover:to-white/25  from-black via-black/80 border-transparent border-r-2 hover:border-white text-white text-left"
                 active-class="to-white/25 border-white">
                
                <span class=" flex-1 py-6">
                    <slot />
                </span>
            </div>
        </div>
    </div>
</template>


<style>
    .custom-background-image {
        background-image: v-bind(computedUrl);
        background-size: cover;
        background-position: center;
    }
</style>

