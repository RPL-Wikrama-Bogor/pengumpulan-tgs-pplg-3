<template>
    <div class="card-blog">
        <img src="src/components/image/portfolio-1.jpg" alt="portofolio">
        <div class="card-blog-description">
            <div class="time">
                Nov 1 2023
            </div>
            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, aspernatur</p>
        </div>
    </div>
    <div class="card-blog">
        <img src="src/components/image/portfolio-1.jpg" alt="portofolio">
        <div class="card-blog-description">
            <div class="time">
                Nov 1 2023
            </div>
            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, aspernatur</p>
        </div>
    </div>
</template>

<style scoped>
    .card-blog {
        text-align: start;
        transition: all 0.5s ease;
        margin: 10px 10px;
        display: flex;
        align-items: center;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
        background: white;    
    }
    .card-blog img{
        width: 200px;
        height: 200px;
        object-fit: contain;
        padding: 0 0 20px 20px;
    }
    .card-blog-description {
        padding: 0 20px 0 20px;
    }
    .card-blog-description .time{
        font-weight: 500;
        font-size: 12%;
        line-height: 17px;
        color: #4F556A;
    }
    .card-blog-description a{
        font-weight: 900;
        font-size: 15px;
        line-height: 18;
        text-transform: capitalize;
        color: #4F556A;
        cursor: pointer;
        text-decoration: none;
    }
    .card-blog p{
        font-weight: 900;
        font-size: 24px;
        line-height: 28px;
        color: #042181;
        margin-top: 10px;
        margin-bottom: 5px;
    }
    @media screen and (max-width:600px) {
        .row-blog{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-gap: 10px;
        }
        .card-blog {
            flex-direction: column;
            align-items: start;
        }
        .card-blog img{
            width: 100%;
            height: 260px;
            object-fit: contain;
        }
    }
</style>