# Laravel Open-AI

OpenAI Gym is a toolkit for developing and comparing reinforcement learning algorithms. It supports teaching agents everything from walking to playing games like Pong or Pinball

### Change your composer.json file
```composer
"require": {
    // ...
    "harjinderbali01/laravelopenai": "*",
    // ...
},
"repositories": [
    {
        "name": "harjinderbali01/laravelopenai",
        "type": "vcs",
        "url": "git@github.com:harjinderbali01/laravelopenai.git"
    }
]
```

## Installation
```bash
 $ composer require harjinderbali01/laravelopenai
```

## Configuration
Make the following changes to the main configuration file located at `config/app.php`
```php
'providers' => [
   ...
   HarjinderBali01\LaravelOpenAi\Providers\LaravelOpenAiServiceProvider::class
],

'aliases' => [
   ...
   'OpenAi' => HarjinderBali01\LaravelOpenAi\Facades\LaravelOpenAiFacade::class
]
```

## Usage

## License
The MIT License (MIT)

Copyright (c) 2023 Anik Goel

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
