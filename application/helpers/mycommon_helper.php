<?php
if(!function_exists("showAlert")){
    function showAlert($msg,$type){
        if($msg){
            switch ($type) {
                case 'success':
                    showSuccessMessage($msg);
                    break;
                case 'error':
                    showErrorMessage($msg);
                default:
                    # code...
                    break;
            }
        }
    }

    function showSuccessMessage($msg){
        ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?=$msg?>
              </div>
        
        <?php
    }

    function showErrorMessage($msg){
        ?>
          <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?=$msg?>
              </div>
        <?php
    }


}





?>