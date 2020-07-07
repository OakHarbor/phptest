<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="core-styles.css" media="all" type="text/css">
    <link rel="stylesheet" href="blog-css/main.css" media="all" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <section id="header">
        <h1 class="container">Blog</h1>
    </section>

    <main>

        <section id="blog">

            <!-- ============================================ -->
            <!--                 BLOG CONTENT                 -->
            <!-- ============================================ -->
            
            <article class="blog">
                <div class="blog__post container">
                    <div class="blog__post--header">
                        <img src="images/landscape.jpg" alt="">
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <div class="blog__post--info">
                            <img src="images/landscape-square.jpg" alt="">
                            <div class="blog__post--profile">
                                <h3>John Doe</h3>
                                <a href="august.html">August 1, 2020</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum tempore impedit consectetur, 
                    adipisci magni voluptatem libero animi ipsam nulla explicabo, id minima maiores exercitationem! 
                    Quae at voluptas eum impedit perferendis...
                    </p>
                    <button class="button-solid" onclick="location.href='#'" type="button">
                        Read More
                    </button>
                </div>
            </article>

            <!-- ============================================ -->
            <!--                 BLOG CONTENT                 -->
            <!-- ============================================ -->
            
            <article class="blog">
                <div class="blog__post container">
                    <div class="blog__post--header">
                        <img src="images/landscape.jpg" alt="">
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <div class="blog__post--info">
                            <img src="images/landscape-square.jpg" alt="">
                            <div class="blog__post--profile">
                                <h3>John Doe</h3>
                                <a href="august.html">August 1, 2020</a><br>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true" class="line"></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum tempore impedit consectetur,
                        adipisci magni voluptatem libero animi ipsam nulla explicabo, id minima maiores exercitationem!
                        Quae at voluptas eum impedit perferendis...
                    </p>
                    <button class="button-solid" onclick="location.href='#'" type="button">
                        Read More
                    </button>
                </div>
            </article>

            <!-- ============================================ -->
            <!--                 BLOG CONTENT                 -->
            <!-- ============================================ -->
            
            <article class="blog">
                <div class="blog__post container">
                    <div class="blog__post--header">
                        <img src="images/landscape.jpg" alt="">
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <div class="blog__post--info">
                            <img src="images/landscape-square.jpg" alt="">
                            <div class="blog__post--profile">
                                <h3>John Doe</h3>
                                <a href="august.html">August 1, 2020</a><br>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true" class="line"></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum tempore impedit consectetur,
                        adipisci magni voluptatem libero animi ipsam nulla explicabo, id minima maiores exercitationem!
                        Quae at voluptas eum impedit perferendis...
                    </p>
                    <button class="button-solid" onclick="location.href='#'" type="button">
                        Read More
                    </button>
                </div>
            </article>
        </section>

        <!-- ============================================ -->
        <!--                   SIDE BAR                   -->
        <!-- ============================================ -->

        <?php
            include('includes/sidebar.php')
        ?>
    </main>

</body>
</html>