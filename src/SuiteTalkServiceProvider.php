<?php

namespace SpauldingRidge\SuiteTalk;

use Illuminate\Support\ServiceProvider;
use SpauldingRidge\SuiteTalk\Console\GenerateClasses;
use SpauldingRidge\SuiteTalk\Console\NSTest;

class SuiteTalkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SuiteTalkClient::class, function($app){
            return SuiteTalkClientFactory::factory(
                config('suitetalk.wsdl'), 
                $options = array(
                    'user_agent' => "PHP-SOAP/" . phpversion() . " + Spaulding Ridge NetSuite PHP Toolkit " . config('suitetalk.version'),
                    'trace' => 1,
                    'connection_timeout' => 5,
                    'cache_wsdl' => WSDL_CACHE_BOTH,
                    'location' => config('suitetalk.host'),
                    'keep_alive' => false,
                    'features' => SOAP_SINGLE_ELEMENT_ARRAYS)
            );
        });
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateClasses::class,
                NSTest::class
            ]);
        }
    }
}
