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

    /** @var Spec\Section\MinValidatorRevisionRequired */
    private $minValidatorRevisionRequired;

    /** @var Spec\Section\SpecFileRevision */
    private $specFileRevision;

    /** @var Spec\Section\AttrLists */
    private $attrLists;

    /** @var Spec\Section\TemplateSpecUrl */
    private $templateSpecUrl;

    /** @var Spec\Section\StylesSpecUrl */
    private $stylesSpecUrl;

    /** @var Spec\Section\DescendantTagList */
    private $descendantTagList;

    /** @var Spec\Section\ScriptSpecUrl */
    private $scriptSpecUrl;

    /** @var Spec\Section\Css */
    private $css;

    /** @var Spec\Section\DeclarationList */
    private $declarationList;

    /** @var Spec\Section\Doc */
    private $doc;

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
     * @return Spec\Section\MinValidatorRevisionRequired
     */
    public function minValidatorRevisionRequired()
    {
        if ($this->minValidatorRevisionRequired === null) {
            $this->minValidatorRevisionRequired = new Spec\Section\MinValidatorRevisionRequired();
        }
        return $this->minValidatorRevisionRequired;
    }

    /**
     * @return Spec\Section\SpecFileRevision
     */
    public function specFileRevision()
    {
        if ($this->specFileRevision === null) {
            $this->specFileRevision = new Spec\Section\SpecFileRevision();
        }
        return $this->specFileRevision;
    }

    /**
     * @return Spec\Section\AttrLists
     */
    public function attrLists()
    {
        if ($this->attrLists === null) {
            $this->attrLists = new Spec\Section\AttrLists();
        }
        return $this->attrLists;
    }

    /**
     * @return Spec\Section\TemplateSpecUrl
     */
    public function templateSpecUrl()
    {
        if ($this->templateSpecUrl === null) {
            $this->templateSpecUrl = new Spec\Section\TemplateSpecUrl();
        }
        return $this->templateSpecUrl;
    }

    /**
     * @return Spec\Section\StylesSpecUrl
     */
    public function stylesSpecUrl()
    {
        if ($this->stylesSpecUrl === null) {
            $this->stylesSpecUrl = new Spec\Section\StylesSpecUrl();
        }
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
     * @return Spec\Section\ScriptSpecUrl
     */
    public function scriptSpecUrl()
    {
        if ($this->scriptSpecUrl === null) {
            $this->scriptSpecUrl = new Spec\Section\ScriptSpecUrl();
        }
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
