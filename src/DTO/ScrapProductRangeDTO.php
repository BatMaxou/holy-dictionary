<?php

namespace App\DTO;

use App\Enum\ProductRange;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScrapProductRangeDTO extends AbstractDTO
{
    /**
     * @param ScrapProductDTO[] $items
     */
    public function __construct(
        public ProductRange $productRange,
        public array $items,
    ) {
    }

    public static function configureResolver(OptionsResolver $resolver): OptionsResolver
    {
        return $resolver
            ->setRequired('productRange')->setAllowedTypes('productRange', ProductRange::class)
            ->setRequired('items')->setAllowedTypes('items', 'array')
        ;
    }
}