## AWS Elastic Beanstalk으로 PHP 서비스 운영하기 데모

- [ ] Clone demo project
- [ ] stack created by eb automagically
- [ ] aws account & config
- [ ] install eb CLI
- [ ] application, environment, config, instance, version(=~artifact)
- [ ] eb create (platform:PHP)
- [ ] eb init
- [ ] eb open
- eb deploy
   - [ ] clean deploy with composer
   - [ ]  eb-activity and life cycle
- eb ssh
   - [ ] non interactive user
   - [ ] sudo -E -u webapp
- [ ] Scale out demo using apache bench
- [ ] Database
   - eb setenv
   - Database connection with PDO example
- [ ] cron and job
   - 아키텍처 (모던 웹 아키텍처 설명)
   - 링크 찾아서 포함
- [ ] How to viw log in eb instance

#### Apache Bench

> `SEE` https://gist.github.com/appkr/b5b494e0ab6dda3b36e83b25007cfaf6 
```bash
$ ab -v 3 -c 5 -n 100 -l http://localhost:8000/

-v: Verborsity
-c 5: Concurrency. 5 requests at a time
-n 100: 100 requests for this test session
-l: Required when content-length of response is dynamic(==chunked encoding)
```
