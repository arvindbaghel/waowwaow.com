<?php $mixedData=array (
  'ads' => 
  array (
    'Title' => 'Ads View',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          72 => 
          array (
            'Func' => 'AdDescription',
            'Content' => '',
            'Caption' => '_Description',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          73 => 
          array (
            'Func' => 'AdPhotos',
            'Content' => '',
            'Caption' => '_bx_ads_Ad_photos',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          74 => 
          array (
            'Func' => 'ViewComments',
            'Content' => '',
            'Caption' => '_Comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          75 => 
          array (
            'Func' => 'AdInfo',
            'Content' => '',
            'Caption' => '_Info',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          76 => 
          array (
            'Func' => 'AdCustomInfo',
            'Content' => '',
            'Caption' => '_bx_ads_Custom_Values',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          77 => 
          array (
            'Func' => 'ActionList',
            'Content' => '',
            'Caption' => '_Actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          78 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          79 => 
          array (
            'Func' => 'Rate',
            'Content' => '',
            'Caption' => '_Rate',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          80 => 
          array (
            'Func' => 'UserOtherAds',
            'Content' => '',
            'Caption' => '_bx_ads_Users_other_listing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          84 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'location_block\', array(\'ads\', $this->oAds->oCmtsView->getId()));',
            'Caption' => '_Location',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'ads_home' => 
  array (
    'Title' => 'Ads Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          82 => 
          array (
            'Func' => 'featured',
            'Content' => '',
            'Caption' => '_bx_ads_last_featured',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          83 => 
          array (
            'Func' => 'categories',
            'Content' => '',
            'Caption' => '_bx_ads_Categories',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          85 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'homepage_part_block\', array (\'ads\'));',
            'Caption' => '_Map',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          81 => 
          array (
            'Func' => 'last',
            'Content' => '',
            'Caption' => '_bx_ads_last_ads',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'articles_home' => 
  array (
    'Title' => 'Articles Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          96 => 
          array (
            'Func' => 'Latest',
            'Content' => '',
            'Caption' => '_articles_bcaption_latest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          98 => 
          array (
            'Func' => 'Categories',
            'Content' => '',
            'Caption' => '_articles_bcaption_categories',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          99 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_articles_bcaption_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'articles_single' => 
  array (
    'Title' => 'Single Article',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          90 => 
          array (
            'Func' => 'Content',
            'Content' => '',
            'Caption' => '_articles_bcaption_view_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          91 => 
          array (
            'Func' => 'Comment',
            'Content' => '',
            'Caption' => '_articles_bcaption_view_comment',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          92 => 
          array (
            'Func' => 'Action',
            'Content' => '',
            'Caption' => '_articles_bcaption_view_action',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          93 => 
          array (
            'Func' => 'Vote',
            'Content' => '',
            'Caption' => '_articles_bcaption_view_vote',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          94 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'browse_page' => 
  array (
    'Title' => 'All Members',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          35 => 
          array (
            'Func' => 'SearchedMembersBlock',
            'Content' => '',
            'Caption' => '_People',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          34 => 
          array (
            'Func' => 'SettingsBlock',
            'Content' => '',
            'Caption' => '_Browse',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_avatar_main' => 
  array (
    'Title' => 'Avatar',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          101 => 
          array (
            'Func' => 'Wide',
            'Content' => '',
            'Caption' => '_bx_ava_block_wide',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          100 => 
          array (
            'Func' => 'Tight',
            'Content' => '',
            'Caption' => '_bx_ava_block_tight',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_blogs' => 
  array (
    'Title' => 'Blog Post View',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          106 => 
          array (
            'Func' => 'PostView',
            'Content' => '',
            'Caption' => '_Title',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          107 => 
          array (
            'Func' => 'PostComments',
            'Content' => '',
            'Caption' => '_Comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          108 => 
          array (
            'Func' => 'PostOverview',
            'Content' => '',
            'Caption' => '_bx_blog_post_info',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          109 => 
          array (
            'Func' => 'PostRate',
            'Content' => '',
            'Caption' => '_Rate',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          110 => 
          array (
            'Func' => 'PostActions',
            'Content' => '',
            'Caption' => '_Actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          111 => 
          array (
            'Func' => 'PostSocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          112 => 
          array (
            'Func' => 'PostCategories',
            'Content' => '',
            'Caption' => '_bx_blog_Categories',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          113 => 
          array (
            'Func' => 'PostTags',
            'Content' => '',
            'Caption' => '_Tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_blogs_home' => 
  array (
    'Title' => 'Blog Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          115 => 
          array (
            'Func' => 'Latest',
            'Content' => '',
            'Caption' => '_bx_blog_Latest_posts',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          117 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_bx_blog_Calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          116 => 
          array (
            'Func' => 'Top',
            'Content' => '',
            'Caption' => '_bx_blog_Top_blog',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_events_main' => 
  array (
    'Title' => 'Main Events Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          133 => 
          array (
            'Func' => 'UpcomingPhoto',
            'Content' => '',
            'Caption' => '_bx_events_block_upcoming_photo',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          134 => 
          array (
            'Func' => 'UpcomingList',
            'Content' => '',
            'Caption' => '_bx_events_block_upcoming_list',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          135 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'homepage_part_block\', array (\'events\'));',
            'Caption' => '_Map',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          136 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_bx_events_block_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_events_my' => 
  array (
    'Title' => 'My Events Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          139 => 
          array (
            'Func' => 'Owner',
            'Content' => '',
            'Caption' => '_bx_events_block_administration',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          140 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_events_block_user_events',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_events_view' => 
  array (
    'Title' => 'Event View',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          127 => 
          array (
            'Func' => 'Desc',
            'Content' => '',
            'Caption' => '_bx_events_block_desc',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          128 => 
          array (
            'Func' => 'Photos',
            'Content' => '',
            'Caption' => '_bx_events_block_photos',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          129 => 
          array (
            'Func' => 'Videos',
            'Content' => '',
            'Caption' => '_bx_events_block_videos',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          130 => 
          array (
            'Func' => 'Sounds',
            'Content' => '',
            'Caption' => '_bx_events_block_sounds',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          131 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_events_block_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          132 => 
          array (
            'Func' => 'ForumFeed',
            'Content' => '',
            'Caption' => '_sys_block_title_forum_feed',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          119 => 
          array (
            'Func' => 'Info',
            'Content' => '',
            'Caption' => '_bx_events_block_info',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          120 => 
          array (
            'Func' => 'Actions',
            'Content' => '',
            'Caption' => '_bx_events_block_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          121 => 
          array (
            'Func' => 'Rate',
            'Content' => '',
            'Caption' => '_bx_events_block_rate',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          122 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          123 => 
          array (
            'Func' => 'Files',
            'Content' => '',
            'Caption' => '_bx_events_block_files',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          124 => 
          array (
            'Func' => 'Participants',
            'Content' => '',
            'Caption' => '_bx_events_block_participants',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          125 => 
          array (
            'Func' => 'ParticipantsUnconfirmed',
            'Content' => '',
            'Caption' => '_bx_events_block_participants_unconfirmed',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          126 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'location_block\', array(\'events\', $this->aDataEntry[$this->_oDb->_sFieldId]));',
            'Caption' => '_Location',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_files_albums_my' => 
  array (
    'Title' => '',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          168 => 
          array (
            'Func' => 'add',
            'Content' => '',
            'Caption' => '_bx_files_albums_add',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          167 => 
          array (
            'Func' => 'adminShort',
            'Content' => '',
            'Caption' => '_bx_files_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          169 => 
          array (
            'Func' => 'adminFull',
            'Content' => '',
            'Caption' => '_bx_files_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          170 => 
          array (
            'Func' => 'adminFullDisapproved',
            'Content' => '',
            'Caption' => '_bx_files_albums_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          171 => 
          array (
            'Func' => 'edit',
            'Content' => '',
            'Caption' => '_bx_files_album_edit',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          172 => 
          array (
            'Func' => 'delete',
            'Content' => '',
            'Caption' => '_bx_files_album_delete',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          173 => 
          array (
            'Func' => 'organize',
            'Content' => '',
            'Caption' => '_bx_files_album_organize',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          174 => 
          array (
            'Func' => 'addObjects',
            'Content' => '',
            'Caption' => '_bx_files_album_add_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          175 => 
          array (
            'Func' => 'manageObjects',
            'Content' => '',
            'Caption' => '_bx_files_album_manage_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          176 => 
          array (
            'Func' => 'manageObjectsDisapproved',
            'Content' => '',
            'Caption' => '_bx_files_album_manage_objects_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          177 => 
          array (
            'Func' => 'manageObjectsPending',
            'Content' => '',
            'Caption' => '_bx_files_album_manage_objects_pending',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          178 => 
          array (
            'Func' => 'adminAlbumShort',
            'Content' => '',
            'Caption' => '_bx_files_album_main_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          179 => 
          array (
            'Func' => 'albumObjects',
            'Content' => '',
            'Caption' => '_bx_files_album_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          180 => 
          array (
            'Func' => 'my',
            'Content' => '',
            'Caption' => '_bx_files_albums_my',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_files_albums_owner' => 
  array (
    'Title' => 'Files Profile Folders',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          181 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_files_albums_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          182 => 
          array (
            'Func' => 'Favorited',
            'Content' => '',
            'Caption' => '_bx_files_favorited',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_files_album_view' => 
  array (
    'Title' => 'Files View Folder',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          151 => 
          array (
            'Func' => 'Objects',
            'Content' => '',
            'Caption' => '',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          152 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_files_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          153 => 
          array (
            'Func' => 'Author',
            'Content' => '',
            'Caption' => '_bx_files_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_files_home' => 
  array (
    'Title' => 'Files Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          162 => 
          array (
            'Func' => 'Featured',
            'Content' => '',
            'Caption' => '_bx_files_featured',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          163 => 
          array (
            'Func' => 'All',
            'Content' => '',
            'Caption' => '_bx_files_public',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          164 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_Tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          165 => 
          array (
            'Func' => 'Albums',
            'Content' => '',
            'Caption' => '_bx_files_albums',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_files_view' => 
  array (
    'Title' => 'Files View File',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          154 => 
          array (
            'Func' => 'ViewFile',
            'Content' => '',
            'Caption' => '_bx_files_view',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          155 => 
          array (
            'Func' => 'ViewComments',
            'Content' => '',
            'Caption' => '_bx_files_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          156 => 
          array (
            'Func' => 'FileInfo',
            'Content' => '',
            'Caption' => '_bx_files_info',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          157 => 
          array (
            'Func' => 'MainFileInfo',
            'Content' => '',
            'Caption' => '_bx_files_info_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          158 => 
          array (
            'Func' => 'ActionList',
            'Content' => '',
            'Caption' => '_bx_files_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          159 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          160 => 
          array (
            'Func' => 'LastAlbums',
            'Content' => '',
            'Caption' => '_bx_files_albums_latest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          161 => 
          array (
            'Func' => 'RelatedFiles',
            'Content' => '',
            'Caption' => '_bx_files_related',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_groups_main' => 
  array (
    'Title' => 'Groups Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          209 => 
          array (
            'Func' => 'LatestFeaturedGroup',
            'Content' => '',
            'Caption' => '_bx_groups_block_latest_featured_group',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          210 => 
          array (
            'Func' => 'Recent',
            'Content' => '',
            'Caption' => '_bx_groups_block_recent',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          211 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'homepage_part_block\', array (\'groups\'));',
            'Caption' => '_Map',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          212 => 
          array (
            'Func' => 'Categories',
            'Content' => '',
            'Caption' => '_bx_groups_block_categories',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_groups_my' => 
  array (
    'Title' => 'Groups My',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          213 => 
          array (
            'Func' => 'Owner',
            'Content' => '',
            'Caption' => '_bx_groups_block_administration_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          214 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_groups_block_users_groups',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_groups_view' => 
  array (
    'Title' => 'Group View',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          202 => 
          array (
            'Func' => 'Desc',
            'Content' => '',
            'Caption' => '_bx_groups_block_desc',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          203 => 
          array (
            'Func' => 'Photo',
            'Content' => '',
            'Caption' => '_bx_groups_block_photo',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          204 => 
          array (
            'Func' => 'Video',
            'Content' => '',
            'Caption' => '_bx_groups_block_video',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          205 => 
          array (
            'Func' => 'Sound',
            'Content' => '',
            'Caption' => '_bx_groups_block_sound',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          206 => 
          array (
            'Func' => 'Files',
            'Content' => '',
            'Caption' => '_bx_groups_block_files',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          207 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_groups_block_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          208 => 
          array (
            'Func' => 'ForumFeed',
            'Content' => '',
            'Caption' => '_sys_block_title_forum_feed',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          195 => 
          array (
            'Func' => 'Info',
            'Content' => '',
            'Caption' => '_bx_groups_block_info',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          196 => 
          array (
            'Func' => 'Actions',
            'Content' => '',
            'Caption' => '_bx_groups_block_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          197 => 
          array (
            'Func' => 'Rate',
            'Content' => '',
            'Caption' => '_bx_groups_block_rate',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          198 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          199 => 
          array (
            'Func' => 'Fans',
            'Content' => '',
            'Caption' => '_bx_groups_block_fans',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          200 => 
          array (
            'Func' => 'FansUnconfirmed',
            'Content' => '',
            'Caption' => '_bx_groups_block_fans_unconfirmed',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          201 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'location_block\', array(\'groups\', $this->aDataEntry[$this->_oDb->_sFieldId]));',
            'Caption' => '_Location',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_gsearch' => 
  array (
    'Title' => 'Google Search',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          192 => 
          array (
            'Func' => 'SearchForm',
            'Content' => '',
            'Caption' => '_bx_gsearch_box_title_search_form',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          193 => 
          array (
            'Func' => 'SearchResults',
            'Content' => '',
            'Caption' => '_bx_gsearch_box_title_search_results',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_mbp_my_membership' => 
  array (
    'Title' => 'My Membership',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          420 => 
          array (
            'Func' => 'Current',
            'Content' => '',
            'Caption' => '_membership_bcaption_my_status',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          421 => 
          array (
            'Func' => 'Available',
            'Content' => '',
            'Caption' => '_membership_bcaption_levels',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_photos_albums_my' => 
  array (
    'Title' => '',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          256 => 
          array (
            'Func' => 'add',
            'Content' => '',
            'Caption' => '_bx_photos_albums_add',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          255 => 
          array (
            'Func' => 'adminShort',
            'Content' => '',
            'Caption' => '_bx_photos_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          257 => 
          array (
            'Func' => 'adminFull',
            'Content' => '',
            'Caption' => '_bx_photos_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          258 => 
          array (
            'Func' => 'adminFullDisapproved',
            'Content' => '',
            'Caption' => '_bx_photos_albums_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          259 => 
          array (
            'Func' => 'edit',
            'Content' => '',
            'Caption' => '_bx_photos_album_edit',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          260 => 
          array (
            'Func' => 'delete',
            'Content' => '',
            'Caption' => '_bx_photos_album_delete',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          261 => 
          array (
            'Func' => 'organize',
            'Content' => '',
            'Caption' => '_bx_photos_album_organize',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          262 => 
          array (
            'Func' => 'addObjects',
            'Content' => '',
            'Caption' => '_bx_photos_album_add_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          263 => 
          array (
            'Func' => 'manageObjects',
            'Content' => '',
            'Caption' => '_bx_photos_album_manage_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          264 => 
          array (
            'Func' => 'manageObjectsDisapproved',
            'Content' => '',
            'Caption' => '_bx_photos_album_manage_objects_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          265 => 
          array (
            'Func' => 'manageObjectsPending',
            'Content' => '',
            'Caption' => '_bx_photos_album_manage_objects_pending',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          266 => 
          array (
            'Func' => 'adminAlbumShort',
            'Content' => '',
            'Caption' => '_bx_photos_album_main_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          267 => 
          array (
            'Func' => 'albumObjects',
            'Content' => '',
            'Caption' => '_bx_photos_album_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          268 => 
          array (
            'Func' => 'my',
            'Content' => '',
            'Caption' => '_bx_photos_albums_my',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_photos_albums_owner' => 
  array (
    'Title' => 'Photos Profile Albums',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          269 => 
          array (
            'Func' => 'ProfilePhotos',
            'Content' => '',
            'Caption' => '_bx_photos_photo_album_block',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          270 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_photos_albums_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          271 => 
          array (
            'Func' => 'Favorited',
            'Content' => '',
            'Caption' => '_bx_photos_favorited',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_photos_album_view' => 
  array (
    'Title' => 'Photos View Album',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          252 => 
          array (
            'Func' => 'Objects',
            'Content' => '',
            'Caption' => '',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          253 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_photos_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          254 => 
          array (
            'Func' => 'Author',
            'Content' => '',
            'Caption' => '_bx_photos_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_photos_home' => 
  array (
    'Title' => 'Photos Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          248 => 
          array (
            'Func' => 'LatestFile',
            'Content' => '',
            'Caption' => '_bx_photos_latest_file',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          249 => 
          array (
            'Func' => 'All',
            'Content' => '',
            'Caption' => '_bx_photos_public',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          250 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_bx_photos_top_menu_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          246 => 
          array (
            'Func' => 'Albums',
            'Content' => '',
            'Caption' => '_bx_photos_albums',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          251 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_bx_photos_top_menu_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_photos_rate' => 
  array (
    'Title' => 'Photos Rate',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          272 => 
          array (
            'Func' => 'RatedSet',
            'Content' => '',
            'Caption' => '_bx_photos_previous_rated',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          273 => 
          array (
            'Func' => 'RateObject',
            'Content' => '',
            'Caption' => '_bx_photos_rate_header',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_photos_view' => 
  array (
    'Title' => 'Photos View Photo',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          238 => 
          array (
            'Func' => 'ViewFile',
            'Content' => '',
            'Caption' => '_bx_photos_view',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          239 => 
          array (
            'Func' => 'ViewComments',
            'Content' => '',
            'Caption' => '_bx_photos_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          240 => 
          array (
            'Func' => 'FileAuthor',
            'Content' => '',
            'Caption' => '_bx_photos_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          241 => 
          array (
            'Func' => 'MainFileInfo',
            'Content' => '',
            'Caption' => '_bx_photos_info_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          242 => 
          array (
            'Func' => 'ActionList',
            'Content' => '',
            'Caption' => '_bx_photos_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          243 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          244 => 
          array (
            'Func' => 'ViewAlbum',
            'Content' => '',
            'Caption' => '_bx_photos_album_photos_rest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_pmt_cart' => 
  array (
    'Title' => 'Shopping Cart',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 50,
        'Blocks' => 
        array (
          233 => 
          array (
            'Func' => 'Featured',
            'Content' => '',
            'Caption' => '_payment_bcaption_cart_featured',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 50,
        'Blocks' => 
        array (
          234 => 
          array (
            'Func' => 'Common',
            'Content' => '',
            'Caption' => '_payment_bcaption_cart_common',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_pmt_details' => 
  array (
    'Title' => 'Payment Settings',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          237 => 
          array (
            'Func' => 'Details',
            'Content' => '',
            'Caption' => '_payment_bcaption_details',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_pmt_history' => 
  array (
    'Title' => 'Cart History',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          235 => 
          array (
            'Func' => 'History',
            'Content' => '',
            'Caption' => '_payment_bcaption_cart_history',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_pmt_orders' => 
  array (
    'Title' => 'Order Administration',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          236 => 
          array (
            'Func' => 'Orders',
            'Content' => '',
            'Caption' => '_payment_bcaption_processed_orders',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sites_hon' => 
  array (
    'Title' => 'Site HoN Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          309 => 
          array (
            'Func' => 'ViewRate',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_rate',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          308 => 
          array (
            'Func' => 'ViewPreviously',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_previously',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sites_main' => 
  array (
    'Title' => 'Main Sites Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          298 => 
          array (
            'Func' => 'ViewRecent',
            'Content' => '',
            'Caption' => '_bx_sites_caption_public_last_featured',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          299 => 
          array (
            'Func' => 'ViewAll',
            'Content' => '',
            'Caption' => '_bx_sites_caption_public_latest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          295 => 
          array (
            'Func' => 'ViewFeature',
            'Content' => '',
            'Caption' => '_bx_sites_caption_public_feature',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          296 => 
          array (
            'Func' => 'Categories',
            'Content' => '',
            'Caption' => '_bx_sites_caption_categories',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          297 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_bx_sites_caption_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sites_profile' => 
  array (
    'Title' => 'Profile Sites Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          300 => 
          array (
            'Func' => 'Administration',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_administration',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          301 => 
          array (
            'Func' => 'Owner',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_owner_sites',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sites_view' => 
  array (
    'Title' => 'Site View Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          305 => 
          array (
            'Func' => 'ViewImage',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_image',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          306 => 
          array (
            'Func' => 'ViewDescription',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_description',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          307 => 
          array (
            'Func' => 'ViewComments',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          302 => 
          array (
            'Func' => 'ViewInformation',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_information',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          303 => 
          array (
            'Func' => 'ViewActions',
            'Content' => '',
            'Caption' => '_bx_sites_bcaption_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          304 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sounds_albums_my' => 
  array (
    'Title' => '',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          327 => 
          array (
            'Func' => 'add',
            'Content' => '',
            'Caption' => '_bx_sounds_albums_add',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          326 => 
          array (
            'Func' => 'adminShort',
            'Content' => '',
            'Caption' => '_bx_sounds_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          328 => 
          array (
            'Func' => 'adminFull',
            'Content' => '',
            'Caption' => '_bx_sounds_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          329 => 
          array (
            'Func' => 'adminFullDisapproved',
            'Content' => '',
            'Caption' => '_bx_sounds_albums_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          330 => 
          array (
            'Func' => 'edit',
            'Content' => '',
            'Caption' => '_bx_sounds_album_edit',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          331 => 
          array (
            'Func' => 'delete',
            'Content' => '',
            'Caption' => '_bx_sounds_album_delete',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          332 => 
          array (
            'Func' => 'organize',
            'Content' => '',
            'Caption' => '_bx_sounds_album_organize',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          333 => 
          array (
            'Func' => 'addObjects',
            'Content' => '',
            'Caption' => '_bx_sounds_album_add_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          334 => 
          array (
            'Func' => 'manageObjects',
            'Content' => '',
            'Caption' => '_bx_sounds_album_manage_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          335 => 
          array (
            'Func' => 'manageObjectsDisapproved',
            'Content' => '',
            'Caption' => '_bx_sounds_album_manage_objects_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          336 => 
          array (
            'Func' => 'manageObjectsNotProcessed',
            'Content' => '',
            'Caption' => '_bx_sounds_album_manage_objects_not_processed',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          337 => 
          array (
            'Func' => 'manageObjectsFailed',
            'Content' => '',
            'Caption' => '_bx_sounds_album_manage_objects_failed',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          338 => 
          array (
            'Func' => 'adminAlbumShort',
            'Content' => '',
            'Caption' => '_bx_sounds_album_main_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          339 => 
          array (
            'Func' => 'albumObjects',
            'Content' => '',
            'Caption' => '_bx_sounds_album_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          340 => 
          array (
            'Func' => 'my',
            'Content' => '',
            'Caption' => '_bx_sounds_albums_my',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sounds_albums_owner' => 
  array (
    'Title' => 'Sounds Profile Albums',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          341 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_sounds_albums_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          342 => 
          array (
            'Func' => 'Favorited',
            'Content' => '',
            'Caption' => '_bx_sounds_favorited',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sounds_album_view' => 
  array (
    'Title' => 'Sounds View Album',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          310 => 
          array (
            'Func' => 'Objects',
            'Content' => '',
            'Caption' => '',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          311 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_sounds_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          312 => 
          array (
            'Func' => 'Author',
            'Content' => '',
            'Caption' => '_bx_sounds_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sounds_home' => 
  array (
    'Title' => 'Sounds Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          322 => 
          array (
            'Func' => 'Special',
            'Content' => '',
            'Caption' => '_bx_sounds_special',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          323 => 
          array (
            'Func' => 'All',
            'Content' => '',
            'Caption' => '_bx_sounds_public',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          324 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_bx_sounds_top_menu_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          321 => 
          array (
            'Func' => 'Albums',
            'Content' => '',
            'Caption' => '_bx_sounds_albums',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          325 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_bx_sounds_top_menu_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sounds_rate' => 
  array (
    'Title' => 'Sounds Rate',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          343 => 
          array (
            'Func' => 'RatedSet',
            'Content' => '',
            'Caption' => '_bx_sounds_previous_rated',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          344 => 
          array (
            'Func' => 'RateObject',
            'Content' => '',
            'Caption' => '_bx_sounds_rate_header',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_sounds_view' => 
  array (
    'Title' => 'Sounds Listen Sound',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          313 => 
          array (
            'Func' => 'ViewFile',
            'Content' => '',
            'Caption' => '_bx_sounds_view',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          314 => 
          array (
            'Func' => 'ViewComments',
            'Content' => '',
            'Caption' => '_bx_sounds_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          315 => 
          array (
            'Func' => 'FileAuthor',
            'Content' => '',
            'Caption' => '_bx_sounds_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          316 => 
          array (
            'Func' => 'MainFileInfo',
            'Content' => '',
            'Caption' => '_bx_sounds_info_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          317 => 
          array (
            'Func' => 'ActionList',
            'Content' => '',
            'Caption' => '_bx_sounds_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          318 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          319 => 
          array (
            'Func' => 'ViewAlbum',
            'Content' => '',
            'Caption' => '_bx_sounds_album_sounds_rest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_store_main' => 
  array (
    'Title' => 'Store Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          362 => 
          array (
            'Func' => 'LatestFeaturedProduct',
            'Content' => '',
            'Caption' => '_bx_store_block_latest_featured_product',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          363 => 
          array (
            'Func' => 'Recent',
            'Content' => '',
            'Caption' => '_bx_store_block_recent',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          364 => 
          array (
            'Func' => 'Categories',
            'Content' => '',
            'Caption' => '_bx_store_block_categories',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          365 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_bx_store_block_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_store_my' => 
  array (
    'Title' => 'Store My',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          366 => 
          array (
            'Func' => 'Owner',
            'Content' => '',
            'Caption' => '_bx_store_block_administration_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          367 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_store_block_users_products',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_store_view' => 
  array (
    'Title' => 'Store Product View',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          357 => 
          array (
            'Func' => 'Desc',
            'Content' => '',
            'Caption' => '_bx_store_block_desc',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          358 => 
          array (
            'Func' => 'Photo',
            'Content' => '',
            'Caption' => '_bx_store_block_photo',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          359 => 
          array (
            'Func' => 'Video',
            'Content' => '',
            'Caption' => '_bx_store_block_video',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          360 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_store_block_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          361 => 
          array (
            'Func' => 'ForumFeed',
            'Content' => '',
            'Caption' => '_sys_block_title_forum_feed',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          352 => 
          array (
            'Func' => 'Info',
            'Content' => '',
            'Caption' => '_bx_store_block_info',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          353 => 
          array (
            'Func' => 'Actions',
            'Content' => '',
            'Caption' => '_bx_store_block_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          354 => 
          array (
            'Func' => 'Files',
            'Content' => '',
            'Caption' => '_bx_store_block_items',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          355 => 
          array (
            'Func' => 'Rate',
            'Content' => '',
            'Caption' => '_bx_store_block_rate',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          356 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_videos_albums_my' => 
  array (
    'Title' => '',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          394 => 
          array (
            'Func' => 'add',
            'Content' => '',
            'Caption' => '_bx_videos_albums_add',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          393 => 
          array (
            'Func' => 'adminShort',
            'Content' => '',
            'Caption' => '_bx_videos_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          395 => 
          array (
            'Func' => 'adminFull',
            'Content' => '',
            'Caption' => '_bx_videos_albums_admin',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          396 => 
          array (
            'Func' => 'adminFullDisapproved',
            'Content' => '',
            'Caption' => '_bx_videos_albums_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          397 => 
          array (
            'Func' => 'edit',
            'Content' => '',
            'Caption' => '_bx_videos_album_edit',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          398 => 
          array (
            'Func' => 'delete',
            'Content' => '',
            'Caption' => '_bx_videos_album_delete',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          399 => 
          array (
            'Func' => 'organize',
            'Content' => '',
            'Caption' => '_bx_videos_album_organize',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          400 => 
          array (
            'Func' => 'addObjects',
            'Content' => '',
            'Caption' => '_bx_videos_album_add_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          401 => 
          array (
            'Func' => 'manageObjects',
            'Content' => '',
            'Caption' => '_bx_videos_album_manage_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          402 => 
          array (
            'Func' => 'manageObjectsDisapproved',
            'Content' => '',
            'Caption' => '_bx_videos_album_manage_objects_disapproved',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          403 => 
          array (
            'Func' => 'manageObjectsNotProcessed',
            'Content' => '',
            'Caption' => '_bx_videos_album_manage_objects_not_processed',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          404 => 
          array (
            'Func' => 'manageObjectsFailed',
            'Content' => '',
            'Caption' => '_bx_videos_album_manage_objects_failed',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          405 => 
          array (
            'Func' => 'adminAlbumShort',
            'Content' => '',
            'Caption' => '_bx_videos_album_main_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          406 => 
          array (
            'Func' => 'albumObjects',
            'Content' => '',
            'Caption' => '_bx_videos_album_objects',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          407 => 
          array (
            'Func' => 'my',
            'Content' => '',
            'Caption' => '_bx_videos_albums_my',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_videos_albums_owner' => 
  array (
    'Title' => 'Videos Profile Albums',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          408 => 
          array (
            'Func' => 'Browse',
            'Content' => '',
            'Caption' => '_bx_videos_albums_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          409 => 
          array (
            'Func' => 'Favorited',
            'Content' => '',
            'Caption' => '_bx_videos_favorited',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_videos_album_view' => 
  array (
    'Title' => 'Videos View Album',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          376 => 
          array (
            'Func' => 'Objects',
            'Content' => '',
            'Caption' => '',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          377 => 
          array (
            'Func' => 'Comments',
            'Content' => '',
            'Caption' => '_bx_videos_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          378 => 
          array (
            'Func' => 'Author',
            'Content' => '',
            'Caption' => '_bx_videos_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_videos_home' => 
  array (
    'Title' => 'Videos Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          389 => 
          array (
            'Func' => 'LatestFile',
            'Content' => '',
            'Caption' => '_bx_videos_latest_file',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          390 => 
          array (
            'Func' => 'All',
            'Content' => '',
            'Caption' => '_bx_videos_public',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          391 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_bx_videos_top_menu_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          387 => 
          array (
            'Func' => 'Albums',
            'Content' => '',
            'Caption' => '_bx_videos_albums',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          392 => 
          array (
            'Func' => 'Tags',
            'Content' => '',
            'Caption' => '_bx_videos_top_menu_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_videos_rate' => 
  array (
    'Title' => 'Videos Rate',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          410 => 
          array (
            'Func' => 'RatedSet',
            'Content' => '',
            'Caption' => '_bx_videos_previous_rated',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          411 => 
          array (
            'Func' => 'RateObject',
            'Content' => '',
            'Caption' => '_bx_videos_rate_header',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_videos_view' => 
  array (
    'Title' => 'Videos View Video',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          379 => 
          array (
            'Func' => 'ViewFile',
            'Content' => '',
            'Caption' => '_bx_videos_view',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          380 => 
          array (
            'Func' => 'ViewComments',
            'Content' => '',
            'Caption' => '_bx_videos_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          381 => 
          array (
            'Func' => 'FileAuthor',
            'Content' => '',
            'Caption' => '_bx_videos_author',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          382 => 
          array (
            'Func' => 'MainFileInfo',
            'Content' => '',
            'Caption' => '_bx_videos_info_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          383 => 
          array (
            'Func' => 'ActionList',
            'Content' => '',
            'Caption' => '_bx_videos_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          384 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          385 => 
          array (
            'Func' => 'ViewAlbum',
            'Content' => '',
            'Caption' => '_bx_videos_album_videos_rest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_wmap' => 
  array (
    'Title' => 'Map',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          416 => 
          array (
            'Func' => 'Map',
            'Content' => '',
            'Caption' => '_bx_wmap_block_title_block_map',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'bx_wmap_edit' => 
  array (
    'Title' => 'Map Edit',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          417 => 
          array (
            'Func' => 'MapEdit',
            'Content' => '',
            'Caption' => '_bx_wmap_block_title_block_map_edit',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'categ_calendar' => 
  array (
    'Title' => 'Categories Calendar',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          58 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_categ_caption_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          59 => 
          array (
            'Func' => 'CategoriesDate',
            'Content' => '',
            'Caption' => '_categ_caption_day',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'categ_module' => 
  array (
    'Title' => 'Categories Module',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          62 => 
          array (
            'Func' => 'Common',
            'Content' => '',
            'Caption' => '_categ_caption_common',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          63 => 
          array (
            'Func' => 'All',
            'Content' => '',
            'Caption' => '_categ_caption_all',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'categ_search' => 
  array (
    'Title' => 'Categories Search',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          60 => 
          array (
            'Func' => 'Form',
            'Content' => '',
            'Caption' => '_categ_caption_search_form',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 86400,
          ),
          61 => 
          array (
            'Func' => 'Founded',
            'Content' => '',
            'Caption' => '_categ_caption_founded',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'communicator_page' => 
  array (
    'Title' => 'Communicator',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          48 => 
          array (
            'Func' => 'Connections',
            'Content' => '',
            'Caption' => '_sys_cnts_bcpt_connections',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          49 => 
          array (
            'Func' => 'FriendRequests',
            'Content' => '',
            'Caption' => '_sys_cnts_bcpt_friend_requests',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'feedback' => 
  array (
    'Title' => 'Feedback',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          146 => 
          array (
            'Func' => 'Content',
            'Content' => '',
            'Caption' => '_feedback_bcaption_view_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          147 => 
          array (
            'Func' => 'Comment',
            'Content' => '',
            'Caption' => '_feedback_bcaption_view_comment',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          148 => 
          array (
            'Func' => 'Action',
            'Content' => '',
            'Caption' => '_feedback_bcaption_view_action',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          149 => 
          array (
            'Func' => 'Vote',
            'Content' => '',
            'Caption' => '_feedback_bcaption_view_vote',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          150 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'forums_home' => 
  array (
    'Title' => 'Forums Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          191 => 
          array (
            'Func' => 'RecentTopics',
            'Content' => '',
            'Caption' => '_bx_forums_recent_topics',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          189 => 
          array (
            'Func' => 'Search',
            'Content' => '',
            'Caption' => '_bx_forums_quick_search',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          190 => 
          array (
            'Func' => 'ShortIndex',
            'Content' => '',
            'Caption' => '_bx_forums_index',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'forums_index' => 
  array (
    'Title' => 'Forums Index',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          188 => 
          array (
            'Func' => 'FullIndex',
            'Content' => '',
            'Caption' => '_bx_forums_index',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'friends' => 
  array (
    'Title' => 'Friends',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          31 => 
          array (
            'Func' => 'Friends',
            'Content' => '',
            'Caption' => '_Member Friends',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          32 => 
          array (
            'Func' => 'FriendsRequests',
            'Content' => '',
            'Caption' => '_Member Friends Requests',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          33 => 
          array (
            'Func' => 'FriendsMutual',
            'Content' => '',
            'Caption' => '_Member Friends Mutual',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          351 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'spy\', \'get_spy_block_friends\', array($this->iProfileID));',
            'Caption' => '_bx_spy_friends',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'index' => 
  array (
    'Title' => 'Homepage',
    'Width' => '1140px',
    'Columns' => 
    array (
    ),
  ),
  'join' => 
  array (
    'Title' => 'Join Page',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          46 => 
          array (
            'Func' => 'JoinForm',
            'Content' => '',
            'Caption' => '_Join now',
            'Visible' => 'non',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          47 => 
          array (
            'Func' => 'LoginSection',
            'Content' => 'no_join_text',
            'Caption' => '_Login',
            'Visible' => 'non',
            'DesignBox' => 1,
            'Cache' => 86400,
          ),
        ),
      ),
    ),
  ),
  'mail_page' => 
  array (
    'Title' => 'Mail messages',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          36 => 
          array (
            'Func' => 'MailBox',
            'Content' => '',
            'Caption' => '_Mail box',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          37 => 
          array (
            'Func' => 'Contacts',
            'Content' => '',
            'Caption' => '_My contacts',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'mail_page_compose' => 
  array (
    'Title' => 'Mail compose message',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          40 => 
          array (
            'Func' => 'ComposeMessage',
            'Content' => '',
            'Caption' => '_COMPOSE_H',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          41 => 
          array (
            'Func' => 'Contacts',
            'Content' => '',
            'Caption' => '_My contacts',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'mail_page_view' => 
  array (
    'Title' => 'Mail view message',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          38 => 
          array (
            'Func' => 'ViewMessage',
            'Content' => '',
            'Caption' => '_Mail box',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          39 => 
          array (
            'Func' => 'Archives',
            'Content' => '',
            'Caption' => '_Archive',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'member' => 
  array (
    'Title' => 'Account',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          14 => 
          array (
            'Func' => 'FriendRequests',
            'Content' => '',
            'Caption' => '_sys_bcpt_member_friend_requests',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          15 => 
          array (
            'Func' => 'NewMessages',
            'Content' => '',
            'Caption' => '_sys_bcpt_member_new_messages',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          16 => 
          array (
            'Func' => 'AccountControl',
            'Content' => '',
            'Caption' => '_sys_bcpt_member_account_control',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          13 => 
          array (
            'Func' => 'QuickLinks',
            'Content' => '',
            'Caption' => '_Quick Links',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          373 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wall\', \'view_block_account\', array($this->iMember));',
            'Caption' => '_wall_pc_view_account',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'news_home' => 
  array (
    'Title' => 'News Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          228 => 
          array (
            'Func' => 'Latest',
            'Content' => '',
            'Caption' => '_news_bcaption_latest',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          231 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_news_bcaption_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          232 => 
          array (
            'Func' => 'Featured',
            'Content' => '',
            'Caption' => '_news_bcaption_featured',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'news_single' => 
  array (
    'Title' => 'Single News',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          223 => 
          array (
            'Func' => 'Content',
            'Content' => '',
            'Caption' => '_news_bcaption_view_main',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          224 => 
          array (
            'Func' => 'Comment',
            'Content' => '',
            'Caption' => '_news_bcaption_view_comment',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          225 => 
          array (
            'Func' => 'Action',
            'Content' => '',
            'Caption' => '_news_bcaption_view_action',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          226 => 
          array (
            'Func' => 'Vote',
            'Content' => '',
            'Caption' => '_news_bcaption_view_vote',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          227 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'pedit' => 
  array (
    'Title' => 'Profile Edit',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          64 => 
          array (
            'Func' => 'Info',
            'Content' => '',
            'Caption' => '_edit_profile_info',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          65 => 
          array (
            'Func' => 'Privacy',
            'Content' => '',
            'Caption' => '_edit_profile_privacy',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          66 => 
          array (
            'Func' => 'Membership',
            'Content' => '',
            'Caption' => '_edit_profile_membership',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          102 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'avatar\', \'manage_avatars\', array ((int)$_REQUEST[\'ID\']));',
            'Caption' => '_bx_ava_manage_avatars',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          292 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'simple_messenger\', \'get_settings\');',
            'Caption' => '_simple_messenger_bcaption_settings',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'poll_home' => 
  array (
    'Title' => 'Polls home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          282 => 
          array (
            'Func' => 'LatestHome',
            'Content' => '',
            'Caption' => '_bx_poll_latest_public',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          283 => 
          array (
            'Func' => 'FeaturedHome',
            'Content' => '',
            'Caption' => '_bx_poll_featured',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'profile' => 
  array (
    'Title' => 'Profile',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          427 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'fchat\', \'page_compose_block\', array());',
            'Caption' => '_fch_main',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          275 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'photos\', \'profile_photo_block\', array(array(\'PID\' => $this->oProfileGen->_iProfileID)), \'Search\');',
            'Caption' => '_bx_photos_photo_block',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          18 => 
          array (
            'Func' => 'ActionsMenu',
            'Content' => '',
            'Caption' => '_Actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          19 => 
          array (
            'Func' => 'FriendRequest',
            'Content' => '',
            'Caption' => '_FriendRequest',
            'Visible' => 'memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          21 => 
          array (
            'Func' => 'PFBlock',
            'Content' => '21',
            'Caption' => '_FieldCaption_Admin Controls_View',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          22 => 
          array (
            'Func' => 'PFBlock',
            'Content' => '17',
            'Caption' => '_FieldCaption_General Info_View',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          23 => 
          array (
            'Func' => 'RateProfile',
            'Content' => '',
            'Caption' => '_rate profile',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          419 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wmap\', \'location_block\', array(\'profiles\', $this->oProfileGen->_iProfileID));',
            'Caption' => '_Location',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          276 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'photos\', \'get_profile_album_block\', array($this->oProfileGen->_iProfileID), \'Search\');',
            'Caption' => '_bx_photos_photo_album_block',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          20 => 
          array (
            'Func' => 'Description',
            'Content' => '',
            'Caption' => '_Description',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          118 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'custom_rss\', \'gen_custom_rss_block\', array($this->oProfileGen->_iProfileID));',
            'Caption' => '_crss_Custom_Feeds',
            'Visible' => 'non,memb',
            'DesignBox' => 0,
            'Cache' => 0,
          ),
          371 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wall\', \'post_block\', array($this->oProfileGen->_iProfileID));',
            'Caption' => '_wall_pc_post',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          372 => 
          array (
            'Func' => 'PHP',
            'Content' => 'return BxDolService::call(\'wall\', \'view_block\', array($this->oProfileGen->_iProfileID));',
            'Caption' => '_wall_pc_view',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'profile_info' => 
  array (
    'Title' => 'Profile Info',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          28 => 
          array (
            'Func' => 'GeneralInfo',
            'Content' => '',
            'Caption' => '_FieldCaption_General Info_View',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          30 => 
          array (
            'Func' => 'Description',
            'Content' => '',
            'Caption' => '_Description',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          29 => 
          array (
            'Func' => 'AdditionalInfo',
            'Content' => '',
            'Caption' => '_Additional information',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'profile_private' => 
  array (
    'Title' => 'Profile Private',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          67 => 
          array (
            'Func' => 'ActionsMenu',
            'Content' => '',
            'Caption' => '_Actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          68 => 
          array (
            'Func' => 'PrivacyExplain',
            'Content' => '',
            'Caption' => '_sys_profile_private_text_title',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'search' => 
  array (
    'Title' => 'Search Profiles',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          42 => 
          array (
            'Func' => 'Results',
            'Content' => '',
            'Caption' => '_Search result',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          43 => 
          array (
            'Func' => 'SearchForm',
            'Content' => '',
            'Caption' => '_Search profiles',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'search_home' => 
  array (
    'Title' => 'Search Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          44 => 
          array (
            'Func' => 'Keyword',
            'Content' => '',
            'Caption' => '_sys_box_title_search_keyword',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 86400,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          45 => 
          array (
            'Func' => 'People',
            'Content' => '',
            'Caption' => '_sys_box_title_search_people',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'show_poll_info' => 
  array (
    'Title' => 'View poll',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          284 => 
          array (
            'Func' => 'PoolBlock',
            'Content' => '',
            'Caption' => '_bx_poll',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          285 => 
          array (
            'Func' => 'CommentsBlock',
            'Content' => '',
            'Caption' => '_bx_poll_comments',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          286 => 
          array (
            'Func' => 'ActionsBlock',
            'Content' => '',
            'Caption' => '_bx_poll_actions',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          287 => 
          array (
            'Func' => 'OwnerBlock',
            'Content' => '',
            'Caption' => '_bx_poll_owner',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          288 => 
          array (
            'Func' => 'VotingsBlock',
            'Content' => '',
            'Caption' => '_bx_poll_votings',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          289 => 
          array (
            'Func' => 'SocialSharing',
            'Content' => '',
            'Caption' => '_sys_block_title_social_sharing',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'tags_calendar' => 
  array (
    'Title' => 'Tags Search',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          52 => 
          array (
            'Func' => 'Calendar',
            'Content' => '',
            'Caption' => '_tags_calendar',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          53 => 
          array (
            'Func' => 'TagsDate',
            'Content' => '',
            'Caption' => '_Tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'tags_home' => 
  array (
    'Title' => 'Tags Home',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          50 => 
          array (
            'Func' => 'Recent',
            'Content' => '',
            'Caption' => '_tags_recent',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          51 => 
          array (
            'Func' => 'Popular',
            'Content' => '',
            'Caption' => '_popular_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'tags_module' => 
  array (
    'Title' => 'Tags Module',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 28.1,
        'Blocks' => 
        array (
          56 => 
          array (
            'Func' => 'Recent',
            'Content' => '',
            'Caption' => '_tags_recent',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'Width' => 71.9,
        'Blocks' => 
        array (
          57 => 
          array (
            'Func' => 'All',
            'Content' => '',
            'Caption' => '_all_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'tags_search' => 
  array (
    'Title' => 'Tags Calendar',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          54 => 
          array (
            'Func' => 'Form',
            'Content' => '',
            'Caption' => '_tags_search_form',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 86400,
          ),
          55 => 
          array (
            'Func' => 'Founded',
            'Content' => '',
            'Caption' => '_tags_founded_tags',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
  'wall' => 
  array (
    'Title' => 'Wall',
    'Width' => '1140px',
    'Columns' => 
    array (
      1 => 
      array (
        'Width' => 100,
        'Blocks' => 
        array (
          374 => 
          array (
            'Func' => 'Post',
            'Content' => '',
            'Caption' => '_wall_pc_post',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
          375 => 
          array (
            'Func' => 'View',
            'Content' => '',
            'Caption' => '_wall_pc_view',
            'Visible' => 'non,memb',
            'DesignBox' => 1,
            'Cache' => 0,
          ),
        ),
      ),
    ),
  ),
); ?>