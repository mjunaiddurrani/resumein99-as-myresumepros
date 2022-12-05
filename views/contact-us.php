<!DOCTYPE html>
<html lang="en">




<head>
    <?php include_once("includes/head.php")?>
    <title>Contact Us - Resumein 99</title>
</head>

<body>
    <?php include_once("includes/header.php")?>
    <section class="banner-inner process-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pg-heading">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headingstyle1">
                        <h2>Get In <span>Touch With Us</span></h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <form method="POST" action="/leads/">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field">
                                    <input
                                        onkeypress="return ((event.charCode >= 65 &amp;&amp; event.charCode <= 90) || (event.charCode >= 97 &amp;&amp; event.charCode <= 122) || (event.charCode == 32))"
                                        type="text" class="form-control" name="name" maxlength="80"
                                        placeholder="Full Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field">
                                    <input type="number" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field">
                                    <textarea name="brief" placeholder="Write Message" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field">
                                    <input type="submit" class="btn-default" value="Submit">
                                    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']?>">
                                    <input type="hidden" name="brand" value="resumein99s">
                                    <input type="hidden" name="token" value="<?= $token;?>">
                                    <input type="hidden" name="tag" value="sidepanel form in landing-page">
                                    <input type="hidden" name="price" value="null">
                                    <input type="hidden" name="news" value="1">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ct-details">
                                <p>We are here to accommodate to all your resume writing requirements. One of our
                                    customer support representatives will get in touch with you shortly.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ct-details">
                                <h5>Phone :</h5>
                                <a href="tel:(888)-645-0042 ">(888)-645-0042 </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ct-details email">
                                <h5>Email :</h5>
                                <a href="mailto:info@resumein99.com"><span
                                        class="__cf_email__">info@resumein99.com</span></a>
                            </div>
                            <div class="ct-details address">
                                <h5>Address :</h5>
                                <a><span class="__cf_email__">421 S. Brookhurst St Ste 517 Anaheim, CA 92804</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    .processSec,
    .conSec,
    .testimonialSec {
        display: none;
    }
    </style>
    <section class="processSec">
        <span class="sep1"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="para ptSerif">Comprehensive Process</span>
                    <h4 class="mn-h1 style1">How our experts create <br><span class="logoColor">Professional
                            Resumes</span></h4>
                    <div class="spacebr">
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <ul class="processList">
                        <li>
                            <div class="iconWrap">
                                <i class="sprite-icn icon1"></i>
                            </div>
                            <h6>Submit Career Brief</h6>
                            <p>Sign up with us and submit your detailed career brief or previous resume.</p>
                        </li>
                        <li>
                            <div class="iconWrap">
                                <i class="sprite-icn icon2"></i>
                            </div>
                            <h6>Get Your First Draft</h6>
                            <p>Our PARWCC experts will write your resume’s first draft for you to make tweaks or
                                finalize.</p>
                        </li>
                        <li>
                            <div class="iconWrap">
                                <i class="sprite-icn icon3"></i>
                            </div>
                            <h6>Finalize Your Resume</h6>
                            <p>Review your draft and request for revision, if any. Finalize it to get the final files.
                            </p>
                        </li>
                        <li>
                            <div class="iconWrap">
                                <i class="sprite-icn icon4"></i>
                            </div>
                            <h6>Download Your Files</h6>
                            <p>Download your file. Now you are ready to apply for your dream job with a proficient
                                resume.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="conSec">
        <span class="sep2"></span>
        <div class="container">
            <div class="particlesWrap">
                <div id="particles-js"></div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h4 class="mn-h1 style1 color-white">Get A <span>Step Closer</span> <br>To Your Dream Job!</h4>
                    </div>
                    <div class="col-md-6 text-center">
                        <ul class="btnList">
                            <li>
                                <a class="cusBtn style1" href="javascript:;" title="Live Chat" target="_self"
                                    onclick="setButtonURL();">
                                    Chat Now
                                </a>
                            </li>
                            <li><a class="cusBtn popup-open" href="#">Get Started Now!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonialSec">
        <span class="sep2"></span>
        <div class="container">
            <div class="testi-slider">
                <div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="assets/images/testimonials/person1.jpg.jpg" alt="">
                        </div>
                        <div class="col-md-7">
                            <ul class="testiTxt">
                                <li>
                                    <span class="para ptSerif">Hear from them!</span>
                                    <h4 class="mn-h1 style1">What Our Clients Say</h4>
                                    <div class="spacebr">
                                        <br>
                                        <br>
                                    </div>
                                    <p class="para ptSerif">Making resumes seems like such a simple task but I just
                                        couldn't find the time to get to it. Thankfully, Resumein 99 helped
                                        me out, and i have to say, they went above and beyond! </p>
                                    <h6>Ruby Sikes</h6>
                                    <p class="smallPara">Media Planner</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="assets/images/testimonials/person2.jpg.jpg" alt="">
                        </div>
                        <div class="col-md-7">
                            <ul class="testiTxt">
                                <li>
                                    <span class="para ptSerif">Hear from them!</span>
                                    <h4 class="mn-h1 style1">What Our Clients Say</h4>
                                    <div class="spacebr">
                                        <br>
                                        <br>
                                    </div>
                                    <p class="para ptSerif">Can't believe that making a resume is so important and that
                                        i would struggle to do it on my own! The team at Resumein 99 has been
                                        a lifesaver, because they helped me set up a profile on LinkedIn and wrote a
                                        cover letter for me too in under a week! </p>
                                    <h6>Nikki Loeffler</h6>
                                    <p class="smallPara">Software Engineer</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="assets/images/testimonials/person3.jpg.jpg" alt="">
                        </div>
                        <div class="col-md-7">
                            <ul class="testiTxt">
                                <li>
                                    <span class="para ptSerif">Hear from them!</span>
                                    <h4 class="mn-h1 style1">What Our Clients Say</h4>
                                    <div class="spacebr">
                                        <br>
                                        <br>
                                    </div>
                                    <p class="para ptSerif">My friends always said they'd help me out in giving my
                                        resume a fixer-upper, but they never really had the time. I was a little lost
                                        when it came to building a resume so I'm super glad I came across Resumein 99. They were very patient throughout and answered all my questions
                                        which was much appreciated!</p>
                                    <h6>Cheryl C. Jones</h6>
                                    <p class="smallPara">Marketing Director</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("includes/footer.php")?>
    <div class="overlay"></div>

    <div class="popup popup-default">
        <a class="popup-close" href="javascript:;"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="row align-items-center">
            <div class="col-md-5 display-0">
                <div class="img-wrapper">
                    <img alt="resume writers" src="assets/images/popup-img.png">
                    <img alt="resume writers" class="popup-element" src="assets/images/popup-element.png">
                </div>
            </div>
            <div class="col-md-7">
                <div class="right">
                    <h5>Get A <span>Resume</span> that <br>Aces All HR Standards.</h5>
                    <form method="POST" action="/leads/">
                        <div class="popup-bdy">
                            <div class="field">
                                <input
                                    onkeypress="return ((event.charCode >= 65 &amp;&amp; event.charCode <= 90) || (event.charCode >= 97 &amp;&amp; event.charCode <= 122) || (event.charCode == 32))"
                                    type="text" id="name" placeholder="Full Name" name="name" required="">
                            </div>
                            <div class="field">
                                <input type="email" placeholder="Enter Your Email" name="email" id="email" required="">
                            </div>
                            <div class="field ">
                                <input type="number" name="phone" placeholder="Enter Your Number" required="">
                            </div>
                            <div class="field">
                                <input type="submit" value="Submit">
                                <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']?>">
                                <input type="hidden" name="brand" value="resumein99s">
                                <input type="hidden" name="token" value="<?= $token;?>">
                                <input type="hidden" name="tag" value="sidepanel form in landing-page">
                                <input type="hidden" name="price" value="null">
                                <input type="hidden" name="news" value="1">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>