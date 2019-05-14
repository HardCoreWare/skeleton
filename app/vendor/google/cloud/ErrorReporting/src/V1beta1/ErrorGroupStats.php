<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data extracted for a specific group based on certain filter criteria,
 * such as a given time period and/or service filter.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ErrorGroupStats</code>
 */
class ErrorGroupStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Group data that is independent of the filter criteria.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1;</code>
     */
    private $group = null;
    /**
     * Approximate total number of events in the given group that match
     * the filter criteria.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    private $count = 0;
    /**
     * Approximate number of affected users in the given group that
     * match the filter criteria.
     * Users are distinguished by data in the `ErrorContext` of the
     * individual error events, such as their login name or their remote
     * IP address in case of HTTP requests.
     * The number of affected users can be zero even if the number of
     * errors is non-zero if no data was provided from which the
     * affected user could be deduced.
     * Users are counted based on data in the request
     * context that was provided in the error report. If more users are
     * implicitly affected, such as due to a crash of the whole service,
     * this is not reflected here.
     *
     * Generated from protobuf field <code>int64 affected_users_count = 3;</code>
     */
    private $affected_users_count = 0;
    /**
     * Approximate number of occurrences over time.
     * Timed counts returned by ListGroups are guaranteed to be:
     * - Inside the requested time interval
     * - Non-overlapping, and
     * - Ordered by ascending time.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.TimedCount timed_counts = 4;</code>
     */
    private $timed_counts;
    /**
     * Approximate first occurrence that was ever seen for this group
     * and which matches the given filter criteria, ignoring the
     * time_range that was specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_seen_time = 5;</code>
     */
    private $first_seen_time = null;
    /**
     * Approximate last occurrence that was ever seen for this group and
     * which matches the given filter criteria, ignoring the time_range
     * that was specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_time = 6;</code>
     */
    private $last_seen_time = null;
    /**
     * Service contexts with a non-zero error count for the given filter
     * criteria. This list can be truncated if multiple services are affected.
     * Refer to `num_affected_services` for the total count.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.ServiceContext affected_services = 7;</code>
     */
    private $affected_services;
    /**
     * The total number of services with a non-zero error count for the given
     * filter criteria.
     *
     * Generated from protobuf field <code>int32 num_affected_services = 8;</code>
     */
    private $num_affected_services = 0;
    /**
     * An arbitrary event that is chosen as representative for the whole group.
     * The representative event is intended to be used as a quick preview for
     * the whole group. Events in the group are usually sufficiently similar
     * to each other such that showing an arbitrary representative provides
     * insight into the characteristics of the group as a whole.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorEvent representative = 9;</code>
     */
    private $representative = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup $group
     *           Group data that is independent of the filter criteria.
     *     @type int|string $count
     *           Approximate total number of events in the given group that match
     *           the filter criteria.
     *     @type int|string $affected_users_count
     *           Approximate number of affected users in the given group that
     *           match the filter criteria.
     *           Users are distinguished by data in the `ErrorContext` of the
     *           individual error events, such as their login name or their remote
     *           IP address in case of HTTP requests.
     *           The number of affected users can be zero even if the number of
     *           errors is non-zero if no data was provided from which the
     *           affected user could be deduced.
     *           Users are counted based on data in the request
     *           context that was provided in the error report. If more users are
     *           implicitly affected, such as due to a crash of the whole service,
     *           this is not reflected here.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\TimedCount[]|\Google\Protobuf\Internal\RepeatedField $timed_counts
     *           Approximate number of occurrences over time.
     *           Timed counts returned by ListGroups are guaranteed to be:
     *           - Inside the requested time interval
     *           - Non-overlapping, and
     *           - Ordered by ascending time.
     *     @type \Google\Protobuf\Timestamp $first_seen_time
     *           Approximate first occurrence that was ever seen for this group
     *           and which matches the given filter criteria, ignoring the
     *           time_range that was specified in the request.
     *     @type \Google\Protobuf\Timestamp $last_seen_time
     *           Approximate last occurrence that was ever seen for this group and
     *           which matches the given filter criteria, ignoring the time_range
     *           that was specified in the request.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ServiceContext[]|\Google\Protobuf\Internal\RepeatedField $affected_services
     *           Service contexts with a non-zero error count for the given filter
     *           criteria. This list can be truncated if multiple services are affected.
     *           Refer to `num_affected_services` for the total count.
     *     @type int $num_affected_services
     *           The total number of services with a non-zero error count for the given
     *           filter criteria.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ErrorEvent $representative
     *           An arbitrary event that is chosen as representative for the whole group.
     *           The representative event is intended to be used as a quick preview for
     *           the whole group. Events in the group are usually sufficiently similar
     *           to each other such that showing an arbitrary representative provides
     *           insight into the characteristics of the group as a whole.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Group data that is independent of the filter criteria.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Group data that is independent of the filter criteria.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup::class);
        $this->group = $var;

        return $this;
    }

    /**
     * Approximate total number of events in the given group that match
     * the filter criteria.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Approximate total number of events in the given group that match
     * the filter criteria.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Approximate number of affected users in the given group that
     * match the filter criteria.
     * Users are distinguished by data in the `ErrorContext` of the
     * individual error events, such as their login name or their remote
     * IP address in case of HTTP requests.
     * The number of affected users can be zero even if the number of
     * errors is non-zero if no data was provided from which the
     * affected user could be deduced.
     * Users are counted based on data in the request
     * context that was provided in the error report. If more users are
     * implicitly affected, such as due to a crash of the whole service,
     * this is not reflected here.
     *
     * Generated from protobuf field <code>int64 affected_users_count = 3;</code>
     * @return int|string
     */
    public function getAffectedUsersCount()
    {
        return $this->affected_users_count;
    }

    /**
     * Approximate number of affected users in the given group that
     * match the filter criteria.
     * Users are distinguished by data in the `ErrorContext` of the
     * individual error events, such as their login name or their remote
     * IP address in case of HTTP requests.
     * The number of affected users can be zero even if the number of
     * errors is non-zero if no data was provided from which the
     * affected user could be deduced.
     * Users are counted based on data in the request
     * context that was provided in the error report. If more users are
     * implicitly affected, such as due to a crash of the whole service,
     * this is not reflected here.
     *
     * Generated from protobuf field <code>int64 affected_users_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAffectedUsersCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->affected_users_count = $var;

        return $this;
    }

    /**
     * Approximate number of occurrences over time.
     * Timed counts returned by ListGroups are guaranteed to be:
     * - Inside the requested time interval
     * - Non-overlapping, and
     * - Ordered by ascending time.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.TimedCount timed_counts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimedCounts()
    {
        return $this->timed_counts;
    }

    /**
     * Approximate number of occurrences over time.
     * Timed counts returned by ListGroups are guaranteed to be:
     * - Inside the requested time interval
     * - Non-overlapping, and
     * - Ordered by ascending time.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.TimedCount timed_counts = 4;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\TimedCount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimedCounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ErrorReporting\V1beta1\TimedCount::class);
        $this->timed_counts = $arr;

        return $this;
    }

    /**
     * Approximate first occurrence that was ever seen for this group
     * and which matches the given filter criteria, ignoring the
     * time_range that was specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_seen_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFirstSeenTime()
    {
        return $this->first_seen_time;
    }

    /**
     * Approximate first occurrence that was ever seen for this group
     * and which matches the given filter criteria, ignoring the
     * time_range that was specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_seen_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirstSeenTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_seen_time = $var;

        return $this;
    }

    /**
     * Approximate last occurrence that was ever seen for this group and
     * which matches the given filter criteria, ignoring the time_range
     * that was specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastSeenTime()
    {
        return $this->last_seen_time;
    }

    /**
     * Approximate last occurrence that was ever seen for this group and
     * which matches the given filter criteria, ignoring the time_range
     * that was specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastSeenTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_seen_time = $var;

        return $this;
    }

    /**
     * Service contexts with a non-zero error count for the given filter
     * criteria. This list can be truncated if multiple services are affected.
     * Refer to `num_affected_services` for the total count.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.ServiceContext affected_services = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAffectedServices()
    {
        return $this->affected_services;
    }

    /**
     * Service contexts with a non-zero error count for the given filter
     * criteria. This list can be truncated if multiple services are affected.
     * Refer to `num_affected_services` for the total count.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.ServiceContext affected_services = 7;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ServiceContext[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAffectedServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ErrorReporting\V1beta1\ServiceContext::class);
        $this->affected_services = $arr;

        return $this;
    }

    /**
     * The total number of services with a non-zero error count for the given
     * filter criteria.
     *
     * Generated from protobuf field <code>int32 num_affected_services = 8;</code>
     * @return int
     */
    public function getNumAffectedServices()
    {
        return $this->num_affected_services;
    }

    /**
     * The total number of services with a non-zero error count for the given
     * filter criteria.
     *
     * Generated from protobuf field <code>int32 num_affected_services = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNumAffectedServices($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_affected_services = $var;

        return $this;
    }

    /**
     * An arbitrary event that is chosen as representative for the whole group.
     * The representative event is intended to be used as a quick preview for
     * the whole group. Events in the group are usually sufficiently similar
     * to each other such that showing an arbitrary representative provides
     * insight into the characteristics of the group as a whole.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorEvent representative = 9;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ErrorEvent
     */
    public function getRepresentative()
    {
        return $this->representative;
    }

    /**
     * An arbitrary event that is chosen as representative for the whole group.
     * The representative event is intended to be used as a quick preview for
     * the whole group. Events in the group are usually sufficiently similar
     * to each other such that showing an arbitrary representative provides
     * insight into the characteristics of the group as a whole.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorEvent representative = 9;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ErrorEvent $var
     * @return $this
     */
    public function setRepresentative($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ErrorEvent::class);
        $this->representative = $var;

        return $this;
    }

}

