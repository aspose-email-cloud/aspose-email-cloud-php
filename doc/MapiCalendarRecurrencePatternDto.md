# MapiCalendarRecurrencePatternDto

Mapi recurrence pattern.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**calendar_type** | **string** | Enumerated the calendar type of the mapi recurrence Enum, available values: Default, CalGregorian, CalGregorianUs, CalJapan, CalTaiwan, CalKorea, CalHijri, CalThai, CalHebrew, CalGregorianMeFrench, CalGregorianArabic, CalGregorianXLitEnglish, CalGregorianXLitFrench, CalLunarJapanese, CalChineseLunar, CalSaka, CalLunarEtoChn, CalLunarEtoKor, CalLunarRokuyou, CalLunarKorean, CalUmAlQura | 
**deleted_instance_dates** | [**\DateTime[]**](\DateTime.md) | An array of dates, each of which is the original instance date of either a deleted instance or a modified instance for this recurrence. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date of an item recurrence pattern. | 
**end_type** | **string** | Enumerates the ending type for the recurrence. Enum, available values: None, EndAfterDate, EndAfterNOccurrences, NeverEnd | 
**exceptions** | [**\Aspose\Email\Model\MapiCalendarExceptionInfoDto[]**](MapiCalendarExceptionInfoDto.md) | An exception specifies changes to an instance of a recurring series. | [optional] 
**frequency** | **string** | Enumerates mapi calendar recurrence frequency Enum, available values: None, Daily, Weekly, Monthly, Yearly | 
**modified_instance_dates** | [**\DateTime[]**](\DateTime.md) | An array of dates, each of which is the date of a modified instance. | [optional] 
**occurrence_count** | **int** | Number of occurrences in a recurrence. | 
**pattern_type** | **string** | Enumerates the mapi calendar recurrence pattern types Enum, available values: Day, Week, Month, MonthEnd, MonthNth, HjMonth, HjMonthNth, HjMonthEnd | 
**period** | **int** | Interval at which the meeting pattern repeats. | 
**sliding_flag** | **bool** | Defines whether pattern is sliding or not. | 
**start_date** | [**\DateTime**](\DateTime.md) | Start date of an item recurrence pattern. | 
**week_start_day** | **string** | Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday | 
**discriminator** | **string** |  | 




[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

