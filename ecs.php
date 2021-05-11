<?php

declare(strict_types=1);

use PhpCsFixer\Fixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayListItemNewlineFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [
        __DIR__ . '/ecs.php',
        __DIR__ . '/bin',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])->set(Option::SKIP, [
        ArrayListItemNewlineFixer::class                 => null,
        ArrayOpenerAndCloserNewlineFixer::class          => null,
        Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class => null,
        Fixer\Phpdoc\PhpdocNoEmptyReturnFixer::class     => null,
    ]);

    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::SPACES);
    $containerConfigurator->import(SetList::ARRAY);
    $containerConfigurator->import(SetList::DOCBLOCK);

    $services = $containerConfigurator->services();
    $services->set(Fixer\ArrayNotation\ArraySyntaxFixer::class)
        ->call('configure', [[
            'syntax' => 'short',
        ]])
        ->set(Fixer\ClassNotation\VisibilityRequiredFixer::class)
        ->call('configure', [[
            'elements' => ['property', 'method'],
        ]])
        ->set(Fixer\Operator\BinaryOperatorSpacesFixer::class)
        ->call('configure', [[
            'default' => 'align',
        ]])
        ->set(Fixer\ClassNotation\ClassAttributesSeparationFixer::class)
        ->call('configure', [[
            'elements' => [
                'method'   => Fixer\ClassNotation\ClassAttributesSeparationFixer::SPACING_ONE,
                'property' => Fixer\ClassNotation\ClassAttributesSeparationFixer::SPACING_ONE,
            ],
        ]]);
};
