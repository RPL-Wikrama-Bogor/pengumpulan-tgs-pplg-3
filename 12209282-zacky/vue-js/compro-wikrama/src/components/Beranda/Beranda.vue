<template>
    <div>
        <div class="section_1">
            <div class="sectio1_content">
                <h1> Experts are here solve your business problem.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum eos culpa totam repudiandae nesciunt! Corporis error est quam enim a architecto. Ex, quia nemo optio quam eaque perferendis doloribus quasi.</p>
            </div>
            <div class="section1_img">
                <img src="@/assets/img/section_1.jpg" alt="beranda">
            </div>
        </div>
    </div>
</template>
<style scoped>
    .section_1{
        padding: 20px 0;
        display: flex;
        align-items: center;
    }

    .section1_content{
        width: 50%;
        padding: 30px 0;
    }
    .sectiona1_img{
        width: 50%;
    }
    .section1_content h1{
        font-size: 48px;
    }
    .section1_content p{
        margin-bottom: 20px;
    }
    @media screen and(max-width: 600px) {
        .section_1{
            flex-direction: column;
            padding: 20px 20px;
        }
        .section1_content{
            width: 100%;
            padding: 30px 0;
        }
        .sectiona1_img{
            width: 100%;
        }
    }
</style>