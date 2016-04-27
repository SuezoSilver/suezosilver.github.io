<?php

class __Mustache_65938af18d63d6e163d47bd34a62c1e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'page.members' section
        $value = $context->findDot('page.members');
        $buffer .= $this->section31ee815f5344473f58cf98bf52cd261f($context, $indent, $value);

        return $buffer;
    }

    private function section4b9fcb36c2e0ac23d849647c4824bfe2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<span class="label label-warning">Pending</span>
	';
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
                
                $buffer .= $indent . '	<span class="label label-warning">Pending</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77e30fbbd096bcdba42852f9de5dd243(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<span class="label label-success arrowed-in arrowed-in-right">Approved</span>
	';
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
                
                $buffer .= $indent . '	<span class="label label-success arrowed-in arrowed-in-right">Approved</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0710b1432445e0e12f0017fa4970550(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<span class="label label-inverse arrowed">Blocked</span>
	';
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
                
                $buffer .= $indent . '	<span class="label label-inverse arrowed">Blocked</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1d4e742e80fb19ecd3593bc832b1d72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<span class="label label-info arrowed-in arrowed-in-right">Online</span>
	';
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
                
                $buffer .= $indent . '	<span class="label label-info arrowed-in arrowed-in-right">Online</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31ee815f5344473f58cf98bf52cd261f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <tr>
	<td class="">{{name}}</td>
	<td>
		<a href="#">{{email}}</a>
	</td>
	<td class="hidden-480">
	{{#pending}}
	<span class="label label-warning">Pending</span>
	{{/pending}}
	{{#approved}}
	<span class="label label-success arrowed-in arrowed-in-right">Approved</span>
	{{/approved}}
	{{#blocked}}
	<span class="label label-inverse arrowed">Blocked</span>
	{{/blocked}}
	{{#online}}
	<span class="label label-info arrowed-in arrowed-in-right">Online</span>
	{{/online}}
	</td>
 </tr>
';
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
                
                $buffer .= $indent . ' <tr>
';
                $buffer .= $indent . '	<td class="">';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</td>
';
                $buffer .= $indent . '	<td>
';
                $buffer .= $indent . '		<a href="#">';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</a>
';
                $buffer .= $indent . '	</td>
';
                $buffer .= $indent . '	<td class="hidden-480">
';
                // 'pending' section
                $value = $context->find('pending');
                $buffer .= $this->section4b9fcb36c2e0ac23d849647c4824bfe2($context, $indent, $value);
                // 'approved' section
                $value = $context->find('approved');
                $buffer .= $this->section77e30fbbd096bcdba42852f9de5dd243($context, $indent, $value);
                // 'blocked' section
                $value = $context->find('blocked');
                $buffer .= $this->sectionA0710b1432445e0e12f0017fa4970550($context, $indent, $value);
                // 'online' section
                $value = $context->find('online');
                $buffer .= $this->sectionC1d4e742e80fb19ecd3593bc832b1d72($context, $indent, $value);
                $buffer .= $indent . '	</td>
';
                $buffer .= $indent . ' </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
