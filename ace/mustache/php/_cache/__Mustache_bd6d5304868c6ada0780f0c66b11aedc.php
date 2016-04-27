<?php

class __Mustache_bd6d5304868c6ada0780f0c66b11aedc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div id="tabs">
';
        $buffer .= $indent . '  <ul>
';
        $buffer .= $indent . '	<li><a href="#tabs-1">Nunc tincidunt</a></li>
';
        $buffer .= $indent . '	<li><a href="#tabs-2">Proin dolor</a></li>
';
        $buffer .= $indent . '	<li><a href="#tabs-3">Aenean lacinia</a></li>
';
        $buffer .= $indent . '  </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div id="tabs-1">
';
        $buffer .= $indent . '	<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Duis orci. Aliquam sodales tortor vitae ipsum. Ut et mauris vel pede varius sollicitudin.</p>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  <div id="tabs-2">
';
        $buffer .= $indent . '	<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla..</p>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div id="tabs-3">
';
        $buffer .= $indent . '	<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Praesent eu risus hendrerit ligula tempus pretium.</p>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
