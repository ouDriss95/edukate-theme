<?php

get_header();

while (have_posts()) {
  the_post(); ?>

  <!-- Header Section -->
  <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
      <h1 class="text-white display-1"><?php the_title(); ?></h1>



      <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>

        <div class="d-inline-flex text-white mb-5">
          <p class="m-0 text-uppercase"><a class="text-white" href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></p>
          <i class="fa fa-angle-double-right pt-1 px-3"></i>
          <p class="m-0 text-uppercase"><?php the_title(); ?></p>
        </div>

      <?php } ?>

      <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
        <div class="input-group">

          <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
          <div class="input-group-append">
            <button class="btn btn-secondary px-4 px-lg-5">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- About Section -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-9">
          <div class="section-title position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2"><?php the_title(); ?></h6>

          </div>
          <?php the_content(); ?>

        </div>



        <?php
        $testArray = get_pages(array(
          'child_of' => get_the_ID()
        ));

        if ($theParent or $testArray) { ?>
          <div class="col-lg-3">
            <div class="page-links">
              <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
              <ul class="min-list">
                <?php
                if ($theParent) {
                  $findChildrenOf = $theParent;
                } else {
                  $findChildrenOf = get_the_ID();
                }

                wp_list_pages(array(
                  'title_li' => NULL,
                  'child_of' => $findChildrenOf
                ));
                ?>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>



  <!-- Feature Section -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="section-title position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
            <h1 class="display-4">Why You Should Start Learning with Us?</h1>
          </div>
          <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
          <div class="d-flex mb-3">
            <div class="btn-icon bg-primary mr-4">
              <i class="fa fa-2x fa-graduation-cap text-white"></i>
            </div>
            <div class="mt-n1">
              <h4>Skilled Instructors</h4>
              <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="btn-icon bg-secondary mr-4">
              <i class="fa fa-2x fa-certificate text-white"></i>
            </div>
            <div class="mt-n1">
              <h4>International Certificate</h4>
              <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
            </div>
          </div>
          <div class="d-flex">
            <div class="btn-icon bg-warning mr-4">
              <i class="fa fa-2x fa-book-reader text-white"></i>
            </div>
            <div class="mt-n1">
              <h4>Online Classes</h4>
              <p class="m-0">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="min-height: 500px;">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
          </div>
        </div>
      </div>
    </div>
  </div>


<?php }

get_footer();

?>