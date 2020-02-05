<?php

namespace Skies\QRcodeBundle\Twig\Extensions;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use Skies\QRcodeBundle\Generator\Generator;

/**
 * Class Project_Twig_Extension
 *
 * @package Skies\QRcodeBundle\Twig\Extensions
 */
class Barcode extends AbstractExtension
{
    /**
     * @var Generator
     */
    protected $generator;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new TwigFunction(
                'barcode',
                function ($options = []) {
                    echo $this->generator->generate($options);
                }
            ),
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'barcode';
    }
}
