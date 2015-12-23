<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../plupload-2.1.8/js/plupload.full.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../js/maska.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <title>{$site_name}</title>
</head>

<body>
<div class="container">
    <div class="row">
        <h1>Список зареєстрованих:</h1><hr/>
        <div class="col-md-12 col-sm-6 col-xs-12" id="adapt-coll">
        <span id="bag">{$row}</span>
            {if isset($row)}
                {foreach $row as $item}
                        <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="/img/avatar/{$item.img}" alt="аватарка">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{$item.surname}&nbsp;{$item.name}&nbsp;{$item.fathername}</h3>
                            <p>
                                <label class="control-label">e-mail: </label>{$item.email}<br/>
                                <label class="control-label">тел.: </label>{$item.mobtel}
                            </p>
                        </div>
                        <div class="media" id="media">{$item.cont}</div>
                    </div><hr/>
                {/foreach}           
            {else}
                <h4>Немає жодного запису!</h4>            
            {/if}
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
              <script type="text/javascript" src="js/plupload_head.js"></script>
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
</html>