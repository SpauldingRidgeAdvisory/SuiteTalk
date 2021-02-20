<?php

namespace SpauldingRidge\SuiteTalk\Console;

use Illuminate\Console\Command;
use SpauldingRidge\SuiteTalk\SuiteTalkClient;
use SpauldingRidge\SuiteTalk\Service\RecordRef;
use SpauldingRidge\SuiteTalk\Service\RecordType;
use SpauldingRidge\SuiteTalk\Service\GetRequest;

class NSTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SR:NetSuiteService {internalid}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test NetSuite Connectivity';
    
    
    private $NetSuiteService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(SuiteTalkClient $client)
    {
        parent::__construct();

        $this->NetSuiteService = $client;        
        
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $internalid = $this->argument('internalid');
        $rr = new RecordRef($internalid, null, RecordType::customer);
        $gr = new GetRequest($rr);
        print_r($this->NetSuiteService->get($gr));
        return 0;
    }
}
