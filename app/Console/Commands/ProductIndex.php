<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Meilisearch\Client;
use App\Models\Product;

class ProductIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:product-index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $meilisearch = new Client(env('MEILISEARCH_HOST'));
        $index = $meilisearch->index('products');

        $data = Product::all();

        $products = json_decode($data);

        $index->addDocuments($products);

        $this->info('Products indexed successfully');
    }
}
