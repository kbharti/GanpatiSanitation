'use strict';

angular.module('example366', ['ngAnimate', 'ngTouch'])
  .controller('MainCtrl', function ($scope) {

    // Set of Photos
    $scope.photos = [
       { src: 'Images/inaugration/1.jpg', desc: 'Image 01' },
       { src: 'Images/inaugration/2.jpg', desc: 'Image 02' },
       { src: 'Images/inaugration/3.jpg', desc: 'Image 03' },
       { src: 'Images/inaugration/4.jpg', desc: 'Image 04' },
       { src: 'Images/inaugration/5.jpg', desc: 'Image 05' },
       { src: 'Images/inaugration/6.jpg', desc: 'Image 06' },
       { src: 'Images/inaugration/7.jpg', desc: 'Image 07' },
       { src: 'Images/inaugration/8.jpg', desc: 'Image 08' },
       { src: 'Images/inaugration/9.jpg', desc: 'Image 09' },
       { src: 'Images/inaugration/10.jpg', desc: 'Image 10' },
       { src: 'Images/inaugration/11.jpg', desc: 'Image 11' },
       { src: 'Images/inaugration/12.jpg', desc: 'Image 12' },
       { src: 'Images/inaugration/13.jpg', desc: 'Image 13' },
       { src: 'Images/inaugration/14.jpg', desc: 'Image 14' },
       { src: 'Images/inaugration/15.jpg', desc: 'Image 15' },
       { src: 'Images/inaugration/16.jpg', desc: 'Image 16' },
       { src: 'Images/inaugration/17.jpg', desc: 'Image 17' },
       { src: 'Images/inaugration/18.jpg', desc: 'Image 18' },
       { src: 'Images/inaugration/19.jpg', desc: 'Image 19' },
       { src: 'Images/inaugration/20.jpg', desc: 'Image 20' },
       { src: 'Images/inaugration/21.jpg', desc: 'Image 21' }
    ];

    // initial image index
    $scope._Index = 0;

    // if a current image is the same as requested image
    $scope.isActive = function (index) {
        return $scope._Index === index;
    };

    // show prev image
    $scope.showPrev = function () {
        $scope._Index = ($scope._Index > 0) ? --$scope._Index : $scope.photos.length - 1;
    };

    // show next image
    $scope.showNext = function () {
        $scope._Index = ($scope._Index < $scope.photos.length - 1) ? ++$scope._Index : 0;
    };

    // show a certain image
    $scope.showPhoto = function (index) {
        $scope._Index = index;
    };
});
