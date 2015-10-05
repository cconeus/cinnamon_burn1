nicksFlicks.controller('MoviesCtrl', function MoviesCtrl($scope, FilmReviewsFactory) {
  $scope.movies = FilmReviewsFactory.movies;
  $scope.FilmReviewFactory = FilmReviewsFactory;
});
