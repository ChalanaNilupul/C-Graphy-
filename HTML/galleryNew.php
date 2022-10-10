<?php session_start();

if (!isset($_SESSION["txtemail"])) {
	$bar=include_once 'navBar.php';
    $A='visitor';
}
else
{
    $A='logged';
	$bar=include_once 'navBarlogged.php';
}
?>
<!doctype html>
<html>

<head>
    <title>C Graphy</title>

    
    <link rel="stylesheet" href="../CSS/fadein.css">
  <script src="../js/like.js"></script>
    <link rel="stylesheet" href="../CSS/gallery.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: black;

        }

        .content {
            columns: 4;
            column-gap: 5px;
            padding-top: 100px;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 30px;
        }

        img {
            width: 100%;

        }

        .box {
            width: 100%;
            height: 100%;
            position: relative;
            margin-bottom: 5px;

        }

        .box .grid-images {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .box .grid-images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 50% 50%;
            cursor: pointer;
            transition: .5s ease-in-out;
        }



        .box .grid-images:hover img {
            transform: scale(1.2);
            opacity: 0.6;
        }

        @media(max-width:1500px) {
            .content {
                columns: 3;
            }
        }

        @media(max-width:992px) {
            .content {
                columns: 2;
            }
        }
        @media(max-width:750px) {
            .content {
                columns: 1;
            }
        }

        .grid-images .text {
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);
            z-index: 4;
            transition: .3 ease-in-out;
        }


        .grid-images:hover .text {
            opacity: 1;
            animation: move-down .3s linear;
            padding: 1em;
            width: 100%;

        }

        @keyframes move-down {
            0% {
                top: 10%;
            }

            50% {
                top: 35%;
            }

            100% {
                top: 50%;
            }
        }

        .grid-images .text .btnbuy {
            width: 80px;
            height: 30px;
            border: 0;
            background-color: #000000;
           color: white;
            cursor: pointer;
            font-size: 20px;
			border: 1px solid white;
        }

        .grid-images .text .btnbuy:hover {
            background-color: white;
			color: black;
        }

        .grid-images .like-sec {
            opacity: 0;
            position: absolute;
            bottom: 10px;
            left: 10px;


            z-index: 4;
            transition: .3 ease-in-out;
        }

        .grid-images:hover .like-sec {
            opacity: 1;
            animation: move-up .3s linear;



        }

        @keyframes move-up {
            0% {
                bottom: 2px;
            }

            50% {
                bottom: 7px;
            }

            100% {
                bottom: 10px;
            }
        }


        .scrollTop {
            position: fixed;
            bottom: 800px;
            right: 8px;
            width: 48px;
            height: 48px;
            background: #0F0D0D url("../Images/sdsd.png");
            border-radius: 50%;
            background-size: 40px;
            background-position: center;
            background-repeat: no-repeat;
            cursor: pointer;
            z-index: 100000;
            visibility: hidden;
            opacity: 0;
            transition: 0.5s;

        }

        .scrollTop.active {
            bottom: 40px;
            visibility: visible;
            opacity: 1;
        }
    </style>

</head>

<body>

<?php echo $bar; ?>


    <!------------------------------------------------gallery---------------------------------------------------->

   

    <div class="content">



        <?php



        $con = mysqli_connect("localhost", "root", "", "cngraphy");
        /*$sql1="SELECT COUNT(*) FROM `imglike` WHERE `ImgID` = '".$row["ImgID"]."';";*/
                
            

        if (!$con) {
            die("Connect to a database");
        }

        $sql = "SELECT * FROM `images`";
        
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                  /*---------Counting Likes-------*/
                  $sql1="SELECT COUNT(*) AS total FROM `imglike` WHERE `ImgID` = '". $row["ImgID"] ."';";
                  $result1 = mysqli_query($con,$sql1);
              
                  $count=mysqli_fetch_assoc($result1);
                  $tot=$count['total'];
  
                  /*---------Counting Likes-------*/
        /*-------------------------------check wheather it's a visitor-------------------------------------*/
           
           if($A=='visitor')
           {
            echo "
            <div class='box'>
                <div class='grid-images'>
                    <img src='" . $row["Image"] . "' alt=''>
                    <div class='text'>
                        <h1>" . $row["Title"] . "</h1>
                        <a href='../User/ImageBuy.php?id=" . $row["ImgID"] . " '><button class='btnbuy'>Buy</button></a>
                    </div>
                    <div class='like-sec'>
                        <div> <form action='../PHP/addLikeImages.php?id=" . $row["ImgID"] . "' method='POST'>
                                 <button class='like' ><i class='fa fa-heart' ></i></button>
                                 
                         </form> </div>
                         <div><h5>".$tot."</h5> </div>
                         <div> 
                         <form action='../User/imageComment.php?id=" . $row["ImgID"] . "' method='POST'>
                         <button class='comment'><i class='fa-solid fa-comment'></i></button></form></div>
                    </div>
                    
                </div>
            </div>
      
        ";


           }

           if($A=='logged')
           {
                 /*---------------------------check admin registered and user---------------------------------*/
                 $sql2="SELECT `Post` AS A FROM `user` WHERE `Email`='".$_SESSION["txtemail"]."'";
                 $result2 = mysqli_query($con,$sql2);
             
                 $out=mysqli_fetch_assoc($result2);
                 $post=$out['A'];

                /*---------------------------check admin and user---------------------------------*/


                /*------------ If its a admin  --------------*/

                if($post=='admin'){
                    echo "
                    <div class='box'>
                        <div class='grid-images'>
                            <img src='" . $row["Image"] . "' alt=''>
                            <div class='text'>
                                <h1>" . $row["Title"] . "</h1>
                                
                            </div>
                            <div class='like-sec'>
                                <div> <form action='../PHP/deletegalleryimg.php?id=" . $row["ImgID"] . "' method='POST'>
                                         <button class='like'> <i class='fa fa-trash' aria-hidden='true'></i></button>
                                         
                                 </form> </div>
                                
                            </div>
                            
                        </div>
                    </div>
              
                ";
                }

                else{
                echo "
            <div class='box'>
                <div class='grid-images'>
                    <img src='" . $row["Image"] . "' alt=''>
                    <div class='text'>
                        <h1>" . $row["Title"] . "</h1>
                        <a href='../User/ImageBuy.php?id=" . $row["ImgID"] . " '><button class='btnbuy'>Buy</button></a>
                    </div>
                    <div class='like-sec'>
                        <div> <form action='../PHP/addLikeImages.php?id=" . $row["ImgID"] . "' method='POST'>
                                 <button onclick='like()' class='like' id='like'><i class='fa fa-heart' ></i></button>
                                 
                         </form> </div>
                         <div><h5>".$tot."</h5> </div>
                         <div> 
                         <form action='../User/imageComment.php?id=" . $row["ImgID"] . "' method='POST'>
                         <button class='comment'><i class='fa-solid fa-comment'></i></button></form></div>
                    </div>
                    
                </div>
            </div>
      
        ";

    }

}

        ?>
                
              

        <?php
            }
        }
        ?>


    </div>


    <!-------------------------------------------------------------SCROLL TO TOP---------------------------------------------------------------------->
    <div class="scrollTop" onClick="scrollToTop();"></div>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var scroll = document.querySelector('.scrollTop');
            scroll.classList.toggle("active", window.scrollY > 400)
        })

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    </script>
    <!-------------------------------------------------------------SCROLL TO TOP END---------------------------------------------------------------------->



    <?php include_once "footer.php"; ?>



</body>

</html>