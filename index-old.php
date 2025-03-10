<?php
$robotMeta = "index, follow";
$pageTitle = 'Professional Wiki Pedia Page Creation Services | Hire Wiki Pedia Page Creators';
$pageDescription = 'Unlock the potential of your online presence with our professional Wiki Pedia page creation services. Hire experienced Wiki Pedia page creators to craft a credible and influential page that enhances your reputation and visibility on the platform.';
$canonicalURL = "https://www.wikicreationinc.com" . $_SERVER['REQUEST_URI'];
include("./includes/header.php");
?>

<main>
    <!-- Service Banner Start Here -->
    <section class="service-banner-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="service-banner-content">
                        <h1>Why Aren’t You Utilizing Our <span>Wikipedia Page Creation Services</span> To Get Noticed?
                        </h1>
                        <p>We can be your greatest savior if you want to increase your popularity by creating a
                            Wikipedia page! Here’s what you achieve by hiring us as your professional Wikipedia page
                            creators;</p>
                        <ul class="service-banner-list">
                            <li><i class="fa-solid fa-arrow-right"></i>
                                <p>Conclusive Reviews by Consumers </p>
                            </li>
                            <li><i class="fa-solid fa-arrow-right"></i>
                                <p>Brand Image</p>
                            </li>
                            <li><i class="fa-solid fa-arrow-right"></i>
                                <p>Credibility</p>
                            </li>
                        </ul>
                        <div class="service-banner-btns">
                            <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get a
                                Free Consultation</button>
                            <button class="chat-btn" onclick="setButtonURL();">Chat With Us Today</button>
                        </div>
                        <div class="banner-brands">
                            <img src="<?= $actual_link ?>images/business-best.jpg" alt="brand" class="img-fluid">
                            <img src="<?= $actual_link ?>images/top-pr-firms.jpg" alt="brand" class="img-fluid">
                            <img src="<?= $actual_link ?>images/top-reputation.jpg" alt="brand" class="img-fluid">
                            <img src="<?= $actual_link ?>images/american-best.jpg" alt="brand" class="img-fluid">
                            <img src="<?= $actual_link ?>images/ibt-voted.jpg" alt="brand" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="service-banner-form">
                        <h3>Start right now by sending us a message.</h3>
                        <form class="form_submission" method="POST">
                            <!-- Custom Fields -->
                            <input type="hidden" name="url"
                                value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                            <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                            <input type="hidden" name="subject" value="Banner Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                            <!--PPC parameters -->
                            <input type="hidden" name="keyword" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
                            <input type="hidden" name="matchtype"
                                value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
                            <input type="hidden" name="msclkid" value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">
                            <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
                            <!--End PPC paramters-->
                            <!-- IP Location  -->
                            <input type="hidden" class="ipaddress" name="ipaddress" value="<?=$user_ip?>">
                            <!-- Normal data fields  -->
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" minlength="10" maxlength="12" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="submit-btn">Submit Now</button>
                                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                <div class="loader" style="display: none">
                                    <img alt="loader" src="<?= $actual_link ?>loader.gif">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Banner End Here -->


    <!-- About Us Section Fold Start Here -->
    <section class="about-main-wrap py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-content-side">
                        <h2>The Ultimate Motto Of Our Professional WIkipedia Writers!</h2>
                        <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Since wikipedia has a
                            separate set of rules and requirements, our foremost priority is to keep everything aligned.
                            Wiki creation is not new in this game; therefore, you can trust us with your enterprise or
                            customized pages. We have an incredible team of writers and editors who don’t leave anything
                            unnoticed.</p>
                        <p>With a diverse set of skills, our writers make sure they get everything right. We try to
                            include passionate individuals in our team so you won’t have to wander unnecessarily.
                            English is our primary language; however, we also provide translating services in various
                            languages. Other than that, our ultimate goal is to create content that ticks each
                            requirement box.</p>
                        <div class="about-content-slider mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item">
                                        <div class="about-content-box">
                                            <h3>Our Consultants</h3>
                                            <p>We have the most qualified and experienced wiki page creators aboard,
                                                andwe can assure you that your page, created by our skilled team, will
                                                reach great heights.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <div class="about-content-box">
                                            <h3>Our Motto!</h3>
                                            <p>We ensure Wikipedia page correctness and compliance. Only essential
                                                updates or guidelines violations cause page deletion. We'll keep your
                                                page safe.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img-side" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <img src="<?= $actual_link ?>images/about-image3.png" alt="img" class="img-fluid p-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section Fold End Here -->



    <!-- Section Badgses Fold Start Here -->
    <section class="sec-badges">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="heads" data-aos="fade-right" data-aos-duration="1000">
                        <h2>Quality Of The Work Of Our Wiki Writers Speaks Volume!</h2>
                        <p>Our hired Wikipedia contributors have devoted much time and effort to creating Wikipedia
                            entries for your company over the years. Our staff obtained the following Wikipedia badges:
                            Triple Crown, Four Award, Wiki Cup, and Wiki Medal. Hire us now to increase your internet
                            visibility and receive a good return on your investment.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <ul class="badges-ul">
                        <li>
                            <div class="badged-main" data-aos="zoom-in-up" data-aos-duration="1000">
                                <a href="javascript:;" class="anchor">
                                    <img src="<?= $actual_link ?>images/bd1.png" class="img-fluid thumb" alt="image">
                                    <span>Triple Crown</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="badged-main" data-aos="zoom-in-up" data-aos-duration="1000">
                                <a href="javascript:;" class="anchor">
                                    <img src="<?= $actual_link ?>images/bd2.png" class="img-fluid thumb" alt="image">
                                    <span>four award</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="badged-main" data-aos="zoom-in-up" data-aos-duration="1000">
                                <a href="javascript:;" class="anchor">
                                    <img src="<?= $actual_link ?>images/bd3.png" class="img-fluid thumb" alt="image">
                                    <span>wiki cup</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="badged-main" data-aos="zoom-in-up" data-aos-duration="1000">
                                <a href="javascript:;" class="anchor">
                                    <img src="<?= $actual_link ?>images/bd4.png" class="img-fluid thumb" alt="image">
                                    <span>wiki medal</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Badges Fold End Here -->



    <div class="image-inner-bro">
        <section class="planning-cta-wrap text-center planning-cta2">
            <div class="container">
                <h2>Improve Your Brand's Authority with Our Wikipedia Writing Services!</h2>
                <p>Let Us Make You Talk Of The Town</p>
                <div class="sec-btns">
                    <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Start
                        Today</button>
                    <button class="chat-btn" onclick="setButtonURL();">Let’s Chat</button>
                </div>
            </div>
        </section>
    </div>


    <!-- Finest Creation Fold Start Here -->
    <section class="finest-creat-wrap">
        <div class="container">
            <div class="finest-head" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <h2>We Follow The Followings For a Serenest Wikipedia Page Formation!</h2>
                <p>We’d Rather Be Doers Than Talkers!!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="finest-content-box" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?= $actual_link ?>images/finsetbox-icon1.png" alt="icon" class="img-fluid">
                        <h3>Creativity</h3>
                        <p>A skilled Wikipedia writer will make sure to compose your page so that it precisely defines
                            the essence of your company.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="finest-content-box" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?= $actual_link ?>images/finsetbox-icon2.png" alt="icon" class="img-fluid">
                        <h3>Analysis</h3>
                        <p>Before establishing your Wikipedia article, our page developer will extensively research and
                            consult with you to get the necessary data.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="finest-content-box" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?= $actual_link ?>images/finsetbox-icon3.png" alt="icon" class="img-fluid">
                        <h3>Reputation Building</h3>
                        <p>Our Wikipedia page writing service acknowledges your desire to establish a solid online
                            reputation. As a result, we produce articles that are tailored to your company's demands.
                        </p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="finest-content-box" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?= $actual_link ?>images/finsetbox-icon4.png" alt="icon" class="img-fluid">
                        <h3>Editing Your Page</h3>
                        <p>Our professionals will format and edit the content when the articles are complete to ensure
                            it is error-free.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12col-12">
                    <div class="finest-content-box" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?= $actual_link ?>images/finsetbox-icon5.png" alt="icon" class="img-fluid">
                        <h3>Page Submission</h3>
                        <p>We'll need your approval before submitting your Wikipedia page. Each time, our writers
                            deliver content of the highest caliber.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Finest Creation Fold End Here -->




    <!-- Our Service Fold Start Here -->
    <section class="service-sec-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service-sec-image">
                        <img src="<?= $actual_link ?>images/scroll-image.png" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service-content-side">
                        <h2>Service We Provide</h2>
                        <div class="service-content-scroll">
                            <div class="service-content-box">
                                <img src="<?= $actual_link ?>images/service-creation.png" alt="img" class="img-fluid">
                                <div class="service-content-info">
                                    <h3>Wikipedia Page Creation</h3>
                                    <p>We provide writing assistance for research and wikipedia articles keeping all the
                                        encyclopedia policies in mind.</p>
                                </div>
                            </div>
                            <div class="service-content-box marg-left">
                                <img src="<?= $actual_link ?>images/service-editing.png" alt="img" class="img-fluid">
                                <div class="service-content-info">
                                    <h3>Wikipedia Page Editing</h3>
                                    <p>Our team ensures to edit your wiki page frequently to update every piece of
                                        information.</p>
                                </div>
                            </div>
                            <div class="service-content-box">
                                <img src="<?= $actual_link ?>images/service-notability.png" alt="img" class="img-fluid">
                                <div class="service-content-info">
                                    <h3>Nobility Test</h3>
                                    <p>Our team provides a thorough notability evaluation for your Wikipedia page. We
                                        will examine the media coverage of your business and provide you with expert
                                        advice on obtaining credible Wikipedia page content.</p>
                                </div>
                            </div>
                            <div class="service-content-box">
                                <img src="<?= $actual_link ?>images/service-translation.png" alt="img" class="img-fluid">
                                <div class="service-content-info">
                                    <h3>Translation</h3>
                                    <p>Apart from just Wikipedia page creations, we also provide translation services
                                        across the globe in multiple languages.</p>
                                </div>
                            </div>
                            <div class="service-content-box marg-left">
                                <img src="<?= $actual_link ?>images/service-monitoring.png" alt="img" class="img-fluid">
                                <div class="service-content-info">
                                    <h3>Consultation</h3>
                                    <p>Our professional consultants ensure that your queries are noticed and heard;
                                        hence you can contact our consultants anytime.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Service Fold End Here -->



    <section class="about-main-wrap py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-content-side">
                        <h2>Allow Us to Create Your Wikipedia Because…</h2>
                        <!--<h5>Ensure that your subject is well-referenced and notable.</h5>-->
                        <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Are you an established
                            business looking to acquire exposure online? Contact us to set up a consultation with
                            knowledgeable Wikipedia article authors. We can assist you in developing a positive internet
                            reputation by highlighting your business's accomplishments, background, and activities.</p>
                        <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">At Wiki Creation INC,
                            our editors help you with a range of Wikipedia page creation services, including erasing
                            previous correction alerts, improving clarity and context, neutrality promotion, adding
                            missing content, erasing inaccuracies and misleading information, optimizing infoboxes,
                            adding images, enhancing WikiData, and enhancing search engine rankings. Our team can assist
                            you whether your page is attacked or needs a professional touch.</p>
                        <div class="mt-3">
                            <button class="my-button-two" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's
                                Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img-side" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <img src="<?= $actual_link ?>images/wikitest.jpg" alt="img" class="img-fluid p-2">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Service Detail Fold Start Here -->
    <section class="services-details-bg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 responsive-ordertwo">
                    <!-- <div class="services-details-content" id="Elite-Wiki-Writers">
                        <h2>Why Should You Give Us A Chance <br> To Build Your WIkipedia Presence?</h2>
                        <p>If you are an established business looking to acquire exposure online, you can contact us to
                            set up a consultation with knowledgeable Wikipedia article authors. We can assist you in
                            developing a positive internet reputation by highlighting your business's accomplishments,
                            background, and activities.</p>
                        <br>
                        <p>We provide you with a range of Wikipedia page creation services, including erasing previous
                            correction alerts, improving clarity and context, neutrality promotion, adding missing
                            content, erasing inaccuracies and misleading information, optimizing infoboxes, adding
                            images, enhancing WikiData, and enhancing search engine rankings. Our team can assist you
                            whether your page is attacked or needs a professional touch.</p>
                    </div> 
                    <hr>-->
                    <div class="services-details-content" id="Wikipedia-page-creation-services">
                        <h2>All-inclusive Range of Wikipedia Writing Services</h2>
                        <h3><b>Creation of an enterprise Wikipedia page</b></h3>
                        <p>Our staff provides a free evaluation to determine whether your business qualifies for a
                            Wikipedia article. If you are eligible, we will write the page with trustworthy sources and
                            citations and send it to you for review before publishing it on Wikipedia.</p>
                        <p>Our experience guarantees publication. Our highly esteemed Wikipedia editors will review your
                            page to ensure it satisfies the strict requirements for approval.</p>
                        <h3><b>Making a customized Wikipedia page</b></h3>
                        <p>To assist you in clearly expressing your ideas and showcasing your knowledge on the platform,
                            Wiki Creation INC offers bespoke Wikipedia page creation services. Our team of
                            knowledgeable writers and editors will collaborate closely with you to produce a Wikipedia
                            page that adheres to the standards set out by that website.</p>
                        <h3><b>Monitoring of Wikipedia pages</b></h3>
                        <p>Keeping your page current and compliant with the platform's rules can take time and effort.
                            Our professionals devote their time to ensuring that the content on your Wikipedia page is
                            accurate.</p>
                        <p>We keep an eye on the pages of our clients to spot any updates, modifications, or problems as
                            soon as they appear and contact them immediately. In addition, we cooperate with them to
                            find a prompt solution.</p>
                        <h3><b>Making Deleted Wikipedia Pages Recoverable</b></h3>
                        <p>Wikipedia articles frequently get deleted due to the page creator's inexperience or a lack of
                            legitimacy and media attention for the page subject. Only seasoned and well-respected
                            Wikipedia editors are employed by Wiki Creation INC to solve these problems, and real media
                            coverage is produced for the topic.</p>
                        <h3><b>Service for translating Wikipedia pages</b></h3>
                        <p>Creating a Wikipedia page in different languages takes a lot of time and effort, especially
                            for people or organizations that need more means or language proficiency to translate their
                            sites. Wiki Creation INC provides a professional Wikipedia page translation service to
                            assist clients in reaching a worldwide audience. Native speakers of many languages make up
                            our team of specialists. We handle every step of the translation process, from gathering
                            reliable references to ensuring the page complies with Wikipedia's standards.</p>
                    </div>


                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 responsive-orderone">
                    <div class="services-details-card">
                        <img src="<?= $actual_link ?>images/w-parallex.png" id="removeimg" alt="image">
                        <!-- <ul>
                                <li><a href="#Elite-Wiki-Writers"> Wiki Creation INC </a></li>
                                <li><a href="#Wikipedia-page-creation-services"> Wikipedia page creation services </a>
                                </li>
                                <li><a href="#Why-Wikipedia-Page-Creation-Agency"> Why Wikipedia Page Creation Agency
                                    </a></li>
                                <li><a href="#Wiki-Page-Publishing-Requirements"> Wiki Page Publishing Requirements </a>
                                </li>
                                <li><a href="#How-to-Create-a-Wikipedia-Page"> How to Create a Wikipedia Page </a></li>
                            </ul> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Detail Fold End Here -->


    <!-- Why Wikipedia Fold Start Here -->
    <section class="why-wikipedia-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="why-wikipedia-content" data-aos="fade-left" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <!-- <span>Here’s Why You Require Wikipedia page writing services</span> -->
                        <h2>Here’s Why You Require Wikipedia page writing services</h2>
                        <p>We pledge to do the highest caliber and integrity. How did these pages created by our
                            professionals reach the top of Google searches? With reliable citations and references.
                            People support you when you don't lead them astray. </p>
                        <p>Our wiki editors ensure that their research enables them to provide information that raises
                            awareness so people can learn about you. Only if people believe you and your sources will
                            achieve this goal; our wiki specialists assist you. When your powerful web presence is
                            established, you are known. We believe this should convince you to engage us to create your
                            Wikipedia article.</p>
                        <div class="why-wikipedia-btns">
                            <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact Us
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

                </div>
            </div>
        </div>
    </section>
    <!-- Why Wikipedia Fold End Here -->



    <section class="services-details-bg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12 responsive-ordertwo">
                    <div class="services-details-content" id="Why-Wikipedia-Page-Creation-Agency">
                        <h2>Perks Of Hiring Wikipedia Experts</h2>
                        <h3><b>We Promise For Your Page’s Approval</b></h3>
                        <p>The main quality that your page needs to be approved by Wikipedia is to have a strong and
                            credible source to back up your research and articles. And since we have promised you final
                            approval, we must gather credible sources. </p>
                        <h3><b>Professional Wikipedia writers</b></h3>
                        <p>Our wiki writers have years of experience crafting a perfect article for you. We are known
                            within the wikipedia community for the work and effort we put into creating a page for you.
                            And that, too, considering the guidelines in mind. </p>
                        <h3><b>Management services</b></h3>
                        <p>Our organization not only creates your Wikipedia page but also offers upkeep assistance. As
                            part of these services, your page will be continuously monitored to ensure it is accurate,
                            current, and complies with Wikipedia's policies. Every essential update will be providedto
                            keep your page in top shape.</p>
                        <h3><b>Press coverage</b></h3>
                        <p>We offer press coverage and a wide range of services to help you advertise your business and
                            adhere to Wikipedia standards. If your brand is unknown, it may be difficult to distinguish.
                            However, with press coverage services, the process becomes more relaxed.</p>
                    </div>

                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12 responsive-ordertwo">
                    <img src="<?= $actual_link ?>images/woman1.png" class="w-100" alt="image">
                </div>
            </div>
        </div>
    </section>

    <!-- Perfect Choose Fold Start Here -->
    <section class="perfect-choose-wrap">
        <div class="container">
            <div class="perfect-choose-head">
                <h2>Wikipedia's requirements for publications</h2>
                <!-- <p>Wiki Creation INC has helped thousands of individuals and businesses promote their services and
                    work online. Our team will manage your reviews and publish them all on a single platform, i.e.,
                    Wikipedia.</p> -->
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="perfect-choose-box" data-aos="zoom-in-up" data-aos-duration="1000">
                        <span>01</span>
                        <h3>Notability</h3>
                        <p>Notability is included in the norms and guidelines Wiki has established. So, for your article
                            to be published, it must mention notability; otherwise, it may not satisfy the condition.
                        </p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="perfect-choose-box" data-aos="zoom-in-up" data-aos-duration="1000">
                        <span>02</span>
                        <h3>Standing sources</h3>
                        <p>Wiki articles must have appropriate sources. therefore, we ensure to verify its sources
                            before publication. or else it would be hard to get approved.
                        </p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="perfect-choose-box" data-aos="zoom-in-up" data-aos-duration="1000">
                        <span>03</span>
                        <h3>Neutrality</h3>
                        <p>It won't be read if your article contains biased statements or self-serving material.
                            Everything must be impartial to avoid focusing on any one particular group of individuals.
                        </p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="perfect-choose-box" data-aos="zoom-in-up" data-aos-duration="1000">
                        <span>04</span>
                        <h3>Conflict-free</h3>
                        <p>We make sure that our designated person is driven and doesn't conflict with your brand, values, or principles. Similar stuff is banned on Wikipedia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Perfect Choose Fold End Here -->


    <style>
        .qasection {
            background-image: url(./images/qabanner.jpg);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            padding: 80px 0px;
            position: relative;
            z-index: 9;
        }

        @media only screen and (min-width: 300px) and (max-width: 768px) {
            .qasection {
                padding: 20px 0px;
            }
        }
    </style>
    <section class="qasection">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12"></div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="container">
                        <h2 class="my-heading">Get Rescued By Wikipedia Page Creator!</h2>
                        <p class="my-paragraph">We ensure that our services are still affordable as one of the most
                            in-demand services in the world. Additionally, we have a group of knowledgeable and
                            experienced editors and writers for Wikipedia pages, and our customer assistance is
                            available around the clock to ensure your needs are met. </p>
                        <br>
                        <p class="my-paragraph">We must maintain the quality of our work because it needs reliable
                            sources to rank among the most comprehensive sources of information in the world. As a
                            result, we exclusively employ motivated and enthusiastic individuals as writers and editors.
                            Although you may take our word for it, we'd advise you to read over our customer reviews as
                            well to make sure.</p>
                        <div class="mt-3">
                            <button class="my-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's
                                Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <section class="about-main-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="about-content-side">
                        <h2><b>Let us Put Our Wiki Page Creation Services To Work!</b></h2>
                        <h6><b>Make sure your topic is noteworthy and well-referenced.</b></h6>
                        <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Making sure that every
                            piece of information you submit to a wikipedia page is properly referenced and understanding
                            the importance of excellent research skills are the two most important things to remember
                            when doing so. A page might be made quickly, but research takes time—you can rely on us for
                            that!
                            <br><br>
                            Nothing can prevent your page from receiving approval from the Wikipedia publication policy
                            if the chosen topic of your article, the material provided, and our sources align. You can
                            obtain accurate information from scholarly journals, books, newspapers, or any other
                            reliable data source.
                        </p>
                        <div class="mt-3">
                            <button class="my-button-two" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's
                                Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                            <div class="about-img-side" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <img src="<?= $actual_link ?>images/map1.png" alt="img" class="img-fluid">
                            </div>
                        </div> -->
                <style>
                    .card {
                        height: 100% !important;
                        transition: 0.2s}

                    .card:hover {
                        background-color: #ff7d3c;
                        cursor: pointer;
                        color: #fff;
                    }

                    .card-title {
                        font-size: 1.5rem;
                        font-weight: 600;
                        margin-bottom: 0.5rem;
                    }

                    .card-text {
                        font-family: 'Montserrat', sans-serif;
                        font-size: 15px
                    }
                </style>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Draft creation</h3>
                                    <p class="card-text">It's time to put everything together and write our first draft
                                        now that we have all the sources and content. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Client Consent</h3>
                                    <p class="card-text">You can stay in touch the entire time to be aware of what's
                                        happening. Our writers are highly skilled and adept at producing objective,
                                        factual, and impartial pages while keeping all the rules in mind. You will have
                                        to accept the final draft, though.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">It's time to have an expert edit your draft.</h3>
                                    <p class="card-text">Everything went smoothly; you gave your approval, it's time for
                                        professional judgment, and we expressly allocated a team to scan drafts to
                                        remove promotional language (if any). It will be prepared to travel as soon as
                                        they give their approval! </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Publication</h3>
                                    <p class="card-text">We publish the Wikipedia article stub, a provisional entry that
                                        makes the page accessible on Wikipedia before we publish the final article. Our
                                        editors will begin working on your content in the interim.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Keeping track </h3>
                                    <p class="card-text">After a placeholder article, our team will keep an eye on the
                                        new article to ensure it is accurate, current, and complies with Wikipedia's
                                        standards and principles. If necessary, this may mean revising the wording or
                                        including additional information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Improvisation </h3>
                                    <p class="card-text">The final step in creating a Wikipedia page is continuously
                                        improving the article. During this phase, the page must be updated, new content
                                        must be included, and new images or multimedia must be added. The goal is to
                                        keep the page current and accurate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- Portfolio Fold Start Here -->
    <section class="portfolio-sec-wrap">
        <div class="container">
            <div class="port-heading">
                <h3>Review our Portfolio</h3>
                <p>Take a look at our portfolio to understand how our review management service works. Our portfolio
                    will help you gain better clarity into our work.</p>
            </div>
            <div class="portfolio-sec-tabs">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-indvidual-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-indvidual" type="button" role="tab" aria-controls="pills-indvidual"
                            aria-selected="true">Individual</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-companies-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-companies" type="button" role="tab" aria-controls="pills-companies"
                            aria-selected="false">Companies</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-indvidual" role="tabpanel"
                        aria-labelledby="pills-indvidual-tab" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/individual-portfolio1.png" alt="img" class="img-fluid">
                                    <!-- <div class="img-top">
                                        <div class="top-icon">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                        <p>0</p>
                                    </div> -->
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/individual-portfolio1.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/individual-portfolio2.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/individual-portfolio2.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/individual-portfolio3.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/individual-portfolio3.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/individual-portfolio4.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/individual-portfolio4.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-companies" role="tabpanel"
                        aria-labelledby="pills-companies-tab" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/companies-portfolio1.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/companies-portfolio1.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/companies-portfolio2.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/companies-portfolio2.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/companies-portfolio3.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/companies-portfolio3.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="portfolio-card">
                                    <img src="<?= $actual_link ?>images/companies-portfolio4.png" alt="img" class="img-fluid">
                                    <div class="portfolio-title">
                                        <div class="p-icon">
                                            <a href="<?= $actual_link ?>images/companies-portfolio4.png" data-fancybox="images">
                                                <i class="fa-regular fa-magnifying-glass-plus"></i>
                                            </a>
                                        </div>
                                        <div class="p-heading">
                                            <h3>Wiki Writing</h3>
                                            <h4>Wiki Writing</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Fold End Here -->


    <!-- Planning CTA Fold Start Here -->
    <section class="planning-cta-wrap text-center planning-cta2">
        <div class="container">
            <h2>Hire A Wikipedia Writer, And Let’s Get Started!</h2>
            <p>Wikipedia articles are a significant and effective way to authenticate your business. Enhance your
                business credibility by reaching out to our review managers today.</p>
            <div class="sec-btns">
                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">GET STARTED</button>
                <button class="chat-btn" onclick="setButtonURL();">Let’s Chat</button>
            </div>
        </div>
    </section>
    <!-- Planning CTA Fold End Here -->


    <?php include("./includes/trust-wiki.php") ?>

    <?php include("./includes/client-feedback.php") ?>



    <?php include("./includes/wiki-experience.php") ?>


    <?php include("./includes/faqs.php") ?>
    <?php include("./includes/contactform.php") ?>

</main>
<?php include("./includes/footer.php") ?>

<!-- test  -->
