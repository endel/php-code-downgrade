<?php
// Phalanger crashes it's compilation when using
// `static::` calls in some cases.
//
// https://github.com/DEVSENSE/Phalanger

class StaticToSelf extends \PHPParser_NodeVisitorAbstract {

    public function enterNode(\PHPParser_Node $node) {
        if (($node instanceof \PHPParser_Node_Expr_StaticCall && $node->class->parts[0] == "static") ||
            ($node instanceof \PhpParser\Node\Expr\New_ && $node->class->parts[0] == "static"))
        {
            $node->class->parts[0] = "self";
            return $node;
        }
    }

}

