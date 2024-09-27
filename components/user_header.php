<!-- header section starts  -->

<header class="header">

    <nav class="navbar nav-1">
        <section class="flex">
            <a href="home.php" class="logo"><i class="fas fa-house"></i>Real Estates</a>

            <ul>
                <li><a href="post_property.php">post property<i class="fas fa-paper-plane"></i></a></li>
            </ul>
        </section>
    </nav>

    <nav class="navbar nav-2">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="menu">
                <ul>
                    <li><a href="#">My Listings<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="post_property.php">Post Property</a></li>
                            <li><a href="my_listings.php">My Listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Options<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="search.php">Filter Search</a></li>
                            <li><a href="listings.php">All Listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="about.php">About US</a></li>
                            <li><a href="contact.php">Contact US</a></li>
                            <li><a href="contact.php#faq">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <ul>
                <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
                <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
                    <ul>
                        <?php if($user_id != ''){ ?>
                        <li><a href="update.php">Update Profile</a></li>
                        <li><a href="components/user_logout.php"
                                onclick="return confirm('Logout from this website?');">Logout</a></li>
                        <?php } else { ?>
                        <li><a href="login.php">Login Now</a></li>
                        <li><a href="register.php">Register New</a></li>
                        <?php } ?>


                    </ul>
                </li>
                <li>
                    <button id="dark-mode-toggle" class="dark-mode-toggle">
                        <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                            <path fill="currentColor"
                                d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z"
                                transform="translate(-8 -8)" />
                        </svg>
                    </button>
                </li>
            </ul>
        </section>
    </nav>

</header>

<!-- header section ends -->