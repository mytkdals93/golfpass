
<?php if(strpos($mode,"update")> -1) echo "id $category->id"?>
<form action="<?=my_site_url(admin_product_category_uri."/$mode")?>" method="post">
<상속카테고리><input type="text" name="parent_id" value="<?=set_value_data($category,'parent_id')?>"><?=form_error('parent_id',false,false)?><br> 
<카테고리이름><input type="text" name="name" value="<?=set_value_data($category,'name')?>"> <?=form_error('name',false,false)?><br> 
<카테고리설명><input type="text" name="desc" value="<?=set_value_data($category,'desc')?>"> <?=form_error('desc',false,false)?><br> 
<input type="submit" value="보내기">
</form>
<!-- 이미지 업로드폼 시작 -->
<br>

<?php if(strpos($mode, "update") >-1 ){?>
<form  method="POST" action="<?=my_site_url(admin_product_category_uri."/upload_photo")?>" enctype='multipart/form-data'>
    <input type='file' name='photo'/>
    <input type="hidden" name='category_id' value="<?=$category->id?>"/>
  
    <input type="submit" value="보내기"style="">
</form>
<img style="width:200px; height:auto;"  src="<?=$category->photo?>" alt="">
<?php }?>
<!-- 이미지 업로드폼 끝 -->
<br>
<br>

상품 추가하기


추가된 상품 리스트
<ul>
    <?php for($i=0; $i<count($products) ; $i++){?>
        <li><a href="<?=my_site_url(admin_product_uri."/update/{$products[$i]->id}")?>"><?=$products[$i]->name?></a></li>
        <a onclick="confirm_redirect('<?=my_site_url(admin_ref_cate_product_uri."/delete/{$products[$i]->ref_id}")?>','정말 삭제하시겠습니까? 복구 할 방법이 없습니다.')" href="#">삭제</a>
    <?php }?>

</ul>
<a href="<?=my_site_url(admin_product_category_uri."/gets")?>">목록으로</a>