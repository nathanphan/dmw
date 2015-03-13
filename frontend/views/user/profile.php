<?php
use yii\helpers\Url;
use frontend\assets\DWMainAsset;
use frontend\assets\AppAsset;

$appBundle  = AppAsset::register($this);
$dwBundle   =  DWMainAsset::register($this);
?>
<section class="section-white nopadding clearfix">
    <hr class="">
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="">Nathan's Profile</h1>

                <button type="button" class="btn btn-info">Send me a message</button>
                <br>
            </div>
            <div class="col-sm-2"><a href="<?= Url::to('/user/edit-profile')?>" class="pull-right">
                    <img title="profile image" class="img-cir img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span> Joseph
                        Doe</li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Followers</strong></span> 78</li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">	<i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
                        <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>

                    </div>
                </div>
            </div>
            <!--/col-3-->
            <div class="col-sm-9" contenteditable="false" style="">

                <?php if ($user->type == \common\models\User::TYPE_EMPLOYER) { ?>
                    <div class="panel panel-default target">
                    <div class="panel-heading" contenteditable="false">My Jobs</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="http://lorempixel.com/600/200/people">
                                    <div class="caption">
                                        <h3>
                                            Rover
                                        </h3>
                                        <p>
                                            Take care people
                                        </p>
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="http://lorempixel.com/600/200/city">
                                    <div class="caption">
                                        <h3>
                                            Marmaduke
                                        </h3>
                                        <p>
                                            Take care of dogs
                                        </p>
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="http://lorempixel.com/600/200/sports">
                                    <div class="caption">
                                        <h3>
                                            Rocky
                                        </h3>
                                        <p>
                                            Cleanng houses, and departments.
                                        </p>
                                        <p>

                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <?php } else { ?>
                <div class="panel panel-default target">
                    <div class="panel-heading" contenteditable="false">My detail data
                        <span class="pull-right">
                            <a href="<?= Url::to('/user/profile-form')?>" class="btn btn-primary border-radius btn-sm" >Edit</a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <?=  \yii\widgets\DetailView::widget([
                                    'model' => $profile || new \app\models\Profile(),
                                    'attributes' => [
                                        'firstname',               // title attribute (in plain text)
                                        'lastname',    // description attribute formatted as HTML
                                        'address',    // description attribute formatted as HTML
                                        'phone_number',    // description attribute formatted as HTML
                                        'gender',    // description attribute formatted as HTML
                                        'ethic_group',    // description attribute formatted as HTML
                                        'nationality',    // description attribute formatted as HTML
                                        'shift',    // description attribute formatted as HTML
                                        'experience',    // description attribute formatted as HTML
                                        'reference',    // description attribute formatted as HTML
                                    ],
                                ]);?>
                            </div>
                        </div>

                    </div>

                </div>

               <?php }?>

                <div class="panel panel-default">
                    <div class="panel-heading">My Current Jobs</div>
                    <div class="panel-body"> List all current jobs here.

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">My Old/Completed Jobs</div>
                    <div class="panel-body"> List All completed or old jobs here.

                    </div>
                </div>
            </div>



            <div id="push"></div>
        </div>


        <script>
            jQuery.fn.shake = function(intShakes, intDistance, intDuration, foreColor) {
                this.each(function() {
                    if (foreColor && foreColor!="null") {
                        $(this).css("color",foreColor);
                    }
                    $(this).css("position","relative");
                    for (var x=1; x<=intShakes; x++) {
                        $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
                            .animate({left:intDistance}, ((intDuration/intShakes)/2))
                            .animate({left:0}, (((intDuration/intShakes)/4)));
                        $(this).css("color","");
                    }
                });
                return this;
            };
        </script>
        <script>
            $(document).ready(function() {

                $('.tw-btn').fadeIn(3000);
                $('.alert').delay(5000).fadeOut(1500);

                $('#btnLogin').click(function(){
                    $(this).text("...");
                    $.ajax({
                        url: "/loginajax",
                        type: "post",
                        data: $('#formLogin').serialize(),
                        success: function (data) {
                            //console.log('data:'+data);
                            if (data.status==1&&data.user) { //logged in
                                $('#menuLogin').hide();
                                $('#lblUsername').text(data.user.username);
                                $('#menuUser').show();
                                /*
                                 $('#completeLoginModal').modal('show');
                                 $('#btnYes').click(function() {
                                 window.location.href="/";
                                 });
                                 */
                            }
                            else {
                                $('#btnLogin').text("Login");
                                prependAlert("#spacer",data.error);
                                $('#btnLogin').shake(4,6,700,'#CC2222');
                                $('#username').focus();
                            }
                        },
                        error: function (e) {
                            $('#btnLogin').text("Login");
                            console.log('error:'+JSON.stringify(e));
                        }
                    });
                });
                $('#btnRegister').click(function(){
                    $(this).text("Wait..");
                    $.ajax({
                        url: "/signup?format=json",
                        type: "post",
                        data: $('#formRegister').serialize(),
                        success: function (data) {
                            console.log('data:'+JSON.stringify(data));
                            if (data.status==1) {
                                $('#btnRegister').attr("disabled","disabled");
                                $('#formRegister').text('Thanks. You can now login using the Login form.');
                            }
                            else {
                                prependAlert("#spacer",data.error);
                                $('#btnRegister').shake(4,6,700,'#CC2222');
                                $('#btnRegister').text("Sign Up");
                                $('#inputEmail').focus();
                            }
                        },
                        error: function (e) {
                            $('#btnRegister').text("Sign Up");
                            console.log('error:'+e);
                        }
                    });
                });

                $('.loginFirst').click(function(){
                    $('#navLogin').trigger('click');
                    return false;
                });

                $('#btnForgotPassword').on('click',function(){
                    $.ajax({
                        url: "/resetPassword",
                        type: "post",
                        data: $('#formForgotPassword').serializeObject(),
                        success: function (data) {
                            if (data.status==1){
                                prependAlert("#spacer",data.msg);
                                return true;
                            }
                            else {
                                prependAlert("#spacer","Your password could not be reset.");
                                return false;
                            }
                        },
                        error: function (e) {
                            console.log('error:'+e);
                        }
                    });
                });

                $('#btnContact').click(function(){

                    $.ajax({
                        url: "/contact",
                        type: "post",
                        data: $('#formContact').serializeObject(),
                        success: function (data) {
                            if (data.status==1){
                                prependAlert("#spacer","Thanks. We got your message and will get back to you shortly.");
                                $('#contactModal').modal('hide');
                                return true;
                            }
                            else {
                                prependAlert("#spacer",data.error);
                                return false;
                            }
                        },
                        error: function (e) {
                            console.log('error:'+e);
                        }
                    });
                    return false;
                });

                /*
                 $('.nav .dropdown-menu input').on('click touchstart',function(e) {
                 e.stopPropagation();
                 });
                 */





            });
            $.fn.serializeObject = function()
            {
                var o = {};
                var a = this.serializeArray();
                $.each(a, function() {
                    if (o[this.name] !== undefined) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };
            var prependAlert = function(appendSelector,msg){
                $(appendSelector).after('<div class="alert alert-info alert-block affix" id="msgBox" style="z-index:1300;margin:14px!important;">'+msg+'</div>');
                $('.alert').delay(3500).fadeOut(1000);
            }
        </script>
        <!-- Quantcast Tag -->
        <script type="text/javascript">
            var _qevents = _qevents || [];

            (function() {
                var elem = document.createElement('script');
                elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
                elem.async = true;
                elem.type = "text/javascript";
                var scpt = document.getElementsByTagName('script')[0];
                scpt.parentNode.insertBefore(elem, scpt);
            })();

            _qevents.push({
                qacct:"p-0cXb7ATGU9nz5"
            });
        </script>
        <noscript>
            &amp;amp;amp;amp;amp;amp;amp;amp;lt;div style="display:none;"&amp;amp;amp;amp;amp;amp;amp;amp;gt;
            &amp;amp;amp;amp;amp;amp;amp;amp;lt;img src="//pixel.quantserve.com/pixel/p-0cXb7ATGU9nz5.gif" border="0" height="1" width="1" alt="Quantcast"/&amp;amp;amp;amp;amp;amp;amp;amp;gt;
            &amp;amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;amp;gt;
        </noscript>
        <!-- End Quantcast tag -->
        <div id="completeLoginModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Do you want to proceed?</h3>
            </div>
            <div class="modal-body">
                <p>This page must be refreshed to complete your login.</p>
                <p>You will lose any unsaved work once the page is refreshed.</p>
                <br><br>
                <p>Click "No" to cancel the login process.</p>
                <p>Click "Yes" to continue...</p>
            </div>
            <div class="modal-footer">
                <a href="#" id="btnYes" class="btn danger">Yes, complete login</a>
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
            </div>
        </div>
        <div id="forgotPasswordModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Password Lookup</h3>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="formForgotPassword">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                            <input type="email" name="email" id="inputEmail" placeholder="you@youremail.com" required="">
                            <span class="help-block"><small>Enter the email address you used to sign-up.</small></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pull-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>
                <a href="#" data-dismiss="modal" id="btnForgotPassword" class="btn btn-success">Reset Password</a>
            </div>

        </div>
        <div id="upgradeModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h4>Would you like to upgrade?</h4>
            </div>
            <div class="modal-body">
                <p class="text-center"><strong></strong></p>
                <h1 class="text-center">$4<small>/mo</small></h1>
                <p class="text-center"><small>Unlimited plys. Unlimited downloads. No Ads.</small></p>
                <p class="text-center"><img src="/assets/i_visa.png" width="50" alt="visa"> <img src="/assets/i_mc.png" width="50" alt="mastercard"> <img src="/assets/i_amex.png" width="50" alt="amex"> <img src="/assets/i_discover.png" width="50" alt="discover"> <img src="/assets/i_paypal.png" width="50" alt="paypal"></p>
            </div>
            <div class="modal-footer pull-center">
                <a href="/upgrade" class="btn btn-block btn-huge btn-success"><strong>Upgrade Now</strong></a>
                <a href="#" data-dismiss="modal" class="btn btn-block btn-huge">No Thanks, Maybe Later</a>
            </div>
        </div>
        <div id="contactModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Contact Us</h3>
                <p>suggestions, questions or feedback</p>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="formContact">
                    <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                    <div class="control-group">
                        <label class="control-label" for="inputSender">Name</label>
                        <div class="controls">
                            <input type="text" name="sender" id="inputSender" class="input-large" placeholder="Your name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputMessage">Message</label>
                        <div class="controls">
                            <textarea name="notes" rows="5" id="inputMessage" class="input-large" placeholder="Type your message here"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" name="email" id="inputEmail" class="input-large" placeholder="you@youremail.com (for reply)" required="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pull-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>
                <a href="#" data-dismiss="modal" aria-hidden="true" id="btnContact" role="button" class="btn btn-success">Send</a>
            </div>
        </div>




        <script src="/plugins/bootstrap-pager.js"></script>
    </div>
</section>