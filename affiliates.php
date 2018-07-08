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
    global $campaigns, $refferals_allowed;

    if (empty($campaigns[$campaign_id])) {
        return false;
    }

    # temporary check only all allowed referrals without campaign restriction
    $host = preg_replace('#(^www\.|\.local$)#', '', strtolower(parse_url($referer, PHP_URL_HOST)));

    return in_array($host, $refferals_allowed);
}
