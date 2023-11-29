<template>
    <div>
        <div class="topnav container" :class="{ responsive: navbarActive }">
            <div class="logo">
                <div><img src="@/assets/img/logo.png" alt="logo" /></div>
                <a class="icon">
                    <img src="@/assets/img/hamburger.svg" @click="navbar" alt="hamburger" srcset="" />
                </a>
            </div>
            <div class="menu">
                <router-link class="link" :to="{ name: 'Beranda' }">Home</router-link>
      <router-link class="link" to="/portofolio">Portofolio</router-link>
      <router-link class="link" to="/blog">Blog</router-link>
      <router-link class="link" to="/contact">Kontak</router-link>


                
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            navbarActive: false,
        };
    },
    methods: {
        navbar() {
            if (this.navbarActive) {
                this.navbarActive = false;
            } else {
                this.navbarActive = true;
            }
        },
    },
};
</script>
  
<style scoped>

.topnav {
    overflow: hidden;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.topnav .link {
    display: inline-block; /* Mengganti float dengan inline-block */
    color: black;
    text-align: center;
    padding: 10px 20px; /* Memberi padding atas dan bawah, menghapus padding kiri-kanan */
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    border-bottom: 2px solid blue;
}

.topnav a:hover {
    color: black;
}

.topnav a :active {
    background-color: aquamarine;
    color: white;
}

.topnav .icon {
    display: none;
}

.logo {
    display: flex;
    justify-content: space-between;
    max-width: 100%;
    padding: 10px;
}

@media screen and (max-width: 600px) {
    .topnav {
        display: block;
        padding: none;
    }

    .topnav .menu a {
        display: none;
    }

    .topnav a.icon {
        float: right;
        display: block;
    }
}

@media screen and (max-width: 600px) {
    .topnav.responsive {
        position: relative;
        display: block;
    }

    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}
</style>
  