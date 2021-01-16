<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;

final class DeclarationLists
{
    /** @var array<Spec\DeclarationList> */
    private $declarations;

    /**
     * Get a specific declaration list.
     *
     * @param string $declarationListName Name of the declaration list to get.
     * @return Spec\DeclarationList Declaration list with the given declaration list name.
     * @throws InvalidListName If an invalid declaration list name is requested.
     */
    public function get($declarationListName)
    {
        if (!array_key_exists($declarationListName, $this->declarations)) {
            throw InvalidListName::forDeclarationList($declarationListName);
        }

        return $this->declarations[$declarationListName];
    }
}
