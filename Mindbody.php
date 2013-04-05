<?php
include_once(__DIR__."/MindbodyClient.php");
include_once(__DIR__."/services/Appointment_Service.php");
include_once(__DIR__."/services/Class_Service.php");
include_once(__DIR__."/services/Client_Service.php");
include_once(__DIR__."/services/Data_Service.php");
include_once(__DIR__."/services/Finder_Service.php");
include_once(__DIR__."/services/Sale_Service.php");
include_once(__DIR__."/services/Site_Service.php");
include_once(__DIR__."/services/Staff_Service.php");
include_once(__DIR__."/structures/ActionCode.php");
include_once(__DIR__."/structures/AddArrival.php");
include_once(__DIR__."/structures/AddArrivalRequest.php");
include_once(__DIR__."/structures/AddArrivalResponse.php");
include_once(__DIR__."/structures/AddArrivalResult.php");
include_once(__DIR__."/structures/AddClientsToClasses.php");
include_once(__DIR__."/structures/AddClientsToClassesRequest.php");
include_once(__DIR__."/structures/AddClientsToClassesResponse.php");
include_once(__DIR__."/structures/AddClientsToClassesResult.php");
include_once(__DIR__."/structures/AddClientsToEnrollments.php");
include_once(__DIR__."/structures/AddClientsToEnrollmentsRequest.php");
include_once(__DIR__."/structures/AddClientsToEnrollmentsResponse.php");
include_once(__DIR__."/structures/AddClientsToEnrollmentsResult.php");
include_once(__DIR__."/structures/AddOrUpdateAppointments.php");
include_once(__DIR__."/structures/AddOrUpdateAppointmentsRequest.php");
include_once(__DIR__."/structures/AddOrUpdateAppointmentsResponse.php");
include_once(__DIR__."/structures/AddOrUpdateAppointmentsResult.php");
include_once(__DIR__."/structures/AddOrUpdateAvailabilities.php");
include_once(__DIR__."/structures/AddOrUpdateAvailabilitiesRequest.php");
include_once(__DIR__."/structures/AddOrUpdateAvailabilitiesResponse.php");
include_once(__DIR__."/structures/AddOrUpdateAvailabilitiesResult.php");
include_once(__DIR__."/structures/AddOrUpdateClients.php");
include_once(__DIR__."/structures/AddOrUpdateClientsRequest.php");
include_once(__DIR__."/structures/AddOrUpdateClientsResponse.php");
include_once(__DIR__."/structures/AddOrUpdateClientsResult.php");
include_once(__DIR__."/structures/AddOrUpdateContactLogs.php");
include_once(__DIR__."/structures/AddOrUpdateContactLogsRequest.php");
include_once(__DIR__."/structures/AddOrUpdateContactLogsResponse.php");
include_once(__DIR__."/structures/AddOrUpdateContactLogsResult.php");
include_once(__DIR__."/structures/AddOrUpdateFinderUsers.php");
include_once(__DIR__."/structures/AddOrUpdateFinderUsersRequest.php");
include_once(__DIR__."/structures/AddOrUpdateFinderUsersResponse.php");
include_once(__DIR__."/structures/AddOrUpdateFinderUsersResult.php");
include_once(__DIR__."/structures/AddOrUpdateStaff.php");
include_once(__DIR__."/structures/AddOrUpdateStaffRequest.php");
include_once(__DIR__."/structures/AddOrUpdateStaffResponse.php");
include_once(__DIR__."/structures/AddOrUpdateStaffResult.php");
include_once(__DIR__."/structures/Appointment.php");
include_once(__DIR__."/structures/AppointmentStatus.php");
include_once(__DIR__."/structures/Availability.php");
include_once(__DIR__."/structures/AvailabilityDisplay.php");
include_once(__DIR__."/structures/CartItem.php");
include_once(__DIR__."/structures/CashInfo.php");
include_once(__DIR__."/structures/CheckInfo.php");
include_once(__DIR__."/structures/CheckoutShoppingCart.php");
include_once(__DIR__."/structures/CheckoutShoppingCartRequest.php");
include_once(__DIR__."/structures/CheckoutShoppingCartResponse.php");
include_once(__DIR__."/structures/CheckoutShoppingCartResult.php");
include_once(__DIR__."/structures/ClassDescription.php");
include_once(__DIR__."/structures/ClassSchedule.php");
include_once(__DIR__."/structures/Client.php");
include_once(__DIR__."/structures/ClientContract.php");
include_once(__DIR__."/structures/ClientCreditCard.php");
include_once(__DIR__."/structures/ClientIndex.php");
include_once(__DIR__."/structures/ClientIndexValue.php");
include_once(__DIR__."/structures/ClientMembership.php");
include_once(__DIR__."/structures/ClientRelationship.php");
include_once(__DIR__."/structures/ClientSendUserNewPasswordRequest.php");
include_once(__DIR__."/structures/ClientSendUserNewPasswordResult.php");
include_once(__DIR__."/structures/ClientService.php");
include_once(__DIR__."/structures/Color.php");
include_once(__DIR__."/structures/CompInfo.php");
include_once(__DIR__."/structures/ContactLog.php");
include_once(__DIR__."/structures/ContactLogComment.php");
include_once(__DIR__."/structures/ContactLogSubtype.php");
include_once(__DIR__."/structures/ContactLogType.php");
include_once(__DIR__."/structures/Course.php");
include_once(__DIR__."/structures/CreditCardInfo.php");
include_once(__DIR__."/structures/CustomClientField.php");
include_once(__DIR__."/structures/CustomPaymentInfo.php");
include_once(__DIR__."/structures/DayOfWeek.php");
include_once(__DIR__."/structures/DebitAccountInfo.php");
include_once(__DIR__."/structures/EncryptedTrackDataInfo.php");
include_once(__DIR__."/structures/FinderAppointment.php");
include_once(__DIR__."/structures/FinderCheckoutShoppingCart.php");
include_once(__DIR__."/structures/FinderCheckoutShoppingCartRequest.php");
include_once(__DIR__."/structures/FinderCheckoutShoppingCartResponse.php");
include_once(__DIR__."/structures/FinderCheckoutShoppingCartResult.php");
include_once(__DIR__."/structures/FinderClass.php");
include_once(__DIR__."/structures/FinderSessionType.php");
include_once(__DIR__."/structures/FinderUser.php");
include_once(__DIR__."/structures/GetAcceptedCardType.php");
include_once(__DIR__."/structures/GetAcceptedCardTypeRequest.php");
include_once(__DIR__."/structures/GetAcceptedCardTypeResponse.php");
include_once(__DIR__."/structures/GetAcceptedCardTypeResult.php");
include_once(__DIR__."/structures/GetActivationCode.php");
include_once(__DIR__."/structures/GetActivationCodeRequest.php");
include_once(__DIR__."/structures/GetActivationCodeResponse.php");
include_once(__DIR__."/structures/GetActivationCodeResult.php");
include_once(__DIR__."/structures/GetActiveClientMemberships.php");
include_once(__DIR__."/structures/GetActiveClientMembershipsRequest.php");
include_once(__DIR__."/structures/GetActiveClientMembershipsResponse.php");
include_once(__DIR__."/structures/GetActiveClientMembershipsResult.php");
include_once(__DIR__."/structures/GetActiveSessionTimes.php");
include_once(__DIR__."/structures/GetActiveSessionTimesRequest.php");
include_once(__DIR__."/structures/GetActiveSessionTimesResponse.php");
include_once(__DIR__."/structures/GetActiveSessionTimesResult.php");
include_once(__DIR__."/structures/GetAppointmentOptions.php");
include_once(__DIR__."/structures/GetAppointmentOptionsRequest.php");
include_once(__DIR__."/structures/GetAppointmentOptionsResponse.php");
include_once(__DIR__."/structures/GetAppointmentOptionsResult.php");
include_once(__DIR__."/structures/GetBookableItems.php");
include_once(__DIR__."/structures/GetBookableItemsRequest.php");
include_once(__DIR__."/structures/GetBookableItemsResponse.php");
include_once(__DIR__."/structures/GetBookableItemsResult.php");
include_once(__DIR__."/structures/GetBusinessLocationsWithinRadius.php");
include_once(__DIR__."/structures/GetBusinessLocationsWithinRadiusRequest.php");
include_once(__DIR__."/structures/GetBusinessLocationsWithinRadiusResponse.php");
include_once(__DIR__."/structures/GetBusinessLocationsWithinRadiusResult.php");
include_once(__DIR__."/structures/GetClassDescriptions.php");
include_once(__DIR__."/structures/GetClassDescriptionsRequest.php");
include_once(__DIR__."/structures/GetClassDescriptionsResponse.php");
include_once(__DIR__."/structures/GetClassDescriptionsResult.php");
include_once(__DIR__."/structures/GetClassSchedules.php");
include_once(__DIR__."/structures/GetClassSchedulesRequest.php");
include_once(__DIR__."/structures/GetClassSchedulesResponse.php");
include_once(__DIR__."/structures/GetClassSchedulesResult.php");
include_once(__DIR__."/structures/GetClassVisits.php");
include_once(__DIR__."/structures/GetClassVisitsRequest.php");
include_once(__DIR__."/structures/GetClassVisitsResponse.php");
include_once(__DIR__."/structures/GetClassVisitsResult.php");
include_once(__DIR__."/structures/GetClasses.php");
include_once(__DIR__."/structures/GetClassesRequest.php");
include_once(__DIR__."/structures/GetClassesResponse.php");
include_once(__DIR__."/structures/GetClassesResult.php");
include_once(__DIR__."/structures/GetClassesWithinRadius.php");
include_once(__DIR__."/structures/GetClassesWithinRadiusRequest.php");
include_once(__DIR__."/structures/GetClassesWithinRadiusResponse.php");
include_once(__DIR__."/structures/GetClassesWithinRadiusResult.php");
include_once(__DIR__."/structures/GetClientAccountBalances.php");
include_once(__DIR__."/structures/GetClientAccountBalancesRequest.php");
include_once(__DIR__."/structures/GetClientAccountBalancesResponse.php");
include_once(__DIR__."/structures/GetClientAccountBalancesResult.php");
include_once(__DIR__."/structures/GetClientContactLogs.php");
include_once(__DIR__."/structures/GetClientContactLogsRequest.php");
include_once(__DIR__."/structures/GetClientContactLogsResponse.php");
include_once(__DIR__."/structures/GetClientContactLogsResult.php");
include_once(__DIR__."/structures/GetClientContracts.php");
include_once(__DIR__."/structures/GetClientContractsRequest.php");
include_once(__DIR__."/structures/GetClientContractsResponse.php");
include_once(__DIR__."/structures/GetClientContractsResult.php");
include_once(__DIR__."/structures/GetClientIndexes.php");
include_once(__DIR__."/structures/GetClientIndexesRequest.php");
include_once(__DIR__."/structures/GetClientIndexesResponse.php");
include_once(__DIR__."/structures/GetClientIndexesResult.php");
include_once(__DIR__."/structures/GetClientPurchases.php");
include_once(__DIR__."/structures/GetClientPurchasesRequest.php");
include_once(__DIR__."/structures/GetClientPurchasesResponse.php");
include_once(__DIR__."/structures/GetClientPurchasesResult.php");
include_once(__DIR__."/structures/GetClientReferralTypes.php");
include_once(__DIR__."/structures/GetClientReferralTypesRequest.php");
include_once(__DIR__."/structures/GetClientReferralTypesResponse.php");
include_once(__DIR__."/structures/GetClientReferralTypesResult.php");
include_once(__DIR__."/structures/GetClientSchedule.php");
include_once(__DIR__."/structures/GetClientScheduleRequest.php");
include_once(__DIR__."/structures/GetClientScheduleResponse.php");
include_once(__DIR__."/structures/GetClientScheduleResult.php");
include_once(__DIR__."/structures/GetClientServices.php");
include_once(__DIR__."/structures/GetClientServicesRequest.php");
include_once(__DIR__."/structures/GetClientServicesResponse.php");
include_once(__DIR__."/structures/GetClientServicesResult.php");
include_once(__DIR__."/structures/GetClientVisits.php");
include_once(__DIR__."/structures/GetClientVisitsRequest.php");
include_once(__DIR__."/structures/GetClientVisitsResponse.php");
include_once(__DIR__."/structures/GetClientVisitsResult.php");
include_once(__DIR__."/structures/GetClients.php");
include_once(__DIR__."/structures/GetClientsRequest.php");
include_once(__DIR__."/structures/GetClientsResponse.php");
include_once(__DIR__."/structures/GetClientsResult.php");
include_once(__DIR__."/structures/GetContactLogTypes.php");
include_once(__DIR__."/structures/GetContactLogTypesRequest.php");
include_once(__DIR__."/structures/GetContactLogTypesResponse.php");
include_once(__DIR__."/structures/GetContactLogTypesResult.php");
include_once(__DIR__."/structures/GetCourses.php");
include_once(__DIR__."/structures/GetCoursesRequest.php");
include_once(__DIR__."/structures/GetCoursesResponse.php");
include_once(__DIR__."/structures/GetCoursesResult.php");
include_once(__DIR__."/structures/GetCustomClientFields.php");
include_once(__DIR__."/structures/GetCustomClientFieldsRequest.php");
include_once(__DIR__."/structures/GetCustomClientFieldsResponse.php");
include_once(__DIR__."/structures/GetCustomClientFieldsResult.php");
include_once(__DIR__."/structures/GetCustomPaymentMethods.php");
include_once(__DIR__."/structures/GetCustomPaymentMethodsRequest.php");
include_once(__DIR__."/structures/GetCustomPaymentMethodsResponse.php");
include_once(__DIR__."/structures/GetCustomPaymentMethodsResult.php");
include_once(__DIR__."/structures/GetEnrollments.php");
include_once(__DIR__."/structures/GetEnrollmentsRequest.php");
include_once(__DIR__."/structures/GetEnrollmentsResponse.php");
include_once(__DIR__."/structures/GetEnrollmentsResult.php");
include_once(__DIR__."/structures/GetFinderUser.php");
include_once(__DIR__."/structures/GetFinderUserRequest.php");
include_once(__DIR__."/structures/GetFinderUserResponse.php");
include_once(__DIR__."/structures/GetFinderUserResult.php");
include_once(__DIR__."/structures/GetLocations.php");
include_once(__DIR__."/structures/GetLocationsRequest.php");
include_once(__DIR__."/structures/GetLocationsResponse.php");
include_once(__DIR__."/structures/GetLocationsResult.php");
include_once(__DIR__."/structures/GetPackages.php");
include_once(__DIR__."/structures/GetPackagesRequest.php");
include_once(__DIR__."/structures/GetPackagesResponse.php");
include_once(__DIR__."/structures/GetPackagesResult.php");
include_once(__DIR__."/structures/GetProducts.php");
include_once(__DIR__."/structures/GetProductsRequest.php");
include_once(__DIR__."/structures/GetProductsResponse.php");
include_once(__DIR__."/structures/GetProductsResult.php");
include_once(__DIR__."/structures/GetPrograms.php");
include_once(__DIR__."/structures/GetProgramsRequest.php");
include_once(__DIR__."/structures/GetProgramsResponse.php");
include_once(__DIR__."/structures/GetProgramsResult.php");
include_once(__DIR__."/structures/GetRelationships.php");
include_once(__DIR__."/structures/GetRelationshipsRequest.php");
include_once(__DIR__."/structures/GetRelationshipsResponse.php");
include_once(__DIR__."/structures/GetRelationshipsResult.php");
include_once(__DIR__."/structures/GetRequiredClientFields.php");
include_once(__DIR__."/structures/GetRequiredClientFieldsRequest.php");
include_once(__DIR__."/structures/GetRequiredClientFieldsResponse.php");
include_once(__DIR__."/structures/GetRequiredClientFieldsResult.php");
include_once(__DIR__."/structures/GetResources.php");
include_once(__DIR__."/structures/GetResourcesRequest.php");
include_once(__DIR__."/structures/GetResourcesResponse.php");
include_once(__DIR__."/structures/GetResourcesResult.php");
include_once(__DIR__."/structures/GetSales.php");
include_once(__DIR__."/structures/GetSalesRequest.php");
include_once(__DIR__."/structures/GetSalesResponse.php");
include_once(__DIR__."/structures/GetSalesResult.php");
include_once(__DIR__."/structures/GetScheduleItems.php");
include_once(__DIR__."/structures/GetScheduleItemsRequest.php");
include_once(__DIR__."/structures/GetScheduleItemsResponse.php");
include_once(__DIR__."/structures/GetScheduleItemsResult.php");
include_once(__DIR__."/structures/GetSemesters.php");
include_once(__DIR__."/structures/GetSemestersRequest.php");
include_once(__DIR__."/structures/GetSemestersResponse.php");
include_once(__DIR__."/structures/GetSemestersResult.php");
include_once(__DIR__."/structures/GetServices.php");
include_once(__DIR__."/structures/GetServicesRequest.php");
include_once(__DIR__."/structures/GetServicesResponse.php");
include_once(__DIR__."/structures/GetServicesResult.php");
include_once(__DIR__."/structures/GetSessionTypes.php");
include_once(__DIR__."/structures/GetSessionTypesRequest.php");
include_once(__DIR__."/structures/GetSessionTypesResponse.php");
include_once(__DIR__."/structures/GetSessionTypesResult.php");
include_once(__DIR__."/structures/GetSessionTypesWithinRadius.php");
include_once(__DIR__."/structures/GetSessionTypesWithinRadiusRequest.php");
include_once(__DIR__."/structures/GetSessionTypesWithinRadiusResponse.php");
include_once(__DIR__."/structures/GetSessionTypesWithinRadiusResult.php");
include_once(__DIR__."/structures/GetSites.php");
include_once(__DIR__."/structures/GetSitesRequest.php");
include_once(__DIR__."/structures/GetSitesResponse.php");
include_once(__DIR__."/structures/GetSitesResult.php");
include_once(__DIR__."/structures/GetStaff.php");
include_once(__DIR__."/structures/GetStaffAppointments.php");
include_once(__DIR__."/structures/GetStaffAppointmentsRequest.php");
include_once(__DIR__."/structures/GetStaffAppointmentsResponse.php");
include_once(__DIR__."/structures/GetStaffAppointmentsResult.php");
include_once(__DIR__."/structures/GetStaffPermissions.php");
include_once(__DIR__."/structures/GetStaffPermissionsRequest.php");
include_once(__DIR__."/structures/GetStaffPermissionsResponse.php");
include_once(__DIR__."/structures/GetStaffPermissionsResult.php");
include_once(__DIR__."/structures/GetStaffRequest.php");
include_once(__DIR__."/structures/GetStaffResponse.php");
include_once(__DIR__."/structures/GetStaffResult.php");
include_once(__DIR__."/structures/GetWaitlistEntries.php");
include_once(__DIR__."/structures/GetWaitlistEntriesRequest.php");
include_once(__DIR__."/structures/GetWaitlistEntriesResponse.php");
include_once(__DIR__."/structures/GetWaitlistEntriesResult.php");
include_once(__DIR__."/structures/GiftCardInfo.php");
include_once(__DIR__."/structures/Item.php");
include_once(__DIR__."/structures/Level.php");
include_once(__DIR__."/structures/Location.php");
include_once(__DIR__."/structures/MBObject.php");
include_once(__DIR__."/structures/MBRequest.php");
include_once(__DIR__."/structures/MBResult.php");
include_once(__DIR__."/structures/Mindbody.php");
include_once(__DIR__."/structures/Mindbody_Class.php");
include_once(__DIR__."/structures/Option.php");
include_once(__DIR__."/structures/Organization.php");
include_once(__DIR__."/structures/Package.php");
include_once(__DIR__."/structures/Payment.php");
include_once(__DIR__."/structures/PaymentInfo.php");
include_once(__DIR__."/structures/Permission.php");
include_once(__DIR__."/structures/Product.php");
include_once(__DIR__."/structures/Program.php");
include_once(__DIR__."/structures/RecordSet.php");
include_once(__DIR__."/structures/RedeemSpaFinderWellnessCard.php");
include_once(__DIR__."/structures/RedeemSpaFinderWellnessCardRequest.php");
include_once(__DIR__."/structures/RedeemSpaFinderWellnessCardResponse.php");
include_once(__DIR__."/structures/RedeemSpaFinderWellnessCardResult.php");
include_once(__DIR__."/structures/Relationship.php");
include_once(__DIR__."/structures/RemoveClientsFromClasses.php");
include_once(__DIR__."/structures/RemoveClientsFromClassesRequest.php");
include_once(__DIR__."/structures/RemoveClientsFromClassesResponse.php");
include_once(__DIR__."/structures/RemoveClientsFromClassesResult.php");
include_once(__DIR__."/structures/RemoveFromWaitlist.php");
include_once(__DIR__."/structures/RemoveFromWaitlistRequest.php");
include_once(__DIR__."/structures/RemoveFromWaitlistResponse.php");
include_once(__DIR__."/structures/RemoveFromWaitlistResult.php");
include_once(__DIR__."/structures/Rep.php");
include_once(__DIR__."/structures/Resource.php");
include_once(__DIR__."/structures/Row.php");
include_once(__DIR__."/structures/Sale.php");
include_once(__DIR__."/structures/SaleItem.php");
include_once(__DIR__."/structures/ScheduleItem.php");
include_once(__DIR__."/structures/ScheduleType.php");
include_once(__DIR__."/structures/SelectAggregateDataCSV.php");
include_once(__DIR__."/structures/SelectAggregateDataCSVRequest.php");
include_once(__DIR__."/structures/SelectAggregateDataCSVResponse.php");
include_once(__DIR__."/structures/SelectAggregateDataCSVResult.php");
include_once(__DIR__."/structures/SelectAggregateDataXml.php");
include_once(__DIR__."/structures/SelectAggregateDataXmlRequest.php");
include_once(__DIR__."/structures/SelectAggregateDataXmlResponse.php");
include_once(__DIR__."/structures/SelectAggregateDataXmlResult.php");
include_once(__DIR__."/structures/SelectDataCSV.php");
include_once(__DIR__."/structures/SelectDataCSVRequest.php");
include_once(__DIR__."/structures/SelectDataCSVResponse.php");
include_once(__DIR__."/structures/SelectDataCSVResult.php");
include_once(__DIR__."/structures/SelectDataXml.php");
include_once(__DIR__."/structures/SelectDataXmlRequest.php");
include_once(__DIR__."/structures/SelectDataXmlResponse.php");
include_once(__DIR__."/structures/SelectDataXmlResult.php");
include_once(__DIR__."/structures/Semester.php");
include_once(__DIR__."/structures/SendFinderUserNewPassword.php");
include_once(__DIR__."/structures/SendFinderUserNewPasswordRequest.php");
include_once(__DIR__."/structures/SendFinderUserNewPasswordResponse.php");
include_once(__DIR__."/structures/SendFinderUserNewPasswordResult.php");
include_once(__DIR__."/structures/SendUserNewPassword.php");
include_once(__DIR__."/structures/SendUserNewPasswordResponse.php");
include_once(__DIR__."/structures/Service.php");
include_once(__DIR__."/structures/SessionType.php");
include_once(__DIR__."/structures/ShoppingCart.php");
include_once(__DIR__."/structures/Site.php");
include_once(__DIR__."/structures/Size.php");
include_once(__DIR__."/structures/SourceCredentials.php");
include_once(__DIR__."/structures/SpaFinderWellnessCard.php");
include_once(__DIR__."/structures/Staff.php");
include_once(__DIR__."/structures/StaffCredentials.php");
include_once(__DIR__."/structures/StaffFilter.php");
include_once(__DIR__."/structures/StatusCode.php");
include_once(__DIR__."/structures/StoredCardInfo.php");
include_once(__DIR__."/structures/Tip.php");
include_once(__DIR__."/structures/TrackDataInfo.php");
include_once(__DIR__."/structures/Unavailability.php");
include_once(__DIR__."/structures/UpdateClientServices.php");
include_once(__DIR__."/structures/UpdateClientServicesRequest.php");
include_once(__DIR__."/structures/UpdateClientServicesResponse.php");
include_once(__DIR__."/structures/UpdateClientServicesResult.php");
include_once(__DIR__."/structures/UpdateClientVisits.php");
include_once(__DIR__."/structures/UpdateClientVisitsRequest.php");
include_once(__DIR__."/structures/UpdateClientVisitsResponse.php");
include_once(__DIR__."/structures/UpdateClientVisitsResult.php");
include_once(__DIR__."/structures/UpdateProducts.php");
include_once(__DIR__."/structures/UpdateProductsRequest.php");
include_once(__DIR__."/structures/UpdateProductsResponse.php");
include_once(__DIR__."/structures/UpdateProductsResult.php");
include_once(__DIR__."/structures/UpdateServices.php");
include_once(__DIR__."/structures/UpdateServicesRequest.php");
include_once(__DIR__."/structures/UpdateServicesResponse.php");
include_once(__DIR__."/structures/UpdateServicesResult.php");
include_once(__DIR__."/structures/UploadClientDocument.php");
include_once(__DIR__."/structures/UploadClientDocumentRequest.php");
include_once(__DIR__."/structures/UploadClientDocumentResponse.php");
include_once(__DIR__."/structures/UploadClientDocumentResult.php");
include_once(__DIR__."/structures/UserCredentials.php");
include_once(__DIR__."/structures/ValidateLogin.php");
include_once(__DIR__."/structures/ValidateLoginRequest.php");
include_once(__DIR__."/structures/ValidateLoginResponse.php");
include_once(__DIR__."/structures/ValidateLoginResult.php");
include_once(__DIR__."/structures/Visit.php");
include_once(__DIR__."/structures/WaitlistEntry.php");
include_once(__DIR__."/structures/XMLDetailLevel.php");
