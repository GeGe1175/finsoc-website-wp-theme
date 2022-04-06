<?php

/**
 * Template Name: Sponsorship Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package busiway
 */

get_header();
get_template_part('index','banner'); ?>
<!-- also we need to check out the different container css, as in there are different css things for the original finsoc stuff and the new one -->
    <main id="content">
    <div class="container">
        <!-- this one above is the container class from the new thing everything inbetween -->
        <div class="pageSponsors">
            <a name="sponsors"></a>
            <div class="section">
                <div class="sponsors-container container">
                    <div class="subheading">
                        <h1 class="h2Custom"><span style="color:#B43493">PLATINUM</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.hsbc.com.au/",
                                "div_id"    => "HSBC",
                                "name"      => "HSBC",
                                "image_file"=> "2021/01/hsbc3.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#BCAB35">GOLD</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.reckitt.com/",
                                "div_id"    => "reckitt",
                                "name"      => "reckitt",
                                "image_file"=> "2021/05/Reckitt_2021.svg_.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.franklintempleton.com.au/",
                                "div_id"    => "bcr",
                                "name"      => "Franklin Templeton Investments",
                                "image_file"=> "2021/01/Franklin.jpg",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>

                        <?php
                            $args = array(
                                "site_url"  => "https://www.tmgm.com.au/en",
                                "div_id"    => "TMGM",
                                "name"      => "TMGM",
                                "image_file"=> "2021/05/tmgm.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#A0A0A0">SILVER</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.bain.com/",
                                "div_id"    => "bain",
                                "name"      => "bain",
                                "image_file"=> "2021/01/bain.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.neu.capital/",
                                "div_id"    => "neucapital",
                                "name"      => "Neucapital",
                                "image_file"=> "2021/05/neucapital2-scaled.jpg",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.greenstonepartners.com.au/",
                                "div_id"    => "Greenstone",
                                "name"      => "Greenstone",
                                "image_file"=> "2021/05/greenstonepartners.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#9F6C3F">BRONZE</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://palisadepartners.com.au/",
                                "div_id"    => "palisadepartners",
                                "name"      => "Palisade Partners",
                                "image_file"=> "2022/04/Palisade.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.ampcapital.com/au/en/home",
                                "div_id"    => "AMP",
                                "name"      => "AMP",
                                "image_file"=> "2021/06/Amp-capital-logo.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.flowtraders.com/",
                                "div_id"    => "flowtraders",
                                "name"      => "Flow Traders",
                                "image_file"=> "2021/01/ft.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://nousgroup.com/",
                                "div_id"    => "nous",
                                "name"      => "Nous Group",
                                "image_file"=> "2022/04/nous.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.pacpartners.com.au/",
                                "div_id"    => "pacpartners",
                                "name"      => "PAC Partners",
                                "image_file"=> "2022/04/Pac-1.jpg",
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#553397">MARKETING</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://cfas.org.au/about/cfa-society-sydney/",
                                "div_id"    => "CFA",
                                "name"      => "CFA",
                                "image_file"=> "2021/06/CFA-e1622626128904.jpg",
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                </div>
                <div class="section2 applyContainer">
                    <a name="apply"></a>
                    <div class="title">
                        <h1>APPLY</h1>
                    </div>

                    <a href="mailto:sponsorship@unswfinsoc.org.au">
                        <div class="apply">
                            <button type="button" class="btn btn-outline-primary applyButton">Help sponsor FINSOC by sending us an email at <br/><b>sponsorship@unswfinsoc.org.au</b></button>
                        </div>
                    </a>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>

