<template>
    <div class="blog blog-section">
        <h3>Blog</h3>
        <div class="row-blog">
            <Card></Card>
            <Card></Card>
            <Card></Card>
            <card></card>
        </div>
    </div>
</template>
<script>
import '@/assets/blog.css';
import Card from '@/components/blog/Card.vue';
export default {
    components: {
        Card
    }
}
</script>