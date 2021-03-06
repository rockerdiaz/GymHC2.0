<?php
$this->breadcrumbs=array(
	'Mis evaluaciones medicas'=>array('admin'),
	'Nueva evaluacion',
);

/*$this->menu=array(
	array('label'=>'List EvaluacionMedica','url'=>array('index')),
	array('label'=>'Manage EvaluacionMedica','url'=>array('admin')),
);*/
?>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
       	),
)); ?>

<h1 class='titles'>Nueva evaluaci&oacute;n m&eacute;dica</h1>

<?php echo $this->renderPartial('_form', 
	array('model'=>$model,
			'examen_fisico'=>$examen_fisico,
			'impresion_diagnostica'=>$impresion_diagnostica,
			'medidas_fisicas'=>$medidas_fisicas,
			'caracteristicas_fisicas'=>$caracteristicas_fisicas,
			'antecedentes_deportivos'=>$antecedentes_deportivos,
			'antecedentes_ginecobstetricos'=>$antecedentes_ginecobstetricos,
			'antecedentes_trauma_lesion'=>$antecedentes_trauma_lesion,
			'datos_extra_usuario'=>$datos_extra_usuario,
			'citas_programadas'=>$citas_programadas,
			'listado_eps'=>$listado_eps,
			'listado_deportes'=>$listado_deportes,
			'antecedentes_patologicos'=>$antecedentes_patologicos,)); ?>
