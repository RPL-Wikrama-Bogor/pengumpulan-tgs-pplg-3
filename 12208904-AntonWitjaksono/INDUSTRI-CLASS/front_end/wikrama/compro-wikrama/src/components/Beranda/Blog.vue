<template>
    <div class="blog blog-section">
        <h3> Blog</h3>

        <div class="row-blog">
            <Blog></Blog>
        </div>
        <div class="read-more">
            <a href="">Lihat lebih banyak</a>
        </div>
    </div>
</template>
<script>
import '@/assets/blog.css';
import Blog from '@/components/Blog/Card.vue'
export default{
    components:{
        Blog
    }
}
</script>