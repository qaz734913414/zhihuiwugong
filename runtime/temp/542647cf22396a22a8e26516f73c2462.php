<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"F:\phpStudy\PHPTutorial\WWW\thinkphp\public/../application/index\view\ceshi\index.html";i:1558695594;}*/ ?>
<html>
<head></head>
<body>
<div class="panel-heading">
    Advanced Tables
    <a href="/daochu" class="btn-succes">导出</a>
    <form action="<?php echo url('ceshi/ce'); ?>" method="post" enctype="multipart/form-data">
        <input name="file" type="file" />
        <input type="submit" />
    </form>
</div>
</body>
</html>
<!--<form id="upload" action="import_excel" method="post" enctype="multipart/form-data">-->
<!--    导入商会信息:<input type="file" name="file" id="file">   <input type="submit" name="submit" value="上传EXcel文档" />-->
<!--</form>-->