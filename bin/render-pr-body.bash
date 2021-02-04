#!/bin/env bash

get_files() {
    git ls-files "$1" --exclude-per-directory=.gitignore --exclude-from=.git/info/exclude --exclude-standard
}

echo "This is an automated pull-request containing the following changes:"

if [[ $(get_files -o) ]]; then
    echo -e "\n### Files added\n"

    for FILE in $(get_files -o); do
        echo "- \`$FILE\`"
    done
fi

if [[ $(get_files -d) ]]; then
    echo -e "\n### Files deleted\n"

    for FILE in $(get_files -d); do
        echo "- \`$FILE\`"
    done
fi

if [[ $(get_files -m) ]]; then
    echo -e "\n### Files modified\n"

    for FILE in $(get_files -m); do
        echo "- \`$FILE\`"
    done
fi
