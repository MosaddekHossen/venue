<?php if (is_active_sidebar('footer-sidebar-1') or is_active_sidebar('footer-sidebar-2') or is_active_sidebar('footer-sidebar-3')) : ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <?php dynamic_sidebar('footer-sidebar-1'); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-sidebar-2'); ?>
                    <?php // venue_menu2(); 
                    ?>
                    <!-- <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-stop"></i>Help FAQs</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-stop"></i>Register</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-stop"></i>Login</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-stop"></i>My Profile</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-stop"></i>How It Works?</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-stop"></i>More About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer-sidebar-3'); ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<div class="sub-footer">
    <?php venue_copyright_option(); ?>
</div>