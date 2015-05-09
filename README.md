dr-tool-box
===========

These are tools I created because I needed them at the time or was bored. Please feel free to contribute or provide feedback! Or suggest a tool, too!
 
------

## Available Tools
- Peasy Framework: A super easy to use php framework
  - DISCONTINUED
- LoremPixel class, generate images quickly with the [LoremPixel](http://lorempixel.com) service
  - 1st, please note that I did not make the service, just this class
  - I made this class becuase I really like the service and use it quite often
  - Also, I needed some more practice on writing and optimizing OO code
  - I am not a pro OO coder, and would love some feedback on this 
  - **Documentation** at [LoremPixel Docs via djrth.rocks](http://docs.djrth.rocks/lorem-pixel/)

------

## Tests and other utilities
- Unless Otherwise Specified
  - All tests are run from the root of the project (same directory as this file)
  - All config files are in the root of the project
  - Assumption is made that the command is accessible from the CLI
  - (NYI) means "Not Implemented Yet"
  - (OPI) means "Only Partially Implemented"
- PHP Mess Detector
  - config: /tests/ruleset.xml
  - run `phpmd app/ html tests/ruleset.xml --reportfile logs/phpmd.html`
  - [PHP Mess Detector Results](http://mytoolbox.com/logs/phpmd.html)
- APIGen
  - config: apigen.neon
  - run `apigen generate`
  - [Toolbox Documentation](http://mytoolbox.com/docs/)
- pdepend
  - config: none
  - run `pdepend --summary-xml=logs/pdepend.xml app/`
- phpcbf
  - (NYI)
- phpcpd
  - (NYI)
- phpcs
  - (NYI)
- php-cs-fixer
  - (NYI)
- phpunit
  - (OPI)
  - config: phpunit.xml