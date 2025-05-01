<?php
$scripts = [];
$title = "Contact Us | Netmatters";

?>
<?php require 'php/head.php' ?>

<div id="not-side-menu">
    <div id="side-menu-inert">
        <?php require 'php/header.php'; ?>
        <div class="path">
            <div class="container">
                <p><a href=".">Home</a><span class="path-slash"></span><span class="current">Our Offices</span></p>
            </div>
        </div>
        <div class="offices-heading">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>
        <div class="container">
            <div class="offices-grid">
                <div class="offices-item">
                    <a href="#">
                        <img src="img/offices/cambridge.jpg" alt />
                    </a>
                    <div class="office-description">
                        <h2><a href="#">Cambridge Office</a></h2>
                        <p>Unit 1.31,<br>St John's Innovation Centre,<br>Cowley Road, Milton,<br>Cambridge,<br>CB4 0WS</p>
                        <p class="tel"><a href="#">01223 37 57 72</a></p>
                        <a class="offices-btn" href="#">View more</a>
                    </div>
                </div>
                <div class="offices-item">
                    <a href="#">
                        <img src="img/offices/wymondham.jpg" alt />
                    </a>
                    <div class="office-description">
                        <h2><a href="#">Wymondham office</a></h2>
                        <p>Unit 15,<br>Penfold Drive,<br>Gateway 11 Business Park,<br>Wymondham, Norfolk,<br>NR18 0WZ</p>
                        <p class="tel"><a href="#">01603 70 40 20</a></p>
                        <a class="offices-btn" href="#">View more</a>
                    </div>
                </div>
                <div class="offices-item">
                    <a href="#">
                        <img src="img/offices/yarmouth-2.jpg" alt />
                    </a>
                    <div class="office-description">
                        <h2><a href="#">Great Yarmouth Office</a></h2>
                        <p>Suite F23,<br>Beacon Innovation Centre,<br>Beacon Park, Gorleston,<br>Great Yarmouth, Norfolk,<br>NR31 7RA</p>
                        <p class="tel"><a href="#">01493 60 32 04</a></p>
                        <a class="offices-btn" href="#">View more</a>
                    </div>
                </div>
            </div>
        </div>

        <?php require 'php/footer.php'; ?>
    </div>
</div>
<?php require 'php/menu.php'; ?>
<?php require 'php/cookies.php'; ?>
<?php require 'php/foot.php'; ?>