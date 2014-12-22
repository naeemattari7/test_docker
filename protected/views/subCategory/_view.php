<?php
/* @var $this SubCategoryController */
/* @var $data SubCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_category')); ?>:</b>
	<?php echo CHtml::encode($data->sub_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_sub_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_sub_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('child_category_available')); ?>:</b>
	<?php echo CHtml::encode($data->child_category_available); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_enabled')); ?>:</b>
	<?php echo CHtml::encode($data->is_enabled); ?>
	<br />


</div>