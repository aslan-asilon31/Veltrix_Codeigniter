<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?= lang('Files.Main') ?></li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">2</span>
                        <span><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>

                <li>
                    <a href="calendar" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span><?= lang('Files.Calendar') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span><?= lang('Files.Email') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox"><?= lang('Files.Inbox') ?></a></li>
                        <li><a href="email-read"><?= lang('Files.Email_Read') ?></a></li>
                        <li><a href="email-compose"><?= lang('Files.Email_Compose') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Components') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-package"></i>
                        <span><?= lang('Files.UI_Elements') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= lang('Files.Alerts') ?></a></li>
                        <li><a href="ui-buttons"><?= lang('Files.Buttons') ?></a></li>
                        <li><a href="ui-cards"><?= lang('Files.Cards') ?></a></li>
                        <li><a href="ui-carousel"><?= lang('Files.Carousel') ?></a></li>
                        <li><a href="ui-dropdowns"><?= lang('Files.Dropdowns') ?></a></li>
                        <li><a href="ui-grid"><?= lang('Files.Grid') ?></a></li>
                        <li><a href="ui-images"><?= lang('Files.Images') ?></a></li>
                        <li><a href="ui-lightbox"><?= lang('Files.Lightbox') ?></a></li>
                        <li><a href="ui-modals"><?= lang('Files.Modals') ?></a></li>
                        <li><a href="ui-rangeslider"><?= lang('Files.Range_Slider') ?></a></li>
                        <li><a href="ui-session-timeout"><?= lang('Files.Session_Timeout') ?></a></li>
                        <li><a href="ui-progressbars"><?= lang('Files.Progress_Bars') ?></a></li>
                        <li><a href="ui-sweet-alert"><?= lang('Files.SweetAlert_2') ?></a></li>
                        <li><a href="ui-tabs-accordions"><?= lang('Files.Tabs_and_Accordions') ?></a></li>
                        <li><a href="ui-typography"><?= lang('Files.Typography') ?></a></li>
                        <li><a href="ui-video"><?= lang('Files.Video') ?></a></li>
                        <li><a href="ui-general"><?= lang('Files.General') ?></a></li>
                        <li><a href="ui-colors"><?= lang('Files.Colors') ?></a></li>
                        <li><a href="ui-rating"><?= lang('Files.Rating') ?></a></li>
                        <li><a href="ui-utilities"><?= lang('Files.Utilities') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span class="badge rounded-pill bg-success float-end">6</span>
                        <span><?= lang('Files.Forms') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements"><?= lang('Files.Form_Elements') ?></a></li>
                        <li><a href="form-validation"><?= lang('Files.Form_Validation') ?></a></li>
                        <li><a href="form-advanced"><?= lang('Files.Form_Advanced') ?></a></li>
                        <li><a href="form-editors"><?= lang('Files.Form_Editors') ?></a></li>
                        <li><a href="form-uploads"><?= lang('Files.Form_File_Upload') ?></a></li>
                        <li><a href="form-repeater"><?= lang('Files.Form_Repeater') ?></a></li>
                        <li><a href="form-wizard"><?= lang('Files.Form_Wizard') ?></a></li>
                        <li><a href="form-mask"><?= lang('Files.Form_Mask') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span><?= lang('Files.Charts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-morris"><?= lang('Files.Morris_Chart') ?></a></li>
                        <li><a href="charts-chartist"><?= lang('Files.Chartist_Chart') ?></a></li>
                        <li><a href="charts-chartjs"><?= lang('Files.Chartjs_Chart') ?></a></li>
                        <li><a href="charts-flot"><?= lang('Files.Flot_Chart') ?></a></li>
                        <li><a href="charts-knob"><?= lang('Files.Jquery_Knob_Chart') ?></a></li>
                        <li><a href="charts-sparkline"><?= lang('Files.Sparkline_Chart') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-view-grid"></i>
                        <span><?= lang('Files.Tables') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic"><?= lang('Files.Basic_Tables') ?></a></li>
                        <li><a href="tables-datatable"><?= lang('Files.Data_Table') ?></a></li>
                        <li><a href="tables-responsive"><?= lang('Files.Responsive_Table') ?></a></li>
                        <li><a href="tables-editable"><?= lang('Files.Editable_Table') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-face-smile"></i>
                        <span><?= lang('Files.Icons') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-material"><?= lang('Files.Material_Design') ?></a></li>
                        <li><a href="icons-fontawesome"><?= lang('Files.Font_Awesome') ?></a></li>
                        <li><a href="icons-ion"><?= lang('Files.Ion_Icons') ?></a></li>
                        <li><a href="icons-themify"><?= lang('Files.Themify_Icons') ?></a></li>
                        <li><a href="icons-dripicons"><?= lang('Files.Dripicons') ?></a></li>
                        <li><a href="icons-typicons"><?= lang('Files.Typicons_Icons') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-location-pin"></i>
                        <span class="badge rounded-pill bg-danger float-end">2</span>
                        <span><?= lang('Files.Maps') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google"> <?= lang('Files.Google_Map') ?></a></li>
                        <li><a href="maps-vector"> <?= lang('Files.Vector_Map') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Extras') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-layout"></i>
                        <span><?= lang('Files.Layouts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Vertical') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar"><?= lang('Files.Light_Sidebar') ?></a></li>
                                <li><a href="layouts-compact-sidebar"><?= lang('Files.Compact_Sidebar') ?></a></li>
                                <li><a href="layouts-icon-sidebar"><?= lang('Files.Icon_Sidebar') ?></a></li>
                                <li><a href="layouts-boxed"><?= lang('Files.Boxed_Layout') ?></a></li>
                                <li><a href="layouts-colored-sidebar"><?= lang('Files.Colored_Sidebar') ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Horizontal') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal"><?= lang('Files.Horizontal') ?></a></li>
                                <li><a href="layouts-hori-topbar-light"><?= lang('Files.Light_Topbar') ?></a></li>
                                <li><a href="layouts-hori-boxed"><?= lang('Files.Boxed_Layout') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> <?= lang('Files.Authentication') ?> </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login"><?= lang('Files.Login_1') ?></a></li>
                        <li><a href="pages-login-2"><?= lang('Files.Login_2') ?></a></li>
                        <li><a href="pages-register"><?= lang('Files.Register_1') ?></a></li>
                        <li><a href="pages-register-2"><?= lang('Files.Register_2') ?></a></li>
                        <li><a href="pages-recoverpw"><?= lang('Files.Recover_Password_1') ?></a></li>
                        <li><a href="pages-recoverpw-2"><?= lang('Files.Recover_Password_2') ?></a></li>
                        <li><a href="pages-lock-screen"><?= lang('Files.Lock_Screen_1') ?></a></li>
                        <li><a href="pages-lock-screen-2"><?= lang('Files.Lock_Screen_2') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-support"></i>
                        <span>  <?= lang('Files.Extra_Pages') ?>  </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-timeline"><?= lang('Files.Timeline') ?></a></li>
                        <li><a href="pages-invoice"><?= lang('Files.Invoice') ?></a></li>
                        <li><a href="pages-directory"><?= lang('Files.Directory') ?></a></li>
                        <li><a href="pages-starter"><?= lang('Files.Starter_Page') ?></a></li>
                        <li><a href="pages-404"><?= lang('Files.Error_404') ?></a></li>
                        <li><a href="pages-500"><?= lang('Files.Error_500') ?></a></li>
                        <li><a href="pages-pricing"><?= lang('Files.Pricing') ?></a></li>
                        <li><a href="pages-gallery"><?= lang('Files.Gallery') ?></a></li>
                        <li><a href="pages-profile"><?= lang('Files.Profile') ?></a></li>
                        <li><a href="pages-maintenance"><?= lang('Files.Maintenance') ?></a></li>
                        <li><a href="pages-comingsoon"><?= lang('Files.Coming_Soon') ?></a></li>
                        <li><a href="pages-faq"><?= lang('Files.FAQs') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-bookmark-alt"></i>
                        <span>  <?= lang('Files.Email_Templates') ?>  </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-template-basic"><?= lang('Files.Basic_Action_Email') ?></a></li>
                        <li><a href="email-template-alert"><?= lang('Files.Alert_Email') ?></a></li>
                        <li><a href="email-template-billing"><?= lang('Files.Billing_Email') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-more"></i>
                        <span><?= lang('Files.Multi_Level') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);"><?= lang('Files.Level_1_1') ?></a></li>
                        <li><a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Level_1_2') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"><?= lang('Files.Level_2_1') ?></a></li>
                                <li><a href="javascript: void(0);"><?= lang('Files.Level_2_2') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->