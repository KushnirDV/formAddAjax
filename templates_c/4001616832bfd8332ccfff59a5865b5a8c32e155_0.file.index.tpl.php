<?php
/* Smarty version 3.1.29-dev/14, created on 2015-12-20 20:22:15
  from "D:\Denis\form_smarty\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_5676f1d74af6b7_68400026',
  'file_dependency' => 
  array (
    '4001616832bfd8332ccfff59a5865b5a8c32e155' => 
    array (
      0 => 'D:\\Denis\\form_smarty\\templates\\index.tpl',
      1 => 1450635720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5676f1d74af6b7_68400026 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-1.11.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../plupload-2.1.8/js/plupload.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.maskedinput.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/maska.js"><?php echo '</script'; ?>
>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
</head>

<body>
<div class="container">
    <div class="row">
        <h1>Список зареєстрованих:</h1><hr/>
        <div class="col-md-12 col-sm-6 col-xs-12" id="adapt-coll">
        <span id="bag"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</span>
            <?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                        <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="/img/avatar/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="аватарка">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['fathername'];?>
</h3>
                            <p>
                                <label class="control-label">e-mail: </label><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
<br/>
                                <label class="control-label">тел.: </label><?php echo $_smarty_tpl->tpl_vars['item']->value['mobtel'];?>

                            </p>
                        </div>
                        <div class="media" id="media"><?php echo $_smarty_tpl->tpl_vars['item']->value['cont'];?>
</div>
                    </div><hr/>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>           
            <?php } else { ?>
                <h4>Немає жодного запису!</h4>            
            <?php }?>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
    <div class=" col-sm-6 col-xs-12" id="adapt-col">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h1 class="panel-title" id="kdv_title">ФОРМА РЕЄСТРАЦІІ</h1>
        </div>
         <div class="panel-body">
          <form id="contactForm" class="form-horizontal row-border" method="post"  enctype="multipart/form-data">
            <div class="form-group">
              <label class="required col-md-2 control-label">Прізвище:</label>
              <div class="col-md-8">
                <input required id="surname" type="text" name="surname" class="form-control" onkeyup="setSurname(this.value)" onkeydown="setSurname(this.value)">
              </div>
            </div>
            <div class="form-group">
              <label class="required col-md-2 control-label">Ім&#700;я:</label>
              <div class="col-md-8">
                <input required id="nname" type="text" name="name" class="form-control" onkeyup="setName(this.value)" onkeydown="setName(this.value)">
              </div>
            </div>
            <div class="form-group">
              <label class="required col-md-2 control-label">По-батькові:</label>
              <div class="col-md-8">
                <input required id="fname" type="text" name="fathername" class="form-control"  onkeyup="setFathername(this.value)" onkeydown="setFathername(this.value)">
              </div>
            </div>
            <div class="form-group">
              <label class="required col-md-2 control-label">Контактні дані</label>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-xs-6">
                    <input required id="kdv_email" type="email" name="email" class="form-control" placeholder="e-m@il"  onkeyup="setEmail(this.value)" onkeydown="setEmail(this.value)">
                  </div>
                  <div class="col-xs-6">	
                    <input required  id="phone" name="mobtel" type="tel" class="form-control" placeholder="мобільний телефон"  onkeyup="setPhone(this.value)" onkeydown="setPhone(this.value)">
                  </div>
                 </div>
              </div>
            </div>
            <div class="form-group">
              <label class="required col-md-2 control-label">Місце для Вашого повідомлення</label>
              <div class="col-md-8">
                <textarea class="form-control" id="encHts" name="cont"  onkeyup="setCont(this.value)" onkeydown="setCont(this.value)"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Завантажте своє фото</label>
              <div class="col-md-8">
                <div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
                <br />

                <div id="container">
                        <a class="btn btn-success" id="pickfiles" href="javascript:;">+ Додати фото</a> 
                        <a class="btn btn-success" id="uploadfiles" href="javascript:;" onclick="setImgName(this.value)">Завантажити фото&nbsp;&#187;</a>
                </div>
                <input required  id="img_file_name" name="img_file_name" type="hidden" />             
              </div>
            </div>
              <?php echo '<script'; ?>
 type="text/javascript" src="js/plupload_head.js"><?php echo '</script'; ?>
>
            <div class="form-group">
              <label class="col-md-2 control-label"></label>
              <div class="col-md-8">
		<a class="btn btn-success" id="btn_reg" href="javascript:;">Додати запис до списку</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html><?php }
}
