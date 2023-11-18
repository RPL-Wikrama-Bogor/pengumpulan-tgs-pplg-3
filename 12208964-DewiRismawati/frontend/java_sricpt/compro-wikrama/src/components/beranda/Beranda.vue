<template>
    <div>
        <div class="section_1">
            <div class="section1_content">
                <h1>Expers are here solve your business problem.</h1>
                <p>Youll be much better than with most other themes options are done rige <a href="">lihat layanan...</a></p>
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


.section1_content a {
    font-weight: 900;
    font-size: 15px;
    line-height: 18px;
    text-transform: capitalize;
    color: #042181;
    cursor: pointer;
    text-decoration: none;
}
.section1_content{
    width: 50%;
    padding: 30px 0;
}

.section1_img {
    width: 50%;
}

.section1_img img {
    width: 100%;
}

.section1_content h1 {
    font-size: 48px;
}

.section1_content p{
    margin-bottom: 20px;
}

@media screen and (max-width: 600px) {
    .section_1{
        flex-direction: column;
        pad: 20 px 20px;
    }

    .section1_content {
        width: 100%;
        padding: 30px 0;
    }

    .section1_img {
        width: 100%;
    }
}

</style>