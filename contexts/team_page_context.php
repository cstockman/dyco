$context = new stdClass;
$context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
$context->api_version = 3;
$context->name = 'team_page';
$context->description = 'Team landing pages';
$context->tag = 'Donor Rally';
$context->conditions = array(
  'node' => array(
    'values' => array(
      'team' => 'team',
    ),
    'options' => array(
      'node_form' => '0',
    ),
  ),
);
$context->reactions = array(
  'block' => array(
    'blocks' => array(
      'boxes-team_page_common' => array(
        'module' => 'boxes',
        'delta' => 'team_page_common',
        'region' => 'sidebar_second',
        'weight' => 0,
      ),
      'dr_base-0' => array(
        'module' => 'dr_base',
        'delta' => 0,
        'region' => 'sidebar_second',
        'weight' => 1,
      ),
      'dr_base-1' => array(
        'module' => 'dr_base',
        'delta' => 1,
        'region' => 'sidebar_second',
        'weight' => 2,
      ),
      'dr_base-3' => array(
        'module' => 'dr_base',
        'delta' => 3,
        'region' => 'sidebar_second',
        'weight' => 3,
      ),
      'dr_base-2' => array(
        'module' => 'dr_base',
        'delta' => 2,
        'region' => 'sidebar_second',
        'weight' => 4,
      ),
      'dr_base-7' => array(
        'module' => 'dr_base',
        'delta' => 7,
        'region' => 'sidebar_second',
        'weight' => 5,
      ),
      'views-team_information-block_1' => array(
        'module' => 'views',
        'delta' => 'team_information-block_1',
        'region' => 'content_top',
        'weight' => 0,
      ),
      'views-dr_team_logo-block_1' => array(
        'module' => 'views',
        'delta' => 'dr_team_logo-block_1',
        'region' => 'content_top',
        'weight' => 1,
      ),
    ),
  ),
  'theme' => array(
    'title' => '',
    'subtitle' => '',
    'class' => 'team-page',
  ),
);
$context->condition_mode = 0;

// Translatables
// Included for use with string extractors like potx.
t('Donor Rally');
t('Team landing pages');
