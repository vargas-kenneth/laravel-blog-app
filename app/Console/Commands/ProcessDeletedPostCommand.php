<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ProcessDeletedPost;

class ProcessDeletedPostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:process-deleted';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all trashed post.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ProcessDeletedPost::dispatch();
        $this->info('Processing deleted posts...');
    }
}
