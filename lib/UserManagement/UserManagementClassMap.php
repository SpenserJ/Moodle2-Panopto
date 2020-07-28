<?php
/**
 * File for the class which returns the class map definition
 * @package UserManagement
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * Class which returns the class map definition by the static method UserManagementClassMap::classMap()
 * @package UserManagement
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AddMembersToExternalGroup' => 'UserManagementStructAddMembersToExternalGroup',
  'AddMembersToExternalGroupResponse' => 'UserManagementStructAddMembersToExternalGroupResponse',
  'AddMembersToInternalGroup' => 'UserManagementStructAddMembersToInternalGroup',
  'AddMembersToInternalGroupResponse' => 'UserManagementStructAddMembersToInternalGroupResponse',
  'ArrayOfGroup' => 'UserManagementStructArrayOfGroup',
  'ArrayOfUser' => 'UserManagementStructArrayOfUser',
  'ArrayOfguid' => 'UserManagementStructArrayOfguid',
  'ArrayOfstring' => 'UserManagementStructArrayOfstring',
  'AuthenticationInfo' => 'UserManagementStructAuthenticationInfo',
  'CreateExternalGroup' => 'UserManagementStructCreateExternalGroup',
  'CreateExternalGroupResponse' => 'UserManagementStructCreateExternalGroupResponse',
  'CreateInternalGroup' => 'UserManagementStructCreateInternalGroup',
  'CreateInternalGroupResponse' => 'UserManagementStructCreateInternalGroupResponse',
  'CreateUser' => 'UserManagementStructCreateUser',
  'CreateUserResponse' => 'UserManagementStructCreateUserResponse',
  'CreateUsers' => 'UserManagementStructCreateUsers',
  'CreateUsersResponse' => 'UserManagementStructCreateUsersResponse',
  'DeleteGroup' => 'UserManagementStructDeleteGroup',
  'DeleteGroupResponse' => 'UserManagementStructDeleteGroupResponse',
  'DeleteUsers' => 'UserManagementStructDeleteUsers',
  'DeleteUsersResponse' => 'UserManagementStructDeleteUsersResponse',
  'GetGroup' => 'UserManagementStructGetGroup',
  'GetGroupIsPublic' => 'UserManagementStructGetGroupIsPublic',
  'GetGroupIsPublicResponse' => 'UserManagementStructGetGroupIsPublicResponse',
  'GetGroupResponse' => 'UserManagementStructGetGroupResponse',
  'GetGroupsByName' => 'UserManagementStructGetGroupsByName',
  'GetGroupsByNameResponse' => 'UserManagementStructGetGroupsByNameResponse',
  'GetUserByKey' => 'UserManagementStructGetUserByKey',
  'GetUserByKeyResponse' => 'UserManagementStructGetUserByKeyResponse',
  'GetUsers' => 'UserManagementStructGetUsers',
  'GetUsersInGroup' => 'UserManagementStructGetUsersInGroup',
  'GetUsersInGroupResponse' => 'UserManagementStructGetUsersInGroupResponse',
  'GetUsersResponse' => 'UserManagementStructGetUsersResponse',
  'Group' => 'UserManagementStructGroup',
  'GroupType' => 'UserManagementEnumGroupType',
  'ListGroups' => 'UserManagementStructListGroups',
  'ListGroupsResponse' => 'UserManagementStructListGroupsResponse',
  'ListUsers' => 'UserManagementStructListUsers',
  'ListUsersRequest' => 'UserManagementStructListUsersRequest',
  'ListUsersResponse' => 'UserManagementStructListUsersResponse',
  'Pagination' => 'UserManagementStructPagination',
  'RemoveMembersFromExternalGroup' => 'UserManagementStructRemoveMembersFromExternalGroup',
  'RemoveMembersFromExternalGroupResponse' => 'UserManagementStructRemoveMembersFromExternalGroupResponse',
  'RemoveMembersFromInternalGroup' => 'UserManagementStructRemoveMembersFromInternalGroup',
  'RemoveMembersFromInternalGroupResponse' => 'UserManagementStructRemoveMembersFromInternalGroupResponse',
  'ResetPassword' => 'UserManagementStructResetPassword',
  'ResetPasswordResponse' => 'UserManagementStructResetPasswordResponse',
  'SetGroupIsPublic' => 'UserManagementStructSetGroupIsPublic',
  'SetGroupIsPublicResponse' => 'UserManagementStructSetGroupIsPublicResponse',
  'SetSystemRole' => 'UserManagementStructSetSystemRole',
  'SetSystemRoleResponse' => 'UserManagementStructSetSystemRoleResponse',
  'SyncExternalUser' => 'UserManagementStructSyncExternalUser',
  'SyncExternalUserResponse' => 'UserManagementStructSyncExternalUserResponse',
  'SystemRole' => 'UserManagementEnumSystemRole',
  'UnlockAccount' => 'UserManagementStructUnlockAccount',
  'UnlockAccountResponse' => 'UserManagementStructUnlockAccountResponse',
  'UpdateContactInfo' => 'UserManagementStructUpdateContactInfo',
  'UpdateContactInfoResponse' => 'UserManagementStructUpdateContactInfoResponse',
  'UpdatePassword' => 'UserManagementStructUpdatePassword',
  'UpdatePasswordResponse' => 'UserManagementStructUpdatePasswordResponse',
  'UpdateUserBio' => 'UserManagementStructUpdateUserBio',
  'UpdateUserBioResponse' => 'UserManagementStructUpdateUserBioResponse',
  'User' => 'UserManagementStructUser',
  'UserSortField' => 'UserManagementEnumUserSortField',
);
    }
}
