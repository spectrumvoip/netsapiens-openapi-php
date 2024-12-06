# # UpdateDeviceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**device_sip_registration_uri** | **string** | This read-only value is the full SIP uri and will often be sip:[device]@[domain] | [optional] [readonly]
**device_sip_registration_state** | **string** | This is the current registration status for the device. This value will be registered if its in the value time windoe | [optional] [readonly]
**device_sip_registration_password** | **string** | This is the password which would be used for device registration. If left unset on device create it will create a new random password with a default length of 16 characters. | [optional]
**caller_id_number_emergency** | **string** | This is a override value for emergency caller id value that would be specific to this device and would override the user&#39;s set value. | [optional] [default to '[*]']
**device_force_notify_new_voicemails_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**device_level_call_recording_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**device_push_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**device_sip_registration_contact** | **string** | This is the contact value for the device from the last successfull registration. | [optional] [readonly]
**device_sip_registration_core_server** | **string** | This is the hostname for which the last registration was completed.  This would be used to connect the device from on inbound call. | [optional] [readonly]
**device_sip_registration_datetime** | **\DateTime** | This date-time will be the last registration time of the device. This time may be slightly delayed to improve replication throughput. | [optional] [readonly]
**device_sip_registration_expires_datetime** | **\DateTime** | This date-time will be the time at which the device will be treated as unregisted and should be in the future for active registed devices. | [optional] [readonly]
**device_sip_registration_expiry_seconds** | **int** | This is the requested re-register perior for the device. The device will be treated as unregistered if they do not register in this window + a system wide grace period. | [optional] [default to 60]
**device_sip_registration_ignore_for_presence_calculation** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**device_sip_registration_ignore_report_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**device_sip_registration_ip_address** | **string** | This is the read-only value is the IP:port for the last successfull registration. | [optional] [readonly]
**device_sip_registration_user_agent** | **string** | This is the read-only value for the user-agent used during the last successfully registration. | [optional] [readonly]
**device_sip_no_to_tag_in_cancel** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**device_srtp_enabled** | **string** | This setting will enable SRTP (secure/encrypted audio) on the the device. Yes will force and \&quot;opp | [optional] [default to 'no']
**auto_answer_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**recording_configuration** | [**\SpectrumVoip\\\\NetSapiens\Model\RecordingConfiguration**](RecordingConfiguration.md) |  | [optional]
**device_sip_allowed_user_agent** | **string** | This value can be used to restrict registration to a specific User Agent or partial match of User Agent.  This allows for an extra layer of secutiry if you know the expected user agent. | [optional]
**device_sip_nat_traversal_enabled** | **string** | This is the main nat transveral setting. In most all device cases \&quot;automatic\&quot; is the correct answe | [optional] [default to 'automatic']
**device_sip_latency_seconds_current** | **float** | This is the latency from the latest registration measured in seconds from the time the core sent a 407 challenge to the 200ok with Auth. | [optional] [readonly]
**device_sip_latency_seconds_average** | **float** | This is the average of the last 5 registration attempts measured similiarly to device-sip-latency-seconds-current. | [optional] [readonly]
**emergency_address_id** | **string** | This value if set will be the address-id specific to this device for emegeny calling | [optional]
**error_reading_from_endpoint_module** | **string** | If yes, it means the API had an issue accessing the NDP for mac specific data | [optional] [readonly]
**login_username** | **string** | This is a read-only value of the user&#39;s login for the owner of the device. | [optional] [readonly]
**name_full_name** | **string** | This is a read-only value of the user&#39;s full name for the owner of the device. | [optional] [readonly]
**device_models_model** | **string** | This is an optional model that when provided with device-provisioning-mac-address will link this device to the mac address in the device provisioning platform. | [optional]
**device_provisioning_mac_address** | **string** | This is the mac address that has this device linked to it. This field can be used to link a mac address on device create. Must also provide a device-models-model | [optional]
**device_provisioning_registration_core_server** | **string** | This is the SiPbx Servers primary server config from a list of valid | [optional]
**device_provisioning_sip_transport_protocol** | **string** | This is the transport that will be requested when provising the device. | [optional] [default to 'udp']
**device_provisioning_username** | **string** | The provisioning username for the request to authenticate the configuration request. | [optional]
**device_provisioning_password** | **string** | The provisioning password for the request to authenticate the configuration request. | [optional]
**device_provisioning_line** | **int** | Optional setting to select which line is used on the device when provisionined with device-models-model and device-provisioning-mac-address | [optional]
**device_provisioning_overrides** | **string** | This is the overrides set for the mac address in the provisioning server on the mac linked to this device. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
