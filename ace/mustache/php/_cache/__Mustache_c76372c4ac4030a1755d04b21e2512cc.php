<?php

class __Mustache_c76372c4ac4030a1755d04b21e2512cc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-calendar-o smaller-90"></i>
';
        $buffer .= $indent . '		Datepicker
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '	  <div class="col-xs-6">
';
        $buffer .= $indent . '		<div class="input-group input-group-sm">
';
        $buffer .= $indent . '			<input type="text" id="datepicker" class="form-control" />
';
        $buffer .= $indent . '			<span class="input-group-addon"><i class="ace-icon fa fa-calendar"></i></span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . ' </div><!-- ./span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-list-alt smaller-90"></i>
';
        $buffer .= $indent . '		Dialogs
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm">Confirm Dialog</a>
';
        $buffer .= $indent . '	<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Modal Dialog</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div id="dialog-message" class="hide">
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '			This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the \'x\' icon.
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '		<div class="hr hr-12 hr-double"></div>
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '			Currently using <b>36% of your storage space</b>.
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '	</div><!-- #dialog-message -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div id="dialog-confirm" class="hide">
';
        $buffer .= $indent . '		<div class="alert alert-info bigger-110">
';
        $buffer .= $indent . '			These items will be permanently deleted and cannot be recovered.
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<div class="space-6"></div>
';
        $buffer .= $indent . '		<p class="bigger-110 bolder center grey">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i> Are you sure?
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '	</div><!-- #dialog-confirm -->
';
        $buffer .= $indent . ' </div><!-- ./span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div><!-- ./row -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-12"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-terminal smaller-90"></i>
';
        $buffer .= $indent . '		Autocomplete
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '	 <div class="col-sm-8 col-md-7">
';
        $buffer .= $indent . '		<input id="tags" type="text" class="form-control" />
';
        $buffer .= $indent . '		<div class="space-4"></div>
';
        $buffer .= $indent . '		<input id="search" type="text" class="form-control" placeholder="Type \'a\' or \'h\'" />
';
        $buffer .= $indent . '	 </div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '   
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '	 <div class="col-xs-12">
';
        $buffer .= $indent . '		<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-info smaller-90"></i>
';
        $buffer .= $indent . '			Tooltip
';
        $buffer .= $indent . '		</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="bigger-110">
';
        $buffer .= $indent . '			<p>
';
        $buffer .= $indent . '				<a class="grey" id="show-option" href="#" title="slide down on show">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-hand-o-right"></i>
';
        $buffer .= $indent . '					slide down on show
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '			</p>
';
        $buffer .= $indent . '			<p>
';
        $buffer .= $indent . '				<a class="blue" id="hide-option" href="#" title="explode on hide">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-hand-o-right"></i>
';
        $buffer .= $indent . '					explode on hide
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '			</p>
';
        $buffer .= $indent . '			<p>
';
        $buffer .= $indent . '				<a class="pink" id="open-event" href="#" title="move down on show">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-hand-o-right"></i>
';
        $buffer .= $indent . '					move down on show
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '			</p>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	 </div>
';
        $buffer .= $indent . '	</div><!-- ./row -->
';
        $buffer .= $indent . ' </div><!-- ./col -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-bars smaller-90"></i>
';
        $buffer .= $indent . '		Menu
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.menu')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . ' </div><!-- ./col -->
';
        $buffer .= $indent . '</div><!-- ./row -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-12"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-retweet smaller-90"></i>
';
        $buffer .= $indent . '		Spinner
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<input id="spinner" name="value" type="text" />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' </div><!-- ./span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-arrows-h smaller-90"></i>
';
        $buffer .= $indent . '		Slider
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<p>
';
        $buffer .= $indent . '		Please see <a href="';
        // 'createLinkFunction' section
        $value = $context->find('createLinkFunction');
        $buffer .= $this->section00e6a173dc883164e26d0d926904d0ce($context, $indent, $value);
        $buffer .= '">form elements page</a> for more slider examples.
';
        $buffer .= $indent . '	</p>
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '	<div id="slider"></div>
';
        $buffer .= $indent . ' </div><!-- ./col -->
';
        $buffer .= $indent . '</div><!-- ./row -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-12"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-list smaller-90"></i>
';
        $buffer .= $indent . '		Sortable Accordion
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.accordion')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . ' </div><!-- ./span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-folder-o smaller-90"></i>
';
        $buffer .= $indent . '		Tabs
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.tabs')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . ' </div><!-- ./col -->
';
        $buffer .= $indent . '</div><!-- ./row -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-12"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-spinner"></i>
';
        $buffer .= $indent . '		Progressbar
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div id="progressbar"></div>
';
        $buffer .= $indent . ' </div><!-- ./col -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-spinner"></i>
';
        $buffer .= $indent . '		Selectmenu
';
        $buffer .= $indent . '	</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<label for="number" class="block">Select a number</label>
';
        $buffer .= $indent . '	<select name="number" id="number">
';
        $buffer .= $indent . '		<option>1</option>
';
        $buffer .= $indent . '		<option selected="selected">2</option>
';
        $buffer .= $indent . '		<option>3</option>
';
        $buffer .= $indent . '		<option>4</option>
';
        $buffer .= $indent . '		<option>5</option>
';
        $buffer .= $indent . '	</select>
';
        $buffer .= $indent . ' </div><!-- ./col -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div><!-- ./row -->
';

        return $buffer;
    }

    private function section00e6a173dc883164e26d0d926904d0ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'form-elements';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'form-elements';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
