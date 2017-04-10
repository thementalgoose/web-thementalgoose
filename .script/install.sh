#!/bin/bash
# Import the SSH deployment key
openssl aes-256-cbc -K $encrypted_35192a256b0e_key -iv $encrypted_35192a256b0e_iv -in .script/github-key.enc -out github-key -d
chmod 600 github-key
mv github-key ~/.ssh/id_rsa
