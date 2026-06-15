# Fonts Directory

## How to Add Custom Fonts

### Option 1: Self-Hosted Fonts (Recommended for Performance & Privacy)

1. **Download font files** in WOFF2 and WOFF formats (best browser support)
   - For Montserrat: https://fonts.google.com/specimen/Montserrat
   - Download and extract the web fonts

2. **Place font files here** in this `/fonts/` directory
   - Example: `Montserrat-Regular.woff2`, `Montserrat-Bold.woff2`, etc.

3. **Edit `/scss/fonts.scss`**
   - Uncomment the @font-face blocks
   - Update filenames to match your font files

4. **Purge caches**
   ```bash
   php /var/www/moodle/admin/cli/purge_caches.php
   ```

### Option 2: Google Fonts (Easier but External Dependency)

1. **Edit `/scss/fonts.scss`**
   - Uncomment the Google Fonts @import line at the bottom
   - Or add your own Google Fonts URL

2. **Purge caches**

### Font File Formats Priority

Use in this order for best browser support:
1. **WOFF2** - Best compression, modern browsers
2. **WOFF** - Fallback for older browsers
3. **TTF** - Legacy fallback (larger files)

### Moodle Font URL Syntax

Moodle uses special placeholders that get replaced with proper URLs:
```scss
url([[font:theme|fontfile.woff2]])
```

This automatically resolves to the correct path in your theme's fonts directory.

### Font Weights Reference

- 300 = Light
- 400 = Regular/Normal
- 500 = Medium
- 600 = Semi-Bold
- 700 = Bold

### Already Configured

Your theme already references "Montserrat" in the SCSS variables.
Once you add the font files and enable the @font-face rules, they will be self-hosted.
