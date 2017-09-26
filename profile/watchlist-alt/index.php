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
                                <h1 class="entry-title" itemprop="headline">My Watchlist</h1>
                            </header><!-- .entry-header -->
                            <div class="entry-content" itemprop="text">
                                <p>Use this interface to manage the models in your watchlist. You will be sent an email alert whenever our inventory recieves a model that is in your watchlist. Please note that you can only watch at most 5 models at any given time.</p>
                                <div class="input-container grid-container">
                                    <div class="grid-100 form-container" style="padding-left:0;padding-right:0;">
                                        <table class="machine-list">
                                            <tbody>
                                                <tr class="header">
                                                    <td style="width:25%;">Delete</td>
                                                    <td style="width:25%;">Type</td>
                                                    <td style="width:25%;">Make</td>
                                                    <td style="width:25%;">Location</td>
                                                </tr>
                                                <tr class="listings no-listings visible">
                                                    <td colspan="4" style="background-color:#fff;">There are no models in your watchlist</td>
                                                </tr>
                                                <tr class="listings results-listings hidden">
                                                    <td colspan="4" class="results-container">
                                                        <table class="results-table">
                                                            <tbody>
                                                                <td style="width:25%;"><input type="checkbox" class="listing-checkbox" /></td>
                                                                <td style="width:25%;">Type Result</td>
                                                                <td style="width:25%;">Make Result</td>
                                                                <td style="width:25%;">Location Result</td>
                                                            </tbody>
                                                        </table>
                                                    </td>             
                                                </tr>
                                                <tr class="buttons">
                                                    <td colspan="4" style="text-align:center;background-color:rgba(216,216,216,0.5);">
                                                        <button type="button" class="button delete-machine inactive" style="width:auto;">Delete Selected Machines</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid-100" style="padding-left:0;padding-right:0;">
                                        <div class="input-grid grid-33 select" style="margin-right:0;">
                                            <span class="input-label"><strong>Make:</strong></span>
                                            <select class="grid-100" name="make" tabindex="1" autofocus>
                                                <option></option>
                                            </select>
                                            <div class="select-arrow"></div>
                                        </div>
                                        <div class="input-grid grid-33 select" style="margin-right:0;">
                                            <span class="input-label"><strong>Model:</strong></span>
                                            <select class="grid-100" name="model" tabindex="1" autofocus>
                                                <option></option>
                                            </select>
                                            <div class="select-arrow"></div>
                                        </div>
                                        <div class="input-grid grid-33 select" style="margin-right:0;">
                                            <span class="input-label"><strong>Equipment:</strong></span>
                                            <select class="grid-100" name="equipment" tabindex="1" autofocus>
                                                <option></option>
                                            </select>
                                            <div class="select-arrow"></div>
                                        </div>                                        
                                    </div>
                                </div>
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