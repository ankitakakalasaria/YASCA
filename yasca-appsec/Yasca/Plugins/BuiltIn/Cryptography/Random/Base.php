<?
declare(encoding='UTF-8');
namespace Yasca\Plugins\BuiltIn\Cryptography\Random;

trait Base {
	use \Yasca\Plugins\BuiltIn\Base;

	protected function newResult(){
		return (new \Yasca\Result)->setOptions([
    		'severity' => 4,
    		'category' => 'Weak Random'
,	        'description' => <<<'EOT'
The Math.random() pseudo-random number generator does not produce data that can
be called 'random' from a statistical point of view.

Cryptographically-secure random number generators should be used instead,
except in trivial cases where the randomness is not important.
Various implementations are available per platform.

Basic testing showed that a commodity laptop (1.6 GHz, 1 GB RAM), Java JDK 1.6 was able to
perform 10 million executions of Math.random() in approximately 780 milliseconds. In
contrast, using the SecureRandom class with the SHA1PRNG algorithm provided by Sun took
approximately 11,500 milliseconds. While this difference may seem huge, the time per calcualtion
is still very small. Unless your application need huge amounts of random numbers, the
SecureRandom class should not pose a burden.
EOT
,    		'references' => [
				'https://www.owasp.org/index.php?title=Non-cryptographic_pseudo-random_number_generator' =>
					'OWASP: Non-cryptographic Random',
				'http://en.wikipedia.org/wiki//dev/random' =>
					'Wikipedia: /dev/random',
				'http://www.openssl.org/docs/crypto/rand.html' =>
					'RAND',
				'http://docs.oracle.com/javase/7/docs/api/java/security/SecureRandom.html' =>
					'Oracle: SecureRandom',
				'http://docs.oracle.com/cd/B19306_01/appdev.102/b14258/d_crypto.htm#i1000605' =>
					'Oracle: DBMS_CRYPTO',
	        	'http://msdn.microsoft.com/en-us/library/system.security.cryptography.rngcryptoserviceprovider.aspx' =>
    				'MSDN: RNGCryptoServiceProvider',
				'http://developer.android.com/reference/java/security/SecureRandom.html' =>
					'Android: SecureRandom',
				'https://developer.apple.com/library/ios/#documentation/Security/Reference/RandomizationReference/Reference/reference.html#//apple_ref/doc/uid/TP40007281-CH5-SW1' =>
					'Apple: SecRandomCopyBytes',
				'http://msdn.microsoft.com/en-us/library/windows/desktop/aa379942.aspx' =>
					'MSDN: CryptGenRandom',
            ],
	    ]);
    }
}