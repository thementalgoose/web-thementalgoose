#!/bin/sh

set -eu

export HUGO_COMMIT_HASH="$(git rev-parse HEAD)"
exec hugo "$@"