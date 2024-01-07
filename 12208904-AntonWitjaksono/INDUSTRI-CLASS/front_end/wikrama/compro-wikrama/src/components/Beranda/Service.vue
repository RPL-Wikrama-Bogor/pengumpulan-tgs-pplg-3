<template>
    <div class="section_2">
        <h3>Layanan kami</h3>
        <div class="row-service">
            <Card></Card>
        </div>
    </div>
</template>
<style>
.service
{
    margin-top: 80px;
}

.service h3
{
    font-weight: 900;
    font-size: 48px;
    line-height: 35px;
    color: #042181;
    margin-bottom: 30px;
    text-align: center;
}

.row-service
{
    display: grid;
    grid-template-columns: repeat(3, 2fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px)
{
    .row-service
    {
         display: grid;
         grid-template-columns: repeat(1, 1fr);
         grid-gap: 10px;
    }
}
</style>