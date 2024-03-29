#!/bin/env bash
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/bash ./git_push.sh "" "" "" "" "minor update"
# Usage example: /bin/bash ./git_push.sh gitlab.com wing328 openapi-petstore-perl main "minor update"

git_host=$1
git_user_id=$2
git_repo_id=$3
git_branch=$4
release_note=$5

if [ "$git_host" = "" ]; then
    git_host="github.com"
    echo "[INFO] No command line input provided. Set \$git_host to $git_host"
fi

if [ "$git_user_id" = "" ]; then
    git_user_id="mieuxvoter"
    echo "[INFO] No command line input provided. Set \$git_user_id to $git_user_id"
fi

if [ "$git_repo_id" = "" ]; then
    git_repo_id="mv-api-client-lib-php"
    echo "[INFO] No command line input provided. Set \$git_repo_id to $git_repo_id"
fi

if [ "$git_branch" = "" ]; then
    git_branch="master"
    echo "[INFO] No command line input provided. Set \$git_branch to $git_branch"
fi

if [ "$release_note" = "" ]; then
    release_note="Minor update"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# We need to somehow either put this into a file or add variables to this mustache template
# I don't won't to use my global git config, and perhaps this deserves its own user?
# We could ensure that that user only has access to the generated lib projects and not all of MV,
# especially considering the usage of the GITHUB_TOKEN below.
# These could just as well be "dummy" values, unless we start signing these commits.
git config user.name domi41
git config user.email dominique.merle.41@gmail.com

# Commits the tracked changes and prepares them to be pushed to a remote repository.
# This won't effect anything if there is nothing staged to commit.
git commit -m "$release_note"

# Sets the new remote
git_remote=$(git remote)
if [ "$git_remote" = "" ]; then # git remote not defined

    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git credential in your environment."
        git remote add origin https://${git_host}/${git_user_id}/${git_repo_id}.git
    else
        git remote add origin https://${git_user_id}:"${GIT_TOKEN}"@${git_host}/${git_user_id}/${git_repo_id}.git
    fi

fi

git pull origin $git_branch

# It's too easy to fail, with force ; just make sure we're targeting a project
# whose name starts with `mv-api-client-lib-`.
if [[ "$git_repo_id" =~ ^mv-api-client-lib- ]]; then
    # Pushes (Forces) the changes in the local repository up to the remote repository
    echo "Git pushing to https://${git_host}/${git_user_id}/${git_repo_id}.git"
    git push --force origin $git_branch
else
    echo "[ERROR] $git_repo_id is not a repo starting with mv-api-client-lib-…"
fi

