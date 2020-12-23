<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ArrayImport;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use AmpProject\Tooling\Validator\SpecGenerator\VariableDumping;

final class ErrorFormats implements Section
{
    // TODO: Replace temporary ArrayImport with actual object hierarchy.
    use ArrayImport;
    use VariableDumping;
}
