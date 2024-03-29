<?php
session_start(); // Assurez-vous d'appeler session_start() au début de votre script PHP pour démarrer la session}
?>




<!-- Auth modal -->
<div id="pb-modal" class="pb-modal">
    <div class="pb-modal-content">
        <span class="pb-close">&times;</span>
        <div id="pb-inscription-form" class="pb-form pb-hidden">
            <h2>Sign up to download</h2>
            <form method="post" action="/?page=add">
                <label for="pb-nom">Nom d'utilisateur:</label>
                <input type="text" id="pb-username" name="username" /><br />
                <!-- <label for="pb-prenom">Prénom:</label>
            <input type="text" id="pb-prenom" name="prenom" /><br /> -->
                <label for="pb-username">Email:</label>
                <input type="email" id="pb-email" name="email" /><br />
                <label for="pb-password">Mot de passe:</label>
                <input type="password" id="pb-password" name="password" /><br />
                <button type="submit">S'inscrire</button>
            </form>
        </div>
        <div id="pb-connexion-form" class="pb-form pb-hidden">
            <h2>Sign in to download</h2>
            <form method="post" action="/?page=login">
                <label for="pb-username">Username:</label>
                <input type="text" id="pb-username" name="username" /><br />
                <label for="pb-password">Mot de passe:</label>
                <input type="password" id="pb-password" name="password" /><br />
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</div>
<div class="pb-main">
    <header class="pb-header pb-flex pb-transparent">
        <div>
            <div class="pb-logo-nav">
                <a href="#" aria-label="Pixabay"><svg viewBox="0 0 120 33" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" class="pb-logoSvg">
                        <path d="M9.059 7.279c4.417-.1 8.564 3.492 9.03 7.897.56 3.872-1.72 7.893-5.287 9.464-2.163 1.073-4.604.743-6.93.798H3.599v7.28H.002c.007-5.617-.014-11.234.01-16.85.12-4.186 3.545-7.932 7.682-8.49.45-.066.91-.1 1.365-.1v.001zm0 14.56c2.596.064 5.03-1.96 5.42-4.533.517-2.588-1.135-5.37-3.66-6.146-2.438-.866-5.372.272-6.564 2.575-.922 1.576-.594 3.434-.656 5.167v2.938h5.46v-.001zM19.826 7.191h3.557v18.16h-3.556V7.19l-.001.001zm14.25 11.42h.13l5.057 6.745h4.41l-6.874-9.34L42.895 7.2h-4.41l-4.28 6.225h-.128l-4.28-6.224h-4.41l6.095 8.818-6.873 9.336h4.41l5.057-6.744z" fill="currentColor" fill-rule="nonzero"></path>
                        <path d="M51.735 7.191c3.603-.07 7.06 2.29 8.394 5.624.694 1.55.683 3.264.66 4.926v7.61c-3.21-.01-6.422.022-9.636-.018-3.688-.18-7.065-2.87-8.12-6.404-.97-3.07-.166-6.635 2.116-8.932 1.703-1.763 4.123-2.827 6.583-2.803l.003-.003zm5.46 14.56c-.015-2.02.033-4.04-.028-6.058-.212-2.705-2.718-4.972-5.432-4.9-2.582-.064-5.015 1.937-5.42 4.492-.472 2.454.937 5.126 3.276 6.04 1.442.628 3.035.367 4.56.423h3.045l-.001.003zM71.628 7.279c4.262-.104 8.245 3.25 8.924 7.445.77 3.98-1.476 8.278-5.182 9.916-3.62 1.71-8.275.607-10.764-2.523-1.542-1.817-2.208-4.235-2.077-6.59V0h3.6v7.28h5.5l-.001-.001zm0 14.56c2.733.073 5.23-2.223 5.433-4.942.34-2.702-1.662-5.42-4.337-5.912-1.48-.204-2.982-.065-4.472-.11h-2.124c.022 2.054-.05 4.11.042 6.158.286 2.71 2.735 4.856 5.46 4.8l-.002.006zM91.13 7.191c3.604-.07 7.06 2.29 8.394 5.624.696 1.55.686 3.264.664 4.926v7.61c-3.21-.01-6.424.022-9.636-.018-3.69-.18-7.067-2.87-8.124-6.404-.97-3.07-.165-6.635 2.117-8.932 1.702-1.762 4.122-2.826 6.582-2.803l.003-.003zm5.46 14.56c-.016-2.02.032-4.04-.027-6.058-.208-2.705-2.715-4.972-5.43-4.9-2.58-.064-5.014 1.937-5.417 4.492-.474 2.454.936 5.126 3.274 6.04 1.44.628 3.033.367 4.556.423h3.045l-.001.003zm23.407-14.517c-.007 5.605.015 11.208-.01 16.81-.13 4.41-3.922 8.374-8.345 8.604-.84.044-1.682.016-2.523.022v-3.598c1.536-.007 3.178.15 4.537-.72 1.7-.955 2.78-2.878 2.743-4.822-3.19 2.574-8.136 2.44-11.238-.214-2.262-1.825-3.497-4.76-3.323-7.65v-8.43h3.6c.016 3.205-.034 6.413.026 9.617.195 2.587 2.46 4.797 5.055 4.926 2.674.276 5.306-1.74 5.77-4.383.203-1.48.067-2.984.108-4.476V7.239h3.6v-.005z" fill="currentColor" fill-rule="nonzero"></path>
                    </svg>
                    <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg" class="pb-logoMarkSvg">
                        <rect width="40" height="40" rx="3.333" fill="#fff"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.723 19.734l3.991 5.107h4.398l-6.517-8.02 5.965-7.655h-4.136l-3.657 4.787-3.28-4.787h-4.165l5.486 7.655-5.965 8.02h4.296l3.584-5.107zm-15.81-10.56c-2.198.055-4.025.817-5.48 2.285-1.456 1.467-2.211 3.31-2.266 5.528v14.126h3.078v-6.278h4.669c2.2-.057 4.033-.824 5.499-2.302 1.465-1.478 2.226-3.327 2.282-5.546-.056-2.218-.817-4.06-2.282-5.528-1.466-1.468-3.299-2.23-5.5-2.285zM7.246 21.73v-4.743c.032-1.34.486-2.452 1.362-3.335.875-.883 1.978-1.34 3.307-1.374 1.346.033 2.458.49 3.337 1.374.88.883 1.335 1.994 1.366 3.335-.031 1.357-.487 2.48-1.366 3.366-.879.886-1.991 1.345-3.337 1.377H7.245z" fill="#191B26"></path>
                    </svg>
                </a>
            </div>
            <nav class="pb-nav">
                <a href="#" class="pb-nav-link pb-button pb-flex-inline pb-button-tertiary pb-display-none">Parcourir <i class="fa-solid fa-angle-down pb-ms-1"></i></a>
                <a href="#" class="pb-connexion-btn pb-nav-link pb-button pb-flex-inline pb-button-tertiary"><?php if (isset($_SESSION['username'])) {
                                                                                                                    echo $_SESSION['username'];
                                                                                                                } else {
                                                                                                                    echo "Connexion";
                                                                                                                } ?></a>
                <a href="<?php if (isset($_SESSION['username'])) {
                                echo '?page=logout';
                            } else echo "#" ?>" class="pb-inscription-btn pb-nav-link pb-button pb-flex-inline pb-button-secondary pb-me-1"><?php if (isset($_SESSION['username'])) {
                                                                                                                                                echo 'Deconnexion';
                                                                                                                                            } else echo "Rejoindre" ?></a>
                <a href="#" class="pb-nav-link pb-button pb-flex-inline pb-button-primary pb-display-none">
                    <i class="fa fa-download pb-me-1" aria-hidden="true"></i>
                    Télécharger
                </a>
            </nav>
        </div>
    </header>

    <div class="pb-container-hero">
        <div class="pb-background-hero">
            <picture>
                <source srcset="assets/images/01-31-15-118_1920x550.webp" media="(min-width: 1440px)" />
                <source srcset="assets/images/01-31-15-118_640.webp" media="(max-width: 640px)" />
                <img src="assets/images/01-31-15-118_1440x550.webp" class="pb-imageBanner" alt="Free mixed hero backgrounds" />
            </picture>
        </div>
        <div class="pb-overlay-hero"></div>
        <div class="pb-content-hero pb-flex">
            <div class="pb-wrapper-hero">
                <h1>Images libres de droits & gratuites à télécharger</h1>
                <h2>
                    Découvrez plus d'un million d'images gratuites et de haute
                    qualitées partagées par notre talentueuse communauté.
                </h2>
                <div class="pb-container-content pb-standard-content pb-padded-content pb-heroSearch-content">
                    <form class="pb-searchForm-hero" action="" method="get">
                        <button class="pb-submit-hero" type="submit" aria-label="Rechercher dans toutes les images sur Pixabay">
                            <i class="fa-solid fa-magnifying-glass pb-icon search--+Zx4F"></i>
                        </button>
                        <input type="search" name="search" placeholder="Rechercher dans toutes les images sur Pixabay" value="" />
                    </form>
                    <div class="pb-container-dropdown">
                        <div class="">
                            <button class="pb-mediaTypeDropdown pb-button pb-button-light" type="button">
                                <span class="pb-label-600">Toutes les photos</span><span class="pb-icon"></span>
                            </button>
                        </div>
                        <div class="pb-dropdown pb-hidden">
                            <div class="pb-dropdownMenu">
                                <div class="pb-dropdownMenuItem pb-active">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Toutes les photos</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Photos</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Illustrations</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Vecteurs</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Vidéos</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Musique</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Effets sonores</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>GIFs</label>
                                </div>
                                <div class="pb-dropdownMenuItem">
                                    <div class="pb-icon">
                                        <span class="pb-icon"></span>
                                    </div>
                                    <label>Utilisateurs</label>
                                </div>
                                <div class="pb-separator-100"></div>
                                <a class="pb-dropdownMenuItem" href="#"><label>Options de recherche</label></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-container-main pb-pt-3">
        <div class="pb-menu pb-flex pb-display-none">
            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b pb-active"><i class="fa-solid fa-house pb-icon"></i> Home</a>
            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-solid fa-camera pb-icon"></i>Photos</a>
            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-solid fa-pen pb-icon pb-icon"></i>Illustrations</a>
            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-solid fa-bezier-curve pb-icon"></i>Vecteurs</a>

            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-solid fa-video pb-icon"></i>Vidéos</a>
            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-solid fa-music pb-icon"></i>Musique</a>

            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-brands fa-soundcloud pb-icon"></i>Effets sonores</a>
            <a href="" class="pb-button pb-flex-inline pb-button-tertiary-b"><i class="fa-solid fa-gift pb-icon"></i>GIFs</a>
        </div>
        <div class="pb-flex pb-tag pb-w-100 pb-flex-space-between pb-m-y-4 pb-display-none">
            <div class="pb-tag pb-flex pb-mt-2">
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
                <a href="" class="pb-button-soft pb-flex-inline pb-button-outline-dark pb-y-2">nature</a>
            </div>
            <div class="pb-sort pb-tag-border">
                <button class="pb-button-soft pb-button-outline-dark pb-btn-rounded">
                    Coups de cœur de la rédaction
                </button>
            </div>
        </div>
        <!-- pb image display -->
        <div class="pb-container-more">
            <div class="pb-row pb-w-100">
                <div class="pb-column">
                    <img src="assets/images/img1.jpg" />
                    <img src="assets/images/img2.jpg" />
                    <img src="assets/images/img9.jpg" />
                </div>
                <div class="pb-column">
                    <img src="assets/images/img3.jpg" />
                    <img src="assets/images/img4.jpg" />
                    <img src="assets/images/img10.jpg" />
                </div>
                <div class="pb-column">
                    <img src="assets/images/img5.jpg" />
                    <img src="assets/images/img6.jpg" />
                    <img src="assets/images/img11.jpg" />
                </div>
                <div class="pb-column">
                    <img src="assets/images/img7.jpg" />
                    <img src="assets/images/img8.jpg" />
                    <img src="assets/images/img12.jpg" />
                </div>
            </div>
            <div class="pb-more-btn">
                <a class="pb-more-button pb-button-base pb-secondary-button-more pb-more-base pb-light-more" href="#">
                    <span class="pb-more-label">Découvrez plus</span></a>
            </div>
        </div>
        <!-- pb text -->
        <div class="pb-description">
            <div class="pb-icon-desc">
                <i class="fa-solid fa-heart"></i>
            </div>
            <div class="pb-desc-items">
                <p class="pb-desc-title">
                    Des fichiers multimédias gratuits à utiliser partout
                </p>
                <p class="pb-desc-text">
                    Pixabay is a vibrant community of creatives, sharing royalty-free
                    images, videos, audio and other media. All content is released by
                    Pixabay under the Content License, which makes it safe to use
                    without asking for permission or giving credit to the artist -
                    even for certain commercial purposes.
                </p>
                <a href="#" class="pb-desc-more">
                    En savoir plus sur notre licence
                </a>
            </div>
        </div>

        <!-- pb footer -->
        <footer class="pb-footer">
            <div class="pb-footer-content">
                <div class="pb-footer-main">
                    <svg viewBox="0 0 120 33" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" class="pb-logo-footer">
                        <path d="M9.059 7.279c4.417-.1 8.564 3.492 9.03 7.897.56 3.872-1.72 7.893-5.287 9.464-2.163 1.073-4.604.743-6.93.798H3.599v7.28H.002c.007-5.617-.014-11.234.01-16.85.12-4.186 3.545-7.932 7.682-8.49.45-.066.91-.1 1.365-.1v.001zm0 14.56c2.596.064 5.03-1.96 5.42-4.533.517-2.588-1.135-5.37-3.66-6.146-2.438-.866-5.372.272-6.564 2.575-.922 1.576-.594 3.434-.656 5.167v2.938h5.46v-.001zM19.826 7.191h3.557v18.16h-3.556V7.19l-.001.001zm14.25 11.42h.13l5.057 6.745h4.41l-6.874-9.34L42.895 7.2h-4.41l-4.28 6.225h-.128l-4.28-6.224h-4.41l6.095 8.818-6.873 9.336h4.41l5.057-6.744z" fill="currentColor" fill-rule="nonzero"></path>
                        <path d="M51.735 7.191c3.603-.07 7.06 2.29 8.394 5.624.694 1.55.683 3.264.66 4.926v7.61c-3.21-.01-6.422.022-9.636-.018-3.688-.18-7.065-2.87-8.12-6.404-.97-3.07-.166-6.635 2.116-8.932 1.703-1.763 4.123-2.827 6.583-2.803l.003-.003zm5.46 14.56c-.015-2.02.033-4.04-.028-6.058-.212-2.705-2.718-4.972-5.432-4.9-2.582-.064-5.015 1.937-5.42 4.492-.472 2.454.937 5.126 3.276 6.04 1.442.628 3.035.367 4.56.423h3.045l-.001.003zM71.628 7.279c4.262-.104 8.245 3.25 8.924 7.445.77 3.98-1.476 8.278-5.182 9.916-3.62 1.71-8.275.607-10.764-2.523-1.542-1.817-2.208-4.235-2.077-6.59V0h3.6v7.28h5.5l-.001-.001zm0 14.56c2.733.073 5.23-2.223 5.433-4.942.34-2.702-1.662-5.42-4.337-5.912-1.48-.204-2.982-.065-4.472-.11h-2.124c.022 2.054-.05 4.11.042 6.158.286 2.71 2.735 4.856 5.46 4.8l-.002.006zM91.13 7.191c3.604-.07 7.06 2.29 8.394 5.624.696 1.55.686 3.264.664 4.926v7.61c-3.21-.01-6.424.022-9.636-.018-3.69-.18-7.067-2.87-8.124-6.404-.97-3.07-.165-6.635 2.117-8.932 1.702-1.762 4.122-2.826 6.582-2.803l.003-.003zm5.46 14.56c-.016-2.02.032-4.04-.027-6.058-.208-2.705-2.715-4.972-5.43-4.9-2.58-.064-5.014 1.937-5.417 4.492-.474 2.454.936 5.126 3.274 6.04 1.44.628 3.033.367 4.556.423h3.045l-.001.003zm23.407-14.517c-.007 5.605.015 11.208-.01 16.81-.13 4.41-3.922 8.374-8.345 8.604-.84.044-1.682.016-2.523.022v-3.598c1.536-.007 3.178.15 4.537-.72 1.7-.955 2.78-2.878 2.743-4.822-3.19 2.574-8.136 2.44-11.238-.214-2.262-1.825-3.497-4.76-3.323-7.65v-8.43h3.6c.016 3.205-.034 6.413.026 9.617.195 2.587 2.46 4.797 5.055 4.926 2.674.276 5.306-1.74 5.77-4.383.203-1.48.067-2.984.108-4.476V7.239h3.6v-.005z" fill="currentColor" fill-rule="nonzero"></path>
                    </svg>
                    <div class="pb-footer-text">
                        Découvrez plus de 3.1 million d'images gratuites et de haute
                        qualité partagées par notre talentueuse communauté.
                    </div>
                    <div class="pb-footer-socials">
                        <a href="https://www.instagram.com/pixabay/" aria-label="Instagram" target="_blank">
                            <i class="fa-brands fa-instagram pb-social-icon"></i>
                        </a>
                        <a href="http://www.pinterest.com.au/pixabay" aria-label="Pinterest" target="_blank">
                            <i class="fa-brands fa-pinterest pb-social-icon"></i>
                        </a>
                        <a href="https://twitter.com/pixabay" aria-label="Twitter" target="_blank">
                            <i class="fa-brands fa-twitter pb-social-icon"></i>
                        </a>
                        <a href="https://www.facebook.com/pixabay" target="_blank">
                            <i class="fa-brands fa-facebook pb-social-icon"></i>
                        </a>
                    </div>
                </div>
                <div class="pb-footer-links">
                    <div class="pb-links-categories">
                        <span class="pb-footer-title-link">Découvrir</span>
                        <a href="#">Coups de cœur de la rédaction</a>
                        <a href="#">Collections sélectionnées</a>
                        <a href="#">Images populaires</a>
                        <a href="#">Vidéos populaires</a>
                        <a href="#">Morceaux populaires</a>
                        <a href="#">Recherches populaires</a>
                    </div>
                    <div class="pb-links-categories">
                        <span class="pb-footer-title-link">Communauté</span>
                        <a href="#">Blog</a> <a href="#">Forum</a>
                        <a href="#">Créateurs</a>
                        <a href="#">Appareils photo</a>
                    </div>
                    <div class="pb-links-categories">
                        <span class="pb-footer-title-link">À propos</span>
                        <a href="#">Mentions légales</a><a href="#">FAQ</a>
                        <a href="#">Résumé de la licence</a>
                        <a href="#">Conditions d'utilisation</a>
                        <a href="#">Politique de confidentialité</a>
                        <a href="#">Politique de cookies</a><a href="#">API</a>
                    </div>
                </div>
            </div>
            <div class="pb-footer-captcha">
                This site is protected by reCAPTCHA and the Google&nbsp;<a target="_blank" href="https://policies.google.com/privacy">Privacy Policy</a>&nbsp;and&nbsp;<a target="_blank" href="https://policies.google.com/terms">Terms of Service</a>&nbsp;apply.
            </div>
        </footer>
    </div>
</div>