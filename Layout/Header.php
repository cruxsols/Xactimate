<?php use AdminPanel\Constants\Links;?>
<div data-elementor-type="header" data-elementor-id="11" class="elementor elementor-11 elementor-location-header"
     data-elementor-post-type="elementor_library">
    <?php include('TopHeader.php') ?>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-130d2a3b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="130d2a3b" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36475be1"
                 data-id="36475be1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1330a1e8 elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                         data-id="1330a1e8" data-element_type="widget" data-widget_type="theme-site-logo.default">
                        <div class="elementor-widget-container">
                            <a href="<?php echo Links::Home?>">
                                <img fetchpriority="high" width="2036" height="710"
                                     src="<?php echo $assetsJsonUrl;?>uploads/2023/07/02-ConstructEstimatesLogoSVG.svg"
                                     class="attachment-full size-full wp-image-1771"
                                     alt="About Us - Construct Estimates"/> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-63c7f927"
                 data-id="63c7f927" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3795dfa0 elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                         data-id="3795dfa0" data-element_type="widget"
                         data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                         data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav aria-label="Menu"
                                 class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                <?php echo displayMenu($topMenu, 0, true);?>

                            </nav>
                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                                 aria-expanded="false">
                                <svg aria-hidden="true" role="presentation"
                                     class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar"
                                     viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path>
                                </svg>
                                <svg aria-hidden="true" role="presentation"
                                     class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close"
                                     viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                                </svg>
                            </div>
                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                                <?php echo displayMenu($topMenu, 0, true);?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>