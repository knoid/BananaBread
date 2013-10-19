var constants =  {
    IFRAME_API_URL: '//www.youtube.com/iframe_api',
    GOOGLE_APIS_CLIENT_URL: 'https://apis.google.com/js/client.js?onload=',
    GOOGLE_APIS_CLIENT_CALLBACK: 'onClientLoad',
    OAUTH2_CLIENT_ID: '265230816115.apps.googleusercontent.com',
    OAUTH2_SCOPES: 'https://www.googleapis.com/auth/youtube',
    OAUTH2_REVOKE_URL: 'https://accounts.google.com/o/oauth2/revoke?token=',
    API_KEY: 'AIzaSyBu-NmenihPr9gG1Kev1qVuFFuP64L6Ggs',
    FREEBASE_API_URL: 'https://www.googleapis.com/freebase/v1/search',
    YOUTUBE_API_SERVICE: 'youtube',
    YOUTUBE_API_VERSION: 'v3',
    FREEBASE_API_MAX_RESULTS: 30,
    FREEBASE_CACHE_MINUTES: 60 * 24,
    YOUTUBE_CACHE_MINUTES: 60 * 24,
    MIN_SCORE: 60,
    MAX_SCORE: 100,
    SCORE_NORMALIZATION_FACTOR: 35,
    YOUTUBE_API_MAX_RESULTS: 50,
    DEFAULT_PROFILE_THUMBNAIL: 'https://s.ytimg.com/yts/img/no_videos_140-vfl5AhOQY.png',
    VIDEO_KIND: 'youtube#video',
    CHANNEL_KIND: 'youtube#channel',
    PLAYLIST_KIND: 'youtube#playlist',
    YOUTUBE_VIDEO_PAGE_URL_PREFIX: 'http://youtu.be/',
    YOUTUBE_CHANNEL_PAGE_URL_PREFIX: 'http://youtube.com/channel/',
    YOUTUBE_PLAYLIST_PAGE_URL_PREFIX: 'http://www.youtube.com/playlist?list=',
    DEFAULT_DISPLAY_NAME: 'Stranger',
	RECOMMENDATION_TYPE: 'recommendation',
	SOCIAL_TYPE: 'social'
  };
});


$(function() {
    var youtube = function(options) {
      function makeCacheKey(service, params) {
        return service + JSON.stringify(params);
      }

      options.path = [constants.YOUTUBE_API_SERVICE, constants.YOUTUBE_API_VERSION, options.service].join('/');

      var cacheKey = makeCacheKey(options.service, options.params);
      var results = lscache.get(cacheKey);

      if (options.method == 'GET' && results) {
        setTimeout(function() {
          options.callback(results)
        }, 1);
      } else {
        // gapi.client.request will "helpfully" try to invoke options.callback for us automatically...
        var callback = options.callback;
        delete options.callback;

        var cacheTimeout = constants.YOUTUBE_CACHE_MINUTES;
        if ('cacheTimeoutMinutes' in options) {
          cacheTimeout = options.cacheTimeoutMinutes;
        }

        var request = gapi.client.request(options);
        request.execute(function(results) {
          if (options.method == 'GET' && results && !('error' in results)) {
            lscache.set(cacheKey, results, cacheTimeout);
          }

          callback(results);
        });
      }
    };

    
});