총금액<?=$total_price?>
<form id="form_order" onsubmit="check_payment(this);return false;"method="post"action="<?=site_url(shop_order_uri."/ajax_check_payment")?>">
<input type="hidden" name="product_id" value="<?=$product_id?>">
    <input type="hidden" name="start_date" value="<?=$start_date?>">
    <input type="hidden" name="end_date" value="<?=$end_date?>">
    <input type="hidden" name="num_people" value="<?=$num_people?>">
    <input type="hidden" name="total_price" value="<?=$total_price?>">

    홀수 추가
    <input type="text">

    <br>
    싱글룸추가
    <input type="text">

    <br>
    기타옵션 추가
    <input type="text">

    <br>
    동행자 정보 입력(<?=$num_people-1?>명)
    <?php for($i = 0 ; $i < $num_people-1; $i++){ ?>
    <br><input type="text" name="name_with[]" placeholder="이름">
    <?php }?>
    <br>
<!-- <input type="submit" value="예약"> -->



 주문자이름<input type="text" name="user_name" value="<?=set_value_data($user,'user_name')?>"><br>
 <input type="hidden" name="order_name" value="<?=$product->name?>">
 <input type="hidden" name="total_price" value="<?=$total_price?>">
 <input type="hidden" name="merchant_uid">

 <select name="pay_method" id="">
    <option value="card">신용카드</option>
    <option value="trans">실시간계좌이체</option>
    <option value="vbank">가상계좌</option>
    <option value="phone">휴대폰소액결제</option>
    <!-- 이니시스 전용 -->
    <option value="samsung">삼성페이</option> 
    <!-- 이니시스 전용 -->
    <option value="kpay">KPay앱 직접호출</option>
    <!-- 이니시스, LGU+ 전용 -->
    <option value="cultureland">문화상품권</option>
    <!-- 이니시스, LGU+ 전용 -->
    <option value="smartculture">스마트문상</option> 
    <option value="happymoney">해피머니</option> 이니시스 전용
 <!-- LGU+전용 -->
 <!-- <option value="booknlife">도서문화상품권</option> -->
 </select>

<input type="submit" value="주문하기">


<!-- <input type="submit"> -->

</form>

</article>
<script src="https://service.iamport.kr/js/iamport.payment-1.1.5.js" type="text/javascript"></script>


<script>

//아이엠포트 초기화
$(document).ready(function(){
    
    IMP.init('imp52394971'); // 아임포트 관리자 페이지의 "시스템 설정" > "내 정보" 에서 확인 가능
})

//결제 ajax로 총가격 체크후 iamport api 불러오기
function check_payment(e)
{

    var $form = $(e);

    var queryString = $form.serialize();
    var url = $form[0].action;
    var pay_method = $(e).find("select[name=pay_method] option:selected").val();
    $.ajax({
        type: "POST",
        dataType : 'json',
        data: queryString,
        url: url,
        beforeSend: function(){
            $('.loading').fadeIn(500);
        },
        success:function(data){
            if(data.is_check === true){ //총금액과 계산이 맞다면
                //
                var product =data.product; //상품정보
                var totalPrice = data.total_price; // 총금액
                var merchant_uid = 'merchant_' + new Date().getTime(); //고유주문번호 merchant_uid
                var user = data.user; //서버에서 받아온 유저정보 (휴대폰 번호 저장위해서)
                var name = $(e).find("input[name=user_name]").val(); //유저정보
                var pay_method = $(e).find("select[name=pay_method] option:selected").val();
                var email = user.email;
                var phone = user.phone;
                var address = user.address;
                //----------------아이엠포트 결제모듈 불러오기 시작-------------
                IMP.request_pay({
                    pg : 'html5_inicis',
                    pay_method : pay_method,
                    escrow : false,
                    merchant_uid :merchant_uid,
                    name : product.name,
                    amount : totalPrice,
                    buyer_email : email,
                    buyer_name : name,
                    buyer_tel : phone,
                    buyer_addr : address,
                    buyer_postcode : '000-000'
                }, function(rsp) {
                    // var rsp =rsp;
                    var payment_check;
                    if ( rsp.success ) {
                        //[1] 서버단에서 결제정보 조회를 위해 jQuery ajax로 imp_uid 전달하기
                        $.ajax({
                            url: "<?=site_url(shop_order_uri."/ajax_payment_check_update")?>", //cross-domain error가 발생하지 않도록 동일한 도메인으로 전송
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                imp_uid : rsp.imp_uid,
                                merchant_uid : rsp.merchant_uid,
                                pay_method : rsp.pay_method,
                                status : rsp.status,
                                apply_num :rsp.apply_num,
                                vbank_num :rsp.vbank_num,
                                vbank_name :rsp.vbank_name,
                                vbank_holder :rsp.vbank_holder,
                                vbank_date :rsp.vbank_date,
                                success : rsp.success
                                //기타 필요한 데이터가 있으면 추가 전달
                            },
                            success :function(data){
                                payment_check = data['payment_check'];
                            }
                        }).done(function(data) {
                            //[2] 서버에서 REST API로 결제정보확인 및 서비스루틴이 정상적인 경우
                            if ( payment_check ==='paid' || payment_check === 'vbank' ) {

                                var merchant_uid = rsp.merchant_uid.substring(9,rsp.merchant_uid.length);
                                window.location.href = "<?=site_url(shop_order_uri.'/complete')?>"+"/"+merchant_uid;
                            
                                // var msg = '결제가 완료되었습니다.';
                                // msg += '\n고유ID : ' + rsp.imp_uid;
                                // msg += '\n상점 거래ID : ' + rsp.merchant_uid;
                                // msg += '\결제 금액 : ' + rsp.paid_amount;
                                // msg += '카드 승인번호 : ' + rsp.apply_num;
                
                                // alert(msg);
                            } else {
                                $.ajax({
                                    url: "<?=site_url(shop_order_uri."/ajax_payment_error_cancel")?>", //cross-domain error가 발생하지 않도록 동일한 도메인으로 전송
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {
                                        imp_uid : rsp.imp_uid,
                                        merchant_uid : rsp.merchant_uid
                                        //기타 필요한 데이터가 있으면 추가 전달
                                    }
                                }).done(function(data){
                                    alert(payment_check + ": 정상적인 경로로 이용해주세요. 자동취소 됩니다.");
                                    //[3] 아직 제대로 결제가 되지 않았습니다.
                                    //[4] 결제된 금액이 요청한 금액과 달라 결제를 자동취소처리하였습니다.
                                });

                            
                            }
                        });
                    } else {
                        if(rsp.error_msg ==="사용자가 결제를 취소하셨습니다" ){
                            $.ajax({
                                url: "<?=site_url(shop_order_uri."/ajax_payment_user_cancel")?>", //cross-domain error가 발생하지 않도록 동일한 도메인으로 전송
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    merchant_uid : rsp.merchant_uid
                                    //기타 필요한 데이터가 있으면 추가 전달
                                }
                            })
                        }
                        var msg = '죄송합니다 .결제에 실패하였습니다. 다시 시도 해주세요.';
                        msg += '에러내용 : ' + rsp.error_msg;
                        console.log(msg);
                    }

                });
            }
            else //총금액이 틀리다면
            {
                alert("올바른 경로로 접근해주세요.");
                return false;
            }
            
        }
    });
}


</script>

