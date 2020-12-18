<?php

namespace AmpProject\Validator\Spec;

use LogicException;

final class Tag
{
    /** @var string[] */
    private $alsoRequiresTagWarning;

    /** @var array */
    private $ampLayout;

    /** @var string[] */
    private $attrLists;

    /** @var array */
    private $attrs;

    /** @var array */
    private $cdata;

    /** @var array */
    private $childTags;

    /** @var string */
    private $deprecation;

    /** @var string */
    private $deprecationUrl;

    /** @var string */
    private $descendantTagList;

    /** @var string */
    private $descriptiveName;

    /** @var string[] */
    private $disabledBy;

    /** @var string[] */
    private $disallowedAncestor;

    /** @var string[] */
    private $enabledBy;

    /** @var string[] */
    private $excludes;

    /** @var bool */
    private $explicitAttrsOnly;

    /** @var array */
    private $extensionSpec;

    /** @var string[] */
    private $htmlFormat;

    /** @var bool */
    private $mandatory;

    /** @var string */
    private $mandatoryAlternatives;

    /** @var string */
    private $mandatoryAncestor;

    /** @var string */
    private $mandatoryAncestorSuggestedAlternative;

    /** @var bool */
    private $mandatoryLastChild;

    /** @var string */
    private $mandatoryParent;

    /** @var array */
    private $markDescendants;

    /** @var string */
    private $namedId;

    /** @var array[] */
    private $referencePoints;

    /** @var string[] */
    private $requires;

    /** @var string[] */
    private $requiresExtension;

    /** @var string[] */
    private $satisfies;

    /** @var bool */
    private $siblingsDisallowed;

    /** @var string */
    private $specName;

    /** @var string */
    private $specUrl;

    /** @var string */
    private $tagName;

    /** @var bool */
    private $unique;

    /** @var bool */
    private $uniqueWarning;

    /**
     * Tag constructor.
     *
     * @param array $attributes Attributes to hydrate the tag with.
     */
    public function __construct($attributes)
    {
        foreach ($attributes as $key => $value) {
            if (!property_exists($this, $key)) {
                throw new LogicException("Missing property {$key} in Tag class");
            }

            $this->$key = $value;
        }
    }

    /**
     * @return string[]
     */
    public function alsoRequiresTagWarning()
    {
        return $this->alsoRequiresTagWarning;
    }

    /**
     * @return array
     */
    public function ampLayout()
    {
        return $this->ampLayout;
    }

    /**
     * @return string[]
     */
    public function attrLists()
    {
        return $this->attrLists;
    }

    /**
     * @return array
     */
    public function attrs()
    {
        return $this->attrs;
    }

    /**
     * @return array
     */
    public function cdata()
    {
        return $this->cdata;
    }

    /**
     * @return array
     */
    public function childTags()
    {
        return $this->childTags;
    }

    /**
     * @return string
     */
    public function deprecation()
    {
        return $this->deprecation;
    }

    /**
     * @return string
     */
    public function deprecationUrl()
    {
        return $this->deprecationUrl;
    }

    /**
     * @return string
     */
    public function descendantTagList()
    {
        return $this->descendantTagList;
    }

    /**
     * @return string
     */
    public function descriptiveName()
    {
        return $this->descriptiveName;
    }

    /**
     * @return string[]
     */
    public function disabledBy()
    {
        return $this->disabledBy;
    }

    /**
     * @return string[]
     */
    public function disallowedAncestor()
    {
        return $this->disallowedAncestor;
    }

    /**
     * @return string[]
     */
    public function enabledBy()
    {
        return $this->enabledBy;
    }

    /**
     * @return string[]
     */
    public function excludes()
    {
        return $this->excludes;
    }

    /**
     * @return bool
     */
    public function explicitAttrsOnly()
    {
        return $this->explicitAttrsOnly;
    }

    /**
     * @return array
     */
    public function extensionSpec()
    {
        return $this->extensionSpec;
    }

    /**
     * @return string[]
     */
    public function htmlFormat()
    {
        return $this->htmlFormat;
    }

    /**
     * @return bool
     */
    public function mandatory()
    {
        return $this->mandatory;
    }

    /**
     * @return string
     */
    public function mandatoryAlternatives()
    {
        return $this->mandatoryAlternatives;
    }

    /**
     * @return string
     */
    public function mandatoryAncestor()
    {
        return $this->mandatoryAncestor;
    }

    /**
     * @return string
     */
    public function mandatoryAncestorSuggestedAlternative()
    {
        return $this->mandatoryAncestorSuggestedAlternative;
    }

    /**
     * @return bool
     */
    public function mandatoryLastChild()
    {
        return $this->mandatoryLastChild;
    }

    /**
     * @return string
     */
    public function mandatoryParent()
    {
        return $this->mandatoryParent;
    }

    /**
     * @return array
     */
    public function markDescendants()
    {
        return $this->markDescendants;
    }

    /**
     * @return string
     */
    public function namedId()
    {
        return $this->namedId;
    }

    /**
     * @return array[]
     */
    public function referencePoints()
    {
        return $this->referencePoints;
    }

    /**
     * @return string[]
     */
    public function requires()
    {
        return $this->requires;
    }

    /**
     * @return string[]
     */
    public function requiresExtension()
    {
        return $this->requiresExtension;
    }

    /**
     * @return string[]
     */
    public function satisfies()
    {
        return $this->satisfies;
    }

    /**
     * @return bool
     */
    public function siblingsDisallowed()
    {
        return $this->siblingsDisallowed;
    }

    /**
     * @return string
     */
    public function specName()
    {
        return $this->specName;
    }

    /**
     * @return string
     */
    public function specUrl()
    {
        return $this->specUrl;
    }

    /**
     * @return string
     */
    public function tagName()
    {
        return $this->tagName;
    }

    /**
     * @return bool
     */
    public function unique()
    {
        return $this->unique;
    }

    /**
     * @return bool
     */
    public function uniqueWarning()
    {
        return $this->uniqueWarning;
    }
}
