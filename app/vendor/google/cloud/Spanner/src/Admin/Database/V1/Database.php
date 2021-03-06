<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Spanner database.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.Database</code>
 */
class Database extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the database. Values are of the form
     *           `projects/<project>/instances/<instance>/databases/<database>`,
     *           where `<database>` is as specified in the `CREATE DATABASE`
     *           statement. This name can be passed to other API methods to
     *           identify the database.
     *     @type int $state
     *           Output only. The current database state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\Database_State::class);
        $this->state = $var;

        return $this;
    }

}

