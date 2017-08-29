<template>
    <div class="book-content">
        <v-header></v-header>
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </div>
</template>
<script>
import header from './Header'
export default {
    name: 'book-content',
    components: {
        'v-header': header,
    }
}
</script>
<style>
    .book-content{
        overflow-y: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        left: 300px;
    }
    .book-body{
        width: 100%;
        padding: 20px 25px;
    }
    .fade-enter-active {
        transition: all .3s ease-in-out;
    }
    .fade-leave-active {
        transition: all .3s ease-in-out;
    }
    .fade-enter{
        opacity: 0;
    }
    .fade-leave-to{
        opacity: 0;
    }
</style>

