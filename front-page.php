<?php get_header(); ?>

<div class="hero-container">
    <div class="hero-section">
        <img class="hero"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/landing-header-desktop.jpg' ); ?>"
            alt="Hero Image">
        <div class="hero-text">
            <p class="raw-1">WE DESIGN</p>
            <p class="raw-2"><span>Seamless,</span> Building Experiences</p>
            <p class="raw-3">using innovative technology</p>
        </div>
        <div class="hero-text-bottom">
            <div class="ht-btm-txt">
                <p>Don't Just Build a Building.<br>Build an Experience.</p>
            </div>
            <div class="ht-btm-btn">
                <a href="">
                    <p>Request For Proposal &#8702;</p>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="about-container">
    <div class="about-content">
        <p class="heading">Who <span>we are</span></p>
        <p class="sub-heading">and what we do</p>
        <p class="content">We are a team of skilled & passionate technology curators who enjoy humanizing building
            experiences using world-class technologies. Our decade of experience in electronic security, systems
            integration, automation and ELV Contracting has helped us curate unique experiences for different types of
            properties. We are a licensed agent of multiple brands in Surveillance, Access Control, Network Equipment,
            Meeting Room Systems, Intercom Systems, Smart Home Automation, Hotel Door Locks, Guest Room Management
            Systems, Print Management & Many More</p>
    </div>
</div>

<div class="wrapper card-section">
    <div class="carousel owl-carousel">
        <div class="card card-1">
            <div class="img">
                <img class="logo"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cctv.png' ); ?>" alt="cctv">
            </div>
            <div class="txt">
                <p class="heading">Surveillance</p>
                <p class="contents">We offer Complete Smart Home & Building Solutions as well as cater to one-off
                    requirements</p>
            </div>
        </div>
        <div class="card card-2">
            <div class="img">
                <img class="logo"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/display.png' ); ?>"
                    alt="cctv">
            </div>
            <div class="txt">
                <p class="heading">Surveillance</p>
                <p class="contents">We offer unified Office Automation Solutions that go beyond traditional devices
                    & peripherals</p>
            </div>
        </div>
        <div class="card card-3">
            <div class="img">
                <img class="logo"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/alarm.png' ); ?>"
                    alt="cctv">
            </div>
            <div class="txt">
                <p class="heading">Alarm & Fire Systems</span></p>
                <p class="contents">Unique guest and employee experience whether it be at a resort, city hotel or an
                    Airbnb</p>
            </div>
        </div>
        <div class="card card-4">
            <div class="img">
                <img class="logo"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cctv.png' ); ?>" alt="cctv">
            </div>
            <div class="txt">
                <p class="heading">Surveillance</p>
                <p class="contents">We offer Complete Smart Home & Building Solutions as well as cater to one-off
                    requirements</p>
            </div>
        </div>
        <div class="card card-5">
            <div class="img">
                <img class="logo"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/display.png' ); ?>"
                    alt="cctv">
            </div>
            <div class="txt">
                <p class="heading">Surveillance</p>
                <p class="contents">We offer unified Office Automation Solutions that go beyond traditional devices
                    & peripherals</p>
            </div>
        </div>
    </div>
</div>

<div class="contact-section">
    <div class="contact-container">
        <h2 class="contact-heading">Let's get in touch</h2>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <input type="text" id="name" placeholder="Your Name*" name="name" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder="Your Email*" name="email" required>
            </div>
            <div class="form-group">
                <input type="tel" id="phone" placeholder="Your Phone" name="phone">
            </div>
            <div class="form-group">
                <input type="text" id="subject" placeholder="Subject" name="subject">
            </div>
            <div class="form-group">
                <textarea id="message" placeholder="Your Message" name="message"></textarea>
            </div>
            <p class="req-field"><span>*</span>Required Fields</p>
            <div class="submit-btn">
                <a href="">
                    <p>Request For Proposal</p>
                </a>
            </div>
            <div class="contact-notice">
                <p>This site is protected by reCAPTCHA and the Google <a href="#" target="_blank">Privacy Policy</a>
                    and
                    <a href="#" target="_blank">Terms of Service</a> apply.
                </p>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>