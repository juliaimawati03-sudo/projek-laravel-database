<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailTransaksi>
 */
class DetailTransaksiFactory extends Factory
{
    public function definition(): array
    {
        $jumlah = fake()->numberBetween(1, 10);
        $hargaSatuan = fake()->numberBetween(10000, 500000);

        return [
            'transaksi_id' => Transaksi::factory(),
            'produk_id' => Product::factory(),
            'jumlah' => $jumlah,
            'harga_satuan' => $hargaSatuan,
            'subtotal' => $jumlah * $hargaSatuan,
        ];
    }
}