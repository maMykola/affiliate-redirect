<?php

/**
 * Return true if campaign with given identifier
 * is allowed.
 *
 * @param  string  $campaign_id
 * @return boolean
 * @author Mykola Martynov
 **/
function isCampaignAllowed($campaign_id)
{
    global $campaigns;

    return !empty($campaigns[$campaign_id]);
}
