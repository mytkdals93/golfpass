
<?php if(is_semantic_dev) {?>
    <link rel="stylesheet/less" type="text/css" href="/public/framework/semantic/src/semantic.less">
<script src="/public/framework/semantic/src/less.min.js"></script>
<?php }else{?>
<link rel="stylesheet" type="text/css" href="/public/framework/semantic/out/semantic.css">
<link rel="stylesheet" type="text/css" href="/public/framework/semantic/out/semantic.js">
<?php }?>


 
<div style="margin-top:50px;"></div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/public/etc/kimmincastle/blog_detail.css">

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar,
    h1,
    button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
    .j-title
    {
        font-family:'notokr-medium', sans-serif;
        font-size:32px;
        font-weight:800;
        color: #4d5256;
    }
    
#desc p img {
    width: 100% !important;
    height: auto !important;
}
</style>
<div id="tp-panel-wrap">
	<article id="tp-panel-article" class="tp-container-fluid">
					 <div class="tp-row tp-text-center">
							 <div class="tp-col-12">
								 
									 <h1 id='tp-panel-title' class="tp-text-center">
							
							
										 <span>골프패스</span> <?=$board->name?></h1>

											
<div class="ui centered grid container">
<div class="row"  style="max-width:700px;">
<div class="ui four item stackable tabs menu">
    <a class="<?=$board->id==="4" ? "active" : ""?> item" href="<?=site_url(content_uri."/gets?board_id=4")?>">공지사항</a>
    <a class="<?=$board->id==="3" ? "active" : ""?> item"  href="<?=site_url(content_uri."/gets?board_id=3")?>">FAQ</a>
    <a class="<?=$board->id==="2" ? "active" : ""?> item"  href="<?=my_site_url(content_uri."/gets?board_id=2&is_user=true")?>">1:1 문의</a>
    <a class="item"  href="<?=my_site_url(shop_mypage_uri."/gets_wishlist")?>">마이페이지</a>
    </div>
</div>
</div>
								 
                             </div>
                             
                            </div>
</article>
</div>
    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
       
        <div class="w3-content">
            <div class="w3-twothird">
                <h1 class="j-title" style="text-align:center"><?=$content->title?></h1>
                <div style="margin-top:80px;"></div>
             
                <div id="desc" class="w3-text-grey" style="color:black"><?=$content->desc?></div>
            </div>
        </div>
    </div>


<?php if($board->id === "2"){?>
    
<div class="ui grid container">
    <div class="sixteen wide column">
<!-- 코멘트시작 -->
<div class="ui comments">
    <h3 class="ui dividing header">댓글 목록</h3>
<?php for($i =0; $i<count($replys); $i++){?>


    <div class="comment" style="margin-left:<?=50*(int)$replys[$i]->deep?>px;">
        <a class="avatar">
        <img src="/public/images/ico_my.png">
        </a>
        <div class="content">
        <a class="author"><?=$replys[$i]->user_name?></a>
        <div class="metadata">
            <span class="date"><?=$replys[$i]->created?></span>
        </div>
        <div class="text">
        <?=$replys[$i]->desc?>
        </div>
        <div class="actions">
            <?php if($replys[$i]->deep === "0"){?>
            <a class="reply reply_answer" data-id="<?=$replys[$i]->id?>" onclick="append_answer_form(this); return false;" href="#">답글</a>
            <?php }?>
            <?php if($replys[$i]->user_id === $user->id){?>
            <a class="reply reply_alert" onclick="ajax_a(this); return false;" data-callback='ajax_update_form_callback' data-action='<?=site_url(content_reply_uri."/ajax_update_form")?>' data-querystring='{"id":"<?=$replys[$i]->id?>"}' href="#">수정</a>
            <a onclick="confirm_callback(this,ajax_a,'삭제하시겠습니까?'); return false;" data-action="<?=site_url(content_reply_uri."/ajax_delete/{$replys[$i]->id}")?>" href="#">삭제</a>
            <?php }?>
        </div>
        </div>
    </div>
    <?php }?>
</div>
    <!-- 코멘트 끝 -->

    <!-- 댓글쓰기폼 시작 -->
    <?php if(can_guest($board->auth_w_review) || is_login()){?>
        <form  class="ui reply form" onsubmit="ajax_submit(this);return false;" action="<?=my_site_url(content_reply_uri."/ajax_add/0",true)?>" method="post" >
            <input type="hidden" name="content_id" value ="<?=$content->id?>">
            <div class="field">
                <textarea placeholder="댓글내용" id="review_desc"   cols="50" rows="5" cols="2"rows="5" type="text" name="desc"></textarea> 
                <?=form_error('desc',false,false)?>
            </div>
        <?php if(can_guest($board->auth_w_review) && is_guest()){?>
            <input placeholder="아이디" type="text" name ="guest_name">
            <input placeholder="비밀번호" type="password" name ="guest_password">
        <?php }?>

        <button type="submit" class="ui basic labeled submit icon button" >
        <i class="icon edit"></i> 댓글 달기
    </button>
        </form>

    <?php }else{?>
    <br>
        로그인하셔야 댓글을 쓸수 있습니다. 
        <a href="<?=site_url(user_uri."/login?return_url=".rawurlencode(my_current_url()))?>">login</a>
    <br>
    <?php }?>
    <!-- 댓글쓰기폼 끝 -->
    </div>

    </div>
<?php }?>
    
    
<div class="ui grid container">


<div class="sixteen wide column">
<a class="ui button basic"href="<?=site_url(content_uri."/gets?board_id={$content->board_id}&is_user=".$this->input->get("is_user")."&offset=".$this->input->get("offset"))?>">목록으로</a>
<?php if($user->id === $content->user_id){?>
<a class="ui button basic" href="<?=site_url(content_uri."/update/{$content->id}?board_id={$board->id}")?>">수정</a>
        <a class="ui button basic" onclick="confirm_redirect('<?=site_url(content_uri."/delete/{$content->id}?board_id={$board->id}")?>','정말 삭제하시겠습니까? 복구 할 방법이 없습니다.')" href="#">삭제</a>
<?php }?>
   </div>
    </div>






<!--복사용 수정폼 시작 -->
<div id='nid_form_update'  style ="display:none; margin-left:50px;margin-top:15px;" >
<form class="ui form" onsubmit="ajax_submit(this);return false;" method="POST" action="">
    <textarea name="desc" id="" cols="30" rows="5" placeholder="수정할 댓글내용"></textarea>
    <?php if(is_guest()&& can_guest($board->auth_w_review)){?>
    <br>
    <input type="password" name="guest_password" placeholder="비밀번호">
    <?php }?>
    <input class="mini ui button basic" type="submit" value="수정">
</form>
</div>
<!-- 복사용 수정폼 끝-->


<!-- 복사용 답글폼 시작-->
<div id='nid_form_answer' style ="display:none;margin-left:50px;" >
      <form  class="ui form" onsubmit="ajax_submit(this);return false;" method="POST" action="">
        <input type="hidden" name="content_id" value ="<?=$content->id?>">
        <br><input type="hidden" name="board_id" value ="<?=$board->id?>">
            <textarea placeholder="답글내용" id="review_desc"   cols="50" rows="5" cols="2"rows="5" type="text" name="desc" value=""></textarea> <?=form_error('desc',false,false)?><br>
        <?php if(can_guest($board->auth_w_review) && is_guest()){?>
            <input placeholder="아이디" type="text" name ="guest_name">
            <input placeholder="비밀번호" type="password" name ="guest_password">
        <?php }?>
        <input class="mini ui button basic"type="submit" value="답글">
    </form>
    </div>



<!-- 복사용 답글폼 끝-->
<!-- 복사용 게스트 삭제폼 시작 -->
<div id='nid_form_delete_guest' style="display:none">
    <form  onsubmit="confirm_callback(this,ajax_submit,'삭제하시겠습니까?'); return false;"  action="">
        <br>
        <input type="password" name="guest_password" placeholder="비밀번호">
        <input type="submit" value ="삭제">
    </form>
</div>
<!-- 복사용 게스트 삭제폼 끝 -->

<script>
function ajax_update_form_callback(e,data){
    var $e =$(e);
    var sw=$e.data("sw");
    var el=$e.parents(".comment")[0];
    $e.siblings(".reply_answer").data("sw","off");

    $(el).find("#nid_form_answer").remove();
    if(typeof sw === "undefined" || sw==="off")
    {
        $e.data("sw","on");
        var review =data['review'];
        var action = '<?=site_url(content_reply_uri."/ajax_update/")?>'+review.id;
        
        var $formWapper = $('#nid_form_update').clone();
        $formWapper.css('display','block');
        $form=$formWapper.find("form");
        $form.attr('action',action);
        $form.find('textarea').text(review.desc);
        $(el).append($formWapper);
    }
    else
    {
        $e.data("sw","off");
       
        $(el).find("#nid_form_update").remove();
       
    }
   
}

function append_answer_form(e){
    // e.style.display = 'none';
    var $e = $(e);
    var el=$e.parents(".comment")[0];
    $(el).find("#nid_form_update").remove();
    $e.siblings(".reply_alert").data("sw","off");
    var sw=$e.data("sw");
    if(typeof sw === "undefined" || sw==="off")
    {
        $e.data("sw","on");
        var id = $e.data('id');
        var action = '<?=site_url(content_reply_uri."/ajax_add/")?>'+id;

        var $form_wapper = $('#nid_form_answer').clone();
        var $form = $form_wapper.find("form");
        $form_wapper.css('display','block');
        $form.attr('action',action);

        // var el=$e.parents("li")[0];
        $(el).append($form_wapper);

        return true;
    }else
    {
        $e.data("sw","off");
        $(el).find("#nid_form_answer").remove();
      

    }
  
}

function append_delete_pw_form(e){
    // e.style.display = 'none';
    var $e = $(e);
    var sw=$e.data("sw");
    if(typeof sw === "undefined" || sw==="off")
    {
        $e.data("sw","on");
        var id = $e.data('id');
        var action = '<?=site_url(content_reply_uri."/ajax_delete/")?>'+id;

        var $formWapper = $('#nid_form_delete_guest').clone();
        $formWapper.css('display','block');
        var $form =$formWapper.find("form");
        $form.attr('action',action);

        var el=$e.parents(".comment")[0];
        $(el).append($formWapper);

        return true;
    }
    else
    {
        $e.data("sw","off");
        var el=$e.parents(".comment")[0];
        console.log(el);
        $(el).find("#nid_form_delete_guest").remove();
    }
  
}
</script>