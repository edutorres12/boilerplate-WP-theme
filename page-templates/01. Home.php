<?php /* Template Name: 01. Home */ ?>

<?php get_header(); ?>

<section class="home__banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <i class="bi-alarm"></i>

                <h1>Home</h1>
                <a class="btn global__button" data-bs-toggle="modal" data-bs-target="#videoModal" href="#videoModal" style="border-color: black;">Open Modal</a>

            </div>
        </div>
</section>



<?php include(TEMPLATEPATH . '/includes/modals.php'); ?>

<?php get_footer(); ?>