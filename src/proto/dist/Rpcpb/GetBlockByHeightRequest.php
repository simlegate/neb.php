<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Rpcpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message of GetBlockByHeight rpc.
 *
 * Generated from protobuf message <code>rpcpb.GetBlockByHeightRequest</code>
 */
class GetBlockByHeightRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * block height.
     *
     * Generated from protobuf field <code>uint64 height = 1;</code>
     */
    private $height = 0;
    /**
     * If true it returns the full transaction objects, if false only the hashes of the transactions.
     *
     * Generated from protobuf field <code>bool full_fill_transaction = 2;</code>
     */
    private $full_fill_transaction = false;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * block height.
     *
     * Generated from protobuf field <code>uint64 height = 1;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * block height.
     *
     * Generated from protobuf field <code>uint64 height = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * If true it returns the full transaction objects, if false only the hashes of the transactions.
     *
     * Generated from protobuf field <code>bool full_fill_transaction = 2;</code>
     * @return bool
     */
    public function getFullFillTransaction()
    {
        return $this->full_fill_transaction;
    }

    /**
     * If true it returns the full transaction objects, if false only the hashes of the transactions.
     *
     * Generated from protobuf field <code>bool full_fill_transaction = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullFillTransaction($var)
    {
        GPBUtil::checkBool($var);
        $this->full_fill_transaction = $var;

        return $this;
    }

}

