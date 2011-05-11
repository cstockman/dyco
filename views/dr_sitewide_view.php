$context = new stdClass;
$context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
$context->api_version = 3;
$context->name = 'dr_sitewide';
$context->description = 'Sitewide blocks';
$context->tag = 'Donor Rally';
$context->conditions = array(
  'sitewide' => array(
    'values' => array(
      1 => 1,
    ),
  ),
);
$context->reactions = array(
  'block' => array(
    'blocks' => array(
      'dr_base-team_links' => array(
        'module' => 'dr_base',
        'delta' => 'team_links',
        'region' => 'header',
        'weight' => 0,
      ),
    ),
  ),
);
$context->condition_mode = 0;

// Translatables
// Included for use with string extractors like potx.
t('Donor Rally');
t('Sitewide blocks');
