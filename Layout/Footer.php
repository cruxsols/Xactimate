<?php

/**
 * @var string $componentsPath
 */
$hideFooterTop = $hideFooterTop??false;

?>

<div data-elementor-type="footer" data-elementor-id="17" class="elementor elementor-17 elementor-location-footer"
     data-elementor-post-type="elementor_library">

    <?php if(!$hideFooterTop){include $componentsPath . 'RequestNowSections'.DS.'Type1.php';} ?>
    <section
            class="elementor-section elementor-top-section elementor-element elementor-element-1be90047 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="1be90047" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-497e0976"
                 data-id="497e0976" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7c5fac5f elementor-widget elementor-widget-image"
                         data-id="7c5fac5f" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <a href="index.html">
                                <img width="198" height="68" src="<?php echo $footerLogoUrl;?>"
                                     class="attachment-full size-full wp-image-124" alt="Logo"/> </a>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5d68aa03 elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                         data-id="5d68aa03" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-21238ecf elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                         data-id="21238ecf" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                                <?php echo $footerDescription ?>
                            </p></div>
                    </div>
                    <div class="elementor-element elementor-element-793e7582 elementor-nav-menu__align-center elementor-nav-menu--dropdown-none elementor-widget elementor-widget-nav-menu"
                         data-id="793e7582" data-element_type="widget"
                         data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}"
                         data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav aria-label="Menu"
                                 class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                <ul id="menu-1-793e7582" class="elementor-nav-menu">
                                    <?php if ($footerMenus) :
                                            foreach($footerMenus as $footerMenu) : ?>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4150">
                                                    <a href="<?php echo $footerMenu['link']; ?>" class="elementor-item"><?php echo $footerMenu['title'] ?></a>
                                                </li><?php
                                            endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-48aeb8a8 elementor-shape-circle elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                         data-id="48aeb8a8" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-social-icons-wrapper elementor-grid">
                                <?php if ($footerSocialIcons) :
                                    foreach($footerSocialIcons as $footerSocialIcon) : ?>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-82c7110" href="<?php echo $footerSocialIcon['link'] ?>" target="_blank">
                                                <span class="elementor-screen-only"><?php echo $footerSocialIcon['title'] ?></span>
                                                <?php echo $footerSocialIcon['svg'] ?>
                                            </a>
                                        </span>
                                    <?php
                                    endforeach; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0b2b2f8 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                         data-id="0b2b2f8" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <?php if ($footerAddresses) :
                                    foreach($footerAddresses as $footerAddress) : ?>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon"><?php echo $footerAddress['svg'] ?></span>
                                            <span class="elementor-icon-list-text">
                                                <?php echo $footerAddress['address'] ?>
                                            </span>
                                        </li>
                                    <?php
                                    endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2eda907 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                         data-id="2eda907" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <?php if ($footerContactNumbers) :
                                    foreach($footerContactNumbers as $footerContactNumber) : ?>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon"><?php echo $footerContactNumber['svg'] ?></span>
                                            <span class="elementor-icon-list-text">
                                                <?php echo $footerContactNumber['contact_number'] ?>
                                            </span>
                                        </li>
                                    <?php
                                    endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-87102c2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                         data-id="87102c2" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5a4202a1 elementor-widget elementor-widget-heading"
                         data-id="5a4202a1" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <?php if(isset($footerCopyrightText) && ! empty($footerCopyrightText)) : ?>
                                <p class="elementor-heading-title elementor-size-default">
                                    <?php echo $footerCopyrightText ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>