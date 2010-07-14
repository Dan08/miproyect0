<?php
/**
 * File containing the ezcAuthenticationTokenFilter class.
 *
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 * @package Authentication
 * @version 1.2.3
 */

/**
 * Filter to authenticate against a server generated token.
 *
 * Some uses for this filter:
 *  - CAPTCHA tests
 *  - security token devices (as used by banks)
 *
 * The following example shows how to create a CAPTCHA test. The example is
 * divided into 2 parts: the initial request (where the user sees the CAPTCHA
 * image and enters the characters he sees in a form) and the follow-up
 * request (after the user submits the form).
 * - on the initial request:
 * <code>
 * // generate a token and save it in the session or in a file/database
 * $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
 * $token  = "";
 * for( $i = 1; $i <= 6 ; $i++ )
 * {
 *     $token .= $pattern{rand( 0, 36 )};
 * }
 * $encryptedToken = sha1( $token );
 *
 * // save the $encryptedToken in the session
 * session_start();
 * $_SESSION['encryptedToken'] = $encryptedToken;
 *
 * // also generate a distorted image which contains the symbols from $token and use it
 * </code>
 *
 * - on the follow-up request:
 * <code>
 * // load the $encryptedToken as it was generated on a previous request
 * session_start();
 * $encryptedToken = isset( $_SESSION['encryptedToken'] ) ? $_SESSION['encryptedToken'] : null;
 *
 * // also load the value entered by the user in response to the CAPTCHA image
 * $captcha = isset( $_POST['captcha'] ) ? $_POST['captcha'] : null;
 *
 * $credentials = new ezcAuthenticationIdCredentials( $captcha );
 * $authentication = new ezcAuthentication( $credentials );
 * $authentication->addFilter( new ezcAuthenticationTokenFilter( $encryptedToken, 'sha1' ) );
 * if ( !$authentication->run() )
 * {
 *     // CAPTCHA was incorrect, so inform the user to try again, eventually
 *     // by generating another token and CAPTCHA image
 * }
 * else
 * {
 *     // CAPTCHA was correct, so let the user send his spam or whatever
 * }
 * </code>
 *
 * @property string $token
 *           The token to check against.
 * @property callback $function
 *           The encryption function to use on the user credentials in order to
 *           compare it with the stored token.
 *
 * @package Authentication
 * @version 1.2.3
 * @mainclass
 */
class ezcAuthenticationTokenFilter extends ezcAuthenticationFilter
{
    /**
     * Token is not the same as the provided one.
     */
    const STATUS_TOKEN_INCORRECT = 1;

    /**
     * Holds the properties of this class.
     *
     * @var array(string=>mixed)
     */
    private $properties = array();

    /**
     * Creates a new object of this class.
     *
     * @param string $token A string value generated by the server
     * @param callback $function The encryption function to use when comparing tokens
     * @param ezcAuthenticationTokenOptions $options Options for this class
     */
    public function __construct( $token, $function, ezcAuthenticationTokenOptions $options = null )
    {
        $this->token = $token;
        $this->function = $function;
        $this->options = ( $options === null ) ? new ezcAuthenticationTokenOptions() : $options;
    }

    /**
     * Sets the property $name to $value.
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the property $name does not exist
     * @throws ezcBaseValueException
     *         if $value is not correct for the property $name
     * @param string $name The name of the property to set
     * @param mixed $value The new value of the property
     * @ignore
     */
    public function __set( $name, $value )
    {
        switch ( $name )
        {
            case 'token':
                if ( is_string( $value ) || is_numeric( $value ) )
                {
                    $this->properties[$name] = $value;
                }
                else
                {
                    throw new ezcBaseValueException( $name, $value, 'string || int' );
                }
                break;

            case 'function':
                if ( is_callable( $value ) )
                {
                    $this->properties[$name] = $value;
                }
                else
                {
                    throw new ezcBaseValueException( $name, $value, 'callback' );
                }
                break;

            default:
                throw new ezcBasePropertyNotFoundException( $name );
        }
    }

    /**
     * Returns the value of the property $name.
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the property $name does not exist
     * @param string $name The name of the property for which to return the value
     * @return mixed
     * @ignore
     */
    public function __get( $name )
    {
        switch ( $name )
        {
            case 'token':
            case 'function':
                return $this->properties[$name];

            default:
                throw new ezcBasePropertyNotFoundException( $name );
        }
    }

    /**
     * Returns true if the property $name is set, otherwise false.
     *
     * @param string $name The name of the property to test if it is set
     * @return bool
     * @ignore
     */
    public function __isset( $name )
    {
        switch ( $name )
        {
            case 'token':
            case 'function':
                return isset( $this->properties[$name] );

            default:
                return false;
        }
    }

    /**
     * Runs the filter and returns a status code when finished.
     *
     * @param ezcAuthenticationCredentials $credentials Authentication credentials
     * @return int
     */
    public function run( $credentials )
    {
        $password = call_user_func( $this->function, $credentials->id );
        if ( $this->token === $password )
        {
            return self::STATUS_OK;
        }
        return self::STATUS_TOKEN_INCORRECT;
    }
}
?>
