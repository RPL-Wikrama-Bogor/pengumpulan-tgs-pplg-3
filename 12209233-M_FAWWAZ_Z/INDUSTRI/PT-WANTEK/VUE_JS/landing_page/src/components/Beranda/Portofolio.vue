<template>
    <div class="portofolio">
        <h1>Portofolio</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row-portofolio">
            <div class="card-portofolio">
                <img src="@/assets/img/portfolio-1.jpg" alt="portofolio" />
                <div class="card-portofolio-description">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
                    <p><span>Klient:</span> IBONG</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import '@/assets/portofolio.css';

</script>

<style scoped>
.portofolio {
    margin-top: 80px;
}

.portofolio h1 {
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 40px;
    line-height: 70px;
    color: blue;
    margin-bottom: 15px;
    text-align: center;
}

.portofolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: brown;
    max-width: 600px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;
}

.portofolio p span {
    color: gray;
}

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

.card-portofolio {
    text-align: start;
    min-height: 306px;
    border-radius: 60px 0px 0px 0px;
    background: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}

.card-portofolio img {
    max-width: 100%;
    height: auto;
}

.card-portofolio-description {
    padding: 0 20px 20px 20px;
    text-align: center;
}

.card-portofolio h4 {
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
}
</style>
