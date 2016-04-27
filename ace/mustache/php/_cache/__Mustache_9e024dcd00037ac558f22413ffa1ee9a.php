<?php

class __Mustache_9e024dcd00037ac558f22413ffa1ee9a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '		<h4>Headings & Paragraphs</h4>
';
        $buffer .= $indent . '		<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<h1>h1. Heading 1</h1>
';
        $buffer .= $indent . '		<p class="lead">
';
        $buffer .= $indent . '			Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.				
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<h2>h2. Heading 2</h2>
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<h3>h3. Heading 3</h3>
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '			Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<h4>h4. Heading 4</h4>
';
        $buffer .= $indent . '		<h5>h5. Heading 5</h5>
';
        $buffer .= $indent . '		<h6>h6. Heading 6</h6>
';
        $buffer .= $indent . ' </div><!-- /.col -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . ' <div class="col-sm-6">
';
        $buffer .= $indent . '	<div class="widget-box">
';
        $buffer .= $indent . '		<div class="widget-header widget-header-flat">
';
        $buffer .= $indent . '			<h4 class="widget-title">Lists</h4>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="widget-body">
';
        $buffer .= $indent . '		 <div class="widget-main">
';
        $buffer .= $indent . '			<div class="row">
';
        $buffer .= $indent . '				<div class="col-sm-6">
';
        $buffer .= $indent . '					<ul>
';
        $buffer .= $indent . '						<li>Unordered List Item</li>
';
        $buffer .= $indent . '						<li><small>List Item in small tag</small></li>
';
        $buffer .= $indent . '						<li><b>List Item in bold tag</b></li>
';
        $buffer .= $indent . '						<li><i>List Item in italics tag</i></li>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<li>
';
        $buffer .= $indent . '							<ul class="list-unstyled">
';
        $buffer .= $indent . '								<li><i class="ace-icon fa fa-caret-right blue"></i> Nested List Item</li>
';
        $buffer .= $indent . '								<li><i class="ace-icon fa fa-caret-right blue"></i> Nested List Item</li>
';
        $buffer .= $indent . '								<li><i class="ace-icon fa fa-caret-right blue"></i> Nested List Item</li>
';
        $buffer .= $indent . '							</ul>
';
        $buffer .= $indent . '						</li>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<li>Unordered List Item which is a longer item and may break into more lines.</li>
';
        $buffer .= $indent . '						<li><strong>List Item in strong tag</strong></li>
';
        $buffer .= $indent . '						<li><em>List Item in emphasis tag</em></li>
';
        $buffer .= $indent . '					</ul>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="col-sm-6">
';
        $buffer .= $indent . '					<ol>
';
        $buffer .= $indent . '						<li>Ordered List Item</li>
';
        $buffer .= $indent . '						<li class="text-primary">.text-primary Ordered List Item</li>
';
        $buffer .= $indent . '						<li class="text-danger">.text-danger Ordered List Item</li>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<li class="text-success"><b>.text-success</b> Ordered List Item</li>
';
        $buffer .= $indent . '						<li class="text-warning">.text-warning Ordered List Item</li>
';
        $buffer .= $indent . '						<li class="text-muted">.text-muted Ordered List Item</li>
';
        $buffer .= $indent . '					</ol>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '          
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<hr />
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="row">
';
        $buffer .= $indent . '				<div class="col-xs-12">
';
        $buffer .= $indent . '					<ul class="list-unstyled spaced">
';
        $buffer .= $indent . '						<li><i class="ace-icon fa fa-bell-o bigger-110 purple"></i> List with custom icons and more space</li>
';
        $buffer .= $indent . '						<li><i class="ace-icon fa fa-check bigger-110 green"></i> Unordered List Item # 2</li>
';
        $buffer .= $indent . '						<li><i class="ace-icon fa fa-times bigger-110 red"></i> Unordered List Item # 3</li>
';
        $buffer .= $indent . '					</ul>
';
        $buffer .= $indent . '					<ul class="list-unstyled spaced2">
';
        $buffer .= $indent . '						<li><i class="ace-icon fa fa-circle green"></i> Even more space</li>
';
        $buffer .= $indent . '						<li class="text-warning bigger-110 orange"><i class="ace-icon fa fa-exclamation-triangle"></i> Unordered List Item # 5</li>
';
        $buffer .= $indent . '						<li class="muted"><i class="ace-icon fa fa-angle-right bigger-110"></i> Unordered List Item # 6</li>
';
        $buffer .= $indent . '						<li>
';
        $buffer .= $indent . '							<ul class="list-inline">
';
        $buffer .= $indent . '								<li><i class="ace-icon fa fa-share green bigger-110"></i> Inline List Item # 1</li>
';
        $buffer .= $indent . '								<li>List Item # 2</li>
';
        $buffer .= $indent . '								<li>List Item # 3</li>
';
        $buffer .= $indent . '							</ul>
';
        $buffer .= $indent . '						</li>
';
        $buffer .= $indent . '					</ul>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		 </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . ' </div><!-- /.col -->
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="col-sm-4">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '			<div class="widget-header widget-header-flat">
';
        $buffer .= $indent . '				<h4 class="widget-title smaller"><i class="ace-icon fa fa-quote-left smaller-80"></i> BlockQuote & Address</h4>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main">
';
        $buffer .= $indent . '				<div class="row">
';
        $buffer .= $indent . '				 <div class="col-xs-12">
';
        $buffer .= $indent . '					<blockquote class="pull-right">
';
        $buffer .= $indent . '						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
';
        $buffer .= $indent . '						<small>Someone famous <cite title="Source Title">Source Title</cite></small>
';
        $buffer .= $indent . '					</blockquote>
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="row">
';
        $buffer .= $indent . '				 <div class="col-xs-12">
';
        $buffer .= $indent . '					<blockquote>
';
        $buffer .= $indent . '						<p class="lighter line-height-125">
';
        $buffer .= $indent . '							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
';
        $buffer .= $indent . '						</p>
';
        $buffer .= $indent . '						<small>
';
        $buffer .= $indent . '							Someone famous
';
        $buffer .= $indent . '							<cite title="Source Title">Source Title</cite>
';
        $buffer .= $indent . '						</small>
';
        $buffer .= $indent . '					</blockquote>
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<address>
';
        $buffer .= $indent . '					<strong>Twitter, Inc.</strong><br>
';
        $buffer .= $indent . '					795 Folsom Ave, Suite 600<br>
';
        $buffer .= $indent . '					San Francisco, CA 94107<br>
';
        $buffer .= $indent . '					<abbr title="Phone">P:</abbr> (123) 456-7890
';
        $buffer .= $indent . '				</address>
';
        $buffer .= $indent . '				 
';
        $buffer .= $indent . '				<address>
';
        $buffer .= $indent . '					<strong>Full Name</strong><br>
';
        $buffer .= $indent . '					<a href="mailto:#">first.last@example.com</a>
';
        $buffer .= $indent . '				</address>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="col-sm-8">
';
        $buffer .= $indent . '	  <div class="row">
';
        $buffer .= $indent . '	   <div class="col-xs-12">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="widget-header widget-header-flat">
';
        $buffer .= $indent . '				<h4 class="widget-title smaller">Definition List</h4>
';
        $buffer .= $indent . '				<div class="widget-toolbar">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<small class="green"><b>Horizontal</b></small>
';
        $buffer .= $indent . '						<input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
';
        $buffer .= $indent . '						<span class="lbl middle"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main">
';
        $buffer .= $indent . '				<code class="pull-right" id="dt-list-code">&lt;dl&gt;</code>
';
        $buffer .= $indent . '				<dl id="dt-list-1">
';
        $buffer .= $indent . '					<dt>Description lists</dt>
';
        $buffer .= $indent . '					<dd>A description list is perfect for defining terms.</dd>
';
        $buffer .= $indent . '					<dt>Euismod</dt>
';
        $buffer .= $indent . '					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
';
        $buffer .= $indent . '					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
';
        $buffer .= $indent . '					<dt>Malesuada porta</dt>
';
        $buffer .= $indent . '					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
';
        $buffer .= $indent . '					<dt>Felis euismod semper eget lacinia</dt>
';
        $buffer .= $indent . '					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
';
        $buffer .= $indent . '				</dl>
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		 </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="space-6"></div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="row">
';
        $buffer .= $indent . '		 <div class="col-xs-12">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header widget-header-flat">
';
        $buffer .= $indent . '					<h4 class="smaller"><i class="ace-icon fa fa-code"></i> Code view</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '<pre class="prettyprint linenums">
';
        $buffer .= $indent . '&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
';
        $buffer .= $indent . '&lt;p class="text-warning"&gt;Etiam porta sem malesuada.&lt;/p&gt;
';
        $buffer .= $indent . '&lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
';
        $buffer .= $indent . '&lt;p class="text-info"&gt;Aenean eu leo quam.&lt;/p&gt;
';
        $buffer .= $indent . '&lt;p class="text-success"&gt;Duis mollis.&lt;/p&gt;
';
        $buffer .= $indent . '</pre>
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		 </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
