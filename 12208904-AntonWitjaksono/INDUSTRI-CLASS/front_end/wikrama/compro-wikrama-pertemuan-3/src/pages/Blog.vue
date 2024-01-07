<template>
    <div class="container">
        <div class="blog">
            <h3> Blog</h3>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari judul" v-model="searchTerm" @input="searchBlogs">
            </div>
            <div class="row-blog">
                <CardBlog v-for="blog in filteredBlogs" :blog="blog" :key="blog.id"></CardBlog>
            </div>
            <div class="read-more">
                <a href="">Lihat lebih banyak</a>
            </div>
        </div>
    </div>
</template>
<script>
import CardBlog from '@/components/Blog/Card.vue';
import { Get } from '@/Api/index.js';

export default {
    components: {
        CardBlog
    },
    data() {
        return {
            DataBlog: [],
            searchTerm: ''
        }
    },
    async created() {
        await this.fetchBlogs();
    },
    methods: {
        async fetchBlogs() {
            const response = await Get('http://127.0.0.1:8000/api/blog');
            this.DataBlog = response.data.data;
        },
        async searchBlogs() {
            if (this.searchTerm === '') {
                await this.fetchBlogs();
            } else {
                const response = await Get(`http://127.0.0.1:8000/api/blog?search=${this.searchTerm}`);
                this.DataBlog = response.data.data;
            }
        }
    },
    computed: {
        filteredBlogs() {
            return this.DataBlog;
        }
    }
}
</script>
