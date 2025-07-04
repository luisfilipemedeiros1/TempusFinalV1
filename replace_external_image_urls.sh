#!/bin/bash

# Script to Replace External Image URLs in PHP and CSS Files
# This script reads the mapping CSV and performs replacements

echo "====================================="
echo "External Image URL Replacement Script"
echo "====================================="

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

# Check if we're in the right directory
if [ ! -f "EXTERNAL_IMAGES_URL_REPLACEMENT_MAP.csv" ]; then
    echo -e "${RED}Error: EXTERNAL_IMAGES_URL_REPLACEMENT_MAP.csv not found!${NC}"
    echo "Please run this script from the project root directory."
    exit 1
fi

# Backup function
create_backup() {
    local file="$1"
    if [ ! -f "${file}.backup" ]; then
        cp "$file" "${file}.backup"
        echo -e "${GREEN}Created backup: ${file}.backup${NC}"
    fi
}

# Function to perform replacements
replace_in_file() {
    local file="$1"
    local old_url="$2"
    local new_url="$3"
    
    # Create backup
    create_backup "$file"
    
    # Perform replacement
    if grep -q "$old_url" "$file"; then
        sed -i '' "s|$old_url|$new_url|g" "$file"
        echo -e "${GREEN}✓ Replaced in: $file${NC}"
        return 0
    fi
    return 1
}

# Read CSV and process replacements
echo -e "\n${YELLOW}Processing URL replacements...${NC}\n"

# Skip header and comments
tail -n +2 EXTERNAL_IMAGES_URL_REPLACEMENT_MAP.csv | grep -v '^#' | while IFS=',' read -r old_url new_url category description location; do
    # Remove quotes from URLs
    old_url=$(echo "$old_url" | sed 's/"//g')
    new_url=$(echo "$new_url" | sed 's/"//g')
    
    if [ -z "$old_url" ] || [ -z "$new_url" ]; then
        continue
    fi
    
    echo -e "\n${YELLOW}Replacing: $description${NC}"
    echo "Old URL: $old_url"
    echo "New URL: $new_url"
    
    replaced=0
    
    # Search and replace in all PHP files
    find . -name "*.php" -type f -not -path "./wp-content/plugins/*" -not -path "./wp-content/cache/*" | while read file; do
        if replace_in_file "$file" "$old_url" "$new_url"; then
            ((replaced++))
        fi
    done
    
    # Search and replace in CSS files
    find . -name "*.css" -type f -not -path "./wp-content/plugins/*" -not -path "./wp-content/cache/*" | while read file; do
        if replace_in_file "$file" "$old_url" "$new_url"; then
            ((replaced++))
        fi
    done
    
    if [ $replaced -eq 0 ]; then
        echo -e "${YELLOW}⚠ URL not found in any files${NC}"
    fi
done

echo -e "\n====================================="
echo -e "${GREEN}URL Replacement Complete!${NC}"
echo "====================================="
echo ""
echo "Next steps:"
echo "1. Review the changes made"
echo "2. Test the site locally"
echo "3. If everything looks good, commit the changes"
echo ""
echo "To restore original files:"
echo "find . -name '*.backup' -type f | while read backup; do mv \"\$backup\" \"\${backup%.backup}\"; done"
echo ""