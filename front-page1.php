<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since Portfolio 0.1
 */
?>

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







<?php


get_footer();

?>