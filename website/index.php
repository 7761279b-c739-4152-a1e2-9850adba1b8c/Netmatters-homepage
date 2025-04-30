<?php
$scripts = [];

require 'php/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 minimum-scale=1" />
        <meta name="ROBOTS" content="NOINDEX,NOFOLLOW" />
        <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>

    <body>
        <button type="button" id="manage-consent">Manage Consent</button>
        <div id="not-side-menu">
            <div id="side-menu-inert">
                <?php require 'php/header.php'; ?>
                <div class="banner">
                    <div id="banner-list">
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>The East Of England's Leading Technology Company</h1>
                                    <p>Performance-driven digital and technology services<br> with complete transparency.</p>
                                    <a class="btn purple" href="#">Why choose us? <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>Bespoke Software</h1>
                                    <p>Delivering expert bespoke software<br> solutions across a range of industries.</p>
                                    <a class="btn yellow" href="#">Find out more <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>IT Support</h1>
                                    <p>Fast and cost-effective IT support<br> services for your business.</p>
                                    <a class="btn blue" href="#">Find out more <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>Digital Marketing</h1>
                                    <p>Generating your new business through<br> results-driven marketing activities.</p>
                                    <a class="btn green" href="#">Find out more <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>Telecoms Services</h1>
                                    <p>A new approach to connectivity, see<br> how we can help your business.</p>
                                    <a class="btn red" href="#">Find out more <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>Web Design</h1>
                                    <p>For businesses looking to make a strong<br> and effective first impression.</p>
                                    <a class="btn purple" href="#">Find out more <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-item">
                            <div class="container">
                                <div class="banner-overlay">
                                    <h1>Cyber Security</h1>
                                    <p>Keeping businesses and their customers<br> sensitive information protected</p>
                                    <a class="btn pink" href="#">Find out more <span class="icon-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-selector">
                        <div class="banner-circle selected"></div><div class="banner-circle"></div><div class="banner-circle"></div><div class="banner-circle"></div><div class="banner-circle"></div><div class="banner-circle"></div><div class="banner-circle"></div>
                        <!-- <p>&circledcirc;&nbsp;&nbsp;&cir;&nbsp;&nbsp;&cir;&nbsp;&nbsp;&cir;&nbsp;&nbsp;&cir;&nbsp;&nbsp;&cir;&nbsp;&nbsp;&cir;</p> -->
                    </div>
                </div>
                <div class="services">
                    <div class="container">
                        <h2 class="services-view">Our Services</h2>
                        <h1 class="services-view top"><a href="#">View Our Work <span class="icon-right"></span></a></h1>
                        <div class="clearfix"></div>
                    
                        <div class="service-grid">
                            <a class="service bespoke grey">
                                <div class="icon"></div>
                                <h2>Bespoke Software</h2>
                                <p>Bespoke software solutions for all your business needs including integrations and reporting.</p>
                                <div class="service-btn">Read more</div>
                            </a>
                            <a class="service IT blue">
                                <div class="icon"></div>
                                <h2>IT Support</h2>
                                <p>Fully managed IT support and consultancy packages tailored to meet your exact business needs.</p>
                                <div class="service-btn">Read more</div>
                            </a>
                            <a class="service marketing green">
                                <div class="icon"></div>
                                <h2>Digital Marketing</h2>
                                <p>Driven brand awareness & ROI through creative digital marketing campaigns.</p>
                                <br>
                                <div class="service-btn">Read more</div>
                            </a>
                            <a class="service telecoms red">
                                <div class="icon"></div>
                                <h2>Telecoms Services</h2>
                                <p>Business telephony solutions including mobile & connectivity solutions.</p>
                                <div class="service-btn">Read more</div>
                            </a>
                            <a class="service web purple">
                                <div class="icon"></div>
                                <h2>Web Design</h2>
                                <p>User-centric design for businesses looking to make a lasting impression.</p>
                                <div class="service-btn">Read more</div>
                            </a>
                            <a class="service security pink">
                                <div class="icon"></div>
                                <h2>Cyber Security</h2>
                                <p>Prevention, testing, consultancy &amp; breach management services</p>
                                <div class="service-btn">Read more</div>
                            </a>
                            <a class="service training orange">
                                <div class="icon"></div>
                                <h2>Developer Training</h2>
                                <p>Web design & software training courses designed to secure a job in tech.</p>
                                <div class="service-btn">Read more</div>
                            </a>
                        </div>
                        <h3 class="services-view bottom"><a href="#">View Our Work <span class="icon-right"></span></a></h3>
                    </div>
                </div>
                <div id="partners">
                    <img src="img/partners/norfolk-carbon-charter.webp" alt="Norfolk Carbon Charter" class="partner-img" />
                    <img src="img/partners/PPC_logo.webp" alt="PPC logo" class="partner-img" />
                    <img src="img/partners/princess-royal-training.webp" alt="Princess Royal Training" class="partner-img" />
                    <img src="img/partners/future-50.webp" alt="Future 50" class="partner-img" />
                    <img src="img/partners/qms.webp" alt="QMS" class="partner-img" />
                    <img src="img/partners/iso-27001.webp" alt="ISO 27001" class="partner-img" />
                    <img src="img/partners/skills-of-tomorrow.webp" alt="Skills Of tomorrow" class="partner-img" />
                    <img src="img/partners/cyber-essentials-colour.webp" alt="Cyber Essentials" class="partner-img" />
                    <img src="img/partners/google-partner.webp" alt="Google Partners" class="partner-img" />
                    <img src="img/partners/GBC-colour.webp" alt="Good Business Charter" class="partner-img" />
                    <img src="img/partners/norfolk_prohelp.webp" alt="Norfolk Prohelp logo" class="partner-img" />
                    <img src="img/partners/investing-in-future-growth.jpg" alt="Investing In Future Growth" class="partner-img" />
                </div>
                <div class="about">
                    <div class="container">
                        <div class="welcome">
                            <h1>Welcome to Netmatters</h1>
                            <p><strong>Netmatters is a leading <a href=#>Bespoke Software</a>, <a href=#>IT Support</a>, and <a href=#>Digital Marketing</a> company based in the East of England with offices in <a href=#>Cambridge</a>, <a href=#>Wymondham</a>, and <a href=#>Great Yarmouth</a>.</strong></p>
                            <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                            <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                            <div class="welcome-btns">
                                <a class="btn" href="#">Why choose us? <span class="icon-right"></span></a>
                                <a class="btn" href="#">Our culture <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <div class="clients">
                            <h1>What Our Clients Think</h1>
                            <div class="star">
                                <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            </div>
                            <p><em>Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</em></p>
                            <p class="client-quote">Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a></p>
                            <div class="clients-btns">
                                <a class="btn google-reviews" href="#">Google reviews <span class="icon-right"></span></a>
                                <a class="btn trustpilot-reviews" href="#">Trustpilot reviews <span class="icon-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-news">
                    <div class="container">
                        <h2 class="news-view">Latest News</h2>
                        <h3 class="news-view top"><a href="#">View All <span class="icon-right"></span></a></h3>
                        <div class="clearfix"></div>

                        <?php require 'php/news.php'; ?>

                        <h3 class="news-view bottom"><a href="#">View All <span class="icon-right"></span></a></h3>
                    </div>
                </div>
                <div id="cases">
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Ashcroft Partnership LLP</h3>
                                <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                                <a href="#" class="btn purple">View Our Case Study <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <img src="img/cases/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="Ashcroft Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>One Traveller</h3>
                                <p><strong>One Traveller</strong>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                                <a href="#" class="btn purple">View Our Case Study <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <img src="img/cases/onetravellerlogo_white_figuire.webp" alt="One Traveller Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Searles Leisure Resort</h3>
                                <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                                <a href="#" class="btn green">View Our Case Study <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <img src="img/cases/searles_logo.webp" alt="Searles Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Busseys</h3>
                                <p>One of the UK's leading Ford dealerships.</p>
                            </div>
                        </div>
                        <img src="img/cases/busseys_logo.webp" alt="Busseys Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Crane Garden Buildings</h3>
                                <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                            </div>
                        </div>
                        <img src="img/cases/crane_logo.webp" alt="Crane Garden Buildings Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Black Swan Care Group</h3>
                                <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                                <a href="#" class="btn yellow">View Our Case Study <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <img src="img/cases/black_swan_logo.webp" alt="Black Swan Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Xupes</h3>
                                <p>Xupes.</p>
                            </div>
                        </div>
                        <img src="img/cases/xupes_logo.webp" alt="Xupes Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>BEAT</h3>
                                <p>The UK's eating disorder charity founded in 1989.</p>
                            </div>
                        </div>
                        <img src="img/cases/beat_logo.webp" alt="BEAT Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Survey Solutions</h3>
                                <p>Survey Solutions.</p>
                            </div>
                        </div>
                        <img src="img/cases/survey_solutions_logo.webp" alt="Survey Solutions Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Girl Guiding Anglia</h3>
                                <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
                                <a href="#" class="btn blue">View Our Case Study <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <img src="img/cases/girl_guides_anglia.webp" alt="Girl Guiding Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Sweetzy</h3>
                                <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                                <a href="#" class="btn green">View Our Case Study <span class="icon-right"></span></a>
                            </div>
                        </div>
                        <img src="img/cases/sweetzy_logo.webp" alt="Sweetzy Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>Howes Percival</h3>
                                <p>Howes Percival.</p>
                            </div>
                        </div>
                        <img src="img/cases/howespercivallogo.webp" alt="Howes Percival Logo" class="cases-img" />
                    </div>
                    <div class="case-item">
                        <div class="case-item-hover">
                            <div class="case-item-description">
                                <h3>GDST</h3>
                                <p>The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.
                                <a href="#" class="btn green">View Our Case Study <span class="icon-right"></span></a>
                                </p>
                            </div>
                        </div>
                        <img src="img/cases/girls_day_school_trust_logob.webp" alt="GDST Logo" class="cases-img" />
                    </div>
                </div>
                <?php require 'php/footer.php'; ?>
            </div>
        </div>
        <?php require 'php/menu.php'; ?>
        <?php require 'php/cookies.php'; ?>
        <script src="js/banner.js"></script>
        <script src="js/partners.js"></script>
        <?php foreach($scripts as $script): ?>
            <script src="<?= $script ?>"></script>
        <?php endforeach; ?>
    </body>
</html>