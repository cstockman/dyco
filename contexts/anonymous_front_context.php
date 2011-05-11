$context = new stdClass;
$context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
$context->api_version = 3;
$context->name = 'anonymous_front';
$context->description = 'Anonymous home page blocks';
$context->tag = 'Donor Rally';
$context->conditions = array(
  'path' => array(
    'values' => array(
      '<front>' => '<front>',
    ),
  ),
  'user' => array(
    'values' => array(
      'anonymous user' => 'anonymous user',
    ),
  ),
);
$context->reactions = array();
$context->condition_mode = 1;

// Translatables
// Included for use with string extractors like potx.
t('Anonymous home page blocks');
t('Donor Rally');
