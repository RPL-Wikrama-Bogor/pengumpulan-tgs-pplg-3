<template>
    <div class="container">
        <div class="portofolio">
            <h3>hello </h3>
            <p>dwhd9hnajfnioajnoiwjd</p>
            <div class="category">
                <span>Web</span>
                <span>Desain</span>
                <span>Mobile</span>
            </div>
            <div class="row-portfolio">

            </div>
        </div>
    </div>
</template>

<style>
.category{
    margin: 10px 0 35px 0;
    display: flex;
    flex-wrap: wrap;
}

.category span{
    background-color: #bdcdff;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    margin: 5px;
    cursor: pointer;
}
.row-portofolio{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}
.portofolio{
    margin-top: 10px;
}
.portofolio h4{
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
}
.portofolio p{
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4f556a;
}
</style>