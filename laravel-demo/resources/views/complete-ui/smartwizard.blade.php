<div class="ui-block">
    <h3 class="ui-block-heading">SmartWizard</h3>
    <a target="_blank" href="https://github.com/techlab/SmartWizard" class="ui-block-description">https://github.com/techlab/SmartWizard</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/smartwizard/smartwizard.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/smartwizard/smartwizard.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <div id="smartwizard-1">
            <ul>
                <li><a href="#smartwizard-1-step-1" class="mb-3">
                    <span class="sw-number">1</span>
                    <div class="text-muted small">FIRST STEP</div>
                    Keyboard
                </a></li>
                <li><a href="#smartwizard-1-step-2" class="mb-3">
                    <span class="sw-number">2</span>
                    <div class="text-muted small">SECOND STEP</div>
                    Effects
                </a></li>
                <li><a href="#smartwizard-1-step-3" class="mb-3">
                    <span class="sw-number">3</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Pager
                </a></li>
            </ul>

            <div class="mb-3">
                <div id="smartwizard-1-step-1" class="card animated fadeIn">
                    <div class="card-body">
                            Step Content 1
                    </div>
                </div>
                <div id="smartwizard-1-step-2" class="card animated fadeIn">
                    <div class="card-body">
                            Step Content 2
                    </div>
                </div>
                <div id="smartwizard-1-step-3" class="card animated fadeIn">
                    <div class="card-body">
                            Step Content 3
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#smartwizard-1').smartWizard({
                    autoAdjustHeight: false,
                    backButtonSupport: false,
                    useURLhash: false,
                    showStepURLhash: false
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">With icon</h4>

    <div class="cui-example">
        <div id="smartwizard-2">
            <ul>
                <li><a href="#smartwizard-2-step-1" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-keypad"></span>
                    Keyboard
                    <div class="text-muted small">Set up shortcuts</div>
                </a></li>
                <li><a href="#smartwizard-2-step-2" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-color-wand"></span>
                    Effects
                    <div class="text-muted small">Add effects</div>
                </a></li>
                <li><a href="#smartwizard-2-step-3" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-md-copy"></span>
                    Pager
                    <div class="text-muted small">Select pager options</div>
                </a></li>
                <li><a href="#smartwizard-2-step-4" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-md-notifications-outline"></span>
                    Notifications
                    <div class="text-muted small">Set up notifications</div>
                </a></li>
            </ul>

            <div class="mb-3">
                <div id="smartwizard-2-step-1" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 1
                    </div>
                </div>
                <div id="smartwizard-2-step-2" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 2
                    </div>
                </div>
                <div id="smartwizard-2-step-3" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 3
                    </div>
                </div>
                <div id="smartwizard-2-step-4" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 4
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#smartwizard-2').smartWizard({
                    autoAdjustHeight: false,
                    backButtonSupport: false,
                    useURLhash: false,
                    showStepURLhash: false
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Boxed steps</h4>

    <div class="cui-example">
        <div id="smartwizard-3">
            <ul class="card px-4 pt-3 mb-3">
                <li><a href="#smartwizard-3-step-1" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">1</span>
                    <div class="text-muted small">FIRST STEP</div>
                    Keyboard
                </a></li>
                <li><a href="#smartwizard-3-step-2" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">2</span>
                    <div class="text-muted small">SECOND STEP</div>
                    Effects
                </a></li>
                <li><a href="#smartwizard-3-step-3" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">3</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Pager
                </a></li>
            </ul>

            <div class="mb-3">
                <div id="smartwizard-3-step-1" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 1
                    </div>
                </div>
                <div id="smartwizard-3-step-2" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 2
                    </div>
                </div>
                <div id="smartwizard-3-step-3" class="card animated fadeIn">
                    <div class="card-body">
                        Step Content 3
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#smartwizard-3').smartWizard({
                    autoAdjustHeight: false,
                    backButtonSupport: false,
                    useURLhash: false,
                    showStepURLhash: false
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Vertical</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <!-- Left -->
        <div id="smartwizard-4" class="smartwizard-vertical-left">
            <ul>
                <li><a href="#smartwizard-4-step-1" class="text-nowrap mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-keypad"></span>
                    <div class="text-muted small">FIRST STEP</div>
                    Keyboard
                </a></li>
                <li><a href="#smartwizard-4-step-2" class="text-nowrap mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-color-wand"></span>
                    <div class="text-muted small">SECOND STEP</div>
                    Effects
                </a></li>
                <li><a href="#smartwizard-4-step-3" class="text-nowrap mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-md-copy"></span>
                    <div class="text-muted small">THIRD STEP</div>
                    Pager
                </a></li>
            </ul>

            <div class="mb-3">
                <div id="smartwizard-4-step-1" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 1
                    </div>
                </div>
                <div id="smartwizard-4-step-2" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 2
                    </div>
                </div>
                <div id="smartwizard-4-step-3" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 3
                    </div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div id="smartwizard-5" class="smartwizard-vertical-right">
            <ul>
                <li><a href="#smartwizard-5-step-1" class="text-nowrap mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-keypad"></span>
                    <div class="text-muted small">FIRST STEP</div>
                    Keyboard
                </a></li>
                <li><a href="#smartwizard-5-step-2" class="text-nowrap mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-color-wand"></span>
                    <div class="text-muted small">SECOND STEP</div>
                    Effects
                </a></li>
                <li><a href="#smartwizard-5-step-3" class="text-nowrap mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-md-copy"></span>
                    <div class="text-muted small">THIRD STEP</div>
                    Pager
                </a></li>
            </ul>

            <div>
                <div id="smartwizard-5-step-1" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 1
                    </div>
                </div>
                <div id="smartwizard-5-step-2" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 2
                    </div>
                </div>
                <div id="smartwizard-5-step-3" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 3
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#smartwizard-4, #smartwizard-5').smartWizard({
                    autoAdjustHeight: false,
                    backButtonSupport: false,
                    useURLhash: false,
                    showStepURLhash: false
                });

                // Change markup
                //

                $('#smartwizard-4 .sw-toolbar').appendTo($('#smartwizard-4 .sw-container'));
                $('#smartwizard-5 .sw-toolbar').appendTo($('#smartwizard-5 .sw-container'));
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Validation</h4>

    <div class="cui-example">
        <form id="smartwizard-6" action="javascript:void(0)">
            <ul class="card px-4 pt-3 mb-3">
                <li><a href="#smartwizard-6-step-1" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">1</span>
                    <div class="text-muted small">FIRST STEP</div>
                    Account
                </a></li>
                <li><a href="#smartwizard-6-step-2" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">2</span>
                    <div class="text-muted small">SECOND STEP</div>
                    Profile
                </a></li>
                <li><a href="#smartwizard-6-step-3" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">3</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Hints
                </a></li>
                <li><a href="#smartwizard-6-step-4" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">4</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Finish
                </a></li>
            </ul>

            <div class="mb-3">
                <div id="smartwizard-6-step-1" class="card animated fadeIn">
                    <div class="card-body">
                        <div class="form-group">
                            <label>User name <span class="text-danger">*</span></label>
                            <input name="wizard-userName" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input name="wizard-password" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password <span class="text-danger">*</span></label>
                            <input name="wizard-confirm" type="text" class="form-control required">
                        </div>

                        <p><span class="text-danger">*</span> Mandatory</p>
                    </div>
                </div>
                <div id="smartwizard-6-step-2" class="card animated fadeIn">
                    <div class="card-body">
                        <div class="form-group">
                            <label>First name <span class="text-danger">*</span></label>
                            <input name="wizard-name" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Last name <span class="text-danger">*</span></label>
                            <input name="wizard-surname" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input name="wizard-email" type="text" class="form-control required email">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="wizard-address" type="text" class="form-control">
                        </div>

                        <p><span class="text-danger">*</span> Mandatory</p>
                    </div>
                </div>
                <div id="smartwizard-6-step-3" class="card animated fadeIn">
                    <div class="card-body">
                        <ul>
                            <li>Foo</li>
                            <li>Bar</li>
                            <li>Foobar</li>
                        </ul>
                    </div>
                </div>
                <div id="smartwizard-6-step-4" class="card animated fadeIn">
                    <div class="card-body">
                        <div class="form-group">
                            <label  class="custom-control custom-checkbox">
                                <input type="checkbox" name="wizard-acceptTerms" class="custom-control-input required">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">I agree with the Terms and Conditions.</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Javascript -->
        <script>
            $(function() {
                var $form = $('#smartwizard-6');
                var $btnFinish = $('<button class="btn-finish btn btn-primary hidden mr-2" type="button">Finish</button>');

                // Set up validator
                $form.validate({
                    errorPlacement: function errorPlacement(error, element) {
                        $(element).parents('.form-group').append(
                            error.addClass('invalid-feedback small d-block')
                        )
                    },
                    highlight: function(element) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('is-invalid');
                    },
                    rules: {
                        'wizard-confirm': {
                            equalTo: 'input[name="wizard-password"]'
                        }
                    }
                });

                // Initialize wizard
                $form
                    .smartWizard({
                        autoAdjustHeight: false,
                        backButtonSupport: false,
                        useURLhash: false,
                        showStepURLhash: false,
                        toolbarSettings: {
                            toolbarExtraButtons: [$btnFinish]
                        }
                    })
                    .on('leaveStep', function(e, anchorObject, stepNumber, stepDirection) {
                        // stepDirection === 'forward' :- this condition allows to do the form validation
                        // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                        if (stepDirection === 'forward'){ return $form.valid(); }
                        return true;
                    })
                    .on('showStep', function(e, anchorObject, stepNumber, stepDirection) {
                        var $btn = $form.find('.btn-finish');

                        // Enable finish button only on last step
                        if (stepNumber === 3) {
                            $btn.removeClass('hidden');
                        } else {
                            $btn.addClass('hidden');
                        }
                    });

                // Click on finish button
                $form.find('.btn-finish').on('click', function(){
                    if (!$form.valid()){ return; }

                    // Submit form
                    alert("Great! We're ready to submit form.");
                    return false;
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
