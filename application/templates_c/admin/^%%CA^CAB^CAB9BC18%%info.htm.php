<?php /* Smarty version 2.6.20, created on 2017-08-15 13:56:45
         compiled from info.htm */ ?>
<div class="container-fluid"> 
  
  <!-- BEGIN PAGE HEADER-->
  
  <div class="row-fluid">
    <div class="span12">
    <h3 class="page-title"> <small> </small> </h3>
      <ul class="breadcrumb">
        <li> <i class="icon-home"></i> <a href="#">首页</a> </li>
      </ul>
    </div>
  </div>
  
  <!-- END PAGE HEADER--> 
 
  <!-- BEGIN PAGE CONTENT-->

  <div class="row-fluid">
    <div class="span12"> 
      <!-- BEGIN VALIDATION STATES-->
      <div class="row-fluid">
             <h3>待人工退款订单 <span class='red'><?php echo $this->_tpl_vars['de']['0']['num']; ?>
 </span> ，正在作废订单 <span  class='red'><?php echo $this->_tpl_vars['de']['1']['num']; ?>
</span> ， 非API待发货订单  <span  class='red'><?php echo $this->_tpl_vars['de']['2']['num']; ?>
</span>  ，API订单待推送  <span  class='red'><?php echo $this->_tpl_vars['de']['3']['num']; ?>
</span> ，API订单已推送待发货  <span  class='red'><?php echo $this->_tpl_vars['de']['4']['num']; ?>
</span> </h3>
   			 <p>网站遇到问题请  截图并且详细发送至 chenbo@dfocusgroup.com 邮箱， ，我们收到邮件会第一时间解决BUG</p>
      </div>
      <!-- END VALIDATION STATES--> 
    </div>
  </div>
  <!-- END PAGE CONTENT--> 
</div>
<style>
.red{ color:red;}
</style>