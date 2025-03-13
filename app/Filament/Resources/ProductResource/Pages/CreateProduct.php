<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        // Crear el producto
        $product = parent::handleRecordCreation($data);

        // Guardar las imágenes después de crear el producto
        if (isset($data['images'])) {
            foreach ($data['images'] as $image) {
                $product->images()->create([
                    'product_id' => $product->id, // Usar el ID del producto recién creado
                    'image' => $image,
                    'is_main' => false, // Por defecto, no es la imagen principal
                ]);
            }
        }

        return $product;
    }
}
