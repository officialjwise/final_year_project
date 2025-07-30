<?php echo form_open(get_uri("clients/save_institution_user"), array("id" => "add-user-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <div class="container-fluid">
        <input type="hidden" name="client_id" value="<?php echo $model_info->client_id; ?>" />
        
        <div class="form-group">
            <div class="row">
                <label for="first_name" class="col-md-3"><?php echo app_lang('first_name'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "first_name",
                        "name" => "first_name",
                        "value" => $model_info->first_name,
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
                <label for="last_name" class="col-md-3"><?php echo app_lang('last_name'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "last_name",
                        "name" => "last_name",
                        "value" => $model_info->last_name,
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
                <label for="email" class="col-md-3"><?php echo app_lang('email'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "email",
                        "name" => "email",
                        "value" => $model_info->email,
                        "class" => "form-control",
                        "placeholder" => app_lang('email'),
                        "data-rule-required" => true,
                        "data-msg-required" => app_lang("field_required"),
                        "data-rule-email" => true,
                        "data-msg-email" => app_lang("enter_valid_email")
                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="job_title" class="col-md-3"><?php echo app_lang('job_title'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "job_title",
                        "name" => "job_title",
                        "value" => $model_info->job_title,
                        "class" => "form-control",
                        "placeholder" => app_lang('job_title')
                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="phone" class="col-md-3"><?php echo app_lang('phone'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "phone",
                        "name" => "phone",
                        "value" => $model_info->phone,
                        "class" => "form-control",
                        "placeholder" => app_lang('phone')
                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="skype" class="col-md-3"><?php echo app_lang('skype'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "skype",
                        "name" => "skype",
                        "value" => $model_info->skype,
                        "class" => "form-control",
                        "placeholder" => app_lang('skype')
                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="gender" class="col-md-3"><?php echo app_lang('gender'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_radio(array(
                        "id" => "gender_male",
                        "name" => "gender",
                        "class" => "form-check-input",
                    ), "male", ($model_info->gender === "male") ? true : false);
                    ?>
                    <label for="gender_male" class="form-check-label mr15"><?php echo app_lang("male"); ?></label> <?php
                    echo form_radio(array(
                        "id" => "gender_female",
                        "name" => "gender",
                        "class" => "form-check-input",
                    ), "female", ($model_info->gender === "female") ? true : false);
                    ?>
                    <label for="gender_female" class="form-check-label mr15"><?php echo app_lang("female"); ?></label> <?php
                    echo form_radio(array(
                        "id" => "gender_other",
                        "name" => "gender",
                        "class" => "form-check-input",
                    ), "other", ($model_info->gender === "other") ? true : false);
                    ?>
                    <label for="gender_other" class="form-check-label"><?php echo app_lang("other"); ?></label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="login_password" class="col-md-3"><?php echo app_lang('password'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_password(array(
                        "id" => "login_password",
                        "name" => "login_password",
                        "class" => "form-control",
                        "placeholder" => app_lang('password'),
                        "autocomplete" => "off",
                        "style" => "z-index:auto;"
                    ));
                    ?>
                    <span class="help-block"><?php echo app_lang('leave_blank_to_use_invitation'); ?></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="note" class="col-md-3"><?php echo app_lang('note'); ?></label>
                <div class="col-md-9">
                    <?php
                    echo form_textarea(array(
                        "id" => "note",
                        "name" => "note",
                        "value" => $model_info->note,
                        "class" => "form-control",
                        "placeholder" => app_lang('note')
                    ));
                    ?>
                </div>
            </div>
        </div>

        <?php echo view("clients/contacts/contact_permission_fields"); ?>

        <?php echo view("custom_fields/form/prepare_context_fields", array("custom_fields" => $custom_fields, "label_column" => "col-md-3", "field_column" => "col-md-9")); ?> 

    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-bs-dismiss="modal"><span data-feather="x" class="icon-16"></span> <?php echo app_lang('close'); ?></button>
    <button type="submit" class="btn btn-primary"><span data-feather="check-circle" class="icon-16"></span> <?php echo app_lang('save'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#add-user-form").appForm({
            onSuccess: function (result) {
                $("#contact-table").appTable({newData: result.data, dataId: result.id});
                appAlert.success(result.message, {duration: 10000});
            }
        });
        
        setTimeout(function () {
            $("#first_name").focus();
        }, 200);

        $('[data-bs-toggle="tooltip"]').tooltip();
        
        setDatePicker("#date_of_birth");
    });
</script>    
