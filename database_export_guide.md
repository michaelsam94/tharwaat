# Database Export/Import Guide for Thrawaat Website

## Step 1: Export Database from Localhost

### Option A: Using Command Line (Recommended)

1. **Open Command Prompt/Terminal** on your localhost
2. **Navigate to your project directory**:
   ```bash
   cd C:\xampp\htdocs\thrawaat.com
   ```

3. **Run the mysqldump command**:
   ```bash
   mysqldump -u root -p --routines --triggers --single-transaction --lock-tables=false thrawaat_db > thrawaat_export.sql
   ```

   **Replace `thrawaat_db` with your actual database name**

4. **Enter your MySQL password** when prompted
5. **The export file `thrawaat_export.sql` will be created** in your project directory

### Option B: Using phpMyAdmin (Alternative)

1. **Open phpMyAdmin** in your browser (usually `http://localhost/phpmyadmin`)
2. **Select your database** from the left sidebar
3. **Click on "Export" tab**
4. **Choose "Custom" export method**
5. **Select these options**:
   - ✅ Structure
   - ✅ Data
   - ✅ Routines
   - ✅ Triggers
   - ✅ Add DROP TABLE / VIEW / PROCEDURE / FUNCTION / EVENT / TRIGGER statement
6. **Click "Go"** to download the SQL file

## Step 2: Upload to Shared Hosting

1. **Upload the SQL file** to your shared hosting via:
   - **File Manager** in cPanel
   - **FTP client** (FileZilla, WinSCP, etc.)
   - **Upload to your website root directory** or any accessible folder

## Step 3: Import to Shared Hosting Database

### Using phpMyAdmin on Shared Hosting

1. **Log into cPanel**
2. **Open phpMyAdmin**
3. **Select your database** (`ahmedawad_741741`)
4. **Click "Import" tab**
5. **Choose the SQL file** you uploaded
6. **Click "Go"** to import

### Using Command Line (if available)

1. **Connect via SSH** to your shared hosting
2. **Run the import command**:
   ```bash
   mysql -u your_username -p ahmedawad_741741 < thrawaat_export.sql
   ```

## Step 4: Verify Import

1. **Check if tables exist**:
   - `sliders`
   - `sections`
   - `website_contents`
   - `pages`
   - `content_blocks`
   - `media`
   - `admins`

2. **Check if data exists**:
   - Visit your website to see if content loads
   - Check admin panel to see if you can login

## Troubleshooting

### If Export Fails
- Check your database name
- Ensure MySQL is running
- Try using phpMyAdmin instead

### If Import Fails
- Check file size limits
- Try importing in smaller chunks
- Check database permissions

### If Website Still Shows Errors
- Clear browser cache
- Check .env file database settings
- Verify all tables were imported correctly

## Security Note
- Delete the SQL export file after successful import
- Change default admin password
- Update database credentials if needed





