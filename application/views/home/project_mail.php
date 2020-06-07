 
 
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
                                            <strong> الاسم بالكامل  :     <?= $full_name?></strong>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px solid #f5f5f5;border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:14px;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>النوع :  <?php 
								   
								   switch($gender){
									   case 2:
									        echo lang('am_male');
									   		break;
									   case 1:
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
                                                <strong>تاريخ الميلاد : <?= $age?>   </strong>
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
                                            <strong> العنوان : 
                                             <?=$adderss?>  
                                            </strong>
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
                                            <strong>   الجامعة  :  
                                             <?=$Educational?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>   سنة التخرج  :  
                                             <?=$Graduation_Year?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  رقم عضوية النقابة   :  
                                             <?=$Membership_No?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  التخصص :  
                                             <?=$achievements?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                
                                <tr style="display:none">
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  

الخدمات الطبيه :  
                                             <?=$achievements2?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  

 إضافة الشهادات العلميه الأخري و الهيئات التي عملت بها حتي الآن :  
                                             <?=$achievements3?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                
                              
                                <tr style="display:none">
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                        <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>  
                                              إضافة الأنواع المختلفه من الأمراض المرتبطة بتخصصك :  
                                             <?=$achievements4?>  
                                            </strong>
                                        </span>
                                    </td>
                                </tr>    
                                     <tr>
                                    <td style="border-left:0px solid #f5f5f5;border-right:0px solid #f5f5f5;border-top:0px solid #f5f5f5;font-family:Arial,Helvetica,sans-serif;font-size:16x;padding:10px;text-decoration:none;line-height:20px" valign="middle" align="right" bgcolor="#FFFFFF">
                                       <span style="font-size:16px;text-transform:uppercase;text-decoration:underline">
                                            <strong>   المرفقات</strong>
                                        </span> <?php
																						 
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
 
