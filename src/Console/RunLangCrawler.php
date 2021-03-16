<?php

namespace PatrickZuurbier\LangCrawler\Console;

use Illuminate\Console\Command;

class RunLangCrawler extends Command
{
    protected $signature = 'langcrawler:run';

    protected $description = 'Create or update Laravel lang files for the provided locales by crawling through the project to search for language helpers.';

    public function handle(): void
    {
        $this->info('Running LangCrawler...');
    }
}