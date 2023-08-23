#!/bin/bash
set -e  # Exit immediately if any command fails

# Set the directory containing user/pages
pages_directory="/user/pages"

# Move to the pages directory
cd "$pages_directory"

# Add changes, commit, and push
git add .
read -p "Enter Commit Message: " commit_message
git commit -m "$commit_message"
read -p "Enter Branch Name (Leave Blank For Main): " branch_name

# If branch name is blank, default to "main"
if [ -z "$branch_name" ]; then
    branch_name="main"
fi

git push origin "$branch_name"

# Return to the original directory
cd ..
