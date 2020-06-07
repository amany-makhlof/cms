<?php extract($dataArray); ?>
    
<main class="main-content p-5" role="main">
    <div class="row">
        <div class="col-md-12">
            <h1> <?=lang('am_idea') ;?></h1>
         </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col-md-12 pb-5">
                                         </div>
                                        
                                        <div class="col-lg-12 pb-5">   
                                          <a class="btn btn-info" href="<?=site_url('admin/Cms/EditSub/rqwerew8s9f7dssfaeaewe4fsd564f5d6sfewdfstefedfsaasfdfd')?>" ><?=lang('am_Edit_data').' '.lang('am_idea'); ?><span class="fa fa-edit"></span></a>

                                          <table id="example" class="display nowrap table table-bordered table-striped table-hover table-responsive" cellspacing="0" width="100%">
                                                   <thead>
                                                            <tr>
                                                                <th>  </th>
                                                                <th><?= lang('am_full_name')?> </th>
                                                                <th><?= lang('am_thought')?></th> 
                                                                <th><?= lang('date') ?></th>
                                                                <th></th>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($items as $item): ?>
                                                            <tr>    
                                                                <th>  </th>
                                                                <td >
																	<?php 
																		   echo $item->full_name	 ;
																	  
																	?>
                                                                </td>
                                                                <td>
																<?php 
																 switch($item->thought){
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
																   }?>    
                                                                </td>
                                                                <td><?=$item->Date;?></td>
                                                                <td>
                                                                     <a class="btn btn-info" href="<?=site_url('admin/Idea/edit/'.$item->Token);?> " ><span class="fa fa-search"></span></a>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>                     
                                        </div>                                        

                                        
                                </div>
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