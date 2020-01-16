<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php $this->load->view('layouts/head.php') ?>
        <title>Register Portal Elektro</title>
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-gd-emerald">
                    <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                        <!-- Header -->
                        <div class="py-30 px-5 text-center">
                            <a class="link-effect font-w700" href="<?php echo base_url()?>">
                                <i class="si si-fire"></i>
                                <span class="font-size-xl text-primary-dark">Portal</span><span class="font-size-xl">Elektro</span>
                            </a>
                            <h1 class="h2 font-w700 mt-50 mb-10">Create New Account</h1>
                            <h2 class="h4 font-w400 text-muted mb-0">Please add your details</h2>
                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success alert-dismissable mt-20" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?> 
                        </div>
                        <!-- END Header -->

                       <!-- Material Forms Validation -->
                        <h2 class="content-heading">Material Forms</h2>
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Validation</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row justify-content-center py-20">
                                    <div class="col-xl-6">
                                        <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-material" action="#" method="post">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                                    <label for="val-username2">Username</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="Your valid email..">
                                                    <label for="val-email2">Email</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="password" class="form-control" id="val-password2" name="val-password2" placeholder="Choose a safe one..">
                                                    <label for="val-password2">Password</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="password" class="form-control" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it!">
                                                    <label for="val-confirm-password2">Confirm Password</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="js-select2 form-control" id="val-select22" name="val-select22" style="width: 100%;" data-placeholder="Choose one..">
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="html">HTML</option>
                                                        <option value="css">CSS</option>
                                                        <option value="javascript">JavaScript</option>
                                                        <option value="angular">Angular</option>
                                                        <option value="react">React</option>
                                                        <option value="vuejs">Vue.js</option>
                                                        <option value="ruby">Ruby</option>
                                                        <option value="php">PHP</option>
                                                        <option value="asp">ASP.NET</option>
                                                        <option value="python">Python</option>
                                                        <option value="mysql">MySQL</option>
                                                    </select>
                                                    <label for="val-select2">Select2</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="js-select2 form-control" id="val-select2-multiple2" name="val-select2-multiple2" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="html">HTML</option>
                                                        <option value="css">CSS</option>
                                                        <option value="javascript">JavaScript</option>
                                                        <option value="angular">Angular</option>
                                                        <option value="react">React</option>
                                                        <option value="vuejs">Vue.js</option>
                                                        <option value="ruby">Ruby</option>
                                                        <option value="php">PHP</option>
                                                        <option value="asp">ASP.NET</option>
                                                        <option value="python">Python</option>
                                                        <option value="mysql">MySQL</option>
                                                    </select>
                                                    <label for="val-select2-multiple2">Select2 Multiple</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="val-suggestions2" name="val-suggestions2" rows="3" placeholder="What you would like to see?"></textarea>
                                                    <label for="val-suggestions2">Suggestions</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="val-skill2" name="val-skill2">
                                                        <option value="">Please select</option>
                                                        <option value="html">HTML</option>
                                                        <option value="css">CSS</option>
                                                        <option value="javascript">JavaScript</option>
                                                        <option value="angular">Angular</option>
                                                        <option value="react">React</option>
                                                        <option value="vuejs">Vue.js</option>
                                                        <option value="ruby">Ruby</option>
                                                        <option value="php">PHP</option>
                                                        <option value="asp">ASP.NET</option>
                                                        <option value="python">Python</option>
                                                        <option value="mysql">MySQL</option>
                                                    </select>
                                                    <label for="val-skill2">Best Skill</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-currency2" name="val-currency2" placeholder="$21.60">
                                                    <label for="val-currency2">Currency</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-phoneus2" name="val-phoneus2" placeholder="212-999-0000">
                                                    <label for="val-phoneus2">Phone (US)</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-website2" name="val-website2" placeholder="http://example.com">
                                                    <label for="val-website2">Website</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-digits2" name="val-digits2" placeholder="5">
                                                    <label for="val-digits2">Digits</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-number2" name="val-number2" placeholder="5.0">
                                                    <label for="val-number2">Number</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-range2" name="val-range2" placeholder="4">
                                                    <label for="val-range2">Range [1, 5]</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                                                </div>
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms2">
                                                    <input type="checkbox" class="css-control-input" id="val-terms2" name="val-terms2" value="1">
                                                    <span class="css-control-indicator"></span> I agree to the terms
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Material Forms Validation -->
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Terms Modal -->
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfect
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->

        <?php $this->load->view('layouts/js.php') ?>
    </body>
</html>