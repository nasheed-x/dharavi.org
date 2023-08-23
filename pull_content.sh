#!/bin/bash
set -e  # Exit immediately if any command fails

# Update the main repository
git fetch
git pull origin main  # or 'master' if it's still the default branch name

# Update submodules
git submodule update --init --recursive
git submodule foreach --recursive '
    git fetch;
    git checkout $(git describe --tags $(git rev-list --tags --max-count=1));
    git pull origin $(git rev-parse --abbrev-ref HEAD);
'