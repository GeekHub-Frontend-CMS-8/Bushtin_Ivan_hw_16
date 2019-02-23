<?php get_header(); ?>
<div class="portfolio-slider">
    <div class="container">
        <div class="portfolio-wrapper">
            <img src="<?php bloginfo('template_url') ?>/img/index-photo.png" alt="photo" class="portfolio-image">
            <div class="info-popup">
                <a href="#" class="wide"><i class="fas fa-location-arrow"></i></a>
                <h2 class="portfolio-header">morgan freeman</h2>
                <span class="portfolio-header-caption">actor</span>
                <div class="middle-block">
                    <p class="portfolio-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        fringilla mi orci, ac venenatis
                        ante venenatis eget.
                    </p>
                    <div>
                        <div class="pointer"><a href="#"><i class="fas fa-angle-left"></i></a></div>
                        <div class="pointer"><a href="#"><i class="fas fa-angle-right"></i></a></div>
                        <span class="count">1/10</span>
                    </div>
                </div>
                <div class="action">
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="#"><i class="fas fa-share"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bottom">
    <div class="bottom-wrapper container">
        <div class="bottom-box-1">
            <div><img src="<?php bloginfo('template_url') ?>/img/photo.png" alt="photo"></div>
            <div>
                <h3>fashion workshop</h3>
                <span>nov 21-23</span>
                <span>9:00am - 4:00pm</span>
                <a href="#">rsvp</a>
            </div>
        </div>
        <div class="bottom-box-2">
            <h4 class="bottom-box-2-header">news</h4>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="bottom-box-2-news">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="bottom-box-2-news-text">
                        <h6><?php the_title(); ?></h6>
                        <span><?php the_date('d.m.Y') ?></span>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>

            <div class="bottom-box-2-news news-margin">
                <img src="<?php bloginfo('template_url') ?>/img/news-box-photo-2.png" alt="photo">
                <div class="bottom-box-2-news-text">
                    <h6>wedding workshop</h6>
                    <span>09.12.2014</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis
                        ante
                        venenatis eget.</p>
                </div>
            </div>
            <div class="bottom-box-2-news">
                <img src="<?php bloginfo('template_url') ?>/img/news-box-photo-3.png" alt="photo">
                <div class="bottom-box-2-news-text">
                    <h6>Personal Project</h6>
                    <span>09.12.2014</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis
                        ante
                        venenatis eget.</p>
                </div>
            </div>
        </div>
        <div class="bottom-box-3">
            <img src="<?php bloginfo('template_url') ?>/img/logo-bottom.png" alt="logo" class="bottom-box-3-logo">
            <div class="bottom-box-3-contact-info">
                <div>
                    <i class="fas fa-phone-square"></i>
                    <a href="#">+ 00 123 456 7890</a>
                </div>
                <div class="bottom-box-3-post">
                    <i class="fas fa-envelope"></i>
                    <a href="#">info@square.com</a>
                </div>
                <ul class="social-list">
                    <li class="social-list-item"><i class="fab fa-facebook-f"></i></li>
                    <li class="social-list-item"><i class="fab fa-twitter"></i></li>
                    <li class="social-list-item"><i class="fab fa-instagram"></i></li>
                    <li class="social-list-item"><i class="fas fa-vr-cardboard"></i></li>
                    <li class="social-list-item"><i class="fab fa-google-plus-square"></i></li>
                </ul>
            </div>
            <div class="bottom-box-3-twit">
                <a href="#"><i class="fab fa-2x fa-twitter"></i></a>
                <p>Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake
                    <a href="">@cheesecake</a> tootsie roll.</p>
            </div>
        </div>
    </div>
</div>
<div class="partners container">
    <div><img src="<?php bloginfo('template_url') ?>/img/phaseone_logo.png" alt="logo"></div>
    <div><img src="<?php bloginfo('template_url') ?>/img/manfrotto_logo.png" alt="logo"></div>
    <div><img src="<?php bloginfo('template_url') ?>/img/hasselblad.png" alt="logo"></div>
    <div><img src="<?php bloginfo('template_url') ?>/img/broncolor_logo.png" alt="logo"></div>
</div>
<script src="js/script.js"></script>
<?php get_footer(); ?>

