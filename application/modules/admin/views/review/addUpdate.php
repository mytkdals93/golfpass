
<!-- <div class="sixteen wide column"> -->

<?php if(strpos($mode,"update") !== false){?>
    <h3 class="ui header">상품명 : <?=$content->product_name?></h3>
    <h3 class="ui header">글쓴이 : <?=$content->user_name?></h3>
    <div class="ui divider"></div>    
    <br>

    <?php }?>   
    <form class="ui form" action="<?=site_url(admin_product_review_uri."/$mode")?>" method="post">


    <div class="two fields">
        <div class="field">
            <label>상품후기 보이기</label>
            <input type="radio" name="is_display" value="1" <?=my_set_checked($content,'is_display','1')?>>예
            <input type="radio" name="is_display" value="0" <?=my_set_checked($content,'is_display','0')?>>아니오
        </div>
        <div class="field">
            <label>상품 후기 점수적용 </label>
            <input type="radio" name="is_secret" value="0" <?=my_set_checked($content,'is_secret','0')?>>예
            <input type="radio" name="is_secret" value="1" <?=my_set_checked($content,'is_secret','1')?>>아니오
        </div>
    </div>

    <div class="four fields">

        <div class="field">
            <label>점수1</label>
            <input type="text" name="score_1">
        </div>
        <div class="field">
            <label>점수2</label>
            <input type="text" name="score_2">
        </div>
        <div class="field">
            <label>점수3</label>
            <input type="text" name="score_3">
        </div>

        <div class="field">
            <label>점수4</label>
            <input type="text" name="score_4">
        </div>
    

    </div>

    <div class="four fields">
          <div class="field">
            <label>점수5</label>
            <input type="text" name="score_5">
        </div>
        <div class="field">
            <label>점수6</label>
            <input type="text" name="score_6">
        </div>
        <div class="field">
            <label>점수7</label>
            <input type="text" name="score_7">
        </div>
        <div class="field">
            <label>점수8</label>
            <input type="text" name="score_8">
        </div>
    </div>









<input placeholder="제목" type="text" name="title" value="<?=set_value_data($content,'title')?>" > <?=form_error('title',false,false)?><br> 
<textarea placeholder="내용" name="desc" rows="10" cols="80">
<?=set_value_data($content,'desc')?>
</textarea>
<?=form_error('desc',false,false)?>
<?php if(strpos($mode,"add") !== false){?>
    
    <div class="grouped  fields">
        <label for="product_id">상품목록</label>
        <br>
        <div style="color:red"><?=form_error('product_id',false,false)?></div>
        <?php for($i=0 ; $i<count($products) ; $i++){
        if($i%5 === 0) echo "<br>"    ;?>
        <div class="field" >
            <div class="ui radio checkbox" >
                <input type='radio' name='product_id' value='<?=$products[$i]->id?>' <?=my_set_checked($content,'product_id','<?=$products[$i]->id?>')?>/>
                <label><a href="<?=my_site_url(admin_product_uri."/update/{$products[$i]->id}")?>"><?=$products[$i]->name?></a></label>
            </div>
        </div>
        <?php }
        ?>
    </div>
    
<?php }?>
<input style="margin-top:10px;"class="ui button basic positive"type="submit" value="보내기">
</form>


<!-- ckeditor -->
<script src="<?=domain_url('/public/lib/ckeditor/ckeditor.js')?>"></script>
<script>
 CKEDITOR.replace( 'desc',{
    filebrowserUploadUrl: '/index.php<?=common_uri?>/upload_receive_from_ck'
 } );

</script>
