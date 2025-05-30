<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                                    <button type="button" class="btn btn-secondary waves-effect">Secondary</button>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                                    <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                                    <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                                    <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                                    <button type="button" class="btn btn-link waves-effect">Link</button>
                                    <button type="button" class="btn btn-light waves-effect">Light</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Outline buttons</h4>
                                <p class="card-title-desc">Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                    <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                    <button type="button" class="btn btn-outline-light waves-effect">Light</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Button tags</h4>
                                <p class="card-title-desc">The <code class="highlighter-rouge">.btn</code>
                                    classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element.
                                    However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though
                                    some browsers may apply a slightly different rendering).</p>

                                <div class="button-items">
                                    <a class="btn btn-primary waves-effect waves-light" href="#" role="button">Link</a>
                                    <button class="btn btn-success waves-effect waves-light" type="submit">Button</button>
                                    <input class="btn btn-info" type="button" value="Input">
                                    <input class="btn btn-danger" type="submit" value="Submit">
                                    <input class="btn btn-warning" type="reset" value="Reset">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Sizes</h4>
                                <p class="card-title-desc">Fancy larger or smaller buttons? Add
                                    <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.
                                </p>

                                <div class="button-items">
                                    <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Large button</button>
                                    <button type="button" class="btn btn-secondary btn-lg waves-effect">Large button</button>
                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Small button</button>
                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">Small button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Block Buttons</h4>
                                <p class="card-title-desc">Create block level buttons—those that
                                    span the full width of a parent—by adding <code class="highlighter-rouge">.d-grid</code>.</p>
                                <div class="button-items">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary btn-lg w-100 waves-effect waves-light">Block level button</button>
                                        <button type="button" class="btn btn-secondary btn-sm w-100 waves-effect mt-2">Block level button</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Toggle states</h4>
                                <p class="card-title-desc">Add <code class="highlighter-rouge">data-bs-toggle="button"</code>
                                    to toggle a button’s <code class="highlighter-rouge">active</code>
                                    state. If you’re pre-toggling a button, you must manually add the <code class="highlighter-rouge">.active</code> class
                                    <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> to the
                                    <code class="highlighter-rouge">&lt;button&gt;</code>.
                                </p>

                                <div class="button-items">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="button" aria-pressed="false">
                                        Single toggle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Checkbox buttons</h4>
                                <p class="card-title-desc">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to
                                    other elements, such as <code class="highlighter-rouge">
                                        &lt;label&gt;</code>s, to provide checkbox or radio style button
                                    toggling. Add <code class="highlighter-rouge">data-bs-toggle="buttons"</code> to a
                                    <code class="highlighter-rouge">.btn-group</code> containing those
                                    modified buttons to enable toggling in their respective styles.
                                </p>
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1" checked>
                                    <label class="btn btn-secondary" for="btncheck1">Checked-1</label>

                                    <input type="checkbox" class="btn-check" id="btncheck2">
                                    <label class="btn btn-secondary" for="btncheck2">Checked-2</label>

                                    <input type="checkbox" class="btn-check" id="btncheck3">
                                    <label class="btn btn-secondary" for="btncheck3">Checked-3</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Radio buttons</h4>
                                <p class="card-title-desc">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to
                                    other elements, such as <code class="highlighter-rouge">
                                        &lt;label&gt;</code>s, to provide checkbox or radio style button
                                    toggling. Add <code class="highlighter-rouge">data-bs-toggle="buttons"</code> to a
                                    <code class="highlighter-rouge">.btn-group</code> containing those
                                    modified buttons to enable toggling in their respective styles.
                                </p>
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck4">
                                    <label class="btn btn-primary active" for="btncheck4">Active</label>

                                    <input type="checkbox" class="btn-check" id="btncheck5">
                                    <label class="btn btn-primary" for="btncheck5">Radio</label>

                                    <input type="checkbox" class="btn-check" id="btncheck6">
                                    <label class="btn btn-primary" for="btncheck6">Radio</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Button group</h4>
                                <p class="card-title-desc">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code>.</p>

                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Button toolbar</h4>
                                <p class="card-title-desc">Combine sets of button groups into
                                    button toolbars for more complex components. Use utility classes as
                                    needed to space out groups, buttons, and more.</p>

                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <button type="button" class="btn btn-secondary">3</button>
                                        <button type="button" class="btn btn-secondary">4</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-secondary">5</button>
                                        <button type="button" class="btn btn-secondary">6</button>
                                        <button type="button" class="btn btn-secondary">7</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-secondary">8</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Sizing</h4>
                                <p class="card-title-desc">Instead of applying button sizing
                                    classes to every button in a group, just add <code class="highlighter-rouge">.btn-group-*</code> to each <code class="highlighter-rouge">.btn-group</code>, including each one
                                    when nesting multiple groups.</p>

                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>

                                <br>

                                <div class="btn-group mt-2" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>

                                <br>

                                <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Vertical variation</h4>
                                <p class="card-title-desc">Make a set of buttons appear vertically
                                    stacked rather than horizontally. Split button dropdowns are not
                                    supported here.</p>

                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <button type="button" class="btn btn-secondary">Button</button>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary">Button</button>
                                    <button type="button" class="btn btn-secondary">Button</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<script src="assets/js/app.js"></script>

</body>

</html>