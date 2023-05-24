<?php

/**
 * Template Name: About Us Page
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

<main id="content">
    <div class="container text-centre">
        <h1>Executives</h1>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/James-Layland-scaled.jpg",
                        "person_name"       => "James Layland",
                        "person_position"   => "Co-President",
                        "mailto_address"    => "president@unswfinsoc.org.au",
                        "linkedin_url"    => "https://www.linkedin.com/in/james-layland/",
                        "DegreeYear"        => "Bachelor of Commerce/Economics - 4th year",
                        "drives"            => ""
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Salena-Bhalerao-scaled.jpg",
                        "person_name"       => "Salena Bhalerao",
                        "person_position"   => "Co-President",
                        "mailto_address"    => "president@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/salena-bhalerao/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Law - 4th year",
                        "drives"            => "I am currently working in Investment Banking as an intern and love travel, golf and trying different food." 
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Warren-O-scaled.jpg",
                        "person_name"       => "Warren O",
                        "person_position"   => "Vice President (Activities)",
                        "mailto_address"    => "socials@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/warren-o-9448091a5/",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 3rd year",
                        "drives"            => "Unchain the rage with this D-Sturb bass"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/Matthew-Chen.jpeg",
                        "person_name"       => "Matthew Chen",
                        "person_position"   => "Vice President (Externals)",
                        "mailto_address"    => "externals@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/matthew-g-chen/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Information Systems - 4th year",
                        "drives"            => ""
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/Avaneesh-Shrestha-1.jpg",
                        "person_name"       => "Avaneesh Shrestha",
                        "person_position"   => "Vice President (Externals)",
                        "mailto_address"    => "externals@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/avaneesh-shrestha-25331019b",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Information Systems - 4th year",
                        "drives"            => "I might have ADHD"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Oliver-Ryan-scaled.jpg",
                        "person_name"       => "Oliver Ryan",
                        "person_position"   => "Vice President (Operations)",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/oliver-n-ryan/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Law - 4th year",
                        "drives"            => "Join finsoc!"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Galen-Yuan-scaled.jpg",
                        "person_name"       => "Galen Yuan",
                        "person_position"   => "General Secretary",
                        "mailto_address"    => "secretary@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/galen-yuan/",
                        "DegreeYear"        => "Bachelor of Commerce/Computer Engineering - 3rd year",
                        "drives"            => "Gym"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2022/03/DSC02141-scaled-e1648188696168.jpg",
                        "person_name"       => "Queenie Lee",
                        "person_position"   => "Chairperson",
                        "mailto_address"    => "secretary@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/queeniecyli/",
                        "DegreeYear"        => "Bachelor of Commerce (Fintech)/Information Systems - 4th year",
                        "drives"            => "I trust in myself to achieve what I want to achieve"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1>Activities</h1>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Daisy-Liu-scaled.jpg",
                        "person_name"       => "Daisy Liu",
                        "person_position"   => "HR Director",
                        "mailto_address"    => "hr@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/daisy-liu4",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 2nd year",
                        "drives"            => "My record screen time for Linkedin is 6 hours"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Andy-Lin-scaled.jpg",
                        "person_name"       => "Andy Lin",
                        "person_position"   => "HR Director",
                        "mailto_address"    => "hr@unswfinsoc.org.au",
                        "linkedin_url"      => "",
                        "DegreeYear"        => "Bachelor of Comupter Science - 3rd year",
                        "drives"            => "I like kfc"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Jordan-Li.jpg",
                        "person_name"       => "Jordan Li",
                        "person_position"   => "Social Director",
                        "mailto_address"    => "socials@unswfinsoc.org.au",
                        "linkedin_url"      => "",
                        "DegreeYear"        => "Bachelor of Psychology (Honours) - 3rd year",
                        "drives"            => "dab dab dab"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Jessica-Wiraatmadja-scaled.jpg",
                        "person_name"       => "Jessica Wiraatmadja",
                        "person_position"   => "Social Director",
                        "mailto_address"    => "socials@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jessica-wiraatmadja-b0313b237",
                        "DegreeYear"        => "Bachelor of Commerce/Law - 2nd year",
                        "drives"            => "I love malatang but have never finished an order of it because I always overestimate how much I can eat."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Jayson-Chrishna-scaled.jpg",
                        "person_name"       => "Jayson Chrishna",
                        "person_position"   => "Social Director",
                        "mailto_address"    => "socials@unswfinsoc.org.au",
                        "linkedin_url"      => "linkedin.com/in/jaysonchrishna",
                        "DegreeYear"        => "Bachelors of Commerce (Finance and Accounting - 2nd year",
                        "drives"            => "I enjoy watching movies and TV shows, lounging around, and contemplating life"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1>Externals</h1>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Lucia-Zou-scaled.jpg",
                        "person_name"       => "Lucia Zou",
                        "person_position"   => "Education Director",
                        "mailto_address"    => "education@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/lucia-zou",
                        "DegreeYear"        => "Bachelor of Commerce/Law - 2nd year",
                        "drives"            => "Hi I’m Lucia! Fun facts: I’m a Kiwi, I’m a ESTJ and PILATES IS LIFE!"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Wendy-Lee-scaled.jpg",
                        "person_name"       => "Wendy Lee",
                        "person_position"   => "Education Director",
                        "mailto_address"    => "education@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/wendy-lee-80612b20a/",
                        "DegreeYear"        => "Bachelor of Commerce/Law - 3rd year",
                        "drives"            => "Driven and motivated student, curious about all aspects finance and law. I am an avid BTS 
                                                fan who enjoys watching vlog content, and going on walks!"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Eugene-Kang.jpg",
                        "person_name"       => "Eugene Kang",
                        "person_position"   => "Education Director",
                        "mailto_address"    => "education@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/eugene-kang-536786188/",
                        "DegreeYear"        => "Bachelor of Commerce/Advanced Maths - 4th year",
                        "drives"            => "I love snowsports"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Anthony-Saracsmo-Gerdes-scaled.jpg",
                        "person_name"       => "Anthony Sarcasmo Gerdes",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorship@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-sarcasmo-gerdes-28b58a13a",
                        "DegreeYear"        => "Bachelor of Commerce/Engineering - 4th year",
                        "drives"            => "I've scubaed with sharks, studied with scholars and sailed with seafarers"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/Ariana-Lai-scaled.jpg",
                        "person_name"       => "Ariana Lai",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorship@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/ariana-lai",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Law - 2nd year",
                        "drives"            => "I’m your classic commerce law student who loves to start off her day with 
                                                some weetbix, happy beats and an iced oat latte"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/blank-pfp.webp",
                        "person_name"       => "Patrick Moore",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorship@unswfinsoc.org.au",
                        "linkedin_url"      => "hhttps://www.linkedin.com/in/patrick-e-moore/",
                        "DegreeYear"        => "Bachelor of Engineering (Software)/Science (Advanced Maths) - 2nd year",
                        "drives"            => ""
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/Frankie-Zhong.jpeg",
                        "person_name"       => "Frankie Zhong",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorship@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/frankie-zhong/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Science (Statistics) - 3rd year",
                        "drives"            => ""
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Christian-Gattellari-scaled.jpg",
                        "person_name"       => "Christian Gattellari",
                        "person_position"   => "Research Director",
                        "mailto_address"    => "education@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/christian-gattellari-7252b420b/",
                        "DegreeYear"        => "Bachelor of Economics (Finance and Financial Econometrics) - 3rd year",
                        "drives"            => ""
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Clarissa-Ong-1-scaled.jpg",
                        "person_name"       => "Clarissa Ong",
                        "person_position"   => "Research Director",
                        "mailto_address"    => "education@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/clarissa-ong/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Information Systems - 2nd year",
                        "drives"            => "Pro: loves trying new foods.
                                                Con: will steal your food."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Arnav-Narula.jpeg",
                        "person_name"       => "Arnav Narula",
                        "person_position"   => "Research Director",
                        "mailto_address"    => "education@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/arnavnarula/",
                        "DegreeYear"        => "Bachelor of Commerce/Software Engineering - 2nd year",
                        "drives"            => "Keen to continue learning and making a difference in society."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1>Operations</h1>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Vivian-Zhao-scaled.jpg",
                        "person_name"       => "Vivian Zhao",
                        "person_position"   => "Marketing Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/vivian-zhao-44bba3214",
                        "DegreeYear"        => "Bachelor of Commerce/Media - 4th year",
                        "drives"            => "My favourite pastime is discovering new music 🎶"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Raymond-Lee-scaled.jpg",
                        "person_name"       => "Raymond Lee",
                        "person_position"   => "Marketing Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/mwlite/in/raymond-lee-01955b203",
                        "DegreeYear"        => "Bachelor of Politics, Philosophy and Economics/Law - 2nd year",
                        "drives"            => "Enjoying the journey is half the fun"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Melody-Sze.jpg",
                        "person_name"       => "Melody Sze",
                        "person_position"   => "Marketing Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/melody-sze-523130228/",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 3rd year",
                        "drives"            => "My hobbies include running, cooking and sleeping"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Justin-Nelson-2-scaled.jpg",
                        "person_name"       => "Justin Nelson",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/justin-nelson-61991b20a/",
                        "DegreeYear"        => "Bachelor of Actuarial Studies/Economics - 3rd year",
                        "drives"            => "Enjoy exploring nature and learning something new."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/blank-pfp.webp",
                        "person_name"       => "Senara Kumara-Devage",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/senarajkd/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance and Fintech)/Information Systems - 3rd year",
                        "drives"            => ""
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Yasiru-Jayasekara-scaled.jpg",
                        "person_name"       => "Yasiru Jayasekara",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/yasiru-jayasekara/",
                        "DegreeYear"        => "Bachelor of Actuarial Studies/Commerce - 2nd year",
                        "drives"            => "Excited to challenge myself and drive meaningful change."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/03/Tiffany-Cheung-scaled.jpg",
                        "person_name"       => "Tiffany Cheung",
                        "person_position"   => "IT Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/tiffany-cheung-a20bb7213/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Information Systems - 4th year",
                        "drives"            => "Frozen yoghurt > ice cream"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2023/05/Brian-Nhan-scaled.jpg",
                        "person_name"       => "Brian Nhan",
                        "person_position"   => "IT Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/briannhan/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Computer Science - 2nd year",
                        "drives"            => "Coconut water on top"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>
