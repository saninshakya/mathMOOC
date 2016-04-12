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
<script src="assets/dist/js/formValidation.js" type="text/javascript"></script>
<script src="assets/dist/js/bootstrap.js" type="text/javascript"></script>
<link src="assets/dist/css/formValidation.css" rel="stylesheet" type="text/css"></script>
<link src="assets/dist/css/bootstrap.css" rel="stylesheet" type="text/css"></script>
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

<!-- Binita  Tutorial Addition-->
    <input type="submit" name="play" id="play" value="PLAY">
    <div class="bigWrapper">
        <div class="problem">
        <div class="fleft part1wrapper">
            <div class="part1 tableBased">
                <div class="imgHolder-img">
                    <p class="a"><img src="assets/img/star.png" alt="star" width="70"/></p>
                </div>
                <div class="imgHolder-img">
                    <p class="a"><img src="assets/img/star.png" alt="star" width="70" /></p>
                </div>
            </div>
            </div>
            <div class="plussign fleft">
            <div class="tableBased">
            <div class="imgHolder tableCelled">
                <p class="b"><img src="assets/img/plus-sign.png" alt=""></p>
                </div>
                </div>
            </div>
            <div class="fleft part2wrapper">
            <div class="part2 tableBased">
                <div class="imgHolder-img">
                    <p class="c"><img src="assets/img/star.png" alt="star" width="70" /></p>
                </div>
            </div>
            </div>
            <div class="equalto fleft">
            <div class="tableBased">
            <div class="imgHolder tableCelled">
                <p class="d"><img src="assets/img/equal-to.png" alt=""></p>
                </div>
                </div>
            </div>
            <div class="sum fleft">
            <div class="tableBased">
                <div class="imgHolder-img">
                    <p class="e"><img src="assets/img/star.png" alt="star" width="70" /></p>
                </div>
                <div class="imgHolder-img">
                    <p class="e"><img src="assets/img/star.png" alt="star" width="70" /></p>
                </div>
                <div class="imgHolder-img">
                    <p class="e"><img src="assets/img/star.png" alt="star" width="70" /></p>
                </div>
            </div>
            </div>
        </div>

        <div class="solutions">
            <div class="solutionbox fleft">
            <div class="sol solution-one" style="border-color:#D93600;color:#D93600">
            <big>
                <p class="a">2</p>
            </big>
            <small>
                <p class="a">Two</p>
            </small>
            </div>
            </div>
            <div class="solutionbox fleft">
            <div class="sol solution-two" style="border-color:#85B200;color:#85B200">
                <big>
                    <p class="c">1</p>
                </big>
                <small>
                    <p class="c">One</p>
                </small>
            </div>
            </div>
            <div class="solutionbox fleft">
            <div class="sol solution-three" style="border-color:#FF7272;color:#FF7272">
                <big>
                    <p class="e">3</p>
                </big>
                <small>
                    <p class="e">Three</p>
                </small>
            </div>
            </div>
        </div>
    </div>

<!-- end  -->

</div><!--end container-->


<!-- Binita -->
<script src="assets/js/jquery.runloop.1.0.3.js"></script>

<script>
$(document).ready(function() {
    $("#play").click(function(){
        myRunloop.play(2000, optionalCallback);
});

   // JavaScript enabled; initiate some of the CSS for this
   $("#intro h1").css({
      bottom: '-1.5em',
      opacity: 1
   });
   $("#box").css({
      background: '#22346F',
      'border-color': '#333',
      height: 0,
      width: 0
   });
   $("p").css({
      opacity: 0,
      position: 'relative',
      left: '-3em'
   });
   $("p.b, p.copyright").css({
      left: '3em'
   });
   
   
   // Make a new runloop. Probably best not to attach it to the window object, but it's useful for this demo
   // as it allows you to inspect the myRunloop object using Firebug/Web Inspector.
   window.myRunloop = jQuery.runloop();
   
   // You add keyframes with addKey(); the first parameter is the percentage into the overall runloop duration,
   // the second is the function to execute at that keyframe point.
   myRunloop.addKey('10%', function(){ $("#box").animate( { width:'35.6em', paddingLeft:'2em', paddingRight:'2em' }, { duration:1000, queue:false } ) });
   
   // But you don't have to do individual addKey() calls; use addMap() to add multiple keyframes at once:
   myRunloop.addMap({

      '55%': function(){  $("p.a").animate( { opacity:1, left:0 }, { duration:500, queue:false } ); },
      '65%': function(){  $("p.b").animate( { opacity:1, left:0 }, { duration:500, queue:false } ); },
      '75%': function(){  $("p.c").animate( { opacity:1, left:0 }, { duration:500, queue:false } ); },
      '85%': function(){  $("p.d").animate( { opacity:1, left:0 }, { duration:500, queue:false } ); },
      '95%': function(){  $("p.e").animate( { opacity:1, left:0 }, { duration:500, queue:false } ); }
      // '100%': function(){ $("p.copyright").animate( { opacity:1, left:0 }, { duration:650, queue:false } ); }
   });

   // You can add a callback to the end of the runloop, but note: it's the same as this: addKey('100%', func);
   function optionalCallback(){
   };
   
   // Start playing the runloop, in this case with a duration of 10s.
   // If the duration is omitted and no runloop was playing, it'll default to 500ms.
   // myRunloop.play(10000, optionalCallback);

});

var _gaq = [['_setAccount', 'UA-3764464-3'], ['_setDomainName', '.farukat.es'], ['_trackPageview']];
(function(d, t) {
  var g = d.createElement(t),
      s = d.getElementsByTagName(t)[0];
  g.async = true;
  g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g, s);
})(document, 'script');
</script> 
<!-- end -->

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