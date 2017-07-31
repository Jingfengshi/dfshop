<?php /* Smarty version 2.6.20, created on 2017-07-27 11:02:47
         compiled from order_list.htm */ ?>
<body class="page-header-fixed page-boxed">
<link href="/static/css/search.css" rel="stylesheet" type="text/css"/>
<style>
    .orderinfo, .orderbox .orderlist .orderimg {
        position: relative;
        font-size: 14px;
        background-color: #fff;
        padding: 10px;
        border-bottom: 1px solid #EEEEEE;
    }
     .orderinfo .price {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 16px;
        color: #ff223e;
        font-family: "Arial", "Microsoft YaHei", "Tahoma";
    }
    .orderbox .orderlist .orderimg {
        font-size: 12px;
    }
    .orderbox .orderlist .orderimg img {
        position: absolute;
        width: 60px;
        height: 60px;
    }
    img {
        border: none;
    }
    .orderinfo p{
        margin:0;
    }
    .orderbox .orderlist .orderimg .orderimginfo {
        margin-left: 70px;
        min-height: 55px;
        margin-top: 5px;
    }

    .fwnormal {
        font-weight: normal;
    }
    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }
    .fl {
        float: left;
    }

</style>
<div class="container">
    <div class="widget-bg-color-white widget-tab">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_1_1" data-toggle="tab">全部订单</a>
            </li>
            <li>
                <a href="#tab_1_2" data-toggle="tab">待付款</a>
            </li>
            <li>
                <a href="#tab_1_3" data-toggle="tab">待发货 </a>
            </li>
            <li>
                <a href="#tab_1_4" data-toggle="tab">待收货</a>
            </li>
        </ul>
        <div class="tab-content scroller"  data-always-visible="1" data-handle-color="#D7DCE2">
            <div class="tab-pane fade active in orderbox" id="tab_1_1">
                <div style="margin: 2px 8px; display: block;" class="batchoperator">
                    <label class="fwnormal" style="font-size: 12px">
                        <input type="checkbox" style="margin: 0;" id="cbSelectAll"> 全选
                    </label>
                    <span style=" display:inline-block;float:right">
                        <input id="btnCombine" style="display:none" type="button" value="合并付款" class="btn btn-primary btn-xs">
                        <input id="btnCancel" type="button" value="批量取消订单" class="btn disable mini">
                    </span>
                </div>
                <div class="orderlist" style="margin-top: 10px">
                    <div class="orderinfo" style="font-size:12px;">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>

                    <div class="orderimg">
                        <img id="vMemberOrders_rptOrders_ctl00_ctl00_rporderitems_ctl00_ListImage1" src="/static/image/photo1.jpg" style="border-width:0px;">
                        <div class="orderimginfo">
                            <a href="#">
                                <div class="name bcolor">
                                    Hot Makeup Go Fancy
                                </div>
                            </a>
                            <div class="specification"></div>
                            <div class="orderreturn">
                                数量：<i>1</i> &nbsp;&nbsp;单价：<i>228.00元</i>

                            </div>
                        </div>
                    </div>

                    <div class="linkbtn" style="height: 36px;">
                        <span class="fl" style="margin: 10px 0px 0px 10px;">
                            <label class="fwnormal batchoperator" style="display: inline-block; font-size: 12px;">
                            <input name="cbox" type="checkbox" style="margin: 0;" value="201707263159969"> 选中订单
                            </label>
                        </span>
                        <a class="btn disable mini" style="float: right;margin:10px 10px 0px 0px;" onclick="#">取消订单</a>
                        <a href="#" style="float: right;margin:10px 10px 0px 0px;"  class="btn mini red">去付款</a>
                    </div>
                </div>
                <div class="orderlist" style="margin-top: 10px">
                    <div class="orderinfo" style="font-size:12px;">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>

                    <div class="orderimg">
                        <img id="vMemberOrders_rptOrders_ctl00_ctl00_rporderitems_ctl00_ListImage1" src="/static/image/photo1.jpg" style="border-width:0px;">
                        <div class="orderimginfo">
                            <a href="#">
                                <div class="name bcolor">
                                    Hot Makeup Go Fancy
                                </div>
                            </a>
                            <div class="specification"></div>
                            <div class="orderreturn">
                                数量：<i>1</i> &nbsp;&nbsp;单价：<i>228.00元</i>

                            </div>
                        </div>
                    </div>

                    <div class="linkbtn" style="height: 36px;">
                        <span class="fl" style="margin: 10px 0px 0px 10px;">
                            <label class="fwnormal batchoperator" style="display: inline-block; font-size: 12px;">
                            <input name="cbox" type="checkbox" style="margin: 0;" value="201707263159969"> 选中订单
                            </label>
                        </span>
                        <a class="btn disable mini" style="float: right;margin:10px 10px 0px 0px;" onclick="#">取消订单</a>
                        <a href="#" style="float: right;margin:10px 10px 0px 0px;"  class="btn mini red">去付款</a>
                    </div>
                </div>
                <div class="orderlist" style="margin-top: 10px">
                    <div class="orderinfo" style="font-size:12px;">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>

                    <div class="orderimg">
                        <img id="vMemberOrders_rptOrders_ctl00_ctl00_rporderitems_ctl00_ListImage1" src="/static/image/photo1.jpg" style="border-width:0px;">
                        <div class="orderimginfo">
                            <a href="#">
                                <div class="name bcolor">
                                    Hot Makeup Go Fancy
                                </div>
                            </a>
                            <div class="specification"></div>
                            <div class="orderreturn">
                                数量：<i>1</i> &nbsp;&nbsp;单价：<i>228.00元</i>

                            </div>
                        </div>
                    </div>

                    <div class="linkbtn" style="height: 36px;">
                        <span class="fl" style="margin: 10px 0px 0px 10px;">
                            <label class="fwnormal batchoperator" style="display: inline-block; font-size: 12px;">
                            <input name="cbox" type="checkbox" style="margin: 0;" value="201707263159969"> 选中订单
                            </label>
                        </span>
                        <a class="btn disable mini" style="float: right;margin:10px 10px 0px 0px;" onclick="#">取消订单</a>
                        <a href="#" style="float: right;margin:10px 10px 0px 0px;"  class="btn mini red">去付款</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_1_2">

                <div class="booking-blocks">
                    <div class="orderinfo">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>
                    <div class="pull-left booking-img">

                        <img src="/static/image/photo1.jpg" alt="">

                        <ul class="unstyled">

                            <li><i class="icon-yen"></i> 单价:126</li>

                            <li><i class="icon-shopping-cart"></i>数量:1</li>

                        </ul>

                    </div>
                    <div style="overflow:hidden;">

                        <h2><a href="#">锤子手机</a></h2>
                        <p> <a href="#">read more</a></p>

                    </div>
                </div>
                <div class="booking-blocks">
                    <div class="orderinfo">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>
                    <div class="pull-left booking-img">
                        <img src="/static/image/photo1.jpg" alt="">
                        <ul class="unstyled">

                            <li><i class="icon-yen"></i> 单价:126</li>

                            <li><i class="icon-shopping-cart"></i>数量:1</li>

                        </ul>

                    </div>
                    <div style="overflow:hidden;">

                        <h2><a href="#">锤子手机</a></h2>
                        <p> <a href="#">read more</a></p>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_1_3">
                <div class="booking-blocks">
                    <div class="orderinfo">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>
                    <div class="pull-left booking-img">

                        <img src="/static/image/photo1.jpg" alt="">

                        <ul class="unstyled">

                            <li><i class="icon-yen"></i> 单价:126</li>

                            <li><i class="icon-shopping-cart"></i>数量:1</li>

                        </ul>

                    </div>
                    <div style="overflow:hidden;">

                        <h2><a href="#">锤子手机</a></h2>
                        <p> <a href="#">read more</a></p>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_1_4">
                <div class="booking-blocks">
                    <div class="orderinfo">
                        <p>订单编号：201707263159969</p>
                        <p>订单日期：2017/7/26</p>
                        <p>订单状态：等待付款</p>
                        <p style="display:none">
                            审核进度：
                            <span style="color:Green">审核中</span>
                            <span style="display:none">→ 已审核</span>
                            <span style="display:none">→ 申报中</span>
                            <span style="display:none">→ 海关审核中</span>
                            <span style="display:none">→已作废</span>
                        </p>
                        <span class="price">￥<em>228.00</em></span>
                    </div>
                    <div class="pull-left booking-img">

                        <img src="/static/image/photo1.jpg" alt="">

                        <ul class="unstyled">

                            <li><i class="icon-yen"></i> 单价:126</li>

                            <li><i class="icon-shopping-cart"></i>数量:1</li>

                        </ul>

                    </div>
                    <div style="overflow:hidden;">

                        <h2><a href="#">锤子手机</a></h2>
                        <p> <a href="#">read more</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>