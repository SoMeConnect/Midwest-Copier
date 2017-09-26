<!-- HTML5 Header -->
<?php require_once('../parts/header.php'); ?>

<main class="exchange-template-default single single-exchange postid-287 wp-custom-logo post-image-above-header post-image-aligned-center secondary-nav-above-header secondary-nav-aligned-right slideout-enabled slideout-desktop sticky-menu-fade mega-menu-main-home-menu  featured-image-active left-sidebar nav-below-header fluid-header one-container nav-aligned-left header-aligned-left dropdown-click dropdown-click-menu-item">
    <div class="hfeed site grid-container container grid-parent" id="page">
        <div class="site-content" id="content">
            <div class="content-area grid-parent mobile-grid-100 grid-100 tablet-grid-100" id="primary">
                <main class="site-main" id="main">
                    <article class="post-287 exchange type-exchange status-publish has-post-thumbnail hentry" id="post-287" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                        <div class="inside-article">
                            <header class="entry-header">
                                <h1 class="entry-title" itemprop="headline">Request Pickup</h1>
                            </header><!-- .entry-header -->
                            <div class="entry-content" itemprop="text">
                                <p>Please fill out the following information in as much detail as possible to give us an idea of your request. We will contact you for further details.</p>
                                <form id="request-pickup" action="" method="GET">
                                    <div class="input-container grid-container">
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>Company Name*</strong></span>
                                            <input type="text" name="company-name" class="company-name grid-100" required />
                                        </div>
                                        <div class="input-grid grid-30 select">
                                            <span class="input-label"><strong>Make*</strong></span>
                                            <select class="grid-100 materials" name="materials" required>
                                                <option></option>
                                            </select>
                                            <div class="select-arrow"></div>
                                        </div>
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>Quantity*</strong></span>
                                            <input type="text" name="quantity" class="quantity grid-100" required />
                                        </div>
                                    </div>
                                    <div class="input-container grid-container">
                                        <div class="input-grid grid-30 select">
                                            <span class="input-label"><strong>Anticipated Value*</strong></span>
                                            <select class="grid-100 value" name="value" required>
                                                <option></option>
                                            </select>
                                            <div class="select-arrow"></div>
                                        </div>
                                        <div class="input-grid grid-30 select">
                                            <span class="input-label"><strong>Condition*</strong></span>
                                            <select class="grid-100 condition" name="condition" required>
                                                <option></option>
                                            </select>
                                            <div class="select-arrow"></div>
                                        </div>
                                        <div class="input-grid grid-30 date">
                                            <span class="input-label"><strong>Desired Collection Date*</strong></span>
                                            <input type="date" name="date" class="date grid-100" required />
                                        </div>
                                    </div>
                                    <div class="input-container grid-container" style="margin-top:75px;">
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>Contact Name*</strong></span>
                                            <input type="text" name="company-name" class="company-name grid-100" required />
                                        </div>
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>Email Address*</strong></span>
                                            <input type="email" name="email" class="email grid-100" required />
                                        </div>
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>Phone Number*</strong></span>
                                            <input type="phone" name="phone" class="phone grid-100" required />
                                        </div>
                                    </div>
                                    <div class="input-container grid-container">
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>Address*</strong></span>
                                            <input type="address" name="address" class="address grid-100" required />
                                        </div>
                                        <div class="input-grid grid-30 input">
                                            <span class="input-label"><strong>City: *</strong></span>
                                            <input type="text" name="city" class="city grid-100" required />
                                        </div>
                                        <div class="input-grid grid-10 input">
                                            <span class="input-label"><strong>State:*</strong></span>
                                            <input type="text" name="state" class="state grid-100" required />
                                        </div>
                                        <div class="input-grid grid-15 input">
                                            <span class="input-label"><strong>Zip Code:*</strong></span>
                                            <input type="text" name="zip-code" class="zip-code grid-100" required />
                                        </div>
                                    </div>
                                    <a href="#" class="button">Send</a>
                                </form>
                            </div><!-- .entry-content -->
                        </div><!-- .inside-article -->
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- #content -->
    </div>
</main>

<!-- HTML5 Footer -->
<?php require_once('../parts/footer.php'); ?>