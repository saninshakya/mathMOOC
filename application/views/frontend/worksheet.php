<style>
    
    .form-horizontal .form-group{
    margin-top:15px;
    margin-left: 10px;
    padding:10px;
}

.has-feedback{
    border: 1px solid #ddd;
    font-size: 24px;
}
</style>
<script src="<?php echo base_url(); ?>assets/dist/js/formValidation.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.js" type="text/javascript"></script>
<link src="<?php echo base_url(); ?>assets/dist/css/formValidation.css" rel="stylesheet"></script>
<link src="<?php echo base_url(); ?>assets/dist/css/bootstrap.css" rel="stylesheet"></script>
<div class="container">
        <div class="row">
                <form id="defaultForm" method="post" class="form-horizontal" action="target.php">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="col-sm-6 control-label" id="captchaOperation"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="col-sm-6 control-label" id="captchaOperation1"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha1" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="col-sm-6 control-label" id="captchaOperation2"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha2" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="col-sm-6 control-label" id="captchaOperation3"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha3" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="col-sm-6 control-label" id="captchaOperation4"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha4" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="col-sm-6 control-label" id="captchaOperation5"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha5" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6"></div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#captchaOperation1').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#captchaOperation2').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#captchaOperation3').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#captchaOperation4').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#captchaOperation5').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            captcha1: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation1').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            captcha2: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation2').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            captcha3: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation3').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            captcha4: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation4').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            captcha5: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation5').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },

        }
    });
});
</script>