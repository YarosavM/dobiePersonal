<?php get_header(); ?>
    <!-- Content -->
    <?php /* ?>
    <div class="page-center">
        <div class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="h2" ><?php the_title(); ?></div>
                <div class="contact-content">
                    <?php ale_part('pagehead');?>
                    <?php the_content(); ?>
                    <?php ale_part('pagefooter');?>
                </div>
            <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </div>
    <?php */ ?>
    <?php  
        //if ( get_theme_mod('cb_set') == 1 ) {
    ?>
    <div class="next-page1">
            <div class="resume-zone">
                <?php if ( get_theme_mod('infra_darkness_set') == 1 ) { echo '<div class="disp-flx dark-theme">'; } ?>
                <div class="fixer"></div>
                <div class="big-cap-field">
                    <div class="big-capper diver">
                        <div class="bc-bord fav-color-border">
                            <?php echo get_theme_mod('fh_cap_setting'); ?>
                        </div>
                    </div>
                </div>
                <div class="res-left">

                    <?php if( get_theme_mod('fh_cap_sec_setting')!='' ) { ?>
                        <div class="res-name-cap">
                            <?php echo get_theme_mod('fh_cap_sec_setting'); ?>
                        </div>
                    <?php } ?>

                    <div class="res-element">
                        <div class="res-intro-pl">
                            <?php if( get_theme_mod('block1_cap_set')!='' ) { ?>
                                <div class="flexer">                                
                                    <div class="place-capper">
                                        <?php echo get_theme_mod('block1_cap_set'); ?>
                                    </div>                                
                                </div>
                            <?php } ?>
                            <?php if( get_theme_mod('block1_cont_txt_set')!='' ) { ?>
                                <div class="res-element-content-m">
                                    <?php echo get_theme_mod('block1_cont_txt_set') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="res-element">
                        <div class="res-edu-pl">
                            <div class="flexer">
                                <div class="place-capper">Education</div>
                            </div>
                            <div class="res-element-content-m">
                                <ul class="res-list">
                                     <?php if(ale_get_option('edu1_place')) { if(ale_get_option('edu1_desc')) { ?>
                                        <li class="res-cl-l-e">
                                            <span class="bold">
                                                <?php echo ale_get_option('edu1_place') ?>
                                            </span> 
                                            —
                                            <?php echo ale_get_option('edu1_desc') ?>
                                        </li>
                                    <?php }} ?>

                                    <?php if(ale_get_option('edu2_place')) { if(ale_get_option('edu2_desc')) { ?>
                                        <li class="res-cl-l-e">
                                            <span class="bold">
                                                <?php echo ale_get_option('edu2_place') ?>
                                            </span>
                                             —
                                            <?php echo ale_get_option('edu2_desc') ?>
                                        </li>
                                    <?php }} ?>

                                    <?php if(ale_get_option('edu3_place')) { if(ale_get_option('edu3_desc')) { ?>
                                        <li class="res-cl-l-e">
                                            <span class="bold">
                                                <?php echo ale_get_option('edu3_place') ?>
                                            </span>
                                             — 
                                            <?php echo ale_get_option('edu3_desc') ?>
                                        </li>
                                    <?php }} ?>

                                    <?php if(ale_get_option('edu4_place')) { if(ale_get_option('edu4_desc')) { ?>
                                        <li class="res-cl-l-e">
                                            <span class="bold">
                                                <?php echo ale_get_option('edu4_place') ?>
                                            </span>
                                             — 
                                            <?php echo ale_get_option('edu4_desc') ?>
                                        </li>
                                    <?php }}?>

                                    <?php if(ale_get_option('edu5_place')) { if(ale_get_option('edu5_desc')) { ?>
                                        <li class="res-cl-l-e">
                                            <span class="bold">
                                                <?php echo ale_get_option('edu5_place') ?>
                                            </span>
                                             — 
                                            <?php echo ale_get_option('edu5_desc') ?>
                                        </li>
                                    <?php }} ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="res-right">
                    <div class="res-element">
                        <div class="res-exp-pl">
                            <div class="flexer">
                                <div class = "place-capper">Expirience</div>
                            </div>
                            <div class="res-element-content-m">
                                <ul class="res-list">
                                        <li class="res-cl-l-e">
                                            <?php echo ale_get_option('res_exp1') ?>
                                        </li>
                                    <?php if(ale_get_option('res_exp2')){ ?>
                                        <li class="res-cl-l-e">
                                            <?php echo ale_get_option('res_exp2') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('res_exp3')){ ?>
                                    <li class="res-cl-l-e">
                                        <?php echo ale_get_option('res_exp3') ?>
                                    </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('res_exp4')){ ?>
                                    <li class="res-cl-l-e">
                                        <?php echo ale_get_option('res_exp4') ?>
                                    </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('res_exp5')){ ?>
                                    <li class="res-cl-l-e">
                                        <?php echo ale_get_option('res_exp5') ?>
                                    </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('res_exp6')){ ?>
                                    <li class="res-cl-l-e">
                                        <?php echo ale_get_option('res_exp6') ?>
                                    </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('res_exp7')){ ?>
                                    <li class="res-cl-l-e">
                                        <?php echo ale_get_option('res_exp7') ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="res-element">
                        <div class="res-skills-pl">
                            <div class="flexer">
                                <div class = "place-capper">Skills highlights</div>
                            </div>
                            <div class="res-element-content-m">
                                <ul class="res-list">
                                    <?php if(ale_get_option('skill1')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill1') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('skill2')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill2') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('skill3')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill3') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('skill4')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill4') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('skill5')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill5') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('skill6')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill6') ?>
                                        </li>
                                    <?php } ?>

                                    <?php if(ale_get_option('skill7')){ ?>
                                        <li class="res-cl-l-e">
                                             <?php echo ale_get_option('skill7') ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ( get_theme_mod('infra_darkness_set') == 1 ) { echo '</div>'; } ?>
            </div>
        </div>

    <?php // } ?>

<?php get_footer(); ?>