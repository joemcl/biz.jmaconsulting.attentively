<?php

/**
 * Attentively.PushMembers API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_attentively_pushmembers() {
  $count = CRM_Attentively_BAO_Attentively::pushMembers();
  if ($count) {
    return civicrm_api3_create_success(ts('Total contacts pushed to Attentive.ly: ' . $count));
  }
  else {
    return civicrm_api3_create_success(ts('No contacts were sent to Attentive.ly!'));
  }
}

