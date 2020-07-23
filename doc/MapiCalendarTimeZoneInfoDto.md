# MapiCalendarTimeZoneInfoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bias** | **int** | Time zone's offset in minutes from UTC. | 
**daylight_bias** | **int** | Offset in minutes from lBias during daylight saving time. | 
**daylight_date** | [**\Aspose\Email\Model\MapiCalendarTimeZoneRuleDto**](MapiCalendarTimeZoneRuleDto.md) | Date and local time that indicate when to begin using the DaylightBias. | [optional] 
**standard_bias** | **int** | Offset in minutes from lBias during standard time. | 
**standard_date** | [**\Aspose\Email\Model\MapiCalendarTimeZoneRuleDto**](MapiCalendarTimeZoneRuleDto.md) | Date and local time that indicate when to begin using the StandardBias. | [optional] 
**time_zone_flags** | **string[]** | Individual bit flags that specify information about this TimeZoneRule. Items: Enumerates the individual bit flags that specify information about TimeZoneRule Enum, available values: TzRuleFlagRecurCurrentTzReg, TzRuleFlagEffectiveTzReg | [optional] 
**year** | **int** | Year in which this rule is scheduled to take effect. | 



[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)


