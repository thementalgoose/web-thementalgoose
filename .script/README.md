## Deployment directory for website

#### `post-receive`

```bash
cd /var/www/jordanfisher.me
find . -name \data -type f -delete
git --work-tree=/var/www/jordanfisher.me/ --git-dir=/var/remote/.git checkout -f # (reset --hard HEAD)
chown -R deploy:deploy /var/www/jordanfisher.me/blog
chown -R deploy:deploy /var/www/jordanfisher.me/projects
chown -R deploy:deploy /var/www/jordanfisher.me/bin
chmod -R 777 /var/www/jordanfisher.me/blog
chmod -R 777 /var/www/jordanfisher.me/projects
chmod -R 777 /var/www/jordanfisher.me/bin
sh /var/www/jordanfisher.me/.script/generatemd.sh
echo Finished executing post-receive
```