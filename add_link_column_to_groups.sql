-- Add link column to groups table
-- Run this SQL directly in your database (phpMyAdmin or MySQL command line)

-- Step 1: Add the link column
ALTER TABLE `groups` 
ADD COLUMN `link` VARCHAR(255) NULL AFTER `title`;

-- Step 2: Mark the migration as run (optional - so Laravel knows it's been executed)
-- First, find the highest batch number:
-- SELECT MAX(batch) FROM migrations;
-- Then insert with that batch number + 1 (replace X with the number you got):
-- INSERT INTO `migrations` (`migration`, `batch`) 
-- VALUES ('2025_01_15_000000_add_link_to_groups_table', X);

