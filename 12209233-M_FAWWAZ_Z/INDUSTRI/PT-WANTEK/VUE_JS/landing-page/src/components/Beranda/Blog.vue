<template>
    <div class="blog blog-section">
        <h1>Blog</h1>
        <div class="row-blog">
<Card></Card>
        </div>
    </div>
</template>
<script>
import '@/assets/blog.css';
import Card from '@/components/Blog/Card.vue';
export default {
    components: {
        Card
    }
}
</script>