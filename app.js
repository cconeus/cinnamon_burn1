var cinnamonBurn = angular.module('cinnamonBurn', ['ui.router']);

cinnamonBurn.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider.state('home', {
    url: "",
    views: {
      'header': {
        templateUrl: 'partials/header.html',
      },
      'body': {
        templateUrl: "partials/home.html",
      },
    }
  });

  $stateProvider.state('clanInfo', {
    url: "/clanInfo",
    views: {
      'header': {
        templateUrl: 'partials/header.html',
      },
      'sideBar': {
        templateUrl: 'partials/sidebar.html',
      },
      'body': {
        templateUrl: "partials/clanInfo.html",
      },
    }
  });

  $stateProvider.state('movies.reviews', {
    url: "/:reviewsId",
    views: {
      'header': {
        templateUrl: 'partials/header.html',
      },
      'sideBar': {
        templateUrl: 'partials/sidebar.html',
      },
      'body': {
        templateUrl: "partials/movies.reviews.html",
      },
    }
  });
});
