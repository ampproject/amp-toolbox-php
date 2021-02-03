<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator;

final class Spec
{
    /** @var Spec\Section\Tags */
    private $tags;

    /** @var int */
    private $minValidatorRevisionRequired = 475;

    /** @var int */
    private $specFileRevision = 1141;

    /** @var string */
    private $templateSpecUrl = 'https://amp.dev/documentation/components/amp-mustache';

    /** @var string */
    private $stylesSpecUrl = 'https://amp.dev/documentation/guides-and-tutorials/develop/style_and_layout/style_pages/';

    /** @var Spec\Section\DescendantTagList */
    private $descendantTagList;

    /** @var string */
    private $scriptSpecUrl = 'https://amp.dev/documentation/guides-and-tutorials/learn/validation-workflow/validation_errors/#custom-javascript-is-not-allowed';

    /** @var Spec\Section\Css */
    private $css;

    /** @var Spec\Section\DeclarationList */
    private $declarationList;

    /** @var Spec\Section\Doc */
    private $doc;

    /** @var Spec\Section\AttributeLists */
    private $attributeLists;

    /** @var Spec\Section\Errors */
    private $errors;

    /**
     * @return Spec\Section\Tags
     */
    public function tags()
    {
        if ($this->tags === null) {
            $this->tags = new Spec\Section\Tags();
        }
        return $this->tags;
    }

    /**
     * @return int
     */
    public function minValidatorRevisionRequired()
    {
        return $this->minValidatorRevisionRequired;
    }

    /**
     * @return int
     */
    public function specFileRevision()
    {
        return $this->specFileRevision;
    }

    /**
     * @return string
     */
    public function templateSpecUrl()
    {
        return $this->templateSpecUrl;
    }

    /**
     * @return string
     */
    public function stylesSpecUrl()
    {
        return $this->stylesSpecUrl;
    }

    /**
     * @return Spec\Section\DescendantTagList
     */
    public function descendantTagList()
    {
        if ($this->descendantTagList === null) {
            $this->descendantTagList = new Spec\Section\DescendantTagList();
        }
        return $this->descendantTagList;
    }

    /**
     * @return string
     */
    public function scriptSpecUrl()
    {
        return $this->scriptSpecUrl;
    }

    /**
     * @return Spec\Section\Css
     */
    public function css()
    {
        if ($this->css === null) {
            $this->css = new Spec\Section\Css();
        }
        return $this->css;
    }

    /**
     * @return Spec\Section\DeclarationList
     */
    public function declarationList()
    {
        if ($this->declarationList === null) {
            $this->declarationList = new Spec\Section\DeclarationList();
        }
        return $this->declarationList;
    }

    /**
     * @return Spec\Section\Doc
     */
    public function doc()
    {
        if ($this->doc === null) {
            $this->doc = new Spec\Section\Doc();
        }
        return $this->doc;
    }

    /**
     * @return Spec\Section\AttributeLists
     */
    public function attributeLists()
    {
        if ($this->attributeLists === null) {
            $this->attributeLists = new Spec\Section\AttributeLists();
        }
        return $this->attributeLists;
    }

    /**
     * @return Spec\Section\Errors
     */
    public function errors()
    {
        if ($this->errors === null) {
            $this->errors = new Spec\Section\Errors();
        }
        return $this->errors;
    }
}
