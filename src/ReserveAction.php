<?php

namespace Spatie\SchemaOrg;

/**
 * Reserving a concrete object.
 * 
 * Related actions:
 * 
 * * [[ScheduleAction]]</a>: Unlike ScheduleAction, ReserveAction reserves
 * concrete objects (e.g. a table, a hotel) towards a time slot / spatial
 * allocation.
 *
 * @see http://schema.org/ReserveAction
 *
 * @mixin PlanAction
 */
class ReserveAction extends BaseType
{
}
