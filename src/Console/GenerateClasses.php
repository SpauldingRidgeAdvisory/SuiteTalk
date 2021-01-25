<?php

namespace SpauldingRidge\SuiteTalk\Console;


use Illuminate\Console\Command;
use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

class GenerateClasses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SR:GenerateClasses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate SuiteTalk Classes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $generator = new Generator();
        $generator->generate(
            new Config(
                array(
                    'inputFile' => config('suitetalk.wsdl'),
                    'outputDir' => dirname(dirname(__FILE__)) . '/Service',
                    'namespaceName' => 'SpauldingRidge\SuiteTalk\Service',
                    'soapClientClass' => '\SoapClient',
                    'verbose' => true
                )
            )
        );
    }
}
