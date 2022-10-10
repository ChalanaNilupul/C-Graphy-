<?php include_once '../PHP/DB_Connect.php'; ?>
<?php session_start();

if (!isset($_SESSION["txtemail"])) {
    $bar = include_once 'navBar.php';
    $A = 'visitor';
} else {
    $bar = include_once 'navBarlogged.php';
    $A = 'logged';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="../CSS/fadein.css">
    <link rel="stylesheet" href="../CSS/blog.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php echo $bar  ?>

    <div class="blogs">
        <div class="bloginner">








            <?php

            $sql = "SELECT * FROM `blogs`";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


                    /*---------Counting Likes-------*/
                    $sql1 = "SELECT COUNT(*) AS total FROM `bloglikes` WHERE `blogID` = '" . $row["blogID"] . "';";
                    $result1 = mysqli_query($con, $sql1);

                    $count = mysqli_fetch_assoc($result1);
                    $tot = $count['total'];



                    /*---------Counting Likes-------*/

                    /*-------------------------------check wheather it's a visitor-------------------------------------*/

                    if ($A == 'visitor') {
                        echo "
                
            <div class='out'>
            <h1>" . $row["Title"] . "</h1>
            <div class='blog'>

                <div class='pic'><img src='" . $row["Image"] . "' alt=''></div>
                
                <div class='article'>
                    <p>" . $row["Article"] . " </p>

                </div>

            </div>
            <div class='date'>
                <p>" . $row["Date"] . "</p>
                <button class='count'>" . $tot . "</button>
                <form action='../PHP/addLikeBlog.php?id=" . $row["blogID"] . "' method='POST'>
                             <button class='like' ><i class='fa fa-heart' ></i></button>
                             
                     </form>
            <a href='../User/blogfull.php?id=" . $row["blogID"] . " '><button><i class='fa-solid fa-comment'></i></button></a>
            
            </div>
            
            
        </div>



            ";
                    }
                    if ($A == 'logged') {
                        /*---------------------------check admin and user---------------------------------*/
                        $sql2 = "SELECT `Post` AS A FROM `user` WHERE `Email`='" . $_SESSION["txtemail"] . "'";
                        $result2 = mysqli_query($con, $sql2);

                        $out = mysqli_fetch_assoc($result2);
                        $post = $out['A'];

                        /*---------------------------check admin and user---------------------------------*/

                        if ($post == 'admin') {
                            echo "
                
                        <div class='out'>
                        <h1>" . $row["Title"] . "</h1>
                        <div class='blog'>
        
                            <div class='pic'><img src='" . $row["Image"] . "' alt=''></div>
                            
                            <div class='article'>
                                <p>" . $row["Article"] . " </p>
        
                            </div>
        
                        </div>
                        <div class='date'>
                            <p>" . $row["Date"] . "</p>
                            
                            <form action='../PHP/deleteblog.php?id=" . $row["blogID"] . "' method='POST'>
                                         <button class='like' ><i class='fa fa-trash' aria-hidden='true'></i></button>
                                         
                                 </form>
                        
                        
                        </div>
                        
                        
                    </div>
        
        
        
                        ";
                        } else {

                            echo "
                
                <div class='out'>
                <h1>" . $row["Title"] . "</h1>
                <div class='blog'>

                    <div class='pic'><img src='" . $row["Image"] . "' alt=''></div>
                    
                    <div class='article'>
                        <p>" . $row["Article"] . " </p>

                    </div>

                </div>
                <div class='date'>
                    <p>" . $row["Date"] . "</p>
                    <button class='count'>" . $tot . "</button>
                    <form action='../PHP/addLikeBlog.php?id=" . $row["blogID"] . "' method='POST'>
                                 <button class='like' ><i class='fa fa-heart' ></i></button>
                                 
                         </form>
                <a href='../User/blogfull.php?id=" . $row["blogID"] . " '><button><i class='fa-solid fa-comment'></i></button></a>
                
                </div>
                
                
            </div>



                ";
                        }
                    }
                }
            }
            ?>






        </div>
    </div>
    <!-------------------------------------------------------------SCROLL TO TOP---------------------------------------------------------------------->
    <div class="scrollTop" onClick="scrollToTop();"></div>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var scroll = document.querySelector('.scrollTop');
            scroll.classList.toggle("active", window.scrollY > 500)
        })

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    </script>
    <!-------------------------------------------------------------SCROLL TO TOP END---------------------------------------------------------------------->


<?php include_once 'footer.php'; ?>

</body>

</html>