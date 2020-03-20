<header>
    <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <a href="index.html" class="navbar-brand"><img src="/media/images/Logo.jpeg" width="175px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav mr-auto">
                    <?php
                    $urls = array(
                        'Home' => '/index.html',
                        'Our Story' => '/root/about.php',
                        'Book Online' => '/root/gallery.html',
                        'Shop' => '/root/shop.php',
                        'Login' => '/root/login.php',
                    );
            
                    foreach ($urls as $name => $url) {
                        echo '<li class="nav-item"> <a' . (($currentPage === $name) ? ' class="nav-link text-uppercase active" ' : ' class="nav-link text-uppercase" ') . 'href="' . $url . '" >' . $name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</header>