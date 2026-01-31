<?php get_header(); ?>
 <div class="fv_img_mainvisual"><?php echo get_the_post_thumbnail('null','full',array('class' => 'fv-img')); ?></div>
    <main>
    <!-- ジャーナルセクション -->
    <section>
        <div class="l-page-journal-journalPage__article">
            <div class="c-page-journal-heading c-page-journal-heading--inView">
                <div class="c-page-journal-heading-top">
                    <p>story</p>
                    <span class="c-page-journal-heading-top-border"></span>
                    <p><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
                <div class="c-page-padding">
                    <h2 class="c-page-journal-heading-numc">01.</h2>
                    <div class="c-page-journal-heading-title-ja">
                        <h3><?php echo the_title();?></h3>
                    </div>
                </div>
            </div>
            <div class="l-page-journal-journalPage__content l-page-journal-journalPage__article-content">
                <?php if(have_rows('journal_content_box')):
                while(have_rows('journal_content_box')): the_row();
                $journal_section_img_url = get_sub_field('journal_section_img_url');
                $journal_section_ttl = get_sub_field('journal_section_ttl');
                $journal_section_textarea = get_sub_field('journal_section_textarea');
                     ?>
                <div><img src="<?php echo esc_url($journal_section_img_url['url']);?>" alt="<?php echo esc_attr($journal_section_img_url['alt']);?>"></div>
                <div class="c-article__cassette c-article__cassette--text">
                    <p class="c-article__cassette--text-lead u-font-yu-min"><?php echo $journal_section_ttl; ?></p>
                    <p class="c-article__cassette--text-body"><?php echo $journal_section_textarea; ?></p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- ジャーナルセレクトセクション -->
    <section class="journal_select_section">
        <div>
            <h2 class="hedding_journal">Journal</h2>
            <div class="journal-card_content">
                <div class="journal-card_box">
                    <a href="#" id="#" class="journal01">
                        <div class="journal-card-image"><img src="../img/journal01.jpg" alt=""></div>
                        <div class="p-about-journal-card-info">
                            <div class="p-about-journal-card-top">
                                <p>story</p>
                                <span class="p-about-journal-card-border"></span>
                                <p>2024.10.20</p>
                            </div>
                            <div class="p-about-journal-card-heading">
                                <div class="p-about-journal-card-heading--num">
                                    <p class="journal-card_number">01.</p>
                                </div>
                                <div class="p-about-journal-card-title">
                                    <p class="p-about-journal-card-title-ja">小松とまとの栽培のプロセス</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="journal-card_box">
                    <a href="journal_01.html" id="#" class="journal01">
                        <div class="journal-card-image"><img src="../img/journal02.jpg" alt=""></div>
                        <div class="p-about-journal-card-info">
                            <div class="p-about-journal-card-top">
                                <p>story</p>
                                <span class="p-about-journal-card-border"></span>
                                <p>2024.10.27</p>
                            </div>
                            <div class="p-about-journal-card-heading">
                                <div class="p-about-journal-card-heading--num">
                                    <p class="journal-card_number">02.</p>
                                </div>
                                <div class="p-about-journal-card-title">
                                    <p class="p-about-journal-card-title-ja">小松とまとの美味しさと秘訣</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </section>
    </main>
    <?php get_footer(); ?>