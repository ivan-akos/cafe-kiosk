<template>
    <div class=" ">
        <div class="w-full flex mx-auto flex-row">            
            <header class="basis-2/6">
                <KioskNav>
                    <KioskNavItem background="../Assets/nav_coffee.jpg">Coffee</KioskNavItem>
                    <KioskNavItem background="../Assets/nav_sandwich.jpg">Sandwiches</KioskNavItem>
                    <KioskNavItem background="../Assets/nav_dessert.jpg">Desserts</KioskNavItem>
                </KioskNav>
            </header>
            
            <main class="w-full mx-auto">
                <div class="h-screen">
                    <slot />
                </div>
            </main>
        </div>

        <aside>
            <!-- <Footer /> -->
        </aside>
    </div>
</template>

<script>
import KioskNav from './KioskNav.vue';
import KioskNavItem from './KioskNavItem.vue';

export default{
    components:{
        KioskNav,
        KioskNavItem
    }
}
</script>