var title = document.title;
var url   = document.location.href;
var links = document.querySelectorAll('.SocialSharingButtons a');

links.forEach(function(item) {
    item.href = item.href.replace(/___title___/g, encodeURI(title));
    item.href = item.href.replace(/___url___/g  , encodeURI(url));
});