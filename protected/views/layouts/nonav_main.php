<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/less/legacy/legacy.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/style.min.css">
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/function.js"></script>
    <?php if(Yii::app()->theme) : ?>
        <?php if(is_file(Yii::app()->theme->basePath . '/css/style.min.css')) : ?>
            <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.min.css">
        <?php endif; ?>
        <?php if(is_file(Yii::app()->theme->basePath . '/js/function.js')) : ?>
            <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/function.js"></script>
        <?php endif; ?>
    <?php endif; ?>
</head>

<body style="padding-top:0">
    <?php $this->renderPartial('//layouts/_flash_messages');?>

    <div>
        <?php echo $content; ?>
        <div class="clear"></div>
        <?php $this->widget('application.extensions.fancybox.EFancyBox', array(
            'target'    =>  '.dxd-fancy-elem',
            'config'    =>  array(
                'type'  =>  'iframe',
                'hideOnOverlayClick'    =>  false,
                //      'maxWidth'    => 500,
                //      'maxHeight'   => 200,
                'fitToView'     => false,
                'autoSize'      => true,
                'closeClick'    => false,
                'openEffect'    => 'none',
                'closeEffect'   => 'none',
                //		'onClosed'=>'js:function(){window.location.reload();}'
            ),
        )); ?>
    </div>
    <?php $this->widget('ext.kindeditor.KindEditor', array()); ?>

</body>
</html>
