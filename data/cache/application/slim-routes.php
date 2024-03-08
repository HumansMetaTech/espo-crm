<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/crm/api/v1/Activities/upcoming' => 'route2',
      '/crm/api/v1/Activities' => 'route3',
      '/crm/api/v1/Timeline' => 'route4',
      '/crm/api/v1/Timeline/busyRanges' => 'route5',
      '/crm/api/v1/' => 'route9',
      '/crm/api/v1/App/user' => 'route10',
      '/crm/api/v1/App/about' => 'route12',
      '/crm/api/v1/Metadata' => 'route13',
      '/crm/api/v1/I18n' => 'route14',
      '/crm/api/v1/Settings' => 'route15',
      '/crm/api/v1/Stream' => 'route18',
      '/crm/api/v1/GlobalSearch' => 'route19',
      '/crm/api/v1/Admin/jobs' => 'route30',
      '/crm/api/v1/CurrencyRate' => 'route36',
      '/crm/api/v1/Email/inbox/notReadCounts' => 'route67',
      '/crm/api/v1/Email/insertFieldData' => 'route68',
      '/crm/api/v1/EmailAddress/search' => 'route69',
      '/crm/api/v1/Oidc/authorizationData' => 'route77',
    ),
    'POST' => 
    array (
      '/crm/api/v1/App/destroyAuthToken' => 'route11',
      '/crm/api/v1/Admin/rebuild' => 'route28',
      '/crm/api/v1/Admin/clearCache' => 'route29',
      '/crm/api/v1/Action' => 'route38',
      '/crm/api/v1/MassAction' => 'route39',
      '/crm/api/v1/Export' => 'route42',
      '/crm/api/v1/Import' => 'route45',
      '/crm/api/v1/Import/file' => 'route46',
      '/crm/api/v1/Attachment/fromImageUrl' => 'route55',
      '/crm/api/v1/Email/sendTest' => 'route59',
      '/crm/api/v1/Email/inbox/read' => 'route60',
      '/crm/api/v1/Email/inbox/important' => 'route62',
      '/crm/api/v1/Email/inbox/inTrash' => 'route64',
      '/crm/api/v1/UserSecurity/apiKey/generate' => 'route71',
      '/crm/api/v1/UserSecurity/password/recovery' => 'route73',
      '/crm/api/v1/UserSecurity/password/generate' => 'route74',
      '/crm/api/v1/User/passwordChangeRequest' => 'route75',
      '/crm/api/v1/User/changePasswordByRequest' => 'route76',
      '/crm/api/v1/Oidc/backchannelLogout' => 'route78',
    ),
    'PATCH' => 
    array (
      '/crm/api/v1/Settings' => 'route16',
    ),
    'PUT' => 
    array (
      '/crm/api/v1/Settings' => 'route17',
      '/crm/api/v1/CurrencyRate' => 'route37',
      '/crm/api/v1/Kanban/order' => 'route51',
      '/crm/api/v1/UserSecurity/password' => 'route72',
    ),
    'DELETE' => 
    array (
      '/crm/api/v1/Email/inbox/read' => 'route61',
      '/crm/api/v1/Email/inbox/important' => 'route63',
      '/crm/api/v1/Email/inbox/inTrash' => 'route65',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/crm/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/crm/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/crm/api/v1/Meeting/([^/]+)/attendees()()()()|/crm/api/v1/Call/([^/]+)/attendees()()()()()|/crm/api/v1/([^/]+)/action/([^/]+)()()()()()|/crm/api/v1/([^/]+)/layout/([^/]+)()()()()()()|/crm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()|/crm/api/v1/MassAction/([^/]+)/status()()()()()()()()()|/crm/api/v1/Export/([^/]+)/status()()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route6',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route24',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          9 => 
          array (
            0 => 'route25',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          10 => 
          array (
            0 => 'route31',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route40',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/crm/api/v1/Kanban/([^/]+)|/crm/api/v1/Attachment/file/([^/]+)()|/crm/api/v1/User/([^/]+)/acl()()|/crm/api/v1/([^/]+)/([^/]+)()()|/crm/api/v1/([^/]+)()()()()|/crm/api/v1/([^/]+)/([^/]+)/stream()()()()|/crm/api/v1/([^/]+)/([^/]+)/posts()()()()()|/crm/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route52',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          3 => 
          array (
            0 => 'route53',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route70',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route79',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route80',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          7 => 
          array (
            0 => 'route85',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/crm/api/v1/Campaign/([^/]+)/generateMailMerge|/crm/api/v1/LeadCapture/([^/]+)()|/crm/api/v1/([^/]+)/action/([^/]+)()|/crm/api/v1/Admin/fieldManager/([^/]+)()()()|/crm/api/v1/MassAction/([^/]+)/subscribe()()()()|/crm/api/v1/Export/([^/]+)/subscribe()()()()()|/crm/api/v1/Import/([^/]+)/revert()()()()()()|/crm/api/v1/Import/([^/]+)/removeDuplicates()()()()()()()|/crm/api/v1/Import/([^/]+)/unmarkDuplicates()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route20',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          4 => 
          array (
            0 => 'route22',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          5 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          6 => 
          array (
            0 => 'route41',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route44',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route49',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/crm/api/v1/Import/([^/]+)/exportErrors|/crm/api/v1/Attachment/chunk/([^/]+)()|/crm/api/v1/Attachment/copy/([^/]+)()()|/crm/api/v1/EmailTemplate/([^/]+)/prepare()()()|/crm/api/v1/Email/([^/]+)/attachments/copy()()()()|/crm/api/v1/Email/inbox/folders/([^/]+)()()()()()|/crm/api/v1/([^/]+)()()()()()()|/crm/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route50',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route54',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route58',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route66',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          8 => 
          array (
            0 => 'route81',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          9 => 
          array (
            0 => 'route90',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/crm/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route21',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/crm/api/v1/([^/]+)/action/([^/]+)|/crm/api/v1/([^/]+)/layout/([^/]+)()|/crm/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/crm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/crm/api/v1/([^/]+)/([^/]+)()()()()|/crm/api/v1/([^/]+)/([^/]+)/subscription()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route23',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route26',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route82',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route87',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/crm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/crm/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route83',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/crm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/crm/api/v1/([^/]+)/([^/]+)()|/crm/api/v1/([^/]+)/([^/]+)/subscription()()|/crm/api/v1/([^/]+)/([^/]+)/([^/]+)()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route35',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route84',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route88',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route91',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
  ),
);