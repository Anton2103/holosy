<?php
?>

<header id="site-header" role="banner">
    <div class="header-wrapper">
        <div class="container menu-container sticky">
            <div class="brand">
			    <?php if (has_custom_logo()) : ?>
                    <div class="site-logo"><?php
					    the_custom_logo(); ?></div>
			    <?php endif; ?>
            </div>
            <div class="btn-dark-mode-wrap">
                <input id="checkboxInput" type="checkbox">
                <label class="btn-dark-mode" for="checkboxInput"></label>
            </div>
            <div class="nav-block">
			    <?php
			    wp_nav_menu(
				    array(
					    'primary' => 'Primary menu'
				    )
			    );
			    ?>

                <div class="header-contacts">
                    <div class="tel phone-btn button-grow">
					    <?php $phone = get_field('phone_number', 'option'); ?>
                        <a class="button-grow" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                    <div class="social-block">
					    <?php

					    if (have_rows('social_network', 'option')):
						    while (have_rows('social_network', 'option')) : the_row();
							    $url_social = get_sub_field('url_social_network');
							    $icon_social_header = get_sub_field('social_icon_header');
							    $active_social = get_sub_field('active_social');
							    $icon_social_black_theme = get_sub_field('social_icon_black_theme');

							    if ($active_social == 'true'):
								    ?>
                                    <div class="social-block__img-shadow button-grow">
                                        <a href="<?php echo $url_social; ?>" target="_blank" >
                                            <img class="light-theme" src="<?php echo $icon_social_header; ?>" alt="<?php echo $url_social; ?>">
                                            <img class="dark-theme" src="<?php echo $icon_social_black_theme; ?>" alt="<?php echo $url_social; ?>">
                                        </a>
                                    </div>

							    <?php
							    endif;
						    endwhile;
					    endif;
					    ?>
                    </div>
                </div>

            </div>
            <div class="toggle-nav">
                <span class="toggle-nav__first"></span>
                <span class="toggle-nav__second"></span>
            </div>
        </div>
    </div>
</header>