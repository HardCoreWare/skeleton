<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/application_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to delete a application.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.DeleteApplicationRequest</code>
 */
class DeleteApplicationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The resource name of the application to be deleted.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}",
     * for example,
     * "projects/test-project/tenants/test-tenant/profiles/test-profile/applications/test-application".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required.
     *           The resource name of the application to be deleted.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}",
     *           for example,
     *           "projects/test-project/tenants/test-tenant/profiles/test-profile/applications/test-application".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\ApplicationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * The resource name of the application to be deleted.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}",
     * for example,
     * "projects/test-project/tenants/test-tenant/profiles/test-profile/applications/test-application".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required.
     * The resource name of the application to be deleted.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}",
     * for example,
     * "projects/test-project/tenants/test-tenant/profiles/test-profile/applications/test-application".
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

}

