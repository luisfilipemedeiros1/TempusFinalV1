# Task: Add Zoho Forms UTM Tracking Script to footer.php

## Objective
Add the Zoho Forms Advanced Lead tracking script to the footer.php file to enable UTM parameter tracking across all pages.

## Implementation Steps
1. Locate the footer.php file in the theme directory
2. Add the script before the closing </body> tag
3. Ensure proper placement for optimal loading

## Script Purpose
This script tracks UTM parameters (source, medium, campaign, term, content) from URLs and stores them in cookies for 7 days. It then passes these parameters to Zoho Forms embedded on the site, enabling better tracking of lead sources and campaign effectiveness.

## Key Features
- Captures UTM parameters from URL
- Stores parameters in cookies (7-day expiration)
- Automatically detects traffic sources (Google Ads, organic search, referrals)
- Supports both iframe and direct HTML form implementations
- Works with multiple Zoho Forms on the same page