<?php
get_header();
?>

<header class="portfolioHeader text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <img class="avatar mb-5" src="<?php echo get_template_directory_uri();?>/images/avatar.svg" alt=" avatar">
        <h1 class="headerText text-uppercase ">start bootstrap</h1>

        <div class="divider-icon ">
            <i class="fas fa-star"></i>
        </div>

        <p class="title mt-3">Graphic Artist - Web Designer - Illustrator</p>
    </div>
</header>

<!-- About section -->
<section class="aboutSection">

    <div class="container pt-4  pb-4 item align-items-center  d-flex flex-column text-white">
        <h2 class="aboutTitle text-uppercase ">About</h2>
        <div class="divider-icon  ">
            <i class="fas fa-star"></i>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 ml-auto">
                <p class="aboutText">
                    Freelancer is a free bootstrap theme created by Start Bootstrap.
                    The download includes the complete source files including HTML, CSS,
                    and JavaScript as well as optional SASS stylesheets for easy customization.
                </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="aboutText">
                    You can create your own custom avatar for the masthead, change the icon in the dividers,
                    and add your email address to the contact form to make it fully functional!
                </p>
            </div>

        </div>

        <div class="text-center mt-2 ">
            <a href="" class="btn btn-xl btn-outline-light"><i class="fas fa-download mr-2"></i> Free download</a>
        </div>
    </div>
</section>

<!-- Contact section -->
<section class="contactSection">
    <div class="container pb-4  ">
        <h2 class="contactTitle text-center  text-uppercase ">Contact me</h2>
        <div class="divider-icon align-items-center ">
            <i class="fas fa-star"></i>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="" id="contactform">
                    <div class="control-group">
                        <div class="form-group controls label-and-input mb-0 pb-2">
                            <label>Name</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group label-and-input controls mb-0 pb-2">
                            <label>Email address</label>
                            <input type="email" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls label-and-input mb-0 pb-2">
                            <label>Phone number</label>
                            <input type="tel" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls label-and-input mb-0 pb-2">
                            <label>Message</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-xl">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();
?>