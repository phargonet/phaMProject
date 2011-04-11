<?php
$this->beginContent( 'ext.phaMProject.views.layouts.main' );
?>
    <?php $this->beginWidget('ext.phaMProject.widgets.phaMPage'); ?>

        <?php $this->beginWidget('ext.phaMProject.widgets.phaMHeader'); ?>
            <h1><?php
            echo CHtml::encode( $this->pageTitle );
            ?></h1>
        <?php $this->endWidget();?>

        <?php $this->beginWidget('ext.phaMProject.widgets.phaMContent'); ?>
            <?php echo $content;?>
        <?php $this->endWidget();?>
    <?php $this->endWidget();?>
<?php
$this->endContent();
?>