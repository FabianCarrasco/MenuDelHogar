<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Meilisearch\Client;

class IndexProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:index-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index products in MeiliSearch';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $meilisearch = new Client(env('MEILISEARCH_HOST'));
        $index = $meilisearch->getIndex('products');

        $data = Product::all();

        foreach($data as $item) {
            $index->addDocuments([$item->toArray()]);
        }

        $this->info('Products indexed successfully');
    }
}
