<?php

namespace AmpProject\Validator;

/**
 * Validation error value object.
 *
 * @package ampproject/amp-toolbox
 */
final class ValidationError
{

    /**
     * Severity of the validation error.
     *
     * @var ValidationSeverity
     */
    private $severity;

    /**
     * Code of the validation error.
     *
     * @var int
     */
    private $code;

    /**
     * Line that the validation error was found in.
     *
     * @var int
     */
    private $line;

    /**
     * Column that the validation error was found in.
     *
     * @var int
     */
    private $column;

    /**
     * Spec URL related to the validation error.
     *
     * @var string
     */
    private $specUrl;

    /**
     * Array of additional parameters for the validation error.
     *
     * @var string[]
     */
    private $params;

    /**
     * ValidationError constructor.
     *
     * @param ValidationSeverity $severity Severity of the validation error.
     * @param int                $code     Code of the validation error.
     * @param int                $line     Optional. Line that the validation error was found in. Defaults to 1.
     * @param null               $column   Optional. Column that the validation error was found in.
     * @param null               $specUrl  Optional. Spec URL related to the validation error.
     * @param null               $params   Optional. Array of additional parameters for the validation error.
     */
    public function __construct(
        ValidationSeverity $severity,
        $code,
        $line = 1,
        $column = null,
        $specUrl = null,
        $params = null
    ) {
        $this->severity = $severity;
        $this->code     = $code;
        $this->line     = $line;
        $this->column   = $column;
        $this->specUrl  = $specUrl;
        $this->params   = $params;
    }
}
