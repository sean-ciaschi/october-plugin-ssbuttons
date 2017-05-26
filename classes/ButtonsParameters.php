<?php namespace Martin\SSButtons\Classes;

use Illuminate\Support\Facades\Lang;

class ButtonsParameters {

    public static function getParameters($title, $url) {

        $parameters = [

            'twitter' => [
                'href'  => 'https://twitter.com/share?url=' . urlencode($url) . '&text=' . urlencode($title),
                'title' => 'Share on Twitter',
                'class' => ['ssbuttons' => 'btn btn-twitter', 'ssbuttonsnb' => 'share-btn twitter'],
                'icon'  => 'fa fa-twitter',
                'label' => 'Twitter',
                'image' => 'twitter',
            ],

            'facebook' => [
                'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url),
                'title' => 'Share on Facebook',
                'class' => ['ssbuttons' => 'btn btn-facebook', 'ssbuttonsnb' => 'share-btn facebook'],
                'icon'  => 'fa fa-facebook',
                'label' => 'Facebook',
                'image' => 'facebook',
            ],

            'google+' => [
                'href'  => 'https://plus.google.com/share?url=' . urlencode($url),
                'title' => 'Share on Google+',
                'class' => ['ssbuttons' => 'btn btn-googleplus', 'ssbuttonsnb' => 'share-btn google-plus'],
                'icon'  => 'fa fa-google',
                'label' => 'Google+',
                'image' => 'googleplus',
            ],

            'stumbleupon' => [
                'href'  => 'http://www.stumbleupon.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                'title' => 'Share on StumbleUpon',
                'class' => ['ssbuttons' => 'btn btn-stumbleupon', 'ssbuttonsnb' => 'share-btn stumbleupon'],
                'icon'  => 'fa fa-stumbleupon',
                'label' => 'Stumbleupon',
                'image' => '',
            ],

            'linkedin' => [
                'href'  => 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($url) . '&title=' . urlencode($title),
                'title' => 'Share on LinkedIn',
                'class' => ['ssbuttons' => 'btn btn-linkedin', 'ssbuttonsnb' => 'share-btn linkedin'],
                'icon'  => 'fa fa-linkedin',
                'label' => 'LinkedIn',
                'image' => 'linkedin',
            ],

            'tumblr' => [
                'href'  => 'http://www.tumblr.com/share/link?url=' . urlencode($url) . '&name=' . urlencode($title) . '&description="Check this out!"',
                'title' => 'Post to Tumblr',
                'class' => ['ssbuttons' => 'btn btn-tumblr', 'ssbuttonsnb' => 'share-btn tumblr'],
                'icon'  => 'fa fa-tumblr',
                'label' => 'Tumblr',
                'image' => 'tumblr',
            ],

            'pinterest' => [
                'href'  => 'https://pinterest.com/pin/create/button/?url=' . urlencode($url) . '&description=' . urlencode($title),
                'title' => 'Pin it',
                'class' => ['ssbuttons' => 'btn btn-pinterest', 'ssbuttonsnb' => 'share-btn pinterest'],
                'icon'  => 'fa fa-pinterest',
                'label' => 'Pinterest',
                'image' => 'pinterest',
            ],

            'pocket' => [
                'href'  => 'https://getpocket.com/save?url=' . urlencode($url) . '&title=' . urlencode($title),
                'title' => 'Add to Pocket',
                'class' => ['ssbuttons' => 'btn btn-get-pocket', 'ssbuttonsnb' => 'share-btn get-pocket'],
                'icon'  => 'fa fa-get-pocket',
                'label' => 'Pocket',
                'image' => 'pocket',
            ],

            'reddit' => [
                'href'  => 'https://www.reddit.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                'title' => 'Submit to Reddit',
                'class' => ['ssbuttons' => 'btn btn-reddit', 'ssbuttonsnb' => 'share-btn reddit'],
                'icon'  => 'fa fa-reddit',
                'label' => 'Reddit',
                'image' => 'reddit',
            ],

            'wordpress' => [
                'href'  => 'https://wordpress.com/press-this.php?u=' . urlencode($url) . '&t=' . urlencode($title) . '&s=' . urlencode($title),
                'title' => 'Publish on WordPress',
                'class' => ['ssbuttons' => 'btn btn-wordpress', 'ssbuttonsnb' => 'share-btn wordpress'],
                'icon'  => 'fa fa-wordpress',
                'label' => 'WordPress',
                'image' => 'wordpress',
            ],

            'email' => [
                'href'  => 'mailto:?subject=' . urlencode($title) . '&body=' . urlencode($title) . ':%20' . urlencode($url),
                'title' => 'Email',
                'class' => ['ssbuttons' => 'btn btn-email', 'ssbuttonsnb' => 'share-btn email'],
                'icon'  => 'fa fa-envelope',
                'label' => 'Email',
                'image' => 'email',
            ],

        ];

        return $parameters;

    }

}

?>