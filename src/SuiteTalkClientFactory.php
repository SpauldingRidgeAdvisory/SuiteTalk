<?php

namespace SpauldingRidge\SuiteTalk;


class SuiteTalkClientFactory {
    
    public static function factory($wsdl, $options) : SuiteTalkClient {
        return new SuiteTalkClient($wsdl, $options);
    }
}

