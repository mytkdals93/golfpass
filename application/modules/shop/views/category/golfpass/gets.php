

        <link rel="canonical" href="https://www.mrandmrssmith.com/luxury-villas" />
        <link rel="preload" href="/public/etc/hotel/bundles/familysystem/fonts/proximanova-regular-webfont.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/public/etc/hotel/bundles/familysystem/fonts/proximanova-semibold-webfont.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/public/etc/hotel/bundles/familysystem/fonts/proximanova-light-webfont.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/public/etc/hotel/bundles/familysystem/fonts/proximanova-lightit-webfont.woff2" as="font" type="font/woff2" crossorigin>
        <!-- <link rel="stylesheet" type="text/css" href="/public/etc/hotel/css/css2.css" /> -->
        <link rel="dns-prefetch" href="https://cdn.polyfill.io">
        <link rel="dns-prefetch" href="https://code.jquery.com">
        <link rel="stylesheet" type="text/css" href="/public/etc/hotel/css/collectionbundle/css.css" />
        <link rel="stylesheet" type="text/css" href="/public/etc/hotel/css/SystemBundle/css.css" />

        <noscript>
            <style type="text/css">
                #s_query, #s > div:nth-child(2), #s > div:nth-child(3) {
                    visibility: visible;
                }
            </style>
        </noscript>

        <script type="text/javascript">
            document.documentElement.className = document.documentElement.className.replace("no-js","js");
            dataLayer = [];
            dataLayer.push({'users_current_region' : 'ASIAPAC'});
            dataLayer.push({'current_region' : 'ASIAPAC'});
            SP = {
                env : {
                    payload          : 'https://smithcollections.com/member-json',
                    member_homepage  : 'https://smithcollections.com/members',
                    assets_version   : 'v6b09cfdb4e5',
                    date_format      : 'dd-mm-yyyy',
                    telephone_number : '+61 3 8648 8871',
                    site_inc_tax     : '',
                    locale           : 'ASIAPAC'
                    ,
                    l                : true
                }
            };
            dataLayer.push({
                pageDetails: {
                    uri: '/luxury-villas'
                }
            });
            dataLayer.push({
                user : {
                    name: false,
                    sex: false,
                    age: 'Not specfied by user',
                    loyaltyAmount: false,
                    memberTier: false,
                    membershipLevel: false,
                    loggedIn: false,
                    firstname: false,
                    lastname: false,
                    reference: false,
                    ipAddress: "211.107.64.99"
                },
                env: {
                    envName: 'prod'
                }
            });
        </script>
        <!-- Maxymiser script start -->
        <script type="text/javascript" src="/public/etc/hotel/api/eu/mmapi.js"></script>
        <!-- Maxymiser script end -->
        <!-- Google Tag Manager -->
        <noscript>
            <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WR4HD5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer', 'GTM-WR4HD5');
        </script>
        <!-- End Google Tag Manager -->
        <div id="main-section">
            <main role="main" class="global">
                <div id="honeymoon-hub">
                    <div class="category_row">
                        <ul id="honeymoon-hub-blocks" class="generic-content imageboxes-list">
                            <?php for($i=0; $i<count($categories2); $i++){?>
                            <li class="S-4_4 M-12_12 L-6_12 XL-6_12 XXL-6_12">
                                
                             
                                <a href="<?=site_url(shop_product_uri."/gets/{$categories2[$i]->id}")?>">
                                   <div class="position-relative rounded-top" style="background-image:url(<?=$categories2[$i]->photo2?>); background-repeat:no-repeat; background-position:center; background-size:cover">
                                    <img src="/public/images/blank2.png" alt=""/>
                                    </div>
                                    <div>
                                        <div>
                                            <h3 style="font-family: 'notokr-medium', sans-serif; font-size: 30px; text-shadow: 0 0 7px black;">
                                            <?=$categories2[$i]->name?>
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <?php echo $this->pagination->create_links(); ?>                                
             
            </main>
        </div>
        <script src='jquery-2.2.4.min.js' defer></script>
        <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.1.0/react.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.1.0/react-dom.js'></script> -->
        <script src="/public/etc/hotel/v2/polyfill.js" defer></script>
        <script src="/public/etc/hotel/js/5bbac5b4.36.vendor.js" defer></script>
        <script src="/public/etc/hotel/js/75ef551b.10.common.js" defer></script>
        <script type="text/javascript" src="/public/etc/hotel/js/03dd1b62.26.generic.js" defer></script>