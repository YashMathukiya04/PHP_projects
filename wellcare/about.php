<?php include'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
</head>
<body>
    <div class="heading-wellcare">
        <h2>
            WellCare's Speciality
        </h2>
    </div>
    <?php  //  include('loading_spinner.php');  ?>
    <!-- wellcare's main information -->
    <section class="section-maininfo">
        <div class="para">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla molestias, temporibus eum nisi dolores atque, itaque minima nemo perferendis modi aliquid dolore alias autem excepturi nesciunt ad. Quisquam excepturi nam, modi deserunt fuga dignissimos quo sequi, eos atque dicta facere quaerat quidem repudiandae itaque, a molestias! Quam obcaecati minus laudantium ad nemo dolor sed alias ea amet ipsum vitae est ducimus, fuga quis eveniet, possimus impedit maiores mollitia aliquid natus doloremque eius atque. Dolorem nesciunt et excepturi quibusdam. Fugit doloribus natus facere rerum? Veritatis, neque quibusdam veniam eligendi dolor repellat exercitationem voluptatem officia ex explicabo delectus nesciunt architecto ipsum itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. A laudantium placeat laboriosam ipsum eveniet, vero esse sint inventore iure, perferendis amet deleniti. Quam adipisci velit tempore ut saepe, at, consectetur repellat non perspiciatis labore ducimus esse assumenda officia harum ad commodi eius pariatur nulla nemo dolores similique! Nulla alias possimus ea qui sed rem, ipsa cum est quidem aperiam blanditiis fugit recusandae dolore eaque dolor voluptates repudiandae autem dicta sint? Soluta, nesciunt eligendi repellat assumenda neque a ad sed deleniti veritatis. Sed voluptatum sit, magni natus possimus commodi, dolor enim omnis, vel asperiores officia labore numquam quae officiis pariatur voluptates?
            </p>
        </div>
        <div class="img">
            <img src="./images/about.jpg" alt="">
        </div>
    </section>


    <!-- main founders -->
    <div class="heading-founder">
        <h2>
            Founders
        </h2>
    </div>
    
    <!-- well care main founders -->
    <section class="founder">
        <div class="f-row">
            <div class="f-col">
                <img src="./images/doctor1.avif" alt="">
                <div class="layer">
                    <h3>
                        Founder 1
                    </h3>
                </div>
            </div>
            <div class="f-col">
                <img src="./images/doctor2.avif" alt="">
                <div class="layer">
                    <h3>
                        Founder 2
                    </h3>
                </div>
            </div>
            <div class="f-col">
                <img src="./images/doctor3.jpeg" alt="">
                <div class="layer">
                    <h3>
                        Founder 3
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- wellcare brnaches -->
    <div class="heading-branches">
        <h2>
            Our Bhraches
        </h2>
    </div>

    <!-- wellcare certificate -->
    <div class="heading-achivement">
        <h2>
            Achivements
        </h2>
    </div>
    <section class="achivements">
        <div class="achi-row">
            <div class="achi-col">
                <img src="./images/certificate1.webp" alt="">
                <h3>Certificate 1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit incidunt deserunt veniam! Autem, aspernatur optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloribus.</p>
            </div>
            <div class="achi-col">
                <img src="./images/certificate1.webp" alt="">
                <h3>Certificate 1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit incidunt deserunt veniam! Autem, aspernatur optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloribus.</p>
            </div>
            <div class="achi-col">
                <img src="./images/certificate1.webp" alt="">
                <h3>Certificate 1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit incidunt deserunt veniam! Autem, aspernatur optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloribus.
                </p>
            </div>
        </div>
    </section>
</body>
</html>

<?php include'footer.php'; ?>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        overflow-x: hidden;
    }
    .heading-wellcare h2{
        font-size: 30px;
        text-align: center;
        margin-top: 8%;
    }
    .heading-wellcare h2::after{
        
        content: '';
        display: block;
        background-color: red;
        width: 30%;
        height: 3px;
        margin: auto;
        margin-top: 5px;
        transition: 0.70s;
        border-radius: 10px;
    }
    .heading-wellcare h2:hover::after{
        width: 35%;
        border-radius: 10px;
    }
    .section-maininfo{
        
        padding: 20px;
        position: relative;
        margin-top: -5px;
        /* display: flex; */
    }
    .section-maininfo .para{
        font-size: 15px;
        text-align: justify;
        padding: 10px;
        max-width: 50%;
        height: auto;
        overflow: hidden;
    }
    .section-maininfo img{
        position: absolute;
        width: 520px;
        top: 30px;
        right: 60px;
        overflow: hidden;
    }
   
   
    
    
    
    .heading-founder h2{
        font-size: 30px;
        text-align: center;
        margin-bottom: 10px;
    }
    .heading-founder h2::after{
        
        content: '';
        display: block;
        background-color: red;
        width: 15%;
        height: 3px;
        margin: auto;
        margin-top: 5px;
        transition: 0.70s;
        border-radius: 10px;
    }
    .heading-founder h2:hover::after{
        width: 20%;
        border-radius: 10px;
    }
    
    .founder{
        width: 80%;
        margin: auto;
        text-align: center;
    }
    .f-row{
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
    }
    .f-col{
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }
    .f-col img{
        width: 100%;
        display: block;
    }
    .layer{
        background:transparent;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: 0.5s;
    }
    .layer:hover{
        background:  rgba(226, 0, 0, 0.514);
    }
    .layer h3{
        width: 100%;
        font-weight: 500;
        color: #fff;
        font-size: 26px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        position: absolute;
        padding: 10px;
        opacity: 0;
        transition: 0.5s;
    }
    .layer:hover h3{
        bottom: 50%;
        opacity: 1;
    }
    
    .heading-branches h2{
        font-size: 30px;
        text-align: center;
        margin-bottom: 10px;
    }
    .heading-branches h2::after{
        content: '';
        display: block;
        background-color: red;
        width: 20%;
        height: 3px;
        margin: auto;
        margin-top: 5px;
        transition: 0.70s;
        border-radius: 10px;
    }
    .heading-branches h2:hover:after{
        width: 25%;
        border-radius: 10px;
    }
    .heading-achivement h2{
        font-size: 30px;
        text-align: center;
        margin-bottom: 30px;
    }
    .heading-achivement h2::after{
        content: '';
        display: block;
        background-color: red;
        width: 20%;
        height: 3px;
        margin: auto;
        margin-top: 5px;
        transition: 0.70s;
        border-radius: 10px;
    }
    .heading-achivement h2:hover:after{
        width: 25%;
        border-radius: 10px;
    }
    
    .achivements{
        /* background-color: ; */
        width: 80%;
        margin-top: 30px;
        margin: auto;
    }
    .achivements .achi-row{
        display: flex;
    }
    .achivements .achi-col{
        margin:auto;    
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 20px;
        background-color: rgb(242, 237, 237);
        transition: 0.50s;
    }
    .achivements .achi-col:hover{
        box-shadow: 0px 0px 5px 5px gray;
    }
    .achi-col img{
        width: 100%;
        padding: 10px;
    }
    .achi-col h3{
        text-align: center;
        font-size: 25px;
        padding: 2px;
    }
    .achi-col p{
        text-align: center;
        font-size: 15px;
        padding: 10px;
        
    }
    @media(max-width:850px){
        .section-maininfo img{
            position: relative;
            transform: translateX(130px);
            margin-bottom: 10px;
            width: 650px;
            height: 100%;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 30px;
            padding: 5px;
            max-width: 85%;
        }
        .f-row{
            flex-direction: column;
        }
        .achivements .achi-row{
            flex-direction: column;
            
        }

    }
    @media(max-width:800px){
        .section-maininfo img{
            position: relative;
            transform: translateX(130px);
            margin-bottom: 10px;
            width: 600px;
            height: 100%;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 30px;
            padding: 5px;
            max-width: 85%;
        }
    }
    @media(max-width:700px){
        .section-maininfo img{
            position: relative;
            transform: translateX(140px);
            margin-bottom: 10px;
            width: 500px;
            height: 100%;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 25px;
            padding: 5px;
            max-width: 85%;
        }
    }
    @media(max-width:650px){
        .section-maininfo img{
            position: relative;
            transform: translateX(140px);
            margin-bottom: 10px;
            width: 450px;
            height: 100%;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 20px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:600px){
        .section-maininfo img{
            position: relative;
            transform: translateX(145px);
            margin-bottom: 10px;
            width: 400px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:550px){
        .section-maininfo img{
            position: relative;
            transform: translateX(120px);
            margin-bottom: 10px;
            width: 400px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:500px){
        .section-maininfo img{
            position: relative;
            transform: translateX(120px);
            margin-bottom: 10px;
            width: 350px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:450px){
        .section-maininfo img{
            position: relative;
            transform: translateX(90px);
            margin-bottom: 10px;
            width: 350px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:400px){
        .section-maininfo img{
            position: relative;
            transform: translateX(90px);
            margin-bottom: 10px;
            width: 300px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:350px){
        .section-maininfo img{
            position: relative;
            transform: translateX(90px);
            margin-bottom: 10px;
            width: 250px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
    @media(max-width:330px){
        .section-maininfo img{
            position: relative;
            transform: translateX(80px);
            margin-bottom: 10px;
            width: 250px;
            height: auto;
        }
        .section-maininfo .para{
            text-align: justify;
            margin: auto;
            font-size: 15px;
            padding: 5px;
            max-width: 85%;
            height: auto;
            
        }
    }
</style>
