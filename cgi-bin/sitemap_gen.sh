#!/bin/sh

# invoke with cron job that calls --
# /home/grnet/public_html/cgi-bin/sitemap_gen.sh

# Regenerate the sitemap
# Move to the directory that contains the Google sitemap generator
cd /home/grnet/public_html/cgi-bin/
echo "Now regenerating sitemap for GregRaven.net."
python sitemap_gen.py --config=/home/grnet/public_html/cgi-bin/grnet_config.xml
