<section
    class="elementor-section elementor-top-section elementor-element elementor-element-8a0b58b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="8a0b58b" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-27fd286"
             data-id="27fd286" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-f2b2363 elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                     data-id="f2b2363" data-element_type="widget" data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                            <?php if ($headerLeftIcons) :
                                foreach($headerLeftIcons as $headerLeftIcon) : ?>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="<?php echo $headerLeftIcon['href'] ?>">
                                            <span class="elementor-icon-list-icon"><?php echo $headerLeftIcon['svg'] ?></span>
                                            <span class="elementor-icon-list-text text-on-primary"><?php echo $headerLeftIcon['value'] ?></span>
                                        </a>
                                    </li>
                                <?php
                                endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0edb924"
             data-id="0edb924" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-e813846 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                     data-id="e813846" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default text-on-primary">Follow Us On</p></div>
                </div>
                <div class="elementor-element elementor-element-69a4479 elementor-shape-square elementor-widget__width-auto elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                     data-id="69a4479" data-element_type="widget" data-widget_type="social-icons.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-social-icons-wrapper elementor-grid">
                            <?php if ($headerSocialIcons) :
                                foreach($headerSocialIcons as $headerSocialIcon) : ?>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-cdf94bc"
                                           href="<?php echo $headerSocialIcon['link'] ?>" target="_blank">
                                            <span class="elementor-screen-only"></span>
                                            <?php echo $headerSocialIcon['svg'] ?>
                                        </a>
				                    </span>
                                <?php
                                endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-955a38f elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-inline elementor-widget__width-auto elementor-widget elementor-widget-icon-list"
                     data-id="955a38f" data-element_type="widget" data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                            <?php if ($headerContactNumbers) :
                                foreach($headerContactNumbers as $headerContactNumber) : ?>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a>
                                            <span class="elementor-icon-list-icon"><?php echo $headerContactNumber['svg'] ?></span>
                                            <span class="elementor-icon-list-text text-on-primary"><?php echo $headerContactNumber['contact_number'] ?></span>
                                        </a>
                                    </li>
                                <?php
                                endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>