<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!empty($data['gambar'])) {
            $data['gambar'] = $this->convertToWebp($data['gambar']);
        }

        return $data;
    }

    private function convertToWebp(string $path): string
    {
        $fullPath = storage_path('app/public/' . $path);
        if (!file_exists($fullPath)) return $path;

        $dir = pathinfo($fullPath, PATHINFO_DIRNAME);
        $filename = pathinfo($fullPath, PATHINFO_FILENAME);
        $webpPath = $dir . '/' . $filename . '.webp';

        $mime = mime_content_type($fullPath);
        $img = match ($mime) {
            'image/jpeg', 'image/jpg' => imagecreatefromjpeg($fullPath),
            'image/png' => imagecreatefrompng($fullPath),
            'image/webp' => imagecreatefromwebp($fullPath),
            default => null,
        };

        if ($img) {
            imagewebp($img, $webpPath, 80);
            imagedestroy($img);
            if (pathinfo($fullPath, PATHINFO_EXTENSION) !== 'webp') {
                unlink($fullPath);
            }
            return pathinfo($path, PATHINFO_DIRNAME) . '/' . $filename . '.webp';
        }

        return $path;
    }
}
