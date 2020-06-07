<?php extract($dataArray); ?>
     <?php 
	   $Name="";
	   $sub_Token=""; 
	 	if($Dep){  
					$Name      = $Dep->Name;
					$sub_Token = $Dep->Token; 
		 }
	 ?>
<main class="main-content p-5" role="main">
    <div class="row">
        <div class="col-md-12">
            <h1> <?=$Name ;?></h1>
          </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
          <a class="btn btn-info" href="<?=site_url('admin/Cms/EditContact')?>" ><?=lang('am_Edit_data').' '.$Name ?> <span class="fa fa-edit"></span></a>
                                <?php /*?><div class="row">
                                        <div class="col-md-12 pb-5">
                                            <a class="btn btn-info" href="<?= site_url('admin/Cms/add/'.$sub_Token)?>" ><?=lang('am_add_item');?></a>
                                            <input id="depToken" value="<?=$sub_Token;?>" type="hidden" >
                                        </div>
                                        
                                        <div class="col-lg-12 pb-5">   
                                          <table id="example" class="display nowrap table table-bordered table-striped table-hover table-responsive" cellspacing="0" width="100%">
                                                   <thead>
                                                            <tr>
                                                                <th>  </th>
                                                                <th><?= lang('am_title')?> </th>
                                                                <th><?= lang('am_image')?></th> 
                                                                <th><?= lang('date') ?></th>
                                                                <th></th>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($items as $item): ?>
                                                            <tr>    
                                                                <th>  </th>
                                                                <td id="name_<?=$item->ID;?>">
																	<?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $item->Title_en ;
																	  }else{
																		   echo $item->Title ;
																		  }  
																	?>
                                                                </td>
                                                                <td><?php
																		 $ImagePath = $item->ImagePath; 
																	     $imgUser =  base_url().'upload/'.$ImagePath;
																		 	if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=NULL){
																				?> 
                                                                                 <div class="profile-picture bg-gradient bg-primary has-message float-right">
																				 	<a href="<?=$imgUser?>" ><img src="<?=$imgUser?>" width="44" height="44"></a>
                                                                                  </div>
																				<?php
																			}
																 ?></td>
                                                                <td><?=$item->Date;?></td>
                                                                <td>
                                                                    <a class="btn btn-info" href="<?=site_url();?>admin/Cms/edit/<?=$item->Token;?>" ><span class="fa fa-edit"></span></a>
                                                                    <a class="btn btn-danger" onclick="approve(<?=$item->ID?>)"  ><span class="fa fa-trash-o"></span></a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>                     
                                        </div>                                        

                                        
                                </div><?php */?>
                        </div>
                </div>
        </div>
    </div> 
    <script>
		$(document).ready(function() {
			$('#example').DataTable( {
				responsive: {
					details: {
						type: 'column'
					}
				},
				columnDefs: [ {
					className: 'control',
					orderable: false,
					targets:   0
				} ],
				order: [ 1, 'asc' ]
			} );
		} );
		
		
		
	//	/////start rate
		var $star_rating = $('.star-rating .fa');
	
		var SetRatingStar = function() {
		  return $star_rating.each(function() {
			if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
			  return $(this).removeClass('fa-star-o').addClass('fa-star');
			} else {
			  return $(this).removeClass('fa-star').addClass('fa-star-o');
			}
		  });
		};
		
		$star_rating.on('click', function() {
		  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
		  return SetRatingStar();
		});
		
		SetRatingStar();
		$(document).ready(function() {
		
		});
	/////end rate
         function approve (id){
		  var depToken = $("#depToken").val();
          var result   = confirm("  تاكيد الموافقه على   : "+$("#name_"+id).text()+" ؟");
          if (result) {
                var data = { 'id' : id   };
                $.ajax({
                        type : 'post',
                        data : data,
                        cache : false,
                        url : '<?= site_url();?>admin/Cms/delete',
                        success : function(response){
                            //window.location
                             if(response.status == 1 ){
                                window.location = '<?= site_url();?>admin/Cms/getDep/'+depToken;
                             }else{
                                 alert('يوجد خطاء حاول مره اخرى');
                             }    
                        }
                        });
		}
	}
 
    </script>
    <style>
    .star-rating {
	  line-height:32px;
	  font-size:1.25em;
	}
	
	.star-rating .fa-star{color: gold;}
    </style>