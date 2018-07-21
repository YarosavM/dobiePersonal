<?php get_header(); ?>
<?php?>
<h1>It's Index Page</h1>
<br><br>
    <!-- Content -->
    <div class="blog-center-align">

        <!-- Blog Caption -->
        <div class="blog-caption">
            <div class="blogtitle"><?php _e('Blog Posts','aletheme'); ?></div>
        </div>

        <!-- Blog Line -->
        <div class="blog-line"></div>

        <!-- Filters Here -->
        <ul class="blog-filter-line">
            <li><?php _e('Filter By','aletheme'); ?>:</li>
            <li>
                <a class="filter-caption"><p><?php _e('Author','aletheme'); ?></p><span></span></a>
                <ul>

                    <?php
                    $args = array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => null,
                        'optioncount'   => false,
                        'exclude_admin' => false,
                        'show_fullname' => false,
                        'hide_empty'    => true,
                        'echo'          => true,
                        'style'         => 'list',
                        'html'          => true );

                    wp_list_authors($args); ?>
                </ul>

            </li>

            <li>
                <a class="filter-caption"><p><?php _e('Category','aletheme'); ?></p><span></span></a>
                <ul>
                    <?php
                    $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 1,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => '',
                        'show_option_none'   => __('No categories','aletheme'),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                    );
                    wp_list_categories($args); ?>
                </ul>
            </li>

            <li>
                <a class="filter-caption"><p><?php _e('Tags','aletheme'); ?></p><span></span></a>
                <?php
                $tags = get_tags();
                $html = '<ul>';
                foreach ( $tags as $tag ) {
                    $tag_link = get_tag_link( $tag->term_id );

                    $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                    $html .= "{$tag->name}</a></li>";
                }
                $html .= '</ul>';
                echo $html;
                ?>
            </li>

            <li class="search">
                <form role="search" method="get" id="searchform" action="<?php echo site_url()?>" >
                    <input type="search" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e('SEARCH', 'aletheme')?>" />
                    <button type="submit" id="searchsubmit"></button>
                </form>
            </li>
        </ul>

        <!-- Blog Content -->
        <div class="blog-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('postpreview' );?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

        <!-- Blog Nav  -->
        <div class="blog-nav">
            <span class="left"><?php echo get_previous_posts_link(__('&lt; Newer Posts','aletheme')); ?></span>
            <span class="right"><?php echo get_next_posts_link(__('Older Posts &gt;','aletheme')); ?></span>
            <div class="center"><?php _e('page','aletheme'); ?> <?php echo $paged; ?> <?php _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; ?></div>
        </div>

        <!-- Blog Nav -->
        <div class="blog-line"></div>

        <!-- Blog Footer  -->
        <div class="blog-footer">
            <?php ale_part('archives'); ?>
        </div>

    </div>
    <?php */ ?>




    <div class="next-page1">
            <div class="resume-zone">
                <div class="fixer"></div>
                <div class="big-cap-field">
                    <div class="big-capper diver"><div class="bc-bord">Resume</div></div>
                </div>
                <div class="res-left">
                    <div class="res-name-cap">Liana Moskalyk</div>

                    <div class="res-element">
                        <div class="res-intro-pl">
                            <div class="flexer">
                                <div class="place-capper">Summary</div>
                            </div>
                            <div class="res-element-content-m">
                                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis 
                                et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni 
                                dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non 
                                numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis.
                            </div>
                        </div>
                    </div>
                    <div class="res-element">
                        <div class="res-edu-pl">
                            <div class="flexer">
                                <div class="place-capper">Education</div>
                            </div>
                            <div class="res-edu-content-m">
                                <ul class="res-list">
                                    <li class="res-cl-l-e">
                                        <span class="bold">Lorem Ipsum</span> - Sed ut perspiciatis, unde omnis iste natus error.
                                    </li>
                                    <li class="res-cl-l-e">
                                        <span class="bold">Ut enim ad minima</span> - Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="res-right">
                    <div class="res-element">
                        <div class="res-exp-pl">
                            <div class="flexer">
                                <div class = "place-capper">Expiriense</div>
                            </div>
                            <div class="res-element-content-m">
                                <ul class="res-list">
                                    <li class="res-cl-l-e">
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis.
                                    </li>
                                    <li class="res-cl-l-e">
                                    Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni 
                                    dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="res-element">
                        <div class="res-skills-pl">
                            <div class="flexer">
                                <div class = "place-capper">Skills</div>
                            </div>
                            <div class="res-element-content-m">
                                <ul class="res-list">
                                    <li class="res-cl-l-e">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus.
                                    </li>
                                    <li class="res-cl-l-e">
                                    Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat...
                                    </li>
                                    <li class="res-cl-l-e">
                                    Et harum quidem rerum facilis est et expedita distinctio.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    
<?php get_footer(); ?>