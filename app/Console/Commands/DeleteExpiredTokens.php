<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Sanctum\PersonalAccessToken;

class DeleteExpiredTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tokens: prune-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expired personal access tokens';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $threshold = now()->subWeek();
        $count = PersonalAccessToken::where('expires_at', '<', $threshold)->delete();
        $this->info("Deleted {$count} expired personal access tokens older than 1 week.");
    }
}
