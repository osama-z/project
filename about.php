<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <!-- about section starts  -->

    <section class="about">

        <div class="row">
            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>"At Real Estate Company , we stand out in the real estate market for several key reasons. With
                    3 years of industry experience, our seasoned team brings a wealth of knowledge and expertise to
                    guide you. We prioritize your unique needs, offering personalized service that caters to your
                    specific requirements. Our diverse property portfolio ensures you have access to a wide array of
                    residential and commercial options. Most importantly, our commitment to excellence shines through in
                    every interaction. We operate with professionalism, transparency, and a client-centric approach,
                    making your real estate journey a smooth and successful one."</p>
                <a href="contact.php" class="inline-btn">contact us</a>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- steps section starts  -->

    <section class="steps">

        <h1 class="heading">3 simple steps</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/step-1.png" alt="">
                <h3>search property</h3>
            </div>

            <div class="box">
                <img src="images/step-2.png" alt="">
                <h3>contact agents</h3>
            </div>

            <div class="box">
                <img src="images/step-3.png" alt="">
                <h3>enjoy property</h3>
            </div>

        </div>

        <br />
        <br />
        <br />

    </section>

    <!-- steps section ends -->

    <!-- review section starts  -->

    <section class="reviews">

        <h1 class="heading">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div>
                        <h3>John Smith</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Working with Real Estate Company has been a game-changer for me. Their expertise and
                    dedication to finding the perfect property exceeded my expectations. I can't thank them enough!</p>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div>
                        <h3>Jennifer Davis</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>I had a fantastic experience with Real Estate Company. They listened to my needs and helped me
                    find my dream home quickly and efficiently. I highly recommend their services."</p>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div>
                        <h3>Robert Brown</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>As a first-time homebuyer, I was nervous about the process. Real Estate Company made it smooth
                    and stress-free. They guided me every step of the way, and I couldn't be happier with the result.
                </p>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div>
                        <h3>Mary Johnson</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Real Estate Company is the best in the business. Their market insights and negotiation skills
                    are unmatched. They helped me secure a fantastic deal on my investment property.</p>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-5.png" alt="">
                    <div>
                        <h3>William Johnson</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Exceptional service! Real Estate Company goes above and beyond for their clients. I appreciate
                    their dedication to making the buying process as easy as possible.</p>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-6.png" alt="">
                    <div>
                        <h3>Susan Wilson</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>I'm so grateful to Real Estate Company for their professionalism and attention to detail. They
                    found me the perfect rental property, and I couldn't be happier. Thank you!</p>
            </div>

        </div>


        <br />
        <br />

    </section>

    <!-- review section ends -->


    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>