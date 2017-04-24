<?php
/**
 * Website: RESTCodes
 * Created By: Dak Washbrook
 * Date: 4/23/17 7:08 PM
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Vinlock\RESTCodes;


class REST {

    /**
     * 1xx Informational
     */
    const CONTINUE_CODE = 100;
    const SWITCHING_PROTOCOLS = 101;
    const PROCESSING_WEBDAV = 102;

    public static function isInformational($code) {
        return ($code >= 100 && $code <= 199);
    }


    /**
     * 2xx Success
     */
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NON_AUTHORITATIVE_INFORMATION = 203;
    const NO_CONTENT = 204;
    const RESET_CONTENT = 205;
    const PARTIAL_CONTENT = 206;
    const MULTI_STATUS_WEBDAV = 207;
    const ALREADY_REPORTED_WEBDAB = 208;

    public static function isSuccess($code) {
        return ($code >= 200 && $code <= 299);
    }

    /**
     * 3xx Redirection
     */
    const MULTIPLE_CHOICES = 300;
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;
    const USE_PROXY = 305;
    const TEMPORARY_REDIRECT = 307;
    const PERMANENT_REDIRECT = 308;

    public static function isRedirect($code) {
        return ($code >= 300 && $code <= 399);
    }

    /**
     * 4xx Client Error
     */
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const PROXY_AUTHENTICATION_REQUIRED = 407;
    const REQUEST_TIMEOUT = 408;
    const CONFLICT = 409;
    const GONE = 410;
    const LENGTH_REQUIRED = 411;
    const PRECONDITION_FAILED = 412;
    const REQUEST_ENTITY_TOO_LARGE = 413;
    const REQUEST_URI_TOO_LONG = 414;
    const UNSUPPORTED_MEDIA_TYPE = 415;
    const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const EXPECTATION_FAILED = 417;
    const UPGRADE_REQUIRED = 426;
    const PRECONDITION_REQUIRED = 428;
    const TOO_MANY_REQUESTS = 429;
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const NO_RESPONSE_NGINX = 444;
    const RETRY_WITH_MICROSOFT = 449;
    const BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS_MICROSOFT = 450;
    const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    const CLIENT_CLOSED_REQUEST_NGINX = 499;

    public static function isClientError($code) {
        return ($code >= 400 && $code <= 499);
    }

    /**
     * 5xx Server Error
     */
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const BAD_GATEWAY = 502;
    const SERVICE_UNAVAILABLE = 503;
    const GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;
    const VARIANT_ALSO_NEOGTIATES = 506;
    const INSUFFICIENT_STORAGE_WEBDAV = 507;
    const LOOP_DETECTED_WEBDAV = 508;
    const BANDWIDTH_LIMIT_EXCEEDED_APACHE = 509;
    const NOT_EXTENDED = 510;
    const NETWORK_AUTHENTICATION_REQUIRED = 511;
    const NETWORK_READ_TIMEOUT_ERROR = 598;
    const NETWORK_CONNECT_TIMEOUT_ERROR = 599;

    public static function isServerError($code) {
        return ($code >= 500 && $code <= 599);
    }

}