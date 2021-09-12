# Iran Banks Info

[![Required PHP Version][ico-php]][link-packagist]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

<h4>
Built with :heart: for Persian developers ;)
</h4>

It's been a hard time for me to find and list all Iran banks logos, IBAN codes and valid card numbers. So I decided to put them together in this package.

If you need to check users IBAN (sheba) Code or card number and find out which bank is his/her account, this is what you need.


### :star: Your Stars Make Us Do More
If you found this package useful, and you want to encourage the maintainer to work on it, just press the star button to declare your willingness.

<a href="https://github.com/morieti/iran_banks_info/stargazers">Stargazers</a>


## <g-emoji class="g-emoji" alias="arrow_down" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2b07.png">⬇️</g-emoji> Installation

You can install the package via composer:

```bash
composer require morieti/iran-banks-info
```

You may also publish banks logo files by adding this in your prject composer.json:
```
"scripts": {
    "post-autoload-dump": "Morieti\\IranBanksInfo\\Config::publishBankImages"
}
```
And then:
```
composer dump-autoload
```
## <g-emoji class="g-emoji" alias="gem" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f48e.png">💎</g-emoji> Usage

You can use global `\Morieti\IranBanksInfo\Config` class to change some configs:

####standardCardNumberSize:
To change standard size of banks card numbers which is 16 by default.

####standardIbanSize:
To change standard size of iban code which is 26 by default. If you don't store 'IR' from beginning of the code, you can set this property to 24.

####baseImagePath:
By default, package will publish banks logos to `public/iran_banks_images` relative to your project's root. You may relocate the pictures, but remember to set the relative path to them by changing this property.

###<b><i>Config class uses the singleton pattern, so you may call it once and for all.</i></b>

## Credits

- [Morteza](https://github.com/morieti)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

--------------------

### :raising_hand: Contributing
If you find an issue or have a better way to do something, feel free to open an issue, or a pull request.
If you use iran-banks-info in your open source project, create a pull request to provide its URL as a sample application in the README.md file.


### :exclamation: Security
If you discover any security-related issues, please email `pouretemadi.morteza@gmail.com` instead of using the issue tracker.

```
A man will never fail unless he stops trying.

Albert einstein
```

[ico-php]: https://img.shields.io/packagist/php-v/morieti/iran-banks-info?color=%238892BF&style=flat-square&logo=php
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/morieti/iran-banks-info.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/morieti/iran-banks-info.svg?style=flat-square
[ico-today-downloads]: https://img.shields.io/packagist/dd/morieti/iran-banks-info.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/morieti/iran-banks-info
[link-downloads]: https://packagist.org/packages/morieti/iran-banks-info/stats
[link-author]: https://github.com/morieti
[link-contributors]: ../../contributors
