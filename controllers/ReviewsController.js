nicksFlicks.controller('ReviewsCtrl', function ReviewsCtrl($scope, $stateParams, FilmReviewsFactory, UtilitiesFactory) {
  $scope.movie = UtilitiesFactory.findById(FilmReviewsFactory.movies, $stateParams.movieId)
  $scope.addReview = function() {
    $scope.movie.reviews.push({ name: $scope.reviewName });
    $scope.reviewName = null;
  }
});
