

<?php if (is_semantic_dev) {?>
    <link rel="stylesheet/less" type="text/css" href="/public/framework/semantic/src/semantic.less">
<script src="/public/framework/semantic/src/less.min.js"></script>
<?php } else {?>
<link rel="stylesheet" type="text/css" href="/public/framework/semantic/out/semantic.css">
<link rel="stylesheet" type="text/css" href="/public/framework/semantic/out/semantic.js">
<?php }?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css"> -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>



<div class="ui middle aligned center aligned grid">
    <div class="column" style="   max-width: 700px;">
        <div class="ui two column grid">
            <div class="column" style="margin: 0 auto; cursor: pointer;" onclick="location.href='<?=site_url(user_uri."/add")?>';">
                <div class="ui fluid card">
                    <div class="image">
                        <img src="/public/images/register.jpeg" style="width: 100%; height: 50%; margin: 0 auto;">
                    </div>
                    <div class="content">
                        <a href="#"class="header">개인 회원 가입</a>
                        <p><br>이제 해외 골프장도 직접 선택하세요.<br>"골프패스"는 해외골프 직거래 서비스를 제공합니다.<br>"골프패스"를 통해 전세계의 골프장을 자유롭게 투어하세요!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui horizontal divider">
                Or
            </div>
            <a href="javascript:open_popup('<?=site_url(api_facebook_uri."/request_auth")?>','facebook','800','880');" class="ui facebook fluid large submit button" style="margin-bottom:10px;"><i class="facebook icon"></i>페이스북으로 로그인</a>
            <a href="javascript:open_popup('<?=site_url(api_naver_uri."/request_auth")?>','naver');" class="ui naver fluid large submit button" style="margin-bottom:10px;">네이버로 로그인</a>
            <a href="javascript:open_popup('<?=site_url(api_kakao_uri."/request_auth")?>','kakao');" class="ui kakao fluid large submit button"><i class="kakao icon"></i>카카오로 로그인</a>
    </div>
</div>
<!-- 약관 동의 모달 -->
<div class="ui basic modal" style="margin-top:-500px;" >
  <div class="ui icon header">
    <i class="archive icon"></i>
    약관동의
  </div>
  
  <div class="content">
      <div>
          <div class="ui header" style="color:white">
            이용약관(필수)
          </div>
  <div class="ui segment" style="color:black;height:200px;overflow:scroll;">

제 1 장 총 칙<br>
<br>
제 1 조 (목적)<br>
이 이용약관 (이하 ‘약관’)은 ㈜플레이세븐(이하 ‘회사’)과 이용 고객(이하 ‘회원’)간에 회사가 제공하는 골프패스(www.golfpass.net)(이하 ‘서비스’)의 가입조건 및 이용에 관한 제반 사항과 기타 필요한 사항을 규정함을 목적으로 합니다.<br>
<br>
제 2 조 (이용약관의 효력 및 변경)<br>
(1) 본 약관은 회사에서 제공하는 서비스를 온라인으로 이용자에게 공시함으로써 효력이 발생합니다.<br>
(2) 회사는 합리적인 사유가 발생될 경우에는 "약관의규제에관한법률", "정보통신망이용촉진및정보보호등에관한법률(이하 "정보통신망법")" 등 관련법을 위배하지 않는 범위에서 이 약관을 변경 고지 할 수 있습니다.<br>
(3) 변경된 약관은 지체 없이 온라인에서 공지하며 동시에 효력을 발휘하며, 이용자의 권리 또는 의무 등 중요한 규정의 개정은 사전에 회원에게 공지합니다.<br>
(4) 이 약관에 동의하는 것은 정기적으로 웹을 방문하여 약관의 변경사항을 확인하는 것에 동의함을 의미합니다.<br>
(5) 회원이 변경된 약관에 동의하지 않을 경우 회사는 해당 회원의 서비스 이용을 제한하는 조치(부분 이용 정지, 회원 계약 해지)를 할 수 있습니다.<br>
(6) 변경된 약관의 효력 발생일로부터 7일 이후에도 회원이 거부의사를 표시하지 아니하고 서비스를 계속 이용할 경우 약관의 변경 사항에 동의한 것으로 간주됩니다.<br>
(7) 회사가 고지의 의무를 이행했음에도 불구하고 회원이 변경된 약관에 대한 정보를 알지 못해 발생하는 피해는 회사에서 책임지지 않습니다.<br>
<br>
제 3 조 (약관 외 준칙)<br>
(1) 본 약관은 회사가 제공하는 서비스에 관한 이용규정 및 별도 약관과 함께 적용됩니다.<br>
(2) 본 약관에 명시되지 않은 사항은 전기통신기본법, 전기통신사업법, 정보통신망이용촉진및정보보호에관한법(이하 "정통망법"), 정보통신 윤리강령, 전자서명법, 프로그램보호법, 통신비밀보호법 기타 관계 법령의 규정에 의거합니다.<br>
제 4 조 (용어의 정의)<br>
* 이 약관에서 사용하는 용어의 정의는 다음과 같으며, 추가적 용어는 관계법령 및 서비스 별 안내에서 정하는 바에 의합니다.<br>
1) 회원 : 회사와 서비스 이용 계약을 체결한 자<br>
2) 아이디(ID) : 회원식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 승인한 문자 또는 숫자로 이루어진 조합<br>
3) 이메일 : 회원의 인터넷 메일 계정<br>
4) 비밀번호 : 회원이 부여 받은 아이디(ID)와 일치된 회원임을 확인하고, 회원 자신의 비밀을 보호하기 위하여 회원이 정한 문자와 숫자의 조합<br>
5) 운영자 : 서비스의 전반적인 관리와 원활한 운영을 위하여 회사에서 선정한 사람<br>
6) 해지 : 회사 또는 회원이 서비스 개통 후 이용계약을 해약하는 것.<br>
7) 이용중지 : 회사가 약관에 의거하여 회원의 서비스 이용을 제한하는 것을 말합니다.<br>
8) 결제 : 회원이 특정한 유료 서비스의 이용을 위하여 온라인 입금, 휴대폰결제, 각종 신용카드, 계좌이체 등 결제 모듈을 이용하여 일정 금액을 지불 하는 행위를 말합니다.<br>
<br>
제 5 조 (서비스 제공을 위한 프로그램 설치 공지)<br>
(1) 회사는 이용자에게 안정적인 서비스를 제공하기 위해, 이용자의 PC나 각종 모바일 기기의 일부 저장공간이나 리소스를 활용하여, 서비스 이용 응용프로그램을 이용자의 동의를 통해 설치 적용할 수 있습니다.<br>
(2) 회사는 이용자에게 최적의 서비스를 제공하기 위해, 더 나은 기술이 있다고 판단되는 경우, 이용자의 동의를 통해 이용자의 PC나 각종 모바일 기기에 적용된 프로그램을 수정/보완 및 교체 할 수 있습니다.<br>
<br>
제 2 장 서비스 이용계약<br>
<br>
제 6 조 (이용 계약의 성립)<br>
(1) 이용계약은 이용자가 이용약관 내용에 대한 동의와 이용신청에 대한 회사의 이용승낙으로 성립됩니다.<br>
(2) 이 약관에 동의하고 회원가입을 한 회원은 약관 동의 시점부터 서비스 이용계약이 적용되며, 약관의 변경이 있을 경우에는 변경의 효력이 발생한 시점부터 변경된 약관의 적용을 받습니다.<br>
(3) 회사는 다음 각 호에 해당하는 이용 계약신청에 대하여는 이를 응낙하지 아니할 수 있습니다.<br>
1) 이름이 실명이 아닌 경우<br>
2) 다른 사람의 명의를 사용하여 신청한 경우<br>
3) 이용 신청 시 필요 내용을 허위로 기재하여 신청한 경우<br>
4) 사회의 안녕 질서 또는 미풍양속을 저해할 목적으로 신청한 경우<br>
5) 기타 회사가 정한 이용 신청요건이 미비 된 경우<br>
<br>
제 7 조 (서비스 이용 신청)<br>
(1) 회원으로 가입하여 본 서비스를 이용하고자 하는 이용고객은 회사에서 요청하는 소정의 정보(ID, 이메일, 연락처 등)를 제공하여야 합니다.<br>
(2) 모든 회원이 가입신청양식에 기재하는 회원정보는 실제 데이터인 것으로 간주됩니다. 만약, 허위사실을 입력한 회원은 법적인 보호를 받을 수 없으며, 서비스 이용 승낙 및 이용 시 제한을 받거나, 관계법령에 따라 처벌 받을 수 있습니다.<br>
(3) 회사는 서비스를 이용하는 회원에 대하여 등급별로 구분하여 이용시간, 이용회수, 서비스 메뉴 등을 세분하여 이용에 차등을 둘 수 있습니다.<br>
<br>
제 8 조 (개인정보 보호)<br>
(1) 회사는 관계법령이 정하는 바에 따라 이용자 등록정보를 포함한 이용자의 개인정보를 보호하기 위해 노력합니다. 이용자 개인정보의 보호 및 사용에 대해서는 관련법령 및 회사의 개인정보 보호정책이 적용됩니다.<br>
(2) 회사의 공식사이트 이외의 사이트에서는 회사의 개인정보 보호정책이 적용되지 않으며, 회사는 이용자의 귀책사유로 인해 노출된 정보에 대해서 일체의 책임을 지지 않습니다.<br>
<br>
제 9 조 (개인정보 이용)<br>
(1) 회사는 회원의 정보수집 시 서비스 제공에 필요한 최소한의 정보만을 수집합니다. 다음 사항을 필수사항으로 하며 그 외 사항은 선택사항으로 합니다.<br>
<br>
[필수사항]<br>
1) 성명<br>
2) 생년월일<br>
3) 주소<br>
4) 전화번호<br>
5) 이메일<br>
6) 회원 아이디(ID)<br>
7) 비밀번호<br>
8) 구력<br>
9) 평균 스코어<br>
10) 해외 골프 시 선호하는 국가<br>
11) 해외 골프 시 자주 가본 국가<br>
12) 해외 골프 시 향후 가고 싶은 국가<br>
 (2) 회사는 서비스 제공과 관련해서 수집된 회원의 신상정보를 본인의 승낙 없이 제3자에게 누설, 배포하지 않습니다. 단, 아래 경우에는 그러하지 않습니다.<br>
1. 전기통신기본법 등 법률 규정에 의해 국가기관의 요구가 있는 경우<br>
2. 범죄에 대한 수사상의 목적이 있거나 정보통신윤리 위원회의 요청이 있는 경우 또는 기타 관계법령에서 정한 절차에 따른 요청이 있는 경우<br>
3. 회사에 가입한 미성년자의 법정대리인이 정보를 요청하여 서류상으로 가족관계가 확인된 경우<br>
4. 회원이 회사에 제공한 개인정보를 스스로 공개하거나 공개 승낙을 한 경우<br>
5. 회사가 제공하는 정보, 자료 송부를 위하여 관련업체에게 최소한의 회원의 정보를 알려주는 경우<br>
6. 회사가 회원의 서비스 이용 편의나 원활한 이용을 위하여 여러 분야의 전문 콘텐츠 사업자 혹은 비즈니스 사업자에게 최소한의 회원정보를 알려주는 경우<br>
7. 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정개인을 식별할 수 없는 형태로 제공하는 경우<br>
(3) 회원은 언제든지 회사가 가지고 있는 자신의 개인정보에 대한 열람 및 오류정정을 요구 할 수 있으며, 회사는 이에 대해 지체 없이 필요한 조치를 취할 의무가 있습니다.<br>
(4) 회원이 개인정보 오류의 정정을 요구한 경우에는 회사는 그 오류를 정정할 때까지 개인 정보를 이용하지 않습니다.<br>
<br>
제 10 조 (이용 신청의 승낙과 제한)<br>
(1) 회사는 제 6조(이용계약의 성립)의 규정에 의한 이용신청고객에 대하여 업무 수행상 또는 기술상 지장이 없는 경우에 원칙적으로 접수순서에 따라 서비스 이용을 승낙합니다.<br>
(2) 회사는 아래사항에 해당하는 경우라고 판단되는 경우에 대해서는 이용을 승낙하지 않거나 보류 혹은 유보 할 수 있습니다.<br>
1. 이용계약 신청서의 내용을 허위로 기재한 경우<br>
2. 사회의 안녕과 질서, 미풍양속을 저해할 목적으로 신청한 경우<br>
3. 부정한 용도로 본 서비스를 이용하고자 하는 경우<br>
4. 개인 영리 추구를 목적으로 본 서비스를 이용하고자 하는 경우<br>
5. 기타 규정한 제반 사항을 위반하며 신청하는 경우<br>
6. 약관 또는 법령 위반 등으로 이전에 이용제한 조치를 받은 사실이 있는 경우<br>
7. 회원가입 시 타인의 정보를 도용하거나, 기입내용에 기재누락, 허위, 오기가 있는 경우<br>
8. 회사의 설비 및 기술상의 지장이나 회사의 귀책사유로 이용승낙이 곤란한 경우<br>
9. 기타, 회원으로 등록하는 것이 회사의 원만한 서비스 제공에 지장을 초래한다고 판단되는 경우<br>
<br>
제 11 조 (회원ID 부여 및 변경 등)<br>
(1) 회사는 이용고객에 대하여 약관에 정하는 바에 따라 회원ID를 부여합니다.<br>
(2) 회원ID는 원칙적으로 변경이 불가하며 부득이한 사유로 인하여 변경 하고자 하는 경우에는 해당 회원ID를 해지하고 재가입해야 합니다.<br>
(3) 회원ID는 다음 각 호에 해당하는 경우에 이용고객 또는 회사의 요청으로 변경할 수 있습니다.<br>
1. 회원ID가 이용자의 주민등록번호, 전화번호 등과 관련 관련되어 사생활침해가 우려되는 경우<br>
2. 타인에게 혐오감을 주거나 미풍양속에 어긋나는 경우<br>
3. 기타 합리적인 사유가 있는 경우<br>
(4) 서비스 회원ID 및 비밀번호의 관리책임은 이용자에게 있습니다. 이를 소홀이 관리하여 발생하는 서비스 이용상의 손해 또는 제3자에 의한 부정이용 등에 대한 책임은 이용자에게 있으며 회사는 그에 대한 책임을 지지 않습니다.<br>
(5) 기타 이용자 개인정보 관리 및 변경 등에 관한 사항은 서비스 별 안내에 정하는 바에 의합니다.<br>
<br>
제 3 장 계약 당사자의 의무<br>
<br>
제 12 조 (회사의 의무)<br>
(1) 회사는 이용고객이 희망한 서비스 제공 개시일에 특별한 사정이 없는 한 서비스를 이용할 수 있도록 하여야 합니다.<br>
(2) 회사는 계속적이고 안정적인 서비스의 제공을 위하여 설비에 장애가 생기거나 멸실 된 때에는 부득이한 사유가 없는 한 지체 없이 이를 수리 또는 복구합니다.<br>
(3) 회사는 개인정보 보호를 위해 보안시스템을 구축하며 개인정보 보호정책을 공시하고 준수합니다.<br>
(4) 회사는 이용고객으로부터 제기되는 의견이나 불만이 정당하다고 객관적으로 인정될 경우에는 적절한 절차를 거쳐 즉시 처리하여야 합니다. 다만, 즉시 처리가 곤란한 경우는 이용자에게 그 사유와 처리일정을 통보하여야 합니다.<br>
<br>
제 13 조 (이용자의 의무)<br>
(1) 이용자는 회원가입 신청 또는 회원정보 변경 시 실명으로 모든 사항을 사실에 근거하여 작성하여야 하며, 허위 또는 타인의 정보를 등록할 경우 일체의 권리를 주장할 수 없습니다.<br>
(2) 회원은 본 약관에서 규정하는 사항과 기타 회사가 정한 제반 규정, 공지사항 등 회사가 공지하는 사항 및 관계법령을 준수하여야 하며, 기타 회사의 업무에 방해가 되는 행위, 회사의 명예를 손상시키는 행위를 해서는 안됩니다.<br>
(3) 회원은 휴대전화 번호 등의 이용계약사항이 변경된 경우에 해당 절차를 거쳐 이를 회사에 즉시 알려야 합니다.<br>
(4) 회사가 관계법령 및 개인정보 보호정책 및 취급방침에 의거하여 그 책임을 지는 경우를 제외하고 회원에게 부여된 ID의 비밀번호 관리소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 책임은 회원에게 있습니다.<br>
(5) 회원은 회사의 사전 승낙 없이 서비스를 이용하여 영업활동을 할 수 없으며, 그 영업활동의 결과에 대해 회사는 책임을 지지 않습니다. 또한 회원은 이와 같은 영업활동으로 회사가 손해를 입은 경우, 회원은 회사에 대해 손해배상의무를 지며, 회사는 해당 회원에 대해 서비스 이용제한 및 적법한 절차를 거쳐 손해배상 등을 청구할 수 있습니다.<br>
(6) 회원은 회사의 명시적 동의가 없는 한 서비스의 이용권한, 기타 이용계약상의 지위를 타인에게 양도, 증여할 수 없으며 이를 담보로 제공할 수 없습니다.<br>
(7) 회원은 회사 및 제 3자의 지적 재산권을 침해해서는 안됩니다.<br>
(8) 회원은 다음 각 호에 해당하는 행위를 하여서는 안되며, 해당 행위를 하는 경우에 회사는 회원의 서비스 이용제한 및 적법 조치를 포함한 제재를 가할 수 있습니다.<br>
1. 회원가입 신청 또는 회원정보 변경 시 허위내용을 등록하는 행위<br>
2. 다른 회원의 ID, 비밀번호를 도용하는 행위<br>
3. 회원ID를 타인과 거래하는 행위<br>
4. 회사의 운영진, 직원 또는 관계자를 사칭하는 행위<br>
5. 회사로부터 특별한 권리를 부여 받지 않고 회사의 클라이언트 프로그램을 변경하거나, 회사의 서버를 해킹하거나, 웹사이트 또는 게시된 정보의 일부분 또는 전체를 임의로 변경하는 행위<br>
6. 회사 및 서비스의 영위에 피해를 가하거나 고의로 방해하는 행위<br>
7. 서비스를 통해 얻은 정보를 회사의 사전 승낙 없이 서비스 이용 외의 목적으로 복제하거나, 이를 출판 및 방송 등에 사용하거나, 제 3자에게 제공하는 행위<br>
8. 공공질서 및 미풍양속에 위반되는 저속, 음란한 내용의 정보, 문장, 도형, 음향, 동영상을 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위<br>
9. 모욕적이거나 개인신상에 대한 내용이어서 타인의 명예나 프라이버시를 침해할 수 있는 내용을 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위<br>
10. 다른 이용자를 희롱 또는 위협하거나, 특정 이용자에게 지속적으로 고통 또는 불편을 주는 행위<br>
11. 회사의 승인을 받지 않고 다른 사용자의 개인정보를 수집 또는 저장하는 행위<br>
12. 범죄와 결부된다고 객관적으로 판단되는 행위<br>
13. 약관을 포함하여 기타 회사가 정한 제반 규정 또는 이용 조건을 위반하는 행위<br>
<br>
제 4 장 서비스의 이용<br>
<br>
제 14 조 (서비스 이용 시간)<br>
(1) 서비스 이용은 회사의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴, 1일 24시간 운영을 원칙으로 합니다. 단, 회사는 시스템 정기점검, 증설 및 교체를 위해 회사가 정한 날이나 시간에 서비스를 일시 중단할 수 있으며, 예정된 작업으로 인한 서비스 일시 중단은 웹사이트를 통해 사전에 공지합니다.<br>
(2) 회사는 긴급한 시스템 점검, 증설 및 교체 등 부득이한 사유 발생시 예고 없이 일시적으로 서비스를 중단할 수 있으며, 새로운 서비스로의 교체 등 회사가 적절하다고 판단하는 사유에 의하여 현재 제공되는 서비스를 완전히 중단할 수 있습니다.<br>
(3) 회사는 국가비상사태, 정전, 서비스 설비의 장애 또는 서비스 이용의 폭주 등으로 정상적인 서비스 제공이 불가능할 경우, 서비스의 전부 또는 일부를 제한하거나 중지할 수 있습니다. 다만 이 경우 그 사유 및 기간 등을 회원에게 사전 또는 사후에 공지합니다.<br>
(4) 회사는 회사가 통제할 수 없는 사유로 인한 서비스중단의 경우(시스템관리자의 고의성이 없는 디스크 장애, 시스템다운 등)에 사전통지가 불가능하며 타인(PC통신회사, 기간통신사업자 등)의 고의, 과실로 인한 시스템중단 등의 경우에는 통지하지 않습니다.<br>
(5) 회사는 서비스를 특정범위로 분할하여 각 범위 별로 이용가능시간을 별도로 지정할 수 있습니다. 다만 이 경우 그 내용을 공지합니다.<br>
<br>
제 15 조 (회원ID 관리)<br>
(1) 회원ID와 비밀번호에 관한 모든 관리책임은 회원에게 있습니다.<br>
(2) 회사는 이용자 ID에 의하여 제반 이용자 관리업무를 수행 하므로 회원이 이용자 ID를 변경하고자 하는 경우 회사가 인정할 만한 사유가 없는 한 이용자 ID의 변경을 제한할 수 있습니다.<br>
(3) 이용회원이 등록한 이용자 ID 및 비밀번호에 의하여 발생되는 사용상의 과실 또는 제 3자에 의한 부정사용 등에 대한 모든 책임은 해당 이용회원에게 있습니다.<br>
<br>
제 16 조 (게시물의 관리)<br>
(1) ‘게시물’이라 함은 회사의 서비스 내에 회원이 올린 영상, 글, 사진, 그림, 각종 파일과 링크, 각종 답글 등의 정보를 의미합니다.<br>
(2) 서비스에 게재한 게시물과 관련하여 저작권법 위반을 포함한 모든 민사 및 형사상의 책임은 전적으로 해당 게시물의 게재자 본인에게 있습니다.<br>
(3) 회사는 다음 각 호에 해당하는 게시물이나 자료를 사전통지 없이 삭제하거나 이동 또는 등록 거부를 할 수 있으며, 그 게시물의 양에 따라 서비스 중지 또는 탈퇴를 할 수 있습니다.<br>
1. 다른 회원 또는 제 3자에게 심한 모욕을 주거나 명예를 손상시키는 내용인 경우<br>
2. 공공질서 및 미풍양속에 위반되는 내용을 유포하거나 링크시키는 경우<br>
3. 불법복제 또는 해킹을 조장하는 내용인 경우<br>
4. 영리를 목적으로 하는 광고일 경우<br>
5. 범죄와 결부된다고 객관적으로 인정되는 내용일 경우<br>
6. 다른 이용자 또는 제 3자의 저작권 등 기타 권리를 침해하는 내용인 경우<br>
7. 회사에서 규정한 게시물 원칙에 어긋나거나, 게시판 성격에 부합하지 않는 경우<br>
8. 저작권 침해에 해당되는 게시물인 경우이거나 기타 관계법령에 위배된다고 판단되는 경우<br>
<br>
제 17 조 (게시물에 대한 저작권)<br>
(1) 이용자가 서비스 내에 게시한 게시물의 저작권은 저작권법에 의해 보호를 받습니다. 회사가 작성한 저작물에 대한 저작권, 기타 지적재산권은 회사에 귀속됩니다.<br>
(2) 이용자는 자신이 게시한 게시물을 회사가 국내외에서 아래의 목적으로 사용하는 것을 허락합니다.<br>
1. 회사의 서비스 혹은 관련 서비스 내에서 이용자 게시물의 복제, 수정, 개조, 전시, 전송, 배포, 출판 및 2차 저작물과 편집 저작물 작성<br>
2. 모바일(이동통신사 - SKT, KTF, LGT 등)서비스, PMP, Wibro, 웹서비스 등 회사의 제휴사에게 상업적 또는 비상업적으로 이용자의 게시물 내용을 제공, 사용하게 하는 것. 단, 이 경우 회사는 회원의 동의 없이 개인정보를 제공하지 않습니다.<br>
(3) 상기 사용권 이외에 이용자의 게시물을 상업적으로 이용하고자 하는 경우, 전화, 팩스, 전자우편 등의 방법을 통해 이용자에게 동의를 얻을 수 있으며, 회사는 별도의 보상을 할 수 있습니다.<br>
(4) 이용자는 서비스를 이용하여 취득한 정보를 임의 가공, 판매하는 행위 등 서비스에 게재된 자료를 상업적으로 사용할 수 없습니다<br>
(5) 회사는 이용자가 게시하거나 등록하는 서비스 내의 내용물, 게시 내용에 대해 제 16조(게시물의 관리) 3항에 해당된다고 판단되는 경우 사전통지 없이 삭제하거나 이동 또는 등록 거부할 수 있습니다.<br>
<br>
제 18 조 (정보의 제공)<br>
(1) 회사는 회원에게 서비스 이용에 필요가 있다고 인정되는 각종 정보에 대해서 전화, 전자우편, 서신우편 등의 방법으로 회원에게 제공할 수 있습니다.<br>
(2) 회사는 서비스 개선 및 회원 대상의 서비스 소개 등의 목적으로 회원의 동의 하에 추가적인 개인 정보를 요구할 수 있습니다.<br>
<br>
제 5 장 계약 해지 및 이용 제한<br>
<br>
제19조 (서비스의 제한 및 중지)<br>
(1) 회사는 다음 각 호의 내용에 해당하는 경우 서비스 제공의 일부 또는 전부를 제한하거나 중단할 수 있습니다.<br>
1. 정보통신설비의 보수 점검, 교체 및 고장 등 공사로 인한 부득이한 경우<br>
2. 기간통신사업자가 전기통신서비스를 중단했을 경우<br>
3. 서비스 이용의 폭주 등으로 정상적인 서비스 이용에 지장이 있는 경우<br>
4. 국가비상상태 등 기타 불가항력적인 사유가 있는 경우<br>
5. 회사의 관리범위 외의 서비스 설비 장애 및 기타 불가항력에 의하여 보관되지 못하였거나 삭제된 경우,<br>
(2) 회사가 정상적인 서비스 제공의 어려움으로 인하여 일시적으로 서비스를 중지하여야 할 경우에는 서비스 중지 1주일전의 고지 후 서비스를 중지할 수 있으며, 이 기간 동안 이용자가 고지내용을 인지하지 못한데 대하여 회사는 책임을 부담하지 아니합니다. 부득이 한 사정이 있을 경우 위 사전 고지기간은 감축되거나 생략될 수 있습니다. 또한 위 서비스 중지에 의하여 본 서비스에 보관되거나 전송된 메시지 및 기타 통신 메시지 등의 내용이 보관되지 못하였거나 삭제된 경우, 전송되지 못한 경우 및 기타 통신 데이터의 손실이 있을 경우에 대하여도 회사는 책임을 부담하지 아니합니다.<br>
(3) 회사의 사정으로 서비스를 영구적으로 중단하여야 할 경우 전항에 의거합니다. 다만, 이 경우 사전 고지기간은 1개월로 합니다.<br>
(4) 회사는 사전 고지 후 서비스를 일시적으로 수정, 변경 및 중단할 수 있으며, 이에 대하여 이용자 또는 제3자에게 어떠한 책임도 부담하지 않습니다.<br>
<br>
제 20 조 (계약해지 및 이용제한)<br>
(1) 회원이 이용 계약을 해지하고자 하는 때에는 회원 본인이 온라인을 통해 회사에 해지 신청을 하여야 합니다.<br>
(2) 회사는 다음 각 호의 내용에 해당하는 경우 서비스 제공의 일부 또는 전부를 제한하거나 중단할 수 있습니다.<br>
1. 정보통신설비의 보수 점검, 교체 및 고장 등 공사로 인한 부득이한 경우<br>
2. 기간통신사업자가 전기통신서비스를 중단했을 경우<br>
3. 서비스 이용의 폭주 등으로 정상적인 서비스 이용에 지장이 있는 경우<br>
4. 국가비상상태 등 기타 불가항력적인 사유가 있는 경우<br>
5. 회사의 관리범위 외의 서비스 설비 장애 및 기타 불가항력에 의하여 보관되지 못하였거나 삭제된 경우,<br>
(3) 회사가 정상적인 서비스 제공의 어려움으로 인하여 일시적으로 서비스를 중지하여야 할 경우에는 서비스 중지 1주일전의 고지 후 서비스를 중지할 수 있으며, 이 기간 동안 이용자가 고지내용을 인지하지 못한데 대하여 회사는 책임을 부담하지 아니합니다.<br>
부득이 한 사정이 있을 경우 위 사전 고지기간은 감축되거나 생략될 수 있습니다.<br>
또한 위 서비스 중지에 의하여 본 서비스에 보관되거나 전송된 메시지 및 기타 통신 메시지 등의 내용이 보관되지 못하였거나 삭제된 경우, 전송되지 못한 경우 및 기타 통신 데이터의 손실이 있을 경우에 대하여도 회사는 책임을 부담하지 아니합니다.<br>
(3) 회사의 사정으로 서비스를 영구적으로 중단하여야 할 경우 전항에 의거합니다. 다만, 이 경우 사전 고지기간은 1개월로 합니다.<br>
(4) 회사는 사전 고지 후 서비스를 일시적으로 수정, 변경 및 중단할 수 있으며, 이에 대하여 이용자 또는 제3자에게 어떠한 책임도 부담하지 않습니다.<br>
1. 이용계약 신청서의 내용을 허위로 판단된 경우<br>
2. 사회의 안녕과 질서, 미풍양속을 저해 한 경우<br>
3. 부정한 용도로 본 서비스를 이용한 하는 경우<br>
4. 개인 영리 추구를 목적으로 본 서비스를 이용한 하는 경우<br>
5. 기타 약관에서 규정한 제반 사항을 위반하거나 원만한 서비스 제공에 지장을 초래한 경우<br>
<br>
제 6 장 손해배상 및 기타사항<br>
<br>
제 21 조 (손해배상)<br>
(1) 회사는 서비스에서 무료로 제공하는 서비스의 이용과 관련하여 개인정보보호정책에서 정하는 내용에 해당하지 않는 사항에 대하여는 어떠한 손해도 책임을 지지 않습니다.<br>
(2) 회원이 본 약관의 규정을 위반함으로써 회사에 손해가 발생하게 되는 경우, 위반한 회원은 발생한 모든 손해를 회사에 배상해야 합니다.<br>
(3) 기타 손해배상의 방법, 절차 등은 관계법령에 따릅니다.<br>
<br>
제 22 조 (면책조항)<br>
(1) 회사는 천재지변, 전쟁 및 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.<br>
(2) 회사는 기간통신 사업자가 전기통신 서비스를 중지하거나 정상적으로 제공하지 아니하여 손해가 발생한 경우 책임이 면제됩니다.<br>
(3) 회사는 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대한 책임이 면제됩니다.<br>
(4) 회사는 회원의 귀책사유로 인한 서비스 이용의 장애 또는 손해에 대하여 책임을 지지 않습니다.<br>
(5) 회사는 이용자의 컴퓨터 오류에 의해 손해가 발생한 경우, 또는 회원이 신상정보 및 전자우편 주소를 부실하게 기재하여 손해가 발생한 경우 책임을 지지 않습니다.<br>
(6) 회사는 회원이 서비스를 이용하여 기대하는 수익을 얻지 못하거나 상실한 것에 대하여 책임을 지지 않습니다.<br>
(7) 회사는 회원이 서비스를 이용하면서 얻은 자료로 인한 손해에 대하여 책임을 지지 않습니다. 또한 회사는 회원이 서비스를 이용하며 타 회원으로 인해 입게 되는 정신적 피해에 대하여 보상할 책임을 지지 않습니다.<br>
(8) 회사는 회원이 서비스에 게재한 각종 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 대하여 책임을 지지 않습니다.<br>
(9) 회사는 이용자 상호간 및 이용자와 제 3자 상호 간에 서비스를 매개로 발생한 분쟁에 대해 개입할 의무가 없으며, 이로 인한 손해를 배상할 책임도 없습니다.<br>
(10) 회사에서 회원에게 무료로 제공하는 서비스의 이용과 관련해서는 어떠한 손해도 책임을 지지 않습니다.<br>
<br>
제 23 조 (관할 법원)<br>
<br>
1. 서비스의 이용으로 발생한 분쟁에 대해 소송이 제기 될 경우 회사의 본사 소재지를 관할하는 법원을 관할 법원으로 합니다.<br>
<br>
<부칙><br>
본 약관은 2017년 11월 24일부터 적용됩니다 <br>
    </div>
     <div class="ui checkbox" style="float:right">
      <input name="agree_1" type="checkbox" tabindex="0" class="hidden">
      <label style="color:white">동의</label>
      </div>
      </div>
      <div>
      <div class="ui header" style="color:white">
        개인 정보 보호정책(필수)
      </div>
  <div class="ui segment" style="color:black;height:200px;overflow:scroll; clear:both">
<(주) 플레이세븐>('http://golfpass.net'이하 '골프패스')은(는) 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.<br>
<br>
<(주) 플레이세븐>('골프패스') 은(는) 회사는 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.<br>
<br>
○ 본 방침은부터 2018년 1월 1일부터 시행됩니다.<br>
<br>
<br>
1. 개인정보의 처리 목적 <(주) 플레이세븐>('http://golfpass.net'이하 '골프패스')은(는) 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구할 예정입니다.<br>
<br>
가. 홈페이지 회원가입 및 관리<br>
<br>
회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정이용 방지, 만14세 미만 아동 개인정보 수집 시 법정대리인 동의 여부 확인, 각종 고지·통지, 고충처리, 분쟁 조정을 위한 기록 보존 등을 목적으로 개인정보를 처리합니다.<br>
<br>
<br>
나. 민원사무 처리<br>
<br>
민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.<br>
<br>
<br>
다. 재화 또는 서비스 제공<br>
<br>
물품배송, 서비스 제공, 청구서 발송, 콘텐츠 제공, 맞춤 서비스 제공, 본인인증, 연령인증, 요금결제·정산, 채권추심 등을 목적으로 개인정보를 처리합니다.<br>
<br>
<br>
라. 마케팅 및 광고에의 활용<br>
<br>
신규 서비스(제품) 개발 및 맞춤 서비스 제공, 이벤트 및 광고성 정보 제공 및 참여기회 제공 , 인구통계학적 특성에 따른 서비스 제공 및 광고 게재 , 서비스의 유효성 확인, 접속빈도 파악 또는 회원의 서비스 이용에 대한 통계 등을 목적으로 개인정보를 처리합니다.<br>
<br>
<br>
마. 개인영상정보<br>
<br>
범죄의 예방 및 수사, 시설안전 및 화재예방, 교통단속, 교통정보의 수집·분석 및 제공 등을 목적으로 개인정보를 처리합니다.<br>
<br>
<br>
2. 개인정보 파일 현황<br>
<br>
3. 개인정보의 처리 및 보유 기간<br>
<br>
① <(주) 플레이세븐>('골프패스')은(는) 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의 받은 개인정보 보유,이용기간 내에서 개인정보를 처리,보유합니다.<br>
<br>
② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.<br>
<br>
1.<홈페이지 회원가입 및 관리><br>
<홈페이지 회원가입 및 관리>와 관련한 개인정보는 수집.이용에 관한 동의일로부터<영구>까지 위 이용목적을 위하여 보유.이용됩니다.<br>
-보유근거 : 회원 정보<br>
-관련법령 : <br>
-예외사유 : <br>
<br>
4. 개인정보의 제3자 제공에 관한 사항<br>
<br>
① <(주) 플레이세븐>('http://golfpass.net'이하 '골프패스')은(는) 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.<br>
<br>
② <(주) 플레이세븐>('http://golfpass.net')은(는) 다음과 같이 개인정보를 제3자에게 제공하고 있습니다.<br>
<br>
<br>
1. <><br>
- 개인정보를 제공받는 자 : <br>
- 제공받는 자의 개인정보 이용목적 : <br>
- 제공받는 자의 보유.이용기간:<br>
<br>
5. 개인정보처리 위탁<br>
<br>
① <(주) 플레이세븐>('골프패스')은(는) 원활한 개인정보 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다.<br>
<br>
1. <><br>
- 위탁받는 자 (수탁자) : <br>
- 위탁하는 업무의 내용 : <br>
- 위탁기간 :<br>
<br>
② <(주) 플레이세븐>('http://golfpass.net'이하 '골프패스')은(는) 위탁계약 체결시 개인정보 보호법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적․관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리․감독, 손해배상 등 책임에 관한 사항을 계약서 등 문서에 명시하고, 수탁자가 개인정보를 안전하게 처리하는지를 감독하고 있습니다.<br>
<br>
③ 위탁업무의 내용이나 수탁자가 변경될 경우에는 지체없이 본 개인정보 처리방침을 통하여 공개하도록 하겠습니다.<br>
6. 정보주체와 법정대리인의 권리·의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다.<br>
<br>
① 정보주체는 (주) 플레이세븐에 대해 언제든지 개인정보 열람,정정,삭제,처리정지 요구 등의 권리를 행사할 수 있습니다.<br>
② 제1항에 따른 권리 행사는(주) 플레이세븐에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 (주) 플레이세븐은(는) 이에 대해 지체 없이 조치하겠습니다.<br>
③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br>
④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.<br>
⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.<br>
⑥ (주) 플레이세븐은(는) 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.<br>
<br>
7. 처리하는 개인정보의 항목 작성 <br>
<br>
① <(주) 플레이세븐>('http://golfpass.net'이하 '골프패스')은(는) 다음의 개인정보 항목을 처리하고 있습니다.<br>
<br>
1<홈페이지 회원가입 및 관리><br>
- 필수항목 : 이메일, 휴대전화번호, 비밀번호, 로그인ID, 성별, 생년월일, 이름<br>
- 선택항목 :<br>
<br>
<br>
8. 개인정보의 파기<(주) 플레이세븐>('골프패스')은(는) 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.<br>
<br>
-파기절차<br>
이용자가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.<br>
<br>
-파기기한<br>
이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.<br>
<br>
-파기방법<br>
전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다.<br>
종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.<br>
<br>
9. 개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항<br>
<br>
① (주) 플레이세븐 은 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠기(cookie)’를 사용합니다. ② 쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다. 가. 쿠키의 사용 목적 : 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다. 나. 쿠키의 설치•운영 및 거부 : 웹브라우저 상단의 도구>인터넷 옵션>개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다. 다. 쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.<br>
<br>
<br>
10. 개인정보 보호책임자 작성<br>
<br>
<br>
① (주) 플레이세븐(‘http://golfpass.net’이하 ‘골프패스) 은(는) 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.<br>
<br>
▶ 개인정보 보호책임자 <br>
성명 :김민성<br>
직책 :개인정보 보호책임자<br>
연락처 :02-6959-5454, kimmincastle@playseven.com, <br>
※ 개인정보 보호 담당부서로 연결됩니다.<br>
<br>
<br>
② 정보주체께서는 (주) 플레이세븐(‘http://golfpass.net’이하 ‘골프패스) 의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. (주) 플레이세븐(‘http://golfpass.net’이하 ‘골프패스) 은(는) 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.<br>
<br>
11. 개인정보 처리방침 변경<br>
<br>
①이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.<br>
<br>
12. 개인정보의 안전성 확보 조치 <(주) 플레이세븐>('골프패스')은(는) 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.<br>
<br>
1. 정기적인 자체 감사 실시<br>
개인정보 취급 관련 안정성 확보를 위해 정기적(분기 1회)으로 자체 감사를 실시하고 있습니다.<br>
<br>
2. 개인정보 취급 직원의 최소화 및 교육<br>
개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화 하여 개인정보를 관리하는 대책을 시행하고 있습니다.<br>
<br>
3. 내부관리계획의 수립 및 시행<br>
개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.<br>
<br>
4. 해킹 등에 대비한 기술적 대책<br>
<(주) 플레이세븐>('골프패스')은 해킹이나 컴퓨터 바이러스 등에 의한 개인정보 유출 및 훼손을 막기 위하여 보안프로그램을 설치하고 주기적인 갱신·점검을 하며 외부로부터 접근이 통제된 구역에 시스템을 설치하고 기술적/물리적으로 감시 및 차단하고 있습니다.<br>
<br>
5. 개인정보의 암호화<br>
이용자의 개인정보는 비밀번호는 암호화 되어 저장 및 관리되고 있어, 본인만이 알 수 있으며 중요한 데이터는 파일 및 전송 데이터를 암호화 하거나 파일 잠금 기능을 사용하는 등의 별도 보안기능을 사용하고 있습니다.<br>
<br>
6. 접속기록의 보관 및 위변조 방지<br>
개인정보처리시스템에 접속한 기록을 최소 6개월 이상 보관, 관리하고 있으며, 접속 기록이 위변조 및 도난, 분실되지 않도록 보안기능 사용하고 있습니다.<br>
<br>
7. 개인정보에 대한 접근 제한<br>
개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여,변경,말소를 통하여 개인정보에 대한 접근통제를 위하여 필요한 조치를 하고 있으며 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있습니다.<br>
<br>
8. 문서보안을 위한 잠금장치 사용<br>
개인정보가 포함된 서류, 보조저장매체 등을 잠금장치가 있는 안전한 장소에 보관하고 있습니다.<br>
<br>
9. 비인가자에 대한 출입 통제<br>
개인정보를 보관하고 있는 물리적 보관 장소를 별도로 두고 이에 대해 출입통제 절차를 수립, 운영하고 있습니다.<br>
						</div>
     <div class="ui checkbox" style="float:right">
      <input name="agree_2" type="checkbox" tabindex="0" class="hidden">
      <label style="color:white">동의</label>
      </div>

</div>


</div>
  <div class="actions"style="clear:both; float:right">
      <div class="ui green ok inverted button">
        <i class="checkmark icon"></i>
        예
      </div>
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      아니오
    </div>
  </div>
</div>
<!-- 약관 동의 모달 -->

<div class="ui mini modal" style="height:200px; margin-top:0px;">
<!-- <div class="ui mini modal" style="height:200px; margin-top:0px;"> -->
<div class="header">Header</div>
<div class="actions"style="clear:both; float:right">

<div id='ok'class="ui green ok inverted button">
        <i class="checkmark icon"></i>
        예
      </div>
      </div>

      
</div>

<script>
$('.ui.checkbox')
  .checkbox()
;
var t =  $('#ok');



$('.ui.basic.modal').modal({
    closable : false,
    onApprove:function()
    {
         var chk1=$("input[name=agree_1]").prop("checked");
         var chk2=$("input[name=agree_2]").prop("checked");
        if(chk1 === false || chk2 === false)
        {
            alert("모두 동의해주세요.");
            return false;
        }
 
    },
    onDeny : function()
    {
        window.location.href="/";
        return false;
    }
})
  .modal('show');

</script>
