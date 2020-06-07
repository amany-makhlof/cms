<?php extract($dataArray); ?>
<script>
function get_Type(e){
    window.location = '<?= site_url();?>/admin/users/index/' + e;
}
</script>
<main class="main-content p-5" role="main">
    <div class="row">
        <div class="col-md-12">
            <h1> <?=lang('am_users');?></h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col-md-12 pb-5">
                                            <a class="btn btn-info" href="<?= site_url()?>admin/users/add" ><?=lang('adduser');?></a>
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label active">Zip-Code</label>
                                                <select onchange="get_Type(this.value)" class="cep form-control" autocomplete="off" >
                                                    <option selected disabled > انواع المستخدمين </option>
                                                    <option value=""  > الكل  </option>
                                                    <option <?php if($this->uri->segment('4') == 'S'){ echo 'selected'; } ?> value="S" >  طلاب </option>
                                                    <option <?php if($this->uri->segment('4') == 'C'){ echo 'selected'; } ?> value="C"  >  مدربين </option>
                                                </select>
                                        </div>
                                        <div class="col-lg-12 pb-5">
                                              
                                                <table id="datatable-1" class="table table-bordered table-datatable table-striped table-hover table-responsive">
                                                    <thead>
                                                            <tr>
                                                                <th><?= lang('name')?> </th>
                                                                <th><?= lang('email')?></th>
                                                                <th><?= lang('Country')?></th>
                                                                <th><?= lang('UserType') ?></th>
                                                                <th><?= lang('date') ?></th>
                                                                <th></th>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($users as $u): ?>
                                                            <tr>
                                                                <td id="name_<?=$u->ID;?>"><?=$u->Name;?></td>
                                                                <td><?=$u->Mail;?></td>
                                                                <td><?=$u->NameCountry;?></td>
                                                                <td>
                                                                    <?php if($u->Type == 'S'){ ?>
                                                                        <?= lang('Student')?>
                                                                    <?php }else{ ?>
                                                                        <?= lang('trainer')?>
                                                                    <?php } ?>
                                                                </td>
                                                                <td><?=$u->date;?></td>
                                                                <td>
                                                                    <a class="btn btn-info" href="<?=site_url();?>admin/users/edit/<?=$u->ID;?>" ><span class="fa fa-edit"></span></a>
                                                                    <a class="btn btn-danger" onclick="approve(<?=$u->ID?>)"  ><span class="fa fa-trash-o"></span></a>
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
        
            function approve (id){
          var result = confirm("  تاكيد الموافقه على   : "+$("#name_"+id).text()+" ؟");
          if (result) {
                var data = { 'id' : id   };
                $.ajax({
                        type : 'post',
                        data : data,
                        cache : false,
                        url : '<?= site_url();?>admin/users/delete',
                        success : function(response){
                            //window.location
                             if(response.status == 1 ){
                                window.location = '<?= site_url();?>admin/users';
                             }else{
                                 alert('يوجد خطاء حاول مره اخرى');
                             }    
                        }
                        });
		}
	}
        
      
    </script>