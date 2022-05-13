<?php

$classes = get_body_class();
$current_language_code = apply_filters( 'wpml_current_language', null );
$mobnumb = '';
$threemaId = '';

if ($current_language_code=='fr') {
		$mobnumb = '41799363175';
		$threemaId = 'R4BCBBPZ';
	} else if ($current_language_code=='en') {
		$mobnumb = '41764701661';
		$threemaId = '6HK4KY4M';
	} else if ($current_language_code=='de') {
		$mobnumb = '41799363143';
		$threemaId = 'R4BCBBPZ';
	} else if ($current_language_code=='it') {
		$mobnumb = '41799035739';
		$threemaId = '6HK4KY4M';
	} else if ($current_language_code=='pt-pt') {
		$mobnumb = '41799363143';
		$threemaId = 'J9TC6X3W';
	} else if ($current_language_code=='tr') {
		$mobnumb = '41764123789';
		$threemaId = '6HK4KY4M';
	} else if ($current_language_code=='es') {
		$mobnumb = '41799342134';
		$threemaId = 'TZTPUMXD';
} else if ($current_language_code=='sq') {
		$mobnumb = '41799035739';
		$threemaId = 'J9TC6X3W';
	} else {
		$mobnumb = '41799363175';
		$threemaId = '6HK4KY4M';
}
?>

<section class="subfooter sidebar smallpadding" id="sidebar-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 bloc-1">
				<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 bloc-2">
				<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 bloc-3">
				<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
				<?php endif; ?>
				<!-- ProvenExpert Badge-->
<!-- ProvenExpert ProSeal Widget -->
<noscript>
<a href="https://www.provenexpert.com/de-de/cashflex-multicredit-sarl?utm_source=seals&utm_campaign=proseal&utm_medium=profile&utm_content=2704bccf-92dc-45a5-9350-5c4492aa36ce" target="_blank" title="Customer reviews & experiences for Cashflex MultiCredit Sàrl. " class=""pe-pro-seal-more-infos"-412eJzz9HPyjwAABGYBgQ" >More info</a>
</noscript>
<script src="https://s.provenexpert.net/seals/proseal.js" ></script>
<script id="proSeal">
window.addEventListener('load', function(event) {
window.provenExpert.proSeal({
widgetId: "2704bccf-92dc-45a5-9350-5c4492aa36ce",
language:"en-EN",
bannerColor: "#444444",
textColor: "#FFFFFF",
showReviews: true,
hideDate: false,
hideName: false,
bottom: "86px",
stickyToSide: "right",
googleStars: true,
zIndex: "9999",
})
});
</script>
<!-- ProvenExpert ProSeal Widget -->
			</div>
			<div class="col-lg-3 col-md-6 bloc-4">
				<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
					<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 bloc-5">
				<?php if ( is_active_sidebar( 'footer-sidebar-5' ) ) : ?>
					<?php dynamic_sidebar( 'footer-sidebar-5' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<footer>
    <div class="container">

	<div class="row">

			<div class="col-lg-12">
<!-- 				<?php if ( is_active_sidebar( 'footer-credit' ) ) : ?>
					<?php dynamic_sidebar( 'footer-credit' ); ?>
				<?php endif; ?>
				petit test -->
				<p>	
					<?php _e('According to the law, the granting of consumer credit is prohibited if it leads to over-indebtedness (Art. 3 UWG). Calculation example: Financing CHF 10,000. An effective annual interest rate of 4.5% to 9.9% results in total costs for 12 months of CHF 240 to CHF 520. The final interest rate varies, depending on the situation of each client, from 4.5% to 9.9%. There are no application or additional costs: you only pay the interest on the loan.

<strong>Cashflex MultiCredit Sàrl has been registered as a commercial department of the Canton of Fribourg since April 2007.<em>IDE: CHE-113.592.711</em></strong>. Cashflex MultiCredit Sàrl is a member of the Fédération des Entreprises Romandes', 'multicredit') ?>
				</p>	
			</div>

		</div>

      <div class="row">
        <div class="col-lg-6">
          <p> &copy; <?php echo Date('Y'); ?> | <?php _e('Cashflex MultiCredit Sàrl','multicredit') ?></p>
        </div>
        <!--<div class="col-lg-6 text-right">
          <p></span><a href="https://diabolo.com" class="lightgrey" target="_blank"><?php _e('Website powered by','multicredit') ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diabolo_logo_symbol.svg" class="footericon" alt="">Diabolo.com</a></p>
        </div>-->
      </div>

    </div>
  </footer>


	<div id="sticky-footer" class="hide-on-desktop">
		<div class="row">
			<div class="col-sm-3 footer-tel"><a href="tel:+41263222310"><img src="https://multicredit.ch/wp/wp-content/uploads/icons-tel.svg" alt="tel" width="50px" height="50px"></a></div>
			<div class="col-sm-3 footer-whatsapp"><a href="https://api.whatsapp.com/send?phone=<?php echo $mobnumb; ?>" target="new" rel="nofollow"><img src="https://multicredit.ch/wp/wp-content/uploads/icons-whatsapp.svg" alt="whatsapp" width="50px" height="50px"></a></div>
			<div class="col-sm-3 "><a href="https://threema.id/<?php echo($threemaId); ?>" target="new" rel="nofollow" ><img src="https://multicredit.ch/wp/wp-content/uploads/icons-threema.png" alt="threema" width="45px" height="50px"></a></div>
			<div class="col-sm-3 footer-mail"><a href="mailto:info@multicredit.ch"><img src="https://multicredit.ch/wp/wp-content/uploads/icons-mail.svg" alt="mail" width="50px" height="50px"></a></div>
		</div>
	</div>

  <button id="scrollTopBtn" title="Go to top">&uarr;</button>

  </div> <!-- End #GeneralWrapper -->

<script>

    (function ($) {
        $.each(['show', 'hide'], function (i, ev) {
            var el = $.fn[ev];
            $.fn[ev] = function () {
                this.trigger(ev);
                return el.apply(this, arguments);
            };
        });
    })(jQuery);
    $('#foo').on('show', function() {
        console.log('youpiyaya youpiyeye');
    });
</script>


  <?php wp_footer(); ?>
<?php
/**
 * ProvenExpert (https://www.provenexpert.com)
 *
 * for PHP 5.3 and newer versions
 *
 * Contact : support@provenexpert.com
 */

// API authentication
$yourApiId = '2NmohEQZiWaoiqQB1pmZlAUBlRKp3R3o';
$yourAPIKey = 'ZGWwMJMwLwH2ZGDjBQHkAGH2ZmuwAwL2AzR3ZJLmLmH';

$apiUrl = 'https://www.provenexpert.com/api_rating_v2.json';

// cache options
$errorFile = '/provenexpert_error.txt';
$cacheFile = '/provenexpert_3654b8091901967ecbbfa24f86d7acef.json';
$cachePath = dirname($_SERVER['SCRIPT_FILENAME']) . $cacheFile;
$cachingTime = 3600; // in seconds
$scriptVersion = '1.8';


if (! file_exists($cachePath)) {
    @touch($cachePath, $cachingTime);
    @chmod($cachePath, 0666);
}

// check if user ca write the cache file, otherwise use the system temp directory
if (! is_writable($cachePath)) {
    $cachePath = sys_get_temp_dir() . $cacheFile;

    if (! file_exists($cachePath)) {
        @touch($cachePath, $cachingTime);
        @chmod($cachePath, 0666);
    }
}

if (function_exists('curl_init')) {
    try {
        // check if a cache file exists and its age inside the caching time range
        if (! file_exists($cachePath) || (time() - filemtime($cachePath)) > $cachingTime) {
            // init curl handler
            $curlHandler = curl_init();

            // set curl options
            curl_setopt($curlHandler, CURLOPT_TIMEOUT, 3);
            curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curlHandler, CURLOPT_URL, $apiUrl . '?v=' . $scriptVersion);
            curl_setopt($curlHandler, CURLOPT_USERPWD, $yourApiId . ':' . $yourAPIKey);
            if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')) {
                curl_setopt($curlHandler, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
            }

            // send call to api
            $json = curl_exec($curlHandler);

            if ($json === false) {
                // curl error
                $errorMessage = 'curl error (' . date('c') . ')';
                if (file_exists($cachePath)) {
                    $errorMessage .= PHP_EOL . PHP_EOL . 'last call: ' . date('c', filemtime($cachePath));
                }
                $errorMessage .= PHP_EOL . PHP_EOL . curl_error($curlHandler);
                $errorMessage .= PHP_EOL . PHP_EOL . print_r(curl_version(), true);
                @file_put_contents(dirname($cachePath) . $errorFile, $errorMessage);
                $json = json_encode(array('status' => 'error', 'errors' => array('curl error')));
            }
            curl_close($curlHandler);

            // convert json to array
            $data = json_decode($json, true);

            if (! is_array($data)) {
                // json format is wrong
                $errorMessage = 'json error (' . date('c') . ')' . PHP_EOL . PHP_EOL . $json;
                if (file_exists($cachePath)) {
                    $errorMessage .= PHP_EOL . PHP_EOL . 'last call: ' . date('c', filemtime($cachePath));
                }
                @file_put_contents(dirname($cachePath) . $errorFile, $errorMessage);
                $data = array('status' => 'error', 'errors' => array('json error'));
                $json = json_encode($data);
            }

            if ($data['status'] == 'success') {
                if (is_writable($cachePath)) {
                    // save data in cache file
                    @file_put_contents($cachePath, $json);
                } else {
                    echo('<!-- file access error [v' . $scriptVersion . '] -->');
                }
            } elseif(! in_array('wrongPlan', $data['errors'])) {

                if (file_exists($cachePath)) {
                    // it used the old data
                    $tmp = json_decode(file_get_contents($cachePath), true);

                    if (is_array($tmp)) {
                        $data = $tmp;
                        touch($cachePath, time() - round($cachingTime / 10));
                        echo('<!-- from cache because errors [v' . $scriptVersion . '] -->');
                    }
                } else {
                    echo('<!-- no caching -->');
                }
            }
        } else {
            // get data from cache file
            $infoTime = $cachingTime;
            if (file_exists($cachePath)) {
                $infoTime = ($cachingTime - (time() - filemtime($cachePath))) . '/' . $infoTime;
            }
            echo('<!-- from cache (' . $infoTime . ') -->');
            $data = json_decode(file_get_contents($cachePath), true);
        }

        // print aggregate rating html
        if ($data['status'] == 'success') {
            echo($data['aggregateRating']);
        } else {
            // sets the file as outdated
            @touch($cachePath, $cachingTime);

            $errorMessage = 'response error';
            if (isset($data['errors']) && is_array($data['errors'])) {
                $errorMessage .= ' (' . implode(', ', $data['errors']) . ')';
            }
            $errorMessage .= ' [v' . $scriptVersion . ']';

            echo('<!-- ' . $errorMessage . ' -->');
        }
    } catch (Exception $e) {
        $errorMessage = 'exception' . PHP_EOL . PHP_EOL . $e->__toString();
        @file_put_contents(dirname($cachePath) . $errorFile, $errorMessage);
        echo('<!-- exception error [v' . $scriptVersion . '] -->');
    }
} else {
    echo('<!-- no curl package installed [v' . $scriptVersion . '] -->');
}

?>

</body>
</html>