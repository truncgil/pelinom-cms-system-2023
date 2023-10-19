<?php 
function col($size,$title="",$color="0",$options=[]) {
    $id = str_slug($title);
    $colors = colors();
   
     ?>
     <div class="<?php echo $size ?>">
        <div class="block block-themed" id="<?php echo $id; ?>">
            <?php if($title!="") {
                 ?>
                 <div class="block-header bg-<?php echo $colors[$color]; ?>">
                    <div class="block-title"><?php echo $title ?></div>
                    
                </div>
                 <?php 
            } ?>
            
            <div class="block-content">
               
           
     <?php 
}
function _col() {
     ?>
      </div>
        </div>
    </div>
     <?php 
}