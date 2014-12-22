<?php
/* @var $this DetailsController */
/* @var $data Details */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_type')); ?>:</b>
	<?php echo CHtml::encode($data->detail_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_enabled')); ?>:</b>
	<?php echo CHtml::encode($data->is_enabled); ?>
	<br />


</div>