<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Luigel\Paymongo\Facades\Paymongo;

class WebhookListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webhook:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List the webhooks from paymongo.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $headers = ['id', 'secret_key', 'status', 'url'];

        $webhooks = Paymongo::webhook()->all();

        dd($webhooks);
    }
}
