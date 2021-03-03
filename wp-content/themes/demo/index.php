<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lumina
 */

get_header();
?>
    <section id="section-content" class="content-section main-background-section with-bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url(/wp-content/themes/demo/images/home-header.png);">
        
        <div class="holder-text h-100 d-flex flex-column justify-content-center align-items-center">
            <?php if(get_field('title')): ?>
                <div class="top-holder">
                    <h1 class="text-dark"><?php echo  the_field('title'); ?></h1>
                </div>
            <?php endif; ?>
            <?php if(get_field('subtitle')): ?>
            <div class="bottom-holder">
                <h5 class="text-dark"><?php echo  the_field('subtitle'); ?></h5>
            </div>
            <?php endif; ?>
        </div>
          
    </section>

    <div class="container-fluid contact-holder">
      
            <div class="row">
                <!-- left side -->
                <div class="left-side col-xl-5 col-md-5 col-lg-5 col-12 py-5">
                
                    <div class="col-xl-5 offset-xl-5 col-lg-9 offset-lg-2 offset-md-1 col-md-8 col-12 pt-3">
                        <div class="title-holder mb-4">
                            <?php if(get_field('contact_left_title')): ?>
                                <h4><?php echo  the_field('contact_left_title'); ?></h4>
                            <?php endif; ?>
                        </div>
                        <?php if(get_field('contact_left_title') && get_field('contact_email') ): ?>
                        <div class="top mb-4">
                            <span class="mb-3 d-block"><?php echo  the_field('contact_number'); ?></span>
                            <a  target="_blank" href="mailto:<?php echo  the_field('contact_email'); ?>"><?php echo  the_field('contact_email'); ?></a>  
                        </div>
                        <?php endif; ?>
                        <hr>

                        <div class="social-holder">
                            <ul class="d-flex px-0 mx-0">
                                <?php if(get_field('facebook_link')): ?>
                                <li class="mr-4">
                                    <a target="_blank" href="<?php echo  the_field('facebook_link'); ?>" class="facebook_link">
                                        <svg width="36px" height="36px" color="#3d5a96" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-facebook-square fa-w-14 fa-9x"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" class=""></path></svg>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_field('twitter_link')): ?>
                                <li class="mr-4">
                                    <a target="_blank" href="<?php echo  the_field('twitter_link'); ?>">
                                        
                                        <svg width="36px" height="36px" color="#5aa7dd" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-twitter-square fa-w-14 fa-9x"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z" class=""></path></svg>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_field('instagram_link')): ?>
                                <li class="mr-4">
                                    <a target="_blank" href="<?php echo  the_field('instagram_link'); ?>">
                                        <svg width="34px" height="34px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132.004 132"><defs><linearGradient id="b"><stop offset="0" stop-color="#3771c8"/><stop stop-color="#3771c8" offset=".128"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient><radialGradient id="c" cx="158.429" cy="578.088" r="65" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)" fx="158.429" fy="578.088"/><radialGradient id="d" cx="147.694" cy="473.455" r="65" xlink:href="#b" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)" fx="147.694" fy="473.455"/></defs><path fill="url(#c)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="url(#d)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="#fff" d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z"/></svg>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_field('pinterest_link')): ?>
                                <li>
                                    <a target="_blank" href="<?php echo  the_field('pinterest_link'); ?>">
                                        <svg aria-hidden="true" width="36px" height="36px" color="#cc1f25" focusable="false" data-prefix="fab" data-icon="pinterest-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-pinterest-square fa-w-14 fa-7x"><path fill="currentColor" d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z" class=""></path></svg>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        
                        </div>
                    
                    </div>

                </div>
                <!-- end left side -->
                <div class="right-side col-xl-7 col-md-7 col-lg-7 col-12 py-5 px-md-4 px-0 ">
                   
                    <div class="form-holder col-xl-8 col-md-12 col-lg-9 col-12 py-3">
                        <?php if(get_field('contact_right_title')): ?>
                            <div class="title-holder mb-4"> 
                                <h4><?php echo  the_field('contact_right_title'); ?></h4>
                            </div>
                        <?php endif; ?>
                        <form class="needs-validation pt-2" id="ajax-contact" type="POST"  novalidate>
                            <div class="form-row mb-3">
                                <div class="col-sm mb-sm-0 mb-3">
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" id="validationCustom01" required>
                                </div>
                                <div class="col-sm">
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-sm mb-sm-0 mb-3">
                                    <input type="email" name="email"  id="validationCustom03" placeholder="E-mail" class="form-control" required>
                                </div>
                                <div class="col-sm">
                                    <input type="text" name="phone"  id="validationCustom04" placeholder="Phone" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="subject" placeholder="Subject" class="form-control" id="validationCustom05" required>
                            </div>

                            <div class="form-group">
                                <textarea name="description" placeholder="Description" id="validationCustom06" class="form-control" cols="30" rows="10" required></textarea>
                            </div>

                            <button class="btn px-5" type="submit">Submit</button>
                        </form>

                        <div class="mt-3" id="form-messages"></div>
                    
                    </div>
                </div>
            </div>
       
    </div>

<?php



get_footer();?>



