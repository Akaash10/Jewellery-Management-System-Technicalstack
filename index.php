<?php
$host = "localhost";
$username = "root";
$password = "Achielles@20";
$database = "miniproject";
$conn = new mysqli($host, $username, $password, $database);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="./index.js"></script>
    <style>
        *{
    padding:0;
    margin:0;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .mynavbar{
        height: 70px;
        width: 100%;
        background-color: #F2E9E9;
        display: flex;
        align-items: center;
        justify-content: center;
        position: sticky;
        top: 0;
         z-index: 1000; 
    }
    .mynavbar-content{
        display: flex;
        align-items: center;
        gap: 5px;
    }
    #in-bar{
        height: 35px;
        width: 600px;
        border-style: none;
        font-size: 13px;
        padding: 10px;
        border-radius: 5px;
    }
    .mynavbar-content img{
        height: 65px;
        padding-right: 15px;
    }
    #nav-font{
        font-size: 11px;
    }
    .icon-flex{
        display: flex;
        gap: 25px;
        margin-left: 12px;
        color: maroon;
        margin-top: 5px;
    }
    #g1{
        margin-left: 18px;
    }
    #g2{
        margin-left: 8px;
    }
    #g3{
        margin-left: 14px;
    }
    #g4{
        margin-left: 12px;
    }
    #g5{
        margin-left: 2px;
    }
    #g1:hover{
        height: 19px;
        width: 19px;
    }
    #g2:hover{
        height: 19px;
        width: 19px;
    }
    #g3:hover{
        height: 19px;
        width: 19px;
    }
    #g4:hover{
        height: 19px;
        width: 19px;
    }
    #g5:hover{
        height: 19px;
        width: 19px;
    }

    .card-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        justify-content: flex-start;
        height: 430px;
        width: 100%;
    }
    #c1{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 40px;
        margin: 4px;
    }
    .card-content-flex{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 280px;
        width: 100px;
        gap: 50px;
    }
    .s-content{
        height: 260px;
        width: 180px;
        border: 1px solid gray;
    }
    .s-content:hover{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
    }
    #sp{
        text-align: center;
        font-size: 18px;
        padding-top: 5px;
        color: maroon;
        font-weight: 600;
    }
    #spf{
        text-align: center;
        font-size: 15px;
        padding-top: 5px;
        color: gray;
        font-weight: 200;
    }
    #spf:hover{
        font-size: 14px;
    }


    .video-content{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 550px;
        width: 100%;
    }
    .v{
        height: 500px;
        width: 70%;
        position: relative; 
        border-radius: 20px;
    }
    .v video {
        width: 100%; 
        height: 100%; 
        object-fit: cover;
    }


    .new-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        justify-content: flex-start;
        height: 590px;
        width: 100%;
    }
    .new-content-flex{
        height: 500px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
    }
    #l-content{
        height: 400px;
        width: 390px;
        border: 1px solid gray;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
    }
    #l-content:hover{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
    }
    #l-button{
        height: 40px;
        width: 150px;
        border: 1px solid maroon;
        color: maroon;
        font-size: 18px;
        border-radius: 5px;
        margin-bottom: 25px
    }
    #l-button:hover{
        color: white;
        background-color: maroon;
        transition-timing-function: linear;
        transition: 1s;
    }


    .myfooter{
        background-color: #EDE8EA;
        height:500px;
        width: 100%;
        display:flex;
        flex-direction:row;
        justify-content: space-around;
        align-items: center;
    }
    .mybox{
        width: 400px;
        height: 400px;
        background-color: #EDE8EA;
        color:black;
    }
    .demo{
        padding-top: 8px;
        font-size: 17px;
    }
    .box2{
        width: 300px;
        height: 400px;
        background-color: #EDE8EA;
        color:black;
    }
    .mybox nav{
        margin-top: 10px;
        text-align: left;
    }
    .mybox p{
        margin-top: 10px;
        text-align: left;
        margin-left: 50px;
        font-size: 23px;
    }
    .mybox a,ul{
        text-decoration: none;
        color: black;
        list-style-type:none;
        padding: 20px;
    }
    .mybox li{
        padding: 15px;
        font-size: 16px;
    }
    .box1 div{
        display: inline;
        float:left;
        margin-left: 20px;
        margin-top: 10px;
    }
    .demo2{
        display: inline;
    }
    .demo2 img{
        width: 120px;
        height: 130px;
        margin-left: 20px;
    }
    .box2 p{
        text-align: left;
        font-size: large;
        margin-left: 20px;
    }
    .demo4 a{
        text-decoration: none;
        color: black;
    }
    .box2{
        width: 400px;
        height: 400px;
        background-color:#EDE8EA;
        color:black;
    }
    .myfooter a:hover{
        color: maroon;
        text-decoration: none;
    }

    .brochure-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 3px;
        justify-content: flex-start;
        height: 630px;
        width: 100%;
    }
    .content{
        display: flex;
        justify-content: center;
        gap: 50px;
        align-items: center;
        height: 55vh;
        width: 100%;
    }
    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        height: 400px;
        width: 300px;
        border-radius: 20px;
        border: 1px solid grey;
        transition: transform 0.9s;
        transform-style: preserve-3d;
    }
    .face {
        --flow-space: 1rem;
        position: absolute;
        height: 100%;
        width: 100%;
        backface-visibility: hidden;
        display: flex;
        justify-content: center;
    }
    .back {
        display: grid;
        place-items: center;
        background: rgb(223, 195, 195);
        border-radius: 20px;
        transform: rotateY(180deg);
    }
    .card:focus,
    .card:hover {
        transform: rotateY(180deg);
    }
    .button {
    border: 1px solid white;
    background: none;
    color: white;
    font-size: 1.25rem;
    font-weight: lighter;
    padding: 1rem;
    transition-duration: 0.30s;
    cursor: pointer;
  }
    button:hover,
    button:focus {
        background: white;
        color: dodgerblue;
    }

    .modalx {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-contentx {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-height: 40%; /* Set a maximum height for the modal content */
        overflow-y: auto; /* Enable vertical scrolling if the content exceeds the height */
        position: relative;
    }

    .closex {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        cursor: pointer;
    }

    .reduce-motion .back {
        z-index: 2;
        opacity: 0;
        pointer-events: none;
        transition-duration: 0.6s;
        transform: none;
    }

    .reduce-motion .card:focus,
    .reduce-motion .card:focus-within,
    .reduce-motion .card:hover {
        transform: none;
    }

    .reduce-motion .card:focus .back,
    .reduce-motion .card:focus-within .back,
    .reduce-motion .card:hover .back {
        opacity: 1;
        pointer-events: all;
        transform: none;
    }
    #r-button{
        height: 35px;
        width: 130px;
        border: 1px solid maroon;
        color: maroon;
        font-size: 18px;
        border-radius: 5px;
        margin-bottom: 25px
    }
    #r-button:hover{
        color: white;
        background-color: maroon;
        transition-timing-function: linear;
        transition: 1s;
    }
    #showModalButton {
        padding: 3px 5px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    #showModalButton:hover {
        background-color: #0056b3;
    }
    #ts{
        font-size: 15px;
    }
    </style>
</head>
<body>
    <div class="mynavbar">
        <div class="mynavbar-content">
            <img src="./img/tlogo.png" alt="">
            <input type="text" id="in-bar" placeholder="Search for Gold Jewellery, Diamond...">
        </div>
        <div class="icon-flex">
            <span><svg id="g1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="maroon" class="bi bi-gem" viewBox="0 0 16 16">
                <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/>
            </svg><br><p id="nav-font">DIAMONDS</p></span>
            <span><svg id="g2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="maroon" class="bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
              </svg><br><p id="nav-font">STORES</p></span>
            <span><svg id="g3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="maroon" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
              </svg><br><p id="nav-font">ACCOUNT</p></span>
            <span><svg id="g4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="maroon" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg><br><p id="nav-font">WISHLIST</p></span>
            <span><svg id="g5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="maroon" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg><br><p id="nav-font">CART</p></span>
        </div>
    </div>

    <div class="carousel">
        <div class="gb-a">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%x; height: 100%;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active" id="cimage">
                    <img src="./img/c1.webp">
                  </div>
            
                  <div class="item" id="cimage">
                    <img src="./img/c2.webp">
                  </div>
                
                  <div class="item" id="cimage">
                    <img src="./img/c3.webp">
                  </div>
                  <div class="item" id="cimage">
                    <img src="./img/c4.webp">
                  </div>
                  <div class="item" id="cimage">
                    <img src="./img/c5.webp">
                  </div>
                </div>
            
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

   
  
    <div class="card-content">
        <p id="c1" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 600;color: maroon;">
            Shop By Category
        </p>
        <p style="font-size: 18px;">Browse through your favorite categories. We've got them all!</p>
        <img src="./img/hr.png" alt="">
        <div class="card-content-flex">
            <div class="s-content" data-aos="fade-up" data-aos-easing="linear">
                <img src="./img/s1.webp" alt="" style="height: 180px;width: 180px;background-size: cover;
                background-position: fixed;">
                <p id="sp">Gold Coins</p>
                <p id="spf">About <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg></p>
            </div>
            <div class="s-content" data-aos="fade-up" data-aos-easing="linear">
                <img src="./img/s2.webp" alt="" style="height: 180px;width: 180px;background-size: cover;
                background-position: fixed;">
                <p id="sp">Chains</p>
                <p id="spf">About <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg></p>
            </div>
            <div class="s-content" data-aos="fade-up"  data-aos-easing="linear">
                <img src="./img/s3.webp" alt="" style="height: 180px;width: 180px;background-size: cover;
                background-position: fixed;">
                <p id="sp">Neckwear</p>
                <p id="spf">About <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg></p>
            </div>
            <div class="s-content" data-aos="fade-up"  data-aos-easing="linear">
                <img src="./img/s4.webp" alt="" style="height: 180px;width: 180px;background-size: cover;
                background-position: fixed;">
                <p id="sp">Bangles</p>
                <p id="spf">About <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg></p>
            </div>
            <div class="s-content" data-aos="fade-up"  data-aos-easing="linear">
                <img src="./img/s5.webp" alt="" style="height: 180px;width: 180px;background-size: cover;
                background-position: fixed;">
                <p id="sp">Pendants</p>
                <p id="spf">About <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg></p>
            </div>
        </div>
    </div>

    
    <div class="brochure-content">
        <p id="c1" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 600;color: maroon;">
            Schemes
        </p>
        <p style="font-size: 18px;">For your future towards small savings. We'll build together!</p>
        <img src="./img/hr.png" alt="">
        <div class="content" id="displayProduct">
                    <?php
                        $output='';
                        $sql='select * from product_details';
                        $exe=mysqli_query($conn,$sql);
                        if($exe->num_rows>0){
                        while($res=mysqli_fetch_array($exe)){
                            $display_name = $res["name"];
                            $display_description = $res["description"];
                            $display_duration = $res["duration"];
                            $output.='<div class="card">
                            <div class="box face front flow" style="background-image: url(<?php echo $image_url; ?>);border-radius: 20px;border-style: none;height:398px;width:298px;">
                            <h2></h2>
                            <p style="margin-top:10px;font-size:20px;"><b><i>'.$display_name.'</b></i></p>
                            </div>
                            <div class="face back">
                            <button id="r-button" data-toggle="modal" data-target="#myModal" data-name="' . $display_name . '" data-description="' . $display_description . '" data-duration="' . $display_duration . '">Read More</button>
                            </div>
                            </div>';
                        }
                        echo $output;
                        }
                    ?>
            </div>

            <div class="modal" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><span id="modalName" style="font-size:20px;"></span></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p style="font-size:20px;">Description: <span id="modalDescription"></span></p>
                        <p style="font-size:20px;">Duration: <span id="modalDuration"></span></p>
                        <button id="showModalButton" style="font-size:17px;">Accept terms and conditions to register</button>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button class="btn btn-primary" data-toggle="modal" id="registerButton" style="width:100px;" disabled>Register</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
               </div>
               <div id="termsModal" class="modalx">
                            <div class="modal-contentx">
                                <span class="closex" id="closeModal">&times;</span>
                                <h2>Terms and Conditions</h2>
                                <div id="termsContent">
                                <p id="ts">1. This is a advance jewellery BOOKING plan. NO REFUND of money is allowed under any circumstances under the plan. <br>
        
                                2. The plan is unique and will not be linked to any other existing or future plans / offers and is not transferable under any circumstance.<br>
        
                                3. The money paid as advance under this plan shall not bear any interest.<br>
                                
                                4. Minimum booking amount is Rs.10,000/-. There is no CEILING for the maximum amount and a copy of PAN is to be furnished for amount exceeding Rs.2,00,000/-. All Online payments allowed above Rs.2 Lac except of cash payments. Cash payments shall not be allowed above Rs.1,80,000.<br>
                                
                                5. In this plan, MINOR CANNOT BECOME AN APPLICANT/MEMBER.<br>
                                
                                6. At the time of joining in the Jewellery Purchase Plan, the member may appoint a NOMINEE by furnishing KYC of both self and nominee. For Online Enrolled Member KYC and selfie photo of both attachment is mandatory.<br>
                                
                                7. Payment of monthly instalments can be made through all online payment mode i.e., Debit/Credit Card, UPI /QR, Net Banking, Wallet, Pay Later. EMI card not allowed. bond for payment made can be obtained or sent via courier.<br>
                                
                                8. Offline customers payments can be made through Cash, Credit / Debit Card, local cheques it shall be drawn in favour of “Lalithaa Jewellery Mart Private Ltd”. In case of dishonor of cheques, actual bank charges (Rs.200 to Rs.500 as the case maybe) shall be borne by the member. Member should ensure to collect receipt voucher / original membership bond while making payment directly at the respective branch.<br>
                                
                                9. The amount you pay is credited in 22 karat grams of gold as per the gold rate prevailing on the date of payment.<br>
                                
                                10. The time period for taking delivery of jewellery / purchase shall not exceed 365 days from the commencement date of the plan.<br>
                                
                                11. Members have the option to purchase gold coins also.<br>
                                
                                12. In case of balance money if any, left out in the plan account after adjusting the purchase price, various items shall be made available such as gold coins, silver coins, gift items and likewise for the members to purchase. Balance money will not be refunded.<br>
                                
                                13. Applicable Stone Charges will be collected from the members for ornaments with ruby, emerald, zircon, diamond, special stones, etc. Very few, special items such as oddiyanam, nagaz, kumkumchimizh, thirumangalyam, etc shall attract extra charges.<br>
                                
                                14. The person, who has enrolled in online application form, should sign on the invoice and prebooking bond at the time of purchase of jewellery. Produce ID & Address proof and bank passbook at the time of joining and redemption. Online Enrolled member if not come for jewellery purchase, the nominee ID and address proof shall be furnished along with declaration letter duly signed by the original enrolled member of respective scheme.<br>
                                
                                15. In case the member does not take delivery of the jewellery within 365 days from the enrolment date, sale invoice will be raised in the name of the member towards sale of jewellery, applicable GST on sale value will be paid to the Government and the ornaments weight due to the member will be held as “stock in custody” by the company till the member takes delivery of the ornament. This will be displayed in customer ledger in online app under the option Closed Scheme. The member can see their ledger and dues at any time and any where in mobile app and website under Lalithaa Jewellery Online Scheme. The offline member will be communicated/informed by the company in this regard by email / hard copy.<br></p>
                                </div>
                                <label>
                                    <input type="checkbox" id="acceptCheckbox"> I accept the terms and conditions
                                </label>
                            </div>
                        </div>
            </div>

            
    </div>

    <div class="video-content">
      <div class="v" data-aos="fade-up">
          <video autoplay muted>
              <source src="./img/vid.mp4" type="video/mp4">
              <source src="./img/vid.mp4" type="video/webm">
          </video>
      </div>
  </div>

    <div class="new-content">
      <p id="c1" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 600;color: maroon;">
          New For You!
      </p>
      <p style="font-size: 18px;">Our latest releases, just for you   !</p>
      <img src="./img/hr.png" alt="">
      <div class="new-content-flex">
          <div id="l-content" style="background-image: url(./img/n1.webp);background-size: cover;background-position: fixed;" data-aos="zoom-in" data-aos-duration="1000">
            <button id="l-button">Explore More</button>
          </div>
          <div id="l-content" style="background-image: url(./img/n2.jpg);background-size: cover;background-position: fixed;" data-aos="zoom-in" data-aos-duration="1000">
            <button id="l-button">Explore More</button>
          </div>
          <div id="l-content" style="background-image: url(./img/n3.jpg);background-size: cover;background-position: fixed;" data-aos="zoom-in" data-aos-duration="1000">
            <button id="l-button">Explore More</button>
          </div>
      </div>
  </div>



  <div class="first">
    <div class="myfooter">
        <div class="mybox">
            <p>Useful Links</p>
            <nav>
                <ul>
                    <li><a href="#"><i>Delivery Information</i></a></li>
                    <li><a href="#"><i>International Shipping</i></a></li>
                    <li><a href="#"><i>Payment Option</i></a></li>
                    <li><a href="#"><i>Track Your Order</i></a></li>
                    <li><a href="#"><i>Returns</i></a></li>
                    <li><a href="#"><i>Find a Store</i></a></li>
                </ul>
            </nav>
        </div>
        <div class="mybox">
            <p>Information</p>
            <nav>
                <ul>
                    <li><a href="#"><i>Careers</i></a></li>
                    <li><a href="#"><i>Blog</i></a></li>
                    <li><a href="#"><i>Offers and Contest Details</i></a></li>
                    <li><a href="#"><i>Help & FAQs</i></a></li>
                    <li><a href="#"><i>About Tanishq</i></a></li>
                </ul>
            </nav>
        </div>
        <div class="mybox" id="demo">
            <p>Contact Us</p>
            <nav>
                <ul>
                    <li class="box1"><a href="#"><i>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>
                        <div class="demo">
                            &nbsp;Write to Us
                        </div>
                    </i></a></li>
                    <li class="box1"><a href="#"><i>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </div>
                        <div class="demo">
                            &nbsp;1800-266-0123
                        </div>
                    </i></a></li>
                    <li class="box1"><a href="#"><i>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            </svg>
                        </div>
                        <div class="demo">
                        Chat With Us
                        </div>
                    </i></a></li>
                </ul>
            </nav>
        </div>
        <div class="box2" id="demo1">
            <p><b>Download the Tanishq App Now</b></p>
            <div class="demo2">
            <img src="./images/google-play-badge.png" >
            <img src="./images/app-store-apple-logo.svg" >
            </div>
            <p class="demo4">Follow us on &nbsp;
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></a> &nbsp;
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg></a> &nbsp;
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg></a>
            </p>
        </div>
    </div> 
</div>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
  <script>
    $(document).ready(function () {
        // Handle the "Read More" button click event
        $('[data-toggle="modal"]').click(function () {
            var button = $(this);
            var name = button.data('name');
            var description = button.data('description');
            var duration = button.data('duration');

            // Populate the modal with the data
            $('#modalName').text(name);
            $('#modalDescription').text(description);
            $('#modalDuration').text(duration);
        });
    });
</script>
<script>
    
    var modal = document.getElementById("termsModal");
    var closeModal = document.getElementById("closeModal");
    var showModalButton = document.getElementById("showModalButton");
    var acceptCheckbox = document.getElementById("acceptCheckbox");
    var registerButton = document.getElementById("registerButton");

    // Function to toggle the Register button based on checkbox state
    function toggleRegisterButton() {
        if (acceptCheckbox.checked) {
            registerButton.disabled = false;
        } else {
            registerButton.disabled = true;
        }
    }

    // When the user clicks the button, display the modal and check the checkbox
    showModalButton.onclick = function () {
        modal.style.display = "block";
        acceptCheckbox.checked = false; // Ensure the checkbox is unchecked when the modal is shown
        toggleRegisterButton();
    }

    // When the user clicks on the close button, hide the modal
    closeModal.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }

    // Listen for changes in the checkbox state and update the Register button accordingly
    acceptCheckbox.addEventListener("change", toggleRegisterButton);

</script>
<script>
document.getElementById("registerButton").addEventListener("click", function() {
    window.location.href = "/PROJECT_JEWEL/USER/User_login/user_login.html";
});
</script>

</html>
