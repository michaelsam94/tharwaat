# Database Update Script

## Update Tharawat to Thrawaat

This script updates all instances of "Tharawat" to "Thrawaat" in the database.

### Usage

Run the following command from your project root directory:

```bash
php update_thrawaat.php
```

### What it updates:

- **website_contents table**: Updates all content_en fields containing "Tharawat"
- **sliders table**: Updates all title_en fields containing "Tharawat"  
- **sections table**: Updates all title_en fields containing "Tharawat"
- **admins table**: Updates email addresses containing "tharawat"

### Requirements

- Laravel application must be properly configured
- Database connection must be working
- Run from project root directory

### Safety

- The script uses `REPLACE()` function which only updates records that actually contain "Tharawat"
- Safe to run multiple times
- Shows count of updated records for verification
