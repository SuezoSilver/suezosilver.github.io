<?php

class __Mustache_f60f26f706e38960895e63a5c406da47 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '	<ul class="ace-thumbnails clearfix">
';
        $buffer .= $indent . '	  <!-- #section:pages/gallery -->
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-1.jpg" title="Photo Title" data-rel="colorbox">
';
        $buffer .= $indent . '		  <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-1.jpg" />
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '		<div class="tags">
';
        $buffer .= $indent . '			<span class="label-holder">
';
        $buffer .= $indent . '				<span class="label label-info">breakfast</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<span class="label-holder">
';
        $buffer .= $indent . '				<span class="label label-danger">fruits</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<span class="label-holder">
';
        $buffer .= $indent . '				<span class="label label-success">toast</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<span class="label-holder">
';
        $buffer .= $indent . '				<span class="label label-warning arrowed-in">diet</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '		<div class="tools">
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-2.jpg" data-rel="colorbox">
';
        $buffer .= $indent . '		   <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-2.jpg" />
';
        $buffer .= $indent . '		   <div class="text">
';
        $buffer .= $indent . '			<div class="inner">Sample Caption on Hover</div>
';
        $buffer .= $indent . '		   </div>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <!-- /section:pages/gallery -->
';
        $buffer .= $indent . '	  
';
        $buffer .= $indent . '	  <!-- #section:pages/gallery.caption -->
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-3.jpg" data-rel="colorbox">
';
        $buffer .= $indent . '		   <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-3.jpg" />
';
        $buffer .= $indent . '		   <div class="text">
';
        $buffer .= $indent . '			<div class="inner">Sample Caption on Hover</div>
';
        $buffer .= $indent . '		   </div>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '		<div class="tools tools-bottom">
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <!-- /section:pages/gallery.caption -->
';
        $buffer .= $indent . '	  
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-4.jpg" data-rel="colorbox">
';
        $buffer .= $indent . '		   <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-4.jpg" />
';
        $buffer .= $indent . '		   <div class="tags">
';
        $buffer .= $indent . '		    <!-- #section:pages/gallery.tags -->
';
        $buffer .= $indent . '			<span class="label-holder">
';
        $buffer .= $indent . '				<span class="label label-info arrowed">fountain</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<span class="label-holder">
';
        $buffer .= $indent . '				<span class="label label-danger">recreation</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<!-- /section:pages/gallery.tags -->
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '		<div class="tools tools-top">
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<div>
';
        $buffer .= $indent . '		  <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-5.jpg" />
';
        $buffer .= $indent . '		  <div class="text">
';
        $buffer .= $indent . '			<div class="inner">
';
        $buffer .= $indent . '				<span>Some Title!</span>
';
        $buffer .= $indent . '				<br />
';
        $buffer .= $indent . '				<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-5.jpg" data-rel="colorbox"><i class="ace-icon fa fa-search-plus"></i></a>
';
        $buffer .= $indent . '				<a href="#"><i class="ace-icon fa fa-user"></i></a>
';
        $buffer .= $indent . '				<a href="#"><i class="ace-icon fa fa-share"></i></a>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-6.jpg" data-rel="colorbox">
';
        $buffer .= $indent . '		   <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-6.jpg" />
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '		<div class="tools tools-right">
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-1.jpg" data-rel="colorbox">
';
        $buffer .= $indent . '		   <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-1.jpg" />
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '		<div class="tools">
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a href="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/image-2.jpg" data-rel="colorbox">
';
        $buffer .= $indent . '		   <img width="150" height="150" alt="150x150" src="';
        $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/gallery/thumb-2.jpg" />
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '		<!-- #section:pages/gallery.tools -->
';
        $buffer .= $indent . '		<div class="tools tools-top in">
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
        $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<!-- /section:pages/gallery.tools -->
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '   </ul>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
