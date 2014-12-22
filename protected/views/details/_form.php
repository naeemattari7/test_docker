<?php
/* @var $this DetailsController */
/* @var $model Details */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_category_id'); ?>
		<?php echo $form->textField($model,'sub_category_id'); ?>
		<?php echo $form->error($model,'sub_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_type'); ?>
		<?php echo $form->textField($model,'detail_type'); ?>
		<?php echo $form->error($model,'detail_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_enabled'); ?>
		<?php echo $form->textField($model,'is_enabled'); ?>
		<?php echo $form->error($model,'is_enabled'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->