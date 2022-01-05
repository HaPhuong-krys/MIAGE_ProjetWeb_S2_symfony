<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.1@e927fc2410c8723d053b8032e591cdff76587cdb',
  'doctrine/dbal' => '3.2.0@5d54f63541d7bed1156cb5c9b79274ced61890e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.4@f6191c50600bad1c0195638413f53aee6158b909',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.4@cccb2e2fdfed2969afb3d65c5ea82bafdefbe1a7',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpstan/phpdoc-parser' => '1.2.0@dbc093d7af60eff5cd575d2ed761b15ed40bd08e',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '2.0.1@84b159194ecfd7eaa472280213976e96415433f7',
  'psr/log' => '3.0.0@fe5ea303b0887d5caefd3d431c3e61ad47037001',
  'sensio/framework-extra-bundle' => 'v6.2.5@812b11b75298577984f90758aeb7bdc8ecd22c20',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v6.0.1@98cc78b2fd6f00191596bc91f72d7301e8ac88dd',
  'symfony/cache' => 'v6.0.2@41bdcb2d067c68f338b0cfd46a86abd8309b4153',
  'symfony/cache-contracts' => 'v3.0.0@2f7463f156cf9c665d9317e21a809c3bbff5754e',
  'symfony/config' => 'v6.0.2@990e6d603da7b9556645e5689c7b082f564790e7',
  'symfony/console' => 'v6.0.2@dd434fa8d69325e5d210f63070014d889511fcb3',
  'symfony/dependency-injection' => 'v6.0.2@a9346ef44ea8a7b60f1f1edc8d802ffb91baa6a8',
  'symfony/deprecation-contracts' => 'v3.0.0@c726b64c1ccfe2896cb7df2e1331c357ad1c8ced',
  'symfony/doctrine-bridge' => 'v6.0.2@edc5491594d2f69d5704118d255c6f597167813d',
  'symfony/dotenv' => 'v6.0.2@5c43c5515e549a8c2c426be36d40f47daf196968',
  'symfony/error-handler' => 'v6.0.2@3e677f0c14a529bc542025c96cfa9638227b4cc6',
  'symfony/event-dispatcher' => 'v6.0.2@7093f25359e2750bfe86842c80c4e4a6a852d05c',
  'symfony/event-dispatcher-contracts' => 'v3.0.0@aa5422287b75594b90ee9cd807caf8f0df491385',
  'symfony/expression-language' => 'v6.0.1@a7da7f58a99007971b0d45d00bc1f6804300d001',
  'symfony/filesystem' => 'v6.0.0@52b3c9cce673b014915445a432339f282e002ce6',
  'symfony/finder' => 'v6.0.2@03d2833e677d48317cac852f9c0287fb048c3c5c',
  'symfony/flex' => 'v2.0.1@3dbfa5c4e3308fd9def9a2006a20fa0c272a30a2',
  'symfony/form' => 'v6.0.2@07f444b02feec6676b3c67171d8e2503acf52859',
  'symfony/framework-bundle' => 'v6.0.2@d0598be96b193c4c2e5abab56af512a8e10b3540',
  'symfony/http-client' => 'v6.0.2@7f1cbd44590cb0acc6208c1711a52733e9a91663',
  'symfony/http-client-contracts' => 'v3.0.0@265f03fed057044a8e4dc159aa33596d0f48ed3f',
  'symfony/http-foundation' => 'v6.0.2@ac1cd9b84bdea9a3a06cd2127e910afc8b276798',
  'symfony/http-kernel' => 'v6.0.2@00743bc336421a9be4f3e04464969ba8ef3517ad',
  'symfony/intl' => 'v6.0.1@e06b5a14dbfa04d7afce28a86129bc370a229b2a',
  'symfony/mailer' => 'v6.0.2@3e2ea3aa326977907fc435a2b6d406fc46e55005',
  'symfony/mime' => 'v6.0.2@5586487ae45a89355d5515059de48869207112e1',
  'symfony/monolog-bridge' => 'v6.0.1@fcdd5ddb18114457ad53be75540a45d96450a9e6',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v6.0.2@5a6afab6f6b9f29f1dccb46dd7a41280cc9c1ecc',
  'symfony/options-resolver' => 'v6.0.0@be0facf48a42a232d6c0daadd76e4eb5657a4798',
  'symfony/password-hasher' => 'v6.0.2@84a702edf57cdccd25c43b0c80c130a8b3d6c82d',
  'symfony/polyfill-intl-grapheme' => 'v1.24.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v6.0.2@71da2b7f3fdba460fcf61a97c8d3d14bbf3391ad',
  'symfony/property-access' => 'v6.0.2@3f237ffd38a54592181ac62f63c6cabbca00051f',
  'symfony/property-info' => 'v6.0.2@fc23cfd8fe8faa0712a8909f956cf2e46c72f6cf',
  'symfony/proxy-manager-bridge' => 'v6.0.2@9a310804dbf73d5a115412f0f0f8eb14ff3d8cfb',
  'symfony/routing' => 'v6.0.1@362bc14e1187deaef12d1ca0e04bd919580e8e49',
  'symfony/runtime' => 'v6.0.0@7ae279ba1eae28ac3f5d7098bd94f2ead498e458',
  'symfony/security-bundle' => 'v6.0.2@49bdda6e27076084ed7404c87ab23b42ffae6553',
  'symfony/security-core' => 'v6.0.2@5580d791d999ae500367780612c6210f03716b6c',
  'symfony/security-csrf' => 'v6.0.1@b76270dc063af21fa539b2936b0051c6b84cd27a',
  'symfony/security-http' => 'v6.0.2@311c91af9f17ae319477f76874eddbad9377defc',
  'symfony/serializer' => 'v6.0.2@2282e7512a3264ef964cefce0a4a8037cd1044e5',
  'symfony/service-contracts' => 'v3.0.0@36715ebf9fb9db73db0cb24263c79077c6fe8603',
  'symfony/stopwatch' => 'v6.0.0@0e0ed55d1ffdfadd03af180443fbdca9876483b3',
  'symfony/string' => 'v6.0.2@bae261d0c3ac38a1f802b4dfed42094296100631',
  'symfony/translation' => 'v6.0.2@a16c33f93e2fd62d259222aebf792158e9a28a77',
  'symfony/translation-contracts' => 'v3.0.0@1b6ea5a7442af5a12dba3dbd6d71034b5b234e77',
  'symfony/twig-bridge' => 'v6.0.2@52217ee6ca95a94177f7cfc584d8171784623209',
  'symfony/twig-bundle' => 'v6.0.1@1a31af12592d8b9498830ff0236f7357c41a6030',
  'symfony/validator' => 'v6.0.2@550557c0074d9abf70133c9df20f479e55961553',
  'symfony/var-dumper' => 'v6.0.2@41e46f64084a205459a862751158ce2190bd5cb5',
  'symfony/var-exporter' => 'v6.0.0@32cf62f12d35d441da1ca4a4c0fc1cd5f2a207af',
  'symfony/web-link' => 'v6.0.1@bc5ac011d2670331b8d5fab89253c774568f6877',
  'symfony/yaml' => 'v6.0.2@ed602f38b8636a2ea21af760d2578f3d2f92fc60',
  'twig/extra-bundle' => 'v3.3.7@e0cc9c35a0650006b0da232a3f749cc060c65d3b',
  'twig/twig' => 'v3.3.7@8f168c6ffa3ce76d1786b3cd52275424a3fc675b',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.11@2406855036db1102126125537adb1406f7242fdd',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v6.0.1@3e2f1610a25edc2afc2f5f37cc421049d6bef208',
  'symfony/css-selector' => 'v6.0.2@380f86c1a9830226f42a08b5926f18aed4195f25',
  'symfony/debug-bundle' => 'v6.0.2@c8693af8ee284407590925883515690d681d925e',
  'symfony/dom-crawler' => 'v6.0.2@bf704b7d995c4908d9906d687b9d4cbfecf01b2c',
  'symfony/maker-bundle' => 'v1.36.4@716eee9c8b10b33e682df1b7d80b9061887e9691',
  'symfony/phpunit-bridge' => 'v6.0.0@5d6cc6720085084f504d2482fc4a2f268784006b',
  'symfony/web-profiler-bundle' => 'v6.0.2@5a964f677884a22c6114bc6cfada199a0e4b5c9e',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php73' => '*@',
  'symfony/polyfill-php74' => '*@',
  'symfony/polyfill-php80' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
