<!-- 侧导航 -->
<div class="subnav-container">
    <div class="subnav-main">
        <dl class="subnav-item subnav-open ">   
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>考勤打卡</span><span class="caret"></span>
            </dt>
 
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">打卡</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">请假/出差</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">外勤/离岗</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">个人打卡列表</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">   
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>橙长日志</span><span class="caret"></span>
            </dt>
 
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">填写工作日志</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">查看工作日志</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">一句话总结</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">   
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>橙长考核</span><span class="caret"></span>
            </dt>
 
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">公告列表</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">考勤排名</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">   
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>橙市小广播</span><span class="caret"></span>
            </dt>
 
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">个人KPI指标</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">自评分</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">   
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>橙市风采</span><span class="caret"></span>
            </dt>
 
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">门店管理</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">门店活动</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">   
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>橙里人帮规</span><span class="caret"></span>
            </dt>
 
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">会员卡</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">促销工具</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">营销活动</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">店铺动态</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">微海报</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">妈妈学堂</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>橙里人自助</span><span class="caret"></span>
            </dt>
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">余额列表</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">数据统计</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">提现列表</div>
                </a>
            </dd>
        </dl>
        <dl class="subnav-item subnav-open ">
            <dt class="subnav-title">
                <span class="glyphicon"></span><span>其他</span><span class="caret"></span>
            </dt>
            <dd class="subnav-info">
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">分销商管理</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">佣金管理</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">奖励管理</div>
                </a>
                <a href="#" class="subnav-link ">
                    <div class="subnav-text">开店设置</div>
                </a>
            </dd>
        </dl>
    </div>
</div>
<!-- 侧导航End -->
<script>
$(function(){
    
    if($('.subnav-open').hasClass('active')){
        $('.subnav-open.active').addClass('checked');
    }
    // 点击展开隐藏侧导航下拉菜单
    $('.subnav-open .subnav-title').on({
        click: function(){
            $(this).parent().toggleClass('checked').siblings().removeClass('checked');
            $('.subnav-open').find('.subnav-info').slideUp();
            $('.subnav-open.checked').find('.subnav-info').slideDown();
            // 收起二级目录时隐藏三级目录
            if($('.subnav-open').hasClass('checked')){
                $(this).next('.subnav-info').find('.subnav-extend').addClass('case');
            } else {
                $(this).next('.subnav-info').find('.subnav-extend').removeClass('case');
            }
            // 显示隐藏三级目录
            if($(this).next('.subnav-info').find('.subnav-extend').hasClass('case')){
                $('.subnav-container').addClass('subnav-extend-open');
                $('.wrapper-container').addClass('subnav-extend-set');
            } else {
                $('.subnav-container').removeClass('subnav-extend-open');
                $('.wrapper-container').removeClass('subnav-extend-set');
            }
        }
    });
    // 显示隐藏三级目录
    if($('.subnav-extend').hasClass('case')){
        $('.subnav-container').addClass('subnav-extend-open');
        $('.wrapper-container').addClass('subnav-extend-set');
    } else {
        $('.subnav-container').removeClass('subnav-extend-open');
        $('.wrapper-container').removeClass('subnav-extend-set');
    }
})
</script>