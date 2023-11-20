<template>
    <div class="container">
        <div class="blog ">
            <h3> Blog</h3>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari judul">
              
            </div>
            <div class="row-blog">
                <CardBlog></CardBlog>
            </div>
            <div class="read-more">
                <a href="">Lihat lebih banyak</a>
            </div>
        </div>
    </div>
</template>
<script>
import '@/assets/blog.css';
import CardBlog from '@/components/Blog/Card.vue';
export default {
    components: {
        CardBlog
    }
}
</script>