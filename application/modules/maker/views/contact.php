<!-- Standard Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">


<?php if(is_semantic_dev) {?>
    <link rel="stylesheet/less" type="text/css" href="/public/framework/semantic/src/semantic.less">
<script src="/public/framework/semantic/src/less.min.js"></script>
<?php }else{?>

    <link rel="stylesheet" type="text/css" href="/public/framework/semantic/out/semantic.js">
<?php }?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css"> -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>


<div style="margin-top:120px;"></div>


<div class="ui grid container" style="margin-top:100px;">
      
        <div class="sixteen wide column">
            <div class="sixteen wide column">
                <div class="ui four item stackable tabs menu">

                    <a class="active item" data-tab="definition">공지사항</a>


                    <a class="item" data-tab="examples">이용방법</a>


                    <a class="item" data-tab="usage">자주묻는 질문</a>


                    <a class="item" data-tab="settings">1:1 문의</a>


                </div>
            </div>
        </div>
        <div class="sixteen wide column">
            <h1 class="ui header">공지사항</h1>
            <table class="ui green table responsive">
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>내용</th>
                        <th>조회수</th>
                        <th>날자</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>샘플 제목</td>
                        <td>샘플 내용</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>

        </div>
    
    </div>