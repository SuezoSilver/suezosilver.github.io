<?php

class __Mustache_2f1199a74b0acdf85c256604a5c939dd extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '	<div class="col-sm-9">
';
        $buffer .= $indent . '		<div class="space"></div>
';
        $buffer .= $indent . '		<!-- #section:plugins/data-time.calendar -->
';
        $buffer .= $indent . '		<div id=\'calendar\'></div>
';
        $buffer .= $indent . '		<!-- /section:plugins/data-time.calendar -->
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="col-sm-3">
';
        $buffer .= $indent . '		<div class="widget-box transparent">
';
        $buffer .= $indent . '			<div class="widget-header">
';
        $buffer .= $indent . '				<h4>Draggable events</h4>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main no-padding">
';
        $buffer .= $indent . '				<div id=\'external-events\'>
';
        $buffer .= $indent . '					<div class=\'external-event label-grey\' data-class="label-grey"><i class="ace-icon fa fa-arrows"></i> My Event 1</div>
';
        $buffer .= $indent . '					<div class=\'external-event label-success\' data-class="label-success"><i class="ace-icon fa fa-arrows"></i> My Event 2</div>
';
        $buffer .= $indent . '					<div class=\'external-event label-danger\' data-class="label-danger"><i class="ace-icon fa fa-arrows"></i> My Event 3</div>
';
        $buffer .= $indent . '					<div class=\'external-event label-purple\' data-class="label-purple"><i class="ace-icon fa fa-arrows"></i> My Event 4</div>
';
        $buffer .= $indent . '					<div class=\'external-event label-yellow\' data-class="label-yellow"><i class="ace-icon fa fa-arrows"></i> My Event 5</div>
';
        $buffer .= $indent . '					<div class=\'external-event label-pink\' data-class="label-pink"><i class="ace-icon fa fa-arrows"></i> My Event 6</div>
';
        $buffer .= $indent . '					<div class=\'external-event label-info\' data-class="label-info"><i class="ace-icon fa fa-arrows"></i> My Event 7</div>
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input type=\'checkbox\' class="ace ace-checkbox" id=\'drop-remove\' /> <span class="lbl"> Remove after drop</span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
