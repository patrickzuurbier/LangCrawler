<?php

namespace PatrickZuurbier\LangCrawler;

use Illuminate\Support\ServiceProvider;
use PatrickZuurbier\LangCrawler\Console\RunLangCrawler;

class LangCrawlerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RunLangCrawler::class,
            ]);
        }
    }
}