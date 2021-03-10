<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

class UnionType extends NodeAbstract
{
    /** @var (Identifier|Name)[] Type */
    public $types;

    /**
     * Constructs a union type.
     *
     * @param (Identifier|Name)[] $types      Type
     * @param array               $attributes Additional attributes
     */
    public function __construct(array $types, array $attributes = []) {
        $this->attributes = $attributes;
        $this->types = $types;
    }

    public function getSubNodeNames() : array {
        return ['types'];
    }
    
    public function getType() : string {
        return 'UnionType';
    }
}
