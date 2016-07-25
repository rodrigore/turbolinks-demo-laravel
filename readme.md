# Example of using Turbolinks 5 in Laravel

This Laravel 5.2 demo project aims to test [Turbolinks 5](https://github.com/turbolinks/turbolinks).

Turbolinks make the navigation ultra fast using xhr of every request, and also made possible form submission with xhr, with the help of the server, in this case Laravel.

## Demo

The demo only have a few links, showing that every links is an xhr request, with one example of redirection and also show the case of using a form submission (login) using turbolinks.

![Turbolinks](turbolinks.gif?raw=true "Turbolinks")

## How this demo works?

* Use Turbolinks 5, using laravel elixir (only two lines of code)
* Use a Middleware call `FilterIfTurbolinks` (this is the key to use redirection and xhr form submission)
* Optional use a FormRequest call `TurbolinksRequest` that always return a response of a view or html, so you can inject some Request that extends of this Request
* In order to use the redirection, is necessary to set the value of `_turbolinks_location` with the route that or url that is intended to redirect

## Why I made this demo?

I made this demo in order to test Turbolinks, but I never use Turbolinks before.

I saw the video of the [RailsConf 2016 about Turbolinks](https://www.youtube.com/watch?v=SWEts0rlezA) and I believe that would be pretty cool using Laravel and make some mobile application.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
