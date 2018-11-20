<?php
define("TOKEN", "E74txG6CSPLiEvnMVYha");                                       // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "https://github.com/smitty52/Hello_world"); // The SSH URL to your repository: "git@github.com:username/repository.git" https://github.com/smitty52/Hello_world
define("DIR", "../frqs.nl/pulls/");                          // The path to your repostiroy; this must begin with a forward slash (/)
define("BRANCH", "refs/heads/master");                                 // The branch route
define("LOGFILE", "deploy.log");                                       // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                         // The path to the git executable
define("AFTER_PULL", "");                                              // A command to execute after successfully pulling