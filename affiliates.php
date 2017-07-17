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

/**
 * Return true if referer is allowed for next redirect.
 *
 * @param  string  $campaign_id
 * @param  string  $referer
 * @return boolean
 * @author Mykola Martynov
 **/
function isRefererAllowed($campaign_id, $referer)
{
    global $campaigns;

    if (empty($campaigns[$campaign_id])) {
        return false;
    }

    $host = strtolower(parse_url($referer, PHP_URL_HOST));

    return $host == $campaigns[$campaign_id];
}
