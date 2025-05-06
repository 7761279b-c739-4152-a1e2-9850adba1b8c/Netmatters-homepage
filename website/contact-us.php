<?php

$form_errors = [];
$form_success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'php/form-submit.php';
}

$scripts = ['ooh', 'form'];
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
        <div class="container">
            <div class="contact">
                <div class="hours">
                    <p><strong>Email us on:</strong></p>
                    <p><a href="#" class="email-link">sales@netmatters.com</a></p>
                    <p><strong>Speak to Sales on:</strong></p>
                    <p><a href="#" class="phone-link">01603 515007</a></p>
                    <p><strong>Business hours</strong></p>
                    <p><strong>Monday - Friday 07:00 - 18:00</strong></p>

                    <p id="ooh-button"><strong>Out of Hours IT Support</strong> <span class="icon-down"></span></p>
                    <div id="out-of-hours">
                        <div>
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p><strong>Monday - Friday 18:00 - 22:00</strong> <strong>Saturday 08:00 - 16:00</strong><br><strong>Sunday 10:00 - 18:00</strong></p>
                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                        </div>
                    </div>
                </div>

                <form id="contact-form" method="POST" action="#contact-form" novalidate>
                    <?php foreach($form_errors as $error): ?>
                        <div class="form-error">
                            <p><?= $error ?></p>
                            <button type="button" class="close">&times;</button>
                        </div>
                    <?php endforeach; ?>
                    <?php if($form_success):?>
                        <div class="form-success">
                            <p>Your message has been sent!</p>
                            <button type="button" class="close">&times;</button>
                        </div>
                    <?php endif; ?>
                    <div class="form-grid">
                        <div class="input-wrapper">
                            <label for="name" class="required">Your Name</label>
                            <input type="text" id="name" name="name" value="<?= $form_success ? '' : ($_POST['name'] ?? '') ?>" />
                        </div>
                        <div class="input-wrapper">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" name="company" value="<?= $form_success ? '' : ($_POST['company'] ?? '') ?>" />
                        </div>
                        <div class="input-wrapper">
                            <label for="email" class="required">Your Email</label>
                            <input inputmode="email" type="text" id="email" name="email" value="<?= $form_success ? '' : ($_POST['email'] ?? '') ?>" />
                        </div>
                        <div class="input-wrapper">
                            <label for="phone" class="required">Your Telephone Number</label>
                            <input type="tel" id="phone" name="phone" value="<?= $form_success ? '' : ($_POST['phone'] ?? '') ?>" />
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="message" class="required">Message</label>
                        <textarea id="message" name="message"><?= $form_success ? '' : ($_POST['message'] ?? '') ?></textarea>
                    </div>
                    <div id="checkbox-wrapper">
                        <input name="marketing" type="checkbox" id="real-checkbox" <?= $form_success ? '' : (isset($_POST['marketing']) ?  'checked="checked"' : '') ?>></input>
                        <div id="fake-checkbox"></div>
                        <p>Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</p>
                    </div>
                    <p class="privacy-policy">This site is protected by reCAPTCHA and the Google <a href target="_blank">Privacy Policy</a> and <a href target="_blank">Terms of Service</a> apply.</p>
                    <div class="button-wrapper">
                        <button class="form-btn" id="send">Send Enquiry</button>
                        <p class="required-notice"><span class="required"></span> Fields Required</p>
                    </div>
                </form>
            </div>
        </div>

        <?php require 'php/footer.php'; ?>
    </div>
</div>
<?php require 'php/menu.php'; ?>
<?php require 'php/cookies.php'; ?>
<?php require 'php/foot.php'; ?>