<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget mar-btm">
                    <div class="footer-logo">
                        <a href="<?=site_url()?>">
                            <img src="<?=base_url()?>assets/home/images/resources/logo-2.png" alt="Awesome Footer Logo">
                        </a>
                    </div>
                    <div class="title" style="padding-bottom: 30px;">
                        <h3><?=lang('am_number_visits');?></h3>
                        <span class="border"></span>
                    </div>
                    <div class="our-info">
                        <div class="text">    
                            <p class="s-num">
                               <?=$visitor->visitorCount?><i class="fa fa-eye" aria-hidden="true"></i>
                            </p>
                        </div>
                         <?php
												 
												 	
                                                                                                      $facebook    = checkUrl($facebook->link);
 
                     	                                                                            $twitter     = checkUrl($twitter->link);
 	
                                                                                                     $instagram   = checkUrl($instagram->link);
                                                                                                   
													$youtube= checkUrl($youtube->link);
                                                                                                   
 												?>
                        <ul class="footer-social-links socialicon-style-two">
                                   <?php if($facebook !=""){?>  <li><a href="<?=$facebook ;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }?>
                                                <?php if($youtube!=""){?>  <li><a href="<?=$youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php }?>
                                                 <?php if($instagram!=""){?>  <li><a href="<?=$instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }?>
                                                 <?php if($twitter!=""){?>   <li><a href="<?=$twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>   </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-footer-widget mar-lft mar-btm">
                    <div class="title">
                        <h3><?=lang('am_menu');?></h3>
                        <span class="border"></span>
                    </div>
                    <ul class="usefull-links">
						<li><a href="<?=site_url();?>"><i class="fa fa-angle-left" aria-hidden="true"></i><?=lang('home');?></a></li>
						<li><a href="<?=site_url('Home/idea');?>"><i class="fa fa-angle-left" aria-hidden="true"></i><?=lang('am_idea');?>   </a></li>
						<li><a href="<?=site_url('Home/questions');?>"><i class="fa fa-angle-left" aria-hidden="true"></i>   <?=lang('am_questions');?></a></li>

			                        <li><a href="<?=site_url('Home/projects');?>">  <i class="fa fa-angle-left" aria-hidden="true"></i>  <?=lang('am_Our_Projects');?></a></li>
						<li><a href="<?=site_url('Home/contact');?>"><i class="fa fa-angle-left" aria-hidden="true"></i>    <?=lang('am_contact');?></a></li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3><?=lang('am_Connect');?></h3>
                        <span class="border"></span>
                    </div>
                   
                        <ul class="footer-contact-info">
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-technology"></span>
                                </div>
                                <div class="text-holder">
                                    <h5 dir="ltr"> <?= substr($contact->Content, 0, 3) . " " . substr($contact->Content, 3,3)
 . " ".substr($contact->Content, 6,3 ).' '.substr($contact->Content,9);

?></h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-note"></span>
                                </div>
                                <div class="text-holder">
                                    <h5> <?=$contact->Content_en?> </h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-signs"></span>
                                </div>
                                <div class="text-holder">
                                    <h5> <?php if($this->session->userdata('language')=='english'){ ?> 
                                                         <?=$contact->Title_en?> 
<?}else{?>
                                                        <?=$contact->Title?> 

<?php }?> </h5>
                                </div>
                            </li>
                        </ul>
                </div>
            </div>
            <!--End single footer widget-->

        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area--> 
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <div class="copyright-text text-center">
                        <p><?=lang('am_site_rights');?> <a href='<?php echo base_url();?>'>Masry International</a> </p> 
                    </div>
                </div>    
            </div>
        </div>
    </div>    
</section> 
<!--End footer bottom area-->  


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Wow Script -->
<script src="<?=base_url()?>assets/home/js/wow.min.js"></script>
<!-- bootstrap -->
<script src="<?=base_url()?>assets/home/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?=base_url()?>assets/home/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?=base_url()?>assets/home/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?=base_url()?>assets/home/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?=base_url()?>assets/home/js/validation.js"></script>
<!-- mixit up -->
<script src="<?=base_url()?>assets/home/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?=base_url()?>assets/home/js/jquery.easing.min.js"></script>

<!-- video responsive script -->
<script src="<?=base_url()?>assets/home/js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="<?=base_url()?>assets/home/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?=base_url()?>assets/home/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="<?=base_url()?>assets/home/js/jquery.fancybox.pack.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?=base_url()?>assets/home/js/isotope.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.prettyPhoto.js"></script> 
<!-- jQuery timepicker js -->
<script src="<?=base_url()?>assets/home/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?=base_url()?>assets/home/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               

<!-- revolution slider js -->
<script src="<?=base_url()?>assets/home/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?=base_url()?>assets/home/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


<!-- thm custom script -->
<script src="<?=base_url()?>assets/home/js/custom.js"></script>


<!-- set langauge -->   
    <script>
 	$( "#polyglot-language-options" ).change(function() {
         var data = { 'id' : this.value  };
         $.ajax({
            type : 'post',
            data : data,
            cache : false,
            url : '<?= site_url("home/set_lang");?>',
            success : function(response){
               location.reload();
            }
          });
	});
    </script>
 <script type="text/javascript">
$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.navigation li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;
 
            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('current'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})
   </script>
</body>

 
</html>