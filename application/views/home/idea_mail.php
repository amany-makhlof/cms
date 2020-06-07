<?php extract($idea);  ?>

 
 <table width="100%" border="0" bgcolor="#F5F5F5" align="center" style="border-spacing:0px">
        <tbody>
             <tr>
                    <td>
                        <table width="580" border="0" cellspacing="0" cellpadding="0" dir="rtl" style="direction:rtl" align="center" bgcolor="#FFFFFF">
                            <tbody><tr>
                                <td valign="middle" align="center" style="padding:30px 11px 11px 20px">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/images/logo.png" width="168"  style="display:block;border:0" alt="Baya" title="Baya" class="CToWUd">
                                    </a>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            <tr style="background:#f5f5f5">
    <td align="center">
                    <table style="display:table;border-style:hidden;direction:rtl" border="0" cellpadding="0" cellspacing="0" width="100%" align="center" dir="rtl">
                <tbody>
                <tr style="border-style:hidden">
                    <td bgcolor="#F5F5F5">
                        <table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5" align="center">
                            <tbody>
                                 <tr>
                                    <td  style="border-top:15px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-bottom:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:22px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <h3 style="font-size:22px;text-transform:uppercase;text-decoration:underline">
                                            <strong> البيانات الشخصية</strong>
                                        </h3>
                                    </td>
                                </tr>     
                                <tr>
                                    <td  style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:14px;text-transform:uppercase;text-decoration:underline">
                                            <strong>   إسم المشروع:     <?= $project_name?></strong>
                                        </span>
                                    </td>
                                </tr>                               
                                <tr>
                                    <td  style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:14px;text-transform:uppercase;text-decoration:underline">
                                            <strong> الاسم :     <?= $full_name?></strong>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>النوع :  <?php 
								   
								   switch($gender){
									   case 1:
									        echo lang('am_male');
									   		break;
									   case 2:
									        echo lang('am_female');
									   		break;
									  default:
									   }?>   </strong>
                                        </span>
                                    </td>
                                </tr>

                                
                                
                               <tr>
                                        <td style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                            <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                                <strong>السن : <?= $age?>   </strong>
                                            </span>
                                        </td>
                                    </tr>
                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>المؤهل الدراسي : <?= $Educational?> </strong>
                                        </span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>سنة التخرج : <?= $Graduation_Year?> </strong>
                                        </span>
                                    </td>
                                </tr>                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>موقف التجنيد :  <?= $recruitment?></strong>
                                        </span>
                                    </td>
                                </tr>                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> العنوان :   <?= $adderss?></strong>
                                        </span>
                                    </td>
                                </tr>                                
                                                       
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> المحافظة :   <?php 
								   
								   switch($Governorate){
									   case 1:
									        echo lang('Alexandria');
									   		break;
									   case 2:
									        echo lang('Aswan');
									   		break;
									   case 3:
									        echo lang('Asyut');
									   		break;
									   case 4:
									        echo lang('Beni_Suef');
									   		break;
									   case 5:
									        echo lang('am_single');
									   		break;
									   case 6:
									        echo lang('Cairo');
									   		break;
									   case 7:
									        echo lang('Dakahlia');
									   		break;
									   case 8:
									        echo lang('Damietta');
									   		break;
									   case 9:
									        echo lang('Faiyum');
									   		break;
									   case 10:
									        echo lang('Gharbia');
									   		break;
									   case 11:
									        echo lang('Giza');
									   		break;
									   case 12:
									        echo lang('Ismailia');
									   		break;
									   case 13:
									        echo lang('Kafr_Sheikh');
									   		break;
									   case 14:
									        echo lang('Luxor');
									   		break;
									   case 15:
									        echo lang('Matruh');
									   		break;
									   case 16:
									        echo lang('Minya');
									   		break;
									   case 17:
									        echo lang('Monufia');
									   		break;
									   case 18:
									        echo lang('New_Valley');
									   		break;
									   case 19:
									        echo lang('North_Sinai');
									   		break;
									   case 20:
									        echo lang('Port_Said');
									   		break;
									   case 21:
									        echo lang('Qalyubia');
									   		break;
									   case 22:
									        echo lang('Qena');
									   		break;
									   case 23:
									        echo lang('Red_Sea');
									   		break;
									   case 24:
									        echo lang('Sharqia');
									   		break;
									   case 25:
									        echo lang('Sohag');
									   		break;
									   case 26:
									        echo lang('South_Sinai');
									   		break;
									   case 27:
									        echo lang('Suez');
									   		break; 
									  default:
									   }?></strong>
                                        </span>
                                    </td>
                                </tr>  
                                
                             
                                   <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> رقم الموبايل : 
                                                  <?=$mobile?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> البريد الالكترونى :  
                                             <?=$email?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> الوظيفة الحالية : 
                                             <?=$Current_Position?>  
                                             </strong>
                                        </span>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> الراتب الشهري : 
                                     <?=$Monthly_Salary?>     
                                            
                                            </strong>
                                        </span>
                                    </td>
                                </tr>  
								  
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  هل انت صاحب شركة ؟ : 
                                            
                                            
                                     <?=$company_owner?>  </strong>
                                        </span>
                                    </td>
                                </tr>  
                             
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  اهم انجازاتك في الفترة السابقة  </strong>
                                        </span>
                                        <div>
                                        	
                                     <?=$achievements?>   
                                        </div>
                                    </td>
                                </tr>  
                             
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  ما هو هدفك الرئيسي (إن وجد) و الذى تسعى لتحقيقه؟ </strong>
                                        </span>
                                        	<div>
                                        		
                                     <?=$try_achieve?>   
                                        	</div>
                                    </td>
                                </tr>  
                           
                            </tbody>
                        </table>
                    </td>
                </tr>
                
                <tr style="border-style:hidden">
                    <td bgcolor="#F5F5F5">
                        <table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5" align="center">
                            <tbody>
                                 <tr>
                                    <td  style="border-top:15px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-bottom:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:22px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <h3 style="font-size:22px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  فكرتي </strong>
                                        </h3>
                                    </td>
                                </tr>                              
                                <tr>
                                    <td  style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> مجال الفكره </strong>
                                        </span>
										<div>
												 <?php 
								   
								   switch($thought){
									   case 1:
									        echo lang('am_Services');
									   		break;
									   case 2:
									        echo lang('am_Education');
									   		break;
									   case 3:
									        echo lang('am_environment');
									   		break;
									   case 4:
									        echo lang('am_energy');
									   		break;
									   case 5:
									        echo lang('am_Technology');
									   		break;
									   case 6:
									        echo lang('am_Other');
									   		break;
 									  default:
									   }if($thought==6){echo $thoughtOther;}?>   
									   
										</div>
										
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> الشريحه المستهدفه من الناس </strong>
                                        </span>
										<div>
												
                                     <?=$targeted_people?>   
										</div>
                                    </td>
                                </tr>

                                
                                
                               <tr>
                                        <td style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>القيمه المبدئيه المطلوبة للمشروع </strong>
                                        </span>
										<div>
                                     <?=$required_project?>     
										</div>
                                        </td>
                                    </tr>
                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> مدة إعداد المشروع للإنتاج </strong>
                                        </span>
										<div>
                                     <?=$preparation_project?>   
										</div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> كيف يمكن تطبيق المشروع عالميًا </strong>
                                        </span>
										<div>
                                     <?=$apply_project?>   
										</div>
                                    </td>
                                </tr>                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> الفائده من المشروع محليًا (بإختصار) </strong>
                                        </span>
										<div>
                                     <?=$Interest_project?>
										</div>
                                    </td>
                                </tr>                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> الفائده من المشروع عالميًا (بإختصار) </strong>
                                        </span>
										<div>
                                     <?=$Interest_project_Global?>
										</div>
                                    </td>
                                </tr>                                
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> نبذة عن المشروع </strong>
                                        </span>
										<div>
                                     <?=$project_Overview?>
										</div>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> هل المشروع موسمى (نعم/لا)؟ مع شرح السبب </strong>
                                        </span>
										<div>
                                     <?=$project_seasonal?>
										</div>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> نسبة تأكدك من نجاح الفكرة مع توضيح السبب </strong>
                                        </span>
										<div>
                                     <?=$project_success?>
										</div>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> المُعَوقات الوارد حدوثها (إن وجدت) و كيفية التغلب عليها (إن أمكن) </strong>
                                        </span>
										<div>
                                     <?=$project_Potential?>
										</div>
                                    </td>
                                </tr>  
								  
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> العدد المبدئي للموظفين المطلوبين مع توضيح تخصصاتهم </strong>
                                        </span>
										<div>
                                     <?=$num_Specializations?> 
										</div>
                                    </td>
                                </tr>  
                             
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong> سبب تفكيرك فى هذا المشروع </strong>
                                        </span>
										<div>
                                     <?=$think_project?> 
										</div>
                                    </td>
                                </tr>  
                             
                                     <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  <?=lang('am_attach_project')?> </strong>
                                        </span>  <?php
																						 
$attach= explode(",", $attach);
foreach($attach as $ImagePath ){ 																 																		 $imgUser =  base_url().'upload/'.$ImagePath;
																							if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=NULL){
																								?> 
 																									<a href="<?=$imgUser?>" ><span class="fa fa-download"></span><?=$imgUser?></a>
																								  </div>
																								<?php
																							}
}
																				 ?> 
										<div>
                                                      
										</div>
                                    </td>
                                </tr>  
                           
                            </tbody>
                        </table>
                    </td>
                </tr>
                
            </tbody></table>
            </td>
</tr>
        </tbody></table>
 
