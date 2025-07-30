<?php echo form_open(get_uri("team_members/add_team_member"), array("id" => "team_member-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <div class="container-fluid">

        <div class="form-widget">
            <div class="widget-title clearfix">
                <div class="row">
                    <div id="general-info-label" class="col-sm-4"><i data-feather="circle" class="icon-16"></i><strong> <?php echo app_lang('general_info'); ?></strong></div>
                    <?php if (!isset($is_institution_user) || !$is_institution_user): ?>
                    <div id="job-info-label" class="col-sm-4"><i data-feather="circle" class="icon-16"></i><strong>  <?php echo app_lang('job_info'); ?></strong></div>
                    <div id="account-info-label" class="col-sm-4"><i data-feather="circle" class="icon-16"></i><strong>  <?php echo app_lang('account_settings'); ?></strong></div>
                    <?php else: ?>
                    <div id="account-info-label" class="col-sm-8"><i data-feather="circle" class="icon-16"></i><strong>  <?php echo app_lang('account_settings'); ?></strong></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="progress ml15 mr15">
                <div id="form-progress-bar" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                </div>
            </div>
        </div>

        <div class="tab-content mt15">
            <div role="tabpanel" class="tab-pane active" id="general-info-tab">
                <?php if (isset($is_super_admin) && $is_super_admin): ?>
                <div class="form-group">
                    <div class="row">
                        <label for="user_type" class="col-md-3"><?php echo app_lang('user_type'); ?></label>
                        <div class="col-md-9">
                            <?php
                            $user_type_dropdown = array(
                                "staff" => app_lang('team_member'),
                                "institution_user" => app_lang('institution_user')
                            );
                            echo form_dropdown("user_type", $user_type_dropdown, "staff", "class='select2' id='user-type'");
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="form-group" id="institution-selection" style="display: none;">
                    <div class="row">
                        <label for="institution_id" class="col-md-3"><?php echo app_lang('institution'); ?></label>
                        <div class="col-md-9">
                            <?php
                            echo form_dropdown("institution_id", $institutions_dropdown, "", "class='select2' id='institution-id'");
                            ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="form-group">
                    <div class="row">
                        <label for="first_name" class=" col-md-3"><?php echo app_lang('first_name'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "first_name",
                                "name" => "first_name",
                                "class" => "form-control",
                                "placeholder" => app_lang('first_name'),
                                "autofocus" => true,
                                "data-rule-required" => true,
                                "data-msg-required" => app_lang("field_required"),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="last_name" class=" col-md-3"><?php echo app_lang('last_name'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "last_name",
                                "name" => "last_name",
                                "class" => "form-control",
                                "placeholder" => app_lang('last_name'),
                                "data-rule-required" => true,
                                "data-msg-required" => app_lang("field_required"),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="address" class=" col-md-3"><?php echo app_lang('mailing_address'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_textarea(array(
                                "id" => "address",
                                "name" => "address",
                                "class" => "form-control",
                                "placeholder" => app_lang('mailing_address')
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="phone" class=" col-md-3"><?php echo app_lang('phone'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "phone",
                                "name" => "phone",
                                "class" => "form-control",
                                "placeholder" => app_lang('phone')
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="gender" class=" col-md-3"><?php echo app_lang('gender'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_radio(array(
                                "id" => "gender_male",
                                "name" => "gender",
                                "class" => "form-check-input",
                                    ), "male", true);
                            ?>
                            <label for="gender_male" class="mr15"><?php echo app_lang('male'); ?></label> 
                            <?php
                            echo form_radio(array(
                                "id" => "gender_female",
                                "name" => "gender",
                                "class" => "form-check-input",
                                    ), "female", false);
                            ?>
                            <label for="gender_female" class="mr15"><?php echo app_lang('female'); ?></label>
                            <?php
                            echo form_radio(array(
                                "id" => "gender_other",
                                "name" => "gender",
                                "class" => "form-check-input",
                                    ), "other", false);
                            ?>
                            <label for="gender_other" class=""><?php echo app_lang('other'); ?></label>
                        </div>
                    </div>
                </div>

                <?php if (isset($is_super_admin) && $is_super_admin): ?>
                <div class="form-group">
                    <div class="row">
                        <label for="user_type" class="col-md-3"><?php echo app_lang('user_type'); ?></label>
                        <div class="col-md-9">
                            <?php
                            echo form_radio(array(
                                "id" => "user_type_staff",
                                "name" => "user_type",
                                "class" => "form-check-input user-type-radio",
                                "data-rule-required" => true,
                                "data-msg-required" => app_lang("field_required"),
                            ), "staff", true);
                            ?>
                            <label for="user_type_staff" class="mr15"><?php echo app_lang('team_member'); ?></label>
                            <?php
                            echo form_radio(array(
                                "id" => "user_type_client",
                                "name" => "user_type",
                                "class" => "form-check-input user-type-radio",
                            ), "client", false);
                            ?>
                            <label for="user_type_client" class=""><?php echo app_lang('institution_user'); ?></label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group" id="institution-dropdown" style="display: none;">
                    <div class="row">
                        <label for="client_id" class="col-md-3"><?php echo app_lang('institution'); ?></label>
                        <div class="col-md-9">
                            <?php
                            echo form_dropdown("client_id", $institutions_dropdown ?? array(), "", "class='select2' id='client-id'");
                            ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php echo view("custom_fields/form/prepare_context_fields", array("custom_fields" => $custom_fields, "label_column" => "col-md-3", "field_column" => " col-md-9")); ?> 

            </div>
            <?php if (!isset($is_institution_user) || !$is_institution_user): ?>
            <div role="tabpanel" class="tab-pane" id="job-info-tab">
                <div class="form-group">
                    <div class="row">
                        <label for="job_title" class=" col-md-3"><?php echo app_lang('job_title'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "job_title",
                                "name" => "job_title",
                                "class" => "form-control",
                                "placeholder" => app_lang('job_title'),
                                "data-rule-required" => true,
                                "data-msg-required" => app_lang("field_required"),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="salary" class=" col-md-3"><?php echo app_lang('salary'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "salary",
                                "name" => "salary",
                                "class" => "form-control",
                                "placeholder" => app_lang('salary')
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="salary_term" class=" col-md-3"><?php echo app_lang('salary_term'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "salary_term",
                                "name" => "salary_term",
                                "class" => "form-control",
                                "placeholder" => app_lang('salary_term')
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="date_of_hire" class=" col-md-3"><?php echo app_lang('date_of_hire'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "date_of_hire",
                                "name" => "date_of_hire",
                                "class" => "form-control",
                                "placeholder" => app_lang('date_of_hire'),
                                "autocomplete" => "off"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div role="tabpanel" class="tab-pane" id="account-info-tab">
                <div class="form-group">
                    <div class="row">
                        <label for="email" class=" col-md-3"><?php echo app_lang('email'); ?></label>
                        <div class=" col-md-9">
                            <?php
                            echo form_input(array(
                                "id" => "email",
                                "name" => "email",
                                "class" => "form-control",
                                "placeholder" => app_lang('email'),
                                "autocomplete" => "off",
                                "data-rule-email" => true,
                                "data-msg-email" => app_lang("enter_valid_email"),
                                "data-rule-required" => true,
                                "data-msg-required" => app_lang("field_required"),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="password" class="col-md-3"><?php echo app_lang('password'); ?></label>
                        <div class=" col-md-8">
                            <div class="input-group">
                                <?php
                                echo form_password(array(
                                    "id" => "password",
                                    "name" => "password",
                                    "class" => "form-control",
                                    "placeholder" => app_lang('password'),
                                    "autocomplete" => "off",
                                    "data-rule-required" => true,
                                    "data-msg-required" => app_lang("field_required"),
                                    "data-rule-minlength" => 6,
                                    "data-msg-minlength" => app_lang("enter_minimum_6_characters"),
                                    "autocomplete" => "off",
                                    "style" => "z-index:auto;"
                                ));
                                ?>
                                <button type="button" class="input-group-text clickable no-border" id="generate_password"><span data-feather="key" class="icon-16"></span> <?php echo app_lang('generate'); ?></button>
                            </div>
                        </div>
                        <div class="col-md-1 p0">
                            <a href="#" id="show_hide_password" class="btn btn-default" title="<?php echo app_lang('show_text'); ?>"><span data-feather="eye" class="icon-16"></span></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="role" class="col-md-3"><?php echo app_lang('role'); ?></label>
                        <div class="col-md-9">
                            <?php
                            echo form_dropdown("role", $role_dropdown, array(), "class='select2' id='user-role'");
                            ?>
                            <div id="user-role-help-block" class="help-block ml10 hide"><i data-feather="alert-triangle" class="icon-16 text-warning"></i> <?php echo app_lang("admin_user_has_all_power"); ?></div>
                        </div>
                    </div>
                </div>
                
                <?php if ((isset($is_institution_user) && $is_institution_user) || (isset($is_super_admin) && $is_super_admin)): ?>
                <div class="form-group institution-permissions <?php echo (isset($is_super_admin) && $is_super_admin) ? 'hide' : ''; ?>">
                    <div class="row">
                        <label for="client_permissions" class="col-md-3"><?php echo app_lang('permissions'); ?></label>
                        <div class="col-md-9">
                            <?php
                            $permissions_dropdown = array(
                                "limited_access" => app_lang('limited_access'),
                                "project,estimate,invoice,payment,note,event,message,client_feedback" => app_lang('standard_access'),
                                "institution_user_management,project,estimate,invoice,payment,note,event,message,client_feedback" => app_lang('management_access')
                            );
                            echo form_dropdown("client_permissions", $permissions_dropdown, "limited_access", "class='select2' id='client-permissions'");
                            ?>
                            <div class="help-block ml10"><i data-feather="info" class="icon-16 text-info"></i> <?php echo app_lang("institution_user_permissions_help"); ?></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="form-group ">
                    <div class="col-md-12">  
                        <?php
                        echo form_checkbox("email_login_details", "1", true, "id='email_login_details' class='form-check-input'");
                        ?> <label for="email_login_details"><?php echo app_lang('email_login_details'); ?></label>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal-footer">
    <button class="btn btn-default" data-bs-dismiss="modal"><span data-feather="x" class="icon-16"></span> <?php echo app_lang('close'); ?></button>
    <button id="form-previous" type="button" class="btn btn-default hide"><span data-feather="arrow-left-circle" class="icon-16"></span> <?php echo app_lang('previous'); ?></button>
    <button id="form-next" type="button" class="btn btn-info text-white"><span data-feather="arrow-right-circle" class="icon-16"></span> <?php echo app_lang('next'); ?></button>
    <button id="form-submit" type="button" class="btn btn-primary hide"><span data-feather="check-circle" class="icon-16"></span> <?php echo app_lang('save'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {
        // Handle user type selection for super admins
        <?php if (isset($is_super_admin) && $is_super_admin): ?>
        $(".user-type-radio").change(function() {
            var userType = $("input[name='user_type']:checked").val();
            if (userType === 'client') {
                $("#institution-dropdown").show();
                $("#client-id").attr('data-rule-required', true);
                $("#client-id").attr('data-msg-required', '<?php echo app_lang("field_required"); ?>');
                // Hide job info tab and role dropdown for institution users
                $("#job-info-label").parent().addClass('hide');
                $("#job-info-tab").removeClass('active').addClass('hide');
                $(".form-group:has(#user-role)").hide();
                // Show institution permissions
                $(".institution-permissions").removeClass('hide').show();
                // Adjust progress bar steps
                adjustProgressBarForInstitutionUser();
            } else {
                $("#institution-dropdown").hide();
                $("#client-id").removeAttr('data-rule-required');
                $("#client-id").removeAttr('data-msg-required');
                // Show job info tab and role dropdown for staff users
                $("#job-info-label").parent().removeClass('hide');
                $("#job-info-tab").removeClass('hide');
                $(".form-group:has(#user-role)").show();
                // Hide institution permissions
                $(".institution-permissions").addClass('hide').hide();
                // Reset progress bar steps
                resetProgressBarForStaffUser();
            }
        });
        
        function adjustProgressBarForInstitutionUser() {
            // Update tab navigation for 2 steps instead of 3
            $("#job-info-label").parent().hide();
            $("#account-info-label").removeClass('col-sm-4').addClass('col-sm-8');
        }
        
        function resetProgressBarForStaffUser() {
            // Reset tab navigation for 3 steps
            $("#job-info-label").parent().show();
            $("#account-info-label").removeClass('col-sm-8').addClass('col-sm-4');
        }
        
        // Initialize the form based on current selection
        $(".user-type-radio:checked").trigger('change');
        <?php endif; ?>
        
        $("#team_member-form").appForm({
            onSuccess: function (result) {
                if (result.success) {
                    $("#team_member-table").appTable({newData: result.data, dataId: result.id});
                }
            },
            onSubmit: function () {
                $("#form-previous").attr('disabled', 'disabled');
            },
            onAjaxSuccess: function () {
                $("#form-previous").removeAttr('disabled');
            }
        });

        $("#team_member-form input").keydown(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                if ($('#form-submit').hasClass('hide')) {
                    $("#form-next").trigger('click');
                } else {
                    $("#team_member-form").trigger('submit');
                }
            }
        });
        setTimeout(function () {
            $("#first_name").focus();
        }, 200);
        $("#team_member-form .select2").select2();

        setDatePicker("#date_of_hire");

        $("#form-previous").click(function () {
            var $generalTab = $("#general-info-tab"),
                    $jobTab = $("#job-info-tab"),
                    $accountTab = $("#account-info-tab"),
                    $previousButton = $("#form-previous"),
                    $nextButton = $("#form-next"),
                    $submitButton = $("#form-submit");

            if ($accountTab.hasClass("active")) {
                $accountTab.removeClass("active");
                $jobTab.addClass("active");
                $nextButton.removeClass("hide");
                $submitButton.addClass("hide");
            } else if ($jobTab.hasClass("active")) {
                $jobTab.removeClass("active");
                $generalTab.addClass("active");
                $previousButton.addClass("hide");
                $nextButton.removeClass("hide");
                $submitButton.addClass("hide");
            }
        });

        $("#form-next").click(function () {
            var $generalTab = $("#general-info-tab"),
                    $jobTab = $("#job-info-tab"),
                    $accountTab = $("#account-info-tab"),
                    $previousButton = $("#form-previous"),
                    $nextButton = $("#form-next"),
                    $submitButton = $("#form-submit");
            if (!$("#team_member-form").valid()) {
                return false;
            }
            if ($generalTab.hasClass("active")) {
                $generalTab.removeClass("active");
                $jobTab.addClass("active");
                $previousButton.removeClass("hide");
                $("#form-progress-bar").width("35%");
                $("#general-info-label").find("svg").remove();
                $("#general-info-label").prepend('<i data-feather="check-circle" class="icon-16"></i>');
                feather.replace();
                $("#team_member_id").focus();
                $("#job_title").focus();
            } else if ($jobTab.hasClass("active")) {
                $jobTab.removeClass("active");
                $accountTab.addClass("active");
                $previousButton.removeClass("hide");
                $nextButton.addClass("hide");
                $submitButton.removeClass("hide");
                $("#form-progress-bar").width("72%");
                $("#job-info-label").find("svg").remove();
                $("#job-info-label").prepend('<i data-feather="check-circle" class="icon-16"></i>');
                feather.replace();
                $("#username").focus();
                $("#email").focus();
            }
        });

        $("#form-submit").click(function () {
            $("#team_member-form").trigger('submit');
        });

        $("#generate_password").click(function () {
            $("#password").val(getRndomString(8));
        });

        $("#show_hide_password").click(function () {
            var $target = $("#password"),
                    type = $target.attr("type");
            if (type === "password") {
                $(this).attr("title", "<?php echo app_lang("hide_text"); ?>");
                $(this).html("<span data-feather='eye-off' class='icon-16'></span>");
                feather.replace();
                $target.attr("type", "text");
            } else if (type === "text") {
                $(this).attr("title", "<?php echo app_lang("show_text"); ?>");
                $(this).html("<span data-feather='eye' class='icon-16'></span>");
                feather.replace();
                $target.attr("type", "password");
            }
        });

        $("#user-role").change(function () {
            if ($(this).val() === "admin") {
                $("#user-role-help-block").removeClass("hide");
            } else {
                $("#user-role-help-block").addClass("hide");
            }
        });

        $("#email_login_details").click(function () {
            if ($(this).is(":checked")) {
                $("#password").attr("data-rule-required", true);
                $("#password").attr("data-msg-required", "<?php echo app_lang("field_required"); ?>");
            } else {
                $("#password").removeAttr("data-rule-required");
                $("#password").removeAttr("data-msg-required");
            }
        });
    });
</script>